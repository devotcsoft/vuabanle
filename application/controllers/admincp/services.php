<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once 'application/controllers/admincp/ad_layout.php';

/**
 * @author chinguyen.phpdev@gmail.com
 * @author otcsoft.com - 2014
 */
class Services extends Ad_layout
{
	var $table = "tbl_dichvu"; 
	
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
		$result = $this->services_model->getAllSearch($arraySearch, $page, $config['per_page']);
		$this->load->library('pagination');
		$config['base_url'] = base_url().'/admincp/faqs';
		$config['total_rows'] = $result['total_record'];
		if($arraySearch['keysearch'] != ''){
			$this->pagination->first_link = $config['base_url']."?keysearch=".$arraySearch['keysearch'];
			$this->pagination->suffix = '?keysearch='. $arraySearch['keysearch'];
		}
		$config['use_page_numbers'] = false;
		$config['uri_segment'] = 3;
		$config['num_links'] = 1;
		$this->pagination->initialize($config);
		$data["paging"] = $this->pagination->create_links();
		
		$this->_data['ad_main_content'] = $this->load->view('admincp/services/index', array(
				'content' => $result['faqs'],
				'pagination' => $data["paging"],
		), true);
		$this->load->view('admincp/ad_layout_view', $this->_data);
	}
	
	public function add()
	{
		if($this->input->post() != ""){
			$keypage = $this->utility_model->find_slugwhere($this->table, 'seo_name', $this->input->post('keypage'));
			if($keypage == true){
				$this->save();
				$error = '';
			}else {
				$error = "<div class='aleterror'><p>URL đã được sử dụng vui lòng chọn URL khác</p></div>";
			}
		}
		$this->_data['ad_main_content'] = $this->load->view('admincp/services/add', array(			
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
			'newsTitle' => $this->input->post('catName'),
			'newsDes' => $this->input->post('newsDes'),
			'tieudiemID' => $this->input->post('tieudiemID'),
			'status' => $this->input->post('status'),
			'newsContent' => $this->input->post('newsContent'),
			'stt' => $stt,
			'metaTitle' => $this->input->post('metaTitle'),
			'metaDes' => $this->input->post('metaDes'),
			'newsImage' =>  str_replace(base_url(),'', $this->input->post('newsImage')),
			'seo_name' => $this->input->post('keypage'),
			'modname' => 'services',
			'newsCreated' => date('Y-m-d H:i:s')
		);
		$insert = $this->utility_model->insert($this->table, $data);
		if($insert){
			echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
						<script>
						alert('Bạn đã thêm mới thành công !');
						 location.assign('".base_url('admincp/services.html')."');
					  </script>";
		}else {
			echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
						<script>
						alert('Thêm mới thất bại !');
						 location.assign('".base_url('admincp/services.html')."');
					  </script>";
		}
	}
	
	
	public function edit()
	{
		$param = $this->uri->ruri_to_assoc();
		$cateDetail = $this->utility_model->whereOneField($this->table, 'newsID', $param['cid']);
		if ($this->input->post () != "") {
			$keypage = $this->utility_model->find_slugwhere ( $this->table, 'seo_name', $this->input->post ( 'keypage' ) );
			$checkslug = $this->services_model->checkSlug($this->input->post ( 'newsID' ), $this->input->post ( 'keypage' ) );
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
		$this->_data ['ad_main_content'] = $this->load->view ( 'admincp/services/edit', array (
				'error' => @$error,
				'cateDetail' => $cateDetail,
		), true );
		$this->load->view ( 'admincp/ad_layout_view', $this->_data );
	}
	
	
	public function updated()
	{
		$maxStt = $this->utility_model->maxStt($this->table);
		$stt = $maxStt->stt;
		$stt = (int)$stt + 1;
		$data = array(
			'newsTitle' => $this->input->post('catName'),
			'newsDes' => $this->input->post('newsDes'),
			'tieudiemID' => $this->input->post('tieudiemID'),
			'status' => $this->input->post('status'),
			'newsContent' => $this->input->post('newsContent'),
			'stt' => $stt,
			'metaTitle' => $this->input->post('metaTitle'),
			'metaDes' => $this->input->post('metaDes'),
			'newsImage' =>  str_replace(base_url(),'', $this->input->post('newsImage')),
			'seo_name' => $this->input->post('keypage'),
			'modname' => 'services',
			'newsCreated' => date('Y-m-d H:i:s')
		);
		$updated = $this->utility_model->updated('newsID' ,$this->input->post('newsID'),$this->table, $data);
		if($updated){
			echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
						<script>
						alert('Bạn đã cập nhật thành công !');
						 location.assign('".base_url('admincp/services.html')."');
					  </script>";
		}else {
			echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
						<script>
						alert('Cập nhật; thất bại !');
						 location.assign('".base_url('admincp/services.html')."');
					  </script>";
		}
	}
	
	
	function delete() 
	{
		$id_list_str = $this->input->post('id_list');
		$id_list_arr = explode(',', $id_list_str);
		foreach ($id_list_arr as $cat_id) {
			if ($cat_id > 0) {
				$result = $this->utility_model->delete('newsID' ,$cat_id ,$this->table);
			}
		}
		if($result){
			echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
						<script>
						alert('Bạn đã xóa thành công !');
						 location.assign('".base_url('admincp/services.html')."');
					  </script>";
		} else {
			echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
					<script>
					alert('Xóa không thành công !');
					 location.assign('".base_url('admincp/services.html')."');
				  </script>";
		}
	}
	
	
}
