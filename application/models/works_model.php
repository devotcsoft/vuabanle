<?php
/**
 * @author chinguyen.phpdev@gmail.com
 * @author Otcsoft.com - 2014
 */
class Works_model extends CI_Model
{
	/**
	 * @param $search_param
	 * @param $start
	 * @param $limit
	 */
	function getAllSearch($arraySearch = array() , $start, $limit)
	{
		$this->db->select('SQL_CALC_FOUND_ROWS   j . * ' , false);
		$this->db->from('tbl_tuyendung j');
		if($arraySearch['keysearch'] != "" ){
			if($arraySearch['keysearch'] && $arraySearch['keysearch'] != "" ){
				$this->db->like('newsTitle',$arraySearch['keysearch']);
			}
		}
		$this->db->order_by("newsID", "DESC");
		$this->db->limit($limit, $start);
		$query = $this->db->get();
		$sql= $this->db->last_query();
		$this->db->select("FOUND_ROWS() as total_record");
		$rRes = $this->db->get();
		$total_records = $rRes->row_array();
		$total_record = $total_records['total_record'];
		return array(
				'total_record' => $total_record,
				'faqs' => $query->result_array(),
				'sql' => $sql,
		);
	}
	
	public function checkSlug($id, $value)
	{
		$sql = "SELECT * FROM `tbl_tuyendung` WHERE newsID = $id AND seo_name = '{$value}' ";
		$query = $this->db->query($sql);
		if($query->num_rows() > 0){
			return TRUE;
		}else {
			return FALSE;
		}
	}
	

	
	
	
	
	
	
	
}
