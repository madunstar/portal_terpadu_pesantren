<section id="content">
	<section class="vbox">
		<section class="scrollable padder">
			<div class="m-b-md">
				<h3 class="m-b-none">Calon Santri</h3>
			</div>
			<section class="panel panel-default">
				<header class="panel-heading">
					Unggah Berkas Calon Santri
				</header>
				<div class="panel-body">
					<?php echo $this->session->flashdata('error'); ?>
					<?php pesan_get('msg',"Berhasil Menyimpan Berkas","Gagal Menyimpan Berkas","Berhasil Membarui Berkas") ?>
					<?php if ($cekberkas =="diverifikasi" || $cekberkas =="diverifikasi" || $cekberkas =="Diverifikasi") $pesan='1'; else $pesan='2'; ?>
					<?php pesanvar($pesan,"Berkas Telah Diverifikasi. Apabila Terdapat Perubahan Berkas, Dapat Menghubungi Petugas Administrasi.","Gagal Membarui Biodata","Lengkapi Berkas Wajib dengan Data Sebenarnya dan Selengkap-lengkapnya") ?>

						<div class="row">
							<div class="col-md-12">
                <small class="text-primary font-bold">Wajib</small>
                <div class="line"></div>
								<!-- pas poto -->
                <form class="bs-example form-horizontal" data-validate="parsley" action="<?php echo base_url() ?>santri/pendaftaran/berkas"
      					method="post" enctype="multipart/form-data">
								<div class="form-group">
									<label class="col-sm-2 control-label">Pas Poto</label>
									<div class="col-sm-7">
										<input <?php if ($cekberkas =="diverifikasi" || $cekberkas =="Diverifikasi") echo "disabled" ?>  type="file" class="filestyle" data-icon="false" data-classButton="btn btn-default" data-classInput="form-control inline v-middle input-s"
										name="file_berkas" data-required="true" id=""> <button <?php if ($cekberkas =="diverifikasi" || $cekberkas =="Diverifikasi") echo "disabled" ?> type="submit" class="btn btn-success btn-s-xs"> <i class="fa fa-save"></i> Simpan</button>
										<a target='_blank' <?php echo ($datapoto['nama_berkas'] == 'paspoto' ? 'href="'.base_url('assets/images/berkas/'.$datapoto['file_berkas']).'"' :'');?> ><button type="button" class="btn btn-warning btn-s"><i class="fa fa-search"></i></button></a>
                     <?php echo ($datapoto['nama_berkas'] == 'paspoto' ? '<p class="text-success">Pas Poto Lengkap</p>' :'<p class="text-danger">Pas Poto Belum Lengkap</p>');?>
                    <input type="hidden" name="namaberkas" value="paspoto">
									</div>
								</div>
                </form>
								<!-- kartu keluarga -->
                <form class="bs-example form-horizontal" data-validate="parsley" action="<?php echo base_url() ?>santri/pendaftaran/berkas"
      					method="post" enctype="multipart/form-data">
								<div class="form-group">
									<label class="col-sm-2 control-label">Kartu Keluarga</label>
									<div class="col-sm-7">
										<input <?php if ($cekberkas =="diverifikasi" || $cekberkas =="Diverifikasi") echo "disabled" ?> type="file" class="filestyle" data-icon="false" data-classButton="btn btn-default" data-classInput="form-control inline v-middle input-s"
										name="file_berkas" data-required="true" id=""> <button <?php if ($cekberkas =="diverifikasi" || $cekberkas =="Diverifikasi") echo "disabled" ?> type="submit" class="btn btn-success btn-s-xs"> <i class="fa fa-save"></i> Simpan</button>
										<a target='_blank' <?php echo ($datakk['nama_berkas'] == 'kartu keluarga' ? 'href="'.base_url('assets/images/berkas/'.$datakk["file_berkas"]).'"' : '');?>><button type="button" class="btn btn-warning btn-s"><i class="fa fa-search"></i></button></a>
                    <?php echo ($datakk['nama_berkas'] == 'kartu keluarga' ? '<p class="text-success">Kartu Keluarga Lengkap</p>' :'<p class="text-danger">Kartu keluarga Belum Lengkap</p>');?>
                    <input type="hidden" name="namaberkas" value="kartu keluarga">
									</div>
								</div>
                </form>
								<!-- ijazah -->
                <form class="bs-example form-horizontal" data-validate="parsley" action="<?php echo base_url() ?>santri/pendaftaran/berkas"
                method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Ijazah</label>
                  <div class="col-sm-7">
                    <input <?php if ($cekberkas =="diverifikasi" || $cekberkas =="Diverifikasi") echo "disabled" ?> type="file" class="filestyle" data-icon="false" data-classButton="btn btn-default" data-classInput="form-control inline v-middle input-s"
                    name="file_berkas" data-required="true" id=""> <button <?php if ($cekberkas =="diverifikasi" || $cekberkas =="Diverifikasi") echo "disabled" ?> type="submit" class="btn btn-success btn-s-xs"> <i class="fa fa-save"></i> Simpan</button>
										<a target='_blank' <?php echo ($dataijazah["nama_berkas"] == "ijazah" ? "href='".base_url('assets/images/berkas/'.$dataijazah["file_berkas"])."'": "");?>><button type="button" class="btn btn-warning btn-s"><i class="fa fa-search"></i></button></a>
                    <?php echo ($dataijazah['nama_berkas'] == 'ijazah' ? '<p class="text-success">Ijazah Lengkap</p>' :'<p class="text-danger">Ijazah Belum Lengkap</p>');?>
                    <input type="hidden" name="namaberkas" value="ijazah">
                  </div>
                </div>
                </form>
								<!-- optional -->
                <div class="line pull-in line-dashed b-b"></div>
                <b style="color:#238e7b">Tidak Wajib/Opsional</b>
                <div class="line"></div>
								<!-- piagam 1 -->
                <form class="bs-example form-horizontal" data-validate="parsley" action="<?php echo base_url() ?>santri/pendaftaran/berkas"
                method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Piagam / Sertifikat</label>
                  <div class="col-sm-7">
                    <input <?php if ($cekberkas =="diverifikasi" || $cekberkas =="Diverifikasi") echo "disabled" ?> type="file" class="filestyle" data-icon="false" data-classButton="btn btn-default" data-classInput="form-control inline v-middle input-s"
                    name="file_berkas" data-required="true" id=""> <button <?php if ($cekberkas =="diverifikasi" || $cekberkas =="Diverifikasi") echo "disabled" ?> type="submit" class="btn btn-success btn-s-xs"> <i class="fa fa-save"></i> Simpan</button>
										<a target='_blank' <?php echo ($datapiagam1["nama_berkas"] == "piagam1" ? "href='".base_url("assets/images/berkas/".$datapiagam1["file_berkas"])."'" : "");?>><button type="button" class="btn btn-warning btn-s"><i class="fa fa-search"></i></button></a>
										<?php echo ($datapiagam1['nama_berkas'] == 'piagam1' ? '<p class="text-success">Piagam / Sertifikat Lengkap</p>' : null);?>
										<input type="hidden" name="namaberkas" value="piagam1">
                  </div>
                </div>
                </form>
								<!-- piagam 2 -->
                <form class="bs-example form-horizontal" data-validate="parsley" action="<?php echo base_url() ?>santri/pendaftaran/berkas"
                method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Piagam / Sertifikat</label>
                  <div class="col-sm-7">
                    <input <?php if ($cekberkas =="diverifikasi" || $cekberkas =="Diverifikasi") echo "disabled" ?> type="file" class="filestyle" data-icon="false" data-classButton="btn btn-default" data-classInput="form-control inline v-middle input-s"
                    name="file_berkas" data-required="true" id=""> <button <?php if ($cekberkas =="diverifikasi" || $cekberkas =="Diverifikasi") echo "disabled" ?> type="submit" class="btn btn-success btn-s-xs"> <i class="fa fa-save"></i> Simpan</button>
										<a target='_blank' <?php echo ($datapiagam2["nama_berkas"] == "piagam2" ? 'href="'.base_url("assets/images/berkas/".$datapiagam2["file_berkas"]).'"' : ""); ?>> <button type="button" class="btn btn-warning btn-s"><i class="fa fa-search"></i></button></a>
										<?php echo ($datapiagam2['nama_berkas'] == 'piagam2' ? '<p class="text-success">Piagam / Sertifikat Lengkap</p>' : null);?>
										<input type="hidden" name="namaberkas" value="piagam2">
                  </div>
                </div>
                </form>
							</div>
						</div>
				</div>
				<footer class="panel-footer bg-light lter">


				</footer>

			</section>
			<div class="row">
				<div class="col-md-12">
					<section class="panel panel-default">
						<header class="panel-heading">
								<h5 class="text-danger font-bold">PENTING!</h5>
						</header>
						<div class="panel-body text-danger font-bold">
							Ukuran maksimal file 1MB <br>
							Diutamakan untuk mengunggah file hasil scan <br>
						</div>
					</section>
				</div>
				<div class="col-md-10">

				</div>

			</div>


			</div>
		</section>
	</section>

</section>
