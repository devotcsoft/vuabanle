<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once 'application/controllers/layout.php';
	class Login extends Layout
	{
		function __construct()
		{
			parent::__construct();
		}
        
		function index()
		{
            $session_data = $this->session->userdata('logged_in');
			if(!$session_data)
			{
			    $configall = $this->config_model->getConfig();
                $meta = array(
                    'title' => 'Đăng ký',
                    'description' => $configall->site_describe,
                    'keywords' => $configall->site_keyword,
                );
    			$this->_data['main_content'] = $this->load->view('login_view', array(
    			     'meta' => $meta
    			), true);
    			$this->load->view('layout_view', $this->_data);
			}
		}
	
		function check_login()
		{
			$this->form_validation->set_message('required', '%s không được để trống !');
			$this->form_validation->set_rules('email','Tên đăng nhập hoặc E-mail','trim|required');
			$this->form_validation->set_rules('password','Mật khẩu','trim|required|xss_clean|callback_check_database');
			if($this->form_validation->run()==FALSE)
			{
				$configall = $this->config_model->getConfig();
                $meta = array(
                    'title' => 'Đăng ký',
                    'description' => $configall->site_describe,
                    'keywords' => $configall->site_keyword,
                );
				$this->_data['main_content'] = $this->load->view('login_view', array(
				    'meta' => $meta   
			    ), true);
			   $this->load->view('layout_view', $this->_data);
			}
			else 
			{
				redirect('', 'refresh');
			}
		}
        
        
		function check_database()
		{
			$email = $this->input->post('email');
			$password = md5($this->input->post('password'));
			$result = $this->member_model->login($email, $password);
			if(!$result){
				$this->form_validation->set_message('check_database', 'Địa chỉ email hoặc mật khẩu không đúng');
				return false;
			}else {
				$sess_array = array();
				foreach($result as $row){
					$user_info = $this->member_model->getUser($row->memberID);
					// khoi tao session
							$this->session->set_userdata('logged_in', array(
							'memberID' => $user_info->memberID,
							'userName' => $user_info->userName,
							'email' => $user_info->email,
					));
				}
				return true;
			}
		}
        
        
		function logout()
		{
			$this->session->unset_userdata('logged_in');
			echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
						<script>
						alert('Bạn đăng xuất thành công!');
					  </script>";
			$this->session->sess_destroy();
			redirect('', 'refresh');
		}
		
	}