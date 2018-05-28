<?php
/**
 * Created by IntelliJ IDEA.
 * User: UnixMan
 * Date: 17/03/2018
 * Time: 8:22
 */
	class Auth_model extends CI_Model{

		public function cekRow($username,$password,$level){
			$sql = "select * from tbl_user where username = '".$this->db->escape_like_str($username)."' and password = '".$this->db->escape_like_str($password)."' and level = '".$level."'";
			//$sql = "select * from tbl_login where username = '$username' and password = 'a' OR 1=1";
			$query = $this->db->query($sql);
			return $result = $query->num_rows();
		}

		public function login($username,$password){
			$sql = "select * from tbl_user where username = '".$this->db->escape_like_str($username)."' and password = '".$this->db->escape_like_str($password)."'";
			$query = $this->db->query($sql);
			return $result = $query->row_array();
		}

		public function change_pwd($data, $id){
			$this->db->where('id_anggota', $id);
			$this->db->update('tbl_anggota', $data);
			return true;
		}

	}

?>
