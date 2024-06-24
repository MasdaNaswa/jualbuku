<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<div class="absolute top-0 left-0 h-full w-full overflow-hidden">
    <div class="bg-cover bg-center h-full w-full"
        style="background-image: url('https://img.freepik.com/free-photo/high-angle-view-laptop-stationeries-blue-background_23-2147880456.jpg?w=900&t=st=1711075084~exp=1711075684~hmac=d5ddc912ce6e4efb0c6259226d6b4037dbffc5e32d2d31b1ffc7b7a6cea3b014');">

        <div
            class="relative min-h-screen  sm:flex sm:flex-row  justify-left bg-transparent rounded-3xl shadow-xl shadow lg">
            <div class="flex-col flex  self-center lg:px-14 sm:max-w-4xl xl:max-w-md  z-10">
            </div>
            <div class="flex justify-center self-center z-10">
                <div class="p-12 bg-white mx-auto rounded-3xl w-96 shadow-lg">
                    <div class="mb-7 text-center">
                        <h3 class="font-bold text-2xl text-blue-400">Lupa Password</h3>
                    </div>
                    @if (session('success'))
                        <div class="bg-green-500 p-4 rounded-lg mb-6 text-white text-center">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if (session('error'))
                        <div class="bg-red-500 p-4 rounded-lg mb-6 text-white text-center">
                            {{ session('error') }}
                        </div>
                    @endif
                    <form action="{{ route('forget-password.send') }}" method="POST" class="space-y-6">
                        @csrf
                        <div class="">
                            <input
                                class=" w-full text-sm  px-4 py-3 bg-gray-200 focus:bg-gray-100 border  border-gray-200 rounded-lg focus:outline-none focus:border-blue-400 @error('email') border-red-500 @enderror"
                                type="email" placeholder="Email" name="email">
                            @error('email')
                                <span class="text-red-500 text-xs">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-7 text-center">
                            <p class="text-gray-400 text-s">Sudah Punya Akun? <a href="{{ route('login') }}"
                                    class="text-sm text-blue-400 hover:text-blue-700">Masuk</a></p>
                        </div>

                        <div>
                            <button type="submit"
                                class="w-full flex justify-center bg-blue-400  hover:bg-blue-300 text-gray-100 p-3  rounded-lg tracking-wide font-semibold  cursor-pointer transition ease-in duration-500 shadow-lg">
                                Kirim
                            </button>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js"></script>
