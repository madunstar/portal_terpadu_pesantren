<section class="vbox">
  <img src="<?php echo base_url('assets/images/masjid.jpg'); ?>" style="opacity:0.5" alt="">
  <section class="hbox stretch">
    <aside class="col-sm-1 no-padder">

  </aside>
    <aside class="aside-lg no-padder">
      <section class="vbox">
      <div class="wrapper" style="margin-top:70px">

      </div>
    </div>

  </section>
  </aside>
  <aside class="col-lg-4">
    <section class="vbox">
    <div class="wrapper" style="margin-top:30px">
      <div class="container aside-xl bg-light" style="border-radius:10px">

        <section class="m-b-lg">
          <div class="text-center">
          <img src="<?php echo base_url('assets/images/logo.png'); ?>" alt="">
        </div>
          <a class="navbar-brand block" href="index.html">PESANTREN DARUL ILMI</a>
          <header class="wrapper text-center">
            <small>Daftarkan Email Anda Untuk Ketahap Selanjutnya</small>
          </header>
          <?php pesan_get('msg',"Berhasil Membuat Akun","Email Sudah Terdaftar") ?>
          <form  action="<?php echo base_url() ?>santri/pendaftaran/addakun" method="post" data-validate="parsley">
            <div class="list-group">
              <div class="list-group-item">
                <input name="email" data-required="true" type="email" placeholder="Email" value="<?php echo set_value('email_pendaftar'); ?>" class="form-control no-border">
              </div>
              <div class="list-group-item">
               <input name="sandi" data-required="true" type="password" placeholder="Kata Sandi" value="<?php echo set_value('kata_sandi'); ?>" class="form-control no-border" id="pwd">
             </div>
             <div class="list-group-item">
              <input name="resandi" data-required="true" type="password" placeholder="Tulis Ulang Kata Sandi" class="form-control no-border" data-equalto="#pwd">
            </div>
            <div class="list-group-item">
             <select data-required="true" name="tingkat" class="form-control no-border">
               <option value="a">option 1</option>
               <option value="b">option 2</option>
             </select>
           </div>
           </div>
           <input type="hidden" name="status_akun" value="tidak aktif">
           <input type="hidden" name="tahun_ajaran" value="<?php echo $tahun_ajaran; ?>">
           <input type="hidden" name="status_pendaftaran" value="tidak lengkap">
           <input type="hidden" name="tanggal_daftar" value="<?php echo date('Y-m-d'); ?>">
          <button type="submit" class="btn btn-success btn-block ">Daftar</button>
        </form>
        <small>Perlu Bantuan <a class="text-primary" href="#"> <strong>Hubungi Kami</strong></a></small>
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

</section>
</section>
