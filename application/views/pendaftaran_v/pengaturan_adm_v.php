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
          <?php echo $this->session->flashdata('response'); ?>
          <section class="panel">
            <header class="panel-heading bg-dark">
              <b>Pengaturan dasar</b>
            </header>
            <?php $att_form = array('class'=>'form-horizontal','data-validate'=>'parsley','id'=>'pengaturan');
            echo form_open('pendaftaran_adm/pengaturan/edit',$att_form); ?>

            <div class="panel-body">
              <div class="form-group col-sm-12">
                <label class="control-label col-sm-2">Pendaftaran Aktif</label>
                <div class="col-sm-1">
                  <label class="switch">
                      <input type="radio" name="aktif" value="1" <?php echo ($tb_pengaturan_pendaftaran['pendaftaran_aktif'] == 1 ? 'checked' : null);?>>
                      <span></span>
                    </label>
                </div>
                <label class="control-label col-sm-2">Pendaftaran Tidak Aktif</label>
                <div class="col-sm-1">
                  <label class="switch">
                      <input type="radio" name="aktif" value="0" <?php echo ($tb_pengaturan_pendaftaran['pendaftaran_aktif'] == 0 ? 'checked' : null);?>>
                      <span></span>
                    </label>
                </div>

              </div>

                    <div class="form-group col-sm-12">
                      <div class="line line-dashed b-b line-lg pull-in"></div>
                      <label class="col-sm-2 control-label" for="input-id-1">Tahun Ajaran</label>
                      <div class="col-sm-10">
                        <input data-required="true" type="text" class="form-control parsley-validated" name="tahun_ajaran" value="<?php echo $tb_pengaturan_pendaftaran['tahun_ajaran']?>">
                      </div>
                    </div>
                    <div class="form-group col-sm-12">
                      <div class="line line-dashed b-b line-lg pull-in"></div>
                      <button type="submit" data-loading-text="Menyimpan..." class="btn btn-success pull-right" name="button">Simpan</button>

                    </div>

            </div>

            <?php echo form_close(); ?>



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
<script src="<?php echo base_url('assets/js/parsley/parsley.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/parsley/parsley.extend.js');?>"></script>
<script src="<?php echo base_url('assets/js/app.plugin.js');?>"></script>


</body>
</html>
