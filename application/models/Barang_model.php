<?php
/**
 * Created by IntelliJ IDEA.
 * User: UnixMan
 * Date: 27/05/2018
 * Time: 10:14
 */

class Barang_model extends CI_Model
{
	public function getAllBarang()
	{
		return $result = $this->db->get_where('tbl_barang', array('flag' => '1'))->result_array();
	}

	public function addUser($data){
		$result = $this->db->insert('tbl_user',$data);

		if($result){
			return true;
		}else{
			return false;
		}
	}

	public function addBarang($data){
		$result = $this->db->insert('tbl_barang',$data);

		if($result){
			return true;
		}else{
			return false;
		}
	}

	public function getOne($id){
		return $result = $this->db->get_where('tbl_barang', array('id_barang' => $id))->result_array();
	}

	public function deleteBarang($id,$data){
		$this->db->where('id_barang', $id);
		$this->db->update('tbl_barang', $data);
		return true;
	}

	public function updateBarang($id,$data){
		$this->db->where('id_barang', $id);
		$this->db->update('tbl_barang', $data);
		return true;
	}
}
