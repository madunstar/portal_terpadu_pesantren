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
              <h4 class="font-bold">Detil Data Infaq <?php echo $nama_santri ?></h4>
            </header>
            <div class="panel-body">
              <div class="table-responsive">
                <table class="table table-striped m-b-none" id="datatable">
                  <thead>
                    <tr>
                      <th>Tanggal Bayar</th>
                      <th>Petugas</th>
                      <th>Infaq Bulan</th>
                      <th>Infaq Tahun</th>
                      <th>Status Infaq</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($data->result_array() as $row){
                      echo "
                      <tr>
                        <td>".$row['tanggal_bayar']."</td>
                        <td>".$row['petugas']."</td>
                        <td>".bulan($row['spp_bulan'])."</td>
                        <td>".$row['spp_tahun']."</td>
                        <td>".$row['status_bayar']."</td>
                      </tr>
                      ";
                    }
                    ?>
                  </tbody>
                </table>
              </div>

            </div>
            <div class="panel-footer text-right bg-light lter">
              <a href="<?php echo base_url('admin/datamaster/databayarinfaq') ?>"><button type="button" name="button" class="btn btn-default">Kembali</button></a>
          </div>

          </section>
          </div>
        </div>
        </section>
      </section>
    </section>

  </section>
