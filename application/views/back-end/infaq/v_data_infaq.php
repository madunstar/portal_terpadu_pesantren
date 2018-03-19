<section id="content">
  <section class="vbox">

    <section class="scrollable padder">
      <div class="row m-b-md">
        <div class="col-sm-6">
          <h3 class="m-b-xs text-black">Infaq Bulanan</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <section class="panel panel-default">
            <header class="panel-heading">
              <h4 class="font-bold">Data Infaq Bulanan Santri</h4>
            </header>
            <div class="panel-body">

              <a href=""><button type="button" name="button" class="btn btn-success btn-rounded"><i class="fa fa-plus"></i> Tambah Data</button></a><br><br>
              <form class="bs-example form-horizontal" data-validate="parsley" action="<?php echo base_url();?>admin/perizinan/kembalidenda" method="post">
              <div class='form-group'>
                <div class="col-sm-5">
                  <select type="text" class="form-control" name="bulan" >
                    <option value="01">Januari</option>
                    <option value="02">Februari</option>
                    <option value="03">Maret</option>
                    <option value="04">April</option>
                    <option value="05">Mei</option>
                    <option value="06">Juni</option>
                    <option value="07">Juli</option>
                    <option value="08">Agustus</option>
                    <option value="09">September</option>
                    <option value="10">Oktober</option>
                    <option value="11">November</option>
                    <option value="12">Desember</option>
                 </select>
                </div>
                <div class="col-sm-5">
                  <select class="form-control" name="tahun">
                    <?php
                      for($i = 2000 ; $i <= date('Y'); $i++){ ?>
                       <option value='<?php echo $i ?>' <?php if ($i == date('Y')) echo 'selected' ?>><?php echo $i ?></option>

                     <?php } ?>

                  </select>
                </div>
                <div class="col-sm-2">
                  <button type="button" class="btn btn-primary btn-block" name="button">Tampilkan Data</button>
                </div>
              </div>
            </form>
              <div class="table-responsive">
                <table class="table table-striped m-b-none" id="datatable">
                  <thead>
                    <tr>
                      <th>NIS</th>
                      <th >Nama</th>
                      <th >Kelas</th>
                      <th >Tanggal Bayar</th>
                      <th>Aksi</th>

                    </tr>
                  </thead>
                  <tbody>
                    <td>111</td>
                    <td>aloo</td>
                    <td>SD</td>
                    <td>11-11-1022</td>
                    <td>
                      <button class='btn btn-primary btn-xs' data-toggle='modal' data-target='#".$row['id_bayar']."' title="detil"><i class='fa fa-search'></i></button>
                      <button class='btn btn-warning btn-xs' data-toggle='modal' data-target='#".$row['id_bayar']."' title="perbarui"><i class='fa fa-edit'></i></button>
                      <button class='btn btn-danger btn-xs' data-toggle='modal' data-target='#".$row['id_bayar']."' title="hapus"><i class='fa fa-trash-o'></i></button>
                    </td>
                  </tbody>
                </table>
              </div>

            </div>

          </div>
            </div>
          </section>
        </section>
      </section>
    </section>

  </section>
