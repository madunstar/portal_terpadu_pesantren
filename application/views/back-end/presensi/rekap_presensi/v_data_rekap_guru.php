<section id="content">
<section class="vbox">
  <section class="scrollable padder">
    <div class="m-b-md">
      <h3 class="m-b-none">Rekap Presensi Kelas Afiliasi</h3>
    </div>
    <section class="panel panel-default">
      <header class="panel-heading">
        Data Rekap Presensi Guru Kelas <?php echo $namakelas ?>

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
              <th>Jam Pelajaran</th>
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
                      <td></td>
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


  </section>
</section>
</section>
