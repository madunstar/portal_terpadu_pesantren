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
            <a href="<?php echo base_url() ?>admin/datamaster/tambahprestasi?nis=<?php echo $santri['nis_lokal']?>"><button type="button" name="button" class="btn btn-success btn-rounded"><i class="fa fa-plus"></i> Tambah Prestasi</button></a>
            <a style="margin: 10px 0 10px 0px" href="<?php echo base_url() ?>admin/datamaster/santri" class="btn btn-s-md btn-default" ><i class="fa fa-list"></i> List Santri</a>
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
                              <a href='".base_url('admin/datamaster/santrilihat?nis='.$row['nis_lokal'].'')."' class='btn btn-primary btn-xs' title='Lihat'><i class='fa fa-eye'></i></a>
                              <a href='".base_url('admin/datamaster/santriedit?nis='.$row['nis_lokal'].'')."' class='btn btn-warning btn-xs' title='Edit'><i class='fa fa-edit'></i></a>
                              <a href='#' class='btn btn-danger btn-xs hapus' title='Hapus' id='".$row['nis_lokal']."'><i class='fa fa-trash-o'></i></a>
                              </td>
                              <td>".$row['prestasi']."</td>
                              <td>".$row['tanggal_prestasi']."</td>
                              <td>".$row['jenis_prestasi']."</td>
                              <td>".$row['keterangan']."</td>
                            </tr>
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
