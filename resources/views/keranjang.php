<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang</title>
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
                <a href="dashboard" class="text-white text-2xl font-bold">Landing Library</a>
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
                        <div
                            class="absolute z-10 hidden group-hover:flex flex-col bg-white rounded-md shadow-lg py-1 px-6 w-96">
                            <div class="flex flex-col">
                                <a href="#" class="block px-2 py-2 text-sm text-blue-900 font-bold">Buku Cerpen</a>
                                <a href="#" class="block px-2 py-2 text-sm text-blue-900 font-bold">Buku Novel</a>
                                <a href="#" class="block px-2 py-2 text-sm text-blue-900 font-bold">Buku Komik</a>
                                <a href="#" class="block px-2 py-2 text-sm text-blue-900 font-bold">Buku Fiksi</a>
                                <a href="#" class="block px-2 py-2 text-sm text-blue-900 font-bold">Buku Nonfiksi</a>
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
                <a href="keranjang" class="text-white hover:text-white">
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

    <main class="container mx-auto p-4">
        <h2 class="text-2xl font-bold mb-4 text-blue-900">Keranjang Saya</h2>
        <div class="bg-white shadow rounded-lg p-4">
            <table class="w-full text-left">
                <thead class="bg-blue-900 text-white rounded-lg">
                    <tr>
                        <th class="p-2">Produk</th>
                        <th class="p-2">Harga</th>
                        <th class="p-2">Jumlah</th>
                        <th class="p-2">Total</th>
                        <th class="p-2"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b">
                        <td class="p-2 flex items-center text-black text-semibold">
                            <img src="https://cdn.gramedia.com/uploads/picture_meta/2023/2/14/iddphd9rbufdfjabf4owuf.jpg"
                                alt="The Girl who Fell Beneath the Sea" class="h-16 w-16 object-cover mr-2 text-black">
                            The Girl who Fell Beneath the Sea
                        </td>
                        <td class="p-2 text-black text-semibold">Rp 60.000</td>
                        <td class="p-2 flex items-center">
                            <button class="px-2 py-1 border" onclick="updateQuantity(this, 'decrease')">-</button>
                            <input type="text" value="1" class="w-12 text-center mx-2 border">
                            <button class="px-2 py-1 border" onclick="updateQuantity(this, 'increase')">+</button>
                        </td>
                        <td class="p-2 text-black text-semibold">Rp 60.000</td>
                        <td class="p-2">
                            <button class="text-red-600" onclick="showDeleteModal(this)">
                                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                            </button>
                        </td>
                    </tr>
                    <tr class="border-b">
                        <td class="p-2 flex items-center text-black text-semibold">
                            <img src="https://cdn.gramedia.com/uploads/items/9786024246945_Laut-Bercerita.png"
                                alt="Novel Laut Bercerita" class="h-16 w-16 object-cover mr-2 text-black">
                            Laut Bercerita
                        </td>
                        <td class="p-2 text-black text-semibold">Rp 90.000</td>
                        <td class="p-2 flex items-center">
                            <button class="px-2 py-1 border" onclick="updateQuantity(this, 'decrease')">-</button>
                            <input type="text" value="1" class="w-12 text-center mx-2 border">
                            <button class="px-2 py-1 border" onclick="updateQuantity(this, 'increase')">+</button>
                        </td>
                        <td class="p-2 text-black text-semibold">Rp 90.000</td>
                        <td class="p-2">
                            <button class="text-red-600" onclick="showDeleteModal(this)">
                                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                            </button>
                        </td>
                    </tr>
                    <tr class="border-b">
                        <td class="p-2 flex items-center text-black text-semibold">
                            <img src="https://cdn.gramedia.com/uploads/items/img20220205_15340302.jpg"
                                alt="Novel Mariposa" class="h-16 w-16 object-cover mr-2">
                            Mariposa
                        </td>
                        <td class="p-2 text-black text-semibold">Rp 70.000</td>
                        <td class="p-2 flex items-center">
                            <button class="px-2 py-1 border" onclick="updateQuantity(this, 'decrease')">-</button>
                            <input type="text" value="1" class="w-12 text-center mx-2 border">
                            <button class="px-2 py-1 border" onclick="updateQuantity(this, 'increase')">+</button>
                        </td>
                        <td class="p-2 text-black text-semibold">Rp 70.000</td>
                        <td class="p-2">
                            <button class="text-red-600" onclick="showDeleteModal(this)">
                                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>

            <div class="mt-4 flex justify-end">
                <div>
                    <p class="text-xl font-semibold text-black">Total: <span id="totalPrice">Rp 220.000</span></p>
                    <a href="form-pembayaran"
                        class="bg-blue-900 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-2 inline-block">Lanjutkan
                        Pembayaran</a>
                </div>
            </div>

        </div>
    </main>

    <!-- Delete Modal -->
    <div id="deleteModal" class="fixed z-10 inset-0 overflow-y-auto hidden">
        <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">​</span>
            <div
                class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="sm:flex sm:items-start">
                        <div
                            class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                            <svg class="h-6 w-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </div>
                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                            <h3 class="text-lg leading-6 font-medium text-gray-900">Hapus Produk</h3>
                            <div class="mt-2">
                                <p class="text-sm text-gray-500">Apakah Anda yakin ingin menghapus produk ini dari
                                    keranjang Anda?</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <button type="button"
                        class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm"
                        onclick="deleteProduct()">
                        Hapus
                    </button>
                    <button type="button"
                        class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:w-auto sm:text-sm"
                        onclick="closeDeleteModal()">
                        Batal
                    </button>
                </div>
            </div>
        </div>
    </div>

    <footer class="relative bg-[#] pt-8 pb-6 py-20">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap text-left lg:text-left">
                <div class="w-full lg:w-6/12 px-4">
                    <h3 class="font-bold text-2xl text-blueGray-500">Landing Library </h3>
                    <h5 class="text-xs mt-0 mb-2 text-[#374c71]" style="text-align: justify;">
                        Landing library toko buku online menyediakan beragam koleksi yang luas dari segala jenis buku,
                        mulai
                        dari fiksi hingga non-fiksi, termasuk novel, ensiklopedia, buku pelajaran, dan banyak lagi,
                        memenuhi
                        kebutuhan pembaca dengan berbagai minat dan preferensi.
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


    <script>
        function updateQuantity(button, action) {
            var quantityInput = button.parentNode.querySelector('input');
            var quantity = parseInt(quantityInput.value);

            if (action === 'increase') {
                quantity++;
            } else if (action === 'decrease' && quantity > 1) {
                quantity--;
            }

            quantityInput.value = quantity;
            updateTotal(button);
        }

        function updateTotal(button) {
            var row = button.parentNode.parentNode;
            var priceCell = row.querySelectorAll('td')[1];
            var totalCell = row.querySelectorAll('td')[3];
            var price = parseInt(priceCell.innerText.replace('Rp ', '').replace('.', ''));
            var quantity = parseInt(row.querySelector('input').value);
            var total = price * quantity;
            totalCell.innerText = 'Rp ' + total.toLocaleString('id-ID');

            updateTotalPrice();
        }

        function updateTotalPrice() {
            var rows = document.querySelectorAll('tbody tr');
            var total = 0;
            rows.forEach(function (row) {
                var totalCell = row.querySelectorAll('td')[3];
                var rowTotal = parseInt(totalCell.innerText.replace('Rp ', '').replace('.', ''));
                total += rowTotal;
            });
            document.getElementById('totalPrice').innerText = 'Rp ' + total.toLocaleString('id-ID');
        }

        var productToDelete = null;

        function showDeleteModal(button) {
            productToDelete = button.closest('tr');
            document.getElementById('deleteModal').classList.remove('hidden');
        }

        function closeDeleteModal() {
            document.getElementById('deleteModal').classList.add('hidden');
        }

        function deleteProduct() {
            if (productToDelete) {
                productToDelete.remove();
                updateTotalPrice();
                closeDeleteModal();
            }
        }

    </script>
</body>

</html>
