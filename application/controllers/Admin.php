<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		if($this->session->userdata('Akun') != 'Admin'){
			if ($this->session->userdata('Akun') == 'Dosen') {
				redirect(base_url('Dashboard/Profil'));
			} 
			else {
				redirect(base_url());
			}
		}
	}  
 
  public function AkunDosen(){
		$Data['Halaman'] = 'Akun Dosen';
		$Data['Dosen'] = $this->db->query('SELECT Dosen.NIP,Dosen.Nama,Dosen.Pangkat,Dosen.Golongan,Dosen.Jabatan,Akun.JenisAkun FROM Akun,Dosen WHERE Akun.NIP=Dosen.NIP')->result_array();
    $this->load->view('HeaderAdmin',$Data);
    $this->load->view('AkunDosen',$Data); 
  }

  public function Daftar(){
		if($this->db->get_where('Dosen', array('NIP' => $_POST['NIP']))->num_rows() === 0){
			$this->db->insert('Dosen',
						array('NIP' => $_POST['NIP'], 
									'NIDN' => $_POST['NIDN'],
									'Nama' => htmlentities($_POST['Nama']),
									'Jabatan' => $_POST['Jabatan'],
									'Pangkat' => $_POST['Pangkat'],
									'Golongan' => $_POST['Golongan'],
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
									'MengajarPS' => $_POST['MengajarPS'],
									'MengajarPSLain' => $_POST['MengajarPSLain']));
			$this->db->insert('Akun',array('NIP' => $_POST['NIP'],'Password' => password_hash($_POST['NIP'], PASSWORD_DEFAULT),'JenisAkun' => '1'));
			echo '1';
		} else{
			echo "Akun Dosen Dengan NIP ".$_POST['NIP']." Sudah Ada!";
		}
	}

	public function Kajur(){
		$this->db->where('JenisAkun', 2);
		$this->db->update('Akun',array('JenisAkun' => 1));
		$this->db->where('NIP', $_POST['NIP']);
		$this->db->update('Akun',array('JenisAkun' => 2));
	}
	
	public function Borang(){
		$Data['Dosen'] = $this->db->get('Dosen')->result_array();
		$this->load->view('ExcelBorang3a1',$Data);
  }
}