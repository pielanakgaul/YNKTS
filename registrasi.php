<?php

require 'functions.php';

if (isset($_POST["registrasi"])) {
	if (registrasi($_POST) > 0) {
		echo "<script>
				alert('User berhasil ditambahkan!');
				window.location.href='masuk.php';
			</script>";
	} else {
		echo mysqli_error($koneksi);
	}
}

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
	<title>Masuk</title>

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
	<!-- <header id="header">
		<div class="container main-menu">
			<div class="row align-items-center justify-content-between d-flex">
				<div id="logo">
					<a href="index.php"><img style="width: 100px; height: 50px;" src="img/AnoaLand3.png" alt="" title="" /></a>
				</div>
			</div>
		</div>

	</header>#header -->

	<!-- start banner Area -->
	<section class="banner-area relative">
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row fullscreen align-items-center justify-content-center">
				<div class="col-lg-4 col-md-4 banner-left ">
					<h2 class="text-center text-white mt-20 mb-30">Buat akun!</h2>
					<form action="" method="POST" style="z-index: 1; " class="text-white">
						<div class="mb-1">
							<label for="email" class="form-label">Email address</label>
							<input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Masukan email" required>
						</div>
						<div class="mb-1">
							<label for="username" class="form-label">Username</label>
							<input type="text" class="form-control" name="username" id="username" placeholder="Masukan username" required>
						</div>
						<div class="mb-1">
							<label for="no_telp" class="form-label">Nomor Telepon</label>
							<input type="text" class="form-control" name="no_telp" id="no_telp" placeholder="Masukan nomor telepon" required>
						</div>
						<div class="mb-1">
							<label for="kota" class="form-label">Kota</label>
							<input type="text" class="form-control" name="kota" id="kota" placeholder="Masukan asal kota" required>
						</div>
						<div class="mb-1">
							<label for="negara" class="form-label">Negara</label>
							<input type="text" class="form-control" name="negara" id="negara" placeholder="Masukan asal negara" required>
						</div>
						<div class="mb-1">
							<label for="password" class="form-label">Password</label>
							<input type="password" class="form-control" name="password" id="password" placeholder="Masukan passsword" required>
						</div>
						<div class="mb-1">
							<label for="konfirmasi-password" class="form-label">Konfirmasi Password</label>
							<input type="password" class="form-control" name="kpassword" id="konfirmasi-password" placeholder="Konfirmasi passsword">
						</div>
						<button type="submit" class="btn btn-warning mt-3" name="registrasi">Register</button>
						<div class="mb-1 mt-3">
							<a style="color: #0dcaf0; font-weight: bold;" href="masuk.php">Sudah punya akun? Masuk</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->

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
									<li><a href="contact.php">Kontak Kami</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- <div class="col-lg-4  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Newsletter</h6>
								<p>
									For business professionals caught between high OEM price and mediocre print and graphic output.									
								</p>								
								<div id="mc_embed_signup">
									<form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscription relative">
										<div class="input-group d-flex flex-row">
											<input name="EMAIL" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">
											<button class="btn bb-btn"><span class="lnr lnr-location"></span></button>		
										</div>									
										<div class="mt-10 info"></div>
									</form>
								</div>
							</div>
						</div> -->
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