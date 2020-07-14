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
		if ($_POST['ID'] == 'PND1') {
			$Volume = '';
			$JumlahKredit = $Kredit = $_POST['Jenjang'];
		}
		else if ($_POST['ID'] == 'PND2') {
			$Volume = '';
			$JumlahKredit = $Kredit = 3;
		}
		else if ($_POST['ID'] == 'PND3') {
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
					$JumlahKredit = $_POST['Volume'];
					$Kredit = '1';
				}
				$Volume = '10 SKS Pertama';
			}
		}
		else if ($_POST['ID'] == 'PND4' || $_POST['ID'] == 'PND5') {
			$Volume = '';
			$JumlahKredit = $Kredit = 1;
		}
		else if ($_POST['ID'] == 'PND7') {
			if ($_POST['JenisPenguji'] == '1') {
				$Volume = '4 lulusan/semester';
				$JumlahKredit = $_POST['Volume'];
				$Kredit = '1';
			}
			else {
				$Volume = '8 lulusan/semester';
				$JumlahKredit = $_POST['Volume']*0.5;
				$Kredit = '0.5';
			}
		}
		else if ($_POST['ID'] == 'PND8') {
			$Volume = '2 kegiatan /semester';
			$JumlahKredit = $_POST['Volume']*2;
			$Kredit = 2;
		}
		else if ($_POST['ID'] == 'PND9') {
			$Volume = '1 mata kuliah /semester';
			$JumlahKredit = $_POST['Volume']*2;
			$Kredit = 2;
		}
		else if ($_POST['ID'] == 'PND11') {
			$Volume = '2 orasi/semester';
			$JumlahKredit = $_POST['Volume']*5;
			$Kredit = 5;
		}
		else if ($_POST['ID'] == 'PND13') {
			if ($_POST['JenisPND13'] == '1') {
				$Volume = '1 Orang';
				$JumlahKredit = $_POST['Volume']*2;
				$Kredit = '2';
			}
			else {
				$Volume = '1 Orang';
				$JumlahKredit = $_POST['Volume'];
				$Kredit = '1';
			}
		}
		else if ($_POST['ID'] == 'PND14') {
			if ($_POST['JenisPND14'] == '1') {
				$Volume = '1 Orang';
				$JumlahKredit = $_POST['Volume']*5;
				$Kredit = '5';
			}
			else {
				$Volume = '1 Orang';
				$JumlahKredit = $_POST['Volume']*4;
				$Kredit = '4';
			}
		}
		$this->db->insert('Pendidikan',
                array('NIP' => $NIP, 
                      'ID' => $_POST['ID'],
                      'Kegiatan' => $_POST['Kegiatan'],
                      'Tanggal' => $_POST['Tanggal'],
                      'Satuan' => $Volume,
											'Volume' => $_POST['Volume'],
											'Kredit' => $Kredit,
											'JumlahKredit' => $JumlahKredit));
		if ($this->db->affected_rows()){
			$this->session->set_userdata('Pendidikan', $_POST['ID']);
			echo '1';
		} else {
			echo '0';
		}
	}
}