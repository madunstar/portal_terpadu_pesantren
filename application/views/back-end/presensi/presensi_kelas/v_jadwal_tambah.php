<link rel="stylesheet" href="<?php echo base_url('assets/js/chosen/chosen.css');?>" type="text/css" />
<form id="formtambahjadwal" class="form-horizontal mb-lg">
<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">&times;</button>
  <h4 class="modal-title">Tambah Jadwal Pelajaran Kelas Afilasi</h4>
</div>
<div class="modal-body">
<div class="form-group mt-lg">
        <label class="col-sm-3 control-label">Mata Pelajaran</label>
        <div class="col-sm-8">
          <select id="mata_pelajaran" name="mata_pelajaran" class="form-control chosen-select">
          <option value="Istirahat" >Istirahat</option>
          <?php
            foreach ($pelajaran->result_array() as $row){
              echo "<option value='".$row['id_pelajaran']."'>".$row['nama_mata_pelajaran']." | ".$row['nama_lengkap']."</option>";
            }
          ?>
          </select>
        </div>
      </div>
      <div class="form-group mt-lg">
        <label class="col-sm-3 control-label">Hari</label>
        <div class="col-sm-8">
          <select id="hari" name="hari" class="form-control">
              <option value="Senin">Senin</option>
              <option value="Selasa">Selasa</option>
              <option value="Rabu">Rabu</option>
              <option value="Kamis">Kamis</option>
              <option value="Jum'at">Jum'at</option>
              <option value="Sabtu">Sabtu</option>
              <option value="Ahad">Ahad</option>
          </select>
        </div>
      </div>
      <div class="form-group mt-lg">
        <label class="col-sm-3 control-label">Jam</label>
        <div class="col-sm-8">
          <select id="jam" name="jam" class="form-control">
          <?php
            foreach ($jam->result_array() as $row){
              echo "<option value='".$row['jam']."'>".$row['jam']."</option>";
            }
          ?>
          </select>
        </div>
      </div>
      </div>
    <div class="modal-footer">
      <div class="row">
        <div class="col-md-12 text-right">  
        <button type="button" class="btn btn-primary modal-confirm" id="tambahjadwalproses">Tambah</button>
          <button type="button" class="btn btn-default modal-dismiss" data-dismiss="modal">Batal</button>
        </div>
      </div>
    </div>
</form>
