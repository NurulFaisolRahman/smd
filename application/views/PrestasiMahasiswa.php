<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="<?=base_url('img/favicon.ico')?>" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../bootstrap/css/adminlte.min.css">
    <title>Kuisioner Mahasiswa</title>
  </head>
  <body>
    <div class="container-fluid p-3">
      <div class="row d-flex justify-content-center">
        <div class="col-sm-4">
          <div style="background-color: yellow;" class="card">
            <div class="card-header bg-danger text-light">
              <b>Kuisioner Prestasi Mahasiswa</b>
            </div>
            <div class="card-body border border-primary">
              <div class="container-fluid">
                <div class="row my-3">
                  <div class="col-sm-5 my-1">
                    <div class="input-group input-group-sm">
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-primary text-light"><b>NIM</b></label>
                      </div>
                      <input class="form-control form-control-sm" type="text" id="NIM" data-inputmask='"mask": "999999999999"' data-mask>
                    </div>
                  </div> 
                  <div class="col-sm-7 my-1">
                    <div class="input-group input-group-sm">
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-primary text-light"><b>Jenis</b></label>
                      </div>
                      <select class="custom-select" id="JenisPrestasi">                    
                        <option value="1">Prestasi Akademik</option>
                        <option value="2">Prestasi Non Akademik</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-6 my-1">
                    <div class="input-group input-group-sm">
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-primary text-light"><b>Tingkat</b></label>
                      </div>
                      <select class="custom-select" id="TingkatPrestasi">                    
                        <option value="1">Lokal/Wilayah</option>
                        <option value="2">Nasional</option>
                        <option value="3">Internasional</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-6 my-1">
                    <div class="input-group input-group-sm">
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-primary text-light"><b>Tahun Prestasi</b></label>
                      </div>
                      <input class="form-control form-control-sm" type="text" id="TahunPrestasi" data-inputmask='"mask": "9999"' data-mask value="20">
                    </div>
                  </div>
                  <div class="col-sm-12 my-1">
                    <div class="input-group input-group-sm">
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-primary text-light"><b>Nama Kegiatan</b></label>
                      </div>
                      <input class="form-control form-control-sm" type="text" id="NamaPrestasi">
                    </div>
                  </div> 
                  <div class="col-sm-12 my-1">
                    <div class="input-group input-group-sm">
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-primary text-light"><b>Prestasi Yang Dicapai</b></label>
                      </div>
                      <input class="form-control form-control-sm" type="text" id="CapaianPrestasi">
                    </div>
                  </div>  
                  <div class="col-sm-auto">
                    <button type="button" class="btn btn-danger" id="Kirim"><b>Kirim</b></button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="../../bootstrap/js/jquery.min.js"></script>
    <script src="../../bootstrap/js/popper.min.js" ></script>
    <script src="../../bootstrap/js/bootstrap.min.js"></script>
    <script src="../../bootstrap/inputmask/min/jquery.inputmask.bundle.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $('[data-mask]').inputmask()
        var BaseURL = '<?=base_url()?>'
        $("#Kirim").click(function() {
          if (isNaN($("#NIM").val()) || $("#NIM").val() === "") {
            alert('Input NIM Hanya Boleh 12 Digit Angka!')
          } else if ($("#NamaPrestasi").val() === "") {
            alert('Input Nama Prestasi Tidak Boleh Kosong!')
          } else if ($("#CapaianPrestasi").val() === "") {
            alert('Input Capaian Prestasi Tidak Boleh Kosong!')
          } else if (isNaN($("#TahunPrestasi").val()) || $("#TahunPrestasi").val() === "") {
            alert('Input Tahun Prestasi Hanya Boleh 4 Digit Angka!')
          } else {
            var Data = { NIM: $("#NIM").val(),
                         JenisPrestasi: $("#JenisPrestasi").val(),
                         NamaPrestasi: $("#NamaPrestasi").val(),
                         TingkatPrestasi: $("#TingkatPrestasi").val(),
                         CapaianPrestasi: $("#CapaianPrestasi").val(),
                         TahunPrestasi: $("#TahunPrestasi").val() }
            $.post(BaseURL+"SMD/InputKuisioner/PrestasiMahasiswa", Data).done(function(Respon) {
              if (Respon == '1') {
                alert('Terima Kasih')
                window.location = BaseURL + "SMD/Kuisioner/PrestasiMahasiswa"
              } else {
                alert(Respon)
              }
            })
          }
        })
      })
    </script>
  </body>
</html>