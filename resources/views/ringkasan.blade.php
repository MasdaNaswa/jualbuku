<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ringkasan</title>
    <link href="styles/output.css" rel="stylesheet" />
</head>

<body>
    <!-- Navbar -->
    <div>
        <header>
            @include('components.header')
        </header>
    </div>
    <div class="flex flex-col justify-center px-4 py-4 bg-white max-md:pl-5">
        <div class="flex flex-col pt-4 pb-11 mt-12 bg-white rounded-xl shadow-md max-md:mt-10 max-md:max-w-full">
            <div class="flex justify-start mx-4 items-center text-3xl text-cyan-700">
                <img src="images/ringkas.png" alt="Order summary icon" class="shrink-0 w-[50px]" />
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
                            <p class="mt-2 text-black">Dina</p>
                        </div>
                        <div class="flex flex-col self-start">
                            <p class="text-neutral-400">NAMA BELAKANG</p>
                            <p class="mt-2 text-black">Ramadani</p>
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <p class="text-neutral-400">EMAIL</p>
                        <p class="mt-2 text-black">dinaramadani@gamil.com</p>
                    </div>
                    <div class="flex flex-col">
                        <p class="text-neutral-400">NO TELEPON</p>
                        <p class="mt-2 text-black">081234567890</p>
                    </div>
                    <div class="flex flex-col">
                        <p class="text-neutral-400">ALAMAT PENGIRIMAN</p>
                        <address>
                            Batu Aji Lama<br />
                            Jln. Merpati<br />
                            Batu Aji
                        </address>
                    </div>
                </div>

                <div
                    class="flex flex-col gap-y-8 grow px-8 py-8 w-full text-xl bg-white rounded-xl shadow-md max-md:pr-5">
                    <h2 class="text-2xl font-bold">Metode Pembayaran</h2>
                    <div class="flex flex-col">
                        <p class="text-neutral-400">Your choose</p>
                        <p class="">QRIS</p>
                    </div>
                    <h2 class="text-2xl font-bold">Metode Pengiriman</h2>
                    <div class="flex flex-col">
                        <p class="text-neutral-400">Your choose</p>
                        <p class="">J&T (Jet & Tony)</p>
                    </div>
                    <div>
                        <h2 class="text-2xl font-bold">No Pemesanan</h2>
                        <p class="">31242455DXY</p>
                    </div>
                    <button class="text-left font-bold text-blue-400">Cetak Resi</button>
                </div>

                <div class="px-8 py-8 w-full h-min bg-white rounded-xl shadow-md max-md:px-5 max-h-min">
                    <div class="flex max-md:flex-col">
                        <div class="flex flex-col grow">
                            <h2 class="text-2xl font-bold text-black">
                                Pesanan Saya
                            </h2>
                            <div class="flex mt-4 justify-between items-start text-base font-thin text-neutral-600">
                                <div class="flex gap-4">
                                    <img src="images/cover.png" class="shrink-0 w-[95px]" />
                                    <p class="">Axie Oh</p>
                                </div>
                                <p class="text-base text-black">Rp. 70.000</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-end mx-4">
                <a class="justify-center ml-8 items-center py-3 mt-8 font-bold text-center text-white bg-blue-400 rounded-lg w-40"
                    href="dashboard">
                    Kembali Beranda
                </a>
            </div>
        </div>
    </div>
    <footer class="relative bg pt-8 pb-6 py-20">
        @include('components.footer')
    </footer>
</body>

</html>
