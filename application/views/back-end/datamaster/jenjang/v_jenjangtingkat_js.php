<script>

   $('#datatable').DataTable({});

   $(".hapus").click(function (e) {
    var v_id = this.id;
    var v_jenjang = "<?php echo $jenjang['jenjang'] ?>";
    $.confirm({
        title: 'Hapus!',
        content: 'Yakin ingin menghapus ?',
        buttons: {
            hapus: {
                text: 'Hapus',
                btnClass: 'btn-green',
                action: function(){
                    window.location.assign("<?php echo base_url() ?>admin/datamaster/jenjanghapustingkat?idtingkatjenjang="+v_id+"&jenjang="+v_jenjang);
                }
            },
            batal: function () {

            }
            
        }
        });
    });

</script>