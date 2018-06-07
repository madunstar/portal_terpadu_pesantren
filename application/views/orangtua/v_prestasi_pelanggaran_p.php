<section id="content">
  <section class="vbox">

    <section class="scrollable padder">
      <div class="row m-b-md">
        <div class="col-sm-6">
          <h3 class="m-b-xs text-black">Prestasi dan Pelanggaran</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <section class="panel panel-default">

            <header class="panel-heading">
              <h4 class="font-bold">Data Prestasi <?php echo $santriwati['nama_lengkap']?> / <?php echo $santriwati['nis_lokal']?></h4>
            </header>
            <div class="panel-body">
              <div class="table-responsive">
                <table class="table table-striped m-b-none" id="datatable">
                  <thead>
                    <tr>
                      <th >Prestasi</th>
                      <th >Tanggal Diperoleh</th>
                      <th >Jenis Prestasi</th>
                      <th>Keterangan</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                        foreach($dataprestasi->result_array() as $row){
                          echo "
                            <tr>

                              <td>".$row['prestasi']."</td>
                              <td>".$row['tanggal_prestasi']."</td>
                              <td>".$row['jenis_prestasi']."</td>
                              <td>".$row['keterangan']."</td>
                            </tr>

                          ";
                        }
                    ?>
                  </tbody>
                </table>
              </div>


              </div>
            </section>

            <section class="panel panel-default">

              <header class="panel-heading">
                <h4 class="font-bold">Data Pelanggaran <?php echo $santriwati['nama_lengkap']?> / <?php echo $santriwati['nis_lokal']?></h4>
              </header>
              <div class="panel-body">


                <div class="table-responsive">
                  <table class="table table-striped m-b-none" id="datatable2">
                    <thead>
                      <tr>

                        <th >Pelanggaran</th>
                        <th >Tanggal Diperoleh</th>
                        <th >Jenis Pelanggaran</th>
                        <th>Keterangan</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                          foreach($datapelanggaran->result_array() as $rowp){
                            echo "
                              <tr>

                              <td>".$rowp['pelanggaran']."</td>
                              <td>".$rowp['tanggal_pelanggaran']."</td>
                              <td>".$rowp['jenis_pelanggaran']."</td>
                              <td>".$rowp['keterangan']."</td>
                              </tr>

                            ";
                          }
                      ?>
                    </tbody>
                  </table>
                </div>
                </div>
              </section>


        </div>
          </div>


        </section>

      </section>
    </section>

  </section>
