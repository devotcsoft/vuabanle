<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once 'application/controllers/admincp/ad_layout.php';

/**
 * @author chinguyen.phpdev@gmail.com
 * @author otcsoft.com - 2014
 */
class Padding extends Ad_layout
{
	var $table = "tbl_member"; 
	
	public function __construct()
	{
		parent::__construct();
		
		$this->load->library('pagination');
	}
	public function index()
	{
		$config['per_page']=20;
		$table = "tbl_padding";
		$config['base_url']=base_url('/admincp/padding');
		$config['total_rows']=$this->base_model->count_all($table);
		
		$config['uri_segment']=3;
		$offset=$this->uri->segment(3);
		$number=$config['per_page'];
		$this->pagination->initialize($config);
		$data['result']=$this->base_model->get_table($table,$number,$offset);
			
		$this->_data['ad_main_content'] = $this->load->view('admincp/padding/index', array(
				'user' => $data['result'],
		), true);
		$this->load->view('admincp/ad_layout_view', $this->_data);
	}
	
	public function add()
	{
		$this->form_validation->set_rules('type', 'type', '');
		if ($this->form_validation->run() == FALSE)
		{
			$this->_data['ad_main_content'] = $this->load->view('admincp/padding/add', array(
			), true);
			$this->load->view('admincp/ad_layout_view', $this->_data);
		}
		else
		{
			$this->save();
		}
	}

	
	function save()
	{
		$data = array(
				"name"  => $this->input->post("name"),
				"type"  => $this->input->post("type"),
				"url"     => $this->input->post("url"),
				'image' =>  str_replace(base_url(),'', $this->input->post('image')),
				"productName"     => $this->input->post("productName"),
				"productPrice"     => $this->input->post("productPrice"),
				"productTime"     => $this->input->post("productTime"),
				"stt"     => $this->input->post("stt"),
			
		);
		$table='tbl_padding';
		$this->base_model->insert($table,$data);
		echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
						<script>
						alert('Bạn đã thêm mới thành công !');
						 location.assign('".base_url('admincp/padding')."');
					  </script>";
	}
	public function edit()
	{
	
		$id = $this->uri->segment(4);
		
		
		
		$where='id';
		$table = "tbl_padding";
		$data['info'] = $this->base_model->get_detail($table,$where,$id);
	
		$this->form_validation->set_rules('type', 'type', '');
		if ($this->form_validation->run() == FALSE)
		{

			$this->_data['ad_main_content'] = $this->load->view('admincp/padding/edit', array(
					'info' => $data['info'],
			), true);
			$this->load->view('admincp/ad_layout_view', $this->_data);
		}
		else
		{
			$this->update();
		}
	}

	function update()
	{
		$data = array(
				"name"  => $this->input->post("name"),
				"type"  => $this->input->post("type"),
				"url"     => $this->input->post("url"),
				'image' =>  str_replace(base_url(),'', $this->input->post('image')),
				"productName"     => $this->input->post("productName"),
				"productPrice"     => $this->input->post("productPrice"),
				"productTime"     => $this->input->post("productTime"),
				"stt"     => $this->input->post("stt"),
			
		);
		$id= $this->uri->segment(4);
		$table='tbl_padding';
		$where='id';
		$this->base_model->update($table,$data,$where,$id);
		echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
						<script>
						alert('Bạn đã cập nhập thành công !');
						 location.assign('".base_url('admincp/padding')."');
					  </script>";
	}
	
	public function delete()
	{
		$where = 'id';
		$table = 'tbl_padding';
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
			window.open('{$baseurl}admincp/padding','_self');
			</script>";
		}else {
			log_message('error', 'Some variable did not contain a value.');
			}
		}
	
}