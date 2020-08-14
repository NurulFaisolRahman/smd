<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Kajur extends CI_Controller {

	// function __construct(){
	// 	parent::__construct();
	// 	if(!$this->session->userdata('Login') && $this->session->userdata('Akun') != 'Kajur'){
	// 		redirect(base_url());
	// 	}
	// }
 
  public function MonitoringPendidikan(){ 
		$Data['Halaman'] = 'Monitoring Dosen';
		$Data['Rencana'] = $this->db->get('RencanaPendidikan')->result_array();
		$Data['Dosen'] = $this->db->query('SELECT Dosen.Nama FROM Dosen WHERE Dosen.NIP in (SELECT RencanaPendidikan.NIP FROM RencanaPendidikan)')->result_array();
		$Data['Realisasi'] = array();
		foreach ($Data['Rencana'] as $key) {
			$Tampung = $this->db->get_where('RealisasiPendidikan', array('NIP' => $key['NIP'],'Jenjang' => $key['Jenjang'],'Semester' => $key['Semester'],'Tahun' => $key['Tahun']))->result_array();
			$Total = 0;
			foreach ($Tampung as $data) {
				$Total+=$data['JumlahKredit'];
			}
			array_push($Data['Realisasi'],$Total);
		}
    $this->load->view('HeaderKajur',$Data);
    $this->load->view('MonitoringPendidikan',$Data); 
  }
}