<section id="content">
<section class="vbox">
  <section class="scrollable padder">
    <div class="m-b-md">
      <h3 class="m-b-none">Data Alat Transportasi</h3>
    </div>
    <section class="panel panel-default">
      <header class="panel-heading">
        Edit Data Alat Transportasi
      </header>
      <div class="panel-body">
      <?php pesan_get('msg',"Berhasil Mengedit Data Alat Transportasi","Gagal Mengedit Data Alat Transportasi") ?>
       <form class="bs-example form-horizontal" data-validate="parsley" action="<?php echo base_url() ?>admin/datamaster/alat_transportasiedit?id_alat_transportasi=<?php if (isset($id_alat_transportasilama)) echo $id_alat_transportasilama; else echo $data['id_alat_transportasi']; ?>" method="post">
       <a href="<?php echo base_url('admin/datamaster/alat_transportasi') ?>" style="color:#3b994a;margin-left:10px"><i class="fa fa-chevron-left"></i> Kembali</a>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label class="col-lg-4 control-label">ID Alat Transportasi</label>
              <div class="col-lg-8">
                <input type="text" class="form-control" name="id_alat_transportasi" data-required="true" value="<?php echo $data['id_alat_transportasi']; ?>" />
                <input type="hidden" class="form-control" name="id_alat_transportasilama" data-required="true" value="<?php
                if (isset($id_alat_transportasilama)) echo $id_alat_transportasilama; else echo $data['id_alat_transportasi']; ?>" />
                <?php if(isset($id_alat_transportasi)) {
                         echo '<label style="color:red;font-size:10px">ID Alat Transportasi ada yang sama ! ID Alat Transportasi asal "'.$id_alat_transportasilama.'"</label>';
                       }
                ?>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Nama Alat Transportasi</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="nama_alat_transportasi" data-required="true"  value="<?php echo $data['nama_alat_transportasi']; ?>" />
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="panel-footer text-right bg-light lter">
      <button type="submit" class="btn btn-success btn-s-xs"><i class="fa fa-save"></i> Simpan</button>
      &nbsp
      <a href="<?php echo base_url() ?>admin/datamaster/alat_transportasiedit?id_alat_transportasi=<?php if (isset($id_alat_transportasilama)) echo $id_alat_transportasilama;
       else echo $data['id_alat_transportasi']; ?>" class="btn btn-default btn-s-xs"><i class="fa fa-refresh"></i > Reset</a>
      &nbsp
      <a href="<?php echo base_url('admin/datamaster/alat_transportasi') ?>" class="btn btn-default btn-s-xs"><i class="fa fa-list"></i> List Data Alat Transportasi</a>
      </footer>
      </form>


      </div>
    </section>
  </section>
</section>

</section>
