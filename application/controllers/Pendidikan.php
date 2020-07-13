<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendidikan extends CI_Controller {

	function __construct(){
		parent::__construct();
		if(!$this->session->userdata('Login')){
			redirect(base_url());
		}
	}

	public function Input(){
		$NIP = $this->session->userdata('NIP');
		$Jabatan = $this->session->userdata('Jabatan');
		if ($_POST['ID'] == 'PND3') {
			if ($_POST['Volume'] > 10) {
				if ($Jabatan == 'Asisten Ahli') {
					$JumlahKredit = (10*0.5)+(($_POST['Volume']-10)*0.25);
					$Kredit = '0.5 & 0.25';
				} else {
					$JumlahKredit = (10*1)+(($_POST['Volume']-10)*0.5);
					$Kredit = '1 & 0.5';
				}
				$Volume = '10 SKS Pertama & 2 SKS Berikutnya';
			} else {
				if ($Jabatan == 'Asisten Ahli') {
					$JumlahKredit = $_POST['Volume']*0.5;
					$Kredit = '0.5';
				} else {
					$JumlahKredit = $_POST['Volume']*1;
					$Kredit = '1';
				}
				$Volume = '10 SKS Pertama';
			}
		}
    if ($this->db->insert('Pendidikan',
                array('NIP' => $NIP, 
                      'ID' => $_POST['ID'],
                      'Kegiatan' => $_POST['Kegiatan'],
                      'Tanggal' => $_POST['Tanggal'],
                      'Satuan' => $Volume,
											'Volume' => $_POST['Volume'],
											'Kredit' => $Kredit,
											'JumlahKredit' => $JumlahKredit))) {
			$this->session->set_userdata('Pendidikan', $_POST['ID']);
			echo '1';
		} else {
			echo '0';
		}
	}
}