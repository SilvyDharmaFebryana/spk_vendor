<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller {

	function index()
	{
		$username = $this->session->userdata('username');
		if(isset($username)) :
			redirect('Home','refresh');
		else : redirect('Home/Login','refresh');endif;
	}
	
	function Nilai()
	{
		$username = $this->session->userdata('username');
		if(isset($username)) :
			$data['Title'] = "Data Nilai";
			$data['MenuData'] = "OK";
			$data['AddNilai'] = "OK";
			$data['MenuNilai'] = "OK";
			$this->load->model('Admin_Model','Admin');
			$data['nilai'] = $this->Admin->DataNilai();

			$this->load->view('Nilai_View',$data);
		else : redirect('Home/Login','refresh');endif;
	}
	function NilaiBobot()
	{
		$username = $this->session->userdata('username');
		if(isset($username)) :
			$data['Title'] = "Data Nilai";
			$data['MenuData'] = "OK";
			$data['AddNilai'] = "OK";
			$data['MenuNilai'] = "OK";
			$data['NilaiBobot'] = "NilaiBobot";
			$this->load->model('Admin_Model','Admin');
			$data['nilai'] = $this->Admin->DataNilai();
			$this->load->view('Nilai_View',$data);
		else : redirect('Home/Login','refresh');endif;
	}
	
	function RemoveKriteria($id_kriteria)
	{
		$username = $this->session->userdata('username');
		if(isset($username)) :
			$this->load->model('Admin_Model','Admin');
			$this->Admin->RemoveDataKriteria($id_kriteria);
			redirect('Data/Kriteria','refresh');
		else : redirect('Home/Login','refresh');endif;
	}

	function RemoveVendor($kd_vendor)
	{
		$username = $this->session->userdata('username');
		if(isset($username)) :
			$this->load->model('Admin_Model','Admin');
			$this->Admin->RemoveDataVendor($kd_vendor);
			redirect('Data/Vendor','refresh');
		else : redirect('Home/Login','refresh');endif;
	}

	function ViewVendor($kd_vendor)
	{
		$username = $this->session->userdata('username');
		if(isset($username)) :
			$this->load->model('Admin_Model','Admin');
			$this->Admin->ViewDataVendor($kd_vendor);
			redirect('Data/Vendor','refresh');
		else : redirect('Home/Login','refresh');endif;
	}
	function RNilai($id_nilai)
	{
		$username = $this->session->userdata('username');
		if(isset($username)) :
			$this->load->model('Admin_Model','Admin');
			$this->Admin->RemoveDataNilai($id_nilai);
			redirect('Data/Nilai','refresh');
		else : redirect('Home/Login','refresh');endif;
	}
	
	function UpdNilai($id_nilai)
	{
		$username = $this->session->userdata('username');
		if(isset($username)) :
			$this->load->model('Admin_Model','Admin');
			$data['Title'] = "Update Nilai";
			$data['MenuData'] = "OK";
			$data['AddNilai'] = "OK";
			$data['MenuNilai'] = "OK";
			$data['nilai'] = $this->Admin->DetailDataNilai($id_nilai);
			$this->load->view('AddNilai_View',$data);
		else : redirect('Home/Login','refresh');endif;
	}
	

	function AddNilai()
	{
		$username = $this->session->userdata('username');
		if(isset($username)) :
			$data['Title'] = "Tambah Nilai";
			$data['MenuData'] = "OK";
			$data['AddNilai'] = "OK";
			$data['MenuNilai'] = "OK";
			$this->load->model('Admin_Model','Admin');
			if($this->input->POST('simpan')){
				//KHUSUS UPDATE
				$data['erernilai'] = $id_nilai = $this->input->post('id_nilai');
				//TAMBAH DATA DAN UPDATE
				$nama			= $this->input->post('nama');
				$performance	= $this->input->post('performance');
				$detail			= $this->input->post('detail');
				$quality		= $this->input->post('quality');
				$response		= $this->input->post('response');
				// Cek Kemungkinan Data SAMA
				//VALIDASI INPUT FORMULIR
						
						if($nama==null){ 
							$data['kosongnama'] = $nosend = "ErrorNama";  
							$data['nama'] = $nama;$data['performance'] = $performance;$data['detail'] = $detail;
							$data['quality'] = $quality;$data['response'] = $response;
							$data['nama'] = $nama;$data['performance'] = $performance;$data['detail'] = $detail;
							$data['quality'] = $quality;$data['response'] = $response;
						}
						
						if($performance==null){ 
							$data['kosongperformance'] = $nosend = "ErrorPerformance";  
							$data['nama'] = $nama;$data['performance'] = $performance;$data['detail'] = $detail;
							$data['quality'] = $quality;$data['response'] = $response;
						}else{
							$data['nama'] = $nama;$data['performance'] = $performance;$data['detail'] = $detail;
							$data['quality'] = $quality;$data['response'] = $response;
						}
						if($detail==null){ 
							$data['kosongdetail'] = $nosend = "ErrorDetail";  
							$data['nama'] = $nama;$data['performance'] = $performance;$data['detail'] = $detail;
							$data['quality'] = $quality;$data['response'] = $response;
						}else{
							$data['nama'] = $nama;$data['performance'] = $performance;$data['detail'] = $detail;
							$data['quality'] = $quality;$data['response'] = $response;
						}
						if($quality==null){ 
							$data['kosongquality'] = $nosend = "ErrorQuality";  
							$data['nama'] = $nama;$data['performance'] = $performance;$data['detail'] = $detail;
							$data['quality'] = $quality;$data['response'] = $response;
						}else{
							$data['nama'] = $nama;$data['performance'] = $performance;$data['detail'] = $detail;
							$data['quality'] = $quality;$data['response'] = $response;
						}
						if($response==null){ 
							$data['kosongresponse'] = $nosend = "ErrorResponse";  
							$data['nama'] = $nama;$data['performance'] = $performance;$data['detail'] = $detail;
							$data['quality'] = $quality;$data['response'] = $response;
						}else{
							$data['nama'] = $nama;$data['performance'] = $performance;$data['detail'] = $detail;
							$data['quality'] = $quality;$data['response'] = $response;
						}
						$c1 = $performance;$c2 = $detail;$c3 = $quality;$c4 = $response;
						
						foreach ($this->Admin->ambilHimpunan() as $h) {
							if ($c1 >= $h->batas_bawah and $c1 <= $h->batas_atas) {
								$hc1 = $h->nilai;
							}
							if ($c2 >= $h->batas_bawah and $c2 <= $h->batas_atas) {
								$hc2 = $h->nilai;
							}
							if ($c3 >= $h->batas_bawah and $c3 <= $h->batas_atas) {
								$hc3 = $h->nilai;
							}
							if ($c4 >= $h->batas_bawah and $c4 <= $h->batas_atas) {
								$hc4 = $h->nilai;
							}
							
						}
					if($id_nilai==0){
						//NEW DATA NILAI
						$nilai_asli_c1 = $performance;$nilai_asli_c2 = $detail;$nilai_asli_c3 = $quality;$nilai_asli_c4 = $response;
						if(isset($nosend)): else:
							$input_nilai= $this->Admin->SendDataNilai($nama,$hc1,$hc2,$hc3,$hc4,$nilai_asli_c1,$nilai_asli_c2,$nilai_asli_c3,$nilai_asli_c4);
							if($input_nilai){
								$this->Admin->update_vendor($nama);
							}
							redirect('Data/Nilai','refresh');
						endif;
					}
					else if($this->Admin->cekDataNilai($id_nilai)){
						//UPDATE DATA NILAI
						$nilai_asli_c1 = $performance;$nilai_asli_c2 = $detail;$nilai_asli_c3 = $quality;$nilai_asli_c4 = $response;
						if(isset($nosend)): else:
							$this->Admin->SendUpDataNilai($id_nilai,$nama,$hc1,$hc2,$hc3,$hc4,$nilai_asli_c1,$nilai_asli_c2,$nilai_asli_c3,$nilai_asli_c4);
							redirect('Data/Nilai','refresh');
						endif;
					}
			};
			$data['get_vendor'] = $this->Admin->ambilVendors();
			$this->load->view('AddNilai_View',$data);
		else : redirect('Home/Login','refresh'); endif;
	}
	
	function Kriteria()
	{
		$username = $this->session->userdata('username');
		if(isset($username)) :
			$data['Title'] = "Data Kriteria";
			$data['MenuData'] = "OK";
			$data['AddKriteria'] = "OK";
			$data['MenuKriteria'] = "OK";
			$this->load->model('Admin_Model','Admin');
			$data['cektotal'] = $this->Admin->cekDataKriteria();
			$data['kriteria'] = $this->Admin->DataKriteria();
			if($this->input->POST('simpan')){
				$kd_kriteria		= $this->input->post('kd_kriteria');
				$kriteria			= $this->input->post('kriteria');
				$keterangan			= $this->input->post('keterangan');
				$bobot				= $this->input->post('bobot');
				$this->Admin->SendDataKriteria($kd_kriteria,$kriteria,$keterangan,$bobot);
				redirect('Data/Kriteria','refresh');
			}
			if($this->input->POST('update')){
				$id_kriteria		= $this->input->post('id_kriteria');
				$kd_kriteria		= $this->input->post('kd_kriteria');
				$kriteria			= $this->input->post('kriteria');
				$keterangan			= $this->input->post('keterangan');
				$bobot				= $this->input->post('bobot');
				$this->Admin->UpdateDataKriteria($id_kriteria,$kd_kriteria,$kriteria,$keterangan,$bobot);
				redirect('Data/Kriteria','refresh');
			}
			$this->load->view('Kriteria_View',$data);
		else : redirect('Home/Login','refresh');endif;
	}
	function Himpunan()
	{
		$username = $this->session->userdata('username');
		if(isset($username)) :
			$data['Title'] = "Data Himpunan";
			$data['MenuData'] = "OK";
			$data['AddHimpunan'] = "OK";
			$data['MenuHimpunan'] = "OK";
			$this->load->model('Admin_Model','Admin');
			$data['himpunan'] = $this->Admin->DataHimpunan();
			if($this->input->POST('simpan')){
				$batas_atas			= $this->input->post('batas_atas');
				$batas_bawah		= $this->input->post('batas_bawah');
				$nilai				= $this->input->post('nilai');
				$this->Admin->SendDataHimpunan($batas_atas,$batas_bawah,$nilai);
				redirect('Data/Himpunan','refresh');
			}
			$this->load->view('Himpunan_View',$data);
		else : redirect('Home/Login','refresh');endif;
	}
	
	function Vendor()
	{
		$username = $this->session->userdata('username');
		if(isset($username)) :
			$data['Title'] = "Data Vendor";
			$data['MenuData'] = "OK";
			$data['AddVendor'] = "OK";
			$data['MenuVendor'] = "OK";
			$this->load->model('Admin_Model','Admin');
			$data['vendor'] = $this->Admin->DataVendor();
			if($this->input->POST('simpan')){
				$nama_vendor	= $this->input->post('nama_vendor');
				$alamat			= $this->input->post('alamat');
				$telp			= $this->input->post('telp');
				$kategori			= $this->input->post('kategori');
				$this->Admin->SendDataVendor($nama_vendor,$alamat,$telp,$kategori);
				redirect('Data/Vendor','refresh');
			}
			$this->load->view('Vendor_View',$data);
		else : redirect('Home/Login','refresh');endif;
	}
	
	function User()
	{
		$username = $this->session->userdata('username');
		if(isset($username)) :
			$data['Title'] = "Data User";
			$data['MenuData'] = "OK";
			$data['AddUser'] = "OK";
			$data['MenuUser'] = "OK";
			$this->load->model('Admin_Model','Admin');
			$data['admin'] = $this->Admin->DataUser();
			if($this->input->POST('simpan')){
				$user			= $this->input->post('user');
				$password		= $this->input->post('password');
				$rules			= $this->input->post('rules');
				$this->Admin->SendDataUser($user,$password,$rules);
				redirect('Data/User','refresh');
			}
			$this->load->view('User_View',$data);
		else : redirect('Home/Login','refresh');endif;
	}
	
	function Normalisasi()
	{
		$username = $this->session->userdata('username');
		if(isset($username)) :
			$data['Title'] = "Normalisasi";
			$data['MenuData'] = "OK";
			$data['MenuAddData'] = "OK";
			$data['MenuNormalisasi'] = "OK";
			$this->load->model('Admin_Model','Admin');
			$data['Normalisasi'] = $this->Admin->DataNormalisasi();
			$data['Normalisasi1'] = $this->Admin->DataNormalisasi1();
			$data['Normalisasi2'] = $this->Admin->DataNormalisasi2();
			$data['Normalisasi3'] = $this->Admin->DataNormalisasi3();
			$data['NormalisasiRank'] = $this->Admin->DataNormalisasiRank();
			$data['NormalisasiBobot'] = $this->Admin->DataPerbaikanBobot();
			$this->load->view('Normalisasi_View',$data);
		else : redirect('Home/Login','refresh');endif;
	}
	
	function Normalisasi_VektorS()
	{
		$username = $this->session->userdata('username');
		if(isset($username)) :
			$data['Title'] = "VEKTOR S";
			$data['MenuData'] = "OK";
			$data['MenuAddData'] = "OK";
			$data['MenuNormalisasi'] = "OK";
			$this->load->model('Admin_Model','Admin');
			$data['Normalisasi'] = $this->Admin->DataNormalisasi_VektorS();
			$this->load->view('NormalisasiVektorS_View',$data);
		else : redirect('Home/Login','refresh');endif;
	}
	
	function HapusNormalisasi()
	{
		$username = $this->session->userdata('username');
		if(isset($username)) :
			$this->load->model('Admin_Model','Admin');
			$this->Admin->DeleteNormalisasi();
			$this->Admin->DeletePerbaikanBobot();
			redirect('Data/Normalisasi','refresh');
		else : redirect('Home/Login','refresh');endif;
	}
	
	function prosesNormalisasi()
	{
		$username = $this->session->userdata('username');
		if(isset($username)) :
			$this->load->model('Admin_Model','Admin');
			$jumlahNilai = $this->Admin->ambilJumlahNilai();
			$kriteria = $this->Admin->ambilKriteria();
			$sumkriteria = $this->Admin->SumKriteria();
			$sumData = $this->Admin->sumData();
			$ambilNilai = $this->Admin->ambilNilaiArray();
			$jumlahTotalBobotSeluruhKriteria = 0;
			$jmlKriteria = $sumkriteria->bobot;
			$jmlData = $sumData->total;
			if ($jumlahNilai > 0) {
				//MENCARI TOTAL BOBOT DARI KRITERIA
				foreach ($kriteria as $k) {
					$jumlahTotalBobotSeluruhKriteria = $k->bobot;
				}
				
				//PERBAIKAN BOBOT (1)
				$kriteriaSementara = array();
				$kriteriasumbobot = array();
				foreach ($kriteria as $k) {
					array_push($kriteriasumbobot, array(
						'kriteria' => $k->kriteria,
						'bobot' => $k->bobot
					));
				}
				$sumbobot = 	$kriteriasumbobot[0]['bobot'] +//C1
								$kriteriasumbobot[1]['bobot'] +//C2
								$kriteriasumbobot[2]['bobot'] +//C3
								$kriteriasumbobot[3]['bobot']; //C4
				
				foreach ($kriteria as $k) {
					array_push($kriteriaSementara, array(
						'kriteria' => $k->kriteria,
						'bobot' => $k->bobot / $sumbobot
					));
				}
				$perbaikan_c1 = $kriteriaSementara[0]['bobot'];
				$perbaikan_c2 = $kriteriaSementara[1]['bobot'];
				$perbaikan_c3 = $kriteriaSementara[2]['bobot'];
				$perbaikan_c4 = $kriteriaSementara[3]['bobot'];
				$Getperbaikan = $this->Admin->GetPerbaikanBobot();
				if(isset($Getperbaikan)) : 
				$id_perbaikan = $Getperbaikan->id_perbaikan;
				else:
				$id_perbaikan = 0;
				endif;
				if($id_perbaikan==null){
					$this->Admin->InsertPerbaikanBobot(	$perbaikan_c1,$perbaikan_c2,$perbaikan_c3,
														$perbaikan_c4);
				}else{
					$this->Admin->UpdatePerbaikanBobot(	$perbaikan_c1,$perbaikan_c2,$perbaikan_c3,
														$perbaikan_c4,$id_perbaikan);
				}
				
				
				//PERHITUNGAN VEKTOR (S) (2)
				$hasilSementaraVektor = array();
				foreach ($ambilNilai as $n) {
					array_push($hasilSementaraVektor, array(
						'id_nilai' => $n['id_nilai'],
						'c1' => (pow($n['c1'], number_format($kriteriaSementara[0]['bobot'],4))),
						'c2' => (pow($n['c2'], number_format($kriteriaSementara[1]['bobot'],4))),
						'c3' => (pow($n['c3'], number_format($kriteriaSementara[2]['bobot'],4))),
						'c4' => (pow($n['c4'], number_format($kriteriaSementara[3]['bobot'],4))),
						
						'hasil' =>
						(pow($n['c1'], number_format($kriteriaSementara[0]['bobot'],4))) *
						(pow($n['c2'], number_format($kriteriaSementara[1]['bobot'],4))) *
						(pow($n['c3'], number_format($kriteriaSementara[2]['bobot'],4))) *
						(pow($n['c4'], number_format($kriteriaSementara[3]['bobot'],4))),
					));
				}
				
				//MENGHITUNG PREVERENSI (V) (3)
				$jumlahHasilSeluruhVektor = 0;
				foreach ($hasilSementaraVektor as $v) {
					$jumlahHasilSeluruhVektor = $jumlahHasilSeluruhVektor + $v['hasil'];
				}
				foreach ($hasilSementaraVektor	as $v) {
					//DATA BARU
					if ($this->Admin->ambilNormalisasiBerdasakanid_nilai($v['id_nilai']) == 0) {
						$val = array(
							'id_nilai' => $v['id_nilai'],
							'vektor_s' => $v['hasil'],
							'vektor_v' => number_format($v['hasil'] / $jumlahHasilSeluruhVektor,4),
						);
						$this->Admin->tambahNormalisasi($val);
					//DATA LAMA
					}else{
						$id_nilai = $v['id_nilai'];
						$vektor_s = $v['hasil'];
						$vektor_v = number_format($v['hasil'] / $jumlahHasilSeluruhVektor,4);
						$this->Admin->UpdateNormalisasi($id_nilai,$vektor_s,$vektor_v);
					}
				}
				redirect('Data/Normalisasi','refresh');
			};
		else : redirect('Home/Login','refresh');endif;
	}
}
