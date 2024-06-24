<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Penjual;
use App\Models\PasswordResetAdmin;
use App\Mail\ResetPasswordMailAdmin;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;


class LoginAdminController extends Controller
{
    public function showLoginForm()
    {
        return view('login_admin');
    }

    public function login_proses_admin(Request $request)
    {
        $request->validate([
            'nama_pengguna' => 'required',
            'password' => 'required',
        ]);

        $data = [
            'email' => 'required',
            'password' => 'required',
        ];
        if (Auth::attempt($data)) {
            return redirect()->route('login-admin')->with('failed', 'Nama pengguna atau password salah');
        } else {
            return redirect()->route('dashboard-admin');
        }
    }

    public function showRegisterForm()
    {
        return view('register_admin');
    }

    public function register_proses_admin(Request $request)
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

        Penjual::create($data);

        return redirect()->route('login_admin')->with('success', 'Pendaftaran berhasil! Silakan login.');
    }

    public function tampilkan()
    {
        return view('lupa_kata_sandi_admin');
    }

    public function lupa_proses_admin(Request $request)
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

        PasswordResetAdmin::updateOrCreate(
            [
                'email' => $request->email
            ],
            [
                'email' => $request->email,
                'token' => $token,
                'created_at' => now(),
            ]
        );

        MailAdmin::to($request->email)->send(new ResetPasswordMailAdmin($token));

        return redirect()->route('lupa_admin')->with('success', 'Kami telah mengirimkan link reset password ke email Anda.');
    }

    public function validasi_lupa_admin($token)
    {
        $getToken = PasswordResetAdmin::where('token', $token)->first();
        if (!$getToken) {
            return redirect()->route('login-admin')->with('failed', 'Token tidak valid');
        }
        return view('auth.validasi_lupa_admin', compact('token'));
    }

    public function validasi_lupa_act_admin(Request $request)
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
    
    $token = PasswordResetAdmin::where('token', $request->token)->first();

    if (!$token) {
        return redirect()->route('login-admin')->with('failed', 'Token tidak valid');
    }

    $penjual = Penjual::where('email', $token->email)->first();

    if (!$penjual) {
        return redirect()->route('login_pembeli')->with('failed', 'Email tidak terdaftar di database');
    }

    $Penjual->update([
        'password' => \Hash::make($request->password)
    ]);

    $token->delete();
    return redirect()->route('login_pembeli')->with('success', 'Password berhasil direset');
}
}
