<section id="content">
<section class="vbox">
  <section class="scrollable padder">
    <div class="m-b-md">
      <h3 class="m-b-none">Data Admin</h3>
    </div>
    <section class="panel panel-default">
      <header class="panel-heading">
        Tambah Data Admin
      </header>
      <div class="panel-body">
      <?php pesan_get('msg',"Berhasil Menambahkan Data Admin","Gagal Menambahkan Data Admin") ?>
       <form class="bs-example form-horizontal" data-validate="parsley" action="<?php echo base_url() ?>admin/datamaster/admintambah" method="post">
       <a href="<?php echo base_url('admin/datamaster/admin') ?>" style="color:#3b994a;margin-left:10px"><i class="fa fa-chevron-left"></i> Kembali</a>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label class="col-lg-4 control-label">Staff Admin</label>
              <div class="col-lg-8">
                <select class="form-control"  name="nip_staff_admin" id="nip_staff_admin" data-required="true">
                  <option value="" disabled <?php if (set_value('nip_staff_admin')=="") echo "selected" ?>>Pilih Staff Admin</option>
                  <?php
                    foreach($nip_staff_admin->result_array() as $row) {
                      echo "<option value='".$row['nip_staff']."' ".(set_value('nip_staff_admin')==$row['nip_staff']?"selected":"").">".$row['nip_staff'].' - '.$row['nama_lengkap']."</option>";
                    }
                  ?>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Role Admin</label>
              <div class="col-lg-8">
                <select class="form-control"  name="kode_role_admin" id="kode_role_admin" data-required="true">
                  <option value="" disabled <?php if (set_value('kode_role_admin')=="") echo "selected" ?>>Pilih Role Admin</option>
                  <?php
                    foreach($kode_role_admin->result_array() as $row) {
                      echo "<option value='".$row['kode_role']."' ".(set_value('kode_role_admin')==$row['kode_role']?"selected":"").">".$row['nama_role']."</option>";
                    }
                  ?>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Nama Akun</label>
              <div class="col-lg-8">
                <input type="text" class="form-control" name="nama_akun" data-required="true" value="<?php echo set_value('nama_akun'); ?>" />
                <?php if(isset($nama_akun)) {
                         echo '<label style="color:red;font-size:10px">Nama akun sudah ada !</label>';
                       }
                ?>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Kata Sandi</label>
              <div class="col-lg-8">
                <input type="password" class="form-control"  name="kata_sandi" data-required="true"  value="<?php echo set_value('kata_sandi'); ?>"/>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Konfirmasi Kata Sandi</label>
              <div class="col-lg-8">
                <input type="password" class="form-control"  name="rekata_sandi" data-required="true"  value="<?php echo set_value('rekata_sandi'); ?>"/>
                <?php if(isset($rekata_sandi)) {
                         echo '<label style="color:red;font-size:10px">Konfirmasi kata sandi tidak cocok !</label>';
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
        <a href="<?php echo base_url('admin/datamaster/admin') ?>" class="btn btn-default btn-s-xs"><i class="fa fa-list"></i> Daftar Data Admin</a>
      </footer>
      </form>


      </div>
    </section>
  </section>
</section>

</section>
