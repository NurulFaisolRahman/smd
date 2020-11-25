<div class="content-wrapper">
      <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <div class="row"> 
              <div class="col-sm-12 mt-2">
                <div class="container-fluid border border-warning rounded bg-light">
                  <div class="row align-items-center">
                    <div class="col-sm-12 my-2 ">    
                    <button type="button" class="btn btn-primary text-light mb-2" data-toggle="modal" data-target="#ModalInputDosenKontrak"><i class="fa fa-plus"></i> <b>Input Data</b></button> 
                      <div class="table-responsive mb-2">
                        <table id="TabelDosenKontrak" class="table table-bordered table-striped">
                          <thead class="bg-warning">
                            <tr>
                              <th class="text-center align-middle">No</th>
                              <th class="text-center align-middle">Homebase</th>
                              <th class="text-center align-middle">NIDN / NIDK</th>
                              <th class="align-middle">Nama Dosen Kontrak</th>
                              <th class="text-center align-middle">Aksi</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php $No = 1; foreach ($DosenKontrak as $key) { ?>
                              <tr>	
                                <td class="text-center align-middle"><?=$No++?></td>
                                <td class="text-center align-middle"><?=$key['Homebase']?></td>
                                <td class="text-center align-middle"><?=$key['NIDN']?></td>
                                <td class="align-middle"><?=$key['Nama']?></td>
                                <td class="text-center align-middle">
                                  <button Edit="<?=$key['Homebase']."$".$key['NIDN']."$".$key['Nama']."$".$key['S2']."$".$key['BidangKeahlian']."$".$key['JabatanAkademik']."$".$key['SertifikatPendidik']."$".$key['SertifikatKompetensi']."$".$key['MengajarPS']."$".$key['KesesuaianBidang']?>" class="btn btn-sm btn-warning Edit"><i class="fas fa-edit"></i></button>
                                  <button Hapus="<?=$key['NIDN']?>" class="btn btn-sm btn-danger Hapus"><i class="fas fa-trash"></i></button>  
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
    <div class="modal fade" id="ModalInputDosenKontrak">
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
                      <span class="input-group-text bg-primary"><b>NIDN / NIDK</b></span>
                    </div>
                    <input type="text" class="form-control" id="nidn" placeholder="10 Digit Angka"> 
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="input-group input-group-sm mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-primary"><b>Nama Dosen Kontrak</b></span>
                    </div>
                    <input type="text" class="form-control" id="nama" placeholder="Input Nama + Gelar"> 
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="input-group input-group-sm mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-primary"><b>Pendidikan Pasca Sarjana</b></span>
                    </div>
                    <input type="text" class="form-control" id="pascasarjana"> 
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="input-group input-group-sm mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-primary"><b>Bidang Keahlian</b></span>
                    </div>
                    <input type="text" class="form-control" id="bidangkeahlian"> 
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="input-group input-group-sm mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-primary"><b>Jabatan Akademik</b></span>
                    </div>
                    <input type="text" class="form-control" id="jabatanakademik"> 
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="input-group input-group-sm mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-primary"><b>Kesesuaian Bidang Keahlian dengan Mata Kuliah yang Diampu</b></span>
                    </div>
                    <select class="custom-select" id="kesesuaian">
                      <option value="Sesuai">Sesuai</option>
                      <option value="Tidak Sesuai">Tidak Sesuai</option>
                    </select>
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="input-group input-group-sm mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-primary"><b>Sertifikat Pendidik Profesional</b></span>
                    </div>
                    <input type="text" class="form-control" id="sertifikatpendidik"> 
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="input-group input-group-sm mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-primary"><b>Sertifikat Kompetensi/Profesi</b></span>
                    </div>
                    <input type="text" class="form-control" id="sertifikatkompetensi"> 
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="input-group input-group-sm mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-primary"><b>Mata Kuliah Yang Diampu Pada Program Studi Yang Diakreditasi</b></span>
                    </div>
                    <?php 
										$MK1 = array('Pendidikan Agama','Bahasa Inggris','PTE Makro','Pengantar Akuntansi','Mentalitas & Kreatifitas','Matematika Ekonomi 1','PPKN','PTE Mikro');
										$MK2 = array('Bahasa Indonesia','Sosiologi Kritis','TE Makro I','Pengantar Bisnis & Manajemen','SPE','Matematika Ekonomi II','Statistik I','TE Mikro I');
										$MK3 = array('TE Makro II','Islam & Ekonomi','Pengantar Ekonomi Pembangunan','Koperasi & Kewirausahaan','ESDA & Lingkungan','Ekonomi Kependudukan','Statistik II','TE Mikro II');
										$MK4 = array('Masalah Kebijakan Pembangunan','Ekonomi Pembangunan','Ekonomi Publik','Ekonomi Moneter','SDM & Ketenagakerjaan','Aplikasi Komputasi Ekonomi','Ekonomi Industri');
										$MK5 = array('Perekonomian Indonesia','Perencanaan Pembangunan','Ekonomi Kelembagaan','Bank Lembaga Keuangan','Metodologi Penelitian','Ekonomi Moneter Lanjutan','Studi Kebanksentralan','Ekonomi Regional','Keuangan Daerah','Ekonomi Publik Lanjutan');
										$MK6 = array('Ekonomi Internasional','Ekonomi Perkotaan & Transportasi','Ekonometrika','Evaluasi Proyek','Analisis Pasar Keuangan','Ekonomi Perbankan','Manajemen Keuangan Daerah','Perencanaan Strategis','Analisa Kebijakan Publik','Penganggaran Sektor Publik');
										$MK7 = array('Seminar Ekonomi Moneter & Perbankan','Ekonomi Politik','Ekonomi Pedesaan & Pertanian','Ekonomi Moneter Internasional','Islam & Ekonomi','BLK Syariah');
									?>
									<?php for ($j=1; $j <= 7; $j++) { ?>
									<div class="input-group input-group-sm mt-1">
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-success"><b>Semester <?=$j?></b></span>
                    </div>
									</div>
                    <?php for ($i=0; $i < count(${'MK'.$j}); $i++) { ?>
                    <div class="col-sm-6">
                      <label class="checkbox-inline"><input type="checkbox" name="MKS1" value="<?=${'MK'.$j}[$i]?>">&nbsp;<?=${'MK'.$j}[$i]?></label>
                    </div>
									<?php }} ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-danger" data-dismiss="modal"><b>Tutup</b></button>
            <button type="submit" class="btn btn-success" id="InputDosenKontrak"><b>Simpan</b></button>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="ModalEditDosenKontrak">
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
                    <select class="custom-select" id="Edithomebase">
                      <option value="S1">S1</option>
                      <option value="S2">S2</option>
                    </select>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="input-group input-group-sm mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-primary"><b>NIDN / NIDK</b></span>
                    </div>
                    <input type="hidden" class="form-control" id="nidnLama"> 
                    <input type="text" class="form-control" id="Editnidn"> 
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="input-group input-group-sm mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-primary"><b>Nama Dosen Kontrak</b></span>
                    </div>
                    <input type="text" class="form-control" id="Editnama"> 
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="input-group input-group-sm mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-primary"><b>Pendidikan Pasca Sarjana</b></span>
                    </div>
                    <input type="text" class="form-control" id="Editpascasarjana"> 
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="input-group input-group-sm mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-primary"><b>Bidang Keahlian</b></span>
                    </div>
                    <input type="text" class="form-control" id="Editbidangkeahlian"> 
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="input-group input-group-sm mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-primary"><b>Jabatan Akademik</b></span>
                    </div>
                    <input type="text" class="form-control" id="Editjabatanakademik"> 
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="input-group input-group-sm mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-primary"><b>Kesesuaian Bidang Keahlian dengan Mata Kuliah yang Diampu</b></span>
                    </div>
                    <select class="custom-select" id="Editkesesuaian">
                      <option value="Sesuai">Sesuai</option>
                      <option value="Tidak Sesuai">Tidak Sesuai</option>
                    </select>
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="input-group input-group-sm mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-primary"><b>Sertifikat Pendidik Profesional</b></span>
                    </div>
                    <input type="text" class="form-control" id="Editsertifikatpendidik"> 
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="input-group input-group-sm mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-primary"><b>Sertifikat Kompetensi/Profesi</b></span>
                    </div>
                    <input type="text" class="form-control" id="Editsertifikatkompetensi"> 
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="input-group input-group-sm mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-primary"><b>Mata Kuliah Yang Diampu Pada Program Studi Yang Diakreditasi</b></span>
                    </div>
                    <?php 
										$MK1 = array('Pendidikan Agama','Bahasa Inggris','PTE Makro','Pengantar Akuntansi','Mentalitas & Kreatifitas','Matematika Ekonomi 1','PPKN','PTE Mikro');
										$MK2 = array('Bahasa Indonesia','Sosiologi Kritis','TE Makro I','Pengantar Bisnis & Manajemen','SPE','Matematika Ekonomi II','Statistik I','TE Mikro I');
										$MK3 = array('TE Makro II','Islam & Ekonomi','Pengantar Ekonomi Pembangunan','Koperasi & Kewirausahaan','ESDA & Lingkungan','Ekonomi Kependudukan','Statistik II','TE Mikro II');
										$MK4 = array('Masalah Kebijakan Pembangunan','Ekonomi Pembangunan','Ekonomi Publik','Ekonomi Moneter','SDM & Ketenagakerjaan','Aplikasi Komputasi Ekonomi','Ekonomi Industri');
										$MK5 = array('Perekonomian Indonesia','Perencanaan Pembangunan','Ekonomi Kelembagaan','Bank Lembaga Keuangan','Metodologi Penelitian','Ekonomi Moneter Lanjutan','Studi Kebanksentralan','Ekonomi Regional','Keuangan Daerah','Ekonomi Publik Lanjutan');
										$MK6 = array('Ekonomi Internasional','Ekonomi Perkotaan & Transportasi','Ekonometrika','Evaluasi Proyek','Analisis Pasar Keuangan','Ekonomi Perbankan','Manajemen Keuangan Daerah','Perencanaan Strategis','Analisa Kebijakan Publik','Penganggaran Sektor Publik');
										$MK7 = array('Seminar Ekonomi Moneter & Perbankan','Ekonomi Politik','Ekonomi Pedesaan & Pertanian','Ekonomi Moneter Internasional','Islam & Ekonomi','BLK Syariah');
									?>
									<?php for ($j=1; $j <= 7; $j++) { ?>
									<div class="input-group input-group-sm mt-1">
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-success"><b>Semester <?=$j?></b></span>
                    </div>
									</div>
                    <?php for ($i=0; $i < count(${'MK'.$j}); $i++) { ?>
                    <div class="col-sm-6">
                      <label class="checkbox-inline"><input type="checkbox" id="Edit<?=${'MK'.$j}[$i]?>" name="EditMKS1" value="<?=${'MK'.$j}[$i]?>">&nbsp;<?=${'MK'.$j}[$i]?></label>
                    </div>
									<?php }} ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-danger" data-dismiss="modal"><b>Tutup</b></button>
            <button type="submit" class="btn btn-success" id="UpdateDosenKontrak"><b>Simpan</b></button>
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

        $("#InputDosenKontrak").click(function() {
          if ($("#nidn").val().length != 10 || isNaN($("#nidn").val())) {
            alert('Input NIDN/NIDK Belum Benar!')
          } else if ($("#nama").val() === "") {
            alert('Mohon Isi Nama + Gelar!')
          } else {
            var fd = new FormData()
						fd.append('Homebase',$("#homebase").val())
            fd.append('NIDN',$("#nidn").val())
						fd.append('Nama',$("#nama").val())
						fd.append('S2',$("#pascasarjana").val())
            fd.append('BidangKeahlian',$("#bidangkeahlian").val())
						fd.append('JabatanAkademik',$("#jabatanakademik").val())
            fd.append('SertifikatPendidik',$("#sertifikatpendidik").val())
						fd.append('SertifikatKompetensi',$("#sertifikatkompetensi").val())
            var MengajarPS = ""
            $.each($("input[name='MKS1']:checked"), function(){
							if (MengajarPS == "") {
								MengajarPS = MengajarPS + $(this).val()
							} else {
								MengajarPS = MengajarPS + "|" + $(this).val()
							}
            })
						fd.append('MengajarPS',MengajarPS)
						fd.append('KesesuaianBidang',$("#kesesuaian").val())
            $.ajax({
							url: BaseURL+'Admin/InputDosenKontrak',
							type: 'post',
							data: fd,
							contentType: false,
							processData: false,
							success: function(Respon){
								if (Respon == '1') {
									window.location = BaseURL + "Admin/DosenKontrak"
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
					var Pisah = Data.split("$");
					$('#Edithomebase').val(Pisah[0])
          $('#nidnLama').val(Pisah[1])
          $('#Editnidn').val(Pisah[1])
          $('#Editnama').val(Pisah[2])
          $('#Editpascasarjana').val(Pisah[3])
					$("#Editbidangkeahlian").val(Pisah[4])
					$('#Editjabatanakademik').val(Pisah[5])
          $('#Editkesesuaian').val(Pisah[9])
          $('#Editsertifikatpendidik').val(Pisah[6])
					$("#Editsertifikatkompetensi").val(Pisah[7])
          $.each($("input[name='EditMKS1']:checked"), function(){
            $(this).prop('checked',false)
          })
          var PisahMK = Pisah[8].split("|")
          for (let i = 0; i < PisahMK.length; i++) {
            $("input[id='Edit"+PisahMK[i]+"']").prop('checked',true)
          }
          $('#ModalEditDosenKontrak').modal("show")
				}) 

				$("#UpdateDosenKontrak").click(function() {
					if ($("#Editnidn").val().length != 10 || isNaN($("#Editnidn").val())) {
            alert('Input NIDN/NIDK Belum Benar!')
          } else if ($("#Editnama").val() === "") {
            alert('Mohon Isi Nama + Gelar!')
          } else {
            var fd = new FormData()
            fd.append('Homebase',$("#Edithomebase").val())
            fd.append('NIDNLama',$("#nidnLama").val())
						fd.append('NIDN',$("#Editnidn").val())
						fd.append('Nama',$("#Editnama").val())
						fd.append('S2',$("#Editpascasarjana").val())
            fd.append('BidangKeahlian',$("#Editbidangkeahlian").val())
						fd.append('JabatanAkademik',$("#Editjabatanakademik").val())
            fd.append('SertifikatPendidik',$("#Editsertifikatpendidik").val())
						fd.append('SertifikatKompetensi',$("#Editsertifikatkompetensi").val())
            var MengajarPS = ""
            $.each($("input[name='EditMKS1']:checked"), function(){
							if (MengajarPS == "") {
								MengajarPS = MengajarPS + $(this).val()
							} else {
								MengajarPS = MengajarPS + "|" + $(this).val()
							}
            })
						fd.append('MengajarPS',MengajarPS)
						fd.append('KesesuaianBidang',$("#Editkesesuaian").val())
            $.ajax({
							url: BaseURL+'Admin/UpdateDosenKontrak',
							type: 'post',
							data: fd,
							contentType: false,
							processData: false,
							success: function(Respon){
								if (Respon == '1') {
									window.location = BaseURL + "Admin/DosenKontrak"
								}
								else {
									alert(Respon)
								}
							}
						})
          }
				})

        $(document).on("click",".Hapus",function(){
					var Hapus = {NIDN: $(this).attr('Hapus')}
					var Konfirmasi = confirm("Yakin Ingin Menghapus?"); 
      		if (Konfirmasi == true) {
						$.post(BaseURL+"Admin/HapusDosenKontrak", Hapus).done(function(Respon) {
							if (Respon == '1') {
								window.location = BaseURL + "Admin/DosenKontrak"
							} else {
								alert(Respon)
							}
						})
					}
				})

        $('#TabelDosenKontrak').DataTable( {
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