<div class="content-wrapper">
      <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <div class="row"> 
              <div class="col-sm-12 mt-2">
                <div class="container-fluid border border-warning rounded bg-light">
                  <div class="row align-items-center">
                    <div class="col-sm-12 my-2 ">    
                    <button type="button" class="btn btn-primary text-light mb-2" data-toggle="modal" data-target="#ModalInputMahasiswaBaru"><i class="fa fa-plus"></i> <b>Input Data</b></button> 
                      <div class="table-responsive mb-2">
                        <table id="TabelMahasiswaBaru" class="table table-bordered table-striped">
                          <thead class="bg-warning">
                            <tr>
                              <th class="text-center align-middle" rowspan="2">No</th>
                              <th class="text-center align-middle" rowspan="2">Homebase</th>
                              <th class="text-center align-middle" rowspan="2">Tahun</th>
                              <th class="text-center align-middle" rowspan="2">Daya<br>Tampung</th>
                              <th class="text-center align-middle" rowspan="2">Aksi</th>
                              <th class="text-center align-middle" colspan="2">Jumlah<br>Calon Mahasiswa</th>
                              <th class="text-center align-middle" colspan="2">Jumlah<br>Mahasiswa Baru</th>
                              <th class="text-center align-middle" colspan="2">Jumlah<br>Mahasiswa Aktif</th> 
                            </tr>
                            <tr>
                              <th class="text-center align-middle">Pendaftar</th>
                              <th class="text-center align-middle">Lulus<br>Seleksi</th>
                              <th class="text-center align-middle">Reguler</th>
                              <th class="text-center align-middle">Transfer</th>
                              <th class="text-center align-middle">Reguler</th>
                              <th class="text-center align-middle">Transfer</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php $No = 1; foreach ($MahasiswaBaru as $key) { ?>
                              <tr>	
                                <td class="text-center align-middle"><?=$No++?></td>
                                <td class="text-center align-middle"><?=$key['Homebase']?></td>
                                <td class="text-center align-middle"><?=$key['Tahun']?></td>
                                <td class="text-center align-middle"><?=$key['DayaTampung']?></td>
                                <td class="text-center align-middle"><?=$key['MhsPendaftar']?></td>
                                <td class="text-center align-middle"><?=$key['MhsLulus']?></td>
                                <td class="text-center align-middle"><?=$key['MhsBaruReguler']?></td>
                                <td class="text-center align-middle"><?=$key['MhsBaruTransfer']?></td>
                                <td class="text-center align-middle"><?=$key['MhsAktifReguler']?></td>
                                <td class="text-center align-middle"><?=$key['MhsAktifTransfer']?></td>
                                <td class="align-middle">
                                  <button Edit="<?=$key['Homebase']."|".$key['Tahun']."|".$key['DayaTampung']."|".$key['MhsPendaftar']."|".$key['MhsLulus']."|".$key['MhsBaruReguler']."|".$key['MhsBaruTransfer']."|".$key['MhsAktifReguler']."|".$key['MhsAktifTransfer']?>" class="btn btn-sm btn-warning Edit"><i class="fas fa-edit"></i></button>
                                  <button Hapus="<?=$key['Homebase']."|".$key['Tahun']?>" class="btn btn-sm btn-danger Hapus"><i class="fas fa-trash"></i></button>  
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
    <div class="modal fade" id="ModalInputMahasiswaBaru">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content bg-warning">
          <div class="modal-body">
            <div class="container">
							<div class="row">
                <div class="col-sm-4">
                  <div class="input-group input-group-sm mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-primary"><b>Homebase</b></span>
                    </div>
                    <select class="custom-select" id="homebase">
                      <option value="S1">S1</option>
                      <option value="S2">S2</option>
                    </select>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="input-group input-group-sm mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-primary"><b>Tahun</b></span>
                    </div>
                    <input type="text" class="form-control" id="tahun" data-inputmask='"mask": "9999"' data-mask value="20"> 
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="input-group input-group-sm mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-primary"><b>Daya Tampung</b></span>
                    </div>
                    <input type="text" class="form-control" id="DayaTampung"> 
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="input-group input-group-sm mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-primary"><b>Jumlah Calon Mahasiswa</b></span>
                    </div>
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-success"><b>Pendaftar</b></span>
                    </div>
                    <input type="text" class="form-control" id="Pendaftar" placeholder="0"> 
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-success"><b>Lulus Seleksi</b></span>
                    </div>
                    <input type="text" class="form-control" id="Lulus" placeholder="0"> 
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="input-group input-group-sm mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-primary"><b>Jumlah Mahasiswa Baru</b></span>
                    </div>
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-success"><b>Reguler</b></span>
                    </div>
                    <input type="text" class="form-control" id="MhsBaruReguler" placeholder="0"> 
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-success"><b>Transfer</b></span>
                    </div>
                    <input type="text" class="form-control" id="MhsBaruTransfer" placeholder="0"> 
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="input-group input-group-sm mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-primary"><b>Jumlah Mahasiswa Aktif</b></span>
                    </div>
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-success"><b>Reguler</b></span>
                    </div>
                    <input type="text" class="form-control" id="MhsAktifReguler" placeholder="0"> 
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-success"><b>Transfer</b></span>
                    </div>
                    <input type="text" class="form-control" id="MhsAktifTransfer" placeholder="0"> 
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-danger" data-dismiss="modal"><b>Tutup</b></button>
            <button type="submit" class="btn btn-success" id="InputMahasiswaBaru"><b>Simpan</b></button>
          </div>
        </div>
      </div>
    </div>
    <!-- <div class="modal fade" id="ModalEditMahasiswaBaru">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content bg-warning">
          <div class="modal-body">
            <div class="container">
							<div class="row">
								<div class="col-sm-12">
                  <div class="input-group input-group-sm mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-primary text-primary"><b>Lembaga Mitra</b></span>
                    </div>
                    <input type="text" class="form-control" id="EditMitra">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="input-group input-group-sm mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-primary text-primary"><b>Tingkat</b></span>
                    </div>
                    <select class="custom-select" id="EditTingkat">
                      <option value="Internasional">Internasional</option>
                      <option value="Nasional">Nasional</option>
                      <option value="Lokal">Lokal</option>
                    </select>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="input-group input-group-sm mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-primary text-primary"><b>Bidang</b></span>
                    </div>
                    <select class="custom-select" id="EditBidang">
                      <option value="Pendidikan">Pendidikan</option>
                      <option value="Penelitian">Penelitian</option>
                      <option value="Pengabdian">Pengabdian</option>
                    </select>
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="input-group input-group-sm mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-primary text-primary"><b>Judul Kegiatan Kerja Sama</b></span>
                    </div>
                    <input type="text" class="form-control" id="EditJudul"> 
                  </div>
                  <div class="input-group input-group-sm mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-primary text-primary"><b>Manfaat Bagi Program Studi</b></span>
                    </div>
                    <input type="text" class="form-control" id="EditManfaat"> 
                  </div>
                </div>
                <div class="col-sm-7">
                  <div class="input-group input-group-sm mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-primary text-primary"><b>Waktu & Durasi</b></span>
                    </div>
                    <input type="text" class="form-control" id="EditWaktu"> 
                  </div>
                </div>
                <div class="col-sm-5">
                  <div class="input-group input-group-sm mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-primary text-primary"><b>Tahun Berakhirnya Kerja Sama</b></span>
                    </div>
                    <input type="text" class="form-control" id="EditExpired" data-inputmask='"mask": "9999"' data-mask value="20"> 
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="input-group input-group-sm mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-primary text-primary"><b>Bukti Kerja Sama</b></span>
                    </div>
                    <input type="text" class="form-control" id="EditMahasiswaBaru" placeholder="Surat Perjanjian Kerja Sama">
                  </div>
                  <div class="input-group input-group-sm mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text bg-primary"><b>Upload Bukti</b></span>
										</div>
                    <input class="form-control" type="hidden" id="BuktiMahasiswaBaruLama">
                    <input class="form-control" type="file" id="EditBuktiMahasiswaBaru">
                    <div class="input-group-prepend">
											<button class="input-group-text bg-primary" id="CancelEditBuktiMahasiswaBaru"><b>X</b></button>
										</div>
                  </div>
                </div>
                <div class="col-sm-12">
                  <pre class="text-danger"><b>Bukti Yang Diupload Dalam Format Pdf</b></pre>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-danger" data-dismiss="modal"><b>Tutup</b></button>
            <button type="submit" class="btn btn-success" id="UpdateMahasiswaBaru"><b>Simpan</b></button>
          </div>
        </div>
      </div>
    </div> -->
    <script src="<?=base_url('bootstrap/js/jquery.min.js')?>"></script>
    <script src="<?=base_url('bootstrap/js/popper.min.js')?>" ></script>
    <script src="<?=base_url('bootstrap/js/bootstrap.min.js')?>"></script>
    <script src="<?=base_url('bootstrap/js/adminlte.min.js')?>"></script>
    <script src="<?=base_url('bootstrap/datatables/jquery.dataTables.js')?>"></script>
		<script src="<?=base_url('bootstrap/datatables-bs4/js/dataTables.bootstrap4.js')?>"></script>
		<script src="<?=base_url('bootstrap/inputmask/min/jquery.inputmask.bundle.min.js')?>"></script>
		<script>
			jQuery(document).ready(function($) {
				"use strict";

				$('[data-mask]').inputmask()

				var BaseURL = '<?=base_url()?>';

        $("#InputMahasiswaBaru").click(function() {
          // if ($("#Mitra").val() == '') {
          //   alert('Mohon Isi Lembaga Mitra!')
          // } else if ($("#Judul").val() == '') {
          //   alert('Mohon Isi Judul Kerja Sama!')
          // } else if ($("#Manfaat").val() == '') {
          //   alert('Mohon Isi Manfaat Bagi Program Studi!')
          // } else if ($("#Waktu").val() == '') {
          //   alert('Mohon Isi Waktu & Durasi!')
          // } else if (isNaN($("#Expired").val())) {
          //   alert('Input Tahun Berakhirnya Kerja Sama Belum Benar!')
          // } else if ($("#MahasiswaBaru").val() == '') {
          //   alert('Mohon Isi Bukti Kerja Sama!')
          // } else {
          //   var fd = new FormData()
					// 	fd.append('Mitra',$("#Mitra").val())
					// 	fd.append('Tingkat',$("#Tingkat").val())
					// 	fd.append('Bidang',$("#Bidang").val())
					// 	fd.append('Judul',$("#Judul").val())
					// 	fd.append('Manfaat',$("#Manfaat").val())
					// 	fd.append('Waktu',$("#Waktu").val())
          //   fd.append('Expired',$("#Expired").val())
          //   fd.append('MahasiswaBaru',$("#MahasiswaBaru").val())
          //   fd.append("BuktiMahasiswaBaru", $('#BuktiMahasiswaBaru')[0].files[0])
          //   $.ajax({
					// 		url: BaseURL+'Admin/InputMahasiswaBaru',
					// 		type: 'post',
					// 		data: fd,
					// 		contentType: false,
					// 		processData: false,
					// 		success: function(Respon){
					// 			if (Respon == '1') {
					// 				window.location = BaseURL + "Admin/MahasiswaBaru"
					// 			}
					// 			else {
					// 				alert(Respon)
					// 			}
					// 		}
					// 	})
          // }
        })

        // $("#CancelEditBuktiMahasiswaBaru").click(function() {
				// 	$("#EditBuktiMahasiswaBaru").val("")
				// })

        // $(document).on("click",".Edit",function(){
				// 	var Data = $(this).attr('Edit')
				// 	var Pisah = Data.split("|");
				// 	$('#IdMahasiswaBaru').val(Pisah[0])
        //   $('#EditMitra').val(Pisah[1])
				// 	$('#EditTingkat').val(Pisah[2])
				// 	$("#EditBidang").val(Pisah[3])
				// 	$('#EditJudul').val(Pisah[4])
				// 	$("#EditManfaat").val(Pisah[5])
				// 	$('#EditWaktu').val(Pisah[6])
				// 	$('#EditExpired').val(Pisah[7])
        //   $('#EditMahasiswaBaru').val(Pisah[8])
        //   $('#BuktiMahasiswaBaruLama').val(Pisah[9])
        //   $('#ModalEditMahasiswaBaru').modal("show")
				// }) 

				// $("#UpdateMahasiswaBaru").click(function() {
				// 	if ($("#EditMitra").val() == '') {
        //     alert('Mohon Isi Lembaga Mitra!')
        //   } else if ($("#EditJudul").val() == '') {
        //     alert('Mohon Isi Judul Kerja Sama!')
        //   } else if ($("#EditManfaat").val() == '') {
        //     alert('Mohon Isi Manfaat Bagi Program Studi!')
        //   } else if ($("#EditWaktu").val() == '') {
        //     alert('Mohon Isi Waktu & Durasi!')
        //   } else if (isNaN($("#EditExpired").val())) {
        //     alert('Input Tahun Berakhirnya Kerja Sama Belum Benar!')
        //   } else if ($("#EditMahasiswaBaru").val() == '') {
        //     alert('Mohon Isi Bukti Kerja Sama!')
        //   } else {
        //     var fd = new FormData()
				// 		fd.append('Id',$("#IdMahasiswaBaru").val())
        //     fd.append('Mitra',$("#EditMitra").val())
				// 		fd.append('Tingkat',$("#EditTingkat").val())
				// 		fd.append('Bidang',$("#EditBidang").val())
				// 		fd.append('Judul',$("#EditJudul").val())
				// 		fd.append('Manfaat',$("#EditManfaat").val())
				// 		fd.append('Waktu',$("#EditWaktu").val())
        //     fd.append('Expired',$("#EditExpired").val())
        //     fd.append('MahasiswaBaru',$("#EditMahasiswaBaru").val())
        //     fd.append('BuktiMahasiswaBaruLama',$("#BuktiMahasiswaBaruLama").val())
        //     fd.append("BuktiMahasiswaBaru", $('#EditBuktiMahasiswaBaru')[0].files[0])
        //     $.ajax({
				// 			url: BaseURL+'Admin/UpdateMahasiswaBaru',
				// 			type: 'post',
				// 			data: fd,
				// 			contentType: false,
				// 			processData: false,
				// 			success: function(Respon){
				// 				if (Respon == '1') {
				// 					window.location = BaseURL + "Admin/MahasiswaBaru"
				// 				}
				// 				else {
				// 					alert(Respon)
				// 				}
				// 			}
				// 		})
        //   }
				// })

        // $(document).on("click",".Hapus",function(){
				// 	var Data = $(this).attr('Hapus')
				// 	var Pisah = Data.split("|");
				// 	var Hapus = {Id: Pisah[0],Bukti: Pisah[1]}
				// 	var Konfirmasi = confirm("Yakin Ingin Menghapus?");
      	// 	if (Konfirmasi == true) {
				// 		$.post(BaseURL+"Admin/HapusMahasiswaBaru", Hapus).done(function(Respon) {
				// 			if (Respon == '1') {
				// 				window.location = BaseURL + "Admin/MahasiswaBaru"
				// 			} else {
				// 				alert(Respon)
				// 			}
				// 		})
				// 	}
				// })

        $('#TabelMahasiswaBaru').DataTable( {
					// dom:'lfrtip',
					"ordering": false,
          "lengthMenu": [ 5, 10, 20, 30 ],
					"language": {
						"paginate": {
							'previous': '<b class="text-primary"><</b>',
							'next': '<b class="text-primary">></b>'
						}
					}
				});
				
        $("#Simpan").click(function() {
          var Kajur = { NIP: $("#Kajur").val() }
          $.post(BaseURL+"Admin/Kajur", Kajur).done(function(Respon) {
            window.location = BaseURL + "Admin/AkunDosen"
          })
        })

        $("#DownloadBorang").click(function() {
					var Pisah = $('#TS').val().split('-')
          if (Pisah[1]-Pisah[0] >= 0) {
            window.location = BaseURL + 'Admin/Borang/'+$('#TS').val()
            $.post(BaseURL+"Admin"+"/DTPS").done(function(Respon) {
              var array = JSON.parse(Respon) 
              array.forEach(function(object) {
                if (object.BuktiPendidik != null) {
                  $('#LampiranDTPS').attr('href',BaseURL+'DTPS/'+object.BuktiPendidik)		
                  $('#LampiranDTPS').attr('Download',object.BuktiPendidik) 
                  $('#LampiranDTPS')[0].click()
                }
                if (object.BuktiKompetensi != null) {
                  $('#LampiranDTPS').attr('href',BaseURL+'DTPS/'+object.BuktiKompetensi)		
                  $('#LampiranDTPS').attr('Download',object.BuktiKompetensi) 
                  $('#LampiranDTPS')[0].click()
                }
              })
            }) 	
            var MahasiswaBaru = ['Pendidikan','Penelitian','Pengabdian']
					  for (let i = 0; i < 3; i++) {
              $.post(BaseURL+"Admin"+"/LampiranMahasiswaBaru/"+MahasiswaBaru[i]).done(function(Respon) {
                var array = JSON.parse(Respon) 
                var No = 1;
                array.forEach(function(object) {
                  $('#LampiranMahasiswaBaru').attr('href',BaseURL+'MahasiswaBaru/'+object.Bukti)		
                  $('#LampiranMahasiswaBaru').attr('Download','Kerja Sama '+MahasiswaBaru[i]+' '+No+'.pdf') 
                  $('#LampiranMahasiswaBaru')[0].click()
                  No+=1;
                })
              }) 	
            }
          }
          else {
            alert('Input Tahun Belum Benar!')
          }
        })
			})
		</script>
  </body>
</html>