        <!-- Page Header-->
        <div class="content-wrapper">
          <div class="content-header sty-one">
            <h1>Detail Berita</h1>
            <ol class="breadcrumb">
              <li><a href="#">Berita</a></li>
              <li><i class="fa fa-angle-right"></i>Detail Berita</li>
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
                              <input type="text" class="form-control" value="<?= $news['tagline_news'] ?>" readonly>
                            </div>
                            <label class="col-sm-2 form-control-label">Tanggal Dibuat</label>
                            <div class="col-sm-2">
                              <input type="text" class="form-control" value="<?= $news['date_news'] ?>" readonly>
                            </div>
                          </div>
                          <div class="line"></div>
                          <div class="form-group row">
                            <label class="col-sm-1 form-control-label">Judul</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" value="<?= $news['judul_news'] ?>" readonly>
                            </div>
                          </div>
                          <div class="line"></div>
                          <div class="form-group row">
                            <label class="col-sm-1 form-control-label">Isi 1</label>
                            <div class="col-sm-8">
                              <textarea input type="text" class="form-control" placeholder="Paragraf 1" readonly><?= $news['isi_news'] ?></textarea>
                              <small class="help-block-none">Paragraf 1</small>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-sm-1 form-control-label">Isi 2</label>
                            <div class="col-sm-8">
                              <textarea input type="text" class="form-control" placeholder="Paragraf 2" readonly><?= $news['isi2_news'] ?></textarea>
                              <small class="help-block-none">Paragraf 2</small>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-sm-1 form-control-label">Isi 3</label>
                            <div class="col-sm-8">
                              <textarea input type="text" class="form-control" placeholder="Paragraf 3" readonly><?= $news['isi3_news'] ?></textarea>
                              <small class="help-block-none">Paragraf 3</small>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-sm-1 form-control-label">Isi 4</label>
                            <div class="col-sm-8">
                              <textarea input type="text" class="form-control" placeholder="Paragraf 4" readonly><?= $news['isi4_news'] ?></textarea>
                              <small class="help-block-none">Paragraf 4</small>
                            </div>
                          </div>
                          <!-- <div class="form-group row">
                              <label class="col-sm-1 form-control-label">Dibuat Tanggal</label>
                              <div class="col-sm-9">
                                <input type="text" placeholder="Dibuat Tanggal" class="form-control">
                              </div>
                            </div> -->
                          <div class="line"></div>
                          <div class="form-group row">
                            <label class="col-sm-1 form-control-label">Dokumentasi</label>
                          </div>
                          <img src="<?= base_url() ?>/uploads/<?= $news['dokumentasi_news'] ?>" height="300" width="500" class="ml-0 mb-4" />
                          <div class="form-group row">
                            <div class="col-lg-12 ml-auto">
                              <a href="<?= base_url('news') ?>" class="btn btn-primary">Kembali</a>
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