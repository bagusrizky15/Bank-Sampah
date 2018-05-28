<?php
/**
 * Created by IntelliJ IDEA.
 * User: UnixMan
 * Date: 27/05/2018
 * Time: 10:14
 */

class Nasabah_model extends CI_Model
{

	public function getAllNasabah()
	{
		return $result = $this->db->get_where('tbl_nasabah', array('flag' => '1'))->result_array();
	}

	public function addUser($data){
		$result = $this->db->insert('tbl_user',$data);

		if($result){
			return true;
		}else{
			return false;
		}
	}

	public function addNasabah($data){
		$result = $this->db->insert('tbl_nasabah',$data);

		if($result){
			return true;
		}else{
			return false;
		}
	}

	public function getOne($id){
		return $result = $this->db->get_where('tbl_nasabah', array('id_nasabah' => $id))->result_array();
	}

	public function deleteNasabah($id,$data){
		$this->db->where('id_nasabah', $id);
		$this->db->update('tbl_nasabah', $data);
		return true;
	}

	public function updateNasabah($id,$data){
		$this->db->where('id_nasabah', $id);
		$this->db->update('tbl_nasabah', $data);
		return true;
	}
}
