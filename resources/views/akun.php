<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Account</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<div>
    <header>
        <!-- Navbar -->
        <nav class="bg-blue-900 py-4">
            <div class="container mx-auto flex justify-between items-center px-20">

                <!-- Logo -->
                <div>
                    <a href="{{ route('dashboard') }}" class="text-white text-2xl font-bold">Landing Library</a>
                </div>

                <!-- Categories -->
                <div class="hidden md:flex space-x-4">
                    <div class="relative group ml-6">
                        <button
                            class="text-white text-xm font-bold hover:bg-blue-900 px-3 py-2 rounded-md inline-flex items-center">
                            <span>Kategori Buku</span>
                            <svg class="h-3 w-3 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                    d="M19 9l-7 7-7-7">
                                </path>
                            </svg>
                        </button>
                        <div
                            class="absolute z-10 hidden group-hover:flex flex-col bg-white rounded-md shadow-lg py-1 px-6 w-96">
                            <div class="flex flex-col">
                                @php
                                $kategori = \App\Models\Kategori::all();
                                @endphp
                                @foreach ($kategori as $item)
                                <a href="{{ route('kategori.index', ['kategori' => $item->kategori]) }}"
                                    class="block px-2 py-2 text-sm text-blue-900 font-bold">Buku
                                    {{ $item->kategori }}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>




                <!-- Search Bar -->
                <div class="flex-grow mx-4">
                    <!-- Adjusted margin -->
                    <form action="#" method="GET" class="flex">
                        <input type="text"
                            class="w-full md:w-72 h-10 px-4 rounded-full focus:outline-none focus:ring focus:border-blue-900"
                            placeholder="Cari buku disini"><!-- Adjusted width and added rounded-l-full -->
                        <button type="submit"
                            class="bg-blue-900 hover:bg-blue-900 text-white font-bold py-2 px-4 rounded-full">
                            <!-- Adjusted button styling -->
                            <i class='bx bx-search-alt-2'></i>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 15l-5-5m0 0l-5 5m5-5V3"></path>
                            </svg>
                        </button>
                    </form>
                </div>

                @auth
                <div class="ml-4 flex items-center">
                    <a href="{{ route('keranjang.index') }}" class="text-white hover:text-white">
                        <i class='bx bxs-cart text-3xl'></i>
                    </a>
                </div>

                <div class="ml-4 flex items-center">
                    <a href="{{ route('akun.index') }}" class="text-white hover:white">
                        <i class='bx bxs-user-circle text-3xl'></i>
                    </a>
                </div>

                <div class="ml-4 flex items-center">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="text-white hover:text-white"><i
                                class='bx bxs-log-out text-3xl'></i></button>
                    </form>
                </div>
                @endauth

                @guest
                <div class="ml-4 flex items-center">
                    <a href="{{ route('login') }}" class="text-white hover:text-white">
                        <i class='bx bxs-log-in text-3xl'></i>
                    </a>
                </div>
                @endguest



            </div>
        </nav>

        <!-- Include the Alpine.js library -->
        <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2"></script>

        <!-- JavaScript to toggle dropdown -->
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const dropdownButtons = document.querySelectorAll('.relative');
                dropdownButtons.forEach(button => {
                    button.addEventListener('click', () => {
                        button.querySelector('.absolute').classList.toggle('hidden');
                    });
                });
            });

        </script>
    </header>
</div>

<body class="bg-white font-sans antialiased">
    <div class="container mx-auto p-6">
        <div class="bg-gray-100 p-4 rounded-lg shadow-md">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-bold text-gray-800">User Account</h1>
                <button class="bg-red-500 text-white py-2 px-4 rounded hover:bg-red-600">Logout</button>
            </div>
            <div class="mb-6">
                <h2 class="text-xl font-semibold text-gray-700">Account Name: John Doe</h2>
            </div>
            <div>
                <div class="px-8 py-8 w-full h-min bg-white rounded-xl shadow-md max-md:px-5 max-h-min">
                    <div class="flex max-md:flex-col">
                        <div class="flex flex-col grow">
                            <h2 class="text-2xl font-bold text-black">
                                Pesanan Saya
                            </h2>
                            @foreach ($pesanan->items as $item)
                            <div class="flex mt-4 justify-between items-start text-base font-thin text-neutral-600">
                                <div class="flex gap-4">
                                    <img src="{{ asset('img/produk/' . $item->produk->gambar) }}"
                                        class="shrink-0 w-[95px]" />
                                    <p class="">{{ $item->produk->judul_buku }}
                                </div>
                                <p class="text-base text-black">Rp.
                                    {{ number_format($item->produk->harga, 0, ',', '.') }} x {{ $item->jumlah }}
                                </p>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-20 px-5">
        <footer class="relative bg-[#83B1D7] pt-8 pb-6 py-20">
            <div class="container mx-auto px-4">
                <div class="flex flex-wrap text-left lg:text-left">
                    <div class="w-full lg:w-6/12 px-4">
                        <h3 class="font-bold text-2xl text-blueGray-500">Landing Library </h3>
                        <h5 class="text-xs mt-0 mb-2 text-[#374c71]" style="text-align: justify;">
                            Landing library toko buku online menyediakan beragam koleksi yang luas dari segala jenis
                            buku, mulai dari fiksi hingga non-fiksi, termasuk novel, ensiklopedia, buku pelajaran, dan
                            banyak lagi, memenuhi kebutuhan pembaca dengan berbagai minat dan preferensi.
                        </h5>
                    </div>
                    <div class="w-full lg:w-6/12 px-4">
                        <div class="flex flex-wrap items-top mb-6">
                            <div class="w-full lg:w-4/12 px-4 ml-auto">
                                <span class="block uppercase text-blueGray-500 text-sm font-semibold mb-2">Kategori
                                    Produk</span>
                                <ul class="list-unstyled">
                                    <li>
                                        <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm"
                                            href="#">About Us</a>
                                    </li>
                                    <li>
                                        <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm"
                                            href="#">Blog</a>
                                    </li>
                                    <li>
                                        <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm"
                                            href="#">Github</a>
                                    </li>
                                    <li>
                                        <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm"
                                            href="#">Free Products</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="w-full lg:w-4/12 px-4">
                                <span class="block uppercase text-blueGray-500 text-sm font-semibold mb-2">Other
                                    Resources</span>
                                <ul class="list-unstyled">
                                    <li>
                                        <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm"
                                            href="https://github.com/creativetimofficial/notus-js/blob/main/LICENSE.md?ref=njs-profile">MIT
                                            License</a>
                                    </li>
                                    <li>
                                        <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm"
                                            href="https://creative-tim.com/terms?ref=njs-profile">Terms &amp;
                                            Conditions</a>
                                    </li>
                                    <li>
                                        <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm"
                                            href="https://creative-tim.com/privacy?ref=njs-profile">Privacy Policy</a>
                                    </li>
                                    <li>
                                        <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm"
                                            href="https://creative-tim.com/contact-us?ref=njs-profile">Contact Us</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="my-6 border-blueGray-300">
                <div class="flex flex-wrap items-center md:justify-between justify-center">
                    <div class="w-full md:w-4/12 px-4 mx-auto text-center">
                        <div class="text-sm text-blueGray-500 font-semibold py-1">
                            Copyright © <span id="get-current-year">2024</span><a href="#"
                                class="text-blueGray-500 hover:text-gray-800" target="_blank">Landing Library
                                <a href="#" class="text-blueGray-500 hover:text-blueGray-800"></a>.
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>
