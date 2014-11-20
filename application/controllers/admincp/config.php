<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once 'application/controllers/admincp/ad_layout.php';

/**
 * @author chinguyen.phpdev@gmail.com
 * @author otcsoft.com - 2014
 */
class Config extends Ad_layout
{
	var $table = "tbl_config"; 
	
	public function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		if($this->input->post()){
			$this->updated();
		}
		$data = $this->utility_model->whereOneField($this->table, 'config_id', 1);
		$this->_data['ad_main_content'] = $this->load->view('admincp/config/index', array(
				'config' => $data
		), true);
		$this->load->view('admincp/ad_layout_view', $this->_data);
	}
	
	public function updated()
	{
		$data = array(
			'owner_name' => $this->input->post('owner_name'),
			'site_logo' => $this->input->post('site_logo'),
			'owner_phone' => $this->input->post('owner_phone'),
			'owner_fax' => $this->input->post('owner_fax'),
			'owner_email' => $this->input->post('owner_email'),
			'owner_web' => $this->input->post('owner_web'),
			'site_link' => $this->input->post('site_link'),
			'site_title' => $this->input->post('site_title'),
			'site_describe' => $this->input->post('site_describe'),
			'site_keyword' => $this->input->post('site_keyword'),
			'site_contactcontent' => $this->input->post('site_contactcontent'),
			'site_footer' => $this->input->post('site_footer'),
		);
		$updated = $this->utility_model->updated('config_id', 1, $this->table, $data);
		if($updated){
			echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
						<script>
						alert('Bạn đã cập nhật thành công !');
						 location.assign('".base_url('admincp/config.html')."');
					  </script>";
		}else {
			echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
						<script>
						alert('Cập nhật; thất bại !');
						 location.assign('".base_url('admincp/config.html')."');
					  </script>";
		}
	} 
	

	
	
}
