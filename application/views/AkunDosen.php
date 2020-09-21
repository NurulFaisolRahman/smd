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
                            </tr>
                          </thead>
                          <tbody>
                            <?php $No = 1; foreach ($Dosen as $key) { ?>
                              <tr>	
                                <td class="text-center align-middle"><?=$No++?></td>
                                <td class="align-middle"><?=$key['NIP']?></td>
                                <td class="align-middle"><?=$key['Nama']?></td>
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
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-warning">
          <div class="modal-body">
            <div class="container">
							<div class="row">
								<div class="col-sm-12">
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
					// dom:'lfrtip',
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

        $("#DownloadBorang").click(function() {
					var Pisah = $('#TS').val().split('-')
          if (Pisah[1]-Pisah[0] >= 0) {
            window.location = BaseURL + 'Admin/Borang/'+$('#TS').val()
            $.post(BaseURL+"Admin"+"/DTPS").done(function(Respon) {
              var array = JSON.parse(Respon) 
              array.forEach(function(object) {
                if (object.BuktiPendidik != null) {
                  $('#LampiranDTPS').attr('href',BaseURL+'Dosen/'+object.BuktiPendidik)		
                  $('#LampiranDTPS').attr('Download',object.BuktiPendidik) 
                  $('#LampiranDTPS')[0].click()
                }
                if (object.BuktiKompetensi != null) {
                  $('#LampiranDTPS').attr('href',BaseURL+'Dosen/'+object.BuktiKompetensi)		
                  $('#LampiranDTPS').attr('Download',object.BuktiKompetensi) 
                  $('#LampiranDTPS')[0].click()
                }
              })
            }) 	
          }
          else {
            alert('Input Tahun Belum Benar!')
          }
        })

				$("#Daftar").click(function() {
          if ($("#NIP").val().length != 18 || isNaN($("#NIP").val())) {
            alert('Mohon Isi NIP 18 Angka!')
          } else if ($("#Nama").val() === "") {
            alert('Mohon Isi Nama + Gelar!')
          } else {
            var Akun = { NIP: $("#NIP").val(),
                         Nama: $("#Nama").val(),
                         Tahun: $("#TahunKreditLama").val(),
												 KreditLama: $("#KreditLama").val() }
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