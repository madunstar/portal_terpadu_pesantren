<script>

   $('#datatable').DataTable({});
   $(".hapus").click(function (e) {
    var v_kd_matpel = this.id;
    $.confirm({
        title: 'Hapus!',
        content: 'Yakin ingin menghapus ?',
        buttons: {
            hapus: {
                text: 'Hapus',
                btnClass: 'btn-green',
                action: function(){
                    window.location.assign("<?php echo base_url() ?>admin/santriwatiakd/matpelhapus?id_matpel="+v_kd_matpel);
                }
            },
            batal: function () {

            }

        }
        });
    });

</script>
