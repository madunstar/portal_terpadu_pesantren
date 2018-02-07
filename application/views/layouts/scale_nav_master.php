
<header class="bg-dark header header-md navbar navbar-fixed-top-xs box-shadow">
  <div class="navbar-header aside-md dk">
    <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen" data-target="#nav">
      <i class="fa fa-bars"></i>
    </a>
    <a href="<?php echo site_url('')?>" class="navbar-brand">
      <img src="<?php echo base_url('assets/images/logo.png'); ?>" class="m-r-sm" alt="scale">
      <span class="hidden-nav-xs" style="font-size:15px">Pesantren Darul Ilmi</span>
    </a>
    <a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".user">
      <i class="fa fa-cog"></i>
    </a>
  </div>


  <ul class="nav navbar-nav navbar-right m-n hidden-xs nav-user user">
    <li class="hidden-xs">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <i class="i i-chat3"></i>
        <span class="badge badge-sm up bg-danger count">2</span>
      </a>
      <section class="dropdown-menu aside-xl animated flipInY">
        <section class="panel bg-white">
          <div class="panel-heading b-light bg-light">
            <strong>You have <span class="count">2</span> notifications</strong>
          </div>
          <div class="list-group list-group-alt">
            <a href="#" class="media list-group-item">
              <span class="pull-left thumb-sm">
                <img src="<?php echo base_url('assets/images/a0.png'); ?>" alt="..." class="img-circle">
              </span>
              <span class="media-body block m-b-none">
                Use awesome animate.css<br>
                <small class="text-muted">10 minutes ago</small>
              </span>
            </a>
            <a href="#" class="media list-group-item">
              <span class="media-body block m-b-none">
                1.0 initial released<br>
                <small class="text-muted">1 hour ago</small>
              </span>
            </a>
          </div>
          <div class="panel-footer text-sm">
            <a href="#" class="pull-right"><i class="fa fa-cog"></i></a>
            <a href="#notes" data-toggle="class:show animated fadeInRight">See all the notifications</a>
          </div>
        </section>
      </section>
    </li>
    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <span class="thumb-sm avatar pull-left">
          <img src="<?php echo base_url('assets/images/a0.png'); ?>" alt="...">
        </span>
        Admin <b class="caret"></b>
      </a>
      <ul class="dropdown-menu animated fadeInRight">
        <li>
          <span class="arrow top"></span>
          <a href="#">Ubah Password</a>
        </li>
        <li class="divider"></li>
        <li>
          <a href="modal.lockme.html" data-toggle="ajaxModal" >Logout</a>
        </li>
      </ul>
    </li>
  </ul>
</header>
<section>
  <section class="hbox stretch">
    <!-- .aside -->
    <aside class="bg-black aside-md hidden-print" id="nav">
      <section class="vbox">
        <section class="w-f scrollable">
          <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="10px" data-railOpacity="0.2">



            <!-- nav -->
            <nav class="nav-primary hidden-xs">
              <div class="text-muted text-sm hidden-nav-xs padder m-t-sm m-b-sm">Menu</div>
              <ul class="nav nav-main" data-ride="collapse">
                <li  class="">
                  <a href="<?php echo site_url('')?>" class="auto">
                    <i class="fa fa-dashboard">
                    </i>
                    <span class="font-bold">Dashboard</span>
                  </a>
                </li>
                <li >
                  <a href="#" class="auto">
                    <span class="pull-right text-muted">
                      <i class="i i-circle-sm-o text"></i>
                      <i class="i i-circle-sm text-active"></i>
                    </span>

                    <i class="fa fa-bars">
                    </i>
                    <span class="font-bold">Data Master</span>
                  </a>
                  <ul class="nav dk">
                    <li >
                      <a href="layout-color.html" class="auto">
                        <i class="i i-dot"></i>

                        <span>Data Santri</span>
                      </a>
                    </li>
                    <li >
                      <a href="layout-hbox.html" class="auto">
                        <i class="i i-dot"></i>

                        <span>Data Guru</span>
                      </a>
                    </li>
                    <li >
                      <a href="layout-boxed.html" class="auto">
                        <i class="i i-dot"></i>

                        <span>Data Staff</span>
                      </a>
                    </li>
                    <li >
                      <a href="layout-fluid.html" class="auto">
                        <i class="i i-dot"></i>

                        <span>Data kelas</span>
                      </a>
                    </li>
                    <li >
                      <a href="layout-fluid.html" class="auto">
                        <i class="i i-dot"></i>

                        <span>Data Mata Pelajaran</span>
                      </a>
                    </li>

                  </ul>
                </li>
                <li >
                  <a href="#" class="auto">
                    <span class="pull-right text-muted">
                      <i class="i i-circle-sm-o text"></i>
                      <i class="i i-circle-sm text-active"></i>
                    </span>
                    <i class="i i-file-check icon">
                    </i>
                    <span class="font-bold">Presensi</span>
                  </a>
                  <ul class="nav dk">
                    <li >
                      <a href="buttons.html" class="auto">
                        <i class="i i-dot"></i>

                        <span>Jadwal Pelajaran</span>
                      </a>
                    </li>
                    <li >
                      <a href="icons.html" class="auto">
                        <b class="badge bg-info pull-right">369</b>
                        <i class="i i-dot"></i>

                        <span>Presensi Siswa</span>
                      </a>
                    </li>
                    <li >
                      <a href="grid.html" class="auto">
                        <i class="i i-dot"></i>

                        <span>Rekap Presensi Siswa</span>
                      </a>
                    </li>

                  </ul>
                </li>
                <li >
                  <a href="#" class="auto">
                    <span class="pull-right text-muted">
                      <i class="i i-circle-sm-o text"></i>
                      <i class="i i-circle-sm text-active"></i>
                    </span>
                    <i class="fa fa-briefcase">
                    </i>
                    <span class="font-bold">Perizinan</span>
                  </a>
                  <ul class="nav dk">
                    <li >
                      <a href="profile.html" class="auto">
                        <i class="i i-dot"></i>

                        <span>Keluar Pondok</span>
                      </a>
                    </li>
                    <li >
                      <a href="invoice.html" class="auto">
                        <i class="i i-dot"></i>

                        <span>Kembali ke Pondok</span>
                      </a>
                    </li>
                    <li >
                      <a href="intro.html" class="auto">
                        <i class="i i-dot"></i>

                        <span>Data Denda</span>
                      </a>
                    </li>
                    <li >
                      <a href="master.html" class="auto">
                        <i class="i i-dot"></i>

                        <span>Data Pembayaran Denda</span>
                      </a>
                    </li>

                  </ul>
                </li>
                <li >
                  <a href="#" class="auto">
                    <span class="pull-right text-muted">
                      <i class="i i-circle-sm-o text"></i>
                      <i class="i i-circle-sm text-active"></i>
                    </span>
                    <i class="fa fa-cogs">
                    </i>
                    <span class="font-bold">Lain lain</span>
                  </a>
                  <ul class="nav dk">
                    <li >
                      <a href="mail.html" class="auto">

                        <i class="i i-dot"></i>

                        <span>Data Admin</span>
                      </a>
                    </li>
                    <li >
                      <a href="fullcalendar.html" class="auto">
                        <i class="i i-dot"></i>

                        <span>Data Pendidikan</span>
                      </a>
                    </li>
                    <li >
                      <a href="project.html" class="auto">
                        <i class="i i-dot"></i>

                        <span>Data Pekerjaan</span>
                      </a>
                    </li>
                    <li >
                      <a href="media.html" class="auto">
                        <i class="i i-dot"></i>

                        <span>Data Provinsi</span>
                      </a>
                    </li>
                    <li >
                      <a href="media.html" class="auto">
                        <i class="i i-dot"></i>

                        <span>Data Kota /Kabupaten</span>
                      </a>
                    </li>
                    <li >
                      <a href="media.html" class="auto">
                        <i class="i i-dot"></i>

                        <span>Data Kecamatan</span>
                      </a>
                    </li>
                    <li >
                      <a href="media.html" class="auto">
                        <i class="i i-dot"></i>

                        <span>Data Desa / Keluarahan</span>
                      </a>
                    </li>
                    <li >
                      <a href="<?php echo site_url('master_data_c/Tb_role_admin'); ?>" class="auto">
                        <i class="i i-dot"></i>

                        <span>Data Role Admin</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <li  class="">
                  <a href="<?php echo site_url('pendaftaran_adm/dashboard')?>" class="auto">
                    <i class="fa fa-folder-open-o">
                    </i>
                    <span class="font-bold">Pendaftaran</span>
                  </a>
                </li>
              </ul>



            </nav>
            <!-- / nav -->
          </div>
        </section>

        <footer class="footer hidden-xs no-padder text-center-nav-xs">
          <a href="modal.lockme.html" data-toggle="ajaxModal" class="btn btn-icon icon-muted btn-inactive pull-right m-l-xs m-r-xs hidden-nav-xs">
            <i class="i i-logout"></i>
          </a>
          <a href="#nav" data-toggle="class:nav-xs" class="btn btn-icon icon-muted btn-inactive m-l-xs m-r-xs">
            <i class="i i-circleleft text"></i>
            <i class="i i-circleright text-active"></i>
          </a>
        </footer>
      </section>
    </aside>
    <!-- /.aside -->
