<section id="content">
<section class="vbox">
  <section class="scrollable padder">
    <div class="m-b-md">
      <h3 class="m-b-none">Data Pekerjaan</h3>
    </div>
    <section class="panel panel-default">
      <header class="panel-heading">
        Tambah Data Pekerjaan
      </header>
      <div class="panel-body">
      <?php pesan_get('msg',"Berhasil Menambahkan Data Pekerjaan","Gagal Menambahkan Data Pekerjaan") ?>
       <form class="bs-example form-horizontal" data-validate="parsley" action="<?php echo base_url() ?>admin/datamaster/pekerjaantambah" method="post">
       <a href="<?php echo base_url('admin/datamaster/pekerjaan') ?>" style="color:#3b994a;margin-left:10px"><i class="fa fa-chevron-left"></i> Kembali</a>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label class="col-lg-4 control-label">ID Pekerjaan</label>
              <div class="col-lg-8">
                <input type="text" class="form-control" name="id_pekerjaan" data-required="true" value="<?php echo set_value('id_pekerjaan'); ?>" />
                <?php if(isset($id_pekerjaan)) {
                         echo '<label style="color:red;font-size:10px">Id Pekerjaan sudah ada !</label>';
                       }
                ?>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Nama Pekerjaan</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="nama_pekerjaan" data-required="true"  value="<?php echo set_value('nama_pekerjaan'); ?>"/>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="panel-footer text-right bg-light lter">
        <button type="submit" class="btn btn-success btn-s-xs"><i class="fa fa-save"></i> Simpan</button>
        &nbsp
        <a href="<?php echo base_url('admin/datamaster/pekerjaan') ?>" class="btn btn-default btn-s-xs"><i class="fa fa-list"></i> Daftar Data Pekerjaan</a>
      </footer>
      </form>


      </div>
    </section>
  </section>
</section>

</section>
