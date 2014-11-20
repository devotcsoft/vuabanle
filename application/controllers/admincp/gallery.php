<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once 'application/controllers/admincp/ad_layout.php';

/**
 * @author chinguyen.phpdev@gmail.com
 * @author otcsoft.com - 2014
 */
class Gallery extends Ad_layout
{
	var $table = "tbl_gallery"; 
	
	public function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		if($this->input->post()){
			$this->updated();
		}
		$data = $this->utility_model->whereOneField($this->table, 'status', 1);
		//var_dump($data);
		//die();
		$this->_data['ad_main_content'] = $this->load->view('admincp/gallery/index', array(
				'productDetail' => $data
		), true);
		$this->load->view('admincp/ad_layout_view', $this->_data);
	}
	
	public function updated()
	{
		$img = $this->input->post('image_url');
        $link = $this->input->post('imagelink');
        $link = $this->input->post('imagelink');
        
		if($this->input->post('image_url') != ''){
			$image = array();
			$i=0;
			foreach ($img as $key => $value) {
				$image[$i]['image_url'] = str_replace(base_url(), '', $img[$key]);
                $image[$i]['imagelink'] = @$link[$key];
				$i=$i+1;
			}
		}
        //echo "<pre>";
        //var_dump($image);die();
		$galleryImage = json_encode($image);
		$data = array(
			'galleryImage' => $galleryImage
		);
		$updated = $this->utility_model->updated('galleryID', 1, $this->table, $data);
		if($updated){
			echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
						<script>
						alert('Bạn đã cập nhật thành công !');
						 location.assign('".base_url('admincp/gallery.html')."');
					  </script>";
		}else {
			echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
						<script>
						alert('Cập nhật; thất bại !');
						 location.assign('".base_url('admincp/gallery.html')."');
					  </script>";
		}
	} 
	

	
	
}
