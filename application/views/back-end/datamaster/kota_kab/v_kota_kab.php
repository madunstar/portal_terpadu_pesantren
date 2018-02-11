<section id="content">
<section class="vbox">
  <section class="scrollable padder">
    <div class="m-b-md">
      <h3 class="m-b-none">Data Kota dan Kabupaten Indonesia</h3>
    </div>
    <section class="panel panel-default">
      <header class="panel-heading">
        List Kota dan Kabupaten Indonesia
        <i class="fa fa-info-sign text-muted" data-toggle="tooltip" data-placement="bottom" data-title="ajax to load the data."></i>
      </header>
      <div class="table-responsive">
      <?php pesan_get('msg',"Berhasil Menghapus Data Kota dan Kabupaten","Gagal Menghapus Data Kota dan Kabupaten") ?>
      <a style="margin: 10px 0 10px 10px" href="<?php echo base_url() ?>admin/datamaster/kota_kabtambah"
        class="btn btn-s-md btn-success btn-rounded" ><i class="fa fa-plus"></i> Tambah data kota dan kabupaten</a>

        <table class="table table-striped " id="datatable">
          <thead>
            <tr>
              <th width="130px">Aksi</th>
              <th>Nama Provinsi</th>
              <th>Nama Kota dan Kabupaten</th>
            </tr>
          </thead>
          <tbody>
            <?php
                foreach($data->result_array() as $row){
                  echo "
                    <tr>
                      <td>
                      <a href='".base_url('admin/datamaster/kota_kabedit?id_kota_kab='.$row['id_kota_kab'].'')."' class='btn btn-warning btn-xs' title='Edit'><i class='fa fa-edit'></i></a>
                      <button class='btn btn-danger btn-xs' data-toggle='modal' data-target='#".$row['id_kota_kab']."'><i class='fa fa-trash-o'></i></button>
                      </td>
                      <td>".$row['nama_provinsi']."</td>
                      <td>".$row['nama_kota_kab']."</td>
                      </tr>
                      <div class='modal' id='".$row['id_kota_kab']."' tabindex='-1' role='dialog'>
               <div class='modal-dialog' role='document'>
                 <div class='modal-content'>
                   <div class='modal-header bg-danger'>
                     <h4 class='modal-title'>Konfirmasi Hapus Data</h4>
                   </div>
                   <div class='modal-body'>
                     <b>Apakah yakin menghapus data?</b>
                   </div>
                   <div class='modal-footer'>
                     <a style='margin-left:5px' href='".base_url('admin/datamaster/kota_kabhapus?id_kota_kab='.$row['id_kota_kab'].'')."'><button type='button' class='btn btn-sm btn-danger'>Konfirmasi</button></a>
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
