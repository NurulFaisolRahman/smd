    <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
					<div class="col-sm-12 mt-2">
						<ul class="nav nav-pills mb-2 border border-warning rounded bg-light" id="pills-tab" role="tablist">
							<li class="nav-item">
									<a class="nav-link active" id="pills-profil-tab" data-toggle="pill" href="#pills-profil" role="tab" aria-controls="pills-profil" aria-selected="true"><b>Profil</b></a>
							</li>
						</ul>
						<div class="tab-content border border-warning rounded bg-light" id="pills-tabContent">
							<div class="tab-pane fade show active" id="pills-profil" role="tabpanel" aria-labelledby="pills-profil-tab">
								<div class="container-fluid">
									<div class="row align-items-center">
										<div class="col-sm-auto my-1 text-center">
											<?php if ($Profil['Foto'] == '') { ?>
												<img src="<?=base_url('img/Avatar.png')?>" width="200px">
											<?php	} else { ?>
												<img src="<?=base_url('img/'.$Profil['Foto'])?>" width="200px">
											<?php } ?>
											<div class="input-group mb-1">
												<input class="form-control-sm" type="hidden" id="NamaFoto" value="<?=$Profil['Foto']?>">
												<input class="form-control-sm" type="file" id="Foto" onchange="Upload()">
											</div>
										</div>
										<div class="col-sm-auto my-2 ">
											<table class="table-responsive">
												<tr>
													<td><b>Nama</b></td>
													<td><b>: <?=$Profil['Nama']?></b></td>
												</tr>
												<tr>
													<td><b>NIDN</b></td>
													<td><b>: <?=$Profil['NIDN']?></b></td>
												</tr>
												<tr>
													<td><b>NIP</b></td>
													<td><b>: <?=$Profil['NIP']?></b></td>
												</tr>
												<tr>
													<td><b>Pangkat / Gol</b></td>
													<td><b>: <?=$Profil['Pangkat'].' / '.$Profil['Golongan']?></b></td>
												</tr>
												<tr>
													<td><b>Jabatan</b></td>
													<td><b>: <?=$Profil['Jabatan']?></b></td>
												</tr>
												<tr>
													<td><b>Kredit</b></td>
													<td><b>: <?=$Profil['Kredit']?></b></td>
												</tr>
											</table>
											<button class="btn btn-primary text-white" data-toggle="modal" data-target="#ModalEditProfil"><i class="fa fa-edit"></i> <b>Edit Profil</b></button>
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
		<div class="modal fade" id="ModalEditProfil">
			<div class="modal-dialog">
				<div class="modal-content bg-warning">
					<div class="modal-body">
						<div class="input-group mb-1">
							<div class="input-group-prepend">
								<label class="input-group-text bg-primary"><b>Nama</b></label>
							</div>
							<input type="text" id="Nama" class="form-control form-control" value="<?=$Profil['Nama']?>">
						</div>
						<div class="input-group mb-1">
							<div class="input-group-prepend">
								<label class="input-group-text bg-primary"><b>NIDN</b></label>
							</div>
							<input type="text" id="NIDN" class="form-control form-control" value="<?=$Profil['NIDN']?>">
						</div>
						<div class="input-group mb-1">
							<div class="input-group-prepend">
								<label class="input-group-text bg-primary"><b>NIP</b></label>
							</div>
							<input type="text" id="NIP" class="form-control form-control" value="<?=$Profil['NIP']?>">
						</div>
						<div class="input-group mb-1">
							<div class="input-group-prepend">
								<label class="input-group-text bg-primary"><b>Golongan</b></label>
							</div>
							<select class="custom-select" id="Golongan">
								<option value="Penata Muda/IIIa" <?php if ($Profil['Golongan'] == 'IIIa') {
									echo 'selected';
								}?>>IIIa</option>
								<option value="Penata Muda Tk. I/IIIb" <?php if ($Profil['Golongan'] == 'IIIb') {
									echo 'selected';
								}?>>IIIb</option>
								<option value="Penata/IIIc" <?php if ($Profil['Golongan'] == 'IIIc') {
									echo 'selected';
								}?>>IIIc</option>
								<option value="Penata Tk. I/IIId" <?php if ($Profil['Golongan'] == 'IIId') {
									echo 'selected';
								}?>>IIId</option>
								<option value="Pembina/IVa" <?php if ($Profil['Golongan'] == 'IVa') {
									echo 'selected';
								}?>>IVa</option>
								<option value="Pembina Tk. I/IVb" <?php if ($Profil['Golongan'] == 'IVb') {
									echo 'selected';
								}?>>IVb</option>
								<option value="Pembina Utama Muda/IVc" <?php if ($Profil['Golongan'] == 'IVc') {
									echo 'selected';
								}?>>IVc</option>
								<option value="Pembina Utama Madya/IVd" <?php if ($Profil['Golongan'] == 'IVd') {
									echo 'selected';
								}?>>IVd</option>
								<option value="Pembina Utama/IVe" <?php if ($Profil['Golongan'] == 'IVe') {
									echo 'selected';
								}?>>IVe</option>
							</select>
						</div>
						<div class="input-group mb-1">
							<div class="input-group-prepend">
								<label class="input-group-text bg-primary"><b>Jabatan</b></label>
							</div>
							<select class="custom-select" id="Jabatan">
								<option value="Asisten Ahli" <?php if ($Profil['Jabatan'] == 'Asisten Ahli') {
									echo 'selected';
								}?>>Asisten Ahli</option>
								<option value="Lektor" <?php if ($Profil['Jabatan'] == 'Lektor') {
									echo 'selected';
								}?>>Lektor</option>
								<option value="Lektor Kepala" <?php if ($Profil['Jabatan'] == 'Lektor Kepala') {
									echo 'selected';
								}?>>Lektor Kepala</option>
								<option value="Profesor" <?php if ($Profil['Jabatan'] == 'Profesor') {
									echo 'selected';
								}?>>Profesor</option>
							</select>
						</div>
						<div class="input-group mb-1">
							<div class="input-group-prepend">
								<label class="input-group-text bg-primary"><b>Kredit</b></label>
							</div>
							<input type="text" id="Kredit" class="form-control form-control" value="<?=$Profil['Kredit']?>">
						</div>
					</div>
					<div class="modal-footer justify-content-between">
						<button type="button" class="btn btn-danger" data-dismiss="modal"><b>Tutup</b></button>
						<button type="submit" class="btn btn-success" id="EditProfil"><b>Simpan</b></button>
					</div>
				</div>
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
									$('#LampiranPAK').attr('Download','Lampiran '+i+'.'+NomorLampiran)
									$('#LampiranPAK')[0].click()
								}
								NomorLampiran++;
							})
						}) 	
					}
				})

				$("#EditProfil").click(function() {
					if ($("#NIP").val().length != 18 || isNaN($("#NIP").val())) {
            alert('Mohon Isi NIP 18 Angka!')
          } else if ($("#NIDN").val().length != 10 || isNaN($("#NIDN").val())) {
            alert('Mohon Isi NIDN 10 Angka!')
          } else if ($("#Nama").val() === "") {
            alert('Mohon Isi Nama + Gelar!')
          } else if (isNaN(parseFloat($("#Kredit").val().replace(',','.')))) {
						alert('Input Kredit Belum Benar!')
					} else {
						var Pangkat = $("#Golongan").val().split("/") 
						var Data = {NIP: $("#NIP").val(),
												NIDN: $("#NIDN").val(),
												Nama: $("#Nama").val(),
												Pangkat: Pangkat[0],
												Golongan: Pangkat[1],
												Jabatan: $("#Jabatan").val(),
												Kredit: parseFloat($("#Kredit").val().replace(',','.')) }
						$.post(BaseURL+"Dashboard/EditProfil", Data).done(function(Respon) {
							if (Respon == '1') {
								window.location = BaseURL + "Dashboard/Profil"
							}
							else {
								alert(Respon)
							}
						})
          }
        })
			})

			function Upload() {
				var BaseURL = '<?=base_url()?>';
				var fd = new FormData()
				fd.append("file", $('#Foto')[0].files[0])
				fd.append("NamaFoto", $('#NamaFoto').val())
				$.ajax({
					url: BaseURL+'Dashboard/Foto',
					type: 'post',
					data: fd,
					contentType: false,
					processData: false,
					success: function(Respon){
						if (Respon == '1') {
							window.location = BaseURL + "Dashboard/Profil"
						}
						else {
							alert(Respon)
						}
					}
				})
			}
		</script>
</body>
</html>