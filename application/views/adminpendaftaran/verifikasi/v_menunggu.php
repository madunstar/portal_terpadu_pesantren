<section id="content">
<section class="vbox">
  <section class="scrollable padder">
    <div class="m-b-md">
      <h3 class="m-b-none">Santri (menunggu verifikasi)</h3>
    </div>
    <section class="panel panel-default">
      <header class="panel-heading">
        List Santri
        <i class="fa fa-info-sign text-muted" data-toggle="tooltip" data-placement="bottom" data-title="ajax to load the data."></i>
      </header>
      <div class="table-responsive">
      <?php pesan_get('msg',"Berhasil Menghapus Data Santri","Gagal Menghapus Data Santri") ?>

        <table class="table table-striped " id="datatable">
          <thead>
              <th>Email</th>
              <th>Nama</th>
              <th>NISN</th>
              <th>Gender</th>
              <th>Status Biodata</th>
              <th>Status Berkas</th>
            </tr>
          </thead>
          <tbody>
            <?php
                foreach($data->result_array() as $row){
                  echo "
                    <tr>
                      <td>".$row['email_pendaftar']."</td>
                      <td>".$row['nama_lengkap']."</td>
                      <td>".$row['nisn']."</td>
                      <td>".($row['jenis_kelamin']=="L"?"Laki-laki":"Perempuan")."</td>
                      <td>
                      <a href='".base_url('admin/pendaftaran/semuabiodata?email='.$row['email_pendaftar'].'&l=menunggu')."'  title='Edit'><i class='fa fa-edit'></i> ".$row['status_biodata']."</a>
                      </td>
                      <td>
                      <a href='".base_url('admin/pendaftaran/semuaberkas?email='.$row['email_pendaftar'].'&l=menunggu')."'  title='Edit'><i class='fa fa-edit'></i> ".$row['status_berkas']."</a>
                      </td>
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
