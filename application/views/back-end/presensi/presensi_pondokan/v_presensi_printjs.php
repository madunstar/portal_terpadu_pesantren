<script>

   $('#print').click(function(e){

       var id = $('#bulan').val();
       var kelas = $('#idkelas').val();
       if (id==null) {
         
       } else {
        window.open("<?php echo base_url() ?>admin/datamaster/printjadwalpondokan?id="+id+"&kelas="+kelas+"", '_blank');
       }
   });
  

</script>
