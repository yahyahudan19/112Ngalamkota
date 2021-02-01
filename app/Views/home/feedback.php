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
                        <a href="/home" class="nav-link">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a href="/home/feedback" class="nav-link active">Feedback</a>
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
                    <h1 class="font-weight-semibold mb-4 hero-6-title">Layanan Panggilan Darurat
                        <b>Ngalam 112 - Kota Malang</b>
                    </h1>
                    <p class="mb-5 text-muted">Ngalam 112 merupakan layanan panggilan darurat yang didukung oleh Perangkat Daerah dan Instansi terkait di lingkungan
                        Pemkot Malang yang siap merespon masyarakat Kota Malang dalam meminta bantuan saat terjadi keadaan darurat.</p>
                    <a href="/home" class="btn btn-primary me-2">Kembali Ke Beranda<i class="icon-sm ms-1" data-feather="arrow-right"></i></a>
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

    <!-- Contact us start -->
    <section class="section" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="fw-bold mb-4">Feedback</h2>
                    <p class="text-muted mb-5">Feedback yang anda berikan akan sangat berguna bagi kami,
                        guna dalam memaksimalkan layanan Ngalam 112 serta menjadi bahan eveluasi bagi kami untuk terus meningkatkan kinerja layanan Ngalam 112
                        dan dapat banyak membantu masyarakat yang membutuhkan layanan ini.</p>
                    <div>
                        <form action="/feedback/addFeedback" method="post" name="myForm">
                            <p id="error-msg"></p>
                            <div id="simple-msg"></div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-4">
                                        <label for="nama_feedback" class="text-muted form-label"><strong>Nama Pelapor</strong></label>
                                        <input name="nama_feedback" id="nama_feedback" type="text" class="form-control" placeholder="Nama">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-4">
                                        <label for="noHp_feedback" class="text-muted form-label"><strong>No.Telp Pelapor</strong></label>
                                        <input name="noHp_feedback" id="noHp_feedback" type="text" class="form-control" placeholder="No.Telp">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-4">
                                        <label for="alamat_feedback" class="text-muted form-label"><strong>Alamat Pelapor</strong></label>
                                        <input type="text" class="form-control" id="alamat_feedback" name="alamat_feedback" placeholder="Alamat" />
                                    </div>
                                    <div class="mb-4">
                                        <!-- <label for="penyebab_feedback" class="text-muted form-label">Penyebab</label> -->
                                        <label for="penyebab_feedback" class="text-muted form-label"><strong>Kejadian Yang Dilaporkan</strong></label>
                                        <select name="penyebab_feedback" class="form-control" id="penyebab_feedback">
                                            <option value="">- Pilih -</option>
                                            <option value="Kebakaran">Kebakaran</option>
                                            <option value="Pohon Tumbang">Pohon Tumbang</option>
                                            <option value="Kecelakaan">Kecelakaan</option>
                                            <option value="Banjir">Banjir</option>
                                            <option value="Gempa Bumi">Gempa Bumi</option>
                                            <option value="Angin Topan">Angin Topan</option>
                                            <option value="Listrik Putus">Listrik Putus</option>
                                            <option value="Lainnya">Lainnya</option>
                                        </select>
                                    </div>
                                    <div class="mb-4">
                                        <label for="subject" class="text-muted form-label"><strong>Apa Benar Bapak/Ibu pernah Menghubungi Ngalam 112 ?</strong></label>
                                        <div class="form-group">
                                            <input type="radio" name="q1_feedback" id="q1_feedback" value="iya"> Iya
                                        </div>
                                        <div class="form-group">
                                            <input type="radio" name="q1_feedback" id="q1_feedback" value="tidak"> Tidak
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <label for="subject" class="text-muted form-label"><strong>Apakah Bapak merasa terbantu dengan adanya layanan Ngalam 112 ?</strong></label>
                                        <div class="form-group">
                                            <input type="radio" name="q2_feedback" id="q2_feedback" value="iya"> Iya
                                        </div>
                                        <div class="form-group">
                                            <input type="radio" name="q2_feedback" id="q2_feedback" value="tidak"> Tidak
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <label for="subject" class="text-muted form-label"><strong>Menurut Bapak/Ibu, Apakah Pelayanan Ngalam 112 dibutuhkan atau Tidak ?</strong></label>
                                        <div class="form-group">
                                            <input type="radio" name="q3_feedback" id="q3_feedback" value="iya"> Dibutuhkan
                                        </div>
                                        <div class="form-group">
                                            <input type="radio" name="q3_feedback" id="q3_feedback" value="tidak"> Tidak
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <label for="subject" class="text-muted form-label"><strong>Bagaimana Pendapat Bapak/Ibu tentang Pelayanan Ngalam 112 ? Berikan Penilaian !</strong></label>
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
                                    </div>
                                    <div class="mb-4">
                                        <label for="q5_feedback" class="text-muted form-label"><strong>Apakah ada saran untuk layanan 112 ?</strong></label>
                                        <textarea name="q5_feedback" id="q5_feedback" rows="4" class="form-control" placeholder="Saran layanan 112"></textarea>
                                    </div>
                                    <button type="submit" id="submit" name="send" class="btn btn-primary">Kirim</button>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- end col -->

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