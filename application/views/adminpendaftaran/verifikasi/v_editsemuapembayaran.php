<section id="content">
	<section class="vbox">
		<section class="scrollable padder">
			<div class="m-b-md">
				<h3 class="m-b-none">Calon Santri</h3>
			</div>
			<section class="panel panel-default">
				<header class="panel-heading">
					Bukti Pembayaran
				</header>
				<div class="panel-body">
					<?php pesan_get('msg',"Berhasil Mengupdate Bukti Pembayaran","Tipe file bukti pembayaran harus jpg","Tipe file bukti pembayaran harus jpg") ?>
					<?php pesanvar('2',"","","Lengkapi Bukti Pembayaran dengan data sebenarnya dan selengkap-lengkapnya") ?>
					<form class="bs-example form-horizontal" data-validate="parsley" action="<?php echo base_url() ?>admin/pendaftaran/semuaberkas?email=<?php echo $data['email_pendaftar'] ?>"
					method="post" enctype="multipart/form-data">
					<input type="hidden" value="<?php echo $data['email_pendaftar'] ?>" name="email_pendaftar" >

						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label class="col-lg-2 control-label">Besar Pembayaran</label>
									<div class="col-lg-4">
										<label class="control-label"><b><?php echo $data['besar_pembayaran']; ?></b></label>
									</div>
								</div>

								<div class="form-group">
									<label class="col-sm-2 control-label">Tanggal Pembayaran</label>
									<div class="col-sm-4">
									<label class="control-label"><b><?php echo $data['tanggal_pembayaran']; ?></b></label>
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-2 control-label">Keterangan</label>
									<div class="col-lg-4">
									<label class="control-label"><b><?php echo $data['keterangan']; ?></b></label>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">Bukti Pembayaran</label>
									<div class="col-sm-7">
										<?php if ($data['bukti_pembayaran']!="") { ?>
										<a href="<?php echo "".base_url()."assets/images/berkas/".$data['bukti_pembayaran']."" ?>" target="_blank"> <img id="uploadPreview1"  style="max-width:200px; margin-top:5px; margin-bottom:0px;" src="<?php echo "".base_url()."assets/images/berkas/".$data['bukti_pembayaran']."" ?>" class="thumbnail"> 
										</a>
									<?php } else {?>
										<label class="control-label"><b>Belum diupload</b></label>
									<?php } ?>
									</div>
									
								</div>
								<div class="form-group">
								<label class="col-lg-2 control-label">Status Verifikasi</label>
								<div class="col-lg-7">
									<select class="form-control" name="status_biodata">
										<option value="tidak lengkap" <?php echo ($data['status_biodata']=="tidak lengkap"?"selected":""); ?> >tidak lengkap</option>
										<option value="menunggu verifikasi" <?php echo ($data['status_biodata']=="menunggu verifikasi"?"selected":""); ?> >menunggu verifikasi</option>
										<option value="diverifikasi" <?php echo ($data['status_biodata']=="diverifikasi"?"selected":""); ?> >diverifikasi</option>
									</select>
								</div>
							</div>
						</div>
				</div>
				<footer class="panel-footer bg-light lter">
					<div class="row">
						<div class="col-md-2">
						</div>
						<div class="col-md-10">
							<button type="submit" class="btn btn-success btn-s-xs">
								<i class="fa fa-save"></i> Simpan</button>
						</div>

					</div>

				</footer>
				</form>


				</div>
			</section>
		</section>
	</section>

</section>
