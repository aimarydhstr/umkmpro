<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use Auth;
use Session;

class DashboardController extends Controller
{
    public function index()
    {
        $title = "Dashboard";
        $auth = Auth::user();
        $user = User::with('role')->latest()->get();

        $product = Product::count();
        $category = Category::count();
        $userCount = User::count();

        return view('dashboard.index', compact('title', 'user', 'userCount', 'product', 'category', 'auth'))->with('i');
    }
}
