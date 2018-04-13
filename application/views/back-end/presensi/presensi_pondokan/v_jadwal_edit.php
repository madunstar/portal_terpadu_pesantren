<link rel="stylesheet" href="<?php echo base_url('assets/js/chosen/chosen.css');?>" type="text/css" />
<form id="formeditjadwal" class="form-horizontal mb-lg">
<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">&times;</button>
  <h4 class="modal-title">Tambah Jadwal Pelajaran Kelas Pondokan</h4>
</div>
<div class="modal-body">
      <div class="form-group mt-lg">
        <label class="col-sm-3 control-label">Mata Pelajaran</label>
        <div class="col-sm-8">
        <input type="hidden" name="id_jadwal" id="id_jadwal" value="<?php echo $data['id_jadwal'] ?>" />
          <select id="mata_pelajaran" name="mata_pelajaran" class="form-control chosen-select">
          <?php
            foreach ($pelajaran->result_array() as $row){
              echo "<option value='".$row['nama_mata_pelajaran']."' ".($data['mata_pelajaran']==$row['nama_mata_pelajaran']?"selected":"")."  >".$row['nama_mata_pelajaran']."</option>";
            }
          ?>
          </select>
        </div>
      </div>
     
          <input type="hidden" id="hari" name="hari" class="form-control" value="<?php echo $data['hari'] ?>">

      <div class="form-group mt-lg">
        <label class="col-sm-3 control-label">Jam</label>
        <div class="col-sm-8">
          <select id="jam" name="jam" class="form-control">
          <?php
            foreach ($jam->result_array() as $row){
              echo "<option value='".$row['jam']."' ".($data['jam']==$row['jam']?"selected":"")." >".$row['jam']."</option>";
            }
          ?>
          </select>
        </div>
      </div>
      <div class="form-group mt-lg">
        <label class="col-sm-3 control-label">Guru</label>
        <div class="col-sm-8">
          <select id="guru" name="guru" class="form-control chosen-select">
          <?php
            foreach ($guru->result_array() as $row){
              echo "<option value='".$row['nip_guru']."'  ".($data['nip']==$row['nip_guru']?"selected":"")."  >".$row['nama_lengkap']."</option>";
            }
          ?>
          </select>
        </div>
      </div>
      </div>
    <div class="modal-footer">
      <div class="row">
        <div class="col-md-12 text-right">  
        <button type="button" class="btn btn-primary modal-confirm" id="editjadwalproses">Edit</button>
          <button type="button" class="btn btn-default modal-dismiss" data-dismiss="modal">Batal</button>
        </div>
      </div>
    </div>
</form>