  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <div class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="image text-center"><img src="<?= base_url() ?>/templatepage/images/ngalam.png" class="img-circle" alt="User Image"> </div>
        <div class="info">
          <p>Yahya Hudan</p>
          <a href="#"><i class="fa fa-cog"></i></a> <a href="#"><i class="fa fa-envelope-o"></i></a> <a href="/auth"><i class="fa fa-power-off"></i></a>
        </div>
      </div>

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <?php
      if (session()->get('role') == "1") {
      ?>
        <ul class="sidebar-menu" data-widget="tree">
          <li class="header">MAIN MENU</li>
          <li class="active"> <a href="/superadmin"> <i class="fa fa-dashboard"></i> <span>Dashboard</span> <span class="pull-right-container"></span> </a></li>
          <li class="active"> <a href="/news"> <i class="fa fa-newspaper-o"></i> <span>Berita</span> <span class="pull-right-container"></span> </a>
          <li class="active"> <a href="/superAdmin/pengumuman"> <i class="fa fa-podcast"></i> <span>Pengumuman</span> <span class="pull-right-container"></span> </a>
          </li>
          <li class="treeview"> <a href="#"> <i class="fa fa-edit"></i> <span>Laporan</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
            <ul class="treeview-menu">
              <li><a href="/report">Laporan Kejadian</a></li>
              <li><a href="/superAdmin/reportFeedback">Laporan Feedback</a></li>
            </ul>
          </li>
          </li>
          <li class="header">Pengaturan</li>
          <li class=""> <a href="/superAdmin/user"> <i class="fa fa-users"></i> <span>User Management</span> <span class="pull-right-container"></i> </span> </a>
          </li>
          <li class=""> <a href="/superAdmin/profile"> <i class="fa fa-user"></i> <span>Profile</span> <span class="pull-right-container"></i> </span> </a>
        </ul>
      <?php
      } else if (session()->get('role') == "2") {
      ?>
        <ul class="sidebar-menu" data-widget="tree">
          <li class="header">MAIN MENU</li>
          <li class=""> <a href="/admin"> <i class="fa fa-dashboard"></i> <span>Dashboard</span> <span class="pull-right-container"></span> </a></li>
          </li>
          <li class="treeview"> <a href="#"> <i class="fa fa-edit"></i> <span>Laporan</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
            <ul class="treeview-menu">
              <li><a href="/report">Laporan Kejadian</a></li>
            </ul>
          </li>
          </li>
          <li class="header">Pengaturan</li>
          <li class=""> <a href="/superAdmin/profile"> <i class="fa fa-user"></i> <span>Profile</span> <span class="pull-right-container"></i> </span> </a>
        </ul>
      <?php
      }
      ?>
    </div>
    <!-- /.sidebar -->
  </aside>