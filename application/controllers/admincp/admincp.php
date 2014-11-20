<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once 'application/controllers/admincp/ad_layout.php';

/**
 * @author chinguyen.phpdev@gmail.com
 * @author otcsoft.com - 2014
 */
class Admincp extends Ad_layout
{
	public function __construct()
	{
		parent::__construct();
		
	}
	
	public function index()
	{
		$this->load->view('admincp/ad_layout_view', $this->_data);
	}
}
