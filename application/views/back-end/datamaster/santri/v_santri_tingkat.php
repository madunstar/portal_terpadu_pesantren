<form id="formeditkelas" class="form-horizontal mb-lg">
<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">&times;</button>
  <h4 class="modal-title">Daftar Kelas</h4>
</div>
<div class="modal-body">
<table class="table" style="border:none">
<thead>
  <tr>
    <th>Kelas</th>
    <th>Jenjang</th>
    <th>Tingkat</th>
    <th>Tahun Ajaran</th>
  </tr>
</thead>
<tbody>
  <?php
      foreach($tingkat->result_array() as $row){
        {
          echo "<tr>
                  <td>".$row['nama_kelas_belajar']."</td>
                  <td>".$row['jenjang']."</td>
                  <td>".$row['tingkat']."</td>
                  <td>".$row['tahun_ajaran']."</td>
                </tr>";
        }
      }
  ?>
</tbody>
</table>
      </div>
    <div class="modal-footer">
      <div class="row">
        <div class="col-md-12 text-right"> 
          <button type="button" class="btn btn-default modal-dismiss" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
   
</form>

