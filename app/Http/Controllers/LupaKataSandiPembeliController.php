<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LupaKataSandiPembeliController extends Controller
{
    public function showLupaKataSandiForm()
    {
        return view('lupa_kata_sandi_pembeli');
    }

    public function lupa_kata_sandi(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama_pengguna' => 'required|exists:users,nama_pengguna',
            'password' => 'required|min:6|confirmed'
        ]);

        dd($request);
        // Cari pengguna berdasarkan nama pengguna
    }
}

