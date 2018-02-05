<section id="content">
          <section class="vbox">

<section class="scrollable padder">
	<div class="m-b-md">
	</div>
	<div class="row">
		<div class="col-sm-12">
			<?php echo form_open('master_data_c/Tb_role_admin/add'); ?>
			<form data-validate="parsley" action="#">
                    <section class="panel panel-default">
                      <header class="panel-heading text-right">
                        <span class="h4 font-bold">Tambah data role admin</span>
                      </header>
											<div class="panel-body">
													<div class="form-group">
												    <label>Kode Role :</label>
														<input data-required="true" class="form-control" type="text" name="kode_role" value="<?php echo $this->input->post('kode_role'); ?>" />
														<span class="text-danger"><?php echo form_error('kode_role');?></span>
													</div>
													<div class="form-group">
														<label>Nama Role :</label>
														<input data-required="true" class="form-control"type="text" name="nama_role" value="<?php echo $this->input->post('nama_role'); ?>" />
														<span class="text-danger"><?php echo form_error('nama_role');?></span>
													</div>
												</div>
												<div class="panel-footer">
													<button type="submit" class="btn btn-success btn-s-xs">Save</button>
												</div>
											</section>
			</form>
			<?php echo form_close(); ?>
</div>
</div>
</diV>
					</section>
				</section>
</section>

</section>
</section>
<script src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
<!-- Bootstrap -->
<script src="<?php echo base_url('assets/js/bootstrap.js');?>"></script>
<!-- App -->
<script src="<?php echo base_url('assets/js/app.js');?>"></script>
<script src="<?php echo base_url('assets/js/slimscroll/jquery.slimscroll.min.js');?>"></script>
	<script src="<?php echo base_url('assets/js/charts/easypiechart/jquery.easy-pie-chart.js');?>"></script>
<script src="<?php echo base_url('assets/js/charts/sparkline/jquery.sparkline.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/charts/flot/jquery.flot.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/charts/flot/jquery.flot.tooltip.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/charts/flot/jquery.flot.spline.js');?>"></script>
<script src="<?php echo base_url('assets/js/charts/flot/jquery.flot.pie.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/charts/flot/jquery.flot.resize.js');?>"></script>
<script src="<?php echo base_url('assets/js/charts/flot/jquery.flot.grow.js');?>"></script>
<script src="<?php echo base_url('assets/js/charts/flot/demo.js');?>"></script>

<script src="<?php echo base_url('assets/js/calendar/bootstrap_calendar.js');?>"></script>
<script src="<?php echo base_url('assets/js/calendar/demo.js');?>"></script>

<script src="<?php echo base_url('assets/js/datatables/jquery.dataTables.js');?>"></script>

<script src="<?php echo base_url('assets/js/app.plugin.js');?>"></script>

<script type="text/javascript">
$(document).ready(function() {
$('#role_admin').DataTable({});
});
</script>
</body>
</html>
