<section id="content">
<section class="vbox">
  <section class="scrollable padder">
    <div class="m-b-md">
      <h3 class="m-b-none">Rekap Presensi Kelas Afiliasi</h3>
    </div>
    <section class="panel panel-default">
      <header class="panel-heading">
        Data Rekap Presensi Guru Mata Pelajaran <b><?php echo $matpel ?></b> Kelas <b><?php echo $namakelas ?></b>

      </header>
      <div class="table-responsive">

        <?php pesan_get('psn',"Berhasil Menghapus Data","Pelajaran Belum Berlangsung") ?>
      <?php pesan_get('msg',"Berhasil Menambah Rekap","Gagal Menambah Rekap") ?>
      <button style="margin: 10px 0 10px 10px" class="btn btn-s-md btn-success btn-rounded" data-toggle='modal' data-target='#tambahdata'><i class="fa fa-plus"></i> Tambah data</button>

        <table class="table table-striped " id="datatable">
          <thead>
            <tr>
              <th width="130px">Aksi</th>
              <th>Nama</th>
              <th>Mata Pelajaran</th>
              <th>Tanggal</th>
              <th>Status Presensi</th>

            </tr>
          </thead>
          <tbody>
            <?php
                foreach($data->result_array() as $row){
                  echo "
                    <tr>
                      <td>
                      <button class='btn btn-danger btn-xs' title='Hapus' data-toggle='modal' data-target='#".$row['id_rekap']."'><i class='fa fa-trash-o'></i></button>
                      </td>
                      <td>".$row['nama_lengkap']."</td>
                      <td>".$row['nama_mata_pelajaran']."</td>
                      <td>".$row['tanggal_rekap']."</td>
                      <td>".$row['status_presensi']."</td>

                    </tr>
                    <div class='modal' id='".$row['id_rekap']."' tabindex='-1' role='dialog'>
                     <div class='modal-dialog' role='document'>
                       <div class='modal-content'>
                         <div class='modal-header bg-danger'>
                           <h4 class='modal-title'>Konfirmasi Hapus Data</h4>
                         </div>
                         <div class='modal-body'>
                           <b>Apakah yakin menghapus data?</b>
                         </div>
                         <div class='modal-footer'>
                           <a style='margin-left:5px' href='".base_url('admin/datamaster/hapusrekapguru?id='.$row['id_rekap'].'&kelas='.$kelas.'&pelajaran='.$pelajaran.'&tanggal='.$tanggal.'&guru='.$nip_guru.'')."'>
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
      <footer class="panel-footer text-right">
        <a href="<?php echo base_url() ?>admin/datamaster/pelajaranrekap" type="button" class="btn btn-default" name="button"><i class="fa fa-list"></i> Daftar Pelajaran</a>
        <a href="<?php echo base_url() ?>admin/datamaster/laporanrekapguru?kelas=<?php echo $kelas ?>&pelajaran=<?php echo $pelajaran ?>&tanggal=<?php echo $tanggal ?>&guru=<?php echo $nip_guru ?>" type="button" class="btn btn-primary" name="button"><i class="fa fa-print"></i> Cetak Rekap Kehadiran</a>
      </footer>
    </section>
    <!-- ini tambah data -->
    <div class='modal' id='tambahdata' tabindex='-1' role='dialog'>
      <style >
        .datepicker{
          z-index:1151 !important;
        }
      </style>
     <div class='modal-dialog' role='document'>
       <div class='modal-content'>
         <div class='modal-header bg-default'>
           <h4 class='modal-title'>Tambah Rekap Santri</h4>
         </div>
         <div class='modal-body'>
                  <form class="form-horizontal mb-lg" data-validate="parsley" action="<?php echo base_url() ?>admin/datamaster/tambahrekapguru" method="post">
                    <div class="form-group">
                      <label class="col-sm-3 control-label" for="input-id-1">Guru</label>
                      <div class="col-sm-8">
                        <input type="text" name=""  class="form-control parsley-validated" data-required="true" readonly value="<?php echo $guru ?>">

                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label" for="input-id-1">Mata Pelajaran</label>
                      <div class="col-sm-8">

                        <input type="text" name=""  class="form-control" readonly value="<?php echo $matpel ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label" for="input-id-1">Tanggal</label>
                      <div class="col-sm-8">
                          <input  type="text" class="form-control datepicker-input" data-date-format="yyyy-mm-dd" readonly name="tanggal_rekap" data-required="true" placeholder="." value="<?php echo $tanggal ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label" for="input-id-1">Keterangan</label>
                      <div class="col-sm-8">
                        <select class="form-control" name="status">
                          <option value="hadir">hadir</option>
                          <option value="izin">izin</option>
                          <option value="sakit">sakit</option>
                          <option value="alfa">alpa</option>
                        </select>
                      </div>
                    </div>

                    <input type="hidden" name="pel" value="<?php echo $pelajaran ?>">
                    <input type="hidden" name="kel" value="<?php echo $kelas ?>">
                    <input type="hidden" name="tgl" value="<?php echo $tanggal ?>">
                    <input type="hidden" name="nip" value="<?php echo $nip_guru ?>">

         </div>
         <div class='modal-footer'>
            <button type='submit' class='btn btn-sm btn-success'>Tambah Data</button>
              </form>
           <button type='button' class='btn btn-secondary btn-sm' data-dismiss='modal'>Batal</button>
         </div>
       </div>
       <!-- <script src="<?php echo base_url('assets/js/datepicker/bootstrap-datepicker.js');?>"></script> -->
     </div>
   </div>
  </section>
</section>
</section>
