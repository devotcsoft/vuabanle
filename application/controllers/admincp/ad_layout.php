<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @author chinguyen.phpdev@gmail.com
 * @author otcsoft.com - 2014
 */
class Ad_layout extends CI_Controller
{
	public $GLOBALS = '';
	public $sessionAll = '';
	
	public function __construct()
	{
		parent::__construct();
		
		//load model
		$this->load->model('category_model', 'category_model');
		$this->load->model('utility_model', 'utility_model');
		$this->load->model('config_model', 'config_model');
		$this->load->model('products_model', 'products_model');
		$this->load->model('brand_model', 'brand_model');
		$this->load->model('cart_model', 'cart_model');
		$this->load->model('comment_model', 'comment_model');
		$this->load->model('content_model', 'content_model');
		$this->load->model('faqs_model', 'faqs_model');
		$this->load->model('news_model', 'news_model');
		$this->load->model('services_model', 'services_model');
		$this->load->model('works_model', 'works_model');
		$this->load->model('users_model', 'users_model');
		$this->load->model('base_model', 'base_model');
		$this->load->model('member_model', 'member_model');
		$this->load->model('athome_model', 'athome_model');
		
		$this->sessionAll = $session_data = $this->session->userdata('logged_ad');
		
		//$this->session = $this->session->userdata('logged_ad'); 
		
		$this->GLOBALS = $session_data['assets'];
		//var_dump($session_data);
		if(!$session_data){
			redirect('admin/dang-nhap', 'refresh');
			
		}
		// load temaplte
		$this->_data['ad_header'] = $this->load->view('admincp/includes/ad_header_view', '', true);
		$this->_data['ad_menu'] = $this->load->view('admincp/includes/ad_menu_view', '', true);
		
		
		// get all config
		$getConfig = $this->config_model->getConfig();
		$this->_data['ad_footer'] = $this->load->view('admincp/includes/ad_footer_view', array(
			
			'getConfig' => $getConfig,
		), true);
		
	}	
}
