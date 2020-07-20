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
		$this->db->update('Dosen',
										array('NIP' => $_POST['NIP'], 
													'NIDN' => $_POST['NIDN'],
													'Nama' => $_POST['Nama'],
													'Jabatan' => $_POST['Jabatan'],
													'Pangkat' => $_POST['Pangkat'],
													'Golongan' => $_POST['Golongan']));
		if ($this->db->affected_rows()) {
			$this->session->set_userdata('NIP', $_POST['NIP']);
			$this->session->set_userdata('Jabatan', $_POST['Jabatan']);
			echo '1';
		} else {
			echo 'Gagal Update Data';
		}
  }
  
  public function Pendidikan(){
    $Data['Halaman'] = 'Kegiatan';
		$Data['SubMenu'] = 'Pendidikan';		
		$NIP = $this->session->userdata('NIP');
		$ID = $this->session->userdata('IdKegiatanPendidikan');
		$Data['Rencana'] = $this->db->get_where('RencanaPendidikan', array('NIP' => $NIP))->result_array();
		$Data['Realisasi'] = $this->db->get_where('RealisasiPendidikan', array('NIP' => $NIP,'IdKegiatan' => $ID))->result_array();
		$this->load->view('Header',$Data);
		$this->load->view('Pendidikan',$Data);
	}

	public function LihatRealisasiPendidikan(){
		$this->session->set_userdata('IdKegiatanPendidikan', $_POST['ID']);
	}

	public function SubPendidikan(){
		$this->session->set_userdata('SubPendidikan', $_POST['SubPendidikan']);
	}
}