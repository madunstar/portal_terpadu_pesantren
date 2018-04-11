<!--<script>

    document.onload = disable_enable();
    function disable_enable(pilihan) {

        if(pilihan==0 || document.forms[0].id_penjemput.value==0) {

            document.forms[0].no_identitas.disabled=true;

        } else document.forms[0].no_identitas.disabled=false;

    }

</script>-->

<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript">
    function cek_database(){
        var id_penjemput = $("#id_penjemput").val();
        $.ajax({
            url: "</?php echo base_url('admin/perizinan/keluar') ?>",
            data:"id_penjemput="+id_penjemput ,
        }).success(function (data) {

            var json = data,
            obj = JSON.parse(json);
            $('#no_identitas').val(obj.no_identitas);
            $('#nama_penjemput').val(obj.nama_penjemput);
            $('#no_telp').val(obj.no_telp);
            $('#alamat_penjemput').val(obj.alamat_penjemput);
            $('#hubungan_penjemput').val(obj.hubungan_penjemput);

            //var $jenis_kelamin = $('input:radio[name=jenis_kelamin]');
		// if(obj.jenis_kelamin == 'laki-laki'){
		// 	$jenis_kelamin.filter('[value=laki-laki]').prop('checked', true);
		// }else{
		// 	$jenis_kelamin.filter('[value=perempuan]').prop('checked', true);
		// }
        });
    }
</script>-->

<script type="text/javascript">
$(document).ready(function(){
  $('#no_identitas').attr('readonly', true);
  $('#nama_penjemput').attr('readonly', true);
  $('#no_telp').attr('readonly', true);
  $('#alamat_penjemput').attr('readonly', true);
  $('#hubungan_penjemput').attr('readonly', true);
  $('#hapus').attr('disabled','disabled');
  $('#Lanjutkan').click(function(){
    var angka = /^[0-9]+$/;
    if(nis_santri.value == null || nis_santri.value == ""){
      nama_lengkap.value = "";
      kelas.value = "";
      nama_lengkap_ayah.value = "";
      nama_lengkap_ibu.value = "";
      tanggal_keluar.value = "";
      alert("NIS tidak boleh kosong !");
      return false;
    }
    else if(!nis_santri.value.match(angka)){
      nama_lengkap.value = "";
      kelas.value = "";
      nama_lengkap_ayah.value = "";
      nama_lengkap_ibu.value = "";
      tanggal_keluar.value = "";
      alert("NIS hanya berupa angka !");
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
    // else if(nis_santri.value!=0){
    //   nama_lengkap.value = "";
    //   kelas.value = "";
    //   nama_lengkap_ayah.value = "";
    //   nama_lengkap_ibu.value = "";
    //   tanggal_keluar.value = "";
    //   alert("NIS yang dimasukkan tidak ditemukan!");
    //   return false;
    // }



    // mysql.query("SELECT * FROM tb_santri WHERE nis_lokal = 'a'", function(error, result, field) {
    //   if(error) {
    //       exist(error); //No error
    //   } else if(result.length > 0) {
    //     if (result)
    //       $('#kelas').val('Mancing Mania Mangkap');
    //       console.log("Test:" + result);
    //   } else {
    //       exist(null, null); //It is never execute
    //   }
    // });
    var tgl = new Date();
    var tahun = tgl.getFullYear();
    var bulan = tgl.getMonth()+1;
    var tanggal = tgl.getDate();
    var jam = tgl.getHours();
    var menit = tgl.getMinutes();
    var detik = tgl.getSeconds();
    $('#tanggal_keluar').val(tahun+'-'+bulan+'-'+tanggal+' '+jam+':'+menit+':'+detik);
    var id=$('#nis_santri').val();
    $.ajax({
      url : "<?php echo base_url();?>admin/perizinan/datasantritampil",
      method : "POST",
      data : {id: id},
      async : false,
      dataType : 'json',
      success: function(data){
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
