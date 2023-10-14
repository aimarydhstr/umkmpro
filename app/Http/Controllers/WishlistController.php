<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use App\Models\Product;
use Illuminate\Http\Request;
use Session;
use Auth;

class WishlistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $auth = Auth::user();
        $wishlists = Wishlist::with('product', 'product.category')->where('user_id', $auth->id)->latest()->get();
        $count = Wishlist::where('user_id', $auth->id)->count();
        $title = 'Wishlist Saya';

        return view('wishlist.index', compact('auth', 'wishlists', 'title', 'count'))->with('i');
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
        $auth = Auth::user();
        $product = Product::where('slug', $slug)->first();

        $wishlist = Wishlist::create([
            'product_id' => $product->id,
            'user_id' => $auth->id,
        ]);

        if (!$wishlist) {
            Session::flash('failed', 'Terjadi kesalahan!');
            return redirect()->back();
        }

        Session::flash('success', 'Produk ditambahkan ke wishlist!');
        return redirect()->route('wishlist');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $wishlist = Wishlist::findOrFail($id)->delete();

        if (!$wishlist) {
            Session::flash('failed', 'Terdapat kesalahan!');
            return redirect()->back();
        }

        Session::flash('success', 'Produk berhasil dihapus dari wishlist!');
        return redirect()->route('wishlist');
    }
}
