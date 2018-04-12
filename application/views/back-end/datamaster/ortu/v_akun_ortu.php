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
      <?php pesan_get('msg',"Berhasil Menghapus Data Admin","Gagal Menghapus Data Admin") ?>


        <table class="table table-striped " id="datatable">
          <thead>
            <tr>
              <th width="130px">Aksi</th>
              <th>akun (NIS Santri)</th>
              <th>alamat email</th>
              <th>Status Akun</th>

            </tr>
          </thead>
          <tbody>
            <?php
                foreach($data->result_array() as $row){
                  echo "
                    <tr>
                      <td>
                      <a href='".base_url('admin/datamaster/adminedit?nama_akun='.$row['nis_lokal'].'')."' class='btn btn-warning btn-xs' title='Edit'><i class='fa fa-edit'></i></a>
                      <a href='#' class='btn btn-danger btn-xs hapus' title='Hapus' id='".$row['nis_lokal']."'><i class='fa fa-trash-o'></i></a>
                      </td>
                      <td>".$row['nis_lokal']."</td>
                      <td>".$row['email_ortu']."</td>
                      <td>".(($row['status_akun'] == 'aktif' ) ? 'aktif' : (($row['status_akun'] == 'tidak aktif') ? 'tidak aktif' : 'belum ada'))."</td>
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
