<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailProdukController extends Controller
{
    public function index()
{
    return view('/layout/detail_produk'); // corrected view name

    
}

public function produk()
{
    $produk = Produk::all(); // Adjust this query as needed
    return view('produk.show', compact('produk'));
}


}
