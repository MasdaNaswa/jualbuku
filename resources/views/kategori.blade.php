<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kategori</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Tambahan CSS jika diperlukan */
        .product-card:hover {
            box-shadow: 0 4px 14px rgba(0, 0, 0, 0.25);
        }

    </style>
</head>

<body class="bg-gray">
    <navbar>
        <div>
            @include('components.header')
        </div>
    </navbar>

    <div class="container mx-auto py-20">
        <h1 class="text-4xl font-bold text-center mb-8"></h1>
        <div class="flex">
            <!-- Sidebar Kategori -->
            <div class="w-1/5 bg-white p-6 rounded-lg shadow-lg mr-8">
                <h2 class="text-2xl font-semibold mb-4">Kategori</h2>
                <ul>
                    <li class="mb-4"><a href="#" class="text-black hover:text-blue-700 font-semibold">Buku Cerpen</a>
                    </li>
                    <li class="mb-4"><a href="#" class="text-black hover:text-blue-700 font-semibold">Buku Novel</a>
                    </li>
                    <li class="mb-4"><a href="#" class="text-black hover:text-blue-700 font-semibold">Buku Komik</a>
                    </li>
                    <li class="mb-4"><a href="#" class="text-black hover:text-blue-700 font-semibold">Buku Fiksi</a>
                    </li>
                    <li class="mb-4"><a href="#" class="text-black hover:text-blue-700 font-semibold">Buku Nonfiksi</a>
                    </li>
                    <li class="mb-4"><a href="#" class="text-black hover:text-blue-700 font-semibold">Buku Sains</a>
                    </li>
                </ul>
            </div>

            <!-- Daftar Produk -->
            <div class="w-4/5 p-5">
                <div class="flex flex-col items-center">
                    <div class="flex justify-between w-full mb-5">
                        <div class="w-1/4 bg-white p-5 mb-5 mr-5 border shadow text-left rounded-lg">
                            <!-- Menambahkan margin-right di sini -->
                            <img src="https://s3-ap-southeast-1.amazonaws.com/ebook-previews/40678/143505/1.jpg"
                                alt="Product 1" class="w-full h-auto mb-4 rounded-lg">
                            <div class="text-gray text-xs font-semibold py-2">Tere Liye</div>
                            <a href="detail-produk" class="text-blue-900 text-m font-bold py-2">Laut Bercerita</a>
                            <p class="item-price text-black text-2x1 font-semibold py-2"><b>Rp.85.500</b></p>
                            <button
                                class="text-xs bg-white text-blue-400 font-bold py-2 px-4 rounded-lg transition duration-300 ease-in-out hover:bg-blue-400 hover:text-white hover:border-5 hover:border-blue-500">
                                Tambah Keranjang</button>
                        </div>
                        <div class="w-1/4 bg-white p-5 mb-5 mr-5 border shadow text-left rounded-lg">
                            <!-- Menambahkan margin-right di sini -->
                            <img src="https://cdn.gramedia.com/uploads/items/img20220905_11324048.jpg" alt="Product 2"
                                class="w-full h-auto mb-4 rounded-lg">
                            <div class="text-gray text-xs font-semibold py-2">Tere Liye</div>
                            <a href="#" class="text-blue-900 text-m font-bold py-2">Bulan</a>
                            <p class="item-price text-black text-2x1 font-semibold py-2"><b>Rp.85.500</b></p>
                            <button
                                class="text-xs bg-white text-blue-400 font-bold py-2 px-4 rounded-lg transition duration-300 ease-in-out hover:bg-blue-400 hover:text-white hover:border-5 hover:border-blue-500">
                                Tambah Keranjang</button>
                        </div>
                        <div class="w-1/4 bg-white p-5 mb-5 mr-5 border shadow text-left rounded-lg">
                            <!-- Menambahkan margin-right di sini -->
                            <img src="https://cdn.gramedia.com/uploads/items/56531/thumb_image_normal/BLK_TK2020193493.jpg"
                                alt="Product 3" class="w-full h-auto mb-4 rounded-lg">
                            <div class="text-gray text-xs font-semibold py-2">Tere Liye</div>
                            <a href="#" class="text-blue-900 text-m font-bold py-2">Bulan</a>
                            <p class="item-price text-black text-2x1 font-semibold py-2"><b>Rp.85.500</b></p>
                            <button
                                class="text-xs bg-white text-blue-400 font-bold py-2 px-4 rounded-lg transition duration-300 ease-in-out hover:bg-blue-400 hover:text-white hover:border-5 hover:border-blue-500">
                                Tambah Keranjang</button>
                        </div>
                        <div class="w-1/4 bg-white p-5 mb-5 border shadow text-left rounded-lg">
                            <!-- Tidak ada margin-right di sini -->
                            <img src="https://cdn.gramedia.com/uploads/items/img20220928_15154296.jpg" alt="Product 3"
                                class="w-full h-auto mb-4 rounded-lg">
                            <div class="text-gray text-xs font-semibold py-2">Tere Liye</div>
                            <a href="#" class="text-blue-900 text-m font-bold py-2">Bulan</a>
                            <p class="item-price text-black text-2x1 font-semibold py-2"><b>Rp.85.500</b></p>
                            <button
                                class="text-xs bg-white text-blue-400 font-bold py-2 px-4 rounded-lg transition duration-300 ease-in-out hover:bg-blue-400 hover:text-white hover:border-5 hover:border-blue-500">
                                Tambah Keranjang</button>
                        </div>
                    </div>
                    <div class="flex justify-between w-full mb-5">
                        <div class="w-1/4 bg-white p-5 mb-5 mr-5 border shadow text-left rounded-lg">
                            <!-- Menambahkan margin-right di sini -->
                            <img src="https://cdn.gramedia.com/uploads/items/9786025734441_si-anak-spesi.jpg"
                                alt="Product 1" class="w-full h-auto mb-4 rounded-lg">
                            <div class="text-gray text-xs font-semibold py-2">Tere Liye</div>
                            <a href="#" class="text-blue-900 text-m font-bold py-2">Bulan</a>
                            <p class="item-price text-black text-2x1 font-semibold py-2"><b>Rp.85.500</b></p>
                            <button
                                class="text-xs bg-white text-blue-400 font-bold py-2 px-4 rounded-lg transition duration-300 ease-in-out hover:bg-blue-400 hover:text-white hover:border-5 hover:border-blue-500">
                                Tambah Keranjang</button>
                        </div>
                        <div class="w-1/4 bg-white p-5 mb-5 mr-5 border shadow text-left rounded-lg">
                            <!-- Menambahkan margin-right di sini -->
                            <img src="https://cdn.gramedia.com/uploads/items/9786020651927_Funiculi_Funicula_cov.jpg"
                                alt="Product 2" class="w-full h-auto mb-4 rounded-lg">
                            <div class="text-gray text-xs font-semibold py-2">Tere Liye</div>
                            <a href="#" class="text-blue-900 text-m font-bold py-2">Bulan</a>
                            <p class="item-price text-black text-2x1 font-semibold py-2"><b>Rp.85.500</b></p>
                            <button
                                class="text-xs bg-white text-blue-400 font-bold py-2 px-4 rounded-lg transition duration-300 ease-in-out hover:bg-blue-400 hover:text-white hover:border-5 hover:border-blue-500">
                                Tambah Keranjang</button>
                        </div>
                        <div class="w-1/4 bg-white p-5 mb-5 mr-5 border shadow text-left rounded-lg">
                            <!-- Menambahkan margin-right di sini -->
                            <img src="https://cdn.gramedia.com/uploads/items/9789792248616_negeri-5-menara-_cu-cover-baru_.jpg"
                                alt="Product 3" class="w-full h-auto mb-4 rounded-lg">
                            <div class="text-gray text-xs font-semibold py-2">Tere Liye</div>
                            <a href="#" class="text-blue-900 text-m font-bold py-2">Bulan</a>
                            <p class="item-price text-black text-2x1 font-semibold py-2"><b>Rp.85.500</b></p>
                            <button
                                class="text-xs bg-white text-blue-400 font-bold py-2 px-4 rounded-lg transition duration-300 ease-in-out hover:bg-blue-400 hover:text-white hover:border-5 hover:border-blue-500">
                                Tambah Keranjang</button>
                        </div>
                        <div class="w-1/4 bg-white p-5 mb-5 border shadow text-left rounded-lg">
                            <!-- Tidak ada margin-right di sini -->
                            <img src="https://cdn.gramedia.com/uploads/items/9786020366517_Cantik-Itu-Luka-Hard-Cover---Limited-Edition.jpg"
                                alt="Product 3" class="w-full h-auto mb-4 rounded-lg">
                            <div class="text-gray text-xs font-semibold py-2">Tere Liye</div>
                            <a href="#" class="text-blue-900 text-m font-bold py-2">Bulan</a>
                            <p class="item-price text-black text-2x1 font-semibold py-2"><b>Rp.85.500</b></p>
                            <button
                                class="text-xs bg-white text-blue-400 font-bold py-2 px-4 rounded-lg transition duration-300 ease-in-out hover:bg-blue-400 hover:text-white hover:border-5 hover:border-blue-500">
                                Tambah Keranjang</button>
                        </div>
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
