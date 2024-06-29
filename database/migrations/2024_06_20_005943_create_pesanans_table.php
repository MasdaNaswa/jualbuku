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
        Schema::create('pesanan', function (Blueprint $table) {
            $table->uuid('kode_pesanan')->primary();
            $table->unsignedBigInteger('kode_pembeli');
            $table->foreign('kode_pembeli')->references('id')->on('users')->onDelete('cascade');
            $table->string('alamat_lengkap');
            $table->string('provinsi');
            $table->string('kota');
            $table->string('kecamatan');
            $table->string('kode_pos');
            $table->string('no_telp');
            $table->string('nama'); // Tambahkan kolom 'nama'
            $table->string('email');
            $table->string('bukti_pembayaran')->nullable();
            $table->enum('metode_pembayaran', ['DANA', 'COD']);
            $table->enum('metode_pengiriman', ['JNE', 'JNT', 'POS']);
            $table->enum('status', ['menunggu', 'ditolak', 'diterima'])->default('menunggu');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesanan');
    }
};
