<section id="content">
	<section class="vbox">
		<section class="scrollable padder">
			<div class="m-b-md">
				<h3 class="m-b-none">Guru</h3>
			</div>
			<section class="panel panel-default">
				<header class="panel-heading">
					Tambah Guru
				</header>
				<div class="panel-body">
					<?php pesan_get('msg',"Berhasil Menambahkan Guru","Gagal Menambahkan Guru") ?>
					<form class="bs-example form-horizontal" data-validate="parsley" action="<?php echo base_url() ?>admin/datamaster/gurutambah"
					method="post" enctype="multipart/form-data">
						<a href="<?php echo base_url('admin/datamaster/guru') ?>" style="color:#3b994a;margin-left:10px">
							<i class="fa fa-chevron-left"></i> Kembali</a>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="col-lg-4 control-label">NIP</label>
									<div class="col-lg-8">
										<input type="text" class="form-control" name="nip_guru" data-required="true" value="<?php echo set_value('nip_guru'); ?>"
										/>
										<?php if(isset($nip_guru)) {
                         echo '<label style="color:red;font-size:10px">NIP sudah pernah diinput !</label>';
                       } 
                ?>
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-4 control-label">Nama</label>
									<div class="col-lg-8">
										<input type="text" class="form-control" name="nama_lengkap" data-required="true" value="<?php echo set_value('nama_lengkap'); ?>"
										/>
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-4 control-label">NIK</label>
									<div class="col-lg-8">
										<input type="text" class="form-control" name="nik" value="<?php echo set_value('nik'); ?>" />
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-4 control-label">Tempat Lahir</label>
									<div class="col-lg-8">
										<input type="text" class="form-control" name="tempat_lahir" data-required="true" value="<?php echo set_value('tempat_lahir'); ?>"
										/>
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-4 control-label">Tanggal Lahir</label>
									<div class="col-lg-8">
										<input class="datepicker-input form-control" size="16" type="text" readonly data-date-format="dd-mm-yyyy" name="tgl_lahir"
										data-required="true" value="<?php echo set_value('tgl_lahir'); ?>" />
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-4 control-label">Jenis Kelamin</label>
									<div class="col-lg-8">
										<select class="form-control" name="jenis_kelamin" />
										<option value="L" <?php if (set_value( 'jenis_kelamin')=="L" ) echo "selected" ?> >Laki-laki</option>
										<option value="P" <?php if (set_value( 'jenis_kelamin')=="P" ) echo "selected" ?> >Perempuan</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-4 control-label">Nomor HP</label>
									<div class="col-lg-8">
										<input type="text" class="form-control" name="hp_guru" value="<?php echo set_value('hp_guru'); ?>" />
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-4 control-label">Email</label>
									<div class="col-lg-8">
										<input type="text" class="form-control" name="email_guru" value="<?php echo set_value('email_guru'); ?>" data-type="email"
										/>
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-4 control-label">Pendidikan Terakhir</label>
									<div class="col-lg-8">
									<select type="text" class="form-control"  name="pendidikan_terakhir" data-required="true" >
										<option value="" disabled <?php if (set_value('pendidikan_terakhir')=="") echo "selected" ?>>Pilih Pendidikan</option>
										<?php
											foreach($pendidikan->result_array() as $row) {
												echo "<option value='".$row['nama_pendidikan']."' ".(set_value('pendidikan_terakhir')==$row['nama_pendidikan']?"selected":"").">".$row['nama_pendidikan']."</option>";
											}
										?>
									</select>
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-4 control-label">Nama Perguruan Tinggi</label>
									<div class="col-lg-8">
										<input type="text" class="form-control" name="perguruan_tinggi" value="<?php echo set_value('perguruan_tinggi'); ?>" />
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-4 control-label">Bidang Ilmu/Keahlian</label>
									<div class="col-lg-8">
										<input type="text" class="form-control" name="bidang_ilmu" value="<?php echo set_value('bidang_ilmu'); ?>" />
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-4 control-label">Tahun Masuk</label>
									<div class="col-lg-8">
										<input type="text" class="form-control" name="tahun_masuk" value="<?php echo set_value('tahun_masuk'); ?>" />
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-4 control-label">Tahun Lulus</label>
									<div class="col-lg-8">
										<input type="text" class="form-control" name="tahun_lulus" value="<?php echo set_value('tahun_lulus'); ?>" />
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="col-lg-4 control-label">Alamat Lengkap</label>
									<div class="col-lg-8">
										<textarea class="form-control" name="alamat_lengkap"><?php echo set_value('alamat_lengkap'); ?></textarea>
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-4 control-label">Provinsi</label>
									<div class="col-lg-8">
										<select class="form-control"  name="provinsi" id="provinsi" data-required="true">
											<option value="" disabled  <?php if (set_value('provinsi')=="") echo "selected" ?>>Pilih Provinsi</option>
											<?php
												foreach($provinsi->result_array() as $row) {
												echo "<option value='".$row['nama_provinsi']."' ".(set_value('provinsi')==$row['nama_provinsi']?"selected":"").">".$row['nama_provinsi']."</option>";
											}
											?>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-4 control-label">Kabupaten/Kota</label>
									<div class="col-lg-8">
										<select class="form-control id_kota_kab"  name="kabupaten_kota"  id="kabupaten_kota" data-required="true">
										<option value="" disabled <?php if (set_value('kabupaten_kota')=="") echo "selected" ?>>Pilih Kabupaten/Kota</option>
										<?php
												foreach($kabupaten->result_array() as $row) {
												echo "<option value='".$row['nama_kota_kab']."' ".(set_value('kabupaten_kota')==$row['nama_kota_kab']?"selected":"").">".$row['nama_kota_kab']."</option>";
												}
											?>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-4 control-label">Kecamatan</label>
									<div class="col-lg-8">
										<select class="form-control id_kota_kab"  name="kecamatan"  id="kecamatan" data-required="true">
											<option value="" disabled <?php if (set_value("kecamatan")=="") echo "selected" ?>>Pilih Kecamatan</option>
											<?php
													foreach($kecamatan->result_array() as $row) {
													echo "<option value='".$row['nama_kecamatan']."' ".(set_value('kecamatan')==$row['nama_kecamatan']?"selected":"").">".$row['nama_kecamatan']."</option>";
													}
												?>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-4 control-label">Desa/Kelurahan</label>
									<div class="col-lg-8">
										<select class="form-control"  name="desa_kelurahan" id="desa_kelurahan" data-required="true">
										<option value="" disabled <?php if (set_value('desa_kelurahan')=="") echo "selected" ?>>Pilih Desa/Kelurahan</option>
											<?php
												foreach($desa->result_array() as $row) {
												echo "<option value='".$row['nama_kel_desa']."' ".(set_value('desa_kelurahan')==$row['nama_kel_desa']?"selected":"").">".$row['nama_kel_desa']."</option>";
												}
											?>
											</select>
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-4 control-label">Kode Pos</label>
									<div class="col-lg-8">
										<input type="text" class="form-control" name="kode_pos" value="<?php echo set_value('kode_pos'); ?>" />
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 control-label">Foto</label>
									<div class="col-sm-8">
										<input type="file" class="filestyle" data-icon="false" data-classButton="btn btn-default" data-classInput="form-control inline v-middle input-s" name="foto">
									</div>
              					</div>
							</div>
						</div>
				</div>
				<footer class="panel-footer text-right bg-light lter">
					<button type="submit" class="btn btn-success btn-s-xs">
						<i class="fa fa-save"></i> Simpan</button>
					&nbsp
					<a href="<?php echo base_url('admin/datamaster/guru') ?>" class="btn btn-default btn-s-xs">
						<i class="fa fa-list"></i> Daftar Guru</a>
				</footer>
				</form>


				</div>
			</section>
		</section>
	</section>

</section>
