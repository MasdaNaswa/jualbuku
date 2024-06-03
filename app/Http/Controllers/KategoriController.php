<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index($kategori)
    {
        // Logic to fetch categories or other necessary data can be added here
        // For now, we simply return the view
        // dd("Parameter :".$jenis);
        return view('kategori');
    }
}
