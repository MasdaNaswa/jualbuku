<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AkunController extends Controller
{
    public function tampilkan()
    {
        return view('layout/akun'); // Remove the .php extension
    }
}
