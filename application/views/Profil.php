    <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
			<div class="card mt-2">
				<div class="card-header bg-primary">
					<b>Profil</b>
				</div>
				<div class="card-body border border-primary">
					<div class="container bg-light">
						<div class="row">
							<div class="col-sm-3 my-2 text-center">
								<?php if ($Profil['Foto'] == '') { ?>
									<img src="<?=base_url('img/Avatar.png')?>" width="200px">
								<?php	} else { ?>
									<img src="<?=base_url('img/'.$Profil['Foto'])?>" width="200px">
								<?php } ?>
								<div class="input-group mb-1">
									<input class="form-control-sm" type="hidden" id="NamaFoto" value="<?=$Profil['Foto']?>">
									<input class="form-control-sm" type="file" id="Foto" onchange="Upload()">
								</div>
								<button class="btn btn-primary text-white" data-toggle="modal" data-target="#ModalEditProfil"><i class="fa fa-edit"></i> <b>Edit Profil</b></button>
							</div>
							<div class="col-sm-4 mt-2">
								<div class="input-group input-group-sm mb-2">
									<div class="input-group-prepend">
										<span class="input-group-text bg-primary text-primary"><b>Nama</b></span>
									</div>
									<input type="text" class="form-control" value="<?=$Profil['Nama']?>" disabled>
								</div>
								<div class="input-group input-group-sm mb-2">
									<div class="input-group-prepend">
										<span class="input-group-text bg-primary text-primary"><b>NIP</b></span>
									</div>
									<input type="text" class="form-control" value="<?=$Profil['NIP']?>" disabled>
								</div>
								<div class="input-group input-group-sm mb-2">
									<div class="input-group-prepend">
										<span class="input-group-text bg-primary text-primary"><b>NIDN</b></span>
									</div>
									<input type="text" class="form-control" value="<?=$Profil['NIDN']?>" disabled>
								</div>
								<div class="input-group input-group-sm mb-2">
									<div class="input-group-prepend">
										<label class="input-group-text bg-primary text-primary"><b>Pangkat</b></label>
									</div>
									<input type="text" class="form-control" value="<?=$Profil['Pangkat']?>" disabled>
								</div>
								<div class="input-group input-group-sm mb-2">
									<div class="input-group-prepend">
										<label class="input-group-text bg-primary text-primary"><b>Golongan</b></label>
									</div>
									<input type="text" class="form-control" value="<?=$Profil['Golongan']?>" disabled>
								</div>
								<div class="input-group input-group-sm mb-2">
									<div class="input-group-prepend">
										<label class="input-group-text bg-primary text-primary"><b>Jabatan</b></label>
									</div>
									<input type="text" class="form-control" value="<?=$Profil['Jabatan']?>" disabled>
								</div>
								<div class="input-group input-group-sm mb-2">
									<div class="input-group-prepend">
										<span class="input-group-text bg-primary text-primary"><b>Kredit Lama</b></span>
									</div>
									<input type="text" class="form-control" value="<?=$Profil['KreditLama']?>" disabled>
									<div class="input-group-prepend">
										<span class="input-group-text bg-primary text-primary"><b>Tahun</b></span>
									</div>
									<input type="text" class="form-control" value="<?=$Profil['Tahun']?>" disabled>
								</div>
								<div class="input-group input-group-sm mb-2">
									<div class="input-group-prepend">
										<span class="input-group-text bg-primary text-primary"><b>Kredit Baru</b></span>
									</div>
									<input type="text" class="form-control" value="<?=str_replace('.',',',$KreditBaru)?>" disabled>
									<div class="input-group-prepend">
										<span class="input-group-text bg-primary text-primary"><b>Total Kredit</b></span>
									</div>
									<input type="text" class="form-control" value="<?=str_replace('.',',',($Profil['KreditLama']+$KreditBaru))?>" disabled>
								</div>
							</div>
							<div class="col-sm-5 mt-2">
								<div class="input-group input-group-sm mb-2">
									<div class="input-group-prepend">
										<span class="input-group-text bg-primary text-primary"><b>Nomor Whatsapp</b></span>
									</div>
									<input type="text" class="form-control" value="<?=$Profil['WA']?>" disabled>
								</div>
								<div class="input-group input-group-sm mb-2">
									<div class="input-group-prepend">
										<span class="input-group-text bg-primary text-primary"><b>S2</b></span>
									</div>
									<input type="text" class="form-control" value="<?=$Profil['S2']?>" disabled>
								</div>
								<div class="input-group input-group-sm mb-2">
									<div class="input-group-prepend">
										<span class="input-group-text bg-primary text-primary"><b>S3</b></span>
									</div>
									<input type="text" class="form-control" value="<?=$Profil['S3']?>" disabled>
								</div>
								<div class="input-group input-group-sm mb-2">
									<div class="input-group-prepend">
										<span class="input-group-text bg-primary text-primary"><b>Bidang Keahlian</b></span>
									</div>
									<input type="text" class="form-control" value="<?=$Profil['BidangKeahlian']?>" disabled>
								</div>
								<div class="input-group input-group-sm mb-2">
									<div class="input-group-prepend">
										<label class="input-group-text bg-primary text-primary"><b>Kesesuaian Kompetensi</b></label>
									</div>
									<input type="text" class="form-control" value="<?= $Profil['KesesuaianKompetensi'] == 1 ? 'Sesuai' : 'Tidak Sesuai'?>" disabled>
								</div>
								<div class="input-group input-group-sm mb-2">
									<div class="input-group-prepend">
										<label class="input-group-text bg-primary text-primary"><b>Kesesuaian Mata Kuliah</b></label>
									</div>
									<input type="text" class="form-control" value="<?= $Profil['KesesuaianBidang'] == 1 ? 'Sesuai' : 'Tidak Sesuai'?>" disabled>
								</div>
								<div class="input-group input-group-sm mb-2">
									<div class="input-group-prepend">
										<label class="input-group-text bg-primary text-primary"><b>Sertifikat Pendidik</b></label>
									</div>
									<input type="text" class="form-control" value="<?=$Profil['SertifikatPendidik']?>" disabled>
								</div>
								<div class="input-group input-group-sm mb-2">
									<div class="input-group-prepend">
										<span class="input-group-text bg-primary text-primary"><b>Sertifikat Kompetensi</b></span>
									</div>
									<input type="text" class="form-control" value="<?=$Profil['SertifikatKompetensi']?>" disabled>
								</div>
							</div>
							<!-- <div class="col-sm-auto my-2">
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
										<td><b>Pangkat</b></td>
										<td><b>: <?=$Profil['Pangkat']?></b></td>
									</tr>
									<tr>
										<td><b>Golongan</b></td>
										<td><b>: <?=$Profil['Golongan']?></b></td>
									</tr>
									<tr>
										<td><b>Jabatan</b></td>
										<td><b>: <?=$Profil['Jabatan']?></b></td>
									</tr>
									<tr>
										<td><b>Kredit Lama</b></td>
										<td><b>: <?=str_replace('.',',',$Profil['KreditLama'])?>&nbsp;<sub>Tahun <?=$Profil['Tahun']?></sub></b></td>
									</tr>
									<tr>
										<td><b>Kredit Baru</b></td>
										<td><b>: <?=str_replace('.',',',$KreditBaru)?></b></td>
									</tr>
									<tr>
										<td><b>Total Kredit</b></td>
										<td><b>: <?=str_replace('.',',',($Profil['KreditLama']+$KreditBaru))?></b></td>
									</tr>
									<tr>
										<td><b>Whatsapp</b></td>
										<td><b>: <?=$Profil['WA']?></b></td>
									</tr>
								</table>
							</div> -->
						</div>
					</div>
				</div>
			</div>
    </section>
    </div>
		</div>
		<div class="modal fade" id="ModalEditProfil">
			<div class="modal-dialog modal-lg">
				<div class="modal-content bg-warning">
					<div class="modal-body">
						<div class="container">
							<div class="row">
								<div class="col-sm-4">
									<div class="input-group mb-1">
										<div class="input-group-prepend">
											<label class="input-group-text bg-primary"><b>Nama</b></label>
										</div>
										<input type="text" id="Nama" class="form-control" value="<?=$Profil['Nama']?>">
									</div>
									<div class="input-group mb-1">
										<div class="input-group-prepend">
											<label class="input-group-text bg-primary"><b>NIP</b></label>
										</div>
										<input type="text" id="NIP" class="form-control" value="<?=$Profil['NIP']?>" data-inputmask='"mask": "999999999999999999"' data-mask>
									</div>
									<div class="input-group mb-1">
										<div class="input-group-prepend">
											<label class="input-group-text bg-primary"><b>NIDN</b></label>
										</div>
										<input type="text" id="NIDN" class="form-control" value="<?=$Profil['NIDN']?>" data-inputmask='"mask": "9999999999"' data-mask>
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
											<label class="input-group-text bg-primary"><b>Tahun Kredit Lama</b></label>
										</div>
										<input type="text" id="TahunKreditLama" class="form-control" value="<?=$Profil['Tahun']?>" data-inputmask='"mask": "9999"' data-mask>
									</div>
									<div class="input-group mb-1">
										<div class="input-group-prepend">
											<label class="input-group-text bg-primary"><b>Kredit Lama</b></label>
										</div>
										<input type="text" id="KreditLama" class="form-control" value="<?=$Profil['KreditLama']?>">
									</div>
									<div class="input-group mb-1">
										<div class="input-group-prepend">
											<label class="input-group-text bg-primary"><b>Ganti Password</b></label>
										</div>
										<input type="text" id="GantiPassword" class="form-control">
									</div>
								</div>
								<div class="col-sm-8">
									<div class="input-group mb-1">
										<div class="input-group-prepend">
											<label class="input-group-text bg-primary"><b>S2</b></label>
										</div>
										<input type="text" id="S2" class="form-control" value="<?=$Profil['Nama']?>">
									</div>
									<div class="input-group mb-1">
										<div class="input-group-prepend">
											<label class="input-group-text bg-primary"><b>S3</b></label>
										</div>
										<input type="text" id="S3" class="form-control" value="<?=$Profil['NIDN']?>" data-inputmask='"mask": "9999999999"' data-mask>
									</div>
									<div class="input-group mb-1">
										<div class="input-group-prepend">
											<label class="input-group-text bg-primary"><b>NIP</b></label>
										</div>
										<input type="text" id="NIP" class="form-control" value="<?=$Profil['NIP']?>" data-inputmask='"mask": "999999999999999999"' data-mask>
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
											<label class="input-group-text bg-primary"><b>Tahun Kredit Lama</b></label>
										</div>
										<input type="text" id="TahunKreditLama" class="form-control" value="<?=$Profil['Tahun']?>" data-inputmask='"mask": "9999"' data-mask>
									</div>
									<div class="input-group mb-1">
										<div class="input-group-prepend">
											<label class="input-group-text bg-primary"><b>Kredit Lama</b></label>
										</div>
										<input type="text" id="KreditLama" class="form-control" value="<?=$Profil['KreditLama']?>">
									</div>
									<div class="input-group mb-1">
										<div class="input-group-prepend">
											<label class="input-group-text bg-primary"><b>Ganti Password</b></label>
										</div>
										<input type="text" id="GantiPassword" class="form-control">
									</div>
								</div>
							</div>
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
						$.post(BaseURL+"Dashboard"+"/Lampiran/"+$('#Homebase').val()+'/'+$('#Semester').val()+'/'+(isNaN(parseInt(Pisah[0]))? 0 : parseInt(Pisah[0]))+'-'+(isNaN(parseInt(Pisah[0]))? 0 : parseInt(Pisah[1]))+'/'+PAK[i-1]).done(function(Respon) {
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

				$("#bkd").click(function() {
					var Tahun = $('#Tahun').val()
					var Pisah = Tahun.split('-')
					window.location = BaseURL + 'Dashboard/BKD/'+$('#Homebase').val()+'/'+$('#Semester').val()+'/'+(isNaN(parseInt(Pisah[0]))? 0 : parseInt(Pisah[0]))+'-'+(isNaN(parseInt(Pisah[0]))? 0 : parseInt(Pisah[1]))
					var PAK = ['Pendidikan','Penelitian','Pengabdian','Penunjang']
					for (let i = 1; i < 5; i++) {
						$.post(BaseURL+"Dashboard"+"/LampiranBKD/"+$('#Homebase').val()+'/'+$('#Semester').val()+'/'+(isNaN(parseInt(Pisah[0]))? 0 : parseInt(Pisah[0]))+'-'+(isNaN(parseInt(Pisah[0]))? 0 : parseInt(Pisah[1]))+'/'+PAK[i-1]).done(function(Respon) {
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
 
				$("#EditProfil").click(function() {
					if ($("#NIP").val().length != 18 || isNaN($("#NIP").val())) {
            alert('Mohon Isi NIP 18 Angka!')
          } else if ($("#NIDN").val().length != 10 || isNaN($("#NIDN").val())) {
            alert('Mohon Isi NIDN 10 Angka!')
          } else if ($("#Nama").val() === "") {
            alert('Mohon Isi Nama + Gelar!')
          } else if (isNaN(parseFloat($("#KreditLama").val().replace(',','.')))) {
						alert('Kredit Lama Belum Benar!')
					} else if ($("#GantiPassword").val() != "" && $("#GantiPassword").val().length < 8) {
            alert('Password Minimal 8 Karakter!')
          } else {  
						var Pangkat = $("#Golongan").val().split("/") 
						var Data = {NIP: $("#NIP").val(),
												NIDN: $("#NIDN").val(),
												Nama: $("#Nama").val(),
												Pangkat: Pangkat[0],
												Golongan: Pangkat[1],
												Jabatan: $("#Jabatan").val(),
												Tahun: $("#TahunKreditLama").val(),
												KreditLama: $("#KreditLama").val(),
												GantiPassword: $("#GantiPassword").val()}
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