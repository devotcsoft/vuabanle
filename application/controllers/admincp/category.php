<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once 'application/controllers/admincp/ad_layout.php';

/**
 * @author chinguyen.phpdev@gmail.com
 * @author otcsoft.com - 2014
 */
class Category extends Ad_layout
{
	var $table = "tbl_categories";
	
	public function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		$uri = $this->uri->uri_to_assoc(2);
		$explode = explode('-', $uri['category']);

		$config['per_page'] = 20;
		
		$arraySearch = array();
		if(isset($explode[1])){
			$arraySearch['category_id'] = $explode[1];
			if($this->input->post()){
				$arraySearch['keysearch'] = $this->input->post('keysearch');
				$page = 0;
			}else{
				$arraySearch['keysearch']  = $this->input->get('keysearch');
			}
		}else {
			if($this->input->post()){
				$arraySearch['keysearch'] = $this->input->post('keysearch');
				$arraySearch['category_id'] = $this->input->post('category_id');
				$page = 0;
			}else{
				$arraySearch['keysearch']  = $this->input->get('keysearch');
				$arraySearch['category_id'] = $this->input->get('category_id');
			}
		}
	
		
		$page = $this->uri->segment(3);
		
		$result = $this->category_model->getAllSearch($arraySearch, $page, $config['per_page'], $this->GLOBALS);
		
		$getAllCate = $this->category_model->getAllCate();
		$getMenulv2 = $this->category_model->getMenulv2();
		
		$this->load->library('pagination');
		$config['base_url'] = base_url().'/admincp/category';
		$config['total_rows'] = $result['total_record'];
		if($arraySearch['keysearch'] != ''){
			$this->pagination->suffix = '?search='. $arraySearch['keysearch'];
		}
		$config['use_page_numbers'] = false;
		$config['uri_segment'] = 3;
		$config['num_links'] = 1;
		$this->pagination->initialize($config);
		$data["paging"] = $this->pagination->create_links();
		
		$this->_data['ad_main_content'] = $this->load->view('admincp/category/index', array(
				'category' => $result['category'],
				'pagination' => $data["paging"],
				'getAllCate' => $getAllCate,
				'getMenulv2' => $getMenulv2,
		), true);
		$this->load->view('admincp/ad_layout_view', $this->_data);
	}
	
	public function add()
	{
		if($this->input->post() != ""){
			$keypage = $this->utility_model->find_slugwhere($this->table, 'keypage', $this->input->post('keypage'));
			//var_dump($keypage);
			if($keypage == true){
				$this->save();
				$error = '';
			}else {
				/* $error = "<div class='alert alert-error'>                
			              	<h4>Error!</h4>
			                Hey, you have some error here... 
			              </div>
						";
				*/
				$error = "<div class='aleterror'><p>URL đã được sử dụng vui lòng chọn URL khác</p></div>";
			}
		}
		$getMenulv2 = $this->category_model->getMenulv2();
		$this->_data['ad_main_content'] = $this->load->view('admincp/category/add', array(
			'getMenulv2' => $getMenulv2,
			'error' => @$error,
		), true);
		$this->load->view('admincp/ad_layout_view', $this->_data);
	}
	
	
	public function save()
	{
		$maxStt = $this->utility_model->maxStt($this->table);
		$stt = $maxStt->stt;
		$stt = (int)$stt + 1;
		$data = array(
			'parentID' => $this->input->post('parentID'),
			'catName' => $this->input->post('catName'),
			'catDes' => '',
			'status' => $this->input->post('status'),
            'athome' => $this->input->post('athome'),
			'stt' => $stt,
			'metaTitle' => $this->input->post('metaTitle'),
			'metaDes' => $this->input->post('metaDes'),
			'metaKey'=> $this->input->post('metaKey'), 
			'catImage' =>  str_replace(base_url(),'', $this->input->post('catImage')),
			'icon' =>  str_replace(base_url(),'', $this->input->post('icon')),
			'posup' =>  str_replace(base_url(),'', $this->input->post('posup')),
			'anhngoai'=>  str_replace(base_url(),'', $this->input->post('anhngoai')),
			'keypage' => $this->input->post('keypage'),
			'modname' => 'product',
			'tbname' => 'categories',
			'imageBanner1'=>  str_replace(base_url(),'', $this->input->post('imageBanner1')),
			'urlBanner1'=> $this->input->post('urlBanner1'),
			'imageBanner2'=>  str_replace(base_url(),'', $this->input->post('imageBanner2')),
			'urlBanner2'=> $this->input->post('urlBanner2'),
			'content'=> $this->input->post('content')
		);
		$insert = $this->utility_model->insert($this->table, $data);
		if($insert){
			echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
						<script>
						alert('Bạn đã thêm mới thành công !');
						 location.assign('".base_url('admincp/category.html')."');
					  </script>";
		}else {
			echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
						<script>
						alert('Thêm mới thất bại !');
						 location.assign('".base_url('admincp/category.html')."');
					  </script>";
		}
	}
	
	
	public function edit()
	{
		$param = $this->uri->ruri_to_assoc();
		$cateDetail = $this->utility_model->whereOneField($this->table, 'catID', $param['cid']);
		//var_dump($cateDetail);
		
		if ($this->input->post () != "") {
			$keypage = $this->utility_model->find_slugwhere ( $this->table, 'keypage', $this->input->post ( 'keypage' ) );
			$catID = $this->utility_model->find_slugwhere ( $this->table, 'catID', $this->input->post ( 'catID' ) );
			
			$checkslug = $this->category_model->checkSlug($this->input->post ( 'catID' ), $this->input->post ( 'keypage' ) );
			if($checkslug == TRUE){
				$this->updated ();
				$error = '';
			}else {
				if ($keypage == true) {
					$this->updated ();
					$error = '';
				} else {
					$error = "<div class='aleterror'><p>URL đã được sử dụng vui lòng chọn URL khác</p></div>";
				}
			}
		}
		$getMenulv2 = $this->category_model->getMenulv2 ();
		$this->_data ['ad_main_content'] = $this->load->view ( 'admincp/category/edit', array (
				'getMenulv2' => $getMenulv2,
				'error' => @$error,
				'cateDetail' => $cateDetail,
		), true );
		$this->load->view ( 'admincp/ad_layout_view', $this->_data );
	}
	
	
	public function updated()
	{
		// tu khoa maketing
		$keymaketing = $this->input->post('keymaketing');
		$urlmaketing = $this->input->post('urlmaketing');
		if($this->input->post('keymaketing') != ''){
			$keymaket = array();
			$i=0;
			foreach ($keymaketing as $key => $value) {
				$keymaket[$i]['keymaketing'] = str_replace(base_url(), '', $keymaketing[$key]);
				$keymaket[$i]['urlmaketing'] = @$urlmaketing[$key];
				$i=$i+1;
			}
		}
		
		@$keymaket = json_encode($keymaket);
		
		// san pham 
		$catNameProduct = $this->input->post('catNameProduct');
		$catUrlProduct = $this->input->post('catUrlProduct');
		$catProductImg = $this->input->post('catProductImg');
		$PriceProduct = $this->input->post('PriceProduct');
		if($this->input->post('catNameProduct') != ''){
			$productcate = array();
			$i=0;
			foreach ($catNameProduct as $key => $value) {
				$productcate[$i]['catUrlProduct'] = @$catUrlProduct[$key];
				$productcate[$i]['catNameProduct'] = @$catNameProduct[$key];
				$productcate[$i]['catProductImg'] = str_replace(base_url(), '', $catProductImg[$key]);
				$productcate[$i]['PriceProduct'] = @$PriceProduct[$key];
				$i=$i+1;
			}
		}
		@$productcate = json_encode($productcate);
		
		// Quang cao
		$imgAd = $this->input->post('imgAds');
		$linkAds = $this->input->post('linkAds');
		//var_dump($this->input->post('imgAds'));
		//var_dump($this->input->post('linkAds'));
		
		if($this->input->post('imgAds') != ''){
			$imgAds = array();
			$i=0;
			foreach ($imgAd as $key => $value) {
				$imgAds[$i]['imgAd'] = @str_replace(base_url(), '', $imgAd[$key]);
				$imgAds[$i]['linkAds'] = @$linkAds[$key];
				$i=$i+1;
			}
		}
		//var_dump($imgAds);
		@$imgAds = json_encode($imgAds);
		//var_dump(json_decode($imgAds));
		
		
		$data = array(
				'parentID' => $this->input->post('parentID'),
				'catName' => $this->input->post('catName'),
				'catDes' => '',
				'status' => $this->input->post('status'),
                'athome' => $this->input->post('athome'),
				'stt' => $this->input->post('stt'),
				'metaTitle' => $this->input->post('metaTitle'),
				'metaDes' => $this->input->post('metaDes'),
				'metaKey'=> $this->input->post('metaKey'),
				'catImage' =>  str_replace(base_url(),'', $this->input->post('catImage')),
				'icon' =>  str_replace(base_url(),'', $this->input->post('icon')),
				'keymaket' =>  @$keymaket,
				'productcate' => @$productcate,
				'imgAds' => @$imgAds,
				'posup' =>  str_replace(base_url(),'', $this->input->post('posup')),
				'anhngoai'=>  str_replace(base_url(),'', $this->input->post('anhngoai')),
				'keypage' => $this->input->post('keypage'),
				'modname' => 'product',
				'tbname' => 'categories',
				'imageBanner1'=>  str_replace(base_url(),'', $this->input->post('imageBanner1')),
				'urlBanner1'=> $this->input->post('urlBanner1'),
				'imageBanner2'=>  str_replace(base_url(),'', $this->input->post('imageBanner2')),
				'urlBanner2'=> $this->input->post('urlBanner2'),
				'content'=> $this->input->post('content'),
		);
		
		$updated = $this->utility_model->updateCate($this->input->post('catID'), $data);
		//die();
		
		if($updated){
			echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
						<script>
						alert('Bạn đã cập nhật thành công !');
						 location.assign('".base_url('admincp/category.html')."');
					  </script>";
		}else {
			echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
						<script>
						alert('Cập nhật; thất bại !');
						 location.assign('".base_url('admincp/category.html')."');
					  </script>";
		}
	}
	
	
	function delete() 
	{
		$id_list_str = $this->input->post('id_list');
		$id_list_arr = explode(',', $id_list_str);
		foreach ($id_list_arr as $cat_id) {
			if ($cat_id > 0) {
				$result = $this->utility_model->delete('catID' ,$cat_id ,$this->table);
			}
		}
		if($result){
			echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
						<script>
						alert('Bạn đã xóa thành công !');
						 location.assign('".base_url('admincp/category.html')."');
					  </script>";
		} else {
			echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
					<script>
					alert('Xóa không thành công !');
					 location.assign('".base_url('admincp/category.html')."');
				  </script>";
		}
	}
	
	
}
