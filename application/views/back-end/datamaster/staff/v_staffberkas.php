<section id="content">
<section class="vbox">
  <section class="scrollable padder">
    <div class="m-b-md">
      <h3 class="m-b-none">Berkas Staff "<?php echo $staff['nama_lengkap'] ?> (<?php echo $staff['nip_staff'] ?>)"</h3>
    </div>
    <section class="panel panel-default">
      <header class="panel-heading">
        List Berkas Staff
        <i class="fa fa-info-sign text-muted" data-toggle="tooltip" data-placement="bottom" data-title="ajax to load the data."></i>
      </header>
      <div class="table-responsive">
      <?php pesan_get('msg',"Berhasil Menghapus  Data Berkas Staff","Gagal Menghapus Data Berkas Staff") ?>
      <a style="margin: 10px 0 10px 10px" href="<?php echo base_url() ?>admin/datamaster/stafftambahberkas?nip=<?php echo $staff['nip_staff'] ?>" class="btn btn-s-md btn-success btn-rounded" ><i class="fa fa-plus"></i> Tambah Berkas</a> &nbsp
      <a style="margin: 10px 0 10px 0px" href="<?php echo base_url() ?>admin/datamaster/staff" class="btn btn-s-md btn-default btn-rounded" ><i class="fa fa-list"></i> List Staff</a>

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
                      <a href='".base_url('admin/datamaster/staffeditberkas?nip='.$staff['nip_staff'].'&id='.$row['id_berkas'].'')."' class='btn btn-warning btn-xs' title='Edit'><i class='fa fa-edit'></i></a>
                      <a href='#' class='btn btn-danger btn-xs hapus' title='Hapus' id='".$row['id_berkas']."'><i class='fa fa-trash-o'></i></a>
                      </td>
                      <td>".$row['nama_berkas']."</td>
                      <td><a class='btn btn-default btn-xs' href='".base_url("assets/berkas/berkasstaff/".$row['file_berkas']."")."' target='_blank'><i class='fa fa-download'></i> Unduh</a></td>
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
