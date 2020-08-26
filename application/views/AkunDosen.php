      <div class="content-wrapper">
      <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <div class="row"> 
              <div class="col-sm-12 mt-2">
                <div class="container-fluid border border-warning rounded bg-light">
                  <div class="row align-items-center">
                    <div class="col-sm-12 my-2 ">    
                    <button type="button" class="btn btn-primary text-light mb-2" data-toggle="modal" data-target="#ModalAkunDosen"><i class="fa fa-plus"></i> <b>Akun Dosen</b></button> 
                      <div class="table-responsive mb-2">
                        <table id="TabelAkunDosen" class="table table-bordered table-striped">
                          <thead class="bg-warning">
                            <tr>
                              <th class="text-center align-middle">No</th>
                              <th class="align-middle">NIP</th>
                              <th class="align-middle">Nama</th>
                              <th class="text-center align-middle">Pangkat</th>
                              <th class="text-center align-middle">Golongan</th> 
                              <th class="text-center align-middle">Jabatan</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php $No = 1; foreach ($Dosen as $key) { ?>
                              <tr>	
                                <td class="text-center align-middle"><?=$No++?></td>
                                <td class="align-middle"><?=$key['NIP']?></td>
                                <td class="align-middle"><?=$key['Nama']?></td>
                                <td class="text-center align-middle"><?=$key['Pangkat']?></td>
                                <td class="text-center align-middle"><?=$key['Golongan']?></td>
                                <td class="text-center align-middle"><?=$key['Jabatan']?></td>
                              </tr>
                            <?php } ?>
                          </tbody>
                        </table>
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
    <div class="modal fade" id="ModalAkunDosen">
      <div class="modal-dialog">
        <div class="modal-content bg-warning">
          <div class="modal-body">
            <div class="input-group input-group-sm mb-2">
              <div class="input-group-prepend">
                <span class="input-group-text bg-primary text-primary"><b>NIP</b></span>
              </div>
              <input type="text" class="form-control" id="NIP" data-inputmask='"mask": "999999999999999999"' data-mask>
            </div>
            <div class="input-group input-group-sm mb-2">
              <div class="input-group-prepend">
                <span class="input-group-text bg-primary text-primary"><b>NIDN</b></span>
              </div>
              <input type="text" class="form-control" id="NIDN" data-inputmask='"mask": "9999999999"' data-mask>
            </div>
            <div class="input-group input-group-sm mb-2">
              <div class="input-group-prepend">
                <span class="input-group-text bg-primary text-primary"><b>Nama</b></span>
              </div>
              <input type="text" class="form-control" id="Nama" placeholder="Nama + Gelar">
            </div>
            <div class="input-group input-group-sm mb-2">
              <div class="input-group-prepend">
                <span class="input-group-text bg-primary text-primary"><b>Password</b></span>
              </div>
              <input type="password" class="form-control" id="Sandi" placeholder="Minilmal 8 Karakter">
            </div>
            <div class="input-group input-group-sm mb-2">
              <div class="input-group-prepend">
                <label class="input-group-text bg-primary text-primary"><b>Golongan</b></label>
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
                <label class="input-group-text bg-primary text-primary"><b>Jabatan</b></label>
              </div>
              <select class="custom-select" id="Jabatan">
                <option value="Asisten Ahli">Asisten Ahli</option>
                <option value="Lektor">Lektor</option>
                <option value="Lektor Kepala">Lektor Kepala</option>
                <option value="Profesor">Profesor</option>
              </select>
            </div>
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-danger" data-dismiss="modal"><b>Tutup</b></button>
            <button type="submit" class="btn btn-success" id="Daftar"><b>Simpan</b></button>
          </div>
        </div>
      </div>
    </div>
    <script src="<?=base_url('bootstrap/js/jquery.min.js')?>"></script>
    <script src="<?=base_url('bootstrap/js/popper.min.js')?>" ></script>
    <script src="<?=base_url('bootstrap/js/bootstrap.min.js')?>"></script>
    <script src="<?=base_url('bootstrap/js/adminlte.min.js')?>"></script>
    <script src="<?=base_url('bootstrap/datatables/jquery.dataTables.js')?>"></script>
		<script src="<?=base_url('bootstrap/datatables-bs4/js/dataTables.bootstrap4.js')?>"></script>
		<script src="<?=base_url('bootstrap/inputmask/min/jquery.inputmask.bundle.min.js')?>"></script>
		<script>
			jQuery(document).ready(function($) {
				"use strict";

				$('[data-mask]').inputmask()

				var BaseURL = '<?=base_url()?>';

        $('#TabelAkunDosen').DataTable( {
					dom:'lfrtip',
					"ordering": false,
          "lengthMenu": [ 5, 10, 20, 30 ],
					"language": {
						"paginate": {
							'previous': '<b class="text-primary"><</b>',
							'next': '<b class="text-primary">></b>'
						}
					}
				});
				
        $("#Simpan").click(function() {
          var Kajur = { NIP: $("#Kajur").val() }
          $.post(BaseURL+"Admin/Kajur", Kajur).done(function(Respon) {
            window.location = BaseURL + "Admin/AkunDosen"
          })
        })

				$("#Daftar").click(function() {
          if ($("#NIP").val().length != 18 || isNaN($("#NIP").val())) {
            alert('Mohon Isi NIP 18 Angka!')
          } else if ($("#NIDN").val().length != 10 || isNaN($("#NIDN").val())) {
            alert('Mohon Isi NIDN 10 Angka!')
          } else if ($("#Nama").val() === "") {
            alert('Mohon Isi Nama + Gelar!')
          } else if ($("#Sandi").val() === "" || $("#Sandi").val().length < 8) {
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
                window.location = BaseURL + "Admin/AkunDosen"
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