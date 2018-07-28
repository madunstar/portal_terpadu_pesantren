<section id="content">
<section class="vbox">
  <section class="scrollable padder">
    <div class="m-b-md">
      <h3 class="m-b-none">Data Provinsi Indonesia</h3>
    </div>
    <section class="panel panel-default">
      <header class="panel-heading">
        Daftar Provinsi Indonesia
        <i class="fa fa-info-sign text-muted" data-toggle="tooltip" data-placement="bottom" data-title="ajax to load the data."></i>
      </header>
      <div class="table-responsive">
      <?php pesan_get('msg',"Berhasil Menghapus Data Provinsi","Gagal Menghapus Data Provinsi") ?>
      <a style="margin: 10px 0 10px 10px" href="<?php echo base_url() ?>admin/datamaster/provinsitambah"
        class="btn btn-s-md btn-success btn-rounded" ><i class="fa fa-plus"></i> Tambah Data Provinsi</a>

        <table class="table table-striped " id="datatable">
          <thead>
            <tr>
              <th width="130px">Aksi</th>
              <th>ID Provinsi</th>
              <th>Nama Provinsi</th>
            </tr>
          </thead>
          <tbody>
            <?php
                foreach($data->result_array() as $row){
                  echo "
                    <tr>
                      <td>
                      <a href='".base_url('admin/datamaster/provinsiedit?id_provinsi='.$row['id_provinsi'].'')."' class='btn btn-warning btn-xs' title='Edit'><i class='fa fa-edit'></i></a>
                      <button class='btn btn-danger btn-xs' data-toggle='modal' data-target='#".$row['id_provinsi']."'><i class='fa fa-trash-o'></i></button>
                      </td>
                      <td>".$row['id_provinsi']."</td>
                      <td>".$row['nama_provinsi']."</td>
                      </tr>
                      <div class='modal' id='".$row['id_provinsi']."' tabindex='-1' role='dialog'>
               <div class='modal-dialog' role='document'>
                 <div class='modal-content'>
                   <div class='modal-header bg-danger'>
                     <h4 class='modal-title'>Konfirmasi Hapus Data</h4>
                   </div>
                   <div class='modal-body'>
                     <b>Apakah yakin menghapus data?</b>
                   </div>
                   <div class='modal-footer'>
                     <a style='margin-left:5px' href='".base_url('admin/datamaster/provinsihapus?id_provinsi='.$row['id_provinsi'].'')."'><button type='button' class='btn btn-sm btn-danger'>Konfirmasi</button></a>
                     <button type='button' class='btn btn-secondary btn-sm' data-dismiss='modal'>Batal</button>
                   </div>
                 </div>
               </div>
             </div>
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
