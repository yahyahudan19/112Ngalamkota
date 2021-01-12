<div class="page-content">
  <!-- Page Header-->

  <div class="container-fluid">
    <ul class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item active">Report</li>
      <li class="breadcrumb-item active">Laporan</li>
    </ul>
  </div>
  <section class="no-padding-top">

    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-15">
          <div class="block">
            <div class="title"><strong>Tabel Laporan Kejadian</strong></div>
            <div>
              <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-success center">Tambah Data</button>
            </div>
            <div class="row mt-4">
              <div class="col-lg-4 col-sm-12 form-group">
                <label class="form-control-label"><strong>Dari</strong></label>
                <input type="date" name="tanggal_dari" class="form-control">
              </div>
              <div class="col-lg-4 col-sm-12 form-group">
                <label class="form-control-label"><strong>Sampai</strong></label>
                <input type="date" name="tanggal_sampai" class="form-control">
              </div>
              <div class="col-lg-4 col-sm-12 form-group">
                <input type="submit" name="cari" class="btn btn-info" value="Cari">
              </div>
            </div>
            <br>
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
                        <a href="/report/delete/<?= $r['id_pelapor']; ?>" class="btn btn-primary btn-sm" onclick="return confirm('Yakin data ini akan dihapus');">Delete</a>
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
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-5">
          <div class="bar-chart block chart">
            <div class="title"><strong> Total Laporan </strong></div>
            <div class="bar-chart chart">
              <canvas id="barChartCustom3"></canvas>
            </div>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="pie-chart chart block">
            <div class="title"><strong>Jenis Laporan</strong></div>
            <div class="pie-chart chart margin-bottom-sm">
              <div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                  <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                </div>
                <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                  <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                </div>
              </div>
              <canvas id="pieChartCustom1" width="448" height="224" class="chartjs-render-monitor" style="display: block; width: 448px; height: 224px;"></canvas>
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
        <form  method="post" action="<?= site_url('/report/addReportL') ?>" enctype="multipart/form-data">
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