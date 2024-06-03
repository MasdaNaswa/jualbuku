<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardAdminProdukController extends Controller
{
    public function index()
    {
        return view('dashboard_admin_produk');
    }

    
}
