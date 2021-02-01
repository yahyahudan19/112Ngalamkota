<?php
if (!isset($_SESSION)) {
  session_start();
}

$msg = '';
if (isset($_POST['submit'])) {
  $username = mysqli_real_escape_string($con, $_POST['username']);
  $password = mysqli_real_escape_string($con, $_POST['password']);
  $sql = "Select * from user where username='$username' and password='$password'";
  $res = mysqli_query($con, $sql);
  $count = mysqli_num_rows($res);
  if ($count > 0) {
    $row = mysqli_fetch_assoc($res);
    $_SESSION['UID'] = $row['$id'];
    header('location:dashboard.php');
  } else {
    $msg = "Please enter correct login details";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login - Layanan Ngalam 112</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1" />

  <!-- v4.0.0-alpha.6 -->
  <link rel="stylesheet" href="<?= base_url() ?>/adminpages/dist/bootstrap/css/bootstrap.min.css">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url() ?>/adminpages/dist/css/style.css">
  <link rel="stylesheet" href="<?= base_url() ?>/adminpages/dist/css/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>/adminpages/dist/css/et-line-font/et-line-font.css">
  <link rel="stylesheet" href="<?= base_url() ?>/adminpages/dist/css/themify-icons/themify-icons.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>

<body class="hold-transition login-page sty1">
  <div class="login-box sty1">
    <div class="login-box-body sty1">
      <br>
      <br>
      <br>
      <br>
      <div class="login-logo">
        <a href="index.html"><img src="<?= base_url() ?>/templatepage/images/diskominfo.png" alt="" width="185px" height="38px"></a>
        <a href="index.html"><img src="<?= base_url() ?>/templatepage/images/ngalam.png" alt="" width="65" height="65px"></a>
      </div>
      <p class="login-box-msg">Silahkan Login Terlebih Dahulu</p>

      <!-- FlashMessage -->
      <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert"><?= session()->getFlashdata('pesan'); ?>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
        </div>
      <?php endif; ?>

      <form method="post" class="form-validate" action="<?= site_url('/auth/ceklogin') ?>">
        <div class="form-group has-feedback">
          <input id="username" type="text" name="username" required data-msg="Please enter your username" class="form-control sty1" placeholder="Username">
        </div>
        <div class="form-group has-feedback">
          <input id="password" type="password" name="password" required data-msg="Please enter your password" class="form-control sty1" placeholder="Password">
        </div>
        <div>
          <div class="col-xs-8">
            <div class="checkbox icheck">
              <label>
                <input type="checkbox">
                Remember Me </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-xs-4 m-t-1">
            <button type="submit" class="btn btn-primary btn-block btn-flat"><i class="fa fa-key"></i> Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery 3 -->
    <script src="<?= base_url() ?>/adminpages/dist/js/jquery.min.js"></script>

    <!-- v4.0.0-alpha.6 -->
    <script src="<?= base_url() ?>/adminpages/dist/bootstrap/js/bootstrap.min.js"></script>

    <!-- template -->
    <script src="<?= base_url() ?>/adminpages/dist/js/niche.js"></script>
</body>

</html>