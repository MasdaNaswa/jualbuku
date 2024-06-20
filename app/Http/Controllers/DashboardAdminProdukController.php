<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class DashboardAdminProdukController extends Controller
{
    public function index()
    {
        $data = Produk::all();

        return view('dashboard_admin_produk', compact('data'));
    }
}
