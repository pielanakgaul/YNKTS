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
	<title>Wisata</title>

	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
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
						<li><a href="index.php">Beranda</a></li>
						<li><a href="wisata.php" class="active text-warning">Wisata</a></li>
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
	<section class="about-banner relative">
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row d-flex align-items-center justify-content-center">
				<div class="about-content col-lg-12">
					<h1 class="text-white">
						Wisata
					</h1>
					<p class="text-white link-nav"><a href="index.php">Beranda </a> <span class="lnr lnr-arrow-right"></span> <a href="wisata.php"> Wisata Selengkapnya</a></p>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->

	<!-- Start destinations Area -->
	<section class="destinations-area section-gap">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="menu-content pb-40 col-lg-8">
					<div class="title text-center">
						<h1 class="mb-10">Destinasi Populer di Sulawesi Tenggara</h1>
						<p>Destinasi populer disetiap kabupaten yang ada di Sulawesi Tenggara</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4">
					<div class="single-destinations">
						<div class="thumb">
							<img src="img/hotels/d1.jpg" alt="">
						</div>
						<div class="details">
							<h4 class="d-flex justify-content-between">
								<span>Hilton Star Hotel</span>
							</h4>
							<p>
								Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis autem asperiores cupiditate, neque vero atque odit laudantium sint magnam impedit fugiat corrupti eum repellat at, laboriosam vitae hic, eligendi aut.
							</p>
							<ul class="package-list">
								<li class="d-flex justify-content-between align-items-center mt-1 mr-auto ml-auto">
									<span class="d-flex">
										<svg class="mr-1" xmlns="http://www.w3.org/2000/svg" width="30" height="30" preserveAspectRatio="xMidYMid meet" viewBox="0 0 30 30">
											<path fill="currentColor" d="M12 12q.825 0 1.413-.588Q14 10.825 14 10t-.587-1.413Q12.825 8 12 8q-.825 0-1.412.587Q10 9.175 10 10q0 .825.588 1.412Q11.175 12 12 12Zm0 10q-4.025-3.425-6.012-6.363Q4 12.7 4 10.2q0-3.75 2.413-5.975Q8.825 2 12 2t5.587 2.225Q20 6.45 20 10.2q0 2.5-1.987 5.437Q16.025 18.575 12 22Z" />
										</svg>
										<h6 class="d-flex mt-1">Konawe Selatan</h6>
									</span>
									<span class="d-flex">
										<a href="#" class="link-secondary">Selengkapnya</a>
									</span>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="single-destinations">
						<div class="thumb">
							<img src="img/hotels/d2.jpg" alt="">
						</div>
						<div class="details">
							<h4 class="d-flex justify-content-between">
								<span>Hilton Star Hotel</span>
							</h4>
							<p>
								Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis autem asperiores cupiditate, neque vero atque odit laudantium sint magnam impedit fugiat corrupti eum repellat at, laboriosam vitae hic, eligendi aut.
							</p>
							<ul class="package-list">
								<li class="d-flex justify-content-between align-items-center">
									<span class="d-flex">
										<svg class="mr-1" xmlns="http://www.w3.org/2000/svg" width="30" height="30" preserveAspectRatio="xMidYMid meet" viewBox="0 0 30 30">
											<path fill="currentColor" d="M12 12q.825 0 1.413-.588Q14 10.825 14 10t-.587-1.413Q12.825 8 12 8q-.825 0-1.412.587Q10 9.175 10 10q0 .825.588 1.412Q11.175 12 12 12Zm0 10q-4.025-3.425-6.012-6.363Q4 12.7 4 10.2q0-3.75 2.413-5.975Q8.825 2 12 2t5.587 2.225Q20 6.45 20 10.2q0 2.5-1.987 5.437Q16.025 18.575 12 22Z" />
										</svg>
										<h6 class="d-flex mt-1 ">Muna Barat</h6>
									</span>
									<span>
										<a href="#" class="link-secondary">Selengkapnya</a>
									</span>
									<!-- <a href="#" class="price-btn">$250</a> -->
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="single-destinations">
						<div class="thumb">
							<img src="img/hotels/d3.jpg" alt="">
						</div>
						<div class="details">
							<h4 class="d-flex justify-content-between">
								<span>Hilton Star Hotel</span>
							</h4>
							<p>
								Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis autem asperiores cupiditate, neque vero atque odit laudantium sint magnam impedit fugiat corrupti eum repellat at, laboriosam vitae hic, eligendi aut.
							</p>
							<ul class="package-list">
								<li class="d-flex justify-content-between align-items-center">
									<span class="d-flex">
										<svg class="mr-1" xmlns="http://www.w3.org/2000/svg" width="30" height="30" preserveAspectRatio="xMidYMid meet" viewBox="0 0 30 30">
											<path fill="currentColor" d="M12 12q.825 0 1.413-.588Q14 10.825 14 10t-.587-1.413Q12.825 8 12 8q-.825 0-1.412.587Q10 9.175 10 10q0 .825.588 1.412Q11.175 12 12 12Zm0 10q-4.025-3.425-6.012-6.363Q4 12.7 4 10.2q0-3.75 2.413-5.975Q8.825 2 12 2t5.587 2.225Q20 6.45 20 10.2q0 2.5-1.987 5.437Q16.025 18.575 12 22Z" />
										</svg>
										<h6 class="d-flex mt-1 ">Buton Tengah</h6>
									</span>
									<span>
										<a href="#" class="link-secondary">Selengkapnya</a>
									</span>
									<!-- <a href="#" class="price-btn">$250</a> -->
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="single-destinations">
						<div class="thumb">
							<img src="img/hotels/d4.jpg" alt="">
						</div>
						<div class="details">
							<h4 class="d-flex justify-content-between">
								<span>Hilton Star Hotel</span>
							</h4>
							<p>
								Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio veniam quod consequuntur cum nesciunt ab, maxime officiis, sint quibusdam ipsam velit id perferendis? Aspernatur ratione cupiditate quisquam ad id inventore.
							</p>
							<ul class="package-list">
								<li class="d-flex justify-content-between align-items-center">
									<span class="d-flex">
										<svg class="mr-1" xmlns="http://www.w3.org/2000/svg" width="30" height="30" preserveAspectRatio="xMidYMid meet" viewBox="0 0 30 30">
											<path fill="currentColor" d="M12 12q.825 0 1.413-.588Q14 10.825 14 10t-.587-1.413Q12.825 8 12 8q-.825 0-1.412.587Q10 9.175 10 10q0 .825.588 1.412Q11.175 12 12 12Zm0 10q-4.025-3.425-6.012-6.363Q4 12.7 4 10.2q0-3.75 2.413-5.975Q8.825 2 12 2t5.587 2.225Q20 6.45 20 10.2q0 2.5-1.987 5.437Q16.025 18.575 12 22Z" />
										</svg>
										<h6 class="d-flex mt-1 ">Moramo</h6>
									</span>
									<span>
										<a href="#" class="link-secondary">Selengkapnya</a>
									</span>
									<!-- <a href="#" class="price-btn">$250</a> -->
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="single-destinations">
						<div class="thumb">
							<img src="img/hotels/d5.jpg" alt="">
						</div>
						<div class="details">
							<h4 class="d-flex justify-content-between">
								<span>Hilton Star Hotel</span>
							</h4>
							<p>
								Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis autem asperiores cupiditate, neque vero atque odit laudantium sint magnam impedit fugiat corrupti eum repellat at, laboriosam vitae hic, eligendi aut.
							</p>
							<ul class="package-list">
								<li class="d-flex justify-content-between align-items-center">
									<span class="d-flex">
										<svg class="mr-1" xmlns="http://www.w3.org/2000/svg" width="30" height="30" preserveAspectRatio="xMidYMid meet" viewBox="0 0 30 30">
											<path fill="currentColor" d="M12 12q.825 0 1.413-.588Q14 10.825 14 10t-.587-1.413Q12.825 8 12 8q-.825 0-1.412.587Q10 9.175 10 10q0 .825.588 1.412Q11.175 12 12 12Zm0 10q-4.025-3.425-6.012-6.363Q4 12.7 4 10.2q0-3.75 2.413-5.975Q8.825 2 12 2t5.587 2.225Q20 6.45 20 10.2q0 2.5-1.987 5.437Q16.025 18.575 12 22Z" />
										</svg>
										<h6 class="d-flex mt-1 ">Kendari</h6>
									</span>
									<span>
										<a href="#" class="link-secondary">Selengkapnya</a>
									</span>
									<!-- <a href="#" class="price-btn">$250</a> -->
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="single-destinations">
						<div class="thumb">
							<img src="img/hotels/d6.jpg" alt="">
						</div>
						<div class="details">
							<h4 class="d-flex justify-content-between">
								<span>Hilton Star Hotel</span>
							</h4>
							<p>
								Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis autem asperiores cupiditate, neque vero atque odit laudantium sint magnam impedit fugiat corrupti eum repellat at, laboriosam vitae hic, eligendi aut.
							</p>
							<ul class="package-list">
								<li class="d-flex justify-content-between align-items-center">
									<span class="d-flex">
										<svg class="mr-1" xmlns="http://www.w3.org/2000/svg" width="30" height="30" preserveAspectRatio="xMidYMid meet" viewBox="0 0 30 30">
											<path fill="currentColor" d="M12 12q.825 0 1.413-.588Q14 10.825 14 10t-.587-1.413Q12.825 8 12 8q-.825 0-1.412.587Q10 9.175 10 10q0 .825.588 1.412Q11.175 12 12 12Zm0 10q-4.025-3.425-6.012-6.363Q4 12.7 4 10.2q0-3.75 2.413-5.975Q8.825 2 12 2t5.587 2.225Q20 6.45 20 10.2q0 2.5-1.987 5.437Q16.025 18.575 12 22Z" />
										</svg>
										<h6 class="d-flex mt-1 ">Muna</h6>
									</span>
									<span>
										<a href="#" class="link-secondary">Selengkapnya</a>
									</span>
									<!-- <a href="#" class="price-btn">$250</a> -->
								</li>
							</ul>
							<!-- <ul class="package-list">
									<li class="d-flex justify-content-between align-items-center">
										<span>Swimming pool</span>
										<span>Yes</span>
									</li>
									<li class="d-flex justify-content-between align-items-center">
										<span>Gymnesium</span>
										<span>No</span>
									</li>
									<li class="d-flex justify-content-between align-items-center">
										<span>Wi-fi</span>
										<span>Yes</span>
									</li>
									<li class="d-flex justify-content-between align-items-center">
										<span>Room Service</span>
										<span>No</span>
									</li>
									<li class="d-flex justify-content-between align-items-center">
										<span>Air Condition</span>
										<span>Yes</span>
									</li>
									<li class="d-flex justify-content-between align-items-center">
										<span>Restaurant</span>
										<span>Yes</span>
									</li>												
									<li class="d-flex justify-content-between align-items-center">
										<span>Price per night</span>
										<a href="#" class="price-btn">$250</a>
									</li>													
								</ul> -->
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="justify-content-center align-items-center text-center mt-5">
			<a href="wisata2.php">
				<button type="button" class="btn btn-dark" style="padding: 10px; margin: auto; border-radius: 25px; font-size: 22px;">Destinasi lainnya</button>
			</a>
		</div>
	</section>
	<!-- End destinations Area -->


	<!-- start footer Area -->
	<footer class="footer-area section-gap">
		<div class="container">

			<div class="row">
				<div class="col-lg-4  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>About Agency</h6>
						<p>
							The world has become so fast paced that people don’t want to stand by reading a page of information, they would much rather look at a presentation and understand the message. It has come to a point
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
	<!-- End footer Area -->

	<script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
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
	<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->

</body>

</html>