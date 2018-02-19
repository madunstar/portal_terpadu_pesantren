<section id="content">
<section class="vbox">
  <section class="scrollable padder">
    <div class="m-b-md">
      <h3 class="m-b-none">Data Pendidikan</h3>
    </div>
    <section class="panel panel-default">
      <header class="panel-heading">
        List Data Pendidikan
        <i class="fa fa-info-sign text-muted" data-toggle="tooltip" data-placement="bottom" data-title="ajax to load the data."></i>
      </header>
      <div class="table-responsive">
      <?php pesan_get('msg',"Berhasil Menghapus Data Pendidikan","Gagal Menghapus Data Pendidikan") ?>
      <a style="margin: 10px 0 10px 10px" href="<?php echo base_url() ?>admin/datamaster/pendidikantambah"
        class="btn btn-s-md btn-success btn-rounded" ><i class="fa fa-plus"></i> Tambah data pendidikan</a>

        <table class="table table-striped " id="datatable">
          <thead>
            <tr>
              <th width="130px">Aksi</th>
              <th>Id Pendidikan</th>
              <th>Nama Pendidikan</th>
            </tr>
          </thead>
          <tbody>
            <?php
                foreach($data->result_array() as $row){
                  echo "
                    <tr>
                      <td>
                      <a href='".base_url('admin/datamaster/pendidikanedit?id_pendidikan='.$row['id_pendidikan'].'')."' class='btn btn-warning btn-xs' title='Edit'><i class='fa fa-edit'></i></a>
                      <a href='#' class='btn btn-danger btn-xs hapus' title='Hapus' id='".$row['id_pendidikan']."'><i class='fa fa-trash-o'></i></a>
                      </td>
                      <td>".$row['id_pendidikan']."</td>
                      <td>".$row['nama_pendidikan']."</td>
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
