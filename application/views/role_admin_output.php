<?php
foreach($css_files as $file): ?>
    <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />

<?php endforeach; ?>
<?php foreach($js_files as $file): ?>

    <script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
<!-- memanggil kepala-->
<?php $this->load->view('header'); ?>
<!-- memanggil sidebaar-->
<?php $this->load->view('sidebar_master'); ?>

<div class="content-wrapper">
  <div class="container-fluid">
    <h1>hello world</h1>
    <?php echo $output; ?>
  </div>
</div>
<!-- memanggil footer-->
<?php $this->load->view('footer'); ?>
