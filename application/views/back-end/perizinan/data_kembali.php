<section id="content">
  <section class="vbox">

    <section class="scrollable padder">
      <div class="row m-b-md">
        <div class="col-sm-6">
          <h3 class="m-b-xs text-black">Kembali ke Pondok</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <section class="panel panel-default">
            <header class="panel-heading">
              <h4 class="font-bold">Data Santri Kembali ke Pondok</h4>
            </header>
            <div class="panel-body">
              <a href="<?php echo base_url() ?>admin/perizinan/kembali"><button type="button" name="button" class="btn btn-success btn-rounded"><i class="fa fa-plus"></i> Tambah Kembali ke Pondok</button></a>
              <div class="table-responsive">
                <table class="table table-striped m-b-none" id="datatable">
                  <thead>
                    <tr>
                      <th >Nama</th>
                      <th >Kelas</th>
                      <th >Tanggal Kembali</th>
                      <th>Status Denda</th>

                    </tr>
                  </thead>
                  <tbody>
                      <?php
                      foreach($santrikembali->result_array() as $row){
                        if ($row['status_denda'] == 1)
                        {$status_denda = "bayar denda";}
                        elseif ($row['status_denda'] == 0)
                        {$status_denda = "tidak bayar denda";}
                        echo "
                          <tr>
                            <td>".$row['nama_lengkap']."</td>
                            <td></td>
                            <td>".$row['tanggal_kembali']."</td>
                            <td>".$status_denda."</td>
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
