<section id="content">
	<section class="vbox">
		<section class="scrollable padder">
			<div class="m-b-md">
				<h3 class="m-b-none">Pelanggaran Santri</h3>
			</div>
			<section class="panel panel-default">
				<header class="panel-heading">
					Tambah Pelanggaran  <?php echo $santri['nama_lengkap']?> / <?php echo $santri['nis_lokal']?>
				</header>
				<div class="panel-body">
					<?php pesan_get('msg',"Berhasil Menambahkan pelanggaran","Gagal Menambahkan pelanggaran") ?>
					<form class="bs-example form-horizontal" data-validate="parsley" action="<?php echo base_url() ?>admin/datamaster/tambahpelanggaran"
					method="post">
						<a href="<?php echo base_url('admin/datamaster/pelanggaransantri?nis='.$nis_santri.'') ?>" style="color:#3b994a;margin-left:10px">
							<i class="fa fa-chevron-left"></i> Kembali</a>
						<div class="row">
							<div class="col-md-8">
								<div class="form-group">
									<label class="col-lg-4 control-label">Pelanggaran</label>
									<div class="col-lg-8">
										<input type="text" class="form-control" name="nama_pelanggaran" data-required="true" placeholder="" value=""
										/>
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-4 control-label">Jenis pelanggaran</label>
									<div class="col-lg-8">
										<input type="text" class="form-control" name="jenis_pelanggaran" data-required="true" placeholder="" value=""
										/>
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-4 control-label">Tanggal Pelanggaran</label>
									<div class="col-lg-8">
										<input type="text" class="form-control datepicker-input" data-date-format="yyyy-mm-dd" readonly name="tanggal_pelanggaran" data-required="true" placeholder="." value=""
										/>
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-4 control-label">Keterangan</label>
									<div class="col-lg-8">
										<input type="text" class="form-control" name="keterangan" data-required="true" placeholder="" value=""
										/>
									</div>
								</div>
								<input type="hidden" name="nis_santri" value="<?php echo $nis_santri ?>">
						</div>
						</div>
				</div>
				<footer class="panel-footer text-right bg-light lter">
					<button type="submit" class="btn btn-success btn-s-xs">
						<i class="fa fa-save"></i> Simpan</button>
					&nbsp
					<a href="<?php echo base_url('admin/datamaster/pelanggaransantri?nis='.$nis_santri.'') ?>" class="btn btn-default btn-s-xs">
						<i class="fa fa-list"></i> Daftar Pelanggaran</a>
				</footer>
				</form>
				</div>
			</section>
		</section>
	</section>

</section>
