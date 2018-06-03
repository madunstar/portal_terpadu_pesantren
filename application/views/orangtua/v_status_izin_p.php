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
              <h4 class="font-bold">Data Perizinan <?php echo $santriwati['nama_lengkap']?> / <?php echo $santriwati['nis_lokal']?></h4>
            </header>
            <div class="panel-body">
              <div class="table-responsive">
                <table class="table table-striped m-b-none" id="datatable">
                  <thead>
                    <tr>

                      <th >Tanggal Izin Keluar</th>
                      <th >Keperluan</th>
                      <th >Penjemput</th>
                      <th>Status Keluar</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                        foreach($dataizin->result_array() as $row){
                          echo "
                            <tr>

                              <td>".$row['tanggal_keluar']."</td>
                              <td>".$row['keperluan']."</td>
                              <td>".$row['nama_penjemput']."</td>
                              <td>".$row['status_keluar']."</td>
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
                <h4 class="font-bold">Data Denda <?php echo $santriwati['nama_lengkap']?> / <?php echo $santriwati['nis_lokal']?></h4>
              </header>
              <div class="panel-body">


                <div class="table-responsive">
                  <table class="table table-striped m-b-none" id="datatable2">
                    <thead>
                      <tr>

                        <th >Tanggal Kembali</th>
                        <th >Besar Denda</th>
                        <th >Status Pembayaran</th>

                      </tr>
                    </thead>
                    <tbody>
                      <?php
                          foreach($datadenda->result_array() as $rowp){
                            echo "
                              <tr>

                              <td>".$rowp['tanggal_kembali']."</td>
                              <td>".$rowp['besar_denda']."</td>
                              <td>".$rowp['status_pembayaran']."</td>

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
