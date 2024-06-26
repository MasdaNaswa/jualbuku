<?php

// Controller (FormPembayaranController.php)

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembayaran; 

class FormPembayaranController extends Controller
{
    public function showForm()
    {
        return view('form_pembayaran');
    }

    public function processPayment(Request $request)
    {
        $request->validate([
            'alamatLengkap' => 'required|string|max:255',
            'provinsi' => 'required|string|max:255',
            'kabupaten' => 'required|string|max:255',
            'kecamatan' => 'required|string|max:255',
            'kodePos' => 'required|string|max:10',
            'nomorTelephone' => 'required|string|max:15',
            'metodePembayaran' => 'required|string',
            'metodePengiriman' => 'required|string',
        ]);

        $pembayaran = new Tblpembayaran();
        $pembayaran->alamat_lengkap = $request->input('alamatLengkap');
        $pembayaran->provinsi = $request->input('provinsi');
        $pembayaran->kabupaten = $request->input('kabupaten');
        $pembayaran->kecamatan = $request->input('kecamatan');
        $pembayaran->kodePos = $request->input('kodePos');
        $pembayaran->nomorTelephone = $request->input('nomorTelephone');
        $pembayaran->metodePembayaran = $request->input('metodePembayaran');
        $pembayaran->metodePengiriman = $request->input('metodePengiriman');
        
        return redirect()->route('payment.form')->with('success', 'Payment information submitted successfully!');
    }
}

?>
