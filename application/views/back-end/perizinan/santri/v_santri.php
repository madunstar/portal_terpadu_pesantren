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
					<table class="table table-striped " id="datatable">
						<thead>
							<tr>
								<th width="145px">Aksi</th>
								<th>Nama</th>
								<th>NIS</th>
								<th>NISN</th>
								<th>Jenis Kelamin</th>
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
                      <a href='".base_url('admin/perizinansantri/santrilihat?nis='.$row['nis_lokal'].'')."' class='btn btn-primary btn-xs' title='Lihat'><i class='fa fa-eye'></i></a>

                      </td>
                      <td>".$row['nama_lengkap']."</td>
                      <td>".$row['nis_lokal']."</td>
                      <td>".$row['nisn']."</td>
											<td>".($row['jenis_kelamin']=="L"?"Laki-laki":"Perempuan")."</td>
											<td><button class='btn btn-default btn-xs pondok'  title='Kelas' id='".$row['nis_lokal']."' data-toggle='modal' data-target='#myModaledit' ><i class='fa fa-list'></i> ".$row['pondokan']."</button></td>
                      <td><button class='btn btn-default btn-xs tingkat'  title='Kelas' id='".$row['nis_lokal']."' data-toggle='modal' data-target='#myModaledit' ><i class='fa fa-list'></i> ".$row['kelas']."</button></td>
                      <td>
                        <a href='".base_url('admin/perizinansantri/santriberkas?nis='.$row['nis_lokal'].'')."' class='btn btn-success btn-xs' title='Berkas'><i class='fa fa-file-text-o'></i></a>
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
