<section id="content">
<section class="vbox">
  <section class="scrollable padder">
    <div class="m-b-md">
      <h3 class="m-b-none">Berkas Santriwati "<?php echo $santriwati['nama_lengkap'] ?> (<?php echo $santriwati['nis_lokal'] ?>)"</h3>
    </div>
    <section class="panel panel-default">
      <header class="panel-heading">
        Daftar Berkas Santriwati
        <i class="fa fa-info-sign text-muted" data-toggle="tooltip" data-placement="bottom" data-title="ajax to load the data."></i>
      </header>
      <div class="table-responsive">
      <a style="margin: 10px 0 10px 0px" href="<?php echo base_url() ?>admin/perizinansantriwati/santriwati" class="btn btn-s-md btn-default" ><i class="fa fa-list"></i> Daftar Santriwati</a>
        <table class="table table-striped " id="datatable">
          <thead>
            <tr>
              <th>Nama Berkas</th>
              <th width="120px">Berkas</th>
            </tr>
          </thead>
          <tbody>
            <?php
                foreach($data->result_array() as $row){
                  echo "
                    <tr>
                      <td>".$row['nama_berkas']."</td>
                      <td><a class='btn btn-default btn-xs' href='".base_url("assets/berkas/berkassantri/".$row['file_berkas']."")."' target='_blank'><i class='fa fa-download'></i> Unduh</a></td>
                    </tr>
                  ";
                }
            ?>
          </tbody>
        </table>
      </div>
    </section>
  </section>
</section>

</section>
