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
		if ($Data['Profil']['KreditLama'] == null) {
			$Data['Profil']['KreditLama'] = 0;
		}
		$Bidang = array('Penelitian','Pengabdian','Penunjang');
		$TahunKreditLama = $this->db->query("SELECT Tahun FROM Dosen WHERE NIP=".$NIP)->row_array()['Tahun']+1; 
		$Data['KreditBaru'] = 0;
		$Data['KreditBidang'] = array(0,0,0,0);
		if ($TahunKreditLama != null) {
			for ($i=0; $i < 3; $i++) { 
				$Kredit = $this->db->query("SELECT SUM(JumlahKredit) AS JumlahKredit FROM Realisasi".$Bidang[$i]." WHERE NIP=".$NIP." AND JumlahKredit != '' AND Tahun >= ".$TahunKreditLama)->row_array()['JumlahKredit'];
				$Data['KreditBaru'] += $Kredit;
				$Data['KreditBidang'][$i] += $Kredit;
			}
			if ($Data['Profil']['Semester'] == 'Genap') {
				for ($i=0; $i < 3; $i++) { 
					$Kredit = $this->db->query("SELECT SUM(JumlahKredit) AS JumlahKredit FROM Realisasi".$Bidang[$i]." WHERE NIP=".$NIP." AND Semester = 'Ganjil' AND JumlahKredit != '' AND Tahun = ".($TahunKreditLama-1))->row_array()['JumlahKredit'];
					$Data['KreditBaru'] += $Kredit;
					$Data['KreditBidang'][$i] += $Kredit;
				}
				$Kredit = $this->db->query("SELECT SUM(JumlahKredit) AS JumlahKredit FROM `RealisasiPendidikan` WHERE NIP = ".$NIP." AND Semester = 'Ganjil' AND JumlahKredit != '' AND IdKegiatan != 'PND3' AND Tahun = ".($TahunKreditLama-1))->row_array()['JumlahKredit'];
				$Data['KreditBaru'] += $Kredit;
				$Data['KreditBidang'][3] += $Kredit;
				$Sortir = $this->db->query("SELECT DISTINCT Jenjang,Semester,Tahun FROM RealisasiPendidikan WHERE NIP = ".$NIP." AND Semester = 'Ganjil' AND IdKegiatan = 'PND3' AND Tahun = ".($TahunKreditLama-1))->result_array();
				$data = $this->db->query("SELECT * FROM RealisasiPendidikan WHERE NIP = ".$NIP." AND Semester = 'Ganjil' AND IdKegiatan = 'PND3' AND Tahun = ".($TahunKreditLama-1))->result_array();
				$Mk = array();
				for ($i=0; $i < count($Sortir); $i++) { 
					$Cek = true;
					for ($j=0; $j < count($data); $j++) {
						if ($Sortir[$i]['Jenjang'] == $data[$j]['Jenjang'] && $Sortir[$i]['Semester'] == $data[$j]['Semester'] && $Sortir[$i]['Tahun'] == $data[$j]['Tahun']) {
							if ($Cek) {
								$Mk[$i] = $data[$j];
								$Cek = false;
							} 
							else {
								$Mk[$i]['JumlahKredit'] += $data[$j]['JumlahKredit'];
							}
						} 
					}
				}
				for ($i=0; $i < count($Mk); $i++) {
					if ($Mk[$i]['JumlahKredit'] > 10) {
						if ($Mk[$i]['Jabatan'] == 'Asisten Ahli') {
							$Mk[$i]['JumlahKredit'] = 5+(($Mk[$i]['JumlahKredit']-10)*0.25);
						} else {
							$Mk[$i]['JumlahKredit'] = 10+(($Mk[$i]['JumlahKredit']-10)*0.5);
						}
					} else {
						if ($Mk[$i]['Jabatan'] == 'Asisten Ahli') {
							$Mk[$i]['JumlahKredit'] = $Mk[$i]['JumlahKredit']*0.5;
						} else {
							$Mk[$i]['JumlahKredit'] = $Mk[$i]['JumlahKredit'];
						}
					}
				}
				for ($i=0; $i < count($Mk); $i++) {
					$Data['KreditBaru'] += $Mk[$i]['JumlahKredit'];
					$Data['KreditBidang'][3] += $Mk[$i]['JumlahKredit'];
				} 
			}
			$Kredit = $this->db->query("SELECT SUM(JumlahKredit) AS JumlahKredit FROM `RealisasiPendidikan` WHERE NIP = ".$NIP." AND JumlahKredit != '' AND IdKegiatan != 'PND3' AND Tahun >= ".$TahunKreditLama)->row_array()['JumlahKredit'];
			$Data['KreditBaru'] += $Kredit;
			$Data['KreditBidang'][3] += $Kredit;
			$Sortir = $this->db->query("SELECT DISTINCT Jenjang,Semester,Tahun FROM RealisasiPendidikan WHERE NIP = ".$NIP." AND IdKegiatan = 'PND3' AND Tahun >= ".$TahunKreditLama)->result_array();
			$data = $this->db->query("SELECT * FROM RealisasiPendidikan WHERE NIP = ".$NIP." AND IdKegiatan = 'PND3' AND Tahun >= ".$TahunKreditLama)->result_array();
			$Mk = array();
			for ($i=0; $i < count($Sortir); $i++) { 
				$Cek = true;
				for ($j=0; $j < count($data); $j++) {
					if ($Sortir[$i]['Jenjang'] == $data[$j]['Jenjang'] && $Sortir[$i]['Semester'] == $data[$j]['Semester'] && $Sortir[$i]['Tahun'] == $data[$j]['Tahun']) {
						if ($Cek) {
							$Mk[$i] = $data[$j];
							$Cek = false;
						} 
						else {
							$Mk[$i]['JumlahKredit'] += $data[$j]['JumlahKredit'];
						}
					} 
				}
			}
			for ($i=0; $i < count($Mk); $i++) {
				if ($Mk[$i]['JumlahKredit'] > 10) {
					if ($Mk[$i]['Jabatan'] == 'Asisten Ahli') {
						$Mk[$i]['JumlahKredit'] = 5+(($Mk[$i]['JumlahKredit']-10)*0.25);
					} else {
						$Mk[$i]['JumlahKredit'] = 10+(($Mk[$i]['JumlahKredit']-10)*0.5);
					}
				} else {
					if ($Mk[$i]['Jabatan'] == 'Asisten Ahli') {
						$Mk[$i]['JumlahKredit'] = $Mk[$i]['JumlahKredit']*0.5;
					} else {
						$Mk[$i]['JumlahKredit'] = $Mk[$i]['JumlahKredit'];
					}
				}
			}
			for ($i=0; $i < count($Mk); $i++) {
				$Data['KreditBaru'] += $Mk[$i]['JumlahKredit'];
				$Data['KreditBidang'][3] += $Mk[$i]['JumlahKredit'];
			} 
		}
		$this->load->view('Header',$Data);
		$this->load->view('Profil',$Data);
	}

	public function EditProfil(){ 
		if ($this->CekBukti($_FILES)){
			$Sertifikat = $_POST['SertifikatLama'];
			if (isset($_FILES['Sertifikat'])) {
				if($Sertifikat != ''){
					unlink('DTPS/'.$Sertifikat);
				}
				$NamaPdf = date('Ymd',time()).substr(password_hash('Sertifikat', PASSWORD_DEFAULT),7,7);
				$NamaPdf = str_replace("/","E",$NamaPdf);
				$NamaPdf = str_replace(".","F",$NamaPdf);
				move_uploaded_file($_FILES['Sertifikat']['tmp_name'], "DTPS/".$NamaPdf.".pdf");
				$Sertifikat = $NamaPdf.".pdf";
			}
			if($this->db->get_where('Dosen', array('NIP' => $_POST['NIP']))->num_rows() === 0 || $this->session->userdata('NIP') == $_POST['NIP']){
				$this->db->where('NIP', $this->session->userdata('NIP'));
				$this->db->update('Dosen',
												array('NIP' => $_POST['NIP'], 
															'NIDN' => $_POST['NIDN'],
															'KarPeg' => htmlentities($_POST['KarPeg']),
															'Nama' => htmlentities($_POST['Nama']),
															'Gender' => $_POST['Gender'],
															'Kelahiran' => htmlentities($_POST['Kelahiran']),
															'Jabatan' => $_POST['Jabatan'],
															'Pangkat' => $_POST['Pangkat'],
															'Golongan' => $_POST['Golongan'],
															'Semester' => $_POST['Semester'],
															'Tahun' => $_POST['Tahun'],
															'KreditLama' => $_POST['KreditLama'],
															'WA' => $_POST['WA'],
															'S2' => $_POST['S2'],
															'S3' => $_POST['S3'],
															'BidangKeahlian' => $_POST['BidangKeahlian'],
															'KesesuaianKompetensi' => $_POST['KesesuaianKompetensi'],
															'KesesuaianBidang' => $_POST['KesesuaianBidang'],
															'SertifikatPendidik' => $_POST['SertifikatPendidik'],
															'SertifikatKompetensi' => $_POST['SertifikatKompetensi'],
															'Sertifikat' => $Sertifikat));											
				$this->session->set_userdata('NIP', $_POST['NIP']);
				$this->session->set_userdata('Jabatan', $_POST['Jabatan']);
				echo '1';
			} else {
				echo "Akun Dosen Dengan NIP ".$_POST['NIP']." Sudah Ada!";
			}
		}
		else {
			echo 'Bukti Sertifikat Hanya Boleh PDF!';
		}
	}

	public function CekBukti($file){
		$valid_extensions = array("pdf");
		foreach ($file as $key) {
			$Tipe = pathinfo($key['name'],PATHINFO_EXTENSION);
			if(!in_array(strtolower($Tipe),$valid_extensions)) {
				return false;
			} 
		}
		return true;
	}

	public function NamaPejabat(){
		$this->db->where('NIP', $this->session->userdata('NIP'));
		$this->db->update('Dosen',$_POST);
		if ($this->db->affected_rows()){
			echo '1';
		} else {
			echo 'Gagal Menyimpan Data!';
		}
	}

	public function GantiPassword(){
		$this->db->where('NIP', $this->session->userdata('NIP'));
		$this->db->update('Akun',array('Password' => password_hash($_POST['Password'], PASSWORD_DEFAULT)));	
		if ($this->db->affected_rows()){
			echo '1';
		} else {
			echo 'Gagal Mengganti Password!';
		}
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

	public function Pendidikan(){
    $Data['Halaman'] = 'Kegiatan';
		$Data['SubMenu'] = 'Pendidikan';		
		$NIP = $this->session->userdata('NIP');
		$ID = $this->session->userdata('IdKegiatanPendidikan');
		$Data['Rencana'] = $this->db->query("SELECT * FROM RencanaPendidikan WHERE NIP=".$NIP)->result_array();
		$Data['KreditRealisasi'] = array();
		foreach ($Data['Rencana'] as $key) {
			$Tampung = $this->db->query("SELECT * FROM RealisasiPendidikan"." WHERE NIP=".$NIP." AND JumlahKredit != '' AND Jenjang="."'".$key['Jenjang']."'"." AND Semester="."'".$key['Semester']."'"." AND Tahun="."'".$key['Tahun']."'")->result_array();
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

	public function Penelitian(){
    $Data['Halaman'] = 'Kegiatan';
		$Data['SubMenu'] = 'Penelitian';		
		$NIP = $this->session->userdata('NIP');
		$ID = $this->session->userdata('IdKegiatanPenelitian');
		$Data['Rencana'] = $this->db->query("SELECT * FROM RencanaPenelitian WHERE NIP=".$NIP)->result_array();
		$Data['KreditRealisasi'] = array();
		foreach ($Data['Rencana'] as $key) {
			$Tampung = $this->db->query("SELECT * FROM RealisasiPenelitian"." WHERE NIP=".$NIP." AND JumlahKredit != '' AND Jenjang="."'".$key['Jenjang']."'"." AND Semester="."'".$key['Semester']."'"." AND Tahun="."'".$key['Tahun']."'")->result_array();
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
		$Data['Rencana'] = $this->db->query("SELECT * FROM RencanaPengabdian WHERE NIP=".$NIP)->result_array();
		$Data['KreditRealisasi'] = array();
		foreach ($Data['Rencana'] as $key) {
			$Tampung = $this->db->query("SELECT * FROM RealisasiPengabdian"." WHERE NIP=".$NIP." AND JumlahKredit != '' AND Jenjang="."'".$key['Jenjang']."'"." AND Semester="."'".$key['Semester']."'"." AND Tahun="."'".$key['Tahun']."'")->result_array();
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
		$Data['Rencana'] = $this->db->query("SELECT * FROM RencanaPenunjang WHERE NIP=".$NIP)->result_array();
		$Data['KreditRealisasi'] = array();
		foreach ($Data['Rencana'] as $key) {
			$Tampung = $this->db->query("SELECT * FROM RealisasiPenunjang"." WHERE NIP=".$NIP." AND JumlahKredit != '' AND Jenjang="."'".$key['Jenjang']."'"." AND Semester="."'".$key['Semester']."'"." AND Tahun="."'".$key['Tahun']."'")->result_array();
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
		$Data['Pendidikan'] = $this->db->query("SELECT * FROM `RealisasiPendidikan` WHERE NIP = ".$NIP." AND JumlahKredit != '' AND IdKegiatan != 'PND3' AND Jenjang LIKE "."'%".$Jenjang."%'"." AND Semester LIKE "."'%".$Semester."%'"." AND Tahun >= ".$Tahun[0]." AND Tahun <= ".$Tahun[1]." ORDER BY SUBSTR(IdKegiatan FROM 1 FOR 3), CAST(SUBSTR(IdKegiatan FROM 4) AS UNSIGNED), SUBSTR(IdKegiatan FROM 4), Kode ASC")->result_array();
		$Sortir = $this->db->query("SELECT DISTINCT Jenjang,Semester,Tahun FROM RealisasiPendidikan WHERE NIP = ".$NIP." AND IdKegiatan = 'PND3' AND Jenjang LIKE "."'%".$Jenjang."%'"." AND Semester LIKE "."'%".$Semester."%'"." AND Tahun >= ".$Tahun[0]." AND Tahun <= ".$Tahun[1])->result_array();
		$data = $this->db->query("SELECT * FROM RealisasiPendidikan WHERE NIP = ".$NIP." AND IdKegiatan = 'PND3' AND Jenjang LIKE "."'%".$Jenjang."%'"." AND Semester LIKE "."'%".$Semester."%'"." AND Tahun >= ".$Tahun[0]." AND Tahun <= ".$Tahun[1])->result_array();
		$Mk = array();
		for ($i=0; $i < count($Sortir); $i++) { 
			$Cek = true;
			for ($j=0; $j < count($data); $j++) {
				if ($Sortir[$i]['Jenjang'] == $data[$j]['Jenjang'] && $Sortir[$i]['Semester'] == $data[$j]['Semester'] && $Sortir[$i]['Tahun'] == $data[$j]['Tahun']) {
					if ($Cek) {
						$Mk[$i] = $data[$j];
						$Cek = false;
					} 
					else {
						$Mk[$i]['Kegiatan'] .= ', '.$data[$j]['Kegiatan'];
						$Mk[$i]['JumlahKredit'] += $data[$j]['JumlahKredit'];
					}
				} 
			}
		}
		for ($i=0; $i < count($Mk); $i++) {
			if ($Mk[$i]['JumlahKredit'] > 10) {
				if ($Mk[$i]['Jabatan'] == 'Asisten Ahli') {
					$Mk[$i]['Volume'] = $Mk[$i]['JumlahKredit'];
					$Mk[$i]['Kredit'] = '0.5 & 0.25';
					$Mk[$i]['JumlahKredit'] = 5+(($Mk[$i]['JumlahKredit']-10)*0.25);
				} else {
					$Mk[$i]['Volume'] = $Mk[$i]['JumlahKredit'];
					$Mk[$i]['Kredit'] = '1 & 0.5';
					$Mk[$i]['JumlahKredit'] = 10+(($Mk[$i]['JumlahKredit']-10)*0.5);
				}
				$Mk[$i]['Satuan'] = '10 sks Pertama & 2 sks Berikutnya';
			} else {
				if ($Mk[$i]['Jabatan'] == 'Asisten Ahli') {
					$Mk[$i]['Volume'] = $Mk[$i]['JumlahKredit'];
					$Mk[$i]['Kredit'] = '0.5';
					$Mk[$i]['JumlahKredit'] = $Mk[$i]['JumlahKredit']*0.5;
				} else {
					$Mk[$i]['Volume'] = $Mk[$i]['JumlahKredit'];
					$Mk[$i]['Kredit'] = '1';
					$Mk[$i]['JumlahKredit'] = $Mk[$i]['JumlahKredit'];
				}
				$Mk[$i]['Satuan'] = '10 sks Pertama';
			}
		}
		array_splice($Data['Pendidikan'],0,0,$Mk);
		usort($Data['Pendidikan'], function($a, $b) {return strnatcmp($a['IdKegiatan'], $b['IdKegiatan']);});
		$Data['Penelitian'] = $this->db->query("SELECT * FROM `RealisasiPenelitian` WHERE NIP = ".$NIP." AND JumlahKredit != '' AND Jenjang LIKE "."'%".$Jenjang."%'"." AND Semester LIKE "."'%".$Semester."%'"." AND Tahun >= ".$Tahun[0]." AND Tahun <= ".$Tahun[1]." ORDER BY SUBSTR(IdKegiatan FROM 1 FOR 3), CAST(SUBSTR(IdKegiatan FROM 4) AS UNSIGNED), SUBSTR(IdKegiatan FROM 4), Kode ASC")->result_array();
		$Data['Pengabdian'] = $this->db->query("SELECT * FROM `RealisasiPengabdian` WHERE NIP = ".$NIP." AND JumlahKredit != '' AND Jenjang LIKE "."'%".$Jenjang."%'"." AND Semester LIKE "."'%".$Semester."%'"." AND Tahun >= ".$Tahun[0]." AND Tahun <= ".$Tahun[1]." ORDER BY SUBSTR(IdKegiatan FROM 1 FOR 3), CAST(SUBSTR(IdKegiatan FROM 4) AS UNSIGNED), SUBSTR(IdKegiatan FROM 4), Kode ASC")->result_array();
		$Data['Penunjang'] = $this->db->query("SELECT * FROM `RealisasiPenunjang` WHERE NIP = ".$NIP." AND JumlahKredit != '' AND Jenjang LIKE "."'%".$Jenjang."%'"." AND Semester LIKE "."'%".$Semester."%'"." AND Tahun >= ".$Tahun[0]." AND Tahun <= ".$Tahun[1]." ORDER BY SUBSTR(IdKegiatan FROM 1 FOR 3), CAST(SUBSTR(IdKegiatan FROM 4) AS UNSIGNED), SUBSTR(IdKegiatan FROM 4), Kode ASC")->result_array();
		$Data['KreditPendidikan1a'] = $this->db->query("SELECT SUM(JumlahKredit) as Kredit FROM RealisasiPendidikan WHERE NIP = ".$NIP." AND IdKegiatan = 'PND1'"." AND Jenjang LIKE "."'%".$Jenjang."%'"." AND Semester LIKE "."'%".$Semester."%'"." AND Tahun >= ".$Tahun[0]." AND Tahun <= ".$Tahun[1])->row_array();
		$Data['KreditPendidikan1b'] = $this->db->query("SELECT SUM(JumlahKredit) as Kredit FROM RealisasiPendidikan WHERE NIP = ".$NIP." AND IdKegiatan = 'PND2'"." AND Jenjang LIKE "."'%".$Jenjang."%'"." AND Semester LIKE "."'%".$Semester."%'"." AND Tahun >= ".$Tahun[0]." AND Tahun <= ".$Tahun[1])->row_array();
		$Data['KreditPendidikan2'] = 0;
		for ($i=0; $i < count($Data['Pendidikan']); $i++) {
			if ($Data['Pendidikan'][$i]['IdKegiatan'] != 'PND1' && $Data['Pendidikan'][$i]['IdKegiatan'] != 'PND2') {
				$Data['KreditPendidikan2'] += $Data['Pendidikan'][$i]['JumlahKredit'];
			}
		}
		$Data['KreditPenelitian'] = $this->db->query("SELECT SUM(JumlahKredit) as Kredit FROM RealisasiPenelitian WHERE NIP = ".$NIP." AND JumlahKredit != '' AND Jenjang LIKE "."'%".$Jenjang."%'"." AND Semester LIKE "."'%".$Semester."%'"." AND Tahun >= ".$Tahun[0]." AND Tahun <= ".$Tahun[1])->row_array();
		$Data['KreditPengabdian'] = $this->db->query("SELECT SUM(JumlahKredit) as Kredit FROM RealisasiPengabdian WHERE NIP = ".$NIP." AND JumlahKredit != '' AND Jenjang LIKE "."'%".$Jenjang."%'"." AND Semester LIKE "."'%".$Semester."%'"." AND Tahun >= ".$Tahun[0]." AND Tahun <= ".$Tahun[1])->row_array();
		$Data['KreditPenunjang'] = $this->db->query("SELECT SUM(JumlahKredit) as Kredit FROM RealisasiPenunjang WHERE NIP = ".$NIP." AND JumlahKredit != '' AND Jenjang LIKE "."'%".$Jenjang."%'"." AND Semester LIKE "."'%".$Semester."%'"." AND Tahun >= ".$Tahun[0]." AND Tahun <= ".$Tahun[1])->row_array();
		$Tampung = $this->db->query("SELECT SUM(JumlahKredit) as Kredit,IdKegiatan FROM RealisasiPendidikan WHERE NIP = ".$NIP." AND JumlahKredit != '' AND Jenjang LIKE "."'%".$Jenjang."%'"." AND Semester LIKE "."'%".$Semester."%'"." AND Tahun >= ".$Tahun[0]." AND Tahun <= ".$Tahun[1]." GROUP BY IdKegiatan ORDER BY SUBSTR(IdKegiatan FROM 1 FOR 3), CAST(SUBSTR(IdKegiatan FROM 4) AS UNSIGNED), SUBSTR(IdKegiatan FROM 4)")->result_array();
		$Pendidikan = array();
		foreach ($Tampung as $key) {
			$Pendidikan[$key['IdKegiatan']] = $key['Kredit'];
		}
		$Data['UsulPendidikan'] = $Pendidikan;
		$Mengajar = 0;
		foreach ($Mk as $key) {
			$Mengajar += $key['JumlahKredit'];
		}
		$Data['Mengajar'] = $Mengajar;
		$Tampung = $this->db->query("SELECT SUM(JumlahKredit) as Kredit,IdKegiatan FROM RealisasiPenelitian WHERE NIP = ".$NIP." AND JumlahKredit != '' AND Jenjang LIKE "."'%".$Jenjang."%'"." AND Semester LIKE "."'%".$Semester."%'"." AND Tahun >= ".$Tahun[0]." AND Tahun <= ".$Tahun[1]." GROUP BY IdKegiatan ORDER BY SUBSTR(IdKegiatan FROM 1 FOR 3), CAST(SUBSTR(IdKegiatan FROM 4) AS UNSIGNED), SUBSTR(IdKegiatan FROM 4)")->result_array();
		$Penelitian = array();
		foreach ($Tampung as $key) {
			$Penelitian[$key['IdKegiatan']] = $key['Kredit'];
		}
		$Data['UsulPenelitian'] = $Penelitian;
		$Tampung = $this->db->query("SELECT SUM(JumlahKredit) as Kredit,IdKegiatan FROM RealisasiPengabdian WHERE NIP = ".$NIP." AND JumlahKredit != '' AND Jenjang LIKE "."'%".$Jenjang."%'"." AND Semester LIKE "."'%".$Semester."%'"." AND Tahun >= ".$Tahun[0]." AND Tahun <= ".$Tahun[1]." GROUP BY IdKegiatan ORDER BY SUBSTR(IdKegiatan FROM 1 FOR 3), CAST(SUBSTR(IdKegiatan FROM 4) AS UNSIGNED), SUBSTR(IdKegiatan FROM 4)")->result_array();
		$Pengabdian = array();
		foreach ($Tampung as $key) {
			$Pengabdian[$key['IdKegiatan']] = $key['Kredit'];
		}
		$Data['UsulPengabdian'] = $Pengabdian;
		$Tampung = $this->db->query("SELECT SUM(JumlahKredit) as Kredit,IdKegiatan FROM RealisasiPenunjang WHERE NIP = ".$NIP." AND JumlahKredit != '' AND Jenjang LIKE "."'%".$Jenjang."%'"." AND Semester LIKE "."'%".$Semester."%'"." AND Tahun >= ".$Tahun[0]." AND Tahun <= ".$Tahun[1]." GROUP BY IdKegiatan ORDER BY SUBSTR(IdKegiatan FROM 1 FOR 3), CAST(SUBSTR(IdKegiatan FROM 4) AS UNSIGNED), SUBSTR(IdKegiatan FROM 4)")->result_array();
		$Penunjang = array();
		foreach ($Tampung as $key) {
			$Penunjang[$key['IdKegiatan']] = $key['Kredit'];
		}
		$Data['UsulPenunjang'] = $Penunjang;
		if ($Jenjang != 'S1' && $Jenjang != 'S2') {
			if ($Semester != 'Ganjil' && $Semester != 'Genap') {
				$Data['Filter'] = $this->uri->segment('5').'_Ganjil_Genap_S1_S2';
			} else {
				$Data['Filter'] = $this->uri->segment('5').'_'.$Semester.'_S1_S2';
			}
		} else {
			if ($Semester != 'Ganjil' && $Semester != 'Genap') {
				$Data['Filter'] = $this->uri->segment('5').'_Ganjil_Genap_'.$Jenjang;
			} else {
				$Data['Filter'] = $this->uri->segment('5').'_'.$Semester.'_'.$Jenjang;
			}
		}
		$this->load->view('ExcelPO-PAK',$Data);
	}

	public function Lampiran(){
		$NIP = $this->session->userdata('NIP');
		$Jenjang = $this->uri->segment('3');
		$Semester = $this->uri->segment('4');
		$Tahun = explode('-',$this->uri->segment('5'));
		$Kegiatan = $this->uri->segment('6');
		if ($Kegiatan != 'Pendidikan') {
			$Data = $this->db->query("SELECT * FROM Realisasi".$Kegiatan."  WHERE NIP = ".$this->session->userdata('NIP')." AND JumlahKredit != '' AND Jenjang LIKE "."'%".$Jenjang."%'"." AND Semester LIKE "."'%".$Semester."%'"." AND Tahun >= ".$Tahun[0]." AND Tahun <= ".$Tahun[1]." ORDER BY SUBSTR(IdKegiatan FROM 1 FOR 3), CAST(SUBSTR(IdKegiatan FROM 4) AS UNSIGNED), SUBSTR(IdKegiatan FROM 4), Kode ASC")->result_array();
		} 
		else {
			$Data = $this->db->query("SELECT * FROM `RealisasiPendidikan` WHERE NIP = ".$NIP." AND JumlahKredit != '' AND IdKegiatan != 'PND3' AND Jenjang LIKE "."'%".$Jenjang."%'"." AND Semester LIKE "."'%".$Semester."%'"." AND Tahun >= ".$Tahun[0]." AND Tahun <= ".$Tahun[1]." ORDER BY SUBSTR(IdKegiatan FROM 1 FOR 3), CAST(SUBSTR(IdKegiatan FROM 4) AS UNSIGNED), SUBSTR(IdKegiatan FROM 4), Kode ASC")->result_array();
			$Sortir = $this->db->query("SELECT DISTINCT Jenjang,Semester,Tahun FROM RealisasiPendidikan WHERE NIP = ".$NIP." AND IdKegiatan = 'PND3' AND Jenjang LIKE "."'%".$Jenjang."%'"." AND Semester LIKE "."'%".$Semester."%'"." AND Tahun >= ".$Tahun[0]." AND Tahun <= ".$Tahun[1])->result_array();
			$data = $this->db->query("SELECT * FROM RealisasiPendidikan WHERE NIP = ".$NIP." AND IdKegiatan = 'PND3' AND Jenjang LIKE "."'%".$Jenjang."%'"." AND Semester LIKE "."'%".$Semester."%'"." AND Tahun >= ".$Tahun[0]." AND Tahun <= ".$Tahun[1])->result_array();
			$Mk = array();
			for ($i=0; $i < count($Sortir); $i++) { 
				$Cek = true;
				for ($j=0; $j < count($data); $j++) {
					if ($Sortir[$i]['Jenjang'] == $data[$j]['Jenjang'] && $Sortir[$i]['Semester'] == $data[$j]['Semester'] && $Sortir[$i]['Tahun'] == $data[$j]['Tahun']) {
						if ($Cek) {
							$Mk[$i] = $data[$j];
							$Cek = false;
						} 
						else {
							$Mk[$i]['Kegiatan'] .= ', '.$data[$j]['Kegiatan'];
							$Mk[$i]['JumlahKredit'] += $data[$j]['JumlahKredit'];
						}
					} 
				}
			}
			for ($i=0; $i < count($Mk); $i++) {
				if ($Mk[$i]['JumlahKredit'] > 10) {
					if ($Mk[$i]['Jabatan'] == 'Asisten Ahli') {
						$Mk[$i]['Volume'] = $Mk[$i]['JumlahKredit'];
						$Mk[$i]['Kredit'] = '0.5 & 0.25';
						$Mk[$i]['JumlahKredit'] = 5+(($Mk[$i]['JumlahKredit']-10)*0.25);
					} else {
						$Mk[$i]['Volume'] = $Mk[$i]['JumlahKredit'];
						$Mk[$i]['Kredit'] = '1 & 0.5';
						$Mk[$i]['JumlahKredit'] = 10+(($Mk[$i]['JumlahKredit']-10)*0.5);
					}
					$Mk[$i]['Satuan'] = '10 sks Pertama & 2 sks Berikutnya';
				} else {
					if ($Mk[$i]['Jabatan'] == 'Asisten Ahli') {
						$Mk[$i]['Volume'] = $Mk[$i]['JumlahKredit'];
						$Mk[$i]['Kredit'] = '0.5';
						$Mk[$i]['JumlahKredit'] = $Mk[$i]['JumlahKredit']*0.5;
					} else {
						$Mk[$i]['Volume'] = $Mk[$i]['JumlahKredit'];
						$Mk[$i]['Kredit'] = '1';
						$Mk[$i]['JumlahKredit'] = $Mk[$i]['JumlahKredit'];
					}
					$Mk[$i]['Satuan'] = '10 sks Pertama';
				}
			}
			array_splice($Data,0,0,$Mk);
			usort($Data, function($a, $b) {return strnatcmp($a['IdKegiatan'], $b['IdKegiatan']);});
		}
		echo json_encode($Data);
	}

	public function BKD(){
		$NIP = $this->session->userdata('NIP');
		$Jenjang = $this->uri->segment('3');
		$Semester = $this->uri->segment('4');
		$Tahun = explode('-',$this->uri->segment('5'));
		$Data['Pendidikan'] = $this->db->query("SELECT * FROM RealisasiPendidikan WHERE NIP = ".$NIP." AND KreditBkd != ''"." AND Jenjang LIKE "."'%".$Jenjang."%'"." AND Semester LIKE "."'%".$Semester."%'"." AND Tahun >= ".$Tahun[0]." AND Tahun <= ".$Tahun[1])->result_array();
		$Data['Penelitian'] = $this->db->query("SELECT * FROM RealisasiPenelitian WHERE NIP = ".$NIP." AND KreditBkd != ''"." AND Jenjang LIKE "."'%".$Jenjang."%'"." AND Semester LIKE "."'%".$Semester."%'"." AND Tahun >= ".$Tahun[0]." AND Tahun <= ".$Tahun[1])->result_array();
		$Data['Pengabdian'] = $this->db->query("SELECT * FROM RealisasiPengabdian WHERE NIP = ".$NIP." AND KreditBkd != ''"." AND Jenjang LIKE "."'%".$Jenjang."%'"." AND Semester LIKE "."'%".$Semester."%'"." AND Tahun >= ".$Tahun[0]." AND Tahun <= ".$Tahun[1])->result_array();
		$Data['Penunjang'] = $this->db->query("SELECT * FROM RealisasiPenunjang WHERE NIP = ".$NIP." AND KreditBkd != ''"." AND Jenjang LIKE "."'%".$Jenjang."%'"." AND Semester LIKE "."'%".$Semester."%'"." AND Tahun >= ".$Tahun[0]." AND Tahun <= ".$Tahun[1])->result_array();
		if ($Jenjang != 'S1' && $Jenjang != 'S2') {
			if ($Semester != 'Ganjil' && $Semester != 'Genap') {
				$Data['Filter'] = $this->uri->segment('5').'_Ganjil_Genap_S1_S2';
			} else {
				$Data['Filter'] = $this->uri->segment('5').'_'.$Semester.'_S1_S2';
			}
		} else {
			if ($Semester != 'Ganjil' && $Semester != 'Genap') {
				$Data['Filter'] = $this->uri->segment('5').'_Ganjil_Genap_'.$Jenjang;
			} else {
				$Data['Filter'] = $this->uri->segment('5').'_'.$Semester.'_'.$Jenjang;
			}
		}
		$this->load->view('ExcelBKD',$Data);
	}

	public function LampiranBKD(){
		$NIP = $this->session->userdata('NIP');
		$Jenjang = $this->uri->segment('3');
		$Semester = $this->uri->segment('4');
		$Tahun = explode('-',$this->uri->segment('5'));
		$Kegiatan = $this->uri->segment('6');
		$Data = $this->db->query("SELECT * FROM Realisasi".$Kegiatan."  WHERE NIP = ".$NIP." AND KreditBkd != '' AND Jenjang LIKE "."'%".$Jenjang."%'"." AND Semester LIKE "."'%".$Semester."%'"." AND Tahun >= ".$Tahun[0]." AND Tahun <= ".$Tahun[1])->result_array();
		echo json_encode($Data);
	}
}