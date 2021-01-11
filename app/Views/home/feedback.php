<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Feedback Layanan 112 - Kota Malang</title>
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

  <!-- Buat Toast -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

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
          <li><a href="/home">Home</a></li>
          <li><a href="/home">About Us</a></li>
          <li><a href="/home">Berita</a></li>
          <li class="active"><a href="/home/feedback">Feedback</a></li>
          </li>
          <li><a href="/home">Contact Us</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->

  <section id="hero">
    <div class="container">
      <div class="row d-flex align-items-center">
      <div class=" col-lg-6 py-5 py-lg-0 order-2 order-lg-1" data-aos="fade-right">
        <h1>Feedback Layanan Panggilan Darurat 112</h1>
        <h2>Feedback yang anda berikan akan sangat berguna bagi kami, guna dalam memaksimalkan layanan Ngalam 112 serta menjadi bahan eveluasi bagi kami untuk terus meningkatkan kinerja layanan Ngalam 112 dan dapat banyak membantu masyarakat yang membutuhkan layanan ini.</h2>
        <a href="#contact" class="btn-get-started scrollto">Berikan Feedback</a>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left">
        <img src="<?= base_url()?>/template/assets/img/phone.png" class="img-fluid" alt="">
      </div>
    </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container">
        <div class="section-title">
          <h2 data-aos="fade-in">FEEDBACK</h2>
          <p data-aos="fade-in">Feedback yang anda berikan akan sangat berguna bagi kami, guna dalam memaksimalkan layanan Ngalam 112 serta menjadi bahan eveluasi bagi kami untuk terus meningkatkan kinerja layanan Ngalam 112 dan dapat banyak membantu masyarakat yang membutuhkan layanan ini.</p>
        </div>
        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="toast-header">
            <img src="..." class="rounded mr-2" alt="...">
            <strong class="mr-auto">Bootstrap</strong>
            <small>11 mins ago</small>
            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="toast-body">
            Hello, world! This is a toast message.
          </div>
        </div>
        <div class="row">       
          <form action="/feedback/addFeedback" method="post" data-aos="fade-up">
          <?= csrf_field(); ?>  
          <div class="row">
              <div class="col-md-6 form-group">
                  <p>Nama</p>
                <input type="text" name="nama_feedback" class="form-control" id="nama_feedback" placeholder="Nama"/>
                <div class="validate"></div>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                  <p>Alamat</p>
                <input type="text" class="form-control" name="alamat_feedback" id="alamat_feedback" placeholder="Alamat"/>
                <div class="validate"></div>
              </div>
            </div>
            <div class="form-group mt-3">
                <p>No.HP</p>
              <input type="text" class="form-control" name="noHp_feedback" id="noHp_feedback" placeholder="" />
              <div class="validate"></div>
            </div>
            <!-- <div class="form-group mt-3">
                <p>Tanggal</p>
              <input type="text" class="form-control" name="penyebab_feedback" id="penyebab_feedback" placeholder="" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validate"></div>
            </div> -->
            <!-- <div class="form-group mt-3">
                <p>Penyebab</p>
                <textarea class="form-control" name="penyebab_feedback" id="penyebab_feedback" rows="5"   placeholder="Penyebab"></textarea>
                <div class="validate"></div>
            </div> -->
            <div class="form-group mt-3">
              <p>Apa Benar Bapak/Ibu pernah Menghubungi Ngalam 112 ?</p>
              <div class="form-group">
                <input type="radio" name="q1_feedback" id="q1_feedback" value="iya"> Iya
                <!-- <input type="text" class="form-control" name="q1_feedback" id="q1_feedback" placeholder=""  /> -->
              </div>
              <div class="form-group">
                <input type="radio" name="q1_feedback" id="q1_feedback" value="tidak"> Tidak
              </div>
              <div class="validate"></div>
            </div>
            <div class="form-group mt-3">
                <p>Apakah Bapak merasa terbantu dengan adanya layanan Ngalam 112 ?</p>
              <div class="form-group">
                <input type="radio" name="q2_feedback" id="q2_feedback" value="iya"> Iya
              <!-- <input type="text" class="form-control" name="q2_feedback" id="q2_feedback" placeholder=""  /> -->
              </div>
              <div class="form-group">
                <input type="radio" name="q2_feedback" id="q2_feedback" value="tidak"> Tidak
              </div>
              <div class="validate"></div>
            </div>
            <div class="form-group mt-3">
                <p>Menurut Bapak/Ibu, Apakah Pelayanan Ngalam 112 dibutuhkan atau Tidak ?</p>
            <div class="form-group">
              <input type="radio" name="q3_feedback" id="q3_feedback" value="dibutuhkan"> Dibutuhkan
              <!-- <input type="text" class="form-control" name="q3_feedback" id="q3_feedback" placeholder="" /> -->
              </div>
              <div class="form-group">
                <input type="radio" name="q3_feedback" id="q3_feedback" value="tidak"> Tidak
              </div>
              <div class="validate"></div>
            </div>
            <div class="form-group mt-3">
                <p>Bagaimana Pendapat Bapak/Ibu tentang Pelayanan Ngalam 112 ?   Berikan Penilaian !</p>
              <!-- <input type="text" class="form-control" name="q4_feedback" id="q4_feedback" placeholder="" /> -->
              <div class="form-group">
                <input type="radio" name="q4_feedback" id="q4_feedback" value="Sangat Bagus"> Sangat Bagus
              </div>
              <div class="form-group">
                <input type="radio" name="q4_feedback" id="q4_feedback" value="Bagus"> Bagus
              </div>
              <div class="form-group">
                <input type="radio" name="q4_feedback" id="q4_feedback" value="Cukup"> Cukup
              </div>
              <div class="form-group">
                <input type="radio" name="q4_feedback" id="q4_feedback" value="Kurang"> Kurang
              </div>
              <div class="form-group">
                <input type="radio" name="q4_feedback" id="q4_feedback" value="Sangat Kurang"> Sangat Kurang
              </div>
              <div class="validate"></div>
            </div>
            <div class="form-group mt-3">
                <p>Apakah ada saran untuk layanan 112 ?</p>
                <textarea class="form-control" name="q5_feedback" id="q5_feedback" rows="5" placeholder="Saran"></textarea>
                <div class="validate"></div>
            </div>
            <br>
            <div class="text-center"><button type="submit" class="btn btn-primary">Send Message</button></div>
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