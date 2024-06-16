<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'produk';
    public $timestamps = false;

    protected $fillable = ['Gambar_Buku', 
        'Nama_Kategori', 
        'Stok', 
        'Penulis', 
        'Judul_Buku', 
        'Deskripsi', 
        'Harga', 
        'Jumlah_Halaman', 
        'Tanggal_Terbit', 
        'Isbn', 
        'Bahasa', 
        'Penerbit', 
        'Berat', 
        'Lebar', 
        'Panjang']; // Tambahkan harga ke fillable

    public $incrementing = true;

    // Tipe data primary key
    protected $keyType = 'int';
}