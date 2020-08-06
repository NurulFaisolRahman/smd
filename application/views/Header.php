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
                    <a href="<?=base_url("Dashboard/Profil")?>" class="nav-link <?php if ($Halaman == "Profil") { echo "active";} ?>">
                    <i class="nav-icon fas fa-user"></i>
                    <p><b>Profil</b></p>
                    </a>
                </li>
                <li class="nav-item has-treeview <?php if ($Halaman == "Kegiatan") {
                    echo "menu-open";
                } ?>">
                    <a href="#" class="nav-link <?php if ($Halaman == "Kegiatan") {
                    echo "active";
                    } ?>">
                    <i class="nav-icon fas fa-tasks"></i>
                    <p>
                        <b>Kegiatan</b>
                        <i class="right fas fa-angle-left"></i>
                    </p>
                    </a>
                    <?php
                    $JenisKegiatan = array("Pendidikan","Penelitian","Pengabdian","Penunjang");
                    $Icon = array("graduation-cap","search-plus","users","chart-line");
                    ?>
                    <?php for ($i=0; $i < count($JenisKegiatan); $i++) {?>
                    <ul class="nav nav-treeview <ml-1></ml-3>">
                        <li class="nav-item">
                        <a href="<?=base_url("Dashboard/").$JenisKegiatan[$i]?>" class="nav-link <?php if ($SubMenu == $JenisKegiatan[$i]) {
                            echo "active";
                        } ?>">
                            <i class="fas fa-<?=$Icon[$i]?> nav-icon"></i>
                            <p class="font-weight-bold"><?=$JenisKegiatan[$i]?></p>
                        </a>
                        </li>
                    </ul>
                    <?php } ?>
                </li>
            </ul>
        </nav>
        </div>
    </aside>