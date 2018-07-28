<section id="content" style="width:100%">
<section class="vbox">
  <section class="scrollable padder">
    <div class="m-b-md">
      <h3 class="m-b-none"> <?php echo $santri['nama_kelas_belajar'] ?><small> (<?php echo $santri['nama_kelas'] ?> <?php echo $santri['tingkat_kelas'] ?>)</small></h3>
    </div>
    <section class="panel panel-default">
      <header class="panel-heading">
        Data Santri  Kelas Pondokan
        <i class="fa fa-info-sign text-muted" data-toggle="tooltip" data-placement="bottom" data-title="ajax to load the data."></i>
      </header>
      <div class="table-responsive">
      <?php pesan_get('msg',"Berhasil Menambah Santri","Gagal Menambah Santri") ?>
      <?php pesan_get('h',"Berhasil Menghapus Santri","Gagal Menghapus Santri") ?>
      <?php pesan_get('ed',"Berhasil Mengubah Santri","Gagal Mengubah Santri") ?>
      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal" style="margin: 10px 0 10px 10px" id="tambahsantri">
      <i class="fa fa-plus"></i> Tambah Santri</button> &nbsp
      <a style="margin: 10px 0 10px 0px" href="<?php echo base_url() ?>admin/datamaster/lihatkelaspondokansantri" class="btn btn-s-md btn-default" ><i class="fa fa-arrow-left"></i> Kembali</a>

        <table class="table table-striped " id="datatable">
          <thead>
            <tr>
              <th width="130px">Aksi</th>
              <th>NIS Lokal</th>
              <th>NISN</th>
              <th>Nama Santri</th>
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
