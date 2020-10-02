<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penelitian extends CI_Controller {

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

	public function EditRencana(){		
		$this->db->where('No', $_POST['No']);
		$this->db->update('RencanaPenelitian', 
								array('Jenjang' => $_POST['Jenjang'],
											'Semester' => $_POST['Semester'],
											'Tahun' => $_POST['Tahun'],
											'KodeRencana' => $_POST['Kode'],
											'TotalKredit' => $_POST['Total']));
		echo '1';
	}

	public function KreditPenulis($ke,$dari,$kredit,$volume){
		if ($ke == 1 && $dari == 1) {
			return $volume*$kredit;
		} else if ($ke == 1) {
			return $volume*($kredit*0.6/($dari-1));
		} else {
			return $volume*($kredit*0.4/($dari-1));
		}
	}

	public function InputRealisasi(){
		$NIP = $this->session->userdata('NIP');
		$Jabatan = $this->session->userdata('Jabatan');
		$Volume = $_POST['Volume'];
		$KreditBkd = '';
		if ($_POST['IdKegiatan'] == 'PNL1') {
			if ($_POST['Kode'] == '1') {
				$JumlahKredit = $this->KreditPenulis($_POST['Ke'],$_POST['Dari'],40,$_POST['Volume']);
				$Kredit = 40;
			}
			else if ($_POST['Kode'] == '2') {
				$JumlahKredit = $this->KreditPenulis($_POST['Ke'],$_POST['Dari'],20,$_POST['Volume']);
				$Kredit = 20;
			}
			else if ($_POST['Kode'] == '3') {
				$JumlahKredit = $this->KreditPenulis($_POST['Ke'],$_POST['Dari'],15,$_POST['Volume']);
				$Kredit = 15;
			}
			else if ($_POST['Kode'] == '4') {
				$JumlahKredit = $this->KreditPenulis($_POST['Ke'],$_POST['Dari'],10,$_POST['Volume']);
				$Kredit = 10;
			}
			else if ($_POST['Kode'] == '5') {
				$JumlahKredit = $this->KreditPenulis($_POST['Ke'],$_POST['Dari'],40,$_POST['Volume']);
				$Kredit = 40;
			}
			else if ($_POST['Kode'] == '6') {
				$JumlahKredit = $this->KreditPenulis($_POST['Ke'],$_POST['Dari'],30,$_POST['Volume']);
				$Kredit = 30;
			}
			else if ($_POST['Kode'] == '7') {
				$JumlahKredit = $this->KreditPenulis($_POST['Ke'],$_POST['Dari'],20,$_POST['Volume']);
				$Kredit = 20;
			}
			else if ($_POST['Kode'] == '8') {
				$JumlahKredit = $this->KreditPenulis($_POST['Ke'],$_POST['Dari'],25,$_POST['Volume']);
				$Kredit = 25;
			}
			else if ($_POST['Kode'] == '9') {
				$JumlahKredit = $this->KreditPenulis($_POST['Ke'],$_POST['Dari'],20,$_POST['Volume']);
				$Kredit = 20;
			}
			else if ($_POST['Kode'] == '10') {
				$JumlahKredit = $this->KreditPenulis($_POST['Ke'],$_POST['Dari'],15,$_POST['Volume']);
				$Kredit = 15;
			}
			else if ($_POST['Kode'] == '11') {
				$JumlahKredit = $this->KreditPenulis($_POST['Ke'],$_POST['Dari'],10,$_POST['Volume']);
				$Kredit = 10;
			}
			else if ($_POST['Kode'] == '12') {
				$JumlahKredit = $this->KreditPenulis($_POST['Ke'],$_POST['Dari'],10,$_POST['Volume']);
				$Kredit = 10;
			}
		}
		else if ($_POST['IdKegiatan'] == 'PNL2') {
			if ($_POST['Kode'] == '1') {
				$JumlahKredit = $this->KreditPenulis($_POST['Ke'],$_POST['Dari'],30,$_POST['Volume']);
				$Kredit = 30;
			}
			else if ($_POST['Kode'] == '2') {
				$JumlahKredit = $this->KreditPenulis($_POST['Ke'],$_POST['Dari'],25,$_POST['Volume']);
				$Kredit = 25;
			}
			else if ($_POST['Kode'] == '3') {
				$JumlahKredit = $this->KreditPenulis($_POST['Ke'],$_POST['Dari'],15,$_POST['Volume']);
				$Kredit = 15;
			}
			else if ($_POST['Kode'] == '4') {
				$JumlahKredit = $this->KreditPenulis($_POST['Ke'],$_POST['Dari'],10,$_POST['Volume']);
				$Kredit = 10;
			}
			else if ($_POST['Kode'] == '5') {
				$JumlahKredit = $this->KreditPenulis($_POST['Ke'],$_POST['Dari'],10,$_POST['Volume']);
				$Kredit = 10;
			}
			else if ($_POST['Kode'] == '6') {
				$JumlahKredit = $this->KreditPenulis($_POST['Ke'],$_POST['Dari'],5,$_POST['Volume']);
				$Kredit = 5;
			}
			else if ($_POST['Kode'] == '7') {
				$JumlahKredit = $this->KreditPenulis($_POST['Ke'],$_POST['Dari'],5,$_POST['Volume']);
				$Kredit = 5;
			}
			else if ($_POST['Kode'] == '8') {
				$JumlahKredit = $this->KreditPenulis($_POST['Ke'],$_POST['Dari'],3,$_POST['Volume']);
				$Kredit = 3;
			}
			else if ($_POST['Kode'] == '9') {
				$JumlahKredit = $this->KreditPenulis($_POST['Ke'],$_POST['Dari'],10,$_POST['Volume']);
				$Kredit = 10;
			}
			else if ($_POST['Kode'] == '10') {
				$JumlahKredit = $this->KreditPenulis($_POST['Ke'],$_POST['Dari'],5,$_POST['Volume']);
				$Kredit = 5;
			}
			else {
				$JumlahKredit = $this->KreditPenulis($_POST['Ke'],$_POST['Dari'],1,$_POST['Volume']);
				$Kredit = 1;
			}
		}
		else if ($_POST['IdKegiatan'] == 'PNL3') {
			$JumlahKredit = $this->KreditPenulis($_POST['Ke'],$_POST['Dari'],2,$_POST['Volume']);
			$Kredit = 2;
		}
		else if ($_POST['IdKegiatan'] == 'PNL4') {
			$JumlahKredit = $this->KreditPenulis($_POST['Ke'],$_POST['Dari'],15,$_POST['Volume']);
			if ($_POST['Ke'] == 1 && $_POST['Dari'] == 1) {
				$KreditBkd = '2';
			} else if ($_POST['Ke'] == 1) {
				$KreditBkd = 2*0.6/($_POST['Dari']-1);
			} else {
				$KreditBkd = 2*0.4/($_POST['Dari']-1);
			}
			$Kredit = 15;
		}
		else if ($_POST['IdKegiatan'] == 'PNL5') {
			$JumlahKredit = $this->KreditPenulis($_POST['Ke'],$_POST['Dari'],10,$_POST['Volume']);
			if ($_POST['Ke'] == 1 && $_POST['Dari'] == 1) {
				$KreditBkd = $_POST['Volume']*2;
			} else if ($_POST['Ke'] == 1) {
				$KreditBkd = $_POST['Volume'];
			} else {
				$KreditBkd = $_POST['Volume'];
			}
			$Kredit = 10;
		}
		else if ($_POST['IdKegiatan'] == 'PNL6') {
			if ($_POST['Kode'] == '1') {
				$JumlahKredit = $this->KreditPenulis($_POST['Ke'],$_POST['Dari'],60,$_POST['Volume']);
				$Kredit = 60;
			}
			else if ($_POST['Kode'] == '2') {
				$JumlahKredit = $this->KreditPenulis($_POST['Ke'],$_POST['Dari'],50,$_POST['Volume']);
				$Kredit = 50;
			}
			else if ($_POST['Kode'] == '3') {
				$JumlahKredit = $this->KreditPenulis($_POST['Ke'],$_POST['Dari'],40,$_POST['Volume']);
				$Kredit = 40;
			}
			else if ($_POST['Kode'] == '4') {
				$JumlahKredit = $this->KreditPenulis($_POST['Ke'],$_POST['Dari'],30,$_POST['Volume']);
				$Kredit = 30;
			}
			else if ($_POST['Kode'] == '5') {
				$JumlahKredit = $this->KreditPenulis($_POST['Ke'],$_POST['Dari'],20,$_POST['Volume']);
				$Kredit = 20;
			}
			else if ($_POST['Kode'] == '6') {
				$JumlahKredit = $this->KreditPenulis($_POST['Ke'],$_POST['Dari'],15,$_POST['Volume']);
				$Kredit = 15;
			}
		}
		else if ($_POST['IdKegiatan'] == 'PNL7') {
			if ($_POST['Kode'] == '1') {
				$JumlahKredit = $this->KreditPenulis($_POST['Ke'],$_POST['Dari'],20,$_POST['Volume']);
				$Kredit = 20;
			}
			else if ($_POST['Kode'] == '2') {
				$JumlahKredit = $this->KreditPenulis($_POST['Ke'],$_POST['Dari'],15,$_POST['Volume']);
				$Kredit = 15;
			}
			else if ($_POST['Kode'] == '3') {
				$JumlahKredit = $this->KreditPenulis($_POST['Ke'],$_POST['Dari'],10,$_POST['Volume']);
				$Kredit = 10;
			}
		}
		else if ($_POST['IdKegiatan'] == 'PNL8') {
			if ($_POST['Kode'] == '1') {
				$JumlahKredit = $this->KreditPenulis($_POST['Ke'],$_POST['Dari'],20,$_POST['Volume']);
				$Kredit = 20;
			}
			else if ($_POST['Kode'] == '2') {
				$JumlahKredit = $this->KreditPenulis($_POST['Ke'],$_POST['Dari'],15,$_POST['Volume']);
				$Kredit = 15;
			}
			else if ($_POST['Kode'] == '3') {
				$JumlahKredit = $this->KreditPenulis($_POST['Ke'],$_POST['Dari'],10,$_POST['Volume']);
				$Kredit = 10;
			}
			else if ($_POST['Kode'] == '4') {
				$JumlahKredit = $this->KreditPenulis($_POST['Ke'],$_POST['Dari'],10,$_POST['Volume']);
				$Kredit = 10;
			}
			else if ($_POST['Kode'] == '5') {
				$JumlahKredit = $this->KreditPenulis($_POST['Ke'],$_POST['Dari'],6,$_POST['Volume']);
				$Kredit = 6;
			}
			else if ($_POST['Kode'] == '6') {
				$JumlahKredit = $this->KreditPenulis($_POST['Ke'],$_POST['Dari'],3,$_POST['Volume']);
				$Kredit = 3;
			}
			else if ($_POST['Kode'] == '7') {
				$JumlahKredit = $this->KreditPenulis($_POST['Ke'],$_POST['Dari'],6,$_POST['Volume']);
				$Kredit = 6;
			}
			else if ($_POST['Kode'] == '8') {
				$JumlahKredit = $this->KreditPenulis($_POST['Ke'],$_POST['Dari'],4,$_POST['Volume']);
				$Kredit = 4;
			}
			else if ($_POST['Kode'] == '9') {
				$JumlahKredit = $this->KreditPenulis($_POST['Ke'],$_POST['Dari'],2,$_POST['Volume']);
				$Kredit = 2;
			}
			else if ($_POST['Kode'] == '10') {
				$JumlahKredit = $this->KreditPenulis($_POST['Ke'],$_POST['Dari'],20,$_POST['Volume']);
				$Kredit = 20;
			}
			else if ($_POST['Kode'] == '11') {
				$JumlahKredit = $this->KreditPenulis($_POST['Ke'],$_POST['Dari'],15,$_POST['Volume']);
				$Kredit = 15;
			}
			else if ($_POST['Kode'] == '12') {
				$JumlahKredit = $this->KreditPenulis($_POST['Ke'],$_POST['Dari'],10,$_POST['Volume']);
				$Kredit = 10;
			}
			else if ($_POST['Kode'] == '13') {
				$JumlahKredit = $this->KreditPenulis($_POST['Ke'],$_POST['Dari'],20,$_POST['Volume']);
				$Kredit = 20;
			}
			else if ($_POST['Kode'] == '14') {
				$JumlahKredit = $this->KreditPenulis($_POST['Ke'],$_POST['Dari'],15,$_POST['Volume']);
				$Kredit = 15;
			}
			else if ($_POST['Kode'] == '15') {
				$JumlahKredit = $this->KreditPenulis($_POST['Ke'],$_POST['Dari'],10,$_POST['Volume']);
				$Kredit = 10;
			}
			else if ($_POST['Kode'] == '16') {
				$JumlahKredit = $this->KreditPenulis($_POST['Ke'],$_POST['Dari'],20,$_POST['Volume']);
				$Kredit = 20;
			}
			else if ($_POST['Kode'] == '17') {
				$JumlahKredit = $this->KreditPenulis($_POST['Ke'],$_POST['Dari'],15,$_POST['Volume']);
				$Kredit = 15;
			}
			else if ($_POST['Kode'] == '18') {
				$JumlahKredit = $this->KreditPenulis($_POST['Ke'],$_POST['Dari'],10,$_POST['Volume']);
				$Kredit = 10;
			}
		}
		else if ($_POST['IdKegiatan'] == 'PNL9' || $_POST['IdKegiatan'] == 'PNL10'|| $_POST['IdKegiatan'] == 'PNL11' || $_POST['IdKegiatan'] == 'PNL12' || $_POST['IdKegiatan'] == 'PNL15' || $_POST['IdKegiatan'] == 'PNL16' || $_POST['IdKegiatan'] == 'PNL17') {
			$JumlahKredit = $Kredit = '';
			$KreditBkd = $this->KreditPenulis($_POST['Ke'],$_POST['Dari'],$_POST['KreditBKD'],$_POST['Volume']);
		}
		else if ($_POST['IdKegiatan'] == 'PNL13') {
			$JumlahKredit = $Kredit = '';
			$KreditBkd = 1;
		}
		else if ($_POST['IdKegiatan'] == 'PNL14') {
			$JumlahKredit = $Kredit = '';
			$KreditBkd = $this->KreditPenulis($_POST['Ke'],$_POST['Dari'],$_POST['KreditBKD'],1);
		}
		else if ($_POST['IdKegiatan'] == 'PNL18') {
			$JumlahKredit = $Kredit = '';
			$KreditBkd = 6;
		}
		else if ($_POST['IdKegiatan'] == 'PNL19') {
			$JumlahKredit = $Kredit = '';
			$KreditBkd = 4;
		}
		else if ($_POST['IdKegiatan'] == 'PNL20') {
			$JumlahKredit = $Kredit = '';
			$KreditBkd = 3;
		}
		else if ($_POST['IdKegiatan'] == 'PNL21') {
			$JumlahKredit = $Kredit = '';
			$KreditBkd = 5;
		}
		else if ($_POST['IdKegiatan'] == 'PNL22') {
			$JumlahKredit = $Kredit = '';
			$KreditBkd = 3;
		}
		$Pdf = count($_FILES);
		if ($Pdf > 0) {
			if ($this->CekBukti($Pdf)){
				$Tipe = pathinfo($_FILES['file']['name'],PATHINFO_EXTENSION);
				$NamaPdf = date('Ymd',time()).substr(password_hash('Penelitian', PASSWORD_DEFAULT),7,7);
				$NamaPdf = str_replace("/","F",$NamaPdf);
				$NamaPdf = str_replace(".","F",$NamaPdf);
				move_uploaded_file($_FILES['file']['tmp_name'], "Penelitian/".$NamaPdf.'.'.$Tipe);
				$this->db->insert('RealisasiPenelitian',
										array('NIP' => $NIP, 
													'Jabatan' => $Jabatan, 
													'Jenjang' => $_POST['Homebase'], 
													'Semester' => $_POST['Semester'], 
													'Tahun' => $_POST['Tahun'], 
													'IdKegiatan' => $_POST['IdKegiatan'],
													'Kode' => $_POST['Kode'].'/'.$_POST['Biaya'],
													'SK' => htmlentities($_POST['SK']),
													'Kegiatan' => htmlentities($_POST['Kegiatan']),
													'TanggalKegiatan' => htmlentities($_POST['TanggalKegiatan']),
													'Volume' => $Volume,
													'Kredit' => $Kredit,
													'JumlahKredit' => $JumlahKredit,
													'KreditBkd' => $KreditBkd,
													'Bukti' => $NamaPdf.'.'.$Tipe));
				if ($this->db->affected_rows()){
					$this->session->set_userdata('IdKegiatanPenelitian', $_POST['IdKegiatan']);
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

	public function EditRealisasi(){
		$Pdf = count($_FILES);
		if ($Pdf > 0) {
			if ($this->CekBukti($Pdf)){
				$Tipe = pathinfo($_FILES['file']['name'],PATHINFO_EXTENSION);
				$NamaPdf = date('Ymd',time()).substr(password_hash('Penelitian', PASSWORD_DEFAULT),7,7);
				$NamaPdf = str_replace("/","F",$NamaPdf);
				$NamaPdf = str_replace(".","F",$NamaPdf);
				move_uploaded_file($_FILES['file']['tmp_name'], "Penelitian/".$NamaPdf.'.'.$Tipe);
				if($_POST['Bukti'] != ''){
					unlink('Penelitian/'.$_POST['Bukti']);
				}
				$this->db->where('No', $_POST['No']);
				$this->db->update('RealisasiPenelitian',
										array('Jenjang' => $_POST['Homebase'], 
													'Semester' => $_POST['Semester'], 
													'Tahun' => $_POST['Tahun'], 
													'SK' => htmlentities($_POST['SK']),
													'Kegiatan' => htmlentities($_POST['Kegiatan']),
													'TanggalKegiatan' => htmlentities($_POST['TanggalKegiatan']),
													'Bukti' => $NamaPdf.'.'.$Tipe));
				echo '1';
			}
			else {
				echo 'Bukti Hanya Boleh PDF!';
			}
		} 
		else {
			$this->db->where('No', $_POST['No']);
			$this->db->update('RealisasiPenelitian',
									array('Jenjang' => $_POST['Homebase'], 
												'Semester' => $_POST['Semester'], 
												'Tahun' => $_POST['Tahun'], 
												'SK' => htmlentities($_POST['SK']),
												'Kegiatan' => htmlentities($_POST['Kegiatan']),
												'TanggalKegiatan' => htmlentities($_POST['TanggalKegiatan'])));
			echo '1';
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

	public function HapusRealisasi(){ 
		$this->db->delete('RealisasiPenelitian', array('No' => $_POST['No']));
		if($_POST['Bukti'] != ''){
			unlink('Penelitian/'.$_POST['Bukti']);
		}
		if ($this->db->affected_rows()){
			echo '1';
		} else {
			echo 'Gagal Menghapus';
		}
	}
}