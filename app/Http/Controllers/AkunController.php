<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AkunController extends Controller
{
    /**
     * Display the user account page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $user = Auth::user();
        $keranjang = $user->keranjang; // Fetch related carts
        $pesanan = $user->pesanan; // Fetch related orders

        return view('dashboard.akun.index', compact('user', 'keranjang', 'pesanan'));
    }

    /**
     * Display the order summary.
     *
     * @param string $kodePesanan
     * @return \Illuminate\View\View
     */
    public function showRingkasan($kodePesanan)
    {
        $pesanan = Pesanan::with('items.produk')->where('kode_pesanan', $kodePesanan)->first();
        $totalHarga = $pesanan->items->sum(function ($item) {
            return $item->produk->harga * $item->jumlah;
        });
        return view('dashboard.pembayaran.ringkasan', compact('pesanan', 'totalHarga'));
    }

    /**
     * Log the user out.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout()
    {
        auth()->logout();

        return redirect()->route('login');
    }
}

?>