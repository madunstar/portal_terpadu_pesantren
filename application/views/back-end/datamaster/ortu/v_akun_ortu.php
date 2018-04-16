<section id="content">
<section class="vbox">
  <section class="scrollable padder">
    <div class="m-b-md">
      <h3 class="m-b-none">Data Akun Orang Tua Santri</h3>
    </div>
    <section class="panel panel-default">
      <header class="panel-heading">
        List Data Akun Orang Tua Santri
        <i class="fa fa-info-sign text-muted" data-toggle="tooltip" data-placement="bottom" data-title="ajax to load the data."></i>
      </header>
      <div class="table-responsive">
        <?php pesan_get('reset',"Berhasil Reset Kata Sandi (Kata Sandi Baru adalah NIS)","Berhasil Menonaktifkan Akun") ?>
        <?php pesan_get('aktif',"Berhasil Mengaktifkan Akun","Berhasil Menonaktifkan Akun") ?>
      <?php pesan_get('msg',"Berhasil Menambah Akun","Gagal Menambah Akun") ?>
        <table class="table table-striped " id="datatable">
          <thead>
            <tr>

              <th>akun (NIS Santri)</th>
              <th>alamat email</th>
              <th>Status Akun</th>

            </tr>
          </thead>
          <tbody>
            <?php
                foreach($data->result_array() as $row){ ?>
                    <tr>
                      <td><?php echo $row['nis_lokal'] ?></td>
                      <td><?php echo $row['email_ortu'] ?></td>
                      <td><?php echo
                          (($row['status_akun'] == 'aktif' ) ? '<a href="'.base_url("admin/datamaster/akunortunonaktif?id=".$row["nis_lokal"]."").'" class="btn btn-success btn-xs" >Aktif</a> <a href="'.base_url("admin/datamaster/resetsandiortu?id=".$row["nis_lokal"]."").'" class="btn btn-warning btn-xs" >Reset Sandi</a>'
                          : (($row['status_akun'] == 'tidak aktif') ? '<a href="'.base_url("admin/datamaster/akunortuaktif?id=".$row["nis_lokal"]."").'" class="btn btn-warning btn-xs" >Tidak Aktif</a>'
                          : '<button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#'.$row['nis_lokal'].'" >Belum Ada</button>'))
                      ?>
                      </td>
                    </tr>
                    <div class='modal' id='<?php echo $row['nis_lokal']?>' tabindex='-1' role='dialog'>
                     <div class='modal-dialog' role='document'>
                       <div class='modal-content'>
                         <div class='modal-header bg-default'>

                           <h4 class='modal-title'>Tambah Data Akun</h4>
                         </div>
                         <div class='modal-body form-horizontal'>
                             <form class="form-horizontal" data-validate="parsley" action='<?php echo base_url()?>admin/datamaster/buatakunortu' method="post">
                             <div class='form-group'>
                               <label class='col-sm-3 control-label' for='input-id-1'>ID Orang tua</label>
                               <div class='col-sm-8'>
                                 <input type='text' name='id' class='form-control parsley-validated' data-required='true' readonly value='<?php echo $row['nis_lokal'] ?>'>
                               </div>
                             </div>
                             <div class='form-group'>
                               <label class='col-sm-3 control-label' for='input-id-1'>Kata Sandi</label>
                               <div class='col-sm-8'>
                                 <input type='text' name='sandi'  class='form-control parsley-validated' data-required='true' readonly value='<?php echo $row['nis_lokal'] ?>'>
                               </div>
                             </div>
                             <div class='form-group'>
                               <label class='col-sm-3 control-label' for='input-id-1'>Email</label>
                               <div class='col-sm-8'>
                                 <input type='email' name='email'  class='form-control parsley-validated' required data-parsley-type="email" value='<?php echo $row['email_santri']?>'>
                               </div>
                             </div>

                         </div>
                         <div class='modal-footer'>
                           <button type='submit' class='btn btn-sm btn-success'>Konfirmasi</button>
                           </form>
                           <button type='button' class='btn btn-secondary btn-sm' data-dismiss='modal'>Batal</button>
                         </div>
                       </div>
                     </div>
                     </diV>
                <?php
                  }
                ?>
          </tbody>
        </table>
      </div>
    </section>
  </section>
</section>

</section>
