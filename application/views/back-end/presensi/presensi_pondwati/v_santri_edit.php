<link rel="stylesheet" href="<?php echo base_url('assets/js/chosen/chosen.css');?>" type="text/css" />

<form id="formeditsantri" class="form-horizontal mb-lg">
<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">&times;</button>
  <h4 class="modal-title">Edit Santri</h4>
</div>
<div class="modal-body">
    <?php 
      if ($lissantri->num_rows()>0) {
    ?>
      <div class="form-group mt-lg">
        <label class="col-sm-3 control-label">NIS Siswa</label>
        <div class="col-sm-8">
        <input type="hidden" id="id_kelas_santri" name="id_kelas_santri" value="<?php echo $data['id_kelas_santri'] ?>">
          <select id="nis_lokal" name="nis_lokal" class="form-control chosen-select">
          <?php
             echo "<option value='".$data['nis_lokal']."'>".$data['nis_lokal']." (".$data['nama_lengkap'].")</option>";
            foreach ($lissantri->result_array() as $row) {
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
        <button type="button" class="btn btn-primary modal-confirm" id="editsantriproses">Edit</button>
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

