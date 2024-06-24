<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function showAdminRegistrationForm()
    {
        if (Auth::check() && Auth::user()->role == 'admin') {
            return redirect()->route('dashboard.admin');
        }
     
        return view('auth.admin.register');
    }

    public function showPembeliRegistrationForm()
    {
        if (Auth::check() && Auth::user()->role == 'pembeli') {
            return redirect()->route('dashboard');
        }
     
        return view('auth.register');
    }

    public function registerAdmin(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'admin',
        ]);

        return redirect()->route('login.admin')->with('success', 'Akun admin berhasil dibuat');
    }

    public function registerPembeli(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'pembeli',
        ]);

        return redirect()->route('login')->with('success', 'Akun pembeli berhasil dibuat');
    }
}
