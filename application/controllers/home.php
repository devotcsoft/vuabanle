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
		
	}
	
	public function index()
	{
		$getCateSearchs = $this->home_model->getCateSearch();
		$getAllCategoryTree = $this->home_model->getAllCategoryTree();
		$gallery = $this->utility_model->whereOneField('tbl_gallery','status', 1);
		$padding = $this->home_model->getAllGallery();
		$getAllBrand = $this->home_model->getAllBrand();
		$getAllatHome = $this->athome_model->getAll();
		
		$configall = $this->config_model->getConfig();
		$meta = array(
			'title' => $configall->site_title, 
			'description' => $configall->site_describe,
			'keywords' => $configall->site_keyword,
		);

		
		$this->_data['main_content'] = $this->load->view('v3template/home_view', array(
			'getCateSearchs' => $getCateSearchs,
			'menus' => $getAllCategoryTree,
			'gallerys' => $gallery,
			'paddings' =>$padding,
			'getAllBrand' => $getAllBrand,
			'getAllatHomes' => $getAllatHome,
			'meta' => $meta,
		), true);
		$this->load->view('v3template/layout_view', $this->_data);
	}
	
	
	public function uri()
	{
		$uri = $this->uri->segment(1);
		$checkcategory = $this->category_model->checkKeypage($uri);
		
		if($checkcategory){
			if($checkcategory->parentID == 0){
				//var_dump($_GET);
				if(isset($_GET) && $_GET != null){
					$this->productIndex();
				}else {
					$this->category();
				}
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
						$this->productIndex();	
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
		
		
		$this->breadcrumbcomponent->add('Trang chủ', base_url());
		$this->breadcrumbcomponent->add($getCategDetail->catName, base_url());
		$bradcrumbs = $this->breadcrumbcomponent->output();
		$this->_data['main_content'] = $this->load->view('v3template/category_view', array(
				'getCateSearchs' => $getCateSearchs,
				'menus' => $getAllCategoryTree,
				'meta' => $seo,
				'getCategoryDetail' => $getCategDetail,
				'getCateUris' => $getCateUri,
				'getBrandUsingCates' => $getBrandUsingCates,
				'getProdUsingCates' => $getProdUsingCates,
				'bradcrumbs' => $bradcrumbs
		), true);
		$this->load->view('v3template/layout_view', $this->_data);
	}
	
	
	public function productIndex()
	{
		$uri = $this->uri->segment(1);
		$arraySearch = array();

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
			
		}elseif (@$_GET['brand'] == 0){
			$urlBrand = str_replace('brand=0', '', $urlBrand);
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
		
		$getCategDetail = $this->category_model->getItemDetail($uri);
		$countCate = $this->category_model->countCate($getCategDetail->catID);
		$breadcrumb = array();
		if ($countCate){
			$breadcrumb['cap2'] = $getCategDetail;
			$breadcrumb['cap1'] = $this->category_model->getOneCategory($getCategDetail->parentID);
			// cap 2
			$level =  2;
			$getCateUri = $this->category_model->getCateUri($getCategDetail->catID, $cap = 2);
		}else{
			$breadcrumb['cap2'] = $this->category_model->getOneCategory($getCategDetail->parentID);
			$breadcrumb['cap1'] = $this->category_model->getOneCategory($breadcrumb['cap2'][0]['parentID']);
			$breadcrumb['cap3'] = $getCategDetail;
			// cap 3
			$level =  3;
			$getCateUri = $this->category_model->getCateUri($getCategDetail->catID, $cap = 3);
		}
		
		
		$getBrandUsingCates = $this->brand_model->getBrandUsingCate($getCategDetail->catID);
		
		
		$config['per_page'] = 16;
		$page = 0;
		
		if($this->uri->segment(2) && $this->uri->segment(2) != null ){
			$page = $this->uri->segment(2);
		}else{
			$page = 0;
		}
		
		
		
		$getAllProducts = $this->products_model->getAllProducts($arraySearch,$config['per_page'], $page, $getCategDetail->catID);
		$this->load->library('pagination');
		$config['base_url'] = base_url().'/'.$uri;
		$config['total_rows'] = $getAllProducts['total_record'];
		
		
		if(@$arraySearch['brand'] !='' || @$arraySearch['order'] != '' || @$arraySearch['lefprice'] != ''  ){
			$config['first_url'] = $config['base_url']."?brand=".@$arraySearch['brand'].'&lefprice='.@$arraySearch['lefprice'].'&rightLabel='. @$arraySearch['rightLabel'].'&order='.@$arraySearch['order'];
			$this->pagination->suffix = "?brand=".@$arraySearch['brand'].'&lefprice='.@$arraySearch['lefprice'].'&rightLabel='. @$arraySearch['rightLabel'].'&order='.@$arraySearch['order'];
		}
		
		$config['uri_segment'] = 2;
		$config['num_links'] = 3;
		$config['use_page_numbers'] = FALSE;
		
		$this->pagination->initialize($config);
		$data["paging"] = $this->pagination->create_links();
		
		$meta = array(
			'title' => $getCategDetail->catName,
			'description' => $getCategDetail->metaTitle,
			'keywords' => $getCategDetail->metaDes,
		);
		
		if($level == 2){
			$this->breadcrumbcomponent->add('Trang chủ', base_url());
			$this->breadcrumbcomponent->add($getCategDetail->catName, base_url());
		}else{
			$this->breadcrumbcomponent->add('Trang chủ', base_url());
			$this->breadcrumbcomponent->add($getCategDetail->catName, base_url($getCategDetail->keypage));
			$this->breadcrumbcomponent->add($getCategDetail->catName, base_url());
		}
		$bradcrumbs = $this->breadcrumbcomponent->output();
		
		//var_dump($bradcrumbs);
		
		if (isset($_GET['gclid']) != ''){
			$urlBrand = $urlBrand.'&';
		}
		
		//var_dump($urlBrand);
				
		$this->_data['main_content'] = $this->load->view('v3template/Products_view', array(
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
			'level' => $level,
			'meta' => $meta,
			'bradcrumbs' => $bradcrumbs,
		), true);
		$this->load->view('v3template/layout_view', $this->_data);
	}
	
	public function productdetail()
	{
		$agent = $_SERVER['HTTP_USER_AGENT'];
		$addr = $_SERVER['REMOTE_ADDR'];
		$getUrl = $_SERVER['REDIRECT_QUERY_STRING'];
		$strGetUrl = substr($getUrl, 1);
		$explodeUrl = explode(".", $strGetUrl);
		if(@$explodeUrl[1]=='html'){
			$uriproduct = $this->uri->segment(1);
			
			$productdetail = $this->products_model->getProductDetail($uriproduct);
			
			//var_dump($productdetail);
			
			$categorytrees = $this->category_model->getAllCategoryTree($productdetail->catID);
			
			$view =  $this->home_model->viewproduct($productdetail->view + 1, $productdetail->productID);
			
			// kiem tra xem san pham va ip nguoi dung da ton tai chua
			$getIdorder = $this->home_model->getIdorder($productdetail->productID, $addr);
			$getAllorder = $this->home_model->getAllorder($agent, $addr);
			if ($getIdorder){
			}else{
				if (count($getAllorder) > 100){
					//var_dump($getAllorder[0]['productID']);
					//die();
					$del = $this->home_model->delIDorder($getAllorder[0]['productID']);
					$ilast = $this->home_model->insertLast($productdetail->productID, $agent, $addr);
				}else{
					// chua ton tai thi moi cho insert
					$ilast = $this->home_model->insertLast($productdetail->productID, $agent, $addr);
				}
			}
			$listCategorys = $this->utility_model->getAllASC('tbl_categories', 'status', '1', 'catName');
			$listCategorysOrderstt = $this->utility_model->getAllASC('tbl_categories', 'status', '1', 'stt');
			$getCommentdetail = $this->comment_model->getDetail($productdetail->productID);
	        $meta = array(
	            'title' => $productdetail->productName,
	            'description' => $productdetail->metaTitle,
	            'keywords' => $productdetail->metaDes,
	        );
	        $getCateSearchs = $this->home_model->getCateSearch();
	        
	        @$getAllCategoryTree = $this->home_model->getAllCategoryTree();
	        
	        if (isset($categorytrees[0]['CatChild'][0]['CatChild'][0]['catName'])){
	        	
	        	$this->breadcrumbcomponent->add('Trang chủ', base_url());
	        	$this->breadcrumbcomponent->add($categorytrees[0]['CatChild'][0]['CatChild'][0]['catName'], base_url($categorytrees[0]['CatChild'][0]['CatChild'][0]['keypage']));
	        	$this->breadcrumbcomponent->add($categorytrees[0]['CatChild'][0]['catName'], base_url($categorytrees[0]['CatChild'][0]['keypage']));
	        	$this->breadcrumbcomponent->add($categorytrees[0]['catName'], base_url($categorytrees[0]['keypage']));
	        	$this->breadcrumbcomponent->add($productdetail->productName, base_url());
	        	
	        }elseif (isset($categorytrees[0]['CatChild'][0]['catName'])) {
	        	
	        	$this->breadcrumbcomponent->add('Trang chủ', base_url());
	        	$this->breadcrumbcomponent->add($categorytrees[0]['CatChild'][0]['catName'], base_url($categorytrees[0]['CatChild'][0]['keypage']));
	        	$this->breadcrumbcomponent->add($categorytrees[0]['catName'], base_url($categorytrees[0]['keypage']));
	        	$this->breadcrumbcomponent->add($productdetail->productName, base_url());
	        	
	        }else {
	        	$this->breadcrumbcomponent->add('Trang chủ', base_url());
	        	$this->breadcrumbcomponent->add($categorytrees[0]['catName'], base_url($categorytrees[0]['keypage']));
	        	$this->breadcrumbcomponent->add($productdetail->productName, base_url());
	        }
	        
	        /*
	        $countCate = count($categorytrees);
	        if($countCate == 1){
	        	$this->breadcrumbcomponent->add('Trang chủ', base_url());
	        	$this->breadcrumbcomponent->add($categorytrees[0][0]['catName'], base_url($categorytrees[0][0]['keypage']));
	        	$this->breadcrumbcomponent->add($productdetail->productName, base_url());
	        }elseif ($countCate == 2){
	        	$this->breadcrumbcomponent->add('Trang chủ', base_url());
	        	$this->breadcrumbcomponent->add($categorytrees[1][0]['catName'], base_url($categorytrees[1][0]['keypage']));
	        	$this->breadcrumbcomponent->add($categorytrees[0][0]['catName'], base_url($categorytrees[0][0]['keypage']));
	        	$this->breadcrumbcomponent->add($productdetail->productName, base_url());
	        }else{
	        	$this->breadcrumbcomponent->add('Trang chủ', base_url());
	        	$this->breadcrumbcomponent->add($categorytrees[2][0]['catName'], base_url($categorytrees[2][0]['keypage']));
	        	$this->breadcrumbcomponent->add($categorytrees[1][0]['catName'], base_url($categorytrees[1][0]['keypage']));
	        	$this->breadcrumbcomponent->add($categorytrees[0][0]['catName'], base_url($categorytrees[0][0]['keypage']));
	        	$this->breadcrumbcomponent->add($productdetail->productName, base_url());
	        }
	        */
	        $bradcrumbs = $this->breadcrumbcomponent->output();
	        
	        
	        $getRandProduct = $this->products_model->getRandProductlq($productdetail->catID);
			$this->_data['main_content'] = $this->load->view('v3template/Product_detail', array(
				'getCateSearchs' => $getCateSearchs,
				'menus' => $getAllCategoryTree,
			    'meta' => $meta,
				'productdetail' => $productdetail,
				'categorytrees' => $categorytrees,
				'listCategorys' => $listCategorys,
				'listCategorysOrderstt' => $listCategorysOrderstt,
				'getCommentdetail' => $getCommentdetail,
				'uriproduct' => $uriproduct,
				'getAllorders' => $getAllorder,
				'getRandProducts' => $getRandProduct,
				'bradcrumbs' => $bradcrumbs,
			), true);
			$this->load->view('v3template/layout_view', $this->_data);
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
        $getCateSearchs = $this->home_model->getCateSearch();
        $getAllCategoryTree = $this->home_model->getAllCategoryTree();
        $tuyenDung5 = $this->home_model->tuyenDung5();
        $tintuc5 = $this->home_model->tintuc5();
        $getabout7 = $this->home_model->getabout7();
		$this->_data['main_content'] = $this->load->view('v3template/policy_view', array(
			'policyDetail' => $policyDetail,
			'listProductRandom' => $listProductRandom,
			'meta' => $meta,
			'getCateSearchs' => $getCateSearchs,
			'menus' => $getAllCategoryTree,
			'tuyenDung5' => $tuyenDung5,
			'tintuc5' => $tintuc5,
			'getabout7' => $getabout7,
		), true);
		$this->load->view('v3template/layout_view', $this->_data);
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
        $config['per_page'] = 16;
        
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
    
    
    public function bigsale()
    {
    	$getCateSearchs = $this->home_model->getCateSearch();
		$getAllCategoryTree = $this->home_model->getAllCategoryTree();
		$configall = $this->config_model->getConfig();
		$bigsale = $this->products_model->getBigsale();
		//var_dump($bigsale);
		
		$meta = array(
			'title' => $configall->site_title, 
			'description' => $configall->site_describe,
			'keywords' => $configall->site_keyword,
		);

		
		$this->_data['main_content'] = $this->load->view('v3template/bigsale_view', array(
			'getCateSearchs' => $getCateSearchs,
			'menus' => $getAllCategoryTree,
			'meta' => $meta,
			'bigsales' => $bigsale
		), true);
		$this->load->view('v3template/layout_view', $this->_data);
    }
    
    
    
    public function checkEmail()
    {    	
    	$checkmail = $this->home_model->checkisemail($this->input->post('username_rg'));
    	if($checkmail == true){
    		echo "true";
    	}else {
    		echo "false";
    	}    		
    }

	
}

