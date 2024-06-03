<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginAdminController extends Controller
{
    public function showLoginForm() {
        return view('login_admin');
    }

    public function processLogin(Request $request) {
        $nama_pengguna = $request->input('nama_pengguna');
        $password = $request->input('password');

        if ($nama_pengguna === 'admin@example.com' && $password === 'password') {
            return redirect()->route('dashboard'); // Ganti 'dashboard' dengan nama route dashboard jika ada
        } else {
            $error = "nama_pengguna atau password salah.";
            return view('login_pembeli', compact('error'));
        }
    }
}