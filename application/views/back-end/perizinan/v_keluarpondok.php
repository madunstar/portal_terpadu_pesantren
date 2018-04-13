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
              <?php pesan_get('msg',"Berhasil Menghapus Data Penjemput","Gagal Menghapus Data Penjemput") ?>
              <form class="bs-example form-horizontal" data-validate="parsley" action="<?php echo base_url('admin/perizinan/keluar')?>" method="post">
                <div class="form-group">
                      <div class="col-sm-10">
                        <input type="text"  class="form-control" name="nis_santri" id="nis_santri" placeholder="Nomor Induk Santri"  data-required="true">
                        <span class="text-danger" ></span>
                        <span class="text-success" ></span>
                      </div>
                      <div class="col-sm-2">

                        <input type="button" class="btn btn-sm btn-info" name="button" id="Lanjutkan" value="Lanjutkan"></a>
                      </div>
                </div>
                <div class="line line-dashed b-b line-lg pull-in"></div>
                <div class="form-group">
                    <label class="col-sm-1 control-label">Nama</label>
                      <div class="col-sm-5">
                        <input type="text"  class="form-control" name="nama_lengkap" id="nama_lengkap" placeholder="Nama" readonly/>
                      </div>
                      <label class="col-sm-1 control-label">Kelas</label>
                      <div class="col-sm-5">
                        <input type="text"  class="form-control" name="kelas" id="kelas" placeholder="Kelas" readonly/>
                      </div>
                </div>
                <div class="form-group">
                      <label class="col-sm-1 control-label">Nama Ayah</label>
                      <div class="col-sm-5">
                        <input type="text"  class="form-control" name="nama_lengkap_ayah" id="nama_lengkap_ayah" placeholder="Nama Ayah" readonly/>
                      </div>
                      <label class="col-sm-1 control-label">Nama Ibu</label>
                      <div class="col-sm-5">
                        <input type="text"  class="form-control" name="nama_lengkap_ibu" id="nama_lengkap_ibu" placeholder="Nama Ibu" readonly/>
                      </div>
                </div>
                <div class="form-group">
                      <label class="col-sm-1 control-label">Tanggal keluar</label>
                      <div class="col-sm-10">
                        <input type="text" class="input-sm input-s form-control" name="tanggal_keluar" id="tanggal_keluar" placeholder="Tanggal Keluar" readonly/>
                      </div>
                </div>
                <div class="form-group">
                      <label class="col-sm-1 control-label" for="input-id-1">Keperluan</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="keperluan" id="input-id-1" data-required="true">
                      </div>
                </div>
                  <div class="line line-dashed b-b line-lg pull-in"></div>
                  <p>Penjemput <span class="text-danger">(Optional)</span></p>

                          <div class="form-group">
                                <label class="col-sm-1 control-label" for="input-id-1">Pilih Penjemput</label>
                                <div class="col-sm-10">
                                  <select name="id_penjemput" id="id_penjemput" class="chosen-select form-control">
                                    <option value="" disabled <?php if (set_value('id_penjemput')=="") echo "selected" ?>>Pilih Penjemput</option>
                                    <option value="Baru">Memasukkan Data Penjemput Baru</option>
                                    <?php
                                      foreach($id_penjemput->result_array() as $row) {
                                        echo "<option value='".$row['id_penjemput']."' ".(set_value('id_penjemput')==$row['id_penjemput']?"selected":"").">".$row['no_identitas'].' - '.$row['nama_penjemput']."</option>";
                                      }
                                    ?>
                                  </select>
                                  <br><br>
                                  <a href='#' class='btn btn-danger btn-xs hapus' name='hapus' title='Hapus' id='hapus'><i class='fa fa-trash-o'></i> Hapus Penjemput</a>
                                </div>
                          </div>
                          <div class="form-group">
                                <label class="col-sm-1 control-label" for="input-id-1">Nomor Identitas</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" name="no_identitas" id="no_identitas">
                                </div>
                          </div>
                          <div class="form-group">
                                <label class="col-sm-1 control-label" for="input-id-1">Nama</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" name="nama_penjemput" id="nama_penjemput">
                                </div>
                          </div>
                          <div class="form-group">
                                <label class="col-sm-1 control-label" for="input-id-1">Nomor Telpon</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" name="no_telp" id="no_telp">
                                </div>
                          </div>
                          <div class="form-group">
                                <label class="col-sm-1 control-label" for="input-id-1">Alamat</label>
                                <div class="col-sm-10">
                                  <textarea name="alamat_penjemput" id="alamat_penjemput" rows="8" cols="100"></textarea>
                                </div>
                          </div>
                          <div class="form-group">
                                <label class="col-sm-1 control-label" for="input-id-1">Hubungan</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" name="hubungan_penjemput" id="hubungan_penjemput">
                                </div>
                          </div>
                  <footer class="panel-footer text-right">
                    <input class="btn btn-sm btn-info" type="submit" name="button" value="Proses Perizinan">
                  </footer>
            </form>
          </div>
          </section>
        </div>

          </div>
        </section>
      </section>
    </section>
