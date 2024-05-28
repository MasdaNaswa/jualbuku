<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class RegisterPembeliController extends Controller
{
    public function showRegisterForm()
    {
        return view('register_pembeli');
    }

    public function processRegister(Request $request)
    {
        // Validasi data yang dikirimkan dari formulir
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Buat pengguna baru dan simpan ke database
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            $produk->save();

        ]);

        // Redirect ke halaman tertentu dengan pesan sukses
        return redirect()->route('home')->with('success', 'Registrasi berhasil. Silakan masuk.');
    }
}
