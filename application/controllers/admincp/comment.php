<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once 'application/controllers/admincp/ad_layout.php';

/**
 * @author chinguyen.phpdev@gmail.com
 * @author otcsoft.com - 2014
 */
class Comment extends Ad_layout
{
	var $table = "tbl_comment"; 
	
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
		
		$result = $this->comment_model->getAllSearch($arraySearch, $page, $config['per_page']);
		$this->load->library('pagination');
		$config['base_url'] = base_url().'/admincp/comment';
		$config['total_rows'] = $result['total_record'];
		if($arraySearch['keysearch'] != ''){
			$config['first_url'] = $config['base_url']."?keysearch=".$arraySearch['keysearch'];
			$this->pagination->suffix = '?keysearch='. $arraySearch['keysearch'];
		}
		$config['use_page_numbers'] = false;
		$config['uri_segment'] = 3;
		$config['num_links'] = 1;
		$this->pagination->initialize($config);
		$data["paging"] = $this->pagination->create_links();
		
		$this->_data['ad_main_content'] = $this->load->view('admincp/comment/index', array(
				'comment' => $result['comment'],
				'pagination' => $data["paging"],
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
		$this->_data['ad_main_content'] = $this->load->view('admincp/comment/add', array(
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
			'stt' => $stt,
			'metaTitle' => $this->input->post('metaTitle'),
			'metaDes' => $this->input->post('metaDes'),
			'metaKey'=> $this->input->post('metaKey'), 
			'catImage' =>  str_replace(base_url(),'', $this->input->post('catImage')),
			'posup' =>  str_replace(base_url(),'', $this->input->post('posup')),
			'anhngoai'=>  str_replace(base_url(),'', $this->input->post('anhngoai')),
			'keypage' => $this->input->post('keypage'),
			'modname' => 'product',
			'tbname' => 'categories'
		);
		$insert = $this->utility_model->insert($this->table, $data);
		if($insert){
			echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
						<script>
						alert('Bạn đã thêm mới thành công !');
						 location.assign('".base_url('admincp/comment.html')."');
					  </script>";
		}else {
			echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
						<script>
						alert('Thêm mới thất bại !');
						 location.assign('".base_url('admincp/comment.html')."');
					  </script>";
		}
	}
	
	
	public function edit()
	{
		
		$param = $this->uri->ruri_to_assoc();
		
		$cateDetail = $this->comment_model->getDetailComment($param['cid']);
		//var_dump($cateDetail);die();
		if ($this->input->post () != "") {
			$this->updated ();
		}
		$this->_data ['ad_main_content'] = $this->load->view ( 'admincp/comment/edit', array (
				'cateDetail' => $cateDetail,
		), true );
		$this->load->view ( 'admincp/ad_layout_view', $this->_data );
	}
	
	
	public function updated()
	{
		$data = array(
			'fullname' => $this->input->post('fullname'),
			'address' => $this->input->post('address'),
			'email' => $this->input->post('email'),
			'subject' => $this->input->post('subject'),
			'content' => $this->input->post('content'),
			'status'=> $this->input->post('status'),
		);
		$updated = $this->utility_model->updated('commentID' ,$this->input->post('commentID'),$this->table, $data);
		if($updated){
			echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
						<script>
						alert('Bạn đã cập nhật thành công !');
						 location.assign('".base_url('admincp/comment.html')."');
					  </script>";
		}else {
			echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
						<script>
						alert('Cập nhật; thất bại !');
						 location.assign('".base_url('admincp/comment.html')."');
					  </script>";
		}
	}
	
	
	function delete() 
	{
		$id_list_str = $this->input->post('id_list');
		$id_list_arr = explode(',', $id_list_str);
		foreach ($id_list_arr as $cat_id) {
			if ($cat_id > 0) {
				$result = $this->utility_model->delete('commentID' ,$cat_id ,$this->table);
			}
		}
		if($result){
			echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
						<script>
						alert('Bạn đã xóa thành công !');
						 location.assign('".base_url('admincp/comment.html')."');
					  </script>";
		} else {
			echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
					<script>
					alert('Xóa không thành công !');
					 location.assign('".base_url('admincp/comment.html')."');
				  </script>";
		}
	}
	
	
}
