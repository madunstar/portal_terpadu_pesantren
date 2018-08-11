<section id="content">
  <section class="vbox">

    <section class="scrollable padder">
      <div class="row m-b-md">
        <div class="col-sm-6">
          <h3 class="m-b-xs text-black">Keluar Pondok</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <section class="panel panel-default">
            <header class="panel-heading">
              <h4 class="font-bold">Data Santri Keluar Pondok</h4>
            </header>
            <div class="panel-body">
            <a href="<?php echo base_url() ?>admin/datamaster/keluar"><button type="button" name="button" class="btn btn-success btn-rounded"><i class="fa fa-plus"></i> Buat Perizinan Keluar</button></a>
              <div class="table-responsive">
                <?php pesan_get('msg',"Berhasil Menghapus Izin Keluar","Gagal Menghapus Izin Keluar") ?>
                <table class="table table-striped" id="datatable">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>Tanggal Keluar</th>
                      <th>Tanggal Rencana Kembali</th>
                      <th>Status Keluar</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      $i = 1;
                      foreach($data->result_array() as $row){
                        echo "
                          <tr class='rowData'>
                            <td>".$i."</td>
                            <td>".$row['nama_lengkap']."</td>
                            <td>".$row['tanggal_keluar']."</td>
                            <td>".$row['harus_kembali']."</td>
                            <td>".$row['status_keluar']."</td>
                            <td>
                              <button class='btn btn-primary btn-xs lihat'  title='Lihat' id='".$row['id_keluar']."' data-toggle='modal' data-target='#myModaledit'><i class='fa fa-eye'></i></button>
                              <a href='".base_url('admin/datamaster/cetak_suratizin?id='.$row['id_keluar'].'')."' class='btn btn-info btn-xs' title='Cetak Surat Izin'><i class='fa fa-print'></i></a>
                              <a href='#' class='btn btn-danger btn-xs hapusizin' title='Hapus' id='".$row['id_keluar']."'><i class='fa fa-trash-o'></i></a>
                            </td>
                            </tr>
                        ";$i++;
                      }
                  ?>
                  </tbody>
                </table>
              </div>

            </div>

            <div class="panel-footer">
              <button type="button" data-toggle='modal' data-target='#cetaklap' name="button" class="btn btn-primary">Cetak Laporan <i class="fa fa-print"></i></button>
              <div class='modal' id='cetaklap' tabindex='-1' role='dialog'>
                <form class='form-horizontal' role='form' data-validate='parsley' action='<?php echo base_url() ?>admin/datamaster/laporankeluar' method='post'>
                 <div class='modal-dialog' role='document'>
                   <div class='modal-content'>
                     <div class='modal-header bg-primary'>
                       <h4 class='modal-title'>Cetak Laporan</h4>
                     </div>
                     <div class='modal-body'>
                       <div class='form-group'>
                         <div class="col-sm-6">
                           <select type="text" class="form-control" name="bulan" >
                             <option value="01">Januari</option>
                             <option value="02">Februari</option>
                             <option value="03">Maret</option>
                             <option value="04">April</option>
                             <option value="05">Mei</option>
                             <option value="06">Juni</option>
                             <option value="07">Juli</option>
                             <option value="08">Agustus</option>
                             <option value="09">September</option>
                             <option value="10">Oktober</option>
                             <option value="11">November</option>
                             <option value="12">Desember</option>
                          </select>
                         </div>
                         <div class="col-sm-6">
                           <select class="form-control" name="tahun">
                             <?php
                               for($i = 2000 ; $i <= date('Y'); $i++){ ?>
                                <option value='<?php echo $i ?>' <?php if ($i == date('Y')) echo 'selected' ?>><?php echo $i ?></option>

                              <?php } ?>

                           </select>

                         </div>
                       </div>
                     <div class='modal-footer'>
                       <button type='submit' class='btn btn-sm btn-success'>Cetak <i class="fa fa-print"></i></button>
                       <button type='button' class='btn btn-sm btn-default' data-dismiss='modal'>Batal</button>
                     </div>
                   </div>
                 </div>
                  </div>
                </form>
              </div>
            </div>

          </div>
            </div>
          </section>
        </section>
      </section>
    </section>

  </section>

  <div id="myModaledit" class="modal fade" role="dialog">
  	<div class="modal-dialog modal-lg" id="modal-dialog">
  		<!-- Modal content-->
  		<div class="modal-content" id="modal-edit">
  			<div class="modal-body">
  			</div>
  		</div>
  	</div>
  </div>
