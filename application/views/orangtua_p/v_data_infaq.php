<section id="content">
  <section class="vbox">

    <section class="scrollable padder">
      <div class="row m-b-md">
        <div class="col-sm-6">
          <h3 class="m-b-xs text-black">Infaq Bulanan</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <section class="panel panel-default">
            <header class="panel-heading">
              <h4 class="font-bold">Data Infaq  Santri</h4>
            </header>
            <div class="panel-body">


              <div class="table-responsive">
                <table class="table table-striped " id="datatable">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>SPP Bulan</th>
                      <th>SPP Tahun</th>
                      <th>Tanggal Bayar</th>
                      <th>Status Bayar</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      $i =0;
                    foreach($data->result_array() as $row){
                      $i++;
                      echo "
                      <tr>
                        <td>".$i."</td>
                        <td>".bulan($row['spp_bulan'])."</td>
                        <td>".$row['spp_tahun']."</td>
                        <td>".$row['tanggal_bayar']."</td>
                        <td>".$row['status_bayar']."</td>
                      </tr>
                      ";
                    }
                    ?>
                  </tbody>
                </table>
              </div>

            </div>


          </div>
            </div>
          </section>
        </section>
      </section>
    </section>

  </section>
