<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KeranjangController extends Controller
{
    public function tampilkan()
    {
        return view('keranjang'); // Remove the .php extension
    }
}
