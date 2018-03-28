<section id="content">
	<section class="vbox">
		<section class="scrollable padder">
			<div class="m-b-md">
				<h3 class="m-b-none">Jenjang</h3>
			</div>
			<section class="panel panel-default">
				<header class="panel-heading">
					Edit Data Jenjang
				</header>
				<div class="panel-body">
					<?php pesan_get('msg',"Berhasil Mengedit Data Jenjang","Gagal Mengedit Data Jenjang") ?>
					<form class="bs-example form-horizontal" data-validate="parsley" action="<?php echo base_url() ?>admin/datamaster/jenjangedit?jenjang=<?php if (isset($jenjang2)) echo $jenjang2; else echo $data['jenjang']; ?>"
					method="post">
						<a href="<?php echo base_url('admin/datamaster/jenjang') ?>" style="color:#3b994a;margin-left:10px">
							<i class="fa fa-chevron-left"></i> Kembali</a>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="col-lg-4 control-label">Jenjang</label>
									<div class="col-lg-8">
										<input type="text" class="form-control" name="jenjang" data-required="true" value="<?php echo $data['jenjang']; ?>" />
										<input type="hidden" class="form-control" name="jenjang2" data-required="true" value="<?php
             					 		  if (isset($jenjang2)) echo $jenjang2; else echo $data['jenjang']; ?>" />
										<?php if(isset($jenjang)) {
													echo '<label style="color:red;font-size:10px">Jenjang ada yang sama ! Jenjang asal "'.$jenjang2.'"</label>';
												} 
											?>
									</div>
								</div>
								
							
							</div>
							<div class="col-md-6">
							
								<div class="form-group">
									<label class="col-lg-4 control-label">Keterangan Jenjang</label>
									<div class="col-lg-8">
										<input type="text" class="form-control" name="namajenjang" value="<?php echo $data['namajenjang']; ?>" />
									</div>
								</div>
								
							</div>
						</div>
				</div>
				<footer class="panel-footer text-right bg-light lter">
					<button type="submit" class="btn btn-success btn-s-xs">
						<i class="fa fa-save"></i> Simpan</button>
					&nbsp
					<a href="<?php echo base_url() ?>admin/datamaster/jenjangedit?jenjang=<?php if (isset($jenjang2)) echo $jenjang2; else echo $data['jenjang']; ?>"
					class="btn btn-default btn-s-xs">
						<i class="fa fa-refresh"></i> Reset</a>
					&nbsp
					<a href="<?php echo base_url('admin/datamaster/jenjang') ?>" class="btn btn-default btn-s-xs">
						<i class="fa fa-list"></i> List Jenjang</a>
				</footer>
				</form>


				</div>
			</section>
		</section>
	</section>

</section>
