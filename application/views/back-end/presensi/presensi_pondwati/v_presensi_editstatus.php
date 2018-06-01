<form id="formeditkelas" class="form-horizontal mb-lg">
<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">&times;</button>
  <h4 class="modal-title">Edit Status Kelas Belajar</h4>
</div>
<div class="modal-body">
      <div class="form-group mt-lg">
        <label class="col-sm-4 control-label">Status Kelas Belajar</label>
        <div class="col-sm-7">
         <input type="hidden" id="id_kelas_belajar" name="id_kelas_belajar" value="<?php echo $data['id_kelas_belajar'] ?>">
          <select id="status_kelas" name="status_kelas" class="form-control chosen-select">
            <option value="Aktif" <?php if ($data['status_kelas']=='Aktif') echo "selected" ?>>Aktif</option>
            <option value="Tidak Aktif" <?php if ($data['status_kelas']=='Tidak Aktif') echo "selected" ?>>Tidak Aktif</option>
          </select>
        </div>
      </div>
      </div>
    <div class="modal-footer">
      <div class="row">
        <div class="col-md-12 text-right">  
        <button type="button" class="btn btn-primary modal-confirm" id="editpondokanproses">Edit</button>
          <button type="button" class="btn btn-default modal-dismiss" data-dismiss="modal">Batal</button>
        </div>
      </div>
    </div>
   
</form>

