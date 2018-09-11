<section id="content">
  <section class="vbox">

    <section class="scrollable padder">
      <div class="row m-b-md">
        <div class="col-sm-6">
          <h3 class="m-b-xs text-black">Beranda</h3>
        </div>
      </div>
      <div class="col-lg-12">
        <?php echo $this->session->flashdata('response'); ?>
        <!-- .crousel fade -->
        <section class="panel bg-primary">
          <div class="carousel slide auto carousel-fade panel-body" id="c-fade">
            <ol class="carousel-indicators out">
              <li data-target="#c-fade" data-slide-to="0" class="active"></li>
              <li data-target="#c-fade" data-slide-to="1" class=""></li>
              <li data-target="#c-fade" data-slide-to="2" class=""></li>
              <li data-target="#c-fade" data-slide-to="3" class=""></li>
              <li data-target="#c-fade" data-slide-to="4" class=""></li>
            </ol>
            <div class="carousel-inner">
              <div class="item active">
                <p class="text-center">
                  <em class="h4 text-mute">Selamat Datang di Portal Pendaftaran Santri Baru</em><br>
                  <small class="text-muted">Pesantren Darul ilmi</small>
                </p>
              </div>
              <div class="item">
                <p class="text-center">
                  <em class="h4 text-mute">Isi dengan Lengkap dan Periksa Biodata dengan Seksama</em><br>
                  <small class="text-muted">Sebelum Mengirimkan Biodata</small>
                </p>
              </div>
              <div class="item">
                <p class="text-center">
                  <em class="h4 text-mute">Pastikan Berkas Terlihat Jelas dan Tidak Kabur</em><br>
                  <small class="text-muted">Sebelum Melakukan Upload Berkas</small>
                </p>
              </div>
              <div class="item">
                <p class="text-center">
                  <em class="h4 text-mute">Pastikan Bukti Pembayaran Jelas Terlihat</em><br>
                  <small class="text-muted">Sebelum Melakukan Upload Bukti Pembayaran</small>
                </p>
              </div>
              <div class="item">
                <p class="text-center">
                  <em class="h4 text-mute">Periksa Bagian Informasi</em><br>
                  <small class="text-muted">Untuk Keterangan Lebih Lanjut dan Bantuan</small>
                </p>
              </div>
            </div>
            <a class="left carousel-control" href="#c-fade" data-slide="prev">
              <i class="fa fa-angle-left"></i>
            </a>
            <a class="right carousel-control" href="#c-fade" data-slide="next">
              <i class="fa fa-angle-right"></i>
            </a>
          </div>
        </section>
        <!-- / .carousel fade -->
      </div>
      <div class="row">
        <div class="col-sm-12">
          <section class="panel panel-default">
            <header class="panel-heading">
              <div class="font-bold h4">Status Pendaftaran</div>
            </header>
            <div class="panel-body">
              <div class="col-md-3 col-sm-6">
                <div class="panel b-a">
                  <div class="panel-heading no-border
                  <?php if ($statussantri['status_biodata'] == "tidak lengkap" || $statussantri['status_biodata'] == "Tidak Lengkap")
                        {echo "bg-danger";}
                        elseif ($statussantri['status_biodata'] == "menunggu verifikasi" || $statussantri['status_biodata'] == "Menunggu Verifikasi")
                        {echo "bg-warning";}
                        elseif ($statussantri['status_biodata'] == "diverifikasi" || $statussantri['status_biodata'] == "Diverifikasi")
                        {echo "bg-success";} ?> lt text-center">
                    <a href="#"><i class="fa fa-user fa fa-3x m-t m-b text-white"></i></a>
                    <div class=" h4 font-bold"> Status Biodata</div>
                  </div>
                  <div class="padder-v text-center clearfix">
                    <div class="font-bold h4"><button class="btn
                      <?php if ($statussantri['status_biodata'] == "tidak lengkap" || $statussantri['status_biodata'] == "Tidak Lengkap")
                            {echo "btn-danger";}
                            elseif ($statussantri['status_biodata'] == "menunggu verifikasi" || $statussantri['status_biodata'] == "Menunggu Verifikasi")
                            {echo "btn-warning";}
                            elseif ($statussantri['status_biodata'] == "diverifikasi" || $statussantri['status_biodata'] == "Diverifikasi")
                            {echo "btn-success";} ?> font-bold disabled">

                      <?php echo $statussantri['status_biodata']?></button></div>
                  </div>
                </div>

              <div class="col-md-3 col-sm-6">
                <div class="panel b-a">
                  <div class="panel-heading no-border
                  <?php if ($statussantri['status_berkas'] == "tidak lengkap" || $statussantri['status_berkas'] == "Tidak Lengkap")
                        {echo "bg-danger";}
                        elseif ($statussantri['status_berkas'] == "menunggu verifikasi" || $statussantri['status_berkas'] == "Menunggu Verifikasi")
                        {echo "bg-warning";}
                        elseif ($statussantri['status_berkas'] == "diverifikasi" || $statussantri['status_berkas'] == "Diverifikasi")
                        {echo "bg-success";} ?> lt text-center">
                    <a href="#"><i class="fa fa-folder-open fa fa-3x m-t m-b text-white"></i></a>
                    <div class=" h4 font-bold"> Status Berkas</div>
                  </div>
                  <div class="padder-v text-center clearfix">
                    <div class="font-bold h4"><button class="btn
                      <?php if ($statussantri['status_berkas'] == "tidak lengkap" || $statussantri['status_berkas'] == "Tidak Lengkap")
                            {echo "btn-danger";}
                            elseif ($statussantri['status_berkas'] == "menunggu verifikasi" || $statussantri['status_berkas'] == "Menunggu Verifikasi")
                            {echo "btn-warning";}
                            elseif ($statussantri['status_berkas'] == "diverifikasi" || $statussantri['status_berkas'] == "Diverifikasi")
                            {echo "btn-success";} ?> font-bold disabled">
                            <?php echo $statussantri['status_berkas']?></button></div>
                  </div>
                </div>

              <div class="col-md-3 col-sm-6">
                <div class="panel b-a">
                  <div class="panel-heading no-border
                  <?php if ($statussantri['status_pembayaran'] == "tidak lengkap" || $statussantri['status_pembayaran'] == "Tidak Lengkap")
                          {echo "bg-danger";}
                          elseif ($statussantri['status_pembayaran'] == "menunggu verifikasi" || $statussantri['status_pembayaran'] == "Menunggu Verifikasi")
                          {echo "bg-warning";}
                          elseif ($statussantri['status_pembayaran'] == "diverifikasi" || $statussantri['status_pembayaran'] == "Diverifikasi")
                          {echo "bg-success";} ?> lt text-center">
                    <a href="#"><i class="fa fa-money fa fa-3x m-t m-b text-white"></i></a>
                    <div class=" h4 font-bold">Status Pembayaran</div>
                  </div>
                  <div class="padder-v text-center clearfix">
                    <div class=""><button class="btn
                      <?php if ($statussantri['status_pembayaran'] == "tidak lengkap" || $statussantri['status_pembayaran'] == "Tidak Lengkap")
                            {echo "btn-danger";}
                            elseif ($statussantri['status_pembayaran'] == "menunggu verifikasi" || $statussantri['status_pembayaran'] == "Menunggu Verifikasi")
                            {echo "btn-warning";}
                            elseif ($statussantri['status_pembayaran'] == "diverifikasi" || $statussantri['status_pembayaran'] == "Diverifikasi")
                            {echo "btn-success";} ?> font-bold disabled"><?php echo $statussantri['status_pembayaran']?></button></div>
                  </div>
                </div>

              <div class="col-md-3 col-sm-6">
                <div class="panel b-a">
                  <div class="panel-heading no-border <?php echo $datastatusbg;?> lt text-center">
                    <a href="#"><i class="fa <?php echo $datastatusicon; ?> fa fa-3x m-t m-b text-white"></i></a>
                    <div class=" h4 font-bold">Cetak Kartu</div>
                  </div>
                  <div class="padder-v text-center clearfix">
                    <div class=""><?php echo $datastatusbtn; ?></div>
                  </div>
                </div>
              </div>



          </div>
          <div class="col-sm-6">
            </div>
            <div class="col-sm-6">

            </div>
          </section>
        </section>
      </section>
    </section>

  </section>
