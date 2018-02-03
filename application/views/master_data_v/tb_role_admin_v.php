<table border="1" width="100%">
    <tr>
		<th>Kode Role</th>
		<th>Nama Role</th>
		<th>Actions</th>
    </tr>
	<?php foreach($tb_role_admin as $t){ ?>
    <tr>
		<td><?php echo $t['kode_role']; ?></td>
		<td><?php echo $t['nama_role']; ?></td>
		<td>
            <a href="<?php echo site_url('tb_role_admin/edit/'.$t['kode_role']); ?>">Edit</a> |
            <a href="<?php echo site_url('tb_role_admin/remove/'.$t['kode_role']); ?>">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
<div class="pull-right">
    <?php echo $this->pagination->create_links(); ?>
</div>
