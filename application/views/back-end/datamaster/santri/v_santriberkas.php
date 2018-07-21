<section id="content">
<section class="vbox">
  <section class="scrollable padder">
    <div class="m-b-md">
      <h3 class="m-b-none">Berkas Santri "<?php echo $santri['nama_lengkap'] ?> (<?php echo $santri['nis_lokal'] ?>)"</h3>
    </div>
    <section class="panel panel-default">
      <header class="panel-heading">
        List Berkas Santri
        <i class="fa fa-info-sign text-muted" data-toggle="tooltip" data-placement="bottom" data-title="ajax to load the data."></i>
      </header>
      <div class="table-responsive">
      <?php pesan_get('msg',"Berhasil Menghapus  Data Berkas Santri","Gagal Menghapus Data Berkas Santri") ?>
      <a style="margin: 10px 0 10px 10px" href="<?php echo base_url() ?>admin/datamaster/santritambahberkas?nis=<?php echo $santri['nis_lokal'] ?>" class="btn btn-s-md btn-success btn-rounded" ><i class="fa fa-plus"></i> Tambah Berkas</a> &nbsp
      <a style="margin: 10px 0 10px 0px" href="<?php echo base_url() ?>admin/datamaster/santri" class="btn btn-s-md btn-default btn-rounded" ><i class="fa fa-list"></i> List Santri</a>

        <table class="table table-striped " id="datatable">
          <thead>
            <tr>
              <th width="130px">Aksi</th>
              <th>Nama Berkas</th>
              <th width="120px">Berkas</th>
            </tr>
          </thead>
          <tbody>
            <?php
                foreach($data->result_array() as $row){
                  echo "
                    <tr>
                      <td>
                      <a href='".base_url('admin/datamaster/santrieditberkas?id='.$row['id_berkas'].'&nis='.$santri['nis_lokal'].'')."' class='btn btn-warning btn-xs' title='Edit'><i class='fa fa-edit'></i></a>
                      <a href='#' class='btn btn-danger btn-xs hapus' title='Hapus' id='".$row['id_berkas']."'><i class='fa fa-trash-o'></i></a>
                      </td>
                      <td>".$row['nama_berkas']."</td>
                      <td><a class='btn btn-default btn-xs' href='".base_url("assets/berkas/berkassantri/".$row['file_berkas']."")."' target='_blank'><i class='fa fa-download'></i> Unduh</a></td>
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
