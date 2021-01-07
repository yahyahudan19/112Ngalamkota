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
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>Mark</td>
                          <td>Otto</td>
                          <td>lore</td>
                          <td>lore</td>
                          <td>@mdo</td>
                            <td>
                                <button type="button" class="btn btn-secondary btn-sm">Edit</button>
                                <button type="button" class="btn btn-primary btn-sm">Hapus</button>
                            </td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>Jacob</td>
                          <td>Thornton</td>
                          <td>@fat</td>
                          <td>@mdo</td>
                          <td>@mdo</td>
                            <td>
                                <button type="button" class="btn btn-secondary btn-sm">Edit</button>
                                <button type="button" class="btn btn-primary btn-sm">Hapus</button>
                            </td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td>Larry</td>
                          <td>the Bird</td>
                          <td>@twitter</td>
                          <td>@twitter</td>
                          <td>@mdo</td>
                            <td>
                                <button type="button" class="btn btn-secondary btn-sm">Edit</button>
                                <button type="button" class="btn btn-primary btn-sm">Hapus</button>
                            </td>
                        </tr>
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
                            <form>
                              <div class="form-group">
                                <label>Tagline</label>
                                <input type="email" placeholder="Email Address" class="form-control">
                              </div>
                              <div class="form-group">       
                                <label>Isi</label>
                                <input type="password" placeholder="Password" class="form-control">
                              </div>
                              <div class="form-group">       
                                <label>Link</label>
                                <input type="password" placeholder="Password" class="form-control">
                              </div>
                              <div class="form-group">
                                <label>Dokumentasi</label>
                                <input type="file" class="form-control-sm" id="foto">
                              </div>
                              <div class="form-group">       
                                <input type="submit" value="Signin" class="btn btn-primary">
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
              </div>
            </div>
          </div>
        </section>