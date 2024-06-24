<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriAdminController extends Controller
{
    public function tampilkan(){
        return view('kategori_admin');
    }
}
