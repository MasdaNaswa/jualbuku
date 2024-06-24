<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Account</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-white font-sans antialiased">
    <div class="container mx-auto p-6">
        <div class="bg-gray-100 p-4 rounded-lg shadow-md">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-bold text-gray-800">User Account</h1>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="bg-red-500 text-white py-2 px-4 rounded hover:bg-red-600" type="submit">Logout</button>
                </form>
            </div>
            <div class="mb-6">
                <h2 class="text-xl font-semibold text-gray-700">Account Name: {{ $user->username }}</h2>
            </div>
            <div>
                <h2 class="text-2xl font-bold text-black">Keranjang Saya</h2>
                @foreach ($keranjang as $item)
                <div class="flex mt-4 justify-between items-start text-base font-thin text-neutral-600">
                    <div class="flex gap-4">
                        <img src="{{ asset('img/produk/' . $item->produk->gambar) }}" class="shrink-0 w-[95px]" />
                        <p class="">{{ $item->produk->judul_buku }}</p>
                    </div>
                    <p class="text-base text-black">Rp. {{ number_format($item->produk->harga, 0, ',', '.') }} x {{ $item->jumlah }}</p>
                </div>
                @endforeach
            </div>
            <div>
                <h2 class="text-2xl font-bold text-black">Pesanan Saya</h2>
                @foreach ($pesanan as $item)
                <div class="flex mt-4 justify-between items-start text-base font-thin text-neutral-600">
                    <div class="flex gap-4">
                        <img src="{{ asset('img/produk/' . $item->produk->gambar) }}" class="shrink-0 w-[95px]" />
                        <p class="">{{ $item->produk->judul_buku }}</p>
                    </div>
                    <p class="text-base text-black">Rp. {{ number_format($item->produk->harga, 0, ',', '.') }} x {{ $item->jumlah }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</body>
</html>
