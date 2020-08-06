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
												 'IdKegiatanPendidikan' => 'PND1',
												 'IdKegiatanPenelitian' => 'PNL1',
												 'IdKegiatanPengabdian' => 'PNB1',
												 'IdKegiatanPenunjang' => 'PNJ1',
												 'SubPendidikan' => 'Rencana',
												 'SubPenelitian' => 'Rencana',
												 'SubPengabdian' => 'Rencana',
												 'SubPenunjang' => 'Rencana');
				$this->session->set_userdata($Session);
				echo '1';
			} else {
				echo "Password Salah";
			}
		}
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
			$this->db->insert('Akun',
						array('NIP' => $_POST['NIP'],
									'Password' => password_hash($_POST['Password'], PASSWORD_DEFAULT)));
			$Session = array('Login' => true, 
											 'NIP' => $_POST['NIP'], 
											 'Jabatan' => $_POST['Jabatan'],
											 'IdKegiatanPendidikan' => 'PND1',
											 'IdKegiatanPenelitian' => 'PNL1',
											 'IdKegiatanPengabdian' => 'PNB1',
											 'IdKegiatanPenunjang' => 'PNJ1',
											 'SubPendidikan' => 'Rencana',
											 'SubPenelitian' => 'Rencana',
											 'SubPengabdian' => 'Rencana',
											 'SubPenunjang' => 'Rencana');
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

	public function tes(){
		$this->load->view('tes');
	}
}
