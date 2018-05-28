<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('auth_model', 'auth_model');
	}

	public function index()
	{
		if($this->session->has_userdata('logged_in'))
		{
			redirect('Nasabah/index');
		}
		$this->load->view('Login/index');
	}

	public function login()
	{
		$username = (string)$_POST['username'];
		$password = (string)$_POST['password'];
		$level = 'admin';
		$cek = $this->auth_model->cekRow($username,$password,$level);

		if($cek > 0){
			$result = $this->auth_model->login($username,$password);
			$admin_data = array(
				'id' => $result['id_user'],
				'nama' => $result['username'],
				'level' => $result['level'],
				'logged_in' => TRUE
			);
			$this->session->set_userdata($admin_data);
			redirect(base_url('Nasabah/index'), 'refresh');
		}else{
			echo "gagal login";
		}
	}

	public function logOut(){
		$this->session->sess_destroy();
		redirect(base_url('Auth'), 'refresh');
	}
}
