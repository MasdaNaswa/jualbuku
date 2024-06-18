<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $table = 'produk';
    protected $fillable = [
        'gambar_buku',
        'nama_kategori',
        'judul_buku',
        'penulis',
        'harga',
        'deskripsi',
        'stok',
        'jumlah_halaman',
        'tgl_terbit',
        'isbn',
        'bahasa',
        'penerbit',
        'berat',
        'lebar',
        'panjang',
    ];
}
