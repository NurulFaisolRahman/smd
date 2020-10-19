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

	public function MahasiswaBaru(){
		$Data['Halaman'] = 'Mahasiswa Baru';
		$Data['MahasiswaBaru'] = $this->db->query("SELECT * FROM MahasiswaBaru")->result_array();
    $this->load->view('HeaderAdmin',$Data);
    $this->load->view('MahasiswaBaru',$Data); 
	}

	public function InputMahasiswaBaru(){
		if($this->db->get_where('MahasiswaBaru', array('Homebase' => $_POST['Homebase'],'Tahun' => $_POST['Tahun']))->num_rows() === 0){
			$this->db->insert('MahasiswaBaru',$_POST);
			echo '1';
		} else {
			echo "Data Homebase ".$_POST['Homebase']." & Tahun ".$_POST['Tahun']." Sudah Ada!";
		}
	}

	public function UpdateMahasiswaBaru(){
		if($this->db->get_where('MahasiswaBaru', array('Homebase' => $_POST['Homebase'],'Tahun' => $_POST['Tahun']))->num_rows() === 0 || ($_POST['Homebase'] == $_POST['HomebaseLama'] && $_POST['Tahun'] == $_POST['TahunLama'])){
			$this->db->where('Homebase',$_POST['HomebaseLama']);
			$this->db->where('Tahun',$_POST['TahunLama']);
			unset($_POST['HomebaseLama']); unset($_POST['TahunLama']); 
			$this->db->update('MahasiswaBaru', $_POST);
			echo '1';
		} else {
			echo "Data Homebase ".$_POST['Homebase']." & Tahun ".$_POST['Tahun']." Sudah Ada!";
		}
	}
	
	public function HapusMahasiswaBaru(){
		$this->db->delete('MahasiswaBaru', array('Homebase' => $_POST['Homebase'],'Tahun' => $_POST['Tahun']));
		if ($this->db->affected_rows()){
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
		$Data['PengabdianDTPS'] = array();
		for ($j = 1; $j <= 3; $j++) { 
			$Jumlah = array(); $Total = 0;
			for ($i = $TS[0]; $i <= $TS[1]; $i++) { 
				$Tampung = $this->db->query("SELECT SUM(Volume) as Volume FROM RealisasiPengabdian WHERE Kode LIKE '%".$j."' AND Tahun = ".$i)->row_array()['Volume'];		
				$Tampung == '' ? array_push($Jumlah,0) : array_push($Jumlah,$Tampung);
				$Tampung == '' ? $Total += 0 : $Total += $Tampung;
			}
			array_push($Jumlah,$Total);
			array_push($Data['PengabdianDTPS'],$Jumlah);
		}	
		$Data['BukuISBN'] = $this->db->query("SELECT Kegiatan,Tahun FROM `RealisasiPenelitian` WHERE IdKegiatan = 'PNL4' OR IdKegiatan = 'PNL5' OR IdKegiatan = 'PNL11' OR IdKegiatan = 'PNL12' AND Tahun >= ".$TS[0]." AND Tahun <= ".$TS[1])->result_array();		
		foreach ($this->db->query("SELECT Kegiatan,Tahun FROM `RealisasiPenelitian` WHERE IdKegiatan = 'PNL1' AND Kode LIKE '1%' OR IdKegiatan = 'PNL1' AND Kode LIKE '2%' AND Tahun >= ".$TS[0]." AND Tahun <= ".$TS[1])->result_array() as $key => $value) {
			array_push($Data['BukuISBN'],$value);
		}
		$Data['Paten'] = $this->db->query("SELECT Kegiatan,Tahun FROM `RealisasiPenelitian` WHERE IdKegiatan = 'PNL6' OR IdKegiatan = 'PNL17' AND Tahun >= ".$TS[0]." AND Tahun <= ".$TS[1])->result_array();		
		$Data['TepatGuna'] = $this->db->query("SELECT Kegiatan,Tahun FROM `RealisasiPengabdian` WHERE IdKegiatan = 'PNB6' AND Tahun >= ".$TS[0]." AND Tahun <= ".$TS[1])->result_array();		
		$Data['HakCipta'] = $this->db->query("SELECT Kegiatan,Tahun FROM `RealisasiPenelitian` WHERE IdKegiatan = 'PNL6' AND Tahun >= ".$TS[0]." AND Tahun <= ".$TS[1])->result_array();		
		$Data['Rekognisi'] = array();
		foreach ($this->db->query("SELECT Dosen.Nama,Dosen.BidangKeahlian,RealisasiPengabdian.Kode,RealisasiPengabdian.Tahun FROM Dosen,RealisasiPengabdian WHERE RealisasiPengabdian.IdKegiatan = 'PNB7' AND RealisasiPengabdian.Tahun >= ".$TS[0]." AND RealisasiPengabdian.Tahun <= ".$TS[1])->result_array() as $key => $value) {
			$value['Kode'][0] == 1 ? $value['Kode'] = 3 : $value['Kode'] = 2 ;
			array_push($Data['Rekognisi'],$value);
		}
		foreach ($this->db->query("SELECT Dosen.Nama,Dosen.BidangKeahlian,RealisasiPenunjang.Kode,RealisasiPenunjang.Tahun FROM Dosen,RealisasiPenunjang WHERE RealisasiPenunjang.IdKegiatan = 'PNJ6' AND RealisasiPenunjang.Tahun >= ".$TS[0]." AND RealisasiPenunjang.Tahun <= ".$TS[1])->result_array() as $key => $value) {
			if ($value['Kode'][0] == 1 || $value['Kode'][0] == 4) {
				$value['Kode'] = 3;
			} else if ($value['Kode'][0] == 2 || $value['Kode'][0] == 5) {
				$value['Kode'] = 2;
			} else {
				$value['Kode'] = 1;
			}
			array_push($Data['Rekognisi'],$value);
		}
		foreach ($this->db->query("SELECT Dosen.Nama,Dosen.BidangKeahlian,RealisasiPengabdian.Kode,RealisasiPengabdian.Tahun FROM Dosen,RealisasiPengabdian WHERE RealisasiPengabdian.IdKegiatan = 'PNB3' AND RealisasiPengabdian.Tahun >= ".$TS[0]." AND RealisasiPengabdian.Tahun <= ".$TS[1])->result_array() as $key => $value) {
			if ($value['Kode'][0] == 1 || $value['Kode'][0] == 4) {
				$value['Kode'] = 3;
			} else if ($value['Kode'][0] == 2 || $value['Kode'][0] == 5) {
				$value['Kode'] = 2;
			} else {
				$value['Kode'] = 1;
			}
			array_push($Data['Rekognisi'],$value);
		}
		foreach ($this->db->query("SELECT Dosen.Nama,Dosen.BidangKeahlian,RealisasiPenunjang.Kode,RealisasiPenunjang.Tahun FROM Dosen,RealisasiPenunjang WHERE RealisasiPenunjang.IdKegiatan = 'PNJ7' AND RealisasiPenunjang.Tahun >= ".$TS[0]." AND RealisasiPenunjang.Tahun <= ".$TS[1])->result_array() as $key => $value) {
			if ($value['Kode'][0] == 4) {
				$value['Kode'] = 3;
			} else if ($value['Kode'][0] == 5) {
				$value['Kode'] = 2;
			} else if ($value['Kode'][0] == 6) {
				$value['Kode'] = 1;
			}
			array_push($Data['Rekognisi'],$value);
		}
		$Data['Publikasi'] = array();
		$KodePublikasi = array(3,5,8);
		for ($j = 0; $j < 3; $j++) { 
			$Jumlah = array(); $Total = 0;
			for ($i = $TS[0]; $i <= $TS[1]; $i++) { 
				$Tampung = $this->db->query("SELECT SUM(Volume) as Volume FROM RealisasiPenelitian WHERE IdKegiatan = 'PNL14' AND Kode LIKE '".$KodePublikasi[$j]."%' AND Tahun = ".$i)->row_array()['Volume'];		
				if ($j == 1) {
					$Tampung += $this->db->query("SELECT SUM(Volume) as Volume FROM RealisasiPenelitian WHERE IdKegiatan = 'PNL1' AND Tahun = ".$i." AND (Kode LIKE '8%' OR Kode LIKE '9%' OR Kode LIKE '10%' OR Kode LIKE '11%')")->row_array()['Volume'];		
				}
				$Tampung == '' ? array_push($Jumlah,0) : array_push($Jumlah,$Tampung);
				$Tampung == '' ? $Total += 0 : $Total += $Tampung;
			}
			array_push($Jumlah,$Total);
			array_push($Data['Publikasi'],$Jumlah);
		}	
		for ($j = 0; $j < 1; $j++) { 
			$Jumlah = array(); $Total = 0;
			for ($i = $TS[0]; $i <= $TS[1]; $i++) { 
				$Tampung = $this->db->query("SELECT SUM(Volume) as Volume FROM RealisasiPenelitian WHERE IdKegiatan = 'PNL1' AND Tahun = ".$i." AND (Kode LIKE '5%' OR Kode LIKE '6%')")->row_array()['Volume'];		
				$Tampung == '' ? array_push($Jumlah,0) : array_push($Jumlah,$Tampung);
				$Tampung == '' ? $Total += 0 : $Total += $Tampung;
			}
			array_push($Jumlah,$Total);
			array_push($Data['Publikasi'],$Jumlah);
		}	
		for ($j = 1; $j <= 3; $j++) { 
			$Jumlah = array(); $Total = 0;
			for ($i = $TS[0]; $i <= $TS[1]; $i++) { 
				$Tampung = $this->db->query("SELECT SUM(Volume) as Volume FROM RealisasiPenelitian WHERE IdKegiatan = 'PNL15' AND Tahun = ".$i." AND Kode LIKE '".$j."%'")->row_array()['Volume'];		
				$Tampung == '' ? array_push($Jumlah,0) : array_push($Jumlah,$Tampung);
				$Tampung == '' ? $Total += 0 : $Total += $Tampung;
			}
			array_push($Jumlah,$Total);
			array_push($Data['Publikasi'],$Jumlah);
		}	
		for ($j = 11; $j <= 13; $j++) { 
			$Jumlah = array(); $Total = 0;
			for ($i = $TS[0]; $i <= $TS[1]; $i++) { 
				$Tampung = $this->db->query("SELECT SUM(Volume) as Volume FROM RealisasiPenelitian WHERE IdKegiatan = 'PNL2' AND Tahun = ".$i." AND Kode LIKE '".$j."%'")->row_array()['Volume'];		
				$Tampung == '' ? array_push($Jumlah,0) : array_push($Jumlah,$Tampung);
				$Tampung == '' ? $Total += 0 : $Total += $Tampung;
			}
			array_push($Jumlah,$Total);
			array_push($Data['Publikasi'],$Jumlah);
		}	
		$this->load->view('ExcelBorang',$Data);  
  } 
}