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

    public function store(Request $request)
    {
        $data = $request->except(['gambar_buku', '_token']);

        if ($request->gambar_buku) {
            $gambarBuku = $request->judul_buku . '.' . $request->gambar_buku->extension();
            $request->gambar_buku->move(public_path('images/produk'), $gambarBuku);
            $data['gambar_buku'] = $gambarBuku;
        }

        Produk::create($data);

        return redirect('dashboard-admin-produk');
    }

    public function update(Request $request, $id)
    {
        $data = $request->except(['gambar_buku', '_token']);

        if ($request->gambar_buku) {
            $gambarBuku = $request->judul_buku . '.' . $request->gambar_buku->extension();
            $request->gambar_buku->move(public_path('images/produk'), $gambarBuku);
            $data['gambar_buku'] = $gambarBuku;
        }

        Produk::whereId($id)->update($data);

        return redirect('dashboard-admin-produk');
    }

    public function destroy($id)
    {
        $produk = Produk::where('Id', $id)->first();

        if ($produk) {
            Produk::whereId($id)->delete();
        }

        return redirect('dashboard-admin-produk');
}
}
