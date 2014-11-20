<?php 
	class Contact_model extends CI_model
	{
		function __construct()
		{
			parent :: __construct();
		}
		function insert($id)
		{
			
			$this->db->get('tbl_contactus');
		}
		function getAllSearch($arraySearch = array() , $start, $limit)
		{
			$this->db->select('SQL_CALC_FOUND_ROWS   j . * ' , false);
			$this->db->from('tbl_contactus j');
			if($arraySearch['keysearch'] != "" ){
				if($arraySearch['keysearch'] && $arraySearch['keysearch'] != "" ){
					$this->db->like('subject',$arraySearch['keysearch']);
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
					'contact' => $query->result_array(),
					'sql' => $sql,
			);
		}
		
		function getDetail($value)
		{	 
			
			$this->db->from('tbl_contactus j');
		
			$this->db->where("id", $value);
			
			$query = $this->db->get();
			//var_dump($query);
			if($query){
				return $query->row();
			}else{
				return false;
			}	
		}
	}
