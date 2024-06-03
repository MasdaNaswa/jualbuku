<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class ResiController extends Controller
{
    public function showForm()
    {
        return view('resi');
    }

    public function generatePDF()
    {
        $data = []; // You can pass any necessary data to the view here

        $pdf = PDF::loadView('resi', $data);

        return $pdf->download('cetak-resi.pdf');
    }
}
