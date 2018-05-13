<section id="content">
<section class="vbox">
  <section class="scrollable padder">
    <div class="m-b-md">
      <h3 class="m-b-none">Ubah Kata Sandi</h3>
    </div>
    <section class="panel panel-default">
      <header class="panel-heading">
        Ubah Kata Sandi
      </header>
      <div class="panel-body">
      <?php pesan_get('msg',"Berhasil Mengubah Kata Sandi","Gagal Mengubah Kata Sandi") ?>
       <form class="bs-example form-horizontal" data-validate="parsley" action="" method="post">
       <a href="<?php echo base_url('orangtua/portal_ortu/dashboard') ?>" style="color:#3b994a;margin-left:10px"><i class="fa fa-chevron-left"></i> Kembali</a>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label class="col-lg-4 control-label">Nomor Induk Santri</label>
              <div class="col-lg-8">
                <input type="text" class="form-control" name="nis_lokal" data-required="true" value="<?php echo $data['nis_lokal']; ?>" readonly/>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Nama Orangtua</label>
              <div class="col-lg-8">
                <input type="text" class="form-control" name="nama_ortu" data-required="true" value="<?php echo $data['nama_ortu']; ?>" readonly/>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Kata Sandi Lama</label>
              <div class="col-lg-8">
                <input type="password" class="form-control"  name="kata_sandi" data-required="true"  value="<?php echo set_value('kata_sandi'); ?>" />
                <?php if(isset($kata_sandi)) {
                         echo '<label style="color:red;font-size:10px">Kata sandi lama tidak cocok !</label>';
                       }
                ?>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Kata Sandi Baru</label>
              <div class="col-lg-8">
                <input type="password" class="form-control"  name="kata_sandibr" data-required="true"  value="<?php echo set_value('kata_sandibr'); ?>" />
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Konfirmasi Kata Sandi Baru</label>
              <div class="col-lg-8">
                <input type="password" class="form-control"  name="rekata_sandibr" data-required="true"  value="<?php echo set_value('rekata_sandibr'); ?>"/>
                <?php if(isset($rekata_sandibr)) {
                         echo '<label style="color:red;font-size:10px">Konfirmasi kata sandi baru tidak cocok !</label>';
                       }
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="panel-footer text-right bg-light lter">
      <button type="submit" class="btn btn-success btn-s-xs"><i class="fa fa-save"></i> Simpan</button>
      &nbsp
      <a href="<?php echo base_url() ?>orangtua/portal_ortu/ubahsandi?nis=<?php echo $data['nis_lokal']; ?>" class="btn btn-default btn-s-xs"><i class="fa fa-refresh"></i > Reset</a>
      </footer>
      </form>


      </div>
    </section>
  </section>
</section>

</section>
