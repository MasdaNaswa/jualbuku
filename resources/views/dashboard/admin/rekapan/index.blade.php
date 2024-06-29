@extends('layout.dashboard-admin')

@section('title', 'rekapan')

@section('content')
    <div class="main--content">
        <div class="header--wrapper">
            <div class="header--tittle">
                <a class="max-w-screen flex items-left space-x-2 py-1 group hover:border-r-2 hover:border-r-indigo-700 font-bold text-white px-50"
                    t href="{{ route('rekapan.index') }}">
                    <svg class="h-5 w-5 stroke-indigo-700" xmlns="http://www.w3.org/2000/svg" fill="white"
                        viewBox="0 0 384 512" stroke="currentColor">
                        <path stroke-linejoin="round" stroke-width="2" path
                            d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128z">

                    </svg>
                    <h4>Rekapan</h4>
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
                                <th class="py-2 px-4 border-b text-sm">Status</th>z
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($pesanan as $item)
                                <tr>
                                    <td class="py-2 px-4 border-b text-black text-sm">{{ $item->nama }}</td>
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
                                </tr>
                            @empty
                                <tr>
                                    <td class="py-2 px-4 border-b text-black text-sm" colspan="14">Tidak ada data</td>
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
