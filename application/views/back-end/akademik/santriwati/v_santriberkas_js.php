<script>

   $('#datatable').DataTable({});

   $(".hapus").click(function (e) {
    var v_id = this.id;
    var v_nis = "<?php echo $santri['nis_lokal'] ?>";
    $.confirm({
        title: 'Hapus!',
        content: 'Yakin ingin menghapus ?',
        buttons: {
            hapus: {
                text: 'Hapus',
                btnClass: 'btn-green',
                action: function(){
                    window.location.assign("<?php echo base_url() ?>admin/santriwatiakd/santriwatihapusberkas?id_berkas="+v_id+"&nis="+v_nis);
                }
            },
            batal: function () {

            }
            
        }
        });
    });

</script>