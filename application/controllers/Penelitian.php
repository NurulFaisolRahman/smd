<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penelitian extends CI_Controller {

	function __construct(){
		parent::__construct();
		if(!$this->session->userdata('Login')){
			redirect(base_url());
		}
	}

	public function InputRencana(){
		$NIP = $this->session->userdata('NIP');
		$Jabatan = $this->session->userdata('Jabatan');
		if($this->db->get_where('RencanaPenelitian', array('NIP' => $NIP,'Jenjang' => $_POST['Jenjang'],'Semester' => $_POST['Semester'],'Tahun' => $_POST['Tahun']))->num_rows() === 0){
			$this->db->insert('RencanaPenelitian',
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
			echo 'Data Rencana Penelitian Homebase '.$_POST['Jenjang'].' Semester '.$_POST['Semester'].' Tahun '.$_POST['Tahun'].' Telah Ada';
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
    if ($this->db->affected_rows()){
      echo '1';
    } else {
      echo 'Gagal Menyimpnan';
    }
	}

	public function HapusRencana(){
		$this->db->delete('RencanaPenelitian', array('No' => $_POST['No']));
		if ($this->db->affected_rows()){
			echo '1';
		} else {
			echo 'Gagal Menghapus';
		}
	}

	public function KreditPenulis($ke,$dari,$kredit){
		if ($ke == 1 && $dari == 1) {
			return $kredit;
		} else if ($ke == 1) {
			return $_POST['Volume']*($kredit*0.6/($dari-1));
		} else {
			return $_POST['Volume']*($kredit*0.4/($dari-1));
		}
	}

	public function InputRealisasi(){
		$NIP = $this->session->userdata('NIP');
		$Jabatan = $this->session->userdata('Jabatan');
		if ($_POST['IdKegiatan'] == 'PNL1') {
			if ($_POST['Kode'] == '1') {
				$JumlahKredit = $this->KreditPenulis($_POST['Ke'],$_POST['Dari'],40);
				$Kredit = 40;
			}
			else if ($_POST['Kode'] == '2') {
				$JumlahKredit = $this->KreditPenulis($_POST['Ke'],$_POST['Dari'],20);
				$Kredit = 20;
			}
			else if ($_POST['Kode'] == '3') {
				$JumlahKredit = $this->KreditPenulis($_POST['Ke'],$_POST['Dari'],15);
				$Kredit = 15;
			}
			else if ($_POST['Kode'] == '4') {
				$JumlahKredit = $this->KreditPenulis($_POST['Ke'],$_POST['Dari'],10);
				$Kredit = 10;
			}
			else if ($_POST['Kode'] == '5') {
				$JumlahKredit = $this->KreditPenulis($_POST['Ke'],$_POST['Dari'],40);
				$Kredit = 40;
			}
			else if ($_POST['Kode'] == '6') {
				$JumlahKredit = $this->KreditPenulis($_POST['Ke'],$_POST['Dari'],30);
				$Kredit = 30;
			}
			else if ($_POST['Kode'] == '7') {
				$JumlahKredit = $this->KreditPenulis($_POST['Ke'],$_POST['Dari'],20);
				$Kredit = 20;
			}
			else if ($_POST['Kode'] == '8') {
				$JumlahKredit = $this->KreditPenulis($_POST['Ke'],$_POST['Dari'],25);
				$Kredit = 25;
			}
			else if ($_POST['Kode'] == '9') {
				$JumlahKredit = $this->KreditPenulis($_POST['Ke'],$_POST['Dari'],20);
				$Kredit = 20;
			}
			else if ($_POST['Kode'] == '10') {
				$JumlahKredit = $this->KreditPenulis($_POST['Ke'],$_POST['Dari'],15);
				$Kredit = 15;
			}
			else if ($_POST['Kode'] == '11') {
				$JumlahKredit = $this->KreditPenulis($_POST['Ke'],$_POST['Dari'],10);
				$Kredit = 10;
			}
			else if ($_POST['Kode'] == '12') {
				$JumlahKredit = $this->KreditPenulis($_POST['Ke'],$_POST['Dari'],10);
				$Kredit = 10;
			}
		}
		else if ($_POST['IdKegiatan'] == 'PNL2') {
			if ($_POST['Kode'] == '1') {
				$JumlahKredit = $this->KreditPenulis($_POST['Ke'],$_POST['Dari'],30);
				$Kredit = 30;
			}
			else if ($_POST['Kode'] == '2') {
				$JumlahKredit = $this->KreditPenulis($_POST['Ke'],$_POST['Dari'],25);
				$Kredit = 25;
			}
			else if ($_POST['Kode'] == '3') {
				$JumlahKredit = $this->KreditPenulis($_POST['Ke'],$_POST['Dari'],15);
				$Kredit = 15;
			}
			else if ($_POST['Kode'] == '4') {
				$JumlahKredit = $this->KreditPenulis($_POST['Ke'],$_POST['Dari'],10);
				$Kredit = 10;
			}
			else if ($_POST['Kode'] == '5') {
				$JumlahKredit = $this->KreditPenulis($_POST['Ke'],$_POST['Dari'],10);
				$Kredit = 10;
			}
			else if ($_POST['Kode'] == '6') {
				$JumlahKredit = $this->KreditPenulis($_POST['Ke'],$_POST['Dari'],5);
				$Kredit = 5;
			}
			else if ($_POST['Kode'] == '7') {
				$JumlahKredit = $this->KreditPenulis($_POST['Ke'],$_POST['Dari'],5);
				$Kredit = 5;
			}
			else if ($_POST['Kode'] == '8') {
				$JumlahKredit = $this->KreditPenulis($_POST['Ke'],$_POST['Dari'],3);
				$Kredit = 3;
			}
			else if ($_POST['Kode'] == '9') {
				$JumlahKredit = $this->KreditPenulis($_POST['Ke'],$_POST['Dari'],10);
				$Kredit = 10;
			}
			else if ($_POST['Kode'] == '10') {
				$JumlahKredit = $this->KreditPenulis($_POST['Ke'],$_POST['Dari'],5);
				$Kredit = 5;
			}
			else if ($_POST['Kode'] == '11') {
				$JumlahKredit = $this->KreditPenulis($_POST['Ke'],$_POST['Dari'],1);
				$Kredit = 1;
			}
		}
		else if ($_POST['IdKegiatan'] == 'PNL3') {
			$JumlahKredit = $this->KreditPenulis($_POST['Ke'],$_POST['Dari'],2);
			$Kredit = 2;
		}
		else if ($_POST['IdKegiatan'] == 'PNL4') {
			$JumlahKredit = $this->KreditPenulis($_POST['Ke'],$_POST['Dari'],15);
			$Kredit = 15;
		}
		else if ($_POST['IdKegiatan'] == 'PNL5') {
			$JumlahKredit = $this->KreditPenulis($_POST['Ke'],$_POST['Dari'],10);
			$Kredit = 10;
		}
		else if ($_POST['IdKegiatan'] == 'PNL6') {
			if ($_POST['Kode'] == '1') {
				$JumlahKredit = $this->KreditPenulis($_POST['Ke'],$_POST['Dari'],60);
				$Kredit = 60;
			}
			else if ($_POST['Kode'] == '2') {
				$JumlahKredit = $this->KreditPenulis($_POST['Ke'],$_POST['Dari'],50);
				$Kredit = 50;
			}
			else if ($_POST['Kode'] == '3') {
				$JumlahKredit = $this->KreditPenulis($_POST['Ke'],$_POST['Dari'],40);
				$Kredit = 40;
			}
			else if ($_POST['Kode'] == '4') {
				$JumlahKredit = $this->KreditPenulis($_POST['Ke'],$_POST['Dari'],30);
				$Kredit = 30;
			}
			else if ($_POST['Kode'] == '5') {
				$JumlahKredit = $this->KreditPenulis($_POST['Ke'],$_POST['Dari'],20);
				$Kredit = 20;
			}
			else if ($_POST['Kode'] == '6') {
				$JumlahKredit = $this->KreditPenulis($_POST['Ke'],$_POST['Dari'],15);
				$Kredit = 15;
			}
		}
		else if ($_POST['IdKegiatan'] == 'PNL7') {
			if ($_POST['Kode'] == '1') {
				$JumlahKredit = $this->KreditPenulis($_POST['Ke'],$_POST['Dari'],20);
				$Kredit = 20;
			}
			else if ($_POST['Kode'] == '2') {
				$JumlahKredit = $this->KreditPenulis($_POST['Ke'],$_POST['Dari'],15);
				$Kredit = 15;
			}
			else if ($_POST['Kode'] == '3') {
				$JumlahKredit = $this->KreditPenulis($_POST['Ke'],$_POST['Dari'],10);
				$Kredit = 10;
			}
		}
		else if ($_POST['IdKegiatan'] == 'PNL8') {
			if ($_POST['Kode'] == '1') {
				$JumlahKredit = 20;
				$Kredit = 20;
			}
			else if ($_POST['Kode'] == '2') {
				$JumlahKredit = 15;
				$Kredit = 15;
			}
			else if ($_POST['Kode'] == '3') {
				$JumlahKredit = 10;
				$Kredit = 10;
			}
			else if ($_POST['Kode'] == '4') {
				$JumlahKredit = 10;
				$Kredit = 10;
			}
			else if ($_POST['Kode'] == '5') {
				$JumlahKredit = 6;
				$Kredit = 6;
			}
			else if ($_POST['Kode'] == '6') {
				$JumlahKredit = 3;
				$Kredit = 3;
			}
			else if ($_POST['Kode'] == '7') {
				$JumlahKredit = 6;
				$Kredit = 6;
			}
			else if ($_POST['Kode'] == '8') {
				$JumlahKredit = 4;
				$Kredit = 4;
			}
			else if ($_POST['Kode'] == '9') {
				$JumlahKredit = 2;
				$Kredit = 2;
			}
			else if ($_POST['Kode'] == '10') {
				$JumlahKredit = 20;
				$Kredit = 20;
			}
			else if ($_POST['Kode'] == '11') {
				$JumlahKredit = 15;
				$Kredit = 15;
			}
			else if ($_POST['Kode'] == '12') {
				$JumlahKredit = 10;
				$Kredit = 10;
			}
			else if ($_POST['Kode'] == '13') {
				$JumlahKredit = 20;
				$Kredit = 20;
			}
			else if ($_POST['Kode'] == '14') {
				$JumlahKredit = 15;
				$Kredit = 15;
			}
			else if ($_POST['Kode'] == '15') {
				$JumlahKredit = 10;
				$Kredit = 10;
			}
			else if ($_POST['Kode'] == '16') {
				$JumlahKredit = 20;
				$Kredit = 20;
			}
			else if ($_POST['Kode'] == '17') {
				$JumlahKredit = 15;
				$Kredit = 15;
			}
			else if ($_POST['Kode'] == '18') {
				$JumlahKredit = 10;
				$Kredit = 10;
			}
		}
		$Pdf = count($_FILES);
		if ($Pdf > 0) {
			if ($this->CekBukti($Pdf)){
				$Tipe = pathinfo($_FILES['file']['name'],PATHINFO_EXTENSION);
				$NamaPdf = date('Ymd',time()).substr(password_hash('Pendidikan', PASSWORD_DEFAULT),7,7).'.'.$Tipe;
				str_replace("/","F",$NamaPdf);
				move_uploaded_file($_FILES['file']['tmp_name'], "Penelitian/".$NamaPdf);
				$this->db->insert('RealisasiPenelitian',
										array('NIP' => $NIP, 
													'Jabatan' => $Jabatan, 
													'Jenjang' => $_POST['Homebase'], 
													'Semester' => $_POST['Semester'], 
													'Tahun' => $_POST['Tahun'], 
													'IdKegiatan' => $_POST['IdKegiatan'],
													'Kode' => $_POST['Kode'],
													'Penulis' => $_POST['Penulis'],
													'Kegiatan' => htmlentities($_POST['Kegiatan']),
													'TanggalKegiatan' => htmlentities($_POST['TanggalKegiatan']),
													'Volume' => $_POST['Volume'],
													'Kredit' => $Kredit,
													'JumlahKredit' => $JumlahKredit,
													'Bukti' => $NamaPdf));
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
		if ($_POST['IdKegiatan'] == 'PNL1') {
			if ($_POST['Kode'] == '1') {
				$JumlahKredit = $this->KreditPenulis($_POST['EditKe'],$_POST['EditDari'],40);
				$Kredit = 40;
			}
			else if ($_POST['Kode'] == '2') {
				$JumlahKredit = $this->KreditPenulis($_POST['EditKe'],$_POST['EditDari'],20);
				$Kredit = 20;
			}
			else if ($_POST['Kode'] == '3') {
				$JumlahKredit = $this->KreditPenulis($_POST['EditKe'],$_POST['EditDari'],15);
				$Kredit = 15;
			}
			else if ($_POST['Kode'] == '4') {
				$JumlahKredit = $this->KreditPenulis($_POST['EditKe'],$_POST['EditDari'],10);
				$Kredit = 10;
			}
			else if ($_POST['Kode'] == '5') {
				$JumlahKredit = $this->KreditPenulis($_POST['EditKe'],$_POST['EditDari'],40);
				$Kredit = 40;
			}
			else if ($_POST['Kode'] == '6') {
				$JumlahKredit = $this->KreditPenulis($_POST['EditKe'],$_POST['EditDari'],30);
				$Kredit = 30;
			}
			else if ($_POST['Kode'] == '7') {
				$JumlahKredit = $this->KreditPenulis($_POST['EditKe'],$_POST['EditDari'],20);
				$Kredit = 20;
			}
			else if ($_POST['Kode'] == '8') {
				$JumlahKredit = $this->KreditPenulis($_POST['EditKe'],$_POST['EditDari'],25);
				$Kredit = 25;
			}
			else if ($_POST['Kode'] == '9') {
				$JumlahKredit = $this->KreditPenulis($_POST['Ke'],$_POST['Dari'],20);
				$Kredit = 20;
			}
			else if ($_POST['Kode'] == '10') {
				$JumlahKredit = $this->KreditPenulis($_POST['Ke'],$_POST['Dari'],15);
				$Kredit = 15;
			}
			else if ($_POST['Kode'] == '11') {
				$JumlahKredit = $this->KreditPenulis($_POST['Ke'],$_POST['Dari'],10);
				$Kredit = 10;
			}
			else if ($_POST['Kode'] == '12') {
				$JumlahKredit = $this->KreditPenulis($_POST['Ke'],$_POST['Dari'],10);
				$Kredit = 10;
			}
		}
		else if ($_POST['IdKegiatan'] == 'PNL2') {
			if ($_POST['Kode'] == '1') {
				$JumlahKredit = $this->KreditPenulis($_POST['EditKe'],$_POST['EditDari'],30);
				$Kredit = 30;
			}
			else if ($_POST['Kode'] == '2') {
				$JumlahKredit = $this->KreditPenulis($_POST['EditKe'],$_POST['EditDari'],25);
				$Kredit = 25;
			}
			else if ($_POST['Kode'] == '3') {
				$JumlahKredit = $this->KreditPenulis($_POST['EditKe'],$_POST['EditDari'],15);
				$Kredit = 15;
			}
			else if ($_POST['Kode'] == '4') {
				$JumlahKredit = $this->KreditPenulis($_POST['EditKe'],$_POST['EditDari'],10);
				$Kredit = 10;
			}
			else if ($_POST['Kode'] == '5') {
				$JumlahKredit = $this->KreditPenulis($_POST['EditKe'],$_POST['EditDari'],10);
				$Kredit = 10;
			}
			else if ($_POST['Kode'] == '6') {
				$JumlahKredit = $this->KreditPenulis($_POST['EditKe'],$_POST['EditDari'],5);
				$Kredit = 5;
			}
			else if ($_POST['Kode'] == '7') {
				$JumlahKredit = $this->KreditPenulis($_POST['EditKe'],$_POST['EditDari'],5);
				$Kredit = 5;
			}
			else if ($_POST['Kode'] == '8') {
				$JumlahKredit = $this->KreditPenulis($_POST['EditKe'],$_POST['EditDari'],3);
				$Kredit = 3;
			}
			else if ($_POST['Kode'] == '9') {
				$JumlahKredit = $this->KreditPenulis($_POST['EditKe'],$_POST['EditDari'],10);
				$Kredit = 10;
			}
			else if ($_POST['Kode'] == '10') {
				$JumlahKredit = $this->KreditPenulis($_POST['EditKe'],$_POST['EditDari'],5);
				$Kredit = 5;
			}
			else if ($_POST['Kode'] == '11') {
				$JumlahKredit = $this->KreditPenulis($_POST['EditKe'],$_POST['EditDari'],1);
				$Kredit = 1;
			}
		}
		else if ($_POST['IdKegiatan'] == 'PNL3') {
			$JumlahKredit = $this->KreditPenulis($_POST['EditKe'],$_POST['EditDari'],2);
			$Kredit = 2;
		}
		else if ($_POST['IdKegiatan'] == 'PNL4') {
			$JumlahKredit = $this->KreditPenulis($_POST['EditKe'],$_POST['EditDari'],15);
			$Kredit = 15;
		}
		else if ($_POST['IdKegiatan'] == 'PNL5') {
			$JumlahKredit = $this->KreditPenulis($_POST['EditKe'],$_POST['EditDari'],10);
			$Kredit = 10;
		}
		else if ($_POST['IdKegiatan'] == 'PNL6') {
			if ($_POST['Kode'] == '1') {
				$JumlahKredit = $this->KreditPenulis($_POST['EditKe'],$_POST['EditDari'],60);
				$Kredit = 60;
			}
			else if ($_POST['Kode'] == '2') {
				$JumlahKredit = $this->KreditPenulis($_POST['EditKe'],$_POST['EditDari'],50);
				$Kredit = 50;
			}
			else if ($_POST['Kode'] == '3') {
				$JumlahKredit = $this->KreditPenulis($_POST['EditKe'],$_POST['EditDari'],40);
				$Kredit = 40;
			}
			else if ($_POST['Kode'] == '4') {
				$JumlahKredit = $this->KreditPenulis($_POST['EditKe'],$_POST['EditDari'],30);
				$Kredit = 30;
			}
			else if ($_POST['Kode'] == '5') {
				$JumlahKredit = $this->KreditPenulis($_POST['EditKe'],$_POST['EditDari'],20);
				$Kredit = 20;
			}
			else if ($_POST['Kode'] == '6') {
				$JumlahKredit = $this->KreditPenulis($_POST['EditKe'],$_POST['EditDari'],15);
				$Kredit = 15;
			}
		}
		else if ($_POST['IdKegiatan'] == 'PNL7') {
			if ($_POST['Kode'] == '1') {
				$JumlahKredit = $this->KreditPenulis($_POST['EditKe'],$_POST['EditDari'],20);
				$Kredit = 20;
			}
			else if ($_POST['Kode'] == '2') {
				$JumlahKredit = $this->KreditPenulis($_POST['EditKe'],$_POST['EditDari'],15);
				$Kredit = 15;
			}
			else if ($_POST['Kode'] == '3') {
				$JumlahKredit = $this->KreditPenulis($_POST['EditKe'],$_POST['EditDari'],10);
				$Kredit = 10;
			}
		}
		else if ($_POST['IdKegiatan'] == 'PNL8') {
			$JumlahKredit = $this->KreditPenulis($_POST['EditKe'],$_POST['EditDari'],7);
			$Kredit = 7;
		}
		$Pdf = count($_FILES);
		if ($Pdf > 0) {
			if ($this->CekBukti($Pdf)){
				$Tipe = pathinfo($_FILES['file']['name'],PATHINFO_EXTENSION);
				$NamaPdf = date('Ymd',time()).substr(password_hash('Pendidikan', PASSWORD_DEFAULT),7,7).'.'.$Tipe;
				str_replace("/","F",$NamaPdf);
				move_uploaded_file($_FILES['file']['tmp_name'], "Penelitian/".$NamaPdf);
				if($_POST['Bukti'] != ''){
					unlink('Penelitian/'.$_POST['Bukti']);
				}
				$this->db->where('No', $_POST['No']);
				$this->db->update('RealisasiPenelitian',
										array('Jenjang' => $_POST['Homebase'], 
													'Semester' => $_POST['Semester'], 
													'Tahun' => $_POST['Tahun'], 
													'IdKegiatan' => $_POST['IdKegiatan'],
													'Kode' => $_POST['Kode'],
													'Penulis' => $_POST['Penulis'],
													'Kegiatan' => htmlentities($_POST['Kegiatan']),
													'TanggalKegiatan' => htmlentities($_POST['TanggalKegiatan']),
													'Volume' => $_POST['Volume'],
													'Kredit' => $Kredit,
													'JumlahKredit' => $JumlahKredit,
													'Bukti' => $NamaPdf));
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
													'IdKegiatan' => $_POST['IdKegiatan'],
													'Kode' => $_POST['Kode'],
													'Penulis' => $_POST['Penulis'],
													'Kegiatan' => htmlentities($_POST['Kegiatan']),
													'TanggalKegiatan' => htmlentities($_POST['TanggalKegiatan']),
													'Volume' => $_POST['Volume'],
													'Kredit' => $Kredit,
													'JumlahKredit' => $JumlahKredit));
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

	public function Download(){
		$Data['Profil'] = $this->db->get_where('Dosen', array('NIP' => $this->session->userdata('NIP')))->row_array();
		$Jenjang = $this->uri->segment('3');
		$Semester = $this->uri->segment('4');
		$Tahun = explode('-',$this->uri->segment('5'));
		$Data['Penelitian'] = $this->db->query("SELECT * FROM `RealisasiPenelitian` WHERE NIP = ".$this->session->userdata('NIP')." AND Jenjang LIKE "."'%".$Jenjang."%'"." AND Semester LIKE "."'%".$Semester."%'"." AND Tahun >= ".$Tahun[0]." AND Tahun <= ".$Tahun[1]." ORDER BY SUBSTR(IdKegiatan FROM 1 FOR 3), CAST(SUBSTR(IdKegiatan FROM 4) AS UNSIGNED), SUBSTR(IdKegiatan FROM 4), Kode ASC")->result_array();
		$this->load->view('ExcelPenelitian',$Data);
	}

	public function Lampiran(){
		$Jenjang = $this->uri->segment('3');
		$Semester = $this->uri->segment('4');
		$Tahun = explode('-',$this->uri->segment('5'));
		$DataPenelitian = $this->db->query("SELECT * FROM `RealisasiPenelitian` WHERE NIP = ".$this->session->userdata('NIP')." AND Jenjang LIKE "."'%".$Jenjang."%'"." AND Semester LIKE "."'%".$Semester."%'"." AND Tahun >= ".$Tahun[0]." AND Tahun <= ".$Tahun[1]." ORDER BY SUBSTR(IdKegiatan FROM 1 FOR 3), CAST(SUBSTR(IdKegiatan FROM 4) AS UNSIGNED), SUBSTR(IdKegiatan FROM 4), Kode ASC")->result_array();
		echo json_encode($DataPenelitian);
	}
}