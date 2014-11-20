<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once 'application/controllers/layout.php';

/**
 * @author chinguyen.phpdev@gmail.com
 * @author Otcsoft.com - 2014
 */
class Search extends Layout {
    
    public function __construct()
    {
        parent::__construct();
        //$this->output->cache(5) ;
    }
    
    public function index()
    {
    	$uri = $this->uri->segment(1);
    	$uri2 = $this->uri->segment(2);
    	$arraySearch = array();
    	if($this->input->post()){
    		$arraySearch['keysearch'] = $this->input->post('keysearch');
    	}else{
    		$arraySearch['keysearch']  = $this->input->get('keysearch');
    	}
    	
    	if(isset($uri2)){
    		if($uri2 == 'thuonghieu'){
    			$arraySearch['subsearch2'] = $this->uri->segment(3);
    		}else{
    			$arraySearch['subsearch'] = $uri2;
    		}
    	}
    	
    	// TH1 : CHUA CLICK VAO CAI GI CA
    	if(!empty($_GET)){
    		$allurl = $urlBrand = $urlPrice = $urlorder =  $_SERVER['REQUEST_URI'];
    	}else{
    		$allurl = $urlBrand = $urlPrice = $urlorder =  $_SERVER['REQUEST_URI'].'?';
    	}
    	
    	// TH2 : THUONG HIEU
    	if(!empty($_GET['brand']) && $_GET['brand'] != 0){
    		$urlPrice = $allurl.'&';
    		$urlorder = $allurl.'&';
    		if(!empty($_GET['order'])){
    			$urlordercut = substr($allurl, -9);
    			$urlorder = str_replace($urlordercut, '', $allurl);
    		}
    		$arraySearch['brand'] = $_GET['brand'];
    			
    	}
    	
    	// TH2 : THUONG HIEU
    	if(!empty($_GET['lefprice']) && $_GET['lefprice'] != 0){
    		$urlBrand = $allurl.'&';
    		$urlorder = $allurl.'&';
    		if(!empty($_GET['order'])){
    			$urlordercut = substr($allurl, -10);
    			$urlorder = str_replace($urlordercut, '', $allurl);
    		}
    		$arraySearch['lefprice'] = $_GET['lefprice'];
    		$arraySearch['rightLabel'] = $_GET['rightLabel'];
    	}
    	
    	// TH3 : GIA
    	if(isset($_GET['order'])){
    		$urlPrice = $allurl.'&';
    		$urlBrand = $allurl.'&';
    		if($_GET['order']){
    			$urlordercut = substr($allurl, -10);
    			$urlorder = str_replace($urlordercut, '', $allurl);
    		}
    		if ($_GET['order'] == 0){
    			$urlordercut = substr($allurl, -7);
    			$urlorder = str_replace($urlordercut, '', $allurl);
    		}
    		$arraySearch['order'] = $_GET['order'];
    	}
    	
    	$getCateSearchs = $this->home_model->getCateSearch();
    	$getAllCategoryTree = $this->home_model->getAllCategoryTree();
    	
    	$getCateUri = $this->category_model->getAllCateUri(); 
    	
    	$getCategDetail = $this->category_model->getItemDetail($uri);
    	$countCate =  14; //$this->category_model->countCate($getCategDetail->catID);
    	$breadcrumb = array();
    	if ($countCate){
    		$breadcrumb['cap2'] = $getCategDetail;
    		$breadcrumb['cap1'] = 0; //$this->category_model->getOneCategory($getCategDetail->parentID);
    		// cap 2
    		$level =  2;
    		//$getCateUri = 0;//$this->category_model->getCateUri($getCategDetail->catID, $cap = 2);
    	}else{
    		$breadcrumb['cap2'] = 0;//$this->category_model->getOneCategory($getCategDetail->parentID);
    		$breadcrumb['cap1'] = 0;//$this->category_model->getOneCategory($breadcrumb['cap2'][0]['parentID']);
    		$breadcrumb['cap3'] = 0;//$getCategDetail;
    		// cap 3
    		$level =  3;
    		//$getCateUri = $this->category_model->getCateUri($getCategDetail->catID, $cap = 3);
    	}
    	
    	
    	$getBrandUsingCates = $this->brand_model->getBrandUsingAll();
    	
    	
    	$config['per_page'] = 16;
    	$page = 0;
    	
    	if($this->uri->segment(2) && $this->uri->segment(2) != null ){
    		$page = $this->uri->segment(2);
    	}else{
    		$page = 0;
    	}
    	
    	
    	$config['base_url'] = base_url().'/'.$uri;
    	$this->load->library('pagination');
    	
    	
    	if($uri2){
    		if($uri2 == 'thuonghieu'){
    			
    			$actual_link = $_SERVER['REQUEST_URI'];
    			
    			$asc = substr("$actual_link", -3, 3);
    			if($asc == "asc") {
    				$arraySearch['orderby'] = "ASC";
    			}
    			
    			$config['base_url'] = base_url('search/thuonghieu/'.$this->uri->segment(3)) ;
    			$arraySearch['subsearch2'] = $this->uri->segment(3);
    		}else{
    			$arraySearch['subsearch'] = $uri2;
    		}
    	}else {
    		$config['base_url'] = base_url().'/'.$uri;
    	}
    	
    	$getAllProducts = $this->products_model->getAllSearchHomeEve($arraySearch, $page, $config['per_page']);
    	
    	
    	$config['total_rows'] = $getAllProducts['total_record'];
    	
    	
    	if(@$arraySearch['brand'] !='' || @$arraySearch['order'] != '' || @$arraySearch['lefprice'] != ''  || @$arraySearch['keysearch'] != '' ){
    		$config['first_url'] = $config['base_url']."?brand=".@$arraySearch['brand'].'&lefprice='.@$arraySearch['lefprice'].'&rightLabel='. @$arraySearch['rightLabel'].'&order='.@$arraySearch['order'].'&keysearch='. $arraySearch['keysearch'];
    		$this->pagination->suffix = "?brand=".@$arraySearch['brand'].'&lefprice='.@$arraySearch['lefprice'].'&rightLabel='. @$arraySearch['rightLabel'].'&order='.@$arraySearch['order'].'&keysearch='. $arraySearch['keysearch'];
    	}
    	
    	$config['use_page_numbers'] = false;
    	$config['uri_segment'] = 2;
    	$config['num_links'] = 1;
    	$this->pagination->initialize($config);
    	$data["paging"] = $this->pagination->create_links();
    	
    	$this->_data['main_content'] = $this->load->view('v3template/Search_view', array(
    			'getCateSearchs' => $getCateSearchs,
    			'menus' => $getAllCategoryTree,
    			'getCateUris' => $getCateUri,
    			'getBrandUsingCates' => $getBrandUsingCates,
    			'getAllProducts' => $getAllProducts['products'],
    			'paging' => $data['paging'],
    			'urlBrand' => $urlBrand,
    			'urlPrice' => $urlPrice,
    			'urlorder' => $urlorder,
    			'breadcrumb' => $breadcrumb,
    			'level' => $level
    	), true);
    	$this->load->view('v3template/layout_view', $this->_data);
       
    }
    
    
    
    
    // SEARCH HOME
    public function search()
    {
        //var_dump($productnews);
        $getListCategoryatHomes = $this->category_model->getListCategoryatHome();
        // URI
        $uriproduct = $this->uri->segment(1);
        // tach chuoi uri bo -pd
        $categoryTree =  explode("-pd-",$uriproduct);
        
        
        // lay ra toan bo category con  trong category cha
        $getCategoryUsingParent = $this->category_model->getCategoryUri($categoryTree[0]); 
        
        // lay ra toan bo thuong hieu
        $getAllBrands = $this->brand_model->getAllBrand();
        
        // lay ra gia cho san pham
        $getMinMaxPrice = $this->products_model->getMinMaxPrice();
        
        // lay ra 4 san pham ngau nhien
        $listProductRandom = $this->products_model->getProductRandom(); 
        
        /*
         * phan trang
         */
        $config['per_page'] = 16;
        
        $getUrl = $_SERVER['REDIRECT_QUERY_STRING'];
        $strGetUrl = substr($getUrl, 1);
        $explodeUrl = explode("-pd-", $strGetUrl);
        if(isset($explodeUrl[1]))
        {
            $explodeUrlSearch = explode("-", $explodeUrl[1]);
            $CateParent = filter_var($explodeUrlSearch[0], FILTER_SANITIZE_NUMBER_INT);
            if(isset($CateParent) && $CateParent != 0){
                 $arraySearch['CateParent']  = $CateParent;
            }
            $Catebrand = filter_var($explodeUrlSearch[1], FILTER_SANITIZE_NUMBER_INT);
            if(isset($Catebrand) && $Catebrand != 0){
                 $arraySearch['Catebrand']  = $Catebrand;
            }
            $CateTt = filter_var($explodeUrlSearch[2], FILTER_SANITIZE_NUMBER_INT);
            if(isset($CateTt) && $CateTt != 0){
                 $arraySearch['CateTt']  = $CateTt;
            }
            $CateOrder = filter_var($explodeUrlSearch[3], FILTER_SANITIZE_NUMBER_INT);
            if(isset($CateOrder) && $CateOrder != 0){
                 $arraySearch['CateOrder']  = $CateOrder;
            }
        }
        
        $page = $this->uri->segment(2);
        
        $aryCondition['price_from'] =   $this->input->get('price_from');
        $aryCondition['price_to'] =   $this->input->get('price_to');
        
        
        
        $result = $this->products_model->getAllSearchParamHome($arraySearch, $page, $config['per_page'], $getDetail->catID);
        
        $this->load->library('pagination');
        $config['base_url'] = base_url().'/'.$uriproduct;
        $config['total_rows'] = $result['total_record'];
        if(isset($arraySearch['parent']) && $arraySearch['parent'] != ''  ){
            $config['first_url'] = $config['base_url']."?parent=".$arraySearch['parent'].'&cid='.$arraySearch['category_id'].'&th='.$arraySearch['brand'].'&lsp='.$arraySearch['loaisp'].'&tt='.$arraySearch['tinhtrangsp'];;
            $this->pagination->suffix = '?parent='. $arraySearch['parent'].'&cid='.$arraySearch['category_id'].'&th='.$arraySearch['brand'].'&lsp='.$arraySearch['loaisp'].'&tt='.$arraySearch['tinhtrangsp'];
        } 
        $config['use_page_numbers'] = false;
        $config['uri_segment'] = 2;
        $config['num_links'] = 1;
        $this->pagination->initialize($config);
        $data["paging"] = $this->pagination->create_links();

        $config = $this->utility_model->whereOneField('tbl_config', 'config_id', 1);
        $getContent = $this->utility_model->getAllASC('tbl_about', 'status', 1, 'stt');
        $configall = $this->config_model->getConfig();
        $meta = array(
            'title' => 'Vua bán lẻ | Tìm kiếm ',
            'description' => $configall->site_describe,
            'keywords' => $configall->site_keyword,
        );
         
        $this->load->view('search_view', array(
            'config' => $config,
            'getContent' => $getContent,
            'categorytrees' => $categorytrees,
            'countAllProductUsingCate' => $countAllProductUsingCate,
            'getCategoryUsingParent' => $getCategoryUsingParent,
            'getAllBrands' => $getAllBrands,
            'getMinMaxPrice' => $getMinMaxPrice,
            'products' => $result['products'],
            'paging' => $data['paging'],
            'listProductRandom' => $listProductRandom,
            'uriproduct' => $categoryTree[0],
            'meta' => $meta
        ));
        
        
    }
    
    // thuong hieu
    public function thuonghieu()
    {
    	$uri = $this->uri->segment(1);
    	$uri2 = $this->uri->segment(2);
    	$arraySearch = array();
    	if($this->input->post()){
    		$arraySearch['keysearch'] = $this->input->post('keysearch');
    	}else{
    		$arraySearch['keysearch']  = $this->input->get('keysearch');
    	}
    	 
    	if(isset($uri2)){
    		if($uri2 == 'thuonghieu'){
    			$arraySearch['subsearch2'] = $this->uri->segment(3);
    		}else{
    			$arraySearch['subsearch'] = $uri2;
    		}
    	}
    	 
    	// TH1 : CHUA CLICK VAO CAI GI CA
    	if(!empty($_GET)){
    		$allurl = $urlBrand = $urlPrice = $urlorder =  $_SERVER['REQUEST_URI'];
    	}else{
    		$allurl = $urlBrand = $urlPrice = $urlorder =  $_SERVER['REQUEST_URI'].'?';
    	}
    	 
    	// TH2 : THUONG HIEU
    	if(!empty($_GET['brand']) && $_GET['brand'] != 0){
    		$urlPrice = $allurl.'&';
    		$urlorder = $allurl.'&';
    		if(!empty($_GET['order'])){
    			$urlordercut = substr($allurl, -9);
    			$urlorder = str_replace($urlordercut, '', $allurl);
    		}
    		$arraySearch['brand'] = $_GET['brand'];
    		 
    	}
    	 
    	// TH2 : THUONG HIEU
    	if(!empty($_GET['lefprice']) && $_GET['lefprice'] != 0){
    		$urlBrand = $allurl.'&';
    		$urlorder = $allurl.'&';
    		if(!empty($_GET['order'])){
    			$urlordercut = substr($allurl, -10);
    			$urlorder = str_replace($urlordercut, '', $allurl);
    		}
    		$arraySearch['lefprice'] = $_GET['lefprice'];
    		$arraySearch['rightLabel'] = $_GET['rightLabel'];
    	}
    	 
    	// TH3 : GIA
    	if(isset($_GET['order'])){
    		$urlPrice = $allurl.'&';
    		$urlBrand = $allurl.'&';
    		if($_GET['order']){
    			$urlordercut = substr($allurl, -10);
    			$urlorder = str_replace($urlordercut, '', $allurl);
    		}
    		if ($_GET['order'] == 0){
    			$urlordercut = substr($allurl, -7);
    			$urlorder = str_replace($urlordercut, '', $allurl);
    		}
    		$arraySearch['order'] = $_GET['order'];
    	}
    	 
    	$getCateSearchs = $this->home_model->getCateSearch();
    	$getAllCategoryTree = $this->home_model->getAllCategoryTree();
    	 
    	$getCateUri = $this->category_model->getAllCateUri();
    	 
    	$getCategDetail = $this->category_model->getItemDetail($uri);
    	$countCate =  14; //$this->category_model->countCate($getCategDetail->catID);
    	$breadcrumb = array();
    	if ($countCate){
    		$breadcrumb['cap2'] = $getCategDetail;
    		$breadcrumb['cap1'] = 0; //$this->category_model->getOneCategory($getCategDetail->parentID);
    		// cap 2
    		$level =  2;
    		//$getCateUri = 0;//$this->category_model->getCateUri($getCategDetail->catID, $cap = 2);
    	}else{
    		$breadcrumb['cap2'] = 0;//$this->category_model->getOneCategory($getCategDetail->parentID);
    		$breadcrumb['cap1'] = 0;//$this->category_model->getOneCategory($breadcrumb['cap2'][0]['parentID']);
    		$breadcrumb['cap3'] = 0;//$getCategDetail;
    		// cap 3
    		$level =  3;
    		//$getCateUri = $this->category_model->getCateUri($getCategDetail->catID, $cap = 3);
    	}
    	 
    	 
    	$getBrandUsingCates = $this->brand_model->getBrandUsingAll();
    	 
    	 
    	$config['per_page'] = 16;
    	$page = 0;
    	 
    	if($this->uri->segment(4) && $this->uri->segment(4) != null ){
    		$page = $this->uri->segment(4);
    	}else{
    		$page = 0;
    	}
    	 
    	
    	$this->load->library('pagination');
    	 
    	 
    	if($uri2){
    		if($uri2 == 'thuonghieu'){
    			$actual_link = $_SERVER['REQUEST_URI'];
    			$asc = substr("$actual_link", -3, 3);
    			if($asc == "asc") {
    				$arraySearch['orderby'] = "ASC";
    			}
    			$config['base_url'] = base_url('search/thuonghieu/'.$this->uri->segment(3)) ;
    			$arraySearch['subsearch2'] = $this->uri->segment(3);
    		}else{
    			$arraySearch['subsearch'] = $uri2;
    		}
    	}else {
    		$config['base_url'] = base_url().'/'.$uri;
    	}
    	
    	$getAllProducts = $this->products_model->getAllSearchHomeEve($arraySearch, $page, $config['per_page']);
    	 
    	$config['total_rows'] = $getAllProducts['total_record'];
    	 
    	 
    	if(@$arraySearch['brand'] !='' || @$arraySearch['order'] != '' || @$arraySearch['lefprice'] != ''  ){
    		$config['first_url'] = $config['base_url']."?brand=".@$arraySearch['brand'].'&lefprice='.@$arraySearch['lefprice'].'&rightLabel='. @$arraySearch['rightLabel'].'&order='.@$arraySearch['order'].'&keysearch='. $arraySearch['keysearch'];
    		$this->pagination->suffix = "?brand=".@$arraySearch['brand'].'&lefprice='.@$arraySearch['lefprice'].'&rightLabel='. @$arraySearch['rightLabel'].'&order='.@$arraySearch['order'].'&keysearch='. $arraySearch['keysearch'];
    	}
    	 
    	$config['use_page_numbers'] = false;
    	$config['uri_segment'] = 4;
    	$config['num_links'] = 1;
    	$this->pagination->initialize($config);
    	$data["paging"] = $this->pagination->create_links();
    	 
    	$this->_data['main_content'] = $this->load->view('v3template/Search_view', array(
    			'getCateSearchs' => $getCateSearchs,
    			'menus' => $getAllCategoryTree,
    			'getCateUris' => $getCateUri,
    			'getBrandUsingCates' => $getBrandUsingCates,
    			'getAllProducts' => $getAllProducts['products'],
    			'paging' => $data['paging'],
    			'urlBrand' => $urlBrand,
    			'urlPrice' => $urlPrice,
    			'urlorder' => $urlorder,
    			'breadcrumb' => $breadcrumb,
    			'level' => $level
    	), true);
    	$this->load->view('v3template/layout_view', $this->_data);
    	 
    }

    
    
}

