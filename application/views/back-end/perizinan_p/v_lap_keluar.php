
  <section id="content">

  <section class="vbox bg-white">
    <header class="header b-b b-light hidden-print">
      <a href="<?php echo base_url() ?>admin/perizinansantriwati/datakeluar" class="btn btn-sm btn-warning pull-right">Kembali</a>
      <p class="pull-right"></p>
      <a href="#" class="btn btn-sm btn-info pull-right" onClick="window.print();">Cetak</a>&nbsp;&nbsp;
      <p>Laporan Data Santri Keluar Pondok</p>
    </header>

    <section class="scrollable wrapper">
      <div class="container">
      <div class="row">
        <div class="col-xs-2 h3 font-bold text-center">
          <img src="<?php echo base_url('assets/images/logo.png'); ?>" alt="">
        </div>
        <div class="col-xs-8 text-center">
          <h4 class="font-bold">PESANTREN DARUL ILMI</h4>
          <small>
            JL. A. YANI KM. 19.2 KEL. LANDASAN ULIN BARAT, KEC. LIANGANGGANG
            <br>BANJARBARU - KALIMANTAN SELATAN 70722</br>
          </small>
        </div>
        <div class="col-xs-2 h3 font-bold text-center">
        </div>
      </div>
      <div class="line pull-in line-dashed b-b"></div>
      <br>
      <h5>Laporan Data Santri Keluar Pondok <b>Bulan <?php echo bulan($bulan) ?> Tahun <?php echo $tahun ?></b></h5>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>No</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Tanggal Keluar</th>
            <th>Tanggal Rencana Kembali</th>
            <th>Keperluan</th>
            <th>Penjemput</th>
            <th>Status Keluar</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $i = 1;
          foreach($data->result_array() as $row){

            echo "
              <tr>
                <td>".$i."</td>
                <td>".$row['nis_santri']."</td>
                <td>".$row['nama_lengkap']."</td>
                <td>".$row['jenis_sekolah_asal']."</td>
                <td>".$row['tgl_keluar']."</td>
                <td>".$row['harus_kembali']."</td>
                <td>".$row['keperluan']."</td>
                <td>".$row['nama_penjemput']."</td>
                <td>".$row['status_keluar']."</td>
              </tr>
            "; $i++;
          }
          ?>
        </tbody>
      </table>
      <div class="well b bg-light m-t">
        <div class="row">
          <div class="col-xs-3">
            <p>
              Santri Keluar Pondok <br><br>
            </p>
          </div>
          <div class="col-xs-3">
            <p>
              : <?php echo $totkeluar['total']?> Santri<br><br>
            </p>
          </div>
        </div>
      </div>
</div>

    </section>

  </section>
  <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>

</section>
