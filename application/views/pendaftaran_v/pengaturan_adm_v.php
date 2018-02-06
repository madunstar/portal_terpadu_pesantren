<section id="content">
  <section class="vbox">

    <section class="scrollable padder">
      <div class="row m-b-md">
        <div class="col-sm-6">
          <h3 class="m-b-xs text-black">Pengaturan</h3>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-12">
          <section class="panel">
            <header class="panel-heading bg-dark">
              <b>Pengaturan dasar</b>
            </header>
            <div class="panel-body">

              <form class="form-horizontal">
              <div class="form-group">
                <label class="control-label col-sm-2">Pendaftaran Aktif</label>
                <div class="col-sm-10">
                  <label class="switch">
                      <input type="checkbox" name="aktif[]" value="<?php echo $tb_pengaturan_pendaftaran['pendaftaran_aktif']?>" <?php echo ($tb_pengaturan_pendaftaran['pendaftaran_aktif'] == 1 ? 'checked' : null);?>>
                      <span></span>
                    </label>
                </div>

              </div>
              <div class="line line-dashed b-b line-lg pull-in"></div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="input-id-1">Tahun Ajaran</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="input-id-1" value="<?php echo $tb_pengaturan_pendaftaran['tahun_ajaran']?>">
                      </div>
                    </div>
                      <div class="line line-dashed b-b line-lg pull-in"></div>
                      <button type="button" class="btn btn-success pull-right" name="button">Simpan</button>
            </form>

            </div>




                </section>
                <section class="panel">
                  <header class="panel-heading bg-dark">
                    <b>Pengaturan akun Pendaftar</b>
                  </header>
                  <div class="panel-body">
                    <button type="button" class="btn btn-danger" name="button">Reset Password Akun Pendaftar</button>

                  </div>




                      </section>
                </div>


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


</body>
</html>
