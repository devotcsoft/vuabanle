<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once 'application/controllers/layout.php';

/**
 * @author chinguyen.phpdev@gmail.com
 * @author Otcsoft.com - 2014
 */
class Home extends Layout {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('home_model', 'home_model');
		$this->load->model('athome_model', 'athome_model');
		$this->load->model('utility_model', 'utility_model');
		//$this->load->model('config_model', 'config_model');
		//$this->output->cache(5) ;
	}
	
	public function index()
	{
		$this->output->enable_profiler(TRUE);
		$getCateSearchs = $this->home_model->getCateSearch();
		$getAllCategoryTree = $this->home_model->getAllCategoryTree();
		$gallery = $this->utility_model->whereOneField('tbl_gallery','status', 1);
		$padding = $this->home_model->getAllGallery();
		$getAllBrand = $this->home_model->getAllBrand();
		$getAllatHome = $this->athome_model->getAll();
		
		
		
		//$config = $this->config_model->getConfig();
		
		$this->_data['main_content'] = $this->load->view('v3template/home_view', array(
			'getCateSearchs' => $getCateSearchs,
			'menus' => $getAllCategoryTree,
			'gallerys' => $gallery,
			'paddings' =>$padding,
			'getAllBrand' => $getAllBrand,
			'getAllatHomes' => $getAllatHome
		), true);
		$this->load->view('v3template/layout_view', $this->_data);
	}
	
	
	public function uri()
	{
		$uri = $this->uri->segment(1);
		$checkcategory = $this->category_model->checkKeypage($uri);
		
		if($checkcategory){
			if($checkcategory->parentID == 0){
				//echo "cap 1";
				$this->category();
			}else {
				$countCate = $this->category_model->countCate($checkcategory->catID);
				if($countCate){
					// cap 2
					$this->productIndex();
				}else {
					$checkproduct = $this->products_model->checkKeypage($uri);
					if($checkproduct){
						$this->productdetail();
					}else {
						// echo "cap 3";
						$this->productIndex2();	
					}	
				}
			}
		}else{
			$checkproduct = $this->products_model->checkKeypage($uri);
			if($checkproduct){
				$this->productdetail();
			}	
		}
		
	}
	
	public function category()
	{
		
		$this->output->enable_profiler(TRUE);
		$uri = $this->uri->segment(1);
		
		
		$getCateSearchs = $this->home_model->getCateSearch();
		$getAllCategoryTree = $this->home_model->getAllCategoryTree();
		$getCategDetail = $this->category_model->getItemDetail($uri);
		if($getCategDetail->metaKey != ""){
			$seo = array(
					'title' => $getCategDetail->catName,
					'description' => $getCategDetail->metaTitle,
					'keywords' => $getCategDetail->metaDes,
			);
		}
		$getCateUri = $this->category_model->getCateUri($getCategDetail->catID, $cap = 1);
		$getBrandUsingCates = $this->brand_model->getBrandUsingCate($getCategDetail->catID);
		$getProdUsingCates = $this->products_model->getProdUsingCates($getCategDetail->catID);
		
		$this->_data['main_content'] = $this->load->view('v3template/category_view', array(
				'getCateSearchs' => $getCateSearchs,
				'menus' => $getAllCategoryTree,
				'seo' => $seo,
				'getCategoryDetail' => $getCategDetail,
				'getCateUris' => $getCateUri,
				'getBrandUsingCates' => $getBrandUsingCates,
				'getProdUsingCates' => $getProdUsingCates,
		), true);
		$this->load->view('v3template/layout_view', $this->_data);
	}
	
	
	public function productIndex()
	{
		$this->output->enable_profiler(TRUE);
		$uri = $this->uri->segment(1);

		// TH1 : CHUA CLICK VAO CAI GI CA
		$urlBrand = $urlPrice = $urlorder =  $_SERVER['REQUEST_URI']."?";
		
		// TH2 : CLICK vao BRAND
		if (isset($_GET['brand'])){
			$urlBrand = explode('?', $urlBrand);
			$urlBrand = $urlBrand[0].'?';
			echo $urlBrand;
			
			$urlPrice = $_SERVER['REQUEST_URI'].'&';
			$urlorder = $_SERVER['REQUEST_URI'].'&';
			if (isset($_GET['lefprice'])){
				$urlPrice = $urlBrand.'brand='.$_GET['brand'].'&lefprice='.$_GET['lefprice'].'&rightLabel='.$_GET['rightLabel'];
			}
			if (isset($_GET['order'])){
				$urlorder = $urlBrand.'brand='.$_GET['brand'].'&';
				if(isset($_GET['lefprice'])){
					$urlorder = $urlBrand.'brand='.$_GET['brand'].'&lefprice='.$_GET['lefprice'].'&rightLabel='.$_GET['rightLabel'].'&';
				}
				
			}
			
			
			
		}
		
		// TH2: CLICK VAO price
		if(isset($_GET['lefprice'])){
			$urlPrice = explode('?', $urlBrand);
			$urlPrice = $urlPrice[0].'?';
			$urlBrand = $this->uri->segment(2).'?';
			if (isset($_GET['brand'])){
				$urlPrice = $urlPrice.'brand='.$_GET['brand'].'&';
			}
		}
		
		/*
		// TH 4: CLICK VAO SAP XEP TRUOC
		if(isset($_GET['order']) == 'asc'){
			$urlorder = explode('?', $urlBrand);
			$urlorder = $urlorder[1];
			$urlBrand = $this->uri->segment(2).'?'.$urlorder.'&';
			
		}
		*/
		
		
		
		
		
		
		
		
		/* echo $urlBrand."<br/>";
		echo $urlPrice; */
		
		$getCateSearchs = $this->home_model->getCateSearch();
		$getAllCategoryTree = $this->home_model->getAllCategoryTree();
		$getCategDetail = $this->category_model->getItemDetail($uri);
		$getCateUri = $this->category_model->getCateUri($getCategDetail->catID, $cap = 2);
		$getBrandUsingCates = $this->brand_model->getBrandUsingCate($getCategDetail->catID);
		
		$arraySearch = '';
		$config['per_page'] = 12;
		if(!empty($this->uri->segment(2))){
			$page = $this->uri->segment(2);
		}else{
			$page = 0;
		}
		
		
		$getAllProducts = $this->products_model->getAllProducts($arraySearch,$config['per_page'], $page, $getCategDetail->catID);
		
		$this->load->library('pagination');
		$config['base_url'] = base_url().'/'.$uri;
		$config['total_rows'] = $getAllProducts['total_record'];
		$config['use_page_numbers'] = false;
		$config['uri_segment'] = 2;
		$config['num_links'] = 1;
		$this->pagination->initialize($config);
		$data["paging"] = $this->pagination->create_links();
		
		$this->_data['main_content'] = $this->load->view('v3template/Products_view', array(
			'getCateSearchs' => $getCateSearchs,
			'menus' => $getAllCategoryTree,
			'getCateUris' => $getCateUri,
			'getBrandUsingCates' => $getBrandUsingCates,
			'getAllProducts' => $getAllProducts['products'],
			'paging' => $data['paging'],
			'urlBrand' => $urlBrand,
			'urlPrice' => $urlPrice,
			'urlorder' => $urlorder
		), true);
		$this->load->view('v3template/layout_view', $this->_data);
	}
	
	public function productIndex2()
	{
		$this->output->enable_profiler(TRUE);
		$uri = $this->uri->segment(1);
		$getCateSearchs = $this->home_model->getCateSearch();
		$getAllCategoryTree = $this->home_model->getAllCategoryTree();
		$getCategDetail = $this->category_model->getItemDetail($uri);
		//var_dump($getCategDetail);
		$getCateUri = $this->category_model->getCateUri($getCategDetail->catID, $cap = 3);
		//var_dump($getCateUri);
		$getBrandUsingCates = $this->brand_model->getBrandUsingCate($getCategDetail->catID);
	
	
		$page = 0;
		$arraySearch = '';
		$config['per_page'] = 1;
		if(!empty($this->uri->segment(2))){
			$page = $this->uri->segment(2);
		}else{
			$page = 0;
		}

		$getAllProducts = $this->products_model->getAllProducts($arraySearch,$config['per_page'], $page , $getCategDetail->catID);
		
		$this->load->library('pagination');
		$config['base_url'] = base_url().'/'.$uri;
		$config['total_rows'] = $getAllProducts['total_record'];
		$config['use_page_numbers'] = false;
		$config['uri_segment'] = 2;
		$config['num_links'] = 1;
		$this->pagination->initialize($config);
		$data["paging"] = $this->pagination->create_links();
	
		$this->_data['main_content'] = $this->load->view('v3template/Products_view2', array(
				'getCateSearchs' => $getCateSearchs,
				'menus' => $getAllCategoryTree,
				'getCateUris' => $getCateUri,
				'getBrandUsingCates' => $getBrandUsingCates,
				'getAllProducts' => $getAllProducts['products'],
				'paging' => $data['paging'],
		), true);
		$this->load->view('v3template/layout_view', $this->_data);
	}
	
	
	
	public function productdetail()
	{
		
		$getUrl = $_SERVER['REDIRECT_QUERY_STRING'];
		$strGetUrl = substr($getUrl, 1);
		$explodeUrl = explode(".", $strGetUrl);
		if(@$explodeUrl[1]=='html'){
				
			$uriproduct = $this->uri->segment(1);
			$productdetail = $this->products_model->getProductDetail($uriproduct);
			$categorytrees = $this->category_model->categoryTree($productdetail->catID);
			$listCategorys = $this->utility_model->getAllASC('tbl_categories', 'status', '1', 'catName');
			$listCategorysOrderstt = $this->utility_model->getAllASC('tbl_categories', 'status', '1', 'stt');
			$getCommentdetail = $this->comment_model->getDetail($productdetail->productID);
	        $meta = array(
	            'title' => $productdetail->productName,
	            'description' => $productdetail->metaTitle,
	            'keywords' => $productdetail->metaDes,
	        );
			$this->_data['main_content'] = $this->load->view('productdetail_view', array(
			    'meta' => $meta,
				'productdetail' => $productdetail,
				'categorytrees' => $categorytrees,
				'listCategorys' => $listCategorys,
				'listCategorysOrderstt' => $listCategorysOrderstt,
				'getCommentdetail' => $getCommentdetail,
				'uriproduct' => $uriproduct
			), true);
			$this->load->view('layout_view', $this->_data);
		}
		else {
		redirect(base_url(),'refresh');
		}
		
	}
	// chinh sach
	public function policy()
	{
		$uri = $this->uri->segment(2);
		$policyDetail = $this->utility_model->getDetail('tbl_about', 'seo_name', $uri);
		$listProductRandom = $this->products_model->getProductRandom();
        $meta = array(
            'title' => $policyDetail->newsTitle,
            'description' => $policyDetail->metaTitle,
            'keywords' => $policyDetail->metaDes,
        );	
		$this->_data['main_content'] = $this->load->view('policy_view', array(
			'policyDetail' => $policyDetail,
			'listProductRandom' => $listProductRandom,
			'meta' => $meta,
		), true);
		$this->load->view('layout_view', $this->_data);
	}
	
	//Gửi nhận xét
	public function comment()
	{
		$this->form_validation->set_message('required', 'Mời bạn nhập trường %s.');
		$this->form_validation->set_rules("fullname","Họ và tên","required");
		$this->form_validation->set_rules("comment","Nội dung nhận xét","required");
		$seo_name=$this->input->post("seo_name");
		if ($this->form_validation->run() == FALSE)
		{
			echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
			<script>
			alert('Bình luận thất bại !');
			location.assign('$seo_name.html');
			</script>";
		}
		else{
		$data = array(
				"star"  => $this->input->post("rating-new"),
				"productID"  => $this->input->post("productID"),
				"fullname"  => $this->input->post("fullname"),
				"email"     => $this->input->post("email"),
				"content"   => $this->input->post("comment"),
				'postdate' =>   date('d-m-Y h:i:s'),
				'status' =>'1'
		);
		$seo_name=$this->input->post("seo_name");
		$this->comment_model->insertComment($data);
		echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
						<script>
						alert('Bình luận thành công !');
						 location.assign('$seo_name.html');
					  </script>";
		}
	}
	
    
    
    public function menu()
    {
        echo "<meta charset=utf-8>";
        $menu = array();
        $getParentID0s = $this->category_model->getAllCateParent0();
       
        foreach($getParentID0s as $getParentID0)
        {
            $menu['cap1'] = $getParentID0['catName'];
            $getAllCateParents = $this->category_model->getAllCateParent($getParentID0['catID']); 
            foreach($getAllCateParents as $getAllCateParent){
                $menu[] = '--'.$getAllCateParent['catName'];  
                $getAllCateParents1s = $this->category_model->getAllCateParent($getAllCateParent['catID']);
                foreach($getAllCateParents1s as $getAllCateParents1){
                    $menu[] = '----'.$getAllCateParents1['catName'];  
                }
            }
        }
        
        $this->load->view('menu_view', array(
                'getParentID0s' => $getParentID0s,
            )
        );
        
    }

    function padding()
    {
    
    	  // URI
        $uriproduct = $this->uri->segment(1);
        $seo_name= str_replace("-qc", "", $uriproduct);
        $getpadding=$this->base_model->get_detail('tbl_padding','url',$seo_name);
        $value= $getpadding['id'];
        $uri2 = $this->uri->segment(2);
       
        
        
        $categoryTree =  explode("-pd-",$uriproduct);
        
        // lay ra toan bo category con  trong category cha
        $getCategoryUsingParent = $this->category_model->getAllCateParent0(); 
        
        // lay ra toan bo thuong hieu
        $getAllBrands = $this->brand_model->getAllBrand();
        
        // lay ra gia cho san pham
        $getMinMaxPrice = $this->products_model->getMinMaxPrice();
        
        // lay ra 4 san pham ngau nhien
        $listProductRandom = $this->products_model->getProductRandom(); 
        
        /*
         * phan trang
         */
        $config['per_page'] =9;
        
        //?price_from=2319385&price_to=160800000
        
        $arraySearch = array();
        $arraySearch['price_from'] = '';
        $arraySearch['price_to'] = '';
        if(isset($_GET['price_from']) && isset($_GET['price_to']))
        {
            $arraySearch['price_from'] =   $this->input->get('price_from');
            $arraySearch['price_to'] =   $this->input->get('price_to');
        }
        
        if($this->input->post()){
            $arraySearch['keysearch'] = $this->input->post('keysearch');
        }else{
            $arraySearch['keysearch']  = $this->input->get('keysearch');
        }
        
        
        if(isset($uri2)){
            $arraySearch['subsearch'] = $uri2; 
        }
    
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
        $result = $this->base_model->getAllpadding($arraySearch, $page, $config['per_page'],$value);
        $this->load->library('pagination');
        $config['base_url'] = base_url().'/'.$uriproduct;
        $config['total_rows'] = $result['total_record'];
        if($arraySearch['price_from'] !='' || $arraySearch['keysearch'] != '' ){
            $config['first_url'] = $config['base_url']."?price_from=".$arraySearch['price_from'].'&price_to='.$arraySearch['price_to'].'&keysearch='. $arraySearch['keysearch'];
            $this->pagination->suffix = "?price_from=".$arraySearch['price_from'].'&price_to='.$arraySearch['price_to'].'&keysearch='. $arraySearch['keysearch'];
        } 
        $config['use_page_numbers'] = false;
        $config['uri_segment'] = 2;
        $config['num_links'] = 1;
        $this->pagination->initialize($config);
        $data["paging"] = $this->pagination->create_links();

        //echo $uriproduct;
        $config = $this->utility_model->whereOneField('tbl_config', 'config_id', 1);
        $getContent = $this->utility_model->getAllASC('tbl_about', 'status', 1, 'stt');
        
        $configall = $this->config_model->getConfig();
        $meta = array(
            'title' => 'Vua bán lẻ | Tìm kiếm ',
            'description' => $configall->site_describe,
            'keywords' => $configall->site_keyword,
        );
        $getParentID0s = $this->category_model->getAllCateParent0();
        $this->load->view('search_view', array(
            'config' => $config,
            'getContent' => $getContent,
            'getParentID0s' => $getParentID0s,
            'getCategoryUsingParent' => $getCategoryUsingParent,
            'getAllBrands' => $getAllBrands,
            'getMinMaxPrice' => $getMinMaxPrice,
            'products' => $result['products'],
            'paging' => $data['paging'],
            'listProductRandom' => $listProductRandom,
            'uriproduct' => $categoryTree,
            'meta' => $meta
        ));
        
    }

	
}

