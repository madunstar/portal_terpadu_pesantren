<section id="content">
  <section class="vbox">

    <section class="scrollable padder">
      <div class="row m-b-md">
        <div class="col-sm-6">
          <h3 class="m-b-xs text-black">Informasi</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <section class="panel panel-info">
            <header class="panel-heading">

            </header>
            <div class="panel-body">
              <?php pesan_get('msg',"Berhasil Menghapus Data Informasi Pengumuman","Gagal Menghapus Data Informasi Pengumuman") ?>
              <a href="<?php echo base_url() ?>admin/pendaftaran/tambahpengumuman"><button type="button" name="button" class="btn btn-success">Tambah Informasi</button></a>

              <div class="table-responsive">

                <table class="table table-hover" id="datatable">
                  <thead>
                    <tr>
                      <th class="text-center">Informasi Seputar Pendaftaran</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                        foreach($data->result_array() as $row){
                          echo "
                            <tr>
                              <td>
                                <div class='pull-right text-primary'><small><i>".$row['tanggal_pengumuman']."</i></small></div>
                                <div class='h3 font-bold'>".$row['judul_pengumuman']."</div>
                                <div class='line line-dashed b-b line-lg pull-in'></div>
                                <div><p>".$row['isi_pengumuman']."</p></div>
                                <div class='line line-dashed b-b line-lg pull-in'></div>
                                <div class='pull-right'>
                                <a href = '../../admin/pendaftaran/editpengumuman?idpengumuman=".$row['id_pengumuman']."'><button class='btn btn-warning btn-sm'><i class='fa fa-edit'></i></button></a>
                                <a href = '../../admin/pendaftaran/deletepengumuman?idpengumuman=".$row['id_pengumuman']."'><button class='btn btn-danger btn-sm'><i class='fa fa-trash-o'></i></button></a>
                                <a target='__blank' href=".$row['link_pengumuman']."><button class='btn btn-primary btn-sm'>Buka Tautan&nbsp; <i class='fa fa-external-link'></i></button></a>
                                </div>
                              </td>
                            </tr>
                          ";
                        }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>

          </div>
          <div class="col-sm-6">
            </div>
            <div class="col-sm-6">

            </div>
          </section>
        </section>
      </section>
    </section>

  </section>
