<?php

use App\Http\Controllers\ListBarangController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginPembeliController;
use App\Http\Controllers\RegisterPembeliController;
use App\Http\Controllers\LupaKataSandiPembeliController;
use App\Http\Controllers\DashboardPembeliController;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\ListProdukController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\LoginAdminController;
use App\Http\Controllers\RegisterAdminController;
use App\Http\Controllers\LupaKataSandiAdminController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\DashboardAdminProdukController;
use App\Http\Controllers\DashboardAdminPesananController;
use App\Http\Controllers\DashboardAdminRekapanController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\DetailProdukController;
use App\Http\Controllers\FormPembayaranController;
use App\Http\Controllers\RingkasanController;
use App\Http\Controllers\ResiController;
use App\Http\Controllers\KeranjangController;



 Route::get('/', function () {
    return view('welcome');
 });

 Route::get('/user/{id}', function ($id) {
    return 'User dengan ID' . $id;
 });

 Route::prefix('admin')->group(function () {
   Route::get('/dashboard', function () {
      return 'Admin Dashboard';
   });

   Route::get('/users', function () {
      return 'Admin Users';
   });
 });



Route::get('/listbarang/{id}/{nama}', [ListBarangController::class, 'tampilkan']);
   
Route::get('/', [HomeController::class, 'index']);


Route::get('/login-pembeli', [LoginPembeliController::class, 'showLoginForm']);


Route::get('/register-pembeli', [RegisterPembeliController::class, 'showForm']);


Route::get('/lupa-kata-sandi', [LupaKataSandiPembeliController::class, 'showLupaKataSandiForm']);


Route::get('/dashboard', [DashboardPembeliController::class, 'index']);



Route::get('/keranjang', [KeranjangController::class, 'tampilkan']);

Route::get('/akun', [akunController::class, 'tampilkan']);

Route::get('/list_produk', [ListProdukController::class, 'show'])->name('produk.list');
Route::post('/list_produk', [ListProdukController::class, 'simpan'])->name('produk.simpan');
Route::delete('/listproduk/{id}', [ListProdukController::class, 'delete'])->name('produk.delete');

Route::get('api/produk', [ApiController::class, 'index']);
Route::get('api/produk', [ApiController::class, 'index']);
Route::get('api/list', [ApiController::class, 'getProduct']);


Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/login-admin', [LoginAdminController::class, 'showLoginForm']);
Route::post('/login-admin', [LoginAdminController::class, 'processLogin']);

Route::get('/register-admin', [RegisterAdminController::class, 'showRegisterForm']);
Route::post('/register-admin', [RegisterAdminController::class, 'processRegister']);

Route::get('/lupa-kata-sandi', [LupaKataSandiAdminController::class, 'showLupaKataSandiForm']);
Route::post('/lupa-kata-sandi', [LupaKataSandiAdminController::class, 'processLupaKataSandi']);

Route::get('/dashboard-admin', [DashboardAdminController::class, 'index']);

Route::get('/dashboard-admin-produk', [DashboardAdminProdukController::class, 'index']);

Route::get('/dashboard-admin-pesanan', [DashboardAdminPesananController::class, 'index']);

Route::get('/dashboard-admin-rekapan', [DashboardAdminRekapanController::class, 'index']);

Route::get('/detail-produk', [DetailProdukController::class, 'index']);

Route::get('/form-pembayaran', [FormPembayaranController::class, 'showForm']);
Route::post('/process-payment', [FormPembayaranController::class, 'processPayment']);


Route::get('/cetak-resi', [ResiController::class, 'showForm']);
Route::get('/generate-pdf', [ResiController::class, 'generatePDF']);

Route::get('/kategori/{kategori}', [KategoriController::class, 'index'])->name('kategori.index');

Route::get('/ringkasan', [RingkasanController::class, 'index'])->name('ringkasan');

Route::get('/keranjang', [KeranjangController::class, 'tampilkan']);

