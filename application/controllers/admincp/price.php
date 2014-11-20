<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once 'application/controllers/admincp/ad_layout.php';

/**
 * @author chinguyen.phpdev@gmail.com
 * @author otcsoft.com - 2014
 */
	class Price extends Ad_layout
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('price_model');
			$this->load->model('base_model');
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
		$result = $this->price_model->getAllSearch($arraySearch, $page, $config['per_page']);
		$this->load->library('pagination');
		$config['base_url'] = base_url().'/admincp/price';
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
		$getprice_lv1 = $this->price_model->getprice_lv1();
		$this->_data['ad_main_content'] = $this->load->view('admincp/price/index', array(
				'content' => $result['price'],
				'pagination' => $data["paging"],
				'getprice_lv1'=>$getprice_lv1,
		), true);
		$this->load->view('admincp/ad_layout_view', $this->_data);
	}
	function add()
	{
		$this->form_validation->set_rules("value","Giá","required");
		$this->form_validation->set_rules("name","Địa điểm","required");
		$this->form_validation->set_message('required', 'Mời bạn nhập trường %s.');
		$getprice_lv2 = $this->price_model->getprice_lv2();
		
		if($this->form_validation->run()==FALSE)
		{
			$this->_data['ad_main_content'] = $this->load->view('admincp/price/add', array(
					'getprice_lv2'=>$getprice_lv2,
					
			), true);
			$this->load->view('admincp/ad_layout_view', $this->_data);
		}
		else
		{
			$this->save();
		}
	}
	function save()
	{
		$table='tbl_cod';
		$data = array(
				"name" => $this->input->post("name"),
				'parentID' => $this->input->post('parentID'),
				"value"  => $this->input->post("value"),
				"status"  => $this->input->post("status"),
				"stt"     => $this->input->post("stt"),
		);
		$insert=$this->utility_model->insert($table, $data);
		$id = $this->db->insert_id();
		echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
						<script>
						alert('Bạn đã thêm giá vận chuyển thành công !');
						 location.assign('".base_url('admincp/price/edit/'.$id)."');
					  </script>";
	}
	public function edit()
	{
		$id = $this->uri->segment(4);
		$where='id';
		$table = "tbl_cod";
		$data['info'] = $this->base_model->get_detail($table,$where,$id);
		$getprice_lv2 = $this->price_model->getprice_lv2();
		$this->form_validation->set_rules("value","Giá","required");
		$this->form_validation->set_rules("name","Địa điểm","required");
		$this->form_validation->set_message('required', 'Mời bạn nhập trường %s.');
		if($this->form_validation->run()==FALSE)
		{
			$this->_data['ad_main_content'] = $this->load->view('admincp/price/edit', array(
					'info' => $data['info'],
					'getprice_lv2'=>$getprice_lv2,
			), true);
			$this->load->view('admincp/ad_layout_view', $this->_data);
		}
		else
		{
			$this->updated();
		}
	}
	
	public function updated()
	{
		$table = "tbl_cod";
		$id= $this->uri->segment(4);
		$data = array(
				"name" => $this->input->post("name"),
				'parentID' => $this->input->post('parentID'),
				"value"  => $this->input->post("value"),
				"status"  => $this->input->post("status"),
				"stt"     => $this->input->post("stt"),
		);
		$this->utility_model->updated('ID',$id,$table,$data);
		echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
						<script>
						alert('Cập nhập thành công !');
						 location.assign('".base_url('admincp/price').'.html'."');
					  </script>";
	}
	
	function delete()
	{
		$table = "tbl_cod";
		$id_list_str = $this->input->post('id_list');
		$id_list_arr = explode(',', $id_list_str);
		foreach ($id_list_arr as $cat_id) {
			if ($cat_id > 0) {
				$result = $this->utility_model->delete('id' ,$cat_id ,$table);
			}
		}
		if($result){
			echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
						<script>
						alert('Bạn đã xóa thành công !');
						 location.assign('".base_url('admincp/price.html')."');
					  </script>";
		} else {
			echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
					<script>
					alert('Xóa không thành công !');
					 location.assign('".base_url('admincp/price.html')."');
				  </script>";
		}
	}
	
	
	}