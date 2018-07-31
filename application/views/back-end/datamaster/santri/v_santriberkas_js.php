<script>

   $('#datatable').DataTable({});

   $(".hapus").click(function (e) {
    var v_id = this.id;
    var v_nis = "<?php echo $santri['nis_lokal'] ?>";
    $.confirm({
        title: 'Oops!',
        content: 'Apakah anda yakin ingin menghapus data ini ?',
        buttons: {
            hapus: {
                text: 'Hapus',
                btnClass: 'btn-green',
                action: function(){
                    window.location.assign("<?php echo base_url() ?>admin/datamaster/santrihapusberkas?id_berkas="+v_id+"&nis="+v_nis);
                }
            },
            batal: function () {

            }
            
        }
        });
    });

</script>