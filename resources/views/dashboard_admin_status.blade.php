<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script>
        function toggleModal(modalID) {
            document.getElementById(modalID).classList.toggle("hidden");
            document.getElementById(modalID).classList.toggle("flex");
        }

        function setEditData(id, name, category, price) {
            document.getElementById('editProductId').value = id;
            document.getElementById('editProductName').value = name;
            document.getElementById('editProductCategory').value = category;
            document.getElementById('editProductPrice').value = price;
        }

        function setDeleteData(id) {
            document.getElementById('deleteProductId').value = id;
        }

    </script>
</head>

<body class="bg-gray-100 font-sans">

    <div class="flex h-screen">
        <!-- Sidebar -->
        <div class="w-64 bg-blue-900 text-white flex flex-col">
            <div class="h-16 flex items-center justify-center bg-blue-900">
                <span class="text-lg">Admin Dashboard</span>
            </div>
            <nav class="flex-1 px-2 py-4 space-y-2">
                <a href="#" class="block px-4 py-2 rounded hover:bg-blue-700 text-bold">Dashboard</a>
                <a href="#" class="block px-4 py-2 rounded hover:bg-blue-700 text-bold">Users</a>
                <a href="#" class="block px-4 py-2 rounded hover:bg-blue-700 text-bold">Orders</a>
                <a href="#" class="block px-4 py-2 rounded hover:bg-blue-700 text-bold">Products</a>
                <a href="#" class="block px-4 py-2 rounded hover:bg-blue-700 text-bold">Settings</a>
                <a href="#" class="block px-4 py-2 rounded hover:bg-blue-700 text-bold">Reports</a>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="flex-1 p-6 bg-white overflow-y-auto">
            <h1 class="text-2xl mb-6 text-semibold">Pesanan</h1>
            <button onclick="toggleModal('addProductModal')" class="mb-6 px-4 py-2 bg-blue-500 text-white rounded">Add
                Product</button>
            <table class="min-w-full bg-white border rounded-lg">
                <thead class="bg-blue-900 text-white rounded-lg">
                    <tr>
                        <th class="py-2 px-4 border-b">Nama Pengguna</th>
                        <th class="py-2 px-4 border-b">Judul Buku</th>
                        <th class="py-2 px-4 border-b">Harga Buku</th>
                        <th class="py-2 px-4 border-b">Jumlah Buku</th>
                        <th class="py-2 px-4 border-b">Alamat Lengkap</th>
                        <th class="py-2 px-4 border-b">Provinsi</th>
                        <th class="py-2 px-4 border-b">Kota</th>
                        <th class="py-2 px-4 border-b">Kecamatan</th>
                        <th class="py-2 px-4 border-b">Kode Pos</th>
                        <th class="py-2 px-4 border-b">Bukti Pembayaran</th>
                        <th class="py-2 px-4 border-b">Aksi</th>

                    </tr>
                </thead>
                <tbody>
                    <!-- Sample Row -->
                    <tr class="hover:bg-gray-100">
                        <td class="py-2 px-4 border-b">Dina Ramadani</td>
                        <td class="py-2 px-4 border-b">Harga Sebuah Percaya</td>
                        <td class="py-2 px-4 border-b">Rp.90.000</td>
                        <td class="py-2 px-4 border-b">1</td>
                        <td class="py-2 px-4 border-b">PERUMAHAN HUTATAP BLOK F NO. 24 RT 2 RW 1 Batu Aji</td>
                        <td class="py-2 px-4 border-b">Kepulauan Rian</td>
                        <td class="py-2 px-4 border-b">Kota Batam</td>
                        <td class="py-2 px-4 border-b">Sagulung</td>
                        <td class="py-2 px-4 border-b">29439</td>
                        <td class="py-2 px-4 border-b">images.jpg</td>
                        <td class="py-2 px-4 border-b">
                            <button
                                onclick="setEditData(1, 'Product 1', 'Category 1', 10); toggleModal('editProductModal');"
                                class="px-2 py-1 bg-green-500 text-white rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 5a2 2 0 00-2-2H5a2 2 0 00-2 2v14a2 2 0 002 2h8a2 2 0 002-2V5z" />
                                </svg>
                            </button>
                            <button onclick="setDeleteData(1); toggleModal('deleteProductModal');"
                                class="px-2 py-1 bg-red-500 text-white rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </td>

                    </tr>
                    <!-- Repeat Rows as Needed -->
                </tbody>
            </table>
        </div>
    </div>

    <!-- Add Product Modal -->
    <div id="addProductModal" class="fixed inset-0 hidden justify-center items-center bg-gray-800 bg-opacity-50">
        <div class="bg-white p-6 rounded-lg w-1/3">
            <h2 class="text-2xl mb-4">Add Product</h2>
            <form>
                <div class="mb-4">
                    <label for="productName" class="block text-gray-700">Product Name</label>
                    <input type="text" id="productName" class="w-full px-3 py-2 border rounded">
                </div>
                <div class="mb-4">
                    <label for="productCategory" class="block text-gray-700">Category</label>
                    <input type="text" id="productCategory" class="w-full px-3 py-2 border rounded">
                </div>
                <div class="mb-4">
                    <label for="productPrice" class="block text-gray-700">Price</label>
                    <input type="number" id="productPrice" class="w-full px-3 py-2 border rounded">
                </div>
                <div class="flex justify-end">
                    <button type="button" onclick="toggleModal('addProductModal')"
                        class="px-4 py-2 bg-gray-500 text-white rounded mr-2">Cancel</button>
                    <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded">Add</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Edit Product Modal -->
    <div id="editProductModal" class="fixed inset-0 hidden justify-center items-center bg-gray-800 bg-opacity-50">
        <div class="bg-white p-6 rounded-lg w-1/3">
            <h2 class="text-2xl mb-4">Edit Product</h2>
            <form>
                <input type="hidden" id="editProductId">
                <div class="mb-4">
                    <label for="editProductName" class="block text-gray-700">Product Name</label>
                    <input type="text" id="editProductName" class="w-full px-3 py-2 border rounded">
                </div>
                <div class="mb-4">
                    <label for="editProductCategory" class="block text-gray-700">Category</label>
                    <input type="text" id="editProductCategory" class="w-full px-3 py-2 border rounded">
                </div>
                <div class="mb-4">
                    <label for="editProductPrice" class="block text-gray-700">Price</label>
                    <input type="number" id="editProductPrice" class="w-full px-3 py-2 border rounded">
                </div>
                <div class="flex justify-end">
                    <button type="button" onclick="toggleModal('editProductModal')"
                        class="px-4 py-2 bg-gray-500 text-white rounded mr-2">Cancel</button>
                    <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded">Update</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Delete Product Modal -->
    <div id="deleteProductModal" class="fixed inset-0 hidden justify-center items-center bg-gray-800 bg-opacity-50">
        <div class="bg-white p-6 rounded-lg w-1/3">
            <h2 class="text-2xl mb-4">Delete Product</h2>
            <form>
                <input type="hidden" id="deleteProductId">
                <p class="mb-4 text-gray-700">Are you sure you want to delete this product?</p>
                <div class="flex justify-end">
                    <button type="button" onclick="toggleModal('deleteProductModal')"
                        class="px-4 py-2 bg-gray-500 text-white rounded mr-2">Cancel</button>
                    <button type="submit" class="px-4 py-2 bg-red-500 text-white rounded">Delete</button>
                </div>
            </form>
        </div>
    </div>

</body>

</html>
