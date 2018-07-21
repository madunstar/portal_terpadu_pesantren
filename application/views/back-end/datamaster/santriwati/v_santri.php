<section id="content" style="width:100%">
	<section class="vbox">
		<section class="scrollable padder">
			<div class="m-b-md">
				<h3 class="m-b-none">Santriwati</h3>
			</div>
			<section class="panel panel-default" style="width:100%">
				<header class="panel-heading">
					List Santriwati
					<i class="fa fa-info-sign text-muted" data-toggle="tooltip" data-placement="bottom" data-title="ajax to load the data."></i>
				</header>
				<div class="table-responsive">
					<?php pesan_get('psn',"Berhasil Import Data Santri","Gagal Import Data Santri","Salah") ?>
					<?php pesan_get('msg',"Berhasil Menghapus Data Santri","Gagal Menghapus Data Santri") ?>
					<a style="margin: 10px 0 10px 10px" href="<?php echo base_url() ?>admin/datamaster/santriwatitambah" class="btn btn-s-md btn-success btn-rounded">
						<i class="fa fa-plus"></i> Tambah data</a>
						<button class="btn btn-primary btn-rounded" data-toggle="modal" data-target="#import" ><i class="fa fa-download"></i> Import Data</button>


					<table class="table table-striped " id="datatable">
						<thead>
							<tr>
								<th width="145px">Aksi</th>
								<th>Nama</th>
								<th>NIS</th>
								<th>NISN</th>
								<th>Gender</th>
								<th>Pondokan</th>
								<th>Afilasi</th>
								<th>Ekstra</th>
							</tr>
						</thead>
						<tbody>

						</tbody>
					</table>
				</div>
			</section>
		</section>
	</section>

</section>
<!-- modal import -->
<div class='modal' id='import' tabindex='-1' role='dialog'>
 <div class='modal-dialog' role='document'>
	 <div class='modal-content'>
		 <div class='modal-header bg-default'>

			 <h4 class='modal-title'>Upload file Excel</h4>
		 </div>
		 <div class='modal-body form-horizontal'>
			 <form class="" action="<?php echo base_url() ?>admin/datamaster/santriwatiimport" method="post"  enctype="multipart/form-data">
				 <input type="file" class="filestyle" data-icon="false" data-classButton="btn btn-default" data-classInput="form-control inline v-middle input-s" name="excel_santri" data-required="true">
				 <button class="btn btn-primary" type="submit" name="button">upload</button>
				 <br>

				 <p><small>Pastikan Format Isian File Excel Data Santri Sesusai dengan <a class="text-info" href="<?php echo base_url() ?>admin/datamaster/downloadcontohimport"><b>Contoh Berikut</b></a></small></p>
			 </form>
		 </div>
		 <div class='modal-footer'>

			 <button type='button' class='btn btn-secondary btn-sm' data-dismiss='modal'>Batal</button>
		 </div>
	 </div>
 </div>
 </diV>
 <!-- akhir -->
<div id="myModaledit" class="modal fade" role="dialog">
	<div class="modal-dialog" id="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content" id="modal-edit">
			<div class="modal-body">
			</div>
		</div>
	</div>
</div>
