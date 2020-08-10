<div class="container-fluid">
  <div class="row">
    <div class="col-sm-4 mt-1 mb-1">
      <div class="input-group mb-1">
        <div class="input-group-prepend">
          <label class="input-group-text bg-warning"><i class="fa fa-tasks"></i><b>&nbsp;Kegiatan</b></label>
        </div>
        <?php 
          $Kegiatan = array('Menduduki jabatan pimpinan pada lembaga pemerintahan/pejabat negara yang harus dibebaskan dari jabatan organiknya tiap semester',
          'Melaksanakan pengembangan hasil pendidikan, dan penelitian yang dapat dimanfaatkan oleh masyarakat/industry setiap program',
          'Memberi latihan/penyuluhan/penataran/ceramah pada masyarakat, terjadwal/terprogram',
          'Memberi pelayanan kepada masyarakat atau kegiatan lain yang menunjang pelaksanaan tugas pemerintahan dan pembangunan',
          'Membuat/menulis karya pengabdian pada masyarakat yang tidak dipublikasikan,tiap karya',
          'Hasil kegiatan pengabdian kepada masyarakat yang dipublikasikan di sebuah berkala/jurnal pengabdian kepada masyarakat atau teknologi tepat guna, merupakan diseminasi dari luaran program kegiatan pengabdian kepada masyarakat, tiap karya',
          'Berperan serta aktif dalam pengelolaan jurnal ilmiah (per tahun)');
        ?>
        <select class="custom-select" id="IdKegiatanPengabdian">
          <?php $Id = 1; foreach ($Kegiatan as $key) { $ID = 'PNB'.$Id;?>
            <option value="<?='PNB'.$Id++?>" <?php if ($this->session->userdata('IdKegiatanPengabdian') == $ID) {
              echo 'selected';
            } ?>><?=$key?></option>
          <?php } ?>
        </select>
      </div>
    </div> 
    <div class="col-sm-4 mt-1 mb-1">
      <button type="button" id="LihatRealisasi" class="btn btn-primary"><i class="fa fa-eye"></i><b> Lihat</b></button>
      <button type="button" class="btn btn-danger text-light" data-toggle="modal" data-target="#InputRealisasiPengabdian"><i class="fa fa-plus"></i> <b>Input</b></button>       
      <button class="btn btn-success" data-toggle="modal" data-target="#OutputPengabdian"><i class="fa fa-file-excel"></i> <b>Download</b></button>
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
              <td class="text-center align-middle"><?=$key['Volume']?></td>
              <td class="text-center align-middle"><?=$key['Kredit']?></td>
              <td class="text-center align-middle"><?=$key['JumlahKredit']?></td>
              <td class="text-center align-middle text-success h3"><?php if ($key['Bukti'] != '') { ?>
                  <a href="<?=base_url('Pengabdian/'.$key['Bukti'])?>" class="btn btn-sm btn-primary" download><i class="fas fa-download"></i></a>
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
<div class="modal fade" id="InputRealisasiPengabdian">
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
          <select class="custom-select" id="InputIdKegiatanPengabdian" onchange="InputIdKegiatanPengabdian()">
          <?php $Id = 1; foreach ($Kegiatan as $key) { ?>
              <option value="<?='PNB'.$Id++?>"><?=$key?></option>
            <?php } ?>
          </select>
        </div>
        <div id="OpsiPNB3" style="display: none;">
          <div class="input-group mb-1">
            <div class="input-group-prepend">
              <span class="input-group-text bg-primary"><b>Tingkat</b></span>
            </div>
            <select class="custom-select" id="Tingkat">
              <option value="1">Dalam 1 semester/lebih Tingkat Internasional tiap program</option>
              <option value="2">Dalam 1 semester/lebih Tingkat Nasional tiap program</option>
              <option value="3">Dalam 1 semester/lebih Tingkat Lokal tiap program</option>
              <option value="4">Kurang dari 1 semester dan minimal 1 bulan Tingkat Internasional tiap program</option>
              <option value="5">Kurang dari 1 semester dan minimal 1 bulan Tingkat Nasional tiap program</option>
              <option value="6">Kurang dari 1 semester dan minimal 1 bulan Tingkat Lokal tiap program</option>
              <option value="7">Kurang dari 1 semester dan minimal 1 bulan Insidental tiap program</option>
            </select>
          </div>
        </div>
        <div id="OpsiPNB4" style="display: none;">
          <div class="input-group mb-1">
            <div class="input-group-prepend">
              <span class="input-group-text bg-primary"><b>Dasar</b></span>
            </div>
            <select class="custom-select" id="Dasar">
              <option value="1">Berdasarkan bidang keahlian, tiap program</option>
              <option value="2">Berdasarkan penugasan lembaga perguruan tinggi, tiap program</option>
              <option value="3">Berdasarkan fungsi/jabatan tiap program</option>
            </select>
          </div>
        </div>
        <div id="OpsiPNB7" style="display: none;">
          <div class="input-group mb-1">
            <div class="input-group-prepend">
              <span class="input-group-text bg-primary"><b>Peran</b></span>
            </div>
            <select class="custom-select" id="Peran">
              <option value="1">Editor/dewan penyunting/dewan redaksi  jurnal ilmiah internasiona</option>
              <option value="2">Editor/dewan penyunting/dewan redaksi  jurnal ilmiah nasional</option>
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
        <pre class="text-danger"><b>Bukti Berupa Pdf & Wajib Menyertakan Surat Tugas/SK</b></pre>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-danger" data-dismiss="modal"><b>Tutup</b></button>
        <button type="submit" class="btn btn-success" id="TambahRealisasiPengabdian"><b>Simpan</b></button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="EditRealisasiPengabdian">
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
        <button type="submit" class="btn btn-success" id="UpdateRealisasiPengabdian"><b>Simpan</b></button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="OutputPengabdian">
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