<section id="content" style="width:100%">
	<section class="vbox">
		<section class="scrollable padder">
			<div class="m-b-md">
				<h3 class="m-b-none">santri</h3>
			</div>
			<section class="panel panel-default" style="width:100%">
				<header class="panel-heading">
					List santri
					<i class="fa fa-info-sign text-muted" data-toggle="tooltip" data-placement="bottom" data-title="ajax to load the data."></i>
				</header>
				<div class="table-responsive">
					<?php pesan_get('psn',"Berhasil Import Data Santri","Gagal Import Data Santri","Salah") ?>

					<?php pesan_get('msg',"Berhasil Menghapus Data santri","Gagal Menghapus Data santri") ?>

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
                      <a href='".base_url('admin/perizinan/santrilihat?nis='.$row['nis_lokal'].'')."' class='btn btn-primary btn-xs' title='Lihat'><i class='fa fa-eye'></i></a>

                      </td>
                      <td>".$row['nama_lengkap']."</td>
                      <td>".$row['nis_lokal']."</td>
                      <td>".$row['nisn']."</td>
											<td>".($row['jenis_kelamin']=="L"?"Laki-laki":"Perempuan")."</td>
											<td><button class='btn btn-default btn-xs edit2'  title='Kelas' id='".$row['nis_lokal']."' data-toggle='modal' data-target='#myModaledit' ><i class='fa fa-list'></i> ".$row['pondokan']."</button></td>
                      <td><button class='btn btn-default btn-xs edit'  title='Kelas' id='".$row['nis_lokal']."' data-toggle='modal' data-target='#myModaledit' ><i class='fa fa-list'></i> ".$row['kelas']."</button></td>
                      <td>
                        <a href='".base_url('admin/perizinan/santriberkas?nis='.$row['nis_lokal'].'')."' class='btn btn-success btn-xs' title='Berkas'><i class='fa fa-file-text-o'></i></a>
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
			 <form class="" action="<?php echo base_url() ?>admin/perizinan/santriwatiimport" method="post"  enctype="multipart/form-data">
				 <input type="file" class="filestyle" data-icon="false" data-classButton="btn btn-default" data-classInput="form-control inline v-middle input-s" name="excel_santri" data-required="true">
				 <button class="btn btn-primary" type="submit" name="button">upload</button>
				 <br>

				 <p><small>Pastikan Format Isian File Excel Data Santri Sesusai dengan <a class="text-info" href="<?php echo base_url() ?>admin/perizinan/downloadcontohimport"><b>Contoh Berikut</b></a></small></p>
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
