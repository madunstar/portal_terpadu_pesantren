<section id="content" style="width:100%">
<section class="vbox">
  <section class="scrollable padder">
    <div class="m-b-md">
      <h3 class="m-b-none"> <?php echo $santriwati['nama_kelas_belajar'] ?><small> (<?php echo $santriwati['nama_kelas'] ?> <?php echo $santriwati['tingkat_kelas'] ?>)</small></h3>
    </div>
    <section class="panel panel-default">
      <header class="panel-heading">
        List santriwati  Kelas Pondokan
        <i class="fa fa-info-sign text-muted" data-toggle="tooltip" data-placement="bottom" data-title="ajax to load the data."></i>
      </header>
      <div class="table-responsive">
      <?php pesan_get('msg',"Berhasil Menambah santriwati","Gagal Menambah santriwati") ?>
      <?php pesan_get('h',"Berhasil Menghapus santriwati","Gagal Menghapus santriwati") ?>
      <?php pesan_get('ed',"Berhasil Mengedit santriwati","Gagal Mengedit santriwati") ?>
      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal" style="margin: 10px 0 10px 10px" id="tambahsantri">
      <i class="fa fa-plus"></i> Tambah santriwati</button> &nbsp
      <a style="margin: 10px 0 10px 0px" href="<?php echo base_url() ?>admin/santriwatiakd/datakelaspondwati" class="btn btn-s-md btn-default" ><i class="fa fa-arrow-left"></i> Kembali</a>

        <table class="table table-striped " id="datatable">
          <thead>
            <tr>
              <th width="130px">Aksi</th>
              <th>NIS Lokal</th>
              <th>NISN</th>
              <th>Nama santriwati</th>
              <th>Tanggal Lahir</th>
              <th>Jenis Kelamin</th>
            </tr>
          </thead>
          <tbody>
            <?php
                foreach($data->result_array() as $row){
                  echo "
                    <tr>
                      <td>
                      <button class='btn btn-success btn-xs editsantri' title='Edit' id='".$row['id_kelas_santri']."'  data-toggle='modal' data-target='#myModaledit' ><i class='fa fa-edit'></i></button>
                      <a href='#' class='btn btn-success btn-xs hapus' title='Hapus' id='".$row['id_kelas_santri']."'><i class='fa fa-trash-o'></i></a>
                      </td>
                      <td>".$row['nis_lokal']."</td>
                      <td>".$row['nisn']."</td>
                      <td>".$row['nama_lengkap']."</td>
                      <td>".tgl_indo($row['tgl_lahir'])."</td>
                      <td>".$row['jenis_kelamin']."</td>
                    </tr>
                  ";
                }
            ?>
          </tbody>
        </table>
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
