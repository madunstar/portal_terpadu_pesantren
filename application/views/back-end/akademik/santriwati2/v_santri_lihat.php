<section id="content">
<section class="vbox">
  <section class="scrollable padder">
    <div class="m-b-md">
      <h3 class="m-b-none">santriwati</h3>
    </div>
    <section class="panel panel-default">
      <header class="panel-heading">
        Lihat santriwati
      </header>
      <div class="panel-body">
      <?php pesan_get('msg',"Berhasil Menambahkan santriwati","Gagal Menambahkan santriwati") ?>
       <form class="bs-example form-horizontal" data-validate="parsley" action="<?php echo base_url() ?>admin/santriwatiakd/santritambah" method="post">
       <a href="<?php echo base_url('admin/santriwatiakd/santriwati') ?>" style="color:#3b994a;margin-left:10px"><i class="fa fa-chevron-left"></i> Kembali</a>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label class="col-lg-4 control-label">NIS</label>
              <div class="col-lg-8">
                <input type="text" class="form-control" name="nis_lokal" data-required="true" value="<?php echo $data['nis_lokal']; ?>" readonly/>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">NISN</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="nisn" data-required="true"  value="<?php echo $data['nisn']; ?>" readonly/>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">NIK</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="nik" data-required="true" value="<?php echo $data['nik']; ?>" readonly/>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Nama</label>
              <div class="col-lg-8">
                <input type="text" class="form-control" name="nama_lengkap" data-required="true" value="<?php echo $data['nama_lengkap']; ?>" readonly/>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Tempat Lahir</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="tempat_lahir" data-required="true" value="<?php echo $data['tempat_lahir']; ?>" readonly/>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Tanggal Lahir</label>
              <div class="col-lg-8">
              <input class="form-control" size="16" type="text" readonly name="tgl_lahir" data-required="true" value="<?php echo tanggal($data['tgl_lahir']); ?>" />
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Jenis Kelamin</label>
              <div class="col-lg-8">
                <select class="form-control"  name="jenis_kelamin" readonly/>
                  <option value="L" <?php if ($data['jenis_kelamin']=="L")  echo "selected" ?> >Laki-laki</option>
                  <option value="P" <?php if ($data['jenis_kelamin']=="P")  echo "selected" ?> >Perempuan</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Email</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="email_santri" value="<?php echo $data['email_santri']; ?>" readonly/>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Nomor HP</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="hp" value="<?php echo $data['hp']; ?>" readonly/>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Alamat Lengkap</label>
              <div class="col-lg-8">
                <textarea class="form-control"  name="alamat_lengkap" readonly><?php echo $data['alamat_lengkap']; ?></textarea>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Provinsi</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="provinsi" value="<?php echo $data['provinsi']; ?>" readonly/>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Kabupaten/Kota</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="kabupaten_kota" value="<?php echo $data['kabupaten_kota']; ?>" readonly/>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Kecamatan</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="kecamatan" value="<?php echo $data['kecamatan']; ?>" readonly/>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Desa/Kelurahan</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="desa_kelurahan" value="<?php echo $data['desa_kelurahan']; ?>" readonly/>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Kode Pos</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="kode_pos" value="<?php echo $data['kode_pos']; ?>" readonly/>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Hobi</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="hobi" value="<?php echo $data['hobi']; ?>" readonly/>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Cita-cita</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="cita_cita" value="<?php echo $data['cita_cita']; ?>" readonly/>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Jenis Sekolah Asal</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="jenis_sekolah_asal" value="<?php echo $data['jenis_sekolah_asal']; ?>" readonly/>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Status Sekolah Asal</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="status_sekolah_asal" value="<?php echo $data['status_sekolah_asal']; ?>" readonly/>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Nomor Peserta Ujian</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="nomor_peserta_ujian" value="<?php echo $data['nomor_peserta_ujian']; ?>" readonly/>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Jarak Ke Sekolah</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="jarak_ke_sekolah" value="<?php echo $data['jarak_ke_sekolah']; ?>" readonly/>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Alat Transportasi</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="alat_transportasi" value="<?php echo $data['alat_transportasi']; ?>" readonly/>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Status Tempat Tinggal</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="status_tempat_tinggal" value="<?php echo $data['status_tempat_tinggal']; ?>" readonly/>
              </div>
            </div>

          </div>
          <div class="col-md-6">
          <div class="form-group">
              <label class="col-lg-4 control-label">No Kartu Keluarga</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="no_kk" value="<?php echo $data['no_kk']; ?>" readonly/>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">NIK Ayah</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="nik_ayah" value="<?php echo $data['nik_ayah']; ?>" readonly/>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Nama Ayah</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="nama_lengkap_ayah" value="<?php echo $data['nama_lengkap_ayah']; ?>" readonly/>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Pendidikan Terakhir Ayah</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="pendidikan_terakhir_ayah" value="<?php echo $data['pendidikan_terakhir_ayah']; ?>" readonly/>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Pekerjaan Ayah</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="pekerjaan_ayah" value="<?php echo $data['pekerjaan_ayah']; ?>" readonly/>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Nomor HP Ayah</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="hpayah" value="<?php echo $data['hpayah']; ?>" readonly/>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">NIK Ibu</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="nik_ibu"value="<?php echo $data['nik_ibu']; ?>" readonly/>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Nama Ibu</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="nama_lengkap_ibu" value="<?php echo $data['nama_lengkap_ibu']; ?>" readonly/>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Pendidikan Terakhir Ibu</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="pendidikan_terakhir_ibu" value="<?php echo $data['pendidikan_terakhir_ibu']; ?>" readonly/>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Pekerjaan Ibu</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="pekerjaan_ibu" value="<?php echo $data['pekerjaan_ibu']; ?>" readonly/>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Nomor HP Ibu</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="hpibu" value="<?php echo $data['hpibu']; ?>" readonly/>
              </div>
              </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Penghasilan Orang Tua</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="penghasilan_orang_tua" value="<?php echo $data['penghasilan_orang_tua']; ?>" readonly/>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">NIK Wali</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="nik_wali" value="<?php echo $data['nik_wali']; ?>" readonly/>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Nama Wali</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="nama_lengkap_wali" value="<?php echo $data['nama_lengkap_wali']; ?>" readonly/>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Pendidikan Terakhir Wali</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="pendidikan_terakhir_wali" value="<?php echo $data['pendidikan_terakhir_wali']; ?>" readonly/>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Pekerjaan Wali</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="pekerjaan_wali" value="<?php echo $data['pekerjaan_wali']; ?>" readonly/>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Nomor HP Wali</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="hpwali" value="<?php echo $data['hpwali']; ?>" readonly/>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Penghasilan Wali</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="penghasilan_wali" value="<?php echo $data['penghasilan_wali']; ?>" readonly/>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Jumlah Saudara Kandung</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="jumlah_saudara_kandung" value="<?php echo $data['jumlah_saudara_kandung']; ?>" readonly/>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Kelas Pondokan</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="pondokan" value="<?php echo $data['pondokan']; ?>" readonly/>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Kelas Afilasi</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="kelas" value="<?php echo $data['kelas']; ?>" readonly/>
              </div>
            </div>
            <div class="form-group">
					  	<label class="col-sm-4 control-label"></label>
              <div class="col-sm-8">
                <?php if ($data['foto']=='') { ?>
                  <img src="<?php echo base_url()."assets/images/foto/"; ?>default.png" class="thumbnail" width="200px"/>
                <?php } else { ?>
                  <img src="<?php echo base_url()."assets/images/foto/".$data['foto']; ?>" class="thumbnail" width="200px"/>
                <?php } ?>
              </div>
			  	</div>

          </div>
        </div>

        <div class="row" style="margin:20px">
          <div class="col-md-6">

            <div class="tingkatanjenjang">
            <fieldset>
            <legend>Tingkat Kelas</legend>
                <table class="table table-striped ">
                <thead>
                  <tr>
                    <th>Kelas</th>
                    <th>Jenjang</th>
                    <th>Tingkat</th>
                    <th>Tahun Ajaran</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                      foreach($tingkat->result_array() as $row){
                        {
                          echo "<tr>
                                  <td>".$row['nama_kelas_belajar']."</td>
                                  <td>".$row['jenjang']."</td>
                                  <td>".$row['tingkat']."</td>
                                  <td>".$row['tahun_ajaran']."</td>
                                </tr>";
                        }
                      }
                  ?>
              </tbody>
              </table>
               </fieldset>
              </div>
          </div>

          <div class="col-md-6">

          <div class="tingkatanjenjang">
          <fieldset>
          <legend>Tingkat Kelas Pondokan</legend>
              <table class="table table-striped ">
              <thead>
                <tr>
                  <th>Kelas</th>
                  <th>Pondokan</th>
                  <th>Tingkat</th>
                  <th>Tahun Ajaran</th>
                </tr>
              </thead>
              <tbody>
                <?php
                    foreach($tingkatpondokan->result_array() as $row){
                      {
                        echo "<tr>
                                <td>".$row['nama_kelas_belajar']."</td>
                                <td>".$row['pondokan']."</td>
                                <td>".$row['tingkat']."</td>
                                <td>".$row['tahun_ajaran']."</td>
                              </tr>";
                      }
                    }
                ?>
            </tbody>
            </table>
             </fieldset>
            </div>
        </div>
        </div>

      </div>
      <footer class="panel-footer text-right bg-light lter">
      <a href="<?php echo base_url('admin/santriwatiakd/santriedit?nis=1') ?>" class="btn btn-success btn-s-xs"><i class="fa fa-edit"></i> Edit </a>
        &nbsp
        <a href="<?php echo base_url('admin/santriwatiakd/santriwati') ?>" class="btn btn-default btn-s-xs"><i class="fa fa-list"></i> List santriwati</a>
      </footer>
      </form>


      </div>
    </section>
  </section>
</section>

</section>
