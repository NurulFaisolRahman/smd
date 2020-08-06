<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
					<div class="col-sm-12 mt-2">
						<ul class="nav nav-pills mb-2 border border-warning rounded bg-light" id="pills-tab" role="tablist">
							<li class="nav-item">
								<a class="nav-link <?php if($this->session->userdata('SubPenunjang') == 'Rencana'){echo 'active';} ?>" id="pills-Rencana-tab" data-toggle="pill" href="#pills-Rencana" role="tab" aria-controls="pills-Rencana" aria-selected="true"><b>Rencana</b></a>
							</li>
							<li class="nav-item">
								<a class="nav-link <?php if($this->session->userdata('SubPenunjang') == 'Realisasi'){echo 'active';} ?>" id="pills-Realisasi-tab" data-toggle="pill" href="#pills-Realisasi" role="tab" aria-controls="pills-Realisasi" aria-selected="false"><b>Realisasi</b></a>
							</li>
						</ul>
						<div class="tab-content border border-warning rounded bg-light" id="pills-tabContent">
							<div class="tab-pane fade <?php if($this->session->userdata('SubPenunjang') == 'Rencana'){echo 'show active';} ?>" id="pills-Rencana" role="tabpanel" aria-labelledby="pills-Rencana-tab">
								<?php include 'RencanaPenunjang.php'; ?>
							</div>
							<div class="tab-pane fade <?php if($this->session->userdata('SubPenunjang') == 'Realisasi'){echo 'show active';} ?>" id="pills-Realisasi" role="tabpanel" aria-labelledby="pills-Realisasi-tab">
								<!-- <?php include 'RealisasiPenunjang.php'; ?> -->
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
					var Data = {SubPenunjang: 'Rencana'}
					$.post(BaseURL+"Dashboard/SubPenunjang", Data)
				})

				$("#pills-Realisasi-tab").click(function() {
					var Data = {SubPenunjang: 'Realisasi'}
					$.post(BaseURL+"Dashboard/SubPenunjang", Data)
				})

				$("#InputRencanaPenunjang").click(function() {
					<?php 
            $TotalKreditRencana = "var TotalKreditRencana = ";
            $KodeRencana = "var KodeRencana = ''+";
            for ($i = 1; $i <= 32 ; $i++) {
              echo "var RencanaPNJ".$i." = parseFloat(document.getElementById('RencanaKreditPNJ".$i."').innerHTML)\n";
              if ($i == 32) {
                $TotalKreditRencana .= "RencanaPNJ".$i;
                $KodeRencana .= "(document.getElementById('RencanaPNJ".$i."').checked ? 1 : 0)\n";
              } else {
                $TotalKreditRencana .= "RencanaPNJ".$i."+";
                $KodeRencana .= "(document.getElementById('RencanaPNJ".$i."').checked ? 1 : 0)+'|'+";
              }
            }            
            echo $TotalKreditRencana."\n";
            echo $KodeRencana;
          ?>
					var DataRencanaPenunjang = {Jenjang:$("#JenjangRencanaPenunjang").val(),Semester:$("#SemesterRencanaPenunjang").val(),
																			 Tahun:$("#TahunRencanaPenunjang").val(),Kode:KodeRencana,Total:TotalKreditRencana}
					$.post(BaseURL+"Penunjang/InputRencana", DataRencanaPenunjang).done(function(Respon) {
						if (Respon == '1') {
							window.location = BaseURL + "Dashboard/Penunjang"
						} else {
							alert(Respon)
						}
					})
				})

				$("#TombolRencanaTotalKredit").click(function() {
          <?php 
            $TotalRencana = "document.getElementById('RencanaTotalKredit').innerHTML = ";
            for ($i = 1; $i <= 32 ; $i++) {
              echo "var RencanaPNJ".$i." = parseFloat(document.getElementById('RencanaKreditPNJ".$i."').innerHTML)\n";
              if ($i == 32) {
                $TotalRencana .= "RencanaPNJ".$i;
              } else {
                $TotalRencana .= "RencanaPNJ".$i."+";
              }
            }            
            echo $TotalRencana;
          ?>
				})

				$(document).on("click",".EditRencanaPenunjang",function(){
          <?php $Kredit = array(3,2,3,2,2,1,2,1,0.5,1.5,1,0.5,1,3,2,3,2,2,1,3,2,1,5,3,1,5,5,5,5,3,1,0.5); ?>
					var Data = $(this).attr('EditRencanaPenunjang')
					var Pisah = Data.split("/")
					$("#NoEditRencana").val(Pisah[0])
					$("#EditJenjangRencanaPenunjang").val(Pisah[2])
					$("#EditSemesterRencanaPenunjang").val(Pisah[3])
					$("#EditTahunRencanaPenunjang").val(Pisah[4])
					var PisahKode = Pisah[5].split("|")
          <?php 
            for ($i = 1; $i <= 32 ; $i++) {
              echo "if (PisahKode[".($i-1)."] == '1') {\n";
              echo "$('#EditRencanaPNJ".$i."').attr('checked', true)\n";	
              echo "$('#EditRencanaKreditPNJ".$i."').html(".$Kredit[$i-1].")\n}\n";
            } 
          ?>
					$("#EditRencanaTotalKredit").html(Pisah[6])
					$('#ModalEditRencanaPenunjang').modal("show");
				})

				$("#TombolEditRencanaTotalKredit").click(function() {
					<?php 
            $TotalEditRencana = "document.getElementById('EditRencanaTotalKredit').innerHTML = ";
            for ($i = 1; $i <= 32 ; $i++) {
              echo "var EditRencanaPNJ".$i." = parseFloat(document.getElementById('EditRencanaKreditPNJ".$i."').innerHTML)\n";
              if ($i == 32) {
                $TotalEditRencana .= "EditRencanaPNJ".$i;
              } else {
                $TotalEditRencana .= "EditRencanaPNJ".$i."+";
              }
            }            
            echo $TotalEditRencana;
          ?>
				})
				
				$("#SimpanEditRencanaPenunjang").click(function() {
          <?php 
            $EditTotalKreditRencana = "var EditTotalKreditRencana = ";
            $EditKodeRencana = "var EditKodeRencana = ''+";
            for ($i = 1; $i <= 32 ; $i++) {
              echo "var EditRencanaPNJ".$i." = parseFloat(document.getElementById('EditRencanaKreditPNJ".$i."').innerHTML)\n";
              if ($i == 32) {
                $EditTotalKreditRencana .= "EditRencanaPNJ".$i;
                $EditKodeRencana .= "(document.getElementById('EditRencanaPNJ".$i."').checked ? 1 : 0)\n";
              } else {
                $EditTotalKreditRencana .= "EditRencanaPNJ".$i."+";
                $EditKodeRencana .= "(document.getElementById('EditRencanaPNJ".$i."').checked ? 1 : 0)+'|'+";
              }
            }            
            echo $EditTotalKreditRencana."\n";
            echo $EditKodeRencana;
          ?>
					var EditDataRencanaPenunjang = {No:$("#NoEditRencana").val(),Jenjang:$("#EditJenjangRencanaPenunjang").val(),Semester:$("#EditSemesterRencanaPenunjang").val(),
																			 Tahun:$("#EditTahunRencanaPenunjang").val(),Kode:EditKodeRencana,Total:EditTotalKreditRencana}
					$.post(BaseURL+"Penunjang/EditRencana", EditDataRencanaPenunjang).done(function(Respon) {
						if (Respon == '1') {
							window.location = BaseURL + "Dashboard/Penunjang"
						} else {
							alert(Respon)
						}
					})
				})

				$(document).on("click",".HapusRencanaPenunjang",function(){
					var Hapus = {No: $(this).attr('HapusRencanaPenunjang')}
					var Konfirmasi = confirm("Yakin Ingin Menghapus?");
      		if (Konfirmasi == true) {
						$.post(BaseURL+"Penunjang/HapusRencana", Hapus).done(function(Respon) {
							if (Respon == '1') {
								window.location = BaseURL + "Dashboard/Penunjang"
							} else {
								alert(Respon)
							}
						});
					}
				});
			})

      <?php 
        $Kredit = array(3,2,3,2,2,1,2,1,0.5,1.5,1,0.5,1,3,2,3,2,2,1,3,2,1,5,3,1,5,5,5,5,3,1,0.5);
        for ($i = 1; $i <= 32 ; $i++) {
          echo "function RencanaPNJ".$i."() {document.getElementById('RencanaPNJ".$i."').checked? document.getElementById('RencanaKreditPNJ".$i."').innerHTML = ".$Kredit[$i-1]." : document.getElementById('RencanaKreditPNJ".$i."').innerHTML = 0}\n";
        } 
        for ($i = 1; $i <= 32 ; $i++) {
          echo "function EditRencanaPNJ".$i."() {document.getElementById('EditRencanaPNJ".$i."').checked? document.getElementById('EditRencanaKreditPNJ".$i."').innerHTML = ".$Kredit[$i-1]." : document.getElementById('EditRencanaKreditPNJ".$i."').innerHTML = 0}";
        }
      ?>
    </script>
  </body>
</html>