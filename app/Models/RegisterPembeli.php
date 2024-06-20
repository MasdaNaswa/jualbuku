<?php

namespace App\Http\Controllers;

use App\Models\Pembeli;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterPembeliController extends Controller
{
    public function showForm()
    {
        return view('register_pembeli');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:pembelis',
            'password' => 'required|string|min:8|confirmed',
        ]);

        Pembeli::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect('/login-pembeli')->with('success', 'Pendaftaran berhasil! Silakan login.');
    }
}
