<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//require_once(APPPATH. 'controllers/admin/ad_layout.php');

class Ad_login extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('users_model', 'users_model');
	}
	
	public function index()
	{
		$this->load->view('admincp/ad_login_view');
	}
	
	public function VerifyLogin()
	{
		$this->form_validation->set_rules('username', 'Tên đăng nhập', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'Mật khẩu', 'trim|required|xss_clean|callback_check_database');
		$this->form_validation->set_message('required', '%s Không được để trống !');
		if($this->form_validation->run() == FALSE){
			//Field validation failed.&nbsp; User redirected to login page
			$this->load->view('admincp/ad_login_view');
		} else {
			//Go to private area
			redirect('admincp/products','refresh');
		}
	}
	
	public function check_database()
	{
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		
		$result = $this->users_model->login($username, $password);	
		if(!$result){
			$this->form_validation->set_message('check_database', 'Tên đăng nhập hoặc mật khẩu không đúng');
			return false;
		}else {

			$sess_array = array();
			foreach($result as $row){
				
				if($row->accUser == 0 || $row->accUser == 1 ){
					$this->form_validation->set_message('check_database', 'Tài khoản của bạn không có quyền truy cập admin');
					return false;
				}else {
					$user_info = $this->users_model->getUserInfo($row->userID);
					// khoi tao session
					$this->session->set_userdata('logged_ad', array(
							'userID' => $user_info->userID,
							'userName' => $user_info->userName,
							'userEmail' => $user_info->userEmail,
							'accUser' => $user_info->accUser,
							'assets' => $user_info->assets,
					));
					return true;
				}					
			}
			
		} 
	}
	public function logout()
	{
		$this->session->unset_userdata('logged_ad');
		$this->session->sess_destroy();
		redirect('admin/dang-nhap', 'refresh');
	}
	
	
}

