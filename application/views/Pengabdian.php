<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
					<div class="col-sm-12 mt-2">
						<ul class="nav nav-pills mb-2 border border-warning rounded bg-light" id="pills-tab" role="tablist">
							<li class="nav-item">
								<a class="nav-link <?php if($this->session->userdata('SubPengabdian') == 'Rencana'){echo 'active';} ?>" id="pills-Rencana-tab" data-toggle="pill" href="#pills-Rencana" role="tab" aria-controls="pills-Rencana" aria-selected="true"><b>Rencana</b></a>
							</li>
							<li class="nav-item">
								<a class="nav-link <?php if($this->session->userdata('SubPengabdian') == 'Realisasi'){echo 'active';} ?>" id="pills-Realisasi-tab" data-toggle="pill" href="#pills-Realisasi" role="tab" aria-controls="pills-Realisasi" aria-selected="false"><b>Realisasi</b></a>
							</li>
						</ul>
						<div class="tab-content border border-warning rounded bg-light" id="pills-tabContent">
							<div class="tab-pane fade <?php if($this->session->userdata('SubPengabdian') == 'Rencana'){echo 'show active';} ?>" id="pills-Rencana" role="tabpanel" aria-labelledby="pills-Rencana-tab">
								<?php include 'RencanaPengabdian.php'; ?>
							</div>
							<div class="tab-pane fade <?php if($this->session->userdata('SubPengabdian') == 'Realisasi'){echo 'show active';} ?>" id="pills-Realisasi" role="tabpanel" aria-labelledby="pills-Realisasi-tab">
								<?php include 'RealisasiPengabdian.php'; ?>
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
					window.location = BaseURL + 'Pengabdian/Download/'+$('#FilterJenjang').val()+'/'+$('#FilterSemester').val()+'/'+(isNaN(parseInt(Pisah[0]))? 0 : parseInt(Pisah[0]))+'-'+(isNaN(parseInt(Pisah[0]))? 0 : parseInt(Pisah[1]))
					$.post(BaseURL+"Pengabdian/Lampiran/"+$('#FilterJenjang').val()+'/'+$('#FilterSemester').val()+'/'+(isNaN(parseInt(Pisah[0]))? 0 : parseInt(Pisah[0]))+'-'+(isNaN(parseInt(Pisah[0]))? 0 : parseInt(Pisah[1]))).done(function(Respon) {
						var array = JSON.parse(Respon)
						var NomorLampiran = 1
						array.forEach(function(object) {
							if (object.Bukti != null) {
								$('#Lampiran').attr('href',BaseURL+'Pengabdian/'+object.Bukti)		
								$('#Lampiran').attr('Download','Lampiran 3.'+NomorLampiran+'.pdf')
								$('#Lampiran')[0].click()
							}
							NomorLampiran++;
						})
					}) 
				})

				$("#pills-Rencana-tab").click(function() {
					var Data = {SubPengabdian: 'Rencana'}
					$.post(BaseURL+"Dashboard/SubPengabdian", Data)
				})

				$("#pills-Realisasi-tab").click(function() {
					var Data = {SubPengabdian: 'Realisasi'}
					$.post(BaseURL+"Dashboard/SubPengabdian", Data)
				})

				$("#InputRencanaPengabdian").click(function() {
					<?php 
            $TotalKreditRencana = "var TotalKreditRencana = ";
            $KodeRencana = "var KodeRencana = ''+";
            for ($i = 1; $i <= 16 ; $i++) {
              echo "var RencanaPNB".$i." = parseFloat(document.getElementById('RencanaKreditPNB".$i."').innerHTML)\n";
              if ($i == 16) {
                $TotalKreditRencana .= "RencanaPNB".$i;
                $KodeRencana .= "(document.getElementById('RencanaPNB".$i."').checked ? 1 : 0)\n";
              } else {
                $TotalKreditRencana .= "RencanaPNB".$i."+";
                $KodeRencana .= "(document.getElementById('RencanaPNB".$i."').checked ? 1 : 0)+'|'+";
              }
            }            
            echo $TotalKreditRencana."\n";
            echo $KodeRencana;
          ?>
					var DataRencanaPengabdian = {Jenjang:$("#JenjangRencanaPengabdian").val(),Semester:$("#SemesterRencanaPengabdian").val(),
																			 Tahun:$("#TahunRencanaPengabdian").val(),Kode:KodeRencana,Total:TotalKreditRencana}
					$.post(BaseURL+"Pengabdian/InputRencana", DataRencanaPengabdian).done(function(Respon) {
						if (Respon == '1') {
							window.location = BaseURL + "Dashboard/Pengabdian"
						} else {
							alert(Respon)
						}
					})
				})

				$("#TombolRencanaTotalKredit").click(function() {
          <?php 
            $TotalRencana = "document.getElementById('RencanaTotalKredit').innerHTML = ";
            for ($i = 1; $i <= 16 ; $i++) {
              echo "var RencanaPNB".$i." = parseFloat(document.getElementById('RencanaKreditPNB".$i."').innerHTML)\n";
              if ($i == 16) {
                $TotalRencana .= "RencanaPNB".$i;
              } else {
                $TotalRencana .= "RencanaPNB".$i."+";
              }
            }            
            echo $TotalRencana;
          ?>
				})

				$(document).on("click",".EditRencanaPengabdian",function(){
          <?php  $Kredit = array(5.5,3,4,3,2,3,2,1,1,1.5,1,0.5,3,5,1,0.5); ?>
					var Data = $(this).attr('EditRencanaPengabdian')
					var Pisah = Data.split("/")
					$("#NoEditRencana").val(Pisah[0])
					$("#EditJenjangRencanaPengabdian").val(Pisah[2])
					$("#JenjangLama").val(Pisah[2])
					$("#EditSemesterRencanaPengabdian").val(Pisah[3])
					$("#SemesterLama").val(Pisah[3])
					$("#EditTahunRencanaPengabdian").val(Pisah[4])
					$("#TahunLama").val(Pisah[4])
					var PisahKode = Pisah[5].split("|")
          <?php 
            for ($i = 1; $i <= 16 ; $i++) {
              echo "if (PisahKode[".($i-1)."] == '1') {\n";
              echo "$('#EditRencanaPNB".$i."').attr('checked', true)\n";	
              echo "$('#EditRencanaKreditPNB".$i."').html(".$Kredit[$i-1].")\n}\n";
            } 
          ?>
					$("#EditRencanaTotalKredit").html(Pisah[6])
					$('#ModalEditRencanaPengabdian').modal("show");
				})

				$("#TombolEditRencanaTotalKredit").click(function() {
					<?php 
            $TotalEditRencana = "document.getElementById('EditRencanaTotalKredit').innerHTML = ";
            for ($i = 1; $i <= 16 ; $i++) {
              echo "var EditRencanaPNB".$i." = parseFloat(document.getElementById('EditRencanaKreditPNB".$i."').innerHTML)\n";
              if ($i == 16) {
                $TotalEditRencana .= "EditRencanaPNB".$i;
              } else {
                $TotalEditRencana .= "EditRencanaPNB".$i."+";
              }
            }            
            echo $TotalEditRencana;
          ?>
				})
				
				$("#SimpanEditRencanaPengabdian").click(function() {
          <?php 
            $EditTotalKreditRencana = "var EditTotalKreditRencana = ";
            $EditKodeRencana = "var EditKodeRencana = ''+";
            for ($i = 1; $i <= 16 ; $i++) {
              echo "var EditRencanaPNB".$i." = parseFloat(document.getElementById('EditRencanaKreditPNB".$i."').innerHTML)\n";
              if ($i == 16) {
                $EditTotalKreditRencana .= "EditRencanaPNB".$i;
                $EditKodeRencana .= "(document.getElementById('EditRencanaPNB".$i."').checked ? 1 : 0)\n";
              } else {
                $EditTotalKreditRencana .= "EditRencanaPNB".$i."+";
                $EditKodeRencana .= "(document.getElementById('EditRencanaPNB".$i."').checked ? 1 : 0)+'|'+";
              }
            }            
            echo $EditTotalKreditRencana."\n";
            echo $EditKodeRencana;
          ?>
					var EditDataRencanaPengabdian = {No:$("#NoEditRencana").val(),Jenjang:$("#EditJenjangRencanaPengabdian").val(),Semester:$("#EditSemesterRencanaPengabdian").val(),
																			 Tahun:$("#EditTahunRencanaPengabdian").val(),Kode:EditKodeRencana,Total:EditTotalKreditRencana,JenjangLama:$('#JenjangLama').val(),SemesterLama:$('#SemesterLama').val(),TahunLama:$('#TahunLama').val()}
					$.post(BaseURL+"Pengabdian/EditRencana", EditDataRencanaPengabdian).done(function(Respon) {
						if (Respon == '1') {
							window.location = BaseURL + "Dashboard/Pengabdian"
						} else {
							alert(Respon)
						}
					})
				})

				$(document).on("click",".HapusRencanaPengabdian",function(){
					var Hapus = {No: $(this).attr('HapusRencanaPengabdian')}
					var Konfirmasi = confirm("Yakin Ingin Menghapus?");
      		if (Konfirmasi == true) {
						$.post(BaseURL+"Pengabdian/HapusRencana", Hapus).done(function(Respon) {
							if (Respon == '1') {
								window.location = BaseURL + "Dashboard/Pengabdian"
							} else {
								alert(Respon)
							}
						});
					}
				});

				$("#LihatRealisasi").click(function() {
					var Data = {ID: $("#IdKegiatanPengabdian").val()}
					$.post(BaseURL+"Dashboard/LihatRealisasiPengabdian", Data).done(function(Respon) {
						window.location = BaseURL + "Dashboard/Pengabdian"
					})
				})

				$("#TambahRealisasiPengabdian").click(function() {
					if (isNaN(parseInt($("#Volume").val()))) {
						alert('Volume Kegiatan Belum Benar!')
					} 
					else {
						var fd = new FormData()
						fd.append("file", $('#Bukti')[0].files[0])
						fd.append('Homebase',$("#JenisRealisasi").val())
						fd.append('Semester',$("#SemesterRealisasi").val())
						fd.append('Tahun',$("#TahunRealisasi").val())
						fd.append('IdKegiatan',$("#InputIdKegiatanPengabdian").val())
						fd.append('Kegiatan',$("#Uraian").val())		
						fd.append('Volume',parseInt($("#Volume").val()))
						fd.append('TanggalKegiatan',$("#TanggalKegiatan").val())	
						if ($("#InputIdKegiatanPengabdian").val() == 'PNB3') {
							fd.append('Kode',$("#Tingkat").val())
						}
						else if ($("#InputIdKegiatanPengabdian").val() == 'PNB4') {
							fd.append('Kode',$("#Dasar").val())				
						}
						else if ($("#InputIdKegiatanPengabdian").val() == 'PNB7') {
							fd.append('Kode',$("#Peran").val())
						}
						else {
							fd.append('Kode','0')
						}
						$.ajax({
							url: BaseURL+'Pengabdian/InputRealisasi',
							type: 'post',
							data: fd,
							contentType: false,
							processData: false,
							success: function(Respon){
								if (Respon == '1') {
									window.location = BaseURL + "Dashboard/Pengabdian"
								}
								else {
									alert(Respon)
								}
							}
						});
					}
          return false
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
					$('#EditRealisasiPengabdian').modal("show")
				});

				$("#CancelBukti").click(function() {
					$("#EditBukti").val("")
				})

				$("#UpdateRealisasiPengabdian").click(function() {
					if (isNaN(parseInt($("#EditVolume").val()))) {
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
						fd.append('Kegiatan',$("#EditUraian").val())		
						fd.append('TanggalKegiatan',$("#EditTanggalKegiatan").val())
						fd.append('Volume',parseInt($("#EditVolume").val()))
						fd.append('Bukti',$("#EditBuktiRealisasi").val())
						$.ajax({
							url: BaseURL+'Pengabdian/EditRealisasi',
							type: 'post',
							data: fd,
							contentType: false,
							processData: false,
							success: function(Respon){
								if (Respon == '1') {
									window.location = BaseURL + "Dashboard/Pengabdian"
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
						$.post(BaseURL+"Pengabdian/HapusRealisasi", Hapus).done(function(Respon) {
							if (Respon == '1') {
								window.location = BaseURL + "Dashboard/Pengabdian"
							} else {
								alert(Respon)
							}
						});
					}
				});
			})

			function InputIdKegiatanPengabdian() {
				if ($("#InputIdKegiatanPengabdian").val() == 'PNB3') {
					document.getElementById("OpsiPNB3").style.display = 'block'
					document.getElementById("OpsiPNB4").style.display = 'none'
					document.getElementById("OpsiPNB7").style.display = 'none'
				} else if ($("#InputIdKegiatanPengabdian").val() == 'PNB4') {
					document.getElementById("OpsiPNB3").style.display = 'none'
					document.getElementById("OpsiPNB4").style.display = 'block'
					document.getElementById("OpsiPNB7").style.display = 'none'
				} else if ($("#InputIdKegiatanPengabdian").val() == 'PNB7') {
					document.getElementById("OpsiPNB3").style.display = 'none'
					document.getElementById("OpsiPNB4").style.display = 'none'
					document.getElementById("OpsiPNB7").style.display = 'block'
				} else {
					document.getElementById("OpsiPNB3").style.display = 'none'
					document.getElementById("OpsiPNB4").style.display = 'none'
					document.getElementById("OpsiPNB7").style.display = 'none'
				}
			}

      <?php 
        $Kredit = array(5.5,3,4,3,2,3,2,1,1,1.5,1,0.5,3,5,1,0.5);
        for ($i = 1; $i <= 16 ; $i++) {
          echo "function RencanaPNB".$i."() {document.getElementById('RencanaPNB".$i."').checked? document.getElementById('RencanaKreditPNB".$i."').innerHTML = ".$Kredit[$i-1]." : document.getElementById('RencanaKreditPNB".$i."').innerHTML = 0}";
        } 
        for ($i = 1; $i <= 16 ; $i++) {
          echo "function EditRencanaPNB".$i."() {document.getElementById('EditRencanaPNB".$i."').checked? document.getElementById('EditRencanaKreditPNB".$i."').innerHTML = ".$Kredit[$i-1]." : document.getElementById('EditRencanaKreditPNB".$i."').innerHTML = 0}";
        }
      ?>
    </script>
  </body>
</html>