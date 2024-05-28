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
                        <span>Kategori </span>
                        <svg class="h-3 w-3 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div
                        class="absolute z-10 hidden group-hover:flex flex-col bg-white rounded-md shadow-lg py-1 px-6 w-96">
                        <!-- Adjusted width to w-full and added flex-col class -->
                        <div
                            class="absolute z-10 hidden group-hover:flex flex-col bg-white rounded-md shadow-lg py-1 px-6 w-full">
                            <div class="grid grid-cols-4 gap-2">
                                <a href="#" class="block px-2 py-2 text-sm text-blue-900 font-bold">Novel</a>
                                <a href="#" class="block px-2 py-2 text-sm text-blue-900 font-bold">Komik</a>
                                <a href="#" class="block px-2 py-2 text-sm text-blue-900 font-bold">Sains</a>
                                <a href="#" class="block px-2 py-2 text-sm text-blue-900 font-bold">Islam</a>
                                <a href="#" class="block px-2 py-2 text-sm text-blue-900 font-bold">Pelajaran</a>
                                <a href="#" class="block px-2 py-2 text-sm text-blue-900 font-bold">Anak</a>
                                <a href="#" class="block px-2 py-2 text-sm text-blue-900 font-bold">Cerpen</a>
                                <a href="#" class="block px-2 py-2 text-sm text-blue-900 font-bold">Majalah</a>
                                <a href="#" class="block px-2 py-2 text-sm text-blue-900 font-bold">Psikologi</a>
                                <a href="#" class="block px-2 py-2 text-sm text-blue-900 font-bold">Fantasi</a>
                                <a href="#" class="block px-2 py-2 text-sm text-blue-900 font-bold">Non Fiksi</a>
                                <a href="#" class="block px-2 py-2 text-sm text-blue-900 font-bold">Dogeng</a>
                                <a href="#" class="block px-2 py-2 text-sm text-blue-900 font-bold">Biografi</a>
                                <a href="#" class="block px-2 py-2 text-sm text-blue-900 font-bold">Manga</a>
                                <a href="#" class="block px-2 py-2 text-sm text-blue-900 font-bold">Kamus</a>
                            </div>
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
                <a href="#" class="text-white hover:text-white">
                    <i class='bx bxs-cart text-3xl'></i>
                </a>
            </div>

            <div class="ml-4 flex items-center">
                <a href="#" class="text-white hover:white">
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
                        src="https://i.pinimg.com/736x/69/ee/c5/69eec5472972a7f4676e17556cf1a425.jpg"
                        alt="Rounded avatar">
                    <p class="mt-4 text-2xl font-bold text-blue-900 dark:text-white">Dina Ramadhani</p>
                    <hr class="my-4 w-full border-t-2 border-solid border-gray-300">
                </div>
                <div class="mt-5 ml-5 flex items-center">
                    <box-icon type='solid' name='user' color='#5F93CB'></box-icon>
                    <p class="ml-2 text-l font-bold text-blue-900 dark:text-white">Akun Saya</p>
                </div>
                <div class="mt-5 ml-5 mt-2 flex items-center">
                    <box-icon name='clipboard' color='#5F93CB'></box-icon>
                    <p class="ml-2 text-l font-bold text-blue-900 dark:text-white">Ringkasan Pesanan</p>
                </div>
                <div class="mt-5 ml-5 mt-2 flex items-center">
                    <box-icon name='log-in-circle' color='#5F93CB'></box-icon>
                    <p class="ml-2 text-l font-bold text-blue-900 dark:text-white">Keluar</p>
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
                        <p class="text-l text-gray-900 dark:text-white">Dina</p>
                        <a href="your-link-here" class="text-l text-gray-900 dark:text-white mr-5">Ubah</a>
                    </div>
                </div>
            </div>
            <div class="mt-5 ml-7">
                <p class="text-l font-bold text-gray-900 dark:text-white mt-2">Email</p>
                <div class="relative shadow-md sm:rounded-lg mt-1"
                    style="height: 40px; width: 800px; overflow: hidden;">
                    <div class="ml-2 mt-2 flex justify-between">
                        <p class="text-l text-gray-900 dark:text-white">dinaramadani@gmail.com</p>
                        <a href="your-link-here" class="text-l text-gray-900 dark:text-white mr-5">Ubah</a>
                    </div>
                </div>
            </div>
            <div class="mt-5 ml-7">
                <p class="text-l font-bold text-gray-900 dark:text-white mt-2">No Telp</p>
                <div class="relative shadow-md sm:rounded-lg mt-1"
                    style="height: 40px; width: 800px; overflow: hidden;">
                    <div class="ml-2 mt-2 flex justify-between">
                        <p class="text-l text-gray-900 dark:text-white">(+62) 224 6686 4321</p>
                        <a href="your-link-here" class="text-l text-gray-900 dark:text-white mr-5">Ubah</a>
                    </div>
                </div>
            </div>
            <div class="mt-5 flex items-center justify-center">
                <button type="button"
                    class="px-20 py-3 text-sm font-bold text-white bg-blue-500 hover:bg-blue-500 focus:ring-4 focus:outline-none focus:ring-blue-500 rounded-lg text-center dark:bg-blue-300 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Simpan Data
                </button>
            </div>

        </div>
    </div>




    </div>
