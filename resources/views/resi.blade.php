<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Resi</title>
        <link href="style/output.css" rel="stylesheet" />
    </head>
    <body class="p-8">
        <div class="mx-auto bg-white overflow-hidden">
            <div class="bg-white text-black px-4 py-2">
                <h1 class="text-2xl font-semibold">LandingLibrary</h1>
            </div>
            <hr class="border-none h-[1px] bg-black" />
            <div class="p-4">
                <div class="flex justify-between text-xl font-semibold">
                    <p class="">No. Resi</p>
                    <p>312424555DXY</p>
                </div>
                <div>
                    <p class="font-semibold">Dina Ramadani</p>
                    <div class="flex justify-between">
                        <p class="text-blue-400">dinaramadani@gmail.com</p>
                        <p class="">Status: Menunggu pembayaran customer</p>
                    </div>
                    <div class="flex justify-between">
                        <p class="font-semibold">0824 6686 4321</p>
                        <p>Tanggal transaksi: 20-03-2024</p>
                        
                    </div>
                </div>
                <div class="mt-4">
                    <table class="w-full border">
                        <thead>
                            <tr class="bg-gray-200">
                                <th class="py-2 px-4">No.</th>
                                <th class="py-2 px-4">Produk</th>
                                <th class="py-2 px-4">Jumlah Produk</th>
                                <th class="py-2 px-4">Harga</th>
                                <th class="py-2 px-4">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="py-2 px-4">1.</td>
                                <td class="py-2 px-4 flex">
                                    <img
                                        src="images/cover.png"
                                        alt="The Girl who Fell Beneath the Sea"
                                        class="w-24"
                                    />
                                    <div class="flex flex-col">
                                        <p class="text-blue-400">
                                            The Girl who Fell Beneath the Sea
                                        </p>
                                        <p>Axie Oh</p>
                                        <p>9789027657</p>
                                        <p>8789027657</p>
                                    </div>
                                </td>
                                <td class="py-2 px-4 text-center">1</td>
                                <td class="py-2 px-4 text-right">Rp. 90.000</td>
                                <td class="py-2 px-4 text-right">Rp. 90.000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="flex justify-end">
                    <div class="mt-4 flex flex-col max-w-[300px] w-full">
                        <div class="flex justify-between">
                            <p>Harga Total</p>
                            <p>Rp. 90.000</p>
                        </div>
                        <hr class="border-none h-[1px] bg-black" />
                        <div class="flex justify-between">
                            <p>Subtotal Pengiriman</p>
                            <p>Rp. 10.000</p>
                        </div>
                        <hr class="border-none h-[1px] bg-black" />
                        <div class="flex justify-between">
                            <p>Biaya Layanan</p>
                            <p>Rp. 0</p>
                        </div>
                        <hr class="border-none h-[1px] bg-black" />
                        <div class="flex justify-between">
                            <p class="font-semibold text-blue-400">Total Pembayaran</p>
                            <p class="font-semibold text-blue-400">Rp. 70.000</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"
            integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        ></script>
        <script>
            function saveAsPDF() {
                const element = document.querySelector("body");
                const opt = {
                    margin: 0.5,
                    filename: "resi.pdf",
                    image: { type: "jpeg", quality: 1 },
                    html2canvas: { scale: 2 },
                    jsPDF: { unit: "in", format: "letter", orientation: "portrait" },
                };

                const button = document.getElementById("buttonSave");
                button.style.display = "none";

                html2pdf()
                    .from(element)
                    .set(opt)
                    .save()
                    .then(() => {
                        button.style.display = "block";
                    });
            }
        </script>
        <div id="buttonSave" class="flex gap-2">
            <a
                href="dashboard"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-8"
                >Back</a
            >
            <button
                onclick="saveAsPDF()"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-8"
            >
                Save as PDF
            </button>
        </div>
    </body>
</html>
