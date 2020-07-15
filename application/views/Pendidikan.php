<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
					<div class="col-sm-12 mt-2">
						<ul class="nav nav-pills mb-2 border border-warning rounded bg-light" id="pills-tab" role="tablist">
							<li class="nav-item">
								<a class="nav-link" id="pills-Rencana-tab" data-toggle="pill" href="#pills-Rencana" role="tab" aria-controls="pills-Rencana" aria-selected="true"><b>Rencana</b></a>
							</li>
							<li class="nav-item">
								<a class="nav-link active" id="pills-Realisasi-tab" data-toggle="pill" href="#pills-Realisasi" role="tab" aria-controls="pills-Realisasi" aria-selected="false"><b>Realisasi</b></a>
							</li>
						</ul>
						<div class="tab-content border border-warning rounded bg-light" id="pills-tabContent">
							<div class="tab-pane fade" id="pills-Rencana" role="tabpanel" aria-labelledby="pills-Rencana-tab">
								<?php include 'RencanaPendidikan.php'; ?>
							</div>
							<div class="tab-pane fade show active" id="pills-Realisasi" role="tabpanel" aria-labelledby="pills-Realisasi-tab">
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
		<script>
			jQuery(document).ready(function($) {
				"use strict";
				var BaseURL = '<?=base_url()?>';
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

				$("#LihatRealisasi").click(function() {
					var Data = {ID: $("#OpsiKegiatan").val()}
					$.post(BaseURL+"Dashboard/LihatPendidikan", Data).done(function(Respon) {
						window.location = BaseURL + "Dashboard/Pendidikan"
					})
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
		</script>
</body>
</html>