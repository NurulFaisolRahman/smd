<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SMD extends CI_Controller {

	public function index(){
		if ($this->session->userdata('Akun') == 'Dosen') {
			redirect(base_url('Dashboard/Profil'));
		} 
		else if ($this->session->userdata('Akun') == 'Admin') {
			redirect(base_url('Admin/AkunDosen'));
		} 
		else {
			$this->load->view('Home');
		}
	}

	public function Kuisioner($Jenis){
		if ($Jenis == 'KepuasanMahasiswa') {
			$this->load->view('KepuasanMahasiswa');
		} else if ($Jenis == 'PrestasiMahasiswa') {
			$this->load->view('PrestasiMahasiswa');
		}
	}

	public function InsertKuisioner($Tabel,$Data){
		$this->db->insert($Tabel,$Data);
		if ($this->db->affected_rows()){
			echo '1';
		} else {
			echo 'Gagal Mengirim Survei!';
		}
	}

	public function InputKuisioner($Jenis){
		if ($Jenis == 'KepuasanMahasiswa') {
			$this->InsertKuisioner('kepuasanmahasiswa',$_POST);
		} else if ($Jenis == 'PrestasiMahasiswa') {
			$_POST['NamaPrestasi'] = htmlentities($_POST['NamaPrestasi']);
			$_POST['CapaianPrestasi'] = htmlentities($_POST['CapaianPrestasi']);
			$this->InsertKuisioner('prestasimahasiswa',$_POST);
		}
	}

	public function Masuk(){
		$CekLogin = $this->db->get_where('Akun', array('NIP' => htmlentities($_POST['NIP'])));
		if($CekLogin->num_rows() == 0){
			echo "NIP Salah";
		}
		else{
			$Akun = $CekLogin->result_array();
			if (password_verify($_POST['Password'], $Akun[0]['Password'])) {
				$Jabatan = $this->db->get_where('Dosen', array('NIP' => $_POST['NIP']))->result_array();
				$Session = array('Akun' => 'Dosen',
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
				if ($Akun[0]['JenisAkun'] == 2) {
					$Session['Kajur'] = true;
				}
				$this->session->set_userdata($Session);
				echo '1';
			} else {
				echo "Password Salah";
			}
		}
	}

	public function AdminMasuk(){
		$CekLogin = $this->db->get_where('Admin', array('Username' => htmlentities($_POST['NIP'])));
		if($CekLogin->num_rows() == 0){
			echo "Username Admin Salah!";
		}
		else{
			$Akun = $CekLogin->result_array();
			if (password_verify($_POST['Password'], $Akun[0]['Password'])) {
				$Session = array('Akun' => 'Admin');
				$this->session->set_userdata($Session);
				echo '1';
			} else {
				echo "Password Salah";
			}
		}
	}

	public function SignOut(){
		$this->session->sess_destroy();
		redirect(base_url());
	}
}
