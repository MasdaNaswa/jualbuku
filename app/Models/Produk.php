<?php
// app/Models/Tblproduk.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class tblproduk extends Model
{
    protected $table = 'tblproduk';
    public $timestamps = false;

    protected $fillable = ['nama', 'deskripsi', 'harga']; // Tambahkan harga ke fillable
}
