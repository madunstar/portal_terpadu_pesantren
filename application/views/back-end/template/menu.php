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
                  <li  class="<?= (($menu == "datamaster") && ($submenu == 'index')) ? "active" : ""; ?>">
                    <a href="<?php echo base_url() ?>admin/datamaster/" class="auto">
                      <i class="fa fa-dashboard">
                      </i>
                      <span class="font-bold">Dashboard</span>
                    </a>
                  </li>
                  <li class="<?= (($menu == "datamaster") && ($submenu == 'santri') || ($submenu == 'santriwati') || ($submenu == 'guru') || ($submenu == 'staff') || ($submenu == 'kelas') || ($submenu == 'matpel') || ($submenu == 'jenjang') || ($submenu == 'jenjangtingkat') || ($submenu == 'pondokan') || ($submenu == 'pakpondokan') || ($submenu == 'pakafilasi')) ? "active" : ""; ?>">
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
                      <li class="<?= (($menu == "datamaster") && ($submenu == 'santri')) ? "active" : ""; ?>">
                        <a href="<?php echo base_url() ?>admin/datamaster/santri" class="auto">
                          <i class="i i-dot"></i>

                          <span>Data Santri</span>
                        </a>
                      </li>
											<li class="<?= (($menu == "datamaster") && ($submenu == 'santriwati')) ? "active" : ""; ?>">
                        <a href="<?php echo base_url() ?>admin/datamaster/santriwati" class="auto">
                          <i class="i i-dot"></i>

                          <span>Data Santriwati</span>
                        </a>
                      </li>
                      <li class="<?= (($menu == "datamaster") &&  ($submenu == 'guru')) ? "active" : ""; ?>">
                      <a href="<?php echo base_url() ?>admin/datamaster/guru" class="auto">
                          <i class="i i-dot"></i>

                          <span>Data Guru</span>
                        </a>
                      </li>
                      <li class="<?= (($menu == "datamaster") &&  ($submenu == 'staff')) ? "active" : ""; ?>">
                      <a href="<?php echo base_url() ?>admin/datamaster/staff" class="auto">
                          <i class="i i-dot"></i>

                          <span>Data Staff</span>
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
                  <li  class="<?= (($menu == "datamaster") && ($submenu == 'datakelasbelajar') || ($submenu == 'aturkelasbelajar') || ($submenu == 'datakelaspondokan') || ($submenu == 'datakelaspondwati') ||  ($submenu == 'datakelasbelawati') || ($submenu == 'lihatkelaspondokansantri') || ($submenu == 'lihatkelaspondokansantri') || ($submenu == 'editkelaspondokan') ||  ($submenu == 'lihatkelaspondokansantri') || ($submenu == 'lihatkelaspondokansantri') || ($submenu == 'editkelaspondwati') || ($submenu == 'lihatkelaspondokan') || ($submenu == 'pelajaranrekap') || ($submenu == 'pondokanrekap') || ($submenu == 'datarekapsantri') || ($submenu == 'datarekapguru') || ($submenu == 'datarekapsantripondokan') || ($submenu == 'datarekapgurupondokan') || ($submenu == 'jadwalafilasi') || ($submenu == 'jadwalpondokan') || ($submenu == 'jadwalpondwati')) ? "active" : ""; ?>">
                  <li  class="<?= (($menu == "datamaster") && ($submenu == 'datakelasbelajar') || ($submenu == 'aturkelasbelajar') || ($submenu == 'datakelaspondokan') || ($submenu == 'lihatkelaspondokansantri') || ($submenu == 'lihatkelaspondokansantri') || ($submenu == 'editkelaspondokan') || ($submenu == 'lihatkelaspondokan') || ($submenu == 'pelajaranrekap') || ($submenu == 'pelajaranrekapp') || ($submenu == 'pondokanrekap') || ($submenu == 'datarekapsantri') || ($submenu == 'datarekapguru') || ($submenu == 'datarekapgurup') || ($submenu == 'datarekapsantripondokan') || ($submenu == 'datarekapgurupondokan') || ($submenu == 'datarekapgurupondokanp') || ($submenu == 'jadwalafilasi') || ($submenu == 'jadwalpondokan') || ($submenu == 'pondokanrekapp') || ($submenu == 'datarekapsantripondokanp') || ($submenu == 'datarekapgurupondokanp') || ($submenu == 'printkelaspondokan') || ($submenu == 'printkelasafilasi') || ($submenu == 'printkelasafiwati') || ($submenu == 'datakelasbelawati') || ($submenu == 'datakelaspondwati')  || ($submenu == 'pelajaran')) ? "active" : ""; ?>">
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

                      <li  class="<?= (($menu == "datamaster") &&  ($submenu == 'datakelaspondwati'  || $submenu == 'jadwalpondwati')) ? "active" : ""; ?>">
                        <a href="<?php echo base_url() ?>admin/datamaster/datakelaspondwati" class="auto">

                          <i class="i i-dot"></i>

                          <span>Atur Kelas Pondwati</span>
                        </a>
                      </li>
                      <li  class="<?= (($menu == "datamaster") &&  ($submenu == 'datakelasbelawati' || $submenu == 'jadwalafiwati')) ? "active" : ""; ?>">
                        <a href="<?php echo base_url() ?>admin/datamaster/datakelasbelawati" class="auto">

                          <i class="i i-dot"></i>

                          <span>Atur Kelas Afiwati</span>
                        </a>
                      </li>

											<li class="<?= (($menu == "datamaster") &&  ($submenu == 'pondokanrekap') || ($submenu == 'datarekapsantripondokan') || ($submenu == 'datarekapgurupondokan') ) ? "active" : ""; ?>">
												<a href="<?php echo base_url() ?>admin/datamaster/pondokanrekap" class="auto">
													<i class="i i-dot"></i>
													<span>Presensi Pondokan Putra</span>
												</a>
											</li>
											<li class="<?= (($menu == "datamaster") &&  ($submenu == 'pondokanrekapp') || ($submenu == 'datarekapsantripondokanp') || ($submenu == 'datarekapgurupondokanp') ) ? "active" : ""; ?>">
												<a href="<?php echo base_url() ?>admin/datamaster/pondokanrekapp" class="auto">
													<i class="i i-dot"></i>
													<span>Presensi Pondokan Putri</span>
												</a>
											</li>
                      <li class="<?= (($menu == "datamaster") &&  ($submenu == 'pelajaranrekap') || ($submenu == 'datarekapsantri') || ($submenu == 'datarekapguru')) ? "active" : ""; ?>">
                        <a href="<?php echo base_url() ?>admin/datamaster/pelajaranrekap" class="auto">
                          <i class="i i-dot"></i>
                          <span>Presensi Afiliasi Putra</span>
                        </a>
                      </li>
											<li class="<?= (($menu == "datamaster") &&  ($submenu == 'pelajaranrekapp') || ($submenu == 'datarekapsantriwati') || ($submenu == 'datarekapgurup')) ? "active" : ""; ?>">
												<a href="<?php echo base_url() ?>admin/datamaster/pelajaranrekapp" class="auto">
													<i class="i i-dot"></i>
													<span>Presensi Afiliasi Putri</span>
												</a>
											</li>
                    </ul>
                  </li>
									<li class="<?= (($menu == "datamaster") && ($submenu == 'keluar') || ($submenu == 'aturdenda')|| ($submenu == 'kembali') || ($submenu == 'datakembali') || ($submenu == 'datakeluar') || ($submenu == 'datadenda') || ($submenu == 'kembalidenda') || ($submenu == 'pembayarandenda') || ($submenu == 'suratizin')) ? "active" : ""; ?>">
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
											<li class="<?= (($menu == "datamaster") && ($submenu == 'datakeluar') || ($submenu == 'keluar') || ($submenu == 'suratizin')) ? "active" : ""; ?>">
                        <a href="<?php echo base_url() ?>admin/datamaster/datakeluar" class="auto">
                          <i class="i i-dot"></i>

                          <span>Keluar Pondok</span>
                        </a>
                      </li>
											<li class="<?= (($menu == "datamaster") && ($submenu == 'datakembali') || ($submenu == 'kembali') || ($submenu == 'kembalidenda')) ? "active" : ""; ?>">
                        <a href="<?php echo base_url() ?>admin/datamaster/datakembali" class="auto">
                          <i class="i i-dot"></i>

                          <span>Kembali ke Pondok</span>
                        </a>
                      </li>
											<li class="<?= (($menu == "datamaster") && ($submenu == 'datadenda') || ($submenu == 'riwayatbayardenda')) ? "active" : ""; ?>">
                        <a href="<?php echo base_url() ?>admin/datamaster/datadenda" class="auto">
                          <i class="i i-dot"></i>

                          <span>Data Denda</span>
                        </a>
                      </li>
                    </ul>
                  </li>
									<li  class="<?= (($menu == "datamaster") && ($submenu == 'databayarinfaq')|| ($submenu == 'bayarinfaq') || ($submenu == 'databayarinfaqp')|| ($submenu == 'bayarinfaqp')) ? "active" : ""; ?>">
										<a href="#" class="auto">
											<span class="pull-right text-muted">
												<i class="i i-circle-sm-o text"></i>
												<i class="i i-circle-sm text-active"></i>
											</span>
											<i class="fa fa-money">
											</i>
											<span class="font-bold">Pembayaran Infaq (SPP)</span>
										</a>
										<ul class="nav dk">
											<li class="<?= (($menu == "datamaster") && ($submenu == 'databayarinfaq')|| ($submenu == 'bayarinfaq')) ? "active" : ""; ?>">
												<a href="<?php echo base_url('admin/datamaster/databayarinfaq')?>" class="auto">
													<i class="i i-dot"></i>

													<span>Infaq (SPP) Santri</span>
												</a>
											</li>
											<li class="<?= (($menu == "datamaster") && ($submenu == 'databayarinfaqp')|| ($submenu == 'bayarinfaqp')) ? "active" : ""; ?>">
												<a href="<?php echo base_url('admin/datamaster/databayarinfaqp')?>" class="auto">
													<i class="i i-dot"></i>

													<span>Infaq (SPP) Santriwati</span>
												</a>
											</li>
										</ul>
									</li>
									<li class="<?= (($menu == "datamaster") && ($submenu == 'provinsi')|| ($submenu == 'kota_kab') || ($submenu == 'kecamatan') || ($submenu == 'pendidikan') || ($submenu == 'pekerjaan') || ($submenu == 'alat_transportasi')) ? "active" : ""; ?>">
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
                      <li class="<?= (($menu == "datamaster") &&  ($submenu == 'admin') || ($submenu == 'adminedit') || ($submenu == 'admintambah')) ? "active" : ""; ?>">
                        <a href="<?php echo base_url() ?>admin/datamaster/admin" class="auto">
                          <i class="i i-dot"></i>

                          <span>Data Admin</span>
                        </a>
                      </li>
											<li class="<?= (($menu == "datamaster") && ($submenu == 'pendidikan') || ($submenu == 'pendidikanedit') || ($submenu == 'pendidikantambah'))  ? "active" : ""; ?>">
												<a href="<?php echo base_url() ?>admin/datamaster/pendidikan" class="auto">
                          <i class="i i-dot"></i>

                          <span>Data Pendidikan</span>
                        </a>
                      </li>
											<li class="<?= (($menu == "datamaster") && ($submenu == 'pekerjaan') || ($submenu == 'pekerjaanedit') || ($submenu == 'pekerjaantambah'))  ? "active" : ""; ?>">
                        <a href="<?php echo base_url() ?>admin/datamaster/pekerjaan" class="auto">
                          <i class="i i-dot"></i>

                          <span>Data Pekerjaan</span>
                        </a>
                      </li>
											<li class="<?= (($menu == "datamaster") && ($submenu == 'alat_transportasi') || ($submenu == 'alat_transportasiedit') || ($submenu == 'alat_transportasitambah'))  ? "active" : ""; ?>">
                        <a href="<?php echo base_url() ?>admin/datamaster/alat_transportasi" class="auto">
                          <i class="i i-dot"></i>

                          <span>Data Alat Transportasi</span>
                        </a>
                      </li>

											<li class="<?= (($menu == "datamaster") && ($submenu == 'provinsi') || ($submenu == 'provinsiedit') || ($submenu == 'provinsitambah'))  ? "active" : ""; ?>">
                        <a href="<?php echo base_url() ?>admin/datamaster/provinsi" class="auto">
                          <i class="i i-dot"></i>
                          <span>Data Provinsi</span>
                        </a>
                      </li>

											<li class="<?= (($menu == "datamaster") && ($submenu == 'kota_kab') || ($submenu == 'kota_kabtambah') || ($submenu == 'kota_kabedit')) ? "active" : ""; ?>">
                        <a href="<?php echo base_url() ?>admin/datamaster/kota_kab" class="auto">
                          <i class="i i-dot"></i>

                          <span>Data Kota /Kabupaten</span>
                        </a>
                      </li>

											<li class="<?= (($menu == "datamaster") && ($submenu == 'kecamatan') || ($submenu == 'kecamatantambah') || ($submenu == 'kecamatanedit')) ? "active" : ""; ?>">
                        <a href="<?php echo base_url() ?>admin/datamaster/kecamatan" class="auto">
                          <i class="i i-dot"></i>

                          <span>Data Kecamatan</span>
                        </a>
                      </li>

											<li class="<?= (($menu == "datamaster") && ($submenu == 'kel_desa') || ($submenu == 'kel_desatambah') || ($submenu == 'kel_desaedit')) ? "active" : ""; ?>">
                        <a href="<?php echo base_url() ?>admin/datamaster/kel_desa" class="auto">
                          <i class="i i-dot"></i>


                          <span>Data Desa / Keluarahan</span>
                        </a>
                      </li>
											<li class="<?= (($menu == "datamaster") && ($submenu == 'tahunajaran')) ? "active" : ""; ?>">
                        <a href="<?php echo base_url() ?>admin/datamaster/tahunajar" class="auto">
													<i class="i i-dot"></i>

													<span>Data Tahun Ajaran</span>
												</a>
											</li>
                    </ul>
                  </li>
                  <li  class="<?= (($menu == "datamaster") && ($submenu == 'informasi')) ? "active" : ""; ?>">
                    <a href="<?php echo base_url('admin/datamaster/informasi')?>" class="auto">
                      <i class="fa fa-folder-open-o">
                      </i>
                      <span class="font-bold">Informasi</span>
                    </a>
                  </li>
									<li  class="<?= (($menu == "datamaster") && ($submenu == 'pengaturanportal')) ? "active" : ""; ?>">
										<a href="<?php echo base_url('admin/datamaster/pengaturanportal')?>" class="auto">
											<i class="fa fa-cogs">
											</i>
											<span class="font-bold">Pengaturan</span>
										</a>
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
