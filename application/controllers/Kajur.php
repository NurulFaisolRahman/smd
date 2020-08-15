<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Kajur extends CI_Controller {

	// function __construct(){
	// 	parent::__construct();
	// 	if(!$this->session->userdata('Login') && $this->session->userdata('Akun') != 'Kajur'){
	// 		redirect(base_url());
	// 	}
	// }
 
  public function Monitoring(){ 
		$Bidang = $this->uri->segment('3');
		$Data['Halaman'] = 'Monitoring '.$Bidang;
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
    $this->load->view('HeaderKajur',$Data);
    $this->load->view('Monitoring'.$Bidang,$Data); 
	}
	
	public function InputTarget(){
		$this->db->where('No', $_POST['No']);
		$this->db->update($_POST['Bidang'],array('TargetKajur' => $_POST['Target']));
		echo '1';
	}
}