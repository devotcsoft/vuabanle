<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once 'application/controllers/admincp/ad_layout.php';

/**
 * @author chinguyen.phpdev@gmail.com
 * @author otcsoft.com - 2014
 */
class Products extends Ad_layout
{
	var $table = "tbl_product";
	
	public function __construct()
	{
		parent::__construct();
		date_default_timezone_set('Asia/Ho_Chi_Minh');
	}
	
	public function index()
	{
		//var_dump($this->sessionAll);
		
		$config['per_page'] = 20;
		if($this->input->post()){
			$arraySearch['keysearch'] = $this->input->post('keysearch');
			$arraySearch['category_id'] = $this->input->post('category_id');
			$arraySearch['brand'] = $this->input->post('brand');
			$arraySearch['loaisp'] = $this->input->post('loaisp');
			$arraySearch['tinhtrangsp'] = $this->input->post('tinhtrangsp');
			$page = 0;
		}else{
			$arraySearch['keysearch']  = $this->input->get('keysearch');
			$arraySearch['category_id'] = $this->input->get('cid');
			$arraySearch['brand'] = $this->input->get('th');
			$arraySearch['loaisp'] = $this->input->get('lsp');
			$arraySearch['tinhtrangsp'] = $this->input->get('tt');
		}
		
	
		$page = $this->uri->segment(3);
		$result = $this->products_model->getAllSearch($arraySearch, $page, $config['per_page'], $this->GLOBALS);
		$getAllCate = $this->category_model->getAllCate();
		$getMenulv2 = $this->category_model->getMenulv2All($this->GLOBALS);
		
		$getAllbrand = $this->brand_model->getAllBrand();
		
		$this->load->library('pagination');
		$config['base_url'] = base_url().'/admincp/products';
		$config['total_rows'] = $result['total_record'];
		if($arraySearch['keysearch'] != '' || $arraySearch['brand'] != "" ||  $arraySearch['category_id'] != "" || $arraySearch['loaisp'] != "" || $arraySearch['tinhtrangsp'] != ""  ){
			$config['first_url'] = $config['base_url']."?keysearch=".$arraySearch['keysearch'].'&cid='.$arraySearch['category_id'].'&th='.$arraySearch['brand'].'&lsp='.$arraySearch['loaisp'].'&tt='.$arraySearch['tinhtrangsp'];;
			$this->pagination->suffix = '?keysearch='. $arraySearch['keysearch'].'&cid='.$arraySearch['category_id'].'&th='.$arraySearch['brand'].'&lsp='.$arraySearch['loaisp'].'&tt='.$arraySearch['tinhtrangsp'];
		} 
		$config['use_page_numbers'] = false;
		$config['uri_segment'] = 3;
		$config['num_links'] = 1;
		$this->pagination->initialize($config);
		$data["paging"] = $this->pagination->create_links();
		
		$this->_data['ad_main_content'] = $this->load->view('admincp/products/index', array(
				'products' => $result['products'],
				'pagination' => $data["paging"],
				'getAllCate' => $getAllCate,
				'getMenulv2' => $getMenulv2,
				'getAllBrand' => $getAllbrand,
				'totalProduct' =>$result['total_record']
		), true);
		$this->load->view('admincp/ad_layout_view', $this->_data);
		
	}
	
	public function add()
	{
		if($this->input->post() != ""){
			$keypage = $this->utility_model->find_slugwhere($this->table, 'seo_name', $this->input->post('seo_name'));
			//var_dump($keypage);
			if($keypage == true){
				$this->save();
				$error = '';
			}else {
				$error = "<div class='aleterror'><p>URL đã được sử dụng vui lòng chọn URL khác</p></div>";
			}
		}
		
		$getMenulv2 = $this->category_model->getMenulv2();
		$getAllbrand = $this->brand_model->getAllBrand();
		
		$get_padding = $this->base_model->get_padding();
		
		
		$this->_data['ad_main_content'] = $this->load->view('admincp/products/add', array(
			'getMenulv2' => $getMenulv2,
			'getAllbrand' => $getAllbrand,
			'get_padding' => $get_padding,
			'error' => @$error,
		), true);
		$this->load->view('admincp/ad_layout_view', $this->_data);
	}
	
	
	public function save()
	{
		//echo "<pre>";
		//var_dump( $this->sessionAll['userName']);die();
		$img = $this->input->post('image_url');
	
		if($this->input->post('image_url') != ''){
			$image = array();
			$i=0;
			foreach ($img as $key => $value) {
				$image[$i]['image_url'] = str_replace(base_url(), '', $img[$key]);
				$i=$i+1;
			}
			$galleryImage = serialize($image);
		}
		$gia =  $this->input->post('gia');
		$giaphantram =  $this->input->post('giamgia');
		$giasale =  $this->input->post('giagiam');
	
	
	
		// TH1  GIA GIAM DIEN VA $GIA % CUNG DIEN
		if($giaphantram != null && $giaphantram != 0) {
			if($giasale != null && $giasale != 0) {
				$giagiam =  round(($gia-$giasale) / $gia * 100, 1);
			}
		}else {
			if($giasale != null && $giasale != 0) {
				$giagiam = round(($gia-$giasale) / $gia * 100, 1);
			}
		}
	
		$data = array(
			'productName' => $this->input->post('productName'),
			'productCode' => $this->input->post('productCode'),
			'catID' => $this->input->post('catID'),
			'thuonghieuID' => $this->input->post('thuonghieuID'),
			'gia' => $gia,
			'giamgia' => @$giagiam,
			'giagiam' => $giasale,
			'spbaogom' => $this->input->post('spbaogom'),
			'productDetail' => $this->input->post('productDetail'),
			'status' => $this->input->post('status'),
			'seo_name' => $this->input->post('seo_name'),
			'metaTitle' => $this->input->post('metaTitle'),
			'metaDes' => $this->input->post('metaDes'),
			'metaKey' => $this->input->post('metaKey'),
			'metaAuthor' => $this->input->post('metaAuthor'),
			'galleryImage' => @$galleryImage,
			'chatlieu' => $this->input->post('chatlieu'),
			'xuatxu' => $this->input->post('xuatxu'),
			'kichthuoc' => $this->input->post('kichthuoc'),
			'baohanh' => $this->input->post('baohanh'),
			'tinhtranghang' => $this->input->post('tinhtranghang'),
			'hinhthucgiaonhan' => $this->input->post('hinhthucgiaonhan'),
			'productImage' => $this->input->post('productImage'),
			'created' => date('Y-m-d H:i:s'),
			'adstatus' => 0,
			'username' => $this->sessionAll['userName'],
			'ghod' => $this->input->post('ghod'),
			'sale' => $this->input->post('sale'),
			'saletime' => $this->input->post('saletime'),
		);
	
		$insert = $this->utility_model->insert($this->table, $data);
		$id = $this->db->insert_id();
		if($insert){
			echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
						<script>
						alert('Bạn đã thêm mới thành công !');
						 location.assign('".base_url('admincp/products/edit/'.$id)."');
					  </script>";
		}else {
			echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
						<script>
						alert('Thêm mới thất bại !');
						 location.assign('".base_url('admincp/products/add.html')."');
					  </script>";
		}
	}
	
	
	
	public function edit()
	{
		$param['pid'] = $this->uri->segment(4);
		//$param = $this->uri->uri_to_assoc();
		$productDetail = $this->utility_model->whereOneField($this->table, 'productID', $param['pid']);
		$get_padding=$this->base_model->get_padding();
		
		if ($this->input->post () != "") {
			$seo_name = $this->utility_model->find_slugwhere ( $this->table, 'seo_name', $this->input->post ( 'seo_name' ) );
			$catID = $this->utility_model->find_slugwhere ( $this->table, 'productID', $this->input->post ( 'productID' ) );
				
			$checkslug = $this->products_model->checkSlug($this->input->post ('productID'), $this->input->post ( 'seo_name' ));
			
			if($checkslug == TRUE){
				$this->updated ();
				$error = '';
			}else {
				if ($seo_name == true) {
					$this->updated ();
					$error = '';
				} else {
					$error = "<div class='aleterror'><p>URL đã được sử dụng vui lòng chọn URL khác</p></div>";
				}
			}
		}
		$unset = unserialize($productDetail->galleryImage);
		//var_dump($unset);
		$getMenulv2 = $this->category_model->getMenulv2();
		$getAllbrand = $this->brand_model->getAllBrand();
		
		$this->_data['ad_main_content'] = $this->load->view('admincp/products/edit', array(
			'getMenulv2' => $getMenulv2,
			'getAllbrand' => $getAllbrand,
			'error' => @$error,
			//'get_padding'=>$get_padding,
			'productDetail' => $productDetail,
		), true);
		$this->load->view('admincp/ad_layout_view', $this->_data);
	}
	
	
	public function updated()
	{
		$img = $this->input->post('image_url');
		if($this->input->post('image_url') != ''){
			$image = array();
			$i=0;
			foreach ($img as $key => $value) {
				$image[$i]['image_url'] = str_replace(base_url(), '', $img[$key]);
				$i=$i+1;
			}
		}
		@$galleryImage = serialize($image);
        
	
		$gia =  $this->input->post('gia');
		$giaphantram =  $this->input->post('giamgia');
		$giasale =  $this->input->post('giagiam');
		
		
		
		// TH1  GIA GIAM DIEN VA $GIA % CUNG DIEN
		if($giaphantram != null && $giaphantram != 0) {
			if($giasale != null && $giasale != 0) { 	
				$giagiam =  round(($gia-$giasale) / $gia * 100, 1);
			}	
		}else {
			if($giasale != null && $giasale != 0) {
				$giagiam = round(($gia-$giasale) / $gia * 100, 1);
			}
		}
		if($this->input->post('adstatus') && $this->input->post('adstatus') == 1 ) {
			$adstatus = 1;
		}else {
			if($this->input->post('productID') > 2671 )
			{
				$adstatus = 0;
			}else {
				$adstatus = 1;
			}
			
		}
		
		$data = array(
			'productName' => $this->input->post('productName'),
			'productCode' => $this->input->post('productCode'),
			'catID' => $this->input->post('catID'),
			'thuonghieuID' => $this->input->post('thuonghieuID'),
			'dotuoi' => $this->input->post('dotuoi'),
			'gia' => $gia,
			'giamgia' => @$giagiam,
			'giagiam' => $giasale,
			'spbaogom' => $this->input->post('spbaogom'),
			'productDetail' => $this->input->post('productDetail'),
			'status' => $this->input->post('status'),
			'seo_name' => $this->input->post('seo_name'),
			'metaTitle' => $this->input->post('metaTitle'),
			'metaDes' => $this->input->post('metaDes'),
			'metaKey' => $this->input->post('metaKey'),
			'metaAuthor' => $this->input->post('metaAuthor'),
			'galleryImage' => @$galleryImage,
			'chatlieu' => $this->input->post('chatlieu'),
			'xuatxu' => $this->input->post('xuatxu'),
			'kichthuoc' => $this->input->post('kichthuoc'),
			'baohanh' => $this->input->post('baohanh'),
			'tinhtranghang' => $this->input->post('tinhtranghang'),
			'hinhthucgiaonhan' => $this->input->post('hinhthucgiaonhan'),
			'productImage' => $this->input->post('productImage'),
			'updated' => date('Y-m-d H:i:s'),
			'adstatus' => $adstatus,
			'ghod' => $this->input->post('ghod'),
			'sale' => $this->input->post('sale'),
			'saletime' => $this->input->post('saletime'),
		);
		$id=$this->input->post('productID');
		$updated = $this->utility_model->updated('productID' ,$this->input->post('productID'),$this->table, $data);
		if($updated){
			echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
						<script>
						alert('Bạn đã cập nhật thành công !');
						 location.assign('".base_url('admincp/products/edit/'.$id)."');
					  </script>";
		}else {
			echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
						<script>
						alert('Cập nhật; thất bại !');
						 location.assign('".base_url('admincp/products/edit/'.$id)."');
					  </script>";
		}
	}
	
	
	function delete()
	{
		$id_list_str = $this->input->post('id_list');
		$id_list_arr = explode(',', $id_list_str);
		foreach ($id_list_arr as $cat_id) {
			if ($cat_id > 0) {
				$result = $this->utility_model->delete('productID' ,$cat_id ,$this->table);
			}
		}
		if($result){
			echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
						<script>
						alert('Bạn đã xóa thành công !');
						 location.assign('".base_url('admincp/products.html')."');
					  </script>";
		} else {
			echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
					<script>
					alert('Xóa không thành công !');
					 location.assign('".base_url('admincp/products.html')."');
				  </script>";
		}
	}
	
	
	public function ischeck()
	{
		echo "11212";
		$result = $this->products_model->ischeckproduct($_POST['ischeck'], $_POST['pid']);
		var_dump($result);
		die();
		if($_POST['ischeck']) {
			
			var_dump($result);
			die();
			/*
			if ($result)
			{
				var_dump(json_encode(array('status'=>'OK', 'result'=>$result)));
			}
			*/	
		}
	}
	
}
