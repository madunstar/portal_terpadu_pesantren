<section id="content">
	<section class="vbox">
		<section class="scrollable padder">
			<div class="m-b-md">
				<h3 class="m-b-none">Kelas</h3>
			</div>
			<section class="panel panel-default">
				<header class="panel-heading">
					Lihat Kelas
				</header>
				<div class="panel-body">
					<form class="bs-example form-horizontal" data-validate="parsley" method="post">
						<a href="<?php echo base_url('admin/datamaster/kelas') ?>" style="color:#3b994a;margin-left:10px">
							<i class="fa fa-chevron-left"></i> Kembali</a>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="col-lg-4 control-label">Kode Kelas</label>
									<div class="col-lg-8">
										<input type="text" class="form-control" name="kd_kelas" data-required="true" value="<?php echo $data['kd_kelas']; ?>" readonly/>
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-4 control-label">Nama Kelas</label>
									<div class="col-lg-8">
										<input type="text" class="form-control" name="nama_kelas" data-required="true" value="<?php echo $data['nama_kelas']; ?>"
										readonly/>
									</div>
								</div>	
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="col-lg-4 control-label">Tingkat Kelas</label>
									<div class="col-lg-8">
										<textarea class="form-control" name="tingkat_kelas" readonly><?php echo $data['tingkat_kelas']; ?></textarea>
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-4 control-label">Kapasitas</label>
									<div class="col-lg-8">
										<input type="text" class="form-control" name="kapasitas" value="<?php echo $data['kapasitas']; ?>" readonly/>
									</div>
								</div>

							</div>
						</div>
				</div>
				<footer class="panel-footer text-right bg-light lter">
					<a href="<?php echo base_url('admin/datamaster/kelasedit?kd_kelas='.$data['kd_kelas'].'') ?>" class="btn btn-success btn-s-xs">
						<i class="fa fa-edit"></i> Ubah </a>
					&nbsp
					<a href="<?php echo base_url('admin/datamaster/kelas') ?>" class="btn btn-default btn-s-xs">
						<i class="fa fa-list"></i> Daftar Kelas</a>
				</footer>
				</form>


				</div>
			</section>
		</section>
	</section>

</section>
