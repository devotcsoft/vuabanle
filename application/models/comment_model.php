<?php
/**
 * @author chinguyen.phpdev@gmail.com
 * @author Otcsoft.com - 2014
 */
class Comment_model extends CI_Model
{
	/**
	 * @param $search_param
	 * @param $start
	 * @param $limit
	 */
	function getAllSearch($arraySearch = array() , $start, $limit)
	{
		// $this->db->select('SQL_CALC_FOUND_ROWS   j . * , i.industry_name ,je.email ,je.company' , false);
		$this->db->select('SQL_CALC_FOUND_ROWS   j . * , pro.productName ' , false);
		$this->db->from('tbl_comment j');
		$this->db->join('tbl_product pro', 'j.productID = pro.productID ', 'left');
		
		if($arraySearch['keysearch'] != "" ){
			if($arraySearch['keysearch'] && $arraySearch['keysearch'] != "" ){
				$this->db->like('fullname',$arraySearch['keysearch']);
				$this->db->or_like('content', $arraySearch['keysearch']);
			}
		}
		$this->db->order_by("commentID", "DESC");
		$this->db->limit($limit, $start);
		$query = $this->db->get();
		$sql= $this->db->last_query();
		$this->db->select("FOUND_ROWS() as total_record");
		$rRes = $this->db->get();
		$total_records = $rRes->row_array();
		$total_record = $total_records['total_record'];
		return array(
				'total_record' => $total_record,
				'comment' => $query->result_array(),
				'sql' => $sql,
		);
	}
	
	
	public function getAllCate()
	{
		$sql = "SELECT catID, parentID, catName FROM tbl_categories ORDER BY catName ASC ";
		$query = $this->db->query($sql);
		if($query){
			return $query->result_array();
		}else {
			return false;
		}
	}
	
	
	public function checkSlug($id, $value)
	{
		$sql = "SELECT * FROM `tbl_categories` WHERE catID = $id AND keypage = '{$value}' ";
		$query = $this->db->query($sql);
		if($query->num_rows() > 0){
			return TRUE;
		}else {
			return FALSE;
		}
	}
	
	function getDetailComment($value)
	{	 
		$this->db->select('SQL_CALC_FOUND_ROWS   j . * , pro.productName ' , false);
		$this->db->from('tbl_comment j');
		$this->db->join('tbl_product pro', 'j.productID = pro.productID ', 'left');
		$this->db->where("commentID", $value);
		
		$query = $this->db->get();
		//var_dump($query);
		if($query){
			return $query->row();
		}else{
			return false;
		}	
	}
	
	public function getDetail($id)
	{
		$sql = "SELECT * FROM tbl_comment WHERE productID = $id AND status = 1 ORDER BY postdate DESC ";
		$query = $this->db->query($sql);
		if($query->num_rows() > 0){
			return $query->result_array();
		}else {
			return FALSE;
		}	
	}
	public function insertComment($data)
	{
		$this->db->insert('tbl_comment', $data);
	}
	
	
	
	
	
	
	
}
