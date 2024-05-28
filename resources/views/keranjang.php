<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.2/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/boxicons"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
</head>

<body class="bg-white">

    <!-- Navbar -->
    <nav class="bg-blue-900 py-4">
        <div class="container mx-auto flex justify-between items-center px-20">

            <!-- Logo -->
            <div>
                <a href="#" class="text-white text-2xl font-bold">Landing Library</a>
            </div>

            <!-- Categories -->
            <div class="hidden md:flex space-x-4">
                <div class="relative group ml-6">
                    <button
                        class="text-white text-xm font-bold hover:bg-blue-900 px-3 py-2 rounded-md inline-flex items-center">
                        <span>Kategori </span>
                        <svg class="h-3 w-3 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div
                        class="absolute z-10 hidden group-hover:flex flex-col bg-white rounded-md shadow-lg py-1 px-6 w-96">
                        <!-- Adjusted width to w-full and added flex-col class -->
                        <div
                            class="absolute z-10 hidden group-hover:flex flex-col bg-white rounded-md shadow-lg py-1 px-6 w-full">
                            <div class="grid grid-cols-4 gap-2">
                                <a href="#" class="block px-2 py-2 text-sm text-blue-900 font-bold">Novel</a>
                                <a href="#" class="block px-2 py-2 text-sm text-blue-900 font-bold">Komik</a>
                                <a href="#" class="block px-2 py-2 text-sm text-blue-900 font-bold">Sains</a>
                                <a href="#" class="block px-2 py-2 text-sm text-blue-900 font-bold">Islam</a>
                                <a href="#" class="block px-2 py-2 text-sm text-blue-900 font-bold">Pelajaran</a>
                                <a href="#" class="block px-2 py-2 text-sm text-blue-900 font-bold">Anak</a>
                                <a href="#" class="block px-2 py-2 text-sm text-blue-900 font-bold">Cerpen</a>
                                <a href="#" class="block px-2 py-2 text-sm text-blue-900 font-bold">Majalah</a>
                                <a href="#" class="block px-2 py-2 text-sm text-blue-900 font-bold">Psikologi</a>
                                <a href="#" class="block px-2 py-2 text-sm text-blue-900 font-bold">Fantasi</a>
                                <a href="#" class="block px-2 py-2 text-sm text-blue-900 font-bold">Non Fiksi</a>
                                <a href="#" class="block px-2 py-2 text-sm text-blue-900 font-bold">Dogeng</a>
                                <a href="#" class="block px-2 py-2 text-sm text-blue-900 font-bold">Biografi</a>
                                <a href="#" class="block px-2 py-2 text-sm text-blue-900 font-bold">Manga</a>
                                <a href="#" class="block px-2 py-2 text-sm text-blue-900 font-bold">Kamus</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Search Bar -->
            <div class="flex-grow mx-4">
                <!-- Adjusted margin -->
                <form action="#" method="GET" class="flex">
                    <input type="text"
                        class="w-full md:w-100 h-10 px-4 rounded-full focus:outline-none focus:ring focus:border-blue-900"
                        placeholder="Cari disini"><!-- Adjusted width and added rounded-l-full -->
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

            <!-- Login Icon -->
            <div class="ml-4 flex items-center">
                <a href="#" class="text-white hover:text-white">
                    <i class='bx bxs-cart text-3xl'></i>
                </a>
            </div>

            <div class="ml-4 flex items-center">
                <a href="#" class="text-white hover:white">
                    <i class='bx bxs-user-circle text-3xl'></i>
                </a>
            </div>
        </div>
    </nav>

    <div class="container">
        <h2 class="mt-6 ml-20 text-2xl font-bold">Keranjang saya</h2>

        <!-- Tabel -->
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg ml-10 mt-5">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-blue-300 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="p-4">
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Product name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Harga
                        </th>
                        <th scope="col" class="px-6 py-3 flex justify-center items-center">
                            Jumlah
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Total
                        </th>
                        <th scope="col" class="px-6 py-3">
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50
                            dark:hover:bg-gray-600">
                            <td class="w-4 p-4">
                                <div class="flex items-center">
                                    <input id="checkbox-table-search-1" type="checkbox"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                </div>
                            </td>
                            <td scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <div class="flex items-center">
                                    <img src="https://cdn.gramedia.com/uploads/picture_meta/2023/2/14/iddphd9rbufdfjabf4owuf.jpg"
                                        alt="Gambar Produk" class="w-12 h-18 mr-2">
                                    <span class="ml-2">The Girl Who Fell Beneath the Sea</span>
                                </div>
                            </td>
                            <td class="px-30 py-10">
                                Rp.60.000
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center space-x-4 flex justify-center items-center">
                                    <button id="decrement"
                                        class="px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600">-</button>
                                    <span id="count" class="px-4 py-2 bg-gray-200 rounded">0</span>
                                    <button id="increment"
                                        class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">+</button>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                Rp60.000
                            </td>
                            <td class="flex items-center px-6 py-4 ">
                                <div class="mt-5">
                                    <box-icon type='solid' name='trash-alt' color='red'></box-icon>
                                </div>
                            </td>
                    </tr>
                    <tr>
                        <class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50
                            dark:hover:bg-gray-600">
                            <td class="w-4 p-4">
                                <div class="flex items-center">
                                    <input id="checkbox-table-search-1" type="checkbox"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                </div>
                            </td>
                            <td scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <div class="flex items-center">
                                    <img src="https://s3-ap-southeast-1.amazonaws.com/ebook-previews/40678/143505/1.jpg"
                                        alt="Gambar Produk" class="w-12 h-18 mr-2">
                                    <span class="ml-2">Lautan Bercinta</span>
                                </div>
                            </td>
                            <td class="px-30 py-10">
                                Rp.60.000
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center space-x-4 flex justify-center items-center">
                                    <button id="decrement"
                                        class="px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600">-</button>
                                    <span id="count" class="px-4 py-2 bg-gray-200 rounded">0</span>
                                    <button id="increment"
                                        class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">+</button>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                Rp60.000
                            </td>
                            <td class="flex items-center px-6 py-4 ">
                                <div class="mt-5">
                                    <box-icon type='solid' name='trash-alt' color='red'></box-icon>
                                </div>
                            </td>
                    </tr>
                </tbody>
            </table>
        </div>


        <!-- Total -->
        <div class="flex flex-col items-end mt-5 mx-auto pl-20">
            <!-- Menggunakan flexbox untuk mengatur tata letak -->
            <div class="text-right">
                <!-- Menggunakan text-right untuk mengatur teks ke kanan -->
                <span class="font-bold text-left">Subtotal Produk :</span>
                <span class="mr-3">Rp.100.000</span><br>
                <span class="font-bold text-left">Subtotal Pengiriman :</span>
                <span class="mr-3">Rp.100.000</span><br>
                <span class="font-bold text-left">Biaya Layanan :</span>
                <span class="mr-3">Rp.100.000</span><br>
                <span class="font-bold text-left">Total Pembayaran :</span>
                <span class="mr-3">Rp.100.000</span><br>
            </div>
            <a href="pesanan" style="width: 150px"
                class="text-white bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center me-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mt-3">
                <div class="flex items-center justify-center w-full">
                    <!-- Menggunakan div untuk menempatkan ikon dan teks secara bersamaan -->
                    <svg class="w-9.5 h-3.5 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 18 21">
                        <path
                            d="M15 12a1 1 0 0 0 .962-.726l2-7A1 1 0 0 0 17 3H3.77L3.175.745A1 1 0 0 0 2.208 0H1a1 1 0 0 0 0 2h.438l.6 2.255v.019l2 7 .746 2.986A3 3 0 1 0 9 17a2.966 2.966 0 0 0-.184-1h2.368c-.118.32-.18.659-.184 1a3 3 0 1 0 3-3H6.78l-.5-2H15Z" />
                    </svg>
                    <p class="text-m font-bold text-white dark:text-white align-text-center">Beli</p>
                </div>
            </a>

        </div>
    </div>
    </div>
    <footer class="relative bg-white pt-8 pb-6 py-20 mt-20">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap text-left lg:text-left">
                <div class="w-full lg:w-6/12 px-4">
                    <h3 class="font-bold text-2xl text-blueGray-500">Landing Library </h3>
                    <h5 class="text-xs mt-0 mb-2 text-[#374c71]" style="text-align: justify;">
                        Landing library toko buku online menyediakan beragam koleksi yang luas dari segala jenis buku,
                        mulai dari fiksi hingga non-fiksi, termasuk novel, ensiklopedia, buku pelajaran, dan banyak
                        lagi, memenuhi kebutuhan pembaca dengan berbagai minat dan preferensi.
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
                                        href="https://creative-tim.com/terms?ref=njs-profile">Terms &amp; Conditions</a>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script>
        const countDisplay = document.getElementById('count');
        const incrementButton = document.getElementById('increment');
        const decrementButton = document.getElementById('decrement');

        let count = 0;

        // Fungsi untuk menambahkan nilai
        function incrementCount() {
            count++;
            countDisplay.textContent = count;
        }

        // Fungsi untuk mengurangi nilai, hanya jika nilainya lebih besar dari 1
        function decrementCount() {
            if (count > 0) {
                count--;
                countDisplay.textContent = count;
            }
        }

        // Event listener untuk tombol tambah
        incrementButton.addEventListener('click', incrementCount);

        // Event listener untuk tombol kurang
        decrementButton.addEventListener('click', decrementCount);

    </script>

</body>

</html>
