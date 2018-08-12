<script>

   $('#datatable').DataTable({});
	"bStateSave"    : true,
        "ajax"          : {
                            url :"<?php echo base_url(); ?>admin/datamaster/kotakabajax", // json datasource
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
        title: 'Hapus!',
        content: 'Yakin ingin menghapus ?',
        buttons: {
            hapus: {
                text: 'Hapus',
                btnClass: 'btn-green',
                action: function(){
                    window.location.assign("<?php echo base_url() ?>admin/datamaster/santrihapus?nis="+v_nis);
                }
            },
            batal: function () {

            }

        }
        });
    });

</script>
