<section id="content" style="width:100%">
<section class="vbox">
  <section class="scrollable padder">
    <div class="m-b-md">
      <h3 class="m-b-none"> <?php echo $jadwal['nama_kelas_belajar'] ?><small> (<?php echo $jadwal['nama_kelas'] ?> <?php echo $jadwal['tingkat_kelas'] ?>)</small></h3>
    </div>
    <section class="panel panel-default">
      <header class="panel-heading">
        List Jadwal  Kelas Afilasi
        <i class="fa fa-info-sign text-muted" data-toggle="tooltip" data-placement="bottom" data-title="ajax to load the data."></i>
      </header>
      <div class="table-responsive">
        <?php pesan_get('msg',"Berhasil Menambah Jadwal","Gagal Menambah Jadwal") ?>
        <?php pesan_get('h',"Berhasil Menghapus Jadwal","Gagal Menghapus Jadwal") ?>
        <?php pesan_get('ed',"Berhasil Mengedit Jadwal","Gagal Mengedit Jadwal") ?>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal" style="margin: 10px 0 10px 10px" id="tambahjadwal">
        <i class="fa fa-plus"></i> Tambah Jadwal</button> &nbsp
        <a style="margin: 10px 0 10px 0px" href="<?php echo base_url() ?>admin/santriakd/datakelasbelajar" class="btn btn-s-md btn-default" ><i class="fa fa-arrow-left"></i> Kembali</a>
        <div class="row">
        <div class="col-md-12" style="margin:10px">
        <div class="row">
          <div class="col-md-4">
              <table class="table table-bordered" style="width:80%">
                <tr  align="center">
                  <td colspan="5" align="center"><strong>Senin</strong></td>
                </tr>
                <tr>
                  <td><strong>Aksi</strong></td>
                  <td><strong>No</strong></td>
                  <td><strong>Jam</strong></td>
                  <td><strong>Pelajaran</strong></td>
                  <td><strong>Guru</strong></td>
                </tr>
                <?php
                  $i=0;
                  foreach ($datasenin->result_array() as $row){
                    $i++;
                    echo "<tr>
                          <td><p style='width:50px'> <button class='btn btn-success btn-xs editjadwal' title='Edit' id='".$row['id_jadwal']."'  data-toggle='modal' data-target='#myModaledit' ><i class='fa fa-edit'></i></button>
                          <a href='#' class='btn btn-success btn-xs hapus' title='Hapus' id='".$row['id_jadwal']."'><i class='fa fa-trash-o'></i></a></p></td>
                          <td>".$i."</td>
                          <td>".$row['jam']."</td>
                          <td>".$row['mata_pelajaran']."</td>
                          <td>".$row['guru']."</td>
                         </tr>";
                  }
                ?>
                </table>
          </div>

          <div class="col-md-4">
          <table class="table table-bordered" style="width:80%">
                <tr  align="center">
                  <td colspan="5" align="center"><strong>Selasa</strong></td>
                </tr>
                <tr>
                  <td><strong>Aksi</strong></td>
                  <td><strong>No</strong></td>
                  <td><strong>Jam</strong></td>
                  <td><strong>Pelajaran</strong></td>
                  <td><strong>Guru</strong></td>
                </tr>
                <?php
                  $i=0;
                  foreach ($dataselasa->result_array() as $row){
                    $i++;
                    echo "<tr>
                          <td><p style='width:50px'> <button class='btn btn-success btn-xs editjadwal' title='Edit' id='".$row['id_jadwal']."'  data-toggle='modal' data-target='#myModaledit' ><i class='fa fa-edit'></i></button>
                          <a href='#' class='btn btn-success btn-xs hapus' title='Hapus' id='".$row['id_jadwal']."'><i class='fa fa-trash-o'></i></a></p></td>
                          <td>".$i."</td>
                          <td>".$row['jam']."</td>
                          <td>".$row['mata_pelajaran']."</td>
                          <td>".$row['guru']."</td>
                         </tr>";
                  }
                ?>
                </table>
          </div>

           <div class="col-md-4">
           <table class="table table-bordered" style="width:80%">
                <tr  align="center">
                  <td colspan="5" align="center"><strong>Rabu</strong></td>
                </tr>
                <tr>
                  <td><strong>Aksi</strong></td>
                  <td><strong>No</strong></td>
                  <td><strong>Jam</strong></td>
                  <td><strong>Pelajaran</strong></td>
                  <td><strong>Guru</strong></td>
                </tr>
                <?php
                  $i=0;
                  foreach ($datarabu->result_array() as $row){
                    $i++;
                    echo "<tr>
                          <td><p style='width:50px'> <button class='btn btn-success btn-xs editjadwal' title='Edit' id='".$row['id_jadwal']."'  data-toggle='modal' data-target='#myModaledit' ><i class='fa fa-edit'></i></button>
                          <a href='#' class='btn btn-success btn-xs hapus' title='Hapus' id='".$row['id_jadwal']."'><i class='fa fa-trash-o'></i></a></p></td>
                          <td>".$i."</td>
                          <td>".$row['jam']."</td>
                          <td>".$row['mata_pelajaran']."</td>
                          <td>".$row['guru']."</td>
                         </tr>";
                  }
                ?>
                </table>
          </div>


        </div>
        <hr />
        <div class="row">
          <div class="col-md-4">
          <table class="table table-bordered" style="width:80%">
                <tr  align="center">
                  <td colspan="5" align="center"><strong>Kamis</strong></td>
                </tr>
                <tr>
                  <td><strong>Aksi</strong></td>
                  <td><strong>No</strong></td>
                  <td><strong>Jam</strong></td>
                  <td><strong>Pelajaran</strong></td>
                  <td><strong>Guru</strong></td>
                </tr>
                <?php
                  $i=0;
                  foreach ($datakamis->result_array() as $row){
                    $i++;
                    echo "<tr>
                          <td><p style='width:50px'> <button class='btn btn-success btn-xs editjadwal' title='Edit' id='".$row['id_jadwal']."'  data-toggle='modal' data-target='#myModaledit' ><i class='fa fa-edit'></i></button>
                          <a href='#' class='btn btn-success btn-xs hapus' title='Hapus' id='".$row['id_jadwal']."'><i class='fa fa-trash-o'></i></a></p></td>
                          <td>".$i."</td>
                          <td>".$row['jam']."</td>
                          <td>".$row['mata_pelajaran']."</td>
                          <td>".$row['guru']."</td>
                         </tr>";
                  }
                ?>
                </table>
          </div>

          <div class="col-md-4">
          <table class="table table-bordered" style="width:80%">
                <tr  align="center">
                  <td colspan="5" align="center"><strong>Jum'at</strong></td>
                </tr>
                <tr>
                  <td><strong>Aksi</strong></td>
                  <td><strong>No</strong></td>
                  <td><strong>Jam</strong></td>
                  <td><strong>Pelajaran</strong></td>
                  <td><strong>Guru</strong></td>
                </tr>
                <?php
                  $i=0;
                  foreach ($datajumat->result_array() as $row){
                    $i++;
                    echo "<tr>
                          <td><p style='width:50px'> <button class='btn btn-success btn-xs editjadwal' title='Edit' id='".$row['id_jadwal']."'  data-toggle='modal' data-target='#myModaledit' ><i class='fa fa-edit'></i></button>
                          <a href='#' class='btn btn-success btn-xs hapus' title='Hapus' id='".$row['id_jadwal']."'><i class='fa fa-trash-o'></i></a></p></td>
                          <td>".$i."</td>
                          <td>".$row['jam']."</td>
                          <td>".$row['mata_pelajaran']."</td>
                          <td>".$row['guru']."</td>
                         </tr>";
                  }
                ?>
                </table>
          </div>

           <div class="col-md-4">
           <table class="table table-bordered" style="width:80%">
                <tr  align="center">
                  <td colspan="5" align="center"><strong>Sabtu</strong></td>
                </tr>
                <tr>
                  <td><strong>Aksi</strong></td>
                  <td><strong>No</strong></td>
                  <td><strong>Jam</strong></td>
                  <td><strong>Pelajaran</strong></td>
                  <td><strong>Guru</strong></td>
                </tr>
                <?php
                  $i=0;
                  foreach ($datasabtu->result_array() as $row){
                    $i++;
                    echo "<tr>
                          <td><p style='width:50px'> <button class='btn btn-success btn-xs editjadwal' title='Edit' id='".$row['id_jadwal']."'  data-toggle='modal' data-target='#myModaledit' ><i class='fa fa-edit'></i></button>
                          <a href='#' class='btn btn-success btn-xs hapus' title='Hapus' id='".$row['id_jadwal']."'><i class='fa fa-trash-o'></i></a></p></td>
                          <td>".$i."</td>
                          <td>".$row['jam']."</td>
                          <td>".$row['mata_pelajaran']."</td>
                          <td>".$row['guru']."</td>
                         </tr>";
                  }
                ?>
                </table>
          </div>


        </div>
        <hr />
        <div class="row" >
        <div class="col-md-4"  style="margin:0 auto">
           <table class="table table-bordered" style="width:80%">
                <tr  align="center">
                  <td colspan="5" align="center"><strong>Ahad</strong></td>
                </tr>
                <tr>
                  <td><strong>Aksi</strong></td>
                  <td><strong>No</strong></td>
                  <td><strong>Jam</strong></td>
                  <td><strong>Pelajaran</strong></td>
                  <td><strong>Guru</strong></td>
                </tr>
                <?php
                  $i=0;
                  foreach ($dataahad->result_array() as $row){
                    $i++;
                    echo "<tr>
                          <td><p style='width:50px'> <button class='btn btn-success btn-xs editjadwal' title='Edit' id='".$row['id_jadwal']."'  data-toggle='modal' data-target='#myModaledit' ><i class='fa fa-edit'></i></button>
                          <a href='#' class='btn btn-success btn-xs hapus' title='Hapus' id='".$row['id_jadwal']."'><i class='fa fa-trash-o'></i></a></p></td>
                          <td>".$i."</td>
                          <td>".$row['jam']."</td>
                          <td>".$row['mata_pelajaran']."</td>
                          <td>".$row['guru']."</td>
                         </tr>";
                  }
                ?>
                </table>
          </div>
        </div>
        </div>
        </div>

      </div>
    </section>
  </section>
</section>

</section>


<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog" id="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content" id="modal-tambah">
    <div class="modal-body">

    </div>
    </div>
  </div>
</div>

<div id="myModaledit" class="modal fade" role="dialog">
  <div class="modal-dialog" id="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content" id="modal-edit">
	<div class="modal-body">
	</div>
    </div>
  </div>
</div>
