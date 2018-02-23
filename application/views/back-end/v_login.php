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
          <a class="navbar-brand block" href="index.html">LOGIN ADMIN PORTAL PESANTREN DARUL ILMI</a>
          <?php pesan_get('msg',"Sukses","Nama Akun tidak terdaftar","Nama Akun dan Kata Sandi tidak cocok") ?>
          <form  action="<?php echo base_url()?>admin/login/loginhalaman" method="post" data-validate="parsley">
            <div class="list-group">
              <div class="list-group-item">
                <input name="nama_akun" data-required="true" type="text" placeholder="Nama Akun" value="<?php echo set_value('nama_akun'); ?>" class="form-control no-border">
              </div>
              <div class="list-group-item">
               <input name="kata_sandi" data-required="true" type="password" placeholder="Kata Sandi" value="<?php echo set_value('kata_sandi'); ?>" class="form-control no-border" id="pwd">
             </div>
           </div>
          <button type="submit" class="btn btn-success btn-lg btn-block ">Masuk</button>
        </form>
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
