<section id="content">
  <section class="vbox">

    <section class="scrollable padder">
      <div class="row m-b-md">
        <div class="col-sm-6">
          <h3 class="m-b-xs text-black">Infaq Bulanan</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <section class="panel panel-default">
            <header class="panel-heading">
              <h4 class="font-bold">Data Infaq Bulanan Santri</h4>
            </header>
            <div class="panel-body">
              <?php pesan_get('msg',"Berhasil Menghapus Pembayaran","Gagal Menghapus Pembayaran") ?>

              <form class="bs-example form-horizontal" data-validate="parsley" action="<?php echo base_url();?>admin/datamaster/databayarinfaq" method="post">
              <div class='form-group'>
                <div class="col-sm-5">
                  <select type="text" class="form-control" name="bulan" >
                    <option value="01" <?php $b='01'; if ($b == $bulan) echo 'selected' ?>>Januari</option>
                    <option value="02" <?php $b='02'; if ($b == $bulan) echo 'selected' ?>>Februari</option>
                    <option value="03" <?php $b='03'; if ($b == $bulan) echo 'selected' ?>>Maret</option>
                    <option value="04" <?php $b='04'; if ($b == $bulan) echo 'selected' ?>>April</option>
                    <option value="05" <?php $b='05'; if ($b == $bulan) echo 'selected' ?>>Mei</option>
                    <option value="06" <?php $b='06'; if ($b == $bulan) echo 'selected' ?>>Juni</option>
                    <option value="07" <?php $b='07'; if ($b == $bulan) echo 'selected' ?>>Juli</option>
                    <option value="08" <?php $b='08'; if ($b == $bulan) echo 'selected' ?>>Agustus</option>
                    <option value="09" <?php $b='09'; if ($b == $bulan) echo 'selected' ?>>September</option>
                    <option value="10" <?php $b='10'; if ($b == $bulan) echo 'selected' ?>>Oktober</option>
                    <option value="11" <?php $b='11'; if ($b == $bulan) echo 'selected' ?>>November</option>
                    <option value="12" <?php $b='12'; if ($b == $bulan) echo 'selected' ?>>Desember</option>
                 </select>
                </div>
                <div class="col-sm-5">
                  <select class="form-control" name="tahun">
                    <?php
                      for($i = 2010 ; $i <= date('Y')+5; $i++){ ?>
                       <option value='<?php echo $i ?>' <?php if ($i == $tahun) echo 'selected' ?>><?php echo $i ?></option>

                     <?php } ?>

                  </select>
                </div>
                <div class="col-sm-2">
                  <button type="submit" class="btn btn-primary btn-block" name="button">Tampilkan Data</button>
                </div>
              </div>
            </form>
              <div class="table-responsive">
                <table class="table table-striped m-b-none" id="datatable">
                  <thead>
                    <tr>
                      <th>NIS</th>
                      <th>Nama</th>
                      <th>Besar Pembayaran</th>
                      <th>Tanggal Pembayaran</th>
                      <th>Petugas</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($data->result_array() as $row){
                      echo "
                      <tr>
                        <td>".$row['nis_lokal']."</td>
                        <td>".$row['nama_lengkap']."</td>
                        <td>".$row['besar_bayar']."</td>
                        <td>".$row['tanggal_bayar']."</td>
                        <td>".$row['petugas']."</td>
                        <td>
                        <a href='".base_url('admin/datamaster/detailinfaq?nis='.$row['nis_lokal'].'')."' class='btn btn-primary btn-xs' title='Lihat Detail'><i class='fa fa-eye'></i></a>
                        <button class='btn btn-danger btn-xs' data-toggle='modal' data-target='#".$row['id_pembayaran']."' title='hapus'><i class='fa fa-trash-o'></i></button>
                        </td>
                      </tr>
                      <div class='modal' id='".$row['id_pembayaran']."' tabindex='-1' role='dialog'>
                       <div class='modal-dialog' role='document'>
                         <div class='modal-content'>
                           <div class='modal-header bg-danger'>
                             <h4 class='modal-title'>Konfirmasi Hapus Data</h4>
                           </div>
                           <div class='modal-body'>
                             <b>Apakah yakin menghapus data?</b>
                           </div>
                           <div class='modal-footer'>
                             <a style='margin-left:5px' href='".base_url('admin/datamaster/hapusinfaq?id_infaq='.$row['id_pembayaran'].'')."'>
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
            <div class="panel-footer">
              <form class="bs-example form-horizontal" data-validate="parsley" action="<?php echo base_url();?>admin/datamaster/laporaninfaq" method="post">
              <input type="hidden" name="tahun_lap" value="<?php echo $tahun ?>">
              <input type="hidden" name="bulan_lap" value="<?php echo $bulan ?>">
              <button type="submit" name="button" class="btn btn-primary">Cetak Laporan <i class="fa fa-print"></i></button>

              </form>
            </div>

          </div>
            </div>
          </section>
        </section>
      </section>
    </section>

  </section>
