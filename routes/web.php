<?php

use App\Http\Controllers\ListBarangController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginPembeliController;
use App\Http\Controllers\RegisterPembeliController;
use App\Http\Controllers\LupaKataSandiPembeliController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\DashboardPembeliController;
use App\Http\Controllers\DetailProdukController;

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

 //Route::get('/listbarang/{id}/{nama}', function($id, $nama){
 //  return view('list_barang', compact('id', 'nama'));
 // });

 Route::get('/listbarang/{id}/{nama}', [ListBarangController::class, 'tampilkan']);
   
Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', [HomeController::class, 'contact']);

Route::get('/login-pembeli', [LoginPembeliController::class, 'showLoginForm']);
Route::post('/login-pembeli', [LoginPembeliController::class, 'processLogin']);

Route::get('/register-pembeli', [RegisterPembeliController::class, 'showRegisterForm']);
Route::post('/register-pembeli', [RegisterPembeliController::class, 'processRegister']);

Route::get('/lupa-kata-sandi', [LupaKataSandiPembeliController::class, 'showLupaKataSandiForm']);
Route::post('/lupa-kata-sandi', [LupaKataSandiPembeliController::class, 'processLupaKataSandi']);

Route::get('/Bukunovel', [BukuController::class, 'tampilkan']);

Route::get('/dashboard', [DashboardPembeliController::class, 'index']);

Route::get('/detail-produk', [DetailProdukController::class, 'index']);


