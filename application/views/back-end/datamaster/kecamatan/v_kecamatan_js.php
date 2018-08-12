<script>

     $('#datatable').DataTable({
        "bStateSave"    : true,
        "ajax"          : {
                            url :"<?php echo base_url(); ?>admin/datamaster/kecamatanajax", // json datasource
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
            var v_nis = this.id;
            $.confirm({
                title: 'Oops!',
				content: 'Apakah anda yakin ingin menghapus data ini ?',
                buttons: {
                    hapus: {
                        text: 'Hapus',
                        btnClass: 'btn-green',
                        action: function(){
                            window.location.assign("<?php echo base_url() ?>admin/datamaster/kecamatanhapus?id_kecamatan="+v_nis);
                        }
                    },
                    batal: function () {

                    }

                }
                });
            });

            $(".edit").click(function(e) {
        var v_url = "<?php echo base_url() ?>admin/datamaster/santritingkat";
        var v_id = this.id;
        $.ajax({
				type: 'POST',
				url: v_url,
				data: {
                     nis : v_id
                      },
				beforeSend: function () {
					$("#loading").show();
				},
				success: function (response) {
					$("#loading").hide();
					$('#modal-edit').html(response)
				}
            });

    });

    $(".edit2").click(function(e) {
        var v_url = "<?php echo base_url() ?>admin/datamaster/santritingkatpondokan";
        var v_id = this.id;
        $.ajax({
				type: 'POST',
				url: v_url,
				data: {
                     nis : v_id
                      },
				beforeSend: function () {
					$("#loading").show();
				},
				success: function (response) {
					$("#loading").hide();
					$('#modal-edit').html(response)
				}
            });

    });



        }
   });
</script>

<script type="text/javascript">
$(document).ready(function(){
  $('#id_provinsi').change(function(){
    var id=$(this).val();
    $.ajax({
      url : "<?php echo base_url();?>admin/datamaster/datakotakab",
      method : "POST",
      data : {id: id},
      async : false,
          dataType : 'json',
      success: function(data){
        var html = '';
              var i;
              for(i=0; i<data.length; i++){
                  html += '<option value="'+data[i].id_kota_kab+'">'+data[i].nama_kota_kab+'</option>';
              }
              $('.id_kota_kab').html(html);

      }
    });
  });
});
</script>
