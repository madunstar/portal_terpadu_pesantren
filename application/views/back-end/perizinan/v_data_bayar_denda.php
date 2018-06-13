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
              <?php pesan_get('msg',"Berhasil Menambahkan Data Bayar","Gagal Menambahkan Data Bayar") ?>
              <?php pesan_get('hps',"Berhasil Menghapus Data Bayar","Gagal Menghapus Data Bayar") ?>
              <button data-toggle='modal' data-target='#tambahbayar' type="button" name="button" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Pembayaran Denda</button> <a class="btn btn-default btn-s-xs" href="<?php echo base_url() ?>admin/perizinansantri/datadenda"><i class="fa fa-list"></i> List Data Denda</a><br><br>
              <div class="table-responsive">
                <table class="table m-b-none" id="">
                  <thead>
                    <tr>

                      <th >Tanggal Bayar</th>
                      <th >Besar Bayar</th>
                      <th>Petugas</th>
                      <th>Aksi</th>
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
                          <td><button class='btn btn-danger btn-xs' data-toggle='modal' data-target='#".$row['id_bayar']."'><i class='fa fa-trash-o'></i></button></td>
                        </tr>
                        <div class='modal' id='".$row['id_bayar']."' tabindex='-1' role='dialog'>
                         <div class='modal-dialog' role='document'>
                           <div class='modal-content'>
                             <div class='modal-header bg-danger'>
                               <h4 class='modal-title'>Konfirmasi Hapus Data</h4>
                             </div>
                             <div class='modal-body'>
                               <b>Apakah yakin menghapus data?</b>
                             </div>
                             <div class='modal-footer'>
                               <a style='margin-left:5px' href='".base_url('admin/perizinansantri/bayardendahapus?id_bayar='.$row['id_bayar'].'&nis='.$row['nis_lokal'].'&id_denda='.$row['id_denda'].'')."'>
                               <button type='button' class='btn btn-sm btn-danger'>Konfirmasi</button></a>
                               <button type='button' class='btn btn-secondary btn-sm' data-dismiss='modal'>Batal</button>
                             </div>
                           </div>
                         </div>
                       </div>
                      ";
                    }
                    ?>
                  </tbody>
                </table>

              </div>
              <div class="panel-footer">

                <p><b>total pembayaran</b> : <?php echo $totalbayar['total'] ?>
                <p><b>status pembayaran</b> : <?php echo $statusdenda['status_pembayaran'] ?>

              </div>
              <div class='modal' id='tambahbayar' tabindex='-1' role='dialog'>
                <form class='form-horizontal' role='form' data-validate='parsley' action='<?php echo base_url() ?>admin/perizinansantri/bayardenda' method='post'>
                 <div class='modal-dialog' role='document'>
                   <div class='modal-content'>
                     <div class='modal-header bg-primary'>
                       <h4 class='modal-title'>Tambah Data Pembayaran</h4>
                     </div>
                     <div class='modal-body'>
                       <div class='form-group'>
                         <label class='control-label col-sm-3'>Besar Pembayaran </label>
                         <div class="col-sm-8">
                           <input type='text' name='besar_bayar' data-type='number' class='form-control parsley-validated' data-required='true' value=''></input>
                           <input type="hidden" name="id_denda" value="<?php echo $id_denda ?>">
                           <input type="hidden" name="nis" value="<?php echo $nis ?>">
                         </div>
                       </div>
                     <div class='modal-footer'>
                       <button type='submit' class='btn btn-sm btn-success'>Tambah Bayar <i class="fa fa-check"></i></button>
                       <button type='button' class='btn btn-sm btn-default' data-dismiss='modal'>Batal</button>
                     </div>
                   </div>
                 </div>

               </div>
             </form>
            </div>


          </div>
            </div>
          </section>
        </section>
      </section>
    </section>

  </section>
