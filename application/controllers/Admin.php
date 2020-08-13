<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
 
  public function AkunDosen(){
    $Data['Halaman'] = 'Akun Dosen';
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
}