<?php
/**
 * @author chinguyen.phpdev@gmail.com
 * @author Otcsoft.com - 2014
 */
class Brand_model extends CI_Model
{
	/**
	 * @param $search_param
	 * @param $start
	 * @param $limit
	 */
	function getAllSearch($arraySearch = array() , $start, $limit)
	{
		$this->db->select('SQL_CALC_FOUND_ROWS   j . * ' , false);
		$this->db->from('tbl_brand j');
		
		if($arraySearch['keysearch'] != ""){
			if($arraySearch['keysearch'] && $arraySearch['keysearch'] != "" ){
				$this->db->like('catName',$arraySearch['keysearch']);
			}
		}
		$this->db->order_by("catID", "DESC");
		$this->db->limit($limit, $start);
		$query = $this->db->get();
		$sql= $this->db->last_query();
		$this->db->select("FOUND_ROWS() as total_record");
		$rRes = $this->db->get();
		$total_records = $rRes->row_array();
		$total_record = $total_records['total_record'];
		return array(
				'total_record' => $total_record,
				'brand' => $query->result_array(),
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
	
	public function get20Brand()
	{
		$sql = "SELECT catName,metaKey,stt FROM `tbl_brand` ORDER BY stt DESC LIMIT 20 ";
		$query = $this->db->query($sql);
		if($query->num_rows() > 0){
			return $query->result_array();
		}else {
			return FALSE;
		}
	}
	
	
	// get all tbl_brand
	public function getAllBrand()
	{
		$sql = "SELECT catID, catName FROM `tbl_brand` where status = 1 ORDER BY catName ASC ";
		$query = $this->db->query($sql);
		if($query->num_rows() > 0){
			return $query->result_array();
		}else {
			return FALSE;
		}
	}
    
    // get brand where 
    public function getAllBrandWhere($id)
    {
        $sql = "SELECT catID, catName FROM `tbl_brand` where danhmucID = $id AND status = 1 ORDER BY catName ASC ";
        $query = $this->db->query($sql);
        if($query->num_rows() > 0){
            return $query->result_array();
        }else {
            return FALSE;
        }
    }
    
    static function getOneStatic($id)
    {
        $sql = "SELECT catID, catName FROM `tbl_brand` WHERE catID  = $id AND status = 1 ORDER BY catName ASC ";
        $query = mysql_query($sql);
        if($query){
            return $query;
        }else {
            return false;
        }
    }
    
    
    ##############################_____VUA_BAN_LE_V3_____###################################
    
    // lay ra toan bo brand thuoc cate
    public function getBrandUsingCate($id)
    {
    	$sql = "
    			SELECT
					br.catID as ID,
					br.catName Name,
					count(p.productID) as countPro
				FROM
					tbl_product p
				LEFT JOIN tbl_brand br ON br.catID = p.thuonghieuID
				LEFT JOIN tbl_categories c ON c.catID = p.catID
				LEFT JOIN tbl_categories c1 ON c1.catID = c.parentID
				LEFT JOIN tbl_categories c2 ON c2.catID = c1.parentID
				WHERE
					(
						p.catID = $id
						OR c.parentID = $id
						OR c1.parentID = $id
						OR c2.parentID = $id
					)
				AND p.`status` = 1 AND br.`status` = 1 GROUP BY 	br.catName ORDER BY br.catName
    			";
        $query = $this->db->query($sql);
        if($query->num_rows() > 0){
            return $query->result_array();
        }else {
            return FALSE;
        }
    }
    
    
	public function getBrandUsingAll($id = 0)
    {
    	$sql = "
    			SELECT
					br.catID as ID,
					br.catName Name,
					count(p.productID) as countPro
				FROM
					tbl_product p
				LEFT JOIN tbl_brand br ON br.catID = p.thuonghieuID
				LEFT JOIN tbl_categories c ON c.catID = p.catID
				LEFT JOIN tbl_categories c1 ON c1.catID = c.parentID
				LEFT JOIN tbl_categories c2 ON c2.catID = c1.parentID
				WHERE
					(
						p.catID = $id
						OR c.parentID = $id
						OR c1.parentID = $id
						OR c2.parentID = $id
					)
				AND p.`status` = 1 AND br.`status` = 1 GROUP BY 	br.catName ORDER BY br.catName
    			";
        $query = $this->db->query($sql);
        if($query->num_rows() > 0){
            return $query->result_array();
        }else {
            return FALSE;
        }
    }
    
    
    
	
	
	
	
	
	
	
}
