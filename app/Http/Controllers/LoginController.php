<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        // Menampilkan view login
        return view('login'); // Pastikan file login.blade.php ada di resources/views
    }

    public function authenticate(Request $request)
    {
        // Contoh logika autentikasi sederhana
        $username = $request->input('username');
        $password = $request->input('password');

        // Dummy check: dalam aplikasi nyata, gunakan validasi dan autentikasi yang sesuai
        if ($username === 'admin' && $password === 'password') {
            return redirect()->route('dashboard');
        }

        return redirect()->back()->with('error', 'Username atau password salah');
    }
}
