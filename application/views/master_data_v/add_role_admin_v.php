<?php echo form_open('master_data_c/Tb_role_admin/add'); ?>

	<div>
    <span class="text-danger">*</span>Kode Role :
		<input type="text" name="kode_role" value="<?php echo $this->input->post('kode_role'); ?>" />
		<span class="text-danger"><?php echo form_error('kode_role');?></span>
		<span class="text-danger">*</span>Nama Role :
		<input type="text" name="nama_role" value="<?php echo $this->input->post('nama_role'); ?>" />
		<span class="text-danger"><?php echo form_error('nama_role');?></span>
	</div>

	<button type="submit">Save</button>

<?php echo form_close(); ?>
