<?php

namespace App\Http\Controllers;

use App\Models\Keranjang;
use App\Models\Pesanan;
use App\Models\PesananItem;
use App\Models\Produk;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PesananController extends Controller
{
    public function index()
    {
        $pesanan = Pesanan::with('items.produk')->latest()->paginate(5);
        // dd($pesanan);
        return view('dashboard.admin.pesanan.index', compact('pesanan'));
    }

    public function updateStatus(Request $request, $kodePesanan)
    {
        $request->validate([
            'status' => 'required|in:menunggu,diterima,ditolak',
        ]);

        $pesanan = Pesanan::where('kode_pesanan', $kodePesanan)->first();

        if (!$pesanan) {
            return redirect()->back()->with('error', 'Pesanan tidak ditemukan');
        }

        if (!$pesanan->bukti_pembayaran) {
            return redirect()->back()->with('error', 'Bukti pembayaran belum diupload');
        }

        $pesanan->status = $request->status;
        $pesanan->save();

        return redirect()->back()->with('success', 'Status pesanan berhasil diubah');
    }

    public function showForm(Request $request)
    {
        if ($request->has('kode_buku')) {
            $kodeBuku = $request->kode_buku;
            $produk = Produk::where('kode_buku', $kodeBuku)->first();

            $keranjang = [];
            $totalHarga = $produk->harga;
            $ongkir = 10000;
            $totalBiaya = $totalHarga + $ongkir;
            $jumlah = 1;

            return view('dashboard.pembayaran.form', compact('produk', 'totalHarga', 'ongkir', 'totalBiaya', 'keranjang', 'jumlah'));
        } else {
            $userId = Auth::id();
            $keranjang = Keranjang::where('kode_pembeli', $userId)->get();

            // total harga dari produk yang di keranjang dan jumlah yang di keranjang
            $totalHarga = $keranjang->sum(function ($item) {
                return $item->produk->harga * $item->jumlah;
            });
            $ongkir = 10000;
            $totalBiaya = $totalHarga + $ongkir;

            return view('dashboard.pembayaran.form', compact('keranjang', 'totalHarga', 'ongkir', 'totalBiaya'));
        }


    }

    public function checkout(Request $request)
    {
        $request->validate([
            'alamat_lengkap' => 'required',
            'provinsi' => 'required',
            'kota' => 'required',
            'kecamatan' => 'required',
            'kode_pos' => 'required',
            'no_telp' => 'required',
            'nama' => 'required',
            'email' => 'required',
            'metode_pembayaran' => 'required|in:DANA,COD',
            'metode_pengiriman' => 'required',
        ]);

        $userId = Auth::id();
        $keranjang = Keranjang::where('kode_pembeli', $userId)->get();

        if ($keranjang->isEmpty() && !$request->has('kode_buku') && !$request->has('jumlah')) {
            return redirect()->back()->with('error', 'Keranjang anda kosong');
        }

        $kodePesanan = Str::uuid();

        if ($request->metode_pembayaran == 'COD') {
            $status = 'diterima';
        } else {
            $status = 'menunggu';
        }

        $pesanan = Pesanan::create([
            'kode_pesanan' => $kodePesanan,
            'kode_pembeli' => $userId,
            'alamat_lengkap' => $request->alamat_lengkap,
            'provinsi' => $request->provinsi,
            'kota' => $request->kota,
            'kecamatan' => $request->kecamatan,
            'kode_pos' => $request->kode_pos,
            'no_telp' => $request->no_telp,
            'nama' => $request->nama,
            'email' => $request->email,
            'metode_pembayaran' => $request->metode_pembayaran,
            'metode_pengiriman' => $request->metode_pengiriman,
            'status' => $status,
        ]);

        if (!$pesanan) {
            return redirect()->back()->with('error', 'Gagal membuat pesanan');
        }

        if ($request->has('kode_buku') && $request->has('jumlah')) {
            PesananItem::create([
                'kode_pesanan' => $pesanan->kode_pesanan,
                'kode_buku' => $request->kode_buku,
                'jumlah' => $request->jumlah,
            ]);
        } else {
            foreach ($keranjang as $item) {
                PesananItem::create([
                    'kode_pesanan' => $pesanan->kode_pesanan,
                    'kode_buku' => $item->kode_buku,
                    'jumlah' => $item->jumlah,
                ]);
            }
            Keranjang::where('kode_pembeli', $userId)->delete();
        }

        return redirect()->route('ringkasan.showRingkasan', $pesanan->kode_pesanan)->with('success', 'Pesanan berhasil dibuat');
    }

    public function showRingkasan($kodePesanan)
    {
        $pesanan = Pesanan::with('items.produk')->where('kode_pesanan', $kodePesanan)->first();
        $totalHarga = $pesanan->items->sum(function ($item) {
            return $item->produk->harga * $item->jumlah;
        });
        return view('dashboard.pembayaran.ringkasan', compact('pesanan', 'totalHarga'));
    }

    public function uploadBukti(Request $request, $kodePesanan)
    {
        $request->validate([
            'bukti_pembayaran' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $pesanan = Pesanan::where('kode_pesanan', $kodePesanan)->first();

        if (!$pesanan) {
            return redirect()->back()->with('error', 'Pesanan tidak ditemukan');
        }

        $file = $request->file('bukti_pembayaran');
        $fileName = $pesanan->kode_pesanan . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('bukti_pembayaran'), $fileName);

        $pesanan->bukti_pembayaran = $fileName;
        $pesanan->save();

        return redirect()->back()->with('success', 'Bukti pembayaran berhasil diupload');
    }

    public function exportResiPDF($kodePesanan)
    {
        $pesanan = Pesanan::with('items.produk', 'pembeli')->where('kode_pesanan', $kodePesanan)->firstOrFail();
        $totalHarga = $pesanan->items->sum(function ($item) {
            return $item->produk->harga * $item->jumlah;
        });

        $pdf = Pdf::loadView('dashboard.pembayaran.resi', compact('pesanan', 'totalHarga'));

        return $pdf->download('resi-' . $pesanan->kode_pesanan . '.pdf');
    }
}
