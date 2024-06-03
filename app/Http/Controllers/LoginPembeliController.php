<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginPembeliController extends Controller
{
    public function showLoginForm() {
        return view('login_pembeli');
    }
}
