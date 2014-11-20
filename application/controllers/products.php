<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once 'application/controllers/layout.php';

/**
 * @author chinguyen.phpdev@gmail.com
 * @author Otcsoft.com - 2014
 */
class Products extends Layout {
	
	public function __construct()
	{
		parent::__construct();
		//$this->output->cache(5) ;
	}
	
	public function index()
	{	
		$uriproduct = $this->uri->segment(1);
		// tach chuoi uri bo -pd
		$categoryTree =  str_replace("-pd"," ",$uriproduct);
		//var_dump($categoryTree);
		// get categorytree cho 
		$categorytrees = $this->category_model->categoryTreekeypage($categoryTree);
		//var_dump($categorytrees);die();
		// getdetail Category
		$getDetail = $this->category_model->getCategoryDetail('keypage', $categoryTree);
       
		
	
		// lay ra tong so san pham trong category
		$countAllProductUsingCate = $this->products_model->countAllProductUsingCate($getDetail->catID);
		
		// lay ra toan bo category con  trong category cha
		$getCategoryUsingParent = $this->category_model->getCategoryUri($categoryTree); 
		//var_dump($getCategoryUsingParent);die();
		
		if(!$getCategoryUsingParent)
        {
            $getCategoryUsingParent = $this->category_model->getCategoryUriDetail($getDetail->catID);
        }
        
        $getAllBrandsCate = array();
        foreach($getCategoryUsingParent AS $ids){
            $getAllBrandsCate[] =  $this->brand_model->getAllBrandWhere($ids['catID']);    
        }
		
		$getAllBrands = $this->brand_model->getAllBrand();
       
        // lay ra gia cho san pham
        $getMinMaxPrice = $this->products_model->getMinMaxPrice();
        
        // lay ra 4 san pham ngau nhien
        $listProductRandom = $this->products_model->getProductRandom(); 
        
        /*
         * phan trang
         */
        $config['per_page'] = 9;
        
        //?price_from=2319385&price_to=160800000
        $arraySearch = array();
        if(isset($_GET['price_from']) && isset($_GET['price_to']))
        {
            $arraySearch['price_from'] =   $this->input->get('price_from');
            $arraySearch['price_to'] =   $this->input->get('price_to');
        }
    
        $page = $this->uri->segment(2);
        $result = $this->products_model->getAllSearchHome($arraySearch, $page, $config['per_page'], $getDetail->catID);
        
       
        
        $this->load->library('pagination');
        $config['base_url'] = base_url().'/'.$uriproduct;
        $config['total_rows'] = $result['total_record'];
        if(isset($arraySearch['price_from']) && $arraySearch['price_to'] != ''  ){
            $config['first_url'] = $config['base_url']."?price_from=".$arraySearch['price_from'].'&price_to='.$arraySearch['price_to'];
            $this->pagination->suffix = "?price_from=".$arraySearch['price_from'].'&price_to='.$arraySearch['price_to'];
        } 
        $config['use_page_numbers'] = false;
        $config['uri_segment'] = 2;
        $config['num_links'] = 1;
        $this->pagination->initialize($config);
        $data["paging"] = $this->pagination->create_links();

        //echo $uriproduct;
		$config = $this->utility_model->whereOneField('tbl_config', 'config_id', 1);
		$getContent = $this->utility_model->getAllASC('tbl_about', 'status', 1, 'stt');
        $meta = array(
            'title' => $getDetail->catName,
            'description' => $getDetail->metaTitle,
            'keywords' => $getDetail->metaDes,
        );
       
        $getParentID0s = $this->category_model->getAllCateParent0();
		$this->load->view('allProducts', array(
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
			'uriproduct' => trim($categoryTree),
			'getDetail' => $getDetail,
			'getParentID0s' => $getParentID0s,
			'meta' => $meta,
			'getAllBrandsCate' => $getAllBrandsCate,
		));
        
        
        
        
		
	}


    // SEARCH
    public function search()
    {
        $uriproduct = $this->uri->segment(1);
        // tach chuoi uri bo -pd
        $categoryTree =  explode("-pd-",$uriproduct);
        // get categorytree cho 
        $categorytrees = $this->category_model->categoryTreekeypage($categoryTree[0]);
        // getdetail Category
        $getDetail = $this->category_model->getCategoryDetail('keypage', $categoryTree[0]);
       // var_durmp($getDetail);
        // lay ra tong so san pham trong category
        $countAllProductUsingCate = $this->products_model->countAllProductUsingCate($getDetail->catID);
        
        // lay ra toan bo category con  trong category cha
        $getCategoryUsingParent = $this->category_model->getCategoryUri($categoryTree[0]);
        if(!$getCategoryUsingParent){
            $getCategoryUsingParent = $this->category_model->getCategoryUriUsingkeyPage($categoryTree[0]);    
        }
        
        
        // var_dump($getCategoryUsingParent);
        
        
        
        // lay ra gia cho san pham
        $getMinMaxPrice = $this->products_model->getMinMaxPrice();
        
        // lay ra 4 san pham ngau nhien
        $listProductRandom = $this->products_model->getProductRandom(); 
        
        /*
         * phan trang
         */
        $config['per_page'] = 9;
        
        $getUrl = $_SERVER['REDIRECT_QUERY_STRING'];
        $strGetUrl = substr($getUrl, 1);
        $explodeUrl = explode("-pd-", $strGetUrl);
        if(isset($explodeUrl[1]))
        {
            $explodeUrlSearch = explode("-", $explodeUrl[1]);
            $CateParent = filter_var($explodeUrlSearch[0], FILTER_SANITIZE_NUMBER_INT);
            if(isset($CateParent) && $CateParent != 0){
                 $arraySearch['CateParent']  = $CateParent;
            }elseif($CateParent == 0){
                $arraySearch['CateParent'] = 0;
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
        
        
       
        // lay ra toan bo thuong hieu
        //$getAllBrands = $this->brand_model->getAllBrand();
        if($arraySearch['CateParent'] != '' and $arraySearch['CateParent'] != 0 ){
            $getAllBrands = $this->brand_model->getAllBrandWhere($arraySearch['CateParent']);    
        }else {
            $getAllBrandsCate = array();
            foreach($getCategoryUsingParent AS $ids){
                $getAllBrandsCate[] =  $this->brand_model->getAllBrandWhere($ids['catID']);    
            }
            $getAllBrands = $this->brand_model->getAllBrand();
        }
        
        //$getAllBrands = $this->brand_model->getAllBrand();
        $page = $this->uri->segment(2);
        
        $arraySearch['price_from'] =   $this->input->get('price_from');
        $arraySearch['price_to'] =   $this->input->get('price_to');
        
        
        
        @$result = $this->products_model->getAllSearchParamHome($arraySearch, $page, $config['per_page'], $getDetail->catID);
        
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
        
        $getParentID0s = $this->category_model->getAllCateParent0();
        
        $meta = array(
            'title' => $getDetail->catName,
            'description' => $getDetail->metaTitle,
            'keywords' => $getDetail->metaDes,
        );
        $this->load->view('allProducts', array(
            'config' => $config,
            'getContent' => $getContent,
            'categorytrees' => $categorytrees,
            'countAllProductUsingCate' => $countAllProductUsingCate,
            'getCategoryUsingParent' => $getCategoryUsingParent,
            'getAllBrands' => @$getAllBrands,
            'getMinMaxPrice' => $getMinMaxPrice,
            'products' => $result['products'],
            'paging' => $data['paging'],
            'listProductRandom' => $listProductRandom,
            'uriproduct' => $categoryTree[0],
        	'getDetail' => $getDetail,
        	'getParentID0s' => $getParentID0s,
        	'meta' => $meta,
        	'getAllBrandsCate' => @$getAllBrandsCate
            // chuyen bo loc sang view
        ));
        
    }

    
	
}

