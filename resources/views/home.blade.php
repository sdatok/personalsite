 @extends('layouts.app')

 @section('section')

 <!-- ======= Hero Section ======= -->
 <div id="hero" class="home">

     <div class="container">
         <div class="hero-content">
             <h1> <span class="typed" data-typed-items="Hi I'm Sonam Datok, I Like to Code, I study software engineering at ryerson university, i made this website with php and laravel, my pet frog's name is guts, I also love to paint, I took this photo in 2016"></span></h1>
             <p>Student, Developer, Painter</p>

             <ul class="list-unstyled list-social">
                 <li><a href="https://www.facebook.com/sdatok"target="_blank"><i class="bi bi-facebook"></i></a></li>
                 <li><a href="https://twitter.com/sonayuum"target="_blank"><i class="bi bi-twitter"></i></a></li>
                 <li><a href="https://www.instagram.com/sonam.xxi/"target="_blank"><i class="bi bi-instagram"></i></a></li>
                 <li><a href="https://www.linkedin.com/in/sonam-datok/"target="_blank"><i class="bi bi-linkedin"></i></a></li>
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
                             <span>HACK-A-THONS</span>
                             <p class="separator">Participated in RU Hacks, UOttawa Designathon, and third place winner of the 2020 Ryerson Engineering Competition </p>
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
                             <span>SKILLS</span>
                             <p class="separator">Experience coding in Java, CSS, PHP, Node.js, Unix, C, Pug.js, SQL, Python, and R. Familiar with software such as; AutoCAD, Photoshop, and Microsoft Office </p>
                         </div>
                     </div><!-- End testimonial item -->

                     <div class="swiper-slide">
                         <div class="services-block">
                             <i class="bi bi-calendar4-week"></i>
                             <span>INVESTING</span>
                             <p class="separator">Completed thorough due diligence and created successful portfolios on medicinal psychedelic stocks and companies involved in a generational short squeeze</p>
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
                         <li data-filter=".filter-build">Build</li>
                         <li data-filter=".filter-web">Web</li>
                     </ul>
                 </div>
             </div>

             <div class="row portfolio-container">

                 <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                     <img src="assets/img/portfolio/stempowering.jpg" class="img-fluid" alt="">
                     <div class="portfolio-info">
                         <h4>Front-end & Back-end</h4>
                         <p>Web</p>
                         <a href="assets/img/portfolio/stempowering.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="STEM Powering is a not-for-profit youth organization supported by STEM-educated volunteers who would like to inspire and empower youth by sharing their knowledge and skills."><i class="bx bx-plus"></i></a>
                         <a href="https://www.stempowering.ca/" target="_blank" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                     </div>
                 </div>

                 <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                     <img src="assets/img/portfolio/coinsavr.jpg" class="img-fluid" alt="">
                     <div class="portfolio-info">
                         <h4>UI/UX & A/B Testing</h4>
                         <p>App</p>
                         <a href="assets/img/portfolio/coinsavr.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="CoinSavr is an escrow transfer service that holds funds internally within our servers. The BTC transaction is only processed once both parties are satisfied with the transaction."><i class="bx bx-plus"></i></a>
                         <a href="https://www.coinsavr.com/" target="_blank" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                     </div>
                 </div>

                 <div class="col-lg-4 col-md-6 portfolio-item filter-build">
                     <img src="assets/img/portfolio/tesladash.jpg" class="img-fluid" alt="">
                     <div class="portfolio-info">
                         <h4>Design</h4>
                         <p>Build</p>
                         <a href="assets/img/portfolio/tesladash.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Designed a model dashboard on AutoCAD for an autonomous vehicle to include a stow-able steering wheel and touch-screen dashboard controls"><i class="bx bx-plus"></i></a>
                         <a href="portfolio-details.html" class="details-link" title="More Details"></i></a>
                     </div>
                 </div>

                 <div class="col-lg-4 col-md-6 portfolio-item filter-build">
                     <img src="assets/img/portfolio/pc.jpg" class="img-fluid" alt="">
                     <div class="portfolio-info">
                         <h4>PC Specs</h4>
                         <p>Build</p>
                         <a href="assets/img/portfolio/pc.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Ryzen 5 3600, GeForce RTX 2060 SUPER"><i class="bx bx-plus"></i></a>
                         <a href="portfolio-details.html" class="details-link" title="More Details"></i></a>
                     </div>
                 </div>


                 <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                     <img src="assets/img/portfolio/ieee.jpg" class="img-fluid" alt="">
                     <div class="portfolio-info">
                         <h4>IEEE</h4>
                         <p>Web</p>
                         <a href="assets/img/portfolio/ieee.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Ryerson IEEE Computer Society software fundementals series certification in PHP, SQL, Git, and Unix"><i class="bx bx-plus"></i></a>
                         <a href="https://ieeeryerson.com/" target="_blank" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                     </div>
                 </div>
<!--
                 <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                     <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
                     <div class="portfolio-info">
                         <h4>App 3</h4>
                         <p>App</p>
                         <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
                         <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                     </div>
                 </div>
-->

             </div>

         </div>

     </div><!-- End Portfolio Section -->

     <!-- ======= Journal Section ======= -->
     <div id="journal" class="text-left paddsection">
<!--
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

-->

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
                                 <li><span>Toronto, ON</span></li>
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
