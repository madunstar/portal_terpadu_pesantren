<?php $this->load->view('layouts/header'); ?>
<body class="" >
  <section class="vbox">
<?php $this->load->view('layouts/scale_nav_master'); ?>

    <?php 	if(isset($_view) && $_view)
    $this->load->view($_view);
    ?>
