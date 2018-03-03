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
              <h4 class="font-bold">Input Data Santri Keluar Pondok</h4>
            </header>
            <div class="panel-body">
              <form class="bs-example form-horizontal" data-validate="parsley" action="<?php echo base_url() ?>admin/datamaster/admintambah" method="post">
                <div class="form-group">
                      <div class="col-sm-10">
                        <input type="text"  class="form-control" placeholder="Nomor Induk Santri">
                      </div>
                      <div class="col-sm-2">
                        <button class="btn btn-sm btn-info">Lanjutkan&nbsp;<span class="fa fa-arrow-circle-right"></span></button>
                      </div>
                </div>
                <div class="line line-dashed b-b line-lg pull-in"></div>
                <div class="form-group">
                    <label class="col-sm-1 control-label">Nama</label>
                      <div class="col-sm-5">
                        <input type="text"  class="form-control" placeholder="Nama">
                      </div>
                      <label class="col-sm-1 control-label">Kelas</label>
                      <div class="col-sm-5">
                        <input type="text"  class="form-control" placeholder="Kelas">
                      </div>
                </div>
                <div class="form-group">
                      <label class="col-sm-1 control-label">Nama Ayah</label>
                      <div class="col-sm-5">
                        <input type="text"  class="form-control" placeholder="Nama Ayah">
                      </div>
                      <label class="col-sm-1 control-label">Nama Ibu</label>
                      <div class="col-sm-5">
                        <input type="text"  class="form-control" placeholder="Nama Ibu">
                      </div>
                </div>
                <div class="form-group">
                      <label class="col-sm-1 control-label">Tanggal keluar</label>
                      <div class="col-sm-10">
                        <input class="input-sm input-s datepicker-input form-control" size="16" type="text" value="" data-date-format="dd-mm-yyyy" >
                      </div>
                </div>
                <div class="form-group">
                      <label class="col-sm-1 control-label" for="input-id-1">Keperluan</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="input-id-1">
                      </div>
                </div>
                  <div class="line line-dashed b-b line-lg pull-in"></div>
                  <p>Penjemput <span class="text-danger">(Optional)</span></p>
                  <section class="panel panel-default">
                    <header class="panel-heading text-right bg-light">
                  <ul class="nav nav-tabs pull-left">
                        <li class="active"><a href="#baru" data-toggle="tab">Baru</a></li>
                        <li><a href="#lama" data-toggle="tab">Lama</a></li>

                  </ul>
                  <span class="hidden-sm">&nbsp;</span>
                </header>
                <div class="panel-body">

                  <div class="tab-content">
                        <div class="tab-pane active" id="baru">
                          <div class="form-group">
                                <label class="col-sm-1 control-label" for="input-id-1">Nama</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="input-id-1">
                                </div>
                          </div>
                          <div class="form-group">
                                <label class="col-sm-1 control-label" for="input-id-1">Nomor Telpon</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="input-id-1">
                                </div>
                          </div>
                          <div class="form-group">
                                <label class="col-sm-1 control-label" for="input-id-1">Alamat</label>
                                <div class="col-sm-10">
                                  <textarea name="name" rows="8" cols="100"></textarea>
                                </div>
                          </div>
                          <div class="form-group">
                                <label class="col-sm-1 control-label" for="input-id-1">Hubungan</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="input-id-1">
                                </div>
                          </div>

                        </div>
                        <div class="tab-pane" id="lama">
                          <div class="form-group">
                                <label class="col-sm-1 control-label" for="input-id-1">Nama</label>
                                <div class="col-sm-10">
                                  <select name="account" class="form-control m-b">
                                    <option>option 1</option>
                                    <option>option 2</option>
                                    <option>option 3</option>
                                    <option>option 4</option>
                                  </select>
                                </div>
                          </div>
                          <div class="form-group">
                                <label class="col-sm-1 control-label" for="input-id-1">Nomor Telpon</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="input-id-1">
                                </div>
                          </div>
                          <div class="form-group">
                                <label class="col-sm-1 control-label" for="input-id-1">Alamat</label>
                                <div class="col-sm-10">
                                  <textarea name="name" rows="8" cols="100"></textarea>
                                </div>
                          </div>
                          <div class="form-group">
                                <label class="col-sm-1 control-label" for="input-id-1">Hubungan</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="input-id-1">
                                </div>
                          </div>
                        </div>
                      </div>
                </section>

                  </div>

                  <footer class="panel-footer text-right">
                    <button class="btn btn-sm btn-info">Proses Perizinan&nbsp;<span class="fa fa-check"></span></button>
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
