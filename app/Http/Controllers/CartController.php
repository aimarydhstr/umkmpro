<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Wishlist;
use App\Models\Product;
use App\Models\Coupon;
use App\Models\CouponUsed;
use Illuminate\Http\Request;
use Session;
use Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $auth = Auth::user();
        $carts = Cart::with('product', 'product.cart')->where('user_id', $auth->id)->latest()->get();
        $count = Cart::where('user_id', $auth->id)->sum('qty');
        $price = Cart::where('user_id', $auth->id)->sum('price');
        $title = 'Keranjang Saya';
        $coupon = CouponUsed::with('coupon')->where('user_id', $auth->id)->where('is_used', 0)->latest()->first();
        $discount = 0;
        if ($coupon) {
            $discount = $price * ($coupon->coupon->discount / 100);
        }
        $total = $price - $discount;

        return view('cart.index', compact('auth', 'total', 'carts', 'count', 'title', 'price', 'discount', 'coupon'))->with('i');
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
    public function store(Request $request, $slug)
    {
        $request->validate([
            'qty' => 'required',
        ]);

        $auth = Auth::user();
        $product = Product::where('slug', $slug)->first();
        $qty = $request->qty;

        if ($qty == 0) {
            Session::flash('failed', 'Jumlah pembelian tidak boleh kosong!');
            return redirect()->back();
        }

        $price = $product->price - ($product->price * ($product->discount / 100));

        if ($product->qty < $qty) {
            Session::flash('failed', 'Pembelian melebihi stok!');
            return redirect()->back();
        }

        $cart = Cart::create([
            'product_id' => $product->id,
            'user_id' => $auth->id,
            'qty' => $qty,
            'price' => $price * $qty,
        ]);

        if (!$cart) {
            Session::flash('failed', 'Terjadi kesalahan!');
            return redirect()->back();
        }

        Session::flash('success', 'Produk ditambahkan ke keranjang!');
        return redirect()->route('cart');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function storeOne(Request $request, $slug)
    {
        $auth = Auth::user();
        $product = Product::where('slug', $slug)->first();
        $qty = 1;

        if ($qty == 0) {
            Session::flash('failed', 'Jumlah pembelian tidak boleh kosong!');
            return redirect()->back();
        }

        $price = $product->price - ($product->price * ($product->discount / 100));

        if ($product->qty < $qty) {
            Session::flash('failed', 'Pembelian melebihi stok!');
            return redirect()->back();
        }

        $cart = Cart::create([
            'product_id' => $product->id,
            'user_id' => $auth->id,
            'qty' => $qty,
            'price' => $price * $qty,
        ]);

        if (!$cart) {
            Session::flash('failed', 'Terjadi kesalahan!');
            return redirect()->back();
        }

        $delete = Wishlist::where('user_id', $auth->id)->where('product_id', $product->id)->delete();

        if (!$delete) {
            Session::flash('failed', 'Terjadi kesalahan!');
            return redirect()->back();
        }

        Session::flash('success', 'Produk ditambahkan ke keranjang!');
        return redirect()->route('cart');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function storeAll(Request $request)
    {
        $auth = Auth::user();
        $wishlists = Wishlist::with('product')->where('user_id', $auth->id)->get();

        foreach ($wishlists as $wishlist) {
            $product = Product::findOrFail($wishlist->product_id);
            $qty = 1;

            $price = $product->price - ($product->price * ($product->discount / 100));

            $cart = Cart::create([
                'product_id' => $product->id,
                'user_id' => $auth->id,
                'qty' => $qty,
                'price' => $price * $qty,
            ]);

            if (!$cart) {
                Session::flash('failed', 'Terjadi kesalahan!');
                return redirect()->back();
            }
        }

        $delete = Wishlist::where('user_id', $auth->id)->delete();

        if (!$delete) {
            Session::flash('failed', 'Terjadi kesalahan!');
            return redirect()->back();
        }

        Session::flash('success', 'Produk ditambahkan ke keranjang!');
        return redirect()->route('cart');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $cart = Cart::findOrFail($id);
        $product = Product::where('id', $cart->product_id)->first();
        $qty = $cart->qty + 1;
        $price = $product->price - ($product->price * ($product->discount / 100));

        if ($product->qty < $qty) {
            Session::flash('failed', 'Pembelian melebihi stok!');
            return redirect()->back();
        }

        $cart->update([
            'qty' => $qty,
            'price' => $price * $qty,
        ]);

        if (!$cart) {
            Session::flash('failed', 'Terjadi kesalahan!');
            return redirect()->back();
        }

        Session::flash('success', 'Produk ditambahkan dari keranjang!');
        return redirect()->route('cart');
    }


    /**
     * Update the specified resource in storage.
     */
    public function updateDown(Request $request, $id)
    {
        $cart = Cart::findOrFail($id);
        $product = Product::where('id', $cart->product_id)->first();
        $qty = $cart->qty - 1;

        if ($qty == 0) {
            Session::flash('failed', 'Jumlah pembelian tidak boleh kosong!');
            return redirect()->back();
        }
        $price = $product->price - ($product->price * ($product->discount / 100));

        if ($product->qty < $qty) {
            Session::flash('failed', 'Pembelian melebihi stok!');
            return redirect()->back();
        }

        $cart->update([
            'qty' => $qty,
            'price' => $price * $qty,
        ]);

        if (!$cart) {
            Session::flash('failed', 'Terjadi kesalahan!');
            return redirect()->back();
        }

        Session::flash('success', 'Produk dikurangi dari keranjang!');
        return redirect()->route('cart');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $cart = Cart::findOrFail($id)->delete();

        if (!$cart) {
            Session::flash('failed', 'Terdapat kesalahan!');
            return redirect()->back();
        }

        Session::flash('success', 'Produk berhasil dihapus dari keranjang!');
        return redirect()->route('cart');
    }
}
