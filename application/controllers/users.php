<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once 'application/controllers/layout.php';

/**
 * @author chinguyen.phpdev@gmail.com
 * @author Otcsoft.com - 2014
 */
class Users extends Layout {
	
	public function __construct()
	{
		parent::__construct();
	}
	
	
	public function index()
	{
	    $getParentID0s = $this->category_model->getAllCateParent0();
		$this->_data['main_content'] = $this->load->view('login_view', array(
		    'getParentID0s' => $getParentID0s,
		), true);
		$this->load->view('v3template/layout_view', $this->_data);
	}
	
	
	
	
	
}

