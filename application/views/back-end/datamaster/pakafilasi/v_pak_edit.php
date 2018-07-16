<section id="content">
  <section class="vbox">
    <section class="scrollable padder">
      <div class="m-b-md">
        <h3 class="m-b-none">Pak</h3>
      </div>
      <section class="panel panel-default">
        <header class="panel-heading">
          Jadwal
        </header>
        <div class="panel-body">
          <?php pesan_get('msg',"Berhasil Mengedit Data Kelas","Gagal Mengedit Data Kelas") ?>
          <form class="bs-example form-horizontal" data-validate="parsley" action="<?php echo base_url('admin/datamaster/pakafilasiedit?id='.$data['id'].'') ?>"
            method="post">
            <a href="<?php echo base_url('admin/datamaster/pakafilasi') ?>" style="color:#3b994a;margin-left:10px">
              <i class="fa fa-chevron-left"></i> Kembali</a>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="col-lg-4 control-label">Pak</label>
                    <div class="col-lg-8">
                      <input type="hidden" class="form-control" name="id" data-required="true" value="<?php echo $data['id']; ?>"/>
                      <!-- biar mudah mengambil kode kelasnya -->
                      <input type="text" class="form-control" name="pak" data-required="true" value="<?php echo $data['pak']; ?>"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-lg-4 control-label">Tingkat Kelas</label>
                    <div class="col-lg-8">
                      <input type="time" class="form-control" name="jam" data-required="true" value="<?php echo $data['jam']; ?>"
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
                <a href="<?php echo base_url('admin/datamaster/pakafilasiedit?id='.$data['id'].'') ?>"
                  class="btn btn-default btn-s-xs">
                  <i class="fa fa-refresh"></i> Reset</a>
                  &nbsp
                  </footer>
                </form>


              </div>
            </section>
          </section>
        </section>

      </section>
