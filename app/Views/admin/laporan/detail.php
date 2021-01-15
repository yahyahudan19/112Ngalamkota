<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header sty-one">
    <h1>Detail Laporan 112 </h1>
    <ol class="breadcrumb">
      <li><a href="#">Home</a></li>
      <li><i class="fa fa-angle-right"></i> Laporan 112</li>
    </ol>
  </div>

  <!-- Main content -->
  <div class="content">
    <!-- Small boxes (Stat box) -->
    <div class="page-content">
      <!-- Page Header-->
      <section class="no-padding-top">

        <div class="page-content">
          <!-- Page Header-->
          <div class="page-header no-margin-bottom">
            <div class="container-fluid">
              <h2 class="h5 no-margin-bottom">Detail Laporan 112 </h2>
            </div>
          </div>
          <!-- Page Content -->
          <div class="col-lg-12">
            <div class="block">
              <!-- <div class="title"><strong>Detail Laporan</strong></div> -->
              <div class="block-body">
                <form class="form-horizontal">
                  <div class="form-group row">
                    <label class="col-sm-1 form-control-label"><strong>Tanggal Kejadian</strong></label>
                    <div class="col-sm-3">
                      <input type="text" class="form-control" value="<?= $reportL['tanggal'] ?>">
                    </div>
                  </div>
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
                    <label class="col-sm-1 form-control-label"><strong>Dokumentasi</strong></label>

                  </div>
                  <?php
                  foreach ($detail as $row) {
                  ?>
                    <img src="<?= base_url() ?>/uploads/<?= $row['gambar'] ?>" width="400" class="m-2" />
                  <?php
                  }
                  ?>
                  <div class="line"></div>
                  <a href="<?= base_url('report') ?>" class="btn btn-danger">Back</a>
              </div>
              </form>
            </div>
          </div>
        </div>
    </div>
  </div>

  <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" class="modal fade text-left" aria-hidden="true" style="display: none;">
    <div role="document" class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header"><strong id="exampleModalLabel" class="modal-title">Tambah Data</strong>
          <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
        </div>
        <div class="modal-body">
          <form method="post" action="<?= site_url('/report/addReportL') ?>" enctype="multipart/form-data">
            <div class="form-group row">
              <div class="col-lg-6">
                <label class="form-control-label"><strong>Kejadian</strong></label>
                <select name="kejadian" class="form-control" id="kejadian">
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
              <div class="col-lg-6">
                <label>Tanggal Kejadian</label>
                <input type="date" name="tanggal" placeholder="Tanggal" class="form-control">
              </div>
            </div>
            <div class="form-group">
              <label>Nama Pelapor</label>
              <input type="text" name="nama_pelapor" placeholder="Nama Pelapor" class="form-control">
            </div>
            <div class="form-group">
              <label>Lokasi Kejadian</label>
              <input type="text" name="lokasi_kejadian" placeholder="Lokasi" class="form-control">
            </div>

            <div class="form-group">
              <label>Tindak Lanjut</label>
              <input type="text" name="tindak_lanjut" placeholder="Tindak Lanjut" class="form-control">
            </div>
            <div class="form-group">
              <label>Dokumentasi</label>
              <input type="file" name="dokumentasi[]" class="form-control-sm" id="dokumentasi" multiple>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" data-dismiss="modal" class="btn btn-danger">Close</button>
          <button type="submit" class="btn btn-success">Save changes</button>
        </div>
        </form>
      </div>
    </div>
  </div>
  </section>
</div>
<!-- /.content -->
</div>