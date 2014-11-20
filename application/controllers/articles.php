<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once 'application/controllers/layout.php';

/**
 * @author chinguyen.phpdev@gmail.com
 * @author Otcsoft.com - 2014
 */
class Articles extends Layout {
	
	public function __construct()
	{
		parent::__construct();
		//$this->output->cache(5) ;
	}
	
	/*
	 * Cac thong tin  
	*/
	public function index()
	{
		$uri = $this->uri->segment(1);
		$policyDetail = $this->utility_model->getDetail('tbl_about', 'seo_name', $uri);
        // var_dump($policyDetail);
        $meta = array(
            'title' => $policyDetail->newsTitle,
            'description' => $policyDetail->metaDes,
            'keywords' => $policyDetail->metaKey,
        );
        
		//$listProductRandom = $this->products_model->getProductRandom();
		
        $tuyenDung5 = $this->home_model->tuyenDung5();
        $tintuc5 = $this->home_model->tintuc5();
        $getabout7 = $this->home_model->getabout7(); 
       

		$getCateSearchs = $this->home_model->getCateSearch();
		$getAllCategoryTree = $this->home_model->getAllCategoryTree();
		$this->_data['main_content'] = $this->load->view('v3template/article_view', array(
			'policyDetail' => $policyDetail,
			'getCateSearchs' => $getCateSearchs,
			'menus' => $getAllCategoryTree,
			//'listProductRandom' => $listProductRandom,
			'meta' => $meta,
			'tuyenDung5' => $tuyenDung5,
			'tintuc5' => $tintuc5,
			'getabout7' => $getabout7,
		), true);
		$this->load->view('v3template/layout_view', $this->_data);
	}
	
	public function danhchonhommua()
	{
		echo "danhchonhommua";
	} 
	
	/**
	 * tuyen dung
	 */
	public function tuyendung()
	{
		$config['per_page'] = 10;
		$arraySearch = array();
		if($this->input->post()){
			$arraySearch['keysearch'] = $this->input->post('keysearch');
			$page = 0;
		}else{
			$arraySearch['keysearch']  = $this->input->get('keysearch');
		}
		$page = $this->uri->segment(2);
		
		$result = $this->works_model->getAllSearch($arraySearch, $page, $config['per_page']);
		
		$this->load->library('pagination');
		$config['base_url'] = base_url().'/tuyen-dung';
		$config['total_rows'] = $result['total_record'];
		if($arraySearch['keysearch'] != ''){
			$this->pagination->first_link = $config['base_url']."?keysearch=".$arraySearch['keysearch'];
			$this->pagination->suffix = '?keysearch='. $arraySearch['keysearch'];
		}
		$config['use_page_numbers'] = false;
		$config['uri_segment'] = 2;
		$config['num_links'] = 1;
		$this->pagination->initialize($config);
		$data["paging"] = $this->pagination->create_links();
		
		
		$configall = $this->config_model->getConfig();
        $meta = array(
            'title' => 'Tuyển dụng',
            'description' => $configall->site_describe,
            'keywords' => $configall->site_keyword,
        );
		$getAlltuyendung = $this->utility_model->getAllDESC('tbl_tuyendung', 'status', 1, 'stt');
		

		$getCateSearchs = $this->home_model->getCateSearch();
		$getAllCategoryTree = $this->home_model->getAllCategoryTree();
		$tuyenDung5 = $this->home_model->tuyenDung5();
		$tintuc5 = $this->home_model->tintuc5();
		$getabout7 = $this->home_model->getabout7();
		$this->_data['main_content'] = $this->load->view('v3template/tuyendung_view', array(
			'getAlltuyendungs' => $result['faqs'],
			'pagination' => $data["paging"],
			'meta' => $meta,
			'getCateSearchs' => $getCateSearchs,
			'menus' => $getAllCategoryTree,
			'tuyenDung5' => $tuyenDung5,
			'tintuc5' => $tintuc5,
			'getabout7' => $getabout7,
		), true);
		$this->load->view('v3template/layout_view', $this->_data);
	}

	
	/**
	 *  Chi tiet tuyen dung
	 */
	public function tuyendungview()
	{
		$uri = $this->uri->segment(2);
		
		$policyDetail = $this->utility_model->getDetail('tbl_tuyendung', 'seo_name', $uri);
		//var_dump($policyDetail);
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
		$this->_data['main_content'] = $this->load->view('v3template/detailTuyendung_view', array(
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
	
	
	/*
	 * tin tuc 
	 */
	public function tintuc()
	{
		$config['per_page'] = 9;
		$arraySearch = array();
		if($this->input->post()){
			$arraySearch['keysearch'] = $this->input->post('keysearch');
			$page = 0;
		}else{
			$arraySearch['keysearch']  = $this->input->get('keysearch');
		}
		$page = $this->uri->segment(2);
		$result = $this->news_model->getAllNewhome($arraySearch, $page, $config['per_page']);
		$this->load->library('pagination');
		$config['base_url'] = base_url().'/tin-tuc';
		$config['total_rows'] = $result['total_record'];
		if($arraySearch['keysearch'] != ''){
			$this->pagination->first_link = $config['base_url']."?keysearch=".$arraySearch['keysearch'];
			$this->pagination->suffix = '?keysearch='. $arraySearch['keysearch'];
		}
		$config['use_page_numbers'] = false;
		$config['uri_segment'] = 2;
		$config['num_links'] = 1;
		$this->pagination->initialize($config);
		$data["paging"] = $this->pagination->create_links();
		$listProductRandom = $this->products_model->getProductRandom();	
		$getAlltuyendung = $this->utility_model->getAllDESC('tbl_tuyendung', 'status', 1, 'stt');
        
        $configall = $this->config_model->getConfig();
        $meta = array(
            'title' => 'Tin tức',
            'description' => $configall->site_describe,
            'keywords' => $configall->site_keyword,
        );
        
        $getCateSearchs = $this->home_model->getCateSearch();
        $getAllCategoryTree = $this->home_model->getAllCategoryTree();
        $tuyenDung5 = $this->home_model->tuyenDung5();
        $tintuc5 = $this->home_model->tintuc5();
        $getabout7 = $this->home_model->getabout7();
		$this->_data['main_content'] = $this->load->view('v3template/tintuc_view', array(
			'listProductRandom' => $listProductRandom,
			'getAlltuyendungs' => $result['content'],
			'pagination' => $data["paging"],
			'meta' => $meta,
			'getCateSearchs' => $getCateSearchs,
			'menus' => $getAllCategoryTree,
			'tuyenDung5' => $tuyenDung5,
			'tintuc5' => $tintuc5,
			'getabout7' => $getabout7,
		), true);
		$this->load->view('v3template/layout_view', $this->_data);
	}

	/**
	 *  Chi tiet tin tức
	 */
	public function tintucview()
	{
		$uri = $this->uri->segment(2);
		$policyDetail = $this->utility_model->getDetail('tbl_news', 'seo_name', $uri);
		//var_dump($policyDetail);
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
		$this->_data['main_content'] = $this->load->view('v3template/article_view', array(
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
	
	
	
	
	
}

