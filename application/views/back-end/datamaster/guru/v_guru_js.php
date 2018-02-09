<script>

   $('#datatable').DataTable({});

   $(".hapus").click(function (e) {
    var v_nip = this.id;
    $.confirm({
        title: 'Hapus!',
        content: 'Yakin ingin menghapus ?',
        buttons: {
            hapus: {
                text: 'Hapus',
                btnClass: 'btn-green',
                action: function(){
                    window.location.assign("<?php echo base_url() ?>admin/datamaster/guruhapus?nip="+v_nip);
                }
            },
            batal: function () {

            }
            
        }
        });
    });

</script>