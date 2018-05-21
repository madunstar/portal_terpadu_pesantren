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
                    <a href="<?php echo base_url() ?>admin/santriakd/" class="auto">
                      <i class="fa fa-dashboard">
                      </i>
                      <span class="font-bold">Dashboard</span>
                    </a>
                  </li>
                  <li class="<?= (($menu == "santriakd") && ($submenu == 'santri') || ($submenu == 'santriberkas') || ($submenu == 'santritambahberkas') || ($submenu == 'santrieditberkas') || ($submenu == 'santrilihat') || ($submenu == 'guru') || ($submenu == 'staff') || ($submenu == 'kelas') || ($submenu == 'matpel') || ($submenu == 'jenjang') || ($submenu == 'jenjangtingkat') || ($submenu == 'pondokan') || ($submenu == 'pakpondokan') || ($submenu == 'pakafilasi')) ? "active" : ""; ?>">
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
                      <li class="<?= (($menu == "santriakd") && ($submenu == 'santri') || ($submenu == 'santrilihat') || ($submenu == 'santriberkas') || ($submenu == 'santritambahberkas') || ($submenu == 'santrieditberkas')) ? "active" : ""; ?>">
                        <a href="<?php echo base_url() ?>admin/santriakd/santri" class="auto">
                          <i class="i i-dot"></i>

                          <span>Data Santri</span>
                        </a>
                      </li>
                      <li class="<?= (($menu == "santriakd") &&  ($submenu == 'guru')) ? "active" : ""; ?>">
                      <a href="<?php echo base_url() ?>admin/santriakd/guru" class="auto">
                          <i class="i i-dot"></i>

                          <span>Data Guru</span>
                        </a>
                      </li>
                      <li class="<?= (($menu == "santriakd") &&  ($submenu == 'kelas')) ? "active" : ""; ?>">
                      <a href="<?php echo base_url() ?>admin/santriakd/kelas" class="auto">
                          <i class="i i-dot"></i>

                          <span>Data Kelas</span>
                        </a>
                      </li>
                      <li class="<?= ((($menu == "santriakd") &&  ($submenu == 'jenjang')) || (($submenu == 'jenjangtingkat')) ) ? "active" : ""; ?>">
                      <a href="<?php echo base_url() ?>admin/santriakd/jenjang" class="auto">
                          <i class="i i-dot"></i>

                          <span>Data Jenjang</span>
                        </a>
                      </li>
                      <li class="<?= ((($menu == "santriakd") &&  ($submenu == 'pondokan')) || (($submenu == 'pondokantingkat')) ) ? "active" : ""; ?>">
                      <a href="<?php echo base_url() ?>admin/santriakd/pondokan" class="auto">
                          <i class="i i-dot"></i>

                          <span>Data Pondokan</span>
                        </a>
                      </li>
                      <li class="<?= ((($menu == "santriakd") &&  ($submenu == 'pakpondokan')) ) ? "active" : ""; ?>">
                      <a href="<?php echo base_url() ?>admin/santriakd/pakpondokan" class="auto">
                          <i class="i i-dot"></i>

                          <span>Jam Kelas Pondokan</span>
                        </a>
                      </li>
                      <li class="<?= ((($menu == "santriakd") &&  ($submenu == 'pakafilasi')) ) ? "active" : ""; ?>">
                      <a href="<?php echo base_url() ?>admin/santriakd/pakafilasi" class="auto">
                          <i class="i i-dot"></i>

                          <span>Jam Kelas Afilasi</span>
                        </a>
                      </li>
                      <li class="<?= (($menu == "santriakd") &&  ($submenu == 'matpel')) ? "active" : ""; ?>">
                      <a href="<?php echo base_url() ?>admin/santriakd/matpel" class="auto">
                          <i class="i i-dot"></i>

                          <span>Data Mata Pelajaran</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li  class="<?= (($menu == "santriakd") && ($submenu == 'datakelasbelajar') || ($submenu == 'aturkelasbelajar') || ($submenu == 'datakelaspondokan') || ($submenu == 'lihatkelaspondokansantri') || ($submenu == 'lihatkelaspondokansantri') || ($submenu == 'editkelaspondokan') || ($submenu == 'lihatkelaspondokan') || ($submenu == 'pelajaranrekap') || ($submenu == 'pondokanrekap') || ($submenu == 'datarekapsantri') || ($submenu == 'datarekapguru') || ($submenu == 'datarekapsantripondokan') || ($submenu == 'datarekapgurupondokan') || ($submenu == 'jadwalafilasi') || ($submenu == 'jadwalpondokan')) ? "active" : ""; ?>">
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
                       <a href="<?php echo base_url() ?>admin/santriakd/pelajaran" class="auto">
                          <i class="i i-dot"></i>

                          <span>Atur Pelajaran</span>
                        </a>
                      </li>
                      <li  class="<?= (($menu == "santriakd") &&  ($submenu == 'datakelaspondokan'  || $submenu == 'jadwalpondokan')) ? "active" : ""; ?>">
                        <a href="<?php echo base_url() ?>admin/santriakd/datakelaspondokan" class="auto">

                          <i class="i i-dot"></i>

                          <span>Atur Kelas Pondokan</span>
                        </a>
                      </li>
                      <li  class="<?= (($menu == "santriakd") &&  ($submenu == 'datakelasbelajar' || $submenu == 'jadwalafilasi')) ? "active" : ""; ?>">
                        <a href="<?php echo base_url() ?>admin/santriakd/datakelasbelajar" class="auto">

                          <i class="i i-dot"></i>

                          <span>Atur Kelas Afilasi</span>
                        </a>
                      </li>
											<li class="<?= (($menu == "santriakd") &&  ($submenu == 'pondokanrekap') || ($submenu == 'datarekapsantripondokan') || ($submenu == 'datarekapgurupondokan') ) ? "active" : ""; ?>">
												<a href="<?php echo base_url() ?>admin/santriakd/pondokanrekap" class="auto">
													<i class="i i-dot"></i>
													<span>Rekap Presensi Pondokan</span>
												</a>
											</li>
                      <li class="<?= (($menu == "santriakd") &&  ($submenu == 'pelajaranrekap') || ($submenu == 'datarekapsantri') || ($submenu == 'datarekapguru')) ? "active" : ""; ?>">
                        <a href="<?php echo base_url() ?>admin/santriakd/pelajaranrekap" class="auto">
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
            <a href="<?php echo base_url() ?>admin/santriakd/logout" class="btn btn-icon icon-muted btn-inactive pull-right m-l-xs m-r-xs hidden-nav-xs">
              <i class="i i-logout"></i>
            </a>
            <a href="#nav" data-toggle="class:nav-xs" class="btn btn-icon icon-muted btn-inactive m-l-xs m-r-xs">
              <i class="i i-circleleft text"></i>
              <i class="i i-circleright text-active"></i>
            </a>
          </footer>
        </section>
      </aside>
