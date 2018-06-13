<script>
 $(document).ready(function(){
   $('#datatable').DataTable({});
   $(".pondok").click(function(e) {
       var v_url = "<?php echo base_url() ?>admin/perizinansantriwati/santriwatitingkatpondokan";
       var v_id = this.id;
       $.ajax({
       type: 'POST',
       url: v_url,
       data: {
                    nis : v_id
                     },
       beforeSend: function () {
         $("#loading").show();
       },
       success: function (response) {
         $("#loading").hide();
         $('#modal-edit').html(response)
       }
           });

   });

   $(".tingkat").click(function(e) {
       var v_url = "<?php echo base_url() ?>admin/perizinansantriwati/santriwatitingkat";
       var v_id = this.id;
       $.ajax({
       type: 'POST',
       url: v_url,
       data: {
                    nis : v_id
                     },
       beforeSend: function () {
         $("#loading").show();
       },
       success: function (response) {
         $("#loading").hide();
         $('#modal-edit').html(response)
       }
           });

   });

});
</script>
