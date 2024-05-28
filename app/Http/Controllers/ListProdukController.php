<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ListProdukController extends Controller
{
    // Method untuk menampilkan daftar produk
    public function show()
    {
        // Ambil semua data produk dari database
        $produks = Produk::all();
        
        // Kembalikan view dengan data produk
        return view('list_produk', ['produks' => $produks]);
    }

    // Method untuk menyimpan data produk baru
    public function simpan(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'harga' => 'required|numeric|min:0',
        ]);

        $produk = new Produk;
        $produk->nama = $request->input('nama');
        $produk->deskripsi = $request->input('deskripsi');
        $produk->harga = $request->input('harga');
        $produk->save();

        return redirect()->back()->with('success', 'Data Berhasil Disimpan!');
    }
}

 