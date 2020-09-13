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
      <div class="modal-dialog modal-lg">
        <div class="modal-content bg-warning">
          <div class="modal-body">
            <div class="container">
							<div class="row">
								<div class="col-sm-5">
                  <div class="input-group input-group-sm mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-primary text-primary"><b>Nama</b></span>
                    </div>
                    <input type="text" class="form-control" id="Nama" placeholder="Input Nama + Gelar">
                  </div>
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
                  <div class="input-group input-group-sm mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-primary text-primary"><b>Kredit Lama</b></span>
                    </div>
                    <input type="text" class="form-control" id="KreditLama">
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-primary text-primary"><b>Tahun</b></span>
                    </div>
                    <input type="text" class="form-control" id="TahunKreditLama" data-inputmask='"mask": "9999"' data-mask value="20">
                  </div>
                  <div class="input-group input-group-sm mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-primary text-primary"><b>Nomor Whatsapp</b></span>
                    </div>
                    <input type="text" class="form-control" id="WA">
                  </div>
                </div>
                <div class="col-sm-7">
                  <div class="input-group input-group-sm mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-primary text-primary"><b>S2</b></span>
                    </div>
                    <input type="text" class="form-control" id="S2" placeholder="Input Jurusan + Universitas">
                  </div>
                  <div class="input-group input-group-sm mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-primary text-primary"><b>S3</b></span>
                    </div>
                    <input type="text" class="form-control" id="S3" placeholder="Input Jurusan + Universitas">
                  </div>
                  <div class="input-group input-group-sm mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-primary text-primary"><b>Bidang Keahlian</b></span>
                    </div>
                    <input type="text" class="form-control" id="BidangKeahlian">
                  </div>
                  <div class="input-group input-group-sm mb-2">
                    <div class="input-group-prepend">
                      <label class="input-group-text bg-primary text-primary"><b>Kesesuaian Dengan Kompetensi Program Studi</b></label>
                    </div>
                    <select class="custom-select" id="KesesuaianKompetensi">
                      <option value="1">Sesuai</option>
                      <option value="2">Tidak Sesuai</option>
                    </select>
                  </div>
                  <div class="input-group input-group-sm mb-2">
                    <div class="input-group-prepend">
                      <label class="input-group-text bg-primary text-primary"><b>Kesesuaian Dengan Mata Kuliah Yang Diampu</b></label>
                    </div>
                    <select class="custom-select" id="KesesuaianBidang">
                      <option value="1">Sesuai</option>
                      <option value="2">Tidak Sesuai</option>
                    </select>
                  </div>
                  <div class="input-group input-group-sm mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-primary text-primary"><b>Sertifikat Pendidik Profesional</b></span>
                    </div>
                    <input type="text" class="form-control" id="SertifikatPendidik">
                  </div>
                  <div class="input-group input-group-sm mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-primary text-primary"><b>Sertifikat Kompetensi/Profesi/Industri</b></span>
                    </div>
                    <input type="text" class="form-control" id="SertifikatKompetensi">
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="input-group input-group-sm mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-primary text-primary"><b>Mata Kuliah Yang Diampu Pada<br>Program Studi Yang Diakreditasi</b></span>
                    </div>
                    <textarea class="form-control" id="MengajarPS" rows="2"></textarea>
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="input-group input-group-sm mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-primary text-primary"><b>Mata Kuliah Yang Diampu Pada<br>Program Studi Lain</b></span>
                    </div>
                    <textarea class="form-control" id="MengajarPSLain" rows="2"></textarea>
                  </div>
                </div>
              </div>
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
          } else if (isNaN($("#TahunKreditLama").val())) {
            alert('Tahun Kredit Lama Belum BEnar!')
          } else if (isNaN(parseFloat($("#KreditLama").val().replace(',','.')))) {
						alert('Kredit Lama Belum Benar!')
					} else {
            var Pangkat = $("#Golongan").val().split("/") 
            var Akun = { NIP: $("#NIP").val(),
                         NIDN: $("#NIDN").val(),
                         Nama: $("#Nama").val(),
                         Pangkat: Pangkat[0],
                         Golongan: Pangkat[1],
                         Jabatan: $("#Jabatan").val(),
                         Tahun: $("#TahunKreditLama").val(),
												 KreditLama: $("#KreditLama").val(),
                         WA: $("#WA").val(),
                         S2: $("#S2").val(),
                         S3: $("#S3").val(),
                         BidangKeahlian: $("#BidangKeahlian").val(),
                         KesesuaianKompetensi: $("#KesesuaianKompetensi").val(),
                         KesesuaianBidang: $("#KesesuaianBidang").val(),
                         SertifikatPendidik: $("#SertifikatPendidik").val(),
                         SertifikatKompetensi: $("#SertifikatKompetensi").val(),
                         MengajarPS: $("#MengajarPS").val(),
                         MengajarPSLain: $("#MengajarPSLain").val() }
            $.post(BaseURL+"Admin/Daftar", Akun).done(function(Respon) {
              if (Respon == '1') {
                alert('Akun Dosen Dengan NIP '+$("#NIP").val()+' & Password '+$("#NIP").val()+' Berhasil Di Tambahkan!')
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