<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\Cart;
use App\Models\Status;
use App\Models\Order;
use App\Models\Product;
use App\Models\CouponUsed;
use Illuminate\Http\Request;
use Session;
use Auth;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $auth = Auth::user();

        $transactions = Transaction::with('order', 'order.product', 'status', 'user')->latest()->paginate(5);
        $title = 'Manajemen Transaksi';

        return view('transaction.index', compact('transactions', 'auth', 'title'))->with('i');
    }

    public function data(Request $request)
    {
        $search = $request->search;
        $auth = Auth::user();
        $search = str_replace(" ", "%", $search);
        $transactions = Transaction::with('order', 'order.product', 'status', 'user')->where('id', 'like', '%' . $search . '%')->latest()->paginate(5);

        return view('transaction.data', compact('transactions', 'auth'))->with('i')->render();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'pay_image' => 'required|image|mimes:png,jpg,jpeg,svg,webp|max:2048',
        ]);

        $auth = Auth::user();

        $image = $request->file('pay_image');
        $images = date('YmdHi') . $image->getClientOriginalName();
        $image->move(public_path('img/transaction'), $images);

        if (!$image) {
            Session::flash('failed', 'Silahkan upload bukti transfer!');
            return redirect()->back();
        }

        $kode = date('YmdHis');

        $transaction = Transaction::create([
            'id' => $kode,
            'user_id' => $auth->id,
            'coupon_used_id' => $request->coupon_used_id,
            'subtotal' => $request->subtotal,
            'discount' => $request->discount,
            'tax' => 0,
            'total' => $request->total,
            'pay_image' => $images,
            'status_id' => 1,
        ]);

        if ($request->coupon_used_id) {
            $coupon = CouponUsed::where('user_id', $auth->id)->latest()->first()->update(['is_used' => 1]);
        }

        $carts = Cart::where('user_id', $auth->id)->get();

        foreach ($carts as $cart) {
            $order = Order::create([
                'user_id' => $auth->id,
                'product_id' => $cart->product_id,
                'transaction_id' => $transaction->id,
                'qty' => $cart->qty,
                'price' => $cart->price,
            ]);
            $product = Product::findOrFail($cart->product_id);
            $product->update(['qty' => $product->qty - $cart->qty]);
        }


        $cartDelete = Cart::where('user_id', $auth->id)->delete();

        Session::flash('success', 'Transaksi berhasil! Mohon tunggu pesanan diproses');
        return redirect()->route('shop.transaction');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function cancel(Request $request, $id)
    {
        $auth = Auth::user();
        $transaction = Transaction::with('order', 'order.product')->findOrFail($id);
        $transaction->update(['status_id' => 5]);

        foreach ($transaction->order as $order) {
            $product = Product::findOrFail($order->product->id);
            $product->update(['qty' => $product->qty + $order->qty]);
        }


        if ($auth->role_id == 1) {
            Session::flash('success', 'Transaksi berhasil dibatalkan!');
            return redirect()->route('transaction');
        }
        Session::flash('success', 'Transaksi berhasil dibatalkan!');
        return redirect()->route('shop.transaction');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $auth = Auth::user();

        $transaction = Transaction::with('order', 'order.product', 'status')->where('id', $id)->first();
        $statuses = Status::whereNot('id', 5)->get();
        $title = 'Detail Transaksi';

        return view('transaction.show', compact('transaction', 'auth', 'title', 'statuses'))->with('i');
    }

    /**
     * Display the specified resource.
     */
    public function delete($id)
    {
        $transaction = Transaction::with('order', 'order.product', 'status', 'user')->where('id', $id)->first();

        return view('transaction.cancel', compact('transaction'))->with('i')->render();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $auth = Auth::user();
        $status = $request->status_id;

        $transaction = Transaction::findOrFail($id);
        $transaction->update(['status_id' => $status]);

        Session::flash('success', 'Status transaksi berhasil diubah!');
        return redirect()->route('transaction');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaction $transaction)
    {
        //
    }
}
