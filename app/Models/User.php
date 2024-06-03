<?php
// app/Models/User.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    // Yang perlu kita tambahkan adalah fillable agar kolom yang diisi dari form dapat diisi ke dalam database
    protected $fillable = [
        'name', 'email', 'password',
    ];
    public $timestamps = false;

    // Sisanya adalah bawaan dari model User yang dibuat oleh Laravel
}
