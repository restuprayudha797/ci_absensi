<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="<?= base_url('login'); ?>" class="site_title"><i class="fa fa-users"></i> <span>Muda
                Graduate</span></a>
          </div>

          <div class="clearfix"></div>

          <!-- menu profile quick info -->
          <div class="profile clearfix">
            <div class="profile_info">
              <span>Selamat Datang,</span>
              <h2><?= $this->session->userdata('nama_user'); ?></h2>
            </div>
          </div>
          <!-- /menu profile quick info -->

          <br />

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <!-- <h3>General</h3> -->
              <ul class="nav side-menu">
                <li><a href="<?= base_url('admin'); ?>"><i class="fa fa-home"></i> Beranda</a></li>

                <li><a><i class="fa fa-credit-card"></i> RFID <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="<?= base_url('kelas') ?>">Kelas</a></li>
                    <li><a href="<?= base_url('siswa') ?>">Scan kartu</a></li>
                    <li><a href="<?= base_url('siswa') ?>">Scan kartu</a></li>
                     
                  </ul>
                </li>

               

              </ul>
            </div>
            <div class="menu_section">

            </div>

          </div>
          <!-- /sidebar menu -->

          <!-- /menu footer buttons -->
          <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
              <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
              <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
              <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="<?= base_url('auth/logout'); ?>">
              <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
          </div>
          <!-- /menu footer buttons -->
        </div>
      </div>

      <!-- top navigation -->
      <div class="top_nav">
        <div class="nav_menu">
          <div class="nav toggle">
            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
          </div>
          <nav class="nav navbar-nav">
            <ul class=" navbar-right">
              <li class="nav-item dropdown open" style="padding-left: 15px;">
                <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                  <b><?= $this->session->userdata('nama_user'); ?></b>
                </a>
                <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="<?= base_url('auth/logout'); ?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                  <button type="button" class="dropdown-item" data-toggle="modal" data-target="#exampleModal">
                  <i class="fa fa-unlock-alt pull-right" data-toggle="modal" data-target="#exampleModal"></i>Change Password
                  </button>
                </div>
              </li>

            </ul>
          </nav>
        </div>
      </div>
      <!-- /top navigation -->