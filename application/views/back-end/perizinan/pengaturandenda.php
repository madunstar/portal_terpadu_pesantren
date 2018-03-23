<section id="content">
  <section class="vbox">

    <section class="scrollable padder">
      <div class="row m-b-md">
        <div class="col-sm-6">
          <h3 class="m-b-xs text-black">Atur Besar Denda Santri Kembali</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <section class="panel panel-default">
            <header class="panel-heading">
              <h4 class="font-bold">Update Data Besar Denda Santri Kembali</h4>
            </header>
            <div class="panel-body">
              <?php pesan_get('msg',"Berhasil Mengupdate Data Aturan Denda","Password Anda Salah","Password Anda Tidak Cocok") ?>
                <form class="bs-example form-horizontal" data-validate="parsley" action="<?php echo base_url();?>admin/perizinan/updateaturdenda" method="post">
                <div class="line line-dashed b-b line-lg pull-in"></div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Denda Per Jam</label>
                      <div class="col-sm-8" >
                        <input type="text"  name="dendajam" class="form-control" value="<?php echo $datadenda->denda_perjam;?>" >
                      </div>
                      </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Denda Maksimal</label>
                    <div class="col-sm-8" >
                      <input type="text"  name="dendamaks" class="form-control" value="<?php echo $datadenda->denda_maks;?>" >
                    </div>
                    </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Password</label>
                    <div class="col-sm-8" >
                      <input name="password" data-required="true" type="password" class="form-control"  >
                    </div>
                    </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Ulangi Password</label>
                    <div class="col-sm-8" >
                      <input name="password2" data-required="true" type="password" class="form-control"  >
                    </div>
                    </div>

                  <footer class="panel-footer text-right">
                    <button class="btn btn-sm btn-info" >Update Data Denda&nbsp;<span class="fa fa-check"></span></button>
                  </footer>

            </div>
          </div>
        </div>
            </form>
          </section>
        </div>

          </div>
        </section>
      </section>
    </section>

  </section>
