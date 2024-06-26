<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.2/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/boxicons"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
</head>

<body class="bg-white">

    <!-- Navbar -->
    <nav class="bg-blue-900 py-4">
        <div class="container mx-auto flex justify-between items-center px-20">
            <!-- Logo -->
            <div>
                <a href="#" class="text-white text-2xl font-bold">Landing Library</a>
            </div>
            <!-- Categories -->
            <div class="hidden md:flex space-x-4">
                <div class="relative group ml-6">
                    <button
                        class="text-white text-xm font-bold hover:bg-blue-900 px-3 py-2 rounded-md inline-flex items-center">
                        <span>Kategori Buku</span>
                        <svg class="h-3 w-3 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div
                        class="absolute z-10 hidden group-hover:flex flex-col bg-white rounded-md shadow-lg py-1 px-6 w-96">
                        <div class="flex flex-col">
                            <a href="#" class="block px-2 py-2 text-sm text-blue-900 font-bold">Buku Sains</a>
                            <a href="#" class="block px-2 py-2 text-sm text-blue-900 font-bold">Buku Bisnis</a>
                            <a href="#" class="block px-2 py-2 text-sm text-blue-900 font-bold">Buku Komik</a>
                            <a href="#" class="block px-2 py-2 text-sm text-blue-900 font-bold">Buku Fiksi</a>
                            <a href="#" class="block px-2 py-2 text-sm text-blue-900 font-bold">Buku Nonfiksi</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Search Bar -->
            <div class="flex-grow mx-4">
                <!-- Adjusted margin -->
                <form action="#" method="GET" class="flex">
                    <input type="text"
                        class="w-full md:w-100 h-10 px-4 rounded-full focus:outline-none focus:ring focus:border-blue-900"
                        placeholder="Cari disini"><!-- Adjusted width and added rounded-l-full -->
                    <button type="submit"
                        class="bg-blue-900 hover:bg-blue-900 text-white font-bold py-2 px-4 rounded-full">
                        <!-- Adjusted button styling -->
                        <i class='bx bx-search-alt-2'></i>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 15l-5-5m0 0l-5 5m5-5V3"></path>
                        </svg>
                    </button>
                </form>
            </div>
            <!-- Login Icon -->
            <div class="ml-4 flex items-center">
                <a href="keranjang" class="text-white hover:text-white">
                    <i class='bx bxs-cart text-3xl'></i>
                </a>
            </div>
            <div class="ml-4 flex items-center">
                <a href="akun" class="text-white hover:white">
                    <i class='bx bxs-user-circle text-3xl'></i>
                </a>
            </div>
        </div>
    </nav>
    <div class="absolute" style="left: 30px; top: 100px; width: 352px;">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg ml-10 mt-5">
            <div class="mt-5 ml-2 mr-2 flex flex-col  mb-6">
                <div class="mt-2 ml-2 mr-2 flex flex-col items-center justify-center">
                    <img class="w-30 h-40 rounded-full"
                        src="https://www.pngall.com/wp-content/uploads/5/User-Profile-PNG-Download-Image.png"
                        alt="Rounded avatar">
                    <p class="mt-4 text-2xl font-bold text-blue-900 dark:text-white">{{Session::get('username')}}</p>
                    <hr class="my-4 w-full border-t-2 border-solid border-gray-300">
                </div>
                <a href="akun">
                    <div class="mt-5 ml-5 flex items-center">
                        <box-icon type='solid' name='user' color='#5F93CB'></box-icon>
                        <p class="ml-2 text-l font-bold text-blue-900 dark:text-white">Akun Saya</p>
                    </div>
                </a>
                <a href="ringkasan">
                    <div class="mt-5 ml-5 mt-2 flex items-center">
                        <box-icon name='clipboard' color='#5F93CB'></box-icon>
                        <p class="ml-2 text-l font-bold text-blue-900 dark:text-white">Ringkasan Pesanan</p>
                    </div>
                </a>
                <a href="{{ route('dashboard') }}" id="logout-link">
                    <div class="mt-5 ml-5 mt-2 flex items-center">
                        <box-icon name='log-out-circle' color='#5F93CB' id="logout-icon"></box-icon>
                        <p class="ml-2 text-l font-bold text-blue-900 dark:text-white" id="logout-text">Keluar</p>
                    </div>
                </a>

                <!-- The Modal -->
                <div id="logoutModal"
                    style="display:none; position:fixed; z-index:1; left:0; top:0; width:100%; height:100%; overflow:auto; background-color:rgba(0,0,0,0.4);">
                    <!-- Removed padding-top:60px; -->
                    <div id="modalContent"
                        style="background-color:#fefefe; margin:0 auto; padding:20px; border:1px solid #888; width:80%; max-width:500px; text-align:center; border-radius:10px; position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%);">
                        <!-- Added position:absolute; left:50%; top:50%; transform: translate(-50%, -50%); -->
                        <span id="closeModal"
                            style="color:#aaa; float:right; font-size:28px; font-weight:bold; cursor:pointer;">&times;</span>
                        <box-icon name='error-circle' color='#f44336' size='lg' style="display:block; margin:0 auto;">
                        </box-icon>
                        <p>Anda yakin ingin keluar?</p>
                        <button id="confirm-logout"
                            style="background-color: #4CAF50; color: white; padding: 10px 20px; margin: 5px; border: none; cursor: pointer; border-radius:5px;">Ya</button>
                        <button id="cancel-logout"
                            style="background-color: #f44336; color: white; padding: 10px 20px; margin: 5px; border: none; cursor: pointer; border-radius:5px;">Tidak</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="absolute" style="left: 450px; top: 120px; width: 900px; height: 430px;">
        <div class="relative shadow-md sm:rounded-lg h-full w-full overflow-hidden">
            <div class="mt-5 ml-7 flex items-center">
                <box-icon type="solid" name="user" color="#5F93CB" size="md"></box-icon>
                <p class="ml-2 text-2xl font-bold text-blue-900 dark:text-white">Data Diri</p>
            </div>
            <div class="mt-8 ml-7">
                <p class="text-l font-bold text-gray-900 dark:text-white mt-2">Nama Lengkap</p>
                <div class="relative shadow-md sm:rounded-lg mt-1"
                    style="height: 40px; width: 800px; overflow: hidden;">
                    <div class="ml-2 mt-2 flex justify-between">
                        <p class="text-l text-gray-900 dark:text-white">{{Session::get('username')}}</p>
                    </div>
                </div>
            </div>
            <div class="mt-5 ml-7">
                <p class="text-l font-bold text-gray-900 dark:text-white mt-2">Email</p>
                <div class="relative shadow-md sm:rounded-lg mt-1"
                    style="height: 40px; width: 800px; overflow: hidden;">
                    <div class="ml-2 mt-2 flex justify-between">
                        <p class="text-l text-gray-900 dark:text-white">{{Session::get('email')}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        var modal = document.getElementById("logoutModal");

        // Get the link that opens the modal
        var link = document.getElementById("logout-link");

        // Get the <span> element that closes the modal
        var span = document.getElementById("closeModal");

        // Get the confirm and cancel buttons
        var confirmButton = document.getElementById("confirm-logout");
        var cancelButton = document.getElementById("cancel-logout");

        // When the user clicks on the link, open the modal
        link.onclick = function (event) {
            event.preventDefault();
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function () {
            modal.style.display = "none";
        }

        // When the user clicks on "No", close the modal
        cancelButton.onclick = function () {
            modal.style.display = "none";
        }

        // When the user clicks on "Yes", redirect to the dashboard
        confirmButton.onclick = function () {
            window.location.href = "";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

    </script>
</body>

</html>