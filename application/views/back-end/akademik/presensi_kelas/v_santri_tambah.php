<link rel="stylesheet" href="<?php echo base_url('assets/js/chosen/chosen.css');?>" type="text/css" />
<form id="formtambahsantri" class="form-horizontal mb-lg">
<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">&times;</button>
  <h4 class="modal-title">Tambah Santri</h4>
</div>
<div class="modal-body">
    <?php 
      if ($lissantri->num_rows()>0) {
    ?>
      <div class="form-group mt-lg">
        <label class="col-sm-3 control-label">NIS Siswa</label>
        <div class="col-sm-8">
          <select id="nis_lokal" name="nis_lokal" class="form-control chosen-select">
          <?php
            foreach ($lissantri->result_array() as $row){
              echo "<option value='".$row['nis_lokal']."'>".$row['nis_lokal']." (".$row['nama_lengkap'].")</option>";
            }
          ?>
          </select>
        </div>
      </div>
      </div>
    <div class="modal-footer">
      <div class="row">
        <div class="col-md-12 text-right">  
        <button type="button" class="btn btn-primary modal-confirm" id="tambahsantriproses">Tambah</button>
          <button type="button" class="btn btn-default modal-dismiss" data-dismiss="modal">Batal</button>
        </div>
      </div>
    </div>
    <?php 
      } else {
    ?>
     <p align="center">Tidak Ada Santri</p>
    </div>
    <div class="modal-footer">
      <div class="row">
        <div class="col-md-12 text-right">  
          <button type="button" class="btn btn-default modal-dismiss" data-dismiss="modal">Batal</button>
        </div>
      </div>
    </div>
    <?php 
      } 
    ?>
   

</form>
  <!-- 
  <script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-2.2.3.min.js'?>"></script>

  <script src="<?php echo base_url('assets/js/bootstrap.js');?>"></script>
  
  <script src="<?php echo base_url('assets/js/app.js');?>"></script>
  <script src="<?php echo base_url('assets/js/slimscroll/jquery.slimscroll.min.js');?>"></script>
  <script src="<?php echo base_url('assets/js/chosen/chosen.jquery.min.js');?>"></script>
  <script src="<?php echo base_url('assets/js/app.plugin.js');?>"></script>
  <script src="<?php echo base_url('assets/js/file-input/bootstrap-filestyle.min.js');?>"></script>
  <script src="<?php echo base_url('assets/js/confirm/jquery-confirm.min.js');?>"></script>

  -->