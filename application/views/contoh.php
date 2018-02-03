<?php $this->load->view('layouts/header'); ?>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">


  <?php $this->load->view('layouts/navbar_master'); ?>
    <div class="content-wrapper">
      <div class="container-fluid">
        <ol class="breadcrumb">
          <li class="breadcrumb-item active">
            <a href="#">Dashboard</a>
          </li>

        </ol>
        
        <?php	if(isset($_view) && $_view)
	       $this->load->view($_view);
	        ?>
      </div>
<?php $this->load->view('layouts/footer'); ?>

</body>
