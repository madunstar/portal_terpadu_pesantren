<script>

   $('#datatable').DataTable({});

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
                    window.location.assign("<?php echo base_url() ?>admin/datamaster/pendidikanhapus?id_pendidikan="+v_id);
                }
            },
            batal: function () {

            }

        }
        });
    });

</script>
