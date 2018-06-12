<script>

    $('#datatable').DataTable({
        "bStateSave"    : true,
        "ajax"          : {
                            url :"<?php echo base_url(); ?>admin/santriwatiakd/datakelasbelawatiajax", // json datasource
                            type: "post",  // method  , by default get
                            error: function(){  // error handling
                                $(".employee-grid-error").html("");
                                $("#employee-grid").append('<tbody class="employee-grid-error"><tr><th colspan="3">No data found in the server</th></tr></tbody>');
                                $("#employee-grid_processing").css("display","none");
                            }
                        },
        "processing"    : true,
        "serverSide"    : true,
        "columnDefs"    : [
                            { "orderable": false, "targets": [0]
                            }
                        ],
						
		"responsive": true,
        "fnDrawCallback": function(oSettings){

   $(".hapus").click(function (e) {
    var v_id = this.id;
    $.confirm({
        title: 'Hapus!',
        content: 'Yakin ingin menghapus ?',
        buttons: {
            hapus: {
                text: 'Hapus',
                btnClass: 'btn-green',
                action: function(){
                    window.location.assign("<?php echo base_url() ?>admin/santriwatiakd/hapuskelasbelawati?id="+v_id);
                }
            },
            batal: function () {

            }

        }
        });
    });

    
    $(".edit").click(function(e) {
        var v_url = "<?php echo base_url() ?>admin/santriwatiakd/kelaseditbelawati";
        var v_id = this.id;
        $.ajax({
				type: 'POST',
				url: v_url,
				data: {
                        id : v_id
                      },
				beforeSend: function () {
					$("#loading").show();
				},
				success: function (response) {
					$("#loading").hide();
					$('#modal-edit').html(response)
				},
                complete: function () {
                    $('#editkelasproses').click(function (e) {
                        var v_url = "<?php echo base_url() ?>admin/santriwatiakd/editkelasproseswati";
                        var v_status_kelas = $('#status_kelas').val();
                        var v_id_kelas_belajar = $('#id_kelas_belajar').val();
                        $.ajax({
                            type: 'POST',
                            url: v_url,
                            data: {
                                id_kelas_belajar: v_id_kelas_belajar,
                                status_kelas: v_status_kelas,
                            },
                            beforeSend: function () {
                                $("#loading").show();
                            },
                            error: function (xhr, status, error) {
                                $("#loading").hide();
                            },
                            success: function (response) {
                             
                                window.location.assign("<?php echo base_url() ?>admin/santriwatiakd/datakelasbelawati?ed=1")
                            }
                        });

					});
                }
            });
       
    });

   
}
   });
   $('#jenjang').change(function(){
        var id=$(this).val();
        $.ajax({
            url : "<?php echo base_url();?>admin/santriwatiakd/datatingkatjenjang",
            method : "POST",
            data : {jenjang: id},
            async : false,
            dataType : 'json',
            success: function(data){
                var html ='<option value="" disabled selected>.: Pilih Tingkatan :.</option>';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<option value="'+data[i].tingkat+'">'+data[i].tingkat+'</option>';
                    }
                    $('#tingkatan').html(html);

            }
        });
    });

</script>
