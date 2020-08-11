<div class="container-fluid">
  <div class="row">
    <div class="col-sm-4 mt-1 mb-1">
      <div class="input-group mb-1">
        <div class="input-group-prepend">
          <label class="input-group-text bg-warning"><i class="fa fa-tasks"></i><b>&nbsp;Kegiatan</b></label>
        </div>
        <?php 
          $Kegiatan = array('A1. Menyelesaikan pendidikan formal dan memperoleh ijazah',
          'A2. Mengikuti diklat prajabatan golongan III',
          'B1. Mengajar mata kuliah',
          'B2. Membimbing seminar mahasiswa',
          'B3. Membimbing KKN, Praktik Kerja Lapangan',
          'B4. Membimbing disertasi/tesis/skripsi',
          'B5. Penguji ujian akhir/Profesi (setiap mahasiswa)',
          'B6. Membina mahasiswa di bidang akademik/kemahasiswaan',
          'B7. Mengembangkan program kuliah yang mempunyai nilai kebaharuan metode/substansi',
          'B8. Mengembangkan bahan pengajaran yang mempunyai nilai kebaharuan',
          'B9. Menyampaikan orasi ilmiah di tingkat perguruan tinggi',
          'B10. Menduduki jabatan pimpinan perguruan tinggi',
          'B11. Membimbing dosen yang mempunyai jabatan akademik lebih rendah',
          'B12. Melaksanakan kegiatan detasering dan pencangkokan di luar institusi tempat bekerja',
          'B13. Melaksanakan pengembangan diri untuk meningkatkan kompetensi');
        ?>
        <select class="custom-select" id="IdKegiatanPendidikan">
          <?php $Id = 1; foreach ($Kegiatan as $key) { $ID = 'PND'.$Id;?>
            <option value="<?='PND'.$Id++?>" <?php if ($this->session->userdata('IdKegiatanPendidikan') == $ID) {
              echo 'selected';
            } ?>><?=$key?></option>
          <?php } ?>
        </select>
      </div>
    </div> 
    <div class="col-sm-4 mt-1 mb-1">
      <button type="button" id="LihatRealisasi" class="btn btn-primary"><i class="fa fa-eye"></i><b> Lihat</b></button>
      <button type="button" class="btn btn-danger text-light" data-toggle="modal" data-target="#InputRealisasiPendidikan"><i class="fa fa-plus"></i> <b>Input</b></button>       
      <button class="btn btn-success" data-toggle="modal" data-target="#OutputPendidikan"><i class="fa fa-file-excel"></i> <b>Download</b></button>
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
            <th class="align-middle">Satuan</th>
            <th class="align-middle">Volume</th>
            <th class="align-middle">Kredit</th>
            <th class="align-middle">Jumlah Kredit</th>
            <th class="align-middle">Bukti</th>
            <th class="align-middle">Aksi</th>
          </tr>
        </thead>
        <tbody>
        <?php 
          function limit_text($text, $limit) {
            if (str_word_count($text, 0) > $limit) {
                $words = str_word_count($text, 2);
                $pos   = array_keys($words);
                $text  = substr($text, 0, $pos[$limit]) . '...';
            }
            return $text;
          }        
        ?>
        <?php $Total = 0; $No = 1; foreach ($Realisasi as $key) { ?>
            <tr>	
              <td class="text-center align-middle"><?=$No++?></td>
              <td class="text-center align-middle"><?=$key['Jenjang']?></td>
              <td class="text-center align-middle"><?=$key['Semester']?></td>
              <td class="text-center align-middle"><?=$key['Tahun']?></td>
              <td class="align-middle"><?=limit_text($key['Kegiatan'],3)?></td>
              <td class="text-center align-middle"><?=$key['TanggalKegiatan']?></td>
              <td class="text-center align-middle"><?=$key['Satuan']?></td>
              <td class="text-center align-middle"><?=$key['Volume']?></td>
              <td class="text-center align-middle"><?=$key['Kredit']?></td>
              <td class="text-center align-middle"><?=$key['JumlahKredit']?></td>
              <td class="text-center align-middle text-success h3"><?php if ($key['Bukti'] != '') { ?>
                  <a href="<?=base_url('Pendidikan/'.$key['Bukti'])?>" class="btn btn-sm btn-primary" download><i class="fas fa-download"></i></a>
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
<div class="modal fade" id="InputRealisasiPendidikan">
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
          <select class="custom-select" id="InputIdKegiatanPendidikan" onchange="InputIdKegiatanPendidikan()">
          <?php $Id = 1; foreach ($Kegiatan as $key) { ?>
              <option value="<?='PND'.$Id++?>"><?=$key?></option>
            <?php } ?>
          </select>
        </div>
        <div id="OpsiPND1">
          <div class="input-group mb-1">
            <div class="input-group-prepend">
              <span class="input-group-text bg-primary"><b>Jenjang</b></span>
            </div>
            <select class="custom-select" id="Jenjang">
              <option value="200">Doktor / Sederajat</option>
              <option value="150">Magister / Sederajat</option>
            </select>
          </div>
        </div>
        <div id="OpsiPND6" style="display: none;">
          <div class="input-group mb-1">
            <div class="input-group-prepend">
              <span class="input-group-text bg-primary"><b>Jenis Pembimbing</b></span>
            </div>
            <select class="custom-select" id="JenisPembimbing">
              <option value="1">Pembimbing Utama</option>
              <option value="2">Pembimbing Pendamping</option>
            </select>
          </div>
          <div class="input-group mb-1">
            <div class="input-group-prepend">
              <span class="input-group-text bg-primary"><b>Jenis Bimbingan</b></span>
            </div>
            <select class="custom-select" id="JenisBimbingan">
              <option value="1">Disertasi</option>
              <option value="2">Tesis</option>
              <option value="3">Skripsi</option>
            </select>
          </div>
        </div>
        <div id="OpsiPND7" style="display: none;">
          <div class="input-group mb-1">
            <div class="input-group-prepend">
              <span class="input-group-text bg-primary"><b>Jenis Penguji</b></span>
            </div>
            <select class="custom-select" id="JenisPenguji">
              <option value="1">Ketua Penguji</option>
              <option value="2">Anggota Penguji</option>
            </select>
          </div>
        </div>
        <div id="OpsiPND10" style="display: none;">
          <div class="input-group mb-1">
            <div class="input-group-prepend">
              <span class="input-group-text bg-primary"><b>Jenis</b></span>
            </div>
            <select class="custom-select" id="BahanPengajaran">
              <option value="1">Buku ajar</option>
              <option value="2">Diktat, Modul, Petunjuk praktikum, Model, Alat bantu, Audio visual, Naskah tutorial</option>
            </select>
          </div>
        </div>
        <div id="OpsiPND12" style="display: none;">
          <div class="input-group mb-1">
            <div class="input-group-prepend">
              <span class="input-group-text bg-primary"><b>Jabatan</b></span>
            </div>
            <select class="custom-select" id="JenisPND12">
              <option value="6">Rektor</option>
              <option value="5">Wakil rektor / dekan / direktur program pasca sarjana / ketua lembaga</option>
              <option value="4">Ketua sekolah tinggi / pembantu dekan / asisten direktur program pasca sarjana / direktur politeknik / kepala LLDikti</option>
              <option value="4">Pembantu ketua sekolah tinggi/pembantu direktur politeknik</option>
              <option value="4">Direktur akademi</option>
              <option value="3">Pembantu direktur politeknik, ketua jurusan / bagian pada universitas / institut / sekolah tinggi</option>
              <option value="3">Pembantu direktur akademi / ketua jurusan / ketua prodipada universitas / politeknik / akademi, sekretaris jurusan / bagian pada universitas / institut / sekolah tinggi</option>
              <option value="3">Sekretaris jurusan pada politeknik / akademi dan kepala laboratorium (bengkel) universitas / institut / sekolah tinggi / politeknik / akademi</option>
            </select>
          </div>
        </div>
        <div id="OpsiPND13" style="display: none;">
          <div class="input-group mb-1">
            <div class="input-group-prepend">
              <span class="input-group-text bg-primary"><b>Jenis Pembimbing</b></span>
            </div>
            <select class="custom-select" id="JenisPND13">
              <option value="1">Pembimbing pencangkokan</option>
              <option value="2">Reguler</option>
            </select>
          </div>
        </div>
        <div id="OpsiPND14" style="display: none;">
          <div class="input-group mb-1">
            <div class="input-group-prepend">
              <span class="input-group-text bg-primary"><b>Jenis</b></span>
            </div>
            <select class="custom-select" id="JenisPND14">
              <option value="1">Detasering</option>
              <option value="2">Pencangkokan</option>
            </select>
          </div>
        </div>
        <div id="OpsiPND15" style="display: none;">
          <div class="input-group mb-1">
            <div class="input-group-prepend">
              <span class="input-group-text bg-primary"><b>Rentang</b></span>
            </div>
            <select class="custom-select" id="JenisPND15">
              <option value="15">lebih dari 960 jam</option>
              <option value="9">antara 641-960 jam</option>
              <option value="6">antara 481-640 jam</option>
              <option value="3">antara 161-480 jam</option>
              <option value="2">antara 81-160 jam</option>
              <option value="1">antara 30-80 jam</option>
              <option value="0.5">antara 10-30 jam</option>
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
          <input class="form-control" type="text" id="Volume">
        </div>
        <div class="input-group mb-1">
          <div class="input-group-prepend">
            <span class="input-group-text bg-primary"><b>Bukti</b></span>
          </div>
          <input class="form-control" type="file" id="Bukti">
        </div>
        <pre class="text-danger"><b>Bukti Berupa Pdf & Wajib Menyertakan Surat Tugas/SK</b></pre>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-danger" data-dismiss="modal"><b>Tutup</b></button>
        <button type="submit" class="btn btn-success" id="TambahRealisasiPendidikan"><b>Simpan</b></button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="EditRealisasiPendidikan">
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
          <div class="input-group-prepend">
            <button class="input-group-text bg-primary" id="CancelBukti"><b>X</b></button>
          </div>
        </div>
        <pre class="text-danger"><b>Bukti Berupa Pdf & Wajib Menyertakan Surat Tugas/SK</b></pre>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-danger" data-dismiss="modal"><b>Tutup</b></button>
        <button type="submit" class="btn btn-success" id="UpdateRealisasiPendidikan"><b>Simpan</b></button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="OutputPendidikan">
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