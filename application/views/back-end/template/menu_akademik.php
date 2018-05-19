<?php
	$menu = $this->router->fetch_class();
	$submenu = $this->router->fetch_method();
?>
 <aside class="bg-black aside-md hidden-print" id="nav">
        <section class="vbox">
          <section class="w-f scrollable">
            <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="10px" data-railOpacity="0.2">



              <!-- nav -->
              <nav class="nav-primary hidden-xs">
                <div class="text-muted text-sm hidden-nav-xs padder m-t-sm m-b-sm">Menu</div>
                <ul class="nav nav-main" data-ride="collapse">
                  <li  class="<?= (($menu == "santriakd") && ($submenu == 'index')) ? "active" : ""; ?>">
                    <a href="<?php echo base_url() ?>admin/datamaster/" class="auto">
                      <i class="fa fa-dashboard">
                      </i>
                      <span class="font-bold">Dashboard</span>
                    </a>
                  </li>
                  <li class="<?= (($menu == "santriakd") && ($submenu == 'santri') || ($submenu == 'santrilihat') || ($submenu == 'guru') || ($submenu == 'staff') || ($submenu == 'kelas') || ($submenu == 'matpel') || ($submenu == 'jenjang') || ($submenu == 'jenjangtingkat') || ($submenu == 'pondokan') || ($submenu == 'pakpondokan') || ($submenu == 'pakafilasi')) ? "active" : ""; ?>">
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
                      <li class="<?= (($menu == "santriakd") && ($submenu == 'santri') || ($submenu == 'santrilihat')) ? "active" : ""; ?>">
                        <a href="<?php echo base_url() ?>admin/santriakd/santri" class="auto">
                          <i class="i i-dot"></i>

                          <span>Data Santri</span>
                        </a>
                      </li>
                      <li class="<?= (($menu == "datamaster") &&  ($submenu == 'guru')) ? "active" : ""; ?>">
                      <a href="<?php echo base_url() ?>admin/datamaster/guru" class="auto">
                          <i class="i i-dot"></i>

                          <span>Data Guru</span>
                        </a>
                      </li>
                      <li class="<?= (($menu == "datamaster") &&  ($submenu == 'kelas')) ? "active" : ""; ?>">
                      <a href="<?php echo base_url() ?>admin/datamaster/kelas" class="auto">
                          <i class="i i-dot"></i>

                          <span>Data Kelas</span>
                        </a>
                      </li>
                      <li class="<?= ((($menu == "datamaster") &&  ($submenu == 'jenjang')) || (($submenu == 'jenjangtingkat')) ) ? "active" : ""; ?>">
                      <a href="<?php echo base_url() ?>admin/datamaster/jenjang" class="auto">
                          <i class="i i-dot"></i>

                          <span>Data Jenjang</span>
                        </a>
                      </li>
                      <li class="<?= ((($menu == "datamaster") &&  ($submenu == 'pondokan')) || (($submenu == 'pondokantingkat')) ) ? "active" : ""; ?>">
                      <a href="<?php echo base_url() ?>admin/datamaster/pondokan" class="auto">
                          <i class="i i-dot"></i>

                          <span>Data Pondokan</span>
                        </a>
                      </li>
                      <li class="<?= ((($menu == "datamaster") &&  ($submenu == 'pakpondokan')) ) ? "active" : ""; ?>">
                      <a href="<?php echo base_url() ?>admin/datamaster/pakpondokan" class="auto">
                          <i class="i i-dot"></i>

                          <span>Jam Kelas Pondokan</span>
                        </a>
                      </li>
                      <li class="<?= ((($menu == "datamaster") &&  ($submenu == 'pakafilasi')) ) ? "active" : ""; ?>">
                      <a href="<?php echo base_url() ?>admin/datamaster/pakafilasi" class="auto">
                          <i class="i i-dot"></i>

                          <span>Jam Kelas Afilasi</span>
                        </a>
                      </li>
                      <li class="<?= (($menu == "datamaster") &&  ($submenu == 'matpel')) ? "active" : ""; ?>">
                      <a href="<?php echo base_url() ?>admin/datamaster/matpel" class="auto">
                          <i class="i i-dot"></i>

                          <span>Data Mata Pelajaran</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li  class="<?= (($menu == "datamaster") && ($submenu == 'datakelasbelajar') || ($submenu == 'aturkelasbelajar') || ($submenu == 'datakelaspondokan') || ($submenu == 'lihatkelaspondokansantri') || ($submenu == 'lihatkelaspondokansantri') || ($submenu == 'editkelaspondokan') || ($submenu == 'lihatkelaspondokan') || ($submenu == 'pelajaranrekap') || ($submenu == 'pondokanrekap') || ($submenu == 'datarekapsantri') || ($submenu == 'datarekapguru') || ($submenu == 'datarekapsantripondokan') || ($submenu == 'datarekapgurupondokan') || ($submenu == 'jadwalafilasi') || ($submenu == 'jadwalpondokan')) ? "active" : ""; ?>">
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
											<li>
                       <a href="<?php echo base_url() ?>admin/datamaster/pelajaran" class="auto">
                          <i class="i i-dot"></i>

                          <span>Atur Pelajaran</span>
                        </a>
                      </li>
                      <li  class="<?= (($menu == "datamaster") &&  ($submenu == 'datakelaspondokan'  || $submenu == 'jadwalpondokan')) ? "active" : ""; ?>">
                        <a href="<?php echo base_url() ?>admin/datamaster/datakelaspondokan" class="auto">

                          <i class="i i-dot"></i>

                          <span>Atur Kelas Pondokan</span>
                        </a>
                      </li>
                      <li  class="<?= (($menu == "datamaster") &&  ($submenu == 'datakelasbelajar' || $submenu == 'jadwalafilasi')) ? "active" : ""; ?>">
                        <a href="<?php echo base_url() ?>admin/datamaster/datakelasbelajar" class="auto">

                          <i class="i i-dot"></i>

                          <span>Atur Kelas Afilasi</span>
                        </a>
                      </li>
											<li class="<?= (($menu == "datamaster") &&  ($submenu == 'pondokanrekap') || ($submenu == 'datarekapsantripondokan') || ($submenu == 'datarekapgurupondokan') ) ? "active" : ""; ?>">
												<a href="<?php echo base_url() ?>admin/datamaster/pondokanrekap" class="auto">
													<i class="i i-dot"></i>
													<span>Rekap Presensi Pondokan</span>
												</a>
											</li>
                      <li class="<?= (($menu == "datamaster") &&  ($submenu == 'pelajaranrekap') || ($submenu == 'datarekapsantri') || ($submenu == 'datarekapguru')) ? "active" : ""; ?>">
                        <a href="<?php echo base_url() ?>admin/datamaster/pelajaranrekap" class="auto">
                          <i class="i i-dot"></i>
                          <span>Rekap Presensi Kelas Afiliasi</span>
                        </a>
                      </li>

                    </ul>
                  </li>
                </ul>



              </nav>
              <!-- / nav -->
            </div>
          </section>

          <footer class="footer hidden-xs no-padder text-center-nav-xs">
            <a href="<?php echo base_url() ?>admin/datamaster/logout" class="btn btn-icon icon-muted btn-inactive pull-right m-l-xs m-r-xs hidden-nav-xs">
              <i class="i i-logout"></i>
            </a>
            <a href="#nav" data-toggle="class:nav-xs" class="btn btn-icon icon-muted btn-inactive m-l-xs m-r-xs">
              <i class="i i-circleleft text"></i>
              <i class="i i-circleright text-active"></i>
            </a>
          </footer>
        </section>
      </aside>
