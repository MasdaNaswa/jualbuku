<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<div class="absolute top-0 left-0 h-full w-full overflow-hidden">
    <div class="bg-cover bg-center h-full w-full" style="background-image: url('https://img.freepik.com/free-photo/high-angle-view-laptop-stationeries-blue-background_23-2147880456.jpg?w=900&t=st=1711075084~exp=1711075684~hmac=d5ddc912ce6e4efb0c6259226d6b4037dbffc5e32d2d31b1ffc7b7a6cea3b014');">

<div
	class="relative min-h-screen  sm:flex sm:flex-row  justify-left bg-transparent rounded-3xl shadow-xl shadow lg">
	<div class="flex-col flex  self-center lg:px-14 sm:max-w-4xl xl:max-w-md  z-10">
	</div>
	<div class="flex justify-center self-center z-10">
    <div class="p-12 bg-white mx-auto rounded-3xl w-96 shadow-lg">
        <div class="mb-7 text-center">
				<h3 class="font-bold text-2xl text-blue-400">Masuk Akun Admin</h3>
			</div>
			{{-- catch session --}}
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
			<form action="{{ route('authenticate.admin') }}" method="POST" class="space-y-6">
				@csrf
				<div class="">
					<input class=" w-full text-sm  px-4 py-3 bg-gray-200 focus:bg-gray-100 border  border-gray-200 rounded-lg focus:outline-none focus:border-blue-400 @error('username') border-red-500 @enderror" type="text" placeholder="Nama Pengguna" name="username">
					@error('username')
						<span class="text-red-500 text-xs">{{ $message }}</span>
					@enderror
              </div>
					<div class="relative" x-data="{ show: true }">
						<input placeholder="Kata Sandi" :type="show ? 'password' : 'text'" class="text-sm text-black-200 px-4 py-3 rounded-lg w-full bg-gray-200 focus:bg-gray-100 border border-gray-200 focus:outline-none focus:border-purple-400 @error('username') border-red-500 @enderror" name="password">
						
						<div class="flex items-center absolute inset-y-0 right-0 mr-3  text-sm leading-5">

							<svg @click="show = !show" :class="{'hidden': !show, 'block':show }"
								class="h-4 text-blue-500" fill="none" xmlns="http://www.w3.org/2000/svg"
								viewbox="0 0 576 512">
								<path fill="currentColor"
									d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z">
								</path>
							</svg>

							<svg @click="show = !show" :class="{'block': !show, 'hidden':show }"
								class="h-4 text-blue-500" fill="none" xmlns="http://www.w3.org/2000/svg"
								viewbox="0 0 640 512">
								<path fill="currentColor"
									d="M320 400c-75.85 0-137.25-58.71-142.9-133.11L72.2 185.82c-13.79 17.3-26.48 35.59-36.72 55.59a32.35 32.35 0 0 0 0 29.19C89.71 376.41 197.07 448 320 448c26.91 0 52.87-4 77.89-10.46L346 397.39a144.13 144.13 0 0 1-26 2.61zm313.82 58.1l-110.55-85.44a331.25 331.25 0 0 0 81.25-102.07 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64a308.15 308.15 0 0 0-147.32 37.7L45.46 3.37A16 16 0 0 0 23 6.18L3.37 31.45A16 16 0 0 0 6.18 53.9l588.36 454.73a16 16 0 0 0 22.46-2.81l19.64-25.27a16 16 0 0 0-2.82-22.45zm-183.72-142l-39.3-30.38A94.75 94.75 0 0 0 416 256a94.76 94.76 0 0 0-121.31-92.21A47.65 47.65 0 0 1 304 192a46.64 46.64 0 0 1-1.54 10l-73.61-56.89A142.31 142.31 0 0 1 320 112a143.92 143.92 0 0 1 144 144c0 21.63-5.29 41.79-13.9 60.11z">
								</path>
							</svg>

						</div>
					</div>
					<div class="flex items-center justify-between">

						<div class="text-xs ml-auto">
							<a href="{{ route('forget-password.index') }}" class="text-blue-400 hover:text-blue-700">
								Lupa Kata Sandi?
							</a>
						</div>
					</div>
                    <div class="mb-7 text-center">
                        <p class="text-gray-400 text-s">Belum Mendaftar? <a href="{{ route('register.admin') }}" class="text-sm text-blue-400 hover:text-blue-700">Daftar</a></p></div>

					<div>
						<button type="submit" class="w-full flex justify-center bg-blue-400  hover:bg-blue-300 text-gray-100 p-3  rounded-lg tracking-wide font-semibold  cursor-pointer transition ease-in duration-500 shadow-lg">
                Masuk
              </button>
					</div>

						
				</form>
			</div>
		</div>
	</div>
	</div>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js"></script>
