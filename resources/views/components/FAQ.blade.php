<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        @tailwind base;
@tailwind components;
@tailwind utilities;

@layer utilities {
    @keyframes gradientChange {
        0% {
            background-position: 0%
        }

        50% {
            background-position: 100%
        }

        100% {
            background-position: 0%
        }
    }

    .gradient {
        background: linear-gradient(90deg, blue, red);
        background-size: 200% 200%;
    }

    .element-to-rotate {
        animation: gradientChange 4s ease infinite;
    }
}
    </style>
</head>
<body>
<div class="border-solid border-2 border-sky-500 py-10">
<div class="py-24 px-8 max-w-5xl mx-auto flex flex-col md:flex-row gap-12">
    <div class="flex flex-col text-left basis-1/2">
        <p class="inline-block font-semibold text-primary mb-4"></p>
        <p class="sm:text-4xl text-3xl font-extrabold text-base-content text-blue-900">Pertanyaan Yang Sering Diajukan</p>
    </div>
    <ul class="basis-1/2">
        <li>
            <button class="relative flex gap-2 items-center w-full py-5 text-base font-semibold text-left border-t md:text-lg border-base-content/10" aria-expanded="false" onclick="toggleFAQ(this)">
                <span class="flex-1 text-base-content">Apa itu Landing Library?</span>
                <svg class="flex-shrink-0 w-4 h-4 ml-auto fill-current" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                    <rect y="7" width="16" height="2" rx="1" class="transform origin-center transition duration-200 ease-out false"></rect>
                    <rect y="7" width="16" height="2" rx="1" class="transform origin-center rotate-90 transition duration-200 ease-out false"></rect>
                </svg>
            </button>
            <div class="transition-all duration-300 ease-in-out max-h-0 overflow-hidden" style="transition: max-height 0.3s ease-in-out 0s;">
                <div class="pb-5 leading-relaxed">
                    <div class="space-y-2 leading-relaxed">Landing Library adalah toko buku online yang menawarkan koleksi buku lengkap dan beragam. Dengan antarmuka yang ramah pengguna dan fitur pencarian canggih, kami membuat pengalaman berbelanja buku menjadi mudah dan menyenangkan. Temukan novel terbaru, karya-karya klasik, serta buku-buku non-fiksi terbaik hanya dengan beberapa klik. Selamat datang di dunia literasi yang tak terbatas - kunjungi Landing Library sekarang</div>
                </div>
            </div>
        </li>
        <li>
            <button class="relative flex gap-2 items-center w-full py-5 text-base font-semibold text-left border-t md:text-lg border-base-content/10" aria-expanded="false" onclick="toggleFAQ(this)">
                <span class="flex-1 text-base-content">Bagaimana cara memesan buku di Landing Library?</span>
                <svg class="flex-shrink-0 w-4 h-4 ml-auto fill-current" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                    <rect y="7" width="16" height="2" rx="1" class="transform origin-center transition duration-200 ease-out false"></rect>
                    <rect y="7" width="16" height="2" rx="1" class="transform origin-center rotate-90 transition duration-200 ease-out false"></rect>
                </svg>
            </button>
            <div class="transition-all duration-300 ease-in-out max-h-0 overflow-hidden" style="transition: max-height 0.3s ease-in-out 0s;">
                <div class="pb-5 leading-relaxed">
                    <div class="space-y-2 leading-relaxed">Anda dapat dengan mudah memesan buku melalui website kami. Cukup cari judul buku yang Anda inginkan menggunakan fitur pencarian, tambahkan ke keranjang belanja, dan ikuti langkah-langkah selanjutnya untuk menyelesaikan pembayaran.</div>
                </div>
            </div>
        </li>
        <li>
            <button class="relative flex gap-2 items-center w-full py-5 text-base font-semibold text-left border-t md:text-lg border-base-content/10" aria-expanded="false" onclick="toggleFAQ(this)">
                <span class="flex-1 text-base-content">Apakah Landing Library menyediakan buku-buku terbitan terbaru?</span>
                <svg class="flex-shrink-0 w-4 h-4 ml-auto fill-current" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                    <rect y="7" width="16" height="2" rx="1" class="transform origin-center transition duration-200 ease-out false"></rect>
                    <rect y="7" width="16" height="2" rx="1" class="transform origin-center rotate-90 transition duration-200 ease-out false"></rect>
                </svg>
            </button>
            <div class="transition-all duration-300 ease-in-out max-h-0 overflow-hidden" style="transition: max-height 0.3s ease-in-out 0s;">
                <div class="pb-5 leading-relaxed">
                    <div class="space-y-2 leading-relaxed">Ya, kami selalu berusaha untuk menyediakan koleksi buku yang terbaru dan terkini. Anda dapat menemukan buku-buku terbitan terbaru di bagian "Koleksi Terbaru" di website kami.</div>
                </div>
            </div>
        </li>
    </ul>
</div>
</div>

<script>
    function toggleFAQ(button) {
        const content = button.nextElementSibling;
        button.setAttribute("aria-expanded", button.getAttribute("aria-expanded") === "false" ? "true" : "false");
        content.style.maxHeight = button.getAttribute("aria-expanded") === "true" ? content.scrollHeight + "px" : "0";
    }
</script>

</body>
</html>