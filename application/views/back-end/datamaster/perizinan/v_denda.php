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
                          <td><a href='".base_url('admin/datamaster/riwayatbayardenda?nis='.$row['nis_lokal'].'&denda='.$row['id_denda'].'')."'><button class='btn btn-xs btn-primary'>lihat riwayat pembayaran</button></a></td>
                        </tr>
                      ";
                    }
                    ?>
                  </tbody>
                </table>
              </div>
              <div class="panel-footer">
                <button type="button" data-toggle='modal' data-target='#cetaklap' name="button" class="btn btn-primary">Cetak Laporan <i class="fa fa-print"></i></button>
                <div class='modal' id='cetaklap' tabindex='-1' role='dialog'>
                  <form class='form-horizontal' role='form' data-validate='parsley' action='<?php echo base_url() ?>admin/datamaster/laporandenda' method='post'>
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
                         <button type='submit' class='btn btn-sm btn-success'>Cetak <i class="fa fa-check"></i></button>
                         <button type='button' class='btn btn-sm btn-default' data-dismiss='modal'>Batal</button>
                       </div>
                     </div>
                   </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>

          </div>
            </div>
          </section>
        </section>
      </section>
    </section>

  </section>
