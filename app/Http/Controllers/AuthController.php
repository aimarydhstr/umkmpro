<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Session;
use Hash;
use Auth;

class AuthController extends Controller
{
    public function index(Request $request)
    {
        $title = "Register";

        return view('auth.register', compact('title'));
    }

    public function logindex(Request $request)
    {
        $title = "Login";

        return view('auth.login', compact('title'));
    }

    public function login(Request $request)
    {
        $data = [
            'username' => $request->username,
            'password' => $request->password,
            'is_active' => 1
        ];

        if (!Auth::attempt($data)) {
            Session::flash('failed', 'Username atau password salah!');
            return redirect()->back();
        }

        Session::flash('success', 'Login Berhasil!');
        return redirect()->route('dashboard');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'gender' => 'required',
            'email' => 'required|unique:users',
            'username' => 'required|unique:users',
            'password' => 'required|min:8|confirmed',
            'province' => 'required',
            'city' => 'required',
            'address' => 'required',
            'postcode' => 'required',
            'phone' => 'required',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role_id' => 2,
            'username' => $request->username,
            'gender' => $request->gender,
            'photo' => 'default.png',
            'password' => Hash::make($request->password),
            'province' => $request->province,
            'city' => $request->city,
            'address' => $request->address,
            'postcode' => $request->postcode,
            'phone' => $request->phone,
            'is_active' => 1,
        ]);

        if (!$user) {
            Session::flash('failed', 'Terdapat kesalahan!');
            return redirect()->back();
        }

        $data = [
            'username' => $request->username,
            'password' => $request->password,
            'is_active' => 1
        ];

        if (!Auth::attempt($data)) {
            Session::flash('failed', 'Username atau password salah!');
            return redirect()->back();
        }

        Session::flash('success', 'Akun berhasil diregistrasi!');
        return redirect()->route('login'); //ubah ini
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        Session::flash('success', 'Logout Berhasil!');
        return redirect()->route('login');
    }
}
