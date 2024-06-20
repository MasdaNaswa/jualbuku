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
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\DetailProdukController;
use App\Http\Controllers\FormPembayaranController;
use App\Http\Controllers\RingkasanController;
use App\Http\Controllers\ResiController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\LupaController;
use App\Http\Controllers\KategoriAdminController;



//Tampilan Awal//
Route::get('/', [HomeController::class, 'index']);


Route::get('produk', [ProdukController::class, 'index']);
Route::get('produk/Edit/{id}/', [ProdukController::class, 'edit']);
Route::get('produk/create/{id}/', [ProdukController::class, 'create'])->name('produk.create');
Route::post('produk/Store', [ProdukController::class, 'store']);
Route::get('produk/Delete/{id}', [ProdukController::class, 'destroy']);

Route::get('/', [HomeController::class, 'index']);

//Login//
Route::get('/login-pembeli', [LoginPembeliController::class, 'showLoginForm'])->name('login_pembeli');
Route::post('/login_proses', [LoginPembeliController::class, 'login_proses'])->name('login_proses');



//Registrasi//
Route::get('/register-pembeli', [LoginPembeliController::class, 'showForm'])->name('register-pembeli');
Route::post('/register_proses', [LoginPembeliController::class, 'register_proses'])->name('register_proses');


//lupa kata sandi//
Route::get('/lupa', [LoginPembeliController::class, 'tampilkan'])->name('lupa');
Route::post('/lupa_proses', [LoginPembeliController::class, 'tampilkan'])->name('lupa_proses');
Route::post('/lupa_proses', [LoginPembeliController::class, 'lupa_proses'])->name('lupa_proses');
Route::get('/validasi_lupa/{token}', [LoginPembeliController::class, 'validasi_lupa'])->name('validasi_lupa');
Route::post('/validasi_lupa_act', [LoginPembeliController::class, 'validasi_lupa_act'])->name('validasi_lupa_act');


//log out//
Route::get('/logout', [LoginPembeliController::class, 'logout'])->name('logout');


//dashboard//
Route::get('/dashboard', [DashboardPembeliController::class, 'index'])->name('dashboard');


//keranjang//
Route::get('/keranjang', [KeranjangController::class, 'tampilkan']);
Route::get('/keranjang', [KeranjangController::class, 'tampilkan']);


//akun//
Route::get('/akun', [akunController::class, 'tampilkan']);


//detail produk//
Route::get('/detail-produk', [DetailProdukController::class, 'index']);


//form pembayaran//
Route::get('/form-pembayaran', [FormPembayaranController::class, 'showForm']);
Route::post('/process-payment', [FormPembayaranController::class, 'processPayment']);


//cetak Resi//
Route::get('/cetak-resi', [ResiController::class, 'showForm']);
Route::get('/generate-pdf', [ResiController::class, 'generatePDF']);


//kategori//
Route::get('/kategori/{kategori}', [KategoriController::class, 'index'])->name('kategori.index');


//ringkasan//
Route::get('/ringkasan', [RingkasanController::class, 'index'])->name('ringkasan');


//list Produk//
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


//login admin//
Route::get('/login-admin', [LoginAdminController::class, 'showLoginForm'])->name('login_admin');
Route::post('/login_proses_admin', [LoginAdminController::class, 'login_proses_admin'])->name('login_proses_admin');


Route::get('/dashboard-admin-produk', [DashboardAdminProdukController::class, 'index']);
Route::post('/dashboard-admin-produk', [DashboardAdminProdukController::class, 'store']);
Route::post('/dashboard-admin-produk/update/{id}', [DashboardAdminProdukController::class, 'update']);
Route::post('/dashboard-admin-produk/hapus/{id}', [DashboardAdminProdukController::class, 'destroy']);

//register admin//
Route::get('/register-admin', [LoginAdminController::class, 'showRegisterForm'])->name('register-admin');
Route::post('/register_proses_admin', [LoginAdminController::class, 'register_proses_admin'])->name('register_proses_admin');



//lupa kata sandi admin//
Route::get('/lupa_admin', [LoginAdminController::class, 'tampilkan'])->name('lupa_admin');
Route::post('/lupa_proses', [LoginAdminController::class, 'tampilkan'])->name('lupa_proses');
Route::post('/lupa_proses_admin', [LoginAdminController::class, 'lupa_proses_admin'])->name('lupa_proses_admin');
Route::get('/validasi_lupa/{token}', [LoginAdminController::class, 'validasi_lupa'])->name('validasi_lupa');
Route::post('/validasi_lupa_act_admin', [LoginAdminController::class, 'validasi_lupa_act_admin'])->name('validasi_lupa_act_admin');



//dashboard admin//
Route::get('/dashboard-admin', [DashboardAdminController::class, 'index'])->name('dashboard-admin');


//dashboard admin produk
Route::get('/dashboard-admin-produk', [DashboardAdminProdukController::class, 'index'])->name('dashboard-admin-produk.index');
Route::post('/dashboard-admin-produk', [DashboardAdminProdukController::class, 'store'])->name('dashboard-admin-produk.store');
Route::put('/dashboard-admin-produk/{id}', [DashboardAdminProdukController::class, 'update'])->name('dashboard-admin-produk.update');
Route::delete('/dashboard-admin-produk/{id}', [DashboardAdminProdukController::class, 'destroy'])->name('dashboard-admin-produk.destroy');

//dashboard admin pesanan//
Route::get('/dashboard-admin-pesanan', [DashboardAdminPesananController::class, 'index']);


//dashboard admin rekapan//
Route::get('/dashboard-admin-rekapan', [DashboardAdminRekapanController::class, 'index']);

Route::get('/detail-produk', [DetailProdukController::class, 'index']);

Route::get('/form-pembayaran', [FormPembayaranController::class, 'showForm']);
Route::post('/process-payment', [FormPembayaranController::class, 'processPayment']);


Route::get('/cetak-resi', [ResiController::class, 'showForm']);
Route::get('/generate-pdf', [ResiController::class, 'generatePDF']);

Route::get('/kategori/{kategori}', [KategoriController::class, 'index'])->name('kategori.index');

Route::get('/ringkasan', [RingkasanController::class, 'index'])->name('ringkasan');

Route::get('/keranjang', [KeranjangController::class, 'tampilkan']);

//dashboard admin pembayaran//
Route::get('/dashboard-admin-kategori', [KategoriAdminController::class, 'tampilkan']);