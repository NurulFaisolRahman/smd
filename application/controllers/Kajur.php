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
		// $TahunKreditLama = $this->db->query("SELECT Tahun FROM Dosen WHERE NIP=".$NIP)->row_array();
		$Bidang = array('Pendidikan','Penelitian','Pengabdian','Penunjang');
		$TotalKredit = 0;
		$Data['KreditBaru'] = array();
		foreach ($Data['Dosen'] as $key) {
			for ($i=0; $i < 4; $i++) { 
				$TotalKredit += $this->db->query("SELECT SUM(JumlahKredit) AS JumlahKredit FROM Realisasi".$Bidang[$i]." WHERE NIP=".$key['NIP'])->row_array()['JumlahKredit'];
			}
			array_push($Data['KreditBaru'],$TotalKredit);
			$TotalKredit = 0;
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