<!DOCTYPE html>
<html lang="en" class="app">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Portal Pesantren Darul Ilmi</title>
    <!-- Bootstrap core CSS-->
    <link href="<?php echo base_url('assets/css/bootstrap.css'); ?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url('assets/css/animate.css'); ?>" type="text/css" rel="stylesheet"/>
    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url('assets/css/font-awesome.min.css')?>" rel="stylesheet" type="text/css"/>
    <!-- Custom styles for this template-->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/icon.css');?>" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url('assets/css/font.css');?>" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url('assets/js/datatables/datatables.css');?>" type="text/css"/>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/app.css');?>" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url('assets/js/calendar/bootstrap_calendar.css');?>" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url('assets/js/confirm/jquery-confirm.min.css');?>" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url('assets/js/datepicker/datepicker.css');?>" type="text/css" />
  </head>
  <body class=""  >
    <section class="vbox">
      <header class="bg-dark header header-md navbar navbar-fixed-top-xs box-shadow">
        <div class="navbar-header aside-md dk">
          <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen" data-target="#nav">
            <i class="fa fa-bars"></i>
          </a>
          <a href="index.html" class="navbar-brand">
            <img src="<?php echo base_url('assets/images/logo.png'); ?>" class="m-r-sm" alt="scale">
            <span class="hidden-nav-xs" style="font-size:15px">Pesantren Darul Ilmi</span>
          </a>
          <a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".user">
            <i class="fa fa-cog"></i>
          </a>
        </div>
        <ul class="nav navbar-nav navbar-right m-n hidden-xs nav-user user">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <span class="pull-left avatar" >
                <!--<img class="" src="<?php
                //$foto = $this->session->userdata('foto');
                //echo base_url("$foto"); ?>" alt="...">-->
                <img src="<?php echo base_url('assets/images/a0.png'); ?>" alt="...">
              </span>
              <?php $nama_ortu = $this->session->userdata('nama_ortu');
                $nis_lokal = $this->session->userdata('nis_lokal');
                echo $nama_ortu;?> <b class="caret"></b>
            </a>
            <ul class="dropdown-menu animated fadeInRight">
              <li>
                <span class="arrow top"></span>
                <a href="<?php echo base_url('orangtua/portal_ortu/ubahsandi?nis='.$nis_lokal);?>">Ubah Kata Sandi </a>
              </li>
              <li class="divider"></li>
              <li>
                <a href="<?php echo base_url()?>orangtua/portal_ortu/logout"  ><span class="fa fa-sign-out"></span>&nbsp;Keluar</a>
              </li>
            </ul>
          </li>
        </ul>
      </header>
      <section>
        <section class="hbox stretch">
          <?php
            $this->load->view("orangtua/template/menu");
          ?>
