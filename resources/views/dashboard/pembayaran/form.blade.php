<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form Pembayaran</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="{{ asset('style/output.css') }}" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar -->
    <div>
        <header>
            @include('components.header')
        </header>
    </div>
    <div class="flex flex-col justify-center px-10 py-5 bg-white max-md:px-5">
        <div class="mt-16 max-md:mt-10 max-md:mr-2.5 max-md:max-w-full">
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
            <form id="formPesanan" action="{{ route('pembayaran.checkout') }}" method="POST">
                @csrf
                <div class="flex gap-5 max-md:flex-col max-md:gap-0">
                    <div class="flex flex-col w-[72%] max-md:ml-0 max-md:w-full">
                        <div class="flex flex-col grow max-md:mt-10 max-md:max-w-full">
                            <h2 class="text-2xl text-black max-md:max-w-full">
                                Pembayaran
                            </h2>
                            <div
                                class="flex flex-col items-start px-7 py-8 mt-4 text-lg text-black bg-white rounded-xl shadow-md max-md:px-5 max-md:max-w-full">
                                <div class="flex gap-3 text-xl">
                                    <img loading="lazy" src="{{ asset('images/mdi_address-marker.svg') }}"
                                        alt="Alamat tujuan pengiriman icon" class="shrink-0 aspect-square w-[30px]" />
                                    <h3 class="flex-auto my-auto">
                                        Alamat tujuan pengiriman
                                    </h3>
                                </div>
                                <div class="flex flex-col pl-0 md:pl-10 w-full" method="POST">
                                    @csrf
                                    <label for="alamat_lengkap" class="mt-6 max-md:ml-2.5">
                                        Alamat lengkap
                                    </label>
                                    <input type="text" id="alamat_lengkap" name="alamat_lengkap"
                                        placeholder="Masukkan alamat lengkap"
                                        class="justify-center items-start px-3 py-3.5 mt-1.5 max-w-full bg-gray-200 rounded-xl backdrop-blur-[2px] text-neutral-400 w-full max-md:pr-5 @error('alamat_lengkap') border-red-500 @enderror" />
                                    @error('alamat_lengkap')
                                        <p class="text-red-500 text-xs">{{ $message }}</p>
                                    @enderror
                                    <label for="provinsi" class="mt-6 max-md:ml-2.5">
                                        Provinsi
                                    </label>
                                    <input type="text" id="provinsi" name="provinsi" placeholder="Masukkan provinsi"
                                        class="justify-center items-start px-3 py-3.5 mt-2.5 max-w-full bg-gray-200 rounded-xl backdrop-blur-[2px] text-neutral-400 w-full max-md:pr-5 @error('provinsi') border-red-500 @enderror" />
                                    @error('provinsi')
                                        <p class="text-red-500 text-xs">{{ $message }}</p>
                                    @enderror
                                    <label for="kota" class="mt-6 max-md:ml-2.5">
                                        Kota
                                    </label>
                                    <input type="text" id="kota" name="kota" placeholder="Masukkan Kota"
                                        class="justify-center items-start px-3 py-3.5 mt-2 max-w-full bg-gray-200 rounded-xl backdrop-blur-[2px] text-neutral-400 w-full max-md:pr-5 @error('kota') border-red-500 @enderror" />
                                    @error('kota')
                                        <p class="text-red-500 text-xs">{{ $message }}</p>
                                    @enderror
                                    <label for="kecamatan" class="mt-5 max-md:ml-2.5">
                                        Kecamatan
                                    </label>
                                    <input type="text" id="kecamatan" name="kecamatan"
                                        placeholder="Masukkan kecamatan"
                                        class="justify-center items-start px-3 py-4 mt-3 max-w-full bg-gray-200 rounded-xl backdrop-blur-[2px] text-neutral-400 w-full max-md:pr-5 @error('kecamatan') border-red-500 @enderror" />
                                    @error('kecamatan')
                                        <p class="text-red-500 text-xs">{{ $message }}</p>
                                    @enderror
                                    <label for="kode_pos" class="mt-5 max-md:ml-2.5">
                                        Kode pos
                                    </label>
                                    <input type="text" id="kode_pos" name="kode_pos" placeholder="Masukkan kode pos"
                                        class="justify-center items-start px-2.5 py-3.5 mt-2 max-w-full bg-gray-200 rounded-xl backdrop-blur-[2px] text-neutral-400 w-full max-md:pr-5 @error('kode_pos') border-red-500 @enderror" />
                                    @error('kode_pos')
                                        <p class="text-red-500 text-xs">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div
                                class="flex flex-col items-start px-7 pt-5 pb-8 mt-11 text-lg text-black bg-white rounded-xl shadow-md max-md:px-5 max-md:mt-10 max-md:max-w-full">
                                <div class="flex gap-3 text-xl">
                                    <img loading="lazy" src="{{ asset('images/mdi_address-marker.svg') }}"
                                        class="shrink-0 aspect-square w-[30px]" />
                                    <h3 class="flex-auto">Nomor telephone pengguna</h3>
                                </div>
                                <div class="flex flex-col pl-0 md:pl-10 w-full">
                                    <label for="no_telp" class="mt-7 max-md:ml-2.5">
                                        Nomor telephone
                                    </label>
                                    <input type="tel" id="no_telp" name="no_telp"
                                        placeholder="Masukkan nomor telphone"
                                        class="justify-center items-start px-4 py-3.5 mt-1.5 max-w-full bg-gray-200 rounded-xl backdrop-blur-[2px] text-neutral-400 w-full max-md:pr-5 @error('no_telp') border-red-500 @enderror" />
                                    @error('no_telp')
                                        <p class="text-red-500 text-xs">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="flex flex-col pl-0 md:pl-10 w-full">
                                    <label for="no_telp" class="mt-7 max-md:ml-2.5">
                                        Nama
                                    </label>
                                    <input type="text" id="nama" name="nama"
                                        placeholder="Masukkan Nama"
                                        class="justify-center items-start px-4 py-3.5 mt-1.5 max-w-full bg-gray-200 rounded-xl backdrop-blur-[2px] text-neutral-400 w-full max-md:pr-5 @error('no_telp') border-red-500 @enderror" />
                                    @error('no_telp')
                                        <p class="text-red-500 text-xs">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="flex flex-col pl-0 md:pl-10 w-full">
                                    <label for="no_telp" class="mt-7 max-md:ml-2.5">
                                        Email
                                    </label>
                                    <input type="text" id="email" name="email"
                                        placeholder="Masukkan Email"
                                        class="justify-center items-start px-4 py-3.5 mt-1.5 max-w-full bg-gray-200 rounded-xl backdrop-blur-[2px] text-neutral-400 w-full max-md:pr-5 @error('email') border-red-500 @enderror" />
                                    @error('email')
                                        <p class="text-red-500 text-xs">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <section
                                class="flex flex-col px-11 py-9 mt-10 bg-white rounded-xl shadow-md max-md:px-5 max-md:mt-10 max-md:max-w-full">
                                <h2 class="text-xl text-black max-md:max-w-full">
                                    Pesanan
                                </h2>
                                @if (count($keranjang) > 0)
                                    @foreach ($keranjang as $item)
                                        <div
                                            class="flex gap-5 justify-between mt-5 w-full max-md:flex-wrap max-md:max-w-full">
                                            <div class="flex gap-5 justify-between">
                                                <img loading="lazy"
                                                    src="{{ asset('img/produk/' . $item->produk->gambar) }}"
                                                    alt="Book cover"
                                                    class="shrink-0 shadow-sm aspect-[0.75] w-[94px]" />
                                                <div class="flex flex-col self-start">
                                                    <p class="text-base font-thin text-neutral-600">
                                                        {{ $item->produk->penulis }}
                                                    </p>
                                                    <h3 class="mt-2 text-base text-black">
                                                        {{ $item->produk->judul_buku }}
                                                    </h3>
                                                </div>
                                            </div>
                                            <p class="my-auto text-xl text-cyan-700">Rp
                                                {{ number_format($item->produk->harga) }} x {{ $item->jumlah }}</p>
                                        </div>
                                    @endforeach
                                @else
                                    <div
                                        class="flex gap-5 justify-between mt-5 w-full max-md:flex-wrap max-md:max-w-full">
                                        <input type="hidden" name="kode_buku" value="{{ $produk->kode_buku }}">
                                        <input type="hidden" name="jumlah" value="{{ $jumlah }}">
                                        <div class="flex gap-5 justify-between">
                                            <img loading="lazy" src="{{ asset('img/produk/' . $produk->gambar) }}"
                                                alt="Book cover" class="shrink-0 shadow-sm aspect-[0.75] w-[94px]" />
                                            <div class="flex flex-col self-start">
                                                <p class="text-base font-thin text-neutral-600">
                                                    {{ $produk->penulis }}
                                                </p>
                                                <h3 class="mt-2 text-base text-black">
                                                    {{ $produk->judul_buku }}
                                                </h3>
                                            </div>
                                        </div>
                                        <p class="my-auto text-xl text-cyan-700">Rp
                                            {{ number_format($produk->harga) }} x {{ $jumlah }}</p>
                                    </div>
                                @endif
                            </section>
                        </div>
                    </div>
                    <div class="flex flex-col ml-5 w-[28%] max-md:ml-0 max-md:w-full">
                        <div class="flex flex-col mt-10 max-md:mt-10">
                            <div
                                class="flex flex-col px-3.5 py-10 w-full text-xl text-black bg-white rounded-xl shadow-md">
                                <label for="metode_pembayaran" class="self-start ml-5 max-md:ml-2.5">
                                    Metode Pembayaran
                                </label>
                                <select id="metode_pembayaran" name="metode_pembayaran"
                                    class="px-5 py-3.5 mt-3.5 text-lg bg-zinc-100 rounded-[50px] text-stone-500 @error('metode_pembayaran') border-red-500 @enderror">
                                    <option value="" selected disabled hidden>
                                        Pilih metode pembayaran
                                    </option>
                                    <option value="DANA">DANA</option>
                                    <option value="COD">COD</option>
                                </select>
                                @error('metode_pembayaran')
                                    <p class="text-red-500 text-xs">{{ $message }}</p>
                                @enderror
                                <label for="metode_pengiriman" class="self-start mt-10 ml-5 max-md:ml-2.5">
                                    Metode Pengiriman
                                </label>
                                <select id="metode_pengiriman" name="metode_pengiriman"
                                    class="px-5 py-3.5 mt-3 text-lg backdrop-blur-[2px] bg-zinc-100 rounded-[50px] text-stone-500 max-md:pl-5 @error('metode_pengiriman') border-red-500 @enderror">
                                    <option value="" selected disabled hidden>
                                        Pilih metode pengiriman
                                    </option>
                                    <option value="JNE">JNE</option>
                                    <option value="JNT">JNT</option>
                                    <option value="POS">POS</option>
                                </select>
                                @error('metode_pengiriman')
                                    <p class="text-red-500 text-xs">{{ $message }}</p>
                                @enderror
                            </div>
                            <div
                                class="flex flex-col px-4 pt-6 pb-2.5 mt-44 w-full bg-white rounded-xl shadow-md max-md:mt-10">
                                <div class="flex flex-col text-lg text-neutral-500 gap-8">
                                    <h3 class="text-xl text-black">Rincian Belanja</h3>
                                    <div class="text-sm">
                                        <div class="flex justify-between w-full items-center">
                                            <p class="">Total harga</p>
                                            <p class="text-black">Rp {{ number_format($totalHarga, 0, ',', '.') }}</p>
                                        </div>
                                        <div class="flex justify-between w-full items-center">
                                            <p class="">Ongkos kirim</p>
                                            <p class="text-black">Rp {{ number_format($ongkir, 0, ',', '.') }}</p>
                                        </div>
                                        <div class="flex justify-between w-full items-center">
                                            <p class="">Total biaya</p>
                                            <p class="text-black">Rp {{ number_format($totalBiaya, 0, ',', '.') }}</p>
                                        </div>
                                    </div>
                                    <div class="flex justify-between w-full items-center">
                                        <h3 class="text-xl text-black max-md:mt-10">
                                            Total Dibayar
                                        </h3>
                                        <p class="text-blue-400">Rp {{ number_format($totalBiaya, 0, ',', '.') }}</p>
                                    </div>
                                </div>
                                <button
                                    class="justify-center items-center px-16 py-3.5 mt-12 text-xl font-bold text-center text-white whitespace-nowrap bg-blue-400 rounded-xl shadow-md max-md:px-5 max-md:mt-10"
                                    type="submit" id="paymentButton">
                                    Bayar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>
</div>
    @include('components.footer')
</div>


</body>

</html>
