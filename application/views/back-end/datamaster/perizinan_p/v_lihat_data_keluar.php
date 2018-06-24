<form id="formeditkelas" class="form-horizontal mb-lg">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal">&times;</button>
		<h4 class="modal-title">Lihat Data Keluar Santriwati "<?php echo $lihat['nama_lengkap'] ?> (<?php echo $lihat['nis_santri'] ?>)"</h4>
	</div>
	<div class="modal-body">
		<table class="" style="border:none; width:100%">
			<thead>
				<tr>
					<th>Tanggal Keluar</th>
					<th>Tanggal Rencana Kembali</th>
					<th>Keperluan</th>
					<th>Penjemput</th>
					<th>Status Keluar</th>
				</tr>
			</thead>
			<tbody>
				<?php
        	{
	          echo "<tr>
	                  <td>".$lihat['tanggal_keluar']."</td>
										<td>".$lihat['harus_kembali']."</td>
										<td>".$lihat['keperluan']."</td>
										<td>".$lihat['nama_penjemput']."</td>
										<td>".$lihat['status_keluar']."</td>
	                </tr>";
      		}
  			?>
			</tbody>
		</table>
	</div>
	<div class="modal-footer">
		<div class="row">
			<div class="col-md-12 text-right">
				<button type="button" class="btn btn-default modal-dismiss" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>

</form>
