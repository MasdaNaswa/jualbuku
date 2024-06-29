@extends('layout.dashboard')

@section('title', 'Keranjang')

@section('content')
    <main class="container mx-auto p-4">
        <h2 class="text-2xl font-bold mb-4 text-blue-900">Keranjang Saya</h2>
        <div class="bg-white shadow rounded-lg p-4">
            @if (session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4"
                    role="alert">
                    <strong class="font-bold">Sukses!</strong>
                    <span class="block sm:inline">{{ session('success') }}</span>
                </div>
            @endif
            @if (session('error'))
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                    <strong class="font-bold">Error!</strong>
                    <span class="block sm:inline">{{ session('error') }}</span>
                </div>
            @endif
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
                    @forelse ($keranjang as $item)
                        <tr class="border-b" id="row-{{ $item->kode_keranjang }}">
                            <td class="p-2 flex items-center text-black text-semibold">
                                <img src="{{ asset('img/produk/' . $item->produk->gambar) }}"
                                    alt="{{ $item->produk->judul_buku }}" class="h-16 w-16 object-cover mr-2 text-black">
                                {{ $item->produk->judul_buku }}
                            </td>
                            <td class="p-2 text-black text-semibold">Rp
                                {{ number_format($item->produk->harga, 0, ',', '.') }}
                            </td>
                            <td class="p-2 flex items-center">
                                <button class="px-2 py-1 border" onclick="updateQuantity('{{ $item->kode_keranjang }}', 'decrease')">-</button>
                                <input type="text" value="{{ $item->jumlah }}" class="w-12 text-center mx-2 border" readonly id="quantity-{{ $item->kode_keranjang }}">
                                <button class="px-2 py-1 border" onclick="updateQuantity('{{ $item->kode_keranjang }}', 'increase')">+</button>
                            </td>
                            <td class="p-2 text-black text-semibold">Rp
                                {{ number_format($item->produk->harga * $item->jumlah, 0, ',', '.') }}</td>
                            <td class="p-2">
                                <form action="{{ route('keranjang.update', $item->kode_keranjang) }}" method="post" id="update-form-{{ $item->kode_keranjang }}">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="jumlah" id="hidden-quantity-{{ $item->kode_keranjang }}" value="{{ $item->jumlah }}">
                                    <button type="submit" class="text-blue-600">
                                        <svg width="20px" height="20px" viewBox="0 0 21 21"
                                            xmlns="http://www.w3.org/2000/svg">

                                            <g fill="none" fill-rule="evenodd" stroke="#000000" stroke-linecap="round"
                                                stroke-linejoin="round" transform="matrix(0 1 1 0 2.5 2.5)">

                                                <path
                                                    d="m3.98652376 1.07807068c-2.38377179 1.38514556-3.98652376 3.96636605-3.98652376 6.92192932 0 4.418278 3.581722 8 8 8s8-3.581722 8-8-3.581722-8-8-8" />

                                                <path d="m4 1v4h-4" transform="matrix(1 0 0 -1 0 6)" />

                                            </g>

                                        </svg>
                                    </button>
                                </form>
                                <button class="text-red-600"
                                    onclick="showDeleteModal('deleteModal-{{ $item->kode_keranjang }}')">
                                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                </button>
                            </td>
                        </tr>

                        <!-- Delete Modal -->
                        <div id="deleteModal-{{ $item->kode_keranjang }}" class="fixed z-10 inset-0 overflow-y-auto hidden">
                            <div
                                class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
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
                                                <svg class="h-6 w-6 text-red-600" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M6 18L18 6M6 6l12 12"></path>
                                                </svg>
                                            </div>
                                            <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                                <h3 class="text-lg leading-6 font-medium text-gray-900">Hapus Produk</h3>
                                                <div class="mt-2">
                                                    <p class="text-sm text-gray-500">Apakah Anda yakin ingin menghapus
                                                        produk ini dari keranjang Anda?</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                                        <form action="{{ route('keranjang.destroy', $item->kode_keranjang) }}"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">
                                                Hapus
                                            </button>
                                        </form>
                                        <button type="button"
                                            class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:w-auto sm:text-sm"
                                            onclick="closeDeleteModal('deleteModal-{{ $item->kode_keranjang }}')">
                                            Batal
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <tr>
                            <td class="p-2 text-center" colspan="5">Keranjang Anda masih kosong</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

            <div class="mt-4 flex justify-end">
                <div>
                    <p class="text-xl font-semibold text-black">Total: <span id="totalPrice">Rp
                            {{ number_format($totalPrice, 0, ',', '.') }}</span></p>
                    <a href="{{ route('pembayaran.showForm') }}"
                        class="bg-blue-900 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-2 inline-block">Lanjutkan
                        Pembayaran</a>
                </div>
            </div>

        </div>
    </main>


@endsection

@push('scripts')
    <script>
        function updateQuantity(kodeKeranjang, action) {
            var quantityInput = document.getElementById('quantity-' + kodeKeranjang);
            var quantity = parseInt(quantityInput.value);
            var hiddenQuantity = document.getElementById('hidden-quantity-' + kodeKeranjang);

            if (action === 'increase') {
                quantity++;
                hiddenQuantity.value = quantity;
            } else if (action === 'decrease' && quantity > 1) {
                quantity--;
                hiddenQuantity.value = quantity;
            }

            quantityInput.value = quantity;
        }

        var productToDelete = null;

        function showDeleteModal(id) {
            document.getElementById(id).classList.remove('hidden');
        }

        function closeDeleteModal(id) {
            document.getElementById(id).classList.add('hidden');
        }

    </script>
@endpush
