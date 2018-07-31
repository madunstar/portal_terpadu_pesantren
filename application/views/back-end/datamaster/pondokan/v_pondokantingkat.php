<section id="content">
<section class="vbox">
  <section class="scrollable padder">
    <div class="m-b-md">
      <h3 class="m-b-none">Tingkat Pondokan "<?php echo $pondokan['pondokan'] ?> (<?php echo $pondokan['namapondokan'] ?>)"</h3>
    </div>
    <section class="panel panel-default">
      <header class="panel-heading">
        Data Tingkat Pondokan
        <i class="fa fa-info-sign text-muted" data-toggle="tooltip" data-placement="bottom" data-title="ajax to load the data."></i>
      </header>
      <div class="table-responsive">
      <?php pesan_get('msg',"Berhasil Menghapus  Data Tingkat Pondokan","Gagal Menghapus Data Tingkat Pondokan") ?>
      <a style="margin: 10px 0 10px 10px" href="<?php echo base_url() ?>admin/datamaster/pondokantambahtingkat?pondokan=<?php echo $pondokan['pondokan'] ?>" class="btn btn-s-md btn-success btn-rounded" ><i class="fa fa-plus"></i> Tambah Tingkat</a> &nbsp
      <a style="margin: 10px 0 10px 0px" href="<?php echo base_url() ?>admin/datamaster/pondokan" class="btn btn-s-md btn-default btn-rounded" ><i class="fa fa-list"></i> List Pondokan</a>

        <table class="table table-striped " id="datatable">
          <thead>
            <tr>
              <th width="130px">Aksi</th>
              <th>Pondokan</th>
              <th>Tingkat</th>
            </tr>
          </thead>
          <tbody>
            <?php
                foreach($data->result_array() as $row){
                  echo "
                    <tr>
                      <td>
                      <a href='".base_url('admin/datamaster/pondokanedittingkat?pondokan='.$pondokan['pondokan'].'&id='.$row['idtingkatpondokan'].'')."' class='btn btn-warning btn-xs' title='Edit'><i class='fa fa-edit'></i></a>
                      <a href='#' class='btn btn-danger btn-xs hapus' title='Hapus' id='".$row['idtingkatpondokan']."'><i class='fa fa-trash-o'></i></a>
                      </td>
                      <td>".$row['pondokan']."</td>
                      <td>".$row['tingkat']."</td>
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
