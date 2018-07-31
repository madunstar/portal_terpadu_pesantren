<section id="content">
  <section class="vbox">

    <section class="scrollable padder">
      <div class="row m-b-md">
        <div class="col-sm-6">
          <h3 class="m-b-xs text-black">Dashboard</h3>
        </div>
      </div>
      <div class="row">
			<div class="col-sm-12">
			<section class="panel panel-default">
            <header class="panel-heading">
              <h4 class="font-bold">Data Perizinan Santri Terakhir</h4>
            </header>
            <div class="panel-body">
              <div class="table-responsive">
                <table class="table table-striped m-b-none" id="datacontoh">
                  <thead>
                    <tr>
                      <th width="20%">Nama</th>
                      <th width="25%">Kelas</th>
                      <th width="25%">Keperluan Izin</th>
                      <th>Tanggal Izin</th>

                    </tr>
                  </thead>
                  <tbody>
				  <?php foreach($datasantrikeluar->result_array() as $row){ ?>
                        <tr>
                          <td><?php echo $row['nama_lengkap'];?></td>
                          <td><?php echo $row['kelas'];?></td>
                          <td><?php echo $row['keperluan'];?></td>
                          <td><?php echo $row['tanggal_keluar'];?></td>
                        </tr>
					  <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="panel-footer text-right">
              <a href="<?php echo base_url()?>admin/datamaster/datakeluar" ><button class="btn btn-sm btn-info">Selengkapnya <span class="fa fa-arrow-circle-right"></span></button></a>
               </div>
			
			</div>
		  
		  <div class="col-sm-12">
          <section class="panel panel-default">
            <header class="panel-heading">
              <h4 class="font-bold">Data Perizinan Santriwati Terakhir</h4>
            </header>
            <div class="panel-body">
              <div class="table-responsive">
                <table class="table table-striped m-b-none" id="datacontoh">
                  <thead>
                    <tr>
                      <th width="20%">Nama</th>
                      <th width="25%">Kelas</th>
                      <th width="25%">Keperluan Izin</th>
                      <th>Tanggal Izin</th>

                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($datasantriwatikeluar->result_array() as $row){ ?>
                        <tr>
                          <td><?php echo $row['nama_lengkap'];?></td>
                          <td><?php echo $row['kelas'];?></td>
                          <td><?php echo $row['keperluan'];?></td>
                          <td><?php echo $row['tanggal_keluar'];?></td>
                        </tr>
					  <?php } ?>
                  </tbody>
                </table>
              </div>

            </div>
            <div class="panel-footer text-right">
              <a href="<?php echo base_url()?>admin/datamaster/datakeluarp" ><button class="btn btn-sm btn-info">Selengkapnya <span class="fa fa-arrow-circle-right"></span></button></a>
                </div>
			</section>
          </div>
		</div>
		<div class="row">
          <div class="col-sm-6">
            <section class="panel panel-default">
              <header class="panel-heading bg-light no-border">
                <div class="clearfix">
                  <a href="#" class="block padder-v hover"><span class="i-s i-s-2x pull-left m-r-sm"><i class="i i-hexagon2 i-s-base text-danger hover-rotate"></i><i class="fa fa-briefcase fa-briefcase i-sm text-white"></i></span><span class="clear">
                    <span class="h3 block m-t-xs text-danger">Total Santri Izin Keluar Pondok</span></span></a>
                  </div>
                </header>
                <div class="list-group no-radius alt">
                  <?php foreach($datatotalsantrikeluar->result_array() as $row){ ?>
                  <a class="list-group-item" href="#">
                    <span class="badge bg-warning"><?php echo $row['jumlah_bulan'];?></span>
                    <i class="fa fa-calendar icon-muted"></i>
                    <?php echo $row['tahun_bulan'];?>
                  </a>
				<?php } ?>


                </div>
                <div class="panel-footer text-right bg-muted">
                  <a href="<?php echo base_url()?>admin/datamaster/datakeluar" ><button class="btn btn-sm btn-info">Selengkapnya <span class="fa fa-arrow-circle-right"></span></button></a>
                </div>
           
            </div>
			
			<div class="col-sm-6">
			<section class="panel panel-default">
              <header class="panel-heading bg-light no-border">
                <div class="clearfix">
                  <a href="#" class="block padder-v hover"><span class="i-s i-s-2x pull-left m-r-sm"><i class="i i-hexagon2 i-s-base text-danger hover-rotate"></i><i class="fa fa-briefcase fa-briefcase i-sm text-white"></i></span><span class="clear">
                    <span class="h3 block m-t-xs text-danger">Total Santriwati Izin Keluar Pondok</span></span></a>
                  </div>
                </header>
                <div class="list-group no-radius alt">
				<?php foreach($datatotalsantriwatikeluar->result_array() as $row){ ?>
                  <a class="list-group-item" href="#">
                    <span class="badge bg-warning"><?php echo $row['jumlah_bulan'];?></span>
                    <i class="fa fa-calendar icon-muted"></i>
                    <?php echo $row['tahun_bulan'];?>
                  </a>
				<?php } ?>


                </div>
                <div class="panel-footer text-right bg-muted">
                  <a href="<?php echo base_url()?>admin/datamaster/datakeluarp" ><button class="btn btn-sm btn-info">Selengkapnya <span class="fa fa-arrow-circle-right"></span></button></a>
                </div>
              
            </div>
			
		<div class="col-sm-12">
              <section class="panel panel-default">
                <header class="panel-heading">
                  <h4 class="font-bold">Data Pembayaran Infaq SPP Santri terakhir</h4>
                </header>
                <div class="panel-body">
                  <div class="table-responsive">
                    <table class="table table-striped m-b-none" id="datacontoh">
                      <thead>
                        <tr>
                          <th width="20%">Nama</th>
                          <th width="25%">Kelas</th>
                          <th width="25%">Besar Pembayaran SPP</th>
                          <th>Tanggal Pembayar SPP</th>

                        </tr>
                      </thead>
                      <tbody>
					  <?php foreach($datasantrispp->result_array() as $row){ ?>
                        <tr>
                          <td><?php echo $row['nama_lengkap'];?></td>
                          <td><?php echo $row['kelas'];?></td>
                          <td>Rp <?php echo $row['besar_bayar'];?></td>
                          <td><?php echo $row['tanggal_bayar'];?></td>
                        </tr>
					  <?php } ?>
                      </tbody>
                    </table>
                  </div>

                </div>
                <div class="panel-footer text-right">
                  <a href="<?php echo base_url()?>admin/datamaster/databayarinfaq" ><button class="btn btn-sm btn-info">Selengkapnya <span class="fa fa-arrow-circle-right"></span></button></a>
                </div>
              
          </div>
			  
			  <div class="col-sm-12">
              <section class="panel panel-default">
                <header class="panel-heading">
                  <h4 class="font-bold">Data Pembayaran Infaq SPP Santriwati Terakhir</h4>
                </header>
                <div class="panel-body">
                  <div class="table-responsive">
                    <table class="table table-striped m-b-none" id="datacontoh">
                      <thead>
                        <tr>
                          <th width="20%">Nama</th>
                          <th width="25%">Kelas</th>
                          <th width="25%">Besar Pembayaran SPP</th>
                          <th>Tanggal Pembayaran SPP</th>

                        </tr>
                      </thead>
                      <tbody>
					  <?php foreach($datasantriwatispp->result_array() as $row){ ?>
                        <tr>
                          <td><?php echo $row['nama_lengkap'];?></td>
                          <td><?php echo $row['kelas'];?></td>
                          <td>Rp <?php echo $row['besar_bayar'];?></td>
                          <td><?php echo $row['tanggal_bayar'];?></td>
                        </tr>
					  <?php } ?>
                      </tbody>
                    </table>
                  </div>

                </div>
                <div class="panel-footer text-right">
                  <a href="<?php echo base_url()?>admin/datamaster/databayarinfaqp" ><button class="btn btn-sm btn-info">Selengkapnya <span class="fa fa-arrow-circle-right"></span></button></a>
                </div>
			 
          </div>
          
			
            <div class="col-sm-6">
              <section class="panel panel-default">
                <header class="panel-heading">
                  <h4 class="font-bold">Data Pembayaran Infaq Denda Santri terakhir</h4>
                </header>
                <div class="panel-body">
                  <div class="table-responsive">
                    <table class="table table-striped m-b-none" id="datacontoh">
                      <thead>
                        <tr>
                          <th width="20%">Nama</th>
                          <th width="25%">Kelas</th>
                          <th width="25%">Besar Pembayaran Denda</th>
                          <th>Tanggal Pembayaran Denda</th>

                        </tr>
                      </thead>
                      <tbody>
					  <?php foreach($datainfaqsantri->result_array() as $row){ ?>
                        <tr>
                          <td><?php echo $row['nama_lengkap'];?></td>
                          <td><?php echo $row['kelas'];?></td>
                          <td>Rp <?php echo $row['besar_bayar'];?></td>
                          <td><?php echo $row['tanggal_bayar'];?></td>
                        </tr>
					  <?php } ?>
                      </tbody>
                    </table>
                  </div>

                </div>
                <div class="panel-footer text-right">
                  <a href="<?php echo base_url()?>admin/datamaster/datadenda" ><button class="btn btn-sm btn-info">Selengkapnya <span class="fa fa-arrow-circle-right"></span></button></a>
                </div>
              
          </div>
			  
			  <div class="col-sm-6">
              <section class="panel panel-default">
                <header class="panel-heading">
                  <h4 class="font-bold">Data Pembayaran Infaq Denda Santriwati Terakhir</h4>
                </header>
                <div class="panel-body">
                  <div class="table-responsive">
                    <table class="table table-striped m-b-none" id="datacontoh">
                      <thead>
                        <tr>
                          <th width="20%">Nama</th>
                          <th width="25%">Kelas</th>
                          <th width="25%">Besar Pembayaran Denda</th>
                          <th>Tanggal Pembayaran Denda</th>

                        </tr>
                      </thead>
                      <tbody>
					  <?php foreach($datainfaqsantriwati->result_array() as $row){ ?>
                        <tr>
                          <td><?php echo $row['nama_lengkap'];?></td>
                          <td><?php echo $row['kelas'];?></td>
                          <td>Rp <?php echo $row['besar_bayar'];?></td>
                          <td><?php echo $row['tanggal_bayar'];?></td>
                        </tr>
					  <?php } ?>
                      </tbody>
                    </table>
                  </div>

                </div>
                <div class="panel-footer text-right">
                  <a href="<?php echo base_url()?>admin/datamaster/datadendap" ><button class="btn btn-sm btn-info">Selengkapnya <span class="fa fa-arrow-circle-right"></span></button></a>
                </div>
              </div>
            </div>
          </section>
        </section>
    
	  
	  </section>
    </section>
  </section>
