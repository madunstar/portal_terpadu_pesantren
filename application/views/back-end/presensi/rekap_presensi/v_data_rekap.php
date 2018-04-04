<section id="content">
<section class="vbox">
  <section class="scrollable padder">
    <div class="m-b-md">
      <h3 class="m-b-none">Rekap Presensi Santri</h3>
    </div>
    <section class="panel panel-default">
      <header class="panel-heading">
        Data Rekap Santri

      </header>
      <div class="table-responsive">
      <?php pesan_get('msg',"Berhasil Menghapus Data Pelajaran","Gagal Menghapus Data Pelajaran") ?>
      <button style="margin: 10px 0 10px 10px" class="btn btn-s-md btn-success btn-rounded" data-toggle='modal' data-target='#tambahdata'><i class="fa fa-plus"></i> Tambah data</button>
      <form class="bs-example form-horizontal" data-validate="parsley" action="<?php echo base_url() ?>admin/datamaster/datarekapsantri" method="post">
        <div class="form-group">
          <label class="col-lg-4 control-label">Tanggal Rekap</label>
          <div class="col-lg-4">
            <input type="text" class="form-control datepicker-input" data-date-format="yyyy-mm-dd" readonly name="tanggal_rekap" data-required="true" placeholder="." value="<?php echo $tanggal ?>"
            />
            <input type="hidden" name="kelas" value="<?php echo $kelas ?>">
            <input type="hidden" name="pelajaran" value="<?php echo $pelajaran ?>">
          </div>
          <div class="col-lg-4">
            <button type="submit" class="btn btn-primary">Tampilkan Rekap</button>
          </div>
        </div>
      </form>
        <table class="table table-striped " id="datatable">
          <thead>
            <tr>
              <th width="130px">Aksi</th>
              <th>Nama</th>
              <th>Mata Pelajaran</th>
              <th>Nama Kelas</th>
              <th>Status Presensi</th>
              <th>Jam Pelajaran</th>
            </tr>
          </thead>
          <tbody>
            <?php
                foreach($data->result_array() as $row){
                  echo "
                    <tr>
                      <td>
                      <a href='".base_url('admin/datamaster/pelajaranlihat?id_pelajaran='.$row['id_pelajaran'].'')."' class='btn btn-primary btn-xs' title='Lihat'><i class='fa fa-eye'></i></a>
                      <a href='".base_url('admin/datamaster/pelajaranedit?id_pelajaran='.$row['id_pelajaran'].'')."' class='btn btn-warning btn-xs' title='Edit'><i class='fa fa-edit'></i></a>
                      <a href='#' class='btn btn-danger btn-xs hapus' title='Hapus' id='".$row['id_pelajaran']."'><i class='fa fa-trash-o'></i></a>
                      </td>
                      <td>".$row['nama_lengkap']."</td>
                      <td>".$row['nama_mata_pelajaran']."</td>
                      <td>".$row['nama_kelas_belajar']."</td>
                      <td>".$row['status_presensi']."</td>
                      <td></td>
                    </tr>
                  ";
                }
            ?>
          </tbody>
        </table>
      </div>
    </section>
    <div class='modal' id='tambahdata' tabindex='-1' role='dialog'>
     <div class='modal-dialog' role='document'>
       <div class='modal-content'>
         <div class='modal-header bg-default'>
           <h4 class='modal-title'>Konfirmasi Hapus Data</h4>
         </div>
         <div class='modal-body'>
           <form class="" action="index.html" method="post">
             <select class="" name="santri">
               <?php
                foreach ($santri->result_array() as $rsantri){
                  echo "<option value='".$rsantri['nis_lokal']."'>".$rsantri['nis_lokal']." (".$rsantri['nama_lengkap'].")</option>";
                }
               ?>
             </select>

         </div>
         <div class='modal-footer'>
            <button type='submit' class='btn btn-sm btn-success'>Konfirmasi</button></a>
           </form>
           <button type='button' class='btn btn-secondary btn-sm' data-dismiss='modal'>Batal</button>
         </div>
       </div>
     </div>
   </div>
  </section>
</section>
</section>
