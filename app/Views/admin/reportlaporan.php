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

    <!-- FlashMessage -->
    <?php if (session()->getFlashdata('pesan')) : ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert"> <?= session()->getFlashdata('pesan'); ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
      </div>
    <?php endif; ?>
    <!-- End FlashMessage -->

    <!-- Main content -->

    <section class="no-padding-top">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="block">
              <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-success center"><i class="fa  fa-plus-square"></i> Tambah Laporan</button>
              <!-- <a href="/report/excel/" class="btn btn-primary" type="button"><i class="fa  fa-file-excel-o"></i>Excel</a>
              <a href="/report/excel/" class="btn btn-warning" type="button"><i class="fa  fa-file-pdf-o"></i>Pdf</a> -->
              <br>
              <br>
              <!-- <div class="title"><strong>Tabel Kejadian</strong></div> -->
              <div class="table-responsive">
                <!-- <table class="table table-striped table-hover" id="rlaporanTable"> -->
                <table class="table table-bordered table-hover" id="rlaporanTable">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Nomor Tiket</th>
                      <th>Tanggal Kejadian</th>
                      <th>Nama Petugas</th>
                      <th>Kejadian</th>
                      <th>Nama Pelapor</th>
                      <th>Lokasi Kejadian</th>
                      <th>Tindak Lanjut</th>
                      <!-- <th>Dokumentasi</th> -->
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 1;
                    foreach ($reportL as $r) : ?>
                      <tr>
                        <!-- <th scope="row"><?= $r['id_pelapor']; ?></th> -->
                        <th scope="row"><?= $no; ?></th>
                        <td><?= $r['no_tiket']; ?></td>
                        <td><?= $r['tanggal']; ?></td>
                        <td><?= $r['nama_petugas']; ?></td>
                        <td><?= $r['kejadian']; ?></td>
                        <td><?= $r['nama_pelapor']; ?></td>
                        <td><?= $r['lokasi_kejadian']; ?></td>
                        <td><?= $r['tindak_lanjut']; ?></td>
                        <!-- <td><a href="/report/download/<?= $r['id_pelapor']; ?>" class="btn btn-success btn-sm">Download</a></td> -->
                        <?php
                        if (session()->get('level') == "Super Admin") {
                        ?>
                          <td>
                            <a href="/report/detailReport/<?= $r['id_pelapor']; ?>" class="btn btn-info btn-sm">Detail</a>
                            <a href="/report/delete/<?= $r['id_pelapor']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin data ini akan dihapus');">Hapus</a>
                          </td>
                        <?php
                        } else if (session()->get('level') == "Admin") {
                        ?>
                          <td>
                            <a href="/report/detailReport/<?= $r['id_pelapor']; ?>" class="btn btn-info btn-sm">Detail</a>
                            <a href="/report/editReport/<?= $r['id_pelapor']; ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="/report/delete/<?= $r['id_pelapor']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin data ini akan dihapus');">Hapus</a>
                          </td>
                        <?php } ?>
                      </tr>
                    <?php
                      $no++;
                    endforeach; ?>
                  </tbody>
                </table>
                <section class="no-padding-top">
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
                            <label class="form-control-label">Kejadian</label>
                            <select name="kejadian" class="form-control" id="kejadian" required>
                              <option value="">- Pilih -</option>
                              <option value="Kebakaran">Kebakaran</option>
                              <option value="Pohon Tumbang">Pohon Tumbang</option>
                              <option value="Kecelakaan">Kecelakaan</option>
                              <option value="Banjir">Banjir</option>
                              <option value="Gempa Bumi">Gempa Bumi</option>
                              <option value="Angin Topan">Angin Topan</option>
                              <option value="Listrik Putus">Listrik Putus</option>
                              <option value="Tanah Longsor">Tanah Longsor</option>
                              <option value="Lainnya">Lainnya</option>
                            </select>
                          </div>
                          <div class="col-lg-6">
                            <label>Tanggal Kejadian</label>
                            <input type="date" name="tanggal" placeholder="Tanggal" class="form-control" required>
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="col-lg-6">
                            <label class="form-control-label">Nama Petugas</label>
                            <select name="petugas" class="form-control" id="petugas" required>
                              <option value="">- Pilih -</option>
                              <?php
                              foreach ($dtPetugas as $data) {
                              ?>
                                <option value="<?= $data['nama_petugas'] ?>"><?= $data['nama_petugas'] ?></option>
                              <?php
                              }
                              ?>
                            </select <div class="col-lg-6">
                          </div>
                          <div class="col-lg-6">
                            <label>No Tiket</label>
                            <input type="text" name="no_tiket" placeholder="No Tiket" class="form-control" required>
                          </div>
                        </div>
                        <div class="form-group">
                          <label>Nama Pelapor</label>
                          <input type="text" name="nama_pelapor" placeholder="Nama Pelapor" class="form-control" required>
                        </div>
                        <div class="form-group">
                          <label>Lokasi Kejadian</label>
                          <input type="text" name="lokasi_kejadian" placeholder="Lokasi" class="form-control" required>
                        </div>

                        <div class="form-group">
                          <label>Tindak Lanjut</label>
                          <input type="text" name="tindak_lanjut" placeholder="Tindak Lanjut" class="form-control" required>
                        </div>
                        <div class="form-group">
                          <label>Dokumentasi</label>
                          <input type="file" name="dokumentasi[]" class="dropify" id="dokumentasi" multiple>
                        </div>
                    </div>
                    <div class="modal-footer">
                      <!-- <button type="button" data-dismiss="modal" class="btn btn-danger">Batal</button> -->
                      <button type="submit" class="btn btn-success">Simpan</button>
                    </div>
                    </form>
                  </div>
                </div>
              </div>
    </section>
  </div>
  <!-- /.content -->
  </div>