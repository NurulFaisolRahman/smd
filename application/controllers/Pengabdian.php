<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengabdian extends CI_Controller {

	function __construct(){
		parent::__construct();
		if(!$this->session->userdata('Login')){
			redirect(base_url());
		}
	}

	public function InputRencana(){
		$NIP = $this->session->userdata('NIP');
		$Jabatan = $this->session->userdata('Jabatan');
		if($this->db->get_where('RencanaPengabdian', array('Jenjang' => $_POST['Jenjang'],'Semester' => $_POST['Semester'],'Tahun' => $_POST['Tahun']))->num_rows() === 0){
			$this->db->insert('RencanaPengabdian',
								array('NIP' => $NIP, 
											'Jabatan' => $Jabatan,
											'Jenjang' => $_POST['Jenjang'],
											'Semester' => $_POST['Semester'],
											'Tahun' => $_POST['Tahun'],
											'KodeRencana' => $_POST['Kode'],
											'TotalKredit' => $_POST['Total']));
			if ($this->db->affected_rows()){
				echo '1';
			} else {
				echo 'Gagal Menyimpnan';
			}
		}
		else {
			echo 'Data Rencana Pengabdian Homebase '.$_POST['Jenjang'].' Semester '.$_POST['Semester'].' Tahun '.$_POST['Tahun'].' Telah Ada';
		}
  }

  public function EditRencana(){
		$this->db->where('No', $_POST['No']);
    $this->db->update('RencanaPengabdian', 
                array('Jenjang' => $_POST['Jenjang'],
                      'Semester' => $_POST['Semester'],
                      'Tahun' => $_POST['Tahun'],
                      'KodeRencana' => $_POST['Kode'],
                      'TotalKredit' => $_POST['Total']));
    if ($this->db->affected_rows()){
      echo '1';
    } else {
      echo 'Gagal Menyimpnan';
    }
	}

	public function HapusRencana(){
		$this->db->delete('RencanaPengabdian', array('No' => $_POST['No']));
		if ($this->db->affected_rows()){
			echo '1';
		} else {
			echo 'Gagal Menghapus';
		}
	}
}