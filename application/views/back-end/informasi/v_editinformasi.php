<section id="content">
  <section class="vbox">

    <section class="scrollable padder">
      <div class="row m-b-md">
        <div class="col-sm-6">
          <h3 class="m-b-xs text-black">Informasi</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <section class="panel panel-info">
            <header class="panel-heading">
              <b>Ubah Informasi</b>
            </header>
            <div class="panel-body">
              <?php pesan_get('msg',"Berhasil Mengubah Data Informasi","Gagal Mengubah Data Informasi") ?>
               <form class="bs-example form-horizontal" data-validate="parsley"
                action="<?php echo base_url() ?>admin/datamaster/editinformasi?idpengumuman=<?php echo $data['id_pengumuman'];?>" method="post"
                onsubmit="getEditorContents(this);">
                 <a href="<?php echo base_url('admin/datamaster/informasi') ?>" style="color:#3b994a;margin-left:10px"><i class="fa fa-chevron-left"></i> Kembali</a>
                  <div class="row">
      							<div class="col-md-12">
      								<div class="form-group">
      									<label class="col-lg-2 control-label">Judul Informasi</label>
      									<div class="col-lg-4">
                          <input type="hidden" class="form-control" name="id_pengumuman" data-required="true" value="<?php echo $data['id_pengumuman']; ?>" />
      										<input type="text" class="form-control" name="judul_pengumuman" data-required="true" value="<?php echo $data['judul_pengumuman']; ?>"/>
      									</div>
      								</div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Tanggal Informasi</label>
                        <div class="col-sm-4">
                          <input class="datepicker-input form-control" size="16" type="text" data-date-format="yyyy-mm-dd"
                          name="tanggal_pengumuman" data-required="true"
                          value="<?php echo $data['tanggal_pengumuman']; ?>" readonly/>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-lg-2 control-label">Isi Informasi</label>
                        <div class="col-sm-10">
                          <textarea class="summernote" id="isi_pengumuman" name="isi_pengumuman"><?php echo $data['isi_pengumuman']; ?></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-lg-2 control-label">Tautan</label>
                        <div class="col-lg-8">
                          <input class="form-control" name="link_pengumuman" value="<?php echo $data['link_pengumuman']; ?>"/>
                        </div>
                      </div>
                      <div class="line line-dashed b-b line-lg pull-in"></div>
                      <div class="form-group">
                        <div class="col-lg-12">
                          <button type="submit" class=" pull-right btn btn-success btn-s-xs"><i class="fa fa-save"></i> Simpan</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <div class="col-sm-6">
            </div>
            <div class="col-sm-6">

            </div>
          </section>
        </section>
      </section>
    </section>

  </section>
