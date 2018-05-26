<section id="content">
	<section class="vbox">
		<section class="scrollable padder">
			<div class="m-b-md">
				<h3 class="m-b-none">Mata Pelajaran</h3>
			</div>
			<section class="panel panel-default">
				<header class="panel-heading">
					Input Data Mata Pelajaran
				</header>
				<div class="panel-body">
					<?php pesan_get('msg',"Berhasil Menambahkan Mata Pelajaran","Gagal Menambahkan Mata Pelajaran") ?>
					<form class="bs-example form-horizontal" data-validate="parsley" action="<?php echo base_url() ?>admin/santriakd/matpeltambah"
					method="post">
						<a href="<?php echo base_url('admin/santriakd/matpel') ?>" style="color:#3b994a;margin-left:10px">
							<i class="fa fa-chevron-left"></i> Kembali</a>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="col-lg-4 control-label">Mata Pelajaran</label>
									<div class="col-lg-8">
										<input type="text" class="form-control" name="nama_matpel" data-required="true" placeholder="Masukkan Mata Pelajaran..." value="<?php echo set_value('nama_matpel'); ?>"
										/>
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-4 control-label">Tingkat</label>
									<div class="col-lg-8">
										<input type="text" class="form-control" name="tingkat_matpel" data-required="true" placeholder="Masukkan TIngkat Mata Pelajaran..." value="<?php echo set_value('tingkat_matpel'); ?>"
										/>
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-4 control-label">Semester</label>
									<div class="col-lg-8">
										<input type="text" class="form-control" name="semester_matpel" data-required="true" placeholder="Masukkan Semester Mata Pelajaran..." value="<?php echo set_value('semester_matpel'); ?>"
										/>
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-4 control-label">Kelas</label>
									<div class="col-lg-8">
										<input type="text" class="form-control" name="kelas_matpel" data-required="true" placeholder="Masukkan Kelas Mata Pelajaran..." value="<?php echo set_value('kelas_matpel'); ?>"
										/>
									</div>
								</div>
						</div>
						</div>
				</div>
				<footer class="panel-footer text-right bg-light lter">
					<button type="submit" class="btn btn-success btn-s-xs">
						<i class="fa fa-save"></i> Simpan</button>
					&nbsp
					<a href="<?php echo base_url('admin/santriakd/matpel') ?>" class="btn btn-default btn-s-xs">
						<i class="fa fa-list"></i> List Mata Pelajaran</a>
				</footer>
				</form>
				</div>
			</section>
		</section>
	</section>

</section>
