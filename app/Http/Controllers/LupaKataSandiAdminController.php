<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LupaKataSandiAdminController extends Controller
{
    public function showLupaKataSandiForm()
    {
        return view('Lupa_kata_sandi_admin');
    }

    public function processLupaKataSandi(Request $request)
    {
    }
}