<?php

session_start();
if (!isset($_SESSION["login"])) {
    header("Location: masuk.php");
    exit;
}

require 'functions.php';

$datas = query("SELECT * FROM wisata WHERE kategori LIKE '%pegunungan%'");

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
                        <li><a href="index.php">Beranda</a></li>
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
    <section class="about-banner relative">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        Wisata Pegunungan
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
                        <h1 class="mb-10">Destinasi Pegunungan di Sulawesi Tenggara</h1>
                        <p>Destinasi pegunungan populer disetiap kabupaten yang ada di Sulawesi Tenggara</p>
                    </div>
                </div>
            </div>
            <?php

            $no = 1;
            foreach ($datas as $data) :

            ?>
                <div class="card mb-5">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="img/newpict/<?= $data['gambar']; ?>" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title justify-content-space-between"><?= $no; ?>. <?= $data['nama']; ?></h5>
                                <p class="card-text text-dark">Kategori : <?= $data['kategori']; ?></p>
                                <p class="card-text">Jam operasional : <?= $data['waktu_operasional']; ?></p>
                                <p class="card-text">Fasilitas : <?= $data['fasilitas']; ?></p>
                                <p class="card-text">No Telepon : <?= $data['no_telepon']; ?></p>
                                <p class="card-text">Tiket : <?= $data['tiket']; ?></p>
                                <!-- <div class="card-footer">
									<small class="text-muted">Lokasi : <?= $data['lokasi']; ?></small>
								</div> -->
                                <p class="card-text text-start"><small class="text-muted fs-2">Lokasi : <?= $data['lokasi']; ?></small></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
                $no++;
            endforeach;
            ?>
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
    <a href="#" class="scroll-to-top">
        <i><img src="img/arrow.png" alt="" width="30"></i>
    </a>
    <script src="js/script.js"></script>
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

</body>

</html>