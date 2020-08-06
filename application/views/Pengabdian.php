<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
					<div class="col-sm-12 mt-2">
						<ul class="nav nav-pills mb-2 border border-warning rounded bg-light" id="pills-tab" role="tablist">
							<li class="nav-item">
								<a class="nav-link <?php if($this->session->userdata('SubPengabdian') == 'Rencana'){echo 'active';} ?>" id="pills-Rencana-tab" data-toggle="pill" href="#pills-Rencana" role="tab" aria-controls="pills-Rencana" aria-selected="true"><b>Rencana</b></a>
							</li>
							<li class="nav-item">
								<a class="nav-link <?php if($this->session->userdata('SubPengabdian') == 'Realisasi'){echo 'active';} ?>" id="pills-Realisasi-tab" data-toggle="pill" href="#pills-Realisasi" role="tab" aria-controls="pills-Realisasi" aria-selected="false"><b>Realisasi</b></a>
							</li>
						</ul>
						<div class="tab-content border border-warning rounded bg-light" id="pills-tabContent">
							<div class="tab-pane fade <?php if($this->session->userdata('SubPengabdian') == 'Rencana'){echo 'show active';} ?>" id="pills-Rencana" role="tabpanel" aria-labelledby="pills-Rencana-tab">
								<?php include 'RencanaPengabdian.php'; ?>
							</div>
							<div class="tab-pane fade <?php if($this->session->userdata('SubPengabdian') == 'Realisasi'){echo 'show active';} ?>" id="pills-Realisasi" role="tabpanel" aria-labelledby="pills-Realisasi-tab">
								<!-- <?php include 'RealisasiPengabdian.php'; ?> -->
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
    <script src="<?=base_url('bootstrap/inputmask/min/jquery.inputmask.bundle.min.js')?>"></script>
    <script>
			jQuery(document).ready(function($) {
				"use strict";
				var BaseURL = '<?=base_url()?>';
				$('#TabelRencana').DataTable( {
					dom:'lfrtip',
					"info": false,
					"filter": false,
					"lengthMenu": [ 5, 10, 20, 30 ],
					"language": {
						"paginate": {
							'previous': '<b class="text-primary"><</b>',
							'next': '<b class="text-primary">></b>'
						}
					}
				})

				// $('#TabelRealisasi').DataTable( {
				// 	dom:'lfrtip',
				// 	"lengthMenu": [ 5, 10, 20, 30 ],
				// 	"language": {
				// 		"paginate": {
				// 			'previous': '<b class="text-primary"><</b>',
				// 			'next': '<b class="text-primary">></b>'
				// 		}
				// 	}
				// })

        $('[data-mask]').inputmask()

				$("#pills-Rencana-tab").click(function() {
					var Data = {SubPengabdian: 'Rencana'}
					$.post(BaseURL+"Dashboard/SubPengabdian", Data)
				})

				$("#pills-Realisasi-tab").click(function() {
					var Data = {SubPengabdian: 'Realisasi'}
					$.post(BaseURL+"Dashboard/SubPengabdian", Data)
				})

				$("#InputRencanaPengabdian").click(function() {
					<?php 
            $TotalKreditRencana = "var TotalKreditRencana = ";
            $KodeRencana = "var KodeRencana = ''+";
            for ($i = 1; $i <= 16 ; $i++) {
              echo "var RencanaPNB".$i." = parseFloat(document.getElementById('RencanaKreditPNB".$i."').innerHTML)\n";
              if ($i == 16) {
                $TotalKreditRencana .= "RencanaPNB".$i;
                $KodeRencana .= "(document.getElementById('RencanaPNB".$i."').checked ? 1 : 0)\n";
              } else {
                $TotalKreditRencana .= "RencanaPNB".$i."+";
                $KodeRencana .= "(document.getElementById('RencanaPNB".$i."').checked ? 1 : 0)+'|'+";
              }
            }            
            echo $TotalKreditRencana."\n";
            echo $KodeRencana;
          ?>
					var DataRencanaPengabdian = {Jenjang:$("#JenjangRencanaPengabdian").val(),Semester:$("#SemesterRencanaPengabdian").val(),
																			 Tahun:$("#TahunRencanaPengabdian").val(),Kode:KodeRencana,Total:TotalKreditRencana}
					$.post(BaseURL+"Pengabdian/InputRencana", DataRencanaPengabdian).done(function(Respon) {
						if (Respon == '1') {
							window.location = BaseURL + "Dashboard/Pengabdian"
						} else {
							alert(Respon)
						}
					})
				})

				$("#TombolRencanaTotalKredit").click(function() {
          <?php 
            $TotalRencana = "document.getElementById('RencanaTotalKredit').innerHTML = ";
            for ($i = 1; $i <= 16 ; $i++) {
              echo "var RencanaPNB".$i." = parseFloat(document.getElementById('RencanaKreditPNB".$i."').innerHTML)\n";
              if ($i == 16) {
                $TotalRencana .= "RencanaPNB".$i;
              } else {
                $TotalRencana .= "RencanaPNB".$i."+";
              }
            }            
            echo $TotalRencana;
          ?>
				})

				$(document).on("click",".EditRencanaPengabdian",function(){
          <?php  $Kredit = array(5.5,3,4,3,2,3,2,1,1,1.5,1,0.5,3,5,1,0.5); ?>
					var Data = $(this).attr('EditRencanaPengabdian')
					var Pisah = Data.split("/")
					$("#NoEditRencana").val(Pisah[0])
					$("#EditJenjangRencanaPengabdian").val(Pisah[2])
					$("#EditSemesterRencanaPengabdian").val(Pisah[3])
					$("#EditTahunRencanaPengabdian").val(Pisah[4])
					var PisahKode = Pisah[5].split("|")
          <?php 
            for ($i = 1; $i <= 16 ; $i++) {
              echo "if (PisahKode[".($i-1)."] == '1') {\n";
              echo "$('#EditRencanaPNB".$i."').attr('checked', true)\n";	
              echo "$('#EditRencanaKreditPNB".$i."').html(".$Kredit[$i-1].")\n}\n";
            } 
          ?>
					$("#EditRencanaTotalKredit").html(Pisah[6])
					$('#ModalEditRencanaPengabdian').modal("show");
				})

				$("#TombolEditRencanaTotalKredit").click(function() {
					<?php 
            $TotalEditRencana = "document.getElementById('EditRencanaTotalKredit').innerHTML = ";
            for ($i = 1; $i <= 16 ; $i++) {
              echo "var EditRencanaPNB".$i." = parseFloat(document.getElementById('EditRencanaKreditPNB".$i."').innerHTML)\n";
              if ($i == 16) {
                $TotalEditRencana .= "EditRencanaPNB".$i;
              } else {
                $TotalEditRencana .= "EditRencanaPNB".$i."+";
              }
            }            
            echo $TotalEditRencana;
          ?>
				})
				
				$("#SimpanEditRencanaPengabdian").click(function() {
          <?php 
            $EditTotalKreditRencana = "var EditTotalKreditRencana = ";
            $EditKodeRencana = "var EditKodeRencana = ''+";
            for ($i = 1; $i <= 16 ; $i++) {
              echo "var EditRencanaPNB".$i." = parseFloat(document.getElementById('EditRencanaKreditPNB".$i."').innerHTML)\n";
              if ($i == 16) {
                $EditTotalKreditRencana .= "EditRencanaPNB".$i;
                $EditKodeRencana .= "(document.getElementById('EditRencanaPNB".$i."').checked ? 1 : 0)\n";
              } else {
                $EditTotalKreditRencana .= "EditRencanaPNB".$i."+";
                $EditKodeRencana .= "(document.getElementById('EditRencanaPNB".$i."').checked ? 1 : 0)+'|'+";
              }
            }            
            echo $EditTotalKreditRencana."\n";
            echo $EditKodeRencana;
          ?>
					var EditDataRencanaPengabdian = {No:$("#NoEditRencana").val(),Jenjang:$("#EditJenjangRencanaPengabdian").val(),Semester:$("#EditSemesterRencanaPengabdian").val(),
																			 Tahun:$("#EditTahunRencanaPengabdian").val(),Kode:EditKodeRencana,Total:EditTotalKreditRencana}
					$.post(BaseURL+"Pengabdian/EditRencana", EditDataRencanaPengabdian).done(function(Respon) {
						if (Respon == '1') {
							window.location = BaseURL + "Dashboard/Pengabdian"
						} else {
							alert(Respon)
						}
					})
				})

				$(document).on("click",".HapusRencanaPengabdian",function(){
					var Hapus = {No: $(this).attr('HapusRencanaPengabdian')}
					var Konfirmasi = confirm("Yakin Ingin Menghapus?");
      		if (Konfirmasi == true) {
						$.post(BaseURL+"Pengabdian/HapusRencana", Hapus).done(function(Respon) {
							if (Respon == '1') {
								window.location = BaseURL + "Dashboard/Pengabdian"
							} else {
								alert(Respon)
							}
						});
					}
				});
			})

      <?php 
        $Kredit = array(5.5,3,4,3,2,3,2,1,1,1.5,1,0.5,3,5,1,0.5);
        for ($i = 1; $i <= 16 ; $i++) {
          echo "function RencanaPNB".$i."() {document.getElementById('RencanaPNB".$i."').checked? document.getElementById('RencanaKreditPNB".$i."').innerHTML = ".$Kredit[$i-1]." : document.getElementById('RencanaKreditPNB".$i."').innerHTML = 0}";
        } 
        for ($i = 1; $i <= 16 ; $i++) {
          echo "function EditRencanaPNB".$i."() {document.getElementById('EditRencanaPNB".$i."').checked? document.getElementById('EditRencanaKreditPNB".$i."').innerHTML = ".$Kredit[$i-1]." : document.getElementById('EditRencanaKreditPNB".$i."').innerHTML = 0}";
        }
      ?>
    </script>
  </body>
</html>