  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header sty-one">
      <h1>Pengumuman</h1>
      <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><i class="fa fa-angle-right"></i>Pengumuman</li>
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
              <div class="col-lg-12">
                <div class="block">
                  <!-- <div class="title"><strong>Tabel Pengumuman</strong></div> -->
                  <div class="table-responsive">
                    <table class="table table-bordered table-hover" id="pengumumanTable">
                      <thead>
                        <tr>
                          <!-- <th>ID</th> -->
                          <th>#</th>
                          <th>Tanggal Dibuat</th>
                          <th>Tagline</th>
                          <th>Judul</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $no = 1;
                        foreach ($pengumuman as $r) : ?>
                          <tr>
                            <th scope="row"><?= $no; ?></th>
                            <td><?= $r['date_pengumuman']; ?></td>
                            <td><?= $r['tagline_pengumuman']; ?></td>
                            <td><?= $r['judul_pengumuman']; ?></td>
                            <td>
                              <a href="/pengumuman/detailPengumuman/<?= $r['id_pengumuman']; ?>" class="btn btn-info btn-sm">Detail</a>
                              <a class="btn btn-warning btn-sm" href="/pengumuman/editPengumuman/<?= $r['id_pengumuman']; ?>">Edit</a>
                              <!-- <button type="button" class="btn btn-primary btn-sm">Hapus</button> -->
                              <a href="/pengumuman/delete/<?= $r['id_pengumuman']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin data ini akan dihapus');">Delete</a>

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
                <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-success">Tambah Pengumuman</button>
              </div>
              <!-- Modal-->
              <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" class="modal fade text-left" aria-hidden="true" style="display: none;">
                <div role="document" class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header"><strong id="exampleModalLabel" class="modal-title">Tambah Pengumuman</strong>
                      <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body">
                      <form action="/pengumuman/addPengumuman" method="post">
                        <?= csrf_field(); ?>
                        <div class="form-group">
                          <label>Tanggal Dibuat</label>
                          <input type="date" class="form-control" id="date_pengumuman" name="date_pengumuman" required>
                        </div>
                        <div class="form-group">
                          <label>Tagline</label>
                          <input type="text" placeholder="Tagline" class="form-control" id="tagline_pengumuman" name="tagline_pengumuman" required>
                        </div>
                        <div class="form-group">
                          <label>Judul</label>
                          <input type="text" placeholder="Judul" class="form-control" id="judul_pengumuman" name="judul_pengumuman" required>
                        </div>
                        <div class="form-group">
                          <label>Isi</label>
                          <textarea class="form-control" placeholder="Isi" id="isi_pengumuman" name="isi_pengumuman" required></textarea>
                        </div>
                        <!-- <div class="form-group">
                          <label>Link</label>
                          <input type="text" placeholder="Link" class="form-control" id="link_pengumuman" name="link_pengumuman" required>
                        </div> -->
                        <!-- <div class="form-group">
                        <label>Dokumentasi</label>
                        <input type="file" name="dokumentasiPengumuman" class="form-control-sm" id="dokumentasiPengumuman" multiple>
                        </div> -->
                        <div class="modal-footer">
                          <button type="submit" class="btn btn-success">Simpan</button>
                        </div>
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

  <!-- dropify -->
  <script src="dist/plugins/dropify/dropify.min.js"></script>
  <script>
    $(document).ready(function() {
      // Basic
      $('.dropify').dropify();

      // Translated
      $('.dropify-fr').dropify({
        messages: {
          default: 'Glissez-déposez un fichier ici ou cliquez',
          replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
          remove: 'Supprimer',
          error: 'Désolé, le fichier trop volumineux'
        }
      });

      // Used events
      var drEvent = $('#input-file-events').dropify();

      drEvent.on('dropify.beforeClear', function(event, element) {
        return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
      });

      drEvent.on('dropify.afterClear', function(event, element) {
        alert('File deleted');
      });

      drEvent.on('dropify.errors', function(event, element) {
        console.log('Has Errors');
      });

      var drDestroy = $('#input-file-to-destroy').dropify();
      drDestroy = drDestroy.data('dropify')
      $('#toggleDropify').on('click', function(e) {
        e.preventDefault();
        if (drDestroy.isDropified()) {
          drDestroy.destroy();
        } else {
          drDestroy.init();
        }
      })
    });
  </script>