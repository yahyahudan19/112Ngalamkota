      <!-- Sidebar Navigation-->
      <nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
          <div class="avatar"><img src="<?= base_url()?>/template/assets/img/ngalam.png" alt="..." class="img-fluid rounded-circle"></div>
          <div class="title">
            <h1 class="h5">Yahya Hudan </h1>
            <p>Hi ! Admin 112 - 01</p>
          </div>
        </div>
        <!-- Sidebar Navidation Menus--><span class="heading">Menu</span>
        <ul class="list-unstyled">
                <li class="active"><a href="/admin"> <i class="icon-dashboard"></i>Dashboard </a></li>
                <li><a href="/admin/news"> <i class="fa fa-newspaper-o"></i>News </a></li>
                <!-- <li><a href="/admin/report"> <i class="icon-form-1"></i>Report </a></li> -->
                <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-form-1"></i>Report </a>
                  <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                    <li><a href="/admin/reportfeedback">Feedback</a></li>
                    <li><a href="/admin/reportlaporan">Laporan</a></li>
                  </ul>
                </li>
                <li><a href="/admin/user"> <i class="icon-user"></i>Users </a></li>
      </nav>
      <!-- Sidebar Navigation end-->