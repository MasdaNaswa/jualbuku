@extends('layout.dashboard-admin')

@section('title', 'Produk')

@section('content')
    <div class="main--content">
        <div class="header--wrapper">
            <div class="header--tittle">
                <a class="max-w-screen flex items-left space-x-2 py-1 group hover:border-r-2 hover:border-r-indigo-700 font-bold text-white px-50"
                    t href="{{ route('produk.index') }}">
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
            <div class="flex flex-col md:flex-row md:items-left md:justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
            </div>
            @if (session('success'))
                <div class="bg-green-500 p-4 rounded-lg mb-6 text-white text-center">
                    {{ session('success') }}
                </div>
            @endif
            @if (session('error'))
                <div class="bg-red-500 p-4 rounded-lg mb-6 text-white text-center">
                    {{ session('error') }}
                </div>
            @endif
            <div
                class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-start md:space-x-3 flex-shrink-0">
                <button id="openModal" class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-700">Tambah</button>
            </div>

            <!-- Price -->
            <h2 id="price-heading">
                <button type="button"
                    class="flex items-center justify-between w-full py-2 px-1.5 text-sm font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-600 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-700"
                    data-accordion-target="#price-body" aria-expanded="true" aria-controls="price-body">
                    <span>Price</span>
                    <svg aria-hidden="true" data-accordion-icon="" class="w-5 h-5 rotate-180 shrink-0" fill="currentColor"
                        viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                    </svg>
                </button>
            </h2>
            <div class="container mx-auto">
                <div class="overflow-x-auto rounded-lg">
                    <table class="min-w-full bg-white">
                        <thead class="px-4 py-3 font-medium text-gray-900  dark:text-black bg-blue-900 hover:bg-blue-800">
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
                        </thead>

                        <tbody>
                            @foreach ($produk as $item)
                                <tr>
                                    <td class="py-2 px-4 border-b"><img src="{{ asset('img/produk/'.$item->gambar) }}" alt="Gambar Buku"
                                            class="w-16 h-16 object-cover"></td>
                                    <td class="py-2 px-4 border-b text-black text-sm">{{ $item->kategori->kategori }}</td>
                                    <td class="py-2 px-4 border-b text-black text-sm">{{ $item->stok }}</td>
                                    <td class="py-2 px-4 border-b text-black text-sm">{{ $item->penulis }}</td>
                                    <td class="py-2 px-4 border-b text-black text-sm">{{ $item->judul_buku }}</td>
                                    <td class="py-2 px-4 border-b max-w-xs whitespace-normal text-black text-sm ">
                                        {{ $item->deskripsi }}</td>
                                    <td class="py-2 px-4 border-b text-black text-sm">
                                        {{ 'Rp' . number_format($item->harga, 0, ',', '.') }}</td>
                                    <td class="py-2 px-4 border-b">
                                        <div class="flex space-x-2">
                                            <div class="flex space-x-2">
                                                <button type="button"
                                                    data-modal-target="delete-modal-{{ $item->kode_buku }}"
                                                    data-modal-toggle="delete-modal-{{ $item->kode_buku }}"
                                                    class="py-2 px-4 flex justify-center items-center text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm text-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4"
                                                        viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                        <path fill-rule="evenodd"
                                                            d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                </button>
                                                <button type="button" id="openUpdateFormButton{{ $item->kode_buku }}"
                                                    class="py-2 px-4 flex justify-center items-center text-sm font-medium text-center text-white bg-green-600 rounded-lg hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-500 dark:hover:bg-green-600 dark:focus:ring-green-700">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4"
                                                        viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
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
                                <!-- Modal Konfirmasi Hapus -->
                                <div id="delete-modal-{{ $item->kode_buku }}" tabindex="-1" aria-hidden="true"
                                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center">
                                    <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                            <div class="flex justify-end p-2">
                                                <button type="button"
                                                    class="text-gray-400 bg-gray-100 hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                                                    data-modal-hide="delete-modal-{{ $item->kode_buku }}">
                                                    <svg aria-hidden="true" class="w-5 h-5" fill="black"
                                                        stroke="CurrentColor" viewBox="0 0 20 20"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z">
                                                        </path>
                                                    </svg>
                                                    <span class="sr-only">Close modal</span>
                                                </button>

                                            </div>
                                            <div class="p-6 text-center">
                                                <div class="flex justify-center mb-4">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                        width="60" height="60" fill="gray"
                                                        stroke="CurrentColor">
                                                        <path
                                                            d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zm0-384c13.3 0 24 10.7 24 24V264c0 13.3-10.7 24-24 24s-24-10.7-24-24V152c0-13.3 10.7-24 24-24zM224 352a32 32 0 1 1 64 0 32 32 0 1 1 -64 0z" />
                                                    </svg>
                                                </div>
                                                <h3 class="mb-5 text-lg font-bold text-black dark:text-gray-400">
                                                    Lanjutkan Hapus?
                                                </h3>
                                                <form action="{{ route('produk.destroy', $item->kode_buku) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                                        Ya
                                                    </button>
                                                </form>
                                                <button data-modal-hide="delete-modal-{{ $item->kode_buku }}"
                                                    type="button"
                                                    class="text-white bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                                    Tidak
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="drawer-update-product{{ $item->kode_buku }}"
                                    class="fixed inset-0 overflow-hidden z-50 flex justify-center items-center hidden">
                                    <div class="absolute inset-0 bg-gray-600 opacity-75"></div>
                                    <div
                                        class="bg-white rounded-lg shadow-xl p-8 w-1/2 relative z-10 max-h-screen overflow-y-auto">
                                        <div class="flex justify-between items-center mb-4">
                                            <h2 class="text-2xl font-bold text-gray-700">Ubah Data Produk</h2>
                                            <button id="closeDrawerUpdate{{ $item->kode_buku }}"
                                                class="text-gray-600 hover:text-gray-900 text-2xl">&times;</button>
                                        </div>
                                        <form action="{{ route('produk.update', $item->kode_buku) }}" method="POST"
                                            class="space-y-4" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                                <div>
                                                    <label for="kode_kategori"
                                                        class="block text-sm font-medium text-gray-700">Kategori</label>
                                                    <select id="kode_kategori" name="kode_kategori" required
                                                        class="mt-1 p-2 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-black @error('kode_kategori') border-red-500 @enderror">
                                                        <option value="" disabled hidden selected
                                                            style="color: black;">Pilih
                                                            Kategori</option>
                                                        @foreach ($kategori as $k)
                                                            <option value="{{ $k->kode_kategori }}" style="color: black;"
                                                                {{ $k->kode_kategori == $item->kategori->kode_kategori ? 'selected' : '' }}>
                                                                {{ $k->kategori }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div>
                                                    <label for="stok"
                                                        class="block text-sm font-medium text-gray-700">Stok</label>
                                                    <input type="number" id="stok" name="stok" required
                                                        class="mt-1 p-2 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-black @error('stok') border-red-500 @enderror"
                                                        value="{{ $item->stok }}">
                                                </div>
                                                <div>
                                                    <label for="penulis"
                                                        class="block text-sm font-medium text-gray-700">Penulis</label>
                                                    <input type="text" id="penulis" name="penulis" required
                                                        class="mt-1 p-2 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-black @error('penulis') border-red-500 @enderror"
                                                        value="{{ $item->penulis }}">
                                                </div>
                                                <div>
                                                    <label for="judul_buku"
                                                        class="block text-sm font-medium text-gray-700">Judul
                                                        Buku</label>
                                                    <input type="text" id="judul_buku" name="judul_buku" required
                                                        class="mt-1 p-2 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-black @error('judul_buku') border-red-500 @enderror"
                                                        value="{{ $item->judul_buku }}">
                                                </div>
                                            </div>
                                            <div>
                                                <label for="deskripsi"
                                                    class="block text-sm font-medium text-gray-700">Deskripsi</label>
                                                <textarea id="deskripsi" name="deskripsi" required
                                                    class="mt-1 p-2 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-black @error('deskripsi') border-red-500 @enderror">{{ $item->deskripsi }}</textarea>
                                            </div>
                                            <div>
                                                <p class="block text-sm font-medium text-gray-700 font-bold">Detail Buku
                                                </p>
                                            </div>
                                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                                <div>
                                                    <label for="harga"
                                                        class="block text-sm font-medium text-gray-700">Harga</label>
                                                    <input type="number" id="harga" name="harga" required
                                                        class="mt-1 p-2 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-black @error('harga') border-red-500 @enderror"
                                                        value="{{ $item->harga }}">
                                                </div>
                                                <div>
                                                    <label for="gambar"
                                                        class="block text-sm font-medium text-gray-700">Gambar</label>
                                                    <input type="file" id="gambar" name="gambar"
                                                        class="mt-1 p-2 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-100 file:mr-2 file:py-1 file:px-2 file:rounded file:border-0 file:text-xs file:font-medium file:bg-blue-100 file:text-gray-700 hover:file:bg-blue-100">
                                                </div>
                                                <div>
                                                    <label for="jumlah_halaman"
                                                        class="block text-sm font-medium text-gray-700">Jumlah
                                                        Halaman</label>
                                                    <input type="number" id="jumlah_halaman" name="jumlah_halaman"
                                                        required
                                                        class="mt-1 p-2 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-black @error('jumlah_halaman') border-red-500 @enderror"
                                                        value="{{ $item->jumlah_halaman }}">
                                                </div>
                                                <div>
                                                    <label for="tanggal_terbit"
                                                        class="block text-sm font-medium text-gray-700">Tanggal
                                                        Terbit</label>
                                                    <input type="date" id="tanggal_terbit" name="tanggal_terbit"
                                                        required
                                                        class="mt-1 p-2 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-black @error('tanggal_terbit') border-red-500 @enderror"
                                                        value="{{ $item->tanggal_terbit }}">
                                                </div>
                                                <div>
                                                    <label for="isbn"
                                                        class="block text-sm font-medium text-gray-700">ISBN</label>
                                                    <input type="text" id="isbn" name="isbn" required
                                                        class="mt-1 p-2 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-black @error('isbn') border-red-500 @enderror"
                                                        value="{{ $item->isbn }}">
                                                </div>
                                                <div>
                                                    <label for="bahasa"
                                                        class="block text-sm font-medium text-gray-700">Bahasa</label>
                                                    <input type="text" id="bahasa" name="bahasa" required
                                                        class="mt-1 p-2 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-black @error('bahasa') border-red-500 @enderror"
                                                        value="{{ $item->bahasa }}">
                                                </div>
                                                <div>
                                                    <label for="penerbit"
                                                        class="block text-sm font-medium text-gray-700">Penerbit</label>
                                                    <input type="text" id="penerbit" name="penerbit" required
                                                        class="mt-1 p-2 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-black @error('penerbit') border-red-500 @enderror"
                                                        value="{{ $item->penerbit }}">
                                                </div>
                                                <div>
                                                    <label for="berat"
                                                        class="block text-sm font-medium text-gray-700">Berat
                                                        (gram)
                                                    </label>
                                                    <input type="number" id="berat" name="berat" required
                                                        class="mt-1 p-2 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-black @error('berat') border-red-500 @enderror"
                                                        value="{{ $item->berat }}">
                                                </div>
                                                <div>
                                                    <label for="lebar"
                                                        class="block text-sm font-medium text-gray-700">Lebar
                                                        (cm)</label>
                                                    <input type="number" id="lebar" name="lebar" required
                                                        class="mt-1 p-2 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-black @error('lebar') border-red-500 @enderror"
                                                        value="{{ $item->lebar }}">
                                                </div>
                                                <div>
                                                    <label for="panjang"
                                                        class="block text-sm font-medium text-gray-700">Panjang
                                                        (cm)</label>
                                                    <input type="number" id="panjang" name="panjang" required
                                                        class="mt-1 p-2 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-black @error('panjang') border-red-500 @enderror"
                                                        value="{{ $item->panjang }}">
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
                            @endforeach
                        </tbody>
                    </table>
                    <div class="mt-4">
                        {{ $produk->links('pagination::tailwind') }}
                    </div>
                </div>
            </div>

            <div id="modal" class="fixed inset-0 bg-gray-600 bg-opacity-50 flex items-center justify-center hidden">
                <div class="bg-white p-8 rounded-lg shadow-lg w-1/2 max-h-full overflow-y-auto">
                    <div class="flex justify-between items-center mb-4">
                        <h2 class="text-2xl font-bold text-gray-700">Tambah Data Produk</h2>
                        <button id="closeModal" class="text-gray-600 hover:text-gray-900">&times;</button>
                    </div>
                    <form action="{{ route('produk.store') }}" method="POST" class="space-y-4"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="flex space-x-4">
                            <div class="w-1/2">
                                <label for="kode_kategori"
                                    class="block text-sm font-medium text-gray-700">Kategori</label>
                                <select id="kode_kategori" name="kode_kategori" required
                                    class="mt-1 p-2 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-black @error('kode_kategori') border-red-500 @enderror">
                                    <option value="" disabled hidden selected style="color: black;">Pilih Kategori
                                    </option>
                                    @foreach ($kategori as $item)
                                        <option style="color: black;" value="{{ $item->kode_kategori }}"
                                            {{ old('kode_kategori') == $item->kode_kategori ? 'selected' : '' }}>
                                            {{ $item->kategori }}</option>
                                    @endforeach
                                </select>
                                @error('kode_kategori')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="w-1/2">
                                <label for="stok" class="block text-sm font-medium text-gray-700">Stok</label>
                                <input type="number" id="stok" name="stok" required
                                    class="mt-1 p-2 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-black @error('stok') border-red-500 @enderror"
                                    value="{{ old('stok') }}">
                                @error('stok')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="flex space-x-4">
                            <div class="w-1/2">
                                <label for="penulis" class="block text-sm font-medium text-gray-700">Penulis</label>
                                <input type="text" id="penulis" name="penulis" required
                                    class="mt-1 p-2 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-black @error('penulis') border-red-500 @enderror"
                                    value="{{ old('penulis') }}">
                                @error('penulis')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="w-1/2">
                                <label for="judul_buku" class="block text-sm font-medium text-gray-700">Judul Buku</label>
                                <input type="text" id="judul_buku" name="judul_buku" required
                                    class="mt-1 p-2 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-black @error('judul_buku') border-red-500 @enderror"
                                    value="{{ old('judul_buku') }}">
                                @error('judul_buku')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div>
                            <label for="deskripsi" class="block text-sm font-medium text-gray-700">Deskripsi</label>
                            <textarea id="deskripsi" name="deskripsi" required
                                class="mt-1 p-2 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-black @error('deskripsi') border-red-500 @enderror">{{ old('deskripsi') }}</textarea>
                            @error('deskripsi')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <p class="block text-sm font-medium text-gray-700 font-bold">Detail Buku</p>
                        </div>
                        <div class="flex space-x-4">
                            <div class="w-1/2">
                                <label for="harga" class="block text-sm font-medium text-gray-700">Harga</label>
                                <input type="number" id="harga" name="harga" required
                                    class="mt-1 p-2 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-black @error('harga') border-red-500 @enderror"
                                    value="{{ old('harga') }}">
                                @error('harga')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="w-1/2">
                                <label for="gambar" class="block text-sm font-medium text-gray-700">Gambar</label>
                                <input type="file" id="gambar" name="gambar"
                                    class="mt-1 p-2 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 file:mr-2 file:py-1 file:px-2 file:rounded file:border-0 file:text-xs file:font-medium file:bg-gray-200 file:text-gray-700 hover:file:bg-gray-300 @error('gambar') border-red-500 @enderror">
                                @error('gambar')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="flex space-x-4">
                            <div class="w-1/2">
                                <label for="jumlah_halaman" class="block text-sm font-medium text-gray-700">Jumlah
                                    Halaman</label>
                                <input type="number" id="jumlah_halaman" name="jumlah_halaman" required
                                    class="mt-1 p-2 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-black @error('jumlah_halaman') border-red-500 @enderror"
                                    value="{{ old('jumlah_halaman') }}">
                                @error('jumlah_halaman')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="w-1/2">
                                <label for="tanggal_terbit" class="block text-sm font-medium text-gray-700">Tanggal
                                    Terbit</label>
                                <input type="date" id="tanggal_terbit" name="tanggal_terbit" required
                                    class="mt-1 p-2 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-black @error('tanggal_terbit') border-red-500 @enderror"
                                    value="{{ old('tanggal_terbit') }}">
                                @error('tanggal_terbit')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="flex space-x-4">
                            <div class="w-1/2">
                                <label for="isbn" class="block text-sm font-medium text-gray-700">ISBN</label>
                                <input type="text" id="isbn" name="isbn" required
                                    class="mt-1 p-2 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-black @error('isbn') border-red-500 @enderror"
                                    value="{{ old('isbn') }}">
                                @error('isbn')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="w-1/2">
                                <label for="bahasa" class="block text-sm font-medium text-gray-700">Bahasa</label>
                                <input type="text" id="bahasa" name="bahasa" required
                                    class="mt-1 p-2 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-black @error('bahasa') border-red-500 @enderror"
                                    value="{{ old('bahasa') }}">
                                @error('bahasa')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="flex space-x-4">
                            <div class="w-1/2">
                                <label for="penerbit" class="block text-sm font-medium text-gray-700">Penerbit</label>
                                <input type="text" id="penerbit" name="penerbit" required
                                    class="mt-1 p-2 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-black @error('penerbit') border-red-500 @enderror"
                                    value="{{ old('penerbit') }}">
                                @error('penerbit')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="w-1/2">
                                <label for="berat" class="block text-sm font-medium text-gray-700">Berat (gram)</label>
                                <input type="number" id="berat" name="berat" required
                                    class="mt-1 p-2 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-black @error('berat') border-red-500 @enderror"
                                    value="{{ old('berat') }}">
                                @error('berat')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="flex space-x-4">
                            <div class="w-1/2">
                                <label for="lebar" class="block text-sm font-medium text-gray-700">Lebar (cm)</label>
                                <input type="number" id="lebar" name="lebar" required
                                    class="mt-1 p-2 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-black @error('lebar') border-red-500 @enderror"
                                    value="{{ old('lebar') }}">
                                @error('lebar')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="w-1/2">
                                <label for="panjang" class="block text-sm font-medium text-gray-700">Panjang (cm)</label>
                                <input type="number" id="panjang" name="panjang" required
                                    class="mt-1 p-2 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-black @error('panjang') border-red-500 @enderror"
                                    value="{{ old('panjang') }}">
                                @error('panjang')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
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
    </div>
@endsection
