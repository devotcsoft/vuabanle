<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Layout extends CI_Controller
{
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
		$this->load->model('member_model', 'member_model');
		$this->load->model('base_model', 'base_model');
        $this->load->model('price_model', 'price_model');
       	$this->load->model('gallery_model', 'gallery_model');
       	$this->load->model('home_model', 'home_model');
       	
       	$this->load->library('BreadcrumbComponent');
		
		// load template
		$config = $this->config_model->getConfig();
		
		$selectAllNameProduct = $this->products_model->selectAllNameProduct();
		//var_dump($selectAllNameProduct);
        
        //$this->_data['getParentID0s']  = $this->category_model->getAllCateParent0();
        $totalItem = $this->cart->total_items();
        $carts = $totalItem ? $totalItem : 0;
        $this->_data['cart'] = $carts;
		$this->_data['header'] = $this->load->view('header_view', array(
			'config' => $config,
			'cart' => $carts,
			'selectAllNameProduct' => $selectAllNameProduct,
		), true);
		
		$this->_data['footer'] = $this->load->view('footer_view', array(
				'config' => $config,
		), true);
	}
}