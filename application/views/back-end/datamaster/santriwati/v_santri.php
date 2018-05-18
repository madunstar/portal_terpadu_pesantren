<section id="content" style="width:100%">
	<section class="vbox">
		<section class="scrollable padder">
			<div class="m-b-md">
				<h3 class="m-b-none">Santri</h3>
			</div>
			<section class="panel panel-default" style="width:100%">
				<header class="panel-heading">
					List Santri
					<i class="fa fa-info-sign text-muted" data-toggle="tooltip" data-placement="bottom" data-title="ajax to load the data."></i>
				</header>
				<div class="table-responsive">
					<?php pesan_get('msg',"Berhasil Menghapus Data Santri","Gagal Menghapus Data Santri") ?>
					<a style="margin: 10px 0 10px 10px" href="<?php echo base_url() ?>admin/datamaster/santriwatitambah" class="btn btn-s-md btn-success btn-rounded">
						<i class="fa fa-plus"></i> Tambah data</a>

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
                      <a href='".base_url('admin/datamaster/santriwatilihat?nis='.$row['nis_lokal'].'')."' class='btn btn-primary btn-xs' title='Lihat'><i class='fa fa-eye'></i></a>
                      <a href='".base_url('admin/datamaster/santriwatiedit?nis='.$row['nis_lokal'].'')."' class='btn btn-warning btn-xs' title='Edit'><i class='fa fa-edit'></i></a>
											<a href='#' class='btn btn-danger btn-xs hapus' title='Hapus' id='".$row['nis_lokal']."'><i class='fa fa-trash-o'></i></a>
											<a href='".base_url('admin/datamaster/cetakkartu?nis='.$row['nis_lokal'].'')."' class='btn btn-info btn-xs' title='cetak' id='".$row['nis_lokal']."' target='_blank'><i class='fa fa-print'></i></a>
                      </td>
                      <td>".$row['nama_lengkap']."</td>
                      <td>".$row['nis_lokal']."</td>
                      <td>".$row['nisn']."</td>
											<td>".($row['jenis_kelamin']=="L"?"Laki-laki":"Perempuan")."</td>
											<td><button class='btn btn-default btn-xs edit2'  title='Edit' id='".$row['nis_lokal']."' data-toggle='modal' data-target='#myModaledit' ><i class='fa fa-list'></i> ".$row['pondokan']."</button></td>
                      <td><button class='btn btn-default btn-xs edit'  title='Edit' id='".$row['nis_lokal']."' data-toggle='modal' data-target='#myModaledit' ><i class='fa fa-list'></i> ".$row['kelas']."</button></td>
                      <td>
                        <a href='".base_url('admin/datamaster/santriberkas?nis='.$row['nis_lokal'].'')."' class='btn btn-success btn-xs' title='Berkas'><i class='fa fa-file-text-o'></i></a>
                        <a href='".base_url('admin/datamaster/prestasisantriwati?nis='.$row['nis_lokal'].'')."' class='btn btn-primary btn-xs' title='Prestasi'><i class='fa fa-trophy'></i></a>
                        <a href='".base_url('admin/datamaster/pelanggaransantri?nis='.$row['nis_lokal'].'')."' class='btn btn-danger btn-xs' title='Pelanggaran'><i class='fa fa-ban'></i></a>
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

<div id="myModaledit" class="modal fade" role="dialog">
	<div class="modal-dialog" id="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content" id="modal-edit">
			<div class="modal-body">
			</div>
		</div>
	</div>
</div>
