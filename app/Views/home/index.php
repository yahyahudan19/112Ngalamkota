<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Layanan 112 - Kota Malang</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url()?>/template/assets/img/ngalam.png" rel="icon">
  <link href="<?= base_url()?>/template/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url()?>/template/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url()?>/template/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="<?= base_url()?>/template/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= base_url()?>/template/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?= base_url()?>/template/assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="<?= base_url()?>/template/assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url()?>/template/assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <!-- <h1 class="text-light"><a href="index.html">LAYANAN 112<span>.</span></a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="/home"><img src="<?= base_url()?>/template/assets/img/diskominfo.png" alt="" class="img-fluid"></a>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="/home">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#services">Berita</a></li>
          <li><a href="/home/feedback">Feedback</a></li>
          <!-- <li class="drop-down"><a href="">Drop Down</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="drop-down"><a href="#">Drop Down 2</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li>
            </ul> -->
          </li>
          <li><a href="#contact">Contact Us</a></li>

          <!-- <li class="get-started"><a href="#about">Get Started</a></li> -->
          <li class="get-started"><a href="/auth">Log-In</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">

    <div class="container">
      <div class="row d-flex align-items-center">
      <div class=" col-lg-6 py-5 py-lg-0 order-2 order-lg-1" data-aos="fade-right">
        <h1>Portal Layanan Panggilan Darurat 112</h1>
        <h2>Layanan ini untuk melayani warga dalam situasi darurat pada kabupaten/kota yang telah memiliki layanan panggilan darurat 112. Program ini merupakan inisiatif Kemenkominfo untuk menyediakan panggilan darurat yang bebas pulsa.</h2>
        <a href="#about" class="btn-get-started scrollto">Get Started</a>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left">
        <img src="<?= base_url()?>/template/assets/img/phone.png" class="img-fluid" alt="">
      </div>
    </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
      <div class="container">

        <div class="row no-gutters clients-wrap clearfix wow fadeInUp">

          <div class="col-lg-3 col-md-5 col-7 mx-auto d-block">
            <div class="client-logo-ngalam">
              <img src="<?= base_url()?>/template/assets/img/ngalam.png" class="img-fluid" alt="" data-aos="flip-right">
            </div>
          </div>

          <div class="col-lg-2 col-md-4 col-6 mx-auto d-block">
            <div class="client-logo">
              <img src="<?= base_url()?>/template/assets/img/diskominfo.png" class="img-fluid" alt="" data-aos="flip-right" data-aos-delay="100">
            </div>
          </div>

          <div class="col-lg-2 col-md-4 col-6 mx-auto d-block">
            <div class="client-logo-kominfo">
              <img src="<?= base_url()?>/template/assets/img/kominfo.png" class="img-fluid" alt="" data-aos="flip-right" data-aos-delay="100">
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Clients Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
      <div class="container">
        <div class="row">
          <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start"></div>
          <div class="col-xl-7 pl-0 pl-lg-5 pr-lg-1 d-flex align-items-stretch">
            <div class="content d-flex flex-column justify-content-center">
              <h3 data-aos="fade-in" data-aos-delay="100">Tentang Layanan Panggilan Darurat 112</h3>
              <p data-aos="fade-in">
              Progam Layanan Nomor Panggilan Darurat 112 (Call Center 112) diawali sejak Tahun 2015 dengan dilakukan Kajian Teknis berupa Desain dan Topologi Jaringan serta dilakukan Probity Audit oleh BPKP dengan hasil bahwa diperlukan nomor darurat khusus yang mudah diingat dan dapat dipanggil oleh masyarakat ketika mengalami semua jenis kejadian darurat. 
              </p>
              <br>
              <p data-aos="fade-in">
                Layanan ini untuk melayani warga dalam situasi darurat pada kabupaten/kota yang telah memiliki layanan panggilan darurat 112. Program ini merupakan inisiatif Kemenkominfo untuk menyediakan panggilan darurat yang bebas pulsa.    
                Progam Layanan Nomor Panggilan Darurat 112 (Call Center 112) diawali sejak Tahun 2015 dengan dilakukan Kajian Teknis berupa Desain dan Topologi Jaringan serta dilakukan Probity Audit oleh BPKP dengan hasil bahwa diperlukan nomor darurat khusus yang mudah diingat dan dapat dipanggil oleh masyarakat ketika mengalami semua jenis kejadian darurat. 
              </p>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-in">BERITA 112 KOTA MALANG</h2>
          <p data-aos="fade-in">Berita Seputar Layanan 112 Kota Malang.</p>
        </div>

        <div class="row">
          <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-right">
            <div class="card">
              <div class="card-img">
                <img src="<?= base_url()?>/template/assets/img/news/kepo112.jpg" alt="..." height="400px" width="900px">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="https://www.malangtimes.com/baca/51657/20200422/170600/kepo-informasi-covid-19-warga-kota-malang-bisa-hubungi-layanan-panggilan-darurat-112">Kepo Informasi Covid-19, Warga Kota Malang Bisa Hubungi Layanan Panggilan Darurat 112</a></h5>
                <p class="card-text"><b>MALANGTIMES</b> - Antisipasi persebaran informasi kegawatdaruratan covid-19, Pemerintah Kota Malang luncurkan layanan panggilan darurat. Layanan tersebut diberikan sebagai bentuk hasil kerja sama Pemerintah Kota Malang dengan pihak kepolisian dan jajaran samping.</p>
                <div class="read-more"><a href="https://www.malangtimes.com/baca/51657/20200422/170600/kepo-informasi-covid-19-warga-kota-malang-bisa-hubungi-layanan-panggilan-darurat-112"><i class="icofont-arrow-right"></i> Read More</a></div>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-left">
            <div class="card">
              <div class="card-img">
                <img src="<?= base_url()?>/template/assets/img/news/kepo112.jpg" alt="..." height="400px" width="900px">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="https://malangvoice.com/kejadian-gawat-darurat-masyarakat-kota-malang-cukup-telepon-112/">Kejadian Gawat Darurat, Masyarakat Kota Malang Cukup Telepon 112</a></h5>
                <p class="card-text"> <b>MALANGVOICE</b> Selangkah lagi Kota Malang miliki layanan khusus gawat darurat. Masyarakat cukup akses atau menelepon ke nomor 112. Sebagai langkah awal, Pemkot Malang menggelar sosialisasi dan penandatanganan perjanjian kerjasama dengan instansi terkait tentang Layanan Panggilan Darurat 112 Kota Malang di Ngalam Command Center (NCC) kompleks Balai Kota Malang, Rabu (22/4).</p>
                <div class="read-more"><a href="https://malangvoice.com/kejadian-gawat-darurat-masyarakat-kota-malang-cukup-telepon-112/"><i class="icofont-arrow-right"></i> Read More</a></div>
              </div>
            </div>
          </div>
      </div>
    </section><!-- End Services Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features section-bg">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-in">Fitur Layanan 112</h2>
          <p data-aos="fade-in">Fitur yang dimiliki ole Layanan 112 Kota Malang ini mencakup beberapa hal yang bersifat mendesak dan genting.</p>
        </div>

        <div class="row content">
          <div class="col-md-5" data-aos="fade-right">
            <img src="<?= base_url()?>/template/assets/img/callcenter.svg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-4" data-aos="fade-left">
            <h3>Layanan 112 Selama 24/7.</h3>
            <p class="font-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <ul>
              <li><i class="icofont-check"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              <li><i class="icofont-check"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
            </ul>
          </div>
        </div>

        <div class="row content">
          <div class="col-md-5 order-1 order-md-2" data-aos="fade-left">
            <img src="<?= base_url()?>/template/assets/img/gratisimg.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5 order-2 order-md-1" data-aos="fade-right">
            <h3>Layanan 112 Bebas Pulsa</h3>
            <p class="font-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum
            </p>
          </div>
        </div>

        <div class="row content">
          <div class="col-md-5" data-aos="fade-right">
            <img src="<?= base_url()?>/template/assets/img/fast.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5" data-aos="fade-left">
            <h3>Layanan 112 Cepat Tanggap</h3>
            <p>Cupiditate placeat cupiditate placeat est ipsam culpa. Delectus quia minima quod. Sunt saepe odit aut quia voluptatem hic voluptas dolor doloremque.</p>
            <ul>
              <li><i class="icofont-check"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              <li><i class="icofont-check"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
              <li><i class="icofont-check"></i> Facilis ut et voluptatem aperiam. Autem soluta ad fugiat.</li>
            </ul>
          </div>
        </div>

        <div class="row content">
          <div class="col-md-5 order-1 order-md-2" data-aos="fade-left">
            <img src="<?= base_url()?>/template/assets/img/info.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5 order-2 order-md-1" data-aos="fade-right">
            <h3>Layanan 112 Sumber Informasi</h3>
            <p class="font-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum
            </p>
          </div>
        </div>

      </div>
    </section><!-- End Features Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-in">Contact</h2>
          <p data-aos="fade-in">Masih bingung dengan layanan 112 ? yuk bisa langsung hubungi 112 atau bisa langsung contact kami dan kunjungi call center kami .</p>
        </div>

        <div class="row">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box" data-aos="fade-up">
                  <i class="bx bx-map"></i>
                  <h3>Our Address</h3>
                  <p>Balaikota Malang, Jl. Tugu No.1, Kiduldalem, Kec. Klojen, Kota Malang, Jawa Timur 65119</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Us</h3>
                  <p>info@example.com<br>contact@example.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Us</h3>
                  <p>112<br>112</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6 mt-4 mt-lg-0">
            <form action="<?= base_url()?>/template/forms/contact.php" method="post" role="form" class="php-email-form w-100" data-aos="fade-up">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">

      <div class="container" data-aos="fade-up">

        <div class="row  justify-content-center">
          <div class="col-lg-6">
            <h3>Layanan 112 - Kota Malang</h3>
            <p>Ngalam Command Center.</p>
          </div>
        </div>

        <div class="row footer-newsletter justify-content-center">
          <div class="col-lg-6">
            <form action="" method="post">
              <input type="email" name="email" placeholder="Enter your Email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>

        <div class="social-links">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>

      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Layanan 112 - Kota Malang</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bocor-bootstrap-template-nice-animation/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><img src="<?= base_url()?>/template/assets/img/favicon.png" alt=""></a>
  <!-- <a href="#" class="back-to-top"><i class="icofont-chat"></i></a> -->

  <!-- Vendor JS Files -->
  <script src="<?= base_url()?>/template/assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url()?>/template/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url()?>/template/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="<?= base_url()?>/template/assets/vendor/php-email-form/validate.js"></script>
  <script src="<?= base_url()?>/template/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?= base_url()?>/template/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="<?= base_url()?>/template/assets/vendor/venobox/venobox.min.js"></script>
  <script src="<?= base_url()?>/template/assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url()?>/template/assets/js/main.js"></script>

</body>

</html>