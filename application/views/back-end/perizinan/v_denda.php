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
              <h4 class="font-bold">Data Denda Keterlambatan</h4>
            </header>
            <div class="panel-body">
              <div class="table-responsive">
                <table class="table table-striped m-b-none" id="datatable">
                  <thead>
                    <tr>
                      <th >Nama</th>
                      <th >Kelas</th>
                      <th >Besar Denda</th>
                      <th>Keterangan</th>
                      <th>Tanggal Kembali</th>
                      <th>Riwayat Pembayaran</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    foreach($data->result_array() as $row){
                      echo "
                        <tr>
                          <td>".$row['nama_lengkap']."</td>
                          <td></td>
                          <td>".$row['besar_denda']."</td>
                          <td>".$row['status_pembayaran']."</td>
                          <td>".$row['tanggal_kembali']."</td>
                          <td><a href='".base_url('admin/perizinan/riwayatbayardenda?nis='.$row['nis_lokal'].'&denda='.$row['id_denda'].'')."'><button class='btn btn-xs btn-primary'>lihat riwayat pembayaran</button></a></td>
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
