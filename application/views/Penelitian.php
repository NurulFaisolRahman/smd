<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
					<div class="col-sm-12 mt-2">
						<ul class="nav nav-pills mb-2 border border-warning rounded bg-light" id="pills-tab" role="tablist">
							<li class="nav-item">
								<a class="nav-link <?php if($this->session->userdata('SubPenelitian') == 'Rencana'){echo 'active';} ?>" id="pills-Rencana-tab" data-toggle="pill" href="#pills-Rencana" role="tab" aria-controls="pills-Rencana" aria-selected="true"><b>Rencana</b></a>
							</li>
							<li class="nav-item">
								<a class="nav-link <?php if($this->session->userdata('SubPenelitian') == 'Realisasi'){echo 'active';} ?>" id="pills-Realisasi-tab" data-toggle="pill" href="#pills-Realisasi" role="tab" aria-controls="pills-Realisasi" aria-selected="false"><b>Realisasi</b></a>
							</li>
						</ul>
						<div class="tab-content border border-warning rounded bg-light" id="pills-tabContent">
							<div class="tab-pane fade <?php if($this->session->userdata('SubPenelitian') == 'Rencana'){echo 'show active';} ?>" id="pills-Rencana" role="tabpanel" aria-labelledby="pills-Rencana-tab">
								<?php include 'RencanaPenelitian.php'; ?>
							</div>
							<div class="tab-pane fade <?php if($this->session->userdata('SubPenelitian') == 'Realisasi'){echo 'show active';} ?>" id="pills-Realisasi" role="tabpanel" aria-labelledby="pills-Realisasi-tab">
								<!-- <?php include 'RealisasiPenelitian.php'; ?> -->
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

				$('#TabelRealisasi').DataTable( {
					dom:'lfrtip',
					"lengthMenu": [ 5, 10, 20, 30 ],
					"language": {
						"paginate": {
							'previous': '<b class="text-primary"><</b>',
							'next': '<b class="text-primary">></b>'
						}
					}
				})

        $('[data-mask]').inputmask()

				$("#pills-Rencana-tab").click(function() {
					var Data = {SubPenelitian: 'Rencana'}
					$.post(BaseURL+"Dashboard/SubPenelitian", Data)
				})

				$("#pills-Realisasi-tab").click(function() {
					var Data = {SubPenelitian: 'Realisasi'}
					$.post(BaseURL+"Dashboard/SubPenelitian", Data)
				})

				$("#InputRencanaPenelitian").click(function() {
					<?php 
            $TotalKreditRencana = "var TotalKreditRencana = ";
            $KodeRencana = "var KodeRencana = ''+";
            for ($i = 1; $i <= 37 ; $i++) {
              echo "var RencanaPNL".$i." = parseInt(document.getElementById('RencanaKreditPNL".$i."').innerHTML)\n";
              if ($i == 37) {
                $TotalKreditRencana .= "RencanaPNL".$i;
                $KodeRencana .= "(document.getElementById('RencanaPNL".$i."').checked ? 1 : 0)\n";
              } else {
                $TotalKreditRencana .= "RencanaPNL".$i."+";
                $KodeRencana .= "(document.getElementById('RencanaPNL".$i."').checked ? 1 : 0)+'|'+";
              }
            }            
            echo $TotalKreditRencana."\n";
            echo $KodeRencana;
          ?>
					var DataRencanaPenelitian = {Jenjang:$("#JenjangRencanaPenelitian").val(),Semester:$("#SemesterRencanaPenelitian").val(),
																			 Tahun:$("#TahunRencanaPenelitian").val(),Kode:KodeRencana,Total:TotalKreditRencana}
					$.post(BaseURL+"Penelitian/InputRencana", DataRencanaPenelitian).done(function(Respon) {
						if (Respon == '1') {
							window.location = BaseURL + "Dashboard/Penelitian"
						} else {
							alert(Respon)
						}
					})
				})

				$("#TombolRencanaTotalKredit").click(function() {
          <?php 
            $TotalRencana = "document.getElementById('RencanaTotalKredit').innerHTML = ";
            for ($i = 1; $i <= 37 ; $i++) {
              echo "var RencanaPNL".$i." = parseInt(document.getElementById('RencanaKreditPNL".$i."').innerHTML)\n";
              if ($i == 37) {
                $TotalRencana .= "RencanaPNL".$i;
              } else {
                $TotalRencana .= "RencanaPNL".$i."+";
              }
            }            
            echo $TotalRencana;
          ?>
				})

				$(document).on("click",".EditRencanaPenelitian",function(){
          <?php $Kredit = array(40,20,15,10,40,30,20,25,25,20,15,10,10,20,15,10,7,30,25,15,10,10,5,5,3,10,5,1,2,15,10,60,50,40,30,20,15); ?>
					var Data = $(this).attr('EditRencanaPenelitian')
					var Pisah = Data.split("/")
					$("#NoEditRencana").val(Pisah[0])
					$("#EditJenjangRencanaPenelitian").val(Pisah[2])
					$("#EditSemesterRencanaPenelitian").val(Pisah[3])
					$("#EditTahunRencanaPenelitian").val(Pisah[4])
					var PisahKode = Pisah[5].split("|")
          <?php 
            for ($i = 1; $i <= 37 ; $i++) {
              echo "if (PisahKode[".($i-1)."] == '1') {\n";
              echo "$('#EditRencanaPNL".$i."').attr('checked', true)\n";	
              echo "$('#EditRencanaKreditPNL".$i."').html(".$Kredit[$i-1].")\n}\n";
            } 
          ?>
					$("#EditRencanaTotalKredit").html(Pisah[6])
					$('#ModalEditRencanaPenelitian').modal("show");
				})

				$("#TombolEditRencanaTotalKredit").click(function() {
					<?php 
            $TotalEditRencana = "document.getElementById('EditRencanaTotalKredit').innerHTML = ";
            for ($i = 1; $i <= 37 ; $i++) {
              echo "var EditRencanaPNL".$i." = parseInt(document.getElementById('EditRencanaKreditPNL".$i."').innerHTML)\n";
              if ($i == 37) {
                $TotalEditRencana .= "EditRencanaPNL".$i;
              } else {
                $TotalEditRencana .= "EditRencanaPNL".$i."+";
              }
            }            
            echo $TotalEditRencana;
          ?>
				})
				
				$("#SimpanEditRencanaPenelitian").click(function() {
          <?php 
            $EditTotalKreditRencana = "var EditTotalKreditRencana = ";
            $EditKodeRencana = "var EditKodeRencana = ''+";
            for ($i = 1; $i <= 37 ; $i++) {
              echo "var EditRencanaPNL".$i." = parseInt(document.getElementById('EditRencanaKreditPNL".$i."').innerHTML)\n";
              if ($i == 37) {
                $EditTotalKreditRencana .= "EditRencanaPNL".$i;
                $EditKodeRencana .= "(document.getElementById('EditRencanaPNL".$i."').checked ? 1 : 0)\n";
              } else {
                $EditTotalKreditRencana .= "EditRencanaPNL".$i."+";
                $EditKodeRencana .= "(document.getElementById('EditRencanaPNL".$i."').checked ? 1 : 0)+'|'+";
              }
            }            
            echo $EditTotalKreditRencana."\n";
            echo $EditKodeRencana;
          ?>
					var EditDataRencanaPenelitian = {No:$("#NoEditRencana").val(),Jenjang:$("#EditJenjangRencanaPenelitian").val(),Semester:$("#EditSemesterRencanaPenelitian").val(),
																			 Tahun:$("#EditTahunRencanaPenelitian").val(),Kode:EditKodeRencana,Total:EditTotalKreditRencana}
					$.post(BaseURL+"Penelitian/EditRencana", EditDataRencanaPenelitian).done(function(Respon) {
						if (Respon == '1') {
							window.location = BaseURL + "Dashboard/Penelitian"
						} else {
							alert(Respon)
						}
					})
				})

				$(document).on("click",".HapusRencanaPenelitian",function(){
					var Hapus = {No: $(this).attr('HapusRencanaPenelitian')}
					var Konfirmasi = confirm("Yakin Ingin Menghapus?");
      		if (Konfirmasi == true) {
						$.post(BaseURL+"Penelitian/HapusRencana", Hapus).done(function(Respon) {
							if (Respon == '1') {
								window.location = BaseURL + "Dashboard/Penelitian"
							} else {
								alert(Respon)
							}
						});
					}
				});
			})

      <?php 
        $Kredit = array(40,20,15,10,40,30,20,25,25,20,15,10,10,20,15,10,7,30,25,15,10,10,5,5,3,10,5,1,2,15,10,60,50,40,30,20,15);
        for ($i = 1; $i <= 37 ; $i++) {
          echo "function RencanaPNL".$i."() {document.getElementById('RencanaPNL".$i."').checked? document.getElementById('RencanaKreditPNL".$i."').innerHTML = ".$Kredit[$i-1]." : document.getElementById('RencanaKreditPNL".$i."').innerHTML = 0}\n";
        } 
        for ($i = 1; $i <= 37 ; $i++) {
          echo "function EditRencanaPNL".$i."() {document.getElementById('EditRencanaPNL".$i."').checked? document.getElementById('EditRencanaKreditPNL".$i."').innerHTML = ".$Kredit[$i-1]." : document.getElementById('EditRencanaKreditPNL".$i."').innerHTML = 0}";
        }
      ?>
    </script>
  </body>
</html>