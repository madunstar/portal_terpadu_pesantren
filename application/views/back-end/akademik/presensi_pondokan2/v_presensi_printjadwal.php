
  <section id="content">

  <section class="vbox bg-white">
    <header class="header b-b b-light hidden-print">
      <a href="<?php echo base_url() ?>admin/santriakd/datakelaspondokan" class="btn btn-sm btn-warning pull-right">Kembali</a>
      <p class="pull-right"></p>
      <a href="#" class="btn btn-sm btn-info pull-right" onClick="window.print();">Print</a>&nbsp;&nbsp;
      <p>Daftar Presensi Santri</p>
    </header>

    <section class="scrollable wrapper">
      <div class="container">
      <div class="row">
        <div class="col-xs-2 h3 font-bold text-center">
          <img src="<?php echo base_url('assets/images/logo.png'); ?>" alt="">
        </div>
        <div class="col-xs-8 text-center">
          <h4 class="font-bold">PRESENSI PESANTREN DARUL ILMI</h4>
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
      <table border:"0px">
      <tr><td>Mata Pelajaran </td><td> &nbsp : &nbsp</td><td> <?php echo $data['mata_pelajaran'] ?> </td></tr>
      <tr><td>Ustadz/Ustadzah  </td><td>&nbsp : &nbsp</td><td> <?php echo $data['guru'] ?> </td> </tr>
      <tr><td>Nama Kelas  </td><td>&nbsp : &nbsp</td><td> <?php echo $data2['nama_kelas_belajar'] ?></td>
      <tr><td>Tingkat  </td><td>&nbsp : &nbsp</td><td> <?php echo $data2['tingkat'] ?> <?php echo $data2['pondokan'] ?> </td> </tr>
      <tr><td>Tahun Ajaran  </td><td>&nbsp : &nbsp</td><td> <?php echo $data2['tahun_ajaran'] ?> </td>
       </tr>
      </table>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th rowspan="2" style="width:30px;text-align:center;">No.</th>
            <th rowspan="2"  style="text-align:center;width:80px">NIS</th>
            <th rowspan="2"  style="text-align:center">Nama</th>
            <th colspan="16" style="text-align:center">Tanggal</th>
          </tr>
          <tr>
            <th>&nbsp</th>
            <th>&nbsp</th>
            <th>&nbsp</th>
            <th>&nbsp</th>
            <th>&nbsp</th>
            <th>&nbsp</th>
            <th>&nbsp</th>
            <th>&nbsp</th>
            <th>&nbsp</th>
            <th>&nbsp</th>
            <th>&nbsp</th>
            <th>&nbsp</th>
            <th>&nbsp</th>
            <th>&nbsp</th>
            <th>&nbsp</th>
            <th>&nbsp</th>
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
                <td></td>
              </tr>
            "; $i++;
          }
          ?>
           <tr>
                <td colspan="3" style="text-align:right">Paraf Ustadz/Ustadzah : </td>
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
                <td></td>
              </tr>
        </tbody>
      </table>
      <div class="">
        <div class="row">
          <div class="col-xs-2">
            <p>
              Total Santri  <br><br>
            </p>
          </div>
          <div class="col-xs-7">
            <p>
              : <?php echo $santri->num_rows() ?> <br>
            </p>
          </div>
          <div class="col-xs-3">
            Ustadz/Ustadzah
            <br/>
            <br/>
            <br/>
            <br/>
            <?php echo $data['guru'] ?>
          </div>
        </div>
      </div>
</div>

    </section>

  </section>
  <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>

</section>
