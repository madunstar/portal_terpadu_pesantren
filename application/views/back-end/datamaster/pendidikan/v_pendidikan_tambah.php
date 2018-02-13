<section id="content">
<section class="vbox">
  <section class="scrollable padder">
    <div class="m-b-md">
      <h3 class="m-b-none">Data Pendidikan</h3>
    </div>
    <section class="panel panel-default">
      <header class="panel-heading">
        Input Data Pendidikan
      </header>
      <div class="panel-body">
      <?php pesan_get('msg',"Berhasil Menambahkan Data Pendidikan","Gagal Menambahkan Data Pendidikan") ?>
       <form class="bs-example form-horizontal" data-validate="parsley" action="<?php echo base_url() ?>admin/datamaster/pendidikantambah" method="post">
       <a href="<?php echo base_url('admin/datamaster/pendidikan') ?>" style="color:#3b994a;margin-left:10px"><i class="fa fa-chevron-left"></i> Kembali</a>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label class="col-lg-4 control-label">ID Pendidikan</label>
              <div class="col-lg-8">
                <input type="text" class="form-control" name="id_pendidikan" data-required="true" value="<?php echo set_value('id_pendidikan'); ?>" />
                <?php if(isset($id_pendidikan)) {
                         echo '<label style="color:red;font-size:10px">Id Pendidikan sudah ada !</label>';
                       }
                ?>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Nama Pendidikan</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="nama_pendidikan" data-required="true"  value="<?php echo set_value('nama_pendidikan'); ?>"/>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="panel-footer text-right bg-light lter">
        <button type="submit" class="btn btn-success btn-s-xs"><i class="fa fa-save"></i> Simpan</button>
        &nbsp
        <a href="<?php echo base_url('admin/datamaster/pendidikan') ?>" class="btn btn-default btn-s-xs"><i class="fa fa-list"></i> List Data Pendidikan</a>
      </footer>
      </form>


      </div>
    </section>
  </section>
</section>

</section>
