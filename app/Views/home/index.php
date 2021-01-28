<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Layanan Ngalam 112 - Kota Malang</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Premium Bootstrap 4 Landing Page Template" />
    <meta name="keywords" content="bootstrap 4, premium, marketing, multipurpose" />
    <meta content="Themesbrand" name="author" />
    <!-- favicon -->
    <link rel="shortcut icon" href="<?= base_url() ?>/templatepage/images/ngalam.png" />

    <!-- css -->
    <link href="<?= base_url() ?>/templatepage/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>/templatepage/css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>/templatepage/css/style.min.css" rel="stylesheet" type="text/css" />
</head>

<body data-spy="scroll" data-target="#navbar" data-offset="20">
    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
    </div>

    <!--Navbar Start-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="navbar">
        <div class="container">
            <!-- LOGO -->
            <a class="navbar-brand logo" href="<?= base_url() ?>/home">
                <img src="<?= base_url() ?>/templatepage/images/diskominfo.png" alt="" class="logo-dark" height="28" />
                <img src="<?= base_url() ?>/templatepage/images/logo-light.png" alt="" class="logo-light" height="28" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <i class="" data-feather="menu"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ms-auto navbar-center" id="navbar-navlist">
                    <li class="nav-item">
                        <a href="#home" class="nav-link active">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#services" class="nav-link">Layanan</a>
                    </li>
                    <li class="nav-item">
                        <a href="#features" class="nav-link">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a href="/home/feedback" class="nav-link">Feedback</a>
                    </li>
                    <!--<li class="nav-item">
                        <a href="#team" class="nav-link">Team</a>
                    </li> -->
                    <li class="nav-item">
                        <a href="#pengumuman" class="nav-link">Pengumuman</a>
                    </li>
                    <li class="nav-item">
                        <a href="#contact" class="nav-link">Kontak Kami</a>
                    </li>
                </ul>
                <a href="/auth" class="btn btn-sm rounded-pill nav-btn ms-lg-3">Log In</a>
            </div>
        </div>
        <!-- end container -->
    </nav>
    <!-- Navbar End -->

    <!-- Hero Start -->
    <section class="hero-6 bg-center position-relative overflow-hidden" style="background-image: url(<?= base_url() ?>/templatepage/images/hero-6-bg.png);" id="home">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <i class="mb-4 icon-lg sw-1_5 text-primary" data-feather="sunrise"></i>
                    <h1 class="font-weight-semibold mb-4 hero-6-title">Layanan Panggilan Darurat
                        <b>Ngalam 112 - Kota Malang</b>
                    </h1>
                    <p class="mb-5 text-muted">Ngalam 112 merupakan layanan panggilan darurat yang didukung oleh Perangkat Daerah dan Instansi terkait di lingkungan 
                    Pemkot Malang yang siap merespon masyarakat Kota Malang dalam meminta bantuan saat terjadi keadaan darurat.</p>
                    <a href="#services" class="btn btn-primary me-2">Get Started <i class="icon-sm ms-1" data-feather="arrow-right"></i></a>
                </div>
                <div class="col-lg-6 col-sm-10 mx-auto ms-lg-auto me-lg-0">
                    <div class="mt-lg-0 mt-5">
                        <img src="<?= base_url() ?>/templatepage/images/phone.png" alt="" class="img-xl-responsive" height="600px" width="670px" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero End -->

    <!-- Services start -->
    <section class="section" id="services">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-7 text-center">
                    <h2 class="fw-bold">Layanan 112</h2>
                    <p class="text-muted">Layanan 112 hanya khusus untuk kejadian darurat saja ya, 
                    laporan palsu atau telepon iseng akan dikenakan sanksi sesuai peraturan yang berlaku.</p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <div class="service-box text-center px-4 py-5 position-relative mb-4">
                        <div class="service-box-content p-4">
                            <div class="icon-mono service-icon avatar-md mx-auto mb-4">
                                <i class="" data-feather="box"></i>
                            </div>
                            <h4 class="mb-3 font-size-22">Bebas Pulsa</h4>
                            <p class="text-muted mb-0">Layanan 112 Dapat Diakses Dengan Bebas Pulsa Untuk Semua Operator.</p>
                        </div>
                    </div>
                </div>
                <!-- end col -->

                <div class="col-lg-4">
                    <div class="service-box text-center px-4 py-5 position-relative mb-4 active">
                        <div class="service-box-content p-4">
                            <div class="icon-mono service-icon avatar-md mx-auto mb-4">
                                <i class="" data-feather="layers"></i>
                            </div>
                            <h4 class="mb-3 font-size-22">Respon Cepat</h4>
                            <p class="text-muted mb-0">Layanan 112 Merespon Dengan Cepat Dalam Meminta Bantuan Saat Terjadi Keadaan Darurat.</p>
                        </div>
                    </div>
                </div>
                <!-- end col -->

                <div class="col-lg-4">
                    <div class="service-box text-center px-4 py-5 position-relative mb-4">
                        <div class="service-box-content p-4">
                            <div class="icon-mono service-icon avatar-md mx-auto mb-4">
                                <i class="" data-feather="server"></i>
                            </div>
                            <h4 class="mb-3 font-size-22">Layanan 24 Jam</h4>
                            <p class="text-muted mb-0">Layanan 112 Dapat Digunakan Kapan Saja Dan Dimana Saja Selama 24 Jam.</p>
                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->

    </section>
    <!-- Services end -->

    <!-- Features start -->
    <section class="section bg-light" id="features">
        <div class="container">
            <div class="row justify-content-center mb-0">
                <div class="col-lg-7 text-center">
                    <h2 class="fw-bold">Berita - Seputar Ngalam 112 </h2>
                    <p class="text-muted">Berita Update Terkini</p>
                </div>
            </div>
            <!-- end row -->
            <?php foreach ($news as $idx => $val) : ?>
                <?php
                if ($idx % 2 == 0) {
                ?>
                    <!-- atas -->
                    <div class="row align-items-center section pb-5">
                        <div class="col-md-6">
                            <div class="position-relative mb-md-0 mb-5">
                                <div class="me-5 features-img">
                                    <img src="<?= base_url() ?>/uploads/<?= $val['dokumentasi_news'] ?>" alt="" class="img-fluid d-block mx-auto rounded shadow" style="object-fit:cover;height: 320px;width: 600px;" />
                                </div>
                                <img src="<?= base_url() ?>/templatepage/images/dot-img.png" alt="" class="dot-img-right" />
                            </div>
                        </div>
                        <div class="col-md-5 order-2 order-md-1 mt-md-0 mt-5">
                            <span class="badge badge-soft-primary"><?= $val['tagline_news']; ?></span>
                            <h6 class="font-size-15 my-2"><?= $val['date_news']; ?></h6>
                            <h2 class="font-size-20 my-2"><?= $val['judul_news']; ?></h2>
                            <p class="text-muted mb-5"><?= $val['isi_news'] ?>.</p>
                            <a href="javascript: void(0);" class="btn btn-primary">Find out more <i class="icon-xs ms-2" data-feather="arrow-right"></i></a>
                        </div>
                    </div>
                <?php
                } else {
                ?>
                    <div class="row align-items-center section pb-5">
                        <div class="col-md-5 order-2 order-md-1 mt-md-0 mt-5">
                            <span class="badge badge-soft-primary"><?= $val['tagline_news']; ?></span>
                            <h6 class="font-size-15 my-2"><?= $val['date_news']; ?></h6>
                            <h2 class="font-size-20 my-2"><?= $val['judul_news']; ?></h2>
                            <p class="text-muted mb-5"><?= $val['isi_news'] ?>.</p>
                            <a href="javascript: void(0);" class="btn btn-primary">Find out more <i class="icon-xs ms-2" data-feather="arrow-right"></i></a>
                        </div>
                        <div class="col-md-6 ms-md-auto order-1 order-md-2">
                            <div class="position-relative">
                                <div class="ms-5 features-img">
                                    <img src="<?= base_url() ?>/uploads/<?= $val['dokumentasi_news'] ?>" alt="" class="img-fluid d-block mx-auto rounded shadow" style="object-fit:cover;height: 320px;width: 600px;;" />
                                </div>
                                <img src="<?= base_url() ?>/templatepage/images/dot-img.png" alt="" class="dot-img-left" />
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>

            <?php endforeach; ?>

            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- Features end -->
    <!-- Cta end -->
    <!-- Blog start -->
    <section class="section" id="pengumuman">
        <div class="container">
            <div class="row justify-content-center mb-4">
                <div class="col-lg-7 text-center">
                    <h2 class="fw-bold">Pengumuman</h2>
                    <p class="text-muted">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                        doloremque laudantium totam rem ab illo inventore.</p>
                </div>
            </div>
            <div class="row">
                <?php
                foreach ($pengumuman as $data) {
                ?>
                    <div class="col-lg-4">
                        <div class="card mt-4 border-0 shadow">
                            <div class="card-body p-4">
                                <span class="badge badge-soft-primary"><?= $data['tagline_pengumuman'] ?></span>
                                <h6 class="font-size-15 my-2"><a href="javascript: void(0);"><?= $data['date_pengumuman'] ?></a></h6>
                                <h4 class="font-size-20 my-2"><a href="javascript: void(0);"><?= $data['judul_pengumuman'] ?></a></h4>
                                <p class="text-muted"><?= $data['isi_pengumuman'] ?></p>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- Blog end -->

    <!-- Contact us start -->
    <section class="section" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="fw-bold mb-3">Contact Us</h2>
                    <p class="text-muted mb-5">Ada masalah dengan Layanan Ngalam 112 ? langsung saja hubungi kami :).</p>
                    <p class="text-muted mt-5 mb-3"><i class="me-2 text-muted icon icon-xs" data-feather="mail"></i>
                        nccngalam112@gmail.com</p>
                    <p class="text-muted mb-3"><i class="me-2 text-muted icon icon-xs" data-feather="phone"></i>
                        0341-3013186</p>
                    <p class="text-muted mb-3"><i class="me-2 text-muted icon icon-xs" data-feather="map-pin"></i>
                        Balaikota Malang, Jl. Tugu No.1, Kiduldalem, Kec. Klojen, Kota Malang, Jawa Timur 65119</p>
                    <ul class="list-inline pt-4">
                        <!-- <li class="list-inline-item me-3">
                                <a href="javascript: void(0);" class="social-icon icon-mono avatar-xs rounded-circle"><i
                                        class="icon-xs" data-feather="facebook"></i></a>
                            </li> -->
                        <li class="list-inline-item me-3">
                            <a href="https://layanan112.kominfo.go.id" class="social-icon icon-mono avatar-xs rounded-circle"><i class="icon-xs" data-feather="globe"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://instagram.com/ngalam112?igshid=lzg9efkue24i" class="social-icon icon-mono avatar-xs rounded-circle"><i class="icon-xs" data-feather="instagram"></i></a>
                        </li>
                    </ul>
                </div>
                <!-- end col -->
                <div class="col-lg-5 ms-lg-auto">
                    <div class="mt-5 mt-lg-0">
                        <img src="<?= base_url() ?>/templatepage/images/contact.png" alt="" class="img-fluid d-block" />
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- Contact us end -->

    <!-- Footer Start -->
    <footer class="footer" style="background-image: url(<?= base_url() ?>/templatepage/images/footer-bg.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="mb-4">
                        <a href="index-1.html"><img src="<?= base_url() ?>/templatepage/images/diskominfo.png" alt="" class="" height="30" /></a>
                        <p class="text-white-50 my-4">Layanan ini untuk melayani warga dalam situasi darurat pada kabupaten/kota yang telah memiliki layanan panggilan darurat 112. 
                        Program ini merupakan inisiatif Kemenkominfo untuk menyediakan panggilan darurat yang bebas pulsa.</p>
                    </div>
                </div>
                <!-- end col -->

                <div class="col-lg-7 ms-lg-auto">
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <div class="mt-4 mt-lg-0">
                                <h4 class="text-white font-size-18 mb-3">Social Media</h4>
                                <ul class="list-unstyled footer-sub-menu">
                                    <li><a href="https://www.instagram.com/ngalam112/" class="footer-link">Instagram</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="mt-4 mt-lg-0">
                                <h4 class="text-white font-size-18 mb-3">Berita Ngalam 112</h4>
                                <ul class="list-unstyled footer-sub-menu">
                                    <li><a href="javascript: void(0);" class="footer-link">Trending</a></li>
                                    <li><a href="javascript: void(0);" class="footer-link">Popular</a></li>
                                    <li><a href="javascript: void(0);" class="footer-link">Customers</a></li>
                                    <li><a href="javascript: void(0);" class="footer-link">Features</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- <div class="col-lg-3 col-6">
                            <div class="mt-4 mt-lg-0">
                                <h4 class="text-white font-size-18 mb-3">Information</h4>
                                <ul class="list-unstyled footer-sub-menu">
                                    <li><a href="javascript: void(0);" class="footer-link">Developers</a></li>
                                    <li><a href="javascript: void(0);" class="footer-link">Support</a></li>
                                    <li><a href="javascript: void(0);" class="footer-link">Customer Service</a></li>
                                    <li><a href="javascript: void(0);" class="footer-link">Get Started</a></li>
                                    <li><a href="javascript: void(0);" class="footer-link">Guide</a></li>
                                </ul>
                            </div>
                        </div> -->
                        <div class="col-lg-3 col-6">
                            <div class="mt-4 mt-lg-0">
                                <h4 class="text-white font-size-18 mb-3">Support</h4>
                                <ul class="list-unstyled footer-sub-menu">
                                    <li><a href="javascript: void(0);" class="footer-link">FAQ</a></li>
                                    <li><a href="#contact" class="footer-link">Contact</a></li>
                                    <li><a href="javascript: void(0);" class="footer-link">Disscusion</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center mt-5">
                        <p class="text-white-50 f-15 mb-0">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> © Copyright . DINAS KOMUNIKASI DAN INFORMATIKA KOTA MALANG
                        </p>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </footer>
    <!-- Footer End -->

    <!-- javascript -->
    <script src="<?= base_url() ?>/templatepage/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>/templatepage/js/smooth-scroll.polyfills.min.js"></script>

    <script src="https://unpkg.com/feather-icons"></script>

    <!-- App Js -->
    <script src="<?= base_url() ?>/templatepage/js/app.js"></script>
</body>

</html>