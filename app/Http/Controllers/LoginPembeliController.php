<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\PasswordReset;
use App\Mail\ResetPasswordMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class LoginPembeliController extends Controller
{
    public function showLoginForm()
    {
        return view('login_pembeli');
    }

    public function login_proses(Request $request)
    {
        $request->validate([
            'nama_pengguna' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('nama_pengguna', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard');
        } else {
            return redirect()->route('login_pembeli')->with('failed', 'Nama pengguna atau password salah');
        }
    }

    public function showForm()
    {
        return view('register_pembeli');
    }

    public function register_proses(Request $request)
    {
        $request->validate([
            'nama_pengguna' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
        ]);

        $data = [
            'nama_pengguna' => $request->nama_pengguna,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ];

        User::create($data);

        return redirect()->route('login_pembeli')->with('success', 'Pendaftaran berhasil! Silakan login.');
    }

    public function tampilkan()
    {
        return view('lupa');
    }

    public function lupa_proses(Request $request)
    {
        $customMessage = [
            'email.required' => 'Email tidak boleh kosong!',
            'email.email' => 'Email tidak valid!',
            'email.exists' => 'Email tidak terdaftar di Database!'
        ];

        $request->validate([
            'email' => 'required|email|exists:users,email',
        ], $customMessage);

        

        $token = Str::random(60);

        PasswordReset::updateOrCreate(
            [
                'email' => $request->email
            ],
            [
                'email' => $request->email,
                'token' => $token,
                'created_at' => now(),
            ]
        );

        Mail::to($request->email)->send(new ResetPasswordMail($token));

        return redirect()->route('lupa')->with('success', 'Kami telah mengirimkan link reset password ke email Anda.');
    }

    public function validasi_lupa($token)
    {
        $getToken = PasswordReset::where('token', $token)->first();
        if (!$getToken) {
            return redirect()->route('login_pembeli')->with('failed', 'Token tidak valid');
        }
        return view('auth.validasi_lupa', compact('token'));
    }

    public function validasi_lupa_act(Request $request)
{
    $customMessage = [
        'password.required' => 'Password Tidak Boleh Kosong!',
        'password.min' => 'Password Minimal 6 Karakter!',
        'password.confirmed' => 'Password Tidak Sama Dengan Konfirmasi Password!'
    ];

    $request->validate([
        'password' => 'required|min:6|confirmed',
    ], $customMessage);

    // Menambahkan dd untuk debugging
    
    $token = PasswordReset::where('token', $request->token)->first();

    if (!$token) {
        return redirect()->route('login_pembeli')->with('failed', 'Token tidak valid');
    }

    $user = User::where('email', $token->email)->first();

    if (!$user) {
        return redirect()->route('login_pembeli')->with('failed', 'Email tidak terdaftar di database');
    }

    $user->update([
        'password' => \Hash::make($request->password)
    ]);

    $token->delete();
    return redirect()->route('login_pembeli')->with('success', 'Password berhasil direset');
}
}
