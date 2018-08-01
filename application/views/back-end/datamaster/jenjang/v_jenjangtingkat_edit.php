<section id="content">
	<section class="vbox">
		<section class="scrollable padder">
			<div class="m-b-md">
				<h3 class="m-b-none">Jenjang Tingkat"
					<?php echo $jenjang['namajenjang'] ?> (
					<?php echo $jenjang['jenjang'] ?>)"</h3>
			</div>
			<section class="panel panel-default">
				<header class="panel-heading">
					Ubah Tingkat jenjang
				</header>
				<div class="panel-body">
					<?php pesan_get('msg',"Berhasil Mengubah Data Tingkat jenjang","Gagal Mengubah Data Tingkat jenjang") ?>
					<form class="bs-example form-horizontal" data-validate="parsley" action="<?php echo base_url() ?>admin/datamaster/jenjangedittingkat?id=<?php echo $data['idtingkatjenjang'] ?>&jenjang=<?php echo $jenjang['jenjang'] ?>"
					method="post" enctype="multipart/form-data">
					<a href="<?php echo base_url('admin/datamaster/jenjangtingkat?jenjang='.$jenjang['jenjang'].'') ?>" style="color:#3b994a;margin-left:10px"><i class="fa fa-chevron-left"></i> Kembali</a>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label class="col-lg-2 control-label">Tingkat</label>
									<div class="col-lg-7">
										<input type="text" class="form-control" name="tingkat" data-required="true" value="<?php echo $data['tingkat']; ?>"/>
										<input type="hidden" class="form-control" name="jenjang" value="<?php echo $jenjang['jenjang'] ?>" />
										<input type="hidden" class="form-control" name="idtingkatjenjang" value="<?php echo $data['idtingkatjenjang'] ?>" />
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
