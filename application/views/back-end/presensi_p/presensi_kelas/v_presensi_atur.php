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
							<h4 class="font-bold">Data Presensi Kelas Afilasi</h4>
						</header>
						<div class="panel-body">
							<?php pesan_get('msg',"Berhasil Menambahkan  Data Kelas Belajar","Gagal Menambah Data Kelas Belajar") ?>
							<form class="bs-example form-horizontal" data-validate="parsley" action="<?php echo base_url() ?>admin/datamaster/aturkelasbelajar"
							method="post">
								<div class="form-group">
									<label class="col-sm-3 control-label">Nama Kelas</label>
									<div class="col-sm-6">
										<input type="text" class="form-control" name="nama_kelas_belajar" id="nama_kelas_belajar" data-required="true">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label">Wali Kelas</label>
									<div class="col-sm-6">
										<select class="form-control m-b  chosen-select" name="nip_guru" id="nip_guru" data-required="true">
											<option value="" selected disabled>.: Pilih Wali Kelas :.</option>
											<?php
												foreach($guru->result_array() as $row){
													echo "<option value='".$row['nip_guru']."'>".$row['nama_lengkap']." (".$row['nip_guru'].")</option>";
												}
											?>
										</select>

									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label">Ruang Kelas</label>
									<div class="col-sm-6">
										<select class="form-control m-b  chosen-select" name="kd_kelas" id="kd_kelas" data-required="true">
											<option value="" selected disabled>.: Pilih Ruang Kelas :.</option>
											<?php
												foreach($ruangkelas->result_array() as $row){
													echo "<option value='".$row['kd_kelas']."'>".$row['nama_kelas']." (Tingkat ".$row['tingkat_kelas'].")</option>";
												}
											?>
										</select>

									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label">Jenjang</label>
									<div class="col-sm-6">
										<select class="form-control m-b" name="jenjang" id="jenjang" data-required="true">
											<option value="" selected disabled>.: Pilih Jenjang:.</option>
											<?php
												foreach($jenjang->result_array() as $row){
													echo "<option value='".$row['jenjang']."'>".$row['jenjang']." </option>";
												}
											?>
										</select>

									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label">Tingkatan</label>
									<div class="col-sm-6">
										<select class="form-control m-b" name="tingkatan" id="tingkatan" data-required="true">
											<option value="" selected disabled>.: Pilih Tingkatan:.</option>
										</select>

									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label">Status Kelas</label>
									<div class="col-sm-6">
										<select name="status_kelas" id="status_kelas" class="form-control  m-b" data-required="true">
											<option value="" selected disabled>.: Pilih Status Kelas :.</option>
											<option value="Aktif">Aktif</option>
											<option value="Tidak Aktif">Tidak Aktif</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label">Tahun Ajaran</label>
									<div class="col-sm-6">
										<select class="form-control m-b  chosen-select" name="id_tahun" id="id_tahun" data-required="true">
											<option value="" selected disabled>.: Pilih Tahun Ajaran :.</option>
											<?php
												foreach($tahunajaran->result_array() as $row){
													echo "<option value='".$row['id_tahun']."'>".$row['tahun_ajaran']."</option>";
												}
											?>
										</select>
									</div>
								</div>
						</div>
						<footer class="panel-footer text-right bg-light lter">
							<button type="submit" class="btn btn-success btn-s-xs">
								<i class="fa fa-save"></i> Simpan</button>
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
