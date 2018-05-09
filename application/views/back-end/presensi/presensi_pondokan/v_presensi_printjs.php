<script>

   $('#print').click(function(e){
       var id = $('#id_jadwal').val();
       if (id==null) {
         
       } else {
        window.open("<?php echo base_url() ?>admin/datamaster/printjadwalpondokan?id="+id+"", '_blank');
       }
   });
  

</script>
