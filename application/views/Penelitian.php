<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
					<div class="col-sm-12 mt-2">
						<ul class="nav nav-pills mb-2 border border-warning rounded bg-light" id="pills-tab" role="tablist">
							<li class="nav-item">
								<a class="nav-link <?php if($this->session->userdata('SubPenelitian') == 'Rencana'){echo 'active';} ?>" id="pills-Rencana-tab" data-toggle="pill" href="#pills-Rencana" role="tab" aria-controls="pills-Rencana" aria-selected="true"><b>Rencana</b></a>
							</li>
							<li class="nav-item">
								<a class="nav-link <?php if($this->session->userdata('SubPenelitian') == 'Realisasi'){echo 'active';} ?>" id="pills-Realisasi-tab" data-toggle="pill" href="#pills-Realisasi" role="tab" aria-controls="pills-Realisasi" aria-selected="false"><b>Realisasi</b></a>
							</li>
						</ul>
						<div class="tab-content border border-warning rounded bg-light" id="pills-tabContent">
							<div class="tab-pane fade <?php if($this->session->userdata('SubPenelitian') == 'Rencana'){echo 'show active';} ?>" id="pills-Rencana" role="tabpanel" aria-labelledby="pills-Rencana-tab">
								<?php include 'RencanaPenelitian.php'; ?>
							</div>
							<div class="tab-pane fade <?php if($this->session->userdata('SubPenelitian') == 'Realisasi'){echo 'show active';} ?>" id="pills-Realisasi" role="tabpanel" aria-labelledby="pills-Realisasi-tab">
								<?php include 'RealisasiPenelitian.php'; ?>
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
		<script src="<?=base_url('bootstrap/datatables/jquery.dataTables.js')?>"></script>
		<script src="<?=base_url('bootstrap/datatables-bs4/js/dataTables.bootstrap4.js')?>"></script>
    <script src="<?=base_url('bootstrap/inputmask/min/jquery.inputmask.bundle.min.js')?>"></script>
    <script>
			jQuery(document).ready(function($) {
				"use strict";
				var BaseURL = '<?=base_url()?>';

				$("#pak").click(function() {
					var Tahun = $('#Tahun').val()
					var Pisah = Tahun.split('-')
					window.location = BaseURL + 'Dashboard/PAK/'+$('#Homebase').val()+'/'+$('#Semester').val()+'/'+(isNaN(parseInt(Pisah[0]))? 0 : parseInt(Pisah[0]))+'-'+(isNaN(parseInt(Pisah[0]))? 0 : parseInt(Pisah[1]))
					var PAK = ['Pendidikan','Penelitian','Pengabdian','Penunjang']
					for (let i = 1; i < 5; i++) {
						$.post(BaseURL+PAK[i-1]+"/Lampiran/"+$('#Homebase').val()+'/'+$('#Semester').val()+'/'+(isNaN(parseInt(Pisah[0]))? 0 : parseInt(Pisah[0]))+'-'+(isNaN(parseInt(Pisah[0]))? 0 : parseInt(Pisah[1]))+'/'+PAK[i-1]).done(function(Respon) {
							var array = JSON.parse(Respon)
							var NomorLampiran = 1
							array.forEach(function(object) {
								if (object.Bukti != null) {
									$('#LampiranPAK').attr('href',BaseURL+PAK[i-1]+'/'+object.Bukti)		
									$('#LampiranPAK').attr('Download','Lampiran '+i+'.'+NomorLampiran+'.pdf')
									$('#LampiranPAK')[0].click()
								}
								NomorLampiran++;
							})
						}) 	
					}
				})

				$('#TabelRencana').DataTable( {
					dom:'lfrtip',
					"lengthMenu": [ 5, 10, 20, 30 ],
					"language": {
						"paginate": {
							'previous': '<b class="text-primary"><</b>',
							'next': '<b class="text-primary">></b>'
						}
					}
				})

				$('#TabelRealisasi').DataTable( {
					dom:'lfrtip',
					"lengthMenu": [ 5, 10, 20, 30 ],
					"language": {
						"paginate": {
							'previous': '<b class="text-primary"><</b>',
							'next': '<b class="text-primary">></b>'
						}
					}
				})

        $('[data-mask]').inputmask()

				$("#Download").click(function() {
					var Tahun = $('#FilterTahun').val()
					var Pisah = Tahun.split('-')
					window.location = BaseURL + 'Penelitian/Download/'+$('#FilterJenjang').val()+'/'+$('#FilterSemester').val()+'/'+(isNaN(parseInt(Pisah[0]))? 0 : parseInt(Pisah[0]))+'-'+(isNaN(parseInt(Pisah[0]))? 0 : parseInt(Pisah[1]))
					// $.post(BaseURL+"Penelitian/Lampiran/"+$('#FilterJenjang').val()+'/'+$('#FilterSemester').val()+'/'+(isNaN(parseInt(Pisah[0]))? 0 : parseInt(Pisah[0]))+'-'+(isNaN(parseInt(Pisah[0]))? 0 : parseInt(Pisah[1]))).done(function(Respon) {
					// 	var array = JSON.parse(Respon)
					// 	var NomorLampiran = 1
					// 	array.forEach(function(object) {
					// 		if (object.Bukti != null) {
					// 			$('#Lampiran').attr('href',BaseURL+'Penelitian/'+object.Bukti)		
					// 			$('#Lampiran').attr('Download','Lampiran 2.'+NomorLampiran+'.pdf')
					// 			$('#Lampiran')[0].click()
					// 		}
					// 		NomorLampiran++;
					// 	})
					// }) 
				})

				$("#pills-Rencana-tab").click(function() {
					var Data = {SubPenelitian: 'Rencana'}
					$.post(BaseURL+"Dashboard/SubPenelitian", Data)
				})

				$("#pills-Realisasi-tab").click(function() {
					var Data = {SubPenelitian: 'Realisasi'}
					$.post(BaseURL+"Dashboard/SubPenelitian", Data)
				})

				$("#InputRencanaPenelitian").click(function() {
					<?php 
            $TotalKreditRencana = "var TotalKreditRencana = ";
            $KodeRencana = "var KodeRencana = ''+";
            for ($i = 1; $i <= 37 ; $i++) {
              echo "var RencanaPNL".$i." = parseInt(document.getElementById('RencanaKreditPNL".$i."').innerHTML)\n";
              if ($i == 37) {
                $TotalKreditRencana .= "RencanaPNL".$i;
                $KodeRencana .= "(document.getElementById('RencanaPNL".$i."').checked ? 1 : 0)\n";
              } else {
                $TotalKreditRencana .= "RencanaPNL".$i."+";
                $KodeRencana .= "(document.getElementById('RencanaPNL".$i."').checked ? 1 : 0)+'|'+";
              }
            }            
            echo $TotalKreditRencana."\n";
            echo $KodeRencana;
          ?>
					var DataRencanaPenelitian = {Jenjang:$("#JenjangRencanaPenelitian").val(),Semester:$("#SemesterRencanaPenelitian").val(),
																			 Tahun:$("#TahunRencanaPenelitian").val(),Kode:KodeRencana,Total:TotalKreditRencana}
					$.post(BaseURL+"Penelitian/InputRencana", DataRencanaPenelitian).done(function(Respon) {
						if (Respon == '1') {
							window.location = BaseURL + "Dashboard/Penelitian"
						} else {
							alert(Respon)
						}
					})
				})

				$("#TombolRencanaTotalKredit").click(function() {
          <?php 
            $TotalRencana = "document.getElementById('RencanaTotalKredit').innerHTML = ";
            for ($i = 1; $i <= 37 ; $i++) {
              echo "var RencanaPNL".$i." = parseInt(document.getElementById('RencanaKreditPNL".$i."').innerHTML)\n";
              if ($i == 37) {
                $TotalRencana .= "RencanaPNL".$i;
              } else {
                $TotalRencana .= "RencanaPNL".$i."+";
              }
            }            
            echo $TotalRencana;
          ?>
				})

				$(document).on("click",".EditRencanaPenelitian",function(){
          <?php $Kredit = array(40,20,15,10,40,30,20,25,25,20,15,10,10,20,15,10,7,30,25,15,10,10,5,5,3,10,5,1,2,15,10,60,50,40,30,20,15); ?>
					var Data = $(this).attr('EditRencanaPenelitian')
					var Pisah = Data.split("/")
					$("#NoEditRencana").val(Pisah[0])
					$("#EditJenjangRencanaPenelitian").val(Pisah[2])
					$("#JenjangLama").val(Pisah[2])
					$("#EditSemesterRencanaPenelitian").val(Pisah[3])
					$("#SemesterLama").val(Pisah[3])
					$("#EditTahunRencanaPenelitian").val(Pisah[4])
					$("#TahunLama").val(Pisah[4])
					var PisahKode = Pisah[5].split("|")
          <?php 
            for ($i = 1; $i <= 37 ; $i++) {
              echo "if (PisahKode[".($i-1)."] == '1') {\n";
              echo "$('#EditRencanaPNL".$i."').attr('checked', true)\n";	
              echo "$('#EditRencanaKreditPNL".$i."').html(".$Kredit[$i-1].")\n}\n";
            } 
          ?>
					$("#EditRencanaTotalKredit").html(Pisah[6])
					$('#ModalEditRencanaPenelitian').modal("show");
				})

				$("#TombolEditRencanaTotalKredit").click(function() {
					<?php 
            $TotalEditRencana = "document.getElementById('EditRencanaTotalKredit').innerHTML = ";
            for ($i = 1; $i <= 37 ; $i++) {
              echo "var EditRencanaPNL".$i." = parseInt(document.getElementById('EditRencanaKreditPNL".$i."').innerHTML)\n";
              if ($i == 37) {
                $TotalEditRencana .= "EditRencanaPNL".$i;
              } else {
                $TotalEditRencana .= "EditRencanaPNL".$i."+";
              }
            }            
            echo $TotalEditRencana;
          ?>
				})
				
				$("#SimpanEditRencanaPenelitian").click(function() {
          <?php 
            $EditTotalKreditRencana = "var EditTotalKreditRencana = ";
            $EditKodeRencana = "var EditKodeRencana = ''+";
            for ($i = 1; $i <= 37 ; $i++) {
              echo "var EditRencanaPNL".$i." = parseInt(document.getElementById('EditRencanaKreditPNL".$i."').innerHTML)\n";
              if ($i == 37) {
                $EditTotalKreditRencana .= "EditRencanaPNL".$i;
                $EditKodeRencana .= "(document.getElementById('EditRencanaPNL".$i."').checked ? 1 : 0)\n";
              } else {
                $EditTotalKreditRencana .= "EditRencanaPNL".$i."+";
                $EditKodeRencana .= "(document.getElementById('EditRencanaPNL".$i."').checked ? 1 : 0)+'|'+";
              }
            }            
            echo $EditTotalKreditRencana."\n";
            echo $EditKodeRencana;
          ?>
					var EditDataRencanaPenelitian = {No:$("#NoEditRencana").val(),Jenjang:$("#EditJenjangRencanaPenelitian").val(),Semester:$("#EditSemesterRencanaPenelitian").val(),
																			 Tahun:$("#EditTahunRencanaPenelitian").val(),Kode:EditKodeRencana,Total:EditTotalKreditRencana,JenjangLama:$('#JenjangLama').val(),SemesterLama:$('#SemesterLama').val(),TahunLama:$('#TahunLama').val()}
					$.post(BaseURL+"Penelitian/EditRencana", EditDataRencanaPenelitian).done(function(Respon) {
						if (Respon == '1') {
							window.location = BaseURL + "Dashboard/Penelitian"
						} else {
							alert(Respon)
						}
					})
				})

				$(document).on("click",".HapusRencanaPenelitian",function(){
					var Hapus = {No: $(this).attr('HapusRencanaPenelitian')}
					var Konfirmasi = confirm("Yakin Ingin Menghapus?");
      		if (Konfirmasi == true) {
						$.post(BaseURL+"Penelitian/HapusRencana", Hapus).done(function(Respon) {
							if (Respon == '1') {
								window.location = BaseURL + "Dashboard/Penelitian"
							} else {
								alert(Respon)
							}
						});
					}
				});

				$("#LihatRealisasi").click(function() {
					var Data = {ID: $("#IdKegiatanPenelitian").val()}
					$.post(BaseURL+"Dashboard/LihatRealisasiPenelitian", Data).done(function(Respon) {
						window.location = BaseURL + "Dashboard/Penelitian"
					})
				})

				function Tambah() {
					var fd = new FormData()
					fd.append("file", $('#Bukti')[0].files[0])
					fd.append('Homebase',$("#JenisRealisasi").val())
					fd.append('Semester',$("#SemesterRealisasi").val())
					fd.append('Tahun',$("#TahunRealisasi").val())
					fd.append('IdKegiatan',$("#InputIdKegiatanPenelitian").val())
					fd.append('Ke',$("#Ke").val())		
					fd.append('Dari',$("#Dari").val())		
					fd.append('Penulis',$("#Ke").val()+'/'+$("#Dari").val())		
					fd.append('Kegiatan',$("#Uraian").val())		
					fd.append('Volume',parseInt($("#Volume").val()))
					fd.append('TanggalKegiatan',$("#TanggalKegiatan").val())	
					if ($("#InputIdKegiatanPenelitian").val() == 'PNL1') {
						fd.append('Kode',$("#Point1").val())
					}
					else if ($("#InputIdKegiatanPenelitian").val() == 'PNL2') {
						fd.append('Kode',$("#Point2").val())				
					}
					else if ($("#InputIdKegiatanPenelitian").val() == 'PNL6') {
						fd.append('Kode',$("#Point6").val())
					}
					else if ($("#InputIdKegiatanPenelitian").val() == 'PNL7') {
						fd.append('Kode',$("#Point7").val())
					}
					else if ($("#InputIdKegiatanPenelitian").val() == 'PNL8') {
						fd.append('Kode',$("#Point8").val())
					}
					else {
						fd.append('Kode','0')
					}
					$.ajax({
						url: BaseURL+'Penelitian/InputRealisasi',
						type: 'post',
						data: fd,
						contentType: false,
						processData: false,
						success: function(Respon){
							if (Respon == '1') {
								window.location = BaseURL + "Dashboard/Penelitian"
							}
							else {
								alert(Respon)
							}
						}
					});
				}

				$("#TambahRealisasiPenelitian").click(function() {
					if ($("#InputIdKegiatanPenelitian").val() != 'PNL8') {
						if (isNaN(parseInt($("#Ke").val())) || isNaN(parseInt($("#Dari").val())) || parseInt($("#Ke").val()) > parseInt($("#Dari").val())) {
							alert('Input Penulis Belum Benar')
						} 
						else if (isNaN(parseInt($("#Volume").val()))) {
							alert('Volume Kegiatan Belum Benar!')
						}	
						else {
							Tambah()
						}
					}
					else if (isNaN(parseInt($("#Volume").val()))) {
						alert('Volume Kegiatan Belum Benar!')
					}
					else {
						Tambah()
					}
				})
				
				$(document).on("click",".EditRealisasi",function(){
					var Data = $(this).attr('EditRealisasi')
					var Pisah = Data.split("|");
					$('#EditNoRealisasi').val(Pisah[0])
					Pisah[1] == 'S1'? $('#EditJenisRealisasi').val('S1') : $('#EditJenisRealisasi').val('S2')
					Pisah[2] == 'Ganjil'? $('#EditSemesterRealisasi').val('Ganjil') : $('#EditSemesterRealisasi').val('Genap')
					$('#EditTahunRealisasi').val(Pisah[3])
					$('#EditUraian').val(Pisah[4])
					$('#EditVolume').val(Pisah[5])
					$('#EditIdKegiatan').val(Pisah[6])
					$('#EditJabatanRealisasi').val(Pisah[7])
					$('#EditBuktiRealisasi').val(Pisah[8])
					$("#EditTanggalKegiatan").val(Pisah[9])
					$("#Kode").val(Pisah[10])
					var Penulis = Pisah[11].split("/")
					$("#EditKe").val(Penulis[0])
					$("#EditDari").val(Penulis[1])
					$('#EditRealisasiPenelitian').modal("show")
				});

				$("#CancelBukti").click(function() {
					$("#EditBukti").val("")
				})

				$("#UpdateRealisasiPenelitian").click(function() {
					if (isNaN(parseInt($("#EditKe").val())) || isNaN(parseInt($("#EditDari").val())) || parseInt($("#EditKe").val()) > parseInt($("#EditDari").val())) {
						alert('Input Penulis Belum Benar')
					} 
					else if (isNaN(parseInt($("#EditVolume").val()))) { 
						alert('Volume Kegiatan Belum Benar!')
					} 
					else {
						var fd = new FormData()
						fd.append("file", $('#EditBukti')[0].files[0])
						fd.append('No',$("#EditNoRealisasi").val())
						fd.append('Jabatan',$("#EditJabatanRealisasi").val())
						fd.append('IdKegiatan',$("#EditIdKegiatan").val())
						fd.append('Kode',$("#Kode").val())
						fd.append('Homebase',$("#EditJenisRealisasi").val())
						fd.append('Semester',$("#EditSemesterRealisasi").val())
						fd.append('Tahun',$("#EditTahunRealisasi").val())
						fd.append('EditKe',$("#EditKe").val())		
						fd.append('EditDari',$("#EditDari").val())		
						fd.append('Penulis',$("#EditKe").val()+'/'+$("#EditDari").val())
						fd.append('Kegiatan',$("#EditUraian").val())		
						fd.append('TanggalKegiatan',$("#EditTanggalKegiatan").val())
						fd.append('EditVolume',parseInt($("#EditVolume").val()))
						fd.append('Bukti',$("#EditBuktiRealisasi").val())
						$.ajax({ 
							url: BaseURL+'Penelitian/EditRealisasi',
							type: 'post',
							data: fd,
							contentType: false,
							processData: false,
							success: function(Respon){
								if (Respon == '1') {
									window.location = BaseURL + "Dashboard/Penelitian"
								}
								else {
									alert(Respon)
								}
							}
						});
					}
				});

				$(document).on("click",".HapusRealisasi",function(){
					var Data = $(this).attr('HapusRealisasi')
					var Pisah = Data.split("|");
					var Hapus = {No: Pisah[0],Bukti: Pisah[1]}
					var Konfirmasi = confirm("Yakin Ingin Menghapus?");
      		if (Konfirmasi == true) {
						$.post(BaseURL+"Penelitian/HapusRealisasi", Hapus).done(function(Respon) {
							if (Respon == '1') {
								window.location = BaseURL + "Dashboard/Penelitian"
							} else {
								alert(Respon)
							}
						});
					}
				});
			})

			function InputIdKegiatanPenelitian() {
				if ($("#InputIdKegiatanPenelitian").val() == 'PNL1') {
					document.getElementById("OpsiPNL1").style.display = 'block'
					document.getElementById("OpsiPNL2").style.display = 'none'
					document.getElementById("OpsiPNL6").style.display = 'none'
					document.getElementById("OpsiPNL7").style.display = 'none'
					document.getElementById("OpsiPNL8").style.display = 'none'
					document.getElementById("OpsiPenulis").style.display = 'block'
				} else if ($("#InputIdKegiatanPenelitian").val() == 'PNL2') {
					document.getElementById("OpsiPNL1").style.display = 'none'
					document.getElementById("OpsiPNL2").style.display = 'block'
					document.getElementById("OpsiPNL6").style.display = 'none'
					document.getElementById("OpsiPNL7").style.display = 'none'
					document.getElementById("OpsiPNL8").style.display = 'none'
					document.getElementById("OpsiPenulis").style.display = 'block'
				} else if ($("#InputIdKegiatanPenelitian").val() == 'PNL6') {
					document.getElementById("OpsiPNL1").style.display = 'none'
					document.getElementById("OpsiPNL2").style.display = 'none'
					document.getElementById("OpsiPNL6").style.display = 'block'
					document.getElementById("OpsiPNL7").style.display = 'none'
					document.getElementById("OpsiPNL8").style.display = 'none'
					document.getElementById("OpsiPenulis").style.display = 'block'
				} else if ($("#InputIdKegiatanPenelitian").val() == 'PNL7') {
					document.getElementById("OpsiPNL1").style.display = 'none'
					document.getElementById("OpsiPNL2").style.display = 'none'
					document.getElementById("OpsiPNL6").style.display = 'none'
					document.getElementById("OpsiPNL7").style.display = 'block'
					document.getElementById("OpsiPNL8").style.display = 'none'
					document.getElementById("OpsiPenulis").style.display = 'block'
				} else if ($("#InputIdKegiatanPenelitian").val() == 'PNL8') {
					document.getElementById("OpsiPNL1").style.display = 'none'
					document.getElementById("OpsiPNL2").style.display = 'none'
					document.getElementById("OpsiPNL6").style.display = 'none'
					document.getElementById("OpsiPNL7").style.display = 'none'
					document.getElementById("OpsiPNL8").style.display = 'block'
					document.getElementById("OpsiPenulis").style.display = 'none'
				} else {
					document.getElementById("OpsiPNL1").style.display = 'none'
					document.getElementById("OpsiPNL2").style.display = 'none'
					document.getElementById("OpsiPNL6").style.display = 'none'
					document.getElementById("OpsiPNL7").style.display = 'none'
					document.getElementById("OpsiPNL8").style.display = 'none'
					document.getElementById("OpsiPenulis").style.display = 'block'
				}
			}

      <?php 
        $Kredit = array(40,20,15,10,40,30,20,25,25,20,15,10,10,20,15,10,20,30,25,15,10,10,5,5,3,10,5,1,2,15,10,60,50,40,30,20,15);
        for ($i = 1; $i <= 37 ; $i++) {
          echo "function RencanaPNL".$i."() {document.getElementById('RencanaPNL".$i."').checked? document.getElementById('RencanaKreditPNL".$i."').innerHTML = ".$Kredit[$i-1]." : document.getElementById('RencanaKreditPNL".$i."').innerHTML = 0}\n";
        } 
        for ($i = 1; $i <= 37 ; $i++) {
          echo "function EditRencanaPNL".$i."() {document.getElementById('EditRencanaPNL".$i."').checked? document.getElementById('EditRencanaKreditPNL".$i."').innerHTML = ".$Kredit[$i-1]." : document.getElementById('EditRencanaKreditPNL".$i."').innerHTML = 0}";
        }
      ?>
    </script>
  </body>
</html>