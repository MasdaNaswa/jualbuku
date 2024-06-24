<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('produk', function (Blueprint $table) {
            $table->id('kode_buku');
            $table->unsignedBigInteger('kode_kategori');
            $table->foreign('kode_kategori')->references('kode_kategori')->on('kategori')->onDelete('cascade');
            $table->string('gambar');
            $table->string('judul_buku');
            $table->decimal('harga', 10, 2);
            $table->integer('stok');
            $table->string('penulis');
            $table->string('deskripsi');
            $table->integer('jumlah_halaman');
            $table->date('tanggal_terbit');
            $table->string('isbn');
            $table->string('bahasa');
            $table->string('penerbit');
            $table->integer('berat');
            $table->integer('lebar');
            $table->integer('panjang');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produk');
    }
};
