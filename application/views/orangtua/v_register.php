<section class="vbox" >
  <section class="hbox stretch">
    <div class="col-lg-6">
    </div>
    <aside class="col-lg-6">
      <section class="vbox">
        <div class="wrapper">
          <div class="container aside-xl bg-light" style="border-radius:10px">
            <section class="m-b-lg">
              <div class="text-center">
                <img src="<?php echo base_url('assets/images/logo.png'); ?>" alt="">
              </div>
              <a class="navbar-brand block" href="index.html">PESANTREN DARUL ILMI</a>
              <header class="wrapper text-center">
                <small>Daftarkan Akun untuk Masuk Portal Orangtua</small>
              </header>
              <?php pesan_get('msg',"Berhasil Membuat Akun","NIS Tidak Ditemukan!") ?>
              <form  action="<?php echo base_url() ?>orangtua/register/addakun" method="post" data-validate="parsley">
                <div class="list-group">
                  <div class="list-group-item">
                    <input name="nis_lokal" data-required="true" type="text" placeholder="Nomor Induk Santri" value="<?php echo set_value('nis_lokal'); ?>" class="form-control no-border">
                  </div>
                  <div class="list-group-item">
                    <input name="nama_ortu" data-required="true" type="text" placeholder="Nama Orang Tua atau Wali" value="<?php echo set_value('nama_ortu'); ?>" class="form-control no-border">
                  </div>
                  <div class="list-group-item">
                    <input name="kata_sandi" data-required="true" type="password" placeholder="Kata Sandi" value="<?php echo set_value('kata_sandi'); ?>" class="form-control no-border" id="pwd">
                  </div>
                  <div class="list-group-item">
                    <input name="rekata_sandi" data-required="true" type="password" placeholder="Tulis Ulang Kata Sandi" class="form-control no-border" data-equalto="#pwd">
                  </div>
                </div>
                <button type="submit" class="btn btn-success btn-block ">Daftar</button>
              </form>
              <small>Sudah Punya Akun?<a class="text-primary" href="<?php echo base_url('orangtua/login') ?>"> <strong>Halaman Login</strong></a></small>
              <div class="line line-dashed"></div>
              <footer id="footer">
                <p class="text-center text-muted"><small>&copy;2018</small></p>
              </footer>
            </section>
          </div>
        </div>
      </section>
    </aside>
  </section>
</section>
