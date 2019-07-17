<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function index()
	{
		$username = $this->session->userdata('username');
		if(isset($username)) :
			$data['Title'] = "Dashboard";
			redirect('Home/Settings','refresh');
		else : redirect('Home/Login','refresh');endif;
	}

	function Settings()
	{
		$username = $this->session->userdata('username');
		if(isset($username)) :
			$data['Title'] = "Settings";
			$data['MenuSettings'] = "OK";
			$data['MenuSubGeneral'] = "OK";
			$this->load->model('Admin_Model','Admin');
			$data['Profile'] = $this->Admin->GetAdmin($username);
			if($this->input->POST('update')){
				$id_admin			= $this->input->post('id_admin');
				$username			= $this->input->post('username');
				$password			= $this->input->post('password');
				$this->load->library('form_validation');
				$this->form_validation->set_rules('username', 'Username', 'trim|required');
				if ($this->form_validation->run()){
					$cek = $this->Admin->cekAdmin($username,$password);
					if($cek){ 
						redirect('Home/Settings','refresh');
					}else{
						if($password){
							$this->Admin->UpdateAdmin1($id_admin,$username,$password);
							redirect('Home/Logout','refresh');
						}elseif($username){
							$this->Admin->UpdateAdmin2($id_admin,$username);
							redirect('Home/Logout','refresh');
						}
					}
				}else{
					echo "<script type=text/javascript>alert('Username Is Empty');</script>";
					redirect('Home/Settings','refresh');
				}
			}
			$this->load->view('Settings_View',$data);
		else : redirect('Home/Login','refresh');endif;
	}

	function Set_About()
	{
		$username = $this->session->userdata('username');
		if(isset($username)) :
			$data['Title'] = "Settings";
			$data['MenuSettings'] = "OK";
			$data['MenuSubAbout'] = "OK";
			$this->load->model('Admin_Model','Admin');
			$data['Profile'] = $this->Admin->GetAdmin($username);
			$this->load->view('Settings_View',$data);
		else : redirect('Home/Login','refresh');endif;
	}
	
	function Login()
	{
		$username = $this->session->userdata('username');
		if(isset($username)) :
			redirect('Home','refresh');
		else : 
		$this->load->model('Admin_Model','Admin');
		if($this->input->POST()){
			$username	= $this->input->post('username');
			$password	= $this->input->post('password');
			$this->load->library('form_validation');
			$this->form_validation->set_rules('username', 'Username', 'trim|required');
			$this->form_validation->set_rules('password', 'Password', 'trim|required');
			if ($this->form_validation->run()){
					$data_rules=$this->Admin->cekAdmin($username,$password);
				if($data_rules->ada >0)
				{
					// die();
					$data = array(
						'username' 	=> $data_rules->username,
						'rules' => $data_rules->rules,
						'logged_in' => TRUE
					);

					// echo $_SESSION['username'];
					// die();
					$this->session->set_userdata($data);
					redirect('Home/Login','refresh');
				}else{
					$data['ufocus'] = 'autofocus';
					$data['Message'] = "Username dan Password Tidak Dikenal";
				}
			}else{
				if($username <> $password){
					if($username){
						$data['username'] = $username;$data['pfocus'] = 'autofocus';
						$data['Message'] = "Password Kosong";
					}else{
						if($password){
							$data['password'] = $password;$data['ufocus'] = 'autofocus';
							$data['Message'] = "Username Kosong";
						}
					}
				}else{
					$data['ufocus'] = 'autofocus';
					$data['Message'] = "Username & Password Kosong";
				}
			}
		}
		$data['']='';
		$data['Title'] = "Masuk";
		$this->load->view('Login_view',$data);
		endif;
	}
	function Logout(){
		$this->session->unset_userdata('username');
        redirect('Home/Login','refresh');
	}
}
