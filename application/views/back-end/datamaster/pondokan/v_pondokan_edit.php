<section id="content">
	<section class="vbox">
		<section class="scrollable padder">
			<div class="m-b-md">
				<h3 class="m-b-none">Pondokan</h3>
			</div>
			<section class="panel panel-default">
				<header class="panel-heading">
					Ubah Data Pondokan
				</header>
				<div class="panel-body">
					<?php pesan_get('msg',"Berhasil Mengubah Data Pondokan","Gagal Mengubah Data Pondokan") ?>
					<form class="bs-example form-horizontal" data-validate="parsley" action="<?php echo base_url() ?>admin/datamaster/pondokanedit?pondokan=<?php if (isset($pondokan2)) echo $pondokan2; else echo $data['pondokan']; ?>"
					method="post">
						<a href="<?php echo base_url('admin/datamaster/pondokan') ?>" style="color:#3b994a;margin-left:10px">
							<i class="fa fa-chevron-left"></i> Kembali</a>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="col-lg-4 control-label">Pondokan</label>
									<div class="col-lg-8">
										<input type="text" class="form-control" name="pondokan" data-required="true" value="<?php echo $data['pondokan']; ?>" />
										<input type="hidden" class="form-control" name="pondokan2" data-required="true" value="<?php
             					 		  if (isset($pondokan2)) echo $pondokan2; else echo $data['pondokan']; ?>" />
										<?php if(isset($pondokan)) {
													echo '<label style="color:red;font-size:10px">Pondokan ada yang sama ! Pondokan asal "'.$pondokan2.'"</label>';
												} 
											?>
									</div>
								</div>
								
							
							</div>
							<div class="col-md-6">
							
								<div class="form-group">
									<label class="col-lg-4 control-label">Keterangan Pondokan</label>
									<div class="col-lg-8">
										<input type="text" class="form-control" name="namapondokan" value="<?php echo $data['namapondokan']; ?>" />
									</div>
								</div>
								
							</div>
						</div>
				</div>
				<footer class="panel-footer text-right bg-light lter">
					<button type="submit" class="btn btn-success btn-s-xs">
						<i class="fa fa-save"></i> Simpan</button>
					&nbsp
					<a href="<?php echo base_url() ?>admin/datamaster/pondokanedit?pondokan=<?php if (isset($pondokan2)) echo $pondokan2; else echo $data['pondokan']; ?>"
					class="btn btn-default btn-s-xs">
						<i class="fa fa-refresh"></i> Atur Ulang</a>
					&nbsp
					<a href="<?php echo base_url('admin/datamaster/pondokan') ?>" class="btn btn-default btn-s-xs">
						<i class="fa fa-list"></i> Daftar Pondokan</a>
				</footer>
				</form>


				</div>
			</section>
		</section>
	</section>

</section>
