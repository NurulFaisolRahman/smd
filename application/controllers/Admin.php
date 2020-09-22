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
		$Data['Dosen'] = $this->db->query('SELECT Dosen.NIP,Dosen.Nama,Akun.JenisAkun FROM Akun,Dosen WHERE Akun.NIP=Dosen.NIP')->result_array();
    $this->load->view('HeaderAdmin',$Data);
    $this->load->view('AkunDosen',$Data); 
	}
	
	public function KerjaSama(){
		$Data['Halaman'] = 'Kerja Sama';
		$Data['KerjaSama'] = $this->db->query("SELECT * FROM KerjaSama")->result_array();
    $this->load->view('HeaderAdmin',$Data);
    $this->load->view('KerjaSama',$Data); 
  }

	public function InputKerjaSama(){
		if (count($_FILES) > 0) {
			if ($this->CekBukti($_FILES)){
				$NamaPdf = date('Ymd',time()).substr(password_hash('KerjaSama', PASSWORD_DEFAULT),7,7);
				$NamaPdf = str_replace("/","F",$NamaPdf);
				$NamaPdf = str_replace(".","F",$NamaPdf);
				move_uploaded_file($_FILES['BuktiKerjaSama']['tmp_name'], "KerjaSama/".$NamaPdf.".pdf");
				$BuktiKerjaSama = $NamaPdf.".pdf";
				$this->db->insert('KerjaSama',
									array('Mitra' => $_POST['Mitra'], 
												'Tingkat' => $_POST['Tingkat'], 
												'Bidang' => $_POST['Bidang'], 
												'Judul' => htmlentities($_POST['Judul']), 
												'Manfaat' => htmlentities($_POST['Manfaat']), 
												'Waktu' => htmlentities($_POST['Waktu']), 
												'Tahun' => $_POST['Expired'], 
												'KerjaSama' => htmlentities($_POST['KerjaSama']),
												'Bukti' => $BuktiKerjaSama));
				echo '1';
			} else {
				echo 'Upload Bukti Kerja Sama Hanya Boleh PDF!';
			}
		} else {
			echo 'Mohon Upload Bukti Kerja Sama Berupa PDF!';
		}
	}

	public function UpdateKerjaSama(){
		if ($this->CekBukti($_FILES)){
			$BuktiKerjaSama = $_POST['BuktiKerjaSamaLama'];
			if (isset($_FILES['BuktiKerjaSama'])) {
				if($BuktiKerjaSama != ''){
					unlink('KerjaSama/'.$BuktiKerjaSama);
				} 
				$NamaPdf = date('Ymd',time()).substr(password_hash('KerjaSama', PASSWORD_DEFAULT),7,7);
				$NamaPdf = str_replace("/","F",$NamaPdf);
				$NamaPdf = str_replace(".","F",$NamaPdf);
				move_uploaded_file($_FILES['BuktiKerjaSama']['tmp_name'], "KerjaSama/".$NamaPdf.".pdf");
				$BuktiKerjaSama = $NamaPdf.".pdf";
			}
			$this->db->where('Id', $_POST['Id']);
			$this->db->update('KerjaSama',
								array('Mitra' => $_POST['Mitra'], 
											'Tingkat' => $_POST['Tingkat'], 
											'Bidang' => $_POST['Bidang'], 
											'Judul' => htmlentities($_POST['Judul']), 
											'Manfaat' => htmlentities($_POST['Manfaat']), 
											'Waktu' => htmlentities($_POST['Waktu']), 
											'Tahun' => $_POST['Expired'], 
											'KerjaSama' => htmlentities($_POST['KerjaSama']),
											'Bukti' => $BuktiKerjaSama));
			echo '1';
		} else {
			echo 'Upload Bukti Kerja Sama Hanya Boleh PDF!';
		}
	}

	public function CekBukti($file){
		$valid_extensions = array("pdf");
		foreach ($file as $key) {
			$Tipe = pathinfo($key['name'],PATHINFO_EXTENSION);
			if(!in_array(strtolower($Tipe),$valid_extensions)) {
				return false;
			} 
		}
		return true;
	}

	public function HapusKerjaSama(){
		$this->db->delete('KerjaSama', array('Id' => $_POST['Id']));
		if ($this->db->affected_rows()){
			unlink('KerjaSama/'.$_POST['Bukti']);
			echo '1';
		} else {
			echo 'Gagal Menghapus';
		}
	}

	public function Daftar(){
		if($this->db->get_where('Dosen', array('NIP' => $_POST['NIP']))->num_rows() === 0){
			$this->db->insert('Dosen',
						array('NIP' => $_POST['NIP'], 
									'Nama' => htmlentities($_POST['Nama'])));
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

	public function DTPS(){
		$DTPS = $this->db->query("SELECT BuktiPendidik,BuktiKompetensi FROM Dosen")->result_array();
		echo json_encode($DTPS);
	}

	public function LampiranKerjaSama(){
		$Bidang = $this->uri->segment('3');
		$KerjaSama = $this->db->get_where('KerjaSama', array('Bidang' => $Bidang))->result_array();
		echo json_encode($KerjaSama);
	}
	
	public function Borang(){
		$TS = explode('-',$this->uri->segment('3'));
		$Data['Tahun'] = $this->uri->segment('3');
		$Data['KerjaSamaPendidikan'] = $this->db->get_where('KerjaSama', array('Bidang' => 'Pendidikan'))->result_array(); 
		$Data['KerjaSamaPenelitian'] = $this->db->get_where('KerjaSama', array('Bidang' => 'Penelitian'))->result_array(); 
		$Data['KerjaSamaPengabdian'] = $this->db->get_where('KerjaSama', array('Bidang' => 'Pengabdian'))->result_array(); 
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