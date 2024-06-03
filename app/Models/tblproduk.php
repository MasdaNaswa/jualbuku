<?php
// app/Models/Tblproduk.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tblproduk extends Model
{
    protected $table = 'tblproduk';
    public $timestamps = false;

    protected $fillable = ['nama', 'deskripsi', 'harga']; // Tambahkan harga ke fillable

    public $incrementing = true;

    // Tipe data primary key
    protected $keyType = 'int';
}