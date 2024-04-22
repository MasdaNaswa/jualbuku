<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LupaKataSandiPembeliController extends Controller
{
    public function showLupaKataSandiForm()
    {
        return view('lupa_kata_sandi_pembeli');
    }

    public function processLupaKataSandi(Request $request)
    {
    }
}
