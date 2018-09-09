<section id="content">
<section class="vbox">
  <section class="scrollable padder">
    <div class="m-b-md">
      <h3 class="m-b-none">Pembayaran</h3>
    </div>

    <section class="panel panel-default">
      <header class="panel-heading">
        Data Pembayaran Calon Santri
        <i class="fa fa-info-sign text-muted" data-toggle="tooltip" data-placement="bottom" data-title="ajax to load the data."></i>
      </header>
      <div class="panel-body">

      <div class="table-responsive">
      <?php pesan_get('msg',"Berhasil Verifikasi Pembayaran Pendaftar","Berhasil Membatalkan Pembayaran Pendaftar") ?>

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
                        <a class="" target='__blank' <?php echo ($row['status_pembayaran'] == 'Tidak Lengkap' || $row['status_pembayaran'] == 'tidak lengkap' ? '' : 'href="'.base_url('assets/images/berkas/'.$row['bukti_pembayaran']).'"');?>><button type="button" class="btn btn-warning btn-xs"><i class="fa fa-search"></i>&nbsp;Lihat Berkas</button></a>
                      </td>
                      <td>
                        <div class="form-group">
                          <?php echo ($row['status_pembayaran'] == 'Menunggu Verifikasi' || $row['status_pembayaran'] == 'menunggu verifikasi' ?
                          '
                            <form action="'.base_url().'admin/pendaftaran/verifikasibayar?email_pendaftar='.$row['email_pendaftar'].'" method="post">
                            <button type="submit" class="btn btn-success btn-xs">Verifikasi</button>
                            </form>
                          ': (($row['status_pembayaran'] == 'Diverifikasi' || $row['status_pembayaran'] == 'diverifikasi') ?
                          '
                            <form action="'.base_url().'admin/pendaftaran/verifikasibatal?email_pendaftar='.$row['email_pendaftar'].'" method="post">
                            <button type="submit" class="btn btn-danger btn-xs">Batalkan Verifikasi</button>
                            </form>
                          ': '<button class="btn btn-danger btn-xs">Pembayaran Tidak Lengkap</button>'))?>
                        </div>

                      </td>

                    </tr>

              <?php  } ?>
          </tbody>
        </table>
      </div>
      <div class="line line-dashed b-b line-lg pull-in"></div>
      <div class="row">
        <div class="table-responsive col-sm-4">
          <table class="table table-hover">
            <tr>
              <td>Pembayaran Diverifikasi</td>
              <td><?php echo $pembayaran_diverifikasi['total'] ?></td>
            </tr>
            <tr>
              <td>Pembayaran Menunggu Verifikasi</td>
              <td><?php echo $pembayaran_menunggu['total'] ?></td>
            </tr>
            <tr>
              <td>Pembayaran Tidak Lengkap</td>
              <td><?php echo $pembayaran_tidaklengkap['total'] ?></td>
            </tr>
          </table>
        </div>
        <div class="table-responsive col-sm-6">
          <table class="table table-hover">
            <tr class="success">
              <td>Total Pembayaran Diverifikasi</td>
              <td>Rp. <?php echo $duitverifikasi['total'] ?> ,- </td>
            </tr>
            <tr class="warning">
              <td>Total Pembayaran Menunggu Verifikasi</td>
              <td>Rp. <?php echo $duitmenunggu['total'] ?>,- </td>
            </tr>

          </table>
        </div>
      </div>
    </div>
    <footer class="panel-footer">

    </footer>
    </section>
  </section>
</section>

</section>
