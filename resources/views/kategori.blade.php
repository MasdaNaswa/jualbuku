<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body class="bg-white">

    <!-- Navbar -->
    <nav class="bg-blue-900 py-4">
        <div class="container mx-auto flex justify-between items-center px-20">

            <!-- Logo -->
            <div>
                <a href="dashboard" class="text-white text-2xl font-bold">Landing Library</a>
            </div>

            <!-- Categories -->
            <div class="hidden md:flex space-x-4">
                <div class="relative ml-6" x-data="{ open: false }">
                    <button
                        @click="open = !open"
                        class="text-white text-xm font-bold hover:bg-blue-900 px-3 py-2 rounded-md inline-flex items-center">
                        <span>Kategori Buku</span>
                        <svg class="h-3 w-3 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div
                        x-show="open"
                        @click.away="open = false"
                        class="absolute z-10 mt-2 bg-white rounded-md shadow-lg py-1 px-6 w-96">
                        <div class="flex flex-col">
                            <a href="#" class="block px-2 py-2 text-sm text-blue-900 font-bold">Buku Sains</a>
                            <a href="#" class="block px-2 py-2 text-sm text-blue-900 font-bold">Buku Bisnis</a>
                            <a href="#" class="block px-2 py-2 text-sm text-blue-900 font-bold">Buku Komik</a>
                            <a href="#" class="block px-2 py-2 text-sm text-blue-900 font-bold">Buku Fiksi</a>
                            <a href="#" class="block px-2 py-2 text-sm text-blue-900 font-bold">Buku Nonfiksi</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <div class="py-20 px-5">
        <footer>
            @include('components.footer')
        </footer>
    </div>

</body>
</html>