<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Review;
use Auth;
use Session;
use Hash;

class ReviewController extends Controller
{
    public function store(Request $request)
    {
        $review = Review::create([
            'user_id' => Auth::user()->id,
            'product_id' => $request->product_id,
            'content' => $request->content,
            'star' => $request->star,
        ]);

        if (!$review) {
            Session::flash('failed', 'Terdapat kesalahan!');
            return redirect()->back();
        }

        Session::flash('success', 'Berhasil memberi ulasan!');
        return redirect()->route('shop.transaction');
    }

    public function update(Request $request, string $id)
    {
        $review = Review::findOrFail($id);
        $review->update([
            'seller_id' => Auth::user()->id,
            'reply' => $request->reply,
        ]);

        if (!$user) {
            Session::flash('failed', 'Terdapat kesalahan!');
            return redirect()->back();
        }

        Session::flash('success', 'Berhasil memberi membalas ulasan!');
        return redirect()->route('shop.getproduct');
    }
}
