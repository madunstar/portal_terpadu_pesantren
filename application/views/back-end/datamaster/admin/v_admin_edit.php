<section id="content">
<section class="vbox">
  <section class="scrollable padder">
    <div class="m-b-md">
      <h3 class="m-b-none">Data Admin</h3>
    </div>
    <section class="panel panel-default">
      <header class="panel-heading">
        Edit Data Admin
      </header>
      <div class="panel-body">
      <?php pesan_get('msg',"Berhasil Mengedit Data Admin","Gagal Mengedit Data Admin") ?>
       <form class="bs-example form-horizontal" data-validate="parsley" action="" method="post">
       <a href="<?php echo base_url('admin/datamaster/admin') ?>" style="color:#3b994a;margin-left:10px"><i class="fa fa-chevron-left"></i> Kembali</a>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label class="col-lg-4 control-label">Staff Admin</label>
              <div class="col-lg-8">
                <input type="text" class="form-control" name="nama_lengkap" data-required="true" value="<?php echo $data['nama_lengkap']; ?>" readonly/>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Role Admin</label>
              <div class="col-lg-8">
                <input type="text" class="form-control" name="nama_role" data-required="true" value="<?php echo $data['nama_role']; ?>" readonly/>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Nama Akun</label>
              <div class="col-lg-8">
                <input type="text" class="form-control" name="nama_akun" data-required="true" value="<?php echo $data['nama_akun']; ?>" readonly/>
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
      <a href="<?php echo base_url() ?>admin/datamaster/adminedit?nama_akun=<?php echo $data['nama_akun']; ?>" class="btn btn-default btn-s-xs"><i class="fa fa-refresh"></i > Reset</a>
      &nbsp
      <a href="<?php echo base_url('admin/datamaster/admin') ?>" class="btn btn-default btn-s-xs"><i class="fa fa-list"></i> List Data Admin</a>
      </footer>
      </form>


      </div>
    </section>
  </section>
</section>

</section>
