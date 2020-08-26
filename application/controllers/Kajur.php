<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Kajur extends CI_Controller {

	function __construct(){
		parent::__construct();
		if (!$this->session->userdata('Kajur')) { 
			if ($this->session->userdata('Akun') == 'Dosen') {
				redirect(base_url('Dashboard/Profil'));
			} 
			else if ($this->session->userdata('Akun') == 'Admin') {
				redirect(base_url('Admin/AkunDosen'));
			}
			else {
				redirect(base_url());
			}
		} 
	}
 
  public function Monitoring(){ 
		$Bidang = $this->uri->segment('3');
		$Data['Halaman'] = 'Monitoring';
		$Data['SubMenu'] = 'Monitoring '.$Bidang;
		$Data['Rencana'] = $this->db->get('Rencana'.$Bidang)->result_array();
		$Data['Dosen'] = $this->db->query("SELECT Dosen.Nama FROM Dosen WHERE Dosen.NIP in (SELECT Rencana".$Bidang.".NIP FROM Rencana".$Bidang.")")->result_array();
		$Data['Realisasi'] = array();
		foreach ($Data['Rencana'] as $key) {
			$Tampung = $this->db->get_where('Realisasi'.$Bidang, array('NIP' => $key['NIP'],'Jenjang' => $key['Jenjang'],'Semester' => $key['Semester'],'Tahun' => $key['Tahun']))->result_array();
			$Total = 0;
			foreach ($Tampung as $data) {
				$Total+=$data['JumlahKredit'];
			}
			array_push($Data['Realisasi'],$Total);
		}
    $this->load->view('Header',$Data);
    $this->load->view('Monitoring'.$Bidang,$Data); 
	}
	
	public function KreditDosen(){
		$Data['Halaman'] = 'Monitoring';
		$Data['SubMenu'] = 'Kredit Dosen';
		$Data['Dosen'] = $this->db->get('Dosen')->result_array(); 
		$Bidang = array('Penelitian','Pengabdian','Penunjang');
		$Data['KreditBaru'] = array();
		$KreditBaru = 0;
		foreach ($Data['Dosen'] as $key) {
			for ($i=0; $i < 3; $i++) { 
				$TahunKreditLama = $this->db->query("SELECT Tahun FROM Dosen WHERE NIP=".$key['NIP'])->row_array()['Tahun'];
				$KreditBaru += $this->db->query("SELECT SUM(JumlahKredit) AS JumlahKredit FROM Realisasi".$Bidang[$i]." WHERE NIP=".$key['NIP']." AND JumlahKredit != '' AND Tahun > ".$TahunKreditLama)->row_array()['JumlahKredit'];
			}
			array_push($Data['KreditBaru'],$KreditBaru);
			$KreditBaru = 0;
		}
		for ($k=0; $k < count($Data['Dosen']); $k++) { 
			$TahunKreditLama = $this->db->query("SELECT Tahun FROM Dosen WHERE NIP=".$Data['Dosen'][$k]['NIP'])->row_array()['Tahun'];
			$Data['KreditBaru'][$k] += $this->db->query("SELECT SUM(JumlahKredit) AS JumlahKredit FROM `RealisasiPendidikan` WHERE NIP = ".$Data['Dosen'][$k]['NIP']." AND JumlahKredit != '' AND IdKegiatan != 'PND3' AND Tahun > ".$TahunKreditLama)->row_array()['JumlahKredit'];
			$Sortir = $this->db->query("SELECT DISTINCT Jenjang,Semester,Tahun FROM RealisasiPendidikan WHERE NIP = ".$Data['Dosen'][$k]['NIP']." AND IdKegiatan = 'PND3' AND Tahun > ".$TahunKreditLama)->result_array();
			$data = $this->db->query("SELECT * FROM RealisasiPendidikan WHERE NIP = ".$Data['Dosen'][$k]['NIP']." AND IdKegiatan = 'PND3' AND Tahun > ".$TahunKreditLama)->result_array();
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
				$Data['KreditBaru'][$k] += $Mk[$i]['JumlahKredit'];
			} 
		}
		$this->load->view('Header',$Data);
    $this->load->view('KreditDosen',$Data); 
	}

	public function InputTarget(){
		$this->db->where('No', $_POST['No']);
		$this->db->update($_POST['Bidang'],array('TargetKajur' => $_POST['Target']));
		echo '1';
	}
}