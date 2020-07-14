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
																<button Hapus="<?=$key['No']?>" class="btn btn-sm btn-danger Hapus"><i class="fas fa-trash"></i></button>
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
							<div id="OpsiPND6" style="display: none;">
								<div class="input-group mb-1">
									<div class="input-group-prepend">
										<span class="input-group-text bg-primary"><b>Jenis Pembimbing</b></i></span>
									</div>
									<select class="custom-select" id="JenisPembimbing">
										<option value="1">Pembimbing Utama</option>
										<option value="2">Pembimbing Pendamping</option>
									</select>
								</div>
								<div class="input-group mb-1">
									<div class="input-group-prepend">
										<span class="input-group-text bg-primary"><b>Jenis Bimbingan</b></i></span>
									</div>
									<select class="custom-select" id="JenisBimbingan">
										<option value="1">Disertasi</option>
										<option value="2">Tesis</option>
										<option value="3">Skripsi</option>
										<option value="4">Laporan Akhir</option>
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
							<div id="OpsiPND10" style="display: none;">
								<div class="input-group mb-1">
									<div class="input-group-prepend">
										<span class="input-group-text bg-primary"><b>Jenis</b></i></span>
									</div>
									<select class="custom-select" id="BahanPengajaran">
										<option value="1">Buku ajar</option>
										<option value="2">Diktat, Modul, Petunjuk praktikum, Model, Alat bantu, Audio visual, Naskah tutorial, Job sheet praktikumterkait dengan mata kuliah yang diampu</option>
									</select>
								</div>
							</div>
							<div id="OpsiPND12" style="display: none;">
								<div class="input-group mb-1">
									<div class="input-group-prepend">
										<span class="input-group-text bg-primary"><b>Jabatan</b></i></span>
									</div>
									<select class="custom-select" id="JenisPND12">
										<option value="6">Rektor</option>
										<option value="5">Wakil rektor/dekan/direktur program pasca sarjana/ketua lembaga</option>
										<option value="4">Ketua sekolah tinggi/pembantu dekan/asisten direktur program pasca sarjana/direktur politeknik/kepala LLDikti</option>
										<option value="4">Pembantu ketua sekolah tinggi/pembantu direktur politeknik</option>
										<option value="4">Direktur akademi</option>
										<option value="3">Pembantu direktur politeknik, ketua jurusan/ bagian pada universitas/ institut/sekolah tinggi</option>
										<option value="3">Pembantu direktur akademi/ketua jurusan/ketua prodipada universitas/politeknik/akademi, sekretaris jurusan/bagian pada universitas/institut/sekolah tinggi</option>
										<option value="3">Sekretaris jurusan pada politeknik/akademi dan kepala laboratorium (bengkel) universitas/institut/sekolah tinggi/politeknik/akademi</option>
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
							<div id="OpsiPND15" style="display: none;">
								<div class="input-group mb-1">
									<div class="input-group-prepend">
										<span class="input-group-text bg-primary"><b>Rentang</b></i></span>
									</div>
									<select class="custom-select" id="JenisPND15">
										<option value="15">Lamanya lebih dari 960 jam</option>
										<option value="9">Lamanya antara 641-960 jam</option>
										<option value="6">Lamanya antara 481-640 jam</option>
										<option value="3">Lamanya antara 161-480 jam</option>
										<option value="2">Lamanya antara 81-160 jam</option>
										<option value="1">Lamanya antara 30-80 jam</option>
										<option value="0.5">Lamanya antara 10-30 jam</option>
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
					"lengthMenu": [ 5, 10, 20, 30 ],
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
				$(document).on("click",".Hapus",function(){
					var Hapus = { No: $(this).attr('Hapus')};
					var Konfirmasi = confirm("Yakin Ingin Menghapus Data?");
					if (Konfirmasi == true) {
						$.post(BaseURL+"Pendidikan/Hapus", Hapus).done(function(Respon) {
							if (Respon == '1') {
								window.location = BaseURL + "Dashboard/Pendidikan"
							} else {
								alert(Respon)
							}
						});
					}
				});
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
						else if ($("#JenisKegiatan").val() == 'PND6') {
							Data['JenisPembimbing'] = $("#JenisPembimbing").val()
							Data['JenisBimbingan'] = $("#JenisBimbingan").val()
						}
						else if ($("#JenisKegiatan").val() == 'PND7') {
							Data['JenisPenguji'] = $("#JenisPenguji").val()
						}
						else if ($("#JenisKegiatan").val() == 'PND10') {
							Data['BahanPengajaran'] = $("#BahanPengajaran").val()
						}
						else if ($("#JenisKegiatan").val() == 'PND12') {
							Data['JenisPND12'] = $("#JenisPND12").val()
						}
						else if ($("#JenisKegiatan").val() == 'PND13') {
							Data['JenisPND13'] = $("#JenisPND13").val()
						}
						else if ($("#JenisKegiatan").val() == 'PND14') {
							Data['JenisPND14'] = $("#JenisPND14").val()
						}
						else if ($("#JenisKegiatan").val() == 'PND15') {
							Data['JenisPND15'] = $("#JenisPND15").val()
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