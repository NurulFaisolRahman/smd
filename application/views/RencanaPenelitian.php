<div class="container-fluid">
  <div class="row">
    <div class="col-sm-3 mt-1 mb-1">       
      <button type="button" id="TambahRencana" class="btn btn-primary" data-toggle="modal" data-target="#ModalInputRencanaPenelitian"><i class="fa fa-plus"></i> <b>Input</b></button>
    </div>
  </div>
</div>
<div class="container-fluid">
	<div class="col-sm-auto">
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
							<td class="text-center align-middle"><?=($KreditRealisasi[$No-2]/$key['TotalKredit']*100).' %'?></td> 
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
								<button EditRencanaPenelitian="<?=$key['No']."/".$key['Jabatan']."/".$key['Jenjang']."/".$key['Semester']."/".$key['Tahun']."/".$key['KodeRencana']."/".$key['TotalKredit']?>" class="btn btn-sm btn-warning EditRencanaPenelitian"><i class="fas fa-edit"></i></button>
								<button HapusRencanaPenelitian="<?=$key['No']?>" class="btn btn-sm btn-danger HapusRencanaPenelitian"><i class="fas fa-trash"></i></button>
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
	</div>
	<div class="modal fade" id="ModalInputRencanaPenelitian">
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
									<select class="custom-select" id="JenjangRencanaPenelitian">										
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
									<select class="custom-select" id="SemesterRencanaPenelitian">										
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
									<input class="form-control" type="text" id="TahunRencanaPenelitian"  data-inputmask='"mask": "9999"' data-mask value="20">
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
												<td rowspan="17" class='text-center'>1</td>
												<td class='align-middle'>Menghasilkan karya ilmiah sesuai dengan bidang ilmunya : </td>
												<td></td>
											</tr>
											<tr>
												<td class='align-middle'>a) Hasil penelitian atau hasil pemikiran yang dipublikasikan dalam bentuk buku</td>
												<td></td>
											</tr>
											<tr>
                        <td class='align-middle'><label><input type="checkbox" id="RencanaPNL1" onchange="RencanaPNL1()"> 1) Buku Referensi</label></td>
												<td class='text-center align-middle'><b id="RencanaKreditPNL1">0</b></td>
											</tr>
                      <tr>
                        <td class='align-middle'><label><input type="checkbox" id="RencanaPNL2" onchange="RencanaPNL2()"> 2) Monograf</label></td>
												<td class='text-center align-middle'><b id="RencanaKreditPNL2">0</b></td>
                      </tr>
                      <tr>
												<td class='align-middle'>b) Hasil penelitian atau hasil pemikiran dalam buku yang dipublikasikan dan berisi berbagai tulisan dari berbagai penulis (book chapter) : </td>
												<td></td>
                      </tr>
                      <tr>
                        <td class='align-middle'><label><input type="checkbox" id="RencanaPNL3" onchange="RencanaPNL3()"> 1) Internasional</label></td>
												<td class='text-center align-middle'><b id="RencanaKreditPNL3">0</b></td>
                      </tr>
                      <tr>
                        <td class='align-middle'><label><input type="checkbox" id="RencanaPNL4" onchange="RencanaPNL4()"> 2) Nasional</label></td>
												<td class='text-center align-middle'><b id="RencanaKreditPNL4">0</b></td>
                      </tr>
                      <tr>
												<td class='align-middle'>c) Hasil penelitian atau hasil pemikiran yang dipublikasikan : </td>
												<td></td>
                      </tr>
                      <tr>
                        <td class='align-middle'><label><input type="checkbox" id="RencanaPNL5" onchange="RencanaPNL5()"> 1) Jurnal internasional bereputasi (terindeks pada database internasional bereputasi dan berfaktor dampak) </label></td>
												<td class='text-center align-middle'><b id="RencanaKreditPNL5">0</b></td>
                      </tr>
                      <tr>
                        <td class='align-middle'><label><input type="checkbox" id="RencanaPNL6" onchange="RencanaPNL6()"> 2) Jurnal internasional terindeks pada basis data internasional bereputasi </label></td>
												<td class='text-center align-middle'><b id="RencanaKreditPNL6">0</b></td>
                      </tr>
                      <tr>
                        <td class='align-middle'><label><input type="checkbox" id="RencanaPNL7" onchange="RencanaPNL7()"> 3) Jurnal internasionalterindekspada basis data internasional di luar kategori 2 </label></td>
												<td class='text-center align-middle'><b id="RencanaKreditPNL7">0</b></td>
                      </tr>
                      <tr>
                        <td class='align-middle'><label><input type="checkbox" id="RencanaPNL8" onchange="RencanaPNL8()"> 4) a. Jurnal Nasional terakreditasi Dikti </label></td>
												<td class='text-center align-middle'><b id="RencanaKreditPNL8">0</b></td>
                      </tr>
											<tr>
                        <td class='align-middle'><label><input type="checkbox" id="RencanaPNL9" onchange="RencanaPNL9()"> 4) b. Jurnal nasional terakreditasi Kemenristekdikti peringkat 1 dan 2 </label></td>
												<td class='text-center align-middle'><b id="RencanaKreditPNL9">0</b></td>
                      </tr>
											<tr>
                        <td class='align-middle'><label><input type="checkbox" id="RencanaPNL10" onchange="RencanaPNL10()"> 5) a. Jurnal Nasional berbahasa Inggris atau bahasa resmi (PBB)  terindeks pada basis datayang diakui Kemenristekdikti, contohnya : CABI atau Index Copernicus International (ICI). b. Jurnal nasional terakreditasi peringkat 3 dan 4 </label></td>
												<td class='text-center align-middle'><b id="RencanaKreditPNL10">0</b></td>
                      </tr>
											<tr>
                        <td class='align-middle'><label><input type="checkbox" id="RencanaPNL11" onchange="RencanaPNL11()"> 5) b. Jurnal Nasional berbahasa Indonesia terindeks pada basis data yang diakui Kemenristekdikti, contohnya : akreditasi peringkat 5 dan 6 </label></td>
												<td class='text-center align-middle'><b id="RencanaKreditPNL11">0</b></td>
											</tr>
											<tr>
                        <td class='align-middle'><label><input type="checkbox" id="RencanaPNL12" onchange="RencanaPNL12()"> 6) Jurnal Nasional </label></td>
												<td class='text-center align-middle'><b id="RencanaKreditPNL12">0</b></td>
											</tr>
											<tr>
                        <td class='align-middle'><label><input type="checkbox" id="RencanaPNL13" onchange="RencanaPNL13()"> 7) Jurnal ilmiah yang ditulis dalam Bahasa Resmi PBB namun tidak memenuhi syarat-syarat sebagai jurnal ilmiah internasional </label></td>
												<td class='text-center align-middle'><b id="RencanaKreditPNL13">0</b></td>
											</tr>
											<tr>
												<td rowspan="4" class='text-center'>7</td>
												<td class='align-middle'>Membuat rancangan dan karya teknologi yang tidak dipatenkan; rancangan dan karya seni monumental yang tidak terdaftar di HaKI tetapi telah dipresentasikan pada forum yang teragenda : </td>
												<td></td>
											</tr>
											<tr>
                        <td class='align-middle'><label><input type="checkbox" id="RencanaPNL14" onchange="RencanaPNL14()"> a). Tingkat Internasional </label></td>
												<td class='text-center align-middle'><b id="RencanaKreditPNL14">0</b></td>
											</tr>
											<tr>
                        <td class='align-middle'><label><input type="checkbox" id="RencanaPNL15" onchange="RencanaPNL15()"> b). Tingkat Nasional </label></td>
												<td class='text-center align-middle'><b id="RencanaKreditPNL15">0</b></td>
											</tr>
											<tr>
                        <td class='align-middle'><label><input type="checkbox" id="RencanaPNL16" onchange="RencanaPNL16()"> c). Tingkat Lokal </label></td>
												<td class='text-center align-middle'><b id="RencanaKreditPNL16">0</b></td>
											</tr>
											<tr>
												<td class='text-center'>8</td>
												<td class='align-middle'><label><input type="checkbox" id="RencanaPNL17" onchange="RencanaPNL17()"> Membuat rancangan dan karya seni yang tidak terdaftar HaKI *) </label></td>
												<td class='text-center align-middle'><b id="RencanaKreditPNL17">0</b></td>
											</tr>
                    </tbody>
									</table>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="table-responsive mb-2">
									<table id="PENELITIAN" class="table table-bordered border-dark bg-light mb-1">
										<thead>
											<tr>
												<th class='align-middle bg-warning'>No</th>
												<th class='align-middle bg-warning'> Komponen Kegiatan</th>
												<th class='align-middle bg-warning'> Kredit</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td rowspan="16" class='text-center'>2</td>
												<td class='align-middle'>Hasil penelitian atau hasil pemikiran yang didesiminasikan </td>
												<td></td>
											</tr>
											<tr>
												<td class='align-middle'> a. Dipresentasikan secara oral dan dimuat dalam prosiding yang dipublikasikan (ber ISSN/ISBN) : </td>
												<td></td>
											</tr>
											<tr>
                        <td class='align-middle'><label><input type="checkbox" id="RencanaPNL18" onchange="RencanaPNL18()"> 1). Internasional terindeks pada Scimagojr dan Scopus </label></td>
												<td class='text-center align-middle'><b id="RencanaKreditPNL18">0</b></td>
											</tr>
											<tr>
                        <td class='align-middle'><label><input type="checkbox" id="RencanaPNL19" onchange="RencanaPNL19()"> 2). Internasional terindeks pada SCOPUS, IEEE Explore, SPIE </label></td>
												<td class='text-center align-middle'><b id="RencanaKreditPNL19">0</b></td>
											</tr>
											<tr>
                        <td class='align-middle'><label><input type="checkbox" id="RencanaPNL20" onchange="RencanaPNL20()"> 3). Internasional </label></td>
												<td class='text-center align-middle'><b id="RencanaKreditPNL20">0</b></td>
											</tr>
											<tr>
                        <td class='align-middle'><label><input type="checkbox" id="RencanaPNL21" onchange="RencanaPNL21()"> 4). Nasional </label></td>
												<td class='text-center align-middle'><b id="RencanaKreditPNL21">0</b></td>
											</tr>
											<tr>
												<td class='align-middle'> b. Disajikan dalam bentuk poster dan dimuat dalam prosiding yang dipublikasikan : </td>
												<td></td>
											</tr>
											<tr>
                        <td class='align-middle'><label><input type="checkbox" id="RencanaPNL22" onchange="RencanaPNL22()"> 1). Internasional </label></td>
												<td class='text-center align-middle'><b id="RencanaKreditPNL22">0</b></td>
											</tr>
											<tr>
                        <td class='align-middle'><label><input type="checkbox" id="RencanaPNL23" onchange="RencanaPNL23()"> 2). Nasional </label></td>
												<td class='text-center align-middle'><b id="RencanaKreditPNL23">0</b></td>
											</tr>
											<tr>
												<td class='align-middle'> c. Disajikan dalam seminar / simposium / lokakarya, tetapi tidak dimuat dalam prosiding yang dipublikasikan : </td>
												<td></td>
											</tr>
											<tr>
                        <td class='align-middle'><label><input type="checkbox" id="RencanaPNL24" onchange="RencanaPNL24()"> 1). Internasional </label></td>
												<td class='text-center align-middle'><b id="RencanaKreditPNL24">0</b></td>
											</tr>
											<tr>
                        <td class='align-middle'><label><input type="checkbox" id="RencanaPNL25" onchange="RencanaPNL25()"> 2). Nasional </label></td>
												<td class='text-center align-middle'><b id="RencanaKreditPNL25">0</b></td>
											</tr>
											<tr>
												<td class='align-middle'> d. Hasil penelitian / pemikiran yang tidak disajikan dalam seminar / simposium / lokakarya, tetapi dimuat dalam prosiding : </td>
												<td></td>
											</tr>
											<tr>
                        <td class='align-middle'><label><input type="checkbox" id="RencanaPNL26" onchange="RencanaPNL26()"> 1). Internasional </label></td>
												<td class='text-center align-middle'><b id="RencanaKreditPNL26">0</b></td>
											</tr>
											<tr>
                        <td class='align-middle'><label><input type="checkbox" id="RencanaPNL27" onchange="RencanaPNL27()"> 2). Nasional </label></td>
												<td class='text-center align-middle'><b id="RencanaKreditPNL27">0</b></td>
											</tr>
											<tr>
                        <td class='align-middle'><label><input type="checkbox" id="RencanaPNL28" onchange="RencanaPNL28()"> e. Hasil penelitian / pemikiran yang disajikan dalam koran / majalah populer / umum </label></td>
												<td class='text-center align-middle'><b id="RencanaKreditPNL28">0</b></td>
											</tr>
											<tr>
												<td class='text-center'>3</td>
												<td class='align-middle'><label><input type="checkbox" id="RencanaPNL29" onchange="RencanaPNL29()"> Hasil penelitian atau pemikiran atau kerjasama industri yang tidak dipublikasikan (tersimpan dalam perpustakaan) yang dilakukan secara melembaga </label></td>
												<td class='text-center align-middle'><b id="RencanaKreditPNL29">0</b></td>
											</tr>
											<tr>
												<td class='text-center'>4</td>
												<td class='align-middle'><label><input type="checkbox" id="RencanaPNL30" onchange="RencanaPNL30()"> Menerjemahkan / menyadur buku ilmiah yang diterbitkan (ber ISBN) </label></td>
												<td class='text-center align-middle'><b id="RencanaKreditPNL30">0</b></td>
											</tr>
											<tr>
												<td class='text-center'>5</td>
												<td class='align-middle'><label><input type="checkbox" id="RencanaPNL31" onchange="RencanaPNL31()"> Mengedit / menyunting karya ilmiah dalam bentuk buku yang diterbitkan (ber ISBN) </label></td>
												<td class='text-center align-middle'><b id="RencanaKreditPNL31">0</b></td>
											</tr>
											<tr>
												<td rowspan="7" class='text-center'>6</td>
												<td class='align-middle'>Membuat rancangan dan karya teknologi yang dipatenkan atau seni yang terdaftar di HaKI secara nasional atau internasional </td>
												<td></td>
											</tr>
											<tr>
                        <td class='align-middle'><label><input type="checkbox" id="RencanaPNL32" onchange="RencanaPNL32()"> a) Internasionalyang sudah diimplementasikan di industri (paling sedikit diakui oleh 4 Negara) </label></td>
												<td class='text-center align-middle'><b id="RencanaKreditPNL32">0</b></td>
											</tr>
											<tr>
                        <td class='align-middle'><label><input type="checkbox" id="RencanaPNL33" onchange="RencanaPNL33()"> b) Internasional (paling sedikit diakui oleh 4 Negara) </label></td>
												<td class='text-center align-middle'><b id="RencanaKreditPNL33">0</b></td>
											</tr>
											<tr>
                        <td class='align-middle'><label><input type="checkbox" id="RencanaPNL34" onchange="RencanaPNL34()"> c) Nasional (yang sudah diimplementasikan di industri) </label></td>
												<td class='text-center align-middle'><b id="RencanaKreditPNL34">0</b></td>
											</tr>
											<tr>
                        <td class='align-middle'><label><input type="checkbox" id="RencanaPNL35" onchange="RencanaPNL35()"> d) Nasional </label></td>
												<td class='text-center align-middle'><b id="RencanaKreditPNL35">0</b></td>
											</tr>
											<tr>
                        <td class='align-middle'><label><input type="checkbox" id="RencanaPNL36" onchange="RencanaPNL36()"> e) Nasional, dalam bentuk paten sederhana yang telah memiliki sertifikat dari Direktorat Jenderal Kekayaan Intelektual, Kemenkumham ; </label></td>
												<td class='text-center align-middle'><b id="RencanaKreditPNL36">0</b></td>
											</tr>
											<tr>
                        <td class='align-middle'><label><input type="checkbox" id="RencanaPNL37" onchange="RencanaPNL37()"> f) Karya ciptaan, desain industri, indikasi geografisyang telah memiliki sertifikat dari Direktorat Jenderal Kekayaan Intelektual, Kemenkumham; Karya cipta berupa buku yang telah mendapatkan sertifikat karya cipta dari Direktorat Jenderal Kekayaan Intelektual, Kemenkumham maka karya cipta tersebut hanya dapat diajukan salah satu sebagai bukti melaksanakan penelitian atau pendidikan. </label></td>
												<td class='text-center align-middle'><b id="RencanaKreditPNL37">0</b></td>
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
					<button type="submit" class="btn btn-success" id="InputRencanaPenelitian"><b>Simpan</b></button>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="ModalEditRencanaPenelitian">
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
									<select class="custom-select" id="EditJenjangRencanaPenelitian">										
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
									<select class="custom-select" id="EditSemesterRencanaPenelitian">										
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
									<input class="form-control" type="text" id="EditTahunRencanaPenelitian"  data-inputmask='"mask": "9999"' data-mask>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<div class="table-responsive mb-2">
									<table id="EditPENELITIAN" class="table table-bordered border-dark bg-light mb-1">
										<thead>
											<tr>
												<th class='align-middle bg-warning'>No</th>
												<th class='align-middle bg-warning'> Komponen Kegiatan</th>
												<th class='align-middle bg-warning'> Kredit</th>
											</tr>
										</thead>
										<tbody>
										<tr>
												<td rowspan="17" class='text-center'>1</td>
												<td class='align-middle'>Menghasilkan karya ilmiah sesuai dengan bidang ilmunya : </td>
												<td></td>
											</tr>
											<tr>
												<td class='align-middle'>a) Hasil penelitian atau hasil pemikiran yang dipublikasikan dalam bentuk buku</td>
												<td></td>
											</tr>
											<tr>
                        <td class='align-middle'><label><input type="checkbox" id="EditRencanaPNL1" onchange="EditRencanaPNL1()"> 1) Buku Referensi</label></td>
												<td class='text-center align-middle'><b id="EditRencanaKreditPNL1">0</b></td>
											</tr>
                      <tr>
                        <td class='align-middle'><label><input type="checkbox" id="EditRencanaPNL2" onchange="EditRencanaPNL2()"> 2) Monograf</label></td>
												<td class='text-center align-middle'><b id="EditRencanaKreditPNL2">0</b></td>
                      </tr>
                      <tr>
												<td class='align-middle'>b) Hasil penelitian atau hasil pemikiran dalam buku yang dipublikasikan dan berisi berbagai tulisan dari berbagai penulis (book chapter) : </td>
												<td></td>
                      </tr>
                      <tr>
                        <td class='align-middle'><label><input type="checkbox" id="EditRencanaPNL3" onchange="EditRencanaPNL3()"> 1) Internasional</label></td>
												<td class='text-center align-middle'><b id="EditRencanaKreditPNL3">0</b></td>
                      </tr>
                      <tr>
                        <td class='align-middle'><label><input type="checkbox" id="EditRencanaPNL4" onchange="EditRencanaPNL4()"> 2) Nasional</label></td>
												<td class='text-center align-middle'><b id="EditRencanaKreditPNL4">0</b></td>
                      </tr>
                      <tr>
												<td class='align-middle'>c) Hasil penelitian atau hasil pemikiran yang dipublikasikan : </td>
												<td></td>
                      </tr>
                      <tr>
                        <td class='align-middle'><label><input type="checkbox" id="EditRencanaPNL5" onchange="EditRencanaPNL5()"> 1) Jurnal internasional bereputasi (terindeks pada database internasional bereputasi dan berfaktor dampak) </label></td>
												<td class='text-center align-middle'><b id="EditRencanaKreditPNL5">0</b></td>
                      </tr>
                      <tr>
                        <td class='align-middle'><label><input type="checkbox" id="EditRencanaPNL6" onchange="EditRencanaPNL6()"> 2) Jurnal internasional terindeks pada basis data internasional bereputasi </label></td>
												<td class='text-center align-middle'><b id="EditRencanaKreditPNL6">0</b></td>
                      </tr>
                      <tr>
                        <td class='align-middle'><label><input type="checkbox" id="EditRencanaPNL7" onchange="EditRencanaPNL7()"> 3) Jurnal internasionalterindekspada basis data internasional di luar kategori 2 </label></td>
												<td class='text-center align-middle'><b id="EditRencanaKreditPNL7">0</b></td>
                      </tr>
                      <tr>
                        <td class='align-middle'><label><input type="checkbox" id="EditRencanaPNL8" onchange="EditRencanaPNL8()"> 4) a. Jurnal Nasional terakreditasi Dikti </label></td>
												<td class='text-center align-middle'><b id="EditRencanaKreditPNL8">0</b></td>
                      </tr>
											<tr>
                        <td class='align-middle'><label><input type="checkbox" id="EditRencanaPNL9" onchange="EditRencanaPNL9()"> 4) b. Jurnal nasional terakreditasi Kemenristekdikti peringkat 1 dan 2 </label></td>
												<td class='text-center align-middle'><b id="EditRencanaKreditPNL9">0</b></td>
                      </tr>
											<tr>
                        <td class='align-middle'><label><input type="checkbox" id="EditRencanaPNL10" onchange="EditRencanaPNL10()"> 5) a. Jurnal Nasional berbahasa Inggris atau bahasa resmi (PBB)  terindeks pada basis datayang diakui Kemenristekdikti, contohnya : CABI atau Index Copernicus International (ICI). b. Jurnal nasional terakreditasi peringkat 3 dan 4 </label></td>
												<td class='text-center align-middle'><b id="EditRencanaKreditPNL10">0</b></td>
                      </tr>
											<tr>
                        <td class='align-middle'><label><input type="checkbox" id="EditRencanaPNL11" onchange="EditRencanaPNL11()"> 5) b. Jurnal Nasional berbahasa Indonesia terindeks pada basis data yang diakui Kemenristekdikti, contohnya : akreditasi peringkat 5 dan 6 </label></td>
												<td class='text-center align-middle'><b id="EditRencanaKreditPNL11">0</b></td>
											</tr>
											<tr>
                        <td class='align-middle'><label><input type="checkbox" id="EditRencanaPNL12" onchange="EditRencanaPNL12()"> 6) Jurnal Nasional </label></td>
												<td class='text-center align-middle'><b id="EditRencanaKreditPNL12">0</b></td>
											</tr>
											<tr>
                        <td class='align-middle'><label><input type="checkbox" id="EditRencanaPNL13" onchange="EditRencanaPNL13()"> 7) Jurnal ilmiah yang ditulis dalam Bahasa Resmi PBB namun tidak memenuhi syarat-syarat sebagai jurnal ilmiah internasional </label></td>
												<td class='text-center align-middle'><b id="EditRencanaKreditPNL13">0</b></td>
											</tr>
											<tr>
												<td rowspan="4" class='text-center'>7</td>
												<td class='align-middle'>Membuat rancangan dan karya teknologi yang tidak dipatenkan; rancangan dan karya seni monumental yang tidak terdaftar di HaKI tetapi telah dipresentasikan pada forum yang teragenda : </td>
												<td></td>
											</tr>
											<tr>
                        <td class='align-middle'><label><input type="checkbox" id="EditRencanaPNL14" onchange="EditRencanaPNL14()"> a). Tingkat Internasional </label></td>
												<td class='text-center align-middle'><b id="EditRencanaKreditPNL14">0</b></td>
											</tr>
											<tr>
                        <td class='align-middle'><label><input type="checkbox" id="EditRencanaPNL15" onchange="EditRencanaPNL15()"> b). Tingkat Nasional </label></td>
												<td class='text-center align-middle'><b id="EditRencanaKreditPNL15">0</b></td>
											</tr>
											<tr>
                        <td class='align-middle'><label><input type="checkbox" id="EditRencanaPNL16" onchange="EditRencanaPNL16()"> c). Tingkat Lokal </label></td>
												<td class='text-center align-middle'><b id="EditRencanaKreditPNL16">0</b></td>
											</tr>
											<tr>
												<td class='text-center'>8</td>
												<td class='align-middle'><label><input type="checkbox" id="EditRencanaPNL17" onchange="EditRencanaPNL17()"> Membuat rancangan dan karya seni yang tidak terdaftar HaKI *) </label></td>
												<td class='text-center align-middle'><b id="EditRencanaKreditPNL17">0</b></td>
											</tr>
                    </tbody>
									</table>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="table-responsive mb-2">
									<table id="PENELITIAN" class="table table-bordered border-dark bg-light mb-1">
										<thead>
											<tr>
												<th class='align-middle bg-warning'>No</th>
												<th class='align-middle bg-warning'> Komponen Kegiatan</th>
												<th class='align-middle bg-warning'> Kredit</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td rowspan="16" class='text-center'>2</td>
												<td class='align-middle'>Hasil penelitian atau hasil pemikiran yang didesiminasikan </td>
												<td></td>
											</tr>
											<tr>
												<td class='align-middle'> a. Dipresentasikan secara oral dan dimuat dalam prosiding yang dipublikasikan (ber ISSN/ISBN) : </td>
												<td></td>
											</tr>
											<tr>
                        <td class='align-middle'><label><input type="checkbox" id="EditRencanaPNL18" onchange="EditRencanaPNL18()"> 1). Internasional terindeks pada Scimagojr dan Scopus </label></td>
												<td class='text-center align-middle'><b id="EditRencanaKreditPNL18">0</b></td>
											</tr>
											<tr>
                        <td class='align-middle'><label><input type="checkbox" id="EditRencanaPNL19" onchange="EditRencanaPNL19()"> 2). Internasional terindeks pada SCOPUS, IEEE Explore, SPIE </label></td>
												<td class='text-center align-middle'><b id="EditRencanaKreditPNL19">0</b></td>
											</tr>
											<tr>
                        <td class='align-middle'><label><input type="checkbox" id="EditRencanaPNL20" onchange="EditRencanaPNL20()"> 3). Internasional </label></td>
												<td class='text-center align-middle'><b id="EditRencanaKreditPNL20">0</b></td>
											</tr>
											<tr>
                        <td class='align-middle'><label><input type="checkbox" id="EditRencanaPNL21" onchange="EditRencanaPNL21()"> 4). Nasional </label></td>
												<td class='text-center align-middle'><b id="EditRencanaKreditPNL21">0</b></td>
											</tr>
											<tr>
												<td class='align-middle'> b. Disajikan dalam bentuk poster dan dimuat dalam prosiding yang dipublikasikan : </td>
												<td></td>
											</tr>
											<tr>
                        <td class='align-middle'><label><input type="checkbox" id="EditRencanaPNL22" onchange="EditRencanaPNL22()"> 1). Internasional </label></td>
												<td class='text-center align-middle'><b id="EditRencanaKreditPNL22">0</b></td>
											</tr>
											<tr>
                        <td class='align-middle'><label><input type="checkbox" id="EditRencanaPNL23" onchange="EditRencanaPNL23()"> 2). Nasional </label></td>
												<td class='text-center align-middle'><b id="EditRencanaKreditPNL23">0</b></td>
											</tr>
											<tr>
												<td class='align-middle'> c. Disajikan dalam seminar / simposium / lokakarya, tetapi tidak dimuat dalam prosiding yang dipublikasikan : </td>
												<td></td>
											</tr>
											<tr>
                        <td class='align-middle'><label><input type="checkbox" id="EditRencanaPNL24" onchange="EditRencanaPNL24()"> 1). Internasional </label></td>
												<td class='text-center align-middle'><b id="EditRencanaKreditPNL24">0</b></td>
											</tr>
											<tr>
                        <td class='align-middle'><label><input type="checkbox" id="EditRencanaPNL25" onchange="EditRencanaPNL25()"> 2). Nasional </label></td>
												<td class='text-center align-middle'><b id="EditRencanaKreditPNL25">0</b></td>
											</tr>
											<tr>
												<td class='align-middle'> d. Hasil penelitian / pemikiran yang tidak disajikan dalam seminar / simposium / lokakarya, tetapi dimuat dalam prosiding : </td>
												<td></td>
											</tr>
											<tr>
                        <td class='align-middle'><label><input type="checkbox" id="EditRencanaPNL26" onchange="EditRencanaPNL26()"> 1). Internasional </label></td>
												<td class='text-center align-middle'><b id="EditRencanaKreditPNL26">0</b></td>
											</tr>
											<tr>
                        <td class='align-middle'><label><input type="checkbox" id="EditRencanaPNL27" onchange="EditRencanaPNL27()"> 2). Nasional </label></td>
												<td class='text-center align-middle'><b id="EditRencanaKreditPNL27">0</b></td>
											</tr>
											<tr>
                        <td class='align-middle'><label><input type="checkbox" id="EditRencanaPNL28" onchange="EditRencanaPNL28()"> e. Hasil penelitian / pemikiran yang disajikan dalam koran / majalah populer / umum </label></td>
												<td class='text-center align-middle'><b id="EditRencanaKreditPNL28">0</b></td>
											</tr>
											<tr>
												<td class='text-center'>3</td>
												<td class='align-middle'><label><input type="checkbox" id="EditRencanaPNL29" onchange="EditRencanaPNL29()"> Hasil penelitian atau pemikiran atau kerjasama industri yang tidak dipublikasikan (tersimpan dalam perpustakaan) yang dilakukan secara melembaga </label></td>
												<td class='text-center align-middle'><b id="EditRencanaKreditPNL29">0</b></td>
											</tr>
											<tr>
												<td class='text-center'>4</td>
												<td class='align-middle'><label><input type="checkbox" id="EditRencanaPNL30" onchange="EditRencanaPNL30()"> Menerjemahkan / menyadur buku ilmiah yang diterbitkan (ber ISBN) </label></td>
												<td class='text-center align-middle'><b id="EditRencanaKreditPNL30">0</b></td>
											</tr>
											<tr>
												<td class='text-center'>5</td>
												<td class='align-middle'><label><input type="checkbox" id="EditRencanaPNL31" onchange="EditRencanaPNL31()"> Mengedit / menyunting karya ilmiah dalam bentuk buku yang diterbitkan (ber ISBN) </label></td>
												<td class='text-center align-middle'><b id="EditRencanaKreditPNL31">0</b></td>
											</tr>
											<tr>
												<td rowspan="7" class='text-center'>6</td>
												<td class='align-middle'>Membuat rancangan dan karya teknologi yang dipatenkan atau seni yang terdaftar di HaKI secara nasional atau internasional </td>
												<td></td>
											</tr>
											<tr>
                        <td class='align-middle'><label><input type="checkbox" id="EditRencanaPNL32" onchange="EditRencanaPNL32()"> a) Internasionalyang sudah diimplementasikan di industri (paling sedikit diakui oleh 4 Negara) </label></td>
												<td class='text-center align-middle'><b id="EditRencanaKreditPNL32">0</b></td>
											</tr>
											<tr>
                        <td class='align-middle'><label><input type="checkbox" id="EditRencanaPNL33" onchange="EditRencanaPNL33()"> b) Internasional (paling sedikit diakui oleh 4 Negara) </label></td>
												<td class='text-center align-middle'><b id="EditRencanaKreditPNL33">0</b></td>
											</tr>
											<tr>
                        <td class='align-middle'><label><input type="checkbox" id="EditRencanaPNL34" onchange="EditRencanaPNL34()"> c) Nasional (yang sudah diimplementasikan di industri) </label></td>
												<td class='text-center align-middle'><b id="EditRencanaKreditPNL34">0</b></td>
											</tr>
											<tr>
                        <td class='align-middle'><label><input type="checkbox" id="EditRencanaPNL35" onchange="EditRencanaPNL35()"> d) Nasional </label></td>
												<td class='text-center align-middle'><b id="EditRencanaKreditPNL35">0</b></td>
											</tr>
											<tr>
                        <td class='align-middle'><label><input type="checkbox" id="EditRencanaPNL36" onchange="EditRencanaPNL36()"> e) Nasional, dalam bentuk paten sederhana yang telah memiliki sertifikat dari Direktorat Jenderal Kekayaan Intelektual, Kemenkumham ; </label></td>
												<td class='text-center align-middle'><b id="EditRencanaKreditPNL36">0</b></td>
											</tr>
											<tr>
                        <td class='align-middle'><label><input type="checkbox" id="EditRencanaPNL37" onchange="EditRencanaPNL37()"> f) Karya ciptaan, desain industri, indikasi geografisyang telah memiliki sertifikat dari Direktorat Jenderal Kekayaan Intelektual, Kemenkumham; Karya cipta berupa buku yang telah mendapatkan sertifikat karya cipta dari Direktorat Jenderal Kekayaan Intelektual, Kemenkumham maka karya cipta tersebut hanya dapat diajukan salah satu sebagai bukti melaksanakan penelitian atau pendidikan. </label></td>
												<td class='text-center align-middle'><b id="EditRencanaKreditPNL37">0</b></td>
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
					<button type="submit" class="btn btn-success" id="SimpanEditRencanaPenelitian"><b>Simpan</b></button>
				</div>
			</div>
		</div>
	</div>
</div>	