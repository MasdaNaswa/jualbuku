<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Mazyar">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('style/style.css') }}" rel="stylesheet">
    <link href="{{ asset('style/style3.css') }}" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="{{ asset('style/style2.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <title>Landing Library</title>
</head>
<body class="font-montserrat">
    <div class="flex min-h-screen 2xl:max-w-7xl 2xl:mx-auto 2xl:border-x-2 2xl:border-indigo-50 ">
        
        @include('partials.sidebar')
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
                        <div class="font-bold text-2xl space-x-2 py-4 ">Dashboard</div>
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
