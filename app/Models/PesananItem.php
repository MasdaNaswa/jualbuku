<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesananItem extends Model
{
    use HasFactory;

    protected $table = 'pesanan_items';

    protected $fillable = [
        'kode_pesanan',
        'kode_buku',
        'jumlah'
    ];

    public function pesanan()
    {
        return $this->belongsTo(Pesanan::class, 'kode_pesanan', 'kode_pesanan');
    }

    public function produk()
    {
        return $this->belongsTo(Produk::class, 'kode_buku', 'kode_buku');
    }
}
