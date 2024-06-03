<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterAdminController extends Controller
{
    public function showRegisterForm()
    {
        return view('register_admin');
    }

    public function processRegister(Request $request)
    {
        // Logic to process registration form data goes here
    }
}
