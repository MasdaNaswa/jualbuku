<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tblproduk;

class ListProdukController extends Controller
{
    public function show()
    {
        $tblproduk = Tblproduk::all();
        return view('list_produk', ['tblproduk' => $tblproduk]);
    }

    public function simpan(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string|max:255',
            'harga' => 'required|numeric', // Validasi harga
        ]);

        // Membuat instance baru dari model Tblproduk
        $produk = new Tblproduk();
        $produk->nama = $request->input('nama');
        $produk->deskripsi = $request->input('deskripsi');
        $produk->harga = $request->input('harga'); // Tambahkan harga

        // Menyimpan data ke database
        $produk->save();

        return redirect()->back()->with('success', 'Produk berhasil disimpan!');
    }

    public function delete($id) {
        $produk = tblproduk::where('id', $id)->first();
        if ($produk) {
            $produk->delete();
            return redirect()->back()->with('success', 'Produk berhasil dihapus.');
        
        }else{
            return redirect()->back()->with('error', 'Produk tidak ditemukan.');
        }
    }
}
