<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Salon SHEE</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
  <meta property="og:title" content="">
  <meta property="og:image" content="">
  <meta property="og:url" content="">
  <meta property="og:site_name" content="">
  <meta property="og:description" content="">

  <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:image" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="css/footer.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div data-aos="fade-in">
        <div class="hero-logo">
          <img class="logo-m" src="assets/img/logo-pink.png" alt="Imperial">
        </div>

        <h1>Welcome To the Salon SHEE</h1>
        <h2>We Show Your <span class="typed" data-typed-items="slin, hair and body the care, attention deserve"></span></h2>
        <div class="actions">
          <a href="/login" class="btn-get-started">Booking Now</a>
          <a href="#services" class="btn-services">Our Services</a>
        </div>
      </div>
    </div>
  </section><!-- End Hero -->

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo mr-auto"><img src="" alt="">Salon SHEE</a>
      <!-- Uncomment below if you prefer to use a text logo -->
      <!-- <h1 class="logo mr-auto"><a href="index.html">Imperial</a></h1> -->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Gallery</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">Cetagories</a></li>
          <li><a class="nav-link scrollto" href="#testimonials">FeedBack</a></li>
          <li><a class="nav-link scrollto" href="#contact">Open Hour</a></li>
                    @if(auth()->check())
            <li><a class="nav-link scrollto" href="{{ route('auth.home') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Dash Board</a></li>

          @else
              <li><a class="nav-link scrollto" href="{{ route('login') }}">Sign In</a></li>
          @endif
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-md-12">
            <h1 class="section-title">About Us</h1>
            <div class="section-title-divider"></div>
            <p class="section-description"></p>
          </div>
        </div>
      </div>
      <div class="container about-container" data-aos="fade-up" data-aos-delay="200">
        <div class="row">

          <div class="col-lg-6 about-img ">
            <img src="assets/img/Gallery/gallery1.jpg" alt="" width="500" height="600">
          </div>

          <div class="col-md-6 about-content">
            <h2 class="about-title">Beauty as a Gift</h2>
            <p class="about-text">
              "At Salon SHEE, our mission is to provide exceptional beauty services to our valued customers.
              With a deep-rooted commitment to excellence, we strive to exceed your expectations with every visit.
              Our team of skilled professionals is dedicated to delivering personalized treatments tailored to your unique needs and preferences.
              We take great pride in our craft, viewing each service as an opportunity to showcase our expertise and passion for beauty."
            </p>
            <p class="about-text">
              "As a result, we promise to consistently deliver high-quality results, leaving you feeling confident and rejuvenated.
                Our goal is to create a welcoming and inclusive environment where every guest feels valued and appreciated.
                With a focus on continuous improvement, we are dedicated to staying at the forefront of industry trends and innovations.
                Come experience the Salon SHEE difference, where beauty is not just a service but an art form.  Enjoy your life with our high-quality beauty services."
            </p>
          </div>
        </div>
      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services">
      <div class="container">
        <div class="row" data-aos="fade-up">
          <div class="col-md-12">
            <h3 class="section-title">Our Gallery</h3>
            <div class="section-title-divider"></div>
            <p class="section-description"></p>
          </div>
        </div>

        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col-md-4">
              <div class="card">
                <img src="assets/img/Gallery/gallery1.jpg" class="card-img-top" alt="..." width="900" height="500">
              </div>
            </div>

            <div class="col-md-4">
              <div class="card">
                <img src="assets/img/Gallery/gallery3.jpg" class="card-img-top" alt="..." width="900" height="500">
              </div>
            </div>

            <div class="col-md-4">
              <div class="card">
                <img src="assets/img/Gallery/gallery2.jpg" class="card-img-top" alt="..." width="900" height="500">
              </div>
            </div>

          </div>
      </div>
    </section><!-- End Services Section -->

    <!-- ======= Subscrbe Section ======= -->
    <section id="subscribe">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-md-8">
            <h3 class="subscribe-title">Subscribe For Updates</h3>
            <p class="subscribe-text">Join our 1000+ subscribers and get access to the latest tools, freebies, product announcements and much more!</p>
          </div>
          <div class="col-md-4 subscribe-btn-container">
            <a class="subscribe-btn" href="#">Subscribe Now</a>
          </div>
        </div>
      </div>
    </section><!-- End Subscrbe Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-md-12">
            <h3 class="section-title">Our Categories</h3>
            <div class="section-title-divider"></div>
            <p class="section-description"></p>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-Skin">Skin Care</li>
              <li data-filter=".filter-Hair">Hair Care</li>
              <li data-filter=".filter-Nail">Nail Care</li>
              <li data-filter=".filter-Makeup">Makeup</li>
              <li data-filter=".filter-Pedicure">Pedicure</li>
              <li data-filter=".filter-Specialty">Specialty Care</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">
<!--Filter Skin-->
          <div class="col-lg-4 col-md-6 portfolio-item filter-Skin">
            <img src="assets/img/img_style/makeup/1.jpeg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Skin Test</h4>
              <p>skin</p>
              <a href="assets/img/img_style/makeup/1.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Skin Treatment"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bi bi-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-Skin">
            <img src="assets/img/img_style/makeup/2.jpeg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Skin Test</h4>
              <p>skin</p>
              <a href="assets/img/img_style/makeup/2.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Skin Treatment"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bi bi-link"></i></a>
            </div>
          </div>
<!--Filter Hair-->
        <div class="col-lg-4 col-md-6 portfolio-item filter-Hair">
            <img src="assets/img/img_style/hair/1.jpeg" class="img-fluid" alt="">
            <div class="portfolio-info">
            <h4>Hair Test</h4>
            <p>hair</p>
            <a href="assets/img/img_style/hair/1.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bi bi-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bi bi-link"></i></a>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-Hair">
            <img src="assets/img/img_style/hair/2.jpeg" class="img-fluid" alt="">
            <div class="portfolio-info">
            <h4>Hair Test</h4>
            <p>hair</p>
            <a href="assets/img/img_style/hair/2.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bi bi-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bi bi-link"></i></a>
            </div>
        </div>
<!--Filter Nail-->
        <div class="col-lg-4 col-md-6 portfolio-item filter-Nail">
            <img src="assets/img/img_style/foot/1.jpeg" class="img-fluid" alt="">
            <div class="portfolio-info">
            <h4>Nail Test</h4>
            <p>nail</p>
            <a href="assets/img/img_style/foot/1.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bi bi-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bi bi-link"></i></a>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-Nail">
            <img src="assets/img/img_style/foot/2.jpeg" class="img-fluid" alt="">
            <div class="portfolio-info">
            <h4>Nail Test</h4>
            <p>nail</p>
            <a href="assets/img/img_style/foot/2.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bi bi-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bi bi-link"></i></a>
            </div>
        </div>
<!--Filter Makeup-->
        <div class="col-lg-4 col-md-6 portfolio-item filter-Makeup">
            <img src="assets/img/Gallery/saloon/makeup.jpeg" class="img-fluid" alt="">
            <div class="portfolio-info">
            <h4>MakeUp Test</h4>
            <p>makeup</p>
            <a href="assets/img/Gallery/saloon/makeup.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bi bi-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bi bi-link"></i></a>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-Makeup">
            <img src="assets/img/Gallery/saloon/th.jpeg" class="img-fluid" alt="">
            <div class="portfolio-info">
            <h4>MakeUp Test</h4>
            <p>makeup</p>
            <a href="assets/img/Gallery/saloon/th.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bi bi-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bi bi-link"></i></a>
            </div>
        </div>
<!--Filter Pedicure-->
        <div class="col-lg-4 col-md-6 portfolio-item filter-Pedicure">
            <img src="assets/img/nails.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
            <h4>Pedicure Test</h4>
            <p>pedicure</p>
            <a href="assets/img/skin1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bi bi-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bi bi-link"></i></a>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-Pedicure">
            <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
            <h4>Pedicure Test</h4>
            <p>pedicure</p>
            <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bi bi-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bi bi-link"></i></a>
            </div>
        </div>
<!--Filter Specialty-->
        <div class="col-lg-4 col-md-6 portfolio-item filter-Specialty">
            <img src="assets/img/nails.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
            <h4>App 1</h4>
            <p>App</p>
            <a href="assets/img/skin1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bi bi-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bi bi-link"></i></a>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-Specialty">
            <img src="assets/img/img_style/makeup/.jpeg" class="img-fluid" alt="">
            <div class="portfolio-info">
            <h4>Web 3</h4>
            <p>Web</p>
            <a href="assets/img/img_style/makeup/.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bi bi-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bi bi-link"></i></a>
            </div>
        </div>

        </div>
      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-md-12">
            <h3 class="section-title">FeedBacks</h3>
            <div class="section-title-divider"></div>
            <p class="section-description"></p>
          </div>
        </div>

        <div class="row">
          <div class="col-md-3">
            <div class="profile">
              <div class="pic"><img src="assets/img/client-1.jpg" alt=""></div>
              <h4>Saul Goodman</h4>
              <span>Lawless Inc</span>
            </div>
          </div>
          <div class="col-md-9">
            <div class="quote">
              <b><img src="assets/img/quote_sign_left.png" alt=""></b> Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper. <small><img src="assets/img/quote_sign_right.png" alt=""></small>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-9">
            <div class="quote">
              <b><img src="assets/img/quote_sign_left.png" alt=""></b> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis architecto beatae. <small><img src="assets/img/quote_sign_right.png" alt=""></small>
            </div>
          </div>
          <div class="col-md-3">
            <div class="profile">
              <div class="pic"><img src="assets/img/client-2.jpg" alt=""></div>
              <h4>Sara Wilsson</h4>
              <span>Odeo Inc</span>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Team Section ======= -->
    <section id="team">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-md-12">
            <h3 class="section-title">Our Services</h3>
            <div class="section-title-divider"></div>
            <p class="section-description"></p>
          </div>
        </div>

        <!--div class="row">
          <div class="col-md-3">
            <div class="member">
              <div class="pic"><img src="assets/img/service/1.jpeg" alt=""></div>
              <h4>Makeup Treatment</h4>
              <span>We have good Makeup Artists</span>
            </div>
          </div-->

          <div class="card-group">
            <div class="card">
              <img src="assets/img/service/1.jpeg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Makeup</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <h4 class="card-text"><small class="text-body-secondary"><strong style="color: rgba(16, 15, 15, 0.852);">Rs:4000.00</strong></small></h4>
                <a href="/login" class="btn btn-primary">BOOK NOW</a>
              </div>
            </div>
            <div class="card">
              <img src="assets/img/service/2.jpeg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Hair Care</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <h4 class="card-text"><small class="text-body-secondary"><strong style="color: rgba(16, 15, 15, 0.852);">Rs:4000.00</strong></small></h4>
                <a href="/login" class="btn btn-primary">BOOK NOW</a>
              </div>
            </div>
            <div class="card">
              <img src="assets/img/service/6.jpeg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Skin Care</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even  to show that equal height action.</p>
                <h4 class="card-text"><small class="text-body-secondary"><strong style="color: rgba(16, 15, 15, 0.852);">Rs:4000.00</strong></small></h4>
                <a href="/login" class="btn btn-primary">BOOK NOW</a>
              </div>
            </div>
            <div class="card">
                <img src="assets/img/service/7.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Nail Care</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even to show that equal height action.</p>
                  <h4 class="card-text"><small class="text-body-secondary"><strong style="color: rgba(16, 15, 15, 0.852);">Rs:4000.00</strong></small></h4>
                  <a href="/login" class="btn btn-primary">BOOK NOW</a>
                </div>
              </div>
          </div>





        </div>
      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->

    <!-- ======= Subscrbe Section ======= -->
    <section id="subscribe">

        <div>
            <p>
            <iframe loading="" style="border: 0;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3932.8886750624806!2d80.02093391433982!3d9.690541993063746!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3afe546ce6bca987%3A0x7b7d6a748e0d2cc9!2sPhysical+Education+Unit%2C+University+of+Jaffna!5e0!3m2!1sen!2slk!4v1498819193724" width="100%" height="100%" frameborder="0" allowfullscreen="">
            </iframe>
            </p>
        </div>

    </section><!-- End Subscrbe Section -->

    <section id="contact">
      <div class="container" data-aos="fade-up">
    <div class="row justify-content-center">

        <div class="col-lg-5 col-md-8">
        <div class="container">
        <div class="form text-center">
            <h4 class="section-title display-5 mb-1 font" >Opening Hours</h4>
            <div class="section-title-divider"></div>
            <br>
            <div class="d-flex justify-content-between fs-8 text-black">
                <p>Monday:</p>
                <p>8:00 am – 7:00 pm</p>
            </div>
            <div class="d-flex justify-content-between fs-8 text-black">
                <p>Tuesday:</p>
                <p>8:00 am – 7:00 pm</p>
            </div>
            <div class="d-flex justify-content-between fs-8 text-black">
                <p>Wednesday:</p>
                <p>8:00 am – 7:00 pm</p>
            </div>
            <div class="d-flex justify-content-between fs-8 text-black ">
                <p>Thursday:</p>
                <p>8:00 am – 7:00 pm</p>
            </div>
            <div class="d-flex justify-content-between fs-8 text-black ">
                <p>Friday:</p>
                <p>8:00 am – 7:00 pm</p>
            </div>
            <div class="d-flex justify-content-between fs-8 text-black">
                <p>Saturday:</p>
                <p>8:00 am – 8:00 pm</p>
            </div>
            <div class="d-flex justify-content-between fs-8 text-black">
                <p>Sunday:</p>
                <p>8:00 am – 5:00 pm</p>
            </div>
        </div>
</div>

            </div>
          </div>

        </div>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <!--footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="copyright">
            &copy; Copyright <strong>Salon SHEE</strong>. All Rights Reserved
          </div>
          <div class="credits">
            <div>
                <h4 class="mb-4 text-white">Follow Us</h4>
                <p class="mb-0"><i class="fas fa-envelope text-secondary me-2"></i> dilanjaliranasingha76@gmail.com</p>
                <a href=""><i class="fas fa-angle-right me-2"></i> Faceboock</a>
                <a href=""><i class="fas fa-angle-right me-2"></i> Instagram</a>
                <a href=""><i class="fas fa-angle-right me-2"></i> Whatsapp</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer-->
  <!-- End Footer -->
  @extends('layouts.footer')

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="js/footer.js"></script>

</body>

</html>
