<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardAdminPesananController extends Controller
{
    public function index()
    {
        return view('dashboard_admin_pesanan');
    }

    
}
