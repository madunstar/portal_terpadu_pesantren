<script>

   $('#datatable').DataTable({});

   $(".hapus").click(function (e) {
    var v_id = this.id;
    var v_nip = "<?php echo $staff['nip_staff'] ?>";
    $.confirm({
        title: 'Hapus!',
        content: 'Yakin ingin menghapus ?',
        buttons: {
            hapus: {
                text: 'Hapus',
                btnClass: 'btn-green',
                action: function(){
                    window.location.assign("<?php echo base_url() ?>admin/datamaster/staffhapusberkas?id_berkas="+v_id+"&nip="+v_nip);
                }
            },
            batal: function () {

            }
            
        }
        });
    });

</script>