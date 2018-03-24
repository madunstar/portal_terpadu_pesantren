<script>

   $('#datatable').DataTable({});

   $(".hapus").click(function (e) {
    var v_id_pelajaran = this.id;
    $.confirm({
        title: 'Hapus!',
        content: 'Yakin ingin menghapus ?',
        buttons: {
            hapus: {
                text: 'Hapus',
                btnClass: 'btn-green',
                action: function(){
                    window.location.assign("<?php echo base_url() ?>admin/datamaster/pelajaranhapus?id_pelajaran="+v_id_pelajaran);
                }
            },
            batal: function () {

            }

        }
        });
    });

</script>
