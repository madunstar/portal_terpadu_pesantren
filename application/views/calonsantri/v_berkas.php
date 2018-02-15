<section id="content">
	<section class="vbox">
		<section class="scrollable padder">
			<div class="m-b-md">
				<h3 class="m-b-none">Calon Santri</h3>
			</div>
			<section class="panel panel-default">
				<header class="panel-heading">
					Berkas
				</header>
				<div class="panel-body">
					<?php pesan_get('msg',"Berhasil Mengupdate Bukti Pembayaran","Gagal Mengupdate Bukti Pembayaran") ?>
					<?php pesanvar('2',"","","Lengkapi berkas wajib dengan data sebenarnya dan selengkap-lengkapnya") ?>

						<div class="row">
							<div class="col-md-12">
                <small class="text-primary font-bold">Wajib</small>
                <div class="line"></div>
                <form class="bs-example form-horizontal" data-validate="parsley" action="<?php echo base_url() ?>santri/pendaftaran/pembayaran"
      					method="post" enctype="multipart/form-data">
								<div class="form-group">
									<label class="col-sm-2 control-label">Pas Poto</label>
									<div class="col-sm-7">
										<input type="file" class="filestyle" data-icon="false" data-classButton="btn btn-default" data-classInput="form-control inline v-middle input-s"
										name="berkas" id=""> <button type="submit" class="btn btn-success btn-s-xs"> <i class="fa fa-save"></i> Simpan</button> <button type="button" class="btn btn-warning btn-s"><i class="fa fa-search"></i></button>
                    <p class="text-danger"> Pas Poto Belum Lengkap </p>
                    <input type="hidden" name="namaberkas" value="paspoto">
									</div>
								</div>
                </form>
                <form class="bs-example form-horizontal" data-validate="parsley" action="<?php echo base_url() ?>santri/pendaftaran/pembayaran"
      					method="post" enctype="multipart/form-data">
								<div class="form-group">
									<label class="col-sm-2 control-label">Kartu Keluarga</label>
									<div class="col-sm-7">
										<input type="file" class="filestyle" data-icon="false" data-classButton="btn btn-default" data-classInput="form-control inline v-middle input-s"
										name="berkas" id=""> <button type="submit" class="btn btn-success btn-s-xs"> <i class="fa fa-save"></i> Simpan</button> <button type="button" class="btn btn-warning btn-s"><i class="fa fa-search"></i></button>
                    <p class="text-danger"> Kartu keluarga Belum Lengkap </p>
                    <input type="hidden" name="namaberkas" value="kartu keluarga">
									</div>
								</div>
                </form>
                <form class="bs-example form-horizontal" data-validate="parsley" action="<?php echo base_url() ?>santri/pendaftaran/pembayaran"
                method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Ijazah</label>
                  <div class="col-sm-7">
                    <input type="file" class="filestyle" data-icon="false" data-classButton="btn btn-default" data-classInput="form-control inline v-middle input-s"
                    name="berkas" id=""> <button type="submit" class="btn btn-success btn-s-xs"> <i class="fa fa-save"></i> Simpan</button> <button type="button" class="btn btn-warning btn-s"><i class="fa fa-search"></i></button>
                    <p class="text-danger">Ijazah Belum Lengkap </p>
                    <input type="hidden" name="ijazah" value="namaberkas">
                  </div>
                </div>
                </form>
                <div class="line pull-in line-dashed b-b"></div>
                <small class="text-muted">Optional</small>
                <div class="line"></div>
                <form class="bs-example form-horizontal" data-validate="parsley" action="<?php echo base_url() ?>santri/pendaftaran/pembayaran"
                method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Piagam / Sertifikat</label>
                  <div class="col-sm-7">
                    <input type="file" class="filestyle" data-icon="false" data-classButton="btn btn-default" data-classInput="form-control inline v-middle input-s"
                    name="berkas" id=""> <button type="submit" class="btn btn-success btn-s-xs"> <i class="fa fa-save"></i> Simpan</button> <button type="button" class="btn btn-warning btn-s"><i class="fa fa-search"></i></button>
                    <input type="hidden" name="namaberkas" value="piagam1">
                  </div>
                </div>
                </form>
                <form class="bs-example form-horizontal" data-validate="parsley" action="<?php echo base_url() ?>santri/pendaftaran/pembayaran"
                method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Piagam / Sertifikat</label>
                  <div class="col-sm-7">
                    <input type="file" class="filestyle" data-icon="false" data-classButton="btn btn-default" data-classInput="form-control inline v-middle input-s"
                    name="berkas" id=""> <button type="submit" class="btn btn-success btn-s-xs"> <i class="fa fa-save"></i> Simpan</button> <button type="button" class="btn btn-warning btn-s"><i class="fa fa-search"></i></button>
                    <input type="hidden" name="namaberkas" value="piagam2">
                  </div>
                </div>
                </form>
							</div>
						</div>
				</div>
				<footer class="panel-footer bg-light lter">
					<div class="row">
						<div class="col-md-2">
						</div>
						<div class="col-md-10">

						</div>

					</div>

				</footer>



				</div>
			</section>
		</section>
	</section>

</section>
