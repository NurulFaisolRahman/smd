<div class="container-fluid">
  <div class="row">
    <div class="col-sm-4 mt-1 mb-1">       
      <button type="button" id="TambahRencana" class="btn btn-primary" data-toggle="modal" data-target="#ModalInputRencanaPendidikan"><i class="fa fa-plus"></i> <b>Input</b></button>
    </div>
  </div>
</div>
<div class="container-fluid">
	<div class="table-responsive mb-2">
		<table id="TabelRencana" class="table table-bordered table-striped">
			<thead class="bg-warning">
				<tr>
					<th class="text-center align-middle">No</th>
					<th class="text-center align-middle">Homebase</th>
					<th class="text-center align-middle">Semester</th>
					<th class="text-center align-middle">Tahun</th>
					<th class="text-center align-middle">Realisasi</th>
					<th class="text-center align-middle">Persentase</th>
					<th class="text-center align-middle">Rencana</th>
					<th class="text-center align-middle">Status</th>
					<th class="text-center align-middle">Target Kajur</th>
					<th class="text-center align-middle">Aksi</th>
				</tr>
			</thead>
			<tbody>
			<?php $TotalRencana = $TotalRealisasi = 0; $No = 1; foreach ($Rencana as $key) { ?>
					<tr>	
						<td class="text-center align-middle"><?=$No++?></td>
						<td class="text-center align-middle"><?=$key['Jenjang']?></td>
						<td class="text-center align-middle"><?=$key['Semester']?></td>
						<td class="text-center align-middle"><?=$key['Tahun']?></td> 
						<td class="text-center align-middle"><?=str_replace('.',',',$KreditRealisasi[$No-2]).' SKS'?></td>
						<td class="text-center align-middle"><?=round(($KreditRealisasi[$No-2]/$key['TotalKredit']*100),2).' %'?></td> 
						<td class="text-center align-middle"><?=str_replace('.',',',$key['TotalKredit']).' SKS'?></td>
						<td class="text-center align-middle">
							<?php if ($key['TotalKredit'] == $key['TargetKajur']) { ?>
								<h4 class="text-primary mt-2"><b>=</b></h4>
								<?php } else if ($key['TotalKredit'] > $key['TargetKajur']) { ?>
									<h4 class="text-success mt-2"><b>></b></h4>
								<?php } else if ($key['TotalKredit'] < $key['TargetKajur']) { ?>
									<h4 class="text-danger mt-2"><b><</b></h4>
								<?php } ?>
						</td>
						<td class="text-center align-middle">
							<?php
								if ($key['TargetKajur'] == null) {
									echo '0 SKS';
								} else {
									echo $key['TargetKajur'].' SKS';
								}
							?>
						</td>
						<td class="text-center align-middle">                          
							<button EditRencanaPendidikan="<?=$key['No']."/".$key['Jabatan']."/".$key['Jenjang']."/".$key['Semester']."/".$key['Tahun']."/".$key['KodeRencana']."/".$key['TotalKredit']?>" class="btn btn-sm btn-warning EditRencanaPendidikan"><i class="fas fa-edit"></i></button>
							<button HapusRencanaPendidikan="<?=$key['No']?>" class="btn btn-sm btn-danger HapusRencanaPendidikan"><i class="fas fa-trash"></i></button>
						</td>
					</tr>
					<?php 
						$TotalRencana += $key['TotalKredit'];
						$TotalRealisasi += $KreditRealisasi[$No-2];
					?>
				<?php } ?>
			</tbody>
				<tfoot>
					<tr>
						<th colspan="4" class="text-center">Total</th>
						<th class="bg-success text-center align-middle"><?=str_replace('.',',',$TotalRealisasi).' SKS'?></th>
						<th></th>
						<th class="bg-success text-center align-middle"><?=str_replace('.',',',$TotalRencana).' SKS'?></th>
						<th></th>
						<th></th>
						<th></th>
					</tr>
				</tfoot>
		</table>
	</div>
	<div class="modal fade" id="ModalInputRencanaPendidikan">
		<div class="modal-dialog modal-xl">
			<div class="modal-content">
				<div class="modal-body">
					<div class="container-fluid">
						<div class="row">
							<div class="col-sm-3 mt-1 mb-1">
								<div class="input-group mb-1">
									<div class="input-group-prepend">
										<label class="input-group-text bg-primary"><b>Homebase</b></label>
									</div>
									<select class="custom-select" id="JenjangRencanaPendidikan">										
											<option value="S1">S1</option>
											<option value="S2">S2</option>
									</select>
								</div>
							</div> 
							<div class="col-sm-3 mt-1 mb-1">
								<div class="input-group mb-1">
									<div class="input-group-prepend">
										<label class="input-group-text bg-primary"><b>Semester</b></label>
									</div>
									<select class="custom-select" id="SemesterRencanaPendidikan">										
											<option value="Ganjil">Ganjil</option>
											<option value="Genap">Genap</option>
									</select>
								</div>
							</div> 
							<div class="col-sm-3 mt-1 mb-1">
								<div class="input-group mb-1">
									<div class="input-group-prepend">
										<label class="input-group-text bg-primary"><b>Tahun</b></label>
									</div>
									<input class="form-control" type="text" id="TahunRencanaPendidikan"  data-inputmask='"mask": "9999"' data-mask value="20">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<div class="table-responsive mb-2">
									<table class="table table-bordered border-dark bg-light mb-1">
										<thead>
											<tr>
												<th class='align-middle bg-warning'>No</th>
												<th class='align-middle bg-warning'> Komponen Kegiatan</th>
												<th class='align-middle bg-warning'> Kredit</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td rowspan="3" class='text-center'>1</td>
												<td class='align-middle'>Menyelesaikan pendidikan formal dan memperoleh ijazah</td>
												<td rowspan="3" class='text-center align-middle'><b id="KreditSekolah">0</b></td>
											</tr>
											<tr>
												<td class='align-middle'><label><input type="checkbox" id="Doktor" onchange="Doktor()"> Doktor</label></td>
											</tr>
											<tr>
												<td class='align-middle'><label><input type="checkbox" id="Magister" onchange="Magister()"> Magister</label></td>
											</tr>
											<tr>
												<td class='text-center'>2</td>
												<td class='align-middle'><label><input type="checkbox" id="Diklat" onchange="Diklat()"> Mengikuti Diklat Prajabatan Golongan III</label></td>
												<td class='text-center align-middle'><b id="KreditDiklat">0</b></td>
											</tr>
											<tr>
												<td rowspan="2" class='text-center'>3</td>
												<td class='align-middle'>Melaksanakan perkuliahan / mengajar </td>
												<td rowspan="2" class='text-center align-middle'><b id="KreditMengajar">0</b></td>
											</tr>
											<tr>
												<td class='align-middle'>
													<div class="input-group-sm mb-1">
														<b>Jumlah sks :</b> <input style="width: 50px;" oninput="Mengajar()" class="form-control-sm" type="text" id="Mengajar"  data-inputmask='"mask": "99"' data-mask> <b>sks</b>
													</div>
												</td>
											</tr>
											<tr>
												<td class='text-center'>4</td>
												<td class='align-middle'><label><input type="checkbox" id="BimbingSeminar" onchange="BimbingSeminar()"> Membimbing seminar mahasiswa</label></td>
												<td class='text-center align-middle'><b id="KreditBimbingSeminar">0</b></td>
											</tr>
											<tr>
												<td class='text-center'>5</td>
												<td class='align-middle'><label><input type="checkbox" id="BimbingKKN" onchange="BimbingKKN()"> Membimbing KKN, Praktik Kerja Lapangan</label></td>
												<td class='text-center align-middle'><b id="KreditBimbingKKN">0</b></td>
											</tr>
											<tr>
												<td rowspan="9" class='text-center'>6</td>
												<td class='align-middle'>Membimbing dalam menghasilkan disertasi / tesis / skripsi</td>
												<td></td>
											</tr>
											<tr>
												<td class='align-middle'>1. Pembimbing Utama</td>
												<td></td>
											</tr>
											<tr>
												<td><b>Disertasi :</b> <input style="width: 50px;" oninput="DisertasiUtama()" class="form-control-sm" type="text" id="DisertasiUtama"  data-inputmask='"mask": "99"' data-mask> <b>Lulusan</b></td>
												<td class='text-center align-middle'><b id="KreditDisertasiUtama">0</b></td>
											</tr>
											<tr>
												<td><b>Tesis :</b> <input style="width: 50px;" oninput="TesisUtama()" class="form-control-sm" type="text" id="TesisUtama"  data-inputmask='"mask": "99"' data-mask> <b>Lulusan</b></td>
												<td class='text-center align-middle'><b id="KreditTesisUtama">0</b></td>
											</tr>
											<tr>
												<td><b>Skripsi :</b> <input style="width: 50px;" oninput="SkripsiUtama()" class="form-control-sm" type="text" id="SkripsiUtama"  data-inputmask='"mask": "99"' data-mask> <b>Lulusan</b></td>
												<td class='text-center align-middle'><b id="KreditSkripsiUtama">0</b></td>
											</tr>
											<tr>
												<td class='align-middle'>2. Pembimbing Pendamping</td>
												<td></td>
											</tr>
											<tr>
												<td><b>Disertasi :</b> <input style="width: 50px;" oninput="DisertasiPendamping()" class="form-control-sm" type="text" id="DisertasiPendamping"  data-inputmask='"mask": "99"' data-mask> <b>Lulusan</b></td>
												<td class='text-center align-middle'><b id="KreditDisertasiPendamping">0</b></td>
											</tr>
											<tr>
												<td><b>Tesis :</b> <input style="width: 50px;" oninput="TesisPendamping()" class="form-control-sm" type="text" id="TesisPendamping"  data-inputmask='"mask": "99"' data-mask> <b>Lulusan</b></td>
												<td class='text-center align-middle'><b id="KreditTesisPendamping">0</b></td>
											</tr>
											<tr>
												<td><b>Skripsi :</b> <input style="width: 50px;" oninput="SkripsiPendamping()" class="form-control-sm" type="text" id="SkripsiPendamping"  data-inputmask='"mask": "99"' data-mask> <b>Lulusan</b></td>
												<td class='text-center align-middle'><b id="KreditSkripsiPendamping">0</b></td>
											</tr>
											<tr>
												<td rowspan="3" class='text-center'>7</td>
												<td class='align-middle'>Bertugas sebagai penguji pada ujian akhir</td>
												<td></td>
											</tr>
											<tr>
												<td><b>Ketua penguji :</b> <input style="width: 50px;" oninput="PengujiUtama()" class="form-control-sm" type="text" id="PengujiUtama"  data-inputmask='"mask": "99"' data-mask> <b>Lulusan</b></td>
												<td class='text-center align-middle'><b id="KreditPengujiUtama">0</b></td>
											</tr>
											<tr>
												<td><b>Anggota penguji :</b> <input style="width: 50px;" oninput="AnggotaPenguji()" class="form-control-sm" type="text" id="AnggotaPenguji"  data-inputmask='"mask": "99"' data-mask> <b>Lulusan</b></td>
												<td class='text-center align-middle'><b id="KreditAnggotaPenguji">0</b></td>
											</tr>
											<tr>
												<td rowspan="2" class='text-center'>8</td>
												<td class='align-middle'> Membina kegiatan mahasiswa di bidang akademik dan kemahasiswaan, termasuk membimbing mahasiswa menghasilkan produk saintifik</label></td>
												<td rowspan="2" class='text-center align-middle'><b id="KreditMembinaKegiatan">0</b></td>
											</tr>
											<tr>
												<td><b>Jumlah Kegiatan :</b> <input style="width: 50px;" oninput="MembinaKegiatan()" class="form-control-sm" type="text" id="MembinaKegiatan"  data-inputmask='"mask": "99"' data-mask> <b>Kegiatan</b></td>
											</tr>
											<tr>
												<td rowspan="2" class='text-center'>9</td>
												<td class='align-middle'> Mengembangkan program kuliah yang mempunyai nilai kebaharuan metode atau substansi</td>
												<td rowspan="2" class='text-center align-middle'><b id="KreditMengembangkanProgram">0</b></td>
											</tr>
											<tr>
												<td><b>Jumlah Mata Kuliah :</b> <input style="width: 50px;" oninput="MengembangkanProgram()" class="form-control-sm" type="text" id="MengembangkanProgram"  data-inputmask='"mask": "99"' data-mask> <b>Mata Kuliah</b></td>
											</tr>
											<tr>
												<td rowspan="3" class='text-center'>10</td>
												<td class='align-middle'>Mengembangkan bahan pengajaran / bahan kuliah yang mempunyai nilai kebaharuan</td>
												<td></td>
											</tr>
											<tr>
												<td><b>Jumlah Buku ajar :</b> <input style="width: 50px;" oninput="BukuAjar()" class="form-control-sm" type="text" id="BukuAjar"  data-inputmask='"mask": "99"' data-mask> <b>Buku Ajar</b></td>
												<td class='text-center align-middle'><b id="KreditBukuAjar">0</b></td>
											</tr>
											<tr>
												<td><b>Jumlah Produk Diktat, Modul, dll :</b> <input style="width: 50px;" oninput="ProdukPengajaran()" class="form-control-sm" type="text" id="ProdukPengajaran"  data-inputmask='"mask": "99"' data-mask> <b>Produk</b></td>
												<td class='text-center align-middle'><b id="KreditProdukPengajaran">0</b></td>
											</tr>
											<tr>
												<td rowspan="2" class='text-center'>11</td>
												<td class='align-middle'> Menyampaikan orasi ilmiah di tingkat perguruan tinggi</td>
												<td rowspan="2" class='text-center align-middle'><b id="KreditOrasi">0</b></td>
											</tr>
											<tr>
												<td><b>Jumlah Orasi :</b> <input style="width: 50px;" oninput="Orasi()" class="form-control-sm" type="text" id="Orasi"  data-inputmask='"mask": "99"' data-mask> <b>Orasi</b></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="table-responsive mb-2">
									<table id="PENDIDIKAN" class="table table-bordered border-dark bg-light mb-1">
										<thead>
											<tr>
												<th class='align-middle bg-warning'>No</th>
												<th class='align-middle bg-warning'> Komponen Kegiatan</th>
												<th class='align-middle bg-warning'> Kredit</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td rowspan="9" class='text-center'>12</td>
												<td class='align-middle'>Menduduki jabatan pimpinan perguruan tinggi</td>
												<td></td>
											</tr>
											<tr>
												<td class='align-middle'><label><input type="checkbox" id="Rektor" onchange="Rektor()"> Rektor</label></td>
												<td class='text-center align-middle'><b id="KreditRektor">0</b></td>
											</tr>
											<tr>
												<td class='align-middle'><label><input type="checkbox" id="WakilRektor" onchange="WakilRektor()"> Wakil rektor / dekan / direktur program pasca sarjana / ketua lembaga</label></td>
												<td class='text-center align-middle'><b id="KreditWakilRektor">0</b></td>
											</tr>
											<tr>
												<td class='align-middle'><label><input type="checkbox" id="Ketua" onchange="Ketua()"> Ketua sekolah tinggi / pembantu dekan / asisten direktur program pasca sarjana / direktur politeknik / kepala LLDikti</label></td>
												<td class='text-center align-middle'><b id="KreditKetua">0</b></td>
											</tr>
											<tr>
												<td class='align-middle'><label><input type="checkbox" id="PembantuKetua" onchange="PembantuKetua()"> Pembantu ketua sekolah tinggi/pembantu direktur politeknik</label></td>
												<td class='text-center align-middle'><b id="KreditPembantuKetua">0</b></td>
											</tr>
											<tr>
												<td class='align-middle'><label><input type="checkbox" id="DirekturAkademi" onchange="DirekturAkademi()"> Direktur akademi</label></td>
												<td class='text-center align-middle'><b id="KreditDirekturAkademi">0</b></td>
											</tr>
											<tr>
												<td class='align-middle'><label><input type="checkbox" id="PembantuDirekturPoliteknik" onchange="PembantuDirekturPoliteknik()"> Pembantu direktur politeknik, ketua jurusan / bagian pada universitas / institut / sekolah tinggi</label></td>
												<td class='text-center align-middle'><b id="KreditPembantuDirekturPoliteknik">0</b></td>
											</tr>
											<tr>
												<td class='align-middle'><label><input type="checkbox" id="PembantuDirekturAkademi" onchange="PembantuDirekturAkademi()"> Pembantu direktur akademi / ketua jurusan / ketua prodipada universitas / politeknik / akademi, sekretaris jurusan / bagian pada universitas / institut / sekolah tinggi</label></td>
												<td class='text-center align-middle'><b id="KreditPembantuDirekturAkademi">0</b></td>
											</tr>
											<tr>
												<td class='align-middle'><label><input type="checkbox" id="Sekretaris" onchange="Sekretaris()"> Sekretaris jurusan pada politeknik / akademi dan kepala laboratorium (bengkel) universitas / institut / sekolah tinggi / politeknik / akademi</label></td>
												<td class='text-center align-middle'><b id="KreditSekretaris">0</b></td>
											</tr>
											<?php if ($this->session->userdata('Jabatan') == 'Lektor Kepala' || $this->session->userdata('Jabatan') == 'Profesor') { ?>
											<tr>
												<td rowspan="3" class='text-center'>13</td>
												<td class='align-middle'>Membimbing dosen yang mempunyai jabatan akademik lebih rendah</td>
												<td></td>
											</tr>
											<tr>
												<td><b>Pembimbing Pencangkokan :</b> <input style="width: 50px;" oninput="PembimbingPencangkokan()" class="form-control-sm" type="text" id="PembimbingPencangkokan"  data-inputmask='"mask": "99"' data-mask> <b>Orang</b></td>
												<td class='text-center align-middle'><b id="KreditPembimbingPencangkokan">0</b></td>
											</tr>
											<tr>
												<td><b>Pembimbing Reguler :</b> <input style="width: 50px;" oninput="PembimbingReguler()" class="form-control-sm" type="text" id="PembimbingReguler"  data-inputmask='"mask": "99"' data-mask> <b>Orang</b></td>
												<td class='text-center align-middle'><b id="KreditPembimbingReguler">0</b></td>
											</tr>
											<tr>
												<td rowspan="3" class='text-center'>14</td>
												<td class='align-middle'>Melaksanakan kegiatan detasering dan pencangkokan di luar institusi tempat bekerja</td>
												<td></td>
											</tr>
											<tr>
												<td><b>Detasering :</b> <input style="width: 50px;" oninput="Detasering()" class="form-control-sm" type="text" id="Detasering"  data-inputmask='"mask": "99"' data-mask> <b>Orang</b></td>
												<td class='text-center align-middle'><b id="KreditDetasering">0</b></td>
											</tr>
											<tr>
												<td><b>Pencangkokan :</b> <input style="width: 50px;" oninput="Pencangkokan()" class="form-control-sm" type="text" id="Pencangkokan"  data-inputmask='"mask": "99"' data-mask> <b>Orang</b></td>
												<td class='text-center align-middle'><b id="KreditPencangkokan">0</b></td>
											</tr>
											<?php } ?>
											<tr>
												<?php if ($this->session->userdata('Jabatan') == 'Lektor Kepala' || $this->session->userdata('Jabatan') == 'Profesor') { ?>
												<td rowspan="8" class='text-center'>15</td>
												<?php } else { ?>
													<td rowspan="8" class='text-center'>13</td>
												<?php } ?>
												<td class='align-middle'>Melaksanakan pengembangan diri untuk meningkatkan kompetensi</td>
												<td></td>
											</tr>
											<tr>
												<td><b>Lebih dari 960 jam :</b> <input style="width: 50px;" oninput="Pengembangan960()" class="form-control-sm" type="text" id="Pengembangan960"  data-inputmask='"mask": "99"' data-mask> <b>Kegiatan</b></td>
												<td class='text-center align-middle'><b id="KreditPengembangan960">0</b></td>
											</tr>
											<tr>
												<td><b>Antara 641-960 jam :</b> <input style="width: 50px;" oninput="Pengembangan641()" class="form-control-sm" type="text" id="Pengembangan641"  data-inputmask='"mask": "99"' data-mask> <b>Kegiatan</b></td>
												<td class='text-center align-middle'><b id="KreditPengembangan641">0</b></td>
											</tr>
											<tr>
												<td><b>Antara 481-640 jam :</b> <input style="width: 50px;" oninput="Pengembangan481()" class="form-control-sm" type="text" id="Pengembangan481"  data-inputmask='"mask": "99"' data-mask> <b>Kegiatan</b></td>
												<td class='text-center align-middle'><b id="KreditPengembangan481">0</b></td>
											</tr>
											<tr>
												<td><b>Antara 161-480 jam :</b> <input style="width: 50px;" oninput="Pengembangan161()" class="form-control-sm" type="text" id="Pengembangan161"  data-inputmask='"mask": "99"' data-mask> <b>Kegiatan</b></td>
												<td class='text-center align-middle'><b id="KreditPengembangan161">0</b></td>
											</tr>
											<tr>
												<td><b>Antara 81-160 jam :</b> <input style="width: 50px;" oninput="Pengembangan81()" class="form-control-sm" type="text" id="Pengembangan81"  data-inputmask='"mask": "99"' data-mask> <b>Kegiatan</b></td>
												<td class='text-center align-middle'><b id="KreditPengembangan81">0</b></td>
											</tr>
											<tr>
												<td><b>Antara 30-80 jam :</b> <input style="width: 50px;" oninput="Pengembangan30()" class="form-control-sm" type="text" id="Pengembangan30"  data-inputmask='"mask": "99"' data-mask> <b>Kegiatan</b></td>
												<td class='text-center align-middle'><b id="KreditPengembangan30">0</b></td>
											</tr>
											<tr>
												<td><b>Antara 10-30 jam :</b> <input style="width: 50px;" oninput="Pengembangan10()" class="form-control-sm" type="text" id="Pengembangan10"  data-inputmask='"mask": "99"' data-mask> <b>Kegiatan</b></td>
												<td class='text-center align-middle'><b id="KreditPengembangan10">0</b></td>
											</tr>
											<tr>
												<td colspan="2" class="text-right">
													<button type="button" id="TombolRencanaTotalKredit" class="btn btn-primary"><b>Total</b></button>
												</td>
												<td class="text-center align-middle"><b id="RencanaTotalKredit">0</b></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer justify-content-between">
					<button type="button" class="btn btn-danger" data-dismiss="modal"><b>Tutup</b></button>
					<button type="submit" class="btn btn-success" id="InputRencanaPendidikan"><b>Simpan</b></button>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="ModalEditRencanaPendidikan">
		<div class="modal-dialog modal-xl">
			<div class="modal-content">
				<div class="modal-body">
					<div class="container-fluid">
						<div class="row">
							<div class="col-sm-3 mt-1 mb-1">
								<div class="input-group mb-1">
									<div class="input-group-prepend">
										<label class="input-group-text bg-primary"><b>Homebase</b></label>
									</div>
									<input class="form-control" type="hidden" id="JenjangLama">
									<select class="custom-select" id="EditJenjangRencanaPendidikan">										
											<option value="S1">S1</option>
											<option value="S2">S2</option>
									</select>
								</div>
							</div> 
							<div class="col-sm-3 mt-1 mb-1">
								<div class="input-group mb-1">
									<div class="input-group-prepend">
										<label class="input-group-text bg-primary"><b>Semester</b></label>
									</div>
									<input class="form-control" type="hidden" id="SemesterLama">
									<select class="custom-select" id="EditSemesterRencanaPendidikan">										
											<option value="Ganjil">Ganjil</option>
											<option value="Genap">Genap</option>
									</select>
								</div>
							</div> 
							<div class="col-sm-3 mt-1 mb-1">
								<div class="input-group mb-1">
									<div class="input-group-prepend">
										<label class="input-group-text bg-primary"><b>Tahun</b></label>
									</div>
									<input class="form-control" type="hidden" id="NoEditRencana">
									<input class="form-control" type="hidden" id="TahunLama">
									<input class="form-control" type="text" id="EditTahunRencanaPendidikan"  data-inputmask='"mask": "9999"' data-mask>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<div class="table-responsive mb-2">
									<table id="EditPENDIDIKAN" class="table table-bordered border-dark bg-light mb-1">
										<thead>
											<tr>
												<th class='align-middle bg-warning'>No</th>
												<th class='align-middle bg-warning'> Komponen Kegiatan</th>
												<th class='align-middle bg-warning'> Kredit</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td rowspan="3" class='text-center'>1</td>
												<td class='align-middle'>Menyelesaikan pendidikan formal dan memperoleh ijazah</td>
												<td rowspan="3" class='text-center align-middle'><b id="EditKreditSekolah">0</b></td>
											</tr>
											<tr>
												<td class='align-middle'><label><input type="checkbox" id="EditDoktor" onchange="EditDoktor()"> Doktor</label></td>
											</tr>
											<tr>
												<td class='align-middle'><label><input type="checkbox" id="EditMagister" onchange="EditMagister()"> Magister</label></td>
											</tr>
											<tr>
												<td class='text-center'>2</td>
												<td class='align-middle'><label><input type="checkbox" id="EditDiklat" onchange="EditDiklat()"> Mengikuti Diklat Prajabatan Golongan III</label></td>
												<td class='text-center align-middle'><b id="EditKreditDiklat">0</b></td>
											</tr>
											<tr>
												<td rowspan="2" class='text-center'>3</td>
												<td class='align-middle'>Melaksanakan perkuliahan / mengajar </td>
												<td rowspan="2" class='text-center align-middle'><b id="EditKreditMengajar">0</b></td>
											</tr>
											<tr>
												<td class='align-middle'>
													<div class="input-group-sm mb-1">
														<b>Jumlah sks :</b> <input style="width: 50px;" oninput="EditMengajar()" class="form-control-sm" type="text" id="EditMengajar"  data-inputmask='"mask": "99"' data-mask> <b>sks</b>
													</div>
												</td>
											</tr>
											<tr>
												<td class='text-center'>4</td>
												<td class='align-middle'><label><input type="checkbox" id="EditBimbingSeminar" onchange="EditBimbingSeminar()"> Membimbing seminar mahasiswa</label></td>
												<td class='text-center align-middle'><b id="EditKreditBimbingSeminar">0</b></td>
											</tr>
											<tr>
												<td class='text-center'>5</td>
												<td class='align-middle'><label><input type="checkbox" id="EditBimbingKKN" onchange="EditBimbingKKN()"> Membimbing KKN, Praktik Kerja Lapangan</label></td>
												<td class='text-center align-middle'><b id="EditKreditBimbingKKN">0</b></td>
											</tr>
											<tr>
												<td rowspan="9" class='text-center'>6</td>
												<td class='align-middle'>Membimbing dalam menghasilkan disertasi / tesis / skripsi</td>
												<td></td>
											</tr>
											<tr>
												<td class='align-middle'>1. Pembimbing Utama</td>
												<td></td>
											</tr>
											<tr>
												<td><b>Disertasi :</b> <input style="width: 50px;" oninput="EditDisertasiUtama()" class="form-control-sm" type="text" id="EditDisertasiUtama"  data-inputmask='"mask": "99"' data-mask> <b>Lulusan</b></td>
												<td class='text-center align-middle'><b id="EditKreditDisertasiUtama">0</b></td>
											</tr>
											<tr>
												<td><b>Tesis :</b> <input style="width: 50px;" oninput="EditTesisUtama()" class="form-control-sm" type="text" id="EditTesisUtama"  data-inputmask='"mask": "99"' data-mask> <b>Lulusan</b></td>
												<td class='text-center align-middle'><b id="EditKreditTesisUtama">0</b></td>
											</tr>
											<tr>
												<td><b>Skripsi :</b> <input style="width: 50px;" oninput="EditSkripsiUtama()" class="form-control-sm" type="text" id="EditSkripsiUtama"  data-inputmask='"mask": "99"' data-mask> <b>Lulusan</b></td>
												<td class='text-center align-middle'><b id="EditKreditSkripsiUtama">0</b></td>
											</tr>
											<tr>
												<td class='align-middle'>2. Pembimbing Pendamping</td>
												<td></td>
											</tr>
											<tr>
												<td><b>Disertasi :</b> <input style="width: 50px;" oninput="EditDisertasiPendamping()" class="form-control-sm" type="text" id="EditDisertasiPendamping"  data-inputmask='"mask": "99"' data-mask> <b>Lulusan</b></td>
												<td class='text-center align-middle'><b id="EditKreditDisertasiPendamping">0</b></td>
											</tr>
											<tr>
												<td><b>Tesis :</b> <input style="width: 50px;" oninput="EditTesisPendamping()" class="form-control-sm" type="text" id="EditTesisPendamping"  data-inputmask='"mask": "99"' data-mask> <b>Lulusan</b></td>
												<td class='text-center align-middle'><b id="EditKreditTesisPendamping">0</b></td>
											</tr>
											<tr>
												<td><b>Skripsi :</b> <input style="width: 50px;" oninput="EditSkripsiPendamping()" class="form-control-sm" type="text" id="EditSkripsiPendamping"  data-inputmask='"mask": "99"' data-mask> <b>Lulusan</b></td>
												<td class='text-center align-middle'><b id="EditKreditSkripsiPendamping">0</b></td>
											</tr>
											<tr>
												<td rowspan="3" class='text-center'>7</td>
												<td class='align-middle'>Bertugas sebagai penguji pada ujian akhir</td>
												<td></td>
											</tr>
											<tr>
												<td><b>Ketua penguji :</b> <input style="width: 50px;" oninput="EditPengujiUtama()" class="form-control-sm" type="text" id="EditPengujiUtama"  data-inputmask='"mask": "99"' data-mask> <b>Lulusan</b></td>
												<td class='text-center align-middle'><b id="EditKreditPengujiUtama">0</b></td>
											</tr>
											<tr>
												<td><b>Anggota penguji :</b> <input style="width: 50px;" oninput="EditAnggotaPenguji()" class="form-control-sm" type="text" id="EditAnggotaPenguji"  data-inputmask='"mask": "99"' data-mask> <b>Lulusan</b></td>
												<td class='text-center align-middle'><b id="EditKreditAnggotaPenguji">0</b></td>
											</tr>
											<tr>
												<td rowspan="2" class='text-center'>8</td>
												<td class='align-middle'> Membina kegiatan mahasiswa di bidang akademik dan kemahasiswaan, termasuk membimbing mahasiswa menghasilkan produk saintifik</label></td>
												<td rowspan="2" class='text-center align-middle'><b id="EditKreditMembinaKegiatan">0</b></td>
											</tr>
											<tr>
												<td><b>Jumlah Kegiatan :</b> <input style="width: 50px;" oninput="EditMembinaKegiatan()" class="form-control-sm" type="text" id="EditMembinaKegiatan"  data-inputmask='"mask": "99"' data-mask> <b>Kegiatan</b></td>
											</tr>
											<tr>
												<td rowspan="2" class='text-center'>9</td>
												<td class='align-middle'> Mengembangkan program kuliah yang mempunyai nilai kebaharuan metode atau substansi</td>
												<td rowspan="2" class='text-center align-middle'><b id="EditKreditMengembangkanProgram">0</b></td>
											</tr>
											<tr>
												<td><b>Jumlah Mata Kuliah :</b> <input style="width: 50px;" oninput="EditMengembangkanProgram()" class="form-control-sm" type="text" id="EditMengembangkanProgram"  data-inputmask='"mask": "99"' data-mask> <b>Mata Kuliah</b></td>
											</tr>
											<tr>
												<td rowspan="3" class='text-center'>10</td>
												<td class='align-middle'>Mengembangkan bahan pengajaran / bahan kuliah yang mempunyai nilai kebaharuan</td>
												<td></td>
											</tr>
											<tr>
												<td><b>Jumlah Buku ajar :</b> <input style="width: 50px;" oninput="EditBukuAjar()" class="form-control-sm" type="text" id="EditBukuAjar"  data-inputmask='"mask": "99"' data-mask> <b>Buku Ajar</b></td>
												<td class='text-center align-middle'><b id="EditKreditBukuAjar">0</b></td>
											</tr>
											<tr>
												<td><b>Jumlah Produk Diktat, Modul, dll :</b> <input style="width: 50px;" oninput="EditProdukPengajaran()" class="form-control-sm" type="text" id="EditProdukPengajaran"  data-inputmask='"mask": "99"' data-mask> <b>Produk</b></td>
												<td class='text-center align-middle'><b id="EditKreditProdukPengajaran">0</b></td>
											</tr>
											<tr>
												<td rowspan="2" class='text-center'>11</td>
												<td class='align-middle'> Menyampaikan orasi ilmiah di tingkat perguruan tinggi</td>
												<td rowspan="2" class='text-center align-middle'><b id="EditKreditOrasi">0</b></td>
											</tr>
											<tr>
												<td><b>Jumlah Orasi :</b> <input style="width: 50px;" oninput="EditOrasi()" class="form-control-sm" type="text" id="EditOrasi"  data-inputmask='"mask": "99"' data-mask> <b>Orasi</b></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="table-responsive mb-2">
									<table class="table table-bordered border-dark bg-light mb-1">
										<thead>
											<tr>
												<th class='align-middle bg-warning'>No</th>
												<th class='align-middle bg-warning'> Komponen Kegiatan</th>
												<th class='align-middle bg-warning'> Kredit</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td rowspan="9" class='text-center'>12</td>
												<td class='align-middle'>Menduduki jabatan pimpinan perguruan tinggi</td>
												<td></td>
											</tr>
											<tr>
												<td class='align-middle'><label><input type="checkbox" id="EditRektor" onchange="EditRektor()"> Rektor</label></td>
												<td class='text-center align-middle'><b id="EditKreditRektor">0</b></td>
											</tr>
											<tr>
												<td class='align-middle'><label><input type="checkbox" id="EditWakilRektor" onchange="EditWakilRektor()"> Wakil rektor / dekan</label></td>
												<td class='text-center align-middle'><b id="EditKreditWakilRektor">0</b></td>
											</tr>
											<tr>
												<td class='align-middle'><label><input type="checkbox" id="EditKetua" onchange="EditKetua()"> Ketua sekolah tinggi / pembantu dekan / asisten direktur program pasca sarjana / direktur politeknik / kepala LLDikti</label></td>
												<td class='text-center align-middle'><b id="EditKreditKetua">0</b></td>
											</tr>
											<tr>
												<td class='align-middle'><label><input type="checkbox" id="EditPembantuKetua" onchange="EditPembantuKetua()"> Pembantu ketua sekolah tinggi/pembantu direktur politeknik</label></td>
												<td class='text-center align-middle'><b id="EditKreditPembantuKetua">0</b></td>
											</tr>
											<tr>
												<td class='align-middle'><label><input type="checkbox" id="EditDirekturAkademi" onchange="EditDirekturAkademi()"> Direktur akademi</label></td>
												<td class='text-center align-middle'><b id="EditKreditDirekturAkademi">0</b></td>
											</tr>
											<tr>
												<td class='align-middle'><label><input type="checkbox" id="EditPembantuDirekturPoliteknik" onchange="EditPembantuDirekturPoliteknik()"> Pembantu direktur politeknik, ketua jurusan / bagian pada universitas / institut / sekolah tinggi</label></td>
												<td class='text-center align-middle'><b id="EditKreditPembantuDirekturPoliteknik">0</b></td>
											</tr>
											<tr>
												<td class='align-middle'><label><input type="checkbox" id="EditPembantuDirekturAkademi" onchange="EditPembantuDirekturAkademi()"> Pembantu direktur akademi / ketua jurusan / ketua prodipada universitas / politeknik / akademi, sekretaris jurusan / bagian pada universitas / institut / sekolah tinggi</label></td>
												<td class='text-center align-middle'><b id="EditKreditPembantuDirekturAkademi">0</b></td>
											</tr>
											<tr>
												<td class='align-middle'><label><input type="checkbox" id="EditSekretaris" onchange="EditSekretaris()"> Sekretaris jurusan pada politeknik / akademi dan kepala laboratorium (bengkel) universitas / institut / sekolah tinggi / politeknik / akademi</label></td>
												<td class='text-center align-middle'><b id="EditKreditSekretaris">0</b></td>
											</tr>
											<?php if ($this->session->userdata('Jabatan') == 'Lektor Kepala' || $this->session->userdata('Jabatan') == 'Profesor') { ?>
											<tr>
												<td rowspan="3" class='text-center'>13</td>
												<td class='align-middle'>Membimbing dosen yang mempunyai jabatan akademik lebih rendah</td>
												<td></td>
											</tr>
											<tr>
												<td><b>Pembimbing Pencangkokan :</b> <input style="width: 50px;" oninput="EditPembimbingPencangkokan()" class="form-control-sm" type="text" id="EditPembimbingPencangkokan"  data-inputmask='"mask": "99"' data-mask> <b>Orang</b></td>
												<td class='text-center align-middle'><b id="EditKreditPembimbingPencangkokan">0</b></td>
											</tr>
											<tr>
												<td><b>Pembimbing Reguler :</b> <input style="width: 50px;" oninput="EditPembimbingReguler()" class="form-control-sm" type="text" id="EditPembimbingReguler"  data-inputmask='"mask": "99"' data-mask> <b>Orang</b></td>
												<td class='text-center align-middle'><b id="EditKreditPembimbingReguler">0</b></td>
											</tr>
											<tr>
												<td rowspan="3" class='text-center'>14</td>
												<td class='align-middle'>Melaksanakan kegiatan detasering dan pencangkokan di luar institusi tempat bekerja</td>
												<td></td>
											</tr>
											<tr>
												<td><b>Detasering :</b> <input style="width: 50px;" oninput="EditDetasering()" class="form-control-sm" type="text" id="EditDetasering"  data-inputmask='"mask": "99"' data-mask> <b>Orang</b></td>
												<td class='text-center align-middle'><b id="EditKreditDetasering">0</b></td>
											</tr>
											<tr>
												<td><b>Pencangkokan :</b> <input style="width: 50px;" oninput="EditPencangkokan()" class="form-control-sm" type="text" id="EditPencangkokan"  data-inputmask='"mask": "99"' data-mask> <b>Orang</b></td>
												<td class='text-center align-middle'><b id="EditKreditPencangkokan">0</b></td>
											</tr>
											<?php } ?>
											<tr>
												<?php if ($this->session->userdata('Jabatan') == 'Lektor Kepala' || $this->session->userdata('Jabatan') == 'Profesor') { ?>
												<td rowspan="8" class='text-center'>15</td>
												<?php } else { ?>
													<td rowspan="8" class='text-center'>13</td>
												<?php } ?>
												<td class='align-middle'>Melaksanakan pengembangan diri untuk meningkatkan kompetensi</td>
												<td></td>
											</tr>
											<tr>
												<td><b>Lebih dari 960 jam :</b> <input style="width: 50px;" oninput="EditPengembangan960()" class="form-control-sm" type="text" id="EditPengembangan960"  data-inputmask='"mask": "99"' data-mask> <b>Kegiatan</b></td>
												<td class='text-center align-middle'><b id="EditKreditPengembangan960">0</b></td>
											</tr>
											<tr>
												<td><b>Antara 641-960 jam :</b> <input style="width: 50px;" oninput="EditPengembangan641()" class="form-control-sm" type="text" id="EditPengembangan641"  data-inputmask='"mask": "99"' data-mask> <b>Kegiatan</b></td>
												<td class='text-center align-middle'><b id="EditKreditPengembangan641">0</b></td>
											</tr>
											<tr>
												<td><b>Antara 481-640 jam :</b> <input style="width: 50px;" oninput="EditPengembangan481()" class="form-control-sm" type="text" id="EditPengembangan481"  data-inputmask='"mask": "99"' data-mask> <b>Kegiatan</b></td>
												<td class='text-center align-middle'><b id="EditKreditPengembangan481">0</b></td>
											</tr>
											<tr>
												<td><b>Antara 161-480 jam :</b> <input style="width: 50px;" oninput="EditPengembangan161()" class="form-control-sm" type="text" id="EditPengembangan161"  data-inputmask='"mask": "99"' data-mask> <b>Kegiatan</b></td>
												<td class='text-center align-middle'><b id="EditKreditPengembangan161">0</b></td>
											</tr>
											<tr>
												<td><b>Antara 81-160 jam :</b> <input style="width: 50px;" oninput="EditPengembangan81()" class="form-control-sm" type="text" id="EditPengembangan81"  data-inputmask='"mask": "99"' data-mask> <b>Kegiatan</b></td>
												<td class='text-center align-middle'><b id="EditKreditPengembangan81">0</b></td>
											</tr>
											<tr>
												<td><b>Antara 30-80 jam :</b> <input style="width: 50px;" oninput="EditPengembangan30()" class="form-control-sm" type="text" id="EditPengembangan30"  data-inputmask='"mask": "99"' data-mask> <b>Kegiatan</b></td>
												<td class='text-center align-middle'><b id="EditKreditPengembangan30">0</b></td>
											</tr>
											<tr>
												<td><b>Antara 10-30 jam :</b> <input style="width: 50px;" oninput="EditPengembangan10()" class="form-control-sm" type="text" id="EditPengembangan10"  data-inputmask='"mask": "99"' data-mask> <b>Kegiatan</b></td>
												<td class='text-center align-middle'><b id="EditKreditPengembangan10">0</b></td>
											</tr>
											<tr>
												<td colspan="2" class="text-right">
													<button type="button" id="TombolEditRencanaTotalKredit" class="btn btn-primary"><b>Total</b></button>
												</td>
												<td class="text-center align-middle"><b id="EditRencanaTotalKredit">0</b></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer justify-content-between">
					<button type="button" class="btn btn-danger" data-dismiss="modal"><b>Tutup</b></button>
					<button type="submit" class="btn btn-success" id="SimpanEditRencanaPendidikan"><b>Simpan</b></button>
				</div>
			</div>
		</div>
	</div>
</div>		               