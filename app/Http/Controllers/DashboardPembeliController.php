<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardPembeliController extends Controller
{
    public function index()
    {
        return view('/layout/dashboard_pembeli');
    }
}
