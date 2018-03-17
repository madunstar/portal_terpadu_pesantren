<section id="content">
  <section class="vbox">
    <section class="scrollable padder">
      <div class="m-b-md">
        <h3 class="m-b-none">Mata Pelajaran</h3>
      </div>
      <section class="panel panel-default">
        <header class="panel-heading">
          Edit Data Mata Pelajaran
        </header>
        <div class="panel-body">
          <?php pesan_get('msg',"Berhasil Mengedit Data Mata Pelajaran","Gagal Mengedit Data Mata Pelajaran") ?>
          <form class="bs-example form-horizontal" data-validate="parsley" action="<?php echo base_url('admin/datamaster/matpeledit?kd_matpel='.$data['kd_matpel'].'') ?>"
            method="post">
            <a href="<?php echo base_url('admin/datamaster/matpel') ?>" style="color:#3b994a;margin-left:10px">
              <i class="fa fa-chevron-left"></i> Kembali</a>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="col-lg-4 control-label">Mata Pelajaran</label>
                    <div class="col-lg-8">
                      <input type="hidden" class="form-control" name="kd_matpel" data-required="true" value="<?php echo $data['kd_matpel']; ?>"/> 
                      <!-- biar mudah mengambil kode matpelnya -->
                      <input type="text" class="form-control" name="nama_matpel" data-required="true" value="<?php echo $data['nama_matpel']; ?>"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-lg-4 control-label">Tingkat</label>
                    <div class="col-lg-8">
                      <input type="text" class="form-control" name="tingkat_matpel" data-required="true" value="<?php echo $data['tingkat_matpel']; ?>"
                      />
                    </div>

                  </div>
                  
                </div>
              </div>
            </div>
            <footer class="panel-footer text-right bg-light lter">
              <button type="submit" class="btn btn-success btn-s-xs">
                <i class="fa fa-save"></i> Simpan</button>
                &nbsp
                <a href="<?php echo base_url('admin/datamaster/matpeledit?kd_matpel='.$data['kd_matpel'].'') ?>"
                  class="btn btn-default btn-s-xs">
                  <i class="fa fa-refresh"></i> Reset</a>
                  &nbsp
                  <a href="<?php echo base_url('admin/datamaster/matpel') ?>" class="btn btn-default btn-s-xs">
                    <i class="fa fa-list"></i> List Mata Pelajaran</a>
                  </footer>
                </form>


              </div>
            </section>
          </section>
        </section>

      </section>