<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Mazyar">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="style/style3.css" rel="stylesheet">
    <link href="style/style.css" rel="stylesheet">
    <link href="style/style2.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <title>Landing Library</title>
</head>

<body class="font-montserrat ">
    <div class="flex min-h-screen 2xl:max-w-7xl 2xl:mx-auto 2xl:border-x-2 2xl:border-indigo-50 ">
        <!-- Sidebar -->
        <aside class="bg-blue-600/70  w-1/5 py-5 pl-10  min-w-min   border-r border-indigo-900/20 hidden md:block ">
            <div class="flex items-center">
                <i class='fas fa-user-circle' style='font-size:48px; '></i>
                <div class="font-medium text-2xl   py-10 pl-3 ">Admin</div>
            </div>
            <!-- Menu -->
            <div class="mt-10 flex flex-col space-y-7 text-white font-medium">
                <a class=" flex items-center space-x-2 py-0  group hover:border-r-2 hover:border-r-indigo-700 font-bold "
                    href="dashboard-admin">
                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" fill="white"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z">
                        </path>
                    </svg>
                    <span>Dashboard</span>
                </a>
                <a class="flex items-center space-x-2 py-1 group hover:border-r-2 hover:border-r-indigo-700 font-bold"
                    href="dashboard-admin-produk">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="white"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                            d="M10 3H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zM9 9H5V5h4v4zm5 2h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1h-6a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1zm1-6h4v4h-4V5zM3 20a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v6zm2-5h4v4H5v-4zm8 5a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-6a1 1 0 0 0-1-1h-6a1 1 0 0 0-1 1v6zm2-5h4v4h-4v-4z">
                        </path>
                    </svg>
                    <span class="ml-2">Produk</span>
                </a>
                <a class="flex items-center space-x-2 py-1 font-bold border-r-2 border-r-indigo-700 pr-20 text-white"
                    href="dashboard-admin-pesanan">
                    <svg class="h-6 w-6 group-hover:stroke-indigo-700" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 48 48" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="4"
                            d="M 13.5 4 C 10.467 4 8 6.467 8 9.5 L 8 36 L 8 37.5 L 8 38.5 C 8 41.519774 10.480226 44 13.5 44 L 39.5 44 A 1.50015 1.50015 0 1 0 39.5 41 L 13.5 41 C 12.273237 41 11.277238 40.152347 11.050781 39 L 39.5 39 C 40.329 39 41 38.329 41 37.5 L 41 9.5 C 41 6.467 38.533 4 35.5 4 L 35 4 L 35 20.5 C 35 21.029 34.720625 21.519062 34.265625 21.789062 C 34.029625 21.929063 33.765 22 33.5 22 C 33.253 22 33.00525 21.938406 32.78125 21.816406 L 28 19.207031 L 23.21875 21.816406 C 22.75475 22.070406 22.191375 22.060063 21.734375 21.789062 C 21.279375 21.520063 21 21.029 21 20.5 L 21 4 L 13.5 4 z M 24 4 L 24 17.972656 L 27.28125 16.183594 C 27.50425 16.061594 27.753 16 28 16 C 28.247 16 28.49575 16.061594 28.71875 16.183594 L 32 17.972656 L 32 4 L 24 4 z">
                        </path>
                    </svg>
                    <span>Pesanan</span>
                </a>
                </a>
                <a class=" flex items-center space-x-2 py-1  font-bold group hover:border-r-2 hover:border-r-indigo-700 pr-20 text-white"
                    href="dashboard-admin-rekapan">
                    <svg class="h-5 w-5 stroke-indigo-700" xmlns="http://www.w3.org/2000/svg" fill="white"
                        viewBox="0 0 384 512" stroke="currentColor">
                        <path stroke-linejoin="round" stroke-width="2" path
                            d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128z">

                    </svg>
                    <span>Rekapan</span>
                </a>

                <a class="flex items-center space-x-2 py-1 group hover:border-r-2 hover:border-r-indigo-700 font-bold"
                    href="dashboard-admin-pesan">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="white"
                        stroke="currentColor">
                        <path d="M16 13v-2H7V8l-5 4 5 4v-3z"></path>
                        <path
                            d="M20 3h-9c-1.103 0-2 .897-2 2v4h2V5h9v14h-9v-4H9v4c0 1.103.897 2 2 2h9c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2z">
                        </path>
                    </svg>
                    <span>Keluar</span>
                </a>
            </div><!-- /Menu -->
        </aside><!-- /Sidebar -->

        <div class="main--content">
            <div class="header--wrapper">
                <div class="header--tittle">
                    <a class="max-w-screen flex items-left space-x-2 py-1 group hover:border-r-2 hover:border-r-indigo-700 font-bold text-white px-50"
                        t href="dashboard-admin-produk">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="white"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                d="M10 3H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zM9 9H5V5h4v4zm5 2h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1h-6a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1zm1-6h4v4h-4V5zM3 20a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v6zm2-5h4v4H5v-4zm8 5a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-6a1 1 0 0 0-1-1h-6a1 1 0 0 0-1 1v6zm2-5h4v4h-4v-4z">
                            </path>
                        </svg>
                        <h4>Produk</h4>
                    </a>
                </div>
                <div class="user--info">
                    <a class="text-decoration-none text-white"></a>
                </div>
            </div>
            <!-- Start block -->
            <div class="max-w-screen py-4 bg-white shadow-md rounded-lg px-20">
                <div
                    class="flex flex-col md:flex-row md:items-left md:justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                </div>
                <div
                    class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-start md:space-x-3 flex-shrink-0">
                    <button id="openModal"
                        class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-700">Tambah</button>
                </div>

                <!-- Price -->
                <h2 id="price-heading">
                    <button type="button"
                        class="flex items-center justify-between w-full py-2 px-1.5 text-sm font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-600 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-700"
                        data-accordion-target="#price-body" aria-expanded="true" aria-controls="price-body">
                        <span>Price</span>
                        <svg aria-hidden="true" data-accordion-icon="" class="w-5 h-5 rotate-180 shrink-0"
                            fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                        </svg>
                    </button>
                </h2>
                <div class="container mx-auto">
                    <div class="overflow-x-auto rounded-lg">
                        <table class="min-w-full bg-white">
                            <thead
                                class="px-4 py-3 font-medium text-gray-900  dark:text-black bg-blue-900 hover:bg-blue-800">
                                <tr>
                                    <th class="py-2 px-4 border-b text-sm">Gambar</th>
                                    <th class="py-2 px-4 border-b text-sm">Kategori</th>
                                    <th class="py-2 px-4 border-b text-sm">Stok</th>
                                    <th class="py-2 px-4 border-b text-sm">Penulis</th>
                                    <th class="py-2 px-4 border-b text-sm">Judul Buku</th>
                                    <th class="py-2 px-4 border-b text-sm">Deskripsi</th>
                                    <th class="py-2 px-4 border-b text-sm">Harga</th>
                                    <th class="py-2 px-4 border-b text-sm">Aksi</th>
                                </tr>
                                </theadclass>
                            <tbody></tbody>
                            <div id="modal"
                                class="fixed inset-0 bg-gray-600 bg-opacity-50 flex items-center justify-center hidden">
                                <div class="bg-white p-8 rounded-lg shadow-lg w-1/2 max-h-full overflow-y-auto">
                                    <div class="flex justify-between items-center mb-4">
                                        <h2 class="text-2xl font-bold text-gray-700">Tambah Data Produk</h2>
                                        <button id="closeModal"
                                            class="text-gray-600 hover:text-gray-900">&times;</button>
                                    </div>
                                    <form action="" method="POST" class="space-y-4">
                                        @csrf
                                        <div class="flex space-x-4">
                                            <div class="w-1/2">
                                                <label for="kategori"
                                                    class="block text-sm font-medium text-gray-700">Kategori</label>
                                                <select id="kategori" name="kategori" required
                                                    class="mt-1 p-2 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-black">
                                                    <option value="" disabled selected style="color: black;">Pilih
                                                        Kategori</option>
                                                    <option value="kategori1" style="color: black;">Sains</option>
                                                    <option value="kategori2" style="color: black;">Bisnis</option>
                                                    <option value="kategori3" style="color: black;">Komik</option>
                                                    <option value="kategori4" style="color: black;">Fiksi</option>
                                                    <option value="kategori5" style="color: black;">Nonfiksi</option>
                                                </select>
                                            </div>
                                            <div class="w-1/2">
                                                <label for="stok"
                                                    class="block text-sm font-medium text-gray-700">Stok</label>
                                                <input type="number" id="stok" name="stok" required
                                                    class="mt-1 p-2 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-black">
                                            </div>
                                        </div>
                                        <div class="flex space-x-4">
                                            <div class="w-1/2">
                                                <label for="penulis"
                                                    class="block text-sm font-medium text-gray-700">Penulis</label>
                                                <input type="text" id="penulis" name="penulis" required
                                                    class="mt-1 p-2 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-black">
                                            </div>
                                            <div class="w-1/2">
                                                <label for="judul_buku"
                                                    class="block text-sm font-medium text-gray-700">Judul
                                                    Buku</label>
                                                <input type="text" id="judul_buku" name="judul_buku" required
                                                    class="mt-1 p-2 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-black">
                                            </div>
                                        </div>
                                        <div>
                                            <label for="deskripsi"
                                                class="block text-sm font-medium text-gray-700">Deskripsi</label>
                                            <textarea id="deskripsi" name="deskripsi" required
                                                class="mt-1 p-2 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-black"></textarea>
                                        </div>
                                        <div>
                                            <p class="block text-sm font-medium text-gray-700 font-bold">Detail Buku</p>
                                        </div>
                                        <div class="flex space-x-4">
                                            <div class="w-1/2">
                                                <label for="harga"
                                                    class="block text-sm font-medium text-gray-700">Harga</label>
                                                <input type="number" id="harga" name="harga" required
                                                    class="mt-1 p-2 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-black">
                                            </div>
                                            <div class="w-1/2">
                                                <label for="gambar"
                                                    class="block text-sm font-medium text-gray-700">Gambar</label>
                                                <input type="file" id="gambar" name="gambar"
                                                    class="mt-1 p-2 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 file:mr-2 file:py-1 file:px-2 file:rounded file:border-0 file:text-xs file:font-medium file:bg-gray-200 file:text-gray-700 hover:file:bg-gray-300">
                                            </div>
                                        </div>
                                        <div class="flex space-x-4">
                                            <div class="w-1/2">
                                                <label for="jumlah_halaman"
                                                    class="block text-sm font-medium text-gray-700">Jumlah
                                                    Halaman</label>
                                                <input type="number" id="jumlah_halaman" name="jumlah_halaman" required
                                                    class="mt-1 p-2 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-black">
                                            </div>
                                            <div class="w-1/2">
                                                <label for="tanggal_terbit"
                                                    class="block text-sm font-medium text-gray-700">Tanggal
                                                    Terbit</label>
                                                <input type="date" id="tanggal_terbit" name="tanggal_terbit" required
                                                    class="mt-1 p-2 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-black">
                                            </div>
                                        </div>
                                        <div class="flex space-x-4">
                                            <div class="w-1/2">
                                                <label for="isbn"
                                                    class="block text-sm font-medium text-gray-700">ISBN</label>
                                                <input type="text" id="isbn" name="isbn" required
                                                    class="mt-1 p-2 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-black">
                                            </div>
                                            <div class="w-1/2">
                                                <label for="bahasa"
                                                    class="block text-sm font-medium text-gray-700">Bahasa</label>
                                                <input type="text" id="bahasa" name="bahasa" required
                                                    class="mt-1 p-2 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-black">
                                            </div>
                                        </div>
                                        <div class="flex space-x-4">
                                            <div class="w-1/2">
                                                <label for="penerbit"
                                                    class="block text-sm font-medium text-gray-700">Penerbit</label>
                                                <input type="text" id="penerbit" name="penerbit" required
                                                    class="mt-1 p-2 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-black">
                                            </div>
                                            <div class="w-1/2">
                                                <label for="berat" class="block text-sm font-medium text-gray-700">Berat
                                                    (gram)</label>
                                                <input type="number" id="berat" name="berat" required
                                                    class="mt-1 p-2 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-black">
                                            </div>
                                        </div>
                                        <div class="flex space-x-4">
                                            <div class="w-1/2">
                                                <label for="lebar" class="block text-sm font-medium text-gray-700">Lebar
                                                    (cm)</label>
                                                <input type="number" id="lebar" name="lebar" required
                                                    class="mt-1 p-2 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-black">
                                            </div>
                                            <div class="w-1/2">
                                                <label for="panjang"
                                                    class="block text-sm font-medium text-gray-700">Panjang
                                                    (cm)</label>
                                                <input type="number" id="panjang" name="panjang" required
                                                    class="mt-1 p-2 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-black">
                                            </div>
                                        </div>
                                        <div class="flex justify-end">
                                            <button type="submit"
                                                class="bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300">
                                                Tambah
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                    </div>
                    <tbody>
                        <tr>
                            <td class="py-2 px-4 border-b"><img src="https://via.placeholder.com/50" alt="Gambar Buku"
                                    class="w-16 h-16 object-cover"></td>
                            <td class="py-2 px-4 border-b text-black text-sm">Fiksi</td>
                            <td class="py-2 px-4 border-b text-black text-sm">20</td>
                            <td class="py-2 px-4 border-b text-black text-sm">John Doe</td>
                            <td class="py-2 px-4 border-b text-black text-sm">Judul </td>
                            <td class="py-2 px-4 border-b max-w-xs whitespace-normal text-black text-sm">Ini adalah
                                deskripsi
                                buku yang
                                sangat panjang untuk menunjukkan bahwa teks akan membungkus dan tidak memanjang secara
                                horizontal.</td>
                            <td class="py-2 px-4 border-b text-black text-sm">Rp100.000</td>
                            <td class="py-2 px-4 border-b">
                                <div class="flex space-x-2">
                                    <div class="flex space-x-2">
                                        <button type="button" data-modal-target="delete-modal"
                                            data-modal-toggle="delete-modal"
                                            class="py-2 px-4 flex justify-center items-center text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm text-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </button>
                                        <button type="button" id="openUpdateFormButton"
                                            class="py-2 px-4 flex justify-center items-center text-sm font-medium text-center text-white bg-green-600 rounded-lg hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-500 dark:hover:bg-green-600 dark:focus:ring-green-700">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path
                                                    d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                                <path fill-rule="evenodd"
                                                    d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </div>
                <!-- Modal Konfirmasi Hapus -->
                <div id="delete-modal" tabindex="-1" aria-hidden="true"
                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center">
                    <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                            <div class="flex justify-end p-2">
                                <button type="button"
                                    class="text-gray-400 bg-gray-100 hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                                    data-modal-hide="delete-modal">
                                    <svg aria-hidden="true" class="w-5 h-5" fill="black" stroke="CurrentColor"
                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z">
                                        </path>
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>

                            </div>
                            <div class="p-6 text-center">
                                <div class="flex justify-center mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="60" height="60"
                                        fill="gray" stroke="CurrentColor">
                                        <path
                                            d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zm0-384c13.3 0 24 10.7 24 24V264c0 13.3-10.7 24-24 24s-24-10.7-24-24V152c0-13.3 10.7-24 24-24zM224 352a32 32 0 1 1 64 0 32 32 0 1 1 -64 0z" />
                                    </svg>
                                </div>
                                <h3 class="mb-5 text-lg font-bold text-black dark:text-gray-400">
                                    Lanjutkan Hapus?
                                </h3>
                                <button data-modal-hide="delete-modal" type="button"
                                    class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                    Ya
                                </button>
                                <button data-modal-hide="delete-modal" type="button"
                                    class="text-white bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                    Tidak
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="drawer-update-product"
                    class="fixed inset-0 overflow-hidden z-50 flex justify-center items-center hidden">
                    <div class="absolute inset-0 bg-gray-600 opacity-75"></div>
                    <div class="bg-white rounded-lg shadow-xl p-8 w-1/2 relative z-10 max-h-screen overflow-y-auto">
                        <div class="flex justify-between items-center mb-4">
                            <h2 class="text-2xl font-bold text-gray-700">Ubah Data Produk</h2>
                            <button id="closeDrawerUpdate"
                                class="text-gray-600 hover:text-gray-900 text-2xl">&times;</button>
                        </div>
                        <form action="#" method="POST" class="space-y-4">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label for="kategori"
                                        class="block text-sm font-medium text-gray-700">Kategori</label>
                                    <input type="text" id="kategori" name="kategori" required
                                        class="mt-1 p-2 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-black">
                                </div>
                                <div>
                                    <label for="stok" class="block text-sm font-medium text-gray-700">Stok</label>
                                    <input type="number" id="stok" name="stok" required
                                        class="mt-1 p-2 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-black">
                                </div>
                                <div>
                                    <label for="penulis" class="block text-sm font-medium text-gray-700">Penulis</label>
                                    <input type="text" id="penulis" name="penulis" required
                                        class="mt-1 p-2 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-black">
                                </div>
                                <div>
                                    <label for="judul_buku" class="block text-sm font-medium text-gray-700">Judul
                                        Buku</label>
                                    <input type="text" id="judul_buku" name="judul_buku" required
                                        class="mt-1 p-2 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-black">
                                </div>
                            </div>
                            <div>
                                <label for="deskripsi" class="block text-sm font-medium text-gray-700">Deskripsi</label>
                                <textarea id="deskripsi" name="deskripsi" required
                                    class="mt-1 p-2 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-black"></textarea>
                            </div>
                            <div>
                                <p class="block text-sm font-medium text-gray-700 font-bold">Detail Buku</p>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label for="harga" class="block text-sm font-medium text-gray-700">Harga</label>
                                    <input type="number" id="harga" name="harga" required
                                        class="mt-1 p-2 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-black">
                                </div>
                                <div>
                                    <label for="gambar" class="block text-sm font-medium text-gray-700">Gambar</label>
                                    <input type="file" id="gambar" name="gambar"
                                        class="mt-1 p-2 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-100 file:mr-2 file:py-1 file:px-2 file:rounded file:border-0 file:text-xs file:font-medium file:bg-blue-100 file:text-gray-700 hover:file:bg-blue-100">
                                </div>
                                <div>
                                    <label for="jumlah_halaman" class="block text-sm font-medium text-gray-700">Jumlah
                                        Halaman</label>
                                    <input type="number" id="jumlah_halaman" name="jumlah_halaman" required
                                        class="mt-1 p-2 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-black">
                                </div>
                                <div>
                                    <label for="tanggal_terbit" class="block text-sm font-medium text-gray-700">Tanggal
                                        Terbit</label>
                                    <input type="date" id="tanggal_terbit" name="tanggal_terbit" required
                                        class="mt-1 p-2 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-black">
                                </div>
                                <div>
                                    <label for="isbn" class="block text-sm font-medium text-gray-700">ISBN</label>
                                    <input type="text" id="isbn" name="isbn" required
                                        class="mt-1 p-2 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-black">
                                </div>
                                <div>
                                    <label for="bahasa" class="block text-sm font-medium text-gray-700">Bahasa</label>
                                    <input type="text" id="bahasa" name="bahasa" required
                                        class="mt-1 p-2 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-black">
                                </div>
                                <div>
                                    <label for="penerbit"
                                        class="block text-sm font-medium text-gray-700">Penerbit</label>
                                    <input type="text" id="penerbit" name="penerbit" required
                                        class="mt-1 p-2 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-black">
                                </div>
                                <div>
                                    <label for="berat" class="block text-sm font-medium text-gray-700">Berat
                                        (gram)</label>
                                    <input type="number" id="berat" name="berat" required
                                        class="mt-1 p-2 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-black">
                                </div>
                                <div>
                                    <label for="lebar" class="block text-sm font-medium text-gray-700">Lebar
                                        (cm)</label>
                                    <input type="number" id="lebar" name="lebar" required
                                        class="mt-1 p-2 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-black">
                                </div>
                                <div>
                                    <label for="panjang" class="block text-sm font-medium text-gray-700">Panjang
                                        (cm)</label>
                                    <input type="number" id="panjang" name="panjang" required
                                        class="mt-1 p-2 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-black">
                                </div>
                            </div>
                            <div class="flex justify-end">
                                <button type="submit"
                                    class="bg-green-600 text-white py-2 px-4 rounded-lg hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-300">
                                    Simpan Perubahan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            </td>
            </tr>
            </tbody>
            </table>
        </div>
        <nav class="flex flex-col md:flex-row justify-between items-start md:items-center space-y-3 md:space-y-0 p-4"
            aria-label="Table navigation">
            <span class="text-sm font-normal text-gray-500 dark:text-gray-400">
                Showing
                <span class="font-semibold text-gray-900 dark:text-white">1-10</span>
                of
                <span class="font-semibold text-gray-900 dark:text-white">40</span>
            </span>
            <ul class="inline-flex items-stretch -space-x-px">
                <li>
                    <a href="#"
                        class="flex items-center justify-center h-full py-1.5 px-3 ml-0 text-gray-500 bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                        <span class="sr-only">Previous</span>
                        <svg class="w-5 h-5"  fill="gray" viewbox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                </li>
                <li>
                    <a href="#" aria-current="page"
                        class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">3</a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">...</a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">40</a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center justify-center h-full py-1.5 px-3 leading-tight text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                        <span class="sr-only">Next</span>
                        <svg class="w-5 h-5"  fill="gray" viewbox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
    </div>
    </section>
    <!-- End block -->
    <script src="https://unpkg.com/@themesberg/flowbite/dist/flowbite.bundle.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>
    </thead>
    </tbody>
    </table>
    </div>
    </div>
    </div>
    </div>
    <!-- Tambahkan ini di akhir body sebelum </body> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="https://unpkg.com/@themesberg/flowbite/dist/flowbite.bundle.js"></script>
    <script src="https://kit.fontawesome.com/9dc5416d74.js" crossorigin="anonymous"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const closeDrawerUpdateButton = document.getElementById('closeDrawerUpdate');
            const drawerUpdateProduct = document.getElementById('drawer-update-product');
            const openUpdateFormButton = document.getElementById('openUpdateFormButton');

            // Tambahkan event listener untuk tombol tutup
            closeDrawerUpdateButton.addEventListener('click', function () {
                drawerUpdateProduct.classList.add('hidden');
            });

            // Tambahkan event listener untuk tombol buka
            openUpdateFormButton.addEventListener('click', function () {
                drawerUpdateProduct.classList.remove('hidden');
            });
        });

    </script>
    <script>
        document.getElementById('openModal').addEventListener('click', function () {
            document.getElementById('modal').classList.remove('hidden');
        });
        document.getElementById('closeModal').addEventListener('click', function () {
            document.getElementById('modal').classList.add('hidden');
        });

    </script>
</body>

</html>
