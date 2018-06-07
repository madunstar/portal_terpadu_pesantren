<section class="vbox">
  <section class="hbox stretch">
    <div class="col-lg-2">
    </div>
    <aside class="col-lg-6">
      <section class="vbox">
        <div class="wrapper" style="margin-top:60px">
          <div class="container aside-xl bg-light" style="border-radius:10px">
            <section class="m-b-lg">
              <div class="text-center">
                <img src="<?php echo base_url('assets/images/logo.png'); ?>" alt="">
              </div>
              <a class="navbar-brand block" href="index.html">LOGIN PORTAL ORANGTUA PESANTREN DARUL ILMI</a>
              <?php pesan_get('msg',"Sukses","Akun Portal Orangtua Tidak Terdaftar! Silahkan Masuk ke Halaman Pendaftaran","ID dan Kata Sandi tidak cocok") ?>
              <?php pesan_get('msgid',"Sukses","Akun Portal Orangtua Tidak Aktif! Silahkan Hubungi Staff Administrasi","Error") ?>
              <form  action="<?php echo base_url()?>orangtua/login/ceklogin" method="post" data-validate="parsley">
                <div class="list-group">
                  <div class="list-group-item">
                    <input name="id_ortu" data-required="true" type="text" placeholder="ID Orangtua atau Wali" value="<?php echo set_value('id_ortu'); ?>" class="form-control no-border">
                  </div>
                  <div class="list-group-item">
                    <input name="kata_sandi" data-required="true" type="password" placeholder="Kata Sandi" value="<?php echo set_value('kata_sandi'); ?>" class="form-control no-border" id="pwd">
                  </div>
                </div>
                <button type="submit" class="btn btn-success btn-lg btn-block ">Masuk</button>
              </form>
              <small>Belum Punya Akun? Silahkan Hubungi Petugas Administrasi</small>
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
