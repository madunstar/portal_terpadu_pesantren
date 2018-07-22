<section id="content">
<section class="vbox">
  <section class="scrollable padder">
    <div class="m-b-md">
      <h3 class="m-b-none">Tingkat Jenjang "<?php echo $jenjang['jenjang'] ?> (<?php echo $jenjang['namajenjang'] ?>)"</h3>
    </div>
    <section class="panel panel-default">
      <header class="panel-heading">
        List Tingkat Jenjang
        <i class="fa fa-info-sign text-muted" data-toggle="tooltip" data-placement="bottom" data-title="ajax to load the data."></i>
      </header>
      <div class="table-responsive">
      <?php pesan_get('msg',"Berhasil Menghapus  Data Tingkat Jenjang","Gagal Menghapus Data Tingkat Jenjang") ?>
      <a style="margin: 10px 0 10px 10px" href="<?php echo base_url() ?>admin/datamaster/jenjangtambahtingkat?jenjang=<?php echo $jenjang['jenjang'] ?>" class="btn btn-s-md btn-success btn-rounded" ><i class="fa fa-plus"></i> Tambah Tingkat</a> &nbsp
      <a style="margin: 10px 0 10px 0px" href="<?php echo base_url() ?>admin/datamaster/jenjang" class="btn btn-s-md btn-default btn-rounded" ><i class="fa fa-list"></i> List Jenjang</a>

        <table class="table table-striped " id="datatable">
          <thead>
            <tr>
              <th width="130px">Aksi</th>
              <th>Jenjang</th>
              <th>Tingkat</th>
            </tr>
          </thead>
          <tbody>
            <?php
                foreach($data->result_array() as $row){
                  echo "
                    <tr>
                      <td>
                      <a href='".base_url('admin/datamaster/jenjangedittingkat?jenjang='.$jenjang['jenjang'].'&id='.$row['idtingkatjenjang'].'')."' class='btn btn-warning btn-xs' title='Edit'><i class='fa fa-edit'></i></a>
                      <a href='#' class='btn btn-danger btn-xs hapus' title='Hapus' id='".$row['idtingkatjenjang']."'><i class='fa fa-trash-o'></i></a>
                      </td>
                      <td>".$row['jenjang']."</td>
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
