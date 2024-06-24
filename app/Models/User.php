<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'username',
        'email',
        'password',
        'role',
    ];
    
    public $timestamps = false;

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function isAdmin(): bool
    {
        return $this->role === 'admin';
    }

    public function isPembeli(): bool
    {
        return $this->role === 'pembeli';
    }

    public function keranjang()
    {
        return $this->hasMany(Keranjang::class, 'kode_pembeli', 'id');
    }

    public function pesanan()
    {
        return $this->hasMany(Pesanan::class, 'kode_pembeli', 'id');
    }
}
