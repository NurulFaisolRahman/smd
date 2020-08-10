<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penunjang extends CI_Controller {

	function __construct(){
		parent::__construct();
		if(!$this->session->userdata('Login')){
			redirect(base_url());
		}
	}

	public function InputRencana(){
		$NIP = $this->session->userdata('NIP');
		$Jabatan = $this->session->userdata('Jabatan');
		if($this->db->get_where('RencanaPenunjang', array('NIP' => $NIP,'Jenjang' => $_POST['Jenjang'],'Semester' => $_POST['Semester'],'Tahun' => $_POST['Tahun']))->num_rows() === 0){
			$this->db->insert('RencanaPenunjang',
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
			echo 'Data Rencana Penunjang Homebase '.$_POST['Jenjang'].' Semester '.$_POST['Semester'].' Tahun '.$_POST['Tahun'].' Telah Ada';
		}
  }

  public function EditRencana(){
		$this->db->where('No', $_POST['No']);
    $this->db->update('RencanaPenunjang', 
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
		$this->db->delete('RencanaPenunjang', array('No' => $_POST['No']));
		if ($this->db->affected_rows()){
			echo '1';
		} else {
			echo 'Gagal Menghapus';
		}
	}

	public function InputRealisasi(){
		$NIP = $this->session->userdata('NIP');
		$Jabatan = $this->session->userdata('Jabatan');
		if ($_POST['IdKegiatan'] == 'PNJ1') {
			if ($_POST['Kode'] == '1') {
				$JumlahKredit = $_POST['Volume']*3;
				$Kredit = 3;
			}
			else if ($_POST['Kode'] == '2') {
				$JumlahKredit = $_POST['Volume']*2;
				$Kredit = 2;
			}
		}
		else if ($_POST['IdKegiatan'] == 'PNJ2') {
			if ($_POST['Kode'] == '1') {
				$JumlahKredit = $_POST['Volume']*3;
				$Kredit = 3;
			}
			else if ($_POST['Kode'] == '2') {
				$JumlahKredit = $_POST['Volume']*2;
				$Kredit = 2;
			}
			else if ($_POST['Kode'] == '1') {
				$JumlahKredit = $_POST['Volume']*2;
				$Kredit = 2;
			}
			else if ($_POST['Kode'] == '2') {
				$JumlahKredit = $_POST['Volume'];
				$Kredit = 1;
			}
		}
		else if ($_POST['IdKegiatan'] == 'PNJ3') {
			if ($_POST['Kode'] == '1') {
				$JumlahKredit = $_POST['Volume']*2;
				$Kredit = 2;
			}
			else if ($_POST['Kode'] == '2') {
				$JumlahKredit = $_POST['Volume'];
				$Kredit = 1;
			}
			else if ($_POST['Kode'] == '3') {
				$JumlahKredit = $_POST['Volume']*0.5;
				$Kredit = 0.5;
			}
			else if ($_POST['Kode'] == '4') {
				$JumlahKredit = $_POST['Volume']*1.5;
				$Kredit = 1.5;
			}
			else if ($_POST['Kode'] == '5') {
				$JumlahKredit = $_POST['Volume'];
				$Kredit = 1;
			}
			else {
				$JumlahKredit = $_POST['Volume']*0.5;
				$Kredit = 0.5;
			}
		}
		else if ($_POST['IdKegiatan'] == 'PNJ4') {
			$JumlahKredit = $_POST['Volume'];
			$Kredit = 1;
		}
		else if ($_POST['IdKegiatan'] == 'PNJ5') {
			if ($_POST['Kode'] == '1') {
				$JumlahKredit = $_POST['Volume']*3;
				$Kredit = 3;
			}
			else if ($_POST['Kode'] == '2') {
				$JumlahKredit = $_POST['Volume']*2;
				$Kredit = 2;
			}
		}
		else if ($_POST['IdKegiatan'] == 'PNJ6') {
			if ($_POST['Kode'] == '1') {
				$JumlahKredit = $_POST['Volume']*3;
				$Kredit = 3;
			}
			else if ($_POST['Kode'] == '2') {
				$JumlahKredit = $_POST['Volume']*2;
				$Kredit = 2;
			}
			else if ($_POST['Kode'] == '1') {
				$JumlahKredit = $_POST['Volume']*2;
				$Kredit = 2;
			}
			else if ($_POST['Kode'] == '2') {
				$JumlahKredit = $_POST['Volume'];
				$Kredit = 1;
			}
		}
		else if ($_POST['IdKegiatan'] == 'PNJ7') {
			if ($_POST['Kode'] == '1') {
				$JumlahKredit = $_POST['Volume']*3;
				$Kredit = 3;
			}
			else if ($_POST['Kode'] == '2') {
				$JumlahKredit = $_POST['Volume']*2;
				$Kredit = 2;
			}
			else if ($_POST['Kode'] == '3') {
				$JumlahKredit = $_POST['Volume'];
				$Kredit = 1;
			}
			else if ($_POST['Kode'] == '4') {
				$JumlahKredit = $_POST['Volume']*5;
				$Kredit = 5;
			}
			else if ($_POST['Kode'] == '5') {
				$JumlahKredit = $_POST['Volume']*3;
				$Kredit = 3;
			}
			else {
				$JumlahKredit = $_POST['Volume'];
				$Kredit = 1;
			}
		}
		else if ($_POST['IdKegiatan'] == 'PNJ9') {
			$JumlahKredit = $_POST['Volume']*5;
			$Kredit = 5;
		}
		else if ($_POST['IdKegiatan'] == 'PNJ9') {
			if ($_POST['Kode'] == '4') {
				$JumlahKredit = $_POST['Volume']*5;
				$Kredit = 5;
			}
			else if ($_POST['Kode'] == '5') {
				$JumlahKredit = $_POST['Volume']*3;
				$Kredit = 3;
			}
			else {
				$JumlahKredit = $_POST['Volume'];
				$Kredit = 1;
			}
		}
		else if ($_POST['IdKegiatan'] == 'PNJ10') {
			$JumlahKredit = $_POST['Volume']*0.5;
			$Kredit = 0.5;
		}
		$Pdf = count($_FILES);
		if ($Pdf > 0) {
			if ($this->CekBukti($Pdf)){
				$Tipe = pathinfo($_FILES['file']['name'],PATHINFO_EXTENSION);
				$NamaPdf = date('Ymd',time()).substr(password_hash('Penunjang', PASSWORD_DEFAULT),7,7).'.'.$Tipe;
				str_replace("/","F",$NamaPdf);
				move_uploaded_file($_FILES['file']['tmp_name'], "Penunjang/".$NamaPdf);
				$this->db->insert('RealisasiPenunjang',
										array('NIP' => $NIP, 
													'Jabatan' => $Jabatan, 
													'Jenjang' => $_POST['Homebase'], 
													'Semester' => $_POST['Semester'], 
													'Tahun' => $_POST['Tahun'], 
													'IdKegiatan' => $_POST['IdKegiatan'],
													'Kode' => $_POST['Kode'],
													'Kegiatan' => htmlentities($_POST['Kegiatan']),
													'TanggalKegiatan' => htmlentities($_POST['TanggalKegiatan']),
													'Volume' => $_POST['Volume'],
													'Kredit' => $Kredit,
													'JumlahKredit' => $JumlahKredit,
													'Bukti' => $NamaPdf));
				if ($this->db->affected_rows()){
					$this->session->set_userdata('IdKegiatanPenunjang', $_POST['IdKegiatan']);
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
		if ($_POST['IdKegiatan'] == 'PNJ1') {
			if ($_POST['Kode'] == '1') {
				$JumlahKredit = $_POST['Volume']*3;
				$Kredit = 3;
			}
			else if ($_POST['Kode'] == '2') {
				$JumlahKredit = $_POST['Volume']*2;
				$Kredit = 2;
			}
		}
		else if ($_POST['IdKegiatan'] == 'PNJ2') {
			if ($_POST['Kode'] == '1') {
				$JumlahKredit = $_POST['Volume']*3;
				$Kredit = 3;
			}
			else if ($_POST['Kode'] == '2') {
				$JumlahKredit = $_POST['Volume']*2;
				$Kredit = 2;
			}
			else if ($_POST['Kode'] == '1') {
				$JumlahKredit = $_POST['Volume']*2;
				$Kredit = 2;
			}
			else if ($_POST['Kode'] == '2') {
				$JumlahKredit = $_POST['Volume'];
				$Kredit = 1;
			}
		}
		else if ($_POST['IdKegiatan'] == 'PNJ3') {
			if ($_POST['Kode'] == '1') {
				$JumlahKredit = $_POST['Volume']*2;
				$Kredit = 2;
			}
			else if ($_POST['Kode'] == '2') {
				$JumlahKredit = $_POST['Volume'];
				$Kredit = 1;
			}
			else if ($_POST['Kode'] == '3') {
				$JumlahKredit = $_POST['Volume']*0.5;
				$Kredit = 0.5;
			}
			else if ($_POST['Kode'] == '4') {
				$JumlahKredit = $_POST['Volume']*1.5;
				$Kredit = 1.5;
			}
			else if ($_POST['Kode'] == '5') {
				$JumlahKredit = $_POST['Volume'];
				$Kredit = 1;
			}
			else {
				$JumlahKredit = $_POST['Volume']*0.5;
				$Kredit = 0.5;
			}
		}
		else if ($_POST['IdKegiatan'] == 'PNJ4') {
			$JumlahKredit = $_POST['Volume'];
			$Kredit = 1;
		}
		else if ($_POST['IdKegiatan'] == 'PNJ5') {
			if ($_POST['Kode'] == '1') {
				$JumlahKredit = $_POST['Volume']*3;
				$Kredit = 3;
			}
			else if ($_POST['Kode'] == '2') {
				$JumlahKredit = $_POST['Volume']*2;
				$Kredit = 2;
			}
		}
		else if ($_POST['IdKegiatan'] == 'PNJ6') {
			if ($_POST['Kode'] == '1') {
				$JumlahKredit = $_POST['Volume']*3;
				$Kredit = 3;
			}
			else if ($_POST['Kode'] == '2') {
				$JumlahKredit = $_POST['Volume']*2;
				$Kredit = 2;
			}
			else if ($_POST['Kode'] == '1') {
				$JumlahKredit = $_POST['Volume']*2;
				$Kredit = 2;
			}
			else if ($_POST['Kode'] == '2') {
				$JumlahKredit = $_POST['Volume'];
				$Kredit = 1;
			}
		}
		else if ($_POST['IdKegiatan'] == 'PNJ7') {
			if ($_POST['Kode'] == '1') {
				$JumlahKredit = $_POST['Volume']*3;
				$Kredit = 3;
			}
			else if ($_POST['Kode'] == '2') {
				$JumlahKredit = $_POST['Volume']*2;
				$Kredit = 2;
			}
			else if ($_POST['Kode'] == '3') {
				$JumlahKredit = $_POST['Volume'];
				$Kredit = 1;
			}
			else if ($_POST['Kode'] == '4') {
				$JumlahKredit = $_POST['Volume']*5;
				$Kredit = 5;
			}
			else if ($_POST['Kode'] == '5') {
				$JumlahKredit = $_POST['Volume']*3;
				$Kredit = 3;
			}
			else {
				$JumlahKredit = $_POST['Volume'];
				$Kredit = 1;
			}
		}
		else if ($_POST['IdKegiatan'] == 'PNJ9') {
			$JumlahKredit = $_POST['Volume']*5;
			$Kredit = 5;
		}
		else if ($_POST['IdKegiatan'] == 'PNJ9') {
			if ($_POST['Kode'] == '4') {
				$JumlahKredit = $_POST['Volume']*5;
				$Kredit = 5;
			}
			else if ($_POST['Kode'] == '5') {
				$JumlahKredit = $_POST['Volume']*3;
				$Kredit = 3;
			}
			else {
				$JumlahKredit = $_POST['Volume'];
				$Kredit = 1;
			}
		}
		else if ($_POST['IdKegiatan'] == 'PNJ10') {
			$JumlahKredit = $_POST['Volume']*0.5;
			$Kredit = 0.5;
		}
		$Pdf = count($_FILES);
		if ($Pdf > 0) {
			if ($this->CekBukti($Pdf)){
				$Tipe = pathinfo($_FILES['file']['name'],PATHINFO_EXTENSION);
				$NamaPdf = date('Ymd',time()).substr(password_hash('Penunjang', PASSWORD_DEFAULT),7,7).'.'.$Tipe;
				str_replace("/","F",$NamaPdf);
				move_uploaded_file($_FILES['file']['tmp_name'], "Penunjang/".$NamaPdf);
				if($_POST['Bukti'] != ''){
					unlink('Penunjang/'.$_POST['Bukti']);
				}
				$this->db->where('No', $_POST['No']);
				$this->db->update('RealisasiPenunjang',
										array('Jenjang' => $_POST['Homebase'], 
													'Semester' => $_POST['Semester'], 
													'Tahun' => $_POST['Tahun'], 
													'IdKegiatan' => $_POST['IdKegiatan'],
													'Kode' => $_POST['Kode'],
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
			$this->db->update('RealisasiPenunjang',
										array('Jenjang' => $_POST['Homebase'], 
													'Semester' => $_POST['Semester'], 
													'Tahun' => $_POST['Tahun'], 
													'IdKegiatan' => $_POST['IdKegiatan'],
													'Kode' => $_POST['Kode'],
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
		$this->db->delete('RealisasiPenunjang', array('No' => $_POST['No']));
		if($_POST['Bukti'] != ''){
			unlink('Penunjang/'.$_POST['Bukti']);
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
		$Data['Penunjang'] = $this->db->query("SELECT * FROM `RealisasiPenunjang` WHERE NIP = ".$this->session->userdata('NIP')." AND Jenjang LIKE "."'%".$Jenjang."%'"." AND Semester LIKE "."'%".$Semester."%'"." AND Tahun >= ".$Tahun[0]." AND Tahun <= ".$Tahun[1]." ORDER BY SUBSTR(IdKegiatan FROM 1 FOR 3), CAST(SUBSTR(IdKegiatan FROM 4) AS UNSIGNED), SUBSTR(IdKegiatan FROM 4), Kode ASC")->result_array();
		$this->load->view('ExcelPenunjang',$Data);
	}

	public function Lampiran(){
		$Jenjang = $this->uri->segment('3');
		$Semester = $this->uri->segment('4');
		$Tahun = explode('-',$this->uri->segment('5'));
		$DataPenunjang = $this->db->query("SELECT * FROM `RealisasiPenunjang` WHERE NIP = ".$this->session->userdata('NIP')." AND Jenjang LIKE "."'%".$Jenjang."%'"." AND Semester LIKE "."'%".$Semester."%'"." AND Tahun >= ".$Tahun[0]." AND Tahun <= ".$Tahun[1]." ORDER BY SUBSTR(IdKegiatan FROM 1 FOR 3), CAST(SUBSTR(IdKegiatan FROM 4) AS UNSIGNED), SUBSTR(IdKegiatan FROM 4), Kode ASC")->result_array();
		echo json_encode($DataPenunjang);
	}
}