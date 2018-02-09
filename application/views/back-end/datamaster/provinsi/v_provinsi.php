<section id="content">
<section class="vbox">
  <section class="scrollable padder">
    <div class="m-b-md">
      <h3 class="m-b-none">Data Provinsi Indonesia</h3>
    </div>
    <section class="panel panel-default">
      <header class="panel-heading">
        List Provinsi Indonesia
        <i class="fa fa-info-sign text-muted" data-toggle="tooltip" data-placement="bottom" data-title="ajax to load the data."></i>
      </header>
      <div class="table-responsive">
      <?php pesan_get('msg',"Berhasil Menghapus Data Provinsi","Gagal Menghapus Data Provinsi") ?>
      <a style="margin: 10px 0 10px 10px" href="<?php echo base_url() ?>admin/datamaster/provinsitambah"
        class="btn btn-s-md btn-success btn-rounded" ><i class="fa fa-plus"></i> Tambah data provinsi</a>

        <table class="table table-striped " id="datatable">
          <thead>
            <tr>
              <th width="130px">Aksi</th>
              <th>Id Provinsi</th>
              <th>Nama Provinsi</th>
            </tr>
          </thead>
          <tbody>
            <?php
                foreach($data->result_array() as $row){
                  echo "
                    <tr>
                      <td>
                      <a href='".base_url('admin/datamaster/provinsiedit?id_provinsi='.$row['id_provinsi'].'')."' class='btn btn-success btn-xs' title='Edit'><i class='fa fa-edit'></i></a>
                      <a href='".base_url('admin/datamaster/provinsihapus?id_provinsi='.$row['id_provinsi'].'')."' class='btn btn-success btn-xs hapus' title='Hapus' id='".$row['id_provinsi']."'><i class='fa fa-trash-o'></i></a>
                      </td>
                      <td>".$row['id_provinsi']."</td>
                      <td>".$row['nama_provinsi']."</td>
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
