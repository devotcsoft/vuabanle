<?php
/**
 * @author chinguyen.phpdev@gmail.com
 * @author Otcsoft.com - 2014
 */
class Utility_model extends CI_Model
{
	/**
	 * INSERT DATA
	 */
	public function insert($table = '' , $data = '')
	{
		$this->db->insert($table, $data);
		
		if ($this->db->affected_rows()) {
			return $this->db->insert_id();
		}else {
			return false;
		}
	}
	
	
	public function updated($file, $value, $table, $data)
	{	
		//echo "<meta charset='utf-8'>";
		$this->db->where($file, $value);
		$this->db->update($table, $data);
		//echo $this->db->last_query();
		if ($this->db->affected_rows () > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}
	
	public function updateCate($id, $data)
	{
		//echo "<meta charset='utf-8'>";
		$this->db->where('catID', $id);
		$this->db->update('tbl_categories', $data);
		
		
		//echo $this->db->last_query();
		 
		if ($this->db->affected_rows () > 0) {
			
			return TRUE;
		} else {
			
			return FALSE;
		}
	}
	
	
	function delete($field, $value, $tables)
	{
		$this->db->trans_begin();
		$this->db->where($field, $value);
		$this->db->delete($tables);
		//echo $this->db->last_query();
		//die();
		if($this->db->trans_status() === FALSE){
			$this->db->trans_rollback();
			return false;
		}else{
			$this->db->trans_commit();
			return true;
		}
	}
	
	
	/**
	 * get one fields
	 */
	public function whereOneField($table, $field, $value)
	{
		$sql = "SELECT * FROM $table  WHERE $field = $value ";
		$result = $this->db->query($sql);
		if($result){
			return $result->row();
		}else {
			return TRUE;
		}
	}
	
	
	
	/**
	 * Lay ra stt lon nhat  
	 */
	public function maxStt($table)
	{
		$sql = "SELECT MAX(stt) AS stt FROM $table";
		//echo $sql;
		$result = $this->db->query($sql);
		if($result){
			return $result->row(); 
		}else {
			return false;
		}
	}
	
	
	/**
	 * Kiem tra xem Slug da ton tai hay chua
	 */
	public function find_slugwhere($table, $field, $slug)
	{
		$sql = "SELECT * FROM $table  WHERE $field = '".$slug."' ";
		//echo $sql;	
		$result = $this->db->query($sql);
		if($result->row()){
			return FALSE;
		}else {
			return TRUE;
		}
	}
	
	
	/**
	 *  sap xep theo chieu
	 */
	public function getAllASC($table, $field, $value, $orderkey)
	{
		$sql = "SELECT * FROM $table  WHERE $field = $value ORDER BY $orderkey ASC  ";
		//echo $sql;
		$result = $this->db->query($sql);
		if($result){
			return $result->result_array();
		}else {
			return TRUE;
		}
	}
	
	
	/**
	 * sap xep nguoc chieu
	 */
	public function getAllDESC($table, $field, $value, $orderkey)
	{
		$sql = "SELECT * FROM $table  WHERE $field = $value ORDER BY $orderkey DESC  ";
		$result = $this->db->query($sql);
		if($result){
			return $result->result_array();
		}else {
			return TRUE;
		}
	} 
	
	
	
	public function getDetail($table, $field, $value)
	{
		$sql = "SELECT * FROM $table  WHERE $field = '{$value}' and status = 1";
		//echo $sql;
		$result = $this->db->query($sql);
		if($result){
			return $result->row();
		}else {
			return TRUE;
		}
	}
	
	
	
	
	public static function getCountAllCate($parentID)
	{
		$sql = "SELECT catID, parentID, catName FROM tbl_categories WHERE parentID = $parentID  ORDER BY catName ASC ";
        //echo $sql;
        //die();
		$query = mysql_query($sql);
		$query = mysql_num_rows($query);
		if($query){
			return $query;
		}else {
			return false;
		}
	}
    
   	public static function getallCountParent($parentID)
	{
		$sql = "SELECT catID, parentID, catName FROM tbl_categories WHERE parentID = $parentID AND status = 1 ORDER BY catName ASC ";
        //echo $sql;
        //die();
		$query = mysql_query($sql);
		$query = mysql_num_rows($query);
		if($query){
			return $query;
		}else {
			return false;
		}
	}

	
	public static function getallParent($parentID)
	{
		$sql1 = "SELECT catID, parentID, catName FROM tbl_categories WHERE parentID = $parentID  ORDER BY catName ASC ";
		$query = mysql_query($sql1);
		$result = mysql_fetch_array($query, MYSQL_ASSOC);
		if($result){
			return $query ;
		}else {
			return false;
		}
	}
	
	
	public static function price_format($float) {
		$pattern = '$[0-9]*$';
	
		preg_match_all($pattern, $float, $matches);
	
		$float = implode($matches[0]);
	
		if (!(float) $float) {
			return $float;
		}
	
		/* return money_format("%.{$places}n", $float); */
		$strPrice1 = trim($float);
		return number_format($strPrice1, 0, ',', '.');
	}
	
	
	// get categorydetail
	public static function getCategorydetail($catID)
    {
        $sql = "SELECT catID, catName FROM tbl_categories WHERE catID = $catID and status =  1 ";
        $query = mysql_query($sql);
        $result = mysql_fetch_array($query, MYSQL_ASSOC);
        if($result){
            return $query ;
        }else {
            return false;
        }
    }
    
    
    public static function getIMGproduct($ID)
    {
        $sql = "SELECT anhthume FROM tbl_product WHERE productID = $ID";
        $query = mysql_query($sql);
        $result = mysql_fetch_array($query, MYSQL_ASSOC);
        if($result){
            return $query ;
        }else {
            return false;
        }
    }
    
    
	
	
	
	
	
	
	
}