<div class="page-content">
        <!-- Page Header-->
        <div class="page-header no-margin-bottom">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">News</h2>
          </div>
        </div>
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">News</li>
          </ul>
        </div>
        <section class="no-padding-top">
          <div class="container-fluid">
              <div class="row">
              <div class="col-lg-9">
                <div class="block">
                  <div class="title"><strong>Tabel News</strong></div>
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
                      <?php foreach ($news as $r ) :?>
                        <tr>
                          <th scope="row"><?= $r['id_news'];?></th>
                          <td><?= $r['tagline_news'];?></td>
                          <td><?= $r['isi_news'];?></td>
                          <td><?= $r['link_news'];?></td>
                          <td><?= $r['date_news'];?></td>
                          <td><?= $r['dokumentasi_news'];?></td>
                          <td><?= $r['created_at'];?></td>
                            <td>
                                <button type="button" class="btn btn-secondary btn-sm">Edit</button>
                                <!-- <button type="button" class="btn btn-primary btn-sm">Hapus</button> -->
                                <a href="/news/delete/<?= $r['id_news']; ?>" class="btn btn-primary btn-sm" onclick="return confirm('Yakin data ini akan dihapus');">Delete</a>
                                <a href="/news/detailNews/<?= $r['id_news']; ?>" class="btn btn-info btn-sm">Detail</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>                        
                      </tbody>
                    </table>
                  </div>
                </div>
                    <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary">Tambah Berita</button>
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
                              <button type="submit" class="btn btn-primary">Tambah </button>
                              <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
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