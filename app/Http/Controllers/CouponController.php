<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use Illuminate\Http\Request;
use Auth;
use Session;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Manajemen Kupon';
        $auth = Auth::user();
        $coupons = Coupon::latest()->paginate(5);

        return view('coupon.index', compact('coupons', 'auth', 'title'))->with('i');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function data(Request $request)
    {
        $search = $request->search;
        $auth = Auth::user();
        $search = str_replace(" ", "%", $search);
        $coupons = Coupon::where('name', 'like', '%' . $search . '%')->latest()->paginate(5);

        return view('coupon.data', compact('coupons', 'auth'))->with('i')->render();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'code' => 'required|unique:coupons',
            'discount' => 'required',
            'started_at' => 'required',
            'finished_at' => 'required',
        ]);

        if ($request->finished_at < $request->started_at) {
            Session::flash('failed', 'Tanggal berakhir kupon harus lebih lama dari tanggal dimulainya!');
            return redirect()->back();
        }

        $coupon = Coupon::create([
            'name' => $request->name,
            'description' => $request->description,
            'code' => $request->code,
            'discount' => $request->discount,
            'started_at' => $request->started_at,
            'finished_at' => $request->finished_at,
            'is_active' => 1,
        ]);

        if (!$coupon) {
            Session::flash('failed', 'Terdapat kesalahan!');
            return redirect()->back();
        }

        Session::flash('success', 'Kupon berhasil dibuat!');
        return redirect()->route('coupon');
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
        $coupon = Coupon::findOrFail($id);

        return view('coupon.edit', compact('coupon'))->with('i')->render();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'code' => 'required',
            'discount' => 'required',
            'started_at' => 'required',
            'finished_at' => 'required',
        ]);

        if ($request->finished_at < $request->started_at) {
            Session::flash('failed', 'Tanggal berakhir kupon harus lebih lama dari tanggal dimulainya!');
            return redirect()->back();
        }

        $coupon = Coupon::findOrFail($id)->update([
            'name' => $request->name,
            'description' => $request->description,
            'code' => $request->code,
            'discount' => $request->discount,
            'started_at' => $request->started_at,
            'finished_at' => $request->finished_at,
        ]);

        if (!$coupon) {
            Session::flash('failed', 'Terdapat kesalahan!');
            return redirect()->back();
        }

        Session::flash('success', 'Kupon berhasil diubah!');
        return redirect()->route('coupon');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function delete($id)
    {
        $coupon = Coupon::findOrFail($id);

        return view('coupon.delete', compact('coupon'))->with('i')->render();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $coupon = Coupon::findOrFail($id)->delete();

        if (!$coupon) {
            Session::flash('failed', 'Terdapat kesalahan!');
            return redirect()->back();
        }

        Session::flash('success', 'Kupon berhasil dihapus!');
        return redirect()->route('coupon');
    }
}
