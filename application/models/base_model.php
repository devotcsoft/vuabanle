<?php
	class Base_model extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
		}
		function get_table($table,$number,$offset)
		{
			$query=$this->db->get($table,$number,$offset);
			return $query->result_array();
		}
		function count_all($table)
		{
			return $this->db->count_all($table);
		}
		function insert($table,$data)
		{
			$this->db->insert($table,$data);
			if ($this->db->affected_rows()) {
				return $this->db->insert_id();
			}else {
				return false;
			}
			
		}
		function get_detail($table,$where,$id)
		{
			$this->db->where($where,$id);
			$query=$this->db->get($table);
			if($query)
				return $query->row_array();
			else 
				return FALSE;
		}
		function update($table,$data,$where,$id)
		{
			$this->db->where($where,$id);
			$this->db->update($table,$data);
			if ($this->db->affected_rows()) {
				return true;
			}else {
				return false;
			}
		}
		
		public function delete($table, $where , $id)
		{
			$this->db->where($where, $id);
			$this->db->delete($table);
			if($this->db->affected_rows()){
				return true;
			}else {
				return false;
			}
		}
        
        
        
		function get_type0()
		{
		    $sql = "SELECT url, image FROM tbl_padding WHERE type = 0 LIMIT 2";
            $query = $this->db->query($sql);
            if($query->num_rows() > 0){
                return $query->result_array();
            }else {
                return FALSE;
            }
		}
		function get_type1()
		{
			$sql = "SELECT url, image, productName, productPrice, productTime FROM tbl_padding WHERE type = 1 ORDER BY stt ASC LIMIT 3";
            $query = $this->db->query($sql);
            if($query->num_rows() > 0){
                return $query->result_array();
            }else {
                return FALSE;
            }
		}
		function get_padding()
		{
			$this->db->where('type','0');
			$this->db->select('id,name,');
			$query = $this->db->get('tbl_padding',2,0);
			if($query->num_rows() > 0){
				return $query->result_array();
			}else {
				return FALSE;
			}
		}
	 function getAllpadding($arraySearch = array() , $start, $limit, $value)
     {
         
        $this->db->select('SQL_CALC_FOUND_ROWS  p.productID, 
                                                p.productName,
                                                p.catID,
                                                p.gia,
                                                p.giamgia,
                                                p.giagiam,
                                                p.status,
                                                p.stt,
                                                p.seo_name,
                                                p.productImage,
        										p.id_padding1,
        										p.id_padding2,
                                                p.anhthume,
                                                p.tinhtranghang,  ct.catName AS cateName ' , false);
        $this->db->from('tbl_product p');
        $this->db->join('tbl_categories ct', 'p.catID = ct.catID ', 'left');
        $this->db->join('tbl_categories ct1', 'ct1.catID = ct.parentID ', 'left');
        
        if(isset($arraySearch['price_from']) && $arraySearch['price_to'] != "")
        {
             $this->db->where('p.gia >=', $arraySearch['price_from']);
             $this->db->where('p.gia <=', $arraySearch['price_to']);  
        }
      	$this->db->where('p.id_padding1',$value);
        $this->db->where('p.status', 1 );  
        $this->db->or_where('p.id_padding2',$value);
        $this->db->where('p.status', 1 );
        $this->db->order_by("gia", "DESC");
        $this->db->limit($limit, $start);
        $query = $this->db->get();
        $sql= $this->db->last_query();
        //echo $sql;
       
        $this->db->select("FOUND_ROWS() as total_record");
        $rRes = $this->db->get();
        $total_records = $rRes->row_array();
        $total_record = $total_records['total_record'];
        
       
        return array(
                'total_record' => $total_record,
                'products' => $query->result_array(),
                'sql' => $sql,
        );
    }
		
	}	
	
	
	
	
	
	
	