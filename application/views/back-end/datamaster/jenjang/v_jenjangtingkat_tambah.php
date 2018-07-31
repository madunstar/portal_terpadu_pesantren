<section id="content">
	<section class="vbox">
		<section class="scrollable padder">
			<div class="m-b-md">
				<h3 class="m-b-none">Jenjang Tingkat "
					<?php echo $jenjang['namajenjang'] ?> (<?php echo $jenjang['jenjang'] ?>)"</h3>
			</div>
			<section class="panel panel-default">
				<header class="panel-heading">
					Tambah Jenjang Tingkat
				</header>
				<div class="panel-body">
				
					<?php pesan_get('msg',"Berhasil Menambahkan Jenjang","Gagal Menambahkan Jenjang") ?>
					<form class="bs-example form-horizontal" data-validate="parsley" action="<?php echo base_url() ?>admin/datamaster/jenjangtambahtingkat?jenjang=<?php echo $jenjang['jenjang'] ?>"
					method="post" enctype="multipart/form-data">
					<a href="<?php echo base_url('admin/datamaster/jenjangtingkat?jenjang='.$jenjang['jenjang'].'') ?>" style="color:#3b994a;margin-left:10px"><i class="fa fa-chevron-left"></i> Kembali</a>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label class="col-lg-2 control-label">Tingkat</label>
									<div class="col-lg-7">
										<input type="text" class="form-control" name="tingkat" data-required="true" />
										<input type="hidden" class="form-control" name="jenjang" value="<?php echo $jenjang['jenjang'] ?>" />
									</div>
								</div>
							</div>
						</div>
				</div>
				<footer class="panel-footer text-right bg-light lter">
					<button type="submit" class="btn btn-success btn-s-xs">
						<i class="fa fa-save"></i> Simpan</button>
					&nbsp
					<a href="<?php echo base_url('admin/datamaster/jenjangtingkat?jenjang='.$jenjang['jenjang'].'') ?>" class="btn btn-default btn-s-xs">
						<i class="fa fa-list"></i> Daftar Tingkat</a>
				</footer>
				</form>


				</div>
			</section>
		</section>
	</section>

</section>
