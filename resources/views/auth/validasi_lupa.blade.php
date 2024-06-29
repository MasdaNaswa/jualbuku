<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>Ubah Kata Sandi</title>
</head>

<body>
    <div class="absolute top-0 left-0 h-full w-full overflow-hidden">
        <div class="bg-cover bg-center h-full w-full"
            style="background-image: url('https://img.freepik.com/premium-photo/stationary-arrangement-blue-background-with-phone-copy-space_23-2148404518.jpg');">

            <div
                class="relative min-h-screen sm:flex sm:flex-row justify-left bg-transparent rounded-3xl shadow-xl shadow lg">
                <div class="flex-col flex self-center lg:px-14 sm:max-w-4xl xl:max-w-md z-10">
                </div>
                <div class="flex justify-center self-center z-10">
                    <div class="p-12 bg-white mx-auto rounded-3xl w-96 shadow-lg">
                        <div class="mb-7 text-center">
                            <h3 class="font-bold text-2xl text-blue-400">Ubah Kata Sandi</h3>
                        </div>
                        <div class="space-y-6">
                            <form action="{{ route('validasi_lupa_act') }}" method="POST">
                                @csrf
                                <input type="hidden" name="token" value="{{ $token }}">
                                <div>
                                    <input type="password" name="password" id="password"
                                        class="w-full text-sm px-5 py-4 bg-gray-200 focus:bg-gray-100 border border-gray-200 rounded-lg focus:outline-none focus:border-blue-400"
                                        placeholder="Masukkan Password Baru Kamu" required>
                                </div>
                                @error('password')
                                    <small>{{ $message }}</small>
                                @enderror
                                <div class="mt-5">
                                    <input type="password" name="password_confirmation" id="password_confirmation"
                                        class="w-full text-sm px-5 py-4 bg-gray-200 focus:bg-gray-100 border border-gray-200 rounded-lg focus:outline-none focus:border-blue-400"
                                        placeholder="Konfirmasi Password Baru Kamu" required>
                                </div>
                                <div class="mt-5">
                                    <button type="submit"
                                        class="w-full flex justify-center bg-blue-400 hover:bg-blue-300 text-gray-100 p-3 rounded-lg tracking-wide font-semibold cursor-pointer transition ease-in duration-500 shadow-lg">
                                        Selanjutnya
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if ($message = Session::get('success'))
        <script>
            Swal.fire({
                title: "Berhasil!",
                text: "Kami Telah Mengirimkan Link ke Email Kamu",
                icon: "success"
            });
        </script>
    @endif
</body>

</html>
