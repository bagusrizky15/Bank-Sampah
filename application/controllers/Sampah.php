<?php
/**
 * Created by IntelliJ IDEA.
 * User: UnixMan
 * Date: 27/05/2018
 * Time: 12:45
 */

class Sampah extends  CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->model('Sampah_model', 'Sampah_model');
		$this->load->helper(array('url'));
	}

	public function index(){
		if($this->session->userdata('level') == 'admin') {
			$data['view'] = 'Sampah/index';
			$data['list_Sampah'] = $this->Sampah_model->getAllSampah();
			$this->load->view('layout_admin', $data);
		}else{
			echo "butuh auth";
		}
	}


	public function addSampah()
	{
		$id_Sampah = null;
		$nama_Sampah = $_POST['nama_Sampah'];
		$harga_Sampah = $_POST['harga_Sampah'];

		$flag = '1';

		$data = array(
			'id_Sampah' => null,
			'nama_Sampah' => $nama_Sampah,
			'harga_Sampah' => $harga_Sampah,
			'flag' => $flag
		);

		$result = $this->Sampah_model->addSampah($data);

		if($result == true){
			redirect('Sampah/index');
		}else{
			echo "<scripit>alert('gagal');</scripit>";
		}
	}

	public function detail($id = 0)
	{
		$data['view'] = 'Sampah/detail';
		$data['data_Sampah'] = $this->Sampah_model->getOne($id);
		$this->load->view('layout_admin',$data);
	}

	public function update(){
		$id_Sampah = $_POST['id_Sampah'];

		$nama_Sampah = $_POST['nama_Sampah'];
		$harga_Sampah = $_POST['harga_Sampah'];


		$data = array(
			'harga_Sampah' => $harga_Sampah,
			'nama_Sampah' => $nama_Sampah
		);

		$result = $this->Sampah_model->updateSampah($id_Sampah,$data);

		if($result == true){
			redirect('Sampah/index');
		}else{
			echo "<scripit>alert('gagal');</scripit>";
		}
	}

	public function delete($id = 0)
	{
		$data = array(
			'flag' => '0'
		);

		$result = $this->Sampah_model->deleteSampah($id,$data);

		if($result == true){
			redirect('Sampah/index');
		}else{
			echo "<scripit>alert('gagal');</scripit>";
		}
	}
}
