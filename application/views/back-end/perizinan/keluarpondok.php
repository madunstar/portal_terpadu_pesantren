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

              <form class="bs-example form-horizontal" data-validate="parsley" action="<?php echo base_url('admin/perizinan/keluar')?>" method="post">
                <div class="form-group">
                      <div class="col-sm-10">
                        <input type="text"  class="form-control" name="nis_santri" placeholder="Nomor Induk Santri"  data-required="true" value="<?php echo $data_santri['nis_lokal']; ?>">
                      </div>
                      <div class="col-sm-2">

                        <input type="submit" class="btn btn-sm btn-info" name="button" value="Lanjutkan"></a>
                      </div>
                </div>
                <div class="line line-dashed b-b line-lg pull-in"></div>
                <div class="form-group">
                    <label class="col-sm-1 control-label">Nama</label>
                      <div class="col-sm-5">
                        <input type="text"  class="form-control" name="nama_lengkap" placeholder="Nama" value="<?php echo $data_santri['nama_lengkap']; ?>" readonly/>
                      </div>
                      <label class="col-sm-1 control-label">Kelas</label>
                      <div class="col-sm-5">
                        <input type="text"  class="form-control" name="kelas" placeholder="Kelas" value="<?php echo $data_santri['jenis_sekolah_asal']; ?>" readonly/>
                      </div>
                </div>
                <div class="form-group">
                      <label class="col-sm-1 control-label">Nama Ayah</label>
                      <div class="col-sm-5">
                        <input type="text"  class="form-control" name="nama_lengkap_ayah" placeholder="Nama Ayah" value="<?php echo $data_santri['nama_lengkap_ayah']; ?>" readonly/>
                      </div>
                      <label class="col-sm-1 control-label">Nama Ibu</label>
                      <div class="col-sm-5">
                        <input type="text"  class="form-control" name="nama_lengkap_ibu" placeholder="Nama Ibu" value="<?php echo $data_santri['nama_lengkap_ibu']; ?>" readonly/>
                      </div>
                </div>
                <div class="form-group">
                      <label class="col-sm-1 control-label">Tanggal keluar</label>
                      <div class="col-sm-10">
                        <input class="input-sm input-s form-control" name="tanggal_keluar" type="text" value="<?php echo $tanggal_keluar; ?>" readonly/>
                      </div>
                </div>
                <div class="form-group">
                      <label class="col-sm-1 control-label" for="input-id-1">Keperluan</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="keperluan" id="input-id-1">
                      </div>
                </div>
                  <div class="line line-dashed b-b line-lg pull-in"></div>
                  <p>Penjemput <span class="text-danger">(Optional)</span></p>

                          <div class="form-group">
                                <label class="col-sm-1 control-label" for="input-id-1">Pilih Penjemput</label>
                                <div class="col-sm-10">
                                  <select name="id_penjemput" id="id_penjemput" class="form-control m-b" onchange="cek_database()">
                                    <option value="" disabled <?php if (set_value('id_penjemput')=="") echo "selected" ?>>Pilih Penjemput</option>
                                    <?php
                                      foreach($no_identitas->result_array() as $row) {
                                        echo "<option value='".$row['id_penjemput']."' ".(set_value('id_penjemput')==$row['id_penjemput']?"selected":"").">".$row['no_identitas'].' - '.$row['nama_penjemput']."</option>";
                                      }
                                    ?>
                                  </select>
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
