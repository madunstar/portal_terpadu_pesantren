<section id="content">
	<section class="vbox">

		<section class="scrollable padder">
			<div class="row m-b-md">
				<div class="col-sm-6">
					<h3 class="m-b-xs text-black">Daftar Presensi </h3>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<section class="panel panel-default">
						<header class="panel-heading">
							<h4 class="font-bold">Print Presensi</h4>
						</header>
						<div class="panel-body">
							<?php pesan_get('msg',"Berhasil Menambahkan  Data Kelas Belajar","Gagal Menambah Data Kelas Belajar") ?>
						
								<div class="form-group">
									<label class="col-sm-2 control-label"> Pilih Bulan</label>
									<div class="col-sm-6">
										<select class="form-control m-b  chosen-select" name="bulan" id="bulan" data-required="true">
											<option value="" selected disabled>.: Pilih Bulan:.</option>
											<?php
												foreach($bulan as $row){
													echo "<option value='".$row."'>".$row."</option>";
												}
											?>
										</select>
										<input type="hidden" value="<?php echo $id ?>" name="idkelas"  id="idkelas" />

									</div>
								</div>
						</div>
						<footer class="panel-footer text-right bg-light lter">
							<button id="print" class="btn btn-success btn-s-xs">
								<i class="fa fa-save"></i> Print</button>
							&nbsp
							<a href="<?php echo base_url('admin/santriwatiakd/datakelaspondwati') ?>" class="btn btn-default btn-s-xs">
								<i class="fa fa-list"></i> List Kelas Belajar</a>

						</footer>

				</div>
			</div>
			</section>
		</section>
	</section>
</section>

</section>
