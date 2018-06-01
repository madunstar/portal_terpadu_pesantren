<script>

   $('#datatable').DataTable({});

   $(".hapus").click(function (e) {
    var v_id = this.id;
    var v_idkelasbelajar = "<?php echo $jadwal['id_kelas_belajar'] ?>";
    $.confirm({
        title: 'Hapus!',
        content: 'Yakin ingin menghapus ?',
        buttons: {
            hapus: {
                text: 'Hapus',
                btnClass: 'btn-green',
                action: function(){
                    window.location.assign("<?php echo base_url() ?>admin/datamaster/hapusjadwalpondwati?id="+v_id+"&idkelas="+v_idkelasbelajar);
                }
            },
            batal: function () {

            }
        }
        });
    });

    // Form Tambah Stock
    $("#tambahjadwal").click(function(e) {
        var v_url = "<?php echo base_url() ?>admin/datamaster/tambahjadwalpondwati";
        var v_idkelasbelajar = "<?php echo $jadwal['id_kelas_belajar'] ?>";
        $.ajax({
				type: 'POST',
				url: v_url,
				data: {id_kelas_belajar : v_idkelasbelajar},
				beforeSend: function () {
					$("#loading").show();
				},
				success: function (response) {
					$("#loading").hide();
					$('#modal-tambah').html(response);
				},
                complete: function () {
                    $('.chosen-select').chosen({width: "362px"}) 
                    $('#tambahjadwalproses').click(function (e) {
                        var v_url = "<?php echo base_url() ?>admin/datamaster/tambahjadwalpondwatiproses";
                        var v_idkelasbelajar = "<?php echo $jadwal['id_kelas_belajar'] ?>";
                        var v_mata_pelajaran = $('#mata_pelajaran').val();
                        var v_hari = $('#hari').val();
                        var v_jam = $('#jam').val();
                        $.ajax({
                            type: 'POST',
                            url: v_url,
                            data: {
                                idkelasbelajar: v_idkelasbelajar,
                                mata_pelajaran: v_mata_pelajaran,
                                hari: v_hari,
                                jam: v_jam
                            },
                            beforeSend: function () {
                                $("#loading").show();
                            },
                            error: function (xhr, status, error) {
                                $("#loading").hide();
                                //pesanpop('Pesan !', 'Gagal menambah data gudang.', 'error')
                            },
                            success: function (response) {
                                $("#loading").hide();   
                                $("#myModal").removeClass("in");
                                $(".modal-backdrop").remove();
                                $('body').removeClass('modal-open');
                                $('body').css('padding-right', '');
                                $("#myModal").hide();
                                window.location.assign("<?php echo base_url() ?>admin/datamaster/jadwalpondwati?id=<?php echo $jadwal['id_kelas_belajar'] ?>&msg=1")
                                //isidata();
                                //pesanpop('Pesan !', 'Berhasil menambah data Gudang.', 'success')
                            }
                        });

					});
                }
            });
       
    });


    $(".editjadwal").click(function(e) {
        var v_url = "<?php echo base_url() ?>admin/datamaster/editjadwalpondwati";
        var v_idkelasbelajar = "<?php echo $jadwal['id_kelas_belajar'] ?>";
        var v_id = this.id;
        $.ajax({
				type: 'POST',
				url: v_url,
				data: {
                        id_kelas_belajar : v_idkelasbelajar,
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
                    $('.chosen-select').chosen({width: "362px"});
                    $('#editjadwalproses').click(function (e) {
                        var v_url = "<?php echo base_url() ?>admin/datamaster/editjadwalpondwatiproses";
                        var v_idkelasbelajar = "<?php echo $jadwal['id_kelas_belajar'] ?>";
                        var v_mata_pelajaran = $('#mata_pelajaran').val();
                        var v_jam = $('#jam').val();
                        var v_id_jadwal = $('#id_jadwal').val()
                        $.ajax({
                            type: 'POST',
                            url: v_url,
                            data: {
                                idkelasbelajar: v_idkelasbelajar,
                                mata_pelajaran: v_mata_pelajaran,
                                jam: v_jam,
                                idjadwal : v_id_jadwal 
                            },
                            beforeSend: function () {
                                $("#loading").show();
                            },
                            error: function (xhr, status, error) {
                                $("#loading").hide();
                                //pesanpop('Pesan !', 'Gagal menambah data gudang.', 'error')
                            },
                            success: function (response) {
                                $("#loading").hide();   
                                $("#myModal").removeClass("in");
                                $(".modal-backdrop").remove();
                                $('body').removeClass('modal-open');
                                $('body').css('padding-right', '');
                                $("#myModal").hide();
                                window.location.assign("<?php echo base_url() ?>admin/datamaster/jadwalpondwati?id=<?php echo $jadwal['id_kelas_belajar'] ?>&ed=1")
                                //isidata();
                                //pesanpop('Pesan !', 'Berhasil menambah data Gudang.', 'success')
                            }
                        });

					});
                }
            });
       
    });

</script>
