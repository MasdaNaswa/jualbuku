<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ringkasan Pembayaran</title>
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
    <div class="flex flex-col justify-center px-4 py-4 bg-white max-md:pl-5">
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
        <div class="flex flex-col pt-4 pb-11 mt-12 bg-white rounded-xl shadow-md max-md:mt-10 max-md:max-w-full">
            <div class="flex justify-start mx-4 items-center text-3xl text-cyan-700">
                <img src="{{ asset('img/ringkas.png') }}" alt="Order summary icon" class="shrink-0 w-[50px]" />
                <h1 class="">Ringkasan Pesanan</h1>
            </div>
            <div class="flex gap-10 mx-4 max-md:flex-col max-md:gap-0">
                <div
                    class="flex flex-col gap-y-8 grow px-8 py-8 mx-auto w-full text-xl bg-white rounded-xl shadow-md max-md:pr-5">
                    <h2 class="text-2xl font-bold text-black">
                        Info pengiriman dan penagihan
                    </h2>
                    <div class="flex gap-5 justify-between">
                        <div class="flex flex-col">
                            <p class="text-neutral-400">NAMA DEPAN</p>
                            <p class="mt-2 text-black">{{ $pesanan->nama }}
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <p class="text-neutral-400">EMAIL</p>
                        <p class="mt-2 text-black">{{ $pesanan->email }}</p>
                    </div>
                    <div class="flex flex-col">
                        <p class="text-neutral-400">NO TELEPON</p>
                        <p class="mt-2 text-black">{{ $pesanan->no_telp }}</p>
                    </div>
                    <div class="flex flex-col">
                        <p class="text-neutral-400">ALAMAT PENGIRIMAN</p>
                        <address>
                            <p class="mt-2 text-black">{{ $pesanan->alamat_lengkap }}</p>
                        </address>
                    </div>
                </div>

                <div
                    class="flex flex-col gap-y-8 grow px-8 py-8 w-full text-xl bg-white rounded-xl shadow-md max-md:pr-5">
                    <h2 class="text-2xl font-bold">Metode Pembayaran</h2>
                    <div class="flex flex-col">
                        <p class="text-neutral-400">Your choose</p>
                        <p class="">{{ $pesanan->metode_pembayaran }}</p>
                    </div>
                    <h2 class="text-2xl font-bold">Metode Pengiriman</h2>
                    <div class="flex flex-col">
                        <p class="text-neutral-400">Your choose</p>
                        <p class="">{{ $pesanan->metode_pengiriman }}</p>
                    </div>
                    <div>
                        <h2 class="text-2xl font-bold">No Pemesanan</h2>
                        <p class="">#{{ $pesanan->kode_pesanan }}</p>
                    </div>
                    @if ($pesanan->status == 'menunggu' && $pesanan->bukti_pembayaran == null)
                        status dan tombol bayar
                        <div class="flex flex-col">
                            <h2 class="text-2xl font-bold">Status</h2>
                            <p class="text-red-500">Menunggu Pembayaran</p>
                        </div>
                        <div class="flex justify-end">
                            <button type="button" id="paymentButton"
                                class="justify-center items-center py-2 px-4 mt-8 font-bold text-center text-white bg-blue-400 rounded-xl w-[227px]">
                                Bayar Sekarang
                            </button>
                        </div>
                    @elseif ($pesanan->status == 'menunggu' && $pesanan->bukti_pembayaran != null)
                        <div class="flex flex-col">
                            <h2 class="text-2xl font-bold">Status</h2>
                            <p class="text-yellow-500">Menunggu Konfirmasi</p>
                        </div>
                    @else
                        <div class="flex flex-col">
                            <h2 class="text-2xl font-bold">Status</h2>
                            <p class="text-green-500">Pembayaran Berhasil</p>
                        </div>
                    @endif
                    <div class="flex justify-end mt-2 gap-x-2">
                    <div class="flex justify-end">
                            <a href="{{ route('ringkasan.exportResiPDF', $pesanan->kode_pesanan) }}"
                                class="justify-center items-center py-2 px-4 mt-8 font-bold text-center text-white bg-blue-400 rounded-xl w-[227px]">
                                Cetak Resi
                            </a>
                        </div>
                    </div>
                </div>
                <div class="px-8 py-8 w-full h-min bg-white rounded-xl shadow-md max-md:px-5 max-h-min">
                    <div class="flex max-md:flex-col">
                        <div class="flex flex-col grow">
                            <h2 class="text-2xl font-bold text-black">
                                Pesanan Saya
                            </h2>
                            @foreach ($pesanan->items as $item)
                                <div class="flex mt-4 justify-between items-start text-base font-thin text-neutral-600">
                                    <div class="flex gap-4">
                                        <img src="{{ asset('img/produk/' . $item->produk->gambar) }}"
                                            class="shrink-0 w-[95px]" />
                                        <p class="">{{ $item->produk->judul_buku }}
                                    </div>
                                    <p class="text-base text-black">Rp.
                                        {{ number_format($item->produk->harga, 0, ',', '.') }} x {{ $item->jumlah }}
                                    </p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-end mx-4">
                <a class="justify-center ml-6 items-center py-2 px-4 mt-8 font-bold text-center text-white bg-blue-400 rounded-xl w-[227px]"
                    href="{{ route('dashboard') }}">
                    Kembali Beranda
                </a>
            </div>
        </div>
    </div>

    <!-- Payment Modal -->
    <div id="paymentModal"
        class="fixed inset-0 z-50 hidden items-center justify-center overflow-auto backdrop-blur-sm bg-black bg-opacity-50">
        <div
            class="bg-white max-md:self-start rounded-xl shadow-sm max-md:max-h-max max-w-[1252px] max-h-[650px] relative">
            <button id="closeModal" class="absolute top-2 right-2 text-gray-500 hover:text-gray-700">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
            <div class="flex flex-col self-center py-16 pr-3.5 pl-16 max-md:pl-5 max-md:max-w-full">
                <div
                    class="flex max-md:justify-center max-md:w-full justify-start gap-10 text-black max-md:flex-wrap max-md:max-w-full">
                    <div class="flex flex-col gap-y-4 items-center max-md:max-w-full max-w-[30%]">
                        <h2 class="text-3xl">Lakukan Pembayaran</h2>
                        <img src="{{ asset('img/barcode.png') }}" alt="QR code for payment" class="max-w-full" />
                        <div class="max-w-full gap-y-3">
                            <p class="mx-4 text-xl text-justify max-md:mx-2.5">
                                Scan kode QR diatas untuk melakukan pembayaran
                            </p>
                            <p class="mx-4 text-base text-justify max-md:mx-2.5">
                                Setelah melakukan pembayaran masukkan foto bukti
                                pembayaran sebagai syarat melakukan transaksi
                            </p>
                        </div>
                    </div>
                    <form action="{{ route('ringkasan.uploadBukti', $pesanan->kode_pesanan) }}"
                        class="flex flex-col w-full pr-4 max-md:max-w-full" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <h2 class="text-3xl max-md:max-w-full">Detail Pengiriman</h2>
                        <div class="gap-y-4 mt-6 flex flex-col">
                            <div class="section">
                                <p class="max-md:max-w-full">Alamat lengkap</p>
                                <p class="max-md:max-w-full">
                                    {{ $pesanan->alamat_lengkap }}
                                </p>
                            </div>
                            <div class="section">
                                <p class="max-md:max-w-full">Provinsi</p>
                                <p class="max-md:max-w-full">{{ $pesanan->provinsi }}</p>
                            </div>
                            <div class="section">
                                <p class="max-md:max-w-full">Kota/Kabupaten</p>
                                <p class="max-md:max-w-full">{{ $pesanan->kota }}</p>
                            </div>
                            <div class="section">
                                <p class="max-md:max-w-full">Kecamatan</p>
                                <p class="max-md:max-w-full">{{ $pesanan->kecamatan }}</p>
                            </div>
                            <div class="section">
                                <p class="max-md:max-w-full">Kode pos</p>
                                <p class="max-md:max-w-full">{{ $pesanan->kode_pos }}</p>
                            </div>
                            <div class="section">
                                <label for="paymentProof" class="max-md:max-w-full">Masukkan foto bukti
                                    pembayaran</label>
                                <input type="file" required id="bukti_pembayaran" name="bukti_pembayaran"
                                    class="block w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-slate-400 file:text-black hover:file:bg-slate-500" />
                            </div>
                        </div>

                        <div class="mt-4 flex flex-col gap-y-2">
                            <div class="flex justify-between">
                                <p class="text-xl max-md:mt-10 max-md:max-w-full">
                                    Total Dibayar
                                </p>
                                <p class="self-end text-xl text-cyan-700 max-md:mt-10">
                                    Rp {{ number_format($totalHarga, 0, ',', '.') }}
                                </p>
                            </div>
                            <button
                                class="justify-center self-end px-16 py-2 text-xl text-justify whitespace-nowrap bg-blue-400 rounded-xl shadow-[0px_4px_4px_rgba(0,0,0,0.25)] text-white font-bold"
                                type="submit" id="confirmButton">
                                Konfirmasi
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Payment Success Modal -->
    <div id="paymentSuccessModal"
        class="fixed inset-0 z-50 @if($pesanan->status != 'diterima') hidden @endif flex items-center justify-center overflow-auto backdrop-blur-sm bg-black bg-opacity-50">
        <div class="flex flex-col items-center px-8 py-4 max-w-full shadow-xl bg-white rounded-xl w-[544px] max-h-[752px]">
            <h1 class="z-10 text-3xl text-black">Transaksi Berhasil</h1>
            <img src="{{ asset('img/checklist.png') }}" alt="Transaction success illustration"
                class="max-w-full aspect-square w-[200px] mt-4" />
            <p class="text-3xl text-cyan-700">Rp {{ number_format($totalHarga, 0, ',', '.') }} </p>
            <a href="{{ route('ringkasan.exportResiPDF', $pesanan->kode_pesanan) }}" class="my-4 text-base text-cyan-700 underline">cetak resi</a>
            <div class="flex flex-col text-xl gap-y-4 w-full text-black max-md:mt-10">
                <div class="flex justify-between w-full items-center">
                    <p class="">Pesanan</p>
                    <p class="">
                        <ul>
                            @foreach ($pesanan->items as $p)
                                <li>{{ $p->produk->judul_buku }} - {{ $p->produk->harga }}</li>                                
                            @endforeach
                        </ul>
                    </p>
                </div>
                <div class="flex justify-between w-full items-center">
                    <p class="">Jumlah Produk</p>
                    <p class="">{{ $pesanan->items->sum('jumlah') }}</p>
                </div>
                <div class="flex justify-between w-full items-center">
                    <p class="">Total Biaya</p>
                    <p class="">Rp {{ number_format($totalHarga, 0, ',', '.') }}</p>
                </div>
                <div class="flex justify-between w-full items-center">
                    <p class="">No Pesanan</p>
                    <p class="">#{{ $pesanan->kode_pesanan }}</p>
                </div>
                <div class="flex justify-between w-full items-center">
                    <p class="">Tanggal Pemesanan</p>
                    <p class="">
                        {{ date('d-m-Y', strtotime($pesanan->created_at)) }}
                    </p>
                </div>
            </div>
            <button
                class="justify-center items-center px-16 py-2 mt-8 max-w-full text-xl font-bold text-center text-white whitespace-nowrap bg-blue-400 rounded-xl shadow-sm w-[227px] max-md:px-5 max-md:mt-10"
                type="button" id="closeSuccesButton">
                Tutup
            </button>
        </div>
    </div>
    @include('components.footer')


</body>

</html>


<script>
    const paymentModal = document.getElementById("paymentModal");
    const closeModal = document.getElementById("closeModal");
    const paymentButton = document.getElementById("paymentButton");
    const confirmButton = document.getElementById("confirmButton");
    const closeSuccesButton = document.getElementById("closeSuccesButton");
    const paymentSuccessModal = document.getElementById("paymentSuccessModal");
    // const copyLink = document.getElementById("copyLink");

    function showModal() {
        paymentModal.classList.remove("hidden");
        paymentModal.classList.add("flex");
        console.log("show modal");
    }

    function hideModal() {
        paymentModal.classList.add("hidden");
        paymentModal.classList.remove("flex");
        console.log("hide modal");
    }

    function showSuccessModal() {
        paymentSuccessModal.classList.remove("hidden");
        paymentSuccessModal.classList.add("flex");
        paymentModal.classList.add("hidden");
        paymentModal.classList.remove("flex");
        console.log("show success modal");
    }

    function hideSuccessModal() {
        paymentSuccessModal.classList.add("hidden");
        paymentSuccessModal.classList.remove("flex");
        console.log("hide success modal");
    }

    function copyLink() {
            var copyText = document.getElementById("orderLink");
            copyText.select();
            copyText.setSelectionRange(0, 99999); 
            document.execCommand("copy");
            alert("Link copied to clipboard: " + copyText.value);
        }

    // confirmButton.addEventListener("click", showSuccessModal);
    closeSuccesButton.addEventListener("click", hideSuccessModal);
    paymentButton.addEventListener("click", showModal);
    closeModal.addEventListener("click", hideModal);
    
</script>
