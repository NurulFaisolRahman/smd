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
    <title>Kuisioner Alumni</title>
  </head>
  <body>
    <div class="container-fluid p-3">
      <div class="row d-flex justify-content-center">
        <div class="col-sm-5">
          <div style="background-color: yellow;" class="card">
            <div class="card-header bg-danger text-light">
              <b>Kuisioner Alumni Yang Telah Bekerja</b>
            </div>
            <div class="card-body border border-primary">
              <div class="container-fluid">
                <div class="row my-3">
                  <div class="col-sm-8 my-1"> 
                    <div class="input-group input-group-sm">
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-primary text-light"><b>Program Studi</b></label>
                      </div>
                      <select class="custom-select custom-select-sm" id="Homebase">										
                        <option value="S1">S1 Ekonomi Pembangunan</option>
                        <option value="S2">S2 Ilmu Ekonomi</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-4 my-1">
                    <div class="input-group input-group-sm">
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-primary text-light"><b>Alumni Tahun</b></label>
                      </div>
                      <input class="form-control form-control-sm" type="text" id="Tahun" data-inputmask='"mask": "9999"' data-mask value="20">
                    </div>
                  </div>
                  <div class="col-sm-4 my-1">
                    <div class="input-group input-group-sm">
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-primary text-light"><b>NIM</b></label>
                      </div>
                      <input class="form-control form-control-sm" type="text" id="NIM" data-inputmask='"mask": "999999999999"' data-mask>
                    </div>
                  </div> 
                  <div class="col-sm-8 my-1">
                    <div class="input-group input-group-sm">
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-primary text-light"><b>Nama</b></label>
                      </div>
                      <input class="form-control form-control-sm" type="text" id="Nama" placeholder="Input Nama">
                    </div>
                  </div> 
                  <div class="col-sm-12 my-1"> 
                    <div class="input-group input-group-sm">
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-primary text-light"><b>Waktu Tunggu Mendapatkan Pekerjaan (WT)</b></label>
                      </div>
                      <select class="custom-select custom-select-sm" id="TungguKerja">										
                        <option value="1">WT < 6 bulan</option>
                        <option value="2">6 ≤ WT ≤ 18 bulan</option>
                        <option value="3">WT > 18 bulan</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-12 my-1"> 
                    <div class="input-group input-group-sm">
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-primary text-light"><b>Tingkat Kesesuaian Bidang Kerja</b></label>
                      </div>
                      <select class="custom-select custom-select-sm" id="BidangKerja">										
                        <option value="1">Rendah</option>
                        <option value="2">Sedang</option>
                        <option value="3">Tinggi</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-12 my-1"> 
                    <div class="input-group input-group-sm">
                      <div class="input-group-prepend">
                        <label class="input-group-text bg-primary text-light"><b>Tingkat/Ukuran Tempat Kerja/Berwirausaha</b></label>
                      </div>
                      <select class="custom-select custom-select-sm" id="TingkatKerja">										
                        <option value="1">Lokal/Wilayah/Berwirausaha tidak Berbadan Hukum</option>
                        <option value="2">Nasional/Berwirausaha Berbadan Hukum</option>
                        <option value="3">Multinasiona/Internasional</option>
                      </select>
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
          if (isNaN($("#Tahun").val()) || $("#Tahun").val() === "") {
            alert('Input Tahun Belum Benar!')
          } else if (isNaN($("#NIM").val()) || $("#NIM").val() === "") {
            alert('Input NIM Hanya Boleh 12 Digit Angka!')
          } else if ($("#Nama").val() === "") {
            alert('Input Nama Tidak Boleh Kosong!')
          } else {
            var fd = new FormData()
						fd.append('Homebase',$("#Homebase").val())
            fd.append('NIM',$("#NIM").val())
            fd.append('Nama',$("#Nama").val())
            fd.append('Tahun',$("#Tahun").val())
            fd.append('TungguKerja',$("#TungguKerja").val())
            fd.append('BidangKerja',$("#BidangKerja").val())
            fd.append('TingkatKerja',$("#TingkatKerja").val())
            $.ajax({
							url: BaseURL+'SMD/InputKuisioner/Alumni',
							type: 'post',
							data: fd,
							contentType: false,
							processData: false,
							success: function(Respon){
								if (Respon == '1') {
                  alert('Terima Kasih Telah Mengisi Kuisioner :)')
									window.location = BaseURL + "SMD/Kuisioner/Alumni"
								}
								else {
									alert(Respon)
								}
							}
						})
          }
        })
      })
    </script>
  </body>
</html>