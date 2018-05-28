<?php
/**
 * Created by IntelliJ IDEA.
 * User: UnixMan
 * Date: 27/05/2018
 * Time: 12:45
 */

class Barang extends  CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->model('Barang_model', 'barang_model');
		$this->load->helper(array('url'));
	}

	public function index(){
		if($this->session->userdata('level') == 'admin') {
			$data['view'] = 'Barang/index';
			$data['list_barang'] = $this->barang_model->getAllBarang();
			$this->load->view('layout_admin', $data);
		}else{
			echo "butuh auth";
		}
	}


	public function addBarang()
	{
		$id_barang = null;
		$nama_barang = $_POST['nama_barang'];
		$harga_barang = $_POST['harga_barang'];

		$flag = '1';

		$data = array(
			'id_barang' => null,
			'nama_barang' => $nama_barang,
			'harga_barang' => $harga_barang,
			'flag' => $flag
		);

		$result = $this->barang_model->addBarang($data);

		if($result == true){
			redirect('Barang/index');
		}else{
			echo "<scripit>alert('gagal');</scripit>";
		}
	}

	public function detail($id = 0)
	{
		$data['view'] = 'Barang/detail';
		$data['data_barang'] = $this->barang_model->getOne($id);
		$this->load->view('layout_admin',$data);
	}

	public function update(){
		$id_barang = $_POST['id_barang'];

		$nama_barang = $_POST['nama_barang'];
		$harga_barang = $_POST['harga_barang'];


		$data = array(
			'harga_barang' => $harga_barang,
			'nama_barang' => $nama_barang
		);

		$result = $this->barang_model->updateBarang($id_barang,$data);

		if($result == true){
			redirect('Barang/index');
		}else{
			echo "<scripit>alert('gagal');</scripit>";
		}
	}

	public function delete($id = 0)
	{
		$data = array(
			'flag' => '0'
		);

		$result = $this->barang_model->deleteBarang($id,$data);

		if($result == true){
			redirect('Barang/index');
		}else{
			echo "<scripit>alert('gagal');</scripit>";
		}
	}
}
