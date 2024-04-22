<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterPembeliController extends Controller
{
    public function showRegisterForm()
    {
        return view('register_pembeli');
    }

    public function processRegister(Request $request)
    {
        // Logic to process registration form data goes here
    }
}
