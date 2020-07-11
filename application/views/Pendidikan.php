<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 mt-2">
							<ul class="nav nav-pills mb-2 border border-warning rounded bg-light" id="pills-tab" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" id="pills-Input-tab" data-toggle="pill" href="#pills-Input" role="tab" aria-controls="pills-Input" aria-selected="false"><b>Input</b></a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="pills-Arsip-tab" data-toggle="pill" href="#pills-Arsip" role="tab" aria-controls="pills-Arsip" aria-selected="true"><b>Arsip</b></a>
								</li>
							</ul>
							<div class="tab-content border border-warning rounded bg-light" id="pills-tabContent">
								<div class="tab-pane fade show active" id="pills-Input" role="tabpanel" aria-labelledby="pills-Arsip-tab">
								<div class="container-fluid">
        					<div class="row">
										<div class="col-sm-3 mt-2">
											<div class="input-group mb-1">
												<div class="input-group-prepend">
													<label class="input-group-text bg-warning" for="PangkatDaftar"><b>Semester</b></label>
												</div>
												<select class="custom-select" id="Semester">
													<option value="Ganjil">Ganjil</option>
													<option value="Genap">Genap</option>
												</select>	
											</div>
										</div>
										<div class="col-sm-3 mt-2">
											<div class="input-group mb-2">
												<div class="input-group-prepend">
													<label class="input-group-text bg-warning" for="PangkatDaftar"><b>Tahun</b></label>
												</div>
												<input type="text" class="form-control" id="TahunAjaran" placeholder="Tahun Ajaran">
											</div>
										</div>
									</div>
								</div>
								<div class="table-responsive">
										<table class="table table-bordered bg-light">
											<thead>
												<tr>
													<th class='align-middle'>No</th>
													<th class='align-middle'>Komponen Kegiatan</th>
													<th class='align-middle'>Bukti Kegiatan</th>
													<th class='align-middle'>Batas maksimal diakui</th>
													<th class='align-middle'>Angka Kredit</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td rowspan="3" class='text-center align-middle'>1</td>
													<td class='align-middle'>Mengikuti pendidikan formal dan memperoleh gelar / sebutan / ijazah</td>
													<td></td>
													<td></td>
													<td></td>
												</tr>
												<tr>
													<td class='align-middle'><label><input type="radio" name="Sekolah" id="Doktor" value="option1"> Doktor / Sederajat</label></td>
													<td>Bukti tugas/izin belajar dan pindai ijazah asli</td>
													<td>1/periode penilaian</td>
													<td>200</td>
												</tr>
												<tr>
													<td class='align-middle'><label><input type="radio" name="Sekolah" id="Magister" value="option1"> Magister / Sederajat</label></td>
													<td>Bukti tugas/izin belajar dan pindai ijazah asli</td>
													<td>1/periode penilaian</td>
													<td>150</td>
												</tr>
												<tr>
													<td class='text-center align-middle'>2</td>
													<td class='align-middle'><label><input type="checkbox" id="Diklat" value="option1"> Mengikuti Diklat Prajabatan Golongan III</label></td>
													<td>Bukti tugas/izin belajar dan pindai ijazah asli</td>
													<td>1/periode penilaian</td>
													<td>3</td>
												</tr>
											</tbody>
										</table>
									</div>
									<button type="button" id="InputPendidikan" class="btn btn-success ml-1 mb-1"><b>SIMPAN</b></button>
								</div>
								<div class="tab-pane fade" id="pills-Arsip" role="tabpanel" aria-labelledby="pills-Input-tab">...</div>
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
				// $("#EditProfil").click(function() {
				// 	var Data = { NIP: $("#EditNIP").val(),
				// 							 Nama: $("#EditNama").val(),
				// 							 Pangkat: $("#EditPangkat").val(),
				// 							 Email: $("#EditEmail").val()}
				// 	$.post(BaseURL+"Dashboard/EditProfil", Data).done(function(Respon) {
				// 		if (Respon == '1') {
				// 			window.location = BaseURL + "Dashboard"
				// 		}
				// 		else {
				// 			alert('Gagal Menyimpan')
				// 		}
				// 	})
        //   return false
        // })
			})
		</script>
</body>
</html>