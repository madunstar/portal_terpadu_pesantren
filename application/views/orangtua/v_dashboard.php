<section id="content">
  <section class="vbox">

    <section class="scrollable padder">
      <div class="row m-b-md">
        <div class="col-sm-6">
          <h3 class="m-b-xs text-black">Dashboard</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <section class="panel bg-dark">
            <div class="carousel slide auto carousel-fade panel-body" id="c-fade">
              <ol class="carousel-indicators out">
                <li data-target="#c-fade" data-slide-to="0" class="active"></li>
                <li data-target="#c-fade" data-slide-to="1" class=""></li>

              </ol>
              <div class="carousel-inner">
                <div class="item active">
                  <p class="text-center">
                    <em class="h4 text-mute">Selamat Datang di Portal Terpadu</em><br>
                    <small class="text-muted">Pesantren Darul ilmi</small>
                  </p>
                </div>
                <div class="item ">
                  <p class="text-center">
                    <em class="h4 text-mute">Apabila Terdapat Kesalahan</em><br>
                    <small class="text-muted">Silahkan Hubungi Kontak Pesantren Darul Ilmi</small>
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
          </div>
          <div class="col-sm-9">
            <section class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">Informasi Terbaru</4>
              </div>
              <section class="panel-body slim-scroll">
                <?php foreach ($datainfo->result_array() as $rowinfo) {?>
                <article class="media">
                  <div class="media-body">
                    <div class='pull-right'><small><?php echo $rowinfo['tanggal_pengumuman']?></small> </div>
                    <div class="h4 font-bold text-primary"><?php echo $rowinfo['judul_pengumuman'] ?></div>
                    <div class='line line-dashed b-b line-lg pull-in'></div>
                    <div><small><?php echo $rowinfo['isi_pengumuman'] ?></small></div>
                    <div class="line pull-in"></div>
                    <div class='line b-b line-dashed line-lg pull-in'></div>
                  </div>
                </article>

                <div class="line pull-in"></div>

              <?php } ?>
              </section>
              <div class="panel-footer">
                <button type="button" class="btn btn-sm btn-info">
                  Selengkapnya
                </button>
              </div>
            </section>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="panel b-a">
              <div class="panel-heading no-border <?php echo (($dataspp['status_bayar'] == 'lunas') ? 'bg-primary' : 'bg-danger')  ?>  lt text-center">
                <a href="#"><i class="fa <?php echo (($dataspp['status_bayar'] == 'lunas') ? 'fa-check' : 'fa-ban')  ?> fa-3x m-t m-b text-white"></i></a>
                <div class=" h4 font-bold">Pembayaran Infaq</div>
                <div class="small">Bulan <?php echo bulan(date('m')); ?> <?php echo date('Y') ?></div>
              </div>
              <div class="padder-v text-center clearfix">

                <div class="h5 font-bold"><?php echo (($dataspp['status_bayar'] == 'lunas') ? 'LUNAS' : 'BELUM BAYAR')  ?></div>

            </div>
            </div>
          </div>
          <div class="col-sm-12">
            <section class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">Status perizinan Terakhir</h3>
              </div>
              <div class="panel-body">
                <table class="table table-bordered">
                  <thead>
                    <th>Tanggal Izin</th>
                    <th>Keperluan</th>
                    <th>Penjemput</th>
                    <th>Status izin</th>
                  </thead>
                  <tbody>
                    <?php
                        foreach($dataizin->result_array() as $rowizin){
                          echo "
                            <tr>

                              <td>".$rowizin['tanggal_keluar']."</td>
                              <td>".$rowizin['keperluan']."</td>
                              <td>".$rowizin['nama_penjemput']."</td>
                              <td>".$rowizin['status_keluar']."</td>
                            </tr>

                          ";
                        }
                    ?>

                  </tbody>
                </table>
              </div>
              <div class="panel-footer">
                <button type="button" class="btn btn-sm btn-info">
                  Selengkapnya
                </button>
              </div>


            </section>
            </div>
            <div class="col-sm-6">


      </section>
    </section>

  </section>
