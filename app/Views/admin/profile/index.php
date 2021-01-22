<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header sty-one">
    <h1 class="text-black">Profile Page</h1>
    <ol class="breadcrumb">
      <li><a href="#">Home</a></li>
      <li class="sub-bread"><i class="fa fa-angle-right"></i> Pengaturan</li>
      <li><i class="fa fa-angle-right"></i> Halaman Profile</li>
    </ol>
  </div>

  <!-- Main content -->
  <div class="content">
    <div class="row">
      <div class="col-lg-4">
        <div class="user-profile-box m-b-3">
          <div class="box-profile text-white"> <img class="profile-user-img img-responsive img-circle m-b-2" src="<?= base_url() ?>/adminpages/dist/img/img1.jpg" alt="User profile picture">
            <h3 class="profile-username text-center">Alexander Pierce</h3>
            <p class="text-center">&copy; alexanderpierce</p>
            <p class="text-center">Praesent libero. Sed cursus ante dapi bus diam. Sed nisi nulla quis sem at nibh elementum imperdiet. Duis sagi diam ipsum resent.</p>
          </div>
        </div>
        <div class="info-box">
          <div class="box-body">
            <strong><i class="fa fa-envelope margin-r-5"></i> Email address </strong>
            <p class="text-muted">alexanderpierce@gmail.com</p>
            <hr>
            <strong><i class="fa fa-phone margin-r-5"></i> Phone</strong>
            <p>(123) 456-7890 </p>
          </div>
          <!-- /.box-body -->
        </div>
      </div>
      <div class="col-lg-8">
        <div class="info-box">
          <div class="card tab-style1">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs profile-tab" role="tablist">
              <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#profile" role="tab" aria-expanded="false">Profile</a> </li>
              <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#settings" role="tab">Settings</a> </li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
              <!--second tab-->
              <div class="tab-pane active" id="profile" role="tabpanel" aria-expanded="false">
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-3 col-xs-6 b-r"> <strong>Full Name</strong> <br>
                      <p class="text-muted">Florence Douglas</p>
                    </div>
                    <div class="col-lg-3 col-xs-6 b-r"> <strong>Mobile</strong> <br>
                      <p class="text-muted">(123) 456 7890</p>
                    </div>
                    <div class="col-lg-3 col-xs-6 b-r"> <strong>Email</strong> <br>
                      <p class="text-muted">florencedouglas@admin.com</p>
                    </div>
                  </div>
                  <hr>
                  <p>Lorem Ipsum is simply dummy text of the printing vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                  <p>Suspen disse potenti. Sed lectus est, commodo eu pre tium eu, pulvinar porttitor feugiat. Aliquam efficitur feugiat accumsan. Nulla hendrerit cursus nisi nec mattis. </p>
                </div>
              </div>
              <div class="tab-pane" id="settings" role="tabpanel">
                <div class="card-body">
                  <form class="form-horizontal form-material">
                    <div class="form-group">
                      <label class="col-md-12">Full Name</label>
                      <div class="col-md-12">
                        <input placeholder="Florence Douglas" class="form-control form-control-line" type="text">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="example-email" class="col-md-12">Email</label>
                      <div class="col-md-12">
                        <input placeholder="florencedouglas@admin.com" class="form-control form-control-line" name="example-email" id="example-email" type="email">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-12">Password</label>
                      <div class="col-md-12">
                        <input value="password" class="form-control form-control-line" type="password">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-12">Phone No</label>
                      <div class="col-md-12">
                        <input placeholder="123 456 7890" class="form-control form-control-line" type="text">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-12">
                        <button class="btn btn-success">Update Profile</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Main row -->
  </div>
  <!-- /.content -->
</div>