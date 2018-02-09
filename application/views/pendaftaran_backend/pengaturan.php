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
            echo form_open('admin/Pendaftaran/edit_pengaturan',$att_form); ?>

            <div class="panel-body">
              <div class="form-group">
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
              <div class="line line-dashed b-b line-lg pull-in"></div>
                    <div class="form-group ">

                      <label class="col-sm-2 control-label" for="input-id-1">Tahun Ajaran</label>
                      <div class="col-sm-10">
                        <input data-required="true" type="text" class="form-control parsley-validated" name="tahun_ajaran" value="<?php echo $tb_pengaturan_pendaftaran['tahun_ajaran']?>">
                      </div>
                    </div>
                      <div class="line line-dashed b-b line-lg pull-in"></div>
                    <div class="form-group col-sm-12">

                      <button type="submit" data-loading-text="Menyimpan..." class="btn btn-success pull-right" name="button">Simpan</button>

                    </div>

            </div>

            <?php echo form_close(); ?>



                </section>

                <section class="panel">
                  <header class="panel-heading bg-dark">
                    <b>Pengaturan Akun Pendaftar</b>
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
