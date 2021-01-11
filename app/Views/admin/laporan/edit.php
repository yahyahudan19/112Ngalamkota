<div class="page-content">
        <!-- Page Header-->
        <div class="page-header no-margin-bottom">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">News</h2>
          </div>
        </div>
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin">Main</a></li>
            <li class="breadcrumb-item active"><a href="">Report</a></li>
            <li class="breadcrumb-item active"><a href="/admin/reportLaporan">Laporan</a></li>
            <li class="breadcrumb-item active">Detail</li>
          </ul>
        </div>
        <!-- Page Content -->
        <div class="col-lg-12">
                <div class="block">
                  <div class="title"><strong>Detail Laporan</strong></div>
                  <div class="block-body">
                    <form class="form-horizontal">
                      <div class="form-group row">
                        <label class="col-sm-1 form-control-label"><strong>Kejadian</strong></label>
                        <div class="col-sm-3">
                          <input type="text" class="form-control" value="<?= $reportL['kejadian'] ?>">
                        </div>
                        <label class="col-sm-1 form-control-label"><strong>Lokasi Kejadian</strong></label>
                        <div class="col-sm-5">
                          <input type="text" class="form-control" value="<?= $reportL['lokasi_kejadian'] ?>">
                        </div>              
                        </div>
                      <div class="form-group row">
                        <label class="col-sm-1 form-control-label"><strong>Nama Pelapor</strong></label>
                        <div class="col-sm-3">
                          <input type="text" class="form-control" value="<?= $reportL['nama_pelapor'] ?>">
                        </div>
                        <label class="col-sm-1 form-control-label"><strong>Tindak Lanjut</strong></label>
                        <div class="col-sm-5">
                          <input type="text" class="form-control" value="<?= $reportL['tindak_lanjut'] ?>">
                        </div>
                      </div>
                        <div class="line"></div>
                        <div class="form-group row">
                            <label class="col-sm-1 form-control-label">Dokumentasi</label>
                            
                        </div>
                        <?php
                            foreach ($edit as $row)
                            {
                              ?>
                                <img src="<?= base_url()?>/uploads/<?= $row['gambar'] ?>" width="400" class="m-2" />                          
                              <?php
                            }
                            ?>           
                        <div class="line"></div>
                        <a href="<?= base_url('report') ?>" class="btn btn-danger">Save</a>
                        
                      </div>
                    </form>
                  </div>
                </div>
              </div>
</div>
