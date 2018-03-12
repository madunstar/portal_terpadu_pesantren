<section id="content">
  <section class="vbox">

    <section class="scrollable padder">
      <div class="row m-b-md">
        <div class="col-sm-6">
          <h3 class="m-b-xs text-black">Data Denda Santri</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <section class="panel panel-default">
            <header class="panel-heading">
              <h4 class="font-bold">Data Pembayaran Denda</h4>
            </header>
            <div class="panel-body">
              <button type="button" name="button" class="btn btn-success btn-rounded"><i class="fa fa-plus"></i> Tambah Pembayaran Denda</button>
              <div class="table-responsive">
                <table class="table table-striped m-b-none" id="datatable">
                  <thead>
                    <tr>

                      <th >Tanggal Bayar</th>
                      <th >Besar Bayar</th>
                      <th>Petugas</th>

                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    foreach($data->result_array() as $row){
                      echo "
                        <tr>
                          <td>".$row['tanggal_bayar']."</td>

                          <td>".$row['besar_bayar']."</td>
                          <td>".$row['nama_akun']."</td>
                        
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
