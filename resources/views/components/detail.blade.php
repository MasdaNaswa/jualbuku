<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .plus-minus-input {
            align-items: center;

            .input-group-field {
                text-align: center;
                margin-left: 0.5rem;
                margin-right: 0.5rem;
                padding: 1rem;

                &::-webkit-inner-spin-button,
                ::-webkit-outer-spin-button {
                    appearance: none;
                }
            }

            .input-group-button {
                .circle {
                    border-radius: 50%;
                    padding: 0.25em 0.8em;
                }
            }
        }

    </style>
</head>

<body>
    <div class="bg-white py-10  mt-10 ml-10 mr-5 bg-white rounded-lg overflow-hidden">
        <div class="max-w-6xl mx-10 px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row -mx-4">
                <div class="md:flex-1 px-2">
                    <div class="h-[460px] rounded-lg bg-white dark:bg-gray-700 mb-4">
                        <img class="w-full h-full object-cover"
                            src="https://cdn.gramedia.com/uploads/items/9786024246945_Laut-Bercerita.png"
                            alt="Product Image">
                    </div>
                </div>
                <div class="md:flex-1 px-4">
                    <p class="text-gray-600 dark:text-gray-300 text-sm">
                        Leila Chudori
                    </p>
                    <h2 class="text-2xl font-bold text-blue-900 dark:text-white mb-2">Laut Bercerita</h2>
                    <div class="mb-6">
                        <h2 class="text-lg font-bold mb-2">Deskripsi Buku</h2>
                        <p class="text-gray-700">
                            Laut Bercerita, novel terbaru Leila S. Chudori, bertutur tentang kisah keluarga yang
                            kehilangan, sekumpulan sahabat yang merasakan kekosongan di dada, sekelompok orang yang
                            gemar menyiksa dan lancar berkhianat, sejumlah keluarga yang mencari kejelasan makam
                            anaknya, dan tentang cinta yang tak akan luntur.
                        </p>
                    </div>
                    <div class="container flex flex-col">
                        <h2 class="text-lg font-bold mb-2">Detail Buku</h2>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="text-left">
                                <p><span class="font-semibold">Jumlah Halaman</span>: 296</p>
                                <p><span class="font-semibold">Tanggal Terbit</span>: 16 Feb 2023</p>
                                <p><span class="font-semibold">ISBN</span>: 9786230046155</p>
                                <p><span class="font-semibold">Bahasa</span>: Indonesia</p>
                                <p><span class="font-semibold">Penerbit</span>: Elex Media Komputindo</p>
                            </div>
                            <div class="text-left">
                                <p><span class="font-semibold">Berat</span>: 0.2 kg</p>
                                <p><span class="font-semibold">Lebar</span>: 13.5 cm</p>
                                <p><span class="font-semibold">Panjang</span>: 20 cm</p>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="flex mx-2 mb-4">
                    <div class="md:flex-1">
                        <div class="p-4 bg-white rounded shadow-md">
                            <div class="flex flex-col items-start mb-4">
                                <div class="flex flex-col items-start mb-4">
                                    <span class="text-lg font-bold mb-2">Review buku</span>
                                    <div id="star-container" class="flex space-x-1">
                                        <span data-value="1"
                                            class="star text-gray-400 cursor-pointer text-3xl">&#9733;</span>
                                        <span data-value="2"
                                            class="star text-gray-400 cursor-pointer text-3xl">&#9733;</span>
                                        <span data-value="3"
                                            class="star text-gray-400 cursor-pointer text-3xl">&#9733;</span>
                                        <span data-value="4"
                                            class="star text-gray-400 cursor-pointer text-3xl">&#9733;</span>
                                        <span data-value="5"
                                            class="star text-gray-400 cursor-pointer text-3xl">&#9733;</span>
                                    </div>
                                </div>
                                <div class="flex flex-col items-start mb-4">
                                    <span class="text-lg font-bold mb-2">Harga buku</span>
                                    <p class="text-gray-700">Rp.90.000</p>
                                </div>
                                <div class="flex flex-col items-center mb-4">
                                    <span class="text-lg font-bold mb-2">Jumlah Stok</span>
                                    <div class="flex items-center space-x-4">
                                        <button id="decrease"
                                            class="px-3 py-1 text-lg font-bold text-gray-700 border border-gray-300 rounded">-</button>
                                        <span id="quantity" class="text-xm font-bold text-gray-700">1</span>
                                        <button id="increase"
                                            class="px-3 py-1 text-lg font-bold text-gray-700 border border-gray-300 rounded">+</button>
                                    </div>
                                </div>
                                <div class="w-full px-2 mt-2">
                                    <a href="keranjang">
                                        <button
                                            class="w-full bg-blue-900 text-white py-2 rounded-lg font-bold hover:bg-blue-700 text-xs">Tambah
                                            Keranjang</button>
                                    </a>
                                </div>
                                <div class="w-full px-2 mt-2">
                                    <a href="form-pembayaran">
                                        <button
                                            class="w-full bg-blue-900 text-white py-2 rounded-lg font-bold hover:bg-blue-700 text-xs">Beli
                                            Sekarang</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const decreaseButton = document.getElementById('decrease');
        const increaseButton = document.getElementById('increase');
        const quantityDisplay = document.getElementById('quantity');
        const stars = document.querySelectorAll('#star-container .star');

        let quantity = 1;
        let rating = 0;

        decreaseButton.addEventListener('click', function () {
            if (quantity > 1) {
                quantity--;
                quantityDisplay.textContent = quantity;
            }
        });

        increaseButton.addEventListener('click', function () {
            quantity++;
            quantityDisplay.textContent = quantity;
        });

        stars.forEach(star => {
            star.addEventListener('click', function () {
                rating = this.getAttribute('data-value');
                updateStars(rating);
            });
        });

        function updateStars(rating) {
            stars.forEach(star => {
                if (star.getAttribute('data-value') <= rating) {
                    star.classList.remove('text-gray-400');
                    star.classList.add('text-blue-900');
                } else {
                    star.classList.remove('text-blue-900');
                    star.classList.add('text-gray-400');
                }
            });
        }
});

</script>