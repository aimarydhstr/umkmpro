<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Tag;
use Auth;
use Session;

class HomeController extends Controller
{
    public function index()
    {
        $auth = Auth::user();

        $products = Product::withCount('category')->latest()->limit(7)->get();
        $tag1 = Tag::withCount('product')->first();
        $tag2 = Tag::withCount('product')->skip(1)->first();
        $tag3 = Tag::withCount('product')->skip(2)->first();
        $tag4 = Tag::withCount('product')->skip(3)->first();

        return view('home.index', compact('products', 'auth', 'tag1', 'tag2', 'tag3', 'tag4'))->with('i');
    }
}
