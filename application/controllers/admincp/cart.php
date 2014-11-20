<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once 'application/controllers/admincp/ad_layout.php';

/**
 * @author chinguyen.phpdev@gmail.com
 * @author otcsoft.com - 2014
 */
class Cart extends Ad_layout
{
	var $table = "tbl_carts"; 
	
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
			$arraySearch['keysearch']  = $this->input->get('search');
		}
		$page = $this->uri->segment(3);
		$result = $this->cart_model->getAllSearch($arraySearch, $page, $config['per_page']);
		$this->load->library('pagination');
		$config['base_url'] = base_url().'/admincp/cart';
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
		
		$this->_data['ad_main_content'] = $this->load->view('admincp/cart/index', array(
				'cart' => $result['cart'],
				'pagination' => $data["paging"],
		), true);
		$this->load->view('admincp/ad_layout_view', $this->_data);
	}

	public function view()
	{
		$param = $this->uri->ruri_to_assoc();
		$cateDetail = $this->utility_model->whereOneField($this->table, 'cartID', $param['cid']);
		//var_dump($cateDetail);
		if ($this->input->post () != "") {
			$this->updated ();
		}
		$productAll = $this->cart_model->getProductDeail($cateDetail->cartID);
		$this->_data ['ad_main_content'] = $this->load->view ( 'admincp/cart/view', array (
				'error' => @$error,
				'cateDetail' => $cateDetail,
				'productAll'=> $productAll['CartDetail'],
		), true );
		$this->load->view ( 'admincp/ad_layout_view', $this->_data );
	}
	
	
	public function updated()
	{
		$data = array(			
			'status' => $this->input->post('status'),
		);
		$updated = $this->utility_model->updated('cartID' ,$this->input->post('cartID'),$this->table, $data);
		//var_dump($updated);
		//die();
		if($updated == TRUE){
			echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
						<script>
						alert('Bạn đã cập nhật thành công !');
						 location.assign('".base_url('admincp/cart.html')."');
					  </script>";
		}else {
			echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
						<script>
						alert('Cập nhật; thất bại !');
						 location.assign('".base_url('admincp/cart.html')."');
					  </script>";
		}
	}
	
	
	function delete() 
	{
		$id_list_str = $this->input->post('id_list');
		$id_list_arr = explode(',', $id_list_str);
		foreach ($id_list_arr as $cat_id) {
			if ($cat_id > 0) {
				$result = $this->utility_model->delete('cartID' ,$cat_id ,$this->table);
			}
		}
		if($result){
			echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
						<script>
						alert('Bạn đã xóa thành công !');
						 location.assign('".base_url('admincp/cart.html')."');
					  </script>";
		} else {
			echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
					<script>
					alert('Xóa không thành công !');
					 location.assign('".base_url('admincp/cart.html')."');
				  </script>";
		}
	}
	
	
}
