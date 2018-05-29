<section id="content">
  <section class="vbox bg-white">
    <header class="header b-b b-light hidden-print">
      <button href="#" class="btn btn-sm btn-info pull-right" onClick="window.print();">Print</button>
      <p>Surat Izin</p>
    </header>
    <section class="scrollable wrapper">
      <div class="row">
        <div class="col-xs-2 h3 font-bold text-center">
          <img src="<?php echo base_url('assets/images/logo.png'); ?>" alt="">
        </div>
        <div class="col-xs-8 text-center">
          <h4 class="font-bold">PESANTREN DARUL ILMI</h4>
          <small>
            JL. A. YANI KM. 19.2 KEL. LANDASAN ULIN BARAT, KEC. LIANGANGGANG
            <br>BANJARBARU - KALIMANTAN SELATAN 70722</br>
          </small>
        </div>
        <div class="col-xs-2 h3 font-bold text-center">
        </div>
      </div>
      <div class="line pull-in line-dashed b-b"></div>

      <div class="well b bg-light m-t">
        <div class="row">
          <div class="col-xs-12 text-center">
            <h5><strong>SURAT PERIZINAN KELUAR PONDOK PESANTREN</strong></h5>
          </div>
        </div>
          <div class="line pull-in line-dashed b-b"></div>
        <div class="row">

          <div class="col-xs-12">
            Yang Bertanda Tangan Dibawah ini<br><br>
          </div>
          <div class="col-xs-2">
            <p class="font-bold">
              Nama  <br><br>
              Kelas <br><br>
              No. Hp  <br><br>
            </p>
          </div>
          <div class="col-xs-7">
            <p>
              :  <?php echo $datasurat['nama_santri'];?><br><br>
              :  <?php echo $datasurat['sekolah'];?><br><br>
              :  <?php echo $datasurat['hp'];?><br><br>
            </p>
          </div>
          <div class="col-xs-12">
            Menyatakan izin keluar dari Pondok Pesantren dengan keterangan <br><br>
          </div>
          <div class="col-xs-2">
            <p class="font-bold">
              Tanggal Izin  <br><br>
              Keperluan <br><br>
              Penjemput  <br><br>
              Hubungan  <br><br>
            </p>
          </div>
          <div class="col-xs-7">
            <p>
              :  <?php echo $datasurat['tanggal_keluar'];?><br><br>
              :  <?php echo $datasurat['keperluan'];?><br><br>
              :  <?php echo $datasurat['nama_penjemput'];?><br><br>
              :  <?php echo $datasurat['hubungan'];?><br><br>
            </p>
          </div>
        </div>
      </div>
      <div class="col-xs-12">
        Demikian Surat perizinansantriwati ini dibuat agar dapat digunakan sebagaimana mestinya <br><br><br>
      </div>
      <div class="col-xs-1">
      </div>
      <div class="col-xs-6">
        <br>
        Santri <br><br>
        <br>
        <br>
        <br>
        <br>
        <?php echo $datasurat['nama_santri'];?><br><br>
      </div>
      <div class="col-xs-5">
        Banjarbaru, <?php echo $datasurat['tanggal_surat'];?><br>
        Petugas <br><br>
        <br>
        <br>
        <br>
        <br>
        <?php echo $datasurat['nama_petugas'];?><br><br>
      </div>



    </section>
  </section>
  <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>
</section>
