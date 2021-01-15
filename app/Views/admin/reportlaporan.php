  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header sty-one">
      <h1>Laporan Kejadian</h1>
      <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><i class="fa fa-angle-right"></i>Laporan Kejadian</li>
      </ol>
    </div>

    <!-- Main content -->
    <div class="content">
      <!-- Small boxes (Stat box) -->
      <div class="page-content">
        <!-- Page Header-->
        <div class="row">
          <div class="col-12">
            <div class="info-box">
              <div class="row">
                <div class="col-lg-3 col-sm-6 col-xs-12">
                  <div> <i class="ti-stats-up f-20 text-danger"></i>
                    <div class="info-box-content">
                      <h1 class="f-25 text-black">9</h1>
                      <span class="progress-description">Total Laporan</span>
                    </div>
                    <div class="progress">
                      <div class="progress-bar bg-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:100%; height:6px;"> <span class="sr-only">40% Complete</span> </div>
                    </div>
                  </div>
                  <!-- /.info-box -->
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-12">
                  <div> <i class="ti-check-box f-20 text-success"></i>
                    <div class="info-box-content">
                      <h1 class="f-25 text-black">7</h1>
                      <span class="progress-description">Tindak Lanjut</span>
                    </div>
                    <div class="progress">
                      <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:100%; height:6px;"> <span class="sr-only">50% Complete</span> </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <section class="no-padding-top">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-10">
                <div class="block">
                  <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-success center">Tambah Data</button>
                  <!-- <button type="submit" class="btn btn-info center">Cari Data</button> -->
                </div>
                <br>
                <br>
                <div class="title"><strong>Tabel Feedback</strong></div>
                <div class="table-responsive">
                  <table class="table table-striped table-hover" id="report-list">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Nama Pelapor</th>
                        <th>Lokasi Kejadian</th>
                        <th>Nama Pelapor</th>
                        <th>Tanggal Kejadian</th>
                        <th>Tindak Lanjut</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($reportL as $r) : ?>
                        <tr>
                          <th scope="row"><?= $r['id_pelapor']; ?></th>
                          <td><?= $r['kejadian']; ?></td>
                          <td><?= $r['lokasi_kejadian']; ?></td>
                          <td><?= $r['nama_pelapor']; ?></td>
                          <td><?= $r['tanggal']; ?></td>
                          <td><?= $r['tindak_lanjut']; ?></td>
                          <td>
                            <a href="/report/detailReport/<?= $r['id_pelapor']; ?>" class="btn btn-info btn-sm">Detail</a>
                            <a href="/report/editReport/<?= $r['id_pelapor']; ?>" class="btn btn-warning btn-sm">Edit</a>

                            <a href="/report/delete/<?= $r['id_pelapor']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin data ini akan dihapus');">Delete</a>
                          </td>
                        </tr>
                      <?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
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