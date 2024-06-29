<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Open+Sans">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
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
			<h2 class="text-blue-900 text-2xl font-bold">Rekomendasi Komik</h2>
			<div class="text-gray-600 text-m text-center py-5">Temukan dunia yang memikat dari manga-manga terbaik! Jelajahi cerita-cerita yang mendebarkan, karakter-karakter yang memikat, dan seni yang memukau. Hadirkan kegembiraan dan keajaiban manga ke dalam hidup Anda sekarang!
			</div>
			<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
				<div class="carousel-inner">
					@forelse($produk->where('kode_kategori', 3)->chunk(4) as $chunk)
						<div class="carousel-item {{ $loop->first ? 'active' : '' }}">
							<div class="row">
								@foreach($chunk as $item)
									<div class="col-sm-3">
										<div class="thumb-wrapper">
											<span class="wish-icon"><i class="fa fa-heart-o"></i></span>
											<div class="img-box">
												<img src="{{ asset('img/produk/' . $item->gambar) }}" class="img-fluid" alt="{{ $item->judul_buku }}">
											</div>
											<div class="thumb-content text-left">
												<div class="text-gray text-xs font-semibold py-2">{{ $item->penulis }}</div>
												<a href="{{ route('produk.show', $item->kode_buku) }}" class="text-blue-900 text-m font-bold py-2">{{ $item->judul_buku }}</a>
										
												<p class="item-price text-black text-2x1 font-semibold py-2">
													<b>Rp.{{ number_format($item->harga, 0, ',', '.') }}</b>
												</p>
												<div class="text-center">
													<form action="{{ route('keranjang.store') }}" method="post">
														@csrf
														<input type="hidden" name="kode_buku" value="{{ $item->kode_buku }}">
														<button type="submit" class="btn btn-primary">Tambah Keranjang</button>
													</form>
												</div>
											</div>
										</div>
									</div>
								@endforeach
							</div>
						</div>
					@empty
						<div class="item carousel-item active">
							<div class="row">
								<div class="col-12">
									<p>Tidak ada produk</p>
								</div>
							</div>
						</div>
					@endforelse
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