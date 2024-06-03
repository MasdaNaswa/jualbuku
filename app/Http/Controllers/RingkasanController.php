<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RingkasanController extends Controller
{
    public function index()
    {
        // Data pesanan dapat ditambahkan di sini jika diperlukan
        return view('ringkasan');
    }
}
