<script>

   $('#print').click(function(e){

       var id = $('#bulan').val();
       var kelas = $('#idkelas').val();
       if (id==null) {
         
       } else {
        window.open("<?php echo base_url() ?>admin/santriwatiakd/printjadwalpondwati?id="+id+"&kelas="+kelas+"", '_blank');
       }
   });
  

</script>
