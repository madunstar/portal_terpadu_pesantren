
  <section id="content">

  <section class="vbox bg-white">
    <header class="header b-b b-light hidden-print">
      <a href="<?php echo base_url() ?>admin/datamaster/datarekapsantri?kelas=<?php echo $kelas ?>&pelajaran=<?php echo $pelajaran ?> &tanggal=<?php echo $tanggal ?>" class="btn btn-sm btn-warning pull-right">Kembali</a>

      <p class="pull-right"></p>
      <a href="#" class="btn btn-sm btn-info pull-right" onClick="window.print();">Print</a>&nbsp;&nbsp;
      <p>Laporan Rekap Presensi Harian</p>
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
      <h5>Laporan Presensi <b><?php echo $matpel ?></b> Kelas <b><?php echo $namakelas ?></b> tanggal <b><?php echo tgl_indo($tanggal) ?></b></h5>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th width="5%">no</th>
            <th>NIS</th>
            <th width="50%">Nama</th>
            <th>Status Presensi</th>
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
                <td>".$row['status_presensi']."</td>
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
              Total Santri Hadir <br><br>
            </p>
          </div>
          <div class="col-xs-3">
            <p>
              : <?php echo $santrihadir['total'] ?>
            </p>
          </div>
        </div>
      </div>
</div>

    </section>

  </section>
  <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>

</section>
