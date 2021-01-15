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

    <!-- Main content -->
    <div class="content">
      <!-- Small boxes (Stat box) -->
      <div class="page-content">
        <!-- Page Header-->
        <section class="no-padding-top">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-9">
                <div class="block">
                  <div class="title"><strong>Tabel Berita</strong></div>
                  <div class="table-responsive">
                    <table class="table table-striped table-hover">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Tagline</th>
                          <th>Isi</th>
                          <th>Link</th>
                          <th>Date</th>
                          <th>Dokumentasi</th>
                          <th>Dibuat Tanggal</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($news as $r) : ?>
                          <tr>
                            <th scope="row"><?= $r['id_news']; ?></th>
                            <td><?= $r['tagline_news']; ?></td>
                            <td><?= $r['isi_news']; ?></td>
                            <td><?= $r['link_news']; ?></td>
                            <td><?= $r['date_news']; ?></td>
                            <td><?= $r['dokumentasi_news']; ?></td>
                            <td><?= $r['created_at']; ?></td>
                            <td>
                              <a href="/news/detailNews/<?= $r['id_news']; ?>" class="btn btn-info btn-sm">Detail</a>
                              <button type="button" class="btn btn-warning btn-sm">Edit</button>
                              <!-- <button type="button" class="btn btn-primary btn-sm">Hapus</button> -->
                              <a href="/news/delete/<?= $r['id_news']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin data ini akan dihapus');">Delete</a>

                            </td>
                          </tr>
                        <?php endforeach; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
                <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-success">Tambah Berita</button>
              </div>
              <!-- Modal-->
              <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" class="modal fade text-left" aria-hidden="true" style="display: none;">
                <div role="document" class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header"><strong id="exampleModalLabel" class="modal-title">Tambah Berita</strong>
                      <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body">
                      <form action="/news/addNews" method="post">
                        <?= csrf_field(); ?>
                        <div class="form-group">
                          <label>Tagline</label>
                          <input type="text" placeholder="Tagline" class="form-control" id="tagline_news" name="tagline_news">
                        </div>
                        <div class="form-group">
                          <label>Isi</label>
                          <input type="text" placeholder="Isi" class="form-control" id="isi_news" name="isi_news">
                        </div>
                        <div class="form-group">
                          <label>Link</label>
                          <input type="text" placeholder="Link" class="form-control" id="link_news" name="link_news">
                        </div>
                        <div class="form-group">
                          <label>Date</label>
                          <input type="text" placeholder="Link" class="form-control" id="date_news" name="date_news">
                        </div>
                        <div class="form-group">
                          <label>Dokumentasi</label>
                          <input type="file" class="form-control-sm" id="dokumentasi_news" name="dokumentasi_news">
                        </div>
                        <button type="submit" class="btn btn-success">Save</button>
                        <button type="button" data-dismiss="modal" class="btn btn-danger">Cancel</button>
                      </form>
                    </div>
                    <div class="modal-footer">
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