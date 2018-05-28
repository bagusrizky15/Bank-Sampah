<?php
/**
 * Created by IntelliJ IDEA.
 * User: UnixMan
 * Date: 27/05/2018
 * Time: 10:14
 */

class Credit_model extends CI_Model
{

	public function getAllCredit()
	{
		$query = "select * from tbl_log_credit,tbl_nasabah,tbl_barang where tbl_log_credit.id_nasabah = tbl_nasabah.id_nasabah
And tbl_log_credit.id_barang = tbl_barang.id_barang AND tbl_log_credit.flag = '1'";


		return $result = $this->db->query($query)->result_array();

	}

	public function getAllBarang()
	{
		return $result = $this->db->get('tbl_barang')->result_array();
	}

	public function addUser($data){
		$result = $this->db->insert('tbl_user',$data);

		if($result){
			return true;
		}else{
			return false;
		}
	}

	public function addCredit($data){
		$result = $this->db->insert('tbl_log_credit',$data);

		if($result){
			return true;
		}else{
			return false;
		}
	}



	public function getNominal($id){
		return $result = $this->db->get_where('tbl_barang', array('id_barang' => $id))->result_array();
	}
	public function getAllNasabah(){
		return $result = $this->db->get('tbl_nasabah')->result_array();
	}

	public function deleteCredit($id,$data){
		$this->db->where('id_log_credit', $id);
		$this->db->update('tbl_log_credit', $data);
		return true;
	}

}
