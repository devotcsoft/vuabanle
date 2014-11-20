<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once 'application/controllers/admincp/ad_layout.php';

/**
 * @author chinguyen.phpdev@gmail.com
 * @author otcsoft.com - 2014
 */
class Member extends Ad_layout
{
	var $table = "tbl_member"; 
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('member_model');
		$this->load->model('base_model');
	}
	
	public function index()
	{
		$config['per_page'] = 20;
		$arraySearch = array();
		if($this->input->post()){
			$arraySearch['keysearch'] = $this->input->post('keysearch');
			$page = 0;
		}else{
			$arraySearch['keysearch']  = $this->input->get('keysearch');
		}
		$page = $this->uri->segment(3);
		$result = $this->member_model->getAllSearch($arraySearch, $page, $config['per_page']);
		$this->load->library('pagination');
		$config['base_url'] = base_url().'/admincp/member';
		$config['total_rows'] = $result['total_record'];
		if($arraySearch['keysearch'] != ''){
			$this->pagination->first_link = $config['base_url']."?keysearch=".$arraySearch['keysearch'];
			$this->pagination->suffix = '?keysearch='. $arraySearch['keysearch'];
		}
		$config['use_page_numbers'] = false;
		$config['uri_segment'] = 3;
		$config['num_links'] = 1;
		$this->pagination->initialize($config);
		$data["paging"] = $this->pagination->create_links();
		
		$this->_data['ad_main_content'] = $this->load->view('admincp/member/index', array(
				'content' => $result['member'],
				'pagination' => $data["paging"],
		), true);
		$this->load->view('admincp/ad_layout_view', $this->_data);
	}
	
	public function add()
	{
			$this->form_validation->set_message('matches', 'Mật khẩu không trùng nhau');
			$this->form_validation->set_message('valid_email', 'Địa chỉ Email không hợp lệ');
			$this->form_validation->set_message('required', 'Mời bạn nhập trường %s.');
			$this->form_validation->set_rules("userName","Tên đăng nhập","required|max_length[25]|callback_checkUser");
			$this->form_validation->set_rules("password","Mật khẩu","required");
			$this->form_validation->set_rules("fullname","Họ và tên","required");
			$this->form_validation->set_rules("phone","Số điện thoại","required");
			$this->form_validation->set_rules("email","Email","required|valid_email|callback_checkEmail");
			if($this->form_validation->run()==FALSE)
			{
					$this->_data['ad_main_content'] = $this->load->view('admincp/member/add', array(
					), true);
			$this->load->view('admincp/ad_layout_view', $this->_data);
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
	function save()
	{
		$data = array(
				"userName" => $this->input->post("userName"),
				"fullname"  => $this->input->post("fullname"),
				"userPass"  => md5($this->input->post("password")),
				"email"     => $this->input->post("email"),
				"address"   => $this->input->post("address"),
				"phone"   => $this->input->post("phone"),
				"status"   => '2',
				'registry' =>   date('d-m-Y h:i:s')
		);
		$this->member_model->insertUser($data);
		echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
						<script>
						alert('Bạn đã thêm thành viên thành công !');
						 location.assign('".base_url('admincp/member.html')."');
					  </script>";
	}
	
	
	public function edit()
	{
			$id = $this->uri->segment(4);
			$where='memberID';
			$table = "tbl_member";
			$data['info'] = $this->base_model->get_detail($table,$where,$id);
			$this->form_validation->set_message('matches', 'Mật khẩu không trùng nhau');
			$this->form_validation->set_message('valid_email', 'Địa chỉ Email không hợp lệ');
			$this->form_validation->set_message('required', 'Mời bạn nhập trường %s.');
			$this->form_validation->set_rules("userName","Tên đăng nhập","required|max_length[25]");
			$this->form_validation->set_rules("fullname","Họ và tên","required");
			$this->form_validation->set_rules("phone","Số điện thoại","required");
			$this->form_validation->set_rules("email","Email","required|valid_email|callback_check_edit");
			if($this->form_validation->run()==FALSE)
			{
				$this->_data['ad_main_content'] = $this->load->view('admincp/member/edit', array(
						'info' => $data['info'],
				), true);
				$this->load->view('admincp/ad_layout_view', $this->_data);
			}
			else
			{
				$this->updated();
			}
	}
	function check_edit(){
			$data = array(
					"email"  => $this->input->post("email")
			);
			$memberID= $this->uri->segment(4);
			$this->db->select("email");
			$this->db->where("memberID",$memberID);
			$query = $this->db->get("tbl_member")->result();
			foreach ($query as $query_user)
			{
				$email_=$query_user->email;
			}
			if($email_ == $data['email'])
			{
				$this->form_validation->set_message('check_edit','Cập nhập thành công');
				return TRUE;
			}
			else
			{
				$email  = $this->input->post("email");
				$this->db->select("email");
				$this->db->where("email",$email);
				$user5 = $this->db->get("tbl_member");
				if($user5->num_rows() > 0)
				{
					$this->form_validation->set_message('check_edit','Email đã tồn tại trong cơ sở dữ liệu');
					return FALSE;
				}
				else {
					$this->form_validation->set_message('check_edit','Cập nhập thành công');
					return TRUE;
				}
			}	
		}
	
	
	public function updated()
	{
		$memberID= $this->uri->segment(4);
		$data = array(
				"userName" => $this->input->post("userName"),
				"fullname"  => $this->input->post("fullname"),
				"email"     => $this->input->post("email"),
				"address"   => $this->input->post("address"),
				"phone"   => $this->input->post("phone"),
				"status"   => $this->input->post("status"),
		);
		$this->member_model->update($data,$memberID);
			echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
						<script>
						alert('Cập nhập thành công !');
						 location.assign('".base_url('admincp/member').'.html'."');
					  </script>";
	}
	
	
	function delete() 
	{
		$id_list_str = $this->input->post('id_list');
		$id_list_arr = explode(',', $id_list_str);
		foreach ($id_list_arr as $cat_id) {
			if ($cat_id > 0) {
				$result = $this->utility_model->delete('memberID' ,$cat_id ,$this->table);
			}
		}
		if($result){
			echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
						<script>
						alert('Bạn đã xóa thành công !');
						 location.assign('".base_url('admincp/member.html')."');
					  </script>";
		} else {
			echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
					<script>
					alert('Xóa không thành công !');
					 location.assign('".base_url('admincp/member.html')."');
				  </script>";
		}
	}	
	
}
