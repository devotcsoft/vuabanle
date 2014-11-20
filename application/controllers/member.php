<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once 'application/controllers/layout.php';
	class Member extends Layout
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('member_model');
			$session_data = $this->session->userdata('logged_in');
			if(!$session_data)
			{
				redirect(base_url().'dang-nhap');
			}
			
		}
		
		function index()
		{
			$data_member=$this->session->userdata('logged_in');
			$memberID=$data_member['memberID'];
			$member = $this->member_model->getUser($memberID);
			
            $configall = $this->config_model->getConfig();
            $meta = array(
                'title' => 'Quản lý tài khoản',
                'description' => $configall->site_describe,
                'keywords' => $configall->site_keyword,
            );
			$this->_data['main_content'] = $this->load->view('home/detail_view', array(
                'meta' => $meta,
				'memberdetail'=>$member
			), true);
			$this->load->view('layout_view', $this->_data);
            
		}
		public function edit()
		{
		    $configall = $this->config_model->getConfig();
            $meta = array(
                'title' => 'Quản lý tài khoản',
                'description' => $configall->site_describe,
                'keywords' => $configall->site_keyword,
            );
            $listCategorys = $this->category_model->getAllCateParent0();
			$data_member=$this->session->userdata('logged_in');
			$memberID=$data_member['memberID'];
			$data_ = $this->member_model->updateUser($memberID);
			$this->form_validation->set_message('required', 'Bạn chưa nhập trường %s');
			$this->form_validation->set_rules('fullname', 'Họ tên', 'required');
			$this->form_validation->set_rules("phone","Số điện thoại","required");
			if ($this->form_validation->run() == FALSE)
			{
				$this->_data['main_content'] = $this->load->view('home/edit_view', array(
				        'listCategorys' => $listCategorys,
						'meta' => $meta,
						'memberdetail'=>$data_
				), true);
				$this->load->view('layout_view', $this->_data);
			}
			else
			{
				$this->update();
			}
		}

		function update()
		{			
			//echo $this->input->post("id_list");die();
			$data_member=$this->session->userdata('logged_in');
			$memberID=$data_member['memberID'];
			$day = $_POST['day'];
			$month = $_POST['month'];
			$year = $_POST['year'];
			$ngaysinh = "$day-$month-$year 00-00-00";
			$data = array(
					"fullname" => $this->input->post("fullname"),
					"phone"  => $this->input->post("phone"),
					"salutation" => $this->input->post("salutation"),
					"gender" => $this->input->post("gender"),
					"userDate" => $ngaysinh,
					"annual_income" => $this->input->post("annual_income"),
					
					"interest" => $this->input->post("id_list"),
				
			);
			$updated=$this->member_model->update($data,$memberID);
		
				
				if($updated){
					echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
								<script>
								alert('Bạn đã cập nhật thành công !');
								 location.assign('".base_url('sua-thong-tin-ca-nhan.html')."');
							  </script>";
				}else {
					echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
								<script>
								alert('Cập nhật; thất bại !');
								 location.assign('".base_url('sua-thong-tin-ca-nhan.html')."');
							  </script>";
				}
		}
		
		function change_password()
		{
		    $configall = $this->config_model->getConfig();
            $meta = array(
                'title' => 'Quản lý tài khoản',
                'description' => $configall->site_describe,
                'keywords' => $configall->site_keyword,
            );  	
			$this->form_validation->set_rules("password","Mật khẩu","required|matches[repassword]");
			$this->form_validation->set_rules("pass-old","Mật khẩu cũ", "required|callback_checkPass");
			$this->form_validation->set_message('matches', 'Mật khẩu mới không trùng nhau');
			$this->form_validation->set_message('required', 'Mời bạn nhập trường %s.');
			if($this->form_validation->run()==FALSE)
			{
				$this->_data['main_content'] = $this->load->view('home/change_password_view', array(
                    'meta' => $meta
				), true);
				$this->load->view('layout_view', $this->_data);
			}
			else
			{
				$this->update_pass();
			}
		}


		public function checkPass()
		{
			$data = array(
				"pass-old"  => md5($this->input->post("pass-old"))
			);
			$this->db->where("userPass",$data['pass-old']);
			$query = $this->db->get("tbl_member");
			if ($query->num_rows() == 0){
				$this->form_validation->set_message('checkPass','Mật khẩu cũ không đúng');
				return FALSE;
			}else{
				return TRUE;
			}
		}
        
		function update_pass()
		{
			$data_member=$this->session->userdata('logged_in');
			$memberID=$data_member['memberID'];
			$data = array(
			     "userPass" => md5($this->input->post("password"))
			);
			$this->member_model->update($data,$memberID);
			redirect(base_url().'quan-ly-tai-khoan'.'.html');
		}
		function change_email()
		{
			$data_member=$this->session->userdata('logged_in');
			$memberID=$data_member['memberID'];
			$member = $this->member_model->getUser($memberID);
            
            $configall = $this->config_model->getConfig();
            $meta = array(
                'title' => 'Quản lý tài khoản',
                'description' => $configall->site_describe,
                'keywords' => $configall->site_keyword,
            );  
			$this->form_validation->set_message('valid_email', 'Địa chỉ Email không hợp lệ');
			$this->form_validation->set_message('required', 'Mời bạn nhập trường %s.');
			$this->form_validation->set_rules("email","Email","required|valid_email|callback_check_email");;
			if($this->form_validation->run()==FALSE){
				$this->_data['main_content'] = $this->load->view('home/change_email_view', array(
						'meta' => $meta,
						'memberdetail'=>$member
				), true);
				$this->load->view('layout_view', $this->_data);
			}else{
				$this->update_email();
			}
				
		}

    	function check_email()
    	{
			$data_member=$this->session->userdata('logged_in');
			$memberID=$data_member['memberID'];
			$data_email = $this->member_model->getEmail($memberID);
			$email_post  = $this->input->post("email");
			
			if($data_email->email == $email_post)
			{
				$this->form_validation->set_message('check_email','Cập nhập thành công');
				return TRUE;
			}else{
				$email_post  = $this->input->post("email");
				$this->db->select("email");
				$this->db->where("email",$email_post);
				$member_ = $this->db->get("tbl_member");
				if($member_->num_rows() > 0){
					$this->form_validation->set_message('check_email','Email đã tồn tại trong cơ sở dữ liệu');
					return FALSE;
				}else {	
					$this->form_validation->set_message('check_email','Cập nhập thành công');
					return TRUE;
				}
		   }
		}

		function update_email()
		{
			$data_member=$this->session->userdata('logged_in');
			$memberID=$data_member['memberID'];
			$data = array(
					"email" => $this->input->post("email")
			);
			$this->member_model->update($data,$memberID);
			redirect(base_url().'quan-ly-tai-khoan'.'.html');
		}
        
		function manager_address()
		{
			$data_member=$this->session->userdata('logged_in');
			$memberID=$data_member['memberID'];
			$member = $this->member_model->getUser($memberID);
            $configall = $this->config_model->getConfig();
            $meta = array(
                'title' => 'Quản lý tài khoản',
                'description' => $configall->site_describe,
                'keywords' => $configall->site_keyword,
            );  
			if($this->form_validation->run()==FALSE)
			{
				$this->_data['main_content'] = $this->load->view('home/manager_address_view', array(
						'meta' => $meta,
						'memberdetail'=>$member
				), true);
				$this->load->view('layout_view', $this->_data);
			}
		}
        
		function add_address()
		{
		    $configall = $this->config_model->getConfig();
		    $meta = array(
                'title' => 'Quản lý tài khoản',
                'description' => $configall->site_describe,
                'keywords' => $configall->site_keyword,
            );  
			$data_member=$this->session->userdata('logged_in');
			$memberID=$data_member['memberID'];
			$data_ = $this->member_model->updateUser($memberID);
			$this->form_validation->set_message('required', 'Bạn chưa nhập trường %s');
			$this->form_validation->set_rules('fullname', 'Họ tên giao dịch', 'required');
			$this->form_validation->set_rules("phone","Số điện ","required");
			if ($this->form_validation->run() == FALSE)
			{
				$this->_data['main_content'] = $this->load->view('home/add_address_view', array(
						'meta' => $meta,
						'memberdetail'=>$data_
				), true);
				$this->load->view('layout_view', $this->_data);
			}
			else
			{
				$this->update_address();
			}
		}
        
        
		function update_address()
		{
			$data_member=$this->session->userdata('logged_in');
			$memberID=$data_member['memberID'];
			$data = array(
					"fullname" => $this->input->post("fullname"),
					"phone"  => $this->input->post("phone"),
					"address"  => $this->input->post("address"),
				
			);
			$this->member_model->update($data,$memberID);
			echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
						<script>
						alert('Cập nhập địa chỉ thành công !');
						 location.assign('".base_url('quan-ly-dia-chi').'.html'."');
					  </script>";
		}
        
        
		function cart()
		{
		    $configall = $this->config_model->getConfig();
            $meta = array(
                'title' => 'Quản lý tài khoản',
                'description' => $configall->site_describe,
                'keywords' => $configall->site_keyword,
            );  
			$table = "tbl_carts";
			$data_member=$this->session->userdata('logged_in');
			$memberID=$data_member['memberID'];
			$data_ = $this->member_model->getUser($memberID);
			$param['cid']=$data_->productID;
			if($param['cid']==0)
			{
				if ($this->form_validation->run() == FALSE)
				{
					$this->_data['main_content'] = $this->load->view('home/cart_view', array(
						    'meta' => $meta,
							'memberdetail'=>$data_,
					), true);
					$this->load->view('layout_view', $this->_data);
				}
			}else{
					$cateDetail = $this->utility_model->whereOneField($table, 'cartID', $param['cid']);
					if ($this->input->post () != "") {
						$this->updated ();
					}
					$productAll = $this->member_model->getProductDeail($cateDetail->cartID);
					if ($this->form_validation->run() == FALSE)
					{
						$this->_data['main_content'] = $this->load->view('home/cart_view', array(
								'memberdetail'=>$data_,
								'cateDetail' => $cateDetail,
								'productAll'=> $productAll['CartDetail'],
								'meta' => $meta,
						), true);
						$this->load->view('layout_view', $this->_data);
				}
			}
		}

		function payment_methods()
		{
			$configall = $this->config_model->getConfig();
            $meta = array(
                'title' => 'Quản lý tài khoản',
                'description' => $configall->site_describe,
                'keywords' => $configall->site_keyword,
            );  
				
			if ($this->form_validation->run() == FALSE)
			{
				$this->_data['main_content'] = $this->load->view('home/payment_methods_view', array(
						'meta' => $meta
				), true);
				$this->load->view('layout_view', $this->_data);
			}
			
		}
        
		function voucher()
		{
			$configall = $this->config_model->getConfig();
            $meta = array(
                'title' => 'Quản lý tài khoản',
                'description' => $configall->site_describe,
                'keywords' => $configall->site_keyword,
            );  
			if ($this->form_validation->run() == FALSE)
			{
				$this->_data['main_content'] = $this->load->view('home/voucher_view', array(
						'meta' => $meta
				), true);
				$this->load->view('layout_view', $this->_data);
			}
				
		}
		
	}