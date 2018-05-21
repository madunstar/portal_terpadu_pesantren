<section id="content">
<section class="vbox">
  <section class="scrollable padder">
    <div class="m-b-md">
      <h3 class="m-b-none">Kelas</h3>
    </div>
    <section class="panel panel-default">
      <header class="panel-heading">
        List Ruang Kelas
        <i class="fa fa-info-sign text-muted" data-toggle="tooltip" data-placement="bottom" data-title="ajax to load the data."></i>
      </header>
      <div class="table-responsive">
      <?php pesan_get('msg',"Berhasil Menghapus Data Kelas","Gagal Menghapus Data Kelas") ?>
      <a style="margin: 10px 0 10px 10px" href="<?php echo base_url() ?>admin/santriakd/kelastambah" class="btn btn-s-md btn-success btn-rounded" ><i class="fa fa-plus"></i> Tambah data</a>

        <table class="table table-striped " id="datatable">
          <thead>
            <tr>
              <th width="130px">Aksi</th>
              <th>Nama Ruang Kelas</th>
              <th>Tingkat Ruang Kelas</th>
              <th>Kapasitas</th>
            </tr>
          </thead>
          <tbody>
            <?php
                foreach($data->result_array() as $row){
                  echo "
                    <tr>
                      <td>
                      <a href='".base_url('admin/santriakd/kelasedit?kd_kelas='.$row['kd_kelas'].'')."' class='btn btn-warning btn-xs' title='Edit'><i class='fa fa-edit'></i></a>
                      <a href='#' class='btn btn-danger btn-xs hapus' title='Hapus' id='".$row['kd_kelas']."'><i class='fa fa-trash-o'></i></a>
                      </td>
                      <td>".$row['nama_kelas']."</td>
                      <td>".$row['tingkat_kelas']."</td>
                      <td>".$row['kapasitas']."</td>
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
