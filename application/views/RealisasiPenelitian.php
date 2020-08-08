<div class="container-fluid">
  <div class="row">
    <div class="col-sm-4 mt-1 mb-1">
      <div class="input-group mb-1">
        <div class="input-group-prepend">
          <label class="input-group-text bg-warning"><i class="fa fa-tasks"></i><b>&nbsp;Kegiatan</b></label>
        </div>
        <?php 
          $Kegiatan = array('Menghasilkan karya ilmia hsesuai dengan bidang ilmunya',
          'Hasil penelitian atau hasil pemikiran yang didesiminasikan',
          'Hasil penelitian atau pemikiran atau kerjasama industri yang tidak dipublikasikan (tersimpan dalam perpustakaan) yang dilakukan secara melembaga',
          'Menerjemahkan/menyadur buku ilmiah yang diterbitkan (ber ISBN)',
          'Mengedit/menyunting karya ilmiah dalam bentuk buku yang diterbitkan (ber ISBN)',
          'Membuat rancangan dan karya teknologi yang dipatenkan atau seni yang terdaftar di HaKI secara nasional atau internasional',
          'Membuat rancangan dan karya teknologi yang tidak dipatenkan; rancangan dan karya seni monumental yang tidak terdaftar di HaKI tetapi telah dipresentasikan pada forum yang teragenda',
          'Membuat rancangan dan karya seni yang tidak terdaftar HaKI');
        ?>
        <select class="custom-select" id="IdKegiatanPenelitian">
          <?php $Id = 1; foreach ($Kegiatan as $key) { $ID = 'PNL'.$Id;?>
            <option value="<?='PNL'.$Id++?>" <?php if ($this->session->userdata('IdKegiatanPenelitian') == $ID) {
              echo 'selected';
            } ?>><?=$key?></option>
          <?php } ?>
        </select>
      </div>
    </div> 
    <div class="col-sm-4 mt-1 mb-1">
      <button type="button" id="LihatRealisasi" class="btn btn-primary"><i class="fa fa-eye"></i><b> Lihat</b></button>
      <button type="button" class="btn btn-danger text-light" data-toggle="modal" data-target="#InputRealisasiPenelitian"><i class="fa fa-plus"></i> <b>Input</b></button>       
      <button class="btn btn-success" data-toggle="modal" data-target="#OutputPenelitian"><i class="fa fa-file-excel"></i> <b>Download</b></button>
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
                  <a href="<?=base_url('Penelitian/'.$key['Bukti'])?>" class="btn btn-sm btn-primary" download><i class="fas fa-download"></i></a>
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
<div class="modal fade" id="InputRealisasiPenelitian">
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
          <select class="custom-select" id="InputIdKegiatanPenelitian" onchange="InputIdKegiatanPenelitian()">
          <?php $Id = 1; foreach ($Kegiatan as $key) { ?>
              <option value="<?='PNL'.$Id++?>"><?=$key?></option>
            <?php } ?>
          </select>
        </div>
        <div id="OpsiPNL1">
          <div class="input-group mb-1">
            <div class="input-group-prepend">
              <span class="input-group-text bg-primary"><b>Jenis</b></span>
            </div>
            <select class="custom-select" id="Point1">
              <option value="1">Hasil penelitian yang dipublikasikan dalam bentuk buku referensi</option>
              <option value="2">Hasil penelitian yang dipublikasikan dalam bentuk Monograf</option>
              <option value="3">Hasil penelitian dalam buku yang dipublikasikan dan berisi berbagai tulisan dari berbagai penulis (book chapter) Internasional</option>
              <option value="4">Hasil penelitian dalam buku yang dipublikasikan dan berisi berbagai tulisan dari berbagai penulis (book chapter) Nasional</option>
              <option value="5">Hasil penelitian yang dipublikasikan dalam bentuk 1) Jurnal internasional bereputasi (terindeks pada database internasional bereputasi dan berfaktor dampak)</option>
              <option value="6">Hasil penelitian yang dipublikasikan dalam bentuk 2) Jurnal internasional terindeks pada basis datainternasional bereputasi</option>
              <option value="7">Hasil penelitian yang dipublikasikan dalam bentuk 3) Jurnal internasionalterindekspada basis data internasional di luar kategori 2)</option>
              <option value="8">Hasil penelitian yang dipublikasikan dalam bentuk 4) a. Jurnal Nasional terakreditasiDikti</option>
              <option value="9">Hasil penelitian yang dipublikasikan dalam bentuk 4) b. Jurnal nasional terakreditasi Kemenristekdiktiperingkat 1 dan 2</option>
              <option value="10">Hasil penelitian yang dipublikasikan dalam bentuk 5) a. Jurnal Nasional berbahasa Inggris/bahasa resmi (PBB) terindeks pada basis data yang diakui Kemenristekdikti, contoh : CABI/ICI, Jurnal nasional terakreditasi peringkat 3 dan 4</option>
              <option value="11">Hasil penelitian yang dipublikasikan dalam bentuk 5) b. Jurnal Nasional berbahasa Indonesia terindeks pada basis datayang diakui Kemenristekdikti, contoh : akreditasi peringkat 5 dan 6</option>
              <option value="12">Hasil penelitian yang dipublikasikan dalam bentuk 6) Jurnal Nasional</option>
              <option value="13">Hasil penelitian yang dipublikasikan dalam bentuk 7) Jurnal ilmiah yang ditulis dalam Bahasa Resmi PBB namun tidak memenuhi syarat-syarat sebagai jurnal ilmiah internasional</option>
            </select>
          </div>
        </div>
        <div id="OpsiPNL2" style="display: none;">
          <div class="input-group mb-1">
            <div class="input-group-prepend">
              <span class="input-group-text bg-primary"><b>Jenis</b></span>
            </div>
            <select class="custom-select" id="Point2">
              <option value="1">Dipresentasikan secara oral dan dimuat dalam prosiding yang dipublikasikan (ber ISSN/ISBN) 1) Internasional terindeks pada Scimagojr & Scopus</option>
              <option value="2">Dipresentasikan secara oral dan dimuat dalam prosiding yang dipublikasikan (ber ISSN/ISBN) 2) Internasional terindeks pada SCOPUS, IEEE Explore, SPIE</option>
              <option value="3">Dipresentasikan secara oral dan dimuat dalam prosiding yang dipublikasikan (ber ISSN/ISBN) 3) Internasional</option>
              <option value="4">Dipresentasikan secara oral dan dimuat dalam prosiding yang dipublikasikan (ber ISSN/ISBN) 4) Nasional</option>
              <option value="5">Disajikan dalam bentuk poster & dimuat dalam prosiding yang dipublikasikan Internasional</option>
              <option value="6">Disajikan dalam bentuk poster & dimuat dalam prosiding yang dipublikasikan Nasional</option>
              <option value="7">Disajikan dalam seminar/simposium/lokakarya, tetapi tidak dimuat dalam prosiding yang dipublikasikan Internasional</option>
              <option value="8">Disajikan dalam seminar/simposium/lokakarya, tetapi tidak dimuat dalam prosiding yang dipublikasikan Nasional</option>
              <option value="9">Hasil penelitian/pemikiran yang tidak disajikan dalam seminar/simposium/lokakarya, tetapi dimuat dalam prosiding Internasional</option>
              <option value="10">Hasil penelitian/pemikiran yang tidak disajikan dalam seminar/simposium/lokakarya, tetapi dimuat dalam prosiding Nasional</option>
              <option value="11"> Hasil penelitian/pemikiran yang disajikan dalam koran/majalah populer/umum</option>
            </select>
          </div>
        </div>
        <div id="OpsiPNL6" style="display: none;">
          <div class="input-group mb-1">
            <div class="input-group-prepend">
              <span class="input-group-text bg-primary"><b>Jenis</b></span>
            </div>
            <select class="custom-select" id="Point6">
              <option value="1">Internasionalyang sudah diimplementasikan di industri (paling sedikit diakui oleh 4 Negara)</option>
              <option value="2">Internasional (paling sedikit diakui oleh 4 Negara)</option>
              <option value="3">Nasional (yang sudah diimplementasikan di industri)</option>
              <option value="4">Nasional</option>
              <option value="5">Nasional, dalam bentuk paten sederhana yang telah memiliki sertifikat dari Direktorat Jenderal Kekayaan Intelektual, Kemenkumham</option>
              <option value="6">Karya buku, desain industri, indikasi geografisyang telah memiliki sertifikat dari Direktorat Jenderal Kekayaan Intelektual, Kemenkumham</option>
            </select>
          </div>
        </div>
        <div id="OpsiPNL7" style="display: none;">
          <div class="input-group mb-1">
            <div class="input-group-prepend">
              <span class="input-group-text bg-primary"><b>Tingkat</b></span>
            </div>
            <select class="custom-select" id="Point7">
              <option value="1">Tingkat Internasional</option>
              <option value="2">Tingkat Nasional</option>
              <option value="3">Tingkat Lokal</option>
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
        <button type="submit" class="btn btn-success" id="TambahRealisasiPenelitian"><b>Simpan</b></button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="EditRealisasiPenelitian">
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
        <button type="submit" class="btn btn-success" id="UpdateRealisasiPenelitian"><b>Simpan</b></button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="OutputPenelitian">
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