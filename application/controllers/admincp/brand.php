<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once 'application/controllers/admincp/ad_layout.php';

/**
 * @author chinguyen.phpdev@gmail.com
 * @author otcsoft.com - 2014
 */
class Brand extends Ad_layout
{
	var $table = "tbl_brand"; 
	
	public function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		$config['per_page'] = 20;
		
		$arraySearch = array();
		if($this->input->post()){
			$arraySearch['keysearch'] = $this->input->post('keysearch');
			$page = 0;
		}else{
			$arraySearch['keysearch']  = $this->input->get('keysearch');
		}
		$page = $this->uri->segment(3);
		$result = $this->brand_model->getAllSearch($arraySearch, $page, $config['per_page']);
		$this->load->library('pagination');
		$config['base_url'] = base_url().'/admincp/brand';
		$config['total_rows'] = $result['total_record'];
		if($arraySearch['keysearch'] != ''){
			$config['first_url'] = $config['base_url']."?search=".$arraySearch['keysearch'];
			$this->pagination->suffix = '?search='. $arraySearch['keysearch'];
		}
		$config['use_page_numbers'] = false;
		$config['uri_segment'] = 3;
		$config['num_links'] = 1;
		$this->pagination->initialize($config);
		$data["paging"] = $this->pagination->create_links();
		
        
		$this->_data['ad_main_content'] = $this->load->view('admincp/brand/index', array(
				'brand' => $result['brand'],
				'pagination' => $data["paging"],
		), true);
		$this->load->view('admincp/ad_layout_view', $this->_data);
	}
	
	public function add()
	{
		if($this->input->post() != ""){
			$catName = $this->utility_model->find_slugwhere($this->table, 'catName', $this->input->post('catName'));
			if($catName == true){
				$this->save();
				$error = '';
			}else {
				$error = "<div class='aleterror'><p>Thương hiệu đã tồn tại</p></div>";
			}
		}
		$this->_data['ad_main_content'] = $this->load->view('admincp/brand/add', array(
			'error' => @$error,
		), true);
		$this->load->view('admincp/ad_layout_view', $this->_data);
	}
	
	
	public function save()
	{
		$data = array(			
			'catName' => $this->input->post('catName'),
			'danhmucID' => $this->input->post('danhmucID'),
			'status' => $this->input->post('status'),
			'athome' => $this->input->post('athome'),
			'metaTitle' => $this->input->post('metaTitle'),
			'metaDes' => $this->input->post('metaDes'),
			'metaKey'=> $this->input->post('metaKey'), 
			'catImage' =>  str_replace(base_url(),'', $this->input->post('catImage')),
			'keypage' => $this->input->post('keypage'),
			'tbname' => 'tbl_brand'
		);
		$insert = $this->utility_model->insert($this->table, $data);
		if($insert){
			echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
						<script>
						alert('Bạn đã thêm mới thành công !');
						 location.assign('".base_url('admincp/brand.html')."');
					  </script>";
		}else {
			echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
						<script>
						alert('Thêm mới thất bại !');
						 location.assign('".base_url('admincp/brand.html')."');
					  </script>";
		}
	}
	
	
	public function edit()
	{
		$param = $this->uri->ruri_to_assoc();
		$cateDetail = $this->utility_model->whereOneField($this->table, 'catID', $param['cid']);
		//var_dump($cateDetail);
		
		if ($this->input->post () != "") {
			$keypage = $this->utility_model->find_slugwhere ( $this->table, 'catName', $this->input->post ( 'catName' ) );
			$checkslug = $this->brand_model->checkSlug($this->input->post ( 'catID' ), $this->input->post ( 'catName' ) );
			if($checkslug == TRUE){
				$this->updated ();
				$error = '';
			}else {
				if ($keypage == true) {
					$this->updated ();
					$error = '';
				} else {
					$error = "<div class='aleterror'><p>Thương hiệu đã được sử dụng</p></div>";
				}
			}
		}
		$getMenulv2 = $this->category_model->getMenulv2 ();
		$this->_data ['ad_main_content'] = $this->load->view ( 'admincp/brand/edit', array (
				'error' => @$error,
				'cateDetail' => $cateDetail,
		), true );
		$this->load->view ( 'admincp/ad_layout_view', $this->_data );
	}
	
	
	public function updated()
	{
		$data = array(			
			'catName' => $this->input->post('catName'),
			'danhmucID' => $this->input->post('danhmucID'),
			'athome' => $this->input->post('athome'),
			'status' => $this->input->post('status'),
			'metaTitle' => $this->input->post('metaTitle'),
			'metaDes' => $this->input->post('metaDes'),
			'metaKey'=> $this->input->post('metaKey'), 
			'catImage' =>  str_replace(base_url(),'', $this->input->post('catImage')),
			'keypage' => $this->input->post('keypage'),
			'tbname' => 'tbl_brand'
		);
		$updated = $this->utility_model->updated('catID' ,$this->input->post('catID'),$this->table, $data);
		//var_dump($updated);
		//die();
		if($updated == TRUE){
			echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
						<script>
						alert('Bạn đã cập nhật thành công !');
						 location.assign('".base_url('admincp/brand.html')."');
					  </script>";
		}else {
			echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
						<script>
						alert('Cập nhật; thất bại !');
						 location.assign('".base_url('admincp/brand.html')."');
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
						 location.assign('".base_url('admincp/brand.html')."');
					  </script>";
		} else {
			echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
					<script>
					alert('Xóa không thành công !');
					 location.assign('".base_url('admincp/brand.html')."');
				  </script>";
		}
	}
	
	
}
