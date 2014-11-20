<?php
class Users_model extends CI_Model
{
	
	public function login($username , $password)
	{
		$sql = "SELECT * FROM `tbl_users` WHERE userName = '{$username}' AND `userPass` = '{$password}'";
		$query = $this->db->query($sql);
		if($query->num_rows() == 1){
			return $query->result();
		} else {
			return false;
		}
	}
	
	public function getUserInfo($userID)
	{
		$this->db->from('tbl_users');
		$this->db->where('userID', $userID);
		$query = $this->db->get();
		return $query->row();
	}

	
}