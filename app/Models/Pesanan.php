<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'pesanan';

    protected $primaryKey = 'kode_pesanan';

    protected $fillable = [
        'kode_pembeli',
        'alamat_lengkap',
        'provinsi',
        'kota',
        'kecamatan',
        'kode_pos',
        'no_telp',
        'email',
        'nama',
        'bukti_pembayaran',
        'metode_pembayaran',
        'metode_pengiriman',
        'status'
    ];

    public function items()
    {
        return $this->hasMany(PesananItem::class, 'kode_pesanan', 'kode_pesanan');
    }

    public function pembeli()
    {
        return $this->belongsTo(User::class, 'kode_pembeli', 'id');
    }
}
