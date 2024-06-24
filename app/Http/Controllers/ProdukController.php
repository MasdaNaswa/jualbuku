<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produk = Produk::latest()->paginate(5);
        $kategori = Kategori::all();
        
        return view('dashboard.admin.produk.index', compact('produk', 'kategori'));
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
        $request->validate([
            'kode_kategori' => 'required|exists:kategori,kode_kategori',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'judul_buku' => 'required|string',
            'harga' => 'required',
            'stok' => 'required|numeric',
            'penulis' => 'required|string',
            'deskripsi' => 'required|string',
            'jumlah_halaman' => 'required|numeric',
            'tanggal_terbit' => 'required|date',
            'isbn' => 'required|string',
            'bahasa' => 'required|string',
            'penerbit' => 'required|string',
            'berat' => 'required|numeric',
            'lebar' => 'required|numeric',
            'panjang' => 'required|numeric',
        ]);

        $gambar = $request->file('gambar');
        $nama_gambar = time() . '.' . $gambar->extension();
        $gambar->move(public_path('img/produk'), $nama_gambar);

        Produk::create([
            'kode_kategori' => $request->kode_kategori,
            'gambar' => $nama_gambar,
            'judul_buku' => $request->judul_buku,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'penulis' => $request->penulis,
            'deskripsi' => $request->deskripsi,
            'jumlah_halaman' => $request->jumlah_halaman,
            'tanggal_terbit' => $request->tanggal_terbit,
            'isbn' => $request->isbn,
            'bahasa' => $request->bahasa,
            'penerbit' => $request->penerbit,
            'berat' => $request->berat,
            'lebar' => $request->lebar,
            'panjang' => $request->panjang,
        ]);

        return redirect()->route('produk.index')->with('success', 'Produk berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $produk = Produk::findOrFail($id);

        if(!$produk) {
            return redirect()->route('produk.index')->with('error', 'Produk tidak ditemukan.');
        }

        return view('dashboard.produk.show', compact('produk'));
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
        $request->validate([
            'kode_kategori' => 'required|exists:kategori,kode_kategori',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'judul_buku' => 'required|string',
            'harga' => 'required',
            'stok' => 'required|numeric',
            'penulis' => 'required|string',
            'deskripsi' => 'required|string',
            'jumlah_halaman' => 'required|numeric',
            'tanggal_terbit' => 'required|date',
            'isbn' => 'required|string',
            'bahasa' => 'required|string',
            'penerbit' => 'required|string',
            'berat' => 'required|numeric',
            'lebar' => 'required|numeric',
            'panjang' => 'required|numeric',
        ]);

        $produk = Produk::findOrFail($id);

        if(!$produk) {
            return redirect()->route('produk.index')->with('error', 'Produk tidak ditemukan.');
        }

        if($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $nama_gambar = time() . '.' . $gambar->extension();
            $gambar->move(public_path('img/produk'), $nama_gambar);

            if($produk->gambar && file_exists(public_path('img/produk/' . $produk->gambar))) {
                unlink(public_path('img/produk/' . $produk->gambar));
            }

            $produk->update([
                'kode_kategori' => $request->kode_kategori,
                'gambar' => $nama_gambar,
                'judul_buku' => $request->judul_buku,
                'harga' => $request->harga,
                'stok' => $request->stok,
                'penulis' => $request->penulis,
                'deskripsi' => $request->deskripsi,
                'jumlah_halaman' => $request->jumlah_halaman,
                'tanggal_terbit' => $request->tanggal_terbit,
                'isbn' => $request->isbn,
                'bahasa' => $request->bahasa,
                'penerbit' => $request->penerbit,
                'berat' => $request->berat,
                'lebar' => $request->lebar,
                'panjang' => $request->panjang,
            ]);
        } else {
            $produk->update([
                'kode_kategori' => $request->kode_kategori,
                'judul_buku' => $request->judul_buku,
                'harga' => $request->harga,
                'stok' => $request->stok,
                'penulis' => $request->penulis,
                'deskripsi' => $request->deskripsi,
                'jumlah_halaman' => $request->jumlah_halaman,
                'tanggal_terbit' => $request->tanggal_terbit,
                'isbn' => $request->isbn,
                'bahasa' => $request->bahasa,
                'penerbit' => $request->penerbit,
                'berat' => $request->berat,
                'lebar' => $request->lebar,
                'panjang' => $request->panjang,
            ]);
        }

        return redirect()->route('produk.index')->with('success', 'Produk berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $produk = Produk::findOrFail($id);

        if(!$produk) {
            return redirect()->route('produk.index')->with('error', 'Produk tidak ditemukan.');
        }

        if($produk->gambar && file_exists(public_path('img/produk/' . $produk->gambar))) {
            unlink(public_path('img/produk/' . $produk->gambar));
        }

        $produk->delete();

        return redirect()->route('produk.index')->with('success', 'Produk berhasil dihapus.');
    }

    public function rekomendasi()
    {
        // Fetch 4 book recommendations
        $produk = Produk::take(4)->get();
        
        // Pass the data to the view
        return view('rekomendasi', compact('produk'));
    }
}
