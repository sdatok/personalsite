 @extends('layouts.app')

 @section('section')

 <!-- ======= Hero Section ======= -->
 <div id="hero" class="home">

     <div class="container">
         <div class="hero-content">
             <h1> <span class="typed" data-typed-items="Hi I'm Sonam Datok, I Like to Code, I study software engineering at ryerson university, i made this website with php and laravel, my pet frog's name is guts, I also love to paint, I took this photo in 2016"></span></h1>
             <p>Student, Developer, Painter</p>

             <ul class="list-unstyled list-social">
                 <li><a href="#"><i class="bi bi-facebook"></i></a></li>
                 <li><a href="#"><i class="bi bi-twitter"></i></a></li>
                 <li><a href="#"><i class="bi bi-instagram"></i></a></li>
                 <li><a href="#"><i class="bi bi-linkedin"></i></a></li>
             </ul>
         </div>
     </div>
 </div><!-- End Hero -->

 <main id="main">

     <!-- ======= About Section ======= -->
     <div id="about" class="paddsection">
         <div class="container">
             <div class="row justify-content-between">

                 <div class="col-lg-4 ">
                     <div class="div-img-bg">
                         <div class="about-img">
                             <img src="assets/img/me.jpg" class="img-responsive" alt="me">
                         </div>
                     </div>
                 </div>

                 <div class="col-lg-7">
                     <div class="about-descr">

                         <p class="p-heading">Software Engineering student with various experiences in Data Analysis techniques and Software Development projects in User Interface and User Experience.
                         </p>
                         <p class="separator">I also enjoy learning about data science & crypto, and how AI can be used to create new ways to analyze it. Also a big fan of beautiful art. Recently
                             went to see Picasso at the AGO. Truly a spectical to delve into the mind of a lonely, yet brilliantly avant-garde man.</p>

                     </div>

                 </div>
             </div>
         </div>
     </div><!-- End About Section -->

     <!-- ======= Services Section ======= -->
     <div id="services">
         <div class="container">

             <div class="services-slider swiper" data-aos="fade-up" data-aos-delay="100">
                 <div class="swiper-wrapper">

                     <div class="swiper-slide">
                         <div class="services-block">
                             <i class="bi bi-briefcase"></i>
                             <span>UI/UX DESIGN</span>
                             <p class="separator">Designed Bitcoin escrow transfer service User Interface in PHP and
                                 CSS by processing user specific information and functionality</p>
                         </div>
                     </div><!-- End testimonial item -->

                     <div class="swiper-slide">
                         <div class="services-block">
                             <i class="bi bi-card-checklist"></i>
                             <span>BRAND IDENTITY</span>
                             <p class="separator">To an English person, it will seem like simplified English,told me what </p>
                         </div>
                     </div><!-- End testimonial item -->

                     <div class="swiper-slide">
                         <div class="services-block">
                             <i class="bi bi-bar-chart"></i>
                             <span>WEB DEVELOPMENT</span>
                             <p class="separator">As the Vice-president of IT, developed front-end and back-end for the Ryerson Data Science Association (RDSA.ca)</p>
                         </div>
                     </div><!-- End testimonial item -->

                     <div class="swiper-slide">
                         <div class="services-block">
                             <i class="bi bi-binoculars"></i>
                             <span>PROGRAM MANAGER</span>
                             <p class="separator">Organizing and hosting daily meetings with STEM Leaders and
                                 teaching science through weekly workshops with students
                             </p>
                         </div>
                     </div><!-- End testimonial item -->

                     <div class="swiper-slide">
                         <div class="services-block">
                             <i class="bi bi-brightness-high"></i>
                             <span>Analytics</span>
                             <p class="separator">To an English person, it will seem like simplified English,told me what </p>
                         </div>
                     </div><!-- End testimonial item -->

                     <div class="swiper-slide">
                         <div class="services-block">
                             <i class="bi bi-calendar4-week"></i>
                             <span>PHOTOGRAPHY</span>
                             <p class="separator">To an English person, it will seem like simplified English,told me what </p>
                         </div>
                     </div><!-- End testimonial item -->

                 </div>
                 <div class="swiper-pagination"></div>
             </div>

         </div>

     </div><!-- End Services Section -->

     <!-- ======= Portfolio Section ======= -->
     <div id="portfolio" class="paddsection">

         <div class="container">
             <div class="section-title text-center">
                 <h2>My Portfolio</h2>
             </div>
         </div>

         <div class="container">

             <div class="row">
                 <div class="col-lg-12 d-flex justify-content-center">
                     <ul id="portfolio-flters">
                         <li data-filter="*" class="filter-active">All</li>
                         <li data-filter=".filter-app">App</li>
                         <li data-filter=".filter-card">Card</li>
                         <li data-filter=".filter-web">Web</li>
                     </ul>
                 </div>
             </div>

             <div class="row portfolio-container">

                 <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                     <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
                     <div class="portfolio-info">
                         <h4>App 1</h4>
                         <p>App</p>
                         <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
                         <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                     </div>
                 </div>

                 <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                     <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
                     <div class="portfolio-info">
                         <h4>Web 3</h4>
                         <p>Web</p>
                         <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                         <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                     </div>
                 </div>

                 <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                     <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
                     <div class="portfolio-info">
                         <h4>App 2</h4>
                         <p>App</p>
                         <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
                         <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                     </div>
                 </div>

                 <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                     <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
                     <div class="portfolio-info">
                         <h4>Card 2</h4>
                         <p>Card</p>
                         <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
                         <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                     </div>
                 </div>

                 <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                     <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
                     <div class="portfolio-info">
                         <h4>Web 2</h4>
                         <p>Web</p>
                         <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
                         <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                     </div>
                 </div>

                 <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                     <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
                     <div class="portfolio-info">
                         <h4>App 3</h4>
                         <p>App</p>
                         <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
                         <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                     </div>
                 </div>

             </div>

         </div>

     </div><!-- End Portfolio Section -->

     <!-- ======= Journal Section ======= -->
     <div id="journal" class="text-left paddsection">

         <div class="container">
             <div class="section-title text-center">
                 <h2>journal</h2>
             </div>
         </div>

         <div class="container">
             <div class="journal-block">
                 <div class="row">

                     <div class="col-lg-4 col-md-6">
                         <div class="journal-info">

                             <a href="blog-single.html"><img src="assets/img/blog-post-1.jpg" class="img-responsive" alt="img"></a>

                             <div class="journal-txt">

                                 <h4><a href="blog-single.html">SO LETS MAKE THE MOST IS BEAUTIFUL</a></h4>
                                 <p class="separator">To an English person, it will seem like simplified English
                                 </p>

                             </div>

                         </div>
                     </div>

                     <div class="col-lg-4 col-md-6">
                         <div class="journal-info">

                             <a href="blog-single.html"><img src="assets/img/blog-post-2.jpg" class="img-responsive" alt="img"></a>

                             <div class="journal-txt">

                                 <h4><a href="blog-single.html">WE'RE GONA MAKE DREAMS COMES</a></h4>
                                 <p class="separator">To an English person, it will seem like simplified English
                                 </p>

                             </div>

                         </div>
                     </div>

                     <div class="col-lg-4 col-md-6">
                         <div class="journal-info">

                             <a href="blog-single.html"><img src="assets/img/blog-post-3.jpg" class="img-responsive" alt="img"></a>

                             <div class="journal-txt">

                                 <h4><a href="blog-single.html">NEW LIFE CIVILIZATIONS TO BOLDLY</a></h4>
                                 <p class="separator">To an English person, it will seem like simplified English
                                 </p>

                             </div>

                         </div>
                     </div>

                 </div>
             </div>
         </div>

     </div><!-- End Journal Section -->

     <!-- ======= Contact Section ======= -->
     <div id="contact" class="paddsection">
         <div class="container">
             <div class="contact-block1">
                 <div class="row">

                     <div class="col-lg-6">
                         <div class="contact-contact">

                             <h2 class="mb-30">GET IN TOUCH</h2>

                             <ul class="contact-details">
                                 <li><span>71 Burlington st</span></li>
                                 <li><span>Toronto, Canada</span></li>
                                 <li><span>(647) 760 5507</span></li>
                                 <li><span>datoksonam@gmail.com</span></li>
                             </ul>

                         </div>
                     </div>

                     <div class="col-lg-6">
                         <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                             <div class="row gy-3">

                                 <div class="col-lg-6">
                                     <div class="form-group contact-block1">
                                         <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                                     </div>
                                 </div>

                                 <div class="col-lg-6">
                                     <div class="form-group">
                                         <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                                     </div>
                                 </div>

                                 <div class="col-lg-12">
                                     <div class="form-group">
                                         <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                                     </div>
                                 </div>

                                 <div class="col-lg-12">
                                     <div class="form-group">
                                         <textarea class="form-control" name="message" placeholder="Message" required></textarea>
                                     </div>
                                 </div>

                                 <div class="col-lg-12">
                                     <div class="loading">Loading</div>
                                     <div class="error-message"></div>
                                     <div class="sent-message">Your message has been sent. Thank you!</div>
                                 </div>

                                 <div class="mt-0">
                                     <input type="submit" class="btn btn-defeault btn-send" value="Send message">
                                 </div>

                             </div>
                         </form>
                     </div>
                 </div>
             </div>
         </div>
     </div><!-- End Contact Section -->

 </main><!-- End #main -->
 @endsection

 @section('script')
 <!-- Vendor JS Files -->
 <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
 <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
 <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
 <script src="assets/vendor/php-email-form/validate.js"></script>
 <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
 <script src="assets/vendor/typed.js/typed.min.js"></script>

 <!-- Template Main JS File -->
 <script src="assets/js/main.js"></script>


 @endsection
