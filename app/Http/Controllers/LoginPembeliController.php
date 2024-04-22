<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginPembeliController extends Controller
{
    public function showLoginForm() {
        return view('login_pembeli');
    }

    public function processLogin(Request $request) {
        $email = $request->input('email');
        $password = $request->input('password');

        if ($email === 'pembeli@example.com' && $password === 'password') {
            return redirect()->route('dashboard'); // Ganti 'dashboard' dengan nama route dashboard jika ada
        } else {
            $error = "Email atau password salah.";
            return view('login_pembeli', compact('error'));
        }
    }
}
