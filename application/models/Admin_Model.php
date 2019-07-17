<?php
class Admin_Model extends CI_Model
{

	function cekAdmin($username,$password){
		$query=$this->db->query("select a.*,count(*) as ada from admin a where username='".$username."' and password='".MD5($password)."'")->row();
		// print_r($query);
		// die();
		return $query;
        // $this->db->where('username',$username);
        // $this->db->where('password',MD5($password));
        // $this->db->from('admin');
		// $cek = $this->db->count_all_results();
        // if($cek == 1)
        //     return TRUE;
        // else
        //     return FALSE;
    }
	function CekDataNormalisasi($id_normalisasi){
        $this->db->where('id_normalisasi',$id_normalisasi);
        $this->db->from('normalisasi');
        $cek = $this->db->count_all_results();
        if($cek == 1)
            return TRUE;
        else
            return FALSE;
    }

	function cekDataNilai($id_nilai){
        $this->db->where('id_nilai',$id_nilai);
        $this->db->from('nilai');
        $cek = $this->db->count_all_results();
        if($cek == 1)
            return TRUE;
        else
            return FALSE;
    }
	function GetAdmin($uname){
		$sql = "Select * from admin where username='$uname'";
        return $this->db->query($sql)->row();
	}
	function ambilVendors(){
		$sql = "Select * from vendor where dinilai='n'";
        return $this->db->query($sql)->result();
	}
	function ambilHimpunan() {
        $this->db->order_by('batas_atas', 'asc');
        return $this->db->get('himpunan')->result();
    }
	
	function ambilVendor() {
        $this->db->order_by('kd_vendor', 'asc');
        return $this->db->get('vendor')->result();
    }
	
	function ambilUser() {
        $this->db->order_by('username', 'asc');
        return $this->db->get('admin')->result();
    }

	function SendDataNilai(	$nama,$hc1,$hc2,$hc3,$hc4,
							$nilai_asli_c1,$nilai_asli_c2,$nilai_asli_c3,$nilai_asli_c4)
	{
		$data = array(
            'nama' => $nama,
            'c1' => $hc1,
            'c2' => $hc2,
            'c3' => $hc3,
            'c4' => $hc4,
            'nilai_asli_c1' => $nilai_asli_c1,
            'nilai_asli_c2' => $nilai_asli_c2,
            'nilai_asli_c3' => $nilai_asli_c3,
            'nilai_asli_c4' => $nilai_asli_c4,
        );
        return $this->db->insert('nilai',$data);
	}
	
	public function update_vendor($nama){
		$query=$this->db->query('UPDATE vendor SET dinilai="y" WHERE nama_vendor="'.$nama.'"');
	}
	
	function InsertPerbaikanBobot(	$perbaikan_c1,$perbaikan_c2,$perbaikan_c3,
									$perbaikan_c4)
	{
		$data = array(
            'c1' => $perbaikan_c1,
            'c2' => $perbaikan_c2,
            'c3' => $perbaikan_c3,
            'c4' => $perbaikan_c4,
        );
        return $this->db->insert('perbaikan_bobot',$data);
	}
	
	function SendDataHimpunan($batas_atas,$batas_bawah,$nilai)
	{
		$data = array(
            'batas_atas' => $batas_atas,
            'batas_bawah' => $batas_bawah,
            'nilai' => $nilai,
        );
        return $this->db->insert('himpunan',$data);
	}
	
	function SendDataVendor($nama_vendor,$alamat,$telp,$kategori)
	{
		$data = array(
            'nama_vendor' => $nama_vendor,
            'alamat' => $alamat,
            'telp' => $telp,
			'kategori' => $kategori
        );
        return $this->db->insert('vendor',$data);
	}
	
	function SendDataUser($user,$password,$rules)
	{
		$data = array(
            'username' => $user,
            'password' => md5($password),
            'rules' => $rules,
        );
        return $this->db->insert('admin',$data);
	}
	
	function SendDataKriteria($kd_kriteria,$kriteria,$keterangan,$bobot)
	{
		$data = array(
			'kd_kriteria' => $kd_kriteria,
            'kriteria' => $kriteria,
            'keterangan' => $keterangan,
            'bobot' => $bobot,
        );
        return $this->db->insert('kriteria',$data);
	}
	function DataHimpunan(){
		$sql = "SELECT * FROM himpunan ORDER BY nilai DESC";
        return $this->db->query($sql);
	}
	function DataVendor(){
		$sql = "SELECT * FROM vendor ORDER BY kd_vendor DESC";
        return $this->db->query($sql);
	}
	function DataUser(){
		$sql = "SELECT * FROM admin";
        return $this->db->query($sql);
	}
	function DataKriteria(){
		$sql = "SELECT * FROM kriteria ORDER BY id_kriteria ASC";
        return $this->db->query($sql);
	}
	function DataNilai(){
		$sql = "SELECT * FROM nilai ORDER BY id_nilai ASC";
        return $this->db->query($sql);
	}

	function DataPerbaikanBobot(){
		$sql = "SELECT * FROM perbaikan_bobot";
        return $this->db->query($sql)->row();
	}
	
	function DetailDataNilai($id_nilai){
		$sql = "SELECT * FROM nilai where id_nilai = '$id_nilai'";
        return $this->db->query($sql)->row();
	}
	function DataNormalisasi(){
		$sql = "SELECT * FROM normalisasi
		JOIN nilai ON nilai.id_nilai=normalisasi.id_nilai
		ORDER BY normalisasi.vektor_v DESC";
        return $this->db->query($sql);
	}
	
	function DataNormalisasi1(){
		$sql = "SELECT * FROM normalisasi
		JOIN nilai ON nilai.id_nilai=normalisasi.id_nilai join vendor on nilai.nama=vendor.nama_vendor where vendor.kategori='noncritical'
		ORDER BY normalisasi.vektor_v DESC";
        return $this->db->query($sql);
	}
	
	function DataNormalisasi2(){
		$sql = "SELECT * FROM normalisasi
		JOIN nilai ON nilai.id_nilai=normalisasi.id_nilai join vendor on nilai.nama=vendor.nama_vendor where vendor.kategori='critical'
		ORDER BY normalisasi.vektor_v DESC";
        return $this->db->query($sql);
    }

	function DataNormalisasi3(){
		$sql = "SELECT * FROM normalisasi
		JOIN nilai ON nilai.id_nilai=normalisasi.id_nilai join vendor on nilai.nama=vendor.nama_vendor where vendor.kategori='leverage'
		ORDER BY normalisasi.vektor_v DESC";
        return $this->db->query($sql);
	}

	function DataNormalisasiRank(){
		$sql = "SELECT * FROM normalisasi
		JOIN nilai ON nilai.id_nilai=normalisasi.id_nilai
		ORDER BY normalisasi.vektor_v DESC";
        return $this->db->query($sql);
	}

	function DataNormalisasi_VektorS(){
		$sql = "SELECT * FROM vektor_s
		JOIN nilai ON nilai.id_nilai=normalisasi.id_nilai
		ORDER BY normalisasi.vektor_v DESC";
        return $this->db->query($sql);
	}
	function SumKriteria(){
		$sql = "SELECT SUM(bobot) as bobot FROM kriteria";
        return $this->db->query($sql)->row();
	}
	function nilaiTertinggi(){
		$sql = "SELECT max(vektor_v) as nilai FROM normalisasi";
        return $this->db->query($sql)->row();
	}
	function CountNormalisasi(){
		$sql = "SELECT COUNT(id_nilai) as total FROM normalisasi";
        return $this->db->query($sql)->row();
	}

	function GetPerbaikanBobot(){
		$sql = "SELECT * FROM perbaikan_bobot";
        return $this->db->query($sql)->row();
	}
	function GetnilaiByMax($nilaitinggi){
		$sql = "SELECT * FROM normalisasi where vektor_v='$nilaitinggi'";
        return $this->db->query($sql)->row();
	}
	function nilaiByMax($idnilai){
		$sql = "SELECT * FROM nilai where id_nilai='$idnilai'";
        return $this->db->query($sql)->row();
	}
	
	function sumData(){
		$sql = "SELECT COUNT(id_nilai) as total FROM nilai";
        return $this->db->query($sql)->row();
	}
	
	function DeleteNormalisasi(){
		$sql = "DELETE FROM normalisasi";
        return $this->db->query($sql);
	}

	function DeletePerbaikanBobot(){
		$sql = "DELETE FROM perbaikan_bobot";
        return $this->db->query($sql);
	}
	
	function RemoveDataNilai($id_nilai){
		$this->db->where('id_nilai',$id_nilai);
        return $this->db->delete('nilai');
	}

	function RemoveDataKriteria($id_kriteria){
		$this->db->where('id_kriteria',$id_kriteria);
        return $this->db->delete('kriteria');
	}
	
	function RemoveDataVendor($kd_vendor){
		$this->db->where('kd_vendor',$kd_vendor);
        return $this->db->delete('vendor');
	}

	function ViewDataVendor($kd_vendor){
		$this->db->where('kd_vendor',$kd_vendor);
        return $this->db->view('vendor');
	}

	function ambilJumlahNilai() {
        return $this->db->count_all_results('nilai');
    }
	function cekDataKriteria() {
        return $this->db->count_all_results('kriteria');
    }
	
	function ambilKriteria() {
        $this->db->order_by('kriteria', 'asc');
        return $this->db->get('kriteria')->result();
    }
	function ambilNilaiArray() {
        return $this->db->get('nilai')->result_array();
    }
	function ambilNilai() {
        return $this->db->get('nilai')->result();
    }
	function ambilNormalisasiBerdasakanid_nilai($id_nilai) {
        $this->db->where('id_nilai', $id_nilai);
        return $this->db->count_all_results('normalisasi');
    }

	function ambilVektorSBerdasakanid_nilai($id_nilai) {
        $this->db->where('id_nilai', $id_nilai);
        return $this->db->count_all_results('vektor_s');
    }

    function tambahNormalisasi($normalisasi) {
        $this->db->insert('normalisasi', $normalisasi);
    }
    function tambahVektorS($vektor_s) {
        $this->db->insert('vektor_s', $vektor_s);
    }
	function UpdateDataKriteria($id_kriteria,$kd_kriteria,$kriteria,$keterangan,$bobot)
	{
		$data = array(
			'kd_kriteria' => $kd_kriteria,
            'kriteria' => $kriteria,
            'keterangan' => $keterangan,
            'bobot' => $bobot,
        );
		$this->db->where('id_kriteria', $id_kriteria);
		$this->db->update('kriteria', $data); 
	}


	function UpdatePerbaikanBobot(	$perbaikan_c1,$perbaikan_c2,$perbaikan_c3,
									$perbaikan_c4,$id_perbaikan)
	{
        $data = array(
            'c1' => $perbaikan_c1,
            'c2' => $perbaikan_c2,
            'c3' => $perbaikan_c3,
            'c4' => $perbaikan_c4,
        );
		$this->db->where('id_perbaikan', $id_perbaikan);
		$this->db->update('perbaikan_bobot', $data); 
	}
	
	function UpdateNormalisasi($id_nilai,$vektor_s,$vektor_v)
	{
		$data = array(
            'vektor_s' => $vektor_s,
            'vektor_v' => $vektor_v,
        );
		$this->db->where('id_nilai', $id_nilai);
		$this->db->update('normalisasi', $data); 
	}

	function UpdateVektorS($id_nilai,$nilai_vektor)
	{
		$data = array(
            'nilai_vektor' => $nilai_vektor,
        );
		$this->db->where('id_nilai', $id_nilai);
		$this->db->update('vektor_s', $data); 
	}
		function UpdateAdmin1($id_admin,$username,$password)
	{
		$data = array(
               'username' => $username,
               'password' => MD5($password),
		);	
		$this->db->where('id_admin', $id_admin);
		$this->db->update('admin', $data); 
	}
	function UpdateAdmin2($id_admin,$username)
	{
		$data = array(
               'username' => $username,
		);	
		$this->db->where('id_admin', $id_admin);
		$this->db->update('admin', $data); 
	}

	function SendUpDataNilai($id_nilai,$nama,$hc1,$hc2,$hc3,$hc4,
							$nilai_asli_c1,$nilai_asli_c2,$nilai_asli_c3,$nilai_asli_c4)
	{
		$data = array(
            'nama' => $nama,
            'c1' => $hc1,
            'c2' => $hc2,
            'c3' => $hc3,
            'c4' => $hc4,
            'nilai_asli_c1' => $nilai_asli_c1,
            'nilai_asli_c2' => $nilai_asli_c2,
            'nilai_asli_c3' => $nilai_asli_c3,
            'nilai_asli_c4' => $nilai_asli_c4,
        );
		$this->db->where('id_nilai', $id_nilai);
		$this->db->update('nilai', $data); 
	}
}
