<section id="content">
<section class="vbox">
  <section class="scrollable padder">
    <div class="m-b-md">
      <h3 class="m-b-none">Pondokan Kelas</h3>
    </div>
    <section class="panel panel-default">
      <header class="panel-heading">
        List Pondokan Kelas
        <i class="fa fa-info-sign text-muted" data-toggle="tooltip" data-placement="bottom" data-title="ajax to load the data."></i>
      </header>
      <div class="table-responsive">
      <?php pesan_get('msg',"Berhasil Menghapus Pondokan Kelas","Gagal Menghapus Pondokan Kelas") ?>
      <a style="margin: 10px 0 10px 10px" href="<?php echo base_url() ?>admin/datamaster/pondokantambah" class="btn btn-s-md btn-success btn-rounded" ><i class="fa fa-plus"></i> Tambah Pondokan</a>

        <table class="table table-striped " id="datatable">
          <thead>
            <tr>
              <th width="135px">Aksi</th>
              <th>Pondokan</th>
              <th>Keterangan</th>
              <th>Tingkat</th>
            </tr>
          </thead>
          <tbody>
            <?php
                foreach($data->result_array() as $row){
                  echo "
                    <tr>
                      <td>
                      <a href='".base_url('admin/datamaster/pondokanedit?pondokan='.$row['pondokan'].'')."' class='btn btn-success btn-xs' title='Edit'><i class='fa fa-edit'></i></a>
                      <a href='#' class='btn btn-success btn-xs hapus' title='Hapus' id='".$row['pondokan']."'><i class='fa fa-trash-o'></i></a>
                      </td>
                      <td>".$row['pondokan']."</td>
                      <td>".$row['namapondokan']."</td>
                      <td><a href='".base_url('admin/datamaster/pondokantingkat?pondokan='.$row['pondokan'].'')."' class='btn btn-success btn-xs' title='Edit'><i class='fa fa-file-text-o'></i> Tingkat Pondokan </a></td>
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
