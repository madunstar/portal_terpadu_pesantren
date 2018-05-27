<section id="content" style="width:100%">
	<section class="vbox">
		<section class="scrollable padder">
			<div class="m-b-md">
				<h3 class="m-b-none">santriwati</h3>
			</div>
			<section class="panel panel-default" style="width:100%">
				<header class="panel-heading">
					List santriwati
					<i class="fa fa-info-sign text-muted" data-toggle="tooltip" data-placement="bottom" data-title="ajax to load the data."></i>
				</header>
				<div class="table-responsive">
					<?php pesan_get('psn',"Berhasil Import Data Santri","Gagal Import Data Santri","Salah") ?>

					<?php pesan_get('msg',"Berhasil Menghapus Data santriwati","Gagal Menghapus Data santriwati") ?>
					<a style="margin: 10px 0 10px 10px" href="<?php echo base_url() ?>admin/santriwatiakd/santriwatitambah" class="btn btn-s-md btn-success btn-rounded">
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
							<?php
                foreach($data->result_array() as $row){
                  echo "
                    <tr>
                      <td>
                      <a href='".base_url('admin/santriwatiakd/santriwatilihat?nis='.$row['nis_lokal'].'')."' class='btn btn-primary btn-xs' title='Lihat'><i class='fa fa-eye'></i></a>
                      <a href='".base_url('admin/santriwatiakd/santriwatiedit?nis='.$row['nis_lokal'].'')."' class='btn btn-warning btn-xs' title='Edit'><i class='fa fa-edit'></i></a>
											<a href='#' class='btn btn-danger btn-xs hapus' title='Hapus' id='".$row['nis_lokal']."'><i class='fa fa-trash-o'></i></a>
											<a href='".base_url('admin/santriwatiakd/cetakkartu?nis='.$row['nis_lokal'].'')."' class='btn btn-info btn-xs' title='cetak' id='".$row['nis_lokal']."' target='_blank'><i class='fa fa-print'></i></a>
                      </td>
                      <td>".$row['nama_lengkap']."</td>
                      <td>".$row['nis_lokal']."</td>
                      <td>".$row['nisn']."</td>
											<td>".($row['jenis_kelamin']=="L"?"Laki-laki":"Perempuan")."</td>
											<td><button class='btn btn-default btn-xs edit2'  title='Kelas' id='".$row['nis_lokal']."' data-toggle='modal' data-target='#myModaledit' ><i class='fa fa-list'></i> ".$row['pondokan']."</button></td>
                      <td><button class='btn btn-default btn-xs edit'  title='Kelas' id='".$row['nis_lokal']."' data-toggle='modal' data-target='#myModaledit' ><i class='fa fa-list'></i> ".$row['kelas']."</button></td>
                      <td>
                        <a href='".base_url('admin/santriwatiakd/santriwatiberkas?nis='.$row['nis_lokal'].'')."' class='btn btn-success btn-xs' title='Berkas'><i class='fa fa-file-text-o'></i></a>
                        <a href='".base_url('admin/santriwatiakd/prestasisantriwati?nis='.$row['nis_lokal'].'')."' class='btn btn-primary btn-xs' title='Prestasi'><i class='fa fa-trophy'></i></a>
                        <a href='".base_url('admin/santriwatiakd/pelanggaransantriwati?nis='.$row['nis_lokal'].'')."' class='btn btn-danger btn-xs' title='Pelanggaran'><i class='fa fa-ban'></i></a>
                      </td>
                    </tr>
                  ";
                }
            ?>
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
			 <form class="" action="<?php echo base_url() ?>admin/santriwatiakd/santriwatiimport" method="post"  enctype="multipart/form-data">
				 <input type="file" class="filestyle" data-icon="false" data-classButton="btn btn-default" data-classInput="form-control inline v-middle input-s" name="excel_santri" data-required="true">
				 <button class="btn btn-primary" type="submit" name="button">upload</button>
				 <br>

				 <p><small>Pastikan Format Isian File Excel Data Santri Sesusai dengan <a class="text-info" href="<?php echo base_url() ?>admin/santriwatiakd/downloadcontohimport"><b>Contoh Berikut</b></a></small></p>
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
