<?php
namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Produk;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index(Request $request)
    {
        $kategori = $request->query('kategori');

        if ($kategori) {
            $produk = Produk::whereHas('kategori', function ($query) use ($kategori) {
                $query->where('kategori', $kategori);
            })->get();
        } else {
            $produk = Produk::all();
        }

        $kategoriList = Kategori::all();

        return view('dashboard.kategori.index', compact('produk', 'kategoriList', 'kategori'));
    }
}
