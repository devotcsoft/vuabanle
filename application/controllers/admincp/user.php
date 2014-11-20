<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once 'application/controllers/admincp/ad_layout.php';

/**
 * @author chinguyen.phpdev@gmail.com
 * @author otcsoft.com - 2014
 */
class User extends Ad_layout
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('base_model');
		$this->load->library('pagination');
	}
	
	public function index()
	{
			$table = "tbl_users";
			$config['base_url']=base_url('/admincp/user');
			$config['total_rows']=$this->base_model->count_all($table);
			$config['per_page']=20;
			$config['uri_segment']=3;
			$offset=$this->uri->segment(3);
			$number=$config['per_page'];
			$this->pagination->initialize($config);
			$data['result']=$this->base_model->get_table($table,$number,$offset);
			
			$this->_data['ad_main_content'] = $this->load->view('admincp/user/index', array(
					'user' => $data['result'],
			), true);
			$this->load->view('admincp/ad_layout_view', $this->_data);
	}
	
	public function add()
	{
			$this->form_validation->set_message('required', '%s không được để trống');
			$this->form_validation->set_message('valid_email', 'Định dạng Email không đúng');
			$this->form_validation->set_rules('user_name', 'Tài khoản', 'required|callback_check_user');
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
			if ($this->form_validation->run() == FALSE)
			{
					$this->_data['ad_main_content'] = $this->load->view('admincp/user/add', array(
					), true);
			$this->load->view('admincp/ad_layout_view', $this->_data);
			}
			else
			{
				$this->save();
			}
	}
	public function check_user()
	{
		$data = array(
				"userName"  => $this->input->post("user_name"),
		);
		$this->db->where("userName",$data['userName']);
		$query = $this->db->get("tbl_users");
		if ($query->num_rows() > 0)
		{
			$this->form_validation->set_message('check_user','Tài khoản đã tồn tại');
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
					"userName"  => $this->input->post("user_name"),
					"userPass"  => md5($this->input->post("password")),
					"userEmail"     => $this->input->post("email"),
					"userAddress"   => $this->input->post("address"),
					"userMobile"     => $this->input->post("phone"),
					"userJob"     => $this->input->post("userJob"),
					"accUser"     => $this->input->post("accUser"),
					'roleID' => '1',
					'userAccess' => '0',
					'status' => '1',
			);
			$table='tbl_users';
			$this->base_model->insert($table,$data);
			echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
						<script>
						alert('Bạn đã thêm mới thành công !');
						 location.assign('".base_url('admincp/user/add')."');
					  </script>";
		}
		public function edit()
		{
			$id = $this->uri->segment(4);
			$where='userID';
			$table = "tbl_users";
			$data['info'] = $this->base_model->get_detail($table,$where,$id);
			$this->form_validation->set_message('required', '%s không được để trống');
			$this->form_validation->set_message('valid_email', 'Định dạng Email không đúng');
			$this->form_validation->set_rules('user_name', 'Tài khoản', 'required|callback_check_edit');
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
			
			$getCate0 = $this->category_model->getCate0();
			
			
			if ($this->form_validation->run() == FALSE)
			{
				$this->_data['ad_main_content'] = $this->load->view('admincp/user/edit', array(
						'info' => $data['info'],
						'getCate0s' => $getCate0,
				), true);
				$this->load->view('admincp/ad_layout_view', $this->_data);
			}
			else
			{
				$this->update();
			}
		}
		
		
		function check_edit(){
			
			$data = array(
					"user_name"  => $this->input->post("user_name")
			);
			$user_id= $this->uri->segment(4);
			$this->db->select("userName");
			$this->db->where("userID",$user_id);
			$query = $this->db->get("tbl_users")->result();
			foreach ($query as $query_user)
			{
				$username=$query_user->userName;
			}
			if($username == $data['user_name'])
			{
				$this->form_validation->set_message('check_edit','Cập nhập thành công');
				return TRUE;
			}
			else
			{
				$user_name  = $this->input->post("user_name");
				$this->db->select("userName");
				$this->db->where("userName",$user_name);
				$user5 = $this->db->get("tbl_users");
				if($user5->num_rows() > 0)
				{
					$this->form_validation->set_message('check_edit','Tài khoản đã tồn tại trong cơ sở dữ liệu');
					return FALSE;
				}
				else {
					$this->form_validation->set_message('check_edit','Cập nhập thành công');
					return TRUE;
				}
			}	
		}
		function update()
		{
			$assets = '';
			foreach ($_POST['assets'] as $asseets)
			{
				$assets .= $asseets.',';
			}
			
			//$assets = 
			$data = array(
					"userName"  => $this->input->post("user_name"),
					"userPass"  => md5($this->input->post("password")),
					"userEmail"     => $this->input->post("email"),
					"userAddress"   => $this->input->post("address"),
					"userMobile"     => $this->input->post("phone"),
					"userJob"     => $this->input->post("userJob"),
					"accUser"     => $this->input->post("accUser"),
					'roleID' => '1',
					'userAccess' => '0',
					'status' => '1',
					'assets' => $assets
			);
			
			$id= $this->uri->segment(4);
			$table='tbl_users';
			$where='userID';
			$this->base_model->update($table,$data,$where,$id);
			echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
						<script>
						alert('Bạn đã cập nhập thành công !');
						 location.assign('".base_url('admincp/user')."');
					  </script>";
		}
	
		public function delete()
		{
			$where = 'userID';
			$table = 'tbl_users';
			$baseurl = base_url();
			$id_list_str = $this->input->post('id_list');
			$id_dels = explode(",",$id_list_str);
			foreach($id_dels as $id){
				$result = $this->base_model->delete($table, $where , $id);
			}
			if($result){
				echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
				<script>
				alert('Bạn đã xóa thành công');
				window.open('{$baseurl}admincp/user','_self');
				</script>";
			}else {
				log_message('error', 'Some variable did not contain a value.');
			}
		}
}
?>