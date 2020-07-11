<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct(){
		parent::__construct();
		if(!$this->session->userdata('Login')){
			redirect(base_url());
		}
	}

	public function Profil(){
		$NIP = $this->session->userdata('NIP');
    $Data['Halaman'] = 'Profil';
    $Data['SubMenu'] = '';
    $Data['Profil'] = $this->db->get_where('Dosen', array('NIP' => $NIP))->row_array();
		$this->load->view('Header',$Data);
		$this->load->view('Profil',$Data);
	}

	public function EditProfil(){
    $this->db->where('NIP', $this->session->userdata('NIP'));
    $Pecah = explode('/',$_POST['Pangkat']);
		if ($this->db->update('Dosen',
                array('NIP' => $_POST['NIP'], 
                      'Nama' => $_POST['Nama'],
                      'Jabatan' => $Pecah[0],
                      'Pangkat' => $Pecah[1],
                      'Golongan' => $Pecah[2]))) {
			$this->session->set_userdata('NIP', $_POST['NIP']);
			echo '1';
		} else {
			echo '0';
		}
  }
  
  public function Pendidikan(){
		$NIP = $this->session->userdata('NIP');
    $Data['Halaman'] = 'Kegiatan';
    $Data['SubMenu'] = 'Pendidikan';
    // $Data['Profil'] = $this->db->get_where('Dosen', array('NIP' => $NIP))->row_array();
		$this->load->view('Header',$Data);
		$this->load->view('Pendidikan',$Data);
	}
}