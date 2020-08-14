<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		if(!$this->session->userdata('Login') && $this->session->userdata('Akun') != 'Admin'){
			redirect(base_url());
		}
	} 
 
  public function AkunDosen(){
		$Data['Halaman'] = 'Akun Dosen';
		$Data['Kajur'] = $this->db->query('SELECT Dosen.NIP,Dosen.Nama,Akun.JenisAkun FROM Akun,Dosen WHERE Akun.NIP=Dosen.NIP')->result_array();
    $this->load->view('HeaderAdmin',$Data);
    $this->load->view('AkunDosen',$Data); 
  }

  public function Daftar(){
		if($this->db->get_where('Dosen', array('NIP' => $_POST['NIP']))->num_rows() === 0){
			$this->db->insert('Dosen',
						array('NIP' => $_POST['NIP'], 
									'NIDN' => $_POST['NIDN'],
									'Nama' => $_POST['Nama'],
									'Jabatan' => $_POST['Jabatan'],
									'Pangkat' => $_POST['Pangkat'],
									'Golongan' => $_POST['Golongan']));
			$this->db->insert('Akun',array('NIP' => $_POST['NIP'],'Password' => password_hash($_POST['Password'], PASSWORD_DEFAULT),'JenisAkun' => '1'));
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
}