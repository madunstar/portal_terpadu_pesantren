<script>

   $('#datatable').DataTable({});

   $(".hapus").click(function (e) {
    var v_id = this.id;
    var v_pondokan = "<?php echo $pondokan['pondokan'] ?>";
    $.confirm({
        title: 'Hapus!',
        content: 'Yakin ingin menghapus ?',
        buttons: {
            hapus: {
                text: 'Hapus',
                btnClass: 'btn-green',
                action: function(){
                    window.location.assign("<?php echo base_url() ?>admin/datamaster/pondokanhapustingkat?idtingkatpondokan="+v_id+"&pondokan="+v_pondokan);
                }
            },
            batal: function () {

            }
            
        }
        });
    });

</script>