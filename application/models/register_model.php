<?php
	class Register_model extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			
		}
		public function insertUser($data)
		{
			$this->db->insert('tbl_member', $data);	
		}
		function addUser($data)
		{
			if
			($this->db->insert($this->tbl_member,$data))
				return TRUE;
			else
				return FALSE;
		}
		function login($email,$password)
		{
			$this->db->where('email',$email);
			$this->db->where('userPass',$password);
			$query=$this->db->get('tbl_member');
			if($query->num_rows()==1)
			{
				return $query->result();
			}
			else
			{
				return $query->row();
				return false;
			}
		}
		public function getUser($memberID)
		{
			$this->db->from('tbl_member');
			$this->db->where('memberID', $memberID);
			$query = $this->db->get();
			return $query->row();
		}
		public function updateUser($memberID)
		{
			$this->db->where("memberID",$memberID);
			$query = $this->db->get("tbl_member");
			if($query)
				return $query->row_array();
			else
				return FALSE;
				
		}
		public function update($data,$memberID)
		{
			$this->db->where("memberID",$memberID);
			$this->db->update('tbl_member',$data);
			//echo $this->db->last_query();
		}
	   
	}
?>