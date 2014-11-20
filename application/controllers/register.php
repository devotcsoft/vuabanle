<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once 'application/controllers/layout.php';
	class Register extends Layout
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('member_model');
		}
		function index()
		{
		    $configall = $this->config_model->getConfig();
            $meta = array(
                'title' => 'Đăng ký',
                'description' => $configall->site_describe,
                'keywords' => $configall->site_keyword,
            );
			$getParentID0s = $this->category_model->getAllCateParent0();
			$this->_data['main_content'] = $this->load->view('register_view', array(
    			 'getParentID0s' => $getParentID0s,
    			 'meta' => $meta  
    		), true);
			$this->load->view('layout_view', $this->_data);
			
		}
		function check_register()
		{
			$this->form_validation->set_message('matches', 'Mật khẩu không trùng nhau');
			$this->form_validation->set_message('valid_email', 'Địa chỉ Email không hợp lệ');
			$this->form_validation->set_message('required', 'Mời bạn nhập %s.');
			$this->form_validation->set_rules("userName","Tên đăng nhập","required|max_length[25]|callback_checkUser");
			$this->form_validation->set_rules("password","Mật khẩu","required|matches[repassword]");
			$this->form_validation->set_rules("fullname","Họ và tên","required");
			$this->form_validation->set_rules("phone","Số điện thoại","required");
			$this->form_validation->set_rules("email","Email","required|valid_email|callback_checkEmail");
            $configall = $this->config_model->getConfig();
            $meta = array(
                'title' => 'Đăng ký',
                'description' => $configall->site_describe,
                'keywords' => $configall->site_keyword,
            );
			if($this->form_validation->run()==FALSE)
			{
			    $getParentID0s = $this->category_model->getAllCateParent0();
				$this->_data['main_content'] = $this->load->view('register_view', array(
    			     'getParentID0s' => $getParentID0s,
    			     'meta' => $meta   	
				), true);
			     $this->load->view('layout_view', $this->_data);
			}
			else
			{
				$this->save();
			}
		}

		public function checkUser()
		{
			$data = array(
					"userName"  => $this->input->post("userName"),
			);
			$this->db->where("userName",$data['userName']);
			$query = $this->db->get("tbl_member");
			if ($query->num_rows() > 0)
			{
				$this->form_validation->set_message('checkUser','Tên đăng nhập đã tồn tại');
				return FALSE;
			}
			else
			{
				return TRUE;
			}
		}
        
		public function checkEmail()
		{
			$data = array(
					"email"  => $this->input->post("email"),
			);
			$this->db->where("email",$data['email']);
			$query = $this->db->get("tbl_member");
			if ($query->num_rows() > 0)
			{
				$this->form_validation->set_message('checkEmail','Email đã tồn tại');
				return FALSE;
			}
			else
			{
				return TRUE;
			}
		}
		function validate_phone_number($value) {
			$value = trim($value);
			$match = '/^\(?[0-9]{3}\)?[-. ]?[0-9]{3}[-. ]?[0-9]{4}$/';
			$replace = '/^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/';
			$return = '($1) $2-$3';
			if (preg_match($match, $value)) {
				return preg_replace($replace, $return, $value);
			} else {
				$this->form_validation->set_message('validate_phone_number', 'Số điện thoại không hợp lệ');
				return false;
			}
		}
		
		function save()
		{
			$data = array(
					"userName" => $this->input->post("userName"),
					"fullname"  => $this->input->post("fullname"),
					"userPass"  => md5($this->input->post("password")),
					"email"     => $this->input->post("email"),
					"phone"   => $this->input->post("phone"),
					"status"   => '2',
					"productID"   =>'0',
					
					'registry' =>   date('d-m-Y h:i:s')	
			);
			$this->member_model->insertUser($data);
			echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
						<script>
						alert('Bạn đã đăng ký thành công !');
						 location.assign('".base_url('dang-nhap')."');
					  </script>";
		
		}
	}
?>