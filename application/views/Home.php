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
                          <div class="card-header bg-warning"><b class="text-light">AUTENTIKASI</b></div>
                          <div class="card-body">
                            <div class="input-group input-group-sm mb-2">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><b>NIP</b></span>
                              </div>
                              <input type="text" class="form-control" id="NIP">
                            </div>
                            <div class="input-group input-group-sm mb-2">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><b>Password</b></span>
                              </div>
                              <input type="password" class="form-control" id="Password">
                            </div>
                            <div class="btn btn-primary" id="Masuk"><b>Masuk</b></div>
                            <div class="btn btn-success" id="Daftar"><b>Daftar</b></div>
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
          var Akun = { NIP: $("#NIP").val(),
                       Password: $("#Password").val() }
          $.post(BaseURL+"SMD/Masuk", Akun).done(function(Respon) {
            Auth(Respon)
          })
          return false
        })
        $("#Daftar").click(function() {
          if ($("#NIP").val().length != 18 || isNaN($("#NIP").val())) {
            alert('Mohon Isi NIP 18 Angka!')
          } else if ($("#Password").val() === "") {
            alert('Mohon Isi Password!')
          } else {
            var Akun = { NIP: $("#NIP").val(),
                         Password: $("#Password").val() }
            $.post(BaseURL+"SMD/Daftar", Akun).done(function(Respon) {
              Auth(Respon)
            })
          }
          return false
        })
        function Auth(Pesan) {
          if (Pesan == '1') {
            window.location = BaseURL + "Dashboard"
          }
          else {
            alert(Pesan)
          }
        }
      })
    </script>
  </body>
</html>