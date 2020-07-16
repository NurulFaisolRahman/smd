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
					<th class='align-middle bg-warning'> Kredit</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td rowspan="3" class='text-center'>1</td>
					<td class='align-middle'>Mengikuti pendidikan formal dan memperoleh gelar / sebutan / ijazah</td>
					<td rowspan="3" class='text-center align-middle'><b id="KreditSekolah">0</b></td>
        </tr>
        <tr>
          <td class='align-middle'><label><input type="checkbox" id="Doktor" onchange="Doktor()"> Doktor / Sederajat</label></td>
        </tr>
        <tr>
          <td class='align-middle'><label><input type="checkbox" id="Magister" onchange="Magister()"> Magister / Sederajat</label></td>
        </tr>
				<tr>
					<td class='text-center'>2</td>
					<td class='align-middle'><label><input type="checkbox" id="Diklat" onchange="Diklat()"> Mengikuti Diklat Prajabatan Golongan III</label></td>
					<td class='text-center align-middle'><b id="KreditDiklat">0</b></td>
				</tr>
				<tr>
					<td rowspan="2" class='text-center'>3</td>
					<td class='align-middle'>Melaksanakan perkuliahan/tutorial/perkuliahan praktikum dan membimbing,menguji serta menyelenggarakan pendidikan di laboratorium, praktik keguruan, bengkel/studio/kebun percobaan/teknologi pengajaran dan praktik lapangan (setiap semester)</td>
					<td rowspan="2" class='text-center align-middle'><b id="KreditMengajar">0</b></td>
				</tr>
				<tr>
					<td class='align-middle'>
						<div class="input-group-sm mb-1">
							<b>Jumlah sks :</b> <input style="width: 50px;" oninput="Mengajar()" class="form-control-sm" type="text" id="Mengajar"  data-inputmask='"mask": "99"' data-mask> <b>sks</b>
						</div>
					</td>
				</tr>
				<tr>
					<td rowspan="2" class='text-center'>4</td>
					<td class='align-middle'> Membimbing seminar mahasiswa (setiap semester)</td>
					<td rowspan="2" class='text-center align-middle'><b id="KreditBimbingSeminar">0</b></td>
				</tr>
				<tr>
					<td><b>Jumlah mahasiswa :</b> <input style="width: 50px;" oninput="BimbingSeminar()" class="form-control-sm" type="text" id="BimbingSeminar"  data-inputmask='"mask": "99"' data-mask> <b>Mahasiswa</b></td>
				</tr>
				<tr>
					<td rowspan="2" class='text-center'>5</td>
					<td class='align-middle'> Membimbing KKN, Praktik Kerja Nyata, Praktik Kerja Lapangan (setiap semester)</td>
					<td rowspan="2" class='text-center align-middle'><b id="KreditBimbingKKN">0</b></td>
				</tr>
				<tr>
					<td><b>Jumlah Kegiatan :</b> <input style="width: 50px;" oninput="BimbingKKN()" class="form-control-sm" type="text" id="BimbingKKN"  data-inputmask='"mask": "99"' data-mask> <b>Kegiatan</b></td>
				</tr>
				<tr>
					<td rowspan="11" class='text-center'>6</td>
					<td class='align-middle'>Membimbing  dan  ikut  membimbing dalam  menghasilkan  disertasi,  tesis, skripsi  dan  laporan  akhir  studi  yang sesuai bidang penugasannya</td>
				</tr>
				<tr>
					<td class='align-middle'>1. Pembimbing Utama per orang (setiap mahasiswa)</td>
				</tr>
				<tr>
					<td class='align-middle'><label><input type="checkbox"> Disertasi</label></td>
				</tr>
				<tr>
					<td class='align-middle'><label><input type="checkbox"> Tesis</label></td>
				</tr>
				<tr>
					<td class='align-middle'><label><input type="checkbox"> Skripsi</label></td>
				</tr>
				<tr>
					<td class='align-middle'><label><input type="checkbox"> Laporan akhir studi</label></td>
				</tr>
				<tr>
					<td class='align-middle'>2. Pembimbing Pendamping/Pembantu per orang (setiap Mahasiswa)</td>
				</tr>
				<tr>
					<td class='align-middle'><label><input type="checkbox"> Disertasi</label></td>
				</tr>
				<tr>
					<td class='align-middle'><label><input type="checkbox"> Tesis</label></td>
				</tr>
				<tr>
					<td class='align-middle'><label><input type="checkbox"> Skripsi</label></td>
				</tr>
				<tr>
					<td class='align-middle'><label><input type="checkbox"> Laporan akhir studi</label></td>
				</tr>
				<tr>
					<td rowspan="3" class='text-center'>7</td>
					<td class='align-middle'>Bertugas  sebagai  penguji  pada  ujian akhir/Profesi* (setiap mahasiswa)</td>
					<td></td>
				</tr>
				<tr>
					<td><b>Ketua penguji :</b> <input style="width: 50px;" oninput="PengujiUtama()" class="form-control-sm" type="text" id="PengujiUtama"  data-inputmask='"mask": "99"' data-mask> <b>Mahasiswa lulus</b></td>
					<td class='text-center align-middle'><b id="KreditPengujiUtama">0</b></td>
				</tr>
				<tr>
					<td><b>Anggota penguji :</b> <input style="width: 50px;" oninput="AnggotaPenguji()" class="form-control-sm" type="text" id="AnggotaPenguji"  data-inputmask='"mask": "99"' data-mask> <b>Mahasiswa lulus</b></td>
					<td class='text-center align-middle'><b id="KreditAnggotaPenguji">0</b></td>
				</tr>
				<tr>
					<td rowspan="2" class='text-center'>8</td>
					<td class='align-middle'> Membina kegiatan mahasiswa di bidang akademik dan kemahasiswaan, termasuk dalam kegiatan ini adalah membimbing mahasiswa menghasilkan produk saintifik (setiap semester)</label></td>
					<td rowspan="2" class='text-center align-middle'><b id="KreditMembinaKegiatan">0</b></td>
				</tr>
				<tr>
					<td><b>Jumlah Kegiatan :</b> <input style="width: 50px;" oninput="MembinaKegiatan()" class="form-control-sm" type="text" id="MembinaKegiatan"  data-inputmask='"mask": "99"' data-mask> <b>Kegiatan</b></td>
				</tr>
				<tr>
					<td rowspan="2" class='text-center'>9</td>
					<td class='align-middle'><label><input type="checkbox"> Mengembangkan program kuliah yang mempunyai nilai kebaharuan metode atau substansi (setiap produk)</label></td>
					<td rowspan="2" class='text-center align-middle'><b id="KreditMengembangkanProgram">0</b></td>
				</tr>
				<tr>
					<td><b>Jumlah Mata Kuliah :</b> <input style="width: 50px;" oninput="MengembangkanProgram()" class="form-control-sm" type="text" id="MengembangkanProgram"  data-inputmask='"mask": "99"' data-mask> <b>Mata Kuliah</b></td>
				</tr>
				<tr>
					<td rowspan="3" class='text-center'>10</td>
					<td class='align-middle'>Mengembangkan bahan pengajaran/ bahan kuliah yangmempunyai nilai kebaharuan (setiap produk)</td>
					<td></td>
				</tr>
				<tr>
					<td><b>Jumlah Buku ajar :</b> <input style="width: 50px;" oninput="BukuAjar()" class="form-control-sm" type="text" id="BukuAjar"  data-inputmask='"mask": "99"' data-mask> <b>Buku Ajar</b></td>
					<td class='text-center align-middle'><b id="KreditBukuAjar">0</b></td>
				</tr>
				<tr>
					<td><b>Jumlah Produk Diktat, Modul, dll:</b> <input style="width: 50px;" oninput="ProdukPengajaran()" class="form-control-sm" type="text" id="ProdukPengajaran"  data-inputmask='"mask": "99"' data-mask> <b>Produk</b></td>
					<td class='text-center align-middle'><b id="KreditProdukPengajaran">0</b></td>
				</tr>
				<tr>
					<td rowspan="2" class='text-center'>11</td>
					<td class='align-middle'> Menyampaikan orasi ilmiah di tingkat perguruan tinggi</td>
					<td rowspan="2" class='text-center align-middle'><b id="KreditOrasi">0</b></td>
				</tr>
				<tr>
					<td><b>Jumlah Orasi:</b> <input style="width: 50px;" oninput="Orasi()" class="form-control-sm" type="text" id="Orasi"  data-inputmask='"mask": "99"' data-mask> <b>Orasi</b></td>
				</tr>
				<tr>
					<td rowspan="9" class='text-center'>12</td>
					<td class='align-middle'>Menduduki jabatan pimpinan perguruan tinggisesuai tugas pokok, fungsi dan kewenangan dan/atau setara(setiap semester)</td>
				</tr>
				
				<tr>
					<td class='align-middle'><label><input type="Radio" name="Jabatan"> Rektor</label></td>
				</tr>
				<tr>
					<td class='align-middle'><label><input type="Radio" name="Jabatan"> Wakil rektor/dekan/direktur program pasca sarjana/ketua lembaga</label></td>
				</tr>
				<tr>
					<td class='align-middle'><label><input type="Radio" name="Jabatan"> Ketua sekolah tinggi/pembantu dekan/asisten direktur program pasca sarjana/direktur politeknik/kepala LLDikti</label></td>
				</tr>
				<tr>
					<td class='align-middle'><label><input type="Radio" name="Jabatan"> Pembantu ketua sekolah tinggi/pembantu direktur politeknik</label></td>
				</tr>
				<tr>
					<td class='align-middle'><label><input type="Radio" name="Jabatan"> Direktur akademi</label></td>
				</tr>
				<tr>
					<td class='align-middle'><label><input type="Radio" name="Jabatan"> Pembantu direktur politeknik, ketua jurusan/ bagian pada universitas/ institut/sekolah tinggi</label></td>
				</tr>
				<tr>
					<td class='align-middle'><label><input type="Radio" name="Jabatan"> Pembantu direktur akademi/ketua jurusan/ketua prodipada universitas/politeknik/akademi, sekretaris jurusan/bagian pada universitas/institut/sekolah tinggi</label></td>
				</tr>
				<tr>
					<td class='align-middle'><label><input type="Radio" name="Jabatan"> Sekretaris jurusan pada politeknik/akademi dan kepala laboratorium (bengkel) universitas/institut/sekolah tinggi/politeknik/akademi</label></td>
				</tr>
				<tr>
					<td rowspan="3" class='text-center'>13</td>
					<td class='align-middle'>Membimbing dosen yang mempunyai jabatan akademik lebih rendah setiap semester (bagi dosen Lektor Kepala ke atas)</td>
					<td></td>
				</tr>
				<tr>
					<td><b>Pembimbing Pencangkokan :</b> <input style="width: 50px;" oninput="PembimbingPencangkokan()" class="form-control-sm" type="text" id="PembimbingPencangkokan"  data-inputmask='"mask": "99"' data-mask> <b>Orang</b></td>
					<td class='text-center align-middle'><b id="KreditPembimbingPencangkokan">0</b></td>
				</tr>
				<tr>
					<td><b>Pembimbing Reguler :</b> <input style="width: 50px;" oninput="PembimbingReguler()" class="form-control-sm" type="text" id="PembimbingReguler"  data-inputmask='"mask": "99"' data-mask> <b>Orang</b></td>
					<td class='text-center align-middle'><b id="KreditPembimbingReguler">0</b></td>
				</tr>
				<tr>
					<td rowspan="3" class='text-center'>14</td>
					<td class='align-middle'>Melaksanakan kegiatan detasering dan pencangkokan di luar institusi tempat bekerja setiap semester (bagi dosenLektor kepala ke atas)</td>
					<td></td>
				</tr>
				<tr>
					<td><b>Detasering :</b> <input style="width: 50px;" oninput="Detasering()" class="form-control-sm" type="text" id="Detasering"  data-inputmask='"mask": "99"' data-mask> <b>Orang</b></td>
					<td class='text-center align-middle'><b id="KreditDetasering">0</b></td>
				</tr>
				<tr>
					<td><b>Pencangkokan :</b> <input style="width: 50px;" oninput="Pencangkokan()" class="form-control-sm" type="text" id="Pencangkokan"  data-inputmask='"mask": "99"' data-mask> <b>Orang</b></td>
					<td class='text-center align-middle'><b id="KreditPencangkokan">0</b></td>
				</tr>
				<tr>
					<td rowspan="9" class='text-center'>15</td>
					<td class='align-middle'>Melaksanakan pengembangan diri untuk meningkatkan kompetensi</td>
				</tr>
				<tr>
					<td><b>Lamanya lebih dari 960 jam :</b> <input style="width: 50px;" oninput="Pengembangan960()" class="form-control-sm" type="text" id="Pengembangan960"  data-inputmask='"mask": "99"' data-mask> <b>Kegiatan</b></td>
					<td class='text-center align-middle'><b id="KreditPengembangan960">0</b></td>
				</tr>
				<tr>
					<td><b>Lamanya lebih dari 641-960 jam :</b> <input style="width: 50px;" oninput="Pengembangan641()" class="form-control-sm" type="text" id="Pengembangan641"  data-inputmask='"mask": "99"' data-mask> <b>Kegiatan</b></td>
					<td class='text-center align-middle'><b id="KreditPengembangan641">0</b></td>
				</tr>
				<tr>
					<td><b>Lamanya lebih dari 481-640 jam :</b> <input style="width: 50px;" oninput="Pengembangan481()" class="form-control-sm" type="text" id="Pengembangan481"  data-inputmask='"mask": "99"' data-mask> <b>Kegiatan</b></td>
					<td class='text-center align-middle'><b id="KreditPengembangan481">0</b></td>
				</tr>
				<tr>
					<td><b>Lamanya lebih dari 161-480 jam :</b> <input style="width: 50px;" oninput="Pengembangan161()" class="form-control-sm" type="text" id="Pengembangan161"  data-inputmask='"mask": "99"' data-mask> <b>Kegiatan</b></td>
					<td class='text-center align-middle'><b id="KreditPengembangan161">0</b></td>
				</tr>
				<tr>
					<td><b>Lamanya lebih dari 81-160 jam :</b> <input style="width: 50px;" oninput="Pengembangan81()" class="form-control-sm" type="text" id="Pengembangan81"  data-inputmask='"mask": "99"' data-mask> <b>Kegiatan</b></td>
					<td class='text-center align-middle'><b id="KreditPengembangan81">0</b></td>
				</tr>
				<tr>
					<td><b>Lamanya lebih dari 30-80 jam :</b> <input style="width: 50px;" oninput="Pengembangan30()" class="form-control-sm" type="text" id="Pengembangan30"  data-inputmask='"mask": "99"' data-mask> <b>Kegiatan</b></td>
					<td class='text-center align-middle'><b id="KreditPengembangan30">0</b></td>
				</tr>
				<tr>
					<td><b>Lamanya lebih dari 10-30 jam :</b> <input style="width: 50px;" oninput="Pengembangan10()" class="form-control-sm" type="text" id="Pengembangan10"  data-inputmask='"mask": "99"' data-mask> <b>Kegiatan</b></td>
					<td class='text-center align-middle'><b id="KreditPengembangan10">0</b></td>
				</tr>
      </tbody>
    </table>
  </div>
</div>		               