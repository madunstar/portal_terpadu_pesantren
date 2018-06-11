<section id="content">
	<section class="vbox">
		<section class="scrollable padder">
			<div class="row m-b-md">
				<div class="col-sm-6">
					<h3 class="m-b-xs text-black">Presensi</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<section class="panel panel-default">
						<header class="panel-heading">
							<h4 class="font-bold">Data Presensi Kelas Afilasi</h4>
						</header>
						<div class="panel-body table-responsive">
							<?php pesan_get('msg',"Berhasil Menghapus Data Kelas Belajar","Gagal Menghapus Data Kelas Belajar") ?>
							<?php pesan_get('ed',"Berhasil Mengedit Kelas Belajar","Gagal Mengedit Kelas Belajar") ?>
							<a href="<?php echo base_url() ?>admin/datamaster/aturkelasbelawati">
								<button type="button" name="button" class="btn btn-success btn-rounded">
									<i class="fa fa-plus"></i> Atur Kelas Baru</button>
							</a>
							<table class="table table-striped m-b-none" id="datatable">
								<thead>
									<tr>
										<th style="width:160px">Aksi</th>
										<th>Tahun Ajaran</th>
										<th>Kelas</th>
										<th>Ruangan</th>
										<th>Wali</th>
										<th>Jenjang</th>
										<th>Tingkat</th>
										<th>jadwal Pelajaran</th>
										<th>Status</th>
										<th>Santriwati</th>
									</tr>
								</thead>
								<tbody>
									
								</tbody>
							</table>
						</div>

					</section>
					<div>
					</div>
		</section>
	</section>
</section>

</section>


<div id="myModaledit" class="modal fade" role="dialog">
	<div class="modal-dialog" id="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content" id="modal-edit">
			<div class="modal-body">
			</div>
		</div>
	</div>
</div>
