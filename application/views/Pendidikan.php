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
													<select class="custom-select" id="Kegiatan">
														<?php $Id = 1; foreach ($Kegiatan as $key) { ?>
															<option value="<?='PND'.$Id++?>"><?=$key?></option>
														<?php } ?>
													</select>
												</div>
											</div>
											<div class="col-sm-3 mt-1">
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
											<div class="col-sm-3 mt-1">
												<div class="input-group mb-2">
													<div class="input-group-prepend">
														<label class="input-group-text bg-warning" for="PangkatDaftar"><b>Tahun</b></label>
													</div>
													<input type="text" class="form-control" id="TahunAjaran" placeholder="2020/2021">
												</div>
											</div>
											<div class="col-sm-3 mt-1 mb-1">
												<button type="button" id="Lihat" class="btn btn-primary"><b>Lihat</b></button>
												<button type="button" id="Tambah" class="btn btn-success"><b>Tambah</b></button>
											</div>
										</div>
									</div>
									<div class="container-fluid">
										<div class="table-responsive mb-2">
											<table id="TabelPendidikan" class="table table-bordered table-striped">
												<thead class="bg-warning">
													<tr>
														<th>No</th>
														<th>Uraian Kegiatan</th>
														<th>Tanggal</th>
														<th>Satuan</th>
														<th>Volume</th>
														<th>Kredit</th>
														<th>Jumlah Kredit</th>
														<th>Ket/Bukti</th>
														<th>Aksi</th>
													</tr>
												</thead>
												<tbody>
													<!-- <td>No</td>
													<td>Uraian Kegiatan</td>
													<td>Tanggal</td>
													<td>Satuan</td>
													<td>Volume</td>
													<td>Kredit</td>
													<td>Jumlah Kredit</td>
													<td>Ket/Bukti</td>
													<td>Aksi</td> -->
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
				$("#Tambah").click(function() {
					alert($("#Kegiatan").val())
					// var Akun = { NIP: $("#NIP").val(),
          //              Password: $("#Password").val() }
          // $.post(BaseURL+"SMD/Masuk", Akun).done(function(Respon) {
          //   Auth(Respon)
          // })
          return false
        })
			})
		</script>
</body>
</html>