<section id="content">
<section class="vbox">
  <section class="scrollable padder">
    <div class="m-b-md">
      <h3 class="m-b-none">Data Pendidikan</h3>
    </div>
    <section class="panel panel-default">
      <header class="panel-heading">
        Ubah Data Pendidikan
      </header>
      <div class="panel-body">
      <?php pesan_get('msg',"Berhasil Mengubah Data Pendidikan","Gagal Mengubah Data Pendidikan") ?>
       <form class="bs-example form-horizontal" data-validate="parsley" action="<?php echo base_url() ?>admin/datamaster/pendidikanedit?id_pendidikan=<?php if (isset($id_pendidikanlama)) echo $id_pendidikanlama; else echo $data['id_pendidikan']; ?>" method="post">
       <a href="<?php echo base_url('admin/datamaster/pendidikan') ?>" style="color:#3b994a;margin-left:10px"><i class="fa fa-chevron-left"></i> Kembali</a>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label class="col-lg-4 control-label">ID Pendidikan</label>
              <div class="col-lg-8">
                <input type="text" class="form-control" name="id_pendidikan" data-required="true" value="<?php echo $data['id_pendidikan']; ?>" />
                <input type="hidden" class="form-control" name="id_pendidikanlama" data-required="true" value="<?php
                if (isset($id_pendidikanlama)) echo $id_pendidikanlama; else echo $data['id_pendidikan']; ?>" />
                <?php if(isset($id_pendidikan)) {
                         echo '<label style="color:red;font-size:10px">ID Pendidikan ada yang sama ! ID Pendidikan asal "'.$id_pendidikanlama.'"</label>';
                       }
                ?>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-4 control-label">Nama Pendidikan</label>
              <div class="col-lg-8">
                <input type="text" class="form-control"  name="nama_pendidikan" data-required="true"  value="<?php echo $data['nama_pendidikan']; ?>" />
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="panel-footer text-right bg-light lter">
      <button type="submit" class="btn btn-success btn-s-xs"><i class="fa fa-save"></i> Simpan</button>
      &nbsp
      <a href="<?php echo base_url() ?>admin/datamaster/pendidikanedit?id_pendidikan=<?php if (isset($id_pendidikanlama)) echo $id_pendidikanlama;
       else echo $data['id_pendidikan']; ?>" class="btn btn-default btn-s-xs"><i class="fa fa-refresh"></i > Atur Ulang</a>
      &nbsp
      <a href="<?php echo base_url('admin/datamaster/pendidikan') ?>" class="btn btn-default btn-s-xs"><i class="fa fa-list"></i> Daftar Data Pendidikan</a>
      </footer>
      </form>


      </div>
    </section>
  </section>
</section>

</section>
