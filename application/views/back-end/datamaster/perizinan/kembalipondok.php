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
              <h4 class="font-bold">Input Data Santri Kembali ke Pondok</h4>
            </header>
            <div class="panel-body">

                <form class="bs-example form-horizontal" data-validate="parsley" action="<?php echo base_url();?>admin/datamaster/kembalidenda" method="post">
                <div class="form-group">
                  <label class="col-sm-2 control-label" for="input-id-1">Pilih Santri</label>
                  <div class="col-sm-8">
                    <select name="id_keluar" id="id_keluar" class="form-control chosen-select" data-required="true">
                      <option value="">-PILIH SANTRI KELUAR-</option>
                      <?php foreach($santrikeluar->result_array() as $row):?>
                        <option value="<?php echo $row['id_keluar'];?>"><?php echo $row['nis_santri'];?></option>
                      <?php endforeach;?>
                    </select>
                  </div>
                      <div class="col-sm-2">
                        <button type="submit" nama="submit" class="btn btn-sm btn-info">Lanjutkan&nbsp;<span class="fa fa-arrow-right custom"></span></button>
                        </div>
                </div>
              </form>
                <form class="bs-example form-horizontal" data-validate="parsley" action="" method="post">
                <div class="line line-dashed b-b line-lg pull-in"></div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Nama</label>
                      <div class="col-sm-8" name="nama">
                        <input type="text"  class="form-control" value="" readonly>
                      </div>
                      </div>



                <div class="form-group">
                      <label class="col-sm-2 control-label">Tanggal keluar</label>
                      <div class="col-sm-8">
                        <input class="input-sm input-s form-control" size="16" type="text"  readonly data-date-format="dd-mm-yyyy" >
                      </div>
                </div>
                <div class="form-group">
                      <label class="col-sm-2 control-label" for="input-id-1">Keperluan</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="input-id-1" readonly >
                      </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="input-id-1">Penjemput</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="input-id-1" readonly >
                        </div>
                </div>
                <div class="form-group">
                      <label class="col-sm-2 control-label">Tanggal & Jam Kembali Seharusnya</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="input-id-1" readonly >
                      </div>
                </div>

				<div class="form-group">
                      <label class="col-sm-2 control-label">Tanggal & Jam Kembali Sekarang</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="input-id-1" readonly >
                      </div>
                </div>

                <div class="form-group">
                      <label class="col-sm-2 control-label text-danger">Besar Denda</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="input-id-1" readonly>
                      </div>
                </div>
                  </div>

                  <footer class="panel-footer text-right">
                    <button class="btn btn-sm btn-info" disabled>Proses Kembali&nbsp;<span class="fa fa-check"></span></button>
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
