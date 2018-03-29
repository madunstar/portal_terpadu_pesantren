<section id="content">
	<section class="vbox">
		<section class="scrollable padder">
			<div class="row m-b-md">
				<div class="col-sm-6">
					<h3 class="m-b-xs text-black">Presensi</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<section class="panel panel-default">
						<header class="panel-heading">
							<h4 class="font-bold">Edit Data Presensi Kelas</h4>
						</header>
						<div class="panel-body">
							<form class="bs-example form-horizontal" data-validate="parsley" action="<?php echo base_url() ?>admin/datamaster/editkelasbelajar?id=<?php echo $data['id_kelas_belajar'] ?>"
							method="post">
								<div class="row">
									<div class="col-sm-12">
										<div class="row">
											<div class="col-sm-6">
												<div class="form-group" style="margin-bottom: 0px">
													<label class="col-sm-4 control-label">Nama Kelas :</label>
													<div class="col-sm-6">
														<p class="form-control" style="border:0">
															<?php echo $data['nama_kelas_belajar'] ?>
														</p>
													</div>

												</div>
												<div class="form-group" style="margin-bottom: 0px">
													<label class="col-sm-4 control-label">Wali Kelas : </label>
													<div class="col-sm-6">
														<p class="form-control" style="border:0">
															<?php echo $data['nama_lengkap'] ?>
														</p>
													</div>
												</div>
												<div class="form-group" style="margin-bottom: 0px">
													<label class="col-sm-4 control-label">NIP Wali Kelas : </label>
													<div class="col-sm-6">
														<p class="form-control" style="border:0">
															<?php echo $data['nip_guru'] ?>
														</p>
													</div>
												</div>
												<div class="form-group" style="margin-bottom: 0px">
													<label class="col-sm-4 control-label">Ruang Kelas: </label>
													<div class="col-sm-6">
														<p class="form-control" style="border:0">
															<?php echo $data['nama_kelas'] ?>
														</p>
													</div>
												</div>
												<div class="form-group" style="margin-bottom: 0px">
													<label class="col-sm-4 control-label">Kapasitas : </label>
													<div class="col-sm-6">
														<p class="form-control" style="border:0">
															<?php echo $data['kapasitas'] ?>
														</p>
													</div>
												</div>
											</div>
											<div class="col-sm-5">
												<div class="form-group" style="margin-bottom: 0px">
													<label class="col-sm-4 control-label">Jenjang :</label>
													<div class="col-sm-6">
														<p class="form-control" style="border:0">
															<?php echo $data['jenjang'] ?>
														</p>
													</div>
												</div>
												<div class="form-group" style="margin-bottom: 0px">
													<label class="col-sm-4 control-label">Tingkatan :</label>
													<div class="col-sm-6">
														<p class="form-control" style="border:0">
															<?php echo $data['tingkat'] ?>
														</p>
													</div>
												</div>
												<div class="form-group" style="margin-bottom: 0px">
													<label class="col-sm-4 control-label">Status Kelas :</label>
													<div class="col-sm-6">
														<p class="form-control" style="border:0">
															<?php echo $data['status_kelas'] ?>
														</p>
													</div>
												</div>
												<div class="form-group" style="margin-bottom: 0px">
													<label class="col-sm-4 control-label">Tahun Ajaran :</label>
													<div class="col-sm-6">
														<p class="form-control" style="border:0">
															<?php echo $data['tahun_ajaran'] ?>
														</p>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-12">
											<hr/>
											<div class="text-center" style="margin-bottom:10px">
												<a href="<?php echo base_url() ?>admin/datamaster/lihatkelasbelajarsantri?id=<?php echo $data['id_kelas_belajar'] ?>" class="btn btn-default" margin="auto"><i class="fa fa-edit"></i> Edit Daftar Santri</a>
											</div>
											<table class="table" style="width:80%" align="center">
												<thead>
													<tr>
													<th>NIS Lokal</th>
													<th>NISN</th>
													<th>Nama Santri</th>
													<th>Tanggal Lahir</th>
													<th>Jenis Kelamin</th>
													</tr>
												</thead>
												<tbody>
													<?php
														foreach($santri->result_array() as $row){
														echo "
															<tr>
															<td>".$row['nis_lokal']."</td>
															<td>".$row['nisn']."</td>
															<td>".$row['nama_lengkap']."</td>
															<td>".tgl_indo($row['tgl_lahir'])."</td>
															<td>".$row['jenis_kelamin']."</td>
															</tr>
														";
														}
													?>
												</tbody>
											</table>
									</div>
								</div>
								<footer class="panel-footer text-right bg-light lter">
									<a href="<?php echo base_url() ?>admin/datamaster/editkelasbelajar?id=<?php echo $data['id_kelas_belajar'] ?>" type="submit" class="btn btn-success btn-s-xs">
										<i class="fa fa-save"></i> Edit</a>
									&nbsp
									<a href="<?php echo base_url('admin/datamaster/datakelasbelajar') ?>" class="btn btn-default btn-s-xs">
										<i class="fa fa-list"></i> List Kelas Belajar</a>
							</form>
							</footer>

						</div>
				</div>
				</section>
		</section>
	</section>
</section>

</section>
