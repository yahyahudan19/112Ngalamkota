        <!-- Page Header-->
<div class="content-wrapper">
       <div class="content-header sty-one">
          <h1>Detail Laporan 112 </h1>
          <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><i class="fa fa-angle-right"></i> Laporan 112</li>
          </ol>
        </div>
        <div class="content">
          <div class="page-content">
            <section class="no-padding-top">
              <div class="page-content">
              <!-- Page Content -->
              <div class="col-lg-12">
                      <div class="block">
                        <div class="title"><strong>Detail Berita</strong></div>
                        <div class="block-body">
                          <form class="form-horizontal">
                            <div class="form-group row">
                              <label class="col-sm-1 form-control-label">Tagline</label>
                              <div class="col-sm-4">
                              <input type="text" class="form-control" value="<?= $news['tagline_news'] ?>" readonly>
                              </div>
                              <label class="col-sm-1 form-control-label">Tanggal Dibuat</label>
                              <div class="col-sm-4">
                              <input type="text" class="form-control" value="<?= $news['date_news'] ?>" readonly>
                              </div>
                            </div>
                            <div class="line"></div>
                            <div class="form-group row">
                              <label class="col-sm-1 form-control-label">Link</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" value="<?= $news['link_news'] ?>" readonly>
                                <small class="help-block-none">Link sumber berita.</small>
                              </div>
                            </div>
                            <div class="line"></div>
                            <div class="form-group row">
                              <label class="col-sm-1 form-control-label">Judul</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" value="<?= $news['judul_news'] ?>" readonly>
                              </div>
                            </div>
                            <div class="line"></div>
                            <div class="form-group row">
                              <label class="col-sm-1 form-control-label">Isi</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" value="<?= $news['isi_news'] ?>" readonly>
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
                                  <img src="<?= base_url() ?>/uploads/<?= $news['dokumentasi_news'] ?>" width="400" class="mt-4" />
                            </div>                      
                            <div class="line"></div>
                            <div class="form-group row">
                              <div class="col-sm-11 ml-auto">
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
        