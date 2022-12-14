<?php

session_start();
if (!isset($_SESSION["login"])) {
	header("Location: masuk.php");
	exit;
}

require 'functions.php';

?>

<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="colorlib">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Beranda</title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
	<!--
		CSS
		============================================= -->
	<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/jquery-ui.css">
	<link rel="stylesheet" href="css/nice-select.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/arrow.css">
</head>

<body>
	<header id="header">
		<div class="container main-menu">
			<div class="row align-items-center justify-content-between d-flex">
				<div id="logo">
					<a href="index.php"><img style="width: 100px; height: 50px;" src="img/AnoaLand3.png" alt="" title="" /></a>
				</div>
				<nav id="nav-menu-container">
					<ul class="nav-menu">
						<li><a href="index.php" class="active text-warning">Beranda</a></li>
						<li><a href="wisata.php">Wisata</a></li>
						<li><a href="about.php">Tentang</a></li>
						<li><a href="contact.php">Kontak</a></li>
						<?php
						if (!isset($_SESSION['login'])) {
							echo "<li> <a href='masuk.php'>Masuk</a> </li>";
						}
						if (isset($_SESSION['login'])) {
							echo "<li> <a href='profile.php'>Profile</a> </li>
								 <li> <a href='logout.php'>Keluar</a> </li>";
						}
						?>
					</ul>
				</nav><!-- #nav-menu-container -->
			</div>
		</div>
	</header><!-- #header -->

	<!-- start banner Area -->
	<section class="banner-area relative">
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row fullscreen align-items-center justify-content-center">
				<div class="col-lg-6 col-md-6 banner-left ">
					<h6 class="text-white" style="text-transform: none !important;">Temukan destinasi liburan anda di</h6>
					<h1 class="text-white">Anoa Land</h1>
					<p class="text-white" style="font-size: 1rem;">
						Menyajikan informasi yang lengkap seputar destinasi wisata yang ada di Sulawesi Tenggara.
					</p>
					<a href="#" class="primary-btn text-uppercase">Mulai sekarang</a>
				</div>

			</div>
		</div>
	</section>
	<!-- End banner Area -->

	<!-- Start popular-destination Area -->
	<section class="popular-destination-area section-gap">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="menu-content pb-70 col-lg-8">
					<div class="title text-center">
						<h1 class="mb-10">Destinasi Terbaik di Sulawesi Tenggara</h1>
						<p>We all live in an age that belongs to the young at heart. Life that is becoming extremely fast, day.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4">
					<div class="single-destination relative">
						<div class="thumb relative">
							<div class="overlay overlay-bg"></div>
							<img class="img-fluid" src="img/newpict/labengki.jpg" alt="">
						</div>
						<div class="desc">
							<h4>Pantai Labengki</h4>
							<p>Lasolo, Konawe Utara</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="single-destination relative">
						<div class="thumb relative">
							<div class="overlay overlay-bg"></div>
							<img class="img-fluid" src="img/newpict/moramo.jpg" alt="">
						</div>
						<div class="desc">
							<h4>Air Terjun Moramo</h4>
							<p>Moramo, Konawe Selatan</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="single-destination relative">
						<div class="thumb relative">
							<div class="overlay overlay-bg"></div>
							<img class="img-fluid" src="img/newpict/bokori.jpg" alt="">
						</div>
						<div class="desc">
							<h4>Pulau Bokori</h4>
							<p>Toronipa, Konawe</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End popular-destination Area -->


	<!-- Start other-issue Area -->
	<section class="other-issue-area section-gap">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="menu-content pb-70 col-lg-9">
					<div class="title text-center">
						<h1 class="mb-10">Temukan Berbagai Keperluan Anda</h1>
						<p>We all live in an age that belongs to the young at heart. Life that is.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="single-other-issue">
						<div class="thumb">
							<img class="img-fluid" src="img/newpict/transportasi.jpg" alt="">
						</div>
						<a href="#">
							<h4>Transportasi</h4>
						</a>
						<p>
							The preservation of human life is the ultimate value, a pillar of ethics and the foundation.
						</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-other-issue">
						<div class="thumb">
							<img class="img-fluid" src="img/newpict/pemandu.jpg" alt="">
						</div>
						<a href="#">
							<h4>Tour Guide</h4>
						</a>
						<p>
							I was always somebody who felt quite sorry for myself, what I had not got compared.
						</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-other-issue">
						<div class="thumb">
							<img class="img-fluid" src="img/newpict/sinonggi.jpg" alt="">
						</div>
						<a href="#">
							<h4>Kuliner Daerah</h4>
						</a>
						<p>
							There are many kinds of narratives and organizing principles. Science is driven by evidence.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End other-issue Area -->


	<!-- Start home-about Area -->
	<!-- <section class="home-about-area">
			<div class="container-fluid">
				<div class="row align-items-center justify-content-end">
					<div class="col-lg-6 col-md-12 home-about-left">
						<h1>
							Did not find your Package? <br>
							Feel free to ask us. <br>
							We???ll make it for you
						</h1>
						<p>
							inappropriate behavior is often laughed off as ???boys will be boys,??? women face higher conduct standards especially in the workplace. That???s why it???s crucial that, as women, our behavior on the job is beyond reproach. inappropriate behavior is often laughed.
						</p>
						<a href="#" class="primary-btn text-uppercase">request custom price</a>
					</div>
					<div class="col-lg-6 col-md-12 home-about-right no-padding">
						<img class="img-fluid" src="img/about-img.jpg" alt="">
					</div>
				</div>
			</div>	
		</section> -->
	<!-- End home-about Area -->


	<!-- Start blog Area -->
	<section class="recent-blog-area section-gap">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="menu-content pb-60 col-lg-9">
					<div class="title text-center">
						<h1 class="mb-10">Postingan Blog Kami</h1>
						<p>With the exception of Nietzsche, no other madman has contributed so much to human sanity as has.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="active-recent-blog-carusel">
					<div class="single-recent-blog-post item">
						<div class="thumb">
							<img class="img-fluid" src="img/b1.jpg" alt="">
						</div>
						<div class="details">
							<a href="#">
								<h4 class="title">Low Cost Advertising</h4>
							</a>
							<p>
								Acres of Diamonds??? you???ve read the famous story, or at least had it related to you. A farmer.
							</p>
							<h6 class="date">31st January,2018</h6>
						</div>
					</div>
					<div class="single-recent-blog-post item">
						<div class="thumb">
							<img class="img-fluid" src="img/b2.jpg" alt="">
						</div>
						<div class="details">
							<a href="#">
								<h4 class="title">Creative Outdoor Ads</h4>
							</a>
							<p>
								Acres of Diamonds??? you???ve read the famous story, or at least had it related to you. A farmer.
							</p>
							<h6 class="date">31st January,2018</h6>
						</div>
					</div>
					<div class="single-recent-blog-post item">
						<div class="thumb">
							<img class="img-fluid" src="img/b3.jpg" alt="">
						</div>
						<div class="details">
							<a href="#">
								<h4 class="title">It's Classified How To Utilize Free</h4>
							</a>
							<p>
								Acres of Diamonds??? you???ve read the famous story, or at least had it related to you. A farmer.
							</p>
							<h6 class="date">31st January,2018</h6>
						</div>
					</div>
					<div class="single-recent-blog-post item">
						<div class="thumb">
							<img class="img-fluid" src="img/b1.jpg" alt="">
						</div>
						<div class="details">
							<a href="#">
								<h4 class="title">Low Cost Advertising</h4>
							</a>
							<p>
								Acres of Diamonds??? you???ve read the famous story, or at least had it related to you. A farmer.
							</p>
							<h6 class="date">31st January,2018</h6>
						</div>
					</div>
					<div class="single-recent-blog-post item">
						<div class="thumb">
							<img class="img-fluid" src="img/b2.jpg" alt="">
						</div>
						<div class="details">
							<a href="#">
								<h4 class="title">Creative Outdoor Ads</h4>
							</a>
							<p>
								Acres of Diamonds??? you???ve read the famous story, or at least had it related to you. A farmer.
							</p>
							<h6 class="date">31st January,2018</h6>
						</div>
					</div>
					<div class="single-recent-blog-post item">
						<div class="thumb">
							<img class="img-fluid" src="img/b3.jpg" alt="">
						</div>
						<div class="details">
							<a href="#">
								<h4 class="title">It's Classified How To Utilize Free</h4>
							</a>
							<p>
								Acres of Diamonds??? you???ve read the famous story, or at least had it related to you. A farmer.
							</p>
							<h6 class="date">31st January,2018</h6>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>
	<!-- End recent-blog Area -->

	<!-- start footer Area -->
	<footer class="footer-area section-gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-4  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>About Agency</h6>
						<p>
							The world has become so fast paced that people don???t want to stand by reading a page of information, they would much rather look at a presentation and understand the message. It has come to a point
						</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>Navigation Links</h6>
						<div class="row">
							<div class="col">
								<ul>
									<li><a href="index.php">Beranda</a></li>
									<li><a href="wisata.php">Wisata</a></li>
								</ul>
							</div>
							<div class="col">
								<ul>
									<li><a href="about.php">Tentang</a></li>
									<li><a href="contact.php">Kontak</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4  col-md-6 col-sm-6">
					<div class="single-footer-widget mail-chimp">
						<h6 class="mb-20">InstaFeed</h6>
						<ul class="instafeed d-flex flex-wrap">
							<li><img src="img/i1.jpg" alt=""></li>
							<li><img src="img/i2.jpg" alt=""></li>
							<li><img src="img/i3.jpg" alt=""></li>
							<li><img src="img/i4.jpg" alt=""></li>
							<li><img src="img/i5.jpg" alt=""></li>
							<li><img src="img/i6.jpg" alt=""></li>
							<li><img src="img/i7.jpg" alt=""></li>
							<li><img src="img/i8.jpg" alt=""></li>
						</ul>
					</div>
				</div>
			</div>

			<div class="row footer-bottom d-flex justify-content-between align-items-center">
				<p class="col-lg-8 col-sm-12 footer-text m-0">
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					Copyright &copy;<script>
						document.write(new Date().getFullYear());
					</script> All rights reserved | made by <a href="https://colorlib.com" target="_blank">Anoaland</a>
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				</p>
				<div class="col-lg-4 col-sm-12 footer-social">
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-dribbble"></i></a>
					<a href="#"><i class="fa fa-behance"></i></a>
				</div>
			</div>
		</div>
	</footer>
	<a href="#" class="scroll-to-top">
		<i><img src="img/arrow.png" alt="" width="30"></i>
	</a>
	<script src="js/script.js"></script>
	<!-- End footer Area -->

	<script src="js/vendor/jquery-2.2.4.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/easing.min.js"></script>
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/jquery.nice-select.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/mail-script.js"></script>
	<script src="js/main.js"></script>
</body>

</html>