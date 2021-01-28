  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header sty-one">
      <h1>Berita</h1>
      <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><i class="fa fa-angle-right"></i>Berita</li>
      </ol>
    </div>

    <!-- FlashMessage -->
    <?php if (session()->getFlashdata('pesan')) : ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert"><?= session()->getFlashdata('pesan'); ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
      </div>
    <?php endif; ?>
    <!-- End FlashMessage -->

    <!-- Main content -->
    <div class="content">
      <!-- Small boxes (Stat box) -->
      <div class="page-content">
        <!-- Page Header-->
        <section class="no-padding-top">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-12">
                <div class="block">
                  <!-- <div class="title"><strong>Tabel Berita</strong></div> -->
                  <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-success"><i class="fa  fa-plus-square"></i> Tambah Berita</button>
                  <button type="button" class="btn btn-primary"><i class="fa  fa-cloud-download"></i> Download</button>
                  <br>
                  <br>
                  <div class="table-responsive">
                    <table class="table table-bordered table-hover" id="newsTable">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Tanggal Dibuat</th>
                          <th>Tagline</th>
                          <th>Judul</th>
                          <th>Link</th>
                          <th>Tampil</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $no = 1;
                        foreach ($news as $r) : ?>
                          <tr>
                            <th scope="row"><?= $no; ?></th>
                            <td><?= $r['date_news']; ?></td>
                            <td><?= $r['tagline_news']; ?></td>
                            <td><?= $r['judul_news']; ?></td>
                            <td><?= $r['link_news']; ?></td>
                            <td>
                              <a class="btn btn-dark btn-sm" href="/news/change_visible/<?= $r['id_news']; ?>">
                                <?= $r['visible_news'] == "1" ? '<i class="fa fa-eye"></i>' : '<i class="fa fa-eye-slash"></i>' ?>
                              </a>
                            </td>
                            <td>
                              <a href="/news/detailNews/<?= $r['id_news']; ?>" class="btn btn-info btn-sm">Detail</a>
                              <a class="btn btn-warning btn-sm" href="/news/editNews/<?= $r['id_news']; ?>">Edit</a>
                              <a href="/news/delete/<?= $r['id_news']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin data ini akan dihapus');">Delete</a>
                            </td>
                          </tr>
                        <?php
                          $no++;
                        endforeach;
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <!-- Modal-->
              <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" class="modal fade text-left " aria-hidden="true" style="display: none;">
                <div role="document" class="modal-dialog modal-dialog-scrollable">
                  <div class="modal-content">
                    <div class="modal-header"><strong id="exampleModalLabel" class="modal-title">Tambah Berita</strong>
                      <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body">
                      <form action="/news/addNews" method="post" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <div class="form-group">
                          <label>Tanggal Dibuat</label>
                          <input type="date" class="form-control" id="date_news" name="date_news" required>
                        </div>
                        <div class="form-group">
                          <label>Tagline</label>
                          <input type="text" placeholder="Tagline" class="form-control" id="tagline_news" name="tagline_news" required>
                        </div>
                        <div class="form-group">
                          <label>Judul</label>
                          <input type="text" placeholder="Judul" class="form-control" id="judul_news" name="judul_news" required>
                        </div>
                        <div class="form-group">
                          <label>Isi</label>
                          <textarea class="form-control" id="isi_news" name="isi_news" required></textarea>
                        </div>
                        <div class="form-group">
                          <label>Link</label>
                          <input type="text" placeholder="Link" class="form-control" id="link_news" name="link_news" required>
                          <small class="help-block-none">Link sumber berita.</small>
                        </div>
                        <div class="form-group">
                          <label>Dokumentasi</label>
                          <input type="file" class="dropify" id="dokumentasiNews" name="dokumentasiNews" required>
                        </div>
                        <div class="modal-footer">
                          <button type="submit" class="btn btn-success">Simpan</button>
                        </div>

                        <!-- <button type="button" data-dismiss="modal" class="btn btn-danger">Batal</button> -->
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
      </section>
      <!-- /.row -->
      <!-- Main row -->
    </div>
    <!-- /.content -->
  </div>