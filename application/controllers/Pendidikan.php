<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendidikan extends CI_Controller {

	function __construct(){
		parent::__construct();
		if($this->session->userdata('Akun') != 'Dosen'){
			if ($this->session->userdata('Akun') == 'Admin') {
				redirect(base_url('Admin/AkunDosen'));
			} 
			else {
				redirect(base_url());
			}
		}
	}

	public function InputRencana(){
		$NIP = $this->session->userdata('NIP');
		$Jabatan = $this->session->userdata('Jabatan');
		if($this->db->get_where('RencanaPendidikan', array('NIP' => $NIP,'Jenjang' => $_POST['Jenjang'],'Semester' => $_POST['Semester'],'Tahun' => $_POST['Tahun']))->num_rows() === 0){
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
			echo 'Data Rencana Pendidikan Homebase '.$_POST['Jenjang'].' Semester '.$_POST['Semester'].' Tahun '.$_POST['Tahun'].' Telah Ada';
		}
	}

	public function EditRencana(){
		$NIP = $this->session->userdata('NIP');
		if($_POST['Jenjang'] === $_POST['JenjangLama'] && $_POST['Semester'] === $_POST['SemesterLama'] && $_POST['Tahun'] === $_POST['TahunLama'] || $this->db->get_where('RencanaPendidikan', array('NIP' => $NIP,'Jenjang' => $_POST['Jenjang'],'Semester' => $_POST['Semester'],'Tahun' => $_POST['Tahun']))->num_rows() === 0){			
			$this->db->where('No', $_POST['No']);
			$this->db->update('RencanaPendidikan', 
									array('Jenjang' => $_POST['Jenjang'],
												'Semester' => $_POST['Semester'],
												'Tahun' => $_POST['Tahun'],
												'KodeRencana' => $_POST['Kode'],
												'TotalKredit' => $_POST['Total']));
			echo '1';
		} 
		else {
			echo 'Data Rencana Pendidikan Jenjang '.$_POST['Jenjang'].' Semester '.$_POST['Semester'].' Tahun '.$_POST['Tahun'].' Telah Ada';
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
			$Satuan = '1/periode penilaian'; $JumlahKredit = $_POST['Volume']*$_POST['KreditPND1']; $Kredit = $_POST['KreditPND1'];
		}
		else if ($_POST['IdKegiatan'] == 'PND2') {
			$Satuan = ''; $JumlahKredit = $_POST['Volume']*3; $Kredit = '3';
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
				$Satuan = '10 sks Pertama & 2 sks Berikutnya';
			} else {
				if ($Jabatan == 'Asisten Ahli') {
					$JumlahKredit = $_POST['Volume']*0.5;
					$Kredit = '0.5';
				} else {
					$JumlahKredit = $_POST['Volume'];
					$Kredit = '1';
				}
				$Satuan = '10 sks Pertama';
			}
		}
		else if ($_POST['IdKegiatan'] == 'PND4' || $_POST['IdKegiatan'] == 'PND5') {
			$Satuan = '';
			$JumlahKredit = $Kredit = '1';
		}
		else if ($_POST['IdKegiatan'] == 'PND6') {
			if ($_POST['JenisPembimbing'] == '1') {
				if ($_POST['JenisBimbingan'] == '1') {
					$Satuan = '4 lulusan / semester';
					$JumlahKredit = $_POST['Volume']*2;
					$Kredit = '8';
				}
				else if ($_POST['JenisBimbingan'] == '2') {
					$Satuan = '6 lulusan / semester';
					$JumlahKredit = $_POST['Volume']*0.5;
					$Kredit = '3';
				}
				else if ($_POST['JenisBimbingan'] == '3') {
					$Satuan = '8 lulusan / semester';
					$JumlahKredit = $_POST['Volume']*0.125;
					$Kredit = '1';
				}
			}
			else {
				if ($_POST['JenisBimbingan'] == '1') {
					$Satuan = '4 lulusan / semester';
					$JumlahKredit = $_POST['Volume']*1.5;
					$Kredit = '6';
				}
				else if ($_POST['JenisBimbingan'] == '2') {
					$Satuan = '6 lulusan / semester';
					$JumlahKredit = round(($_POST['Volume']*2/6),2);
					$Kredit = '2';
				}
				else if ($_POST['JenisBimbingan'] == '3') {
					$Satuan = '8 lulusan / semester';
					$JumlahKredit = $_POST['Volume']*0.0625;
					$Kredit = '0.5';
				}
			}
		}
		else if ($_POST['IdKegiatan'] == 'PND7') {
			if ($_POST['JenisPenguji'] == '1') {
				$Satuan = '4 lulusan / semester';
				$JumlahKredit = $_POST['Volume']/4;
				$Kredit = '1';
			}
			else {
				$Satuan = '8 lulusan / semester';
				$JumlahKredit = $_POST['Volume']*0.0625;
				$Kredit = '0.5';
			}
		}
		else if ($_POST['IdKegiatan'] == 'PND8') {
			$Satuan = '2 kegiatan / semester';
			$JumlahKredit = $_POST['Volume'];
			$Kredit = '2';
		}
		else if ($_POST['IdKegiatan'] == 'PND9') {
			$Satuan = '1 mata kuliah / semester';
			$JumlahKredit = $_POST['Volume']*2;
			$Kredit = '2';
		}
		else if ($_POST['IdKegiatan'] == 'PND10') {
			if ($_POST['BahanPengajaran'] == '1') {
				$Satuan = '1 buku/tahun';
				$JumlahKredit = $_POST['Volume']*20;
				$Kredit = '20';
			}
			else {
				$Satuan = '1 produk  / semester';
				$JumlahKredit = $_POST['Volume']*5;
				$Kredit = '5';
			}
		}
		else if ($_POST['IdKegiatan'] == 'PND11') {
			$Satuan = '2 orasi / semester';
			$JumlahKredit = $_POST['Volume']*2.5;
			$Kredit = '5';
		}
		else if ($_POST['IdKegiatan'] == 'PND12') {
			$Satuan = '1 jabatan / semester';
			$JumlahKredit = $_POST['JenisPND12'];
			$Kredit = $_POST['JenisPND12'];
		}
		else if ($_POST['IdKegiatan'] == 'PND13') {
			if ($_POST['JenisPND13'] == '1') {
				$Satuan = '1 Orang';
				$JumlahKredit = $_POST['Volume']*2;
				$Kredit = '2';
			}
			else {
				$Satuan = '1 Orang';
				$JumlahKredit = $_POST['Volume'];
				$Kredit = '1';
			}
		}
		else if ($_POST['IdKegiatan'] == 'PND14') {
			if ($_POST['JenisPND14'] == '1') {
				$Satuan = '1 Orang';
				$JumlahKredit = $_POST['Volume']*5;
				$Kredit = '5';
			}
			else {
				$Satuan = '1 Orang';
				$JumlahKredit = $_POST['Volume']*4;
				$Kredit = '4';
			}
		}
		else if ($_POST['IdKegiatan'] == 'PND15') {
			$Satuan = '';
			$JumlahKredit = $_POST['Volume']*$_POST['JenisPND15'];
			$Kredit = $_POST['JenisPND15'];
		}
		$Pdf = count($_FILES);
		if ($Pdf > 0) {
			if ($this->CekBukti($Pdf)){
				$Tipe = pathinfo($_FILES['file']['name'],PATHINFO_EXTENSION);
				$NamaPdf = date('Ymd',time()).substr(password_hash('Pendidikan', PASSWORD_DEFAULT),7,7);
				$NamaPdf = str_replace("/","F",$NamaPdf);
				$NamaPdf = str_replace(".","F",$NamaPdf);
				move_uploaded_file($_FILES['file']['tmp_name'], "Pendidikan/".$NamaPdf.'.'.$Tipe);
				$this->db->insert('RealisasiPendidikan',
										array('NIP' => $NIP, 
													'Jabatan' => $Jabatan, 
													'Jenjang' => $_POST['Homebase'], 
													'Semester' => $_POST['Semester'], 
													'Tahun' => $_POST['Tahun'], 
													'IdKegiatan' => $_POST['IdKegiatan'],
													'Kode' => $_POST['Kode'],
													'SK' => htmlentities($_POST['SK']),
													'Kegiatan' => htmlentities($_POST['Kegiatan']),
													'TanggalKegiatan' => htmlentities($_POST['TanggalKegiatan']),
													'Satuan' => $Satuan,
													'Volume' => $_POST['Volume'],
													'Kredit' => $Kredit,
													'JumlahKredit' => $JumlahKredit,
													'Bukti' => $NamaPdf.'.'.$Tipe));
				if ($this->db->affected_rows()){
					$this->session->set_userdata('IdKegiatanPendidikan', $_POST['IdKegiatan']);
					// $this->db->insert('BkdPendidikan',
					// 					array('NIP' => $NIP, 
					// 								'Kegiatan' => htmlentities($_POST['Kegiatan']),
					// 								'Bukti' => htmlentities($_POST['SK']),
					// 								'Kredit' => $_POST['KreditBKD'],
					// 								'Tanggal' => htmlentities($_POST['TanggalKegiatan'])));
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
			echo 'Wajib Upload Bukti!';
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
			if ($Kode == '0') {
				$JumlahKredit = $_POST['Volume']*200; $Kredit = 200;
			} else {
				$JumlahKredit = $_POST['Volume']*150; $Kredit = 150;
			}
		}
		else if ($_POST['IdKegiatan'] == 'PND2') {
			$JumlahKredit = $_POST['Volume']*3; $Kredit = '3';
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
			} else {
				if ($Jabatan == 'Asisten Ahli') {
					$JumlahKredit = $_POST['Volume']*0.5;
					$Kredit = '0.5';
				} else {
					$JumlahKredit = $_POST['Volume'];
					$Kredit = '1';
				}
			}
		}
		else if ($_POST['IdKegiatan'] == 'PND4' || $_POST['IdKegiatan'] == 'PND5') {
			$JumlahKredit = $Kredit = '1';
		}
		else if ($_POST['IdKegiatan'] == 'PND6') {
			$Pisah = explode('/',$Kode);
			if ($Pisah[0] == '1') {
				if ($Pisah[1] == '1') {
					$JumlahKredit = $_POST['Volume']*2;
					$Kredit = '8';
				}
				else if ($Pisah[1] == '2') {
					$JumlahKredit = $_POST['Volume']*0.5;
					$Kredit = '3';
				}
				else if ($Pisah[1] == '3') {
					$JumlahKredit = $_POST['Volume']*0.125;
					$Kredit = '1';
				}
			}
			else {
				if ($Pisah[1] == '1') {
					$JumlahKredit = $_POST['Volume']*1.5;
					$Kredit = '6';
				}
				else if ($Pisah[1] == '2') {
					$JumlahKredit = round(($_POST['Volume']*2/6),2);
					$Kredit = '2';
				}
				else if ($Pisah[1] == '3') {
					$JumlahKredit = $_POST['Volume']*0.0625;
					$Kredit = '0.5';
				}
			}
		}
		else if ($_POST['IdKegiatan'] == 'PND7') {
			if ($Kode == '1') {
				$JumlahKredit = $_POST['Volume']/4;
				$Kredit = '1';
			}
			else {
				$JumlahKredit = $_POST['Volume']*0.0625;
				$Kredit = '0.5';
			}
		}
		else if ($_POST['IdKegiatan'] == 'PND8') {
			$JumlahKredit = $_POST['Volume'];
			$Kredit = '2';
		}
		else if ($_POST['IdKegiatan'] == 'PND9') {
			$JumlahKredit = $_POST['Volume']*2;
			$Kredit = '2';
		}
		else if ($_POST['IdKegiatan'] == 'PND10') {
			if ($Kode == '1') {
				$JumlahKredit = $_POST['Volume']*20;
				$Kredit = '20';
			}
			else {
				$JumlahKredit = $_POST['Volume']*5;
				$Kredit = '5';
			}
		}
		else if ($_POST['IdKegiatan'] == 'PND11') {
			$JumlahKredit = $_POST['Volume']*2.5;
			$Kredit = '5';
		}
		else if ($_POST['IdKegiatan'] == 'PND12') {
			$JumlahKredit = $Kode;
			$Kredit = $Kode;
		}
		else if ($_POST['IdKegiatan'] == 'PND13') {
			if ($Kode == '1') {
				$JumlahKredit = $_POST['Volume']*2;
				$Kredit = '2';
			}
			else {
				$JumlahKredit = $_POST['Volume'];
				$Kredit = '1';
			}
		}
		else if ($_POST['IdKegiatan'] == 'PND14') {
			if ($Kode == '1') {
				$JumlahKredit = $_POST['Volume']*5;
				$Kredit = '5';
			}
			else {
				$JumlahKredit = $_POST['Volume']*4;
				$Kredit = '4';
			}
		}
		else if ($_POST['IdKegiatan'] == 'PND15') {
			$JumlahKredit = $_POST['Volume']*$Kode;
			$Kredit = $Kode;
		}
		$Pdf = count($_FILES);
		if ($Pdf > 0) {
			if ($this->CekBukti($Pdf)){
				$Tipe = pathinfo($_FILES['file']['name'],PATHINFO_EXTENSION);
				$NamaPdf = date('Ymd',time()).substr(password_hash('Pendidikan', PASSWORD_DEFAULT),7,7);
				$NamaPdf = str_replace("/","F",$NamaPdf);
				$NamaPdf = str_replace(".","F",$NamaPdf);
				move_uploaded_file($_FILES['file']['tmp_name'], "Pendidikan/".$NamaPdf.'.'.$Tipe);
				if($_POST['Bukti'] != ''){
					unlink('Pendidikan/'.$_POST['Bukti']);
				}
				$this->db->where('No', $_POST['No']);
				$this->db->update('RealisasiPendidikan',
											array('Jenjang' => $_POST['Homebase'], 
														'Semester' => $_POST['Semester'], 
														'Tahun' => $_POST['Tahun'], 
														'SK' => htmlentities($_POST['SK']),
														'Kegiatan' => htmlentities($_POST['Kegiatan']),
														'TanggalKegiatan' => htmlentities($_POST['TanggalKegiatan']),
														'Volume' => $_POST['Volume'],
														'Kredit' => $Kredit,
														'JumlahKredit' => $JumlahKredit,
														'Bukti' => $NamaPdf.'.'.$Tipe));
				echo '1';
			}
			else {
				echo 'Bukti Hanya Boleh PDF!';
			}
		} 
		else {
			$this->db->where('No', $_POST['No']);
			$this->db->update('RealisasiPendidikan',
										array('Jenjang' => $_POST['Homebase'], 
													'Semester' => $_POST['Semester'], 
													'Tahun' => $_POST['Tahun'], 
													'SK' => htmlentities($_POST['SK']),
													'Kegiatan' => htmlentities($_POST['Kegiatan']),
													'TanggalKegiatan' => htmlentities($_POST['TanggalKegiatan']),
													'Volume' => $_POST['Volume'],
													'Kredit' => $Kredit,
													'JumlahKredit' => $JumlahKredit));
			echo '1';
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
		$Jenjang = $this->uri->segment('3');
		$Semester = $this->uri->segment('4');
		$Tahun = explode('-',$this->uri->segment('5'));
		if ($Jenjang != 'S1' && $Jenjang != 'S2') {
			if ($Semester != 'Ganjil' && $Semester != 'Genap') {
				$Data['Filter'] = $this->uri->segment('5').'|Ganjil|Genap|S1|S2';
			} else {
				$Data['Filter'] = $this->uri->segment('5').'|'.$Semester.'|S1|S2';
			}
		} else {
			if ($Semester != 'Ganjil' && $Semester != 'Genap') {
				$Data['Filter'] = $this->uri->segment('5').'|Ganjil|Genap|'.$Jenjang;
			} else {
				$Data['Filter'] = $this->uri->segment('5').'|'.$Semester.'|'.$Jenjang;
			}
		}
		$Data['Pendidikan'] = $this->db->query("SELECT * FROM `RealisasiPendidikan` WHERE NIP = ".$this->session->userdata('NIP')." AND Jenjang LIKE "."'%".$Jenjang."%'"." AND Semester LIKE "."'%".$Semester."%'"." AND Tahun >= ".$Tahun[0]." AND Tahun <= ".$Tahun[1]." ORDER BY SUBSTR(IdKegiatan FROM 1 FOR 3), CAST(SUBSTR(IdKegiatan FROM 4) AS UNSIGNED), SUBSTR(IdKegiatan FROM 4), Kode ASC")->result_array();
		$this->load->view('ExcelPendidikan',$Data);
	}

	public function Lampiran(){
		$Jenjang = $this->uri->segment('3');
		$Semester = $this->uri->segment('4');
		$Tahun = explode('-',$this->uri->segment('5'));
		$DataPendidikan = $this->db->query("SELECT * FROM `RealisasiPendidikan` WHERE NIP = ".$this->session->userdata('NIP')." AND Jenjang LIKE "."'%".$Jenjang."%'"." AND Semester LIKE "."'%".$Semester."%'"." AND Tahun >= ".$Tahun[0]." AND Tahun <= ".$Tahun[1]." ORDER BY SUBSTR(IdKegiatan FROM 1 FOR 3), CAST(SUBSTR(IdKegiatan FROM 4) AS UNSIGNED), SUBSTR(IdKegiatan FROM 4), Kode ASC")->result_array();
		echo json_encode($DataPendidikan);
	}
}