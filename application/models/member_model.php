<?php
	class Member_model extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			
		}
		public function insertUser($data)
		{
			$this->db->insert('tbl_member', $data);	
		if ($this->db->affected_rows()) {
				return true;
			}else {
				return false;
			}
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
			
			$this->db->where('userPass',$password);
			$this->db->where('email',$email);
			//$this->db->or_where('userName',$email);
			$query=$this->db->get('tbl_member');
			if($query->num_rows()==1)
			{
				return $query->result();
			}
			else
			{
				$this->db->where('userPass',$password);
				$this->db->where('userName',$email);
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
			if ($this->db->affected_rows()) {
				return true;
			}else {
				return false;
			}
		}
		public function getEmail($memberID)
		{
			$this->db->from('tbl_member');
			$this->db->where('memberID', $memberID);
			$this->db->select('email');
			$query = $this->db->get();
			return $query->row();
		}
		function getProductDeail($cartID)
		{
			$this->db->select('SQL_CALC_FOUND_ROWS   j . *, pro.productName,pro.seo_name, pro.anhthume, pro.giamgia, pro.gia, c.`status` as trangthai ' , false);
			$this->db->from('tbl_cartdetails j');
			$this->db->join('tbl_product pro', 'j.productID = pro.productID ', 'left');
			$this->db->join('tbl_carts c', 'j.cartID = c.cartID ', 'left');
			$this->db->where('j.cartID', $cartID);
			$this->db->order_by("detailID", "DESC");
			$query = $this->db->get();
			$sql= $this->db->last_query();
			$this->db->select("FOUND_ROWS() as total_record");
			$rRes = $this->db->get();
			$total_records = $rRes->row_array();
			$total_record = $total_records['total_record'];
			return array(
					'total_record' => $total_record,
					'CartDetail' => $query->result_array(),
					'sql' => $sql,
			);
		}
		function getAllSearch($arraySearch = array() , $start, $limit)
		{
			$this->db->select('SQL_CALC_FOUND_ROWS   j . * ' , false);
			$this->db->from('tbl_member j');
			if($arraySearch['keysearch'] != "" ){
				if($arraySearch['keysearch'] && $arraySearch['keysearch'] != "" ){
					$this->db->like('fullname',$arraySearch['keysearch']);
				}
			}
			$this->db->limit($limit, $start);
			$query = $this->db->get();
			$sql= $this->db->last_query();
			$this->db->select("FOUND_ROWS() as total_record");
			$rRes = $this->db->get();
			$total_records = $rRes->row_array();
			$total_record = $total_records['total_record'];
			return array(
					'total_record' => $total_record,
					'member' => $query->result_array(),
					'sql' => $sql,
			);
		}
	}
?>