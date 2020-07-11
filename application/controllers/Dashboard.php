<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct(){
		parent::__construct();
		if(!$this->session->userdata('Login')){
			redirect(base_url());
		}
	}

	public function index(){
		$NIP = $this->session->userdata('NIP');
		$Data['Halaman'] = 'Profil';
		$Data['Dosen'] = $this->db->get_where('Dosen', array('NIP' => $NIP))->row_array();
		$this->load->view('Header',$Data);
		$this->load->view('Profil',$Data);
	}

	public function EditProfil(){
		$this->db->where('NIP', $this->session->userdata('NIP'));
		if ($this->db->update('Dosen',$_POST)) {
			$this->session->set_userdata('NIP', $_POST['NIP']);
			echo '1';
		} else {
			echo '0';
		}
	}

	public function Pendidikan(){
		$Data['Halaman'] = 'Pendidikan';
		$Data['Pendidikan'] = $this->db->get_where('Pendidikan', array('NIP' => $this->session->userdata('NIP')))->result_array();
		$this->load->view('Header',$Data);
		$this->load->view('Pendidikan',$Data);
	}

	public function MataKuliah(){
		$Data['Halaman'] = 'MataKuliah';
		$Data['MataKuliah'] = $this->db->get_where('MataKuliah', array('NIP' => $this->session->userdata('NIP')))->result_array();
		$this->load->view('Header',$Data);
		$this->load->view('MataKuliah',$Data);
	}

	public function KaryaIlmiah(){
		$Data['Halaman'] = 'KaryaIlmiah';
		$Data['KaryaIlmiah'] = $this->db->get_where('KaryaIlmiah', array('NIP' => $this->session->userdata('NIP')))->result_array();
		$this->load->view('Header',$Data);
		$this->load->view('KaryaIlmiah',$Data);
	}

	public function Pengabdian(){
		$Data['Halaman'] = 'Pengabdian';
		$Data['Pengabdian'] = $this->db->get_where('Pengabdian', array('NIP' => $this->session->userdata('NIP')))->result_array();
		$this->load->view('Header',$Data);
		$this->load->view('Pengabdian',$Data);
	}

	public function Seminar(){
		$Data['Halaman'] = 'Seminar';
		$Data['Seminar'] = $this->db->get_where('Seminar', array('NIP' => $this->session->userdata('NIP')))->result_array();
		$this->load->view('Header',$Data);
		$this->load->view('Seminar',$Data);
	}
}
