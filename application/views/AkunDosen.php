      <div class="content-wrapper">
      <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-12 mt-2">
                <ul class="nav nav-pills mb-2 border border-warning rounded bg-light" id="pills-tab" role="tablist">
                  <li class="nav-item">
                      <a class="nav-link active" id="pills-AkunDosen-tab" data-toggle="pill" href="#pills-AkunDosen" role="tab" aria-controls="pills-AkunDosen" aria-selected="true"><i class="nav-icon fas fa-plus"></i><b> Akun Dosen</b></a>
                  </li>
                </ul>
                <div class="tab-content border border-warning rounded bg-light" id="pills-tabContent">
                  <div class="tab-pane fade show active" id="pills-AkunDosen" role="tabpanel" aria-labelledby="pills-AkunDosen-tab">
                    <div class="container-fluid">
                      <div class="row align-items-center">
                        <div class="col-sm-4 my-2 ">     
                          <div class="input-group input-group-sm mb-2">
                            <div class="input-group-prepend">
                              <span class="input-group-text bg-warning text-primary"><b>NIP</b></span>
                            </div>
                            <input type="text" class="form-control" id="NIP" data-inputmask='"mask": "999999999999999999"' data-mask>
                          </div>
                          <div class="input-group input-group-sm mb-2">
                            <div class="input-group-prepend">
                              <span class="input-group-text bg-warning text-primary"><b>NIDN</b></span>
                            </div>
                            <input type="text" class="form-control" id="NIDN" data-inputmask='"mask": "9999999999"' data-mask>
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
                          <div class="input-group input-group-sm mb-2">
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
                          <div class="input-group input-group-sm mb-2">
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
                          <div class="btn btn-primary" id="Daftar"><b>Simpan</b></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
		</div>
    <script src="<?=base_url('bootstrap/js/jquery.min.js')?>"></script>
    <script src="<?=base_url('bootstrap/js/popper.min.js')?>" ></script>
    <script src="<?=base_url('bootstrap/js/bootstrap.min.js')?>"></script>
		<script src="<?=base_url('bootstrap/js/adminlte.min.js')?>"></script>
		<script src="<?=base_url('bootstrap/inputmask/min/jquery.inputmask.bundle.min.js')?>"></script>
		<script>
			jQuery(document).ready(function($) {
				"use strict";

				$('[data-mask]').inputmask()

				var BaseURL = '<?=base_url()?>';
				
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
            $.post(BaseURL+"Admin/Daftar", Akun).done(function(Respon) {
              if (Respon == '1') {
                alert('Akun Dosen Dengan NIP '+$("#NIP").val()+' & Password '+$("#Sandi").val()+' Berhasil Di Tambahkan!')
                $("#NIP").val('')
                $("#NIDN").val('')
                $("#Nama").val('')
                $("#Sandi").val('')
              }
              else {
                alert(Respon)
              }
            })
          }
        })
			})
		</script>
  </body>
</html>