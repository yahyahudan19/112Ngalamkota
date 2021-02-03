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
                <img src="<?= base_url() ?>/templatepage/images/ngalam.png" alt="" class="logo-dark" height="80" />
                <img src="<?= base_url() ?>/templatepage/images/logo-light.png" alt="" class="logo-light" height="28" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <i class="" data-feather="menu"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ms-auto navbar-center" id="navbar-navlist">
                    <li class="nav-item">
                        <a href="/home" class="nav-link">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a href="/home/feedback" class="nav-link active">Detail Berita</a>
                    </li>
                </ul>
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
                    <span class="badge badge-soft-primary"><?= $news['tagline_news']; ?></span>
                    <h6 class="font-size-15 my-2"><?= $news['date_news']; ?></h6>
                    <h2 class="font-size-20 my-2"><?= $news['judul_news']; ?></h2>
                    <p class="mb-3 text-muted5"><?= $news['isi_news'] ?></p>
                    <p class="mb-3 text-muted5"><?= $news['isi2_news'] ?></p>
                    <p class="mb-3 text-muted5"><?= $news['isi3_news'] ?></p>
                    <p class="mb-3 text-muted5"><?= $news['isi4_news'] ?></p>
                    <!-- <a href="/home" class="btn btn-primary me-2">Kembali Ke Beranda<i class="icon-sm ms-1" data-feather="arrow-right"></i></a> -->
                </div>
                <div class="col-lg-6 col-sm-10 mx-auto ms-lg-auto me-lg-0">
                    <div class="mt-lg-0 mt-5">
                        <img src="<?= base_url() ?>/uploads/<?= $news['dokumentasi_news'] ?>" alt="" class="img-xl-responsive" height="400px" width="570px" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero End -->

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
                                <h4 class="text-white font-size-18 mb-3">Kerja Sama</h4>
                                <img src="<?= base_url() ?>/templatepage/images/logo/KerjaSama.png" alt="" class="" height="220" /></a>
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
                            </script> © Copyright. DINAS KOMUNIKASI DAN INFORMATIKA KOTA MALANG - Design By Themesbrand
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