<?php $this->load->view('layouts/header'); ?>

<?php $this->load->view('layouts/scale_nav_pendaftaran_adm'); ?>

    <?php 	if(isset($_view) && $_view)
    $this->load->view($_view);
    ?>
