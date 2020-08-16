<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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

	public function Profil(){
		$NIP = $this->session->userdata('NIP');
    $Data['Halaman'] = 'Profil';
    $Data['SubMenu'] = '';
    $Data['Profil'] = $this->db->get_where('Dosen', array('NIP' => $NIP))->row_array();
		$this->load->view('Header',$Data);
		$this->load->view('Profil',$Data);
	}

	public function EditProfil(){
		$this->db->where('NIP', $this->session->userdata('NIP'));
		$this->db->update('Dosen',
										array('NIP' => $_POST['NIP'], 
													'NIDN' => $_POST['NIDN'],
													'Nama' => htmlentities($_POST['Nama']),
													'Jabatan' => $_POST['Jabatan'],
													'Pangkat' => $_POST['Pangkat'],
													'Golongan' => $_POST['Golongan'],
													'Semester' => $_POST['Semester'],
													'Tahun' => $_POST['Tahun'],
													'Kredit' => $_POST['Kredit']));
		$this->session->set_userdata('NIP', $_POST['NIP']);
		$this->session->set_userdata('Jabatan', $_POST['Jabatan']);
		echo '1';
	}
	
	public function Foto(){
		$Tipe = pathinfo($_FILES['file']['name'],PATHINFO_EXTENSION);
		$valid_extensions = array("jpg","jpeg","png");
		if(!in_array(strtolower($Tipe),$valid_extensions)) {
			echo 'Mohon Upload jpg/jpeg/png';
		} else {
			$Tipe = pathinfo($_FILES['file']['name'],PATHINFO_EXTENSION);
			$NamaFoto = date('Ymd',time()).substr(password_hash('Foto', PASSWORD_DEFAULT),7,3).'.'.$Tipe;
			move_uploaded_file($_FILES['file']['tmp_name'], "img/".$NamaFoto);
			if ($_POST['NamaFoto'] != '') { unlink('img/'.$_POST['NamaFoto']); }
			$this->db->where('NIP', $this->session->userdata('NIP'));
			$this->db->update('Dosen',array('Foto' => $NamaFoto));
			echo '1';
		}
	}
  
  public function Pendidikan(){
    $Data['Halaman'] = 'Kegiatan';
		$Data['SubMenu'] = 'Pendidikan';		
		$NIP = $this->session->userdata('NIP');
		$ID = $this->session->userdata('IdKegiatanPendidikan');
		$Data['Rencana'] = $this->db->get_where('RencanaPendidikan', array('NIP' => $NIP))->result_array();
		$Data['KreditRealisasi'] = array();
		foreach ($Data['Rencana'] as $key) {
			$Tampung = $this->db->get_where('RealisasiPendidikan', array('NIP' => $NIP,'Jenjang' => $key['Jenjang'],'Semester' => $key['Semester'],'Tahun' => $key['Tahun']))->result_array();
			$Total = 0;
			foreach ($Tampung as $data) {
				$Total+=$data['JumlahKredit'];
			}
			array_push($Data['KreditRealisasi'],$Total);
		}
		$Data['Realisasi'] = $this->db->get_where('RealisasiPendidikan', array('NIP' => $NIP,'IdKegiatan' => $ID))->result_array();
		$this->load->view('Header',$Data);
		$this->load->view('Pendidikan',$Data);
	}

	public function LihatRealisasiPendidikan(){
		$this->session->set_userdata('IdKegiatanPendidikan', $_POST['ID']);
	}

	public function LihatRealisasiPenelitian(){
		$this->session->set_userdata('IdKegiatanPenelitian', $_POST['ID']);
	}

	public function LihatRealisasiPengabdian(){
		$this->session->set_userdata('IdKegiatanPengabdian', $_POST['ID']);
	}

	public function LihatRealisasiPenunjang(){
		$this->session->set_userdata('IdKegiatanPenunjang', $_POST['ID']);
	}

	public function SubPendidikan(){
		$this->session->set_userdata('SubPendidikan', $_POST['SubPendidikan']);
	}

	public function SubPenelitian(){
		$this->session->set_userdata('SubPenelitian', $_POST['SubPenelitian']);
	}

	public function SubPengabdian(){
		$this->session->set_userdata('SubPengabdian', $_POST['SubPengabdian']);
	}

	public function SubPenunjang(){
		$this->session->set_userdata('SubPenunjang', $_POST['SubPenunjang']);
	}

	public function Penelitian(){
    $Data['Halaman'] = 'Kegiatan';
		$Data['SubMenu'] = 'Penelitian';		
		$NIP = $this->session->userdata('NIP');
		$ID = $this->session->userdata('IdKegiatanPenelitian');
		$Data['Rencana'] = $this->db->get_where('RencanaPenelitian', array('NIP' => $NIP))->result_array();
		$Data['KreditRealisasi'] = array();
		foreach ($Data['Rencana'] as $key) {
			$Tampung = $this->db->get_where('RealisasiPenelitian', array('NIP' => $NIP,'Jenjang' => $key['Jenjang'],'Semester' => $key['Semester'],'Tahun' => $key['Tahun']))->result_array();
			$Total = 0;
			foreach ($Tampung as $data) {
				$Total+=$data['JumlahKredit'];
			}
			array_push($Data['KreditRealisasi'],$Total);
		}
		$Data['Realisasi'] = $this->db->get_where('RealisasiPenelitian', array('NIP' => $NIP,'IdKegiatan' => $ID))->result_array();
		$this->load->view('Header',$Data);
		$this->load->view('Penelitian',$Data);
	}

	public function Pengabdian(){
    $Data['Halaman'] = 'Kegiatan';
		$Data['SubMenu'] = 'Pengabdian';		
		$NIP = $this->session->userdata('NIP');
		$ID = $this->session->userdata('IdKegiatanPengabdian');
		$Data['Rencana'] = $this->db->get_where('RencanaPengabdian', array('NIP' => $NIP))->result_array();
		$Data['KreditRealisasi'] = array();
		foreach ($Data['Rencana'] as $key) {
			$Tampung = $this->db->get_where('RealisasiPengabdian', array('NIP' => $NIP,'Jenjang' => $key['Jenjang'],'Semester' => $key['Semester'],'Tahun' => $key['Tahun']))->result_array();
			$Total = 0;
			foreach ($Tampung as $data) {
				$Total+=$data['JumlahKredit'];
			}
			array_push($Data['KreditRealisasi'],$Total);
		}
		$Data['Realisasi'] = $this->db->get_where('RealisasiPengabdian', array('NIP' => $NIP,'IdKegiatan' => $ID))->result_array();
		$this->load->view('Header',$Data);
		$this->load->view('Pengabdian',$Data);
	}

	public function Penunjang(){
    $Data['Halaman'] = 'Kegiatan';
		$Data['SubMenu'] = 'Penunjang';		
		$NIP = $this->session->userdata('NIP');
		$ID = $this->session->userdata('IdKegiatanPenunjang');
		$Data['Rencana'] = $this->db->get_where('RencanaPenunjang', array('NIP' => $NIP))->result_array();
		$Data['KreditRealisasi'] = array();
		foreach ($Data['Rencana'] as $key) {
			$Tampung = $this->db->get_where('RealisasiPenunjang', array('NIP' => $NIP,'Jenjang' => $key['Jenjang'],'Semester' => $key['Semester'],'Tahun' => $key['Tahun']))->result_array();
			$Total = 0;
			foreach ($Tampung as $data) {
				$Total+=$data['JumlahKredit'];
			}
			array_push($Data['KreditRealisasi'],$Total);
		}
		$Data['Realisasi'] = $this->db->get_where('RealisasiPenunjang', array('NIP' => $NIP,'IdKegiatan' => $ID))->result_array();
		$this->load->view('Header',$Data);
		$this->load->view('Penunjang',$Data);
	}

	public function PAK(){
		$NIP = $this->session->userdata('NIP');
		$Data['Profil'] = $this->db->get_where('Dosen', array('NIP' => $NIP))->row_array();
		$Jenjang = $this->uri->segment('3');
		$Semester = $this->uri->segment('4');
		$Tahun = explode('-',$this->uri->segment('5'));
		$Data['Pendidikan'] = $this->db->query("SELECT * FROM `RealisasiPendidikan` WHERE NIP = ".$NIP." AND Jenjang LIKE "."'%".$Jenjang."%'"." AND Semester LIKE "."'%".$Semester."%'"." AND Tahun >= ".$Tahun[0]." AND Tahun <= ".$Tahun[1]." ORDER BY SUBSTR(IdKegiatan FROM 1 FOR 3), CAST(SUBSTR(IdKegiatan FROM 4) AS UNSIGNED), SUBSTR(IdKegiatan FROM 4), Kode ASC")->result_array();
		$Data['Penelitian'] = $this->db->query("SELECT * FROM `RealisasiPenelitian` WHERE NIP = ".$NIP." AND Jenjang LIKE "."'%".$Jenjang."%'"." AND Semester LIKE "."'%".$Semester."%'"." AND Tahun >= ".$Tahun[0]." AND Tahun <= ".$Tahun[1]." ORDER BY SUBSTR(IdKegiatan FROM 1 FOR 3), CAST(SUBSTR(IdKegiatan FROM 4) AS UNSIGNED), SUBSTR(IdKegiatan FROM 4), Kode ASC")->result_array();
		$Data['Pengabdian'] = $this->db->query("SELECT * FROM `RealisasiPengabdian` WHERE NIP = ".$NIP." AND Jenjang LIKE "."'%".$Jenjang."%'"." AND Semester LIKE "."'%".$Semester."%'"." AND Tahun >= ".$Tahun[0]." AND Tahun <= ".$Tahun[1]." ORDER BY SUBSTR(IdKegiatan FROM 1 FOR 3), CAST(SUBSTR(IdKegiatan FROM 4) AS UNSIGNED), SUBSTR(IdKegiatan FROM 4), Kode ASC")->result_array();
		$Data['Penunjang'] = $this->db->query("SELECT * FROM `RealisasiPenunjang` WHERE NIP = ".$NIP." AND Jenjang LIKE "."'%".$Jenjang."%'"." AND Semester LIKE "."'%".$Semester."%'"." AND Tahun >= ".$Tahun[0]." AND Tahun <= ".$Tahun[1]." ORDER BY SUBSTR(IdKegiatan FROM 1 FOR 3), CAST(SUBSTR(IdKegiatan FROM 4) AS UNSIGNED), SUBSTR(IdKegiatan FROM 4), Kode ASC")->result_array();
		$Data['KreditPendidikan1a'] = $this->db->query("SELECT SUM(JumlahKredit) as Kredit FROM RealisasiPendidikan WHERE NIP = ".$NIP." AND IdKegiatan = 'PND1'"." AND Jenjang LIKE "."'%".$Jenjang."%'"." AND Semester LIKE "."'%".$Semester."%'"." AND Tahun >= ".$Tahun[0]." AND Tahun <= ".$Tahun[1])->row_array();
		$Data['KreditPendidikan1b'] = $this->db->query("SELECT SUM(JumlahKredit) as Kredit FROM RealisasiPendidikan WHERE NIP = ".$NIP." AND IdKegiatan = 'PND2'"." AND Jenjang LIKE "."'%".$Jenjang."%'"." AND Semester LIKE "."'%".$Semester."%'"." AND Tahun >= ".$Tahun[0]." AND Tahun <= ".$Tahun[1])->row_array();
		$Data['KreditPendidikan2'] = $this->db->query("SELECT SUM(JumlahKredit) as Kredit FROM RealisasiPendidikan WHERE NIP = ".$NIP." AND IdKegiatan != 'PND1' AND IdKegiatan != 'PND2'"." AND Jenjang LIKE "."'%".$Jenjang."%'"." AND Semester LIKE "."'%".$Semester."%'"." AND Tahun >= ".$Tahun[0]." AND Tahun <= ".$Tahun[1])->row_array();
		$Data['KreditPenelitian'] = $this->db->query("SELECT SUM(JumlahKredit) as Kredit FROM RealisasiPenelitian WHERE NIP = ".$NIP." AND Jenjang LIKE "."'%".$Jenjang."%'"." AND Semester LIKE "."'%".$Semester."%'"." AND Tahun >= ".$Tahun[0]." AND Tahun <= ".$Tahun[1])->row_array();
		$Data['KreditPengabdian'] = $this->db->query("SELECT SUM(JumlahKredit) as Kredit FROM RealisasiPengabdian WHERE NIP = ".$NIP." AND Jenjang LIKE "."'%".$Jenjang."%'"." AND Semester LIKE "."'%".$Semester."%'"." AND Tahun >= ".$Tahun[0]." AND Tahun <= ".$Tahun[1])->row_array();
		$Data['KreditPenunjang'] = $this->db->query("SELECT SUM(JumlahKredit) as Kredit FROM RealisasiPenunjang WHERE NIP = ".$NIP." AND Jenjang LIKE "."'%".$Jenjang."%'"." AND Semester LIKE "."'%".$Semester."%'"." AND Tahun >= ".$Tahun[0]." AND Tahun <= ".$Tahun[1])->row_array();
		$Tampung = $this->db->query("SELECT SUM(JumlahKredit) as Kredit,IdKegiatan FROM RealisasiPendidikan WHERE NIP = ".$NIP." AND Jenjang LIKE "."'%".$Jenjang."%'"." AND Semester LIKE "."'%".$Semester."%'"." AND Tahun >= ".$Tahun[0]." AND Tahun <= ".$Tahun[1]." GROUP BY IdKegiatan ORDER BY SUBSTR(IdKegiatan FROM 1 FOR 3), CAST(SUBSTR(IdKegiatan FROM 4) AS UNSIGNED), SUBSTR(IdKegiatan FROM 4)")->result_array();
		$Pendidikan = array();
		foreach ($Tampung as $key) {
			$Pendidikan[$key['Kredit']] = $key['IdKegiatan'];
		}
		$Data['UsulPendidikan'] = $Pendidikan;
		$Tampung = $this->db->query("SELECT SUM(JumlahKredit) as Kredit,IdKegiatan FROM RealisasiPenelitian WHERE NIP = ".$NIP." AND Jenjang LIKE "."'%".$Jenjang."%'"." AND Semester LIKE "."'%".$Semester."%'"." AND Tahun >= ".$Tahun[0]." AND Tahun <= ".$Tahun[1]." GROUP BY IdKegiatan ORDER BY SUBSTR(IdKegiatan FROM 1 FOR 3), CAST(SUBSTR(IdKegiatan FROM 4) AS UNSIGNED), SUBSTR(IdKegiatan FROM 4)")->result_array();
		$Penelitian = array();
		foreach ($Tampung as $key) {
			$Penelitian[$key['Kredit']] = $key['IdKegiatan'];
		}
		$Data['UsulPenelitian'] = $Penelitian;
		$Tampung = $this->db->query("SELECT SUM(JumlahKredit) as Kredit,IdKegiatan FROM RealisasiPengabdian WHERE NIP = ".$NIP." AND Jenjang LIKE "."'%".$Jenjang."%'"." AND Semester LIKE "."'%".$Semester."%'"." AND Tahun >= ".$Tahun[0]." AND Tahun <= ".$Tahun[1]." GROUP BY IdKegiatan ORDER BY SUBSTR(IdKegiatan FROM 1 FOR 3), CAST(SUBSTR(IdKegiatan FROM 4) AS UNSIGNED), SUBSTR(IdKegiatan FROM 4)")->result_array();
		$Pengabdian = array();
		foreach ($Tampung as $key) {
			$Pengabdian[$key['Kredit']] = $key['IdKegiatan'];
		}
		$Data['UsulPengabdian'] = $Pengabdian;
		$Tampung = $this->db->query("SELECT SUM(JumlahKredit) as Kredit,IdKegiatan FROM RealisasiPenunjang WHERE NIP = ".$NIP." AND Jenjang LIKE "."'%".$Jenjang."%'"." AND Semester LIKE "."'%".$Semester."%'"." AND Tahun >= ".$Tahun[0]." AND Tahun <= ".$Tahun[1]." GROUP BY IdKegiatan ORDER BY SUBSTR(IdKegiatan FROM 1 FOR 3), CAST(SUBSTR(IdKegiatan FROM 4) AS UNSIGNED), SUBSTR(IdKegiatan FROM 4)")->result_array();
		$Penunjang = array();
		foreach ($Tampung as $key) {
			$Penunjang[$key['Kredit']] = $key['IdKegiatan'];
		}
		$Data['UsulPenunjang'] = $Penunjang;
		// $Data['DupakPendidikan'] = $this->db->query("SELECT * FROM `RealisasiPendidikan` WHERE NIP = ".$NIP." AND Jenjang LIKE "."'%".$Jenjang."%'"." AND Semester LIKE "."'%".$Semester."%'"." AND Tahun >= ".$Tahun[0]." AND Tahun <= ".$Tahun[1]." ORDER BY SUBSTR(IdKegiatan FROM 1 FOR 3), CAST(SUBSTR(IdKegiatan FROM 4) AS UNSIGNED), SUBSTR(IdKegiatan FROM 4), Kode ASC")->result_array();
		
		$this->load->view('ExcelPO-PAK',$Data);
	}

	public function Lampiran(){
		$Jenjang = $this->uri->segment('3');
		$Semester = $this->uri->segment('4');
		$Tahun = explode('-',$this->uri->segment('5'));
		$Kegiatan = $this->uri->segment('6');
		$Data = $this->db->query("SELECT * FROM Realisasi".$Kegiatan."  WHERE NIP = ".$this->session->userdata('NIP')." AND Jenjang LIKE "."'%".$Jenjang."%'"." AND Semester LIKE "."'%".$Semester."%'"." AND Tahun >= ".$Tahun[0]." AND Tahun <= ".$Tahun[1]." ORDER BY SUBSTR(IdKegiatan FROM 1 FOR 3), CAST(SUBSTR(IdKegiatan FROM 4) AS UNSIGNED), SUBSTR(IdKegiatan FROM 4), Kode ASC")->result_array();
		echo json_encode($Data);
	}
}