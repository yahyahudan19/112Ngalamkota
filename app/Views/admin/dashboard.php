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
            <?php
            $koneksi = mysqli_connect("localhost", "root", "", "ngalam112db");
            ?>
            <br><br>
            <table width="100%" border="3" align="center" cellpadding="3" cellspacing="0">
              <thead>
                <tr>
                  <th class="text-center">No</th>
                  <th class="text-center">Kejadian</th>
                  <th class="text-center">Total</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                $jumlah = null;
                $data = mysqli_query($koneksi, "select kejadian, COUNT(*) as jumlah_kejadian from report GROUP BY kejadian DESC");
                while ($d = mysqli_fetch_array($data)) {
                ?>
                  <tr>
                    <td class="text-center"><?php echo $no++; ?></td>
                    <td><?php echo $d['kejadian']; ?></td>
                    <td class="text-center"><?php echo $d['jumlah_kejadian']; ?></td>
                  </tr>
                <?php
                }
                ?>
              </tbody>
            </table>
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
            <?php
            $koneksi = mysqli_connect("localhost", "root", "", "ngalam112db");
            ?>
            <br><br>
            <table width="100%" border="3" align="center" cellpadding="3" cellspacing="0">
              <thead>
                <tr>
                  <th class="text-center">No</th>
                  <th class="text-center">Feedback</th>
                  <th class="text-center">Total</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                $jumlah = null;
                $data = mysqli_query($koneksi, "select q4_feedback, COUNT(*) as Total from feedback GROUP BY q4_feedback DESC");
                while ($d = mysqli_fetch_array($data)) {
                ?>
                  <tr>
                    <td class="text-center"><?php echo $no++; ?></td>
                    <td><?php echo $d['q4_feedback']; ?></td>
                    <td class="text-center"><?php echo $d['Total']; ?></td>
                  </tr>
                <?php
                }
                ?>
              </tbody>
            </table>
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
        <div class="col-lg-6 col-xs-6">
          <div class="info-box"> <span class="info-box-icon bg-aqua"><i class="fa fa-file"></i></span>
            <div class="info-box-content"> <span class="info-box-number"><?= $total_kejadian ?></span> <span class="info-box-text">Laporan Kejadian</span> </div>
            <!-- /.info-box-content -->
          </div>
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
          <!-- /.info-box -->
        </div>
        <div class="col-lg-6 col-xs-6">
          <?php
            $koneksi = mysqli_connect("localhost", "root", "", "ngalam112db");
            ?>
            <div class="table-responsive">
            <table class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th class="text-center"><b>No</b></th>
                  <th class="text-center"><b>Kejadian</b></th>
                  <th class="text-center"><b>Total</b></th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                $jumlah = null;
                $data = mysqli_query($koneksi, "select kejadian, COUNT(*) as jumlah_kejadian from report GROUP BY kejadian DESC");
                while ($d = mysqli_fetch_array($data)) {
                ?>
                  <tr>
                    <td class="text-center"><?php echo $no++; ?></td>
                    <td><?php echo $d['kejadian']; ?></td>
                    <td class="text-center"><?php echo $d['jumlah_kejadian']; ?></td>
                  </tr>
                <?php
                }
                ?>
              </tbody>
            </table>
            </div>
        </div>
        <!-- <div class="col-lg-6 col-xs-6">
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
        </div> -->
        <!-- /.col -->
    </div>
    </div>
      <!-- /.content -->
    <?php
  }
    ?>
    </div>