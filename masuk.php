<?php

require "functions.php";

if (isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
	$id = $_COOKIE['id'];
	$key = $_COOKIE['key'];

	// ambil username berdasarkan id
	$query = "SELECT username FROM user WHERE id = $id";
	$result = mysqli_query($koneksi, $query);
	$row = mysqli_fetch_assoc($result);

	//cek cookie dan username
	if ($key === hash('sha256', $row['username'])) {
		$_SESSION['login'] = true;
	}
}


if (isset($_SESSION['login'])) {
	header('Location: index.php');
	exit;
}

if (isset($_POST['login'])) {

	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$query = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
	$result = mysqli_query($koneksi, $query);

	if (mysqli_num_rows($result) === 1) {
		$row = mysqli_fetch_assoc($result);
		session_start();
		$_SESSION['id'] = $row['id'];
		$_SESSION['email'] = $row['email'];
		$_SESSION['username'] = $row['username'];
		$_SESSION['login'] = true;
		if (isset($_POST['remember'])) {
			//buat cookie
			setcookie('id', $row['id'], time() + 60);
			setcookie('key', hash('sha256', $row['username']), time() + 60);
			// setcookie('login','true',time() + 60);
		}
		header("Location: index.php");
		exit;
	} else {
		header('location:masuk.php?pesan=Username salah!');
	}

	// $email = $_POST['email'];
	// $password = $_POST['password'];

	// $query = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
	// $result = mysqli_query($koneksi, $query);
	// var_dump(mysqli_num_rows($result));
	// die;

	// if (mysqli_num_rows($result) == 1) {
	// 	$row = mysqli_fetch_assoc($result);
	// 	if (password_verify($password, $row["password"])) {
	// 		$_SESSION['login'] = true;
	// 		header("Location: index.php");
	// 		exit;
	// 	} else {
	// 		header('location:masuk.php?pesan=Password salah!');
	// 	}
	// } else {
	// 	header('location:masuk.php?pesan=Username salah!');
	// }
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
					<h2 class="text-center text-white mt-10 mb-30">Silahkan Login!</h2>
					<?php
					if (isset($_GET['pesan'])) {
					?>
						<div class="alert alert-warning alert-dismissible fade show text-danger" role="alert">
							<strong class="text-danger" style="font-weight: 900;">Maaf, Login Gagal !</strong> <?php echo $_GET['pesan']; ?>
							<!-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> -->
						</div>
					<?php
					}
					?>
					<form action="" method="POST" style="z-index: 1; " class="text-white">
						<div class="mb-3">
							<label for="email" class="form-label">Alamat email</label>
							<input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Masukan email" required>
						</div>
						<div class="mb-3">
							<label for="password" class="form-label">Password</label>
							<input type="password" class="form-control" name="password" id="password" placeholder="Masukan password" required>
						</div>
						<div class="mb-3 form-check">
							<input type="checkbox" class="form-check-input" id="remember" name="remember">
							<label class="form-check-label" for="remember">Remember me</label>
						</div>
						<button type="submit" class="btn btn-warning mt-3" name="login">Masuk</button>
						<div class="mb-3 mt-3">
							<a style="color: #0dcaf0; font-weight: bold;" href="registrasi.php">Belum punya akun? Daftar</a>
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