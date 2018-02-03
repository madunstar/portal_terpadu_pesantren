<p><a href="<?php echo site_url('master_data_c/Tb_role_admin/add'); ?>"><btn class="btn btn-primary">Tambah data&nbsp;&nbsp;<span class="fa fa-plus-circle"></span></btn></a></p>
total data <?php echo $t_row ?>
<table class="table table-bordered" id="dataTable">
  <thead>
    <tr>
		<th>Kode Role</th>
		<th>Nama Role</th>
		<th>Actions</th>
    </tr>
  </thead>
    <tbody>
	<?php foreach($tb_role_admin as $t){ ?>

    <tr>
		<td><?php echo $t['kode_role']; ?></td>
		<td><?php echo $t['nama_role']; ?></td>
		<td>
            <a href="<?php echo site_url('tb_role_admin/edit/'.$t['kode_role']); ?>"><span class="fa fa-edit"></span></a> |
            <a href="<?php echo site_url('tb_role_admin/remove/'.$t['kode_role']); ?>">Delete</a>
        </td>
    </tr>
	<?php } ?>
</tbody>
</table>
<div class="pull-right">

</div>

  <script>
  $(document).ready(function(){$("#dataTable").DataTable()});
  </script>
