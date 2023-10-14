<?php

namespace App\Http\Controllers;

use App\Models\CouponUsed;
use App\Models\Coupon;
use Illuminate\Http\Request;
use Session;
use Auth;

class CouponUsedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
            'code' => 'required',
        ]);

        $auth = Auth::user();
        $coupon = Coupon::where('code', $request->code)->first();

        if (!$coupon) {
            Session::flash('failed', 'Kode kupon tidak ada!');
            return redirect()->back();
        }

        $isUsed = CouponUsed::where('coupon_id', $coupon->id)->where('user_id', $auth->id)->first();
        $isUsed2 = CouponUsed::where('user_id', $auth->id)->where('is_used', 0)->first();
        // dd($isUsed2);

        if($isUsed){
            Session::flash('failed', 'Kode kupon sudah digunakan!');
            return redirect()->back();
        }

        if($isUsed2){
            Session::flash('failed', 'Hanya bisa menggunakan 1 kode kupon!');
            return redirect()->back();
        }

        $coupon_used = CouponUsed::create([
            'coupon_id' => $coupon->id,
            'user_id' => $auth->id,
            'is_used' => 0,
        ]);

        if (!$coupon_used) {
            Session::flash('failed', 'Terjadi kesalahan!');
            return redirect()->back();
        }

        Session::flash('success', 'Aktivasi kupon berhasil!');
        return redirect()->route('cart');
    }

    /**
     * Display the specified resource.
     */
    public function show(CouponUsed $couponUsed)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CouponUsed $couponUsed)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CouponUsed $couponUsed)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CouponUsed $couponUsed)
    {
        //
    }
}
