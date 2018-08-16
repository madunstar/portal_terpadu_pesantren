<section id="content">
<section class="vbox">
  <section class="scrollable padder">
    <div class="m-b-md">
      <h3 class="m-b-none">Data Kota dan Kabupaten Indonesia</h3>
    </div>
    <section class="panel panel-default">
      <header class="panel-heading">
        Daftar Kota dan Kabupaten Indonesia
        <i class="fa fa-info-sign text-muted" data-toggle="tooltip" data-placement="bottom" data-title="ajax to load the data."></i>
      </header>
      <div class="table-responsive">
      <?php pesan_get('msg',"Berhasil Menghapus Data Kota dan Kabupaten","Gagal Menghapus Data Kota dan Kabupaten") ?>
      <a style="margin: 10px 0 10px 10px" href="<?php echo base_url() ?>admin/datamaster/kota_kabtambah"
        class="btn btn-s-md btn-success btn-rounded" ><i class="fa fa-plus"></i> Tambah Data Kota dan Kabupaten</a>

        <table class="table table-striped " id="datatable">
          <thead>
            <tr>
              <th width="130px">Aksi</th>
              <th>Nama Provinsi</th>
              <th>Nama Kota dan Kabupaten</th>
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
