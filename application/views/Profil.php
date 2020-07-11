    <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 mt-2">
                <ul class="nav nav-pills mb-2 border border-warning rounded bg-light" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true"><b>Profil</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false"><b>Edit Profil</b></a>
                    </li>
                </ul>
                <div class="tab-content border border-warning rounded bg-light" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
										<div class="container-fluid">
											<div class="row align-items-center">
												<div class="col-sm-auto my-1 text-center">
													<img src="img/Sutikno.png" width="200px">
												</div>
												<div class="col-sm-auto my-2 ">
													<table class="table-responsive">
														<tr>
															<td><b>NIP</b></td>
															<td><b>: <?=$Dosen['NIP']?></b></td>
														</tr>
														<tr>
															<td><b>Nama</b></td>
															<td><b>: <?=$Dosen['Nama']?></b></td>
														</tr>
														<tr>
															<td><b>Pangkat</b></td>
															<td><b>: <?=$Dosen['Pangkat']?></b></td>
														</tr>
														<tr>
															<td><b>Email</b></td>
															<td><b>: <?=$Dosen['Email']?></b></td>
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
													<img src="img/Sutikno.png" width="200px">
												</div>
												<div class="col-sm-auto my-2 ">
													<table class="table-responsive">
														<tr>
															<td><b>NIP</b></td>
															<td><input type="text" id="EditNIP" class="form-control form-control-sm" value="<?=$Dosen['NIP']?>"></td>
														</tr>
														<tr>
															<td><b>Nama</b></td>
															<td><input type="text" id="EditNama" class="form-control form-control-sm" value="<?=$Dosen['Nama']?>"></td>
														</tr>
														<tr>
															<td><b>Pangkat</b></td>
															<td><input type="text" id="EditPangkat" class="form-control form-control-sm" value="<?=$Dosen['Pangkat']?>"></td>
															<!-- <select class="form-control form-control-sm">
																<option>Small select</option>
															</select> -->
														</tr>
														<tr>
															<td><b>Email</b></td>
															<td><input type="text" id="EditEmail" class="form-control form-control-sm" value="<?=$Dosen['Email']?>"></td>
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
											 Pangkat: $("#EditPangkat").val(),
											 Email: $("#EditEmail").val()}
					$.post(BaseURL+"Dashboard/EditProfil", Data).done(function(Respon) {
						if (Respon == '1') {
							window.location = BaseURL + "Dashboard"
						}
						else {
							alert('Gagal Menyimpan')
						}
					})
          return false
        })
			})
		</script>
</body>
</html>