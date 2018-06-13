<section id="content">
  <section class="vbox">

    <section class="scrollable padder">
      <div class="row m-b-md">
        <div class="col-sm-6">
          <h3 class="m-b-xs text-black">Ikhtisar Perizinan</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">

            <section class="panel panel-default">
              <header class="panel-heading">
                <h4 class="font-bold"><?php echo bulan($bulanini) ?> Dalam Angka</h4>
              </header>
              <div class="panel-body">
                <div class="col-md-4 col-sm-6">
                  <div class="panel b-a">
                    <div class="panel-heading no-border bg-primary  lt text-center">
                      <a href="#"><i class="fa fa-users fa-3x m-t m-b text-white"></i></a>
                      <div class=" h4 font-bold">Total Santri Izin</div>
                    </div>
                    <div class="padder-v text-center clearfix">

                      <div class="h5 font-bold"><?php echo $databulanini['total'] ?> Orang</div>

                  </div>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6">
                  <div class="panel b-a">
                    <div class="panel-heading no-border bg-success  lt text-center">
                      <a href="#"><i class="fa fa-money fa-3x m-t m-b text-white"></i></a>
                      <div class=" h4 font-bold">Total Denda</div>
                    </div>
                    <div class="padder-v text-center clearfix">

                      <div class="h5 font-bold">Rp. <?php echo $dendabulanini['total'] ?>,-</div>

                  </div>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6">
                  <div class="panel b-a">
                    <div class="panel-heading no-border bg-warning  lt text-center">
                      <a href="#"><i class="fa fa-money fa-3x m-t m-b text-white"></i></a>
                      <div class=" h4 font-bold">Denda Dibayar</div>
                    </div>
                    <div class="padder-v text-center clearfix">

                      <div class="h5 font-bold">Rp. <?php echo $bayarbulanini['total'] ?>,-</div>

                  </div>
                  </div>
                </div>

              </div>
                  </section>


          <section class="panel panel-default">
            <header class="panel-heading">
              <h4 class="font-bold">Data Perizinan Terakhir</h4>
            </header>
            <div class="panel-body">

              <div class="table-responsive">
                <table class="table table-striped m-b-none" id="datacontoh">
                  <thead>
                    <tr>
                      <th width="20%">Nama</th>
                      <th width="25%">Keperluan izin</th>
                      <th>tanggal izin</th>
                      <th>Penjemput</th>
                      <th>Status Izin</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    foreach($data->result_array() as $row){
                      echo "
                        <tr>
                          <td>".$row['nama_lengkap']."</td>
                          <td>".$row['keperluan']."</td>
                          <td>".$row['tanggal_keluar']."</td>
                          <td>".$row['nama_penjemput']."</td>
                          <td>".$row['status_keluar']."</td>
                          <td></td>
                        </tr>
                      ";
                    }
                    ?>
                  </tbody>
                </table>
              </div>

            </div>
            <div class="panel-footer text-right">
            <a href="<?php echo base_url() ?>admin/perizinansantri/datakeluar"><button class="btn btn-sm btn-info">Selengkapnya <span class="fa fa-arrow-circle-right"></span></button></a>
            </div>
          </div>
          <div class="col-sm-6">
            <section class="panel panel-default">
              <header class="panel-heading bg-light no-border">
                <div class="clearfix">
                  <a href="#" class="block padder-v hover"><span class="i-s i-s-2x pull-left m-r-sm"><i class="i i-hexagon2 i-s-base text-danger hover-rotate"></i><i class="fa fa-briefcase fa-briefcase i-sm text-white"></i></span><span class="clear">
                    <span class="h3 block m-t-xs text-danger">Total Santri Izin Keluar Pondok</span><small class="text-muted text-u-c">3 Tahun Terakhir</small></span></a>
                  </div>
                </header>
                <div class="list-group no-radius alt">
                  <a class="list-group-item accordion-toggle" data-toggle="collapse" href="#detil1">
                    <span class="badge bg-info"><?php echo $datatahunini['total'] ?></span>
                    <i class="fa fa-calendar icon-muted"></i>
                    <?php echo $tahunsekarang ?>
                  </a>
                  <div class="panel-body clearfix collapse" id='detil1'>
                    <div class="dropdown m-r">
                      <div class="well b bg-light m-t">
                        <div class="h5 font-bold">Detil</div>
                      <div class="line pull-in line-dashed b-b"></div>
                        <table class="table table-hover table-striped">
                          <tr>
                            <td>Stantri izin</td>
                            <td><?php echo $datatahunini['total'] ?></td>
                          </tr>
                          <tr>
                            <td>Total Denda</td>
                            <td>Rp. <?php echo $dendatahunini['total'] ?>,-</td>
                          </tr>
                          <tr>
                            <td>Denda Dibayar</td>
                            <td>Rp. <?php echo $bayartahunini['total'] ?>,-</td>
                          </tr>

                        </table>

                      </div>
                    </div>
                  </div>
                  <a class="list-group-item accordion-toggle" data-toggle="collapse" href="#detil2">
                    <span class="badge bg-info"><?php echo $datatahunlalu['total'] ?></span>
                    <i class="fa fa-calendar icon-muted"></i>
                    <?php echo $tahunlalu ?>
                  </a>
                  <div class="panel-body clearfix collapse" id='detil2'>
                    <div class="dropdown m-r">
                      <div class="well b bg-light m-t">
                        <div class="h5 font-bold">Detil</div>
                      <div class="line pull-in line-dashed b-b"></div>
                        <table class="table table-hover table-striped">
                          <tr>
                            <td>Stantri izin</td>
                            <td><?php echo $datatahunlalu['total'] ?></td>
                          </tr>
                          <tr>
                            <td>Total Denda</td>
                            <td>Rp. <?php echo $dendatahunlalu['total'] ?>,-</td>
                          </tr>
                          <tr>
                            <td>Denda Dibayar</td>
                            <td>Rp. <?php echo $bayartahunlalu['total'] ?>,-</td>
                          </tr>
                        </table>

                      </div>
                    </div>
                  </div>
                  <a class="list-group-item accordion-toggle" data-toggle="collapse" href="#detil3">
                    <span class="badge bg-info"><?php echo $datatahunbelakang['total'] ?></span>
                    <i class="fa fa-calendar icon-muted"></i>
                    <?php echo $tahunbelakang ?>
                  </a>
                  <div class="panel-body clearfix collapse" id='detil3'>
                    <div class="dropdown m-r">
                      <div class="well b bg-light m-t">
                        <div class="h5 font-bold">Detil</div>
                      <div class="line pull-in line-dashed b-b"></div>
                        <table class="table table-hover table-striped">
                          <tr>
                            <td>Stantri izin</td>
                            <td><?php echo $datatahunbelakang['total'] ?></td>
                          </tr>
                          <tr>
                            <td>Total Denda</td>
                            <td>Rp. <?php echo $dendatahunbelakang['total'] ?>,-</td>
                          </tr>
                          <tr>
                            <td>Denda Dibayar</td>
                            <td>Rp. <?php echo $bayartahunbelakang['total'] ?>,-</td>
                          </tr>
                        </table>

                      </div>
                    </div>
                  </div>


                </div>
                <div class="panel-footer text-right bg-muted">
                </div>
              </section>
            </div>
            <div class="col-sm-6">
              <section class="panel panel-default">
                <header class="panel-heading">
                  <h4 class="font-bold">Data Pembayaran Infaq Denda terakhir</h4>
                </header>
                <div class="panel-body">
                  <div class="table-responsive">
                    <table class="table table-striped m-b-none" id="datacontoh">
                      <thead>
                        <tr>
                          <th >tanggal Bayar</th>
                          <th width="30%">Nama</th>
                          <th >Besar Bayar</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        foreach($datadenda->result_array() as $row){
                          echo "
                            <tr>
                              <td>".$row['tanggal_bayar']."</td>
                              <td>".$row['nama_lengkap']."</td>

                              <td>".$row['besar_bayar']."</td>
                              <td></td>
                            </tr>
                          ";
                        }
                        ?>
                      </tbody>
                    </table>
                  </div>

                </div>
                <div class="panel-footer text-right">
                  <button class="btn btn-sm btn-info">Selengkapnya <span class="fa fa-arrow-circle-right"></span></button>
                </div>
              </div>
            </div>
          </section>
        </section>
      </section>
    </section>

  </section>
