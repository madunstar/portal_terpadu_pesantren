<section id="content">
<section class="vbox">
  <section class="scrollable padder">
    <div class="m-b-md">
      <h3 class="m-b-none">Data Alat Transportasi</h3>
    </div>
    <section class="panel panel-default">
      <header class="panel-heading">
        List Data Alat Transportasi
        <i class="fa fa-info-sign text-muted" data-toggle="tooltip" data-placement="bottom" data-title="ajax to load the data."></i>
      </header>
      <div class="table-responsive">
      <?php pesan_get('msg',"Berhasil Menghapus Data Alat Transportasi","Gagal Menghapus Data Alat Transportasi") ?>
      <a style="margin: 10px 0 10px 10px" href="<?php echo base_url() ?>admin/datamaster/alat_transportasitambah"
        class="btn btn-s-md btn-success btn-rounded" ><i class="fa fa-plus"></i> Tambah data alat transportasi</a>

        <table class="table table-striped " id="datatable">
          <thead>
            <tr>
              <th width="130px">Aksi</th>
              <th>Id Alat Transportasi</th>
              <th>Nama Alat Transportasi</th>
            </tr>
          </thead>
          <tbody>
            <?php
                foreach($data->result_array() as $row){
                  echo "
                    <tr>
                      <td>
                      <a href='".base_url('admin/datamaster/alat_transportasiedit?id_alat_transportasi='.$row['id_alat_transportasi'].'')."' class='btn btn-success btn-xs' title='Edit'><i class='fa fa-edit'></i></a>
                      <a href='#' class='btn btn-success btn-xs hapus' title='Hapus' id='".$row['id_alat_transportasi']."'><i class='fa fa-trash-o'></i></a>
                      </td>
                      <td>".$row['id_alat_transportasi']."</td>
                      <td>".$row['nama_alat_transportasi']."</td>
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
