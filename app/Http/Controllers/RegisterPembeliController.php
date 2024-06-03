<?php
// app/Http/Controllers/RegisterController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Pastikan Anda telah mengimpor model User jika belum

class RegisterPembeliController extends Controller
{
    public function showForm()
    {
    return view('register_pembeli');
    }
}
