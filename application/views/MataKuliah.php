<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4 mt-2">
            <button class="btn btn-sm btn-primary"><i style="font-size: 0.8rem;" class="fas fa-plus"> Mata Kuliah</i></button>
            </div>
            <div class="col-sm-12 mt-2">
              <div class="table-responsive">
                <table class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th class='text-center' scope="col">No</th>
                      <th scope="col">Program</th>
                      <th scope="col">Nama Mata Kuliah</th>
                      <th scope="col">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $No = 1; foreach ($MataKuliah as $key) { ?>
                      <tr>
                        <th scope="row" class='text-center align-middle'><?=$No++?></th>
                        <td class='align-middle'><?=$key['Program']?></td>
                        <td class='align-middle'><?=$key['NamaMatKul']?></td>
                        <td>
                          <button class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></button>
                          <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                        </td>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
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
		<script>
			jQuery(document).ready(function($) {
				"use strict";
				var BaseURL = '<?=base_url()?>';
				// $("#EditProfil").click(function() {
				// 	var Data = { NIP: $("#EditNIP").val(),
				// 							 Nama: $("#EditNama").val(),
				// 							 Pangkat: $("#EditPangkat").val(),
				// 							 Email: $("#EditEmail").val()}
				// 	$.post(BaseURL+"Dashboard/EditProfil", Data).done(function(Respon) {
				// 		if (Respon == '1') {
				// 			window.location = BaseURL + "Dashboard"
				// 		}
				// 		else {
				// 			alert('Gagal Menyimpan')
				// 		}
				// 	})
        //   return false
        // })
			})
		</script>
</body>
</html>