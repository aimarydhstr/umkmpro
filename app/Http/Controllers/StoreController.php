<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Store;
use App\Models\User;
use App\Models\Province;
use App\Models\City;
use App\Models\Product;
use Auth;
use Session;
use Str;
use Hash;

class StoreController extends Controller
{
    public function create()
    {
        $title = 'Buat Toko';
        $provinces = Province::orderBy('name', 'DESC')->get();
        $cities = City::orderBy('name', 'DESC')->get();

        return view('user.edit', compact('title', 'provinces', 'cities'))->with('i'); //ubah
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:users',
            'description' => 'required',
            'province' => 'required',
            'photo' => 'image|mimes:png,jpg,jpeg,svg,webp|max:2048',
            'city' => 'required',
            'address' => 'required',
            'phone' => 'required',
        ]);

        $photo = $request->file('photo');
        $photos = 'default.png';

        if ($photo) {
            $photos = date('YmdHi') . $photo->getClientOriginalName();
            $photo->move(public_path('img/store'), $photos);
        }
        
        $slug = Str::slug($request->name);

        $store = Store::create([
            'name' => $request->name,
            'slug' => $request->slug,
            'seller_id' => Auth::user()->id,
            'photo' => $photos,
            'province' => $request->province,
            'city' => $request->city,
            'address' => $request->address,
            'phone' => $request->phone,
            'is_active' => 1,
        ]);

        if (!$store) {
            Session::flash('failed', 'Terdapat kesalahan!');
            return redirect()->back();
        }

        Session::flash('success', 'Toko berhasil dibuat!');
        return redirect()->route('dashboard');
    }

    public function show($slug)
    {
        $auth = Auth::user();
        $store = Store::with('city', 'province')->where('slug', $slug)->first();
        $products = Product::all();
        $title = $store->name;
        $provinces = Province::orderBy('name', 'DESC')->get();
        $cities = City::orderBy('name', 'DESC')->get();

        return view('store.index', compact('auth', 'title', 'provinces', 'cities', 'store', 'products'))->with('i');
    }

    public function edit(string $id)
    {
        $title = 'Edit Toko';
        $auth = Auth::user();
        $store = Store::with('city', 'province')->findOrFail($id);
        $provinces = Province::orderBy('name', 'DESC')->get();
        $cities = City::orderBy('name', 'DESC')->get();

        return view('user.edit', compact('auth', 'title', 'provinces', 'cities', 'store'))->with('i'); //ubah
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'province' => 'required',
            'photo' => 'image|mimes:png,jpg,jpeg,svg,webp|max:2048',
            'city' => 'required',
            'address' => 'required',
            'phone' => 'required',
        ]);

        $store = Store::findOrFail($id);

        $photos = $store->photo;

        if ($request->hasFile('photo')) {
            if ($photos != 'default.png') {
                $oldPhoto = public_path('img/store/' . $store->photo);
                unlink($oldPhoto);
            }
            $photos = date('YmdHi') . $request->photo->extension();
            $request->photo->move(public_path('img/store'), $photos);
        }

        $store->update([
            'name' => $request->name,
            'description' => $request->description,
            'photo' => $photos,
            'province' => $request->province,
            'city' => $request->city,
            'address' => $request->address,
            'phone' => $request->phone,
            'is_active' => 1,
        ]);

        if (!$store) {
            Session::flash('failed', 'Terdapat kesalahan!');
            return redirect()->back();
        }

        Session::flash('success', 'Toko berhasil diubah!');
        return redirect()->route('user'); //ubah
    }
}
