<?php

namespace App\Http\Controllers;

use App\Models\Keranjang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KeranjangController extends Controller
{
    public function index()
    {
        $keranjang = Keranjang::where('kode_pembeli', Auth::id())->get();
        $totalPrice = $keranjang->sum(function ($item) {
            return $item->produk->harga * $item->jumlah;
        });
        return view('dashboard.keranjang.index', compact('keranjang', 'totalPrice'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_buku' => 'required|exists:produk,kode_buku',
            'jumlah' => 'nullable|numeric',
        ]);

        $keranjang = Keranjang::where('kode_buku', $request->kode_buku)
            ->where('kode_pembeli', Auth::id())
            ->first();

        $jumlah = $request->jumlah ?? 1;

        if ($keranjang) {
            $keranjang->update([
                'jumlah' => $keranjang->jumlah + $jumlah,
            ]);
        } else {
            Keranjang::create([
                'kode_buku' => $request->kode_buku,
                'kode_pembeli' => Auth::id(),
                'jumlah' => $jumlah,
            ]);
        }

        return redirect()->back()->with('success', 'Produk berhasil ditambahkan ke keranjang.');
    }

    public function update(Request $request, $id)
    {
        // dd($request->all());
        $request->validate([
            'jumlah' => 'required|numeric|min:1',
        ]);

        $keranjang = Keranjang::where('kode_keranjang', $id)
            ->where('kode_pembeli', Auth::id())
            ->firstOrFail();

        $keranjang->update([
            'jumlah' => $request->jumlah,
        ]);

        return redirect()->back()->with('success', 'Jumlah produk berhasil diubah.');
    }

    private function calculateTotalPrice()
    {
        $keranjang = Keranjang::where('kode_pembeli', Auth::id())->get();
        return $keranjang->sum(function ($item) {
            return $item->produk->harga * $item->jumlah;
        });
    }

    public function destroy($id)
    {
        $keranjang = Keranjang::where('kode_keranjang', $id)
            ->where('kode_pembeli', Auth::id())
            ->firstOrFail();

        if(!$keranjang) {
            return redirect()->back()->with('error', 'Produk tidak ditemukan.');
        }
        $keranjang->delete();

        return redirect()->back()->with('success', 'Produk berhasil dihapus dari keranjang.');
    }
}
