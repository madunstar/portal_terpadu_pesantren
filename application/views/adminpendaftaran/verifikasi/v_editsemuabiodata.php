<?php 
  if (isset($_GET['l'])) {
    $l = $_GET['l'];
  } else {
    $l = "semuapendaftar";
  }
?>
<section id="content">
<section class="vbox">
  <section class="scrollable padder">
    <div class="m-b-md">
      <h3 class="m-b-none">Calon Santri</h3>
    </div>
    <section class="panel panel-default">
      <header class="panel-heading">
        Verifikasi Santri
      </header>
      <div class="panel-body">
      <?php pesan_get('msg',"Berhasil mengupdate biodata","Gagal mengupdate biodata") ?>
       <form class="bs-example form-horizontal"  action="<?php echo base_url() ?>admin/pendaftaran/semuabiodata?email=<?php echo $data['email_pendaftar'] ?>&l=<?php echo $l ?>" method="post">
       <a href="<?php echo base_url("admin/pendaftaran/$l") ?>" style="color:#3b994a;margin-left:10px"><i class="fa fa-chevron-left"></i> Kembali</a>
       <input type="hidden" value="<?php echo $data['email_pendaftar'] ?>" name="email_pendaftar" >
        <div class="row">
          <div class="col-md-6">
          <div class="form-group">
          <label class="col-lg-4 control-label">NIS</label>
          <div class="col-lg-8">
          <label class="control-label"><b><?php echo $data['nis_lokal']; ?></b></label>
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-4 control-label">NISN</label>
          <div class="col-lg-8">
            <label class="control-label"><b><?php echo $data['nisn']; ?></b></label>
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-4 control-label">NIK</label>
          <div class="col-lg-8">
            <label class="control-label"><b><?php echo $data['nik']; ?></b></label>
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-4 control-label">Nama</label>
          <div class="col-lg-8">
            <label class="control-label"><b><?php echo $data['nama_lengkap']; ?></b></label>
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-4 control-label">Tempat Lahir</label>
          <div class="col-lg-8">
            <label class="control-label"><b><?php echo $data['tempat_lahir']; ?></b></label>
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-4 control-label">Tanggal Lahir</label>
          <div class="col-lg-8">
            <label class="control-label"><b><?php echo $data['tgl_lahir']; ?></b></label>
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-4 control-label">Jenis Kelamin</label>
          <div class="col-lg-8">
           <label class="control-label"><b><?php  echo ($data['jenis_kelamin']=="L"?"Laki-laki":"Perempuan") ?></b></label>
          </div>
        </div>
        <div class="form-group">
        <label class="col-lg-4 control-label">Nomor HP</label>
        <div class="col-lg-8">
          <label class="control-label"><b><?php echo $data['hp']; ?></b></label>
        </div>
      </div>
      <div class="form-group">
        <label class="col-lg-4 control-label">Alamat Lengkap</label>
        <div class="col-lg-8">
          <label class="control-label"><b><?php echo $data['alamat_lengkap']; ?></b></label>
        </div>
      </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Provinsi</label>
              <div class="col-lg-8">
              <label class="control-label"><b><?php echo $data['provinsi']; ?></b></label>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Kabupaten/Kota</label>
              <div class="col-lg-8">
                <label class="control-label"><b><?php echo $data['kabupaten_kota']; ?></b></label>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Kecamatan</label>
              <div class="col-lg-8">
                <label class="control-label"><b><?php echo $data['kecamatan']; ?></b></label>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Desa/Kelurahan</label>
              <div class="col-lg-8">
                <label class="control-label"><b><?php echo $data['desa_kelurahan']; ?></b></label>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Kode Pos</label>
              <div class="col-lg-8">
                  <label class="control-label"><b><?php echo $data['kode_pos']; ?></b></label>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Hobi</label>
              <div class="col-lg-8">
                <label class="control-label"><b><?php echo $data['hobi']; ?></b></label>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Cita-cita</label>
              <div class="col-lg-8">
                <label class="control-label"><b><?php echo $data['cita_cita']; ?></b></label>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Jenis Sekolah Asal</label>
              <div class="col-lg-8">
                <label class="control-label"><b><?php echo $data['jenis_sekolah_asal']; ?></b></label>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Status Sekolah Asal</label>
              <div class="col-lg-8">
                <label class="control-label"><b><?php echo $data['status_sekolah_asal']; ?></b></label>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Nomor Peserta Ujian</label>
              <div class="col-lg-8">
               <label class="control-label"><b><?php echo $data['nomor_peserta_ujian']; ?></b></label>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Jarak Ke Sekolah</label>
              <div class="col-lg-8">
                <label class="control-label"><b><?php echo $data['jarak_ke_sekolah']; ?></b></label>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Alat Transportasi</label>
              <div class="col-lg-8">
                <label class="control-label"><b><?php echo $data['alat_transportasi']; ?></b></label>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Status Tempat Tinggal</label>
              <div class="col-lg-8">
                <label class="control-label"><b><?php echo $data['status_tempat_tinggal']; ?></b></label>
              </div>
            </div>

          </div>
          <div class="col-md-6">
          <div class="form-group">
              <label class="col-lg-4 control-label">No Kartu Keluarga</label>
              <div class="col-lg-8">
               <label class="control-label"><b><?php echo $data['no_kk']; ?></b></label>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">NIK Ayah</label>
              <div class="col-lg-8">
                <label class="control-label"><b><?php echo $data['nik_ayah']; ?></b></label>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Nama Ayah</label>
              <div class="col-lg-8">
                <label class="control-label"><b><?php echo $data['nama_lengkap_ayah']; ?></b></label>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Pendidikan Terakhir Ayah</label>
              <div class="col-lg-8">
              <label class="control-label"><b><?php echo $data['pendidikan_terakhir_ayah']; ?></b></label>

              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Pekerjaan Ayah</label>
              <div class="col-lg-8">
               <label class="control-label"><b><?php echo $data['pekerjaan_ayah']; ?></b></label>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Nomor HP Ayah</label>
              <div class="col-lg-8">
                <label class="control-label"><b><?php echo $data['hpayah']; ?></b></label>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">NIK Ibu</label>
              <div class="col-lg-8">
               <label class="control-label"><b><?php echo $data['nik_ibu']; ?></b></label>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Nama Ibu</label>
              <div class="col-lg-8">
               <label class="control-label"><b><?php echo $data['nama_lengkap_ibu']; ?></b></label>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Pendidikan Terakhir Ibu</label>
              <div class="col-lg-8">
              <label class="control-label"><b><?php echo $data['pendidikan_terakhir_ibu']; ?></b></label>

              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Pekerjaan Ibu</label>
              <div class="col-lg-8">
              <label class="control-label"><b><?php echo $data['pekerjaan_ibu']; ?></b></label>


              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Nomor HP Ibu</label>
              <div class="col-lg-8">
               <label class="control-label"><b><?php echo $data['hpibu']; ?></b></label>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Penghasilan Orang Tua</label>
              <div class="col-lg-8">
              <label class="control-label"><b><?php echo $data['penghasilan_orang_tua']; ?></b></label>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">NIK Wali</label>
              <div class="col-lg-8">
               <label class="control-label"><b><?php echo $data['nik_wali']; ?></b></label>

              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Nama Wali</label>
              <div class="col-lg-8">
               <label class="control-label"><b><?php echo $data['nama_lengkap_wali']; ?></b></label>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Pendidikan Terakhir Wali</label>
              <div class="col-lg-8">
                <label class="control-label"><b><?php echo $data['pendidikan_terakhir_wali']; ?></b></label>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Pekerjaan Wali</label>
              <div class="col-lg-8">
               <label class="control-label"><b><?php echo $data['pekerjaan_wali']; ?></b></label>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Nomor HP Wali</label>
              <div class="col-lg-8">
                <label class="control-label"><b><?php echo $data['hpwali']; ?></b></label>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Penghasilan Wali</label>
              <div class="col-lg-8">
               <label class="control-label"><b><?php echo $data['penghasilan_wali']; ?></b></label>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Jumlah Saudara Kandung</label>
              <div class="col-lg-8">
                <label class="control-label"><b><?php echo $data['jumlah_saudara_kandung']; ?></b></label>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Status Verifikasi</label>
              <div class="col-lg-8">
                 <select class="form-control" name="status_biodata">
                    <option value="tidak lengkap" <?php echo ($data['status_biodata']=="tidak lengkap"?"selected":""); ?> >tidak lengkap</option>
                    <option value="menunggu verifikasi" <?php echo ($data['status_biodata']=="menunggu verifikasi"?"selected":""); ?> >menunggu verifikasi</option>
                    <option value="diverifikasi" <?php echo ($data['status_biodata']=="diverifikasi"?"selected":""); ?> >diverifikasi</option>
                 </select>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="panel-footer text-right bg-light lter">
        <button type="submit" class="btn btn-success btn-s-xs"><i class="fa fa-save"></i> Simpan</button>
        
        <a href="<?php echo base_url("admin/pendaftaran/$l") ?>" class="btn btn-default btn-s-xs"><i class="fa fa-list"></i> Daftar Santri</a>
      </footer>
      </form>


      </div>
    </section>
  </section>
</section>

</section>
