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
              <h4 class="font-bold">Input Bayar Infaq</h4>
            </header>
            <div class="panel-body">
                <?php pesan_get('msg',"Berhasil Menambahkan Pembayaran","Gagal Menambahkan Pembayaran") ?>
                <form class="bs-example form-horizontal" data-validate="parsley" action="<?php echo base_url() ?>admin/datamaster/bayarinfaq" method="post">
                  <div class="form-group">
                    <label class="col-sm-2 control-label" for="input-id-1">Pilih Santri</label>
                    <div class="col-sm-8">
                      <select name="id_santri" id="id_santri" class="form-control chosen-select" data-required="true">
                        <option value="">-PILIH SANTRI-</option>
                        <?php foreach($daftarsantri->result_array() as $row):?>
                          <option value="<?php echo $row['nis_lokal'];?>"><?php echo $row['nama_lengkap'];?>&nbsp;|&nbsp;<?php echo $row['nis_lokal'];?></option>
                        <?php endforeach;?>
                      </select>
                    </div>
                  </div>
                  <div class='form-group'>
                    <label class="col-sm-2 control-label" for="input-id-1">Bulan</label>
                    <div class="col-sm-4">
                      <select type="text" class="form-control" name="bulan" data-required="true">
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
                    <label class="col-sm-1 control-label" for="input-id-1">Tahun</label>
                    <div class="col-sm-3">
                      <select class="form-control" name="tahun" data-required="true">
                        <?php
                          for($i = 2010 ; $i <= date('Y')+5; $i++){ ?>
                           <option value='<?php echo $i ?>' <?php if ($i == date('Y')) echo 'selected' ?>><?php echo $i ?></option>

                         <?php } ?>

                      </select>
                    </div>
                    <div class="col-sm-2">

                    </div>
                  </div>
                  </div>

                  <footer class="panel-footer text-right">
                    <a href="<?php echo base_url() ?>admin/datamaster/databayarinfaq"><button type="button" class="btn btn-s-xs btn-default"><i class="fa fa-list"></i> Data Pembayaran</button></a>
                    <button type="submit" class="btn btn-s-xs btn-info"><i class="fa fa-save"></i> Proses Pembayaran</button>
                  </footer>

            </div>

            </form>
          </section>
        </div>

          </div>
        </section>
      </section>
    </section>

  </section>
