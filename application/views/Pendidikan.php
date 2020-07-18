<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
					<div class="col-sm-12 mt-2">
						<ul class="nav nav-pills mb-2 border border-warning rounded bg-light" id="pills-tab" role="tablist">
							<li class="nav-item">
								<a class="nav-link <?php if($this->session->userdata('SubPendidikan') == 'Rencana'){echo 'active';} ?>" id="pills-Rencana-tab" data-toggle="pill" href="#pills-Rencana" role="tab" aria-controls="pills-Rencana" aria-selected="true"><b>Rencana</b></a>
							</li>
							<li class="nav-item">
								<a class="nav-link <?php if($this->session->userdata('SubPendidikan') == 'Realisasi'){echo 'active';} ?>" id="pills-Realisasi-tab" data-toggle="pill" href="#pills-Realisasi" role="tab" aria-controls="pills-Realisasi" aria-selected="false"><b>Realisasi</b></a>
							</li>
						</ul>
						<div class="tab-content border border-warning rounded bg-light" id="pills-tabContent">
							<div class="tab-pane fade <?php if($this->session->userdata('SubPendidikan') == 'Rencana'){echo 'show active';} ?>" id="pills-Rencana" role="tabpanel" aria-labelledby="pills-Rencana-tab">
								<?php include 'RencanaPendidikan.php'; ?>
							</div>
							<div class="tab-pane fade <?php if($this->session->userdata('SubPendidikan') == 'Realisasi'){echo 'show active';} ?>" id="pills-Realisasi" role="tabpanel" aria-labelledby="pills-Realisasi-tab">
								<?php include 'RealisasiPendidikan.php'; ?>
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
				$('#TabelRencana').DataTable( {
					dom:'lfrtip',
					"info": false,
					"filter": false,
					"lengthMenu": [ 5, 10, 20, 30 ],
					"language": {
						"paginate": {
							'previous': '<b class="text-primary"><</b>',
							'next': '<b class="text-primary">></b>'
						}
					}
				});

				$('#TabelRealisasi').DataTable( {
					dom:'lfrtip',
					"lengthMenu": [ 5, 10, 20, 30 ],
					"language": {
						"paginate": {
							'previous': '<b class="text-primary"><</b>',
							'next': '<b class="text-primary">></b>'
						}
					}
				});
				$('[data-mask]').inputmask()

				$("#pills-Rencana-tab").click(function() {
					var Data = {SubPendidikan: 'Rencana'}
					$.post(BaseURL+"Dashboard/SubPendidikan", Data).done(function(Respon) {
						window.location = BaseURL + "Dashboard/Pendidikan"
					})
				})

				$("#pills-Realisasi-tab").click(function() {
					var Data = {SubPendidikan: 'Realisasi'}
					$.post(BaseURL+"Dashboard/SubPendidikan", Data).done(function(Respon) {
						window.location = BaseURL + "Dashboard/Pendidikan"
					})
				})

				$("#InputRencanaPendidikan").click(function() {
					var Sekolah = parseFloat(document.getElementById('KreditSekolah').innerHTML)
					var Diklat = parseFloat(document.getElementById('KreditDiklat').innerHTML)
					var Mengajar = parseFloat(document.getElementById('KreditMengajar').innerHTML)
					var BimbingSeminar = parseFloat(document.getElementById('KreditBimbingSeminar').innerHTML)
					var BimbingKKN = parseFloat(document.getElementById('KreditBimbingKKN').innerHTML)
					var DisertasiUtama = parseFloat(document.getElementById('KreditDisertasiUtama').innerHTML)
					var TesisUtama = parseFloat(document.getElementById('KreditTesisUtama').innerHTML)
					var SkripsiUtama = parseFloat(document.getElementById('KreditSkripsiUtama').innerHTML)
					var DisertasiPendamping = parseFloat(document.getElementById('KreditDisertasiPendamping').innerHTML)
					var TesisPendamping = parseFloat(document.getElementById('KreditTesisPendamping').innerHTML)
					var SkripsiPendamping = parseFloat(document.getElementById('KreditSkripsiPendamping').innerHTML)
					var PengujiUtama = parseFloat(document.getElementById('KreditPengujiUtama').innerHTML)
					var AnggotaPenguji = parseFloat(document.getElementById('KreditAnggotaPenguji').innerHTML)
					var MembinaKegiatan = parseFloat(document.getElementById('KreditMembinaKegiatan').innerHTML)
					var MengembangkanProgram = parseFloat(document.getElementById('KreditMengembangkanProgram').innerHTML)
					var BukuAjar = parseFloat(document.getElementById('KreditBukuAjar').innerHTML)
					var ProdukPengajaran = parseFloat(document.getElementById('KreditProdukPengajaran').innerHTML)
					var Orasi = parseFloat(document.getElementById('KreditOrasi').innerHTML)
					var Rektor = parseFloat(document.getElementById('KreditRektor').innerHTML)
					var WakilRektor = parseFloat(document.getElementById('KreditWakilRektor').innerHTML)
					var Ketua = parseFloat(document.getElementById('KreditKetua').innerHTML)
					var PembantuKetua = parseFloat(document.getElementById('KreditPembantuKetua').innerHTML)
					var DirekturAkademi = parseFloat(document.getElementById('KreditDirekturAkademi').innerHTML)
					var PembantuDirekturPoliteknik = parseFloat(document.getElementById('KreditPembantuDirekturPoliteknik').innerHTML)
					var PembantuDirekturAkademi = parseFloat(document.getElementById('KreditPembantuDirekturAkademi').innerHTML)
					var Sekretaris = parseFloat(document.getElementById('KreditSekretaris').innerHTML)
					var PembimbingPencangkokan = 0
					var PembimbingReguler = 0
					var Detasering = 0
					var Pencangkokan = 0
					var CekJabatan = '<?=$this->session->userdata('Jabatan')?>'
					if (CekJabatan == 'Lektor Kepala' || CekJabatan == 'Profesor') {
						PembimbingPencangkokan = parseFloat(document.getElementById('KreditPembimbingPencangkokan').innerHTML)
						PembimbingReguler = parseFloat(document.getElementById('KreditPembimbingReguler').innerHTML)
						Detasering = parseFloat(document.getElementById('KreditDetasering').innerHTML)
						Pencangkokan = parseFloat(document.getElementById('KreditPencangkokan').innerHTML)	
					}
					var Pengembangan960 = parseFloat(document.getElementById('KreditPengembangan960').innerHTML)
					var Pengembangan641 = parseFloat(document.getElementById('KreditPengembangan641').innerHTML)
					var Pengembangan481 = parseFloat(document.getElementById('KreditPengembangan481').innerHTML)
					var Pengembangan161 = parseFloat(document.getElementById('KreditPengembangan161').innerHTML)
					var Pengembangan81 = parseFloat(document.getElementById('KreditPengembangan81').innerHTML)
					var Pengembangan30 = parseFloat(document.getElementById('KreditPengembangan30').innerHTML)
					var Pengembangan10 = parseFloat(document.getElementById('KreditPengembangan10').innerHTML)
					var TotalKreditRencana = Sekolah + Diklat + Mengajar + BimbingSeminar + BimbingKKN + DisertasiUtama + TesisUtama + SkripsiUtama + DisertasiPendamping + TesisPendamping + SkripsiPendamping + PengujiUtama + AnggotaPenguji + MembinaKegiatan + MengembangkanProgram + BukuAjar + ProdukPengajaran + Orasi + Rektor + WakilRektor + Ketua + PembantuKetua + DirekturAkademi + PembantuDirekturPoliteknik + PembantuDirekturAkademi + Sekretaris + PembimbingPencangkokan + PembimbingReguler + Detasering + Pencangkokan + Pengembangan960 + Pengembangan641 + Pengembangan481 + Pengembangan161 + Pengembangan81 + Pengembangan30 + Pengembangan10
					var KodeSekolah = 0
					var KodeDiklat = 0
					if (document.getElementById("Doktor").checked){
						var KodeSekolah = 1
					} 
					if (document.getElementById("Magister").checked){
						var KodeSekolah = 2
					}
					if (document.getElementById("Diklat").checked){
						var KodeDiklat = 1
					}
					var KodeRencana = ''+KodeSekolah+'|'+KodeDiklat+'|'+($('#Mengajar').val() == ""? 0 : parseInt($('#Mengajar').val()))
														+'|'+(document.getElementById("BimbingSeminar").checked ? 1 : 0)
														+'|'+(document.getElementById("BimbingKKN").checked ? 1 : 0)
														+'|'+($('#DisertasiUtama').val() == ""? 0 : parseInt($('#DisertasiUtama').val()))
														+'|'+($('#TesisUtama').val() == ""? 0 : parseInt($('#TesisUtama').val()))
														+'|'+($('#SkripsiUtama').val() == ""? 0 : parseInt($('#SkripsiUtama').val()))
														+'|'+($('#DisertasiPendamping').val() == ""? 0 : parseInt($('#DisertasiPendamping').val()))
														+'|'+($('#TesisPendamping').val() == ""? 0 : parseInt($('#TesisPendamping').val()))
														+'|'+($('#SkripsiPendamping').val() == ""? 0 : parseInt($('#SkripsiPendamping').val()))
														+'|'+($('#PengujiUtama').val() == ""? 0 : parseInt($('#PengujiUtama').val()))
														+'|'+($('#AnggotaPenguji').val() == ""? 0 : parseInt($('#AnggotaPenguji').val()))
														+'|'+($('#MembinaKegiatan').val() == ""? 0 : parseInt($('#MembinaKegiatan').val()))
														+'|'+($('#MengembangkanProgram').val() == ""? 0 : parseInt($('#MengembangkanProgram').val()))
														+'|'+($('#BukuAjar').val() == ""? 0 : parseInt($('#BukuAjar').val()))
														+'|'+($('#ProdukPengajaran').val() == ""? 0 : parseInt($('#ProdukPengajaran').val()))
														+'|'+($('#Orasi').val() == ""? 0 : parseInt($('#Orasi').val()))
					if (CekJabatan == 'Lektor Kepala' || CekJabatan == 'Profesor') {
						KodeRencana = KodeRencana+'|'+(document.getElementById("PembimbingPencangkokan").checked ? 1 : 0)
																		 +'|'+(document.getElementById("PembimbingReguler").checked ? 1 : 0)
																		 +'|'+(document.getElementById("Detasering").checked ? 1 : 0)
																		 +'|'+(document.getElementById("Pencangkokan").checked ? 1 : 0)
					}
					else {
						KodeRencana = KodeRencana+'|'+0+'|'+0+'|'+0+'|'+0
					}
					KodeRencana = KodeRencana +'|'+(document.getElementById("Rektor").checked ? 1 : 0)
														+'|'+(document.getElementById("WakilRektor").checked ? 1 : 0)
														+'|'+(document.getElementById("Ketua").checked ? 1 : 0)
														+'|'+(document.getElementById("PembantuKetua").checked ? 1 : 0)
														+'|'+(document.getElementById("DirekturAkademi").checked ? 1 : 0)
														+'|'+(document.getElementById("PembantuDirekturPoliteknik").checked ? 1 : 0)
														+'|'+(document.getElementById("PembantuDirekturAkademi").checked ? 1 : 0)
														+'|'+(document.getElementById("Sekretaris").checked ? 1 : 0)
														+'|'+($('#Pengembangan960').val() == ""? 0 : parseInt($('#Pengembangan960').val()))
														+'|'+($('#Pengembangan641').val() == ""? 0 : parseInt($('#Pengembangan641').val()))
														+'|'+($('#Pengembangan481').val() == ""? 0 : parseInt($('#Pengembangan481').val()))
														+'|'+($('#Pengembangan161').val() == ""? 0 : parseInt($('#Pengembangan161').val()))
														+'|'+($('#Pengembangan81').val() == ""? 0 : parseInt($('#Pengembangan81').val()))
														+'|'+($('#Pengembangan30').val() == ""? 0 : parseInt($('#Pengembangan30').val()))
														+'|'+($('#Pengembangan10').val() == ""? 0 : parseInt($('#Pengembangan10').val()))
					var DataRencanaPendidikan = {Jenjang:$("#JenjangRencanaPendidikan").val(),Semester:$("#SemesterRencanaPendidikan").val(),
																			 Tahun:$("#TahunRencanaPendidikan").val(),Kode:KodeRencana,Total:TotalKreditRencana}
					$.post(BaseURL+"Pendidikan/InputRencanaPendidikan", DataRencanaPendidikan).done(function(Respon) {
						if (Respon == '1') {
							window.location = BaseURL + "Dashboard/Pendidikan"
						} else {
							alert(Respon)
						}
					})
				})

				$(document).on("click",".EditRencanaPendidikan",function(){
					var Data = $(this).attr('EditRencanaPendidikan')
					var Pisah = Data.split("/")
					$("#EditJenjangRencanaPendidikan").val(Pisah[2])
					$("#EditSemesterRencanaPendidikan").val(Pisah[3])
					$("#EditTahunRencanaPendidikan").val(Pisah[4])
					var PisahKode = Pisah[5].split("|")
					if (PisahKode[0] == '1') {
						$('#EditDoktor').attr('checked', true)	
						$("#EditKreditSekolah").html(200)
					} else if (PisahKode[0] == '2') {
						$('#EditMagister').attr('checked', true)
						$("#EditKreditSekolah").html(150)
					}
					if (PisahKode[1] == '1') {
						$('#EditDiklat').attr('checked', true)	
						$("#EditKreditDiklat").html(3)
					}
					$('#EditMengajar').val(PisahKode[2])
					if (Pisah[1] != "Asisten Ahli") {
						if (PisahKode[2] > 10) {
							$("#EditKreditMengajar").html(10+((PisahKode[2]-10)*0.5))
						} else {
							$("#EditKreditMengajar").html(PisahKode[2])
						}	
					} else {
						if (PisahKode[2] > 10) {
							$("#EditKreditMengajar").html(5+((PisahKode[2]-10)*0.25))
						} else {
							$("#EditKreditMengajar").html(PisahKode[2]*0.5)
						}	
					}
					if (PisahKode[3] == '1') {
						$('#EditBimbingSeminar').attr('checked', true)	
						$("#EditKreditBimbingSeminar").html(1)
					}
					if (PisahKode[4] == '1') {
						$('#EditBimbingKKN').attr('checked', true)	
						$("#EditKreditBimbingKKN").html(1)
					}
					$("#EditDisertasiUtama").val(PisahKode[5])
					$("#EditKreditDisertasiUtama").html(PisahKode[5]*2)
					$("#EditTesisUtama").val(PisahKode[6])
					$("#EditKreditTesisUtama").html(PisahKode[6]*0.5)
					$("#EditSkripsiUtama").val(PisahKode[7])
					$("#EditKreditSkripsiUtama").html(PisahKode[7]*0.125)
					$("#EditDisertasiPendamping").val(PisahKode[8])
					$("#EditKreditDisertasiPendamping").html(PisahKode[8]*1.5)
					$("#EditTesisPendamping").val(PisahKode[9])
					$("#EditKreditTesisPendamping").html(PisahKode[9]*0.3)
					$("#EditSkripsiPendamping").val(PisahKode[10])
					$("#EditKreditSkripsiPendamping").html(PisahKode[10]*0.0625)					
					$("#EditPengujiUtama").val(PisahKode[11])
					$("#EditKreditPengujiUtama").html(PisahKode[11]*0.25)
					$("#EditAnggotaPenguji").val(PisahKode[12])
					$("#EditKreditAnggotaPenguji").html(PisahKode[12]*0.0625)
					$("#EditMembinaKegiatan").val(PisahKode[13])
					$("#EditKreditMembinaKegiatan").html(PisahKode[13])
					$("#EditMengembangkanProgram").val(PisahKode[14])
					$("#EditKreditMengembangkanProgram").html(PisahKode[14]*2)

					if (PisahKode[22] == '1') {
						$('#EditRektor').attr('checked', true)	
						$("#EditKreditRektor").html(6)
					}
					else if (PisahKode[23] == '1') {
						$('#EditWakilRektor').attr('checked', true)	
						$("#EditKreditWakilRektor").html(5)
					}
					else if (PisahKode[24] == '1') {
						$('#EditKetua').attr('checked', true)	
						$("#EditKreditKetua").html(4)
					}
					else if (PisahKode[25] == '1') {
						$('#EditPembantuKetua').attr('checked', true)	
						$("#EditKreditPembantuKetua").html(4)
					}
					else if (PisahKode[26] == '1') {
						$('#EditDirekturAkademi').attr('checked', true)	
						$("#EditKreditDirekturAkademi").html(4)
					}
					else if (PisahKode[27] == '1') {
						$('#EditPembantuDirekturPoliteknik').attr('checked', true)	
						$("#EditKreditPembantuDirekturPoliteknik").html(3)
					}
					else if (PisahKode[28] == '1') {
						$('#EditPembantuDirekturAkademi').attr('checked', true)	
						$("#EditKreditPembantuDirekturAkademi").html(3)
					}
					else if (PisahKode[29] == '1') {
						$('#EditSekretaris').attr('checked', true)	
						$("#EditKreditSekretaris").html(3)
					}
					// document.getElementById('EditUraian').value = Pisah[1];
					// document.getElementById('EditTanggal').value = Pisah[2];
					// document.getElementById('EditVolume').value = Pisah[3];
					// document.getElementById('ID').value = Pisah[4];
					$('#ModalEditRencanaPendidikan').modal("show");
					// var Hapus = {No: $(this).attr('HapusRencanaPendidikan')}
					
					// $.post(BaseURL+"Pendidikan/HapusRencanaPendidikan", Hapus).done(function(Respon) {
					// 	if (Respon == '1') {
					// 		window.location = BaseURL + "Dashboard/Pendidikan"
					// 	} else {
					// 		alert(Respon)
					// 	}
					// });
				});

				$(document).on("click",".HapusRencanaPendidikan",function(){
					var Hapus = {No: $(this).attr('HapusRencanaPendidikan')}
					var Konfirmasi = confirm("Yakin Ingin Menghapus?");
      		if (Konfirmasi == true) {
						$.post(BaseURL+"Pendidikan/HapusRencanaPendidikan", Hapus).done(function(Respon) {
							if (Respon == '1') {
								window.location = BaseURL + "Dashboard/Pendidikan"
							} else {
								alert(Respon)
							}
						});
					}
				});

				$("#LihatRealisasi").click(function() {
					var Data = {ID: $("#OpsiKegiatan").val()}
					$.post(BaseURL+"Dashboard/LihatPendidikan", Data).done(function(Respon) {
						window.location = BaseURL + "Dashboard/Pendidikan"
					})
				})

				$("#TombolTotalKredit").click(function() {
					var KreditSekolah = parseFloat(document.getElementById('KreditSekolah').innerHTML)
					var KreditDiklat = parseFloat(document.getElementById('KreditDiklat').innerHTML)
					var KreditMengajar = parseFloat(document.getElementById('KreditMengajar').innerHTML)
					var KreditBimbingSeminar = parseFloat(document.getElementById('KreditBimbingSeminar').innerHTML)
					var KreditBimbingKKN = parseFloat(document.getElementById('KreditBimbingKKN').innerHTML)
					var KreditDisertasiUtama = parseFloat(document.getElementById('KreditDisertasiUtama').innerHTML)
					var KreditTesisUtama = parseFloat(document.getElementById('KreditTesisUtama').innerHTML)
					var KreditSkripsiUtama = parseFloat(document.getElementById('KreditSkripsiUtama').innerHTML)
					var KreditDisertasiPendamping = parseFloat(document.getElementById('KreditDisertasiPendamping').innerHTML)
					var KreditTesisPendamping = parseFloat(document.getElementById('KreditTesisPendamping').innerHTML)
					var KreditSkripsiPendamping = parseFloat(document.getElementById('KreditSkripsiPendamping').innerHTML)
					var KreditPengujiUtama = parseFloat(document.getElementById('KreditPengujiUtama').innerHTML)
					var KreditAnggotaPenguji = parseFloat(document.getElementById('KreditAnggotaPenguji').innerHTML)
					var KreditMembinaKegiatan = parseFloat(document.getElementById('KreditMembinaKegiatan').innerHTML)
					var KreditMengembangkanProgram = parseFloat(document.getElementById('KreditMengembangkanProgram').innerHTML)
					var KreditBukuAjar = parseFloat(document.getElementById('KreditBukuAjar').innerHTML)
					var KreditProdukPengajaran = parseFloat(document.getElementById('KreditProdukPengajaran').innerHTML)
					var KreditOrasi = parseFloat(document.getElementById('KreditOrasi').innerHTML)
					var KreditRektor = parseFloat(document.getElementById('KreditRektor').innerHTML)
					var KreditWakilRektor = parseFloat(document.getElementById('KreditWakilRektor').innerHTML)
					var KreditKetua = parseFloat(document.getElementById('KreditKetua').innerHTML)
					var KreditPembantuKetua = parseFloat(document.getElementById('KreditPembantuKetua').innerHTML)
					var KreditDirekturAkademi = parseFloat(document.getElementById('KreditDirekturAkademi').innerHTML)
					var KreditPembantuDirekturPoliteknik = parseFloat(document.getElementById('KreditPembantuDirekturPoliteknik').innerHTML)
					var KreditPembantuDirekturAkademi = parseFloat(document.getElementById('KreditPembantuDirekturAkademi').innerHTML)
					var KreditSekretaris = parseFloat(document.getElementById('KreditSekretaris').innerHTML)
					var KreditPembimbingPencangkokan = 0
					var KreditPembimbingReguler = 0
					var KreditDetasering = 0
					var KreditPencangkokan = 0
					var CekJabatan = '<?=$this->session->userdata('Jabatan')?>'
					if (CekJabatan == 'Lektor Kepala' || CekJabatan == 'Profesor') {
						KreditPembimbingPencangkokan = parseFloat(document.getElementById('KreditPembimbingPencangkokan').innerHTML)
						KreditPembimbingReguler = parseFloat(document.getElementById('KreditPembimbingReguler').innerHTML)
						KreditDetasering = parseFloat(document.getElementById('KreditDetasering').innerHTML)
						KreditPencangkokan = parseFloat(document.getElementById('KreditPencangkokan').innerHTML)	
					}
					var KreditPengembangan960 = parseFloat(document.getElementById('KreditPengembangan960').innerHTML)
					var KreditPengembangan641 = parseFloat(document.getElementById('KreditPengembangan641').innerHTML)
					var KreditPengembangan481 = parseFloat(document.getElementById('KreditPengembangan481').innerHTML)
					var KreditPengembangan161 = parseFloat(document.getElementById('KreditPengembangan161').innerHTML)
					var KreditPengembangan81 = parseFloat(document.getElementById('KreditPengembangan81').innerHTML)
					var KreditPengembangan30 = parseFloat(document.getElementById('KreditPengembangan30').innerHTML)
					var KreditPengembangan10 = parseFloat(document.getElementById('KreditPengembangan10').innerHTML)
					document.getElementById('TotalKredit').innerHTML = KreditSekolah + KreditDiklat + KreditMengajar + KreditBimbingSeminar + KreditBimbingKKN + KreditDisertasiUtama + KreditTesisUtama + KreditSkripsiUtama + KreditDisertasiPendamping + KreditTesisPendamping + KreditSkripsiPendamping + KreditPengujiUtama + KreditAnggotaPenguji + KreditMembinaKegiatan + KreditMengembangkanProgram + KreditBukuAjar + KreditProdukPengajaran + KreditOrasi + KreditRektor + KreditWakilRektor + KreditKetua + KreditPembantuKetua + KreditDirekturAkademi + KreditPembantuDirekturPoliteknik + KreditPembantuDirekturAkademi + KreditSekretaris + KreditPembimbingPencangkokan + KreditPembimbingReguler + KreditDetasering + KreditPencangkokan + KreditPengembangan960 + KreditPengembangan641 + KreditPengembangan481 + KreditPengembangan161 + KreditPengembangan81 + KreditPengembangan30 + KreditPengembangan10
				})

				$(document).on("click",".Edit",function(){
					var Data = $(this).attr('Edit')
					var Pisah = Data.split("|");
					document.getElementById('No').value = Pisah[0];
					document.getElementById('EditUraian').value = Pisah[1];
					document.getElementById('EditTanggal').value = Pisah[2];
					document.getElementById('EditVolume').value = Pisah[3];
					document.getElementById('ID').value = Pisah[4];
					$('#Edit').modal("show");
				});

				$("#EditKegiatan").click(function() {
					var Edit = {Kegiatan: $("#EditUraian").val(),
											Tanggal: $("#EditTanggal").val(),
											ID: $("#ID").val(),
											No: $("#No").val(),
                      Volume: $("#EditVolume").val()}
					$.post(BaseURL+"Pendidikan/Edit", Edit).done(function(Respon) {
						if (Respon == '1') {
							window.location = BaseURL + "Dashboard/Pendidikan"
						} else {
							alert(Respon)
						}
					});
				});

				$("#InputKegiatan").click(function() {
					if (isNaN($("#Volume").val())) {
						alert('Volume Harus Angka & Gunakan Tanda . Untuk desimal!')
					} 
					else {
						// var Data = {Kegiatan: $("#Uraian").val(),
						// 					Tanggal: $("#Tanggal").val(),
						// 					ID: $("#JenisKegiatan").val(),
            //           Volume: $("#Volume").val()}
						var fd = new FormData()
						var Bukti = $('#Bukti')[0].files
						for(var i = 0;i<Bukti.length;i++){
							fd.append("file"+i, Bukti[i])
						}
						fd.append('Kegiatan',$("#Uraian").val())		
						fd.append('Tanggal',$("#Tanggal").val())
						fd.append('ID',$("#JenisKegiatan").val())
						fd.append('Volume',$("#Volume").val())									
						if ($("#JenisKegiatan").val() == 'PND1') {
							fd.append('Jenjang',$("#Jenjang").val())
						}
						else if ($("#JenisKegiatan").val() == 'PND6') {
							fd.append('JenisPembimbing',$("#JenisPembimbing").val())
							fd.append('JenisBimbingan',$("#JenisBimbingan").val())							
						}
						else if ($("#JenisKegiatan").val() == 'PND7') {
							fd.append('JenisPenguji',$("#JenisPenguji").val())
						}
						else if ($("#JenisKegiatan").val() == 'PND10') {
							fd.append('BahanPengajaran',$("#BahanPengajaran").val())
						}
						else if ($("#JenisKegiatan").val() == 'PND12') {
							fd.append('JenisPND12',$("#JenisPND12").val())
						}
						else if ($("#JenisKegiatan").val() == 'PND13') {
							fd.append('JenisPND13',$("#JenisPND13").val())
						}
						else if ($("#JenisKegiatan").val() == 'PND14') {
							fd.append('JenisPND14',$("#JenisPND14").val())
						}
						else if ($("#JenisKegiatan").val() == 'PND15') {
							fd.append('JenisPND15',$("#JenisPND15").val())
						}
						$.ajax({
							url: BaseURL+'Pendidikan/Input',
							type: 'post',
							data: fd,
							contentType: false,
            	processData: false,
							success: function(Respon){
								if (Respon == '1') {
									window.location = BaseURL + "Dashboard/Pendidikan"
								}
								else {
									alert('Gagal Menyimpan!')
								}
							}
						});
						// $.post(BaseURL+"Pendidikan/Input", Data).done(function(Respon) {
						// 	if (Respon == '1') {
						// 		window.location = BaseURL + "Dashboard/Pendidikan"
						// 	}
						// 	else {
						// 		alert('Gagal Menyimpan!')
						// 	}
						// })
					}
          return false
        })

				$(document).on("click",".Hapus",function(){
					var Hapus = {No: $(this).attr('Hapus')};
					$.post(BaseURL+"Pendidikan/Edit", Hapus).done(function(Respon) {
						if (Respon == '1') {
							window.location = BaseURL + "Dashboard/Pendidikan"
						} else {
							alert(Respon)
						}
					});
				});
			});

			function GantiKegiatan() {
				if ($("#JenisKegiatan").val() == 'PND1') {
					document.getElementById("OpsiPND1").style.display = 'block'
					document.getElementById("OpsiPND6").style.display = 'none'
					document.getElementById("OpsiPND7").style.display = 'none'
					document.getElementById("OpsiPND10").style.display = 'none'
					document.getElementById("OpsiPND13").style.display = 'none'
					document.getElementById("OpsiPND14").style.display = 'none'
					document.getElementById("OpsiPND15").style.display = 'none'
				}
				else if ($("#JenisKegiatan").val() == 'PND6') {
					document.getElementById("OpsiPND1").style.display = 'none'
					document.getElementById("OpsiPND6").style.display = 'block'
					document.getElementById("OpsiPND7").style.display = 'none'
					document.getElementById("OpsiPND10").style.display = 'none'
					document.getElementById("OpsiPND12").style.display = 'none'
					document.getElementById("OpsiPND13").style.display = 'none'
					document.getElementById("OpsiPND14").style.display = 'none'
					document.getElementById("OpsiPND15").style.display = 'none'
				}
				else if ($("#JenisKegiatan").val() == 'PND7') {
					document.getElementById("OpsiPND1").style.display = 'none'
					document.getElementById("OpsiPND6").style.display = 'none'
					document.getElementById("OpsiPND7").style.display = 'block'
					document.getElementById("OpsiPND10").style.display = 'none'
					document.getElementById("OpsiPND12").style.display = 'none'
					document.getElementById("OpsiPND13").style.display = 'none'
					document.getElementById("OpsiPND14").style.display = 'none'
					document.getElementById("OpsiPND15").style.display = 'none'
				}
				else if ($("#JenisKegiatan").val() == 'PND10') {
					document.getElementById("OpsiPND1").style.display = 'none'
					document.getElementById("OpsiPND6").style.display = 'none'
					document.getElementById("OpsiPND7").style.display = 'none'
					document.getElementById("OpsiPND10").style.display = 'block'
					document.getElementById("OpsiPND12").style.display = 'none'
					document.getElementById("OpsiPND13").style.display = 'none'
					document.getElementById("OpsiPND14").style.display = 'none'
					document.getElementById("OpsiPND15").style.display = 'none'
				}
				else if ($("#JenisKegiatan").val() == 'PND12') {
					document.getElementById("OpsiPND1").style.display = 'none'
					document.getElementById("OpsiPND6").style.display = 'none'
					document.getElementById("OpsiPND7").style.display = 'none'
					document.getElementById("OpsiPND10").style.display = 'none'
					document.getElementById("OpsiPND12").style.display = 'block'
					document.getElementById("OpsiPND13").style.display = 'none'
					document.getElementById("OpsiPND14").style.display = 'none'
					document.getElementById("OpsiPND15").style.display = 'none'
				}
				else if ($("#JenisKegiatan").val() == 'PND13') {
					document.getElementById("OpsiPND1").style.display = 'none'
					document.getElementById("OpsiPND6").style.display = 'none'
					document.getElementById("OpsiPND7").style.display = 'none'
					document.getElementById("OpsiPND10").style.display = 'none'
					document.getElementById("OpsiPND12").style.display = 'none'
					document.getElementById("OpsiPND13").style.display = 'block'
					document.getElementById("OpsiPND14").style.display = 'none'
					document.getElementById("OpsiPND15").style.display = 'none'
				}
				else if ($("#JenisKegiatan").val() == 'PND14') {
					document.getElementById("OpsiPND1").style.display = 'none'
					document.getElementById("OpsiPND6").style.display = 'none'
					document.getElementById("OpsiPND7").style.display = 'none'
					document.getElementById("OpsiPND10").style.display = 'none'
					document.getElementById("OpsiPND12").style.display = 'none'
					document.getElementById("OpsiPND13").style.display = 'none'
					document.getElementById("OpsiPND14").style.display = 'block'
					document.getElementById("OpsiPND15").style.display = 'none'
				}
				else if ($("#JenisKegiatan").val() == 'PND15') {
					document.getElementById("OpsiPND1").style.display = 'none'
					document.getElementById("OpsiPND6").style.display = 'none'
					document.getElementById("OpsiPND7").style.display = 'none'
					document.getElementById("OpsiPND10").style.display = 'none'
					document.getElementById("OpsiPND12").style.display = 'none'
					document.getElementById("OpsiPND13").style.display = 'none'
					document.getElementById("OpsiPND14").style.display = 'none'
					document.getElementById("OpsiPND15").style.display = 'block'
				}
				else if ($("#JenisKegiatan").val() != 'PND1' && $("#JenisKegiatan").val() != 'PND6' && $("#JenisKegiatan").val() != 'PND7' && $("#JenisKegiatan").val() != 'PND10' && $("#JenisKegiatan").val() != 'PND12' && $("#JenisKegiatan").val() != 'PND13' && $("#JenisKegiatan").val() != 'PND14' && $("#JenisKegiatan").val() != 'PND15') {
					document.getElementById("OpsiPND1").style.display = 'none'
					document.getElementById("OpsiPND6").style.display = 'none'
					document.getElementById("OpsiPND7").style.display = 'none'
					document.getElementById("OpsiPND10").style.display = 'none'
					document.getElementById("OpsiPND12").style.display = 'none'
					document.getElementById("OpsiPND13").style.display = 'none'
					document.getElementById("OpsiPND14").style.display = 'none'
					document.getElementById("OpsiPND15").style.display = 'none'
				}
			}

			function Doktor() {
				if (document.getElementById("Doktor").checked){
					document.getElementById('KreditSekolah').innerHTML = 200
					document.getElementById("Magister").disabled = true
					KreditSekolah = 200
				} else {
					document.getElementById('KreditSekolah').innerHTML = 0
					document.getElementById("Magister").disabled = false
				}
			}

			function Magister() {
				if (document.getElementById("Magister").checked){
					document.getElementById('KreditSekolah').innerHTML = 150
					document.getElementById("Doktor").disabled = true
				} else {
					document.getElementById('KreditSekolah').innerHTML = 0
					document.getElementById("Doktor").disabled = false
				}
			}

			function Diklat() {
				if (document.getElementById("Diklat").checked){
					document.getElementById('KreditDiklat').innerHTML = 3
				} else {
					document.getElementById('KreditDiklat').innerHTML = 0
				}
			}

			function Mengajar() {
				var jabatan = '<?=$this->session->userdata('Jabatan')?>;'
				if (jabatan != 'Asisten Ahli'){
					if (parseInt($('#Mengajar').val()) <= 10) {
						document.getElementById('KreditMengajar').innerHTML = parseInt($('#Mengajar').val())
					} else if(parseInt($('#Mengajar').val()) > 10){
						document.getElementById('KreditMengajar').innerHTML = 10+(0.5*(parseInt($('#Mengajar').val())-10))						
					} else {
						document.getElementById('KreditMengajar').innerHTML = 0
					}
				} 
				else {
					if (parseInt($('#Mengajar').val()) <= 10) {
						document.getElementById('KreditMengajar').innerHTML = parseInt($('#Mengajar').val())*0.5
					} else if(parseInt($('#Mengajar').val()) > 10){
						document.getElementById('KreditMengajar').innerHTML = 5+(0.25*(parseInt($('#Mengajar').val())-10))
					} else {
						document.getElementById('KreditMengajar').innerHTML = 0
					}
				}
			}

			function BimbingSeminar() {
				if (document.getElementById("BimbingSeminar").checked){
					document.getElementById('KreditBimbingSeminar').innerHTML = 1
				} else {
					document.getElementById('KreditBimbingSeminar').innerHTML = 0
				}
			}

			function BimbingKKN() {
				if (document.getElementById("BimbingKKN").checked){
					document.getElementById('KreditBimbingKKN').innerHTML = 1
				} else {
					document.getElementById('KreditBimbingKKN').innerHTML = 0
				}
			}

			function DisertasiUtama() {
				if (isNaN(parseInt($('#DisertasiUtama').val()))) {
					document.getElementById('KreditDisertasiUtama').innerHTML = 0
				} else {
					document.getElementById('KreditDisertasiUtama').innerHTML = parseInt($('#DisertasiUtama').val())*2
				}
			}

			function TesisUtama() {
				if (isNaN(parseInt($('#TesisUtama').val()))) {
					document.getElementById('KreditTesisUtama').innerHTML = 0
				} else {
					document.getElementById('KreditTesisUtama').innerHTML = parseInt($('#TesisUtama').val())*0.5
				}
			}

			function SkripsiUtama() {
				if (isNaN(parseInt($('#SkripsiUtama').val()))) {
					document.getElementById('KreditSkripsiUtama').innerHTML = 0
				} else {
					document.getElementById('KreditSkripsiUtama').innerHTML = parseInt($('#SkripsiUtama').val())*0.125
				}
			}

			function DisertasiPendamping() {
				if (isNaN(parseInt($('#DisertasiPendamping').val()))) {
					document.getElementById('KreditDisertasiPendamping').innerHTML = 0
				} else {
					document.getElementById('KreditDisertasiPendamping').innerHTML = parseInt($('#DisertasiPendamping').val())*1.5
				}
			}

			function TesisPendamping() {
				if (isNaN(parseInt($('#TesisPendamping').val()))) {
					document.getElementById('KreditTesisPendamping').innerHTML = 0
				} else {
					document.getElementById('KreditTesisPendamping').innerHTML = parseInt($('#TesisPendamping').val())*0.3
				}
			}

			function SkripsiPendamping() {
				if (isNaN(parseInt($('#SkripsiPendamping').val()))) {
					document.getElementById('KreditSkripsiPendamping').innerHTML = 0
				} else {
					document.getElementById('KreditSkripsiPendamping').innerHTML = parseInt($('#SkripsiPendamping').val())*0.0625
				}
			}

			function PengujiUtama() {
				if (isNaN(parseInt($('#PengujiUtama').val()))) {
					document.getElementById('KreditPengujiUtama').innerHTML = 0
				} else {
					document.getElementById('KreditPengujiUtama').innerHTML = parseInt($('#PengujiUtama').val())/4	
				}
			}

			function AnggotaPenguji() {
				if (isNaN(parseInt($('#AnggotaPenguji').val()))) {
					document.getElementById('KreditAnggotaPenguji').innerHTML = 0
				} else {
					document.getElementById('KreditAnggotaPenguji').innerHTML = parseInt($('#AnggotaPenguji').val())/8
				}
			}

			function MembinaKegiatan() {
				if (isNaN(parseInt($('#MembinaKegiatan').val()))) {
					document.getElementById('KreditMembinaKegiatan').innerHTML = 0
				} else {
					document.getElementById('KreditMembinaKegiatan').innerHTML = parseInt($('#MembinaKegiatan').val())
				}
			}

			function MengembangkanProgram() {
				if (isNaN(parseInt($('#MengembangkanProgram').val()))) {
					document.getElementById('KreditMengembangkanProgram').innerHTML = 0
				} else {
					document.getElementById('KreditMengembangkanProgram').innerHTML = parseInt($('#MengembangkanProgram').val())*2
				}
			}

			function BukuAjar() {
				if (isNaN(parseInt($('#BukuAjar').val()))) {
					document.getElementById('KreditBukuAjar').innerHTML = 0
				} else {
					document.getElementById('KreditBukuAjar').innerHTML = parseInt($('#BukuAjar').val())*20
				}
			}

			function ProdukPengajaran() {
				if (isNaN(parseInt($('#ProdukPengajaran').val()))) {
					document.getElementById('KreditProdukPengajaran').innerHTML = 0
				} else {
					document.getElementById('KreditProdukPengajaran').innerHTML = parseInt($('#ProdukPengajaran').val())*5
				}
			}

			function Orasi() {
				if (isNaN(parseInt($('#Orasi').val()))) {
					document.getElementById('KreditOrasi').innerHTML = 0
				} else {
					document.getElementById('KreditOrasi').innerHTML = parseInt($('#Orasi').val())*2.5
				}
			}

			function PembimbingPencangkokan() {
				if (isNaN(parseInt($('#PembimbingPencangkokan').val()))) {
					document.getElementById('KreditPembimbingPencangkokan').innerHTML = 0
				} else {
					document.getElementById('KreditPembimbingPencangkokan').innerHTML = parseInt($('#PembimbingPencangkokan').val())*2
				}
			}

			function PembimbingReguler() {
				if (isNaN(parseInt($('#PembimbingReguler').val()))) {
					document.getElementById('KreditPembimbingReguler').innerHTML = 0
				} else {
					document.getElementById('KreditPembimbingReguler').innerHTML = parseInt($('#PembimbingReguler').val())
				}
			}

			function Detasering() {
				if (isNaN(parseInt($('#Detasering').val()))) {
					document.getElementById('KreditDetasering').innerHTML = 0
				} else {
					document.getElementById('KreditDetasering').innerHTML = parseInt($('#Detasering').val())*5
				}
			}

			function Pencangkokan() {
				if (isNaN(parseInt($('#Pencangkokan').val()))) {
					document.getElementById('KreditPencangkokan').innerHTML = 0
				} else {
					document.getElementById('KreditPencangkokan').innerHTML = parseInt($('#Pencangkokan').val())*4
				}
			}

			function Pengembangan960() {
				if (isNaN(parseInt($('#Pengembangan960').val()))) {
					document.getElementById('KreditPengembangan960').innerHTML = 0
				} else {
					document.getElementById('KreditPengembangan960').innerHTML = parseInt($('#Pengembangan960').val())*15
				}
			}

			function Pengembangan641() {
				if (isNaN(parseInt($('#Pengembangan641').val()))) {
					document.getElementById('KreditPengembangan641').innerHTML = 0
				} else {
					document.getElementById('KreditPengembangan641').innerHTML = parseInt($('#Pengembangan641').val())*9
				}
			}

			function Pengembangan481() {
				if (isNaN(parseInt($('#Pengembangan481').val()))) {
					document.getElementById('KreditPengembangan481').innerHTML = 0
				} else {
					document.getElementById('KreditPengembangan481').innerHTML = parseInt($('#Pengembangan481').val())*6
				}
			}

			function Pengembangan161() {
				if (isNaN(parseInt($('#Pengembangan161').val()))) {
					document.getElementById('KreditPengembangan161').innerHTML = 0
				} else {
					document.getElementById('KreditPengembangan161').innerHTML = parseInt($('#Pengembangan161').val())*3
				}
			}

			function Pengembangan81() {
				if (isNaN(parseInt($('#Pengembangan81').val()))) {
					document.getElementById('KreditPengembangan81').innerHTML = 0
				} else {
					document.getElementById('KreditPengembangan81').innerHTML = parseInt($('#Pengembangan81').val())*2
				}
			}

			function Pengembangan30() {
				if (isNaN(parseInt($('#Pengembangan30').val()))) {
					document.getElementById('KreditPengembangan30').innerHTML = 0
				} else {
					document.getElementById('KreditPengembangan30').innerHTML = parseInt($('#Pengembangan30').val())*1
				}
			}

			function Pengembangan10() {
				if (isNaN(parseInt($('#Pengembangan10').val()))) {
					document.getElementById('KreditPengembangan10').innerHTML = 0
				} else {
					document.getElementById('KreditPengembangan10').innerHTML = parseInt($('#Pengembangan10').val())*0.5
				}
			}

			function Rektor() {
				if (document.getElementById("Rektor").checked){
					document.getElementById('KreditRektor').innerHTML = 6
          document.getElementById("WakilRektor").disabled = true
          document.getElementById("Ketua").disabled = true
          document.getElementById("PembantuKetua").disabled = true
          document.getElementById("DirekturAkademi").disabled = true
          document.getElementById("PembantuDirekturPoliteknik").disabled = true
          document.getElementById("PembantuDirekturAkademi").disabled = true
          document.getElementById("Sekretaris").disabled = true
        } else {
          document.getElementById('KreditRektor').innerHTML = 0
          document.getElementById("WakilRektor").disabled = false
          document.getElementById("Ketua").disabled = false
          document.getElementById("PembantuKetua").disabled = false
          document.getElementById("DirekturAkademi").disabled = false
          document.getElementById("PembantuDirekturPoliteknik").disabled = false
          document.getElementById("PembantuDirekturAkademi").disabled = false
          document.getElementById("Sekretaris").disabled = false
				}
			}

			function WakilRektor() {
				if (document.getElementById("WakilRektor").checked){
					document.getElementById('KreditWakilRektor').innerHTML = 5
          document.getElementById("Rektor").disabled = true
          document.getElementById("Ketua").disabled = true
          document.getElementById("PembantuKetua").disabled = true
          document.getElementById("DirekturAkademi").disabled = true
          document.getElementById("PembantuDirekturPoliteknik").disabled = true
          document.getElementById("PembantuDirekturAkademi").disabled = true
          document.getElementById("Sekretaris").disabled = true
        } else {
          document.getElementById('KreditWakilRektor').innerHTML = 0
          document.getElementById("Rektor").disabled = false
          document.getElementById("Ketua").disabled = false
          document.getElementById("PembantuKetua").disabled = false
          document.getElementById("DirekturAkademi").disabled = false
          document.getElementById("PembantuDirekturPoliteknik").disabled = false
          document.getElementById("PembantuDirekturAkademi").disabled = false
          document.getElementById("Sekretaris").disabled = false
				}
			}

			function Ketua() {
				if (document.getElementById("Ketua").checked){
					document.getElementById('KreditKetua').innerHTML = 4
          document.getElementById("WakilRektor").disabled = true
          document.getElementById("Rektor").disabled = true
          document.getElementById("PembantuKetua").disabled = true
          document.getElementById("DirekturAkademi").disabled = true
          document.getElementById("PembantuDirekturPoliteknik").disabled = true
          document.getElementById("PembantuDirekturAkademi").disabled = true
          document.getElementById("Sekretaris").disabled = true
        } else {
          document.getElementById('KreditKetua').innerHTML = 0
          document.getElementById("WakilRektor").disabled = false
          document.getElementById("Rektor").disabled = false
          document.getElementById("PembantuKetua").disabled = false
          document.getElementById("DirekturAkademi").disabled = false
          document.getElementById("PembantuDirekturPoliteknik").disabled = false
          document.getElementById("PembantuDirekturAkademi").disabled = false
          document.getElementById("Sekretaris").disabled = false
				}
			}

			function PembantuKetua() {
				if (document.getElementById("PembantuKetua").checked){
					document.getElementById('KreditPembantuKetua').innerHTML = 4
          document.getElementById("WakilRektor").disabled = true
          document.getElementById("Ketua").disabled = true
          document.getElementById("Rektor").disabled = true
          document.getElementById("DirekturAkademi").disabled = true
          document.getElementById("PembantuDirekturPoliteknik").disabled = true
          document.getElementById("PembantuDirekturAkademi").disabled = true
          document.getElementById("Sekretaris").disabled = true
        } else {
          document.getElementById('KreditPembantuKetua').innerHTML = 0
          document.getElementById("WakilRektor").disabled = false
          document.getElementById("Ketua").disabled = false
          document.getElementById("Rektor").disabled = false
          document.getElementById("DirekturAkademi").disabled = false
          document.getElementById("PembantuDirekturPoliteknik").disabled = false
          document.getElementById("PembantuDirekturAkademi").disabled = false
          document.getElementById("Sekretaris").disabled = false
				}
			}

			function DirekturAkademi() {
				if (document.getElementById("DirekturAkademi").checked){
					document.getElementById('KreditDirekturAkademi').innerHTML = 4
          document.getElementById("WakilRektor").disabled = true
          document.getElementById("Ketua").disabled = true
          document.getElementById("PembantuKetua").disabled = true
          document.getElementById("Rektor").disabled = true
          document.getElementById("PembantuDirekturPoliteknik").disabled = true
          document.getElementById("PembantuDirekturAkademi").disabled = true
          document.getElementById("Sekretaris").disabled = true
        } else {
          document.getElementById('KreditDirekturAkademi').innerHTML = 0
          document.getElementById("WakilRektor").disabled = false
          document.getElementById("Ketua").disabled = false
          document.getElementById("PembantuKetua").disabled = false
          document.getElementById("Rektor").disabled = false
          document.getElementById("PembantuDirekturPoliteknik").disabled = false
          document.getElementById("PembantuDirekturAkademi").disabled = false
          document.getElementById("Sekretaris").disabled = false
				}
			}

			function PembantuDirekturPoliteknik() {
				if (document.getElementById("PembantuDirekturPoliteknik").checked){
					document.getElementById('KreditPembantuDirekturPoliteknik').innerHTML = 3
          document.getElementById("WakilRektor").disabled = true
          document.getElementById("Ketua").disabled = true
          document.getElementById("PembantuKetua").disabled = true
          document.getElementById("DirekturAkademi").disabled = true
          document.getElementById("Rektor").disabled = true
          document.getElementById("PembantuDirekturAkademi").disabled = true
          document.getElementById("Sekretaris").disabled = true
        } else {
          document.getElementById('KreditPembantuDirekturPoliteknik').innerHTML = 0
          document.getElementById("WakilRektor").disabled = false
          document.getElementById("Ketua").disabled = false
          document.getElementById("PembantuKetua").disabled = false
          document.getElementById("DirekturAkademi").disabled = false
          document.getElementById("Rektor").disabled = false
          document.getElementById("PembantuDirekturAkademi").disabled = false
          document.getElementById("Sekretaris").disabled = false
				}
			}

			function PembantuDirekturAkademi() {
				if (document.getElementById("PembantuDirekturAkademi").checked){
					document.getElementById('KreditPembantuDirekturAkademi').innerHTML = 3
          document.getElementById("WakilRektor").disabled = true
          document.getElementById("Ketua").disabled = true
          document.getElementById("PembantuKetua").disabled = true
          document.getElementById("DirekturAkademi").disabled = true
          document.getElementById("PembantuDirekturPoliteknik").disabled = true
          document.getElementById("Rektor").disabled = true
          document.getElementById("Sekretaris").disabled = true
        } else {
          document.getElementById('KreditPembantuDirekturAkademi').innerHTML = 0
          document.getElementById("WakilRektor").disabled = false
          document.getElementById("Ketua").disabled = false
          document.getElementById("PembantuKetua").disabled = false
          document.getElementById("DirekturAkademi").disabled = false
          document.getElementById("PembantuDirekturPoliteknik").disabled = false
          document.getElementById("Rektor").disabled = false
          document.getElementById("Sekretaris").disabled = false
				}
			}

			function Sekretaris() {
				if (document.getElementById("Sekretaris").checked){
					document.getElementById('KreditSekretaris').innerHTML = 3
          document.getElementById("WakilRektor").disabled = true
          document.getElementById("Ketua").disabled = true
          document.getElementById("PembantuKetua").disabled = true
          document.getElementById("DirekturAkademi").disabled = true
          document.getElementById("PembantuDirekturPoliteknik").disabled = true
          document.getElementById("PembantuDirekturAkademi").disabled = true
          document.getElementById("Rektor").disabled = true
        } else {
          document.getElementById('KreditSekretaris').innerHTML = 0
          document.getElementById("WakilRektor").disabled = false
          document.getElementById("Ketua").disabled = false
          document.getElementById("PembantuKetua").disabled = false
          document.getElementById("DirekturAkademi").disabled = false
          document.getElementById("PembantuDirekturPoliteknik").disabled = false
          document.getElementById("PembantuDirekturAkademi").disabled = false
          document.getElementById("Rektor").disabled = false
				}
			}
		</script>
</body>
</html>