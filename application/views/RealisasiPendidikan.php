<div class="container-fluid">
  <div class="row">
    <div class="col-sm-auto mt-1 mb-1">
      <button type="button" id="LihatRealisasi" class="btn btn-primary mb-1"><i class="fa fa-eye"></i><b> Lihat</b></button>
      <button type="button" class="btn btn-danger text-light mb-1" data-toggle="modal" data-target="#InputRealisasiPendidikan"><i class="fa fa-plus"></i> <b>Input</b></button>               
    </div>   
    <div class="col-sm-auto mt-1 mb-1">
      <div class="input-group mb-1">
        <div class="input-group-prepend">
          <label class="input-group-text bg-warning"><i class="fa fa-tasks"></i><b>&nbsp;Kegiatan</b></label>
        </div>
        <?php 
          $Kegiatan = array('Menyelesaikan pendidikan formal dan memperoleh ijazah',
          'Mengikuti diklat prajabatan golongan III',
          'Mengajar mata kuliah',
          'Membimbing seminar mahasiswa',
          'Membimbing KKN, PKL, Magang',
          'Membimbing disertasi/tesis/skripsi',
          'Menguji ujian akhir/Profesi (setiap mahasiswa)',
          'Membina mahasiswa di bidang akademik/kemahasiswaan',
          'Mengembangkan program kuliah yang mempunyai nilai kebaharuan metode/substansi',
          'Mengembangkan bahan pengajaran yang mempunyai nilai kebaharuan',
          'Menyampaikan orasi ilmiah di tingkat perguruan tinggi',
          'Menduduki jabatan pimpinan perguruan tinggi',
          'Membimbing dosen yang mempunyai jabatan akademik lebih rendah',
          'Melaksanakan kegiatan detasering dan pencangkokan di luar institusi tempat bekerja',
          'Melaksanakan pengembangan diri untuk meningkatkan kompetensi');
        ?>
        <select class="custom-select" id="IdKegiatanPendidikan">
          <?php $Id = 1; foreach ($Kegiatan as $key) { $ID = 'PND'.$Id;?>
            <?php if ($Id == 4) { ?>
              <option value="<?='PND16'?>" <?php if ($this->session->userdata('IdKegiatanPendidikan') == 'PND16') {
              echo 'selected';
            } ?>>Mengajar Praktikum</option>
            <?php } else if ($Id == 9) { ?>
              <option value="<?='PND17'?>" <?php if ($this->session->userdata('IdKegiatanPendidikan') == 'PND17') {
              echo 'selected';
            } ?>>Koordinator kegiatan akademik dalam 1 semester</option>
            <?php } ?>
            <option value="<?='PND'.$Id++?>" <?php if ($this->session->userdata('IdKegiatanPendidikan') == $ID) {
              echo 'selected';
            } ?>><?=$key?></option>
          <?php } ?>
            <option value="<?='PND18'?>" <?php if ($this->session->userdata('IdKegiatanPendidikan') == 'PND18') {
              echo 'selected';
            } ?>>Bimbingan penulisan laporan deskripsi diri sertifikasi dosen</option>
            <option value="<?='PND19'?>" <?php if ($this->session->userdata('IdKegiatanPendidikan') == 'PND19') {
              echo 'selected';
            } ?>>Menilai portofolio sertifikasi dosen</option>
        </select>
      </div>
    </div> 
  </div>
  <div class="container-fluid">
    <div class="table-responsive mb-2">
      <table id="TabelRealisasi" class="table table-bordered table-striped">
        <thead class="bg-warning">
          <tr>
            <th class="align-middle text-center">No</th>
            <th class="align-middle text-center">Home<br>base</th>
            <th class="align-middle text-center">Seme<br>ster</th>
            <th class="align-middle text-center">Tahun</th>
            <th class="align-middle">Uraian Kegiatan</th>
            <th class="align-middle text-center">Tanggal</th>
            <th class="align-middle text-center">Bukti</th>
            <th class="align-middle text-center">Aksi</th>
          </tr>
        </thead>
        <tbody>
        <?php $Total = 0; $No = 1; foreach ($Realisasi as $key) { ?>
          <tr>	
            <td class="text-center align-middle"><?=$No++?></td>
            <td class="text-center align-middle"><?=$key['Jenjang']?></td>
            <td class="text-center align-middle"><?=$key['Semester']?></td>
            <td class="text-center align-middle"><?=$key['Tahun']?></td>
            <td class="align-middle"><?='Berdasarkan '.$key['SK'].' '.$key['Kegiatan']?></td>
            <td class="text-center align-middle"><?=$key['TanggalKegiatan']?></td>
            <td class="text-center align-middle text-success h3"><?php if ($key['Bukti'] != '') { ?>
                <a href="<?=base_url('Pendidikan/'.$key['Bukti'])?>" class="btn btn-sm btn-primary" download><i class="fas fa-download"></i></a>
              <?php } ?></td>
            <td class="text-center align-middle">                          
              <button EditRealisasi="<?=$key['No']."|".$key['Jenjang']."|".$key['Semester']."|".$key['Tahun']."|".$key['SK']."|".$key['Kegiatan']."|".$key['TanggalKegiatan']."|".$key['Bukti']?>" class="btn btn-sm btn-warning EditRealisasi"><i class="fas fa-edit"></i></button>
              <button HapusRealisasi="<?=$key['No']."|".$key['Bukti']?>" class="btn btn-sm btn-danger HapusRealisasi"><i class="fas fa-trash"></i></button>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<div class="modal fade" id="InputRealisasiPendidikan">
  <div class="modal-dialog modal-lg">
    <div class="modal-content bg-warning">
      <div class="modal-body">
        <div class="container">
          <div class="row">
            <div class="col-sm-4">
              <div class="input-group input-group-sm mb-1">
                <div class="input-group-prepend">
                  <label class="input-group-text bg-primary"><b>Homebase</b></label>
                </div>
                <select class="custom-select" id="JenisRealisasi">										
                  <option value="S1">S1</option>
                  <option value="S2">S2</option>
                </select>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="input-group input-group-sm mb-1">
                <div class="input-group-prepend">
                  <label class="input-group-text bg-primary"><b>Semester</b></label>
                </div>
                <select class="custom-select" id="SemesterRealisasi">										
                    <option value="Ganjil">Ganjil</option>
                    <option value="Genap">Genap</option>
                </select>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="input-group input-group-sm mb-1">
                <div class="input-group-prepend">
                  <label class="input-group-text bg-primary"><b>Tahun</b></label>
                </div>
                <input class="form-control" type="text" id="TahunRealisasi"  data-inputmask='"mask": "9999"' data-mask value="20">
              </div>
            </div>
            <div class="col-sm-12">
              <div class="input-group input-group-sm mb-1">
                <div class="input-group-prepend">
                  <span class="input-group-text bg-primary"><b>Kegiatan</b></span>
                </div>
                <select class="custom-select" id="InputIdKegiatanPendidikan" onchange="InputIdKegiatanPendidikan()">
                <?php $Id = 1; foreach ($Kegiatan as $key) { ?>
                  <?php if ($Id == 4) { ?>
                    <option value="PND16">Mengajar Praktikum</option>
                  <?php } else if ($Id == 9) { ?>
                    <option value="PND17">Koordinator kegiatan akademik dalam 1 semester</option>
                  <?php } ?>
                    <option value="<?='PND'.$Id++?>"><?=$key?></option>
                  <?php } ?>
                  <option value="PND18">Bimbingan penulisan laporan deskripsi diri sertifikasi dosen</option>
                  <option value="PND19">Menilai portofolio sertifikasi dosen</option>
                </select>
              </div>
            </div>
            <div class="col-sm-12">
              <div id="OpsiPND1">
                <div class="input-group input-group-sm mb-1">
                  <div class="input-group-prepend">
                    <span class="input-group-text bg-primary"><b>Jenjang</b></span>
                  </div>
                  <select class="custom-select" id="KreditPND1">
                    <option value="200">Doktor / Sederajat</option>
                    <option value="150">Magister / Sederajat</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-sm-12">
              <div id="OpsiPND3" style="display: none;">
                <div class="input-group input-group-sm mb-1">
                  <div class="input-group-prepend">
                    <label class="input-group-text bg-primary"><b>Jenjang</b></label>
                  </div>
                  <select class="custom-select" id="JenjangMengajar">										
                      <option value="S1">S1</option>
                      <option value="S2">S2</option>
                  </select>
                </div>
                <div class="input-group input-group-sm mb-1">
                  <div class="input-group-prepend">
                    <span class="input-group-text bg-primary"><b>Jumlah Dosen</b></span>
                  </div>
                  <select class="custom-select" id="JumlahDosen">										
                    <option value="0">1 Dosen Mengajar S1/S2</option>
                    <option value="1">2 Dosen Mengajar S1/S2</option>
                    <option value="2">3 Dosen Mengajar S1/S2</option>
                    <option value="3">4 Dosen Mengajar S1/S2</option>
                    <option value="4">5 Dosen Mengajar S1</option>
                  </select>
                </div>
                <div class="input-group input-group-sm mb-1">
                  <div class="input-group-prepend">
                  <span class="input-group-text bg-primary"><b>Jumlah Mahasiswa Per Kelas</b></span>
                  </div>
                  <select class="custom-select" id="JumlahMhs">										
                    <option value="0">1-40 Untuk Jenjang S1</option>
                    <option value="1">41-80 Untuk Jenjang S1</option>
                    <option value="2">81-120 Untuk Jenjang S1</option>
                    <option value="0">1-25 Untuk Jenjang S2</option>
                    <option value="1">26-50 Untuk Jenjang S2</option>
                  </select>
                </div>
                <div class="input-group input-group-sm mb-1">
                  <div class="input-group-prepend">
                    <span class="input-group-text bg-primary"><b>Jumlah Kelas</b></span>
                  </div>
                  <input class="form-control" type="text" id="JumlahKelas" data-inputmask='"mask": "9"' data-mask>
                </div>
              </div>
            </div>
            <div class="col-sm-12">
              <div id="OpsiPND5" style="display: none;">
                <div class="input-group input-group-sm mb-1">
                  <div class="input-group-prepend">
                    <span class="input-group-text bg-primary"><b>Jumlah Dosen</b></span>
                  </div>
                  <select class="custom-select" id="JumlahDosenKKN">										
                    <option value="0">1 Dosen</option>
                    <option value="1">2 Dosen</option>
                    <option value="2">3 Dosen</option>
                  </select>
                </div>
                <div class="input-group input-group-sm mb-1">
                  <div class="input-group-prepend">
                  <span class="input-group-text bg-primary"><b>Jumlah Mahasiswa</b></span>
                  </div>
                  <select class="custom-select" id="JumlahMhsKKN">										
                    <option value="0">1-25 Mahasiswa</option>
                    <option value="1">26-50 Mahasiswa</option>
                    <option value="2">51-75 Mahasiswa</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-sm-12">
              <div id="OpsiPND6" style="display: none;">
                <div class="input-group input-group-sm mb-1">
                  <div class="input-group-prepend">
                    <span class="input-group-text bg-primary"><b>Jenis Pembimbing</b></span>
                  </div>
                  <select class="custom-select" id="JenisPembimbing">
                    <option value="1">Pembimbing Utama</option>
                    <option value="2">Pembimbing Pendamping</option>
                  </select>
                </div>
                <div class="input-group input-group-sm mb-1">
                  <div class="input-group-prepend">
                    <span class="input-group-text bg-primary"><b>Jenis Bimbingan</b></span>
                  </div>
                  <select class="custom-select" id="JenisBimbingan">
                    <option value="1">Disertasi</option>
                    <option value="2">Tesis</option>
                    <option value="3">Skripsi</option>
                  </select>
                </div>
                <div class="input-group input-group-sm mb-1">
                  <div class="input-group-prepend">
                    <span class="input-group-text bg-primary"><b>Lingkup</b></span>
                  </div>
                  <select class="custom-select" id="LingkupPND6">
                    <option value="1">Program Studi EP</option>
                    <option value="2">Program Studi Lain</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-sm-12">
              <div id="OpsiPND7" style="display: none;">
                <div class="input-group input-group-sm mb-1">
                  <div class="input-group-prepend">
                    <span class="input-group-text bg-primary"><b>Jenis Penguji</b></span>
                  </div>
                  <select class="custom-select" id="JenisPenguji">
                    <option value="1">Ketua Penguji</option>
                    <option value="2">Anggota Penguji</option>
                  </select>
                </div>
                <div class="input-group input-group-sm mb-1">
                  <div class="input-group-prepend">
                    <span class="input-group-text bg-primary"><b>Jenis Ujian</b></span>
                  </div>
                  <select class="custom-select" id="JenisUjian">
                    <option value="1">Skripsi</option>
                    <option value="2">Tesis</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-sm-12">
              <div id="OpsiPND10" style="display: none;">
                <div class="input-group input-group-sm mb-1">
                  <div class="input-group-prepend">
                    <span class="input-group-text bg-primary"><b>Jenis</b></span>
                  </div>
                  <select class="custom-select" id="BahanPengajaran">
                    <option value="1">Buku ajar</option>
                    <option value="2">Diktat, Modul, Petunjuk praktikum, Model, Alat bantu, Audio visual, Naskah tutorial</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-sm-12">
              <div id="OpsiPND11" style="display: none;">
                <div class="input-group input-group-sm mb-1">
                  <div class="input-group-prepend">
                    <span class="input-group-text bg-primary"><b>Tingkat</b></span>
                  </div>
                  <select class="custom-select" id="TingkatOrasi">
                    <option value="1">Tingkat regional daerah, institusional (minimal fakultas)</option>
                    <option value="2">Tingkat nasional</option>
                    <option value="3">Tingkat internasional (dengan bahasa internasional)</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-sm-12">
              <div id="OpsiPND12" style="display: none;">
                <div class="input-group input-group-sm mb-1">
                  <div class="input-group-prepend">
                    <span class="input-group-text bg-primary"><b>Jabatan</b></span>
                  </div>
                  <select class="custom-select" id="JenisPND12"> 
                    <option value="1">Rektor</option>
                    <option value="2">Pembantu rektor</option>
                    <option value="3">Dekan/Direktur program pasca sarjana/Ketua lembaga</option>
                    <option value="4">Pembantu Dekan/Ketua sekolah tinggi/asisten direktur program pasca sarjana/kepala LLDikti</option>
                    <option value="5">Kepala UPT : Pusat Bahasa,Lab. Dasar,Perpustakaan,PTIK,Kebun Percobaan,Unit Pelayanan Kesehatan,LPPM</option>
                    <option value="6">Ketua Jurusan/ketua prodi/sekretaris jurusan</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-sm-12">
              <div id="OpsiPND13" style="display: none;">
                <div class="input-group input-group-sm mb-1">
                  <div class="input-group-prepend">
                    <span class="input-group-text bg-primary"><b>Jenis Pembimbing</b></span>
                  </div>
                  <select class="custom-select" id="JenisPND13">
                    <option value="1">Pembimbing pencangkokan</option>
                    <option value="2">Reguler</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-sm-12">
              <div id="OpsiPND14" style="display: none;">
                <div class="input-group input-group-sm mb-1">
                  <div class="input-group-prepend">
                    <span class="input-group-text bg-primary"><b>Jenis</b></span>
                  </div>
                  <select class="custom-select" id="JenisPND14">
                    <option value="1">Detasering</option>
                    <option value="2">Pencangkokan</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-sm-12">
              <div id="OpsiPND15" style="display: none;">
                <div class="input-group input-group-sm mb-1">
                  <div class="input-group-prepend">
                    <span class="input-group-text bg-primary"><b>Rentang</b></span>
                  </div>
                  <select class="custom-select" id="JenisPND15">
                    <option value="1">lebih dari 960 jam</option>
                    <option value="2">antara 641-960 jam</option>
                    <option value="3">antara 481-640 jam</option>
                    <option value="4">antara 161-480 jam</option>
                    <option value="5">antara 81-160 jam</option>
                    <option value="6">antara 30-80 jam</option>
                    <option value="7">antara 10-30 jam</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-sm-12">
              <div id="OpsiPND16" style="display: none;">
                <div class="input-group input-group-sm mb-1">
                  <div class="input-group-prepend">
                    <span class="input-group-text bg-primary"><b>Jumlah Dosen</b></span>
                  </div>
                  <select class="custom-select" id="JumlahDosenPraktikum">										
                    <option value="0">1 Dosen</option>
                    <option value="1">2 Dosen</option>
                    <option value="2">3 Dosen</option>
                    <option value="3">4 Dosen</option>
                  </select>
                </div>
                <div class="input-group input-group-sm mb-1">
                  <div class="input-group-prepend">
                  <span class="input-group-text bg-primary"><b>Jumlah Mahasiswa Per Kelas</b></span>
                  </div>
                  <select class="custom-select" id="JumlahMhsPraktikum">										
                    <option value="0">1-25 Mahasiswa</option>
                    <option value="1">26-50 Mahasiswa</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-sm-12">
              <div id="OpsiPND17" style="display: none;">
                <div class="input-group input-group-sm mb-1">
                  <div class="input-group-prepend">
                    <span class="input-group-text bg-primary"><b>Jabatan</b></span>
                  </div>
                  <select class="custom-select" id="Koordinator">										
                    <option value="1">Koordinator/Sekretaris seminar akademik</option>
                    <option value="0.5">Anggota seminar akademik</option>
                    <option value="1">Koordinator Bidang Minat</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="input-group input-group-sm mb-1">
                <div class="input-group-prepend">
                  <span class="input-group-text bg-primary"><b>Volume Kegiatan</b></span>
                </div>
                <input class="form-control" type="text" id="Volume" data-inputmask='"mask": "99"' data-mask>
              </div>
            </div>
            <div class="col-sm-9">
              <div class="input-group input-group-sm mb-1">
                <div class="input-group-prepend">
                  <span class="input-group-text bg-primary"><b>Surat Tugas/SK</b></span>
                </div>
                <input class="form-control" type="text" id="SK">
              </div>
            </div>
            <div class="col-sm-12">
              <pre class="text-danger"><b>Volume Kegiatan Merujuk Pada Konteks Kegiatan</b></pre>
            </div>
            <div class="col-sm-12">
              <div class="input-group input-group-sm mb-1">
                <span class="input-group-text bg-primary"><b>Uraian<br>Kegiatan</b></span>
                <textarea class="form-control" id="Uraian" rows="2"></textarea>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="input-group input-group-sm mb-1">
                <div class="input-group-prepend">
                  <span class="input-group-text bg-primary"><b>Tanggal Kegiatan</b></span>
                </div>
                <input class="form-control" type="text" id="TanggalKegiatan">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="input-group input-group-sm mb-1">
                <div class="input-group-prepend">
                  <span class="input-group-text bg-primary"><b>Bukti</b></span>
                </div>
                <input class="form-control" type="file" id="Bukti">
              </div>
            </div>
            <div class="col-sm-12">
              <pre class="text-danger"><b>Bukti Berupa Pdf & Wajib Menyertakan Surat Tugas/SK</b></pre>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-danger" data-dismiss="modal"><b>Tutup</b></button>
        <button type="submit" class="btn btn-success" id="TambahRealisasiPendidikan"><b>Simpan</b></button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="EditRealisasiPendidikan">
  <div class="modal-dialog modal-lg">
    <div class="modal-content bg-warning">
      <div class="modal-body">
        <div class="container">
          <div class="row">
            <div class="col-sm-4">
              <div class="input-group input-group-sm mb-1"> 
                <div class="input-group-prepend">
                  <label class="input-group-text bg-primary"><b>Homebase</b></label>
                </div>
                <input class="form-control" type="hidden" id="EditNoRealisasi">
                <input class="form-control" type="hidden" id="EditBuktiRealisasi">
                <select class="custom-select" id="EditJenisRealisasi">										
                    <option value="S1">S1</option>
                    <option value="S2">S2</option>
                </select>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="input-group input-group-sm mb-1">
                <div class="input-group-prepend">
                  <label class="input-group-text bg-primary"><b>Semester</b></label>
                </div>
                <select class="custom-select" id="EditSemesterRealisasi">										
                    <option value="Ganjil">Ganjil</option>
                    <option value="Genap">Genap</option>
                </select>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="input-group input-group-sm mb-1">
                <div class="input-group-prepend">
                  <label class="input-group-text bg-primary"><b>Tahun</b></label>
                </div>
                <input class="form-control" type="text" id="EditTahunRealisasi"  data-inputmask='"mask": "9999"' data-mask value="20">
              </div>
            </div>
            <div class="col-sm-12">
              <div class="input-group input-group-sm mb-1">
                <div class="input-group-prepend">
                  <span class="input-group-text bg-primary"><b>Surat Tugas/SK</b></span>
                </div>
                <input class="form-control" type="text" id="EditSK">
              </div>
            </div>
            <div class="col-sm-12">
              <div class="input-group input-group-sm mb-1">
                <span class="input-group-text bg-primary"><b>Uraian<br>Kegiatan</b></span>
                <textarea class="form-control" id="EditUraian" rows="2"></textarea>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="input-group input-group-sm mb-1">
                <div class="input-group-prepend">
                  <span class="input-group-text bg-primary"><b>Tanggal Kegiatan</b></span>
                </div>
                <input class="form-control" type="text" id="EditTanggalKegiatan">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="input-group input-group-sm mb-1">
                <div class="input-group-prepend">
                  <span class="input-group-text bg-primary"><b>Bukti</b></span>
                </div>
                <input class="form-control" type="file" id="EditBukti">
                <div class="input-group-prepend">
                  <button class="input-group-text bg-primary" id="CancelBukti"><b>X</b></button>
                </div>
              </div>
            </div>
            <div class="col-sm-12">
              <pre class="text-danger"><b>Bukti Berupa Pdf & Wajib Menyertakan Surat Tugas/SK</b></pre>
            </div>
          </div>
        </div>
      </div>  
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-danger" data-dismiss="modal"><b>Tutup</b></button>
        <button type="submit" class="btn btn-success" id="UpdateRealisasiPendidikan"><b>Simpan</b></button>
      </div>
    </div>
  </div>
</div>