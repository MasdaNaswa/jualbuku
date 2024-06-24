<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Mazyar">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style/style.css" rel="stylesheet">
    <link href="style/style3.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="style/style2.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <title>Landing Library</title>
</head>
<body class="font-montserrat">
    <div class="flex min-h-screen 2xl:max-w-7xl 2xl:mx-auto 2xl:border-x-2 2xl:border-indigo-50 ">
        <!-- Sidebar -->
        <aside class="bg-blue-600/70  w-1/5 py-5 pl-10  min-w-min   border-r border-indigo-900/20 hidden md:block ">
            <div class="flex items-center">
                <i class='fas fa-user-circle' style='font-size:48px; margin-right: 13px; '></i>
                <div class="font-medium text-2xl  py-10 pl-7 ">Admin</div>
            </div>
            <!-- Menu -->
            <div class="mt-10 flex flex-col space-y-7 text-white font-medium">
                <a class="flex items-center space-x-2 py-1 group hover:border-r-2 hover:border-r-indigo-700 font-bold"
                    href="dashboard-admin-produk">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="white"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                            d="M10 3H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zM9 9H5V5h4v4zm5 2h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1h-6a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1zm1-6h4v4h-4V5zM3 20a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v6zm2-5h4v4H5v-4zm8 5a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-6a1 1 0 0 0-1-1h-6a1 1 0 0 0-1 1v6zm2-5h4v4h-4v-4z">
                        </path>
                    </svg>
                    <span class="ml-2">Produk</span>
                </a>
                <a class="flex items-center space-x-2 py-1 font-bold border-r-2 border-r-indigo-700 pr-20 text-white"
                    href="dashboard-admin-pesanan">
                    <svg class="h-6 w-6 group-hover:stroke-indigo-700" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 48 48" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="4"
                            d="M 13.5 4 C 10.467 4 8 6.467 8 9.5 L 8 36 L 8 37.5 L 8 38.5 C 8 41.519774 10.480226 44 13.5 44 L 39.5 44 A 1.50015 1.50015 0 1 0 39.5 41 L 13.5 41 C 12.273237 41 11.277238 40.152347 11.050781 39 L 39.5 39 C 40.329 39 41 38.329 41 37.5 L 41 9.5 C 41 6.467 38.533 4 35.5 4 L 35 4 L 35 20.5 C 35 21.029 34.720625 21.519062 34.265625 21.789062 C 34.029625 21.929063 33.765 22 33.5 22 C 33.253 22 33.00525 21.938406 32.78125 21.816406 L 28 19.207031 L 23.21875 21.816406 C 22.75475 22.070406 22.191375 22.060063 21.734375 21.789062 C 21.279375 21.520063 21 21.029 21 20.5 L 21 4 L 13.5 4 z M 24 4 L 24 17.972656 L 27.28125 16.183594 C 27.50425 16.061594 27.753 16 28 16 C 28.247 16 28.49575 16.061594 28.71875 16.183594 L 32 17.972656 L 32 4 L 24 4 z">
                        </path>
                    </svg>
                    <span>Pesanan</span>
                </a>
                </a>
                <a class=" flex items-center space-x-2 py-1  font-bold group hover:border-r-2 hover:border-r-indigo-700 pr-20 text-white"
                    href="dashboard-admin-rekapan">
                    <svg class="h-5 w-5 stroke-indigo-700" xmlns="http://www.w3.org/2000/svg" fill="white"
                        viewBox="0 0 384 512" stroke="currentColor">
                        <path stroke-linejoin="round" stroke-width="2" path
                            d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128z">
                    </svg>
                    <span>Rekapan</span>
                </a>
                <a class="flex items-center space-x-2 py-1 group hover:border-r-2 hover:border-r-indigo-700 font-bold"
                    href="dashboard-admin-pesan">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="white"
                        stroke="currentColor">
                        <path d="M16 13v-2H7V8l-5 4 5 4v-3z"></path>
                        <path
                            d="M20 3h-9c-1.103 0-2 .897-2 2v4h2V5h9v14h-9v-4H9v4c0 1.103.897 2 2 2h9c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2z">
                        </path>
                    </svg>
                    <span>Keluar</span>
                </a>
            </div><!-- /Menu -->
        </aside><!-- /Sidebar -->
        <div class="main">
            <div class="">
                <div class=">
                    <ion-icon name=""></ion-icon>
                </div>
            <!-- ======================= Cards ================== -->
            <a class=" flex items-roght space-x-2 py-4 group hover:border-r-2 hover:border-r-indigo-700 text-black
                    hover:font-bold " href=" dashboard-admin">
                    <svg class="h6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                            d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z">
                        </path>
                        <a />
                        <a class=" flex items-center space-x-2 py-1  group hover:border-r-2 hover:border-r-indigo-700 hover:font-bold "
                            href="">
                            <div class="cardBox">
                                <div class="card">
                                    <div>
                                        <div class="numbers" href="dashboard-admin-produk">Produk</div>
                                        <div class="cardName"></div>
                                    </div>
                                    <div class="iconBx">
                                        <i class='bx bx-grid-alt'></i>
                                    </div>
                                </div>
                                <div class="card">
                                    <div>
                                        <div class="numbers" href="dashboard-admin-pesanan">Pesanan</div>
                                        <div class="cardName"></div>
                                    </div>

                                    <div class="iconBx">
                                        <i class='bx bxs-book-bookmark'></i>
                                    </div>
                                </div>
                                <div class="card">
                                    <div>
                                        <div class="numbers" href="dashboard-admin-rekapan">Rekapan</div>
                                        <div class="cardName"></div>
                                    </div>
                                    <div class="iconBx">
                                        <i class='bx bxs-file-blank'></i>
                                    </div>
                                </div>
                            </div>
                </div>

                <script src="main.js"></script>
                <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
                <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
                <script src="https://kit.fontawesome.com/9dc5416d74.js" crossorigin="anonymous"></script>
                <script src="bootstrap/js/bootstrap.min.js"></script>
                <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</body>
</html>
