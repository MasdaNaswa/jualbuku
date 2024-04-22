<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Open+Sans">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
	font-family: "Open Sans", sans-serif;
}
h2 {
	text-align: center;
	position: relative;
}
.carousel {
	margin: 0px auto;
	padding: 0px 70px;
}
.carousel .item {
	color: #747d89;
	min-height: 400px;
	text-align: center;
	overflow: hidden;
}
.carousel .thumb-wrapper {
	padding: 0px 0px;
	background: #fff;
	border-radius: 10px;
	text-align: center;
	position: relative;
}
.carousel .item .img-box {
	height: 200px;
	margin-bottom: 10px;
	width: 100%;
	position: relative;
}
.carousel .item img {	
	max-width: 100%;
	max-height: 100%;
	display: inline-block;
	position: absolute;
	bottom: 0;
	margin: 0 auto;
	left: 0;
	right: 0;
    border-radius: 10px;
}
.carousel .item h4 {
	font-size: 18px;
}
.carousel .item h4, .carousel .item p, .carousel .item ul {
	margin-bottom: 5px;
}
.carousel .thumb-content .btn {
	color: #5F93CB;
	font-size: 11px;
	text-transform: uppercase;
	font-weight: bold;
	background: none;
	border: 1px solid #5F93CB;
	padding: 6px 14px;
	margin-top: 5px;
	line-height: 16px;
	border-radius: 10px;
}
.carousel .thumb-content .btn:hover, .carousel .thumb-content .btn:focus {
	color: #fff;
	background: #5F93CB;
	box-shadow: none;
}
.carousel .thumb-content .btn i {
	font-size: 14px;
	font-weight: bold;
	margin-left: 5px;
}
.carousel .item-price {
	font-size: 13px;
	padding: 2px 0;
}

.carousel-control-prev, .carousel-control-next {
	height: 50px;
	width: 50px;
	background: white;	
	margin: auto 0;
	border-radius: 50px;
	opacity: 0.8;
}
.carousel-control-prev:hover, .carousel-control-next:hover {
	background: #fff;
	opacity: 1;
}
.carousel-control-prev i, .carousel-control-next i {
	font-size: 36px;
	position: absolute;
	top: 50%;
	display: inline-block;
	margin: -19px 0 0 0;
	z-index: 5;
	left: 0;
	right: 0;
	color: #5F93CB;
	text-shadow: none;
	font-weight: bold;
}
.carousel-control-prev i {
	margin-left: -2px;
}
.carousel-control-next i {
	margin-right: -4px;
}		

.carousel .wish-icon {
	position: absolute;
	right: 10px;
	top: 10px;
	z-index: 99;
	cursor: pointer;
	font-size: 16px;
	color: #abb0b8;
}
.carousel .wish-icon .fa-heart {
	color: #ff6161;
}
.star-rating li {
	padding: 0;
}
.star-rating i {
	font-size: 12px;
	color: #ffc000;
}

.service-content {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, auto));
        gap: 1.5rem;
        margin-top: 2rem;
    }
</style>
<script>
$(document).ready(function(){
	$(".wish-icon i").click(function(){
		$(this).toggleClass("fa-heart fa-heart-o");
	});
});	
</script>
</head>
<body>
<div class="border-solid border-2 border-sky-500 py-10">
<div class="container-xl">
	<div class="flex flex-col lg:flex-row">
		<div class="col-md-12">
			<h2 class="text-blue-900 text-2xl font-bold">Rekomendasi Novel</h2>
			<div class="text-gray-600 text-m text-center py-5">Tembus batas dunia imajinasi dengan novel-novel pilihan kami! Jelajahi petualangan yang tak terlupakan, cinta yang menggugah, dan misteri yang menggetarkan. Temukan cerita-cerita yang akan memikat hati dan pikiran Anda di sini</div>
			<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
			<div class="carousel-inner">
				<div class="item carousel-item active">
					<div class="row">
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<span class="wish-icon"><i class="fa fa-heart-o"></i></span>
								<div class="img-box">
									<img src="https://cdn.gramedia.com/uploads/items/9786024246945_Laut-Bercerita.png" class="img-fluid" alt="">									
								</div>
								<div class="thumb-content text-left">
                                    <div class="text-gray text-xs font-semibold py-2">Leila Chudori</div>		
                                    <a href="#" class="text-blue-900 text-m font-bold py-2">Laut Bercerita</a>	
                                    <div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>													
									<p class="item-price text-black text-2x1 font-semibold py-2"><b>Rp.109.000</b></p>
                                    <a href="#" class="btn btn-primary">Tambah Keranjang</a>
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
                        <div class="thumb-wrapper">
								<span class="wish-icon"><i class="fa fa-heart-o"></i></span>
								<div class="img-box">
									<img src="https://cdn.gramedia.com/uploads/items/img20220905_11324048.jpg" class="img-fluid" alt="">									
								</div>
								<div class="thumb-content text-left">
                                    <div class="text-gray text-xs font-semibold py-2">Tere Liye</div>
                                    <a href="#" class="text-blue-900 text-m font-bold py-2">Bulan</a>	
                                    <div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>													
									<p class="item-price text-black text-2x1 font-semibold py-2"><b>Rp.85.500</b></p>
                                    <a href="#" class="btn btn-primary">Tambah Keranjang</a>
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
                        <div class="thumb-wrapper">
								<span class="wish-icon"><i class="fa fa-heart-o"></i></span>
								<div class="img-box">
									<img src="https://cdn.gramedia.com/uploads/items/9786020366517_Cantik-Itu-Luka-Hard-Cover---Limited-Edition.jpg" class="img-fluid" alt="">									
								</div>
								<div class="thumb-content text-left">
                                    <div class="text-gray text-xs font-semibold py-2">Eka Kurniawan</div>
                                    <a href="#" class="text-blue-900 text-m font-bold py-2">Cantik Itu Luka</a>			
                                    <div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>													
									<p class="item-price text-black text-2x1 font-semibold py-2"><b>Rp.125.000</b></p>			
                                    <a href="#" class="btn btn-primary">Tambah Keranjang</a>
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
                        <div class="thumb-wrapper">
								<span class="wish-icon"><i class="fa fa-heart-o"></i></span>
								<div class="img-box">
									<img src="https://cdn.gramedia.com/uploads/items/56531/thumb_image_normal/BLK_TK2020193493.jpg" class="img-fluid" alt="">									
								</div>
								<div class="thumb-content text-left">
                                    <div class="text-gray text-xs font-semibold py-2">Nellaneva</div>	
                                    <a href="#" class="text-blue-900 text-m font-bold py-2">Tujuh Kelana</a>		
                                    <div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>			
									<p class="item-price text-black text-2x1 font-semibold py-2"><b>Rp.85.900</b></p>
                                    <a href="#" class="btn btn-primary">Tambah Keranjang</a>
								</div>						
							</div>
						</div>
					</div>
				</div>
				<div class="item carousel-item">
					<div class="row">
                    <div class="col-sm-3">
                        <div class="thumb-wrapper">
								<span class="wish-icon"><i class="fa fa-heart-o"></i></span>
								<div class="img-box">
									<img src="https://cdn.gramedia.com/uploads/items/9789792248616_negeri-5-menara-_cu-cover-baru_.jpg" class="img-fluid" alt="">									
								</div>
								<div class="thumb-content text-left">
                                    <div class="text-gray text-xs font-semibold py-2">Ahmad Fuadi</div>	
                                    <a href="#" class="text-blue-900 text-m font-bold py-2">Negeri 5 Menara</a>		
                                    <div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>			
									<p class="item-price text-black text-2x1 font-semibold py-2"><b>Rp.73.500</b></p>
                                    <a href="#" class="btn btn-primary">Tambah Keranjang</a>
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
                        <div class="thumb-wrapper">
								<span class="wish-icon"><i class="fa fa-heart-o"></i></span>
								<div class="img-box">
									<img src="https://cdn.gramedia.com/uploads/items/img20220928_15154296.jpg" class="img-fluid" alt="">									
								</div>
								<div class="thumb-content text-left">
                                    <div class="text-gray text-xs font-semibold py-2">Valerie</div>	
                                    <a href="#" class="text-blue-900 text-m font-bold py-2">Fur Immer Dein Ian</a>		
                                    <div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>			
									<p class="item-price text-black text-2x1 font-semibold py-2"><b>Rp.89.900</b></p>
                                    <a href="#" class="btn btn-primary">Tambah Keranjang</a>
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
                        <div class="thumb-wrapper">
								<span class="wish-icon"><i class="fa fa-heart-o"></i></span>
								<div class="img-box">
									<img src="https://cdn.gramedia.com/uploads/items/img20220924_13195778.jpg" class="img-fluid" alt="">									
								</div>
								<div class="thumb-content text-left">
                                    <div class="text-gray text-xs font-semibold py-2">Anton Kurnia</div>	
                                    <a href="#" class="text-blue-900 text-m font-bold py-2">Majnun</a>		
                                    <div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>			
									<p class="item-price text-black text-2x1 font-semibold py-2"><b>Rp.67.500</b></p>
                                    <a href="#" class="btn btn-primary">Tambah Keranjang</a>
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
                        <div class="thumb-wrapper">
								<span class="wish-icon"><i class="fa fa-heart-o"></i></span>
								<div class="img-box">
									<img src="https://cdn.gramedia.com/uploads/items/9786020651927_Funiculi_Funicula_cov.jpg" class="img-fluid" alt="">									
								</div>
								<div class="thumb-content text-left">
                                    <div class="text-gray text-xs font-semibold py-2">Toshikazu Kawaguchi</div>	
                                    <a href="#" class="text-blue-900 text-m font-bold py-2">Funiculi Funicula</a>		
                                    <div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>			
									<p class="item-price text-black text-2x1 font-semibold py-2"><b>Rp.52.500</b></p>
                                    <a href="#" class="btn btn-primary">Tambah Keranjang</a>
								</div>						
							</div>
						</div>	
					</div>
				</div>
			</div>
			<!-- Carousel controls -->
			<a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
				<i class="fa fa-angle-left"></i>
			</a>
			<a class="carousel-control-next" href="#myCarousel" data-slide="next">
				<i class="fa fa-angle-right"></i>
			</a>
		</div>
		</div>
	</div>
</div>
</div>
</body>
</html>                                		