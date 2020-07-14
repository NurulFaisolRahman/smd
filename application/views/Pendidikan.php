<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 mt-2">
							<ul class="nav nav-pills mb-2 border border-warning rounded bg-warning" id="pills-tab" role="tablist">
								<li class="nav-item">
									<a class="nav-link text-dark" id="pills-Input-tab" data-toggle="pill" href="#pills-Input" role="tab" aria-controls="pills-Input" aria-selected="false"><b>Data Pendidikan</b></a>
								</li>
							</ul>
							<div class="tab-content border border-warning rounded bg-light" id="pills-tabContent">
								<div class="tab-pane fade show active" id="pills-Input" role="tabpanel" aria-labelledby="pills-Arsip-tab">
									<div class="container-fluid">
										<div class="row">
										<div class="col-sm-3 mt-1 mb-1">
												<div class="input-group mb-1">
													<div class="input-group-prepend">
														<label class="input-group-text bg-warning text-primary"><b>Kegiatan</b></label>
													</div>
													<?php 
														$Kegiatan = array('Mengikuti pendidikan formal',
														'Mengikuti diklat prajabatan golongan III',
														'Mengajar mata kuliah',
														'Membimbing seminar mahasiswa',
														'Membimbing KKN, Praktik Kerja Lapangan',
														'Membimbing disertasi/tesis/skripsi/TA',
														'Penguji ujian akhir/Profesi (setiap mahasiswa)',
														'Membina mahasiswa di bidang akademik/kemahasiswaan',
														'Mengembangkan program kuliah yang mempunyai nilai kebaharuan metode/substansi',
														'Mengembangkan bahan pengajaran yang mempunyai nilai kebaharuan',
														'Menyampaikan orasi ilmiah di tingkat perguruan tinggi',
														'Menduduki jabatan pimpinan perguruan tinggi',
														'Membimbing dosen yang mempunyai jabatan akademik lebih rendah',
														'Melaksanakan kegiatan detasering dan pencangkokan di luar institusi tempat bekerja',
														'Melaksanakan pengembangan diri untuk meningkatkan kompetensi');
													?>
													<select class="custom-select" id="OpsiKegiatan">
														<?php $Id = 1; foreach ($Kegiatan as $key) { $ID = 'PND'.$Id;?>
															<option value="<?='PND'.$Id++?>" <?php if ($this->session->userdata('Pendidikan') == $ID) {
																echo 'selected';
															} ?>><?=$key?></option>
														<?php } ?>
													</select>
												</div>
											</div>
											<div class="col-sm-3 mt-1 mb-1">
												<button type="button" id="Lihat" class="btn btn-primary"><b>Lihat</b></button>
												<button type="button" id="Tambah" class="btn btn-success" data-toggle="modal" data-target="#Input"><b>Tambah</b></button>
											</div>
										</div>
									</div>
									<div class="container-fluid">
										<div class="table-responsive mb-2">
											<table id="TabelPendidikan" class="table table-bordered table-striped">
												<thead class="bg-warning">
													<tr>
														<th class="align-middle">No</th>
														<th class="align-middle">Uraian Kegiatan</th>
														<th class="align-middle">Tanggal</th>
														<th class="align-middle">Satuan</th>
														<th class="align-middle">Volume</th>
														<th class="align-middle">Kredit</th>
														<th class="align-middle">Jumlah Kredit</th>
														<th class="align-middle">Ket/Bukti</th>
														<th class="align-middle">Aksi</th>
													</tr>
												</thead>
												<tbody>
													<?php $No = 1; foreach ($Pendidikan as $key) { ?>
														<tr>	
															<td class="text-center align-middle"><?=$No++?></td>
															<td class="align-middle"><?=$key['Kegiatan']?></td>
															<td class="text-center align-middle"><?=$key['Tanggal']?></td>
															<td class="text-center align-middle"><?=$key['Satuan']?></td>
															<td class="text-center align-middle"><?=$key['Volume']?></td>
															<td class="text-center align-middle"><?=$key['Kredit']?></td>
															<td class="text-center align-middle"><?=$key['JumlahKredit']?></td>
															<td><?=$key['Bukti']?></td>
															<td>                          
																<button class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></button>
																<button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
															</td>
														</tr>
													<?php } ?>
												</tbody>
											</table>
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
		<div class="modal fade" id="Input">
			<div class="modal-dialog">
				<div class="modal-content bg-warning">
					<div class="modal-body">
							<div class="input-group mb-1">
								<div class="input-group-prepend">
									<span class="input-group-text bg-primary"><b>Kegiatan</b></i></span>
								</div>
								<select class="custom-select" id="JenisKegiatan" onchange="GantiKegiatan()">
									<?php $Id = 1; foreach ($Kegiatan as $key) { ?>
										<option value="<?='PND'.$Id++?>"><?=$key?></option>
									<?php } ?>
								</select>
							</div>
							<div id="OpsiPND1">
								<div class="input-group mb-1">
									<div class="input-group-prepend">
										<span class="input-group-text bg-primary"><b>Jenjang</b></i></span>
									</div>
									<select class="custom-select" id="Jenjang">
										<option value="200">Doktor/Sederajat</option>
										<option value="150">Magister/Sederajat</option>
									</select>
								</div>
							</div>
							<div id="OpsiPND7" style="display: none;">
								<div class="input-group mb-1">
									<div class="input-group-prepend">
										<span class="input-group-text bg-primary"><b>Jenis</b></i></span>
									</div>
									<select class="custom-select" id="JenisPenguji">
										<option value="1">Ketua Penguji</option>
										<option value="2">Anggota Penguji</option>
									</select>
								</div>
							</div>
							<div id="OpsiPND13" style="display: none;">
								<div class="input-group mb-1">
									<div class="input-group-prepend">
										<span class="input-group-text bg-primary"><b>Jenis</b></i></span>
									</div>
									<select class="custom-select" id="JenisPND13">
										<option value="1">Pembimbing pencangkokan</option>
										<option value="2">Reguler</option>
									</select>
								</div>
							</div>
							<div id="OpsiPND14" style="display: none;">
								<div class="input-group mb-1">
									<div class="input-group-prepend">
										<span class="input-group-text bg-primary"><b>Jenis</b></i></span>
									</div>
									<select class="custom-select" id="JenisPND14">
										<option value="1">Detasering</option>
										<option value="2">Pencangkokan</option>
									</select>
								</div>
							</div>
							<div class="input-group mb-1">
								<span class="input-group-text bg-primary"><b>Uraian</b></i></span>
    						<textarea class="form-control" id="Uraian" rows="2"></textarea>
							</div>
							<div class="input-group mb-1">
								<div class="input-group-prepend">
									<span class="input-group-text bg-primary"><b>Tanggal</b></i></span>
								</div>
								<input class="form-control" type="text" id="Tanggal">
							</div>
							<div class="input-group mb-1">
								<div class="input-group-prepend">
									<span class="input-group-text bg-primary"><b>Jumlah Volume Kegiatan</b></i></span>
								</div>
								<input class="form-control" type="text" id="Volume">
							</div>
							<div class="input-group mb-1">
								<div class="input-group-prepend">
									<span class="input-group-text bg-primary"><b>Bukti</b></i></span>
								</div>
								<input class="form-control" type="file" id="Bukti">
							</div>
					</div>
					<div class="modal-footer justify-content-between">
						<button type="button" class="btn btn-danger" data-dismiss="modal"><b>Tutup</b></button>
						<button type="submit" class="btn btn-success" id="InputKegiatan"><b>Simpan</b></button>
					</div>
				</div>
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
				$('#TabelPendidikan').DataTable( {
					dom:'lfrtip',
					"language": {
						"paginate": {
							'previous': '<b class="text-primary"><</b>',
							'next': '<b class="text-primary">></b>'
						}
					}
				});
				$("#Lihat").click(function() {
					var Data = {ID: $("#OpsiKegiatan").val()}
					$.post(BaseURL+"Dashboard/LihatPendidikan", Data).done(function(Respon) {
						window.location = BaseURL + "Dashboard/Pendidikan"
					})
				})
				$("#InputKegiatan").click(function() {
					if (isNaN($("#Volume").val())) {
						alert('Volume Harus Angka & Gunakan Tanda . Untuk desimal!')
					} 
					else {
						var Data = {Kegiatan: $("#Uraian").val(),
											Tanggal: $("#Tanggal").val(),
											ID: $("#JenisKegiatan").val(),
                      Volume: $("#Volume").val()}
						if ($("#JenisKegiatan").val() == 'PND1') {
							Data['Jenjang'] = $("#Jenjang").val()
						}
						else if ($("#JenisKegiatan").val() == 'PND7') {
							Data['JenisPenguji'] = $("#JenisPenguji").val()
						}
						else if ($("#JenisKegiatan").val() == 'PND13') {
							Data['JenisPND13'] = $("#JenisPND13").val()
						}
						else if ($("#JenisKegiatan").val() == 'PND14') {
							Data['JenisPND14'] = $("#JenisPND14").val()
						}
						$.post(BaseURL+"Pendidikan/Input", Data).done(function(Respon) {
							if (Respon == '1') {
								window.location = BaseURL + "Dashboard/Pendidikan"
							}
							else {
								alert('Gagal Menyimpan!')
							}
						})
					}
          return false
        })
			})
			function GantiKegiatan() {
				if ($("#JenisKegiatan").val() == 'PND1') {
					document.getElementById("OpsiPND1").style.display = 'block'
					document.getElementById("OpsiPND7").style.display = 'none'
					document.getElementById("OpsiPND13").style.display = 'none'
					document.getElementById("OpsiPND14").style.display = 'none'
				}
				else if ($("#JenisKegiatan").val() == 'PND7') {
					document.getElementById("OpsiPND1").style.display = 'none'
					document.getElementById("OpsiPND7").style.display = 'block'
					document.getElementById("OpsiPND13").style.display = 'none'
					document.getElementById("OpsiPND14").style.display = 'none'
				}
				else if ($("#JenisKegiatan").val() == 'PND13') {
					document.getElementById("OpsiPND1").style.display = 'none'
					document.getElementById("OpsiPND7").style.display = 'none'
					document.getElementById("OpsiPND13").style.display = 'block'
					document.getElementById("OpsiPND14").style.display = 'none'
				}
				else if ($("#JenisKegiatan").val() == 'PND14') {
					document.getElementById("OpsiPND1").style.display = 'none'
					document.getElementById("OpsiPND7").style.display = 'none'
					document.getElementById("OpsiPND13").style.display = 'none'
					document.getElementById("OpsiPND14").style.display = 'block'
				}
				else if ($("#JenisKegiatan").val() != 'PND1' && $("#JenisKegiatan").val() != 'PND7' && $("#JenisKegiatan").val() != 'PND13' && $("#JenisKegiatan").val() != 'PND14') {
					document.getElementById("OpsiPND1").style.display = 'none'
					document.getElementById("OpsiPND7").style.display = 'none'
					document.getElementById("OpsiPND13").style.display = 'none'
					document.getElementById("OpsiPND14").style.display = 'none'
				}
			}
		</script>
</body>
</html>