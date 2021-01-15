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
              <div class="col-lg-10">
                <div class="block">
                  <div class="title"><strong>Tabel Pengumuman</strong></div>
                  <div class="table-responsive">
                    <table class="table table-striped table-hover">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Isi Pengumuman</th>
                          <th>Dokumentasi</th>
                          <th>Dibuat Tanggal</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row"></th>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td>
                            <a href="/news/detailNews/" class="btn btn-info btn-sm">Detail</a>
                            <button type="button" class="btn btn-warning btn-sm">Edit</button>
                            <!-- <button type="button" class="btn btn-primary btn-sm">Hapus</button> -->
                            <a href="/news/delete/" class="btn btn-danger btn-sm" onclick="return confirm('Yakin data ini akan dihapus');">Delete</a>
                          </td>
                        </tr>
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
                    <div class="modal-header"><strong id="exampleModalLabel" class="modal-title">Tambah Berita</strong>
                      <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body">
                      <form action="/news/addNews" method="post">
                        <?= csrf_field(); ?>
                        <div class="form-group">
                          <label>Isi Pengumuman</label>
                          <input type="text" placeholder="Isi" class="form-control" id="isi_news" name="isi_news">
                        </div>
                        <div class="form-group">
                          <label>Date</label>
                          <input type="text" placeholder="Link" class="form-control" id="date_news" name="date_news">
                        </div>
                        <div class="form-group">
                          <label>Dokumentasi</label>
                          <!-- <input type="file" class="dropify" id="input-file-now" name="dokumentasi_news"> -->
                          <div class="col-lg-6 col-md-15">
                            <div class="card">
                              <div class="card-body">
                                <h4 class="text-black">Upload Files Here</h4>
                                <input type="file" id="input-file-now" class="dropify" />
                              </div>
                            </div>
                          </div>
                        </div>
                        <button type="submit" class="btn btn-success">Save </button>
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