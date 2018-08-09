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
              <h4 class="font-bold">Data Santriwati Kembali ke Pondok</h4>
            </header>
            <div class="panel-body">
              <a href="<?php echo base_url() ?>admin/datamaster/kembalip"><button type="button" name="button" class="btn btn-success btn-rounded"><i class="fa fa-plus"></i> Tambah Kembali ke Pondok</button></a>
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
            <div class="panel-footer">
              <button type="button" data-toggle='modal' data-target='#cetaklap' name="button" class="btn btn-primary">Cetak Laporan <i class="fa fa-print"></i></button>
              <div class='modal' id='cetaklap' tabindex='-1' role='dialog'>
                <form class='form-horizontal' role='form' data-validate='parsley' action='<?php echo base_url() ?>admin/datamaster/laporankembalip' method='post'>
                 <div class='modal-dialog' role='document'>
                   <div class='modal-content'>
                     <div class='modal-header bg-primary'>
                       <h4 class='modal-title'>Cetak Laporan</h4>
                     </div>
                     <div class='modal-body'>
                       <div class='form-group'>
                         <div class="col-sm-6">
                           <select type="text" class="form-control" name="bulan" >
                             <option value="01">Januari</option>
                             <option value="02">Februari</option>
                             <option value="03">Maret</option>
                             <option value="04">April</option>
                             <option value="05">Mei</option>
                             <option value="06">Juni</option>
                             <option value="07">Juli</option>
                             <option value="08">Agustus</option>
                             <option value="09">September</option>
                             <option value="10">Oktober</option>
                             <option value="11">November</option>
                             <option value="12">Desember</option>
                          </select>
                         </div>
                         <div class="col-sm-6">
                           <select class="form-control" name="tahun">
                             <?php
                               for($i = 2000 ; $i <= date('Y'); $i++){ ?>
                                <option value='<?php echo $i ?>' <?php if ($i == date('Y')) echo 'selected' ?>><?php echo $i ?></option>

                              <?php } ?>

                           </select>

                         </div>
                       </div>
                     <div class='modal-footer'>
                       <button type='submit' class='btn btn-sm btn-success'>Cetak <i class="fa fa-print"></i></button>
                       <button type='button' class='btn btn-sm btn-default' data-dismiss='modal'>Batal</button>
                     </div>
                   </div>
                 </div>
                  </div>
                </form>
              </div>
            </div>

          </section>
        </div>
          </div>
        </section>
      </section>
    </section>

  </section>
