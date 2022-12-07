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
    <title>Tentang</title>

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
                    <a href="index.php"><img style="width: 100px; height: 50px;" src="img/AnoaLand3.png" alt=""
                            title="" /></a>
                </div>
                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                        <li><a href="index.php">Beranda</a></li>
                        <li><a href="wisata.php">Wisata</a></li>
                        <li><a href="about.php" class="active text-warning">Tentang</a></li>
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
                        Tentang
                    </h1>
                    <p class="text-white link-nav"><a href="index.php">Beranda </a> <span
                            class="lnr lnr-arrow-right"></span> <a href="about.php"> Tentang</a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->

    <!-- Start about-info Area -->
    <section class="about-info-area section-gap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 info-left">
                    <img class="img-fluid" src="img/newpict/Anoa_warna.png" alt="">
                </div>
                <div class="col-lg-6 info-right">
                    <h6>Tentang</h6>
                    <h1>Anoa Land</h1>
                    <p>
                        Keindahan objek wisata, kekayaan sejarah dan budaya, serta kelezatan kuliner menjadikan Sulawesi
                        Tenggara ini selalu dirindukan siapapun yang pernah berkunjung. Tidak hanya itu, keramahan
                        penduduk lokal serta budaya yang masih terjaga hingga kini membuat pelancong mengakui
                        warm-hearted experience yang akan selalu dirindukan sehingga membuat pengunjung ingin selalu
                        kembali. Nikmati perjalanan tak terlupakan anda dengan mengeksplor setiap sudut wisata di
                        sulawesi tenggara. Di Anoa Land anda bisa menemukan berbagai informasi mengenai destinasi wisata
                        di Sulawesi Tenggara.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End about-info Area -->
    <!-- Start map-info Area -->
    <section class="contact-page-area section-gap">
        <div class="container">
            <div class="text-center mb-4">
                <h1>Provinsi Sulawesi Tenggara</h1>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6 info-left">
                    <div class="map text-center">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4073091.2101302496!2d117.97581189015267!3d-4.479988140186201!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d98ecde0b6b7183%3A0x621d7c439f04a4ed!2sSulawesi%20Tenggara!5e0!3m2!1sid!2sid!4v1670379911247!5m2!1sid!2sid"
                            width="550" height="400" style="border:0;" allowfullscreen=""
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-lg-6 info-right">
                    <div class="mb-4">
                        <h4>Geografi Sulawesi Tenggara</h4>
                    </div>
                    <p>
                        Sulawesi Tenggara (disingkat Sultra) adalah sebuah provinsi di Indonesia yang terletak bagian
                        tenggara pulau Sulawesi dengan ibu kota Kendari. Provinsi Sulawesi Tenggara terletak di Jazirah
                        Tenggara Pulau Sulawesi, secara geografis terletak di bagian selatan garis khatulistiwa di
                        antara 02°45' – 06°15' Lintang Selatan dan 120°45' – 124°30' Bujur Timur serta mempunyai wilayah
                        daratan seluas 38.140 km² (3.814.000 ha) dan perairan (laut) seluas 110.000 km² (11.000.000 ha).
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End map-info Area -->

    <!-- Start Galerry Area -->
    <section class="recent-blog-area section-gap">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-60 col-lg-9">
                    <div class="title text-center">
                        <h1 class="mb-10">Galeri Wisata Sulawesi Tenggara</h1>
                        <p>Temukan Tempat Indah yang Tersembunyi di Sulawesi Tenggara</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="active-recent-blog-carusel">
                    <div class="single-recent-blog-post item">
                        <div class="thumb">
                            <img class="img-fluid" src="img/newpict/bahari.jpg" alt="">
                        </div>
                    </div>
                    <div class="single-recent-blog-post item">
                        <div class="thumb">
                            <img class="img-fluid" src="img/newpict/toronipa.jpg" alt="">
                        </div>
                    </div>
                    <div class="single-recent-blog-post item">
                        <div class="thumb">
                            <img class="img-fluid" src="img/newpict/bokori.jpg" alt="">
                        </div>
                    </div>
                    <div class="single-recent-blog-post item">
                        <div class="thumb">
                            <img class="img-fluid" src="img/newpict/ahuawali.jpg" alt="">
                        </div>
                    </div>
                    <div class="single-recent-blog-post item">
                        <div class="thumb">
                            <img class="img-fluid" src="img/newpict/labengki.jpg" alt="">
                        </div>

                    </div>
                    <div class="single-recent-blog-post item">
                        <div class="thumb">
                            <img class="img-fluid" src="img/newpict/napabale.jpg" alt="">
                        </div>

                    </div>
                    <div class="single-recent-blog-post item">
                        <div class="thumb">
                            <img class="img-fluid" src="img/newpict/kotaeono.jpeg" alt="">
                        </div>
                    </div>
                    <div class="single-recent-blog-post item">
                        <div class="thumb">
                            <img class="img-fluid" src="img/newpict/toronipa.jpg" alt="">
                        </div>
                    </div>
                    <div class="single-recent-blog-post item">
                        <div class="thumb">
                            <img class="img-fluid" src="img/newpict/napabale.jpg" alt="">
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End recent-galerry Area -->

    <!-- Start other-issue Area -->
    <section class="other-issue-area section-gap">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-70 col-lg-9">
                    <div class="title text-center">
                        <h1 class="mb-10">Berbagai Jenis Wisata Sulawesi Tenggara</h1>
                        <p>Temukan Berbagai Jenis Wisata di Sulawesi Tenggara dan Nikmati Keindahan Wisata Sesuai
                            Keinginan Anda</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single-other-issue">
                        <div class="thumb">
                            <img class="img-fluid" src="img/newpict/toronipa.jpg" alt="">
                        </div>
                        <a href="#">
                            <h4>Pantai</h4>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-other-issue">
                        <div class="thumb">
                            <img class="img-fluid" src="img/newpict/ahuawali.jpg" alt="">
                        </div>
                        <a href="#">
                            <h4>Pegunungan</h4>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-other-issue">
                        <div class="thumb">
                            <img class="img-fluid" src="img/newpict/museum.jpg" alt="">
                        </div>
                        <a href="#">
                            <h4>Budaya</h4>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-other-issue">
                        <div class="thumb">
                            <img class="img-fluid" src="img/newpict/bahari1.jpg" alt="">
                        </div>
                        <a href="#">
                            <h4>Bahari</h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End other-issue Area -->


    <!-- Start testimonial Area -->
    <section class="testimonial-area section-gap">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-70 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Ulasan Pengguna</h1>
                        <p>Kirimkan feedback anda untuk pengembangan yang lebih baik </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="active-testimonial">
                    <div class="single-testimonial item d-flex flex-row">
                        <div class="thumb">
                            <img class="img-fluid" src="img/elements/user1.png" alt="">
                        </div>
                        <div class="desc">
                            <p>
                                Do you want to be even more successful? Learn to love learning and growth. The more
                                effort you put into improving your skills, the bigger the payoff you.
                            </p>
                            <h4>Tegar</h4>
                            <div class="star">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                            </div>
                        </div>
                    </div>
                    <div class="single-testimonial item d-flex flex-row">
                        <div class="thumb">
                            <img class="img-fluid" src="img/elements/user2.png" alt="">
                        </div>
                        <div class="desc">
                            <p>
                                A purpose is the eternal condition for success. Every former smoker can tell you just
                                how hard it is to stop smoking cigarettes. However.
                            </p>
                            <h4>Sarman</h4>
                            <div class="star">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                        </div>
                    </div>
                    <div class="single-testimonial item d-flex flex-row">
                        <div class="thumb">
                            <img class="img-fluid" src="img/elements/user1.png" alt="">
                        </div>
                        <div class="desc">
                            <p>
                                Do you want to be even more successful? Learn to love learning and growth. The more
                                effort you put into improving your skills, the bigger the payoff you.
                            </p>
                            <h4>Hadijah</h4>
                            <div class="star">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                            </div>
                        </div>
                    </div>
                    <div class="single-testimonial item d-flex flex-row">
                        <div class="thumb">
                            <img class="img-fluid" src="img/elements/user2.png" alt="">
                        </div>
                        <div class="desc">
                            <p>
                                A purpose is the eternal condition for success. Every former smoker can tell you just
                                how hard it is to stop smoking cigarettes. However.
                            </p>
                            <h4>Saputra</h4>
                            <div class="star">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                        </div>
                    </div>
                    <div class="single-testimonial item d-flex flex-row">
                        <div class="thumb">
                            <img class="img-fluid" src="img/elements/user1.png" alt="">
                        </div>
                        <div class="desc">
                            <p>
                                Do you want to be even more successful? Learn to love learning and growth. The more
                                effort you put into improving your skills, the bigger the payoff you.
                            </p>
                            <h4>Nisa</h4>
                            <div class="star">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                            </div>
                        </div>
                    </div>
                    <div class="single-testimonial item d-flex flex-row">
                        <div class="thumb">
                            <img class="img-fluid" src="img/elements/user2.png" alt="">
                        </div>
                        <div class="desc">
                            <p>
                                A purpose is the eternal condition for success. Every former smoker can tell you just
                                how hard it is to stop smoking cigarettes. However.
                            </p>
                            <h4>Chisara</h4>
                            <div class="star">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End testimonial Area -->

    <!-- start footer Area -->
    <footer class="footer-area section-gap">
        <div class="container">

            <div class="row">
                <div class="col-lg-4  col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6>About Agency</h6>
                        <p>
                            The world has become so fast paced that people don’t want to stand by reading a page of
                            information, they would much rather look at a presentation and understand the message. It
                            has come to a point
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

