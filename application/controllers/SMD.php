<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SMD extends CI_Controller {

	public function index(){
		if($this->session->userdata('Login')){
			redirect(base_url('Dashboard/Profil'));
		} else {
			$this->load->view('Home');
		}
	}

	public function Masuk(){
		$CekLogin = $this->db->get_where('Akun', array('NIP' => $_POST['NIP']));
		if($CekLogin->num_rows() == 0){
			echo "NIP Salah";
		}
		else{
			$Akun = $CekLogin->result_array();
			if (password_verify($_POST['Password'], $Akun[0]['Password'])) {
				$Jabatan = $this->db->get_where('Dosen', array('NIP' => $_POST['NIP']))->result_array();
				$Session = array('Login' => true, 
												 'NIP' => $_POST['NIP'], 
												 'Jabatan' => $Jabatan[0]['Jabatan'],
												 'Pendidikan' => 'PND1');
				$this->session->set_userdata($Session);
				echo '1';
			} else {
				echo "Password Salah";
			}
		}
	}

	public function Daftar(){
		if($this->db->get_where('Dosen', array('NIP' => $_POST['NIP']))->num_rows() === 0){
			$Pecah = explode('/',$_POST['Pangkat']);
			$this->db->insert('Dosen',
						array('NIP' => $_POST['NIP'], 
									'Nama' => $_POST['Nama'],
									'Jabatan' => $Pecah[0],
									'Pangkat' => $Pecah[1],
									'Golongan' => $Pecah[2]));
			$this->db->insert('Akun',
						array('NIP' => $_POST['NIP'],
									'Password' => password_hash($_POST['Password'], PASSWORD_DEFAULT)));
			$Session = array('Login' => true, 
											 'NIP' => $_POST['NIP'], 
											 'Jabatan' => $Pecah[0],
											 'Pendidikan' => 'PND1');
			$this->session->set_userdata($Session);	
			echo '1';
		} else{
			echo "NIP Telah Terdaftar!";
		}
	}

	public function SignOut(){
		$this->session->sess_destroy();
		redirect(base_url());
	}
}
