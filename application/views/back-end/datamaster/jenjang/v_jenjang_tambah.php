<section id="content">
	<section class="vbox">
		<section class="scrollable padder">
			<div class="m-b-md">
				<h3 class="m-b-none">Jenjang</h3>
			</div>
			<section class="panel panel-default">
				<header class="panel-heading">
					Tambah Jenjang
				</header>
				<div class="panel-body">
					<?php pesan_get('msg',"Berhasil Menambahkan Jenjang","Gagal Menambahkan Jenjang") ?>
					<form class="bs-example form-horizontal" data-validate="parsley" action="<?php echo base_url() ?>admin/datamaster/jenjangtambah"
					method="post">
						<a href="<?php echo base_url('admin/datamaster/jenjang') ?>" style="color:#3b994a;margin-left:10px">
							<i class="fa fa-chevron-left"></i> Kembali</a>
						<div class="row">
							<div class="col-md-5">
								<div class="form-group">
									<label class="col-lg-4 control-label">Jenjang</label>
									<div class="col-lg-8">
										<input type="text" class="form-control" name="jenjang" data-required="true" value="<?php echo set_value('jenjang'); ?>"
										/>
										<?php if(isset($jenjang)) {
													echo '<label style="color:red;font-size:10px">Jenjang sudah pernah diinput !</label>';
												} 
										?>
									</div>
								</div>

							</div>
							<div class="col-md-7">
								<div class="form-group">
									<label class="col-lg-4 control-label">Keterangan Jenjang</label>
									<div class="col-lg-8">
										<input type="text" class="form-control" name="namajenjang" data-required="true" value="<?php echo set_value('namajenjang'); ?>" />
									</div>
								</div>
							</div>
						</div>
				</div>
				<footer class="panel-footer text-right bg-light lter">
					<button type="submit" class="btn btn-success btn-s-xs">
						<i class="fa fa-save"></i> Simpan</button>
					&nbsp
					<a href="<?php echo base_url('admin/datamaster/jenjang') ?>" class="btn btn-default btn-s-xs">
						<i class="fa fa-list"></i> Daftar Jenjang</a>
				</footer>
				</form>
				</div>
			</section>
		</section>
	</section>

</section>
