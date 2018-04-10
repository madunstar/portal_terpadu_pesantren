<section id="content">
  <section class="vbox">

    <section class="scrollable padder">
      <div class="row m-b-md">
        <div class="col-sm-6">
          <h3 class="m-b-xs text-black">Keluar Pondok</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <section class="panel panel-default">
            <header class="panel-heading">
              <h4 class="font-bold">Data Santri Keluar Pondok</h4>
            </header>
            <div class="panel-body">
            <a href="<?php echo base_url() ?>admin/perizinan/keluar"><button type="button" name="button" class="btn btn-success btn-rounded"><i class="fa fa-plus"></i> Buat Perizinan Keluar</button></a>
              <div class="table-responsive">
                <table class="table table-striped m-b-none" id="datatable">
                  <thead>
                    <tr>
                      <th >Nama</th>
                      <th >Kelas</th>
                      <th >Tanggal Keluar</th>
                      <th>Penjemput</th>
                      <th>Status Keluar</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      foreach($data->result_array() as $row){
                        echo "
                          <tr class='rowData'>
                            <td>".$row['nama_lengkap']."</td>
                            <td>".$row['jenis_sekolah_asal']."</td>
                            <td>".$row['tanggal_keluar']."</td>
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

          </div>
            </div>
          </section>
        </section>
      </section>
    </section>

  </section>
