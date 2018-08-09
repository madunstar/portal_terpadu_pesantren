<section id="content">
<section class="vbox">
  <section class="scrollable padder">
    <div class="m-b-md">
      <h3 class="m-b-none">Pak Pondokan</h3>
    </div>
    <section class="panel panel-default">
      <header class="panel-heading">
        Data Pak
        <i class="fa fa-info-sign text-muted" data-toggle="tooltip" data-placement="bottom" data-title="ajax to load the data."></i>
      </header>
      <div class="table-responsive">
      <?php pesan_get('msg',"Berhasil Menghapus Jam Pak","Gagal Menghapus Jam Pak") ?>
      <a style="margin: 10px 0 10px 10px" href="<?php echo base_url() ?>admin/datamaster/pakpondokantambah" class="btn btn-s-md btn-success btn-rounded" ><i class="fa fa-plus"></i> Tambah Jadwal</a>

        <table class="table table-striped " id="datatable">
          <thead>
            <tr>
              <th width="130px">Aksi</th>
              <th>Pak</th>
              <th>Jam</th>
            </tr>
          </thead>
          <tbody>
            <?php
                foreach($data->result_array() as $row){
                  echo "
                    <tr>
                      <td>
                      <a href='".base_url('admin/datamaster/pakpondokanedit?id='.$row['id'].'')."' class='btn btn-warning btn-xs' title='Ubah'><i class='fa fa-edit'></i></a>
                      <a href='#' class='btn btn-danger btn-xs hapus' title='Hapus' id='".$row['id']."'><i class='fa fa-trash-o'></i></a>
                      </td>
                      <td>".$row['pak']."</td>
                      <td>".$row['jam']."</td>
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
