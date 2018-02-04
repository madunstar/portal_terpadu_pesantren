<section id="content">
          <section class="vbox">

<section class="scrollable padder">
  <div class="m-b-md">
    <h3 class="m-b-none">Data Master</h3>
  </div>
  <section class="panel panel-default">
      <header class="panel-heading">
                    Data Role Admin
                    <i class="fa fa-info-sign text-muted" data-toggle="tooltip" data-placement="bottom" data-title="ajax to load the data."></i>
      </header>
<div class="table-responsive">
  <table class="table table-striped m-b-none" id="role_admin">
    <thead>
      <tr>
        <th>Kode</th>
        <th>role</th>
    		<th>aksi</th>
      </tr>
    </thead>

   <tbody>
 	   <?php foreach($tb_role_admin as $t){ ?>
        <tr>
 		       <td><?php echo $t['kode_role']; ?></td>
 		       <td><?php echo $t['nama_role']; ?></td>
 		       <td>
             <a href="<?php echo site_url('tb_role_admin/edit/'.$t['kode_role']); ?>"><button class="btn btn-xs btn-warning"><span class="fa fa-edit"></span></button></a> |
             <a href="<?php echo site_url('tb_role_admin/remove/'.$t['kode_role']); ?>"><button class="btn btn-xs btn-danger"><span class="fa fa-trash-o"></span></button></a>
           </td>
       </tr>
 	   <?php } ?>
 </tbody>
 </table>
</div>
  </section>
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
