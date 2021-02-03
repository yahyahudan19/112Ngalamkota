<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header sty-one">
    <h1>Dashboard</h1>
    <ol class="breadcrumb">
      <li><a href="#">Home</a></li>
      <li><i class="fa fa-angle-right"></i> Dashboard</li>
    </ol>
  </div>

  <?php
  if (session()->get('level') == "Super Admin") {
  ?>
    <!-- Main content Superadmin-->
    <div class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <div class="info-box"> <span class="info-box-icon bg-aqua"><i class="fa fa-file"></i></span>
            <div class="info-box-content"> <span class="info-box-number"><?= $total_kejadian ?></span> <span class="info-box-text">Laporan Kejadian</span> </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-lg-3 col-xs-6">
          <div class="info-box"> <span class="info-box-icon bg-green"><i class="fa  fa-refresh"></i></span>
            <div class="info-box-content"> <span class="info-box-number"><?= $total_feedback ?></span> <span class="info-box-text">Laporan Feedback</span></div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-lg-3 col-xs-6">
          <div class="info-box"> <span class="info-box-icon bg-yellow"><i class="icon-book-open"></i></span>
            <div class="info-box-content"> <span class="info-box-number"><?= $total_news ?></span> <span class="info-box-text">Total Berita</span></div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-lg-3 col-xs-6">
          <div class="info-box"> <span class="info-box-icon bg-red"><i class="fa fa-user"></i></span>
            <div class="info-box-content"> <span class="info-box-number"><?= $total_user ?></span> <span class="info-box-text">Total User</span></div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->


        <!-- chart -->
        <div class="col-lg-6">
          <div class="info-box">
            <div class="col-12">
              <div class="d-flex flex-wrap">
                <div>
                  <h4>Laporan Kejadian</h4>
                </div>
              </div>
            </div>
            <div>
              <canvas id="pie-chart-laporan" height="200"></canvas>
            </div>
          </div>
        </div>

        <head>
          <script type="text/javascript" src="chartjs/Chart.js"></script>
        </head>

        <div class="col-lg-6">
          <div class="info-box">
            <div class="col-12">
              <div class="d-flex flex-wrap">
                <div>
                  <h4>Laporan Feedback</h4>
                </div>
              </div>
            </div>
            <div>
              <canvas id="pie-chart-feedback" height="200"></canvas>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->
      <!-- Main row -->
    </div>
    <!-- /.content -->
  <?php
  } else if (session()->get('level') == "Admin") {
  ?>
    <!-- Main content Admin-->
    <div class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-12">
          <div class="info-box"> <span class="info-box-icon bg-aqua"><i class="fa fa-file"></i></span>
            <div class="info-box-content"> <span class="info-box-number"><?= $total_kejadian ?></span> <span class="info-box-text">Laporan Kejadian</span> </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <div class="col-lg-6  col-xs-6">
          <div class=" info-box">
          <div class="col-12">
            <div class="d-flex flex-wrap">
              <div>
                <h4>Laporan Kejadian</h4>
              </div>
            </div>
          </div>
          <div>
            <canvas id="pie-chart-laporan" height="200"></canvas>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6">
      </div>
      <!-- /.col -->
      <!-- chart -->
      <!-- <div class="col-lg-6">
          <div class="info-box">
            <div class="col-12">
              <div class="d-flex flex-wrap">
                <div>
                  <h4>Laporan Kejadian</h4>
                </div>
              </div>
            </div>
            <div>
              <canvas id="pie-chart-laporan" height="250"></canvas>
            </div>
          </div>
        </div> -->
    </div>
    <!-- /.content -->
  <?php
  }
  ?>
</div>