<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/swiper@8/swiper-bundle.min.css" rel="stylesheet">
    
    <style>
        .swiper-slide {
            width: 720px; /* Adjust the width */
            height: 400px; /* Adjust the height */
        }

        .swiper-container {
            max-width: 0px; /* Adjust the maximum width of the container */
        }
    </style>
</head>

<body class="">
    <section id="tranding" class="py-20">
        <div class="container mx-auto">
            <div class="swiper tranding-slider">
                <div class="swiper-wrapper">
                    <!-- Slide-start -->
                    <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img">
                            <img src="https://media.discordapp.net/attachments/1230479316521975842/1230485973108916324/SELAMAT_DATANG.png?ex=66337e5d&is=6621095d&hm=56eeac5807effa9ea0a9ca9c2061a3dff882d8f9e46cceac64c71033a56b7075&=&format=webp&quality=lossless&width=895&height=503" alt="Tranding" class="w-full h-full rounded-lg object-cover">
                        </div>
                    </div>
                    <!-- Slide-end -->
                    <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img">
                            <img src="https://media.discordapp.net/attachments/1230479316521975842/1230483730301190204/The_Creative_Startup_Roadmap.png?ex=66337c46&is=66210746&hm=10817c727d263b4075c1cd46ce61ffc47260624568b42b354d3d929f70c0beb1&=&format=webp&quality=lossless&width=895&height=503" alt="Tranding" class="w-full h-full rounded-lg object-cover">
                        </div>
                    </div>
                    <!-- More slides... -->
                    <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img">
                            <img src="https://media.discordapp.net/attachments/1230479316521975842/1230479367109611610/LANDING_LIBRARY.png?ex=66337836&is=66210336&hm=dd59a8069b052f1f48804c73e0034c5b19ca7210dbb2b105d7534e6d000ff306&=&format=webp&quality=lossless&width=895&height=503" alt="Tranding" class="w-full h-full rounded-lg object-cover">
                        </div>
                    </div>
                </div>
                <!-- Pagination -->
                <div class="swiper-pagination"></div>
                <!-- Navigation buttons -->

            </div>
        </div>
        
    </section>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js">
    </script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js">
    </script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
</body>

<script>
    var TrandingSlider = new Swiper('.tranding-slider', {
        effect: 'coverflow',
        grabCursor: true,
        centeredSlides: true,
        loop: true,
        slidesPerView: 'auto',
        coverflowEffect: {
            rotate: 0,
            stretch: 0,
            depth: 100,
            modifier: 2.5,
        },
        pagination: {
            el: '.swiper-pagination', // This should match the class of your pagination container
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        }
    });
</script>

</html>
