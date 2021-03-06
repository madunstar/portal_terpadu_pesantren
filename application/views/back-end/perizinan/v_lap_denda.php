
  <section id="content">

  <section class="vbox bg-white">
    <header class="header b-b b-light hidden-print">
      <a href="<?php echo base_url() ?>admin/perizinansantri/datadenda" class="btn btn-sm btn-warning pull-right">Kembali</a>
      <p class="pull-right"></p>
      <a href="#" class="btn btn-sm btn-info pull-right" onClick="window.print();">Cetak</a>&nbsp;&nbsp;
      <p>Laporan Denda</p>
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
      <h5>Laporan Denda <b>Bulan <?php echo bulan($bulan) ?> Tahun <?php echo $tahun ?></b></h5>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>No</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Besar Denda</th>
            <th>Status Denda</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $i = 1;
          foreach($data->result_array() as $row){

            echo "
              <tr>
                <td>".$i."</td>
                <td>".$row['nis_lokal']."</td>
                <td>".$row['nama_lengkap']."</td>
                <td>".$row['besar_denda']."</td>
                <td>".$row['status_pembayaran']."</td>
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
              Total Denda <br><br>
              Total Denda Dibayar <br><br>
              Total Denda Hutang  <br>
            </p>
          </div>
          <div class="col-xs-3">
            <p>
              : <?php echo $semuadenda['total']?> <br><br>
              : <?php echo $dendalunas['total']?> <br><br>
              : <?php echo $dendahutang['total']?>  <br>
            </p>
          </div>
        </div>
      </div>
</div>

    </section>

  </section>
  <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>

</section>
