<div class="container-fluid">
  <div class="row">
    <div class="col-sm-4 mt-1 mb-1">
      <div class="input-group mb-1">
        <div class="input-group-prepend">
          <span class="input-group-text bg-primary"><b>Tahun</b></i></span>
        </div>
        <input class="form-control" type="text" id="RencanaTahun">
      </div>
    </div>
    <div class="col-sm-4 mt-1 mb-1">
      <button type="button" id="LihatRencana" class="btn btn-primary"><b>Lihat</b></button>
    </div>
  </div>
</div>
<div class="container-fluid">
  <div class="table-responsive mb-2">
    <table id="PENDIDIKAN" class="table table-bordered border-dark bg-light mb-1">
      <thead>
        <tr>
          <th class='align-middle bg-warning'>No</th>
          <th class='align-middle bg-warning'> Komponen Kegiatan</th>
          <th class='align-middle bg-warning'> Bukti Kegiatan</th>
          <th class='align-middle bg-warning'> Batas maksimal diakui</th>
          <th class='align-middle bg-warning'> Angka Kredit</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td rowspan="3" class='text-center'>1</td>
          <td class='align-middle'>Mengikuti pendidikan formal dan memperoleh gelar / sebutan / ijazah</td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td class='align-middle'><label><input type="radio" name="Sekolah"> Doktor / Sederajat</label></td>
          <td>Bukti tugas/izin belajar dan pindai ijazah asli</td>
          <td>1/periode penilaian</td>
          <td>200</td>
        </tr>
        <tr>
          <td class='align-middle'><label><input type="radio" name="Sekolah"> Magister / Sederajat</label></td>
          <td>Bukti tugas/izin belajar dan pindai ijazah asli</td>
          <td>1/periode penilaian</td>
          <td>150</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
<!-- <tr>
														<td class='text-center'>2</td>
														<td class='align-middle'><label><input type="checkbox"> Mengikuti Diklat Prajabatan Golongan III</label></td>
														<td>Bukti tugas/izin belajar dan pindai ijazah asli</td>
														<td>1/periode penilaian</td>
														<td>3</td>
													</tr>
													<tr>
														<td rowspan="7" class='text-center'>3</td>
														<td class='align-middle'>Melaksanakan perkuliahan/tutorial/perkuliahan praktikum dan membimbing,menguji serta menyelenggarakan pendidikan di laboratorium, praktik keguruan, bengkel/studio/kebun percobaan/teknologi pengajaran dan praktik lapangan (setiap semester)</td>
														<td></td>
														<td></td>
														<td></td>
													</tr>
													<tr>
														<td class='align-middle'>Asisten Ahli untuk</label></td>
														<td>PindaiSK penugasan aslidan bukti kinerja</td>
														<td></td>
														<td></td>
													</tr>
													<tr>
														<td class='align-middle'><label><input type="checkbox"> beban mengajar 10 sks pertama</label></td>
														<td></td>
														<td>5</td>
														<td>0,5</td>
													</tr>
													<tr>
														<td class='align-middle'><label><input type="checkbox"> beban mengajar 2 sks berikutnya</label></td>
														<td></td>
														<td>0,5</td>
														<td>0,25</td>
													</tr>
													<tr>
														<td class='align-middle'>Lektor/Lektor Kepala/Profesor untuk</label></td>
														<td>PindaiSK penugasan aslidan bukti kinerja</td>
														<td></td>
														<td></td>
													</tr>
													<tr>
														<td class='align-middle'><label><input type="checkbox"> beban mengajar 10 sks pertama</label></td>
														<td></td>
														<td>10/semester</td>
														<td>1</td>
													</tr>
													<tr>
														<td class='align-middle'><label><input type="checkbox"> beban mengajar 2 sks berikutnya</label></td>
														<td></td>
														<td>1/semester</td>
														<td>0,5</td>
													</tr>
													<tr>
														<td class='text-center'>4</td>
														<td class='align-middle'><label><input type="checkbox"> Membimbing seminar mahasiswa (setiap semester)</label></td>
														<td>Pindai SK penugasan aslidan bukti kinerja</td>
														<td></td>
														<td>1</td>
													</tr>
													<tr>
														<td class='text-center'>5</td>
														<td class='align-middle'><label><input type="checkbox"> Membimbing    KKN,    Praktik    Kerja Nyata, Praktik Kerja Lapangan (setiap semester)</label></td>
														<td>Pindai SK penugasan aslidan bukti kinerja</td>
														<td></td>
														<td>1</td>
													</tr>
													<tr>
														<td rowspan="11" class='text-center'>6</td>
														<td class='align-middle'>Membimbing  dan  ikut  membimbing dalam  menghasilkan  disertasi,  tesis, skripsi  dan  laporan  akhir  studi  yang sesuai bidang penugasannya</td>
														<td></td>
														<td></td>
														<td></td>
													</tr>
													<tr>
														<td class='align-middle'>1. Pembimbing Utama per orang (setiap mahasiswa)</td>
														<td></td>
														<td></td>
														<td></td>
													</tr>
													<tr>
														<td class='align-middle'><label><input type="checkbox"> Disertasi</label></td>
														<td>Pindai lembar pengesahandan bukti kinerja</td>
														<td>4 lulusan/semester</td>
														<td>8</td>
													</tr>
													<tr>
														<td class='align-middle'><label><input type="checkbox"> Tesis</label></td>
														<td>Pindai lembar pengesahandan bukti kinerja</td>
														<td>6 lulusan/semester</td>
														<td>3</td>
													</tr>
													<tr>
														<td class='align-middle'><label><input type="checkbox"> Skripsi</label></td>
														<td>Pindai lembar pengesahandan bukti kinerja</td>
														<td>8 lulusan/semester</td>
														<td>1</td>
													</tr>
													<tr>
														<td class='align-middle'><label><input type="checkbox"> Laporan akhir studi</label></td>
														<td>Pindai lembar pengesahandan bukti kinerja</td>
														<td>10 lulusan/semester</td>
														<td>1</td>
													</tr>
													<tr>
														<td class='align-middle'>2. Pembimbing Pendamping/Pembantu per orang (setiap mhs)</td>
														<td></td>
														<td></td>
														<td></td>
													</tr>
													<tr>
														<td class='align-middle'><label><input type="checkbox"> Disertasi</label></td>
														<td>Pindai lembar pengesahandan bukti kinerja</td>
														<td>4 lulusan/semester</td>
														<td>6</td>
													</tr>
													<tr>
														<td class='align-middle'><label><input type="checkbox"> Tesis</label></td>
														<td>Pindai lembar pengesahandan bukti kinerja</td>
														<td>6 lulusan/semester</td>
														<td>2</td>
													</tr>
													<tr>
														<td class='align-middle'><label><input type="checkbox"> Skripsi</label></td>
														<td>Pindai lembar pengesahandan bukti kinerja</td>
														<td>8 lulusan/semester</td>
														<td>0,5</td>
													</tr>
													<tr>
														<td class='align-middle'><label><input type="checkbox"> Laporan akhir studi</label></td>
														<td>Pindai lembar pengesahandan bukti kinerja</td>
														<td>10 lulusan/semester</td>
														<td>0,5</td>
													</tr>
													<tr>
														<td rowspan="3" class='text-center'>7</td>
														<td class='align-middle'>Bertugas  sebagai  penguji  pada  ujian akhir/Profesi* (setiap mahasiswa)</td>
														<td></td>
														<td></td>
														<td></td>
													</tr>
													<tr>
														<td class='align-middle'><label><input type="checkbox"> Ketua penguji</label></td>
														<td>Pindai SK penugasan, bukti kinerjadan undangan</td>
														<td>4 lulusan/semester</td>
														<td>1</td>
													</tr>
													<tr>
														<td class='align-middle'><label><input type="checkbox"> Anggota penguji</label></td>
														<td>Pindai SK penugasan, bukti kinerjadan undangan</td>
														<td>8 lulusan/semester</td>
														<td>0,5</td>
													</tr>
													<tr>
														<td class='text-center'>8</td>
														<td class='align-middle'><label><input type="checkbox"> Membina kegiatan mahasiswa di bidang akademik dan kemahasiswaan, termasuk dalam kegiatan ini adalah membimbing mahasiswa menghasilkan produk saintifik (setiap semester)</label></td>
														<td>Pindai SK penugasan, dan bukti kinerja</td>
														<td>2 kegiatan /semester</td>
														<td>2</td>
													</tr>
													<tr>
														<td class='text-center'>9</td>
														<td class='align-middle'><label><input type="checkbox"> Mengembangkan program kuliah yang mempunyai nilai kebaharuan metode atau substansi (setiap produk)</label></td>
														<td>File produk  </td>
														<td>1 mata kuliah /semester</td>
														<td>2</td>
													</tr>
													<tr>
														<td rowspan="3" class='text-center'>10</td>
														<td class='align-middle'>Mengembangkan bahan pengajaran/ bahan kuliah yangmempunyai nilai kebaharuan  (setiap produk)</td>
														<td></td>
														<td></td>
														<td></td>
													</tr>
													<tr>
														<td class='align-middle'><label><input type="checkbox"> Buku ajar</label></td>
														<td>File produk</td>
														<td>1 buku/tahun</td>
														<td>20</td>
													</tr>
													<tr>
														<td class='align-middle'><label><input type="checkbox"> Diktat,Modul, Petunjuk praktikum,Model,  Alat  bantu,  Audio  visual, Naskah tutorial, Job sheet praktikum terkait  dengan  mata  kuliah  yang diampu</label></td>
														<td>File produk</td>
														<td>1 produk /semester</td>
														<td>5</td>
													</tr>
													<tr>
														<td class='text-center'>11</td>
														<td class='align-middle'><label><input type="checkbox"> Menyampaikan orasi ilmiah di tingkat perguruan tinggi</label></td>
														<td>File produk </td>
														<td>2 orasi/semester</td>
														<td>5</td>
													</tr>
													<tr>
														<td rowspan="9" class='text-center'>12</td>
														<td class='align-middle'>Menduduki jabatan pimpinan perguruan tinggisesuai tugas pokok, fungsi dan kewenangan dan/atau setara(setiap semester)</td>
														<td></td>
														<td></td>
														<td></td>
													</tr>
													<tr>
														<td class='align-middle'><label><input type="Radio" name="Jabatan"> Rektor</label></td>
														<td>Pindai SK Jabatan</td>
														<td>1 jabatan/semester</td>
														<td>6</td>
													</tr>
													<tr>
														<td class='align-middle'><label><input type="Radio" name="Jabatan"> Wakil rektor/dekan/direktur program pasca sarjana/ketua lembaga</label></td>
														<td>Pindai SK Jabatan</td>
														<td>1 jabatan/semester</td>
														<td>5</td>
													</tr>
													<tr>
														<td class='align-middle'><label><input type="Radio" name="Jabatan"> Ketua sekolah tinggi/pembantu dekan/asisten direktur program pasca sarjana/direktur politeknik/kepala LLDikti</label></td>
														<td>Pindai SK Jabatan</td>
														<td>1 jabatan/semester</td>
														<td>4</td>
													</tr>
													<tr>
														<td class='align-middle'><label><input type="Radio" name="Jabatan"> Pembantu ketua sekolah tinggi/pembantu direktur politeknik</label></td>
														<td>Pindai SK Jabatan</td>
														<td>1 jabatan/semester</td>
														<td>4</td>
													</tr>
													<tr>
														<td class='align-middle'><label><input type="Radio" name="Jabatan"> Direktur akademi</label></td>
														<td>Pindai SK Jabatan</td>
														<td>1 jabatan/semester</td>
														<td>4</td>
													</tr>
													<tr>
														<td class='align-middle'><label><input type="Radio" name="Jabatan"> Pembantu direktur politeknik, ketua jurusan/ bagian pada universitas/ institut/sekolah tinggi</label></td>
														<td>Pindai SK Jabatan</td>
														<td>1 jabatan/semester</td>
														<td>3</td>
													</tr>
													<tr>
														<td class='align-middle'><label><input type="Radio" name="Jabatan"> Pembantu direktur akademi/ketua jurusan/ketua prodipada universitas/politeknik/akademi, sekretaris jurusan/bagian pada universitas/institut/sekolah tinggi</label></td>
														<td>Pindai SK Jabatan</td>
														<td>1 jabatan/semester</td>
														<td>3</td>
													</tr>
													<tr>
														<td class='align-middle'><label><input type="Radio" name="Jabatan"> Sekretaris jurusan pada politeknik/akademi dan kepala laboratorium (bengkel) universitas/institut/sekolah tinggi/politeknik/akademi</label></td>
														<td>Pindai SK Jabatan</td>
														<td>1 jabatan/semester</td>
														<td>3</td>
													</tr>
													<tr>
														<td rowspan="3" class='text-center'>13</td>
														<td class='align-middle'>Membimbing dosen yang mempunyai  jabatan  akademik  lebih rendah  setiap  semester  (bagi  dosen Lektor Kepala ke atas)</td>
														<td></td>
														<td></td>
														<td></td>
													</tr>
													<tr>
														<td class='align-middle'><label><input type="radio" name="Sekolah"> Pembimbing pencangkokan</label></td>
														<td>Pindai SK Penugasan, dan bukti kinerja</td>
														<td>1 orang</td>
														<td>2</td>
													</tr>
													<tr>
														<td class='align-middle'><label><input type="radio" name="Sekolah"> Reguler</label></td>
														<td>Pindai SK Penugasan, dan bukti kinerja</td>
														<td>1 orang</td>
														<td>1</td>
													</tr>
													<tr>
														<td rowspan="3" class='text-center'>14</td>
														<td class='align-middle'>Melaksanakan    kegiatan    detasering dan  pencangkokan  di  luar  institusi tempat  bekerja  setiap  semester  (bagi dosenLektor kepala ke atas)</td>
														<td></td>
														<td></td>
														<td></td>
													</tr>
													<tr>
														<td class='align-middle'><label><input type="radio" name="Sekolah"> Detasering</label></td>
														<td>Pindai SK Penugasan, dan bukti kinerja</td>
														<td>1 orang</td>
														<td>5</td>
													</tr>
													<tr>
														<td class='align-middle'><label><input type="radio" name="Sekolah"> Pencangkokan</label></td>
														<td>Pindai SK Penugasan, dan bukti kinerja</td>
														<td>1 orang</td>
														<td>4</td>
													</tr>
													<tr>
														<td rowspan="9" class='text-center'>15</td>
														<td class='align-middle'>Melaksanakan pengembangan diri untuk meningkatkan kompetensi</td>
														<td></td>
														<td></td>
														<td></td>
													</tr>
													<tr>
														<td class='align-middle'><label><input type="Radio" name="Jabatan"> Lamanya lebih dari 960 jam</label></td>
														<td>Pindai sertifikat asli</td>
														<td></td>
														<td>15</td>
													</tr>
													<tr>
														<td class='align-middle'><label><input type="Radio" name="Jabatan"> Lamanya lebih dari 641-960 jam</label></td>
														<td>Pindai sertifikat asli</td>
														<td></td>
														<td>9</td>
													</tr>
													<tr>
														<td class='align-middle'><label><input type="Radio" name="Jabatan"> Lamanya lebih dari 481-640 jam</label></td>
														<td>Pindai sertifikat asli</td>
														<td></td>
														<td>6</td>
													</tr>
													<tr>
														<td class='align-middle'><label><input type="Radio" name="Jabatan"> Lamanya lebih dari 161-480 jam</label></td>
														<td>Pindai sertifikat asli</td>
														<td></td>
														<td>3</td>
													</tr>
													<tr>
														<td class='align-middle'><label><input type="Radio" name="Jabatan"> Lamanya lebih dari 81-160 jam</label></td>
														<td>Pindai sertifikat asli</td>
														<td></td>
														<td>2</td>
													</tr>
													<tr>
														<td class='align-middle'><label><input type="Radio" name="Jabatan"> Lamanya lebih dari 30-80 jam</label></td>
														<td>Pindai sertifikat asli</td>
														<td></td>
														<td>1</td>
													</tr>
													<tr>
														<td class='align-middle'><label><input type="Radio" name="Jabatan"> Lamanya lebih dari 10-30 jam</label></td>
														<td>Pindai sertifikat asli</td>
														<td></td>
														<td>0,5</td>
                          </tr> -->			               