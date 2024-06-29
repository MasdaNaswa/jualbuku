<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Document</title>
</head>

<body>
    <style>
        .btn {
            color: #5F93CB;
            font-size: 11px;
            text-transform: ;
            font-weight: bold;
            background: none;
            border: 1px solid #5F93CB;
            padding: 6px 14px;
            margin-top: 5px;
            line-height: 16px;
            border-radius: 10px;
        }

        ..btn:hover,
        .btn:focus {
            color: #fff;
            background: #5F93CB;
            box-shadow: none;
        }

        .btn i {
            font-size: 14px;
            font-weight: bold;
            margin-left: 5px;
        }
    </style>


    <div class="bg-blue-900 py-16 sm:py-24 lg:py-32">
        <div class="mx-auto grid max-w-7xl grid-cols-1 gap-10 px-6 lg:grid-cols-12 lg:gap-8 lg:px-8">
            <div class="max-w-xl text-3xl font-bold tracking-tight text-white sm:text-4xl lg:col-span-7">
                <h2 class="inline sm:block lg:inline xl:block text-left">Temukan Petualangan Baru</h2>
                <p class="inline sm:block lg:inline xl:block text-left">Dengan Melihat Koleksi Buku Terbaru</p>
            </div>
        </div>
    </div>
    <div class="border-solid border-2 border-sky-500 py-10">
        <div>
            <h2 class="text-blue-900 text-2xl font-bold py-10">Buku Terbaru <i class='bx bxs-hot'></i></h2>
            <div class="p-1 flex flex-wrap items-center justify-center">
                @forelse ($produk->take(12) as $item)
                    <div class="flex-shrink-0 m-6 relative overflow-hidden bg-white rounded-lg max-w-xs shadow-lg">
                        <svg class="absolute bottom-0 left-0 mb-8" viewBox="0 0 375 283" fill="none"
                            style="transform: scale(1.5); opacity: 0.1;">
                            <rect x="159.52" y="175" width="152" height="152" rx="8"
                                transform="rotate(-45 159.52 175)" fill="white" />
                            <rect y="107.48" width="152" height="152" rx="8"
                                transform="rotate(-45 0 107.48)" fill="white" />
                        </svg>
                        <div class="relative pt-10 px-10 flex items-center justify-center">
                            <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3" style="">
                            </div>
                            <img class="relative w-40 rounded-lg" src="{{ asset('img/produk/' . $item->gambar) }}"
                                alt="">
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
