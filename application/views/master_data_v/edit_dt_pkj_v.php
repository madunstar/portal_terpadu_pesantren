<section id="content">
  <section class="vbox">
    <section class="scrollable padder">
	  <div class="m-b-md">
	  </div>
	  <div class="row">
	    <div class="col-sm-12">
		  <?php echo form_open('master_data_c/dt_pkj/edit/'.$tb_pekerjaan['kd_pkj']); ?>
		  <form data-validate="parsley" action="#">
            <section class="panel panel-default">
              <header class="panel-heading text-right">
                <span class="h4 font-bold">Tambah Data Pekerjaan</span>
              </header>
			  <div class="panel-body">
			    <div class="form-group">
				  <label>Kode Pekerjaan :</label>
				  <input data-required="true" class="form-control" type="text" name="kd_pkj" value="<?php echo ($this->input->post('kd_pkj') ? $this->input->post('kd_pkj') : $tb_pekerjaan['kd_pkj']);?>" />
				  <span class="text-danger"><?php echo form_error('kd_pkj');?></span>
				</div>
				<div class="form-group">
				  <label>Nama Pekerjaan :</label>
				  <input data-required="true" class="form-control"type="text" name="nama_pkj" value="<?php echo ($this->input->post('nama_pkj') ? $this->input->post('nama_pkj') : $tb_pekerjaan['nama_pkj']); ?>" />
				  <span class="text-danger"><?php echo form_error('nama_pkj');?></span>
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
	$('#tbl_dt_pkj').DataTable({});
  });
</script>
</body>
</html>
