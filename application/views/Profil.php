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
                    <li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false"><b>Edit Profil</b></a>
                    </li>
                </ul>
                <div class="tab-content border border-warning rounded bg-light" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-profil" role="tabpanel" aria-labelledby="pills-profil-tab">
										<div class="container-fluid">
											<div class="row align-items-center">
												<div class="col-sm-auto my-1 text-center">
													<img src="<?=base_url('img/Sutikno.png')?>" width="200px">
												</div>
												<div class="col-sm-auto my-2 ">
													<table class="table-responsive">
														<tr>
															<td><b>NIP</b></td>
															<td><b>: <?=$Profil['NIP']?></b></td>
														</tr>
														<tr>
															<td><b>Nama</b></td>
															<td><b>: <?=$Profil['Nama']?></b></td>
														</tr>
														<tr>
															<td><b>Pangkat</b></td>
															<td><b>: <?=$Profil['Jabatan'].' / '.$Profil['Pangkat'].' / '.$Profil['Golongan']?></b></td>
														</tr>
													</table>
												</div>
											</div>
										</div>
										</div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
										<div class="container-fluid">
											<div class="row align-items-center">
												<div class="col-sm-auto my-1 text-center">
													<img src="<?=base_url('img/Sutikno.png')?>" width="200px">
												</div>
												<div class="col-sm-auto my-2 ">
													<table class="table-responsive">
														<tr>
															<td><b>NIP</b></td>
															<td><input type="text" id="EditNIP" class="form-control form-control-sm" value="<?=$Profil['NIP']?>"></td>
														</tr>
														<tr>
															<td><b>Nama</b></td>
															<td><input type="text" id="EditNama" class="form-control form-control-sm" value="<?=$Profil['Nama']?>"></td>
														</tr>
														<tr>
															<td><b>Pangkat</b></td>
															<?php 
																$Jenis = explode("/",$Profil['Pangkat']);
															?>
															<td>
																<select class="custom-select" id="EditPangkat">
																	<option value="Asisten Ahli/Penata Muda/IIIa" <?php if ($Profil['Golongan'] == 'IIIa') { echo 'selected';} ?>>IIIa</option>
																	<option value="Asisten Ahli/Penata Muda Tk. I/IIIb" <?php if ($Profil['Golongan'] == 'IIIb') { echo 'selected';} ?>>IIIb</option>
																	<option value="Lektor/Penata/IIIc" <?php if ($Profil['Golongan'] == 'IIIc') { echo 'selected';} ?>>IIIc</option>
																	<option value="Lektor/Penata Tk. I/IIId" <?php if ($Profil['Golongan'] == 'IIId') { echo 'selected';} ?>>IIId</option>
																	<option value="Lektor Kepala/Pembina/IVa" <?php if ($Profil['Golongan'] == 'IVa') { echo 'selected';} ?>>IVa</option>
																	<option value="Lektor Kepala/Pembina Tk. I/IVb" <?php if ($Profil['Golongan'] == 'IVb') { echo 'selected';} ?>>IVb</option>
																	<option value="Lektor Kepala/Pembina Utama Muda/IVc" <?php if ($Profil['Golongan'] == 'IVc') { echo 'selected';} ?>>IVc</option>
																	<option value="Profesor/Pembina Utama Madya/IVd" <?php if ($Profil['Golongan'] == 'IVd') { echo 'selected';} ?>>IVd</option>
																	<option value="Profesor/Pembina Utama/IVe" <?php if ($Profil['Golongan'] == 'IVe') { echo 'selected';} ?>>IVe</option>
																</select>
															</td>
														</tr>
														<tr>
															<td><button type="button" id="EditProfil" class="btn btn-success"><b>SIMPAN</b></button></td>
														</tr>
													</table>
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
    <script src="<?=base_url('bootstrap/js/jquery.min.js')?>"></script>
    <script src="<?=base_url('bootstrap/js/popper.min.js')?>" ></script>
    <script src="<?=base_url('bootstrap/js/bootstrap.min.js')?>"></script>
    <script src="<?=base_url('bootstrap/js/adminlte.min.js')?>"></script>
		<script>
			jQuery(document).ready(function($) {
				"use strict";
				var BaseURL = '<?=base_url()?>';
				$("#EditProfil").click(function() {
					var Data = { NIP: $("#EditNIP").val(),
											 Nama: $("#EditNama").val(),
											 Pangkat: $("#EditPangkat").val() }
					$.post(BaseURL+"Dashboard/EditProfil", Data).done(function(Respon) {
						if (Respon == '1') {
							window.location = BaseURL + "Dashboard/Profil"
						}
						else {
							alert('Gagal Menyimpan!')
						}
					})
          return false
        })
			})
		</script>
</body>
</html>