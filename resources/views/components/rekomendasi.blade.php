<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="bg-white py-10 mt-10 ml-10 mr-5 bg-white shadow-lg rounded-lg overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Sesuaikan max-width dengan kebutuhan Anda -->
            <h2 class="text-blue-900 text-2xl font-bold ml-10 text-center">Rekomendasi Buku</h2>
            <div class="p-1 flex flex-wrap items-center justify-center">
                @php
                $rekomendasibuku = \App\Models\Produk::inRandomOrder()->take(4)->get();
                @endphp
                @foreach($rekomendasibuku as $produk)
                <div class="flex-shrink-0 m-3 relative overflow-hidden bg-white rounded-lg max-w-xs shadow-lg">
                    <svg class="absolute bottom-0 left-0 mb-8" viewBox="0 0 375 283" fill="none"
                        style="transform: scale(1.5); opacity: 0.1;">
                        <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)"
                            fill="white" />
                        <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)"
                            fill="white" />
                    </svg>
                    <div class="relative pt-10 px-10 flex items-center justify-center">
                        <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3" style="">
                        </div>
                        <img class="relative w-40 rounded-lg" src="{{ asset('img/produk/' . $produk->gambar) }}" alt="">
                    </div>
                    <div class="relative text-white px-6 pb-6 mt-6">
                        <span class="block opacity-75 -mb-1 text-xs text-gray-700">{{$produk->penulis}}</span>
                        <div class="flex justify-between">
                            <a href="{{ route('produk.show', $produk->kode_buku) }}"
                                class="text-blue-900 text-m font-bold py-2">{{ $produk->judul_buku }}</a>
                        </div>
                        <div class="block font-semibold text-s text-black mt-4">Rp
                            {{ number_format($produk->harga, 0, ',', '.') }}</div>
                        <div class="text-center mt-4">
                            <form action="{{ route('keranjang.store') }}" method="post">
                                @csrf
                                <input type="hidden" name="kode_buku" value="{{ $produk->kode_buku }}">
                                <button type="submit"
                                    class="text-blue-400 font-semibold border border-blue-400 rounded-lg px-2 py-2 bg-white hover:bg-blue-400 hover:text-white">
                                    Tambah Keranjang
                                </button>

                            </form>
                        </div>
                    </div>

                </div>
                @endforeach
            </div>
        </div>
    </div>
</body>

</html>
