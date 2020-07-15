<div class="container-fluid">
  <div class="row">
    <div class="col-sm-4 mt-1 mb-1">
      <div class="input-group mb-1">
        <div class="input-group-prepend">
          <label class="input-group-text bg-warning text-primary"><b>Kegiatan</b></label>
        </div>
        <?php 
          $Kegiatan = array('Mengikuti pendidikan formal',
          'Mengikuti diklat prajabatan golongan III',
          'Mengajar mata kuliah',
          'Membimbing seminar mahasiswa',
          'Membimbing KKN, Praktik Kerja Lapangan',
          'Membimbing disertasi/tesis/skripsi/TA',
          'Penguji ujian akhir/Profesi (setiap mahasiswa)',
          'Membina mahasiswa di bidang akademik/kemahasiswaan',
          'Mengembangkan program kuliah yang mempunyai nilai kebaharuan metode/substansi',
          'Mengembangkan bahan pengajaran yang mempunyai nilai kebaharuan',
          'Menyampaikan orasi ilmiah di tingkat perguruan tinggi',
          'Menduduki jabatan pimpinan perguruan tinggi',
          'Membimbing dosen yang mempunyai jabatan akademik lebih rendah',
          'Melaksanakan kegiatan detasering dan pencangkokan di luar institusi tempat bekerja',
          'Melaksanakan pengembangan diri untuk meningkatkan kompetensi');
        ?>
        <select class="custom-select" id="OpsiKegiatan">
          <?php $Id = 1; foreach ($Kegiatan as $key) { $ID = 'PND'.$Id;?>
            <option value="<?='PND'.$Id++?>" <?php if ($this->session->userdata('Pendidikan') == $ID) {
              echo 'selected';
            } ?>><?=$key?></option>
          <?php } ?>
        </select>
      </div>
    </div> 
    <div class="col-sm-4 mt-1 mb-1">
    <button type="button" id="LihatRealisasi" class="btn btn-primary"><b>Lihat</b></button>
      <button type="button" id="Tambah" class="btn btn-success" data-toggle="modal" data-target="#Input"><b>Tambah</b></button>       
    </div>   
  </div>
  <div class="table-responsive mb-2">
    <table id="TabelRealisasi" class="table table-bordered table-striped">
      <thead class="bg-warning">
        <tr>
          <th class="align-middle">No</th>
          <th class="align-middle">Uraian Kegiatan</th>
          <th class="align-middle">Tanggal</th>
          <th class="align-middle">Satuan</th>
          <th class="align-middle">Volume</th>
          <th class="align-middle">Kredit</th>
          <th class="align-middle">Jumlah Kredit</th>
          <th class="align-middle">Ket/Bukti</th>
          <th class="align-middle">Aksi</th>
        </tr>
      </thead>
      <tbody>
      <?php $No = 1; foreach ($Pendidikan as $key) { ?>
          <tr>	
            <td class="text-center align-middle"><?=$No++?></td>
            <td class="align-middle"><?=$key['Kegiatan']?></td>
            <td class="text-center align-middle"><?=$key['Tanggal']?></td>
            <td class="text-center align-middle"><?=$key['Satuan']?></td>
            <td class="text-center align-middle"><?=$key['Volume']?></td>
            <td class="text-center align-middle"><?=$key['Kredit']?></td>
            <td class="text-center align-middle"><?=$key['JumlahKredit']?></td>
            <td class="text-center align-middle text-success h3"><? if ($key['Bukti'] != '') { echo '✔';} ?></td>
            <td class="text-center align-middle">                          
              <button Edit="<?=$key['No']."|".$key['Kegiatan']."|".$key['Tanggal']."|".$key['Volume']."|".$key['ID']?>" class="btn btn-sm btn-warning Edit"><i class="fas fa-edit"></i></button>
              <button Hapus="<?=$key['No']?>" class="btn btn-sm btn-danger Hapus"><i class="fas fa-trash"></i></button>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>
<div class="modal fade" id="Input">
  <div class="modal-dialog">
    <div class="modal-content bg-warning">
      <div class="modal-body">
        <div class="input-group mb-1">
          <div class="input-group-prepend">
            <span class="input-group-text bg-primary"><b>Kegiatan</b></i></span>
          </div>
          <select class="custom-select" id="JenisKegiatan" onchange="GantiKegiatan()">
          <?php $Id = 1; foreach ($Kegiatan as $key) { ?>
              <option value="<?='PND'.$Id++?>"><?=$key?></option>
            <?php } ?>
          </select>
        </div>
        <div id="OpsiPND1">
          <div class="input-group mb-1">
            <div class="input-group-prepend">
              <span class="input-group-text bg-primary"><b>Jenjang</b></i></span>
            </div>
            <select class="custom-select" id="Jenjang">
              <option value="200">Doktor/Sederajat</option>
              <option value="150">Magister/Sederajat</option>
            </select>
          </div>
        </div>
        <div id="OpsiPND6" style="display: none;">
          <div class="input-group mb-1">
            <div class="input-group-prepend">
              <span class="input-group-text bg-primary"><b>Jenis Pembimbing</b></i></span>
            </div>
            <select class="custom-select" id="JenisPembimbing">
              <option value="1">Pembimbing Utama</option>
              <option value="2">Pembimbing Pendamping</option>
            </select>
          </div>
          <div class="input-group mb-1">
            <div class="input-group-prepend">
              <span class="input-group-text bg-primary"><b>Jenis Bimbingan</b></i></span>
            </div>
            <select class="custom-select" id="JenisBimbingan">
              <option value="1">Disertasi</option>
              <option value="2">Tesis</option>
              <option value="3">Skripsi</option>
              <option value="4">Laporan Akhir</option>
            </select>
          </div>
        </div>
        <div id="OpsiPND7" style="display: none;">
          <div class="input-group mb-1">
            <div class="input-group-prepend">
              <span class="input-group-text bg-primary"><b>Jenis</b></i></span>
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
              <span class="input-group-text bg-primary"><b>Jenis</b></i></span>
            </div>
            <select class="custom-select" id="BahanPengajaran">
              <option value="1">Buku ajar</option>
              <option value="2">Diktat, Modul, Petunjuk praktikum, Model, Alat bantu, Audio visual, Naskah tutorial, Job sheet praktikumterkait dengan mata kuliah yang diampu</option>
            </select>
          </div>
        </div>
        <div id="OpsiPND12" style="display: none;">
          <div class="input-group mb-1">
            <div class="input-group-prepend">
              <span class="input-group-text bg-primary"><b>Jabatan</b></i></span>
            </div>
            <select class="custom-select" id="JenisPND12">
              <option value="6">Rektor</option>
              <option value="5">Wakil rektor/dekan/direktur program pasca sarjana/ketua lembaga</option>
              <option value="4">Ketua sekolah tinggi/pembantu dekan/asisten direktur program pasca sarjana/direktur politeknik/kepala LLDikti</option>
              <option value="4">Pembantu ketua sekolah tinggi/pembantu direktur politeknik</option>
              <option value="4">Direktur akademi</option>
              <option value="3">Pembantu direktur politeknik, ketua jurusan/ bagian pada universitas/ institut/sekolah tinggi</option>
              <option value="3">Pembantu direktur akademi/ketua jurusan/ketua prodipada universitas/politeknik/akademi, sekretaris jurusan/bagian pada universitas/institut/sekolah tinggi</option>
              <option value="3">Sekretaris jurusan pada politeknik/akademi dan kepala laboratorium (bengkel) universitas/institut/sekolah tinggi/politeknik/akademi</option>
            </select>
          </div>
        </div>
        <div id="OpsiPND13" style="display: none;">
          <div class="input-group mb-1">
            <div class="input-group-prepend">
              <span class="input-group-text bg-primary"><b>Jenis</b></i></span>
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
              <span class="input-group-text bg-primary"><b>Jenis</b></i></span>
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
              <span class="input-group-text bg-primary"><b>Rentang</b></i></span>
            </div>
            <select class="custom-select" id="JenisPND15">
              <option value="15">Lamanya lebih dari 960 jam</option>
              <option value="9">Lamanya antara 641-960 jam</option>
              <option value="6">Lamanya antara 481-640 jam</option>
              <option value="3">Lamanya antara 161-480 jam</option>
              <option value="2">Lamanya antara 81-160 jam</option>
              <option value="1">Lamanya antara 30-80 jam</option>
              <option value="0.5">Lamanya antara 10-30 jam</option>
            </select>
          </div>
        </div>
        <div class="input-group mb-1">
          <span class="input-group-text bg-primary"><b>Uraian</b></i></span>
          <textarea class="form-control" id="Uraian" rows="2"></textarea>
        </div>
        <div class="input-group mb-1">
          <div class="input-group-prepend">
            <span class="input-group-text bg-primary"><b>Tanggal</b></i></span>
          </div>
          <input class="form-control" type="text" id="Tanggal">
        </div>
        <div class="input-group mb-1">
          <div class="input-group-prepend">
            <span class="input-group-text bg-primary"><b>Jumlah Volume Kegiatan</b></i></span>
          </div>
          <input class="form-control" type="text" id="Volume">
        </div>
        <div class="input-group mb-1">
          <div class="input-group-prepend">
            <span class="input-group-text bg-primary"><b>Bukti</b></i></span>
          </div>
          <input class="form-control" type="file" id="Bukti" multiple>
        </div>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-danger" data-dismiss="modal"><b>Tutup</b></button>
        <button type="submit" class="btn btn-success" id="InputKegiatan"><b>Simpan</b></button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="Edit">
  <div class="modal-dialog">
    <div class="modal-content bg-warning">
      <div class="modal-body">
        <div class="input-group mb-1">
          <span class="input-group-text bg-primary"><b>Uraian</b></i></span>
          <input class="form-control" type="hidden" id="No">
          <input class="form-control" type="hidden" id="ID">
          <textarea class="form-control" id="EditUraian" rows="2"></textarea>
        </div>
        <div class="input-group mb-1">
          <div class="input-group-prepend">
            <span class="input-group-text bg-primary"><b>Tanggal</b></i></span>
          </div>
          <input class="form-control" type="text" id="EditTanggal">
        </div>
        <div class="input-group mb-1">
          <div class="input-group-prepend">
            <span class="input-group-text bg-primary"><b>Jumlah Volume Kegiatan</b></i></span>
          </div>
          <input class="form-control" type="text" id="EditVolume">
        </div>
        <div class="input-group mb-1">
          <div class="input-group-prepend">
            <span class="input-group-text bg-primary"><b>Bukti</b></i></span>
          </div>
          <input class="form-control" type="file" id="EditBukti">
        </div>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-danger" data-dismiss="modal"><b>Tutup</b></button>
        <button type="submit" class="btn btn-success" id="EditKegiatan"><b>Simpan</b></button>
      </div>
    </div>
  </div>
</div>