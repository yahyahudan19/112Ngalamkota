<?php

use App\Controllers\Auth;
use App\Controllers\User;

if (!isset($_SESSION)) {
  session_start();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dashboard - Layanan Ngalam 112 </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1" />

  <!-- v4.0.0-alpha.6 -->
  <link rel="stylesheet" href="<?= base_url() ?>/adminpages/dist/bootstrap/css/bootstrap.min.css">

  <!-- favicon -->
  <link rel="shortcut icon" href="<?= base_url() ?>/templatepage/images/ngalam.png" />

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url() ?>/adminpages/dist/css/style.css">
  <link rel="stylesheet" href="<?= base_url() ?>/adminpages/dist/css/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>/adminpages/dist/css/et-line-font/et-line-font.css">
  <link rel="stylesheet" href="<?= base_url() ?>/adminpages/dist/css/themify-icons/themify-icons.css">

  <!-- datatables Script -->
  <link rel="stylesheet" type="text/css" media="screen" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.css">

  <!-- dropify -->
  <link rel="stylesheet" href="<?= base_url() ?>/adminpages/dist/plugins/dropify/dropify.min.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]> -->
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>-->
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <!-- [endif]-->

</head>

<body class="skin-blue sidebar-mini">
  <div class="wrapper boxed-wrapper">
    <header class="main-header">
      <!-- Logo -->
      <a href="index.html" class="logo blue-bg">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><img src="<?= base_url() ?>/templatepage/images/ngalam.png" alt="" height="40px"></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><img src="<?= base_url() ?>/templatepage/images/diskominfo.png" alt="" width="185px" height="40px"></span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar blue-bg navbar-static-top">
        <!-- Sidebar toggle button-->
        <ul class="nav navbar-nav pull-left">
          <li><a class="sidebar-toggle" data-toggle="push-menu" href=""></a> </li>
        </ul>
        <!-- <div class="pull-left search-box">
          <form action="#" method="get" class="search-form">
            <div class="input-group">
              <input name="search" class="form-control" placeholder="Search..." type="text">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i> </button>
              </span>
            </div>
          </form> -->
        <!-- search form -->
        <!-- </div> -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu p-ph-res"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <img src="<?= base_url() ?>/templatepage/images/ngalam.png" class="user-image" alt="User Image">
                <span class="hidden-xs">
                  <?php if ($_SESSION['username'] == true) {
                    echo $_SESSION["username"];
                  } ?></span> </a>
              <ul class="dropdown-menu">
                <li class="user-header">
                  <div class="pull-left user-img"><img src="<?= base_url() ?>/templatepage/images/ngalam.png" class="img-responsive" alt="User"></div>
                  <p class="text-left">Selamat Datang <small><?php echo $_SESSION["username"]; ?></small></p>
                  <p class="text-left"><small>ONLINE</small></p>
                </li>
                <!-- Divider -->
                <hr class=" sidebar-divider my-1">
                <!-- <li><a href="#"><i class="icon-profile-male"></i> My Profile</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#"><i class="icon-gears"></i> Account Setting</a></li>
                <li role="separator" class="divider"></li> -->
                <li><a href="/auth/logout" onclick="return confirm('Apakah anda yakin ingin keluar ');"><i class="fa fa-power-off"></i> Logout</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
    </header>