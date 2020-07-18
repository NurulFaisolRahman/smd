<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendidikan extends CI_Controller {

	function __construct(){
		parent::__construct();
		if(!$this->session->userdata('Login')){
			redirect(base_url());
		}
	}

	public function InputRencanaPendidikan(){
		$NIP = $this->session->userdata('NIP');
		$Jabatan = $this->session->userdata('Jabatan');
		$this->db->insert('RencanaPendidikan',
								array('NIP' => $NIP, 
											'Jabatan' => $Jabatan,
											'Jenjang' => $_POST['Jenjang'],
											'Semester' => $_POST['Semester'],
											'Tahun' => $_POST['Tahun'],
											'KodeRencana' => $_POST['Kode'],
											'TotalKredit' => $_POST['Total']));
		if ($this->db->affected_rows()){
			echo '1';
		} else {
			echo '0';
		}
	}

	public function Hapus(){
		$this->db->delete('Pendidikan', array('No' => $_POST['No']));
		if ($this->db->affected_rows()){
			echo '1';
		} else {
			echo 'Gagal Menghapus';
		}
	}

	public function Edit(){
		$this->db->where('No', $_POST['No']);
		$this->db->update('Pendidikan', 
									array('Kegiatan' => $_POST['Kegiatan'],
												'Tanggal' => $_POST['Tanggal'],
												'Volume' => $_POST['Volume']));
		if ($this->db->affected_rows()){
			echo '1';
		} else {
			echo 'Gagal Update Data';
		}
	}

	public function Input(){
		$NIP = $this->session->userdata('NIP');
		$Jabatan = $this->session->userdata('Jabatan');
		if ($_POST['ID'] == 'PND1') {
			$Volume = '';
			$JumlahKredit = $Kredit = $_POST['Jenjang'];
		}
		else if ($_POST['ID'] == 'PND2') {
			$Volume = '';
			$JumlahKredit = $Kredit = '3';
		}
		else if ($_POST['ID'] == 'PND3') {
			if ($_POST['Volume'] > 10) {
				if ($Jabatan == 'Asisten Ahli') {
					$JumlahKredit = (10*0.5)+(($_POST['Volume']-10)*0.25);
					$Kredit = '0.5 & 0.25';
				} else {
					$JumlahKredit = (10*1)+(($_POST['Volume']-10)*0.5);
					$Kredit = '1 & 0.5';
				}
				$Volume = '10 SKS Pertama & 2 SKS Berikutnya';
			} else {
				if ($Jabatan == 'Asisten Ahli') {
					$JumlahKredit = $_POST['Volume']*0.5;
					$Kredit = '0.5';
				} else {
					$JumlahKredit = $_POST['Volume'];
					$Kredit = '1';
				}
				$Volume = '10 SKS Pertama';
			}
		}
		else if ($_POST['ID'] == 'PND4' || $_POST['ID'] == 'PND5') {
			$Volume = '';
			$JumlahKredit = $Kredit = '1';
		}
		else if ($_POST['ID'] == 'PND6') {
			if ($_POST['JenisPembimbing'] == '1') {
				if ($_POST['JenisBimbingan'] == '1') {
					$Volume = '4 lulusan/semester';
					$JumlahKredit = $_POST['Volume']*8;
					$Kredit = '8';
				}
				else if ($_POST['JenisBimbingan'] == '2') {
					$Volume = '6 lulusan/semester';
					$JumlahKredit = $_POST['Volume']*3;
					$Kredit = '3';
				}
				else if ($_POST['JenisBimbingan'] == '3') {
					$Volume = '8 lulusan/semester';
					$JumlahKredit = $_POST['Volume'];
					$Kredit = '1';
				}
				else if ($_POST['JenisBimbingan'] == '4') {
					$Volume = '10 lulusan/semester';
					$JumlahKredit = $_POST['Volume'];
					$Kredit = '1';
				}
			}
			else {
				if ($_POST['JenisBimbingan'] == '1') {
					$Volume = '4 lulusan/semester';
					$JumlahKredit = $_POST['Volume']*6;
					$Kredit = '6';
				}
				else if ($_POST['JenisBimbingan'] == '2') {
					$Volume = '6 lulusan/semester';
					$JumlahKredit = $_POST['Volume']*2;
					$Kredit = '2';
				}
				else if ($_POST['JenisBimbingan'] == '3') {
					$Volume = '8 lulusan/semester';
					$JumlahKredit = $_POST['Volume']*0.5;
					$Kredit = '0.5';
				}
				else if ($_POST['JenisBimbingan'] == '4') {
					$Volume = '10 lulusan/semester';
					$JumlahKredit = $_POST['Volume']*0.5;
					$Kredit = '0.5';
				}
			}
		}
		else if ($_POST['ID'] == 'PND7') {
			if ($_POST['JenisPenguji'] == '1') {
				$Volume = '4 lulusan/semester';
				$JumlahKredit = $_POST['Volume'];
				$Kredit = '1';
			}
			else {
				$Volume = '8 lulusan/semester';
				$JumlahKredit = $_POST['Volume']*0.5;
				$Kredit = '0.5';
			}
		}
		else if ($_POST['ID'] == 'PND8') {
			$Volume = '2 kegiatan /semester';
			$JumlahKredit = $_POST['Volume']*2;
			$Kredit = '2';
		}
		else if ($_POST['ID'] == 'PND9') {
			$Volume = '1 mata kuliah /semester';
			$JumlahKredit = $_POST['Volume']*2;
			$Kredit = '2';
		}
		else if ($_POST['ID'] == 'PND10') {
			if ($_POST['BahanPengajaran'] == '1') {
				$Volume = '1 buku/tahun';
				$JumlahKredit = $_POST['Volume']*20;
				$Kredit = '20';
			}
			else {
				$Volume = '1 produk /semester';
				$JumlahKredit = $_POST['Volume']*5;
				$Kredit = '5';
			}
		}
		else if ($_POST['ID'] == 'PND11') {
			$Volume = '2 orasi/semester';
			$JumlahKredit = $_POST['Volume']*5;
			$Kredit = '5';
		}
		else if ($_POST['ID'] == 'PND12') {
			$Volume = '1 jabatan/semester';
			$JumlahKredit = $_POST['Volume']*$_POST['JenisPND12'];
			$Kredit = $_POST['JenisPND12'];
		}
		else if ($_POST['ID'] == 'PND13') {
			if ($_POST['JenisPND13'] == '1') {
				$Volume = '1 Orang';
				$JumlahKredit = $_POST['Volume']*2;
				$Kredit = '2';
			}
			else {
				$Volume = '1 Orang';
				$JumlahKredit = $_POST['Volume'];
				$Kredit = '1';
			}
		}
		else if ($_POST['ID'] == 'PND14') {
			if ($_POST['JenisPND14'] == '1') {
				$Volume = '1 Orang';
				$JumlahKredit = $_POST['Volume']*5;
				$Kredit = '5';
			}
			else {
				$Volume = '1 Orang';
				$JumlahKredit = $_POST['Volume']*4;
				$Kredit = '4';
			}
		}
		else if ($_POST['ID'] == 'PND15') {
			$Volume = '';
			$JumlahKredit = $_POST['Volume']*$_POST['JenisPND15'];
			$Kredit = $_POST['JenisPND15'];
		}
		$Gambar = count($_FILES);
		if ($Gambar > 0) {
			if ($this->CekBukti($Gambar)){
				for ($i=0; $i < $Gambar; $i++) { 
					$Tipe = pathinfo($_FILES['file'.$i]['name'],PATHINFO_EXTENSION);
					$NamaGambar = date('Ymd',time()).rand(0,99999).$Tipe;
					move_uploaded_file($_FILES['file'.$i]['tmp_name'], "Pendidikan/".$NamaGambar);
				}
				$this->db->insert('Pendidikan',
										array('NIP' => $NIP, 
													'ID' => $_POST['ID'],
													'Kegiatan' => $_POST['Kegiatan'],
													'Tanggal' => $_POST['Tanggal'],
													'Satuan' => $Volume,
													'Volume' => $_POST['Volume'],
													'Kredit' => $Kredit,
													'JumlahKredit' => $JumlahKredit,
													'Bukti' => $NamaGambar));
				if ($this->db->affected_rows()){
					$this->session->set_userdata('Pendidikan', $_POST['ID']);
					echo '1';
				} else {
					echo '0';
				}
			}
			else {
				echo 'Bukti Hanya Boleh PDF/Gambar!';
			}
		} 
		else {
			$this->db->insert('Pendidikan',
									array('NIP' => $NIP, 
												'ID' => $_POST['ID'],
												'Kegiatan' => $_POST['Kegiatan'],
												'Tanggal' => $_POST['Tanggal'],
												'Satuan' => $Volume,
												'Volume' => $_POST['Volume'],
												'Kredit' => $Kredit,
												'JumlahKredit' => $JumlahKredit));
			if ($this->db->affected_rows()){
				$this->session->set_userdata('Pendidikan', $_POST['ID']);
				echo '1';
			} else {
				echo '0';
			}
		}
	}

	public function CekBukti($file){
		for ($i=0; $i < $file; $i++) { 
			$Tipe = pathinfo($_FILES['file'.$i]['name'],PATHINFO_EXTENSION);
			$valid_extensions = array("pdf","jpg","jpeg","png");
			if(!in_array(strtolower($Tipe),$valid_extensions)) {
				return false;
			} 
		}
		return true;
	}
}