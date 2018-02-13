<section id="content">
<section class="vbox">
  <section class="scrollable padder">
    <div class="m-b-md">
      <h3 class="m-b-none">Data Kelurahan dan Desa Indonesia</h3>
    </div>
    <section class="panel panel-default">
      <header class="panel-heading">
        Input Data Kelurahan dan Desa Indonesia
      </header>
      <div class="panel-body">
      <?php pesan_get('msg',"Berhasil Menambahkan Data Kelurahan dan Desa","Gagal Menambahkan Data Kelurahan dan Desa") ?>
       <form class="bs-example form-horizontal" data-validate="parsley" action="<?php echo base_url() ?>admin/datamaster/kel_desatambah" method="post">
       <a href="<?php echo base_url('admin/datamaster/kel_desa') ?>" style="color:#3b994a;margin-left:10px"><i class="fa fa-chevron-left"></i> Kembali</a>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label class="col-lg-4 control-label">Nama Kelurahan dan Desa</label>
              <div class="col-lg-8">
                <input type="text" class="form-control" name="nama_kel_desa" data-required="true" value="<?php echo set_value('nama_kel_desa'); ?>" />
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Nama Provinsi</label>
              <div class="col-lg-8">
                <select class="form-control"  name="id_provinsi" id="id_provinsi" data-required="true"/>
                <option value="">Pilih Provinsi</option>
                <?php foreach($data->result() as $row):?>
                  <option value="<?php echo $row->id_provinsi;?>"><?php echo $row->nama_provinsi;?></option>
                <?php endforeach;?>
              </select>
              </div>
            </div>
                <div class="form-group">
                    <label class="col-lg-4 control-label">Nama Kota dan Kabupaten</label>
                    <div class="col-lg-8">
                        <select name="id_kota_kab" id="id_kota_kab" class="id_kota_kab form-control" data-required="true">
                          <option value="">Pilih Kota dan Kabupaten</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-4 control-label">Nama Kecamatan</label>
                    <div class="col-lg-8">
                        <select name="id_kecamatan" class="id_kecamatan form-control" data-required="true">
                          <option value="">Pilih Kecamatan</option>
                        </select>
                    </div>
                </div>
        </div>
      </div>
      <footer class="panel-footer text-right bg-light lter">
        <button type="submit" class="btn btn-success btn-s-xs"><i class="fa fa-save"></i> Simpan</button>
        &nbsp
        <a href="<?php echo base_url('admin/datamaster/kel_desa') ?>" class="btn btn-default btn-s-xs"><i class="fa fa-list"></i> List Data Kelurahan dan Desa</a>
      </footer>
      </form>


      </div>
    </section>
  </section>
</section>

</section>
