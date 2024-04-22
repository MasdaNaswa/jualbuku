<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
.band {
  width: 90%;
  max-width: 1240px;
  margin: 0 auto;
  
  display: grid;
  
  grid-template-columns: 1fr;
  grid-template-rows: auto;
  grid-gap: 20px;
  
  @media (min-width: 30em) {
    grid-template-columns: 1fr 1fr;
  }
  
  @media (min-width: 60em) {
    grid-template-columns: repeat(4, 1fr);
  }
}

.card {
  background: white;
  text-decoration: none;
  color: #444;
  box-shadow: 0 2px 5px rgba(0,0,0,0.1);
  display: flex;
  flex-direction: column;
  min-height: 100%;
  
  // sets up hover state
  position: relative;
  top: 0;
  transition: all .1s ease-in;
    
  &:hover {
    top: -2px;
    box-shadow: 0 4px 5px rgba(0,0,0,0.2);
  }
  
  article {
    padding: 20px;
    flex: 1;
    
    display: flex;
    flex-direction: column;
    justify-content: space-between;
  }
  
  h1 {
    font-size: 20px;
    margin: 0;
    color: #333;
  }
  
  p {
    flex: 1;
    line-height: 1.4;
  }
  
  span {
    font-size: 12px;
    font-weight: bold;
    color: #999;
    text-transform: uppercase;
    letter-spacing: .05em;
    margin: 2em 0 0 0;
  }
  
  .thumb {
    padding-bottom: 60%;
    background-size: cover;
    background-position: center center;
  }
}

.item-1 {
  @media (min-width: 60em) {
    grid-column: 1 / span 2;
    
    h1 {
      font-size: 24px;
    }
  }
}
    </style>
</head>
<body>
<div class="py-16 bg-white">  
  <div class="container m-auto px-6 text-gray-600 md:px-12 xl:px-6">
      <div class="space-y-6 md:space-y-0 md:flex md:gap-6 lg:items-center lg:gap-12">
        <div class="md:5/12 lg:w-5/12">
          <img src="https://images.ctfassets.net/ahaoy9whsr8a/6lHmeKj2Rk36yzDR03VL6K/e6716b1927c90c1c9218bb1c3fe2af36/heroImage4.png?fm=webp&w=400&q=75" alt="image" loading="lazy" width="" height="">
        </div>
        <div class="md:7/12 lg:w-6/12">
          <h2 class="text-2xl font-bold md:text-4xl text-blue-900">Blog Landing Library</h2>
          <p class="mt-6 text-gray-600">Selamat datang di rumahnya para pencinta buku! Di sini, setiap halaman adalah peluang untuk menemukan keajaiban baru. Temukan dunia yang tak terbatas dalam koleksi kami yang kaya akan cerita, pengetahuan, dan inspirasi. Mulailah petualangan literasi Anda sekarang! Selamat berbelanja dan selamat membaca!</p>
          <p class="mt-4 text-gray-600">Jangan lewatkan kesempatan untuk mengeksplorasi lebih dalam! Kunjungi blog kami untuk memperdalam wawasan, menemukan ulasan buku terbaru, serta mendapatkan tips dan trik membaca yang berguna. Bersiaplah untuk memperluas cakrawala literasi Anda. Segera kunjungi blog kami dan mari jelajahi dunia kata-kata bersama-sama!</p>
        </div>
      </div>
  </div>
</div>
<div class="band py-16">
  <div class="item-4">
    <a href="https://webdesign.tutsplus.com/tutorials/how-to-code-a-scrolling-alien-lander-website--cms-26826" class="card">
      <div class="thumb" style="background-image: url(https://www.gramedia.com/blog/content/images/2024/03/WhatsApp-Image-2024-03-27-at-11.08.22.jpeg);"></div>
      <article>
        <h1>Review Buku Cinta Paling Rumit Karya Boy Candra</h1>
        <span>Laila Wulanalfi</span>
      </article>
    </a>
  </div>
  <div class="item-5">
    <a href="https://design.tutsplus.com/tutorials/stranger-things-inspired-text-effect--cms-27139" class="card">
      <div class="thumb" style="background-image: url(https://www.gramedia.com/blog/content/images/2024/03/Junji-Ito.jpg);"></div>
      <article>
        <h1>Deretan Komik Horor Karya Junji Ito, Si Spesialis Kisah Creepy</h1>
        <span>Angela Dhyta</span>
      </article>
    </a>
  </div>
  <div class="item-6">
    <a href="https://photography.tutsplus.com/articles/5-inspirational-business-portraits-and-how-to-make-your-own--cms-27338" class="card">
      <div class="thumb" style="background-image: url(https://www.gramedia.com/blog/content/images/2023/11/Anak-Kantoran-Cover.jpg);"></div>
      <article>
        <h1>Lagi Probation dan Anak Kantoran: Teman dalam Menjemput Karier</h1>

        <span>Naela Marcelina</span>
      </article>
    </a>
  </div>
  <div class="item-7">
    <a href="https://webdesign.tutsplus.com/articles/notes-from-behind-the-firewall-the-state-of-web-design-in-china--cms-22281" class="card">
      <div class="thumb" style="background-image: url(https://www.gramedia.com/blog/content/images/2023/10/Snapinsta.app_378449242_869804537849373_5130527525655143522_n_1080.jpg);"></div>
      <article>
        <h1>Serpihan Utuh Sebuah Rindu, Debut Beby Chaesara di Dunia Literasi</h1>
        <span>Puteri C. Anasta</span>
      </article>
    </a>
  </div>
</div>

</body>
</html>