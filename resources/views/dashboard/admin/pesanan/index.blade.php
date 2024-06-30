@extends('layout.dashboard-admin')

@section('title', 'Pesanan')

@section('content')
    <div class="main--content">
        <div class="header--wrapper">
            <div class="header--tittle">
                <a class="max-w-screen flex items-left space-x-2 py-1 group hover:border-r-2 hover:border-r-indigo-700 font-bold text-white px-50"
                    t href="{{ route('pesanan.index') }}">
                    <svg class="h-6 w-6 group-hover:stroke-indigo-700" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 48 48" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="4"
                            d="M 13.5 4 C 10.467 4 8 6.467 8 9.5 L 8 36 L 8 37.5 L 8 38.5 C 8 41.519774 10.480226 44 13.5 44 L 39.5 44 A 1.50015 1.50015 0 1 0 39.5 41 L 13.5 41 C 12.273237 41 11.277238 40.152347 11.050781 39 L 39.5 39 C 40.329 39 41 38.329 41 37.5 L 41 9.5 C 41 6.467 38.533 4 35.5 4 L 35 4 L 35 20.5 C 35 21.029 34.720625 21.519062 34.265625 21.789062 C 34.029625 21.929063 33.765 22 33.5 22 C 33.253 22 33.00525 21.938406 32.78125 21.816406 L 28 19.207031 L 23.21875 21.816406 C 22.75475 22.070406 22.191375 22.060063 21.734375 21.789062 C 21.279375 21.520063 21 21.029 21 20.5 L 21 4 L 13.5 4 z M 24 4 L 24 17.972656 L 27.28125 16.183594 C 27.50425 16.061594 27.753 16 28 16 C 28.247 16 28.49575 16.061594 28.71875 16.183594 L 32 17.972656 L 32 4 L 24 4 z">
                        </path>
                    </svg>
                    <h4>Pesanan</h4>
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
            <!-- Price -->
            <h2 id="price-heading">
                <button type="button"
                    class="flex items-center justify-between w-full py-2 px-1.5 text-sm font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-600 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-700"
                    data-accordion-target="#price-body" aria-expanded="true" aria-controls="price-body">
                    <span></span>
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
                                <th class="py-2 px-4 border-b text-sm">Nama Pengguna</th>
                                <th class="py-2 px-4 border-b text-sm">No Telp</th>
                                <th class="py-2 px-4 border-b text-sm">Tanggal Pesanan</th>
                                <th class="py-2 px-4 border-b text-sm">Kode Pesanan</th>
                                <th class="py-2 px-4 border-b text-sm">Buku</th>
                                <th class="py-2 px-4 border-b text-sm">Alamat</th>
                                <th class="py-2 px-4 border-b text-sm">Provinsi</th>
                                <th class="py-2 px-4 border-b text-sm">Kota</th>
                                <th class="py-2 px-4 border-b text-sm">Kecamatan</th>
                                <th class="py-2 px-4 border-b text-sm">Kode Pos</th>
                                <th class="py-2 px-4 border-b text-sm">Bukti Pembayaran</th>
                                <th class="py-2 px-4 border-b text-sm">Metode Pembayaran</th>
                                <th class="py-2 px-4 border-b text-sm">Metode Pengiriman</th>
                                <th class="py-2 px-4 border-b text-sm">Status</th>
                                <th class="py-2 px-4 border-b text-sm">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($pesanan->where('status', 'menunggu') as $item)
                                <tr>
                                    <td class="py-2 px-4 border-b text-black text-sm">{{ $item->pembeli->username }}</td>
                                    <td class="py-2 px-4 border-b text-black text-sm">{{ $item->no_telp }}</td>
                                    <td class="py-2 px-4 border-b text-black text-sm">
                                        {{ date('d-m-Y', strtotime($item->created_at)) }}</td>
                                    <td class="py-2 px-4 border-b text-black text-sm">{{ $item->kode_pesanan }}</td>
                                    {{-- beberapa buku dari items --}}
                                    <td class="py-2 px-4 border-b text-black text-sm">
                                        <ul class="list-disc list-inside ">
                                            @foreach ($item->items as $p)
                                                <li class="text-black">{{ $p->produk->judul_buku }} -
                                                    {{ $p->produk->harga }}</li>
                                            @endforeach
                                        </ul>
                                    </td>
                                    <td class="py-2 px-4 border-b text-black text-sm">{{ $item->alamat_lengkap }}</td>
                                    <td class="py-2 px-4 border-b text-black text-sm">{{ $item->provinsi }}</td>
                                    <td class="py-2 px-4 border-b text-black text-sm">{{ $item->kota }}</td>
                                    <td class="py-2 px-4 border-b text-black text-sm">{{ $item->kecamatan }}</td>
                                    <td class="py-2 px-4 border-b text-black text-sm">{{ $item->kode_pos }}</td>
                                    <td class="py-2 px-4 border-b max-w-xs whitespace-normal text-black text-sm">
                                        @if ($item->bukti_pembayaran)
                                            <a href="{{ asset('bukti_pembayaran/' . $item->bukti_pembayaran) }}"
                                                class="text-blue-500" target="_blank">Lihat</a>
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td class="py-2 px-4 border-b max-w-xs whitespace-normal text-black text-sm">
                                        {{ $item->metode_pembayaran }} </td>
                                    <td class="py-2 px-4 border-b max-w-xs whitespace-normal text-black text-sm">
                                        {{ $item->metode_pengiriman }} </td>
                                    <td class="py-2 px-4 border-b text-black text-sm">
                                        @if ($item->status == 'menunggu')
                                            <span
                                                class="px-2 py-1 font-semibold leading-tight text-yellow-700 bg-yellow-100 rounded-full dark:bg-yellow-700 dark:text-yellow-100">
                                                Menunggu
                                            </span>
                                        @elseif ($item->status == 'diterima')
                                            <span
                                                class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                                                Diterima
                                            </span>
                                        @else
                                            <span
                                                class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:bg-red-700 dark:text-red-100">
                                                Ditolak
                                            </span>
                                        @endif
                                    </td>
                                    <td class="py-2 px-4 border-b">
                                        <div class="flex space-x-2">
                                            <div class="flex space-x-2">
                                                @if ($item->status == 'menunggu')
                                                    <button type="button"
                                                        data-modal-target="tolak-modal-{{ $item->kode_pesanan }}"
                                                        data-modal-toggle="tolak-modal-{{ $item->kode_pesanan }}"
                                                        class="py-2 px-4 flex justify-center items-center text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm text-center">
                                                        <svg aria-hidden="true" class="w-4 h-5" fill="currentColor"
                                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                                                            fill="gray" stroke="CurrentColor">
                                                            <path
                                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                    <button type="button-terima"
                                                        data-modal-target="terima-modal-{{ $item->kode_pesanan }}"
                                                        data-modal-toggle="terima-modal-{{ $item->kode_pesanan }}"
                                                        class="py-2 px-4 flex justify-center items-center text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm text-center">
                                                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" d="M5 13l4 4L19 7" />
                                                        </svg>
                                                    </button>
                                                @else
                                                    -
                                                @endif
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <!-- Modal Konfirmasi Tolak -->
                                <div id="tolak-modal-{{ $item->kode_pesanan }}" tabindex="-1" aria-hidden="true"
                                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center">
                                    <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                            <div class="flex justify-end p-2">
                                                <button type="button"
                                                    class="text-gray-400 bg-gray-100 hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                                                    data-modal-hide="tolak-modal-{{ $item->kode_pesanan }}">
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
                                                        <!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                                        <path
                                                            d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM175 175c9.4-9.4 24.6-9.4 33.9 0l47 47 47-47c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9l-47 47 47 47c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0l-47-47-47 47c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l47-47-47-47c-9.4-9.4-9.4-24.6 0-33.9z" />
                                                    </svg>
                                                </div>
                                                <h3 class="mb-5 text-lg font-bold text-black dark:text-gray-400">
                                                    Tolak Pesanan?
                                                </h3>
                                                <button data-modal-hide="tolak-modal-{{ $item->kode_pesanan }}"
                                                    type="button"
                                                    class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                                    Batal
                                                </button>
                                                <form action="{{ route('pesanan.updateStatus', $item->kode_pesanan) }}"
                                                    method="POST" class="inline-block">
                                                    @csrf
                                                    @method('PUT')
                                                    <input type="hidden" name="status" value="ditolak">
                                                    <button type="submit"
                                                        class="text-white bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                                        Tolak
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal Konfirmasi Terima -->
                                <div id="terima-modal-{{ $item->kode_pesanan }}" tabindex="-1" aria-hidden="true"
                                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center">
                                    <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                            <div class="flex justify-end p-2">
                                                <button type="button"
                                                    class="text-gray-400 bg-gray-100 hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                                                    data-modal-hide="terima-modal-{{ $item->kode_pesanan }}">
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
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="65" height="65" fill="gray"
                                                stroke="CurrentColor"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm-1.999 14.413-3.713-3.705L7.7 11.292l2.299 2.295 5.294-5.294 1.414 1.414-6.706 6.706z"></path></svg>
                                                </div>
                                                <h3 class="mb-5 text-lg font-bold text-black dark:text-gray-400">
                                                    Terima Pesanan?
                                                </h3>
                                                <button data-modal-hide="terima-modal-{{ $item->kode_pesanan }}"
                                                    type="button"
                                                    class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                                    Batal
                                                </button>
                                                <form action="{{ route('pesanan.updateStatus', $item->kode_pesanan) }}"
                                                    method="POST" class="inline-block">
                                                    @csrf
                                                    @method('PUT')
                                                    <input type="hidden" name="status" value="diterima">
                                                    <button type="submit"
                                                        class="text-white bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                                        Terima
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <tr>
                                    <td class="py-2 px-4 border-b text-black text-sm" colspan="15">Tidak ada data</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="mt-4">
                    {{ $pesanan->links('pagination::tailwind') }}
                </div>
            </div>
        </div>

    @endsection
