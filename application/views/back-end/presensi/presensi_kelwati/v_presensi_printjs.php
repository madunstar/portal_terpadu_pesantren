<script>

   $('#print').click(function(e){
     var bulan = $('#bulan').val();
       var id = $('#idkelas').val();
       if (bulan==null) {

       } else {
        window.open("<?php echo base_url() ?>admin/datamaster/printjadwalafiwati?id="+id+"&bulan="+bulan+"", '_blank');
       }
   });


</script>
