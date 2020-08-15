<div class="content-wrapper">
      <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-12 mt-2">
                <ul class="nav nav-pills mb-2 border border-warning rounded bg-light" id="pills-tab" role="tablist">
                  <li class="nav-item">
                      <a class="nav-link active" id="pills-MonitoringPenunjang-tab" data-toggle="pill" href="#pills-MonitoringPenunjang" role="tab" aria-controls="pills-MonitoringPenunjang" aria-selected="true"><i class="nav-icon fas fa-users"></i><b> Monitoring Penunjang</b></a>
                  </li>
                </ul>
                <div class="tab-content border border-warning rounded bg-light" id="pills-tabContent">
                  <div class="tab-pane fade show active" id="pills-MonitoringPenunjang" role="tabpanel" aria-labelledby="pills-MonitoringPenunjang-tab">
                    <div class="container-fluid">
                      <div class="row align-items-center">
                        <div class="col-sm-12 my-2 ">     
                          <div class="table-responsive mb-2">
                            <table id="TabelMonitoringDosen" class="table table-bordered table-striped">
                              <thead class="bg-warning">
                                <tr>
                                  <th class="align-middle">No</th>
                                  <th class="align-middle">NIP</th>
                                  <th class="align-middle">Nama</th>
                                  <th class="align-middle">Homebase</th>
                                  <th class="align-middle">Semester</th>
                                  <th class="align-middle">Tahun</th>
                                  <th class="align-middle">Realisasi</th> 
                                  <th class="align-middle">Rencana</th>
                                  <th class="align-middle">Status</th>
                                  <th class="align-middle">Target</th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php $No = 1; foreach ($Rencana as $key) { ?>
                                  <tr>	
                                    <td class="text-center align-middle"><?=$No++?></td>
                                    <td class="text-center align-middle"><?=$key['NIP']?></td>
                                    <td class="text-center align-middle"><?=$Dosen[0]['Nama']?></td>
                                    <td class="text-center align-middle"><?=$key['Jenjang']?></td>
                                    <td class="text-center align-middle"><?=$key['Semester']?></td>
                                    <td class="text-center align-middle"><?=$key['Tahun']?></td>
                                    <td class="text-center align-middle"><?=$Realisasi[$No-2]?></td>
                                    <td class="text-center align-middle"><?=$key['TotalKredit']?></td>
                                    <td class="text-center align-middle">
                                      <?php if ($key['TotalKredit'] == $key['TargetKajur']) { ?>
                                        <h4 class="text-primary"><b>=</b></h4>
                                        <?php } else if ($key['TotalKredit'] > $key['TargetKajur']) { ?>
                                          <h4 class="text-success"><b>></b></h4>
                                        <?php } else if ($key['TotalKredit'] < $key['TargetKajur']) { ?>
                                          <h4 class="text-danger"><b><</b></h4>
                                        <?php } ?>
                                    </td>
                                    <td class="text-center align-middle"><?=$key['TargetKajur']?>&nbsp;<button EditRencanaPenunjang="<?=$key['No']."/".$key['Jabatan']."/".$key['Jenjang']."/".$key['Semester']."/".$key['Tahun']."/".$key['KodeRencana']."/".$key['TotalKredit']."/".$key['TargetKajur']?>" class="btn btn-sm btn-success EditRencanaPenunjang"><i class="fas fa-edit"></i></button></td>
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
            </div>
          </div>
        </section>
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
                    <select class="custom-select" id="EditJenjangRencanaPenunjang" disabled>										
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
                    <select class="custom-select" id="EditSemesterRencanaPenunjang" disabled>										
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
                    <input class="form-control" type="text" id="EditTahunRencanaPenunjang"  data-inputmask='"mask": "9999"' data-mask disabled>
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
                          <td class='align-middle'><label><input disabled type="checkbox" id="EditRencanaPNJ1" onchange="EditRencanaPNJ1()"> a. Sebagai Ketua / Wakil Ketua merangkap Anggota, tiap tahun</label></td>
                          <td class='text-center align-middle'><b id="EditRencanaKreditPNJ1">0</b></td>
                        </tr>
                        <tr>
                          <td class='align-middle'><label><input disabled type="checkbox" id="EditRencanaPNJ2" onchange="EditRencanaPNJ2()"> b. Sebagai Anggota, tiap tahun</label></td>
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
                          <td class='align-middle'><label><input disabled type="checkbox" id="EditRencanaPNJ3" onchange="EditRencanaPNJ3()"> 1) Ketua/Wakil Ketua, tiap kepanitiaan</label></td>
                          <td class='text-center align-middle'><b id="EditRencanaKreditPNJ3">0</b></td>
                        </tr>
                        <tr>
                          <td class='align-middle'><label><input disabled type="checkbox" id="EditRencanaPNJ4" onchange="EditRencanaPNJ4()"> 2) Anggota, tiap kepanitiaan</label></td>
                          <td class='text-center align-middle'><b id="EditRencanaKreditPNJ4">0</b></td>
                        </tr>
                        <tr>
                          <td class='text-center'>b. Panitia Daerah, sebagai </td>
                          <td></td>
                        </tr>
                        <tr>
                          <td class='align-middle'><label><input disabled type="checkbox" id="EditRencanaPNJ5" onchange="EditRencanaPNJ5()"> 1) Ketua/Wakil Ketua, tiap kepanitiaan</label></td>
                          <td class='text-center align-middle'><b id="EditRencanaKreditPNJ5">0</b></td>
                        </tr>
                        <tr>
                          <td class='align-middle'><label><input disabled type="checkbox" id="EditRencanaPNJ6" onchange="EditRencanaPNJ6()"> 2) Anggota, tiap kepanitiaan</label></td>
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
                          <td class='align-middle'><label><input disabled type="checkbox" id="EditRencanaPNJ7" onchange="EditRencanaPNJ7()"> 1) Pengurus, tiap periode jabatan**</label></td>
                          <td class='text-center align-middle'><b id="EditRencanaKreditPNJ7">0</b></td>
                        </tr>
                        <tr>
                          <td class='align-middle'><label><input disabled type="checkbox" id="EditRencanaPNJ8" onchange="EditRencanaPNJ8()"> 2) Anggota atas permintaan, tiap periode jabatan*</label></td>
                          <td class='text-center align-middle'><b id="EditRencanaKreditPNJ8">0</b></td>
                        </tr>
                        <tr>
                          <td class='align-middle'><label><input disabled type="checkbox" id="EditRencanaPNJ9" onchange="EditRencanaPNJ9()"> 3) Anggota, tiap periode jabatan*</label></td>
                          <td class='text-center align-middle'><b id="EditRencanaKreditPNJ9">0</b></td>
                        </tr>
                        <tr>
                          <td class='text-center'>b. Tingkat Nasional, sebagai : </td>
                          <td></td>
                        </tr>
                        <tr>
                          <td class='align-middle'><label><input disabled type="checkbox" id="EditRencanaPNJ10" onchange="EditRencanaPNJ10()"> 1) Pengurus, tiap periode jabatan</label></td>
                          <td class='text-center align-middle'><b id="EditRencanaKreditPNJ10">0</b></td>
                        </tr>
                        <tr>
                          <td class='align-middle'><label><input disabled type="checkbox" id="EditRencanaPNJ11" onchange="EditRencanaPNJ11()"> 2) Anggota atas permintaan, tiap periode jabatan*</label></td>
                          <td class='text-center align-middle'><b id="EditRencanaKreditPNJ11">0</b></td>
                        </tr>
                        <tr>
                          <td class='align-middle'><label><input disabled type="checkbox" id="EditRencanaPNJ12" onchange="EditRencanaPNJ12()"> 3) Anggota, tiap periode jabatan</label></td>
                          <td class='text-center align-middle'><b id="EditRencanaKreditPNJ12">0</b></td>
                        </tr>
                        <tr>
                          <td class='text-center'>4</td>
                          <td class='align-middle'><label><input disabled type="checkbox" id="EditRencanaPNJ13" onchange="EditRencanaPNJ13()"> Mewakili Perguruan Tinggi / Lembaga Pemerintah  duduk dalam Panitia Antar Lembaga, tiap kepanitiaan</label></td>
                          <td class='text-center align-middle'><b id="EditRencanaKreditPNJ13">0</b></td>
                        </tr>
                        <tr>
                          <td rowspan="3" class='text-center'>5</td>
                          <td class='align-middle'>Menjadi anggota delegasi Nasional ke pertemuan Internasional </td>
                          <td></td>
                        </tr>
                        <tr>
                          <td class='align-middle'><label><input disabled type="checkbox" id="EditRencanaPNJ14" onchange="EditRencanaPNJ14()"> a. Sebagai Ketua delegasi, tiap kegiatan</label></td>
                          <td class='text-center align-middle'><b id="EditRencanaKreditPNJ14">0</b></td>
                        </tr>
                        <tr>
                          <td class='align-middle'><label><input disabled type="checkbox" id="EditRencanaPNJ15" onchange="EditRencanaPNJ15()"> b. Sebagai Anggota, tiap kegiatan</label></td>
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
                          <td class='align-middle'><label><input disabled type="checkbox" id="EditRencanaPNJ16" onchange="EditRencanaPNJ16()"> 1) Ketua, tiap kegiatan</label></td>
                          <td class='text-center align-middle'><b id="EditRencanaKreditPNJ16">0</b></td>
                        </tr>
                        <tr>
                          <td class='align-middle'><label><input disabled type="checkbox" id="EditRencanaPNJ17" onchange="EditRencanaPNJ17()"> 2) Anggota / peserta, tiap kegiatan</label></td>
                          <td class='text-center align-middle'><b id="EditRencanaKreditPNJ17">0</b></td>
                        </tr>
                        <tr>
                          <td class='text-center'>b. Di lingkungan Perguruan Tinggi sebagai : </td>
                          <td></td>
                        </tr>
                        <tr>
                          <td class='align-middle'><label><input disabled type="checkbox" id="EditRencanaPNJ18" onchange="EditRencanaPNJ18()"> 1) Ketua, tiap kegiatan</label></td>
                          <td class='text-center align-middle'><b id="EditRencanaKreditPNJ18">0</b></td>
                        </tr>
                        <tr>
                          <td class='align-middle'><label><input disabled type="checkbox" id="EditRencanaPNJ19" onchange="EditRencanaPNJ19()"> 2) Anggota / peserta, tiap kegiatan</label></td>
                          <td class='text-center align-middle'><b id="EditRencanaKreditPNJ19">0</b></td>
                        </tr>
                        <tr>
                          <td rowspan="7" class='text-center'>7</td>
                          <td class='align-middle'>Mendapat tanda jasa / penghargaan </td>
                          <td></td>
                        </tr>
                        <tr>
                          <td class='align-middle'><label><input disabled type="checkbox" id="EditRencanaPNJ20" onchange="EditRencanaPNJ20()"> a. Penghargaan / tanda jasa Satya lencana 30 tahun</label></td>
                          <td class='text-center align-middle'><b id="EditRencanaKreditPNJ20">0</b></td>
                        </tr>
                        <tr>
                          <td class='align-middle'><label><input disabled type="checkbox" id="EditRencanaPNJ21" onchange="EditRencanaPNJ21()"> b. Penghargaan / tanda jasa Satya lencana 20 tahun</label></td>
                          <td class='text-center align-middle'><b id="EditRencanaKreditPNJ21">0</b></td>
                        </tr>
                        <tr>
                          <td class='align-middle'><label><input disabled type="checkbox" id="EditRencanaPNJ22" onchange="EditRencanaPNJ22()"> c. Penghargaan / tanda jasa Satya lencana 10 tahun</label></td>
                          <td class='text-center align-middle'><b id="EditRencanaKreditPNJ22">0</b></td>
                        </tr>
                        <tr>
                          <td class='align-middle'><label><input disabled type="checkbox" id="EditRencanaPNJ23" onchange="EditRencanaPNJ23()"> d. Tingkat Internasional, tiap tanda jasa / penghargaan</label></td>
                          <td class='text-center align-middle'><b id="EditRencanaKreditPNJ23">0</b></td>
                        </tr>
                        <tr>
                          <td class='align-middle'><label><input disabled type="checkbox" id="EditRencanaPNJ24" onchange="EditRencanaPNJ24()"> e. Tingkat Nasional, tiap tanda  jasa / penghargaan</label></td>
                          <td class='text-center align-middle'><b id="EditRencanaKreditPNJ24">0</b></td>
                        </tr>
                        <tr>
                          <td class='align-middle'><label><input disabled type="checkbox" id="EditRencanaPNJ25" onchange="EditRencanaPNJ25()"> f. Tingkat Daerah / Lokal, tiap tanda jasa / penghargaan</label></td>
                          <td class='text-center align-middle'><b id="EditRencanaKreditPNJ25">0</b></td>
                        </tr>
                        <tr>
                          <td rowspan="4" class='text-center'>8</td>
                          <td class='align-middle'>Menulis buku pelajaran SLTA ke bawah yang diterbitkan dan diedarkan secara nasional </td>
                          <td></td>
                        </tr>
                        <tr>
                          <td class='align-middle'><label><input disabled type="checkbox" id="EditRencanaPNJ26" onchange="EditRencanaPNJ26()"> a. Buku SMTA atau setingkat, tiap buku</label></td>
                          <td class='text-center align-middle'><b id="EditRencanaKreditPNJ26">0</b></td>
                        </tr>
                        <tr>
                          <td class='align-middle'><label><input disabled type="checkbox" id="EditRencanaPNJ27" onchange="EditRencanaPNJ27()"> b. Buku SMTP atau setingkat, tiap buku</label></td>
                          <td class='text-center align-middle'><b id="EditRencanaKreditPNJ27">0</b></td>
                        </tr>
                        <tr>
                          <td class='align-middle'><label><input disabled type="checkbox" id="EditRencanaPNJ28" onchange="EditRencanaPNJ28()"> c. Buku SD atau setingkat, tiap buku</label></td>
                          <td class='text-center align-middle'><b id="EditRencanaKreditPNJ28">0</b></td>
                        </tr>
                        <tr>
                          <td rowspan="4" class='text-center'>9</td>
                          <td class='align-middle'>Mempunyai prestasi di bidang olahraga / Humaniora </td>
                          <td></td>
                        </tr>
                        <tr>
                          <td class='align-middle'><label><input disabled type="checkbox" id="EditRencanaPNJ29" onchange="EditRencanaPNJ29()"> a. Tingkat Internasional, tiap piagam / medali</label></td>
                          <td class='text-center align-middle'><b id="EditRencanaKreditPNJ29">0</b></td>
                        </tr>
                        <tr>
                          <td class='align-middle'><label><input disabled type="checkbox" id="EditRencanaPNJ30" onchange="EditRencanaPNJ30()"> b. Tingkat Nasional, tiap piagam / medali</label></td>
                          <td class='text-center align-middle'><b id="EditRencanaKreditPNJ30">0</b></td>
                        </tr>
                        <tr>
                          <td class='align-middle'><label><input disabled type="checkbox" id="EditRencanaPNJ31" onchange="EditRencanaPNJ31()"> c. Tingkat Daerah / Lokal, tiap piagam / medali</label></td>
                          <td class='text-center align-middle'><b id="EditRencanaKreditPNJ31">0</b></td>
                        </tr>
                        <tr>
                          <td class='text-center'>10</td>
                          <td class='align-middle'><label><input disabled type="checkbox" id="EditRencanaPNJ32" onchange="EditRencanaPNJ32()"> Keanggotaan dalam tim penilai jabatan akademik dosen (tiap semester)</label></td>
                          <td class='text-center align-middle'><b id="EditRencanaKreditPNJ32">0</b></td>
                        </tr>
                        <tr>
                          <td colspan="2">
                            <div class="row">
                              <div class="col-sm-auto">
                                <div class="input-group mb-1" style="margin-left: 300px;width: 170px;">
                                  <div class="input-group-prepend">
                                    <label class="input-group-text bg-primary"><b>Input Target</b></label>
                                  </div>
                                  <input class="form-control text-right" type="text" id="Target"  data-inputmask='"mask": "9999"' data-mask>
                                </div>
                              </div>
                            </div>
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
    <script src="<?=base_url('bootstrap/js/jquery.min.js')?>"></script>
    <script src="<?=base_url('bootstrap/js/popper.min.js')?>" ></script>
    <script src="<?=base_url('bootstrap/js/bootstrap.min.js')?>"></script>
		<script src="<?=base_url('bootstrap/js/adminlte.min.js')?>"></script>
		<script src="<?=base_url('bootstrap/datatables/jquery.dataTables.js')?>"></script>
		<script src="<?=base_url('bootstrap/datatables-bs4/js/dataTables.bootstrap4.js')?>"></script>
		<script src="<?=base_url('bootstrap/inputmask/min/jquery.inputmask.bundle.min.js')?>"></script>
		<script>
			var EditJabatanRencanaPenunjang = ''
			jQuery(document).ready(function($) {
				"use strict";
				var BaseURL = '<?=base_url()?>';

				$('#TabelMonitoringDosen').DataTable( {
					dom:'lfrtip',
					"info": false,
					// "filter": false,
					// "lengthMenu": [ 5, 10, 20, 30 ],
					"language": {
						"paginate": {
							'previous': '<b class="text-primary"><</b>',
							'next': '<b class="text-primary">></b>'
						}
					}
				});

				$('[data-mask]').inputmask()

				var BaseURL = '<?=base_url()?>';

        $('#SimpanEditRencanaPenunjang').click(function() {
          if (isNaN(parseInt($('#Target').val()))) {
            alert('Input Target Belum Benar!')
          } else {
            var InputTarget = {No:$("#NoEditRencana").val(),Target:parseInt($('#Target').val()),Bidang:'RencanaPenunjang'}
            $.post(BaseURL+'Kajur/InputTarget', InputTarget).done(function(Respon) {
              if (Respon == '1') {
                window.location = BaseURL + 'Kajur/Monitoring/Penunjang'
              } else {
                alert(Respon)
              }
            }) 
          }
        })
				
        $(document).on("click",".EditRencanaPenunjang",function(){
          <?php $Kredit = array(3,2,3,2,2,1,2,1,0.5,1.5,1,0.5,1,3,2,3,2,2,1,3,2,1,5,3,1,5,5,5,5,3,1,0.5); ?>
					var Data = $(this).attr('EditRencanaPenunjang')
					var Pisah = Data.split("/")
					$("#NoEditRencana").val(Pisah[0])
					$("#EditJenjangRencanaPenunjang").val(Pisah[2])
					$("#JenjangLama").val(Pisah[2])
					$("#EditSemesterRencanaPenunjang").val(Pisah[3])
					$("#SemesterLama").val(Pisah[3])
					$("#EditTahunRencanaPenunjang").val(Pisah[4])
					$("#TahunLama").val(Pisah[4])
					var PisahKode = Pisah[5].split("|")
          <?php 
            for ($i = 1; $i <= 32 ; $i++) {
              echo "if (PisahKode[".($i-1)."] == '1') {\n";
              echo "$('#EditRencanaPNJ".$i."').attr('checked', true)\n";	
              echo "$('#EditRencanaKreditPNJ".$i."').html(".$Kredit[$i-1].")\n}\n";
            } 
          ?>
					$("#EditRencanaTotalKredit").html(Pisah[6])
          $("#Target").val(Pisah[7])
					$('#ModalEditRencanaPenunjang').modal("show");
				})
			})
		</script>
  </body>
</html>