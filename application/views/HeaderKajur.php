<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="<?=base_url('img/favicon.ico')?>" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="<?=base_url('bootstrap/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?=base_url('fontawesome/css/all.min.css')?>">
    <link rel="stylesheet" href="<?=base_url('bootstrap/css/adminlte.min.css')?>">
    <link rel="stylesheet" href="<?=base_url('bootstrap/datatables-bs4/css/dataTables.bootstrap4.css')?>">
    <title><?=$Halaman?></title>
  </head>
  <body class="hold-transition sidebar-mini layout-fixed">
    <!-- Site wrapper -->
    <div class="wrapper">
      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand bg-success">
          <!-- Left navbar links -->
          <ul class="navbar-nav">
              <li class="nav-item">
                  <a class="nav-link text-light" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
              </li>
          </ul>
          <ul class="navbar-nav ml-auto">
              <a class="nav-link" href="<?=base_url('SMD/SignOut')?>">
                  <i class="fas fa-user-lock text-light"><span class="text-light"> Logout</span></i>
              </a>
          </ul>
      </nav>
      <!-- /.navbar -->
      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="" class="brand-link bg-success">
        <img src="<?=base_url('img/apple-touch-icon.png')?>"
          alt="LogoUTM"
          class="brand-image img-circle elevation-3"
          style="opacity: .8">
        <span class="brand-text font-weight-bold">Dashboard</span>
        </a>
        <!-- Sidebar -->
        <div class="sidebar">       
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="<?=base_url("Kajur/Monitoring/Pendidikan")?>" class="nav-link <?php if ($Halaman == "Monitoring Pendidikan") { echo "active";} ?>">
                <i class="nav-icon fas fa-graduation-cap"></i>
                <p><b>Pendidikan</b></p> 
                </a>
            </li>
            <li class="nav-item">
                <a href="<?=base_url("Kajur/Monitoring/Penelitian")?>" class="nav-link <?php if ($Halaman == "Monitoring Penelitian") { echo "active";} ?>">
                <i class="nav-icon fas fa-search-plus"></i>
                <p><b>Penelitian</b></p> 
                </a>
            </li>
            <li class="nav-item">
                <a href="<?=base_url("Kajur/Monitoring/Pengabdian")?>" class="nav-link <?php if ($Halaman == "Monitoring Pengabdian") { echo "active";} ?>">
                <i class="nav-icon fas fa-users"></i>
                <p><b>Pengabdian</b></p> 
                </a>
            </li>
            <li class="nav-item">
                <a href="<?=base_url("Kajur/Monitoring/Penunjang")?>" class="nav-link <?php if ($Halaman == "Monitoring Penunjang") { echo "active";} ?>">
                <i class="nav-icon fas fa-chart-line"></i>
                <p><b>Penunjang</b></p> 
                </a>
            </li>
          </ul>
        </nav>
        </div>
      </aside> 