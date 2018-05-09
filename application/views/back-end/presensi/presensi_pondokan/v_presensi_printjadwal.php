
  <section id="content">

  <section class="vbox bg-white">
    <header class="header b-b b-light hidden-print">
      <a href="<?php echo base_url() ?>admin/datamaster/databayarinfaq" class="btn btn-sm btn-warning pull-right">Kembali</a>
      <p class="pull-right"></p>
      <a href="#" class="btn btn-sm btn-info pull-right" onClick="window.print();">Print</a>&nbsp;&nbsp;
      <p>Laporan Pembayran Infaq</p>
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
      <h5>Absensi Pelajaran<b>Bulan  Tahun </b></h5>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th rowspan="2">No</th>
            <th rowspan="2">NIS</th>
            <th rowspan="2">Nama</th>
            <th colspan="15"><p align="center">Tanggal</p></th>
          </tr>
          <tr>
            <th> &nbsp </th>
            <th> </th>
            <th> </th>
            <th> </th>
            <th> </th>
            <th> &nbsp </th>
            <th> </th>
            <th> </th>
            <th> </th>
            <th> </th>
            <th> &nbsp </th>
            <th> </th>
            <th> </th>
            <th> </th>
            <th> </th>
          </tr>
        </thead>
        <tbody>
          <?php
          $i = 1;
          foreach($santri->result_array() as $row){

            echo "
              <tr>
                <td>".$i."</td>
                <td>".$row['nis_lokal']."</td>
                <td>".$row['nama_lengkap']."</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
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
              Total Santri Bayar <br><br>
            </p>
          </div>
          <div class="col-xs-3">
            <p>
              : 1 orang<br>
            </p>
          </div>
        </div>
      </div>
</div>

    </section>

  </section>
  <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>

</section>
