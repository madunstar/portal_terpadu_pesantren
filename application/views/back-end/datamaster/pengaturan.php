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
          <?php echo validation_errors(); ?>
          <section class="panel">
            <header class="panel-heading bg-dark">
              <b>Pengaturan dasar</b>
            </header>
            <?php $att_form = array('class'=>'form-horizontal','data-validate'=>'parsley','id'=>'pengaturan');
            echo form_open('admin/datamaster/edit_pengaturan',$att_form); ?>

            <div class="panel-body">
              <div class="line line-dashed b-b line-lg pull-in"></div>
                    <div class="form-group ">

                      <label class="col-sm-2 control-label" for="input-id-1">Tahun Ajaran</label>
                      <div class="col-sm-10">
                        <select class="form-control" name="tahun_ajaran">
                          <?php foreach ($datatahun->result_array() as $tahun) {?>
                            <option value= "<?php echo $tahun['id_tahun']?>" <?php if ($tahun['id_tahun']==$tb_pengaturan_pendaftaran['tahun_ajaran'])  echo "selected" ?>> <?php echo $tahun['tahun_ajaran']?> </option>
                        <?php  } ?>
                      </select>
                      </div>
                    </div>
                      <div class="line line-dashed b-b line-lg pull-in"></div>
                    <div class="form-group col-sm-12">

                      <button type="submit" data-loading-text="Menyimpan..." class="btn btn-success pull-right" name="button">Simpan</button>

                    </div>

            </div>

            <?php echo form_close(); ?>



                </section>


                  </div>




                      </section>
                </div>


      </div>

    </section>
  </section>
</section>
