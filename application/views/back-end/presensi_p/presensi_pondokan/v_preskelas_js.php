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
                    window.location.assign("<?php echo base_url() ?>admin/datamaster/hapuskelaspondokan?id="+v_id);
                }
            },
            batal: function () {

            }

        }
        });
    });

    
    $(".edit").click(function(e) {
        var v_url = "<?php echo base_url() ?>admin/datamaster/kelaseditpondokan";
        var v_id = this.id;
        $.ajax({
				type: 'POST',
				url: v_url,
				data: {
                        id : v_id
                      },
				beforeSend: function () {
					$("#loading").show();
				},
				success: function (response) {
					$("#loading").hide();
					$('#modal-edit').html(response)
				},
                complete: function () {
                    $('#editpondokanproses').click(function (e) {
                        var v_url = "<?php echo base_url() ?>admin/datamaster/editpondokanproses";
                        var v_status_kelas = $('#status_kelas').val();
                        var v_id_kelas_belajar = $('#id_kelas_belajar').val();
                        $.ajax({
                            type: 'POST',
                            url: v_url,
                            data: {
                                id_kelas_belajar: v_id_kelas_belajar,
                                status_kelas: v_status_kelas,
                            },
                            beforeSend: function () {
                                $("#loading").show();
                            },
                            error: function (xhr, status, error) {
                                $("#loading").hide();
                            },
                            success: function (response) {
                             
                                window.location.assign("<?php echo base_url() ?>admin/datamaster/datakelaspondokan?ed=1")
                            }
                        });

					});
                }
            });
       
    });

    $('#pondokan').change(function(){
        var id=$(this).val();
        $.ajax({
            url : "<?php echo base_url();?>admin/datamaster/datatingkatpondokan",
            method : "POST",
            data : {pondokan: id},
            async : false,
            dataType : 'json',
            success: function(data){
                var html ='<option value="" disabled selected>.: Pilih Tingkatan :.</option>';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<option value="'+data[i].tingkat+'">'+data[i].tingkat+'</option>';
                    }
                    $('#tingkatan').html(html);

            }
        });
    });

</script>
