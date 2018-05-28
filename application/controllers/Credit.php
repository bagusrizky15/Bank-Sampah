<?php
/**
 * Created by IntelliJ IDEA.
 * User: UnixMan
 * Date: 27/05/2018
 * Time: 10:11
 */

class Credit extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->model('Credit_model', 'credit_model');
		$this->load->helper(array('url'));
	}

	public function index(){
		if($this->session->userdata('level') == 'admin') {
			$data['view'] = 'Credit/index';
			$data['list_credit'] = $this->credit_model->getAllCredit();
			$data['list_barang'] = $this->credit_model->getAllBarang();
			$data['list_nasabah'] = $this->credit_model->getAllNasabah();
			$this->load->view('layout_admin', $data);
		}else{
			echo "butuh auth";
		}
	}

	public function getNominal(){
		$id = $_POST['id'];

		$response = $this->credit_model->getNominal($id);
		echo json_encode($response);
	}


	public function addCredit()
	{
		$id_log_credit = null;
		$tanggal_credit = date("Y-m-d");
		$id_barang = $_POST['id_barang'];
		$jumlah_barang =  $_POST['jumlah_barang'];
		$id_nasabah = $_POST['id_nasabah'];
		$jumlah_credit = $_POST['jumlah_credit'];

		$data = array(
			'id_log_credit' => null,
			'tanggal_credit' => $tanggal_credit,
			'id_barang' => $id_barang,
			'jumlah_barang' => $jumlah_barang,
			'id_nasabah' => $id_nasabah,
			'jumlah_credit' => $jumlah_credit,
		);
		$result = $this->credit_model->addCredit($data);

		if($result == true){
			redirect('Credit/index');
		}else{
			echo "<scripit>alert('gagal');</scripit>";
		}
	}



	public function delete($id = 0)
	{
		$data = array(
			'flag' => '0'
		);

		$result = $this->credit_model->deleteCredit($id,$data);

		if($result == true){
			redirect('Credit/index');
		}else{
			echo "<scripit>alert('gagal');</scripit>";
		}
	}
}
