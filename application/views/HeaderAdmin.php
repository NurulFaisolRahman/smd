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
              <a href="<?=base_url("Admin/AkunDosen")?>" class="nav-link <?php if ($Halaman == "Akun Dosen") { echo "active";} ?>">
              <i class="nav-icon fas fa-graduation-cap"></i>
              <p><b>Dosen Tetap</b></p> 
              </a>
            </li>
            <li class="nav-item">
              <a href="<?=base_url("Admin/SitasiDTPS")?>" class="nav-link <?php if ($Halaman == "Sitasi DTPS") { echo "active";} ?>">
              <i class="nav-icon fas fa-quote-left"></i>
              <p><b>Sitasi DTPS</b></p> 
              </a>
            </li>
            <li class="nav-item">
              <a href="<?=base_url("Admin/KerjaSama")?>" class="nav-link <?php if ($Halaman == "Kerja Sama") { echo "active";} ?>">
              <i class="nav-icon fas fa-handshake"></i>
              <p><b>Kerja Sama</b></p> 
              </a>
            </li>
            <li class="nav-item">
              <a href="<?=base_url("Admin/MahasiswaBaru")?>" class="nav-link <?php if ($Halaman == "Mahasiswa Baru") { echo "active";} ?>">
              <i class="nav-icon fas fa-users"></i>
              <p><b>Mahasiswa Baru</b></p> 
              </a>
            </li>
            <li class="nav-item">
              <a href="<?=base_url("Admin/MahasiswaAsing")?>" class="nav-link <?php if ($Halaman == "Mahasiswa Asing") { echo "active";} ?>">
              <i class="nav-icon fas fa-users"></i>
              <p><b>Mahasiswa Asing</b></p> 
              </a>
            </li>
            <li class="nav-item">
              <a href="<?=base_url("Admin/DosenKontrak")?>" class="nav-link <?php if ($Halaman == "Dosen Kontrak") { echo "active";} ?>">
              <i class="nav-icon fas fa-graduation-cap"></i>
              <p><b>Dosen Kontrak</b></p> 
              </a>
            </li>
            <li class="nav-item">
              <a href="<?=base_url("Admin/PenggunaanDana")?>" class="nav-link <?php if ($Halaman == "Penggunaan Dana") { echo "active";} ?>">
              <i class="nav-icon fas fa-wallet"></i>
              <p><b>Penggunaan Dana</b></p> 
              </a>
            </li>
            <li class="nav-item">
              <a href="<?=base_url("Admin/Kurikulum")?>" class="nav-link <?php if ($Halaman == "Kurikulum") { echo "active";} ?>">
              <i class="nav-icon fas fa-book"></i>
              <p><b>Kurikulum</b></p> 
              </a>
            </li>
            <li class="nav-item">
              <a href="<?=base_url("Admin/IPKLulusan")?>" class="nav-link <?php if ($Halaman == "IPK Lulusan") { echo "active";} ?>">
              <i class="nav-icon fas fa-chart-bar"></i>
              <p><b>IPK Lulusan</b></p> 
              </a>
            </li>
            <li class="nav-item">
              <a href="<?=base_url("Admin/PrestasiMhs")?>" class="nav-link <?php if ($Halaman == "Prestasi Mahasiswa") { echo "active";} ?>">
              <i class="nav-icon fa fa-trophy"></i>
              <p><b>Prestasi Mahasiswa</b></p> 
              </a>
            </li>
            <li class="nav-item">
            <a href="" class="nav-link" data-toggle="modal" data-target="#ModalBorang">
              <i class="nav-icon fas fa-file-excel"></i>
              <p><b>Borang</b></p>
              </a>
            </li>
          </ul>
        </nav>
        </div>
      </aside> 
      <div class="modal fade" id="ModalBorang">
        <div class="modal-dialog modal-sm modal-dialog-centered">
          <div class="modal-content bg-warning">
            <div class="modal-body">
              <div class="input-group mb-1">
                <div class="input-group-prepend">
                  <label class="input-group-text bg-primary"><b>Homebase</b></label>
                </div>
                <select class="custom-select" id="Homebase">										
                  <option value="S1">S1</option>
                  <option value="S2">S2</option>
                </select>
              </div> 
              <div class="input-group mb-1">
                <div class="input-group-prepend">
                  <label class="input-group-text bg-primary"><b>Tahun / TS</b></label>
                </div>
                <a id="LampiranDTPS" href="LampiranDTPS" download="LampiranDTPS"></a>
                <input class="form-control" type="text" id="TS"  data-inputmask='"mask": "9999"' data-mask value="20">
              </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-danger" data-dismiss="modal"><b>Tutup</b></button>
              <button type="submit" class="btn btn-success" id="DownloadBorang"><b>Download</b></button>
            </div>
          </div>
        </div>
      </div>