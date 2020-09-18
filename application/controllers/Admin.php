<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		if($this->session->userdata('Akun') != 'Admin'){
			if ($this->session->userdata('Akun') == 'Dosen') {
				redirect(base_url('Dashboard/Profil'));
			} 
			else {
				redirect(base_url());
			}
		}
	}  
 
  public function AkunDosen(){
		$Data['Halaman'] = 'Akun Dosen';
		$Data['Dosen'] = $this->db->query('SELECT Dosen.NIP,Dosen.Nama,Dosen.Pangkat,Dosen.Golongan,Dosen.Jabatan,Akun.JenisAkun FROM Akun,Dosen WHERE Akun.NIP=Dosen.NIP')->result_array();
    $this->load->view('HeaderAdmin',$Data);
    $this->load->view('AkunDosen',$Data); 
  }

  public function Daftar(){
		if($this->db->get_where('Dosen', array('NIP' => $_POST['NIP']))->num_rows() === 0){
			$this->db->insert('Dosen',
						array('NIP' => $_POST['NIP'], 
									'NIDN' => $_POST['NIDN'],
									'Nama' => htmlentities($_POST['Nama']),
									'Jabatan' => $_POST['Jabatan'],
									'Pangkat' => $_POST['Pangkat'],
									'Golongan' => $_POST['Golongan'],
									'Tahun' => $_POST['Tahun'],
									'KreditLama' => $_POST['KreditLama'],
								 	'WA' => $_POST['WA'],
									'S2' => $_POST['S2'],
									'S3' => $_POST['S3'],
									'BidangKeahlian' => $_POST['BidangKeahlian'],
									'KesesuaianKompetensi' => $_POST['KesesuaianKompetensi'],
									'KesesuaianBidang' => $_POST['KesesuaianBidang'],
									'SertifikatPendidik' => $_POST['SertifikatPendidik'],
									'SertifikatKompetensi' => $_POST['SertifikatKompetensi'],
									'MengajarPS' => $_POST['MengajarPS'],
									'MengajarPSLain' => $_POST['MengajarPSLain']));
			$this->db->insert('Akun',array('NIP' => $_POST['NIP'],'Password' => password_hash($_POST['NIP'], PASSWORD_DEFAULT),'JenisAkun' => '1'));
			echo '1';
		} else{
			echo "Akun Dosen Dengan NIP ".$_POST['NIP']." Sudah Ada!";
		}
	}

	public function Kajur(){
		$this->db->where('JenisAkun', 2);
		$this->db->update('Akun',array('JenisAkun' => 1));
		$this->db->where('NIP', $_POST['NIP']);
		$this->db->update('Akun',array('JenisAkun' => 2));
	}
	
	public function Borang(){
		$TS = explode('-',$this->uri->segment('3'));
		$Data['Tahun'] = $this->uri->segment('3');
		$Data['Dosen'] = $this->db->get('Dosen')->result_array();
		$Data['TS'] = $TS[1]-$TS[0]+1;
		$Data['DPU'] = array();
		$DPUDistinct = $this->db->query("SELECT DISTINCT(NIP) FROM RealisasiPendidikan WHERE IdKegiatan='PND6' AND Tahun >= ".$TS[0]." AND Tahun <= ".$TS[1])->result_array();
		foreach ($DPUDistinct as $key) {
			$Dosen = array();
			array_push($Dosen,$this->db->query("SELECT Nama FROM Dosen WHERE NIP = ".$key['NIP'])->row_array()['Nama']);
			for ($i = $TS[0]; $i <= $TS[1]; $i++) { 
				$Tampung = $this->db->query("SELECT SUM(Volume) as Total FROM `RealisasiPendidikan` WHERE IdKegiatan = 'PND6' AND Kode LIKE '%1' AND NIP = ".$key['NIP']. " AND Tahun = ".$i)->row_array()['Total'];
				$Tampung == '' ? array_push($Dosen,0) : array_push($Dosen,$Tampung);
			}	
			for ($i = $TS[0]; $i <= $TS[1]; $i++) { 
				$Tampung = $this->db->query("SELECT SUM(Volume) as Total FROM `RealisasiPendidikan` WHERE IdKegiatan = 'PND6' AND Kode LIKE '%2' AND NIP = ".$key['NIP']. " AND Tahun = ".$i)->row_array()['Total'];
				$Tampung == '' ? array_push($Dosen,0) : array_push($Dosen,$Tampung);
			}	
			array_push($Data['DPU'],$Dosen);
		}
		$Data['PenelitianDTPS'] = array();
		for ($j = 1; $j <= 3; $j++) { 
			$Jumlah = array(); $Total = 0;
			for ($i = $TS[0]; $i <= $TS[1]; $i++) { 
				$Tampung = $this->db->query("SELECT SUM(Volume) as Volume FROM RealisasiPenelitian WHERE Kode LIKE '%".$j."' AND Tahun = ".$i)->row_array()['Volume'];		
				$Tampung == '' ? array_push($Jumlah,0) : array_push($Jumlah,$Tampung);
				$Tampung == '' ? $Total += 0 : $Total += $Tampung;
			}
			array_push($Jumlah,$Total);
			array_push($Data['PenelitianDTPS'],$Jumlah);
		}	
		$this->load->view('ExcelBorang',$Data); 
  } 
}