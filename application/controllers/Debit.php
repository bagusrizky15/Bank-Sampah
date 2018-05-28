<?php
/**
 * Created by IntelliJ IDEA.
 * User: UnixMan
 * Date: 27/05/2018
 * Time: 10:11
 */

class Debit extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->model('Debit_model', 'Debit_model');
		$this->load->helper(array('url'));
	}

	public function index(){
		if($this->session->userdata('level') == 'admin') {
			$data['view'] = 'Debit/index';
			$data['list_Debit'] = $this->Debit_model->getAllDebit();
			$data['list_sampah'] = $this->Debit_model->getAllSampah();
			$data['list_nasabah'] = $this->Debit_model->getAllNasabah();
			$this->load->view('layout_admin', $data);
		}else{
			echo "butuh auth";
		}
	}

	public function getNominal(){
		$id = $_POST['id'];

		$response = $this->Debit_model->getNominal($id);
		echo json_encode($response);
	}


	public function addDebit()
	{
		$id_log_Debit = null;
		$tanggal_Debit = date("Y-m-d");
		$id_sampah = $_POST['id_sampah'];
		$berat_sampah =  $_POST['berat_sampah'];
		$id_nasabah = $_POST['id_nasabah'];
		$jumlah_Debit = $_POST['jumlah_debit'];

		$data = array(
			'id_log_debit' => null,
			'tgl_debit' => $tanggal_Debit,
			'id_sampah' => $id_sampah,
			'berat_sampah' => $berat_sampah,
			'id_nasabah' => $id_nasabah,
			'jumlah_debit' => $jumlah_Debit
		);
		$result = $this->Debit_model->addDebit($data);

		if($result == true){
			redirect('Debit/index');
		}else{
			echo "<scripit>alert('gagal');</scripit>";
		}
	}



	public function delete($id = 0)
	{
		$data = array(
			'flag' => '0'
		);

		$result = $this->Debit_model->deleteDebit($id,$data);

		if($result == true){
			redirect('Debit/index');
		}else{
			echo "<scripit>alert('gagal');</scripit>";
		}
	}
}
