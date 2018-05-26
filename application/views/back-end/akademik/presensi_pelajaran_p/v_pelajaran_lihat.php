<section id="content">
	<section class="vbox">
		<section class="scrollable padder">
			<div class="m-b-md">
				<h3 class="m-b-none">Pelajaran</h3>
			</div>
			<section class="panel panel-default">
				<header class="panel-heading">
					Lihat Pelajaran
				</header>
				<div class="panel-body">
					<form class="bs-example form-horizontal" data-validate="parsley" method="post">
						<a href="<?php echo base_url('admin/santriwatiakd/pelajaran') ?>" style="color:#3b994a;margin-left:10px">
							<i class="fa fa-chevron-left"></i> Kembali</a>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="col-lg-4 control-label">ID Pelajaran</label>
									<div class="col-lg-8">
										<input type="text" class="form-control" name="id_pelajaran" data-required="true" value="<?php echo $data['id_pelajaran']; ?>" readonly/>
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-4 control-label">NIP Guru Pengajar</label>
									<div class="col-lg-8">
										<input type="text" class="form-control" name="nip_guru" data-required="true" value="<?php echo $data['nip_guru']; ?>"
										readonly/>
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-4 control-label">Nama Guru Pengajar</label>
									<div class="col-lg-8">
										<input type="text" class="form-control" name="nama_lengkap" data-required="true" value="<?php echo $data['nama_lengkap']; ?>"
										readonly/>
									</div>
								</div>
						</div>
						<div class="col-md-6">
								<div class="form-group">
									<label class="col-lg-4 control-label">Nama Mata Pelajaran</label>
									<div class="col-lg-8">
										<input type="text" class="form-control" name="nama_mata_pelajaran" data-required="true" value="<?php echo $data['nama_mata_pelajaran']; ?>"
										readonly/>
									</div>
								</div>

								<div class="form-group">
									<label class="col-lg-4 control-label">Tingkat Kelas</label>
									<div class="col-lg-8">
										<input type="text" class="form-control" name="tingkat_mata_pelajaran" value="<?php echo $data['tingkat_mata_pelajaran']; ?>" readonly/>
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-4 control-label">Semester</label>
									<div class="col-lg-8">
										<input type="text" class="form-control" name="semester_mata_pelajaran" value="<?php echo $data['semester_mata_pelajaran']; ?>" readonly/>
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-4 control-label">Ruangan Kelas</label>
									<div class="col-lg-8">
										<input type="text" class="form-control" name="kelas_mata_pelajaran" value="<?php echo $data['kelas_mata_pelajaran']; ?>" readonly/>
									</div>
								</div>
							</div>
						</div>
				</div>
				<footer class="panel-footer text-right bg-light lter">
					<a href="<?php echo base_url('admin/santriwatiakd/pelajaranedit?id_pelajaran='.$data['id_pelajaran'].'') ?>" class="btn btn-warning btn-s-xs">
						<i class="fa fa-edit"></i> Edit </a>
					&nbsp
					<a href="<?php echo base_url('admin/santriwatiakd/pelajaran') ?>" class="btn btn-default btn-s-xs">
						<i class="fa fa-list"></i> List Pelajaran</a>
				</footer>
				</form>


				</div>
			</section>
		</section>
	</section>

</section>
