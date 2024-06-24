<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class DashboardPembeliController extends Controller
{
    public function index()
    {
        $produk = Produk::all();
        return view('dashboard.index', compact('produk'));
    }
}
