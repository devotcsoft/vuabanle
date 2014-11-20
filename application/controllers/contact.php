<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once 'application/controllers/layout.php';
	class Contact extends Layout
	{
		function __construct()
		{
			parent::__construct();
			
		}
		function index()
		{
			$this->form_validation->set_message('valid_email', 'Địa chỉ Email không hợp lệ');
			$this->form_validation->set_message('required', 'Mời bạn nhập %s.');
			$this->form_validation->set_rules("fullname","Họ và tên","required");
			$this->form_validation->set_rules("phone","Số điện thoại","required");
			$this->form_validation->set_rules("email","Email","required|valid_email");
            
            $configall = $this->config_model->getConfig();
            $meta = array(
                'title' => 'Liên hệ',
                'description' => $configall->site_describe,
                'keywords' => $configall->site_keyword,
            );
            $getCateSearchs = $this->home_model->getCateSearch();
            $getAllCategoryTree = $this->home_model->getAllCategoryTree();
			if($this->form_validation->run()==FALSE)
			{
    			$this->_data['main_content'] = $this->load->view('contact_view', array(
    				'getCateSearchs' => $getCateSearchs,
					'menus' => $getAllCategoryTree,
    			    'meta' => $meta
        	    ), true);
    			$this->load->view('v3template/layout_view', $this->_data);
			}
			else
			{
				$this->save();
			}
		}
        
        
		function save()
		{
			$data = array(
					"fullname"  => $this->input->post("fullname"),
					"email"     => $this->input->post("email"),
					"phone"   => $this->input->post("phone"),
					"address"   => $this->input->post("address"),
					"subject"   => $this->input->post("subject"),
					"message"   => $this->input->post("comments"),
					"status"   => '0',
					'postdate' =>   date('d-m-Y h:i:s')
			);
			$table='tbl_contactus';
			$this->utility_model->insert($table,$data);
			echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
						<script>
						alert('Gửi liên hệ thành công !');
						 location.assign('".base_url('lien-he')."');
					  </script>";
		
		}
	}