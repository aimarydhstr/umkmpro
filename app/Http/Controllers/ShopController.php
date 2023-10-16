<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Tag;
use App\Models\Category;
use App\Models\Transaction;
use App\Models\User;
use App\Models\Coupon;
use Auth;
use Hash;
use Session;

class ShopController extends Controller
{
    public function index()
    {
        $auth = Auth::user();
        $title = 'Toko';

        $coupon = Coupon::latest()->first();
        $products = Product::withCount('category', 'tag')->latest()->limit(12)->get();
        $tags = Tag::withCount('product')->limit(3)->get();
        $categories = Category::withCount('product')->limit(8)->get();

        return view('shop.index', compact('products', 'auth', 'categories', 'tags', 'coupon', 'title'))->with('i');
    }

    public function product()
    {
        $auth = Auth::user();
        $title = 'Semua Produk';

        $products = Product::withCount('category', 'tag')->latest()->paginate(1);
        $categories = Category::withCount('product')->limit(8)->get();

        return view('shop.product', compact('products', 'auth', 'categories', 'title'))->with('i');
    }

    public function getproduct($slug)
    {
        $auth = Auth::user();
        $product = Product::where('slug', $slug)->first();
        $products = Product::where('category_id', $product->category_id)->whereNot('id', $product->id)->latest()->limit(6)->get();
        $title = $product->name;

        return view('shop.getproduct', compact('product', 'products', 'auth', 'title'))->with('i');
    }

    public function transaction()
    {
        $auth = Auth::user();

        $transactions = Transaction::with('order', 'order.product', 'status')->where('user_id', $auth->id)->latest()->paginate(5);
        $title = 'Transaksi Saya';

        return view('shop.transaction', compact('transactions', 'auth', 'title'))->with('i');
    }

    public function order($id)
    {
        $auth = Auth::user();

        $transaction = Transaction::with('order', 'order.product', 'status')->where('user_id', $auth->id)->where('id', $id)->first();
        $title = 'Detail Transaksi';

        return view('shop.transaction_detail', compact('transaction', 'auth', 'title'))->with('i');
    }

    public function category($slug)
    {
        $auth = Auth::user();

        $category = Category::where('slug', $slug)->first();
        $products = Product::where('category_id', $category->id)->latest()->paginate(12);
        $title = 'Kategori ' . $category->name;

        return view('shop.category', compact('products', 'auth', 'category', 'title'))->with('i');
    }

    public function tag($slug)
    {
        $auth = Auth::user();

        $tag = Tag::where('slug', $slug)->first();
        $products = Product::where('tag_id', $tag->id)->latest()->paginate(12);
        $title = 'Kategori ' . $tag->name;

        return view('shop.tag', compact('products', 'auth', 'tag', 'title'))->with('i');
    }

    public function profile()
    {
        $title = 'Profil Saya';
        $auth = Auth::user();

        return view('shop.profile', compact('auth', 'title'))->with('i');
    }

    public function updateProfile(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'gender' => 'required',
            'password' => 'confirmed',
            'province' => 'required',
            'photo' => 'image|mimes:png,jpg,jpeg,svg,webp|max:2048',
            'city' => 'required',
            'address' => 'required',
            'postcode' => 'required',
            'phone' => 'required',
        ]);

        $user = User::findOrFail($id);

        $pwold = $user->password;
        $pw = $request->password;

        if ($pw) {
            $request->validate([
                'passwordold' => 'required',
            ]);

            $pwreq = $request->passwordold;

            if (!Hash::check($pwreq, $pwold)) {
                Session::flash('failed', 'Password Lama Salah!');
                return redirect()->back();
            }
        } else {
            $pw = $pwold;
        }

        $photos = $user->photo;

        if ($request->hasFile('photo')) {
            if ($photos != 'default.png') {
                $oldPhoto = public_path('img/user/' . $user->photo);
                unlink($oldPhoto);
            }
            $photos = date('YmdHi') . $request->photo->extension();
            $request->photo->move(public_path('img/user'), $photos);
        }

        $user->update([
            'name' => $request->name,
            'gender' => $request->gender,
            'photo' => $photos,
            'password' => $pw,
            'province' => $request->province,
            'city' => $request->city,
            'address' => $request->address,
            'postcode' => $request->postcode,
            'phone' => $request->phone
        ]);

        if (!$user) {
            Session::flash('failed', 'Terdapat kesalahan!');
            return redirect()->back();
        }

        Session::flash('success', 'Profile berhasil diubah!');
        return redirect()->route('shop.profile');
    }
}
