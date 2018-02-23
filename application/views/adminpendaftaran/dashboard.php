<section id="content">
  <section class="vbox">

    <section class="scrollable padder">
      <div class="row m-b-md">
        <div class="col-sm-6">
          <h3 class="m-b-xs text-black">Dashboard</h3>
        </div>
      </div>

      <div class="row">

        <div class="col-lg-12">

          <!-- .crousel fade -->
          <section class="panel bg-dark">
            <div class="carousel slide auto carousel-fade panel-body" id="c-fade">
              <ol class="carousel-indicators out">
                <li data-target="#c-fade" data-slide-to="0" class="active"></li>
                <li data-target="#c-fade" data-slide-to="1" class=""></li>
                <li data-target="#c-fade" data-slide-to="2" class=""></li>
              </ol>
              <div class="carousel-inner">
                <div class="item active">
                  <p class="text-center">
                    <em class="h4 text-mute">Selamat Datang di Aplikasi Pendaftaran Santri Baru</em><br>
                    <small class="text-muted">Pesantren Darul ilmi</small>
                  </p>
                </div>
                <div class="item ">
                  <p class="text-center">
                    <em class="h4 text-mute">Periksa Biodata dan Berkas</em><br>
                    <small class="text-muted">Sebelum Melakukan Verifikasi</small>
                  </p>
                </div>
                <div class="item">
                  <p class="text-center">
                    <em class="h4 text-mute">Periksa Bukti Pembayaran</em><br>
                    <small class="text-muted">Sebelum Melakukan Verifikasi</small>
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
        <div class="col-sm-12">
          <h5 class="m-b-xs text-black">Ikhstisar Pendaftaran</h5>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="panel b-a">
            <div class="panel-heading no-border bg-primary lt text-center">
              <a href="#"><i class="fa fa-group fa fa-3x m-t m-b text-white"></i></a>
            </div>
            <div class="padder-v text-center clearfix">
              <div class="col-xs-6 b-r">
                <div class="h4 font-bold">Total</div>
                <small class="text-muted">Pendaftar</small>
              </div>
              <div class="col-xs-6">
                <div class="h2 font-bold"><?php echo $total_pendaftaran['total']; ?></div>

              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="panel b-a">
            <div class="panel-heading no-border bg-success lt text-center">
              <a href="#"><i class="fa fa-check fa fa-3x m-t m-b text-white"></i></a>
            </div>
            <div class="padder-v text-center clearfix">
              <div class="col-xs-6 b-r">
                <div class="h4 font-bold">Total</div>
                <small class="text-muted">Diverivikasi</small>
              </div>
              <div class="col-xs-6">
                <div class="h2 font-bold"><?php echo $total_diverifikasi['total']; ?></div>

              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="panel b-a">
            <div class="panel-heading no-border bg-warning lt text-center">
              <a href="#"><i class="fa fa-spinner fa fa-3x m-t m-b text-white"></i></a>
            </div>
            <div class="padder-v text-center clearfix">
              <div class="col-xs-6 b-r">
                <div class="h4 font-bold">Total</div>
                <small class="text-muted">Menunggu</small>
              </div>
              <div class="col-xs-6">
                <div class="h2 font-bold"><?php echo $total_menunggu['total']; ?></div>

              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="panel b-a">
            <div class="panel-heading no-border bg-danger lt text-center">
              <a href="#"><i class="fa fa-warning fa fa-3x m-t m-b text-white"></i></a>
            </div>
            <div class="padder-v text-center clearfix">
              <div class="col-xs-6 b-r">
                <div class="h4 font-bold">Total</div>
                <small class="text-muted">Tidak Lengkap</small>
              </div>
              <div class="col-xs-6">
                <div class="h2 font-bold"><?php echo $total_tidak_lengkap['total']; ?></div>

              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <section class="panel panel-success">
            <header class="panel-heading">
              Rincian Pendaftaran Putra
            </header>
            <div class="panel-body">
              <div class="table-responsive">
                <table class="table table-hover" >
                  <tbody>
                    <tr>
                      <td>Semua</td>
                      <td><?php echo $putra_pendaftaran['total'];?></td>
                    </tr>
                    <tr>
                      <td>Diverifikasi</td>
                      <td><?php echo $putra_diverifikasi['total'];?></td>
                    </tr>
                    <tr>
                      <td>Menunggu</td>
                      <td><?php echo $putra_menunggu['total'];?></td>
                    </tr>
                    <tr>
                      <td>Tidak Lengkap</td>
                      <td><?php echo $putra_tidak_lengkap['total'];?></td>
                    </tr>

                  </tbody>
                </table>
              </div>

            </div>

          </div>
        <div class="col-sm-12">
          <h5 class="m-b-xs text-black">Ikhstisar Pembayaran</h5>
        </div>
        <div class="col-sm-6">
          <section class="panel panel-default">
            <header class="panel-heading">
              <h4 class="font-bold">Data Pembayaran Pendaftaran terakhir</h4>
            </header>
            <div class="panel-body">
              <div class="table-responsive">
                <table class="table  m-b-none" id="datacontoh">
                  <thead>
                    <tr>
                      <th >Nama</th>
                      <th >Tanggal Bayar</th>
                      <th>Status Pembayaran</th>

                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      foreach ($pembayaran_terakhir->result_array() as $row ) {
                        echo "
                          <tr>
                            <td>".$row['nama_lengkap']."</td>
                            <td>".$row['tanggal_pembayaran']."</td>
                            <td ".(($row['status_pembayaran'] == 'diverifikasi') ? 'class=text-success' : (($row['status_pembayaran'] == 'menunggu verifikasi') ? 'class=text-warning' : null)).">".$row['status_pembayaran']."</td>
                          </tr>
                        ";
                      }
                    ?>
                  </tbody>
                </table>
              </div>

            </div>
            <div class="panel-footer text-center">
              <div class="row pull-out">
                <div class="col-xs-6">
                  <div class="padder-v">
                    <span class="m-b-xs h4 block text-success font-bold">Rp.<?php echo $total_pembayaran['total'] ?>,-</span>
                    <small class="text-muted">Uang Pendaftaran Masuk</small>
                  </div>
                </div>
                <div class="col-xs-6">
                  <div class="padder-v text-right">
                    <a href="<?php echo base_url() ?>admin/pendaftaran/datapembayaran"><button class="btn btn-info btn-block">Selengkapnya <span class="fa fa-arrow-circle-right"></span></button></a>
                  </div>
                </div>
              </div>

            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="panel b-a">
              <div class="panel-heading no-border bg-success lt text-center">
                <a href="#"><i class="fa fa-check fa fa-3x m-t m-b text-white"></i></a>
              </div>
              <div class="padder-v text-center clearfix">
                <div class="col-xs-6 b-r">
                  <div class="h5 font-bold">Pembayaran</div>
                  <small class="text-muted">Diverifikasi</small>
                </div>
                <div class="col-xs-6">
                  <div class="h3 font-bold"><?php echo $pembayaran_diverifikasi['total']; ?></div>

                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="panel b-a">
              <div class="panel-heading no-border bg-warning lt text-center">
                <a href="#"><i class="fa fa-spinner fa fa-3x m-t m-b text-white"></i></a>
              </div>
              <div class="padder-v text-center clearfix">
                <div class="col-xs-6 b-r">
                  <div class="h5 font-bold">Pembayaran</div>
                  <small class="text-muted">Menunggu</small>
                </div>
                <div class="col-xs-6">
                  <div class="h3 font-bold"><?php echo $pembayaran_menunggu['total']; ?></div>

                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>
  </section>
</section>
</section>
