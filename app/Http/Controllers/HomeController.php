<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index ()
    {
       // $data = [
         //   'nama' => 'Doraemon',
           // 'pekerjaan' => 'Developer',
        // ];

        $nama = "Nobita";
        $pekerjaan = "Student";

        return view ('home', compact ('nama', 'pekerjaan'));

    }

    public function contanct ()
    {
        return view('contact');
    }
}
?>