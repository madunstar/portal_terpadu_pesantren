<?php
  if (isset($_GET['l'])) {
    $l = $_GET['l'];
  } else {
    $l = "semuapendaftar";
  }
?>
<section id="content">
	<section class="vbox">
		<section class="scrollable padder">
			<div class="m-b-md">
				<h3 class="m-b-none">Verifikasi Berkas Calon Santri</h3>
			</div>
			<section class="panel panel-default">
				<header class="panel-heading">
					Berkas Calon Santri
				</header>
				<div class="panel-body">
					<?php echo $this->session->flashdata('error'); ?>
					<?php pesan_get('msg',"Berhasil Mengupdate Berkas","Gagal Mengupdate Mengupdate Berkas","berhasil Update Berkas") ?>
					<form class="bs-example form-horizontal"  action="<?php echo base_url() ?>admin/pendaftaran/semuaberkas?email=<?php echo $data['email_pendaftar'] ?>&l=<?php echo $l ?>" method="post">
					<a href="<?php echo base_url("admin/pendaftaran/$l") ?>" style="color:#3b994a;margin-left:10px"><i class="fa fa-chevron-left"></i> Kembali</a>
					<input type="hidden" value="<?php echo $data['email_pendaftar'] ?>" name="email_pendaftar" >
					<div class="row">
						<div class="col-md-12">
							<!-- pas poto -->
								<table class="table table-striped " id="datatable" style="margin-top:20px">
								<thead>
									<tr>
										<th>Nama Berkas</th>
										<th>Keterangan</th>
										<th>File</th>
									</tr>
								</thead>
								<tbody>
								<tr>
									<td>Pas Poto</td>
									<td><?php echo ($datapoto['nama_berkas'] == 'paspoto' ? '<p class="text-success">Pas poto lengkap</p>' :'<p class="text-danger">Pas Poto Belum Lengkap</p>');?></td>
									<td><a target='_blank' <?php echo ($datapoto[ 'nama_berkas']=='paspoto' ? 'href="'.base_url( 'assets/images/berkas/'.$datapoto[
										'file_berkas']). '"' : '');?> >
											<img src=" <?php echo ($datapoto['nama_berkas'] == 'paspoto' ? ''.base_url('assets/images/berkas/'.$datapoto['file_berkas']).'' :'');?>"
											class="thumbnail" style="max-width:200px; margin-top:5px; margin-bottom:0px;">
										</a></td>
								</tr>
								<tr>
										<td>Kartu Keluarga</td>
										<td><?php echo ($datakk['nama_berkas'] == 'kartu keluarga' ? '<p class="text-success">Kartu keluarga lengkap</p>' :'<p class="text-danger">Kartu keluarga Belum Lengkap</p>');?>
										</td>
										<td><a target='_blank' <?php echo ($datakk[ 'nama_berkas']=='kartu keluarga' ? 'href="'.base_url( 'assets/images/berkas/'.$datakk[
										"file_berkas"]). '"' : '');?>>
											<img src=" <?php echo ($datakk['nama_berkas'] == 'kartu keluarga' ? ''.base_url('assets/images/berkas/'.$datakk['file_berkas']).'' :'');?>"
											class="thumbnail" style="max-width:200px; margin-top:5px; margin-bottom:0px;">
										</a></td>
								</tr>
								<tr>
											<td>Ijazah</td>
											<td><?php echo ($dataijazah['nama_berkas'] == 'ijazah' ? '<p class="text-success">Ijazah lengkap</p>' :'<p class="text-danger">Ijazah Belum Lengkap</p>');?>
										</td>
											<td>	<a target='_blank' <?php echo ($dataijazah[ "nama_berkas"]=="ijazah" ? "href='".base_url( 'assets/images/berkas/'.$dataijazah[
										"file_berkas"]). "'": "");?>>
											<img src=" <?php echo ($dataijazah['nama_berkas'] == 'ijazah' ? ''.base_url('assets/images/berkas/'.$dataijazah['file_berkas']).'' :'	');?>"
											class="thumbnail" style="max-width:200px; margin-top:5px; margin-bottom:0px;">

										</a></td>
								</tr>
								<tr>
												<td collspan="3"><small class="text-muted">Optional</small></td>
												<td></td>
												<td></td>
								</tr>
								<tr>
												<td>Piagam / Sertifikat</td>
												<td><?php echo ($datapiagam1['nama_berkas'] == 'piagam1' ? '<p class="text-success">Piagam / Sertifikat lengkap</p>' : '<p class="text-danger">Tidak Ada</p>');?></td>
												<td><a target='_blank' <?php echo ($datapiagam1[ "nama_berkas"]=="piagam1" ? "href='".base_url( "assets/images/berkas/".$datapiagam1[
										"file_berkas"]). "'" : "");?>>
												<img src=" <?php echo ($datapiagam1['nama_berkas'] == 'piagam1' ? ''.base_url('assets/images/berkas/'.$datapiagam1['file_berkas']).'' :'	');?>"
												class="thumbnail" style="max-width:200px; margin-top:5px; margin-bottom:0px;">
										</a></td>
								</tr>
								<tr>
													<td>Piagam / Sertifikat</td>
													<td><?php echo ($datapiagam2['nama_berkas'] == 'piagam2' ? '<p class="text-success">Piagam / Sertifikat lengkap</p>' : '<p class="text-danger">Tidak Ada</p>');?></td>
													<td><a target='_blank' <?php echo ($datapiagam2[ "nama_berkas"]=="piagam2" ? 'href="'.base_url( "assets/images/berkas/".$datapiagam2[
										"file_berkas"]). '"' : ""); ?>>
											<img src=" <?php echo ($datapiagam2['nama_berkas'] == 'piagam2' ? ''.base_url('assets/images/berkas/'.$datapiagam2['file_berkas']).'' :'	');?>"
											class="thumbnail" style="max-width:200px; margin-top:5px; margin-bottom:0px;">
										</a></td>
								</tr>
								</tbody>
								</table>
							<!-- optional -->



						</div>
					</div>
					<div class="form-group">
									<label class="col-lg-7 control-label">Status Verifikasi</label>
									<div class="col-lg-5">
										<select class="form-control" name="status_berkas">
												<option value="Tidak Lengkap" <?php echo ($data['status_berkas']=="Tidak Lengkap"?"selected":""); ?> >Tidak Lengkap</option>
												<option value="Menunggu Verifikasi" <?php echo ($data['status_berkas']=="Menunggu Verifikasi"?"selected":""); ?> >Menunggu Verifikasi</option>
												<option value="Diverifikasi" <?php echo ($data['status_berkas']=="Diverifikasi"?"selected":""); ?> >Diverifikasi</option>
										</select>
									</div>
								</div>
				</div>

				<footer class="panel-footer text-right bg-light lter">
        <button type="submit" class="btn btn-success btn-s-xs"><i class="fa fa-save"></i> Simpan</button>

        <a href="<?php echo base_url("admin/pendaftaran/$l") ?>" class="btn btn-default btn-s-xs"><i class="fa fa-list"></i> Daftar Santri</a>
      </footer>
      </form>

			</section>


			</div>
		</section>
	</section>

</section>
