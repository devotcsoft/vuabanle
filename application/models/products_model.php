<?php

/**
 * @author chinguyen.phpdev@gmail.com
 * @author Otcsoft.com - 2014
 */
class Products_model extends CI_Model
{
	
	public function selectAllNameProduct()
	{
		$sql = "select productName From tbl_product WHERE status = 1";
		$query = $this->db->query($sql);
		if($query->num_rows ($query) > 0 ){
			return $query->result_array();
		}else {
			return false;
		}
	}
	/**
	 * @param $search_param
	 * @param $start
	 * @param $limit
	 */
	function getAllSearch($arraySearch = array() , $start, $limit, $assets = '')
	{
		$assetss = explode(',', $assets);
		$fillterAssest = array_filter($assetss);
		
		
		// $this->db->select('SQL_CALC_FOUND_ROWS   j . * , i.industry_name ,je.email ,je.company' , false);
		$this->db->select('SQL_CALC_FOUND_ROWS  p.productID, 
                                                p.productName,
                                                p.productCode,
                                                p.catID,
                                                p.gia,
                                                p.giamgia,
                                                p.giagiam,
                                                p.status,
                                                p.stt,
                                                p.seo_name,
                                                p.productImage,
                                                p.anhthume,
												p.adstatus,
                                                p.tinhtranghang, br.catName AS brandName, ct.catName AS cateName ' , false);
		$this->db->from('tbl_product p');
		$this->db->join('tbl_categories ct', 'p.catID = ct.catID ', 'left');
		$this->db->join('tbl_categories ct1', 'ct1.catID = ct.parentID ', 'left');
		$this->db->join('tbl_brand br', 'p.thuonghieuID = br.catID ', 'left');
		
		//var_dump($arraySearch['category_id']);
		
		//var_dump($assets);
		if($arraySearch['keysearch'] != "" || $arraySearch['category_id'] != "" || $arraySearch['brand'] != "" ||  $arraySearch['loaisp'] !="" || $arraySearch['tinhtrangsp'] != "" ){
			if($arraySearch['keysearch'] && $arraySearch['keysearch'] != "" ){
				$this->db->like('productName',$arraySearch['keysearch']);
                $this->db->or_like('seo_name',$arraySearch['keysearch']);
                $this->db->or_like('productCode',$arraySearch['keysearch']);
			}
			
			if(isset($arraySearch['category_id']) && $arraySearch['category_id'] > 0 && $arraySearch['category_id'] != ''){
				$this->db->where("(p.catID =  ".$arraySearch['category_id']." OR ct.parentID = ".$arraySearch['category_id']." OR ct1.parentID = ".$arraySearch['category_id'].")");
				//$this->db->or_where('ct.parentID', $arraySearch['category_id']);
				//$this->db->or_where('ct1.parentID ', $arraySearch['category_id'].")");
				
			}
		
			if(isset($arraySearch['brand']) && $arraySearch['brand'] > 0){
				$this->db->where('p.thuonghieuID',$arraySearch['brand']);
			}
			if(isset($arraySearch['loaisp']) && $arraySearch['loaisp'] > 0){
				switch ($arraySearch['loaisp']){
					case 1:
						$this->db->where('p.sale', 1);
						break;
					case 2:
						$this->db->where('p.producthot', 1);
						break;
					case 3:
						$this->db->where('p.banchay', 1);
						break;
					case 4:
						$this->db->where('p.promoi', 1);
						break;
					case 5:
						$this->db->where('p.noibat', 1);
						break;
				}
			}
			
			
			if(isset($arraySearch['tinhtrangsp']) && $arraySearch['tinhtrangsp'] > 0){
				switch ($arraySearch['tinhtrangsp']){
						case 1:
							$this->db->where('p.tinhtranghang', 1);
							break;
						case 2:
							$this->db->where('p.tinhtranghang', 2);
							break;
						case 3:
							$this->db->where('p.tinhtranghang', 3);
							break;
					}
			}
		}
		
		
		
		if($assets != ''){
			$where = '';
			foreach ($fillterAssest as $key => $fillterAsses) {
				//$this->db->or_where('j.catID', $fillterAsses);
				//$this->db->where("(p.catID =  ".$arraySearch['category_id']." OR ct.parentID = ".$arraySearch['category_id']." OR ct1.parentID = ".$arraySearch['category_id'].")");
				$where .= "(p.catID =  ".$fillterAsses." OR ct.parentID = ".$fillterAsses." OR ct1.parentID = ".$fillterAsses.")";
			}
			$where = str_replace (')(' , ' or ' , $where);
			//var_dump($where);
			$this->db->where($where);
		}
		
		
		
		
		$this->db->order_by("productID", "DESC");
		$this->db->limit($limit, $start);
		$query = $this->db->get();
		$sql= $this->db->last_query();
		//echo $sql;
		$this->db->select("FOUND_ROWS() as total_record");
		$rRes = $this->db->get();
		$total_records = $rRes->row_array();
		$total_record = $total_records['total_record'];
		
		//var_dump($total_record);
		return array(
				'total_record' => $total_record,
				'products' => $query->result_array(),
				'sql' => $sql,
		);
	}
	
	
	public function getBigsale()
	{
		$sql = "SELECT  p.productID, 
		                p.productName,
		                p.productCode,
		                p.catID,
		                p.gia,
		                p.giamgia,
		                p.giagiam,
		                p.status,
		                p.stt,
		                p.seo_name,
		                p.productImage,
		                p.anhthume,
						p.adstatus,
						p.saletime,
						p.tinhtranghang FROM tbl_product p where sale = 1";
		//echo $this->db->last_query();
		$query = $this->db->query($sql);
		if($query) {
			return $query->result_array();
		}else {
			return false;
		}
	}
	
	
	static function getAllProductCate($cateid)
	{
		$sql = "SELECT SQL_CALC_FOUND_ROWS
		            p.productID,
					p.catID,
					p.anhthume,
					p.productImage,
					p.gia,
					p.giamgia,
					p.giagiam,
					p.seo_name,
					p.productName,
					p.status,
					p.tinhtranghang
					, ct.catName AS cateName
				FROM
					(`tbl_product` p)
				LEFT JOIN `tbl_categories` ct ON `p`.`catID` = `ct`.`catID`
				LEFT JOIN `tbl_categories` ct1 ON `ct1`.`catID` = `ct`.`parentID`
				WHERE
					(
						p.catID = $cateid
						OR ct.parentID = $cateid
						OR ct1.parentID = $cateid
					)
				AND productnew = 1 AND p.status = 1 AND p.adstatus = 1
				ORDER BY
					`productID` DESC LIMIT 4";
		//echo $sql;
		//die();
		$query = mysql_query($sql);
		if($query){
			return $query;
		}else {
			return false;
		}
	}
	
	
	/**
	 * Check xem SEO_NAME da ton tai hay chua
	 * @param unknown $id
	 * @param unknown $value
	 * @return boolean
	 */
	public function checkSlug($id, $value)
	{
		$sql = "SELECT * FROM `tbl_product` WHERE productID = $id AND seo_name = '{$value}' ";
		//echo $sql;
		$query = $this->db->query($sql);
		if($query->num_rows() > 0){
			return TRUE;
		}else {
			return FALSE;
		}
	}
    
    // lay ra san pham hot
    public function getProducthot()
    {
   	    $sql = "SELECT productID, productName,anhthume, productImage, gia, giagiam, giamgia, seo_name, producthot, tinhtranghang  FROM `tbl_product` WHERE noibat = 1 AND status = 1 ORDER BY stt ASC LIMIT 8 ";
		//echo $sql;
		$query = $this->db->query($sql);
		if($query->num_rows() > 0){
			return $query->result_array();
		}else {
			return FALSE;
		}
    }
    
    
    // lay ra san pham moi
    public function getProductnews()
    {
    	$sql = "SELECT  productName,seo_name FROM `tbl_product` WHERE productnew = 1 AND status = 1 ORDER BY stt ASC LIMIT 5";
    	//echo $sql;
    	$query = $this->db->query($sql);
    	if($query->num_rows() > 0){
    		return $query->result_array();
    	}else {
    		return FALSE;
    	}
    }

    /*
     * Check xem keypage co phai la cua product hay khong khong
    */
    public function checkKeypage($keypage)
    {
    	$sql = "SELECT catID, seo_name,status FROM `tbl_product` WHERE status = 1 AND seo_name = '{$keypage}' ";
    	$query = $this->db->query($sql);
    	if($query->num_rows() > 0){
    		return TRUE;
    	}else {
    		return FALSE;
    	}
    }

    
    /**
     * Lay ra detail cua san pham 
     */
    public function getProductDetail($seo_name)
    {
    	$sql = "SELECT
					p.productID,
					p.productName,
					p.productNamevi,
					p.productCode,
					p.catID,
					p.thuonghieuID,	
					p.dotuoi,
					p.gia,
					p.giagiam,
					p.giamgia,
					p.thongso,
					p.spbaogom,
					p.anhthume,
					p.productDetail,
					p.video,
					p.productImage,
					p.banchay,
					p.productnew,
					p.producthot,
					p.`STATUS`,
					p.stt,
					p.seo_name,
					p.metaTitle,
					p.metaDes,
					p.metaKey,
					p.metaAuthor,
					p.galleryImage,
					p.color,
					p.modname,
					p.chatlieu,
					p.xuatxu,
					p.kichthuoc,
					p.baohanh,
					p.tinhtranghang,
					p.anhkhuyenmai,
					p.posup,
					p.hinhthucgiaonhan,
					p.view,
					p.created,
					p.updated,
					p.ghod,
					cat.catName ,
					br.catName as brandName
					FROM
						tbl_product AS p
					LEFT JOIN tbl_categories cat ON p.catID = cat.catID
					LEFT JOIN tbl_brand br ON p.thuonghieuID = br.catID
					WHERE
						seo_name = '{$seo_name}'
    			";
    	$query = $this->db->query($sql);
    	if($query->num_rows() > 0){
    		return $query->row();
    	}else {
    		return FALSE;
    	}
    }
    
    /**
     * @param lay ra 4 san pham cung chung loai
     */
    static function getAllProductdifferent($cateid)
    {
    	$sql = "SELECT SQL_CALC_FOUND_ROWS
			    	p.productID,
                    p.productName,
                    p.anhthume,
                    p.productImage,
                    p.gia,
                    p.giagiam,
                    p.giamgia,
                    p.seo_name,
                    p.tinhtranghang,
                    ct.catName AS cateName
			    	FROM
				    	(`tbl_product` p)
				    	LEFT JOIN `tbl_categories` ct ON `p`.`catID` = `ct`.`catID`
				    	LEFT JOIN `tbl_categories` ct1 ON `ct1`.`catID` = `ct`.`parentID`
			    	WHERE
			    	(
				    	p.catID = $cateid
				    	OR ct.parentID = $cateid
				    	OR ct1.parentID = $cateid
			    	)
			    	AND p.status = 1 AND p.adstatus = 1
			    	ORDER BY
			    	RAND() DESC LIMIT 4";
		//echo $sql;
    	$query = mysql_query($sql);
    	if($query){
    		return $query;
    	}else {
    		return false;
   		}
    }
    
    
    /**
     * @param lay ra 4 san pham cung chung loai 
     */
    public function getProductUsingCate($cateid)
    {
    	$sql = "SELECT SQL_CALC_FOUND_ROWS
			    	p.productID, 
			    	p.productName,
			    	p.catID,
			    	p.gia,
			    	p.giamgia,
			    	p.giagiam,
			    	p.status,
			    	p.stt,
			    	p.seo_name,
			    	p.productImage,
			    	p.tinhtranghang,
			    	ct.catName AS cateName
			    	FROM
				    	(`tbl_product` p)
				    	LEFT JOIN `tbl_categories` ct ON `p`.`catID` = `ct`.`catID`
				    	LEFT JOIN `tbl_categories` ct1 ON `ct1`.`catID` = `ct`.`parentID`
			    	WHERE
			    	(
				    	p.catID = $cateid
				    	OR ct.parentID = $cateid
				    	OR ct1.parentID = $cateid
			    	)
			    	AND p.status = 1 AND p.adstatus = 1
			    	ORDER BY
			    	RAND() DESC LIMIT 4";
		 //echo $sql;
    	$query = $this->db->query($sql);
    	if($query){
    		return $query->result_array();
    	}else {
    		return false;
   		}
    }
    
    
    /*
     * lay ra 4 san pham ngau nhien
     */
    
    public function getProductRandom()
    {
    	$sql =  "SELECT p.productID, 
                    p.productName,
                    p.catID,
                    p.gia,
                    p.giamgia,
                    p.giagiam,
                    p.status,
                    p.stt,
                    p.seo_name,
                    p.productImage,
                    p.anhthume,
                    p.tinhtranghang FROM `tbl_product` as p WHERE p.status = 1 AND p.adstatus = 1 ORDER BY RAND() LIMIT 4";
   		$query = $this->db->query($sql);
		if($query->num_rows() > 0){
			return $query->result_array();
		}else {
			return FALSE;
		}
    }
    
    /**
	 *  lay ra so luong san  co trong  categofy
	 */
    public function countAllProductUsingCate($cateid)
    {
    	$sql = "SELECT SQL_CALC_FOUND_ROWS
					COUNT(p.productName) as countDroduct
				FROM
					(`tbl_product` p)
				LEFT JOIN `tbl_categories` ct ON `p`.`catID` = `ct`.`catID`
				LEFT JOIN `tbl_categories` ct1 ON `ct1`.`catID` = `ct`.`parentID`
				WHERE
					(
						p.catID = $cateid
						OR ct.parentID = $cateid
						OR ct1.parentID = $cateid
					)
				AND p. STATUS = 1 AND p.adstatus = 1
				ORDER BY
					p.stt DESC
				";
    	$query = $this->db->query($sql);
    	if($query){
    		return $query->row();
    	}else {
    		return false;
   		}
    }
	
	/*
	 * dem so san pham dua vao catID
	 */
	
	public static function CountProductUsingCate($cateid)
	{
		$sql = "SELECT catID FROM tbl_product WHERE catID = $cateid and `status` = 1 ORDER BY stt";
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
    
    /*
     * dem so san pham dua vao catID
     */
    
    public static function CountProductUsingBrand($cateid)
    {
        $sql = "SELECT catID FROM tbl_product WHERE thuonghieuID = $cateid and `status` = 1 ORDER BY stt";
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
    
    /*
     * lay ra gia thap nhat va cao nhat
     */
    public function getMinMaxPrice()
    {
        $sql = "SELECT MIN(gia) as giathap, MAX(gia) as giacao FROM tbl_product WHERE  `status` = 1 AND gia != 0 ";
        $query = $this->db->query($sql);
        if($query){
            return $query->row();
        }else {
            return false;
        }
    }
    
    /*
     * lay ra product trong danh muc
     */
     function getAllSearchHome($arraySearch = array() , $start, $limit, $cateid)
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
                                                p.anhthume,
                                                p.tinhtranghang,  ct.catName AS cateName ' , false);
        $this->db->from('tbl_product p');
        $this->db->join('tbl_categories ct', 'p.catID = ct.catID ', 'left');
        $this->db->join('tbl_categories ct1', 'ct1.catID = ct.parentID ', 'left');
        
        $this->db->where("(p.catID =  ".$cateid." OR ct.parentID = ".$cateid." OR ct1.parentID = ".$cateid.")");
        if(isset($arraySearch['price_from']) && $arraySearch['price_to'] != "")
        {
             $this->db->where('p.gia >=', $arraySearch['price_from']);
             $this->db->where('p.gia <=', $arraySearch['price_to']);  
        }
      
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



    /*
     * search
     */
     function getAllSearchParamHome($arraySearch = array() , $start, $limit, $cateid)
     {
         
        $this->db->select('SQL_CALC_FOUND_ROWS  p.productID, 
                                                p.productName,
                                                p.catID,
                                                p.gia,
                                                p.giamgia,
        										p.giagiam,
                                                p.productnew,
                                                p.producthot,
                                                p.promoi,
                                                p.status,
                                                p.stt,
                                                p.seo_name,
                                                p.productImage,
                                                p.anhthume,
                                                p.tinhtranghang,  ct.catName AS cateName ' , false);
        $this->db->from('tbl_product p');
        $this->db->join('tbl_categories ct', 'p.catID = ct.catID ', 'left');
        
        if(isset($arraySearch['CateParent']) && $arraySearch['CateParent'] != "")
        {
             $this->db->where('p.catID', $arraySearch['CateParent'] );  
        }
        if(isset($arraySearch['Catebrand']) && $arraySearch['Catebrand'] != "")
        {
             $this->db->where('p.thuonghieuID', $arraySearch['Catebrand'] );  
        }else {
            $this->db->join('tbl_categories ct1', 'ct1.catID = ct.parentID ', 'left');
            $this->db->where("(p.catID =  ".$cateid." OR ct.parentID = ".$cateid." OR ct1.parentID = ".$cateid.")");
        }
        if(isset($arraySearch['CateTt']) && $arraySearch['CateTt'] != "")
        {
            if($arraySearch['CateTt'] == 1){
                $this->db->where('p.promoi', 1 );    
            }elseif($arraySearch['CateTt'] == 2) {
                $this->db->where('p.producthot', 1);
            }
               
        }
        
        if(isset($arraySearch['price_from']) && $arraySearch['price_to'] != "")
        {
             $this->db->where('p.gia >=', $arraySearch['price_from']);
             $this->db->where('p.gia <=', $arraySearch['price_to']);  
        }
        
      
        $this->db->where('p.status', 1 ); 
        $this->db->where('p.adstatus', 1 );
        
        if(isset($arraySearch['CateOrder']) && $arraySearch['CateOrder'] != "")
        {
            if($arraySearch['CateOrder'] == 1){
                $this->db->order_by("gia", "DESC");
            }else {
                $this->db->order_by("gia", "ASC");
            }
               
        }else {
            $this->db->order_by("gia", "DESC");    
        }
        
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
    
    
    // dem toan bo san pham
    public function countAllProductStatus()
    {
        $sql = "SELECT count(catID) AS countProduct FROM tbl_product WHERE status = 1";
        $query = $this->db->query($sql);
        if($query->num_rows() > 0){
            return $query->row();
        }else {
            return FALSE;
        }
    }
    
    // dem so luong san pham co trong category
    static public function countAllProductUsingCateStatic($cateid)
    {
        $sql = "SELECT SQL_CALC_FOUND_ROWS
                    p.productID as countDroduct
                FROM
                    (`tbl_product` p)
                LEFT JOIN `tbl_categories` ct ON `p`.`catID` = `ct`.`catID`
                LEFT JOIN `tbl_categories` ct1 ON `ct1`.`catID` = `ct`.`parentID`
                WHERE
                    (
                        p.catID = $cateid
                        OR ct.parentID = $cateid
                        OR ct1.parentID = $cateid
                    )
                AND p. STATUS = 1 AND p.adstatus = 1
                ORDER BY
                    p.stt DESC
                ";
        
        $query = mysql_query($sql);
        $query = mysql_num_rows($query);
        if($query){
            return $query;
        }else {
            return false;
        }
    }
    
    
    
    
    function getAllSearchHomeEve($arraySearch = array() , $start, $limit)
     {
         
        $this->db->select('SQL_CALC_FOUND_ROWS  p.productID, 
                                                p.productName,
                                                p.catID,
                                                p.gia,
                                                p.giamgia,
                                                p.giagiam,
                                                p.promoi,
                                                p.producthot,
                                                p.banchay,
                                                p.status,
                                                p.stt,
                                                p.seo_name,
                                                p.productImage,
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
        if(isset($arraySearch['lefprice']) && $arraySearch['lefprice'] != "")
        {
        	$this->db->where('p.gia >=', $arraySearch['lefprice']);
        	$this->db->where('p.gia <=', $arraySearch['rightLabel']);
        }
        
        if(isset($arraySearch['CateParent']) && $arraySearch['CateParent'] != "")
        {
             // $this->db->where('p.catID', $arraySearch['CateParent'] );  
             //$this->db->join('tbl_categories ct1', 'ct1.catID = ct.parentID ', 'left');
             $this->db->where("(p.catID =  ".$arraySearch['CateParent']." OR ct.parentID = ".$arraySearch['CateParent']." OR ct1.parentID = ".$arraySearch['CateParent'].")");
        }
        if(isset($arraySearch['Catebrand']) && $arraySearch['Catebrand'] != "")
        {
             $this->db->where('p.thuonghieuID', $arraySearch['Catebrand'] );  
        }
        
        if(isset($arraySearch['keysearch']) && $arraySearch['keysearch'] != "")
        {
        	 $wherelike = "(p.productName LIKE '%".$arraySearch['keysearch']."%' OR p.seo_name LIKE '%".$arraySearch['keysearch']."%' OR p.productCode LIKE '%".$arraySearch['keysearch']."%')";
        	 $this->db->where($wherelike);
        }
        
        //die(var_dump($arraySearch['subsearch']));
        if(isset($arraySearch['subsearch2'])){
        	$this->db->where('p.thuonghieuID', $arraySearch['subsearch2']);
        }else{
        	if(isset($arraySearch['subsearch']) && $arraySearch['subsearch'] != "")
        	{
        		if($arraySearch['subsearch'] == 'hang-moi-ve'){
        			$this->db->where('p.promoi', 1 );
        		}else if($arraySearch['subsearch'] == 'ban-chay'){
        			$this->db->where('p.banchay', 1 );
        		}else if($arraySearch['subsearch'] == 'hang-hot'){
        			$this->db->where('p.producthot', 1 );
        		}
        	} 	
        }
        
        
        
        if(isset($arraySearch['CateOrder']) && $arraySearch['CateOrder'] != "")
        {
            if($arraySearch['CateOrder'] == 1){
                $this->db->order_by("gia", "DESC");
            }else {
                $this->db->order_by("gia", "ASC");
            }
               
        }else {
        	if( isset($arraySearch['orderby']) && $arraySearch['orderby']  == "ASC"){
        		$this->db->order_by("gia", "ASC");
        	}else {
        		$this->db->order_by("gia", "DESC");
        	}
        }
        
        $this->db->where('p.status', 1);
        $this->db->where('p.adstatus', 1 );
        
        
        
        //var_dump($arraySearch);
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

    function getImages($id){
        $query = $this->db->get_where('tbl_product', array(
            'productID' => $id
        ));
        return $query->result_array();
    }
    
    
    ##############################_____VUA_BAN_LE_V3_____###################################
    
    public function countAllProd($id)
    {
    	$sql =  "
    			SELECT
				COUNT(productID)
				FROM
					tbl_product p
				LEFT JOIN tbl_categories c ON c.catID = p.catID
				LEFT JOIN tbl_categories c1 ON c1.catID = c.parentID
				LEFT JOIN tbl_categories c2 ON c2.catID = c1.parentID
				WHERE
				(
					p.catID = 56 or c.parentID = 56 or c1.parentID = 56 or c2.parentID = 56
				)
				AND
				p.`status` = 1;
		";
    	$query = $this->db->query($sql);
    	if($query->num_rows() > 0){
    		return  $query->row();
    		$query->free_result();
    	}else {
    		return FALSE;
    	}
    }
    
    public function getProdUsingCates($id)
    {
    	$sql =  "
    			SELECT
					p.productID,
                    p.productName,
                    p.catID,
                    p.gia,
                    p.giamgia,
                    p.giagiam,
                    p.status,
                    p.stt,
                    p.seo_name,
                    p.productImage,
					p.anhthume,
					p.tinhtranghang
				FROM
					tbl_product p
				LEFT JOIN tbl_categories c ON c.catID = p.catID
				LEFT JOIN tbl_categories c1 ON c1.catID = c.parentID
				LEFT JOIN tbl_categories c2 ON c2.catID = c1.parentID
				WHERE
				(
					p.catID = $id or c.parentID = $id or c1.parentID = $id or c2.parentID = $id
				)
				AND
				p.`status` = 1 AND p.adstatus = 1  ORDER BY RAND() limit 20;
		";
    	$query = $this->db->query($sql);
    	if($query->num_rows() > 0){
    		return  $query->result_array();
    		$query->free_result();
    	}else {
    		return FALSE;
    	}
    }
    
 	// getproductall
    function getAllProducts($arraySearch = array() , $limit, $start, $cateid)
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
                                                p.anhthume,
                                                p.tinhtranghang,  ct.catName AS cateName ' , false);
    	$this->db->from('tbl_product p');
    	$this->db->join('tbl_categories ct', 'p.catID = ct.catID ', 'left');
    	$this->db->join('tbl_categories ct1', 'ct1.catID = ct.parentID ', 'left');
    	$this->db->join('tbl_categories ct2', 'ct2.catID = ct1.parentID ', 'left');
    
    	$this->db->where("(p.catID =  ".$cateid." OR ct.parentID = ".$cateid." OR ct1.parentID = ".$cateid." OR ct2.parentID = ".$cateid.")");
    	
    	if(isset($arraySearch['brand']) && $arraySearch['brand'] != ""){
    		$this->db->where('p.thuonghieuID =', $arraySearch['brand']);
    	}
    	
    	if(isset($arraySearch['lefprice']) && $arraySearch['lefprice'] != 0)
    	{
    		$this->db->where('p.gia >=', $arraySearch['lefprice']);
    		$this->db->where('p.gia <=', $arraySearch['rightLabel']);
    	}
    
    	$this->db->where('p.status', 1 );
    	$this->db->where('p.adstatus', 1 );
    	//var_dump($arraySearch['order']);
    	if(isset($arraySearch['order'])){
    		$this->db->order_by("gia", $arraySearch['order']);
    	}else {
    		$this->db->order_by("gia", "ASC");
    	}
    	
    	$this->db->limit($limit, $start);
    	$query = $this->db->get();
    	$sql= $this->db->last_query();
    	//echo $sql;
    	$this->db->select("FOUND_ROWS() as total_record");
    	$rRes = $this->db->get();
    	$total_records = $rRes->row_array();
    	$total_record = $total_records['total_record'];
    	//echo $total_record;
    
    	 
    	return array(
    			'total_record' => $total_record,
    			'products' => $query->result_array(),
    			'sql' => $sql,
    	);
    }   
    
    public  function ischeckproduct($value, $id)
    {
    	$sql = "UPDATE tbl_product SET adstatus = $value WHERE productID = $id ";
    	$query = $this->db->query($sql);
    	if($this->db->affected_rows()){
    		return  true;
    		$query->free_result();
    	}else {
    		return FALSE;
    	}
    }
    
    
    public function getRandProductlq($id)
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
					tbl_product p
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
				AND p.`status` = 1 AND p.adstatus = 1 ORDER BY RAND() LIMIT 5
    			";
		$query = $this->db->query ( $sql );
		if ($query->num_rows () > 0) {
				return $query->result_array ();
				$query->free_result ();
			} else {
				return FALSE;
			}
		}
	}
	
	
	
	
	
	