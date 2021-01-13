<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Login - Layanan Ngalam 112</title>
<!-- Tell the browser to be responsive to screen width -->
<meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1" />

<!-- v4.0.0-alpha.6 -->
<link rel="stylesheet" href="<?= base_url()?>/adminpages/dist/bootstrap/css/bootstrap.min.css">

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

<!-- Theme style -->
<link rel="stylesheet" href="<?= base_url()?>/adminpages/dist/css/style.css">
<link rel="stylesheet" href="<?= base_url()?>/adminpages/dist/css/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="<?= base_url()?>/adminpages/dist/css/et-line-font/et-line-font.css">
<link rel="stylesheet" href="<?= base_url()?>/adminpages/dist/css/themify-icons/themify-icons.css">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>
<body class="hold-transition login-page">
  <br>
  <br>
  <br>
  <br>
  <br>
<div class="login-box">
  <div class="login-box-body">
    <h3 class="login-box-msg">Log In</h3>
    <form action="/admin" method="post">
      <div class="form-group has-feedback">
        <input type="email" class="form-control sty1" placeholder="User">
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control sty1" placeholder="Password">
      </div>
      <div>
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox">
              Remember Me </label>
            <a href="#" class="pull-right"><i class="fa fa-lock"></i> Forgot password?</a> </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4 m-t-1">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Log In</button>
        </div>
        <!-- /.col --> 
      </div>
    </form>
  </div>
  <!-- /.login-box-body --> 
</div>
<!-- /.login-box --> 

<!-- jQuery 3 --> 
<script src="<?= base_url()?>/adminpages/dist/js/jquery.min.js"></script> 

<!-- v4.0.0-alpha.6 --> 
<script src="<?= base_url()?>/adminpages/dist/bootstrap/js/bootstrap.min.js"></script> 

<!-- template --> 
<script src="<?= base_url()?>/adminpages/dist/js/niche.js"></script>
</body>
</html>