<?php
/**
 * Created by IntelliJ IDEA.
 * User: UnixMan
 * Date: 27/05/2018
 * Time: 10:14
 */

class Debit_model extends CI_Model
{

	public function getAllDebit()
	{
		$query = "select * from tbl_log_Debit,tbl_nasabah,tbl_sampah where tbl_log_Debit.id_nasabah = tbl_nasabah.id_nasabah
And tbl_log_Debit.id_sampah = tbl_sampah.id_sampah AND tbl_log_Debit.flag = '1'";


		return $result = $this->db->query($query)->result_array();

	}

	public function getAllSampah()
	{
		return $result = $this->db->get('tbl_sampah')->result_array();
	}


	public function addDebit($data){
		$result = $this->db->insert('tbl_log_debit',$data);

		if($result){
			return true;
		}else{
			return false;
		}
	}



	public function getNominal($id){
		return $result = $this->db->get_where('tbl_sampah', array('id_sampah' => $id))->result_array();
	}
	public function getAllNasabah(){
		return $result = $this->db->get('tbl_nasabah')->result_array();
	}

	public function deleteDebit($id,$data){
		$this->db->where('id_log_debit', $id);
		$this->db->update('tbl_log_debit', $data);
		return true;
	}

}
