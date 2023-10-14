<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;
use Auth;
use Session;
use Str;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Manajemen Tag';
        $auth = Auth::user();
        $tags = Tag::withCount('product')->orderBy('name', 'ASC')->paginate(5);

        return view('tag.index', compact('auth', 'title', 'tags'))->with('i');
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
        $tags = Tag::withCount('product')->where('name', 'like', '%' . $search . '%')->orderBy('name', 'ASC')->paginate(5);

        return view('tag.data', compact('tags', 'auth'))->with('i')->render();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:tags',
            'image' => 'image|mimes:svg,png,jpg,jpeg,webp,gif|max:2048',
        ]);

        $image = $request->file('image');
        $images = 'default.jpg';

        if ($image) {
            $images = date('YmdHi') . $image->getClientOriginalName();
            $image->move(public_path('img/tag'), $images);
        }

        $slug = Str::slug($request->name);

        $tag = Tag::create([
            'name' => $request->name,
            'slug' => $slug,
            'image' => $images
        ]);

        if (!$tag) {
            Session::flash('failed', 'Terdapat kesalahan!');
            return redirect()->back();
        }

        Session::flash('success', 'Tag berhasil dibuat!');
        return redirect()->route('tag');
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
        $tag = Tag::findOrFail($id);

        return view('tag.edit', compact('tag'))->with('i')->render();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'image|mimes:svg,png,jpg,jpeg,webp,gif|max:2048',
        ]);

        $tag = Tag::findOrFail($id);

        $images = $tag->image;

        if ($request->hasFile('image')) {
            if ($images != 'default.jpg') {
                $oldimage = public_path('img/tag/' . $tag->image);
                unlink($oldimage);
            }
            $images = date('YmdHi') . $request->image->extension();
            $request->image->move(public_path('img/tag'), $images);
        }

        $tag->update([
            'name' => $request->name,
            'image' => $images
        ]);

        if (!$tag) {
            Session::flash('failed', 'Terdapat kesalahan!');
            return redirect()->back();
        }

        Session::flash('success', 'Tag berhasil diubah!');
        return redirect()->route('tag');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function delete($id)
    {
        $tag = Tag::findOrFail($id);

        return view('tag.delete', compact('tag'))->with('i')->render();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $tag = Tag::findOrFail($id);
        $images = $tag->image;

        if ($images != 'default.jpg') {
            $oldimage = public_path('img/tag/' . $images);
            unlink($oldimage);
        }

        $tag->delete();

        if (!$tag) {
            Session::flash('failed', 'Terdapat kesalahan!');
            return redirect()->back();
        }

        Session::flash('success', 'Tag berhasil dihapus!');
        return redirect()->route('tag');
    }
}