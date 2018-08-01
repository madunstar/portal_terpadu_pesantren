<section id="content">
  <section class="vbox">

    <section class="scrollable padder">
      <div class="row m-b-md">
        <div class="col-sm-6">
          <h3 class="m-b-xs text-black">Kembali ke Pondok</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <section class="panel panel-default">
            <header class="panel-heading">
              <h4 class="font-bold">Tambah Data Santriwati Kembali ke Pondok</h4>
            </header>
            <div class="panel-body">
              <form class="bs-example form-horizontal" data-validate="parsley" action="<?php echo base_url();?>admin/perizinansantriwati/kembalidenda" method="post">
                  <div class="form-group">
                  <label class="col-sm-2 control-label" for="input-id-1">Pilih Santriwati</label>
                  <div class="col-sm-8">
                    <select name="id_keluar" id="id_keluar" class="form-control m-b chosen-select" data-required="true">
                      <option value="">-PILIH SANTRIWATI KELUAR-</option>
                      <?php foreach($santrikeluarlagi->result_array() as $row):?>
                        <option value="<?php echo $row['id_keluar'];?>"<?php if ($row['nis_santri']==$santrikeluar->nis_santri)  echo "selected" ?>><?php echo $row['nis_santri'];?></option>
                      <?php endforeach;?>
                    </select>
                  </div>
                  <div class="col-sm-2">
                    <button class="btn btn-sm btn-info">Lanjutkan&nbsp;<span class="fa fa-arrow-right custom"></span></button>
                    </div>
                </div>
              </form>
                <div class="line line-dashed b-b line-lg pull-in"></div>
                <form class="bs-example form-horizontal" data-validate="parsley" action="<?php echo base_url();?>admin/perizinansantriwati/tambahdatakembali" method="post">
                <div class="form-group">
                    <label class="col-sm-2 control-label">Nama</label>
                      <div class="col-sm-8" name="nama">
                        <input type="text"  class="form-control" value="<?php echo $santrikeluar->nama_lengkap;?>" readonly>
                        <input type="hidden"  class="form-control" name="id_keluar" value="<?php echo $santrikeluar->id_keluar;?>" readonly>
                      </div>

                </div>

                <div class="form-group">
                      <label class="col-sm-2 control-label">Tanggal keluar</label>
                      <div class="col-sm-8">
                        <input class="input-sm input-s  form-control" size="16" type="text" value="<?php echo $santrikeluar->tanggal_keluar;?>" readonly data-date-format="dd-mm-yyyy" >
                      </div>
                </div>
                <div class="form-group">
                      <label class="col-sm-2 control-label" for="input-id-1">Keperluan</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="input-id-1" value="<?php echo $santrikeluar->keperluan;?>" readonly>
                      </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="input-id-1">Penjemput</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="input-id-1" value="<?php echo $santrikeluar->nama_penjemput;?>" readonly>
                        </div>
                </div>

				<div class="form-group">
                      <label class="col-sm-2 control-label">Tanggal & Jam Kembali Seharusnya</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="input-id-1" value="<?php  echo $santrikeluar->harus_kembali;?>" readonly>
                      </div>
                </div>

                <div class="form-group">
                      <label class="col-sm-2 control-label">Tanggal & Jam Kembali Sekarang</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="input-id-1" name="tanggal_kembali" value="<?php  echo date("Y-m-d H:i:s")?>" readonly>
                      </div>
                </div>

                <div class="form-group">
                      <label class="col-sm-2 control-label text-danger">Besar Denda</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="input-id-1" name="total_denda" value="<?php echo "$totaldenda"?>" readonly >
                      </div>
                </div>



                  </div>

                  <footer class="panel-footer text-right">
                    <button class="btn btn-sm btn-info">Proses Kembali&nbsp;<span class="fa fa-check"></span></button>
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
