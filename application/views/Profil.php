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
								<button class="btn btn-success text-white mb-1" data-toggle="modal" data-target="#ModalEditPassword"><i class="fa fa-edit"></i> <b>Ganti Password</b></button>
								<button class="btn btn-primary text-white" data-toggle="modal" data-target="#ModalEditProfil"><i class="fa fa-edit"></i> <b>Edit Profil</b></button>
							</div>
							<div class="col-sm-9 mt-2">
								<div class="row">
									<div class="col-sm-4 mt-2">
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
												<label class="input-group-text bg-primary text-primary"><b>Jabatan</b></label>
											</div>
											<input type="text" class="form-control" value="<?=$Profil['Jabatan']?>" disabled>
										</div>
										<div class="input-group input-group-sm mb-2">
											<div class="input-group-prepend">
												<span class="input-group-text bg-primary text-primary"><b>Nomor Whatsapp</b></span>
											</div>
											<input type="text" class="form-control" value="<?=$Profil['WA']?>" disabled>
										</div>
									</div>
									<div class="col-sm-8 mt-2">
										<div class="input-group input-group-sm mb-2">
											<div class="input-group-prepend">
												<span class="input-group-text bg-primary text-primary"><b>Nama</b></span>
											</div>
											<input type="text" class="form-control" value="<?=$Profil['Nama']?>" disabled>
										</div>
										<div class="input-group input-group-sm mb-2">
											<div class="input-group-prepend">
												<label class="input-group-text bg-primary text-primary"><b>Pangkat</b></label>
											</div>
											<input type="text" class="form-control" value="<?=$Profil['Pangkat']?>" disabled>
											<div class="input-group-prepend">
												<label class="input-group-text bg-primary text-primary"><b>Golongan</b></label>
											</div>
											<input type="text" class="form-control" value="<?=$Profil['Golongan']?>" disabled>
										</div>
										<div class="input-group input-group-sm mb-2">
											<div class="input-group-prepend">
												<span class="input-group-text bg-primary text-primary"><b>Kredit Yang Divalidasi Asesor</b></span>
											</div>
											<input type="text" class="form-control" value="<?=$Profil['KreditLama']?>" disabled>
											<div class="input-group-prepend">
												<span class="input-group-text bg-primary text-primary"><b>Tahun</b></span>
											</div>
											<input type="text" class="form-control" value="<?=$Profil['Tahun']?>" disabled>
										</div>
										<div class="input-group input-group-sm mb-2">
											<div class="input-group-prepend">
												<span class="input-group-text bg-primary text-primary"><b>Kredit Yang Belum Divalidasi Asesor</b></span>
											</div>
											<input type="text" class="form-control" value="<?=str_replace('.',',',$KreditBaru)?>" disabled>
											<div class="input-group-prepend">
												<span class="input-group-text bg-primary text-primary"><b>Total Kredit</b></span>
											</div>
											<input type="text" class="form-control" value="<?=str_replace('.',',',($Profil['KreditLama']+$KreditBaru))?>" disabled>
										</div>
									</div>
									<div class="col-sm-12">
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
												<label class="input-group-text bg-primary text-primary"><b>Kesesuaian Bidang Keahlian dengan Kompetensi Inti Program Studi</b></label>
											</div>
											<input type="text" class="form-control" value="<?= $Profil['KesesuaianKompetensi'] == null ? '' : ($Profil['KesesuaianKompetensi'] == 1 ? 'Sesuai' : 'Tidak Sesuai');?>" disabled>
										</div>
										<div class="input-group input-group-sm mb-2">
											<div class="input-group-prepend">
												<label class="input-group-text bg-primary text-primary"><b>Kesesuaian Bidang Keahlian dengan Mata Kuliah yang Diampu</b></label>
											</div>
											<input type="text" class="form-control" value="<?= $Profil['KesesuaianBidang'] == null ? '' : ($Profil['KesesuaianBidang'] == 1 ? 'Sesuai' : 'Tidak Sesuai');?>" disabled>
										</div>
										<div class="input-group input-group-sm mb-2">
											<div class="input-group-prepend">
												<label class="input-group-text bg-primary text-primary"><b>Sertifikat Pendidik Profesional</b></label>
											</div>
											<input type="text" class="form-control" value="<?=$Profil['SertifikatPendidik']?>" disabled>
										</div>
										<div class="input-group input-group-sm mb-2">
											<div class="input-group-prepend">
												<span class="input-group-text bg-primary text-primary"><b>Sertifikat Kompetensi/Profesi/Industri</b></span>
											</div>
											<input type="text" class="form-control" value="<?=$Profil['SertifikatKompetensi']?>" disabled>
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
		<div class="modal fade" id="ModalEditPassword">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-warning">
          <div class="modal-body">
						<div class="input-group input-group-sm mb-2">
							<div class="input-group-prepend">
								<span class="input-group-text bg-primary text-primary"><b>Password Baru</b></span>
							</div>
							<input type="password" class="form-control" id="EditPassword">
						</div>
					</div>
					<div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-danger" data-dismiss="modal"><b>Tutup</b></button>
            <button type="submit" class="btn btn-success" id="GantiPassword"><b>Simpan</b></button>
          </div>
				</div>
			</div>
		</div>
		<div class="modal fade" id="ModalEditProfil">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content bg-warning">
          <div class="modal-body">
            <div class="container">
							<div class="row">
								<div class="col-sm-5">
                  <div class="input-group input-group-sm mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-primary text-primary"><b>Nama</b></span>
                    </div>
                    <input type="text" class="form-control" id="Nama" value="<?=$Profil['Nama']?>" placeholder="Input Nama + Gelar">
                  </div>
                  <div class="input-group input-group-sm mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-primary text-primary"><b>NIP</b></span>
                    </div>
                    <input type="text" class="form-control" id="NIP" value="<?=$Profil['NIP']?>" data-inputmask='"mask": "999999999999999999"' data-mask>
                  </div>
                  <div class="input-group input-group-sm mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-primary text-primary"><b>NIDN</b></span>
                    </div>
                    <input type="text" class="form-control" id="NIDN" value="<?=$Profil['NIDN']?>" data-inputmask='"mask": "9999999999"' data-mask>
                  </div>
                  <div class="input-group input-group-sm mb-2">
                    <div class="input-group-prepend">
                      <label class="input-group-text bg-primary text-primary"><b>Golongan</b></label>
                    </div>
                    <select class="custom-select" id="Golongan">
                      <option value="Penata Muda/IIIa" <?=$Profil['Golongan']=='IIIa'?'selected':''?>>IIIa</option>
                      <option value="Penata Muda Tk. I/IIIb" <?=$Profil['Golongan']=='IIIb'?'selected':''?>>IIIb</option>
                      <option value="Penata/IIIc" <?=$Profil['Golongan']=='IIIc'?'selected':''?>>IIIc</option>
                      <option value="Penata Tk. I/IIId" <?=$Profil['Golongan']=='IIId'?'selected':''?>>IIId</option>
                      <option value="Pembina/IVa" <?=$Profil['Golongan']=='IVa'?'selected':''?>>IVa</option>
                      <option value="Pembina Tk. I/IVb" <?=$Profil['Golongan']=='IVb'?'selected':''?>>IVb</option>
                      <option value="Pembina Utama Muda/IVc" <?=$Profil['Golongan']=='IVc'?'selected':''?>>IVc</option>
                      <option value="Pembina Utama Madya/IVd" <?=$Profil['Golongan']=='IVd'?'selected':''?>>IVd</option>
                      <option value="Pembina Utama/IVe" <?=$Profil['Golongan']=='IVe'?'selected':''?>>IVe</option>
                    </select>
									</div>
									<div class="input-group input-group-sm mb-2">
                    <div class="input-group-prepend">
                      <label class="input-group-text bg-primary text-primary"><b>Jabatan</b></label>
                    </div>
                    <select class="custom-select" id="Jabatan">
                      <option value="Asisten Ahli" <?=$Profil['Jabatan']=='Asisten Ahli'?'selected':''?>>Asisten Ahli</option>
                      <option value="Lektor" <?=$Profil['Jabatan']=='Lektor'?'selected':''?>>Lektor</option>
                      <option value="Lektor Kepala" <?=$Profil['Jabatan']=='Lektor Kepala'?'selected':''?>>Lektor Kepala</option>
                      <option value="Profesor" <?=$Profil['Jabatan']=='Profesor'?'selected':''?>>Profesor</option>
                    </select>
                  </div>
                </div>
                <div class="col-sm-7">
                  <div class="input-group input-group-sm mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-primary text-primary"><b>S2</b></span>
                    </div>
                    <input type="text" class="form-control" id="S2" value="<?=$Profil['S2']?>" placeholder="Input Jurusan + Universitas">
                  </div>
                  <div class="input-group input-group-sm mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-primary text-primary"><b>S3</b></span>
                    </div>
                    <input type="text" class="form-control" id="S3" value="<?=$Profil['S3']?>" placeholder="Input Jurusan + Universitas">
                  </div>
                  <div class="input-group input-group-sm mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-primary text-primary"><b>Bidang Keahlian</b></span>
                    </div>
                    <input type="text" class="form-control" id="BidangKeahlian" value="<?=$Profil['BidangKeahlian']?>">
                  </div>
                  <div class="input-group input-group-sm mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-primary text-primary"><b>Nomor Whatsapp</b></span>
                    </div>
                    <input type="text" class="form-control" id="WA" value="<?=$Profil['WA']?>">
                  </div>
									<div class="input-group input-group-sm mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-primary text-primary"><b>Kredit Yang Divalidasi Asesor</b></span>
                    </div>
                    <input type="text" class="form-control" id="KreditLama" value="<?=$Profil['KreditLama']?>">
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-primary text-primary"><b>Tahun</b></span>
                    </div>
                    <input type="text" class="form-control" id="TahunKreditLama" value="<?=$Profil['Tahun']?>" data-inputmask='"mask": "9999"' data-mask value="20">
                  </div>
                </div>
                <div class="col-sm-12">
									<div class="input-group input-group-sm mb-2">
                    <div class="input-group-prepend">
                      <label class="input-group-text bg-primary text-primary"><b>Kesesuaian Bidang Keahlian Dengan Kompetensi Inti Program Studi</b></label>
                    </div>
                    <select class="custom-select" id="KesesuaianKompetensi">
                      <option value="1" <?=$Profil['KesesuaianKompetensi']==1?'selected':''?>>Sesuai</option>
                      <option value="2" <?=$Profil['KesesuaianKompetensi']==2?'selected':''?>>Tidak Sesuai</option>
                    </select>
                  </div>
                  <div class="input-group input-group-sm mb-2">
                    <div class="input-group-prepend">
                      <label class="input-group-text bg-primary text-primary"><b>Kesesuaian Bidang Keahlian Dengan Mata Kuliah Yang Diampu</b></label>
                    </div>
                    <select class="custom-select" id="KesesuaianBidang">
											<option value="1" <?=$Profil['KesesuaianBidang']==1?'selected':''?>>Sesuai</option>
                      <option value="2" <?=$Profil['KesesuaianBidang']==2?'selected':''?>>Tidak Sesuai</option>
                    </select>
									</div>
									<div class="input-group input-group-sm mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-primary text-primary"><b>Sertifikat Pendidik Profesional</b></span> 
                    </div>
                    <input type="text" class="form-control" id="SertifikatPendidik" value="<?=$Profil['SertifikatPendidik']?>" placeholder="Input Nomor Sertifikat">
                  </div>
                  <div class="input-group input-group-sm mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-primary text-primary"><b>Sertifikat Kompetensi/Profesi/Industri</b></span>
                    </div>
                    <input type="text" class="form-control" id="SertifikatKompetensi" value="<?=$Profil['SertifikatKompetensi']?>" placeholder="Input Bidang Sertifikasi & Lembaga Penerbit">
									</div>
									<div class="input-group input-group-sm mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text bg-primary"><b>Upload Bukti Sertifikat</b></span>
										</div>
										<input class="form-control" type="hidden" id="SertifikatLama" value="<?=$Profil['Sertifikat']?>">
										<input class="form-control" type="file" id="Sertifikat">
										<div class="input-group-prepend">
											<button class="input-group-text bg-primary" id="CancelSertifikat"><b>X</b></button>
										</div>
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
					// var PAK = ['Pendidikan','Penelitian','Pengabdian','Penunjang']
					// for (let i = 1; i < 5; i++) {
					// 	$.post(BaseURL+"Dashboard"+"/Lampiran/"+$('#Homebase').val()+'/'+$('#Semester').val()+'/'+(isNaN(parseInt(Pisah[0]))? 0 : parseInt(Pisah[0]))+'-'+(isNaN(parseInt(Pisah[0]))? 0 : parseInt(Pisah[1]))+'/'+PAK[i-1]).done(function(Respon) {
					// 		var array = JSON.parse(Respon)
					// 		var NomorLampiran = 1
					// 		array.forEach(function(object) {
					// 			if (object.Bukti != null) {
					// 				$('#LampiranPAK').attr('href',BaseURL+PAK[i-1]+'/'+object.Bukti)		
					// 				$('#LampiranPAK').attr('Download','Lampiran '+i+'.'+NomorLampiran+'.pdf') 
					// 				$('#LampiranPAK')[0].click()
					// 			}
					// 			NomorLampiran++;
					// 		})
					// 	}) 	
					// }
				}) 

				$("#CancelSertifikat").click(function() {
					$("#Sertifikat").val("")
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

				$("#GantiPassword").click(function() {
					if ($("#EditPassword").val() == "") {
						alert('Password Baru Tidak Boleh Kosong!')
					} else {
						var Data = { Password: $("#EditPassword").val() }
						$.post(BaseURL+"Dashboard/GantiPassword", Data).done(function(Respon) {
							if (Respon == '1') {
								alert('Password Berhasil Diganti')
								window.location = BaseURL + "Dashboard/Profil"
							}
							else {
								alert(Respon)
							}
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
					} else {  
						var Pangkat = $("#Golongan").val().split("/") 
						var fd = new FormData()
						fd.append('NIP',$("#NIP").val())
						fd.append('NIDN',$("#NIDN").val())
						fd.append('Nama',$("#Nama").val())
						fd.append('Pangkat',Pangkat[0])
						fd.append('Golongan',Pangkat[1])
						fd.append('Jabatan',$("#Jabatan").val())
						fd.append('Tahun',$("#TahunKreditLama").val())
						fd.append('KreditLama',$("#KreditLama").val())
						fd.append('WA',$("#WA").val())
						fd.append('S2',$("#S2").val())
						fd.append('S3',$("#S3").val())
						fd.append('BidangKeahlian',$("#BidangKeahlian").val())
						fd.append('KesesuaianKompetensi',$("#KesesuaianKompetensi").val())
						fd.append('KesesuaianBidang',$("#KesesuaianBidang").val())
						fd.append('SertifikatPendidik',$("#SertifikatPendidik").val())
						fd.append('SertifikatKompetensi',$("#SertifikatKompetensi").val())
						fd.append("SertifikatLama", $('#SertifikatLama').val())
						fd.append("Sertifikat", $('#Sertifikat')[0].files[0])
						$.ajax({
							url: BaseURL+'Dashboard/EditProfil',
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