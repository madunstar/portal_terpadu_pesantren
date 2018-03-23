<section id="content">
	<section class="vbox">
		<section class="scrollable padder">
			<div class="m-b-md">
				<h3 class="m-b-none">Mata Pelajaran</h3>
			</div>
			<section class="panel panel-default">
				<header class="panel-heading">
					Lihat Mata Pelajaran
				</header>
				<div class="panel-body">
					<form class="bs-example form-horizontal" data-validate="parsley" method="post">
						<a href="<?php echo base_url('admin/datamaster/matpel') ?>" style="color:#3b994a;margin-left:10px">
							<i class="fa fa-chevron-left"></i> Kembali</a>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="col-lg-4 control-label">ID Mata Pelajaran</label>
									<div class="col-lg-8">
										<input type="text" class="form-control" name="id_matpel" data-required="true" value="<?php echo $data['id_mata_pelajaran']; ?>" readonly/>
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-4 control-label">Mata Pelajaran</label>
									<div class="col-lg-8">
										<input type="text" class="form-control" name="nama_matpel" data-required="true" value="<?php echo $data['nama_mata_pelajaran']; ?>"
										readonly/>
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-4 control-label">Tingkat</label>
									<div class="col-lg-8">
										<input type="text" class="form-control" name="tingkat_matpel" data-required="true" value="<?php echo $data['tingkat_mata_pelajaran']; ?>"
										readonly/>
									</div>
								</div>		
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="col-lg-4 control-label">Semester</label>
									<div class="col-lg-8">
										<input type="text" class="form-control" name="semester_matpel" value="<?php echo $data['semester_mata_pelajaran']; ?>" readonly/>
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-4 control-label">Kelas</label>
									<div class="col-lg-8">
										<input type="text" class="form-control" name="kelas_matpel" value="<?php echo $data['kelas_mata_pelajaran']; ?>" readonly/>
									</div>
								</div>
							</div>

						</div>
				</div>
				<footer class="panel-footer text-right bg-light lter">
					<a href="<?php echo base_url('admin/datamaster/matpeledit?id_matpel='.$data['id_mata_pelajaran'].'') ?>" class="btn btn-success btn-s-xs">
						<i class="fa fa-edit"></i> Edit </a>
					&nbsp
					<a href="<?php echo base_url('admin/datamaster/matpel') ?>" class="btn btn-default btn-s-xs">
						<i class="fa fa-list"></i> List Mata Pelajaran</a>
				</footer>
				</form>

				</div>
			</section>
		</section>
	</section>

</section>
