<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request; // Import class Request

class Pembayaran extends Model
{
    protected $table = 'tblPembayaran'; 

    protected $fillable = [
        'alamat_lengkap',
        'provinsi',
        'kabupaten',
        'kecamatan',
        'kodePos',
        'nomorTelephone',
        'metodePembayaran',
        'metodePengiriman',
    ];

    public function showForm()
    {
        return view('form_pembayaran');
    }

    public function processPayment(Request $request)
    {
        $request->validate([
            'alamat_lengkap' => 'required|string|max:255',
            'provinsi' => 'required|string|max:255',
            'kabupaten' => 'required|string|max:255',
            'kecamatan' => 'required|string|max:255',
            'kodePos' => 'required|string|max:10',
            'nomorTelephone' => 'required|string|max:15',
            'metodePembayaran' => 'required|string',
            'metodePengiriman' => 'required|string',
        ]);

        
        $pembayaran = new Pembayaran();
        $pembayaran->alamat_lengkap = $request->input('alamat_lengkap');
        $pembayaran->provinsi = $request->input('provinsi');
        $pembayaran->kabupaten = $request->input('kabupaten');
        $pembayaran->kecamatan = $request->input('kecamatan');
        $pembayaran->kodePos = $request->input('kodePos');
        $pembayaran->nomorTelephone = $request->input('nomorTelephone');
        $pembayaran->metodePembayaran = $request->input('metodePembayaran');
        $pembayaran->metodePengiriman = $request->input('metodePengiriman');
        $pembayaran->save(); 
        
        return redirect()->route('payment.form')->with('success', 'Payment information submitted successfully!');
    }
}
