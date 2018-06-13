<script type="text/javascript">
$(document).ready(function(){
  $('.text-danger').text("");
  $('.text-success').text("");
  $('#no_identitas').attr('readonly', true);
  $('#nama_penjemput').attr('readonly', true);
  $('#no_telp').attr('readonly', true);
  $('#alamat_penjemput').attr('readonly', true);
  $('#hubungan_penjemput').attr('readonly', true);

  $("#no_identitas").attr("data-required", "false");
  $("#nama_penjemput").attr("data-required", "false");
  $("#no_telp").attr("data-required", "false");
  $("#alamat_penjemput").attr("data-required", "false");
  $("#hubungan_penjemput").attr("data-required", "false");

  $('#hapus').attr('disabled','disabled');
  $('#proses').attr('disabled','disabled');

  $("#harus_kembali").datepicker({
    format: 'yyyy-mm-dd',
    startDate: '+2d'
  });

  $("#harus_kembali").on('hide', function(datetext) {
    datetext = $('#harus_kembali').val() + ' ' + '07' + ':' + '00' + ':' + '00';
    $('#harus_kembali').val(datetext);
  });

  $('#Lanjutkan').click(function(){
    var angka = /^[0-9]+$/;
    var nis=$('#nis_santri').val();
    if(nis_santri.value == null || nis_santri.value == ""){
      $('#proses').attr('disabled','disabled');
      $('#nis_santri').parent().find('.text-success').text("");
      $('#nis_santri').parent().find('.text-danger').text("NIS tidak boleh kosong !");
      nama_lengkap.value = "";
      kelas.value = "";
      nama_lengkap_ayah.value = "";
      nama_lengkap_ibu.value = "";
      tanggal_keluar.value = "";
      return false;
    }
    else if(!nis_santri.value.match(angka)){
      $('#proses').attr('disabled','disabled');
      $('#nis_santri').parent().find('.text-success').text("");
      $('#nis_santri').parent().find('.text-danger').text("NIS hanya berupa angka !");
      nama_lengkap.value = "";
      kelas.value = "";
      nama_lengkap_ayah.value = "";
      nama_lengkap_ibu.value = "";
      tanggal_keluar.value = "";
      return false;
    }
    // else if(!nis_santri.value.length<=13){
    //   nama_lengkap.value = "";
    //   kelas.value = "";
    //   nama_lengkap_ayah.value = "";
    //   nama_lengkap_ibu.value = "";
    //   tanggal_keluar.value = "";
    //   alert("NIS terdiri dari 13 digit !");
    //   return false;
    // }
    $.ajax({
      url: "<?php echo base_url();?>admin/perizinansantri/ceknissantri",
      type: "POST",
      data: "nis_santri="+nis,
      dataType: "text",
      success: function(data){
        if (data == 0){
          $('#proses').attr('disabled','disabled');
          $('#nis_santri').parent().find('.text-success').text("");
          $('#nis_santri').parent().find('.text-danger').text("NIS Tidak Ditemukan!");
          $('#nama_lengkap').val("");
          $('#kelas').val("");
          $('#nama_lengkap_ayah').val("");
          $('#nama_lengkap_ibu').val("");
          $('#tanggal_keluar').val("");
          return false;
        }
      }
		});

    $.ajax({
      url: "<?php echo base_url();?>admin/perizinansantri/cekjatahizin",
      type: "POST",
      data: "nis_santri="+nis,
      dataType: "text",
      success: function(data){
        if ($("#izin_khusus").is(":checked")){
          return true;
        }
        else {
          if (data == 0){
            $('#proses').attr('disabled','disabled');
            $('#nis_santri').parent().find('.text-success').text("");
            $('#nis_santri').parent().find('.text-danger').text("Rentang Waktu Izin Belum Mencapai 1 Bulan!");
            $('#nama_lengkap').val("");
            $('#kelas').val("");
            $('#nama_lengkap_ayah').val("");
            $('#nama_lengkap_ibu').val("");
            $('#tanggal_keluar').val("");
            return false;
          }
        }
      }
		});

    var tgl = new Date();
    var tahun = tgl.getFullYear();
    var bulan = tgl.getMonth()+1;
    var tanggal = tgl.getDate();
    var jam = tgl.getHours();
    var menit = tgl.getMinutes();
    var detik = tgl.getSeconds();
    $('#tanggal_keluar').val(tahun+'-'+bulan+'-'+tanggal+' '+jam+':'+menit+':'+detik);
    //var id=$('#nis_santri').val();
    $.ajax({
      url : "<?php echo base_url();?>admin/perizinansantri/datasantritampil",
      method : "POST",
      data : {id: nis},
      async : false,
      dataType : 'json',
      success: function(data){
        $('#proses').removeAttr('disabled');
        $('#nis_santri').parent().find('.text-danger').text("");
        $('#nis_santri').parent().find('.text-success').text("Data ditemukan!");
        nama_lengkap.value = data[0].nama_lengkap;
        kelas.value = data[0].jenis_sekolah_asal;
        nama_lengkap_ayah.value = data[0].nama_lengkap_ayah;
        nama_lengkap_ibu.value = data[0].nama_lengkap_ibu;
      }
    });
  });

  $('#id_penjemput').change(function(){
    var id=$(this).val();
    $.ajax({
      url : "<?php echo base_url();?>admin/perizinansantri/datapenjemputtampil",
      method : "POST",
      data : {id: id},
      async : false,
      dataType : 'json',
      success: function(data){
        $('#no_identitas').val(data[0].no_identitas);
        $('#nama_penjemput').val(data[0].nama_penjemput);
        $('#no_telp').val(data[0].no_telp);
        $('#alamat_penjemput').val(data[0].alamat_penjemput);
        $('#hubungan_penjemput').val(data[0].hubungan_penjemput);
        if($('#id_penjemput').val() == "Baru"){
          $('#no_identitas').val("");
          $('#nama_penjemput').val("");
          $('#no_telp').val("");
          $('#alamat_penjemput').val("");
          $('#hubungan_penjemput').val("");

          $('#no_identitas').attr('readonly', false);
          $('#nama_penjemput').attr('readonly', false);
          $('#no_telp').attr('readonly', false);
          $('#alamat_penjemput').attr('readonly', false);
          $('#hubungan_penjemput').attr('readonly', false);

          $("#no_identitas").attr("data-required", "true");
          $("#nama_penjemput").attr("data-required", 'true');
          $("#no_telp").attr("data-required", true);
          $("#alamat_penjemput").attr("data-required", "true");
          $("#hubungan_penjemput").attr("data-required", "true");
          $('#hapus').attr('disabled','disabled');
        }
        else if($('#id_penjemput').val() == "0"){
          $('#no_identitas').attr('readonly', true);
          $('#nama_penjemput').attr('readonly', true);
          $('#no_telp').attr('readonly', true);
          $('#alamat_penjemput').attr('readonly', true);
          $('#hubungan_penjemput').attr('readonly', true);
          $('#hapus').attr('disabled','disabled');
        }
        else {
          $('#no_identitas').attr('readonly', true);
          $('#nama_penjemput').attr('readonly', true);
          $('#no_telp').attr('readonly', true);
          $('#alamat_penjemput').attr('readonly', true);
          $('#hubungan_penjemput').attr('readonly', true);
          $('#hapus').removeAttr('disabled');
        }
      }
    });
  });

  $('#datatable').DataTable({});
  $(".hapusizin").click(function (e) {
   var v_id = this.id;
   $.confirm({
       title: 'Hapus!',
       content: 'Yakin ingin menghapus ?',
       buttons: {
           hapus: {
               text: 'Hapus',
               btnClass: 'btn-green',
               action: function(){
                   window.location.assign("<?php echo base_url() ?>admin/perizinansantri/izinhapus?id="+v_id);
               }
           },
           batal: function () {

           }

       }
       });
   });

  $('#hapus').click(function (e) {
   var v_id = $('#id_penjemput').val();
   $.confirm({
       title: 'Hapus!',
       content: 'Yakin ingin menghapus ?',
       buttons: {
           hapus: {
               text: 'Hapus',
               btnClass: 'btn-green',
               action: function(){
                   window.location.assign("<?php echo base_url() ?>admin/perizinansantri/penjemputhapus?id="+v_id);
               }
           },
           batal: function () {

           }

       }
       });
   });
});
</script>
