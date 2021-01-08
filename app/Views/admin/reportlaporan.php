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
                  <div class="title"><strong>Tabel Laporan</strong></div>
                  <div class="table-responsive"> 
                    <table class="table table-striped table-hover">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Nama Pelapor</th>
                          <th>Lokasi Kejadian</th>
                          <th>Tanggal Kejadian</th>
                          <th>Nama Pelapor</th>
                          <th>Tindak Lanjut</th>
                          <th>Dokumentasi</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($reportL as $r ) :?>
                        <tr>
                          <th scope="row"><?= $r['id_pelapor'];?></th>
                          <td><?= $r['kejadian'];?></td>
                          <td><?= $r['lokasi_kejadian'];?></td>
                          <td><?= $r['nama_pelapor'];?></td>
                          <td><?= $r['tanggal'];?></td>
                          <td><?= $r['tindak_lanjut'];?></td>
                          <td><?= $r['dokumentasi'];?></td>                      
                          <td>
                                <a href="/report/detailReport/<?= $r['id_pelapor']; ?>" class="btn btn-info btn-sm">Detail</a>
                                <button type="button" class="btn btn-primary btn-sm">Hapus</button>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                      </tbody>
                    </table>
                  </div>
                  <div>
                    <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary center">Tambah Laporan</button>
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
                      <div class="pie-chart chart margin-bottom-sm"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
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
                          <div class="modal-header"><strong id="exampleModalLabel" class="modal-title">Tambah Laporan</strong>
                            <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                          </div>
                          <div class="modal-body">
                            <form>
                              <div class="form-group">
                                <label>Nama Pelapor</label>
                                <input type="nama" placeholder="Nama Pelapor" class="form-control">
                              </div>
                              <div class="form-group">       
                                <label>Lokasi Kejadian</label>
                                <input type="name" placeholder="Lokasi" class="form-control">
                              </div>
                              <div class="form-group">
                                <label>Tanggal Kejadian</label>
                                <input type="name" placeholder="Tanggal" class="form-control">
                              </div>
                              <div class="form-group">
                                <label>Tindak Lanjut</label>
                                <input type="text" placeholder="Tindak Lanjut" class="form-control">
                              </div>
                              <div class="form-group">
                                <label>Dokumentasi</label>
                                <input type="file" class="form-control-sm" id="dokumentasi">
                              </div>
                            </form>
                          </div>
                          <div class="modal-footer">
                            <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                          </div>
                        </div>
                      </div>
                    </div>
        </section>