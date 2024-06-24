<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // buat 2 method login untuk admin dan pembeli menggunakan username dan password
    public function showAdminLoginForm()
    {
        if(Auth::check() && Auth::user()->role == 'admin'){
            return redirect()->route('dashboard.admin');
        }

        return view('auth.admin.login');
    }

    public function showPembeliLoginForm()
    {
        if(Auth::check() && Auth::user()->role == 'pembeli'){
            return redirect()->route('dashboard');
        }

        return view('auth.login');
    }

    public function authenticateAdmin(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials) && Auth::user()->role == 'admin'){
            $request->session()->regenerate();

            return redirect()->route('dashboard.admin');
        }

        return back()->withErrors([
            'username' => 'Kredensial tidak cocok dengan data kami.',
        ]);
    }

    public function authenticatePembeli(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials) && Auth::user()->role == 'pembeli'){
            $request->session()->regenerate();

            return redirect()->route('dashboard');
        }

        return back()->withErrors([
            'username' => 'Kredensial tidak cocok dengan data kami.',
        ]);
    }

    public function logoutAdmin(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login.admin');
    }

    public function logoutPembeli(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
