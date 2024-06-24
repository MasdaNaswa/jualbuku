<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Form Pembayaran</title>
        <link href="style/output.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <body>
        <!-- Navbar -->
        <nav>
        @include('components.header')
        </nav>
        <div class="flex flex-col justify-center px-10 py-5 bg-white max-md:px-5">
            <div class="mt-16 max-md:mt-10 max-md:mr-2.5 max-md:max-w-full">
                <div class="flex gap-5 max-md:flex-col max-md:gap-0">
                    <div class="flex flex-col w-[72%] max-md:ml-0 max-md:w-full">
                        <div class="flex flex-col grow max-md:mt-10 max-md:max-w-full">
                            <h2 class="text-2xl text-black max-md:max-w-full">
                                Pembayaran
                            </h2>
                            <div
                                class="flex flex-col items-start px-7 py-8 mt-4 text-lg text-black bg-white rounded-xl shadow-md max-md:px-5 max-md:max-w-full"
                            >
                                <div class="flex gap-3 text-xl">
                                    <img
                                        loading="lazy"
                                        src="images/mdi_address-marker.svg"
                                        alt="Alamat tujuan pengiriman icon"
                                        class="shrink-0 aspect-square w-[30px]"
                                    />
                                    <h3 class="flex-auto my-auto">
                                        Alamat tujuan pengiriman
                                    </h3>
                                </div>
                                <div class="flex flex-col pl-0 md:pl-10 w-full">
                                    <label for="alamatLengkap" class="mt-6 max-md:ml-2.5">
                                        Alamat lengkap
                                    </label>
                                    <input
                                        type="text"
                                        id="alamatLengkap"
                                        placeholder="Masukkan alamat lengkap"
                                        class="justify-center items-start px-3 py-3.5 mt-1.5 max-w-full bg-gray-200 rounded-xl backdrop-blur-[2px] text-neutral-400 w-full max-md:pr-5"
                                    />
                                    <label for="provinsi" class="mt-6 max-md:ml-2.5">
                                        Provinsi
                                    </label>
                                    <input
                                        type="text"
                                        id="provinsi"
                                        placeholder="Masukkan provinsi"
                                        class="justify-center items-start px-3 py-3.5 mt-2.5 max-w-full bg-gray-200 rounded-xl backdrop-blur-[2px] text-neutral-400 w-full max-md:pr-5"
                                    />
                                    <label for="kabupaten" class="mt-6 max-md:ml-2.5">
                                        Kota/Kabupaten
                                    </label>
                                    <input
                                        type="text"
                                        id="kabupaten"
                                        placeholder="Masukkan kabupaten"
                                        class="justify-center items-start px-3 py-3.5 mt-2 max-w-full bg-gray-200 rounded-xl backdrop-blur-[2px] text-neutral-400 w-full max-md:pr-5"
                                    />
                                    <label for="kecamatan" class="mt-5 max-md:ml-2.5">
                                        Kecamatan
                                    </label>
                                    <input
                                        type="text"
                                        id="kecamatan"
                                        placeholder="Masukkan kecamatan"
                                        class="justify-center items-start px-3 py-4 mt-3 max-w-full bg-gray-200 rounded-xl backdrop-blur-[2px] text-neutral-400 w-full max-md:pr-5"
                                    />
                                    <label for="kodePos" class="mt-5 max-md:ml-2.5">
                                        Kode pos
                                    </label>
                                    <input
                                        type="text"
                                        id="kodePos"
                                        placeholder="Masukkan kode pos"
                                        class="justify-center items-start px-2.5 py-3.5 mt-2 max-w-full bg-gray-200 rounded-xl backdrop-blur-[2px] text-neutral-400 w-full max-md:pr-5"
                                    />
                                </div>
                            </div>
                            <div
                                class="flex flex-col items-start px-7 pt-5 pb-8 mt-11 text-lg text-black bg-white rounded-xl shadow-md max-md:px-5 max-md:mt-10 max-md:max-w-full"
                            >
                                <div class="flex gap-3 text-xl">
                                    <img
                                        loading="lazy"
                                        src="images/mdi_address-marker.svg"
                                        class="shrink-0 aspect-square w-[30px]"
                                    />
                                    <h3 class="flex-auto">Nomor telephone pengguna</h3>
                                </div>
                                <div class="flex flex-col pl-0 md:pl-10 w-full">
                                    <label
                                        for="nomorTelephone"
                                        class="mt-7 max-md:ml-2.5"
                                    >
                                        Nomor telephone
                                    </label>
                                    <input
                                        type="tel"
                                        id="nomorTelephone"
                                        placeholder="Masukkan nomor telphone"
                                        class="justify-center items-start px-4 py-3.5 mt-1.5 max-w-full bg-gray-200 rounded-xl backdrop-blur-[2px] text-neutral-400 w-full max-md:pr-5"
                                    />
                                </div>
                            </div>
                            <section
                                class="flex flex-col px-11 py-9 mt-10 bg-white rounded-xl shadow-md max-md:px-5 max-md:mt-10 max-md:max-w-full"
                            >
                                <h2 class="text-xl text-black max-md:max-w-full">
                                    Pesanan
                                </h2>
                                <div
                                    class="flex gap-5 justify-between mt-5 w-full max-md:flex-wrap max-md:max-w-full"
                                >
                                    <div class="flex gap-5 justify-between">
                                        <img
                                            loading="lazy"
                                            src="images/cover.png"
                                            alt="Book cover"
                                            class="shrink-0 shadow-sm aspect-[0.75] w-[94px]"
                                        />
                                        <div class="flex flex-col self-start">
                                            <p
                                                class="text-base font-thin text-neutral-600"
                                            >
                                                Axie Oh
                                            </p>
                                            <h3 class="mt-2 text-base text-black">
                                                The Girl who Fell Beneath the Sea
                                            </h3>
                                        </div>
                                    </div>
                                    <p class="my-auto text-xl text-cyan-700">Rp 63.000</p>
                                </div>
                            </section>
                        </div>
                    </div>
                    <div class="flex flex-col ml-5 w-[28%] max-md:ml-0 max-md:w-full">
                        <div class="flex flex-col mt-10 max-md:mt-10">
                            <div
                                class="flex flex-col px-3.5 py-10 w-full text-xl text-black bg-white rounded-xl shadow-md"
                            >
                                <label
                                    for="metodePembayaran"
                                    class="self-start ml-5 max-md:ml-2.5"
                                >
                                    Metode Pembayaran
                                </label>
                                <select
                                    id="metodePembayaran"
                                    class="px-5 py-3.5 mt-3.5 text-lg bg-zinc-100 rounded-[50px] text-stone-500"
                                >
                                    <option value="" selected disabled hidden>
                                        Pilih metode pembayaran
                                    </option>
                                    <option value="DANA">DANA</option>
                                    <option value="COD">COD</option>
                                </select>
                                <label
                                    for="metodePengiriman"
                                    class="self-start mt-10 ml-5 max-md:ml-2.5"
                                >
                                    Metode Pengiriman
                                </label>
                                <select
                                    id="metodePengiriman"
                                    class="px-5 py-3.5 mt-3 text-lg backdrop-blur-[2px] bg-zinc-100 rounded-[50px] text-stone-500 max-md:pl-5"
                                >
                                    <option value="" selected disabled hidden>
                                        Pilih metode pengiriman
                                    </option>
                                    <option value="JNE">JNE</option>
                                    <option value="J&T">J&T</option>
                                    <option value="POS">POS</option>
                                </select>
                            </div>
                            <div
                                class="flex flex-col px-4 pt-6 pb-2.5 mt-44 w-full bg-white rounded-xl shadow-md max-md:mt-10"
                            >
                                <div class="flex flex-col text-lg text-neutral-500 gap-8">
                                    <h3 class="text-xl text-black">Rincian Belanja</h3>
                                    <div class="text-sm">
                                        <div
                                            class="flex justify-between w-full items-center"
                                        >
                                            <p class="">Total harga</p>
                                            <p class="text-black">Rp 90.000</p>
                                        </div>
                                        <div
                                            class="flex justify-between w-full items-center"
                                        >
                                            <p class="">Ongkos kirim</p>
                                            <p class="text-black">Rp 10.000</p>
                                        </div>
                                        <div
                                            class="flex justify-between w-full items-center"
                                        >
                                            <p class="">Total biaya</p>
                                            <p class="text-black">Rp 100.000</p>
                                        </div>
                                    </div>
                                    <div class="flex justify-between w-full items-center">
                                        <h3 class="text-xl text-black max-md:mt-10">
                                            Total Dibayar
                                        </h3>
                                        <p class="text-blue-400">Rp 100.000</p>
                                    </div>
                                </div>
                                <button
                                    class="justify-center items-center px-16 py-3.5 mt-12 text-xl font-bold text-center text-white whitespace-nowrap bg-blue-400 rounded-xl shadow-md max-md:px-5 max-md:mt-10"
                                    type="button"
                                    id="paymentButton"
                                >
                                    Bayar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="relative bg-white pt-8 pb-6 py-20">
            <div class="container mx-auto px-4">
                <div class="flex flex-wrap text-left lg:text-left">
                    <div class="w-full lg:w-6/12 px-4">
                        <h3 class="font-bold text-2xl text-blueGray-500">
                            Landing Library
                        </h3>
                        <h5
                            class="text-xs mt-0 mb-2 text-[#374c71]"
                            style="text-align: justify"
                        >
                            Landing library toko buku online menyediakan beragam koleksi
                            yang luas dari segala jenis buku, mulai dari fiksi hingga
                            non-fiksi, termasuk novel, ensiklopedia, buku pelajaran, dan
                            banyak lagi, memenuhi kebutuhan pembaca dengan berbagai minat
                            dan preferensi.
                        </h5>
                    </div>
                    <div class="w-full lg:w-6/12 px-4">
                        <div class="flex flex-wrap items-top mb-6">
                            <div class="w-full lg:w-4/12 px-4 ml-auto">
                                <span
                                    class="block uppercase text-blueGray-500 text-sm font-semibold mb-2"
                                    >Kategori Produk</span
                                >
                                <ul class="list-unstyled">
                                    <li>
                                        <a
                                            class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm"
                                            href="#"
                                            >About Us</a
                                        >
                                    </li>
                                    <li>
                                        <a
                                            class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm"
                                            href="#"
                                            >Blog</a
                                        >
                                    </li>
                                    <li>
                                        <a
                                            class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm"
                                            href="#"
                                            >Github</a
                                        >
                                    </li>
                                    <li>
                                        <a
                                            class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm"
                                            href="#"
                                            >Free Products</a
                                        >
                                    </li>
                                </ul>
                            </div>
                            <div class="w-full lg:w-4/12 px-4">
                                <span
                                    class="block uppercase text-blueGray-500 text-sm font-semibold mb-2"
                                    >Other Resources</span
                                >
                                <ul class="list-unstyled">
                                    <li>
                                        <a
                                            class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm"
                                            href="https://github.com/creativetimofficial/notus-js/blob/main/LICENSE.md?ref=njs-profile"
                                            >MIT License</a
                                        >
                                    </li>
                                    <li>
                                        <a
                                            class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm"
                                            href="https://creative-tim.com/terms?ref=njs-profile"
                                            >Terms &amp; Conditions</a
                                        >
                                    </li>
                                    <li>
                                        <a
                                            class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm"
                                            href="https://creative-tim.com/privacy?ref=njs-profile"
                                            >Privacy Policy</a
                                        >
                                    </li>
                                    <li>
                                        <a
                                            class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm"
                                            href="https://creative-tim.com/contact-us?ref=njs-profile"
                                            >Contact Us</a
                                        >
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="my-6 border-blueGray-300" />
                <div
                    class="flex flex-wrap items-center md:justify-between justify-center"
                >
                    <div class="w-full md:w-4/12 px-4 mx-auto text-center">
                        <div class="text-sm text-blueGray-500 font-semibold py-1">
                            Copyright © <span id="get-current-year">2024</span
                            ><a
                                href="#"
                                class="text-blueGray-500 hover:text-gray-800"
                                target="_blank"
                                >Landing Library</a
                            >.
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Payment Modal -->
        <div
            id="paymentModal"
            class="fixed inset-0 z-50 hidden items-center justify-center overflow-auto backdrop-blur-sm bg-black bg-opacity-50"
        >
            <div
                class="bg-white max-md:self-start rounded-xl shadow-sm max-md:max-h-max max-w-[1252px] max-h-[650px] relative"
            >
                <button
                    id="closeModal"
                    class="absolute top-2 right-2 text-gray-500 hover:text-gray-700"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-6 w-6"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M6 18L18 6M6 6l12 12"
                        />
                    </svg>
                </button>
                <div
                    class="flex flex-col self-center py-16 pr-3.5 pl-16 max-md:pl-5 max-md:max-w-full"
                >
                    <div
                        class="flex max-md:justify-center max-md:w-full justify-start gap-10 text-black max-md:flex-wrap max-md:max-w-full"
                    >
                        <div
                            class="flex flex-col gap-y-4 items-center max-md:max-w-full max-w-[30%]"
                        >
                            <h2 class="text-3xl">Lakukan Pembayaran</h2>
                            <img
                                src="images/barcode.png"
                                alt="QR code for payment"
                                class="max-w-full"
                            />
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
                        <div class="flex flex-col w-full pr-4 max-md:max-w-full">
                            <h2 class="text-3xl max-md:max-w-full">Detail Pengiriman</h2>
                            <div class="gap-y-4 mt-6 flex flex-col">
                                <div class="section">
                                    <p class="max-md:max-w-full">Alamat lengkap</p>
                                    <p class="max-md:max-w-full">
                                        PERUMAHAN HUTATAP BLOK F NO. 24 RT 2 RW 1 Batu Aji
                                    </p>
                                </div>
                                <div class="section">
                                    <p class="max-md:max-w-full">Provinsi</p>
                                    <p class="max-md:max-w-full">Kepulauan Riau</p>
                                </div>
                                <div class="section">
                                    <p class="max-md:max-w-full">Kota/Kabupaten</p>
                                    <p class="max-md:max-w-full">Kota Batam</p>
                                </div>
                                <div class="section">
                                    <p class="max-md:max-w-full">Kecamatan</p>
                                    <p class="max-md:max-w-full">Sagulung</p>
                                </div>
                                <div class="section">
                                    <p class="max-md:max-w-full">Kode pos</p>
                                    <p class="max-md:max-w-full">29439</p>
                                </div>
                                <div class="section">
                                    <label for="paymentProof" class="max-md:max-w-full"
                                        >Masukkan foto bukti pembayaran</label
                                    >
                                    <input
                                        type="file"
                                        class="block w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-slate-400 file:text-black hover:file:bg-slate-500"
                                    />
                                </div>
                            </div>

                            <div class="mt-4 flex flex-col gap-y-2">
                                <div class="flex justify-between">
                                    <p class="text-xl max-md:mt-10 max-md:max-w-full">
                                        Total Dibayar
                                    </p>
                                    <p
                                        class="self-end text-xl text-cyan-700 max-md:mt-10"
                                    >
                                        Rp 100.000
                                    </p>
                                </div>
                                <button
                                    class="justify-center self-end px-16 py-2 text-xl text-justify whitespace-nowrap bg-blue-400 rounded-xl shadow-[0px_4px_4px_rgba(0,0,0,0.25)] text-white font-bold"
                                    type="button"
                                    id="confirmButton"
                                >
                                    Konfirmasi
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Payment Success Modal -->
        <div
            id="paymentSuccessModal"
            class="fixed inset-0 z-50 flex items-center justify-center overflow-auto backdrop-blur-sm bg-black bg-opacity-50"
        >
            <div
                class="flex flex-col items-center px-8 py-4 max-w-full shadow-xl bg-white rounded-xl w-[544px] max-h-[752px]"
            >
                <h1 class="z-10 text-3xl text-black">Transaksi Berhasil</h1>
                <img
                    src="images/checklist.png"
                    alt="Transaction success illustration"
                    class="max-w-full aspect-square w-[200px] mt-4"
                />
                <p class="text-3xl text-cyan-700">Rp 70.000</p>
                <a href="cetak-resi" class="my-4 text-base text-cyan-700 underline">cetak resi</a>
                <div class="flex flex-col text-xl gap-y-4 w-full text-black max-md:mt-10">
                    <div class="flex justify-between w-full items-center">
                        <p class="">Pesanan</p>
                        <p class="">The Girl who Fell Beneath the Sea</p>
                    </div>
                    <div class="flex justify-between w-full items-center">
                        <p class="">Jumlah Produk</p>
                        <p class="">1</p>
                    </div>
                    <div class="flex justify-between w-full items-center">
                        <p class="">Total Biaya</p>
                        <p class="">Rp 70.000</p>
                    </div>
                    <div class="flex justify-between w-full items-center">
                        <p class="">No Pesanan</p>
                        <p class="">31242455DXY</p>
                    </div>
                    <div class="flex justify-between w-full items-center">
                        <p class="">Tanggal Pemesanan</p>
                        <p class="">12 Maret 2024</p>
                    </div>
                </div>
                <button
                    class="justify-center items-center px-16 py-2 mt-8 max-w-full text-xl font-bold text-center text-white whitespace-nowrap bg-blue-400 rounded-xl shadow-sm w-[227px] max-md:px-5 max-md:mt-10"
                    type="button"
                    id="closeSuccesButton"
                >
                    Tutup
                </button>
            </div>
        </div>
        <script>
            const paymentModal = document.getElementById("paymentModal");
            const closeModal = document.getElementById("closeModal");
            const paymentButton = document.getElementById("paymentButton");
            const confirmButton = document.getElementById("confirmButton");
            const closeSuccesButton = document.getElementById("closeSuccesButton");
            const paymentSuccessModal = document.getElementById("paymentSuccessModal");

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

            confirmButton.addEventListener("click", showSuccessModal);
            closeSuccesButton.addEventListener("click", hideSuccessModal);
            paymentButton.addEventListener("click", showModal);
            closeModal.addEventListener("click", hideModal);
        </script>
    </body>
</html>