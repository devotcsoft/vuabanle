<?php
/**
 * @author		Chinguyen.phpdev@gmail.com Dev 
 * @copyright	Copyright (c) 2014 , OtcSoft.com , Inc.
 */

class Home_model extends CI_Model
{
	public function getCateSearch()
	{
		$sql = "SELECT catId, catName FROM tbl_categories WHERE `status` = 1 AND parentid = 0";
		$query = $this->db->query($sql);
		if($query){
			return $query->result_array();
		}else {
			return false;
		}
		
	}
	
	public function getAll()
	{
		$sql = "SELECT catId,parentID, catName FROM tbl_categories WHERE `status` = 1 ORDER BY catName ASC";
		$query = $this->db->query($sql);
		if($query){
			return $query->result_array();
		}else {
			return false;
		}
	}
	
	
	public function getAllCategoryTree()
	{
		$return = $data = array();
		$sql = "SELECT catID, parentID, catName, icon, keymaket, productcate, imgAds, keypage FROM `tbl_categories` WHERE `status` = 1 AND parentID = 0  ORDER BY catName ASC";
		$query = $this->db->query($sql);
		$results = $query->result_array();
		foreach ($results as $key=>$item){
			if($item['parentID'] == 0){
				unset($results[$key]);
				$item['cate_child1'] = $this->orderCat($item['catID']);
				$return[] = $item;
				$query->free_result();
			}
			$query->free_result();

		}
		$query->free_result();
		//print_r($return);
		return $return;
	}

	public function orderCat($id)
	{
		$return = array();
		$sql = "SELECT catID, parentID, catName, keypage FROM tbl_categories WHERE `status` = 1 AND parentid = $id ORDER BY stt";
		$query = $this->db->query($sql);
		$rows = $query->result_array();		
		foreach($rows as $key=>$item) {
			unset($rows[$key]);
			$item["cate_child2"] = $this->orderCat($item['catID']);
			$return[] =  $item;
			$query->free_result();
		}	
		$query->free_result();
		return $return;
	}
	
	// lay ra toan bo thong tin cua gallery
	public function getAllGallery()
	{
		$sql = "SELECT id, url, type, image FROM tbl_padding WHERE `status` = 1";
		$query = $this->db->query($sql);
		if($query){
			return $query->result_array();
			$query->free_result();
		}else{
			return false;
		}
	}
	
	// lay ra toan bo thuong hieu 
	public function getAllBrand()
	{
		$sql = "SELECT catID, catImage, catName FROM tbl_brand WHERE `status` = 1 AND athome = 1  ORDER BY stt LIMIT 24 ";
		$query = $this->db->query($sql);
		if($query){
			return $query->result_array();
			$query->free_result();
		}else{
			return false;
		}
	}
	
	public function tuyenDung5()
	{
		$sql = "SELECT newsTitle, seo_name FROM tbl_tuyendung WHERE `status` = 1 ORDER BY newsCreated DESC LIMIT 5 ";
		$query = $this->db->query($sql);
		if($query){
			return $query->result_array();
			$query->free_result();
		}else{
			return false;
		}
	}
	
	public function tintuc5()
	{
		$sql = "SELECT newsTitle, seo_name FROM tbl_news WHERE `status` = 1 ORDER BY stt LIMIT 5 ";
		$query = $this->db->query($sql);
		if($query){
			return $query->result_array();
			$query->free_result();
		}else{
			return false;
		}
	}
	
	public function getabout7()
	{
		$sql = "SELECT newsTitle, seo_name FROM tbl_news WHERE `status` = 1 ORDER BY RAND() LIMIT 7 ";
		$query = $this->db->query($sql);
		if($query){
			return $query->result_array();
			$query->free_result();
		}else{
			return false;
		}
	}
	
	
	/* DÙNG ĐỂ LƯU 4 SẢN PHẨM */
	
	// luc id san pham vua xem
	public function insertLast($id, $AGENT, $ADDR)
	{
		$sql = "INSERT INTO tbl_save (pid, HTTP_USER_AGENT, REMOTE_ADDR) VALUE($id, '{$AGENT}', '{$ADDR}')";
		$query = $this->db->query($sql);
		if ($this->db->affected_rows()) {
			return $this->db->insert_id();
		}else {
			return false;
		}
	}
	
	public function getIdorder($id, $ADDR)
	{
		$sql = "SELECT pid, REMOTE_ADDR FROM tbl_save WHERE pid = $id AND REMOTE_ADDR = '{$ADDR}' ";
		$query = $this->db->query($sql);
		if ($query->result_array() != null) {
			// ton tai roi
			return true;
		}else {
			// chua ton tai
			return false;
		}
	}
	
	public function getAllorder($AGENT, $ADDR)
	{
		$sql = "
				SELECT
				p.productID,
				p.productName,
				p.productCode,
				p.catID,
				p.gia,
				p.giamgia,
				p.giagiam,
				p.promoi,
				p.producthot,
				p.productnew,
				p.banchay,
				p. STATUS,
				p.stt,
				p.seo_name,
				p.productImage,
				p.anhthume,
				p.tinhtranghang
			FROM
				tbl_save ts
			LEFT JOIN tbl_product p ON ts.pid = p.productID
			WHERE
				HTTP_USER_AGENT = '{$AGENT}'
			AND REMOTE_ADDR = '{$ADDR}'
		";
		$query = $this->db->query($sql);
		if($query){
			return $query->result_array();
			$query->free_result();
		}else{
			return false;
		}
			
	}
	
	public function delIDorder($pid)
	{
		$sql =  "DELETE FROM tbl_save WHERE pid = $pid ";
		$query = $this->db->query($sql);
		if($this->db->affected_rows()){
			return TRUE;
		}else{
			return FALSE;
		}	
	}
	
	public function viewproduct($view, $pid)
	{
		$sql = "UPDATE tbl_product SET view = '{$view}' WHERE productID = $pid ";
		$query = $this->db->query($sql);
		if($this->db->affected_rows()){
			return TRUE;
		}else{
			return FALSE;
		}
	}
	
	public function checkisemail($email)
	{
		$query = $this->db->get_where('tbl_member', array('email' => "$email"));
		if($query->num_rows() > 0) {
			return FALSE;
		}else {
			return TRUE;
		}
	}
	

	
}