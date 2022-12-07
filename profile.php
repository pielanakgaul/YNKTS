<?php

session_start();
if (!isset($_SESSION["login"]) OR !isset($_SESSION["username"])) {
	header("Location: masuk.php");
	exit;
}

require 'functions.php';

// $email=$_SESSION['email'];
// $id = $_SESSION['id'];
// $datas = query("SELECT * FROM user WHERE id = $id");

// $query = ("SELECT * FROM user WHERE id = '$id'");
// $result = mysqli_query($koneksi, $query);
// while ($row = mysqli_fetch_array($result)) {

if(isset($_POST["update"])){


	if(update($_POST) > 0){
		echo "
			<script>
				alert('Berhasil Update Data'); 
				window.location.href = 'index.php';
			</script>
		";
	}else{
		echo "
			<script>
				alert('Gagal Update Data');
				window.location.href = 'profile.php';
			</script>
		";
	}

}

// ?>

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
	<title>Profile</title>

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
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/arrow.css">
</head>

<body>
	<header id="header">
		<div class="container main-menu" style="background-color: rgba(34, 34, 34, 0.9);">
			<div class="row align-items-center justify-content-between d-flex">
				<div id="logo">
					<a href="index.php"><img style="width: 100px; height: 50px;" src="img/AnoaLand3.png" alt="" title="" /></a>
				</div>
				<nav id="nav-menu-container">
					<ul class="nav-menu">
						<li><a href="index.php">Beranda</a></li>
						<li><a href="wisata.php">Wisata</a></li>
						<li><a href="about.php">Tentang</a></li>
						<li><a href="contact.php">Kontak</a></li>
						<?php
						if (!isset($_SESSION['login'])) {
							echo "<li> <a href='masuk.php'>Masuk</a> </li>";
						}
						if (isset($_SESSION['login'])) {
							echo "<li> <a href='profile.php' class='active text-warning'>Profile</a> </li>
								<li> <a href='logout.php'>Keluar</a> </li>";
						}
						?>
					</ul>
				</nav><!-- #nav-menu-container -->
			</div>
		</div>
	</header><!-- #header -->

	<!-- Start blog Area -->
	<section class="recent-blog-area section-gap">
		<?php

		$username = $_SESSION["username"];
		$datas = query("SELECT * FROM user WHERE username = '$username'");
		// var_dump($username);
		// $query = "SELECT * FROM user WHERE username = '$username'";
		// $result = mysqli_query($koneksi, $query);
		// while ($data = mysqli_fetch_assoc($result)) {
		foreach ($datas as $data) :
			// var_dump($data);
		?>
		<form action="" method="POST">
			<!-- <input type="hidden" name="id" value="<?= $data['id'];?>"> -->
			<div class="container">
				<div class="row gutters">
					<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
						<div class="card h-100">
							<div class="card-body">
								<div class="account-settings">
									<div class="user-profile">
										<div class="user-avatar">
											<img src="img/<?= $data["gambar"];?>" alt="Maxwell Admin">
										</div>
										<h5 class="user-name"><?= $data["username"];?></h5>
										<h6 class="user-email" style="text-transform: lowercase;"><?= $data["email"];?></h6>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
						<div class="card h-100">
							<div class="card-body">
								<div class="row gutters">
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
										<h6 class="mb-2 text-warning">Detail Profil</h6>
									</div>
									<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
										<div class="form-group">
											<label for="fullName">Username</label>
											<input type="text" class="form-control" name="username" id="fullName" value="<?= $data['username']; ?>">
										</div>
									</div>
									<div class=" col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
										<div class="form-group">
											<label for="eMail">Email</label>
											<input type="email" class="form-control" name="email" id="eMail" value="<?= $data['email']; ?>" readonly>
										</div>
									</div>
									<div class=" col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
										<div class="form-group">
											<label for="phone">Nomor Telepon</label>
											<input type="text" class="form-control" id="phone" name="notlpn" value="<?= $data['no_telp']; ?>">
										</div>
									</div>
								</div>
								<div class=" row gutters">
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
										<h6 class="mt-3 mb-2 text-warning">Alamat</h6>
									</div>
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
										<div class="form-group">
											<label for="Street">Negara</label>
											<input type="name" class="form-control" id="Street" name="negara" value="<?= $data['negara']; ?>">
										</div>
									</div>
									<div class=" col-xl-12 col-lg-12 col-md-12 col-sm-12">
										<div class="form-group">
											<label for="ciTy">Kota</label>
											<input type="name" class="form-control" id="ciTy" name="kota" value="<?= $data['kota']; ?>">
										</div>
									</div>
								</div>
								<div class=" row gutters">
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
										<div class="text-left">
											<span class="d-none d-sm-block text-warning" style="font-weight: bold;">Upload Foto Baru</span>
											<input type="file" id="gambar" name="gambar" class="account-file-input" accept="image/png, image/jpeg, image/jpg"/>
										</div>
										<div class="text-right">
											<!-- <button type="button" id="cancel" name="cancel" class="btn btn-secondary">Cancel</button> -->
											<button type="submit" id="update" name="update" class="btn btn-primary">Update</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
		<?php
		endforeach;
		// }
		?>
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