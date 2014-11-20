<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once 'application/controllers/admincp/ad_layout.php';

/**
 * @author chinguyen.phpdev@gmail.com
 * @author otcsoft.com - 2014
 */
class Contact extends Ad_layout
{
	var $table = "tbl_contactus"; 
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('base_model');
		$this->load->model('contact_model');
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
		$result = $this->contact_model->getAllSearch($arraySearch, $page, $config['per_page']);
		$this->load->library('pagination');
		$config['base_url'] = base_url().'/admincp/contact';
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
		
		$this->_data['ad_main_content'] = $this->load->view('admincp/contact/index', array(
				'content' => $result['contact'],
				'pagination' => $data["paging"],
		), true);
		$this->load->view('admincp/ad_layout_view', $this->_data);
	}
	public function edit()
	{
		
		$param = $this->uri->ruri_to_assoc();
		
		$contact = $this->contact_model->getDetail($param['cid']);
		//var_dump($cateDetail);die();
		if ($this->input->post () != "") {
			$this->updated ();
		}
		$this->_data ['ad_main_content'] = $this->load->view ( 'admincp/contact/edit', array (
				'contact' => $contact,
		), true );
		$this->load->view ( 'admincp/ad_layout_view', $this->_data );
	}
	
	public function updated()
	{
		$id= $this->uri->segment(4);
		$data = array(
		
			'status' => $this->input->post('status'),
		);
		$updated = $this->utility_model->updated('ID',$id,$this->table, $data);
		if($updated){
			echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
						<script>
						alert('Bạn đã cập nhật thành công !');
						 location.assign('".base_url('admincp/contact.html')."');
					  </script>";
		}else {
			echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
						<script>
						alert('Cập nhật; thất bại !');
						 location.assign('".base_url('admincp/contact.html')."');
					  </script>";
		}
	}
	
	
	function delete() 
	{
		$id_list_str = $this->input->post('id_list');
		$id_list_arr = explode(',', $id_list_str);
		foreach ($id_list_arr as $cat_id) {
			if ($cat_id > 0) {
				$result = $this->utility_model->delete('ID' ,$cat_id ,$this->table);
			}
		}
		if($result){
			echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
						<script>
						alert('Bạn đã xóa thành công !');
						 location.assign('".base_url('admincp/contact.html')."');
					  </script>";
		} else {
			echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
					<script>
					alert('Xóa không thành công !');
					 location.assign('".base_url('admincp/faqs.html')."');
				  </script>";
		}
	}	
	
}
