<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title> Sonam Datok </title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i|Playfair+Display:400,400i,500,500i,600,600i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Folio - v4.6.0
  * Template URL: https://bootstrapmade.com/folio-bootstrap-portfolio-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo"><img src="assets/img/SDpurplogo.jpg" alt="" class="img-fluid"></a>
            <!-- Uncomment below if you prefer to use an text logo -->
            <!-- <h1 class="logo"><a href="index.html">Folio</a></h1> -->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link  scrollto" href="#portfolio">Portfolio</a></li>
                    <li><a class="nav-link  scrollto" href="#journal">Art</a></li>
                    <!--
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          -->
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>

    </header><!-- End Header -->

    @yield('section')


    <!-- ======= Footer ======= -->
    <div id="footer" class="text-center">
        <div class="container">
            <div class="socials-media text-center">

                <ul class="list-unstyled">
                    <li><a href="https://www.facebook.com/sdatok" target="_blank"><i class="bi bi-facebook"></i></a></li>
                    <li><a href="https://twitter.com/sonayuum" target="_blank"><i class="bi bi-twitter"></i></a></li>
                    <li><a href="https://www.instagram.com/sonam.xxi/" target="_blank"><i class="bi bi-instagram"></i></a></li>
                    <li><a href="https://www.linkedin.com/in/sonam-datok/" target="_blank"><i class="bi bi-linkedin"></i></a></li>
                </ul>

            </div>

            <p>&copy; - SONAM DATOK -</p>



        </div>
    </div><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    @yield('script')

</body>

</html>
