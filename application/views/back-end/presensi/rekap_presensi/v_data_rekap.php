<section id="content">
<section class="vbox">
  <section class="scrollable padder">
    <div class="m-b-md">
      <h3 class="m-b-none">Rekap Presensi Kelas Afiliasi</h3>
    </div>
    <section class="panel panel-default">
      <header class="panel-heading">
        Data Rekap Presensi Kelas <b><?php echo $namakelas ?></b> Mata Pelajaran <b><?php echo $matpel ?></b>

      </header>
      <div class="table-responsive">

        <?php pesan_get('psn',"Berhasil Menghapus Data","Pelajaran Belum Berlangsung") ?>
      <?php pesan_get('msg',"Berhasil Menambah Rekap","Gagal Menambah Rekap") ?>
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
                      <td>".$row['nama_kelas_belajar']."</td>
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
                           <a style='margin-left:5px' href='".base_url('admin/datamaster/hapusrekap?id='.$row['id_rekap'].'&kelas='.$kelas.'&pelajaran='.$pelajaran.'&tanggal='.$tanggal.'')."'>
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
        <a href="<?php echo base_url() ?>admin/datamaster/laporanrekapharian?kelas=<?php echo $kelas ?>&pelajaran=<?php echo $pelajaran ?>&tanggal=<?php echo $tanggal ?>" type="button" class="btn btn-primary" name="button"><i class="fa fa-print"></i> Cetak Rekap Harian</a>
      </footer>
    </section>
    <!-- ini tambah data -->
    <div class='modal' id='tambahdata' tabindex='-1' role='dialog'>
      <link rel="stylesheet" href="<?php echo base_url('assets/js/chosen/chosen.css');?>" type="text/css" />
     <div class='modal-dialog' role='document'>
       <div class='modal-content'>
         <div class='modal-header bg-default'>
           <h4 class='modal-title'>Tambah Rekap Santri</h4>
         </div>
         <div class='modal-body'>
           <?php
             if ($santri->num_rows()>0) {
           ?>
                  <form class="form-horizontal mb-lg" action="<?php echo base_url() ?>admin/datamaster/tambahrekap" method="post">
                    <div class="form-group">
                      <label class="col-sm-3 control-label" for="input-id-1">Santri</label>
                      <div class="col-sm-8">
                        <select class="form-control data-validate" name="nis">
                          <?php
                           foreach ($santri->result_array() as $rsantri){
                             echo "<option value='".$rsantri['nis_lokal']."'>".$rsantri['nis_lokal']." (".$rsantri['nama_lengkap'].")</option>";
                           }
                          ?>
                        </select>
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
         </div>
         <div class='modal-footer'>
            <button type='submit' class='btn btn-sm btn-success'>Tambah Data</button></a>
              </form>
           <button type='button' class='btn btn-secondary btn-sm' data-dismiss='modal'>Batal</button>
         </div>
         <?php
           } else {
         ?>
          <p align="center">Tidak Ada Santri</p>
         </div>
         <div class="modal-footer">
           <div class="row">
             <div class="col-md-12 text-right">
               <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
             </div>
           </div>
         </div>
         <?php
           }
           ?>
       </div>
     </div>

  </section>
</section>
</section>
