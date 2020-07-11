<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SMD extends CI_Controller {

	public function index(){
		$this->load->view('Home');
	}

	public function Masuk(){
		$CekLogin = $this->db->get_where('Akun', array('NIP' => $_POST['NIP']));
		if($CekLogin->num_rows() == 0){
			echo "NIP Salah";
		}
		else{
			$Akun = $CekLogin->result_array();
			if (password_verify($_POST['Password'], $Akun[0]['Password'])) {
				$Session = array('Login' => true, 'NIP' => $_POST['NIP']);
				$this->session->set_userdata($Session);
				echo '1';
			} else {
				echo "Password Salah";
			}
		}
	}

	public function Daftar(){
		if($this->db->get_where('Akun', array('NIP' => $_POST['NIP']))->num_rows() === 0){
			$this->db->insert('Dosen',array('NIP' => $_POST['NIP']));
			$this->db->insert('Akun',
						array('NIP' => $_POST['NIP'],
									'Password' => password_hash($_POST['Password'], PASSWORD_DEFAULT)));
			$Session = array('Login' => true, 'NIP' => $_POST['NIP']);
			$this->session->set_userdata($Session);	
			echo '1';
		} else{
			echo "NIP Sudah Ada!";
		}
	}

	public function SignOut(){
		$this->session->sess_destroy();
		redirect(base_url());
	}
}
