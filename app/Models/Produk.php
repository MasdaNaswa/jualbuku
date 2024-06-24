<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $table = 'produk';

    protected $primaryKey = 'kode_buku';

    protected $fillable = [
        'kode_kategori',
        'gambar',
        'judul_buku',
        'harga',
        'stok',
        'penulis',
        'deskripsi',
        'jumlah_halaman',
        'tanggal_terbit',
        'isbn',
        'bahasa',
        'penerbit',
        'berat',
        'lebar',
        'panjang',
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kode_kategori', 'kode_kategori');
    }

    public function keranjang()
    {
        return $this->hasMany(Keranjang::class, 'kode_buku', 'kode_buku');
    }

    public function pesanan()
    {
        return $this->hasMany(Pesanan::class, 'kode_buku', 'kode_buku');
    }
}
