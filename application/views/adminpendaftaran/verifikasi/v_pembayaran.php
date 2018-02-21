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
      <div class="panel-body">

      <div class="table-responsive">
      <?php pesan_get('msg',"Berhasil Verifikasi Pembayaran Santri","Berhasil Membatalkan Pembayaran Santri") ?>

        <table class="table table-striped " id="datatable">
          <thead>

              <th>Nama</th>
              <th>Besar Pembayaran</th>
              <th>Tanggal Pembayaran</th>
              <th>Status Pembayaran</th>
              <th>Bukti Pembayaran</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
                foreach($data->result_array() as $row){
                  ?>
                    <tr>

                      <td><?php echo $row['nama_lengkap']?></td>
                      <td><?php echo $row['besar_pembayaran']?></td>
                      <td><?php echo $row['tanggal_pembayaran'] ?></td>
                      <td><?php echo $row['status_pembayaran'] ?></td>
                      <td>
                        <a class="" target='__blank' <?php echo ($row['status_pembayaran'] == 'tidak lengkap' ? '' : 'href="'.base_url('assets/images/berkas/'.$row['bukti_pembayaran']).'"');?>><button type="button" class="btn btn-warning btn-xs"><i class="fa fa-search"></i>&nbsp;lihat berkas</button></a>
                      </td>
                      <td>
                        <div class="form-group">
                          <?php echo (($row['status_pembayaran'] == 'menunggu verifikasi') ?
                          '
                            <form action="'.base_url().'admin/pendaftaran/verifikasibayar?email_pendaftar='.$row['email_pendaftar'].'" method="post">
                            <button type="submit" class="btn btn-success btn-xs">verifikasi</button>
                            </form>
                          ': (($row['status_pembayaran']== 'diverifikasi') ?
                          '
                            <form action="'.base_url().'admin/pendaftaran/verifikasibatal?email_pendaftar='.$row['email_pendaftar'].'" method="post">
                            <button type="submit" class="btn btn-danger btn-xs">batalkan verifikasi</button>
                            </form>
                          ': '<button class="btn btn-danger btn-xs">pembayaran tidak lengkap</button>'))?>
                        </div>

                      </td>

                    </tr>

              <?php  } ?>
          </tbody>
        </table>
      </div>
    </div>
    </section>
  </section>
</section>

</section>
