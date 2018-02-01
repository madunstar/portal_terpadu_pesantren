<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Pesantren Darul Ilmi</title>

  <!-- Bootstrap core CSS-->
  <link href="<?php base_url(); ?>assets/css/bootstrap.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="<?php base_url(); ?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="<?php base_url(); ?>assets/css/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="<?php base_url(); ?>assets/css/sb-admin.css" rel="stylesheet">
  <link href="<?php base_url(); ?>assets/css/custom.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html">Pesantren Darul Ilmi</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="index.html">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Data Master">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#MasterData" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-book"></i>
            <span class="nav-link-text">Data Master</span>
          </a>
          <ul class="sidenav-second-level collapse" id="MasterData">
            <li>
              <a href="#">Data Santri</a>
            </li>
            <li>
              <a href="#">Data Guru</a>
            </li>
            <li>
              <a href="#">Data Staff</a>
            </li>
            <li>
              <a href="#">Data Kelas</a>
            </li>
            <li>
              <a href="#">Data Mata Pelajaran</a>
            </li>
            <li>
              <a href="#">Data Admin</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Presensi">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#PresensiData" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-check-square-o"></i>
            <span class="nav-link-text">Presensi</span>
          </a>
          <ul class="sidenav-second-level collapse" id="PresensiData">
            <li>
              <a href="#">Jadwal Pelajaran</a>
            </li>
            <li>
              <a href="#">Presensi siswa</a>
            </li>
            <li>
              <a href="#">Rekap Presensi Siswa</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Perizinan">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#PerizinanData" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-sticky-note-o"></i>
            <span class="nav-link-text">Perizinan</span>
          </a>
          <ul class="sidenav-second-level collapse" id="PerizinanData">
            <li>
              <a href="#">Keluar Pondok</a>
            </li>
            <li>
              <a href="#">Kembali ke Pondok</a>
            </li>
            <li>
              <a href="#">Data Denda</a>
            </li>
            <li>
              <a href="#">Data Pembayaran Denda</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Lain lain">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#lainlain" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-cogs"></i>
            <span class="nav-link-text">Lain lain</span>
          </a>
          <ul class="sidenav-second-level collapse" id="lainlain">
            <li>
              <a href="navbar.html">Data Pendidikan</a>
            </li>
            <li>
              <a href="cards.html">Data Pekerjaan</a>
            </li>
            <li>
              <a href="cards.html">Data Provinsi</a>
            </li>
            <li>
              <a href="cards.html">Data Kota / Kabupaten</a>
            </li>
            <li>
              <a href="cards.html">Data Kecamatan</a>
            </li>
            <li>
              <a href="cards.html">Data Desa / Kelurahan</a>
            </li>
            <li>
              <a href="cards.html">Data Role petugas</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Pendaftaran">
          <a class="nav-link" href="charts.html">
            <i class="fa fa-fw fa-folder-open-o"></i>
            <span class="nav-link-text">Pendaftaran</span>
          </a>
        </li>

      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
