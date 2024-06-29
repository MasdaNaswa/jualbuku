<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    {{-- <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'> --}}
</head>

<body class="bg-white">

    <!-- Navbar -->
    <nav class="bg-blue-900 py-4">
        <div class="container mx-auto flex justify-between items-center px-20">

            <!-- Logo -->
            <div class="flex items-center">
                <img src="{{ asset('img/Landinglibrary.png') }}" alt="Landing Library Logo" class="h-8 mr-2">
                <a href="{{ route('dashboard') }}" class="text-white text-2xl font-bold">Landing Library</a>
            </div>

            <!-- Categories -->
            <div class="hidden md:flex space-x-4">
                <div class="relative ml-6" x-data="{ open: false }">
                    <button @click="open = !open"
                        class="text-white text-xm font-bold hover:bg-blue-900 px-3 py-2 rounded-md inline-flex items-center">
                        <span>Kategori Buku</span>
                        <svg class="h-3 w-3 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div x-show="open" @click.away="open = false"
                        class="absolute z-10 mt-2 bg-white rounded-md shadow-lg py-1 px-6 w-96">
                        <div class="flex flex-col">
                            @php
                            $kategori = \App\Models\Kategori::all();
                            @endphp
                            @foreach ($kategori as $item)
                            <a href="{{ route('kategori.index', ['kategori' => $item->kategori]) }}"
                                class="block px-2 py-2 text-sm text-blue-900 font-bold">Buku {{ $item->kategori }}</a>
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
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2" defer></script>

</body>

</html>
