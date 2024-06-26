<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Kategori;
use App\Models\Keranjang;
use App\Models\Pesanan;



class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $number = range(1, 100);
        return response()->json($number);
    }


    public function getProduct()
    {
        $data = produk::all();
        return response()->json($data);
    }

    public function getKategori()
    {
        $data = kategori::all();
        return response()->json($data);
    }

    public function getKeranjang()
    {
        $data = keranjang::all();
        return response()->json($data);
    }

    public function getPesanan()
    {
        $data = pesanan::all();
        return response()->json($data);
    }

    public function getPesananItems()
    {
        $data = pesanan_items::all();
        return response()->json($data);
    }

    public function getUsers()
    {
        $data = users::all();
        return response()->json($data);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
