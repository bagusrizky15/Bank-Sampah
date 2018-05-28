<?php
/**
 * Created by IntelliJ IDEA.
 * User: UnixMan
 * Date: 27/05/2018
 * Time: 10:11
 */

class Nasabah extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->model('Nasabah_model', 'nasabah_model');
		$this->load->helper(array('url'));
	}

	public function index(){
		if($this->session->userdata('level') == 'admin') {
			$data['view'] = 'Nasabah/index';
			$data['list_nasabah'] = $this->nasabah_model->getAllNasabah();
			$this->load->view('layout_admin', $data);
		}else{
			echo "butuh auth";
		}
	}


	public function addNasabah()
	{
		$id_nasabah = null;
		$username = $_POST['username'];
		$password = $_POST['password'];
		$level = 'nasabah';
		$nama_nasabah = $_POST['nama_nasabah'];
		$alamat = $_POST['alamat'];
		$no_hp = $_POST['no_hp'];
		$email = $_POST['email'];
		$saldo = $_POST['saldo'];
		$flag = '1';

		$data = array(
			'id_user' => null,
			'username' => $username,
			'password' => $password,
			'level' => $level,
			'flag' => $flag
		);

		$data2 = array(
			'id_nasabah' => null,
			'nama_nasabah' => $nama_nasabah,
			'alamat' => $alamat,
			'no_hp' => $no_hp,
			'email' => $email,
			'saldo' => $saldo,
			'flag' => $flag
		);

		$result = $this->nasabah_model->AddUser($data);
		$result2 = $this->nasabah_model->addNasabah($data2);

		if($result == true){
			redirect('Nasabah/index');
		}else{
			echo "<scripit>alert('gagal');</scripit>";
		}
	}

	public function detail($id = 0)
	{
		$data['view'] = 'Nasabah/detail';
		$data['data_nasabah'] = $this->nasabah_model->getOne($id);
		$this->load->view('layout_admin',$data);
	}

	public function update(){
		$id_nasabah = $_POST['id_nasabah'];
		$nama_nasabah = $_POST['nama_nasabah'];
		$alamat = $_POST['alamat'];
		$no_hp = $_POST['no_hp'];
		$email = $_POST['email'];
		$saldo = $_POST['saldo'];


		$data = array(
			'nama_nasabah' => $nama_nasabah,
			'alamat' => $alamat,
			'no_hp' => $no_hp,
			'email' => $email,
			'saldo' => $saldo
		);

		$result = $this->nasabah_model->updateNasabah($id_nasabah,$data);

		if($result == true){
			redirect('Nasabah/index');
		}else{
			echo "<scripit>alert('gagal');</scripit>";
		}
	}

	public function delete($id = 0)
	{
		$data = array(
			'flag' => '0'
		);

		$result = $this->nasabah_model->deleteNasabah($id,$data);

		if($result == true){
			redirect('Nasabah/index');
		}else{
			echo "<scripit>alert('gagal');</scripit>";
		}
	}
}
