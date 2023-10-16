<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Auth;
use Session;
use Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Manajemen User';
        $auth = Auth::user();
        $users = User::withCount('role')->orderBy('name', 'ASC')->paginate(5);

        return view('user.index', compact('users', 'auth', 'title'))->with('i');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function data(Request $request)
    {
        $search = $request->search;
        $auth = Auth::user();
        $search = str_replace(" ", "%", $search);
        $users = User::withCount('role')->where('name', 'like', '%' . $search . '%')->orderBy('name', 'ASC')->paginate(5);

        return view('user.data', compact('users', 'auth'))->with('i')->render();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Tambah User';
        $auth = Auth::user();
        $roles = Role::orderBy('name', 'DESC')->get();

        return view('user.create', compact('auth', 'title', 'roles'))->with('i');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'gender' => 'required',
            'email' => 'required|unique:users',
            'username' => 'required|unique:users',
            'password' => 'required|min:8|confirmed',
            'photo' => 'image|mimes:png,jpg,jpeg,svg,webp|max:2048',
            'role_id' => 'required',
            'address' => 'required',
            'postcode' => 'required',
            'phone' => 'required',
        ]);

        $photo = $request->file('photo');
        $photos = 'default.png';

        if ($photo) {
            $photos = date('YmdHi') . $photo->getClientOriginalName();
            $photo->move(public_path('img/user'), $photos);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role_id' => $request->role_id,
            'username' => $request->username,
            'gender' => $request->gender,
            'photo' => $photos,
            'password' => Hash::make($request->password),
            'province_id' => $request->province,
            'city_id' => $request->city,
            'address' => $request->address,
            'postcode' => $request->postcode,
            'phone' => $request->phone,
            'is_active' => 1,
        ]);

        if (!$user) {
            Session::flash('failed', 'Terdapat kesalahan!');
            return redirect()->back();
        }

        Session::flash('success', 'Akun berhasil dibuat!');
        return redirect()->route('user');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $title = 'Edit User';
        $auth = Auth::user();
        $user = User::with('role')->findOrFail($id);
        $roles = Role::orderBy('name', 'DESC')->get();

        return view('user.edit', compact('auth', 'title', 'roles', 'user'))->with('i');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'gender' => 'required',
            'email' => 'required',
            'username' => 'required',
            'password' => 'confirmed',
            'role_id' => 'required',
            'photo' => 'image|mimes:png,jpg,jpeg,svg,webp|max:2048',
            'address' => 'required',
            'postcode' => 'required',
            'phone' => 'required',
        ]);

        $user = User::with('role')->findOrFail($id);

        $pw = $request->password;

        if (!$pw) $pw = $user->password;

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
            'email' => $request->email,
            'role_id' => $request->role_id,
            'username' => $request->username,
            'gender' => $request->gender,
            'photo' => $photos,
            'password' => $pw,
            'province_id' => $request->province,
            'city_id' => $request->city,
            'address' => $request->address,
            'postcode' => $request->postcode,
            'phone' => $request->phone,
            'is_active' => 1,
        ]);

        if (!$user) {
            Session::flash('failed', 'Terdapat kesalahan!');
            return redirect()->back();
        }

        Session::flash('success', 'Akun berhasil diubah!');
        return redirect()->route('user');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function delete($id)
    {
        $user = User::findOrFail($id);

        return view('user.delete', compact('user'))->with('i')->render();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        $photos = $user->photo;

        if ($photos != 'default.png') {
            $oldPhoto = public_path('img/user/' . $photos);
            unlink($oldPhoto);
        }

        $user->delete();

        if (!$user) {
            Session::flash('failed', 'Terdapat kesalahan!');
            return redirect()->back();
        }

        Session::flash('success', 'Akun berhasil dihapus!');
        return redirect()->route('user');
    }
}
