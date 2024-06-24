@extends('layout.dashboard')

@section('title', 'Detail Produk')

@section('content')
<div class="bg-white py-10  mt-10 ml-10 mr-5 bg-white rounded-lg overflow-hidden">
    <div class="">
        @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
            <strong class="font-bold">Sukses!</strong>
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
        @endif
        @if (session('error'))
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
            <strong class="font-bold">Error!</strong>
            <span class="block sm:inline">{{ session('error') }}</span>
        </div>
        @endif
        <div class="bg-white p-auto m-auto bg-white rounded-lg overflow-hidden max-w-6xl">
            <div class="">
                <div class="flex flex-col md:flex-row -mx-4">
                    <div class="md:flex-1 px-2">
                        <div class="h-[460px] rounded-lg bg-white dark:bg-gray-700 mb-4">
                            <img class="w-full h-full object-cover" src="{{ asset('img/produk/' . $produk->gambar) }}"
                                alt="Product Image">
                        </div>
                    </div>
                    <div class="md:flex-1 px-4">
                        <p class="text-gray-600 dark:text-gray-300 text-sm">
                            {{ $produk->penulis }}
                        </p>
                        <h2 class="text-2xl font-bold text-blue-900 dark:text-white mb-2">{{ $produk->judul_buku }}</h2>
                        <div class="mb-6 w-full">
                            <h2 class="text-lg font-bold mb-2">Deskripsi Buku</h2>
                            <p class="text-gray-700">
                                {{ $produk->deskripsi }}
                            </p>
                        </div>
                        <div class="container flex flex-col">
                            <h2 class="text-lg font-bold mb-2">Detail Buku</h2>
                            <div class="grid grid-cols-2 gap-4">
                                <div class="text-left">
                                    <p><span class="font-semibold">Jumlah Halaman</span>: {{ $produk->jumlah_halaman }}
                                    </p>
                                    <p><span class="font-semibold">Tanggal Terbit</span>: {{ $produk->tanggal_terbit }}
                                    </p>
                                    <p><span class="font-semibold">ISBN</span>: {{ $produk->isbn }}</p>
                                    <p><span class="font-semibold">Bahasa</span>: {{ $produk->bahasa }}</p>
                                    <p><span class="font-semibold">Penerbit</span>: {{ $produk->penerbit }}</p>
                                </div>
                                <div class="text-left">
                                    <p><span class="font-semibold">Berat</span>: {{ $produk->berat }} gram</p>
                                    <p><span class="font-semibold">Lebar</span>: {{ $produk->lebar }} cm</p>
                                    <p><span class="font-semibold">Panjang</span>: {{ $produk->panjang }} cm</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex mx-2 mb-4 md:ml-8">
                        <div class="md:flex-1">
                            <div class="p-10 bg-white rounded shadow-md">
                                <div class="flex flex-col items-start mb-4">
                                    <div class="flex flex-col items-start mb-4">
                                        <span class="text-lg font-bold mb-2">Review buku</span>
                                        <div id="star-container" class="flex space-x-1">
                                            <span data-value="1"
                                                class="star text-gray-400 cursor-pointer text-3xl">&#9733;</span>
                                            <span data-value="2"
                                                class="star text-gray-400 cursor-pointer text-3xl">&#9733;</span>
                                            <span data-value="3"
                                                class="star text-gray-400 cursor-pointer text-3xl">&#9733;</span>
                                            <span data-value="4"
                                                class="star text-gray-400 cursor-pointer text-3xl">&#9733;</span>
                                            <span data-value="5"
                                                class="star text-gray-400 cursor-pointer text-3xl">&#9733;</span>
                                        </div>
                                    </div>
                                    <div class="flex flex-col items-start mb-4">
                                        <span class="text-lg font-bold mb-2">Harga buku</span>
                                        <p class="text-gray-700">Rp {{ number_format($produk->harga, 0, ',', '.') }}</p>
                                    </div>
                                    <div class="flex flex-col items-center mb-4">
                                        <span class="text-lg font-bold mb-2">Jumlah Stok</span>
                                        <div class="flex items-center space-x-4">
                                            <button id="decrease"
                                                class="px-3 py-1 text-lg font-bold text-gray-700 border border-gray-300 rounded">-</button>
                                            <span id="quantity" class="text-xm font-bold text-gray-700">1</span>
                                            <button id="increase"
                                                class="px-3 py-1 text-lg font-bold text-gray-700 border border-gray-300 rounded">+</button>
                                        </div>
                                    </div>
                                    <div class="w-full px-2 mt-2">
                                        <form action="{{ route('keranjang.store') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="jumlah" value="1">
                                            <input type="hidden" name="kode_buku" value="{{ $produk->kode_buku }}">
                                            <button type="submit"
                                                class="w-full bg-blue-900 text-white py-2 rounded-lg font-bold hover:bg-blue-700 text-xs">Tambah
                                                Keranjang</button>
                                        </form>
                                    </div>
                                    <div class="w-full px-2 mt-2">
                                        <a
                                            href="{{ route('pembayaran.showForm', ["kode_buku" => $produk->kode_buku]) }}">
                                            <button
                                                class="w-full bg-blue-900 text-white py-2 rounded-lg font-bold hover:bg-blue-700 text-xs">Beli
                                                Sekarang</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-10">
        @include('components.rekomendasi')
    </div>
        
    </div>
</div>
<div>
</div>


@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const decreaseButton = document.getElementById('decrease');
        const increaseButton = document.getElementById('increase');
        const quantityDisplay = document.getElementById('quantity');
        const quantityInput = document.querySelector('input[name="jumlah"]');
        const stars = document.querySelectorAll('#star-container .star');

        let quantity = 1;
        let rating = 0;

        decreaseButton.addEventListener('click', function () {
            if (quantity > 1) {
                quantity--;
                quantityDisplay.textContent = quantity;
                quantityInput.value = quantity;
            }
        });

        increaseButton.addEventListener('click', function () {
            quantity++;
            quantityDisplay.textContent = quantity;
            quantityInput.value = quantity;
        });

        stars.forEach(star => {
            star.addEventListener('click', function () {
                rating = this.getAttribute('data-value');
                updateStars(rating);
            });
        });

        function updateStars(rating) {
            stars.forEach(star => {
                if (star.getAttribute('data-value') <= rating) {
                    star.classList.remove('text-gray-400');
                    star.classList.add('text-blue-900');
                } else {
                    star.classList.remove('text-blue-900');
                    star.classList.add('text-gray-400');
                }
            });
        }
    });

</script>
@endpush
