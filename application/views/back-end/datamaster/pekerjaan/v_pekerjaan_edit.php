<section id="content">
<section class="vbox">
  <section class="scrollable padder">
    <div class="m-b-md">
      <h3 class="m-b-none">Data Pekerjaan</h3>
    </div>
    <section class="panel panel-default">
      <header class="panel-heading">
        Edit Data Pekerjaan
      </header>
      <div class="panel-body">
      <?php pesan_get('msg',"Berhasil Mengedit Data Pekerjaan","Gagal Mengedit Data Pekerjaan") ?>
       <form class="bs-example form-horizontal" data-validate="parsley" action="<?php echo base_url() ?>admin/datamaster/pekerjaanedit?id_pekerjaan=<?php if (isset($id_pekerjaanlama)) echo $id_pekerjaanlama; else echo $data['id_pekerjaan']; ?>" method="post">
       <a href="<?php echo base_url('admin/datamaster/pekerjaan') ?>" style="color:#3b994a;margin-left:10px"><i class="fa fa-chevron-left"></i> Kembali</a>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label class="col-lg-4 control-label">ID Pekerjaan</label>
              <div class="col-lg-8">
                <input type="text" class="form-control" name="id_pekerjaan" data-required="true" value="<?php echo $data['id_pekerjaan']; ?>" />
                <input type="hidden" class="form-control" name="id_pekerjaanlama" data-required="true" value="<?php
                if (isset($id_pekerjaanlama)) echo $id_pekerjaanlama; else echo $data['id_pekerjaan']; ?>" />
                <?php if(isset($id_pekerjaan)) {
                         echo '<label style="color:red;font-size:10px">ID Pekerjaan ada yang sama ! ID Pekerjaan asal "'.$id_pekerjaanlama.'"</label>';
                       }
                ?>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Nama Pekerjaan</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="nama_pekerjaan" data-required="true"  value="<?php echo $data['nama_pekerjaan']; ?>" />
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="panel-footer text-right bg-light lter">
      <button type="submit" class="btn btn-success btn-s-xs"><i class="fa fa-save"></i> Simpan</button>
      &nbsp
      <a href="<?php echo base_url() ?>admin/datamaster/pekerjaanedit?id_pekerjaan=<?php if (isset($id_pekerjaanlama)) echo $id_pekerjaanlama;
       else echo $data['id_pekerjaan']; ?>" class="btn btn-default btn-s-xs"><i class="fa fa-refresh"></i > Reset</a>
      &nbsp
      <a href="<?php echo base_url('admin/datamaster/pekerjaan') ?>" class="btn btn-default btn-s-xs"><i class="fa fa-list"></i> List Data Pekerjaan</a>
      </footer>
      </form>


      </div>
    </section>
  </section>
</section>

</section>
