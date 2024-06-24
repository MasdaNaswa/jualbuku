<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use Illuminate\Http\Request;

class RekapanController extends Controller
{
    public function index()
    {
        $pesanan = Pesanan::with('items.produk')->latest()->paginate(5);

        return view('dashboard.admin.rekapan.index', compact('pesanan'));
    }
}
