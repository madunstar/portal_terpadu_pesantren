<script type="text/javascript">
$(document).ready(function(){
  $('.text-danger').text("");
  $('.text-success').text("");
  $('#no_identitas').attr('readonly', true);
  $('#nama_penjemput').attr('readonly', true);
  $('#no_telp').attr('readonly', true);
  $('#alamat_penjemput').attr('readonly', true);
  $('#hubungan_penjemput').attr('readonly', true);
  $('#hapus').attr('disabled','disabled');
  $('#Lanjutkan').click(function(){
    var angka = /^[0-9]+$/;
    var nis=$('#nis_santri').val();
    if(nis_santri.value == null || nis_santri.value == ""){
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
      url: "<?php echo base_url();?>admin/perizinan/ceknissantri",
      type: "POST",
      data: "nis_santri="+nis,
      dataType: "text",
      success: function(data){
        if (data == 0){
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
      url : "<?php echo base_url();?>admin/perizinan/datasantritampil",
      method : "POST",
      data : {id: nis},
      async : false,
      dataType : 'json',
      success: function(data){
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
      url : "<?php echo base_url();?>admin/perizinan/datapenjemputtampil",
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
                   window.location.assign("<?php echo base_url() ?>admin/perizinan/penjemputhapus?id_penjemput="+v_id);
               }
           },
           batal: function () {

           }

       }
       });
   });
});
</script>
