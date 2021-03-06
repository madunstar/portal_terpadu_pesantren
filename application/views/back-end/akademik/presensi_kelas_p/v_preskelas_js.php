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
                    window.location.assign("<?php echo base_url() ?>admin/santriwatiakd/hapuskelasbelajar?id="+v_id);
                }
            },
            batal: function () {

            }

        }
        });
    });


    $(".edit").click(function(e) {
        var v_url = "<?php echo base_url() ?>admin/santriwatiakd/kelaseditbelajar";
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
                    $('#editkelasproses').click(function (e) {
                        var v_url = "<?php echo base_url() ?>admin/santriwatiakd/editkelasproses";
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

                                window.location.assign("<?php echo base_url() ?>admin/santriwatiakd/datakelasbelajar?ed=1")
                            }
                        });

					});
                }
            });

    });

    $('#jenjang').change(function(){
        var id=$(this).val();
        $.ajax({
            url : "<?php echo base_url();?>admin/santriwatiakd/datatingkatjenjang",
            method : "POST",
            data : {jenjang: id},
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
