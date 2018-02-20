<section id="content">
<section class="vbox">
  <section class="scrollable padder">
    <div class="m-b-md">
      <h3 class="m-b-none">Santri</h3>
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

              <th>Nama</th>
              <th>Besar Pembayaran</th>
              <th>Tanggal Pembayaran</th>
              <th>Status Pembayaran</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
                foreach($data->result_array() as $row){
                  echo "
                    <tr>

                      <td>".$row['nama_lengkap']."</td>
                      <td>".$row['besar_pembayaran']."</td>
                      <td>".$row['tanggal_pembayaran']."</td>
                      <td>".$row['status_pembayaran']."</td>
                      <td>
                        <form action='".base_url()."admin/pendaftaran/verifikasibayar?email_pendaftar=".$row['email_pendaftar']."' method='post'>
                        <button class='btn btn-success btn-sm'>verifikasi</button>
                        </form>
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
