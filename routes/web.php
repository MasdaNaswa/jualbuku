<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginPembeliController;
use App\Http\Controllers\DashboardPembeliController;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\ListProdukController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\LoginAdminController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\DashboardAdminProdukController;
use App\Http\Controllers\DashboardAdminPesananController;
use App\Http\Controllers\DashboardAdminRekapanController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\DetailProdukController;
use App\Http\Controllers\FormPembayaranController;
use App\Http\Controllers\RingkasanController;
use App\Http\Controllers\ResiController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\RekapanController;
use Illuminate\Support\Facades\Auth;


Route::get('api/produk', [ApiController::class, 'index']);
Route::get('api/produk', [ApiController::class, 'index']);
Route::get('api/list', [ApiController::class, 'getProduct']);
Route::get('api/kategori', [ApiController::class, 'getKategori']);
Route::get('api/keranjang', [ApiController::class, 'getKeranjang']);
Route::get('api/pesanan', [ApiController::class, 'getPesanan']);
Route::get('api/pesanan-item', [ApiController::class, 'getPesananItems']);
Route::get('api/user', [ApiController::class, 'getUsers']);





Route::get('/', function () {
    if (Auth::check() && Auth::user()->role == 'pembeli') {
        return redirect()->route('dashboard');
    } else if (Auth::check() && Auth::user()->role == 'admin') {
        return redirect()->route('dashboard.admin');
    } else {
        return redirect()->route('dashboard');
    }
});

Route::get('/login-pembeli', [LoginPembeliController::class, 'showLoginForm']);
Route::get('/register-pembeli', [RegisterPembeliController::class, 'showForm']);
Route::get('/lupa-kata-sandi', [LupaKataSandiPembeliController::class, 'showLupaKataSandiForm']);
// Route::get('/dashboard', [DashboardPembeliController::class, 'index']);
Route::get('/keranjang', [KeranjangController::class, 'tampilkan']);
Route::get('/register', [RegisterController::class, 'showRegistrationForm']);
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/login-admin', [LoginAdminController::class, 'showLoginForm']);
Route::post('/login-admin', [LoginAdminController::class, 'processLogin']);
Route::get('/register-admin', [RegisterAdminController::class, 'showRegisterForm']);
Route::post('/register-admin', [RegisterAdminController::class, 'processRegister']);
Route::get('/lupa-kata-sandi', [LupaKataSandiAdminController::class, 'showLupaKataSandiForm']);
Route::post('/lupa-kata-sandi', [LupaKataSandiAdminController::class, 'processLupaKataSandi']);
Route::get('/dashboard-admin', [DashboardAdminController::class, 'index']);

// Route::get('/dashboard-admin-produk', [DashboardAdminProdukController::class, 'index']);
Route::get('/dashboard-admin-pesanan', [DashboardAdminPesananController::class, 'index']);
Route::get('/dashboard-admin-rekapan', [DashboardAdminRekapanController::class, 'index']);

Route::get('/detail-produk', [DetailProdukController::class, 'index']);
Route::get('/rekomendasi', [ProdukController::class, 'rekomendasi'])->name('rekomendasi');
// Route::get('/form-pembayaran', [FormPembayaranController::class, 'showForm']);
Route::post('/process-payment', [FormPembayaranController::class, 'processPayment']);


Route::get('/cetak-resi', [ResiController::class, 'showForm']);
Route::get('/generate-pdf', [ResiController::class, 'generatePDF']);

Route::get('/kategori/{kategori}', [KategoriController::class, 'index'])->name('kategori.index');
Route::get('/ringkasan', [RingkasanController::class, 'index'])->name('ringkasan');
// Route::get('/keranjang', [KeranjangController::class, 'tampilkan']);

Route::get('/login', [LoginController::class, 'showPembeliLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'authenticatePembeli'])->name('authenticate');
Route::get('/register', [RegisterController::class, 'showPembeliRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'registerPembeli'])->name('register');
Route::post('/logout', [LoginController::class, 'logoutPembeli'])->name('logout');

Route::get('/forget-password', [ForgotPasswordController::class, 'index'])->name('forget-password.index');
Route::post('/forget-password', [ForgotPasswordController::class, 'send'])->name('forget-password.send');

Route::get('/reset-password/{token}', [ForgotPasswordController::class, 'reset'])->name('reset-password.index');
Route::post('/reset-password/{token}', [ForgotPasswordController::class, 'update'])->name('reset-password.update');

Route::group(['prefix' => 'dashboard'], function () {
    Route::get('/', [DashboardPembeliController::class, 'index'])->name('dashboard');

    Route::group(['middleware' => 'auth'], function () {
        Route::get('/produk/{produk}', [ProdukController::class, 'show'])->name('produk.show');
        Route::get('/akun', [AkunController::class, 'index'])->name('akun.index');
Route::get('/akun/ringkasan/{kodePesanan}', [AkunController::class, 'showRingkasan'])->name('akun.showRingkasan');
        Route::get('/list-produk', [ListProdukController::class, 'index'])->name('list-produk.index');
        Route::get('/list-produk/{produk}', [ListProdukController::class, 'show'])->name('list-produk.show');
        
        Route::get('/keranjang', [KeranjangController::class, 'index'])->name('keranjang.index');
        Route::post('/keranjang', [KeranjangController::class, 'store'])->name('keranjang.store');
        Route::put('/keranjang/{id}/update', [KeranjangController::class, 'update'])->name('keranjang.update');
        Route::delete('/keranjang/{keranjang}', [KeranjangController::class, 'destroy'])->name('keranjang.destroy');

        Route::get('/form-pembayaran', [PesananController::class, 'showForm'])->name('pembayaran.showForm');
        Route::post('/form-pembayaran', [PesananController::class, 'checkout'])->name('pembayaran.checkout');

        Route::get('/ringkasan/{ringkasan}', [PesananController::class, 'showRingkasan'])->name('ringkasan.showRingkasan');
        Route::post('/ringkasan/{ringkasan}', [PesananController::class, 'uploadBukti'])->name('ringkasan.uploadBukti');
        Route::get('/ringkasan/{ringkasan}/export', [PesananController::class, 'exportResiPDF'])->name('ringkasan.exportResiPDF');

        Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori.index');
    });

    Route::group(['prefix' => 'admin'], function () {
        Route::get('/login', [LoginController::class, 'showAdminLoginForm'])->name('login.admin');
        Route::post('/login', [LoginController::class, 'authenticateAdmin'])->name('authenticate.admin');
        Route::get('/register', [RegisterController::class, 'showAdminRegistrationForm'])->name('register.admin');
        Route::post('/register', [RegisterController::class, 'registerAdmin'])->name('register.admin');
        
        Route::group(['middleware' => 'admin'], function () {
            Route::get('/logout', [LoginController::class, 'logoutAdmin'])->name('logout.admin');

            Route::get('/', [DashboardAdminController::class, 'index'])->name('dashboard.admin');
            Route::get('/produk', [ProdukController::class, 'index'])->name('produk.index');
            Route::post('/produk', [ProdukController::class, 'store'])->name('produk.store');
            Route::put('/produk/{produk}', [ProdukController::class, 'update'])->name('produk.update');
            Route::delete('/produk/{produk}', [ProdukController::class, 'destroy'])->name('produk.destroy');

            Route::get('/pesanan', [PesananController::class, 'index'])->name('pesanan.index');
            Route::put('/pesanan/{pesanan}', [PesananController::class, 'updateStatus'])->name('pesanan.updateStatus');

            Route::get('/rekapan', [RekapanController::class, 'index'])->name('rekapan.index');
        });
    });
});
