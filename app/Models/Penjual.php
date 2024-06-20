<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Penjual extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'penjual';

    protected $fillable = [
        'nama_pengguna', 'email', 'password',
    ];

    public $timestamps = false;
}
