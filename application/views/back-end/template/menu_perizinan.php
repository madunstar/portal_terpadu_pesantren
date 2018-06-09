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
									<li  class="<?= (($menu == "perizinan") && ($submenu == 'index')) ? "active" : ""; ?>">
										<a href="<?php echo base_url() ?>admin/perizinansantri" class="auto">
											<i class="fa fa-dashboard">
											</i>
											<span class="font-bold">Dashboard</span>
										</a>
									</li>
									<li class="<?= (($menu == "perizinan") && ($submenu == 'santri') || ($submenu == 'santriberkas') || ($submenu == 'santritambahberkas') || ($submenu == 'santrieditberkas') || ($submenu == 'santrilihat') || ($submenu == 'ubahpelanggaran') || ($submenu == 'tambahpelanggaran') || ($submenu == 'pelanggaransantri') || ($submenu == 'prestasisantri') || ($submenu == 'ubahprestasi') || ($submenu == 'tambahprestasi') || ($submenu == 'guru') || ($submenu == 'gurutambah') || ($submenu == 'guruedit') || ($submenu == 'gurulihat') || ($submenu == 'guruberkas') || ($submenu == 'gurutambahberkas') || ($submenu == 'gurueditberkas')  || ($submenu == 'staff') || ($submenu == 'kelas') || ($submenu == 'kelastambah') || ($submenu == 'kelasedit') || ($submenu == 'matpel') || ($submenu == 'matpellihat') || ($submenu == 'matpeltambah') || ($submenu == 'matpeledit') || ($submenu == 'jenjang') || ($submenu == 'jenjangtingkat') || ($submenu == 'pondokan') || ($submenu == 'pakpondokan') || ($submenu == 'pakafilasi')) ? "active" : ""; ?>">
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
											<li class="<?= (($menu == "perizinan") && ($submenu == 'santri') || ($submenu == 'santrilihat') || ($submenu == 'santriberkas') || ($submenu == 'santritambahberkas') || ($submenu == 'santrieditberkas') || ($submenu == 'ubahpelanggaran') || ($submenu == 'tambahpelanggaran') || ($submenu == 'pelanggaransantri') || ($submenu == 'prestasisantri') || ($submenu == 'ubahprestasi') || ($submenu == 'tambahprestasi')) ? "active" : ""; ?>">
												<a href="<?php echo base_url() ?>admin/perizinansantri/santri" class="auto">
													<i class="i i-dot"></i>

													<span>Data Santri</span>
												</a>
											</li>

										</ul>
									</li>
                  <li class="<?= (($menu == "perizinan") && ($submenu == 'keluar') || ($submenu == 'aturdenda')|| ($submenu == 'kembali') || ($submenu == 'datakembali') || ($submenu == 'datakeluar') || ($submenu == 'datadenda') || ($submenu == 'kembalidenda') || ($submenu == 'pembayarandenda') || ($submenu == 'suratizin')) ? "active" : ""; ?>">
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

                      <li class="<?= (($menu == "perizinan") && ($submenu == 'datakeluar') || ($submenu == 'keluar') || ($submenu == 'suratizin')) ? "active" : ""; ?>">
                        <a href="<?php echo base_url() ?>admin/perizinansantri/datakeluar" class="auto">
                          <i class="i i-dot"></i>

                          <span>Keluar Pondok</span>
                        </a>
                      </li>
											<li class="<?= (($menu == "perizinan") && ($submenu == 'datakembali') || ($submenu == 'kembali') || ($submenu == 'kembalidenda')) ? "active" : ""; ?>">
                        <a href="<?php echo base_url() ?>admin/perizinansantri/datakembali" class="auto">
                          <i class="i i-dot"></i>

                          <span>Kembali ke Pondok</span>
                        </a>
                      </li>
											<li class="<?= (($menu == "perizinan") && ($submenu == 'datadenda') || ($submenu == 'riwayatbayardenda')) ? "active" : ""; ?>">
                        <a href="<?php echo base_url() ?>admin/perizinansantri/datadenda" class="auto">
                          <i class="i i-dot"></i>

                          <span>Data Denda</span>
                        </a>
                      </li>
											<li class="<?= (($menu == "perizinan") && ($submenu == 'aturdenda')  ) ? "active" : ""; ?>">
												<a href="<?php echo base_url() ?>admin/perizinansantri/aturdenda" class="auto">
													<i class="i i-dot"></i>

													<span>Pengaturan Denda</span>
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
            <a href="<?php echo base_url() ?>admin/perizinansantri/logout" class="btn btn-icon icon-muted btn-inactive pull-right m-l-xs m-r-xs hidden-nav-xs">
              <i class="i i-logout"></i>
            </a>
            <a href="#nav" data-toggle="class:nav-xs" class="btn btn-icon icon-muted btn-inactive m-l-xs m-r-xs">
              <i class="i i-circleleft text"></i>
              <i class="i i-circleright text-active"></i>
            </a>
          </footer>
        </section>
      </aside>
