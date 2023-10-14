<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Auth;
use Session;
use Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Manajemen Kategori';
        $auth = Auth::user();
        $categories = Category::withCount('product')->orderBy('name', 'ASC')->paginate(5);

        return view('category.index', compact('auth', 'title', 'categories'))->with('i');
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
        $categories = Category::withCount('product')->where('name', 'like', '%' . $search . '%')->orderBy('name', 'ASC')->paginate(5);

        return view('category.data', compact('categories', 'auth'))->with('i')->render();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:categories',
            'icon' => 'image|mimes:svg|max:2048',
        ]);

        $icon = $request->file('icon');
        $icons = 'tags.svg';

        if ($icon) {
            $icons = date('YmdHi') . $icon->getClientOriginalName();
            $icon->move(public_path('img/category'), $icons);
        }

        $slug = Str::slug($request->name);

        $category = Category::create([
            'name' => $request->name,
            'slug' => $slug,
            'icon' => $icons
        ]);

        if (!$category) {
            Session::flash('failed', 'Terdapat kesalahan!');
            return redirect()->back();
        }

        Session::flash('success', 'Kategori berhasil dibuat!');
        return redirect()->route('category');
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
        $category = Category::findOrFail($id);

        return view('category.edit', compact('category'))->with('i')->render();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'icon' => 'mimes:png,jpg,jpeg,svg,webp|max:2048',
        ]);

        $category = Category::findOrFail($id);

        $icons = $category->icon;

        if ($request->hasFile('icon')) {
            if ($icons != 'tags.svg') {
                $oldIcon = public_path('img/category/' . $category->icon);
                unlink($oldIcon);
            }
            $icons = date('YmdHi') . $request->icon->extension();
            $request->icon->move(public_path('img/category'), $icons);
        }

        $category->update([
            'name' => $request->name,
            'icon' => $icons
        ]);

        if (!$category) {
            Session::flash('failed', 'Terdapat kesalahan!');
            return redirect()->back();
        }

        Session::flash('success', 'Kategori berhasil diubah!');
        return redirect()->route('category');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function delete($id)
    {
        $category = Category::findOrFail($id);

        return view('category.delete', compact('category'))->with('i')->render();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $icons = $category->icon;

        if ($icons != 'tags.svg') {
            $oldIcon = public_path('img/category/' . $icons);
            unlink($oldIcon);
        }

        $category->delete();

        if (!$category) {
            Session::flash('failed', 'Terdapat kesalahan!');
            return redirect()->back();
        }

        Session::flash('success', 'Kategori berhasil dihapus!');
        return redirect()->route('category');
    }
}
