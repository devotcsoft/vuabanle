<?php
/**
 * @author chinguyen.phpdev@gmail.com
 * @author Otcsoft.com - 2014
 */
class Athome_model extends CI_Model
{
	
	public function getAll()
	{
		$sql = "SELECT *FROM tbl_home_main ORDER BY stt ASC";
		$query = $this->db->query($sql);
		if($query){
			return $query->result_array();
		}else {
			return false;
		}
	}
	
	/**
	 * lay du lieu trong menu roi do ra mang
	 */
	function getMenulv2()
	{
		$this->db->cache_on();
		$sql = mysql_query("SELECT * FROM tbl_categories  ORDER BY stt ASC ");
		while ($row_details = mysql_fetch_array($sql)) {
			$array = array(
				'id' => $row_details['catID'],
				'name' =>  $row_details['catName'],
				'parent' => $row_details['parentID']
			);
			$rowass[] = $array;
		}
		return $rowass;
	}
	
	
	
	function getMenulv2ASC()
	{
		$sql = mysql_query("SELECT * FROM tbl_categories  ORDER BY catName ASC ");
		while ($row_details = mysql_fetch_array($sql)) {
			$array = array(
					'id' => $row_details['catID'],
					'name' =>  $row_details['catName'],
					'parent' => $row_details['parentID']
			);
			$rowass[] = $array;
		}
		return $rowass;
	}
	/**
	* function de quy
	 */
	function recursively($data , $parent = 0, $text = "")
	{
		foreach ($data AS $value){
			if($value['parent'] == $parent){
				$return = "<option id=".$value['id'].">";
				$return .= $text.$value['name']."<br/>";
				$return .= "</option>";
				$id = $value['id'];
				$this->recursively($data, $id, $text."--");
				
			}
		}
	
		
	}
	
	
	
	
	
	
	/**
	 * @param $search_param
	 * @param $start
	 * @param $limit
	 */
	function getAllSearch($arraySearch = array() , $start, $limit)
	{
		// $this->db->select('SQL_CALC_FOUND_ROWS   j . * , i.industry_name ,je.email ,je.company' , false);
		$this->db->select('SQL_CALC_FOUND_ROWS   j . * ' , false);
		$this->db->from('tbl_categories j');
		
		if($arraySearch['keysearch'] != "" || $arraySearch['category_id'] != "" ){
			if($arraySearch['keysearch'] && $arraySearch['keysearch'] != "" ){
				$this->db->like('catName',$arraySearch['keysearch']);
				$this->db->or_like('keypage',$arraySearch['keysearch']);
				$this->db->or_like('catId',$arraySearch['keysearch']);
			}
			if(isset($arraySearch['category_id']) && $arraySearch['category_id'] > 0){
				$this->db->where('parentID',$arraySearch['category_id']);
			}
		}else {
			$this->db->where('parentID', 0);
		}
		
		//$this->db->join('industry i', 'j.industry_id = i.industry_id ', 'left');
		$this->db->limit($limit, $start);
		$query = $this->db->get();
		$sql= $this->db->last_query();
		$this->db->select("FOUND_ROWS() as total_record");
		$rRes = $this->db->get();
		$total_records = $rRes->row_array();
		$total_record = $total_records['total_record'];
		return array(
				'total_record' => $total_record,
				'category' => $query->result_array(),
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
	
	public function getCateWhereParent($parentID)
	{
		$sql = "SELECT catID, keypage, parentID, catName FROM tbl_categories WHERE parentID = $parentID  ORDER BY catName ASC ";
		$query = $this->db->query($sql);
		if($query){
			return $query->result_array();
		}else {
			return false;
		}
	}
	
	
	public function getCateWhereParentHome($parentID)
	{
		$sql =  "SELECT catID, parentID, catName, keypage, status, athome, stt  FROM `tbl_categories` WHERE parentID = $parentID AND status = 1 ORDER BY stt ASC";
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
	
	/*
	 * Check xem keypage co phai la cua category khong
	 */
	public function checkKeypage($keypage)
	{
		$sql = "SELECT catID, keypage,status, parentID FROM `tbl_categories` WHERE status = 1 AND keypage = '{$keypage}' ";
		//echo $sql;
		$query = $this->db->query($sql);
		if($query->num_rows() > 0){
			return $query->row();
		}else {
			return FALSE;
		}
	}
	
	/**
	 *  count xem co bao nhieu category
	 */
	public function countCate($id)
	{
		$sql = "SELECT catID,parentID FROM tbl_categories WHERE parentID = $id AND status = 1";
		//echo $sql;
		$query = $this->db->query($sql);
		if($query->num_rows() > 0){
			return $query->num_rows();
		}else {
			return FALSE;
		}
	}
	
	/**
	 *  count xem co bao nhieu category static
	 */
	static public function staticCountCate($id)
	{
		$sql = "SELECT catID,parentID FROM tbl_categories WHERE parentID = $id AND status = 1";
		//echo $sql;
		$query = $this->db->query($sql);
		if($query->num_rows() > 0){
			return $query->num_rows();
		}else {
			return FALSE;
		}
	}
	
	
	
	/*
	 * getdetail
	 */
	public function getCategoryDetail($key, $value)
	{
		$sql = "SELECT catID, parentID, status, imageBanner1, imageBanner2, urlBanner1, urlBanner2,content, catName, metaTitle, metaDes, metaKey  FROM tbl_categories WHERE $key = '".$value."' AND status = 1";
		$query = $this->db->query($sql);
		if($query->num_rows() > 0){
			return $query->row();
		}else {
			return FALSE;
		}
	}
	
	
	/*
	 * lay ra toan bo category con trong category 
	*/
	public function getCategoryUri($keypage)
	{
		$sql = "SELECT catID, catName, keypage, catImage FROM `tbl_categories` WHERE parentID = (SELECT catID FROM tbl_categories WHERE keypage = '$keypage') AND status = 1 ;";
		//echo $sql;
		$query = $this->db->query($sql);
		if($query->num_rows() > 0){
			return $query->result_array();
		}else {
			return FALSE;
		}
	}
    
    public function getCategoryUriUsingkeyPage($keypage)
    {
        $sql = "SELECT catID, catName, keypage, catImage FROM `tbl_categories` WHERE keypage = '$keypage' AND status = 1 ;";
        //echo $sql;
        $query = $this->db->query($sql);
        if($query->num_rows() > 0){
            return $query->result_array();
        }else {
            return FALSE;
        }
    }
    
	
	public function getCategoryUriDetail($keypage)
    {
        $sql = "SELECT catID, catName, keypage  FROM `tbl_categories` WHERE catID = $keypage AND status = 1 ;";
        //echo $sql;
        $query = $this->db->query($sql);
        if($query->num_rows() > 0){
            return $query->result_array();
        }else {
            return FALSE;
        }
    }
	
	
	/**
	 * lay ra toan bo category athome = 1 
	 */
	function getListCategoryatHome()
	{
		$sql =  "SELECT catID, catName, keypage FROM `tbl_categories` WHERE parentID = 0 AND athome = 1 AND status = 1 ORDER BY stt ASC";
		$query = $this->db->query($sql);
		if($query->num_rows() > 0){
			return $query->result_array();
		}else {
			return false;
		}
	}
	
	/**
	 * lấy ra toàn bộ category dựa vào  parentid
	 */
	static function getListCategoryatHomeParent($parentID)
	{
		
		$sql =  "SELECT catID, parentID, catName, keypage, athome, stt  FROM `tbl_categories` WHERE parentID = $parentID AND athome = 1 AND status = 1 ORDER BY stt ASC";
		//echo $sql;
		$query = mysql_query($sql);
		if($query){
			return $query;
		}else {
			return false;
		}
	}
	
	/**
	 * lay ra duong danh toi san pham 
	 */
	public function categoryTree($id)
	{
		$resultall = array();
		$sql = "SELECT catID, parentID, catName, keypage,status  FROM `tbl_categories` WHERE catID = $id  AND status = 1";
// 		echo $sql."<br/>";
		$query = $this->db->query($sql);
		$results = $query->result_array();
		$resultall[] = $results;
		if($results[0]['parentID'] != 0){
			$sql1 = "SELECT catID, parentID, catName,keypage, status  FROM `tbl_categories` WHERE catID = ".$results[0]['parentID']."  AND status = 1";
// 			echo $sql1."<br/>";
			$query1 = $this->db->query($sql1);
			$results1 = $query1->result_array();
			$resultall[] = $results1;
			
			if($results1[0]['parentID'] != 0){
				$sql2 = "SELECT catID, parentID, catName,keypage, status  FROM `tbl_categories` WHERE catID = ".$results1[0]['parentID']."  AND status = 1";
// 				echo $sql2."<br/>";
				$query2 = $this->db->query($sql2);
				$results2 = $query2->result_array();
				$resultall[] = $results2;
			}
			
		}
		return $resultall;
	}
	
	public function categoryTreekeypage($id)
	{
		$resultall = array();
		$sql = "SELECT catID, parentID, catName, keypage,status  FROM `tbl_categories` WHERE keypage = '".$id."'  AND status = 1";
 		//echo $sql."<br/>";
		$query = $this->db->query($sql);
		$results = $query->result_array();
		$resultall[] = $results;
		if($results[0]['parentID'] != 0){
			$sql1 = "SELECT catID, parentID, catName, keypage, status  FROM `tbl_categories` WHERE catID = ".$results[0]['parentID']."  AND status = 1";
// 			echo $sql1."<br/>";
			$query1 = $this->db->query($sql1);
			$results1 = $query1->result_array();
			$resultall[] = $results1;
			
			if($results1[0]['parentID'] != 0){
				$sql2 = "SELECT catID, parentID, catName, status  FROM `tbl_categories` WHERE catID = ".$results1[0]['parentID']."  AND status = 1";
// 				echo $sql2."<br/>";
				$query2 = $this->db->query($sql2);
				$results2 = $query2->result_array();
				$resultall[] = $results2;
			}
			
		}
		return $resultall;
	}
	
	
	public function getAllASC()
	{
		$sql = "SELECT catID, parentID, catName, keypage, status,anhngoai,  stt   FROM tbl_categories  WHERE status = 1 ORDER BY catName ASC  ";
		$result = $this->db->query($sql);
		if($result){
			return $result->result_array();
		}else {
			return TRUE;
		}
	}
	
	public function listCategorysOrderstt()
	{
		$sql = "SELECT catID, parentID, catName, keypage, status,anhngoai,  stt   FROM tbl_categories  WHERE status = 1 ORDER BY stt ASC  ";
		$result = $this->db->query($sql);
		if($result){
			return $result->result_array();
		}else {
			return TRUE;
		}
	}
    
    // lay ra toan bo category co CatID = 0
    public function getAllCateParent0()
    {
        $sql = "SELECT catID, parentID,keypage, catName, anhngoai FROM tbl_categories WHERE parentID = 0 AND status = 1 ORDER BY stt ASC ";
        $query = $this->db->query($sql);
        if($query){
            return $query->result_array();
        }else {
            return false;
        }
    }
    
    public function getAllCateParent($catID)
    {
        $sql = "SELECT catID, parentID, catName FROM tbl_categories WHERE parentID = $catID AND status = 1 ORDER BY stt ASC ";
        $query = $this->db->query($sql);
        if($query){
            return $query->result_array();
        }else {
            return false;
        }
    }
    
    // lay ra category dua vao keypage
    public function getCategoryUsingKeyPage($keypage)
    {
        $sql = "SELECT catID, parentID FROM tbl_categories WHERE keypage = '".$keypage."' AND status = 1";
        $query = $this->db->query($sql);
        if($query){
            return $query->row();
        }else {
            return false;
        }
    }
     // lay ra category dua vao CatID
    public function getCategoryUsingCatID($ID)
    {
        $sql = "SELECT catID, parentID FROM tbl_categories WHERE catID = $ID AND status = 1";
        $query = $this->db->query($sql);
        if($query){
            return $query->row();
        }else {
            return false;
        }
    }
    
    
    // static 
    static public function getAllCategory0()
    {
        $sql = "SELECT catID, parentID, catName FROM tbl_categories WHERE parentID = 0 AND status = 1 ORDER BY stt ASC ";
        $query = mysql_query($sql);
        if($query){
            return $query;
        }else {
            return false;
        }
    }
    
    // lay ra toan bo menucon dua vao menu cha
    static function getAllCateMenuParent($parentID)
    {
        $sql =  "SELECT catID, parentID, catName, keypage, status, athome, stt  FROM `tbl_categories` WHERE parentID = $parentID AND status = 1 ORDER BY stt ASC";
        // echo $sql;
        $query = mysql_query($sql);
        if($query){
            return $query;
        }else {
            return false;
        }
    }
    
    
    
    
 
	
	
}
