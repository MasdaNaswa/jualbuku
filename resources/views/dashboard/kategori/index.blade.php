@extends('layout.dashboard')

@section('title', 'Kategori')

@section('content')
    <div class="container mx-auto py-20">
        <h1 class="text-4xl font-bold text-center mb-8"></h1>
        <div class="flex">
            <!-- Sidebar Kategori -->
            <div class="w-1/5 bg-white p-6 rounded-lg shadow-lg mr-8">
                <h2 class="text-2xl font-semibold mb-4">Kategori</h2>
                <ul>
                    <li class="mb-4">
                        <a href="{{ route('kategori.index') }}"
                           class="text-black hover:text-blue-700 font-semibold {{ ($kategori == null) ? 'text-blue-700' : '' }}">
                            Semua Buku
                        </a>
                    </li>
                    @foreach ($kategoriList as $item)
                        <li class="mb-4">
                            <a href="{{ route('kategori.index', ['kategori' => $item->kategori]) }}"
                               class="text-black hover:text-blue-700 font-semibold {{ ($kategori == $item->kategori) ? 'text-blue-700' : '' }}">
                                Buku {{ $item->kategori }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            <!-- Daftar Produk -->
            <div class="w-4/5 p-5">
                @if (session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4"
                        role="alert">
                        <strong class="font-bold">Sukses!</strong>
                        <span class="block sm:inline">{{ session('success') }}</span>
                    </div>
                @endif
                @if (session('error'))
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4"
                        role="alert">
                        <strong class="font-bold">Error!</strong>
                        <span class="block sm:inline">{{ session('error') }}</span>
                    </div>
                @endif
                <div class="flex flex-col items-center">
                    @foreach ($produk->chunk(4) as $chunk)
                        <div class="flex justify-start w-full mb-5">
                            @foreach ($chunk as $item)
                                <div class="w-1/4 bg-white p-5 mb-5 mr-5 border shadow text-left rounded-lg">
                                    <img src="{{ asset('img/produk/' . $item->gambar) }}" alt="{{ $item->judul_buku }}"
                                        class="w-full h-auto mb-4 rounded-lg">
                                    <div class="text-gray text-xs font-semibold py-2">{{ $item->penulis }}</div>
                                    <a href="{{ route('produk.show', $item->kode_buku) }}"
                                        class="text-blue-900 text-m font-bold py-2">{{ $item->judul_buku }}</a>
                                    <p class="item-price text-black text-2x1 font-semibold py-2">
                                        <b>Rp.{{ number_format($item->harga, 0, ',', '.') }}</b></p>
                                    <form action="{{ route('keranjang.store') }}" method="post">
                                        @csrf
                                        <input type="hidden" name="kode_buku" value="{{ $item->kode_buku }}">
                                        <button type="submit"
                                            class="text-xs bg-white text-blue-400 font-bold py-2 px-4 rounded-lg transition duration-300 ease-in-out hover:bg-blue-400 hover:text-white hover:border-5 hover:border-blue-500">
                                            Tambah Keranjang
                                        </button>
                                    </form>
                                </div>
                            @endforeach
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
