<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <title>SMD</title>
    <style type="text/css">
      html,
      body,
      header,
      #intro {
          height: 100vh;
      }
      body{
        overflow: auto;
      }
      #intro {
        background: url(img/monitoring.jpg) no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        background-size: cover;
        -o-background-size: cover;
      }
      #Judul {
        background-color: rgba(0, 128, 255, 0.8);
      }
      #Merah {
        color: #ff0000;
      }
    </style>
  </head>
  <body>
    <header id="intro">
      <div class="d-flex align-items-center h-100">
        <div class="container">
          <div class="row justify-content-sm-center">
            <div class="col-sm-6">
              <div class="d-flex align-items-center h-100">
                <div class="container-fluid">
                  <div class="row">
                    <div id="Judul" class="col-sm-12 mb-1">
                    <h3 id="Merah" class="text-center"><b>SISTEM MONITORING DOSEN</b></h3>
                    <h3 class="text-center text-warning"><b>JURUSAN ILMU EKONOMI</b></h3>
                    <h4 class="text-center text-light"><b>UNIVERSITAS TRUNOJOYO MADURA</b></h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="d-flex align-items-center h-100">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-sm-9">
                        <div class="card">
                          <div class="card-header bg-warning"><b class="text-primary">AUTENTIKASI</b></div>
                          <div class="card-body">
                            <ul class="nav nav-pills mb-2 nav-fill" id="pills-tab" role="tablist">
                              <li class="nav-item">
                                <a class="nav-link active btn btn-outline-success" id="pills-Masuk-tab" data-toggle="pill" href="#pills-Masuk" role="tab" aria-controls="pills-Masuk" aria-selected="true"><b>Masuk</b></a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link btn btn-outline-success" id="pills-Daftar-tab" data-toggle="pill" href="#pills-Daftar" role="tab" aria-controls="pills-Daftar" aria-selected="false"><b>Daftar</b></a>
                              </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                              <div class="tab-pane fade show active" id="pills-Masuk" role="tabpanel" aria-labelledby="pills-Masuk-tab">
                                <div class="input-group input-group-sm mb-2">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text bg-warning text-primary"><b>NIP</b></span>
                                  </div>
                                  <input type="text" class="form-control" id="nip">
                                </div>
                                <div class="input-group input-group-sm mb-2">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text bg-warning text-primary"><b>Password</b></span>
                                  </div>
                                  <input type="password" class="form-control" id="sandi">
                                </div>
                                <div class="btn btn-primary" id="Masuk"><b>Masuk</b></div>
                              </div>
                              <div class="tab-pane fade" id="pills-Daftar" role="tabpanel" aria-labelledby="pills-Daftar-tab">
                                <div class="input-group input-group-sm mb-2">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text bg-warning text-primary"><b>NIP</b></span>
                                  </div>
                                  <input type="text" class="form-control" id="NIP" placeholder="Isi NIP">
                                </div>
                                <div class="input-group input-group-sm mb-2">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text bg-warning text-primary"><b>NIDN</b></span>
                                  </div>
                                  <input type="text" class="form-control" id="NIDN" placeholder="Isi NIDN">
                                </div>
                                <div class="input-group input-group-sm mb-2">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text bg-warning text-primary"><b>Nama</b></span>
                                  </div>
                                  <input type="text" class="form-control" id="Nama" placeholder="Nama + Gelar">
                                </div>
                                <div class="input-group input-group-sm mb-2">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text bg-warning text-primary"><b>Password</b></span>
                                  </div>
                                  <input type="password" class="form-control" id="Sandi" placeholder="Minilmal 8 Karakter">
                                </div>
                                <div class="input-group mb-2">
                                  <div class="input-group-prepend">
                                    <label class="input-group-text bg-warning text-primary"><b>Golongan</b></label>
                                  </div>
                                  <select class="custom-select" id="Golongan">
                                    <option value="Penata Muda/IIIa">IIIa</option>
                                    <option value="Penata Muda Tk. I/IIIb">IIIb</option>
                                    <option value="Penata/IIIc">IIIc</option>
                                    <option value="Penata Tk. I/IIId">IIId</option>
                                    <option value="Pembina/IVa">IVa</option>
                                    <option value="Pembina Tk. I/IVb">IVb</option>
                                    <option value="Pembina Utama Muda/IVc">IVc</option>
                                    <option value="Pembina Utama Madya/IVd">IVd</option>
                                    <option value="Pembina Utama/IVe">IVe</option>
                                  </select>
                                </div>
                                <div class="input-group mb-2">
                                  <div class="input-group-prepend">
                                    <label class="input-group-text bg-warning text-primary"><b>Jabatan</b></label>
                                  </div>
                                  <select class="custom-select" id="Jabatan">
                                    <option value="Asisten Ahli">Asisten Ahli</option>
                                    <option value="Lektor">Lektor</option>
                                    <option value="Lektor Kepala">Lektor Kepala</option>
                                    <option value="Profesor">Profesor</option>
                                  </select>
                                </div>
                                <div class="btn btn-primary" id="Daftar"><b>Daftar</b></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/popper.min.js" ></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script>
      var BaseURL = '<?=base_url()?>'
      jQuery(document).ready(function($) {
        "use strict";
        $("#Masuk").click(function() {
          var Akun = { NIP: $("#nip").val(),
                       Password: $("#sandi").val() }
          $.post(BaseURL+"SMD/Masuk", Akun).done(function(Respon) {
            Auth(Respon)
          })
          return false
        })
        $("#Daftar").click(function() {
          if ($("#NIP").val().length != 18 || isNaN($("#NIP").val())) {
            alert('Mohon Isi NIP 18 Angka!')
          } else if ($("#NIDN").val().length != 10 || isNaN($("#NIDN").val())) {
            alert('Mohon Isi NIDN 10 Angka!')
          } else if ($("#Nama").val() === "") {
            alert('Mohon Isi Nama + Gelar!')
          } else if ($("#Sandi").val() === "" || $("#Sandi").val().length != 8) {
            alert('Password Minimal 8 Karakter!')
          } else {
            var Pangkat = $("#Golongan").val().split("/") 
            var Akun = { NIP: $("#NIP").val(),
                         NIDN: $("#NIDN").val(),
                         Nama: $("#Nama").val(),
                         Password: $("#Sandi").val(),
                         Pangkat: Pangkat[0],
                         Golongan: Pangkat[1],
                         Jabatan: $("#Jabatan").val() }
            $.post(BaseURL+"SMD/Daftar", Akun).done(function(Respon) {
              Auth(Respon)
            })
          }
          return false
        })
        function Auth(Pesan) {
          if (Pesan == '1') {
            window.location = BaseURL + "Dashboard/Profil"
          }
          else {
            alert(Pesan)
          }
        }
      })
    </script>
  </body>
</html>