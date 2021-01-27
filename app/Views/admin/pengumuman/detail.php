        <!-- Page Header-->
        <div class="content-wrapper">
          <div class="content-header sty-one">
            <h1>Detail Pengumuman</h1>
            <ol class="breadcrumb">
              <li><a href="#">Home</a></li>
              <li><i class="fa fa-angle-right"></i>Detail Pengumuman</li>
            </ol>
          </div>
          <div class="content">
            <div class="page-content">
              <section class="no-padding-top">
                <div class="page-content">
                  <!-- Page Content -->
                  <div class="col-lg-12">
                    <div class="block">
                      <div class="block-body">
                        <form class="form-horizontal">
                          <div class="form-group row">
                            <label class="col-sm-1 form-control-label">Tagline</label>
                            <div class="col-sm-4">
                              <input type="text" class="form-control" value="<?= $pengumuman['tagline_pengumuman'] ?>" readonly>
                            </div>
                            <label class="col-sm-2 form-control-label">Tanggal Dibuat</label>
                            <div class="col-sm-2">
                              <input type="text" class="form-control" value="<?= $pengumuman['date_pengumuman'] ?>" readonly>
                            </div>
                          </div>
                          <div class="line"></div>
                          <div class="form-group row">
                          </div>
                          <div class="line"></div>
                          <div class="form-group row">
                            <label class="col-sm-1 form-control-label">Judul</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" value="<?= $pengumuman['judul_pengumuman'] ?>" readonly>
                            </div>
                          </div>
                          <div class="line"></div>
                          <div class="form-group row">
                            <label class="col-sm-1 form-control-label">Isi</label>
                            <div class="col-sm-8">
                              <textarea class="form-control" readonly><?= $pengumuman['isi_pengumuman'] ?></textarea>
                            </div>
                          </div>
                          <div class="form-group row">
                            <div class="col-lg-12 ml-auto">
                              <a href="<?= base_url('superAdmin/pengumuman') ?>" class="btn btn-primary">Kembali</a>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
            </div>
          </div>




        </div>

        </div>