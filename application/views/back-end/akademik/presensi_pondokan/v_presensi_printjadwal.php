
  <section id="content">

  <section class="vbox bg-white">
    <header class="header b-b b-light hidden-print">
    <a href="<?php echo base_url() ?>admin/santriakd/printkelaspondokan?id=<?php echo $data2['id_kelas_belajar'] ?>" class="btn btn-sm btn-warning pull-right">Kembali</a>
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
          <h5 class="font-bold">ABSENSI SANTRI MU'ALIMIN PONDOK PESANTREN DARUL ILMI  <?php echo $data2['tahun_ajaran'] ?></h5>
        </div>
        <div class="col-xs-2 h3 font-bold text-center">
        </div>
      </div>
      <div class="line pull-in line-dashed b-b"></div>
      <br>
      <table border:"0px">
     
      <tr><td>Nama Kelas  </td><td>&nbsp : &nbsp</td><td> <?php echo $data2['nama_kelas_belajar'] ?></td><td width="500px"> </td><td>Wali Kelas  </td><td>&nbsp : &nbsp</td><td> <?php echo $data2['nama_lengkap'] ?></td></tr>
      <tr><td>Tingkat  </td><td>&nbsp : &nbsp</td><td> <?php echo $data2['tingkat'] ?> <?php echo $data2['pondokan'] ?> </td><td width="500px"> </td><td>Ketua Kelas  </td><td>&nbsp : &nbsp</td><td></td></tr> </tr>
      <tr><td>Bulan </td><td>&nbsp : &nbsp</td><td><?php echo $bulan ?></td>
       </tr>
      </table>
      <table class="table table-bordered" class="print">
        <thead>
          <tr class="halus">
            <th rowspan="4" style="width:30px;text-align:center;">No.</th>
            <th rowspan="4"  style="text-align:center;width:80px">NIS</th>
            <th rowspan="4"  style="text-align:center">Nama</th>
            <th colspan="5" style="text-align:center">Senin</th>
            <th colspan="5" style="text-align:center">Selasa</th>
            <th colspan="5" style="text-align:center">Rabu</th>
            <th colspan="5" style="text-align:center">Kamis</th>
            <th colspan="5" style="text-align:center">Sabtu</th>
            <th colspan="3" style="text-align:center">Jumlah</th>
            <th rowspan="4" style="text-align:center">Keterangan</th>
          </tr>
          <tr  class="halus">
            <th colspan="5">TGL :</th>
            <th colspan="5">TGL :</th>
            <th colspan="5">TGL :</th>
            <th colspan="5">TGL :</th>
            <th colspan="5">TGL :</th>
            <th rowspan="3"  style="text-align:center;vertical-align:midle">S<br/>A<br/>K<br/>I<br/>T</th>
            <th rowspan="3"  style="text-align:center;vertical-align:midle">I<br/>J<br/>I<br/>N</th>
            <th rowspan="3"  style="text-align:center;vertical-align:midle">A<br/>L<br/>P<br/>A</th>
          </tr>
          <tr  class="halus">
            <th colspan="5">Jam Ke</th>
            <th colspan="5">Jam Ke</th>
            <th colspan="5">Jam Ke</th>
            <th colspan="5">Jam Ke</th>
            <th colspan="5">Jam Ke</th>
          </tr>
          <tr  class="halus">
            <th>1</th>
            <th>2</th>
            <th>3</th>
            <th>4</th>
            <th>5</th>
            <th>1</th>
            <th>2</th>
            <th>3</th>
            <th>4</th>
            <th>5</th>
            <th>1</th>
            <th>2</th>
            <th>3</th>
            <th>4</th>
            <th>5</th>
            <th>1</th>
            <th>2</th>
            <th>3</th>
            <th>4</th>
            <th>5</th>
            <th>1</th>
            <th>2</th>
            <th>3</th>
            <th>4</th>
            <th>5</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $i = 1;
          foreach($santri->result_array() as $row){

            echo "
              <tr class='halus'>
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
           <tr  class='halus'>
                <td colspan="3" style="text-align:right;height:60px">Mata Pelajaran : </td>
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
              <tr  class='halus'>
                <td colspan="3" style="text-align:right;height:60px">Ustadz: </td>
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
          <!-- <div class="col-xs-3">
            Ustadz/Ustadzah
            <br/>
            <br/>
            <br/>
            <br/>
            asd
          </div> -->
        </div>
      </div>
</div>

    </section>

  </section>
  <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>

</section>
