<div class="container-fluid">
  <div class="row">
    <div class="col-sm-4 mt-1 mb-1">
      <div class="input-group mb-1">
        <div class="input-group-prepend">
          <label class="input-group-text bg-warning"><i class="fa fa-tasks"></i><b>&nbsp;Kegiatan</b></label>
        </div>
        <?php 
          $Kegiatan = array('Menjadi anggota dalam suatu Panitia / Badan pada Perguruan Tinggi',
          'Menjadi anggota panitia / badan pada lembaga pemerintah',
          'Menjadi anggota organisasi profesi',
          'Mewakili Perguruan Tinggi / Lembaga Pemerintah duduk dalam Panitia Antar Lembaga, tiap kepanitiaan',
          'Menjadi anggota delegasi Nasional ke pertemuan Internasional',
          'Berperan serta aktif dalam pertemuan ilmiah',
          'Mendapat tanda jasa / penghargaan',
          'Menulis buku pelajaran SLTA ke bawah yang diterbitkan dan diedarkan secara nasional',
          'Mempunyai prestasi di bidang olahraga/ Humaniora',
          'Keanggotaan dalam tim penilai jabatan akademik dosen (tiap semester)');
        ?>
        <select class="custom-select" id="IdKegiatanPenunjang">
          <?php $Id = 1; foreach ($Kegiatan as $key) { $ID = 'PNJ'.$Id;?>
            <option value="<?='PNJ'.$Id++?>" <?php if ($this->session->userdata('IdKegiatanPenunjang') == $ID) {
              echo 'selected';
            } ?>><?=$key?></option>
          <?php } ?>
        </select>
      </div>
    </div> 
    <div class="col-sm-4 mt-1 mb-1">
      <button type="button" id="LihatRealisasi" class="btn btn-primary"><i class="fa fa-eye"></i><b> Lihat</b></button>
      <button type="button" class="btn btn-danger text-light" data-toggle="modal" data-target="#InputRealisasiPenunjang"><i class="fa fa-plus"></i> <b>Input</b></button>       
      <button class="btn btn-success" data-toggle="modal" data-target="#OutputPenunjang"><i class="fa fa-file-excel"></i> <b>Download</b></button>
      </div>        
    </div>   
  </div>
  <div class="container-fluid">
    <div class="table-responsive mb-2">
      <table id="TabelRealisasi" class="table table-bordered table-striped">
        <thead class="bg-warning">
          <tr>
            <th class="align-middle">No</th>
            <th class="align-middle">Homebase</th>
            <th class="align-middle">Semester</th>
            <th class="align-middle">Tahun</th>
            <th class="align-middle">Uraian Kegiatan</th>
            <th class="align-middle">Tanggal</th>
            <th class="align-middle">Volume</th>
            <th class="align-middle">Kredit</th>
            <th class="align-middle">Jumlah Kredit</th>
            <th class="align-middle">Bukti</th>
            <th class="align-middle">Aksi</th>
          </tr>
        </thead>
        <tbody>
        <?php $Total = 0; $No = 1; foreach ($Realisasi as $key) { ?>
            <tr>	
              <td class="text-center align-middle"><?=$No++?></td>
              <td class="text-center align-middle"><?=$key['Jenjang']?></td>
              <td class="text-center align-middle"><?=$key['Semester']?></td>
              <td class="text-center align-middle"><?=$key['Tahun']?></td>
              <td class="align-middle"><?=$key['Kegiatan']?></td>
              <td class="text-center align-middle"><?=$key['TanggalKegiatan']?></td>
              <td class="text-center align-middle"><?=$key['Volume']?></td>
              <td class="text-center align-middle"><?=$key['Kredit']?></td>
              <td class="text-center align-middle"><?=$key['JumlahKredit']?></td>
              <td class="text-center align-middle text-success h3"><?php if ($key['Bukti'] != '') { ?>
                  <a href="<?=base_url('Penunjang/'.$key['Bukti'])?>" class="btn btn-sm btn-primary" download><i class="fas fa-download"></i></a>
                <?php } ?></td>
              <td class="text-center align-middle">                          
                <button EditRealisasi="<?=$key['No']."|".$key['Jenjang']."|".$key['Semester']."|".$key['Tahun']."|".$key['Kegiatan']."|".$key['Volume']."|".$key['IdKegiatan']."|".$key['Jabatan']."|".$key['Bukti']."|".$key['TanggalKegiatan']."|".$key['Kode']?>" class="btn btn-sm btn-warning EditRealisasi"><i class="fas fa-edit"></i></button>
                <button HapusRealisasi="<?=$key['No']."|".$key['Bukti']?>" class="btn btn-sm btn-danger HapusRealisasi"><i class="fas fa-trash"></i></button>
              </td>
            </tr>
            <?php 
                $Total += $key['JumlahKredit'];
              ?>
            <?php } ?>
        </tbody>
        <tfoot>
          <tr>
            <th colspan="8" class="text-center">Total</th>
            <th class="bg-success text-center align-middle"><?=$Total?></th>
            <td colspan="2"></td>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>
</div>
<div class="modal fade" id="InputRealisasiPenunjang">
  <div class="modal-dialog">
    <div class="modal-content bg-warning">
      <div class="modal-body">
        <div class="input-group mb-1">
          <div class="input-group-prepend">
            <label class="input-group-text bg-primary"><b>Homebase</b></label>
          </div>
          <select class="custom-select" id="JenisRealisasi">										
              <option value="S1">S1</option>
              <option value="S2">S2</option>
          </select>
        </div>
        <div class="input-group mb-1">
          <div class="input-group-prepend">
            <label class="input-group-text bg-primary"><b>Semester</b></label>
          </div>
          <select class="custom-select" id="SemesterRealisasi">										
              <option value="Ganjil">Ganjil</option>
              <option value="Genap">Genap</option>
          </select>
        </div>
        <div class="input-group mb-1">
          <div class="input-group-prepend">
            <label class="input-group-text bg-primary"><b>Tahun</b></label>
          </div>
          <input class="form-control" type="text" id="TahunRealisasi"  data-inputmask='"mask": "9999"' data-mask value="20">
        </div>
        <div class="input-group mb-1">
          <div class="input-group-prepend">
            <span class="input-group-text bg-primary"><b>Kegiatan</b></span>
          </div>
          <select class="custom-select" id="InputIdKegiatanPenunjang" onchange="InputIdKegiatanPenunjang()">
          <?php $Id = 1; foreach ($Kegiatan as $key) { ?>
              <option value="<?='PNJ'.$Id++?>"><?=$key?></option>
            <?php } ?>
          </select>
        </div>
        <div id="OpsiPNJ1">
          <div class="input-group mb-1">
            <div class="input-group-prepend">
              <span class="input-group-text bg-primary"><b>Panitia</b></span>
            </div>
            <select class="custom-select" id="PanitiaUniversitas">
              <option value="1">Sebagai Ketua/Wakil Ketua merangkap Anggota, tiap tahun</option>
              <option value="2">Sebagai Anggota, tiap tahun</option>
            </select>
          </div>
        </div>
        <div id="OpsiPNJ2" style="display: none;">
          <div class="input-group mb-1">
            <div class="input-group-prepend">
              <span class="input-group-text bg-primary"><b>Panitia</b></span>
            </div>
            <select class="custom-select" id="PanitiaLembagaPemerintah">
              <option value="1">Panitia Pusat, sebagai Ketua/Wakil Ketua, tiap kepanitiaan</option>
              <option value="2">Panitia Pusat, sebagai Anggota, tiap kepanitiaan</option>
              <option value="3">Panitia Daerah, sebagai Ketua/Wakil Ketua, tiap kepanitiaan</option>
              <option value="4">Panitia Daerah, sebagai Anggota, tiap kepanitiaan</option>
            </select>
          </div>
        </div>
        <div id="OpsiPNJ3" style="display: none;">
          <div class="input-group mb-1">
            <div class="input-group-prepend">
              <span class="input-group-text bg-primary"><b>Tingkat</b></span>
            </div>
            <select class="custom-select" id="AnggotaProfesi">
              <option value="1">Tingkat Internasional, sebagai Pengurus, tiap periode jabatan</option>
              <option value="2">Tingkat Internasional, Anggota atas permintaan, tiap periode jabatan</option>
              <option value="3">Tingkat Internasional, Anggota, tiap periode jabatan</option>
              <option value="4">Tingkat Nasional, sebagai Pengurus, tiap periode jabatan</option>
              <option value="5">Tingkat Nasional, Anggota atas permintaan, tiap periode jabatan</option>
              <option value="6">Tingkat Nasional, Anggota, tiap periode jabatan</option>
            </select>
          </div>
        </div>
        <div id="OpsiPNJ5" style="display: none;">
          <div class="input-group mb-1">
            <div class="input-group-prepend">
              <span class="input-group-text bg-primary"><b>Panitia</b></span>
            </div>
            <select class="custom-select" id="AnggotaDelegasi">
              <option value="1">Sebagai Ketua delegasi, tiap kegiatan</option>
              <option value="2">Sebagai Anggota, tiap kegiatan</option>
            </select>
          </div>
        </div>
        <div id="OpsiPNJ6" style="display: none;">
          <div class="input-group mb-1">
            <div class="input-group-prepend">
              <span class="input-group-text bg-primary"><b>Tingkat</b></span>
            </div>
            <select class="custom-select" id="PeranIlmiah">
              <option value="1">Tingkat Internasional/Nasional/Regional sebagai Ketua, tiap kegiatan</option>
              <option value="2">Tingkat Internasional/Nasional/Regional sebagai Anggota/peserta, tiap kegiatan</option>
              <option value="3">Di lingkungan Perguruan Tinggi sebagai Ketua, tiap kegiatan</option>
              <option value="4">Di lingkungan Perguruan Tinggi sebagai Anggota/peserta, tiap kegiatan</option>
            </select>
          </div>
        </div>
        <div id="OpsiPNJ7" style="display: none;">
          <div class="input-group mb-1">
            <div class="input-group-prepend">
              <span class="input-group-text bg-primary"><b>Penghargaan</b></span>
            </div>
            <select class="custom-select" id="Penghargaan">
              <option value="1">Penghargaan/tanda jasa Satya lencana 30 tahun</option>
              <option value="2">Penghargaan/tanda jasa Satya lencana 20 tahun</option>
              <option value="3">Penghargaan/tanda jasa Satya lencana 10 tahun</option>
              <option value="4">Tingkat Internasional, tiap tanda jasa/penghargaan</option>
              <option value="5">Tingkat Nasional, tiap tanda jasa/penghargaan</option>
              <option value="6">Tingkat Daerah/Lokal, tiap tanda jasa/penghargaan</option>
            </select>
          </div>
        </div>
        <div id="OpsiPNJ8" style="display: none;">
          <div class="input-group mb-1">
            <div class="input-group-prepend">
              <span class="input-group-text bg-primary"><b>Jenis Buku</b></span>
            </div>
            <select class="custom-select" id="Buku">
              <option value="1">Buku SMTA atau setingkat, tiap buku</option>
              <option value="2">Buku SMTP atau setingkat, tiap buku</option>
              <option value="3">Buku SD atau setingkat, tiap buku</option>
            </select>
          </div>
        </div>
        <div id="OpsiPNJ9" style="display: none;">
          <div class="input-group mb-1">
            <div class="input-group-prepend">
              <span class="input-group-text bg-primary"><b>Tingakt</b></span>
            </div>
            <select class="custom-select" id="Humaniora">
              <option value="1"> Tingkat Internasional, tiap piagam/medali</option>
              <option value="2"> Nasional, tiap piagam/medali</option>
              <option value="3">Tingkat Daerah/Lokal, tiap piagam/medali</option>
            </select>
          </div>
        </div>
        <div class="input-group mb-1">
          <span class="input-group-text bg-primary"><b>Uraian</b></span>
          <textarea class="form-control" id="Uraian" rows="2"></textarea>
        </div>
        <div class="input-group mb-1">
          <div class="input-group-prepend">
            <span class="input-group-text bg-primary"><b>Tanggal Kegiatan</b></span>
          </div>
          <input class="form-control" type="text" id="TanggalKegiatan">
        </div>
        <div class="input-group mb-1">
          <div class="input-group-prepend">
            <span class="input-group-text bg-primary"><b>Volume Kegiatan</b></span>
          </div>
          <input class="form-control" type="text" id="Volume" data-inputmask='"mask": "99"' data-mask>
        </div>
        <div class="input-group mb-1">
          <div class="input-group-prepend">
            <span class="input-group-text bg-primary"><b>Bukti</b></span>
          </div>
          <input class="form-control" type="file" id="Bukti">
        </div>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-danger" data-dismiss="modal"><b>Tutup</b></button>
        <button type="submit" class="btn btn-success" id="TambahRealisasiPenunjang"><b>Simpan</b></button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="EditRealisasiPenunjang">
  <div class="modal-dialog">
    <div class="modal-content bg-warning">
      <div class="modal-body">
        <div class="input-group mb-1">
          <div class="input-group-prepend">
            <label class="input-group-text bg-primary"><b>Homebase</b></label>
          </div>
          <input class="form-control" type="hidden" id="EditNoRealisasi">
          <input class="form-control" type="hidden" id="EditIdKegiatan">
          <input class="form-control" type="hidden" id="Kode">
          <input class="form-control" type="hidden" id="EditJabatanRealisasi">
          <input class="form-control" type="hidden" id="EditBuktiRealisasi">
          <select class="custom-select" id="EditJenisRealisasi">										
              <option value="S1">S1</option>
              <option value="S2">S2</option>
          </select>
        </div>
        <div class="input-group mb-1">
          <div class="input-group-prepend">
            <label class="input-group-text bg-primary"><b>Semester</b></label>
          </div>
          <select class="custom-select" id="EditSemesterRealisasi">										
              <option value="Ganjil">Ganjil</option>
              <option value="Genap">Genap</option>
          </select>
        </div>
        <div class="input-group mb-1">
          <div class="input-group-prepend">
            <label class="input-group-text bg-primary"><b>Tahun</b></label>
          </div>
          <input class="form-control" type="text" id="EditTahunRealisasi"  data-inputmask='"mask": "9999"' data-mask value="20">
        </div>
        <div class="input-group mb-1">
          <span class="input-group-text bg-primary"><b>Uraian</b></span>
          <textarea class="form-control" id="EditUraian" rows="2"></textarea>
        </div>
        <div class="input-group mb-1">
          <div class="input-group-prepend">
            <span class="input-group-text bg-primary"><b>Tanggal Kegiatan</b></span>
          </div>
          <input class="form-control" type="text" id="EditTanggalKegiatan">
        </div>
        <div class="input-group mb-1">
          <div class="input-group-prepend">
            <span class="input-group-text bg-primary"><b>Volume Kegiatan</b></span>
          </div>
          <input class="form-control" type="text" id="EditVolume">
        </div>
        <div class="input-group mb-1">
          <div class="input-group-prepend">
            <span class="input-group-text bg-primary"><b>Bukti</b></span>
          </div>
          <input class="form-control" type="file" id="EditBukti">
        </div>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-danger" data-dismiss="modal"><b>Tutup</b></button>
        <button type="submit" class="btn btn-success" id="UpdateRealisasiPenunjang"><b>Simpan</b></button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="OutputPenunjang">
  <div class="modal-dialog">
    <div class="modal-content bg-warning">
      <div class="modal-body">
        <div class="input-group mb-1">
          <div class="input-group-prepend">
            <label class="input-group-text bg-primary"><b>Homebase</b></label>
          </div>
          <select class="custom-select" id="FilterJenjang">										
            <option value="S1">S1</option>
            <option value="S2">S2</option>
            <option value="S">Semua</option>
          </select>
        </div>
        <div class="input-group mb-1">
          <div class="input-group-prepend">
            <label class="input-group-text bg-primary"><b>Semester</b></label>
          </div>
          <select class="custom-select" id="FilterSemester">										
            <option value="Ganjil">Ganjil</option>
            <option value="Genap">Genap</option>
            <option value="G">Semua</option>
          </select>
        </div>
        <div class="input-group mb-1">
          <div class="input-group-prepend">
            <label class="input-group-text bg-primary"><b>Tahun</b></label>
          </div>
          <input class="form-control" type="text" id="FilterTahun"  data-inputmask='"mask": "9999-9999"' data-mask>
          <a id="Lampiran" href="Lampiran" download="Lampiran"></a>
        </div>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-danger" data-dismiss="modal"><b>Tutup</b></button>
        <button type="submit" class="btn btn-success" id="Download"><b>Download</b></button>
      </div>
    </div>
  </div>
</div>