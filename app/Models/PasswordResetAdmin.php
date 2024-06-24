<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PasswordResetAdmin extends Model
{
    use HasFactory;
    protected $table = 'password_reset_admin';
    protected $primaryKey = 'email';
    public $timestmaps = false;
    protected $fillable = [
        'email',
        'token',
        'created_at',
    ];
}
