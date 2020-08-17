<div class="container-fluid">
  <div class="row">
    <div class="col-sm-3 mt-1 mb-1">       
      <button type="button" id="TambahRencana" class="btn btn-primary" data-toggle="modal" data-target="#ModalInputRencanaPenunjang"><i class="fa fa-plus"></i> <b>Input</b></button>
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
								<button EditRencanaPenunjang="<?=$key['No']."/".$key['Jabatan']."/".$key['Jenjang']."/".$key['Semester']."/".$key['Tahun']."/".$key['KodeRencana']."/".$key['TotalKredit']?>" class="btn btn-sm btn-warning EditRencanaPenunjang"><i class="fas fa-edit"></i></button>
								<button HapusRencanaPenunjang="<?=$key['No']?>" class="btn btn-sm btn-danger HapusRencanaPenunjang"><i class="fas fa-trash"></i></button>
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
	<div class="modal fade" id="ModalInputRencanaPenunjang">
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
									<select class="custom-select" id="JenjangRencanaPenunjang">										
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
									<select class="custom-select" id="SemesterRencanaPenunjang">										
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
									<input class="form-control" type="text" id="TahunRencanaPenunjang"  data-inputmask='"mask": "9999"' data-mask value="20">
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
												<td class='align-middle'>Menjadi anggota dalam suatu Panitia / Badan pada Perguruan Tinggi </td>
												<td></td>
											</tr>
											<tr>
                        <td class='align-middle'><label><input type="checkbox" id="RencanaPNJ1" onchange="RencanaPNJ1()"> a. Sebagai Ketua / Wakil Ketua merangkap Anggota, tiap tahun</label></td>
												<td class='text-center align-middle'><b id="RencanaKreditPNJ1">0</b></td>
                      </tr>
                      <tr>
                        <td class='align-middle'><label><input type="checkbox" id="RencanaPNJ2" onchange="RencanaPNJ2()"> b. Sebagai Anggota, tiap tahun</label></td>
												<td class='text-center align-middle'><b id="RencanaKreditPNJ2">0</b></td>
											</tr>
											<tr>
												<td rowspan="7" class='text-center'>2</td>
												<td class='align-middle'>Menjadi anggota panitia / badan pada lembaga  pemerintah </td>
												<td></td>
											</tr>
											<tr>
												<td>a. Panitia Pusat, sebagai </td>
												<td></td>
											</tr>
											<tr>
                        <td class='align-middle'><label><input type="checkbox" id="RencanaPNJ3" onchange="RencanaPNJ3()"> 1) Ketua/Wakil Ketua, tiap kepanitiaan</label></td>
												<td class='text-center align-middle'><b id="RencanaKreditPNJ3">0</b></td>
                      </tr>
                      <tr>
                        <td class='align-middle'><label><input type="checkbox" id="RencanaPNJ4" onchange="RencanaPNJ4()"> 2) Anggota, tiap kepanitiaan</label></td>
												<td class='text-center align-middle'><b id="RencanaKreditPNJ4">0</b></td>
											</tr>
											<tr>
												<td>b. Panitia Daerah, sebagai </td>
												<td></td>
											</tr>
											<tr>
                        <td class='align-middle'><label><input type="checkbox" id="RencanaPNJ5" onchange="RencanaPNJ5()"> 1) Ketua/Wakil Ketua, tiap kepanitiaan</label></td>
												<td class='text-center align-middle'><b id="RencanaKreditPNJ5">0</b></td>
                      </tr>
                      <tr>
                        <td class='align-middle'><label><input type="checkbox" id="RencanaPNJ6" onchange="RencanaPNJ6()"> 2) Anggota, tiap kepanitiaan</label></td>
												<td class='text-center align-middle'><b id="RencanaKreditPNJ6">0</b></td>
											</tr>
											<tr>
												<td rowspan="9" class='text-center'>3</td>
												<td class='align-middle'>Menjadi anggota organisasi profesi </td>
												<td></td>
											</tr>
											<tr>
												<td>a. Tingkat Internasional, sebagai : </td>
												<td></td>
											</tr>
											<tr>
                        <td class='align-middle'><label><input type="checkbox" id="RencanaPNJ7" onchange="RencanaPNJ7()"> 1) Pengurus, tiap periode jabatan**</label></td>
												<td class='text-center align-middle'><b id="RencanaKreditPNJ7">0</b></td>
                      </tr>
                      <tr>
                        <td class='align-middle'><label><input type="checkbox" id="RencanaPNJ8" onchange="RencanaPNJ8()"> 2) Anggota atas permintaan, tiap periode jabatan*</label></td>
												<td class='text-center align-middle'><b id="RencanaKreditPNJ8">0</b></td>
											</tr>
											<tr>
                        <td class='align-middle'><label><input type="checkbox" id="RencanaPNJ9" onchange="RencanaPNJ9()"> 3) Anggota, tiap periode jabatan*</label></td>
												<td class='text-center align-middle'><b id="RencanaKreditPNJ9">0</b></td>
                      </tr>
											<tr>
												<td>b. Tingkat Nasional, sebagai : </td>
												<td></td>
											</tr>
											<tr>
                        <td class='align-middle'><label><input type="checkbox" id="RencanaPNJ10" onchange="RencanaPNJ10()"> 1) Pengurus, tiap periode jabatan</label></td>
												<td class='text-center align-middle'><b id="RencanaKreditPNJ10">0</b></td>
                      </tr>
                      <tr>
                        <td class='align-middle'><label><input type="checkbox" id="RencanaPNJ11" onchange="RencanaPNJ11()"> 2) Anggota atas permintaan, tiap periode jabatan*</label></td>
												<td class='text-center align-middle'><b id="RencanaKreditPNJ11">0</b></td>
											</tr>
											<tr>
                        <td class='align-middle'><label><input type="checkbox" id="RencanaPNJ12" onchange="RencanaPNJ12()"> 3) Anggota, tiap periode jabatan</label></td>
												<td class='text-center align-middle'><b id="RencanaKreditPNJ12">0</b></td>
											</tr>
											<tr>
												<td class='text-center'>4</td>
												<td class='align-middle'><label><input type="checkbox" id="RencanaPNJ13" onchange="RencanaPNJ13()"> Mewakili Perguruan Tinggi / Lembaga Pemerintah  duduk dalam Panitia Antar Lembaga, tiap kepanitiaan</label></td>
												<td class='text-center align-middle'><b id="RencanaKreditPNJ13">0</b></td>
											</tr>
											<tr>
												<td rowspan="3" class='text-center'>5</td>
												<td class='align-middle'>Menjadi anggota delegasi Nasional ke pertemuan Internasional </td>
												<td></td>
											</tr>
											<tr>
                        <td class='align-middle'><label><input type="checkbox" id="RencanaPNJ14" onchange="RencanaPNJ14()"> a. Sebagai Ketua delegasi, tiap kegiatan</label></td>
												<td class='text-center align-middle'><b id="RencanaKreditPNJ14">0</b></td>
                      </tr>
                      <tr>
                        <td class='align-middle'><label><input type="checkbox" id="RencanaPNJ15" onchange="RencanaPNJ15()"> b. Sebagai Anggota, tiap kegiatan</label></td>
												<td class='text-center align-middle'><b id="RencanaKreditPNJ15">0</b></td>
											</tr>
                    </tbody>
									</table>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="table-responsive mb-2">
									<table id="Penunjang" class="table table-bordered border-dark bg-light mb-1">
										<thead>
											<tr>
												<th class='align-middle bg-warning'>No</th>
												<th class='align-middle bg-warning'> Komponen Kegiatan</th>
												<th class='align-middle bg-warning'> Kredit</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td rowspan="7" class='text-center'>6</td>
												<td class='align-middle'>Berperan serta aktif dalam pertemuan ilmiah </td>
												<td></td>
											</tr>
											<tr>
												<td>a. Tingkat Internasional / Nasional / Regional sebagai : </td>
												<td></td>
											</tr>
											<tr>
                        <td class='align-middle'><label><input type="checkbox" id="RencanaPNJ16" onchange="RencanaPNJ16()"> 1) Ketua, tiap kegiatan</label></td>
												<td class='text-center align-middle'><b id="RencanaKreditPNJ16">0</b></td>
                      </tr>
                      <tr>
                        <td class='align-middle'><label><input type="checkbox" id="RencanaPNJ17" onchange="RencanaPNJ17()"> 2) Anggota / peserta, tiap kegiatan</label></td>
												<td class='text-center align-middle'><b id="RencanaKreditPNJ17">0</b></td>
											</tr>
											<tr>
												<td>b. Di lingkungan Perguruan Tinggi sebagai : </td>
												<td></td>
											</tr>
											<tr>
                        <td class='align-middle'><label><input type="checkbox" id="RencanaPNJ18" onchange="RencanaPNJ18()"> 1) Ketua, tiap kegiatan</label></td>
												<td class='text-center align-middle'><b id="RencanaKreditPNJ18">0</b></td>
                      </tr>
                      <tr>
                        <td class='align-middle'><label><input type="checkbox" id="RencanaPNJ19" onchange="RencanaPNJ19()"> 2) Anggota / peserta, tiap kegiatan</label></td>
												<td class='text-center align-middle'><b id="RencanaKreditPNJ19">0</b></td>
											</tr>
											<tr>
												<td rowspan="7" class='text-center'>7</td>
												<td class='align-middle'>Mendapat tanda jasa / penghargaan </td>
												<td></td>
											</tr>
											<tr>
                        <td class='align-middle'><label><input type="checkbox" id="RencanaPNJ20" onchange="RencanaPNJ20()"> a. Penghargaan / tanda jasa Satya lencana 30 tahun</label></td>
												<td class='text-center align-middle'><b id="RencanaKreditPNJ20">0</b></td>
                      </tr>
											<tr>
                        <td class='align-middle'><label><input type="checkbox" id="RencanaPNJ21" onchange="RencanaPNJ21()"> b. Penghargaan / tanda jasa Satya lencana 20 tahun</label></td>
												<td class='text-center align-middle'><b id="RencanaKreditPNJ21">0</b></td>
                      </tr>
                      <tr>
                        <td class='align-middle'><label><input type="checkbox" id="RencanaPNJ22" onchange="RencanaPNJ22()"> c. Penghargaan / tanda jasa Satya lencana 10 tahun</label></td>
												<td class='text-center align-middle'><b id="RencanaKreditPNJ22">0</b></td>
											</tr>
											<tr>
                        <td class='align-middle'><label><input type="checkbox" id="RencanaPNJ23" onchange="RencanaPNJ23()"> d. Tingkat Internasional, tiap tanda jasa / penghargaan</label></td>
												<td class='text-center align-middle'><b id="RencanaKreditPNJ23">0</b></td>
                      </tr>
											<tr>
                        <td class='align-middle'><label><input type="checkbox" id="RencanaPNJ24" onchange="RencanaPNJ24()"> e. Tingkat Nasional, tiap tanda  jasa / penghargaan</label></td>
												<td class='text-center align-middle'><b id="RencanaKreditPNJ24">0</b></td>
                      </tr>
                      <tr>
                        <td class='align-middle'><label><input type="checkbox" id="RencanaPNJ25" onchange="RencanaPNJ25()"> f. Tingkat Daerah / Lokal, tiap tanda jasa / penghargaan</label></td>
												<td class='text-center align-middle'><b id="RencanaKreditPNJ25">0</b></td>
											</tr>
											<tr>
												<td rowspan="4" class='text-center'>8</td>
												<td class='align-middle'>Menulis buku pelajaran SLTA ke bawah yang diterbitkan dan diedarkan secara nasional </td>
												<td></td>
											</tr>
											<tr>
                        <td class='align-middle'><label><input type="checkbox" id="RencanaPNJ26" onchange="RencanaPNJ26()"> a. Buku SMTA atau setingkat, tiap buku</label></td>
												<td class='text-center align-middle'><b id="RencanaKreditPNJ26">0</b></td>
                      </tr>
											<tr>
                        <td class='align-middle'><label><input type="checkbox" id="RencanaPNJ27" onchange="RencanaPNJ27()"> b. Buku SMTP atau setingkat, tiap buku</label></td>
												<td class='text-center align-middle'><b id="RencanaKreditPNJ27">0</b></td>
                      </tr>
                      <tr>
                        <td class='align-middle'><label><input type="checkbox" id="RencanaPNJ28" onchange="RencanaPNJ28()"> c. Buku SD atau setingkat, tiap buku</label></td>
												<td class='text-center align-middle'><b id="RencanaKreditPNJ28">0</b></td>
											</tr>
											<tr>
												<td rowspan="4" class='text-center'>9</td>
												<td class='align-middle'>Mempunyai prestasi di bidang olahraga / Humaniora </td>
												<td></td>
											</tr>
											<tr>
                        <td class='align-middle'><label><input type="checkbox" id="RencanaPNJ29" onchange="RencanaPNJ29()"> a. Tingkat Internasional, tiap piagam / medali</label></td>
												<td class='text-center align-middle'><b id="RencanaKreditPNJ29">0</b></td>
                      </tr>
											<tr>
                        <td class='align-middle'><label><input type="checkbox" id="RencanaPNJ30" onchange="RencanaPNJ30()"> b. Tingkat Nasional, tiap piagam / medali</label></td>
												<td class='text-center align-middle'><b id="RencanaKreditPNJ30">0</b></td>
                      </tr>
                      <tr>
                        <td class='align-middle'><label><input type="checkbox" id="RencanaPNJ31" onchange="RencanaPNJ31()"> c. Tingkat Daerah / Lokal, tiap piagam / medali</label></td>
												<td class='text-center align-middle'><b id="RencanaKreditPNJ31">0</b></td>
											</tr>
											<tr>
												<td class='text-center'>10</td>
												<td class='align-middle'><label><input type="checkbox" id="RencanaPNJ32" onchange="RencanaPNJ32()"> Keanggotaan dalam tim penilai jabatan akademik dosen (tiap semester)</label></td>
												<td class='text-center align-middle'><b id="RencanaKreditPNJ32">0</b></td>
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
					<button type="submit" class="btn btn-success" id="InputRencanaPenunjang"><b>Simpan</b></button>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="ModalEditRencanaPenunjang">
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
									<select class="custom-select" id="EditJenjangRencanaPenunjang">										
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
									<select class="custom-select" id="EditSemesterRencanaPenunjang">										
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
									<input class="form-control" type="text" id="EditTahunRencanaPenunjang"  data-inputmask='"mask": "9999"' data-mask>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<div class="table-responsive mb-2">
									<table id="EditPenunjang" class="table table-bordered border-dark bg-light mb-1">
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
												<td class='align-middle'>Menjadi anggota dalam suatu Panitia / Badan pada Perguruan Tinggi </td>
												<td></td>
											</tr>
											<tr>
                        <td class='align-middle'><label><input type="checkbox" id="EditRencanaPNJ1" onchange="EditRencanaPNJ1()"> a. Sebagai Ketua / Wakil Ketua merangkap Anggota, tiap tahun</label></td>
												<td class='text-center align-middle'><b id="EditRencanaKreditPNJ1">0</b></td>
                      </tr>
                      <tr>
                        <td class='align-middle'><label><input type="checkbox" id="EditRencanaPNJ2" onchange="EditRencanaPNJ2()"> b. Sebagai Anggota, tiap tahun</label></td>
												<td class='text-center align-middle'><b id="EditRencanaKreditPNJ2">0</b></td>
											</tr>
											<tr>
												<td rowspan="7" class='text-center'>2</td>
												<td class='align-middle'>Menjadi anggota panitia / badan pada lembaga  pemerintah </td>
												<td></td>
											</tr>
											<tr>
												<td class='text-center'>a. Panitia Pusat, sebagai </td>
												<td></td>
											</tr>
											<tr>
                        <td class='align-middle'><label><input type="checkbox" id="EditRencanaPNJ3" onchange="EditRencanaPNJ3()"> 1) Ketua/Wakil Ketua, tiap kepanitiaan</label></td>
												<td class='text-center align-middle'><b id="EditRencanaKreditPNJ3">0</b></td>
                      </tr>
                      <tr>
                        <td class='align-middle'><label><input type="checkbox" id="EditRencanaPNJ4" onchange="EditRencanaPNJ4()"> 2) Anggota, tiap kepanitiaan</label></td>
												<td class='text-center align-middle'><b id="EditRencanaKreditPNJ4">0</b></td>
											</tr>
											<tr>
												<td class='text-center'>b. Panitia Daerah, sebagai </td>
												<td></td>
											</tr>
											<tr>
                        <td class='align-middle'><label><input type="checkbox" id="EditRencanaPNJ5" onchange="EditRencanaPNJ5()"> 1) Ketua/Wakil Ketua, tiap kepanitiaan</label></td>
												<td class='text-center align-middle'><b id="EditRencanaKreditPNJ5">0</b></td>
                      </tr>
                      <tr>
                        <td class='align-middle'><label><input type="checkbox" id="EditRencanaPNJ6" onchange="EditRencanaPNJ6()"> 2) Anggota, tiap kepanitiaan</label></td>
												<td class='text-center align-middle'><b id="EditRencanaKreditPNJ6">0</b></td>
											</tr>
											<tr>
												<td rowspan="9" class='text-center'>3</td>
												<td class='align-middle'>Menjadi anggota organisasi profesi </td>
												<td></td>
											</tr>
											<tr>
												<td class='text-center'>a. Tingkat Internasional, sebagai : </td>
												<td></td>
											</tr>
											<tr>
                        <td class='align-middle'><label><input type="checkbox" id="EditRencanaPNJ7" onchange="EditRencanaPNJ7()"> 1) Pengurus, tiap periode jabatan**</label></td>
												<td class='text-center align-middle'><b id="EditRencanaKreditPNJ7">0</b></td>
                      </tr>
                      <tr>
                        <td class='align-middle'><label><input type="checkbox" id="EditRencanaPNJ8" onchange="EditRencanaPNJ8()"> 2) Anggota atas permintaan, tiap periode jabatan*</label></td>
												<td class='text-center align-middle'><b id="EditRencanaKreditPNJ8">0</b></td>
											</tr>
											<tr>
                        <td class='align-middle'><label><input type="checkbox" id="EditRencanaPNJ9" onchange="EditRencanaPNJ9()"> 3) Anggota, tiap periode jabatan*</label></td>
												<td class='text-center align-middle'><b id="EditRencanaKreditPNJ9">0</b></td>
                      </tr>
											<tr>
												<td class='text-center'>b. Tingkat Nasional, sebagai : </td>
												<td></td>
											</tr>
											<tr>
                        <td class='align-middle'><label><input type="checkbox" id="EditRencanaPNJ10" onchange="EditRencanaPNJ10()"> 1) Pengurus, tiap periode jabatan</label></td>
												<td class='text-center align-middle'><b id="EditRencanaKreditPNJ10">0</b></td>
                      </tr>
                      <tr>
                        <td class='align-middle'><label><input type="checkbox" id="EditRencanaPNJ11" onchange="EditRencanaPNJ11()"> 2) Anggota atas permintaan, tiap periode jabatan*</label></td>
												<td class='text-center align-middle'><b id="EditRencanaKreditPNJ11">0</b></td>
											</tr>
											<tr>
                        <td class='align-middle'><label><input type="checkbox" id="EditRencanaPNJ12" onchange="EditRencanaPNJ12()"> 3) Anggota, tiap periode jabatan</label></td>
												<td class='text-center align-middle'><b id="EditRencanaKreditPNJ12">0</b></td>
											</tr>
											<tr>
												<td class='text-center'>4</td>
												<td class='align-middle'><label><input type="checkbox" id="EditRencanaPNJ13" onchange="EditRencanaPNJ13()"> Mewakili Perguruan Tinggi / Lembaga Pemerintah  duduk dalam Panitia Antar Lembaga, tiap kepanitiaan</label></td>
												<td class='text-center align-middle'><b id="EditRencanaKreditPNJ13">0</b></td>
											</tr>
											<tr>
												<td rowspan="3" class='text-center'>5</td>
												<td class='align-middle'>Menjadi anggota delegasi Nasional ke pertemuan Internasional </td>
												<td></td>
											</tr>
											<tr>
                        <td class='align-middle'><label><input type="checkbox" id="EditRencanaPNJ14" onchange="EditRencanaPNJ14()"> a. Sebagai Ketua delegasi, tiap kegiatan</label></td>
												<td class='text-center align-middle'><b id="EditRencanaKreditPNJ14">0</b></td>
                      </tr>
                      <tr>
                        <td class='align-middle'><label><input type="checkbox" id="EditRencanaPNJ15" onchange="EditRencanaPNJ15()"> b. Sebagai Anggota, tiap kegiatan</label></td>
												<td class='text-center align-middle'><b id="EditRencanaKreditPNJ15">0</b></td>
											</tr>
                    </tbody>
									</table>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="table-responsive mb-2">
									<table id="Penunjang" class="table table-bordered border-dark bg-light mb-1">
										<thead>
											<tr>
												<th class='align-middle bg-warning'>No</th>
												<th class='align-middle bg-warning'> Komponen Kegiatan</th>
												<th class='align-middle bg-warning'> Kredit</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td rowspan="7" class='text-center'>6</td>
												<td class='align-middle'>Berperan serta aktif dalam pertemuan ilmiah </td>
												<td></td>
											</tr>
											<tr>
												<td class='text-center'>a. Tingkat Internasional / Nasional / EditRegional sebagai : </td>
												<td></td>
											</tr>
											<tr>
                        <td class='align-middle'><label><input type="checkbox" id="EditRencanaPNJ16" onchange="EditRencanaPNJ16()"> 1) Ketua, tiap kegiatan</label></td>
												<td class='text-center align-middle'><b id="EditRencanaKreditPNJ16">0</b></td>
                      </tr>
                      <tr>
                        <td class='align-middle'><label><input type="checkbox" id="EditRencanaPNJ17" onchange="EditRencanaPNJ17()"> 2) Anggota / peserta, tiap kegiatan</label></td>
												<td class='text-center align-middle'><b id="EditRencanaKreditPNJ17">0</b></td>
											</tr>
											<tr>
												<td class='text-center'>b. Di lingkungan Perguruan Tinggi sebagai : </td>
												<td></td>
											</tr>
											<tr>
                        <td class='align-middle'><label><input type="checkbox" id="EditRencanaPNJ18" onchange="EditRencanaPNJ18()"> 1) Ketua, tiap kegiatan</label></td>
												<td class='text-center align-middle'><b id="EditRencanaKreditPNJ18">0</b></td>
                      </tr>
                      <tr>
                        <td class='align-middle'><label><input type="checkbox" id="EditRencanaPNJ19" onchange="EditRencanaPNJ19()"> 2) Anggota / peserta, tiap kegiatan</label></td>
												<td class='text-center align-middle'><b id="EditRencanaKreditPNJ19">0</b></td>
											</tr>
											<tr>
												<td rowspan="7" class='text-center'>7</td>
												<td class='align-middle'>Mendapat tanda jasa / penghargaan </td>
												<td></td>
											</tr>
											<tr>
                        <td class='align-middle'><label><input type="checkbox" id="EditRencanaPNJ20" onchange="EditRencanaPNJ20()"> a. Penghargaan / tanda jasa Satya lencana 30 tahun</label></td>
												<td class='text-center align-middle'><b id="EditRencanaKreditPNJ20">0</b></td>
                      </tr>
											<tr>
                        <td class='align-middle'><label><input type="checkbox" id="EditRencanaPNJ21" onchange="EditRencanaPNJ21()"> b. Penghargaan / tanda jasa Satya lencana 20 tahun</label></td>
												<td class='text-center align-middle'><b id="EditRencanaKreditPNJ21">0</b></td>
                      </tr>
                      <tr>
                        <td class='align-middle'><label><input type="checkbox" id="EditRencanaPNJ22" onchange="EditRencanaPNJ22()"> c. Penghargaan / tanda jasa Satya lencana 10 tahun</label></td>
												<td class='text-center align-middle'><b id="EditRencanaKreditPNJ22">0</b></td>
											</tr>
											<tr>
                        <td class='align-middle'><label><input type="checkbox" id="EditRencanaPNJ23" onchange="EditRencanaPNJ23()"> d. Tingkat Internasional, tiap tanda jasa / penghargaan</label></td>
												<td class='text-center align-middle'><b id="EditRencanaKreditPNJ23">0</b></td>
                      </tr>
											<tr>
                        <td class='align-middle'><label><input type="checkbox" id="EditRencanaPNJ24" onchange="EditRencanaPNJ24()"> e. Tingkat Nasional, tiap tanda  jasa / penghargaan</label></td>
												<td class='text-center align-middle'><b id="EditRencanaKreditPNJ24">0</b></td>
                      </tr>
                      <tr>
                        <td class='align-middle'><label><input type="checkbox" id="EditRencanaPNJ25" onchange="EditRencanaPNJ25()"> f. Tingkat Daerah / Lokal, tiap tanda jasa / penghargaan</label></td>
												<td class='text-center align-middle'><b id="EditRencanaKreditPNJ25">0</b></td>
											</tr>
											<tr>
												<td rowspan="4" class='text-center'>8</td>
												<td class='align-middle'>Menulis buku pelajaran SLTA ke bawah yang diterbitkan dan diedarkan secara nasional </td>
												<td></td>
											</tr>
											<tr>
                        <td class='align-middle'><label><input type="checkbox" id="EditRencanaPNJ26" onchange="EditRencanaPNJ26()"> a. Buku SMTA atau setingkat, tiap buku</label></td>
												<td class='text-center align-middle'><b id="EditRencanaKreditPNJ26">0</b></td>
                      </tr>
											<tr>
                        <td class='align-middle'><label><input type="checkbox" id="EditRencanaPNJ27" onchange="EditRencanaPNJ27()"> b. Buku SMTP atau setingkat, tiap buku</label></td>
												<td class='text-center align-middle'><b id="EditRencanaKreditPNJ27">0</b></td>
                      </tr>
                      <tr>
                        <td class='align-middle'><label><input type="checkbox" id="EditRencanaPNJ28" onchange="EditRencanaPNJ28()"> c. Buku SD atau setingkat, tiap buku</label></td>
												<td class='text-center align-middle'><b id="EditRencanaKreditPNJ28">0</b></td>
											</tr>
											<tr>
												<td rowspan="4" class='text-center'>9</td>
												<td class='align-middle'>Mempunyai prestasi di bidang olahraga / Humaniora </td>
												<td></td>
											</tr>
											<tr>
                        <td class='align-middle'><label><input type="checkbox" id="EditRencanaPNJ29" onchange="EditRencanaPNJ29()"> a. Tingkat Internasional, tiap piagam / medali</label></td>
												<td class='text-center align-middle'><b id="EditRencanaKreditPNJ29">0</b></td>
                      </tr>
											<tr>
                        <td class='align-middle'><label><input type="checkbox" id="EditRencanaPNJ30" onchange="EditRencanaPNJ30()"> b. Tingkat Nasional, tiap piagam / medali</label></td>
												<td class='text-center align-middle'><b id="EditRencanaKreditPNJ30">0</b></td>
                      </tr>
                      <tr>
                        <td class='align-middle'><label><input type="checkbox" id="EditRencanaPNJ31" onchange="EditRencanaPNJ31()"> c. Tingkat Daerah / Lokal, tiap piagam / medali</label></td>
												<td class='text-center align-middle'><b id="EditRencanaKreditPNJ31">0</b></td>
											</tr>
											<tr>
												<td class='text-center'>10</td>
												<td class='align-middle'><label><input type="checkbox" id="EditRencanaPNJ32" onchange="EditRencanaPNJ32()"> Keanggotaan dalam tim penilai jabatan akademik dosen (tiap semester)</label></td>
												<td class='text-center align-middle'><b id="EditRencanaKreditPNJ32">0</b></td>
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
					<button type="submit" class="btn btn-success" id="SimpanEditRencanaPenunjang"><b>Simpan</b></button>
				</div>
			</div>
		</div>
	</div>
</div>	