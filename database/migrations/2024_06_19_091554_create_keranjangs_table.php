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
        Schema::create('keranjang', function (Blueprint $table) {
            $table->id('kode_keranjang');
            $table->unsignedBigInteger('kode_buku');
            $table->foreign('kode_buku')->references('kode_buku')->on('produk')->onDelete('cascade');
            $table->unsignedBigInteger('kode_pembeli');
            $table->foreign('kode_pembeli')->references('id')->on('users')->onDelete('cascade');
            $table->integer('jumlah');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keranjang');
    }
};
