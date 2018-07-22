<section id="content">
  <section class="vbox">

    <section class="scrollable padder">
      <div class="row m-b-md">
        <div class="col-sm-6">
          <h3 class="m-b-xs text-black">Prestasi</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <section class="panel panel-default">

            <header class="panel-heading">
              <h4 class="font-bold">Data Prestasi <?php echo $santri['nama_lengkap']?> / <?php echo $santri['nis_lokal']?></h4>
            </header>
            <div class="panel-body">
              <?php pesan_get('msg',"Berhasil Menghapus Data Prestasi","Gagal Menghapus Data Prestasi") ?>
            <a href="<?php echo base_url() ?>admin/datamaster/tambahprestasi?nis=<?php echo $santri['nis_lokal']?>"><button type="button" name="button" class="btn btn-success btn-rounded"><i class="fa fa-plus"></i> Tambah Prestasi</button></a>
            <a style="margin: 10px 0 10px 0px" href="<?php echo base_url() ?>admin/datamaster/santri" class="btn btn-s-md btn-default btn-rounded" ><i class="fa fa-list"></i> List Santri</a>

              <div class="table-responsive">
                <table class="table table-striped m-b-none" id="datatable">
                  <thead>
                    <tr>
                      <th>Aksi</th>
                      <th >Prestasi</th>
                      <th >Tanggal Diperoleh</th>
                      <th >Jenis Prestasi</th>
                      <th>Keterangan</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                        foreach($data->result_array() as $row){
                          echo "
                            <tr>
                              <td>

                              <a href='".base_url('admin/datamaster/ubahprestasi?nis='.$row['nis_santri'].'&id='.$row['id_prestasi'].'')."' class='btn btn-warning btn-xs' title='Edit'><i class='fa fa-edit'></i></a>
                              <button class='btn btn-danger btn-xs' title='Hapus' data-toggle='modal' data-target='#".$row['id_prestasi']."'><i class='fa fa-trash-o'></i></button>
                              </td>
                              <td>".$row['prestasi']."</td>
                              <td>".$row['tanggal_prestasi']."</td>
                              <td>".$row['jenis_prestasi']."</td>
                              <td>".$row['keterangan']."</td>
                            </tr>
                            <div class='modal' id='".$row['id_prestasi']."' tabindex='-1' role='dialog'>
                             <div class='modal-dialog' role='document'>
                               <div class='modal-content'>
                                 <div class='modal-header bg-danger'>
                                   <h4 class='modal-title'>Konfirmasi Hapus Data</h4>
                                 </div>
                                 <div class='modal-body'>
                                   <b>Apakah yakin menghapus data?</b>
                                 </div>
                                 <div class='modal-footer'>
                                   <a style='margin-left:5px' href='".base_url('admin/datamaster/hapusprestasi?id='.$row['id_prestasi'].'&nis='.$row['nis_santri'].'')."'>
                                   <button type='button' class='btn btn-sm btn-danger'>Konfirmasi</button></a>
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

            </div>

          </div>
            </div>
          </section>
        </section>
      </section>
    </section>

  </section>
