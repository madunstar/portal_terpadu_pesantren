<section id="content">
<section class="vbox">
  <section class="scrollable padder">
    <div class="m-b-md">
      <h3 class="m-b-none">Data Kelurahan dan Desa Indonesia</h3>
    </div>
    <section class="panel panel-default">
      <header class="panel-heading">
        Data Kelurahan dan Desa Indonesia
        <i class="fa fa-info-sign text-muted" data-toggle="tooltip" data-placement="bottom" data-title="ajax to load the data."></i>
      </header>
      <div class="table-responsive">
      <?php pesan_get('msg',"Berhasil Menghapus Data Kelurahan dan Desa","Gagal Menghapus Data Kelurahan dan Desa") ?>
      <a style="margin: 10px 0 10px 10px" href="<?php echo base_url() ?>admin/datamaster/kel_desatambah"
        class="btn btn-s-md btn-success btn-rounded" ><i class="fa fa-plus"></i> Tambah Data Kelurahan dan Desa</a>

        <table class="table table-striped " id="datatable">
          <thead>
            <tr>
              <th width="130px">Aksi</th>
              <th>Nama Kelurahan dan Desa</th>
              <th>Nama Kecamatan</th>
              <th>Nama Kota dan Kabupaten</th>
              <th>Nama Provinsi</th>
            </tr>
          </thead>
          <tbody>
            
          </tbody>
        </table>
      </div>
    </section>
  </section>
</section>

</section>
