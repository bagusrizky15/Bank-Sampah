<?php
/**
 * Created by IntelliJ IDEA.
 * User: UnixMan
 * Date: 27/05/2018
 * Time: 10:14
 */

class Sampah_model extends CI_Model
{
	public function getAllSampah()
	{
		return $result = $this->db->get_where('tbl_Sampah', array('flag' => '1'))->result_array();
	}

	public function addUser($data){
		$result = $this->db->insert('tbl_user',$data);

		if($result){
			return true;
		}else{
			return false;
		}
	}

	public function addSampah($data){
		$result = $this->db->insert('tbl_Sampah',$data);

		if($result){
			return true;
		}else{
			return false;
		}
	}

	public function getOne($id){
		return $result = $this->db->get_where('tbl_Sampah', array('id_Sampah' => $id))->result_array();
	}

	public function deleteSampah($id,$data){
		$this->db->where('id_Sampah', $id);
		$this->db->update('tbl_Sampah', $data);
		return true;
	}

	public function updateSampah($id,$data){
		$this->db->where('id_Sampah', $id);
		$this->db->update('tbl_Sampah', $data);
		return true;
	}
}
