<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Mazyar">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="{{ asset('style/style3.css') }}" rel="stylesheet">
    <link href="{{ asset('style/style.css') }}" rel="stylesheet">
    <link href="{{ asset('style/style2.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <title>Landing Library | @yield('title')</title>
</head>

<body class="font-montserrat ">
    <div class="flex min-h-screen 2xl:max-w-7xl 2xl:mx-auto 2xl:border-x-2 2xl:border-indigo-50 ">
        @include('partials.sidebar')

        @yield('content')
    </div>
    <!-- End block -->
    <script src="https://unpkg.com/@themesberg/flowbite/dist/flowbite.bundle.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>
    
    <!-- Tambahkan ini di akhir body sebelum </body> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="https://unpkg.com/@themesberg/flowbite/dist/flowbite.bundle.js"></script>
    <script src="https://kit.fontawesome.com/9dc5416d74.js" crossorigin="anonymous"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('[id^="openUpdateFormButton"]').forEach(button => {
                button.addEventListener('click', function() {
                    const kodeBuku = this.id.replace('openUpdateFormButton', '');
                    document.getElementById('drawer-update-product' + kodeBuku).classList.remove('hidden');
                });
            });

            document.querySelectorAll('[id^="closeDrawerUpdate"]').forEach(button => {
                button.addEventListener('click', function() {
                    const kodeBuku = this.id.replace('closeDrawerUpdate', '');
                    document.getElementById('drawer-update-product' + kodeBuku).classList.add('hidden');
                });
            });
        });
    </script>
    <script>
        document.getElementById('openModal').addEventListener('click', function() {
            document.getElementById('modal').classList.remove('hidden');
        });
        document.getElementById('closeModal').addEventListener('click', function() {
            document.getElementById('modal').classList.add('hidden');
        });
    </script>
</body>

</html>
