<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keranjang extends Model
{
    use HasFactory;

    protected $table = 'keranjang';

    protected $primaryKey = 'kode_keranjang';

    protected $fillable = [
        'kode_buku',
        'kode_pembeli',
        'jumlah',
    ];

    public function produk()
    {
        return $this->belongsTo(Produk::class, 'kode_buku', 'kode_buku');
    }

    public function pembeli()
    {
        return $this->belongsTo(User::class, 'kode_pembeli', 'id');
    }
}
