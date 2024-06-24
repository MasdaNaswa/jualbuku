<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tblpembayaran', function (Blueprint $table) {
            $table->id();
            $table->string('metode_pembayaran');
    $table->string('metode_pengiriman');
    $table->string('alamat_lengkap');
    $table->string('provinsi');
    $table->string('kabupaten');
    $table->string('kecamatan');
    $table->string('kode_pos');
    $table->string('nomor_telephone');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tblpembayaran');
    }
};
