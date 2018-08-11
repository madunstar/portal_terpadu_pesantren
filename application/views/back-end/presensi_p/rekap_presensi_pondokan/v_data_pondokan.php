<section id="content">
<section class="vbox">
  <section class="scrollable padder">
    <div class="m-b-md">
      <h3 class="m-b-none">Rekap Presensi Kelas Pondokan</h3>
    </div>
    <section class="panel panel-default">
      <header class="panel-heading">
        Daftar Pelajaran
        <i class="fa fa-info-sign text-muted" data-toggle="tooltip" data-placement="bottom" data-title="ajax to load the data."></i>
      </header>
      <div class="table-responsive">

      <?php pesan_get('msg',"Berhasil Menghapus Data Pelajaran","Gagal Menghapus Data Pelajaran") ?>

        <table class="table table-striped " id="datatable">
          <thead>
            <tr>
              <th width="130px">Aksi</th>
              <th>Kelas</th>
              <th>Mata Pelajaran</th>
              <th>Pengajar</th>
              <th>Tahun Ajaran</th>
            </tr>
          </thead>
          <tbody>
            <?php
                foreach($data->result_array() as $row){
                  echo "
                    <tr>
                      <td>
                      <a href='".base_url('admin/datamaster/datarekapsantripondokanp?pelajaran='.$row['id_pelajaran'].'&kelas='.$row['id_kelas_belajar'].'&tanggal='.$tanggal.'')."' class='btn btn-primary btn-xs' title='Lihat Rekap Santriwati'><i class='fa fa-users'></i></a>
                      <a href='".base_url('admin/datamaster/datarekapgurupondokanp?pelajaran='.$row['id_pelajaran'].'&kelas='.$row['id_kelas_belajar'].'&tanggal='.$tanggal.'&jadwal='.$row['id_jadwal'].'&guru='.$row['nip_guru'].'')."' class='btn btn-success btn-xs' title='Lihat Rekap Guru'><i class='fa fa-user'></i></a>
                      </td>
                      <td>".$row['nama_kelas_belajar']."</td>
                      <td>".$row['nama_mata_pelajaran']."</td>
                      <td>".$row['nama_lengkap']."</td>

                      <td>".$row['tahun_ajaran']."</td>
                    </tr>

                  ";
                }
            ?>
          </tbody>
        </table>
      </div>
    </section>
  </section>
</section>
</section>
