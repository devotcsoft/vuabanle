<?php
/**
 * @author chinguyen.phpdev@gmail.com
 * @author Otcsoft.com - 2014
 */
class Cart_model extends CI_Model
{
	/**
	 * @param $search_param
	 * @param $start
	 * @param $limit
	 */
	function getAllSearch($arraySearch = array() , $start, $limit)
	{
		$this->db->select('SQL_CALC_FOUND_ROWS   j . * ' , false);
		$this->db->from('tbl_carts j');
		
		if($arraySearch['keysearch'] != ""){
			if($arraySearch['keysearch'] && $arraySearch['keysearch'] != "" ){
				$this->db->like('cartName',$arraySearch['keysearch']);
			}
		}
		$this->db->order_by("cartID", "DESC");
		$this->db->limit($limit, $start);
		$query = $this->db->get();
		$sql= $this->db->last_query();
		$this->db->select("FOUND_ROWS() as total_record");
		$rRes = $this->db->get();
		$total_records = $rRes->row_array();
		$total_record = $total_records['total_record'];
		return array(
				'total_record' => $total_record,
				'cart' => $query->result_array(),
				'sql' => $sql,
		);
	}	
	
	
	public function checkSlug($id, $value)
	{
		$sql = "SELECT * FROM `tbl_brand` WHERE catID = $id AND catName = '{$value}' ";
		$query = $this->db->query($sql);
		if($query->num_rows() > 0){
			return TRUE;
		}else {
			return FALSE;
		}
	}
	
	
	function getProductDeail($cartID)
	{
		$this->db->select('SQL_CALC_FOUND_ROWS   j . *, pro.productName, pro.seo_name, pro.gia, c.`status` as trangthai ' , false);
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
    
    
    public function Insert($id, $value)
    {
        $sql = "SELECT * FROM `tbl_brand` WHERE catID = $id AND catName = '{$value}' ";
        $query = $this->db->query($sql);
        if($query->num_rows() > 0){
            return TRUE;
        }else {
            return FALSE;
        }
    }
	
	
	
	
	
	
	
}
