<section id="content">
	<section class="vbox">

		<section class="scrollable padder">
			<div class="row m-b-md">
				<div class="col-sm-6">
					<h3 class="m-b-xs text-black">Jadwal Presensi </h3>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<section class="panel panel-default">
						<header class="panel-heading">
							<h4 class="font-bold">Print Jadwal</h4>
						</header>
						<div class="panel-body">
							<?php pesan_get('msg',"Berhasil Menambahkan  Data Kelas Belajar","Gagal Menambah Data Kelas Belajar") ?>
						
								<div class="form-group">
									<label class="col-sm-2 control-label"> Pilih Pelajaran</label>
									<div class="col-sm-6">
										<select class="form-control m-b  chosen-select" name="id_jadwal" id="id_jadwal" data-required="true">
											<option value="" selected disabled>.: Pilih Pelajaran:.</option>
											<?php
												foreach($listjadwal->result_array() as $row){
													echo "<option value='".$row['id_jadwal']."'>".$row['mata_pelajaran']." (".$row['guru'].")</option>";
												}
											?>
										</select>

									</div>
								</div>
						</div>
						<footer class="panel-footer text-right bg-light lter">
							<button id="print" class="btn btn-success btn-s-xs">
								<i class="fa fa-save"></i> Print</button>
							&nbsp
							<a href="<?php echo base_url('admin/datamaster/datakelaspondokan') ?>" class="btn btn-default btn-s-xs">
								<i class="fa fa-list"></i> List Kelas Belajar</a>

						</footer>

				</div>
			</div>
			</section>
		</section>
	</section>
</section>

</section>
