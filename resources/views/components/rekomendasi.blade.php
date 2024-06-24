<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="bg-white py-10  mt-10 ml-10 mr-5 bg-white rounded-lg overflow-hidden">
        <div class="max-w mx- px- sm:px- lg:px-">
            <h2 class="text-blue-900 text-2xl font-bold text-center mx-auto">Rekomendasi Buku</h2>
            <div class="p-1 flex flex-wrap items-center justify-center">
                @forelse ($produk->take(4) as $item)
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
                        <img class="relative w-40 rounded-lg" src="{{ asset('img/produk/' . $item->gambar) }}" alt="">
                    </div>
                    <div class="relative text-white px-6 pb-6 mt-6">
                        <span class="block opacity-75 -mb-1 text-xs text-gray-700">{{ $item->penulis }}</span>
                        <div class="flex justify-between">
                            <span class="block font-bold text-xs text-blue-900 mt-2">{{ $item->judul_buku }}</span>
                        </div>
                        <div class="block font-semibold text-s text-black mt-4">
                            {{ 'Rp. ' . number_format($item->harga, 0, ',', '.') }}</div>
                        <form action="{{ route('keranjang.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="kode_buku" value="{{ $item->kode_buku }}">
                            <button type="submit" class="btn btn-primary rounded-lg mt-4">Tambah Keranjang</button>
                        </form>
                    </div>
                </div>
                @empty
                <div class="text-center">
                    <p class="text-gray-600 text-m text-center py-5">Tidak ada produk</p>
                </div>
                @endforelse
            </div>
        </div>
</body>

</html>
