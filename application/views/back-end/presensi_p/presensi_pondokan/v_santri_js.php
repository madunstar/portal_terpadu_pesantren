<script>

   $('#datatable').DataTable({});

   $(".hapus").click(function (e) {
    var v_id = this.id;
    var v_idkelasbelajar = "<?php echo $santri['id_kelas_belajar'] ?>";
    $.confirm({
        title: 'Hapus!',
        content: 'Yakin ingin menghapus ?',
        buttons: {
            hapus: {
                text: 'Hapus',
                btnClass: 'btn-green',
                action: function(){
                    window.location.assign("<?php echo base_url() ?>admin/datamaster/hapuskelassantripondokan?id="+v_id+"&idkelas="+v_idkelasbelajar);
                }
            },
            batal: function () {

            }
        }
        });
    });

    // Form Tambah Stock
    $("#tambahsantri").click(function(e) {
        var v_url = "<?php echo base_url() ?>admin/datamaster/kelastambahsantripondokan";
        var v_idkelasbelajar = "<?php echo $santri['id_kelas_belajar'] ?>";
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
                    $('.chosen-select').chosen({width: "inherit"}) 
                    $('#tambahsantriproses').click(function (e) {
                        var v_url = "<?php echo base_url() ?>admin/datamaster/tambahsantripondokproses";
                        var v_idkelasbelajar = "<?php echo $santri['id_kelas_belajar'] ?>";
                        var v_nis = $('#nis_lokal').val();
                        $.ajax({
                            type: 'POST',
                            url: v_url,
                            data: {
                                idkelasbelajar: v_idkelasbelajar,
                                nis: v_nis
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
                                window.location.assign("<?php echo base_url() ?>admin/datamaster/lihatkelaspondokansantri?id=<?php echo $santri['id_kelas_belajar'] ?>&msg=1")
                                //isidata();
                                //pesanpop('Pesan !', 'Berhasil menambah data Gudang.', 'success')
                            }
                        });

					});
                }
            });
       
    });


    $(".editsantri").click(function(e) {
        var v_url = "<?php echo base_url() ?>admin/datamaster/kelaseditsantripondokan";
        var v_idkelasbelajar = "<?php echo $santri['id_kelas_belajar'] ?>";
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
                    $('.chosen-select').chosen({width: "inherit"});
                    $('#editsantriproses').click(function (e) {
                        var v_url = "<?php echo base_url() ?>admin/datamaster/editsantripondokanproses";
                        var v_idkelasbelajar = "<?php echo $santri['id_kelas_belajar'] ?>";
                        var v_nis = $('#nis_lokal').val();
                        var v_id_kelas_santri = $('#id_kelas_santri').val();
                        $.ajax({
                            type: 'POST',
                            url: v_url,
                            data: {
                                idkelasbelajar: v_idkelasbelajar,
                                nis: v_nis,
                                id_kelas_santri: v_id_kelas_santri,
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
                                window.location.assign("<?php echo base_url() ?>admin/datamaster/lihatkelaspondokansantri?id=<?php echo $santri['id_kelas_belajar'] ?>&ed=1")
                                //isidata();
                                //pesanpop('Pesan !', 'Berhasil menambah data Gudang.', 'success')
                            }
                        });

					});
                }
            });
       
    });

</script>
