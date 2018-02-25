<section id="content">
  <section class="vbox bg-white">
    <header class="header b-b b-light hidden-print">
      <button href="#" class="btn btn-sm btn-info pull-right" onClick="window.print();">Print</button>
      <p>Bukti Pendaftaran</p>
    </header>
    <section class="scrollable wrapper">
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
      <div class="row">
        <div class="col-xs-12 text-right">
          <h4>#<?php echo $data['id_biodata'];?></h4>
          <h5>Diverifikasi tanggal <?php echo $data['tgl_byr'];?></h5>
        </div>
      </div>
      <div class="well b bg-light m-t">
        <div class="row">
          <div class="col-xs-12 text-center">
            <h5><strong>KARTU PENDAFTARAN</strong></h5>
          </div>
        </div>
          <div class="line pull-in line-dashed b-b"></div>
        <div class="row">
          <div class="col-xs-3 ">
            <div class="thumb-lg">
              <img style="height:192px;width:128px;margin-left:10px"  src="<?php echo base_url($foto);?>" alt="">
            </div>

          </div>
          <div class="col-xs-2">
            <p class="font-bold">
              Nama  <br><br>
              Alamat <br><br>
              No. Hp  <br><br>
              Tingkat
            </p>
          </div>
          <div class="col-xs-7">
            <p>
              :  <?php echo $data['nama_lengkap'];?><br><br>
              :  <?php echo $data['alamat_lengkap'];?><br><br>
              :  <?php echo $data['hp'];?><br><br>
              :  <?php echo $data['jenis_pendaftaran'];?>
            </p>
          </div>
        </div>
      </div>
      <div class="line pull-in line-dashed b-b"></div>
    <small style="font-size:7px" class="pull-right">potong bagian ini</small>
      <div class="row" style="margin-top:80px">
      <div class="col-xs-12">
        <h5 class="font-bold">Jadwal Tes</h5>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Materi</th>
              <th>Waktu</th>
            </tr>
          </thead>
          <tbody>
          <?php
            foreach($materi->result_array() as $row) {?>
              <tr>
                <td><?php echo $row['materi_tes'];?></td>
                <td><?php echo $row['tgl_tes'];?></td>
              </tr>
          <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12">
        <div class="line pull-in line-dashed b-b"></div>
        <small style="font-size:10px">*File ini adalah bukti yang sah bahwa pendaftar dengan nama tertera diatas benar benar melakukan pendaftaran pada Pesantren Darul Ilmi</small>
      </div>
    </div>

    </section>
  </section>
  <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>
</section>
