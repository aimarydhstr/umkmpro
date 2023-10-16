<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Store;
use Illuminate\Http\Request;
use Session;
use Auth;
use Str;

class ProductController extends Controller
{
    public function index()
    {
        $title = 'Manajemen Produk';
        $auth = Auth::user();
        $products = Product::withCount('category', 'tag')->orderBy('name', 'ASC')->paginate(5);

        return view('product.index', compact('products', 'auth', 'title'))->with('i');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Tambah Produk';
        $auth = Auth::user();
        $categories = Category::orderBy('name', 'ASC')->get();
        $tags = Tag::orderBy('name', 'ASC')->get();

        return view('product.create', compact('auth', 'title', 'categories', 'tags'))->with('i');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function data(Request $request)
    {
        $search = $request->search;
        $auth = Auth::user();
        $search = str_replace(" ", "%", $search);
        $products = Product::withCount('category', 'tag')->where('name', 'like', '%' . $search . '%')->orderBy('name', 'ASC')->paginate(5);

        return view('product.data', compact('products', 'auth'))->with('i')->render();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'qty' => 'required',
            'price' => 'required',
            'discount' => 'required',
            'image' => 'image|mimes:png,jpg,jpeg,svg,webp|max:2048',
            'tag_id' => 'required',
            'category_id' => 'required',
        ]);

        $store = Store::where('seller_id', Auth::user()->id)->first();

        $slug = Str::slug($request->name);

        $image = $request->file('image');
        $images = 'default.png';

        if ($image) {
            $images = date('YmdHi') . $image->getClientOriginalName();
            $image->move(public_path('img/product'), $images);
        }
        $product = Product::create([
            'name' => $request->name,
            'slug' => $slug,
            'image' => $images,
            'description' => $request->description,

            'qty' => $request->qty,
            'price' => $request->price,
            'discount' => $request->discount,
            'condition' => $request->condition,
            'category_id' => $request->category_id,
            'tag_id' => $request->tag_id,
            'seller_id' => Auth::user()->id,
            'store_id' => $store->id,
        ]);

        if (!$product) {
            Session::flash('failed', 'Terdapat kesalahan!');
            return redirect()->back();
        }

        Session::flash('success', 'Produk berhasil dibuat!');
        return redirect()->route('product');
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
        $product = Product::with('category')->findOrFail($id);
        $title = 'Tambah Produk';
        $auth = Auth::user();
        $categories = Category::orderBy('name', 'ASC')->get();
        $tags = Tag::orderBy('name', 'ASC')->get();

        return view('product.edit', compact('auth', 'title', 'categories', 'product', 'tags'))->with('i');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'qty' => 'required',
            'price' => 'required',
            'discount' => 'required',
            'image' => 'image|mimes:png,jpg,jpeg,svg,webp|max:2048',
            'category_id' => 'required',
            'tag_id' => 'required'
        ]);

        $product = Product::findOrFail($id);

        $images = $product->image;

        if ($request->hasFile('image')) {
            if ($images != 'default.png') {
                $oldImage = public_path('img/product/' . $product->image);
                unlink($oldImage);
            }
            $images = date('YmdHi') . $request->image->extension();
            $request->image->move(public_path('img/product'), $images);
        }

        $product->update([
            'name' => $request->name,
            'image' => $images,
            'description' => $request->description,
            'qty' => $request->qty,
            'price' => $request->price,
            'discount' => $request->discount,
            'condition' => $request->condition,
            'category_id' => $request->category_id,
            'tag_id' => $request->tag_id,
        ]);

        if (!$product) {
            Session::flash('failed', 'Terdapat kesalahan!');
            return redirect()->back();
        }

        Session::flash('success', 'Produk berhasil diubah!');
        return redirect()->route('product');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function delete($id)
    {
        $product = Product::findOrFail($id);

        return view('product.delete', compact('product'))->with('i')->render();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $images = $product->image;

        if ($images != 'default.png') {
            $oldImage = public_path('img/product/' . $images);
            unlink($oldImage);
        }

        $product->delete();

        if (!$product) {
            Session::flash('failed', 'Terdapat kesalahan!');
            return redirect()->back();
        }

        Session::flash('success', 'Produk berhasil dihapus!');
        return redirect()->route('product');
    }
}
