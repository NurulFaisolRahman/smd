<div class="content-wrapper">
      <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <div class="row"> 
              <div class="col-sm-12 mt-2">
                <div class="container-fluid border border-warning rounded bg-light">
                  <div class="row align-items-center">
                    <div class="col-sm-12 my-2 ">    
                    <button type="button" class="btn btn-primary text-light mb-2" data-toggle="modal" data-target="#ModalInputPenggunaanDana"><i class="fa fa-plus"></i> <b>Input Data</b></button> 
                      <div class="table-responsive mb-2">
                        <table id="TabelPenggunaanDana" class="table table-bordered table-striped">
                          <thead class="bg-warning">
                            <tr>
                              <th class="text-center align-middle">No</th>
                              <th class="text-center align-middle">Homebase</th>
                              <th class="text-center align-middle">Tahun</th>
                              <th class="text-center align-middle">Aksi</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php $No = 1; foreach ($PenggunaanDana as $key) { ?>
                              <tr>	
                                <td class="text-center align-middle"><?=$No++?></td>
                                <td class="text-center align-middle"><?=$key['Homebase']?></td>
                                <td class="text-center align-middle"><?=$key['Tahun']?></td>
                                <td class="text-center align-middle">
                                  <button Edit="<?=$key['Homebase']."|".$key['Tahun']."|".$key['Dosen']."|".$key['TenagaKependidikan']."|".$key['OperasionalPembelajaran']."|".$key['OperasionalTidakLangsung']."|".$key['OperasionalKemahasiswaan']."|".$key['Penelitian']."|".$key['PkM']."|".$key['SDM']."|".$key['Sarana']."|".$key['Prasarana']?>" class="btn btn-sm btn-warning Edit"><i class="fas fa-edit"></i></button>
                                  <button Hapus="<?=$key['Homebase']."|".$key['Tahun']?>" class="btn btn-sm btn-danger Hapus"><i class="fas fa-trash"></i></button>  
                                </td> 
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
    <div class="modal fade" id="ModalInputPenggunaanDana">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content bg-warning">
          <div class="modal-body">
            <div class="container">
							<div class="row">
                <div class="col-sm-6">
                  <div class="input-group input-group-sm mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-primary"><b>Homebase</b></span>
                    </div>
                    <select class="custom-select" id="homebase">
                      <option value="S1">S1</option>
                      <option value="S2">S2</option>
                    </select>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="input-group input-group-sm mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-primary"><b>Tahun</b></span>
                    </div>
                    <input type="text" class="form-control" id="tahun" data-inputmask='"mask": "9999"' data-mask value="20"> 
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="table-responsive mt-1">
                    <table class="table table-sm table-bordered table-striped">
                      <thead class="bg-danger">
                        <tr style="font-size: 10pt;" class="text-light text-center">
                          <th style="width: 4%;" class="align-middle">No</th>
                          <th style="width: 40%;"class="align-middle">Jenis Penggunaan</th>
                          <th style="width: 56%;"class="align-middle">Input</th>
                        </tr>
                      </thead>
                      <tbody class="bg-primary">
                      <?php 
                        $Tanya = array('Biaya Dosen (Gaji, Honor)',
                                       'Biaya Tenaga Kependidikan (Gaji, Honor)',
                                       'Biaya Operasional Pembelajaran (Bahan dan Peralatan Habis Pakai)',
                                       'Biaya Operasional Tidak Langsung (Listrik, Gas, Air, Pemeliharaan Gedung, Pemeliharaan Sarana, Uang Lembur, Telekomunikasi, Konsumsi, Transport Lokal, Pajak, Asuransi, dll.)',
                                       'Biaya operasional kemahasiswaan (penalaran, minat, bakat, dan kesejahteraan).',
                                       'Biaya Penelitian',
                                       'Biaya PkM',
                                       'Biaya Investasi SDM',
                                       'Biaya Investasi Sarana',
                                       'Biaya Investasi Prasarana'); 
                      for ($i=0; $i < count($Tanya); $i++) { ?>
                        <tr class="text-light">
                          <td class="text-center font-weight-bold"><?=($i+1)?></td>
                          <td class="text-justify font-weight-bold"><?=$Tanya[$i]?></td>
                          <td class="text-left">
                            <div class="input-group input-group-sm my-1">
                              <input class="form-control form-control-sm" type="text" id="I<?=$i?>" placeholder="Input Hanya Angka Saja">
                            </div>
                          </td>
                        </tr>
                      <?php } ?>
                      </tbody>
                    </table>
                  </div> 
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-danger" data-dismiss="modal"><b>Tutup</b></button>
            <button type="submit" class="btn btn-success" id="InputPenggunaanDana"><b>Simpan</b></button>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="ModalEditPenggunaanDana">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content bg-warning">
          <div class="modal-body">
            <div class="container">
							<div class="row">
                <div class="col-sm-6">
                  <div class="input-group input-group-sm mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-primary"><b>Homebase</b></span>
                    </div>
                    <input type="hidden" class="form-control" id="homebaselama"> 
                    <select class="custom-select" id="Edithomebase">
                      <option value="S1">S1</option>
                      <option value="S2">S2</option>
                    </select>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="input-group input-group-sm mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-primary"><b>Tahun</b></span>
                    </div>
                    <input type="hidden" class="form-control" id="tahunlama">
                    <input type="text" class="form-control" id="Edittahun" data-inputmask='"mask": "9999"' data-mask value="20"> 
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="table-responsive mt-1">
                    <table class="table table-sm table-bordered table-striped">
                      <thead class="bg-danger">
                        <tr style="font-size: 10pt;" class="text-light text-center">
                          <th style="width: 4%;" class="align-middle">No</th>
                          <th style="width: 40%;"class="align-middle">Jenis Penggunaan</th>
                          <th style="width: 56%;"class="align-middle">Input</th>
                        </tr>
                      </thead>
                      <tbody class="bg-primary">
                      <?php 
                        $Tanya = array('Biaya Dosen (Gaji, Honor)',
                                       'Biaya Tenaga Kependidikan (Gaji, Honor)',
                                       'Biaya Operasional Pembelajaran (Bahan dan Peralatan Habis Pakai)',
                                       'Biaya Operasional Tidak Langsung (Listrik, Gas, Air, Pemeliharaan Gedung, Pemeliharaan Sarana, Uang Lembur, Telekomunikasi, Konsumsi, Transport Lokal, Pajak, Asuransi, dll.)',
                                       'Biaya operasional kemahasiswaan (penalaran, minat, bakat, dan kesejahteraan).',
                                       'Biaya Penelitian',
                                       'Biaya PkM',
                                       'Biaya Investasi SDM',
                                       'Biaya Investasi Sarana',
                                       'Biaya Investasi Prasarana'); 
                      for ($i=0; $i < count($Tanya); $i++) { ?>
                        <tr class="text-light">
                          <td class="text-center font-weight-bold"><?=($i+1)?></td>
                          <td class="text-justify font-weight-bold"><?=$Tanya[$i]?></td>
                          <td class="text-left">
                            <div class="input-group input-group-sm my-1">
                              <input class="form-control form-control-sm" type="text" id="EditI<?=$i?>" placeholder="Input Hanya Angka Saja">
                            </div>
                          </td>
                        </tr>
                      <?php } ?>
                      </tbody>
                    </table>
                  </div> 
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-danger" data-dismiss="modal"><b>Tutup</b></button>
            <button type="submit" class="btn btn-success" id="UpdatePenggunaanDana"><b>Simpan</b></button>
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

        $("#InputPenggunaanDana").click(function() {
          if (isNaN($("#tahun").val()) || $("#tahun").val() == "") {
            alert('Input Tahun Belum Benar!')
          } else {
            for (let i = 0; i < 10; i++) {
              if (isNaN(parseInt($("#I"+i).val()))) {
                alert('Input Penggunaan Dana Nomer '+(i+1)+' Belum Benar!')
                return true
                break
              } 
            }
            var fd = new FormData()
						fd.append('Homebase',$("#homebase").val())
						fd.append('Tahun',$("#tahun").val())
						fd.append('Dosen',parseInt($("#I0").val()))
            fd.append('TenagaKependidikan',parseInt($("#I1").val()))
						fd.append('OperasionalPembelajaran',parseInt($("#I2").val()))
            fd.append('OperasionalTidakLangsung',parseInt($("#I3").val()))
            fd.append('OperasionalKemahasiswaan',parseInt($("#I4").val()))
						fd.append('Penelitian',parseInt($("#I5").val()))
            fd.append('PkM',parseInt($("#I6").val()))
            fd.append('SDM',parseInt($("#I7").val()))
						fd.append('Sarana',parseInt($("#I8").val()))
            fd.append('Prasarana',parseInt($("#I9").val()))
            $.ajax({
							url: BaseURL+'Admin/InputPenggunaanDana',
							type: 'post',
							data: fd,
							contentType: false,
							processData: false,
							success: function(Respon){
								if (Respon == '1') {
									window.location = BaseURL + "Admin/PenggunaanDana"
								}
								else {
									alert(Respon)
								}
							}
						})
          }
        })

        $(document).on("click",".Edit",function(){
					var Data = $(this).attr('Edit')
					var Pisah = Data.split("|");
					$('#homebaselama').val(Pisah[0])
          $('#Edithomebase').val(Pisah[0])
          $('#tahunlama').val(Pisah[1])
					$('#Edittahun').val(Pisah[1])
          $('#EditI0').val(Pisah[2])
					$("#EditI1").val(Pisah[3])
          $('#EditI2').val(Pisah[2])
					$("#EditI3").val(Pisah[3])
          $('#EditI4').val(Pisah[2])
					$("#EditI5").val(Pisah[3])
          $('#EditI6').val(Pisah[2])
					$("#EditI7").val(Pisah[3])
          $('#EditI8').val(Pisah[2])
					$("#EditI9").val(Pisah[3])
          $('#ModalEditPenggunaanDana').modal("show")
				}) 

				$("#UpdatePenggunaanDana").click(function() {
					if (isNaN($("#Edittahun").val()) || $("#Edittahun").val() == "") {
            alert('Input Tahun Belum Benar!')
          } else {
            for (let i = 0; i < 10; i++) {
              if (isNaN(parseInt($("#EditI"+i).val()))) {
                alert('Input Penggunaan Dana Nomer '+(i+1)+' Belum Benar!')
                return true
                break
              } 
            }
            var fd = new FormData()
						fd.append('Homebase',$("#Edithomebase").val())
            fd.append('HomebaseLama',$("#homebaselama").val())
						fd.append('Tahun',$("#Edittahun").val())
            fd.append('TahunLama',$("#tahunlama").val())
						fd.append('Dosen',parseInt($("#EditI0").val()))
            fd.append('TenagaKependidikan',parseInt($("#EditI1").val()))
						fd.append('OperasionalPembelajaran',parseInt($("#EditI2").val()))
            fd.append('OperasionalTidakLangsung',parseInt($("#EditI3").val()))
            fd.append('OperasionalKemahasiswaan',parseInt($("#EditI4").val()))
						fd.append('Penelitian',parseInt($("#EditI5").val()))
            fd.append('PkM',parseInt($("#EditI6").val()))
            fd.append('SDM',parseInt($("#EditI7").val()))
						fd.append('Sarana',parseInt($("#EditI8").val()))
            fd.append('Prasarana',parseInt($("#EditI9").val()))
            $.ajax({
							url: BaseURL+'Admin/UpdatePenggunaanDana',
							type: 'post',
							data: fd,
							contentType: false,
							processData: false,
							success: function(Respon){
								if (Respon == '1') {
									window.location = BaseURL + "Admin/PenggunaanDana"
								}
								else {
									alert(Respon)
								}
							}
						})
          }
				})

        $(document).on("click",".Hapus",function(){
					var Data = $(this).attr('Hapus')
					var Pisah = Data.split("|");
					var Hapus = {Homebase: Pisah[0],Tahun: Pisah[1]}
					var Konfirmasi = confirm("Yakin Ingin Menghapus?"); 
      		if (Konfirmasi == true) {
						$.post(BaseURL+"Admin/HapusPenggunaanDana", Hapus).done(function(Respon) {
							if (Respon == '1') {
								window.location = BaseURL + "Admin/PenggunaanDana"
							} else {
								alert(Respon)
							}
						})
					}
				})

        $('#TabelPenggunaanDana').DataTable( {
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
                  $('#LampiranDTPS').attr('href',BaseURL+'DTPS/'+object.BuktiPendidik)		
                  $('#LampiranDTPS').attr('Download',object.BuktiPendidik) 
                  $('#LampiranDTPS')[0].click()
                }
                if (object.BuktiKompetensi != null) {
                  $('#LampiranDTPS').attr('href',BaseURL+'DTPS/'+object.BuktiKompetensi)		
                  $('#LampiranDTPS').attr('Download',object.BuktiKompetensi) 
                  $('#LampiranDTPS')[0].click()
                }
              })
            }) 	
            var KerjaSama = ['Pendidikan','Penelitian','Pengabdian']
					  for (let i = 0; i < 3; i++) { 
              $.post(BaseURL+"Admin"+"/LampiranKerjaSama/"+KerjaSama[i]).done(function(Respon) {
                var array = JSON.parse(Respon) 
                var No = 1;
                array.forEach(function(object) {
                  $('#LampiranKerjaSama').attr('href',BaseURL+'KerjaSama/'+object.Bukti)		
                  $('#LampiranKerjaSama').attr('Download','Kerja Sama '+KerjaSama[i]+' '+No+'.pdf') 
                  $('#LampiranKerjaSama')[0].click()
                  No+=1;
                })
              }) 	
            }
          }
          else {
            alert('Input Tahun Belum Benar!')
          }
        })
			})
		</script>
  </body>
</html>