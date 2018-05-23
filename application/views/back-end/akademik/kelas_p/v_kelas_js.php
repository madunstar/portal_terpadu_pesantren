<script>

   $('#datatable').DataTable({});

   $(".hapus").click(function (e) {
    var v_kd_kelas = this.id;
    $.confirm({
        title: 'Hapus!',
        content: 'Yakin ingin menghapus ?',
        buttons: {
            hapus: {
                text: 'Hapus',
                btnClass: 'btn-green',
                action: function(){
                    window.location.assign("<?php echo base_url() ?>admin/santriwatiakd/kelashapus?kd_kelas="+v_kd_kelas);
                }
            },
            batal: function () {

            }

        }
        });
    });

</script>
