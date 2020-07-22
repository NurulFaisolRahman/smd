<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendidikan extends CI_Controller {

	function __construct(){
		parent::__construct();
		if(!$this->session->userdata('Login')){
			redirect(base_url());
		}
	}

	public function InputRencana(){
		$NIP = $this->session->userdata('NIP');
		$Jabatan = $this->session->userdata('Jabatan');
		if($this->db->get_where('RencanaPendidikan', array('Jenjang' => $_POST['Jenjang'],'Semester' => $_POST['Semester'],'Tahun' => $_POST['Tahun']))->num_rows() === 0){
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
				echo 'Gagal Menyimpnan';
			}
		}
		else {
			echo 'Data Rencana Pendidikan Jenjang '.$_POST['Jenjang'].' Semester '.$_POST['Semester'].' Tahun '.$_POST['Tahun'].' Telah Ada';
		}
	}

	public function EditRencana(){
		$this->db->where('No', $_POST['No']);
		$this->db->update('RencanaPendidikan', 
								array('Jenjang' => $_POST['Jenjang'],
											'Semester' => $_POST['Semester'],
											'Tahun' => $_POST['Tahun'],
											'KodeRencana' => $_POST['Kode'],
											'TotalKredit' => $_POST['Total']));
		if ($this->db->affected_rows()){
			echo '1';
		} else {
			echo 'Gagal Menyimpnan';
		}
	}

	public function HapusRencana(){
		$this->db->delete('RencanaPendidikan', array('No' => $_POST['No']));
		if ($this->db->affected_rows()){
			echo '1';
		} else {
			echo 'Gagal Menghapus';
		}
	}

	public function InputRealisasi(){
		$NIP = $this->session->userdata('NIP');
		$Jabatan = $this->session->userdata('Jabatan');
		if ($_POST['IdKegiatan'] == 'PND1') {
			$Volume = '';
			$JumlahKredit = $Kredit = $_POST['Jenjang'];
		}
		else if ($_POST['IdKegiatan'] == 'PND2') {
			$Volume = '';
			$JumlahKredit = $Kredit = '3';
		}
		else if ($_POST['IdKegiatan'] == 'PND3') {
			if ($_POST['Volume'] > 10) {
				if ($Jabatan == 'Asisten Ahli') {
					$JumlahKredit = 5+(($_POST['Volume']-10)*0.25);
					$Kredit = '0.5 & 0.25';
				} else {
					$JumlahKredit = 10+(($_POST['Volume']-10)*0.5);
					$Kredit = '1 & 0.5';
				}
				$Volume = '10 sks Pertama & 2 sks Berikutnya';
			} else {
				if ($Jabatan == 'Asisten Ahli') {
					$JumlahKredit = $_POST['Volume']*0.5;
					$Kredit = '0.5';
				} else {
					$JumlahKredit = $_POST['Volume'];
					$Kredit = '1';
				}
				$Volume = '10 sks Pertama';
			}
		}
		else if ($_POST['IdKegiatan'] == 'PND4' || $_POST['IdKegiatan'] == 'PND5') {
			$Volume = '';
			$JumlahKredit = $Kredit = '1';
		}
		else if ($_POST['IdKegiatan'] == 'PND6') {
			if ($_POST['JenisPembimbing'] == '1') {
				if ($_POST['JenisBimbingan'] == '1') {
					$Volume = '4 lulusan / semester';
					$JumlahKredit = $_POST['Volume']*2;
					$Kredit = '8';
				}
				else if ($_POST['JenisBimbingan'] == '2') {
					$Volume = '6 lulusan / semester';
					$JumlahKredit = $_POST['Volume']*0.5;
					$Kredit = '3';
				}
				else if ($_POST['JenisBimbingan'] == '3') {
					$Volume = '8 lulusan / semester';
					$JumlahKredit = $_POST['Volume']*0.125;
					$Kredit = '1';
				}
			}
			else {
				if ($_POST['JenisBimbingan'] == '1') {
					$Volume = '4 lulusan / semester';
					$JumlahKredit = $_POST['Volume']*1.5;
					$Kredit = '6';
				}
				else if ($_POST['JenisBimbingan'] == '2') {
					$Volume = '6 lulusan / semester';
					$JumlahKredit = round(($_POST['Volume']*2/6),2);
					$Kredit = '2';
				}
				else if ($_POST['JenisBimbingan'] == '3') {
					$Volume = '8 lulusan / semester';
					$JumlahKredit = $_POST['Volume']*0.0625;
					$Kredit = '0.5';
				}
			}
		}
		else if ($_POST['IdKegiatan'] == 'PND7') {
			if ($_POST['JenisPenguji'] == '1') {
				$Volume = '4 lulusan / semester';
				$JumlahKredit = $_POST['Volume']/4;
				$Kredit = '1';
			}
			else {
				$Volume = '8 lulusan / semester';
				$JumlahKredit = $_POST['Volume']*0.0625;
				$Kredit = '0.5';
			}
		}
		else if ($_POST['IdKegiatan'] == 'PND8') {
			$Volume = '2 kegiatan / semester';
			$JumlahKredit = $_POST['Volume'];
			$Kredit = '2';
		}
		else if ($_POST['IdKegiatan'] == 'PND9') {
			$Volume = '1 mata kuliah / semester';
			$JumlahKredit = $_POST['Volume']*2;
			$Kredit = '2';
		}
		else if ($_POST['IdKegiatan'] == 'PND10') {
			if ($_POST['BahanPengajaran'] == '1') {
				$Volume = '1 buku/tahun';
				$JumlahKredit = $_POST['Volume']*20;
				$Kredit = '20';
			}
			else {
				$Volume = '1 produk  / semester';
				$JumlahKredit = $_POST['Volume']*5;
				$Kredit = '5';
			}
		}
		else if ($_POST['IdKegiatan'] == 'PND11') {
			$Volume = '2 orasi / semester';
			$JumlahKredit = $_POST['Volume']*2.5;
			$Kredit = '5';
		}
		else if ($_POST['IdKegiatan'] == 'PND12') {
			$Volume = '1 jabatan / semester';
			$JumlahKredit = $_POST['JenisPND12'];
			$Kredit = $_POST['JenisPND12'];
		}
		else if ($_POST['IdKegiatan'] == 'PND13') {
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
		else if ($_POST['IdKegiatan'] == 'PND14') {
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
		else if ($_POST['IdKegiatan'] == 'PND15') {
			$Volume = '';
			$JumlahKredit = $_POST['Volume']*$_POST['JenisPND15'];
			$Kredit = $_POST['JenisPND15'];
		}
		$Pdf = count($_FILES);
		if ($Pdf > 0) {
			if ($this->CekBukti($Pdf)){
				$Tipe = pathinfo($_FILES['file']['name'],PATHINFO_EXTENSION);
				$NamaPdf = date('Ymd',time()).substr(password_hash('Pendidikan', PASSWORD_DEFAULT),7,2).'.'.$Tipe;
				move_uploaded_file($_FILES['file']['tmp_name'], "Pendidikan/".$NamaPdf);
				$this->db->insert('RealisasiPendidikan',
										array('NIP' => $NIP, 
													'Jabatan' => $Jabatan, 
													'Jenjang' => $_POST['Jenjang'], 
													'Semester' => $_POST['Semester'], 
													'Tahun' => $_POST['Tahun'], 
													'IdKegiatan' => $_POST['IdKegiatan'],
													'Kode' => $_POST['Kode'],
													'Kegiatan' => $_POST['Kegiatan'],
													'TanggalKegiatan' => $_POST['TanggalKegiatan'],
													'Satuan' => $Volume,
													'Volume' => $_POST['Volume'],
													'Kredit' => $Kredit,
													'JumlahKredit' => $JumlahKredit,
													'Bukti' => $NamaPdf));
				if ($this->db->affected_rows()){
					$this->session->set_userdata('IdKegiatanPendidikan', $_POST['IdKegiatan']);
					echo '1';
				} else {
					echo 'Gagal Menyimpan';
				}
			}
			else {
				echo 'Bukti Hanya Boleh PDF!';
			}
		} 
		else {
			$this->db->insert('RealisasiPendidikan',
										array('NIP' => $NIP, 
													'Jabatan' => $Jabatan,
													'Jenjang' => $_POST['Jenjang'], 
													'Semester' => $_POST['Semester'], 
													'Tahun' => $_POST['Tahun'], 
													'IdKegiatan' => $_POST['IdKegiatan'],
													'Kode' => $_POST['Kode'],
													'Kegiatan' => $_POST['Kegiatan'],
													'TanggalKegiatan' => $_POST['TanggalKegiatan'],
													'Satuan' => $Volume,
													'Volume' => $_POST['Volume'],
													'Kredit' => $Kredit,
													'JumlahKredit' => $JumlahKredit));
			if ($this->db->affected_rows()){
				$this->session->set_userdata('IdKegiatanPendidikan', $_POST['IdKegiatan']);
				echo '1';
			} else {
				echo 'Gagal Menyimpan';
			}
		}
	}

	public function CekBukti($file){
		$Tipe = pathinfo($_FILES['file']['name'],PATHINFO_EXTENSION);
		$valid_extensions = array("pdf");
		if(!in_array(strtolower($Tipe),$valid_extensions)) {
			return false;
		} 
		return true;
	}

	public function EditRealisasi(){
		$Jabatan = $_POST['Jabatan'];
		$Kode = $_POST['Kode'];
		if ($_POST['IdKegiatan'] == 'PND1') {
			$Volume = '';
			$JumlahKredit = $Kredit = $_POST['Jenjang'];
		}
		else if ($_POST['IdKegiatan'] == 'PND2') {
			$Volume = '';
			$JumlahKredit = $Kredit = '3';
		}
		else if ($_POST['IdKegiatan'] == 'PND3') {
			if ($_POST['Volume'] > 10) {
				if ($Jabatan == 'Asisten Ahli') {
					$JumlahKredit = 5+(($_POST['Volume']-10)*0.25);
					$Kredit = '0.5 & 0.25';
				} else {
					$JumlahKredit = 10+(($_POST['Volume']-10)*0.5);
					$Kredit = '1 & 0.5';
				}
				$Volume = '10 sks Pertama & 2 sks Berikutnya';
			} else {
				if ($Jabatan == 'Asisten Ahli') {
					$JumlahKredit = $_POST['Volume']*0.5;
					$Kredit = '0.5';
				} else {
					$JumlahKredit = $_POST['Volume'];
					$Kredit = '1';
				}
				$Volume = '10 sks Pertama';
			}
		}
		else if ($_POST['IdKegiatan'] == 'PND4' || $_POST['IdKegiatan'] == 'PND5') {
			$Volume = '';
			$JumlahKredit = $Kredit = '1';
		}
		else if ($_POST['IdKegiatan'] == 'PND6') {
			$Pisah = explode('/',$Kode);
			if ($Pisah[0] == '1') {
				if ($Pisah[1] == '1') {
					$Volume = '4 lulusan / semester';
					$JumlahKredit = $_POST['Volume']*2;
					$Kredit = '8';
				}
				else if ($Pisah[1] == '2') {
					$Volume = '6 lulusan / semester';
					$JumlahKredit = $_POST['Volume']*0.5;
					$Kredit = '3';
				}
				else if ($Pisah[1] == '3') {
					$Volume = '8 lulusan / semester';
					$JumlahKredit = $_POST['Volume']*0.125;
					$Kredit = '1';
				}
			}
			else {
				if ($Pisah[1] == '1') {
					$Volume = '4 lulusan / semester';
					$JumlahKredit = $_POST['Volume']*1.5;
					$Kredit = '6';
				}
				else if ($Pisah[1] == '2') {
					$Volume = '6 lulusan / semester';
					$JumlahKredit = round(($_POST['Volume']*2/6),2);
					$Kredit = '2';
				}
				else if ($Pisah[1] == '3') {
					$Volume = '8 lulusan / semester';
					$JumlahKredit = $_POST['Volume']*0.0625;
					$Kredit = '0.5';
				}
			}
		}
		else if ($_POST['IdKegiatan'] == 'PND7') {
			if ($Kode == '1') {
				$Volume = '4 lulusan / semester';
				$JumlahKredit = $_POST['Volume']/4;
				$Kredit = '1';
			}
			else {
				$Volume = '8 lulusan / semester';
				$JumlahKredit = $_POST['Volume']*0.0625;
				$Kredit = '0.5';
			}
		}
		else if ($_POST['IdKegiatan'] == 'PND8') {
			$Volume = '2 kegiatan / semester';
			$JumlahKredit = $_POST['Volume'];
			$Kredit = '2';
		}
		else if ($_POST['IdKegiatan'] == 'PND9') {
			$Volume = '1 mata kuliah / semester';
			$JumlahKredit = $_POST['Volume']*2;
			$Kredit = '2';
		}
		else if ($_POST['IdKegiatan'] == 'PND10') {
			if ($Kode == '1') {
				$Volume = '1 buku/tahun';
				$JumlahKredit = $_POST['Volume']*20;
				$Kredit = '20';
			}
			else {
				$Volume = '1 produk  / semester';
				$JumlahKredit = $_POST['Volume']*5;
				$Kredit = '5';
			}
		}
		else if ($_POST['IdKegiatan'] == 'PND11') {
			$Volume = '2 orasi / semester';
			$JumlahKredit = $_POST['Volume']*2.5;
			$Kredit = '5';
		}
		else if ($_POST['IdKegiatan'] == 'PND12') {
			$Volume = '1 jabatan / semester';
			$JumlahKredit = $Kode;
			$Kredit = $Kode;
		}
		else if ($_POST['IdKegiatan'] == 'PND13') {
			if ($Kode == '1') {
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
		else if ($_POST['IdKegiatan'] == 'PND14') {
			if ($Kode == '1') {
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
		else if ($_POST['IdKegiatan'] == 'PND15') {
			$Volume = '';
			$JumlahKredit = $_POST['Volume']*$Kode;
			$Kredit = $Kode;
		}
		$Pdf = count($_FILES);
		if ($Pdf > 0) {
			if ($this->CekBukti($Pdf)){
				$Tipe = pathinfo($_FILES['file']['name'],PATHINFO_EXTENSION);
				$NamaPdf = date('Ymd',time()).substr(password_hash('Pendidikan', PASSWORD_DEFAULT),7,2).'.'.$Tipe;
				move_uploaded_file($_FILES['file']['tmp_name'], "Pendidikan/".$NamaPdf);
				$this->db->where('No', $_POST['No']);
				$this->db->update('RealisasiPendidikan',
											array('No' => $_POST['No'], 
														'Jenjang' => $_POST['Jenjang'], 
														'Semester' => $_POST['Semester'], 
														'Tahun' => $_POST['Tahun'], 
														'Kegiatan' => $_POST['Kegiatan'],
														'TanggalKegiatan' => $_POST['TanggalKegiatan'],
														'Satuan' => $Volume,
														'Volume' => $_POST['Volume'],
														'Kredit' => $Kredit,
														'JumlahKredit' => $JumlahKredit,
														'Bukti' => $NamaPdf));
				if ($this->db->affected_rows()){
					if($_POST['Bukti'] != ''){
						unlink('Pendidikan/'.$_POST['Bukti']);
					}
					echo '1';
				} else {
					echo 'Gagal Menyimpan';
				}
			}
			else {
				echo 'Bukti Hanya Boleh PDF!';
			}
		} 
		else {
			$this->db->where('No', $_POST['No']);
			$this->db->update('RealisasiPendidikan',
										array('No' => $_POST['No'], 
													'Jenjang' => $_POST['Jenjang'], 
													'Semester' => $_POST['Semester'], 
													'Tahun' => $_POST['Tahun'], 
													'Kegiatan' => $_POST['Kegiatan'],
													'TanggalKegiatan' => $_POST['TanggalKegiatan'],
													'Satuan' => $Volume,
													'Volume' => $_POST['Volume'],
													'Kredit' => $Kredit,
													'JumlahKredit' => $JumlahKredit));
			if ($this->db->affected_rows()){
				echo '1';
			} else {
				echo 'Gagal Menyimpan';
			}
		}
	}

	public function HapusRealisasi(){
		$this->db->delete('RealisasiPendidikan', array('No' => $_POST['No']));
		if($_POST['Bukti'] != ''){
			unlink('Pendidikan/'.$_POST['Bukti']);
		}
		if ($this->db->affected_rows()){
			echo '1';
		} else {
			echo 'Gagal Menghapus';
		}
	}

	public function Download(){
		$Data['Profil'] = $this->db->get_where('Dosen', array('NIP' => $this->session->userdata('NIP')))->row_array();
		$Data['Pendidikan'] = $this->db->get_where('RealisasiPendidikan', array('NIP' => $this->session->userdata('NIP')))->result_array();
		$this->load->view('ExcelPendidikan',$Data);
	}
}