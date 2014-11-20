<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once 'application/controllers/admincp/ad_layout.php';

/**
 * @author chinguyen.phpdev@gmail.com
 * @author otcsoft.com - 2014
 */
class Athome extends Ad_layout
{
	var $table = "tbl_home_main"; 
	
	public function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		$getAll = $this->athome_model->getAll();
		$this->_data['ad_main_content'] = $this->load->view('admincp/athome/index', array(
				'getAlls' => $getAll,
		), true);
		$this->load->view('admincp/ad_layout_view', $this->_data);
	}
	
	public function add()
	{
		if($this->input->post() != ""){
			$this->save();
		}
		$getMenulv2 = $this->category_model->getMenulv2();
		$this->_data['ad_main_content'] = $this->load->view('admincp/athome/add', array(
			'getMenulv2' => $getMenulv2,
			'error' => @$error,
		), true);
		$this->load->view('admincp/ad_layout_view', $this->_data);
	}
	
	
	public function save()
	{
		$name = $this->input->post('name');
		
		// imgurl
		$imgurl = array();
		$imgurl[]['imgurl'] = $this->input->post('imgurl');
		$imgurl[]['imgurl1'] = $this->input->post('imgurl1');
		$imgurl[]['imgurl2'] = $this->input->post('imgurl2');
 		$imgurl = json_encode($imgurl);
 		
 		// imgurlbrand
 		$imgurlbrand = $this->input->post('imgurlbrand');
 		$imgurlbrand1 = $this->input->post('imgurlbrand1');
 		if($this->input->post('imgurlbrand') != ''){
 			$arrimgurlbrand = array();
 			$a=0;
 			foreach ($imgurlbrand as $key => $value) {
 				$arrimgurlbrand[$a]['imgurlbrand'] = @$imgurlbrand[$key];
 				$arrimgurlbrand[$a]['imgurlbrand1'] = str_replace(base_url(), '', $imgurlbrand1[$key]);
 				$a=$a+1;
 			}
 		}
 		$arrimgurlbrand = json_encode($arrimgurlbrand);
 		
 		//namelink
 		$namelink = $this->input->post('namelink');
 		$namelink1 = $this->input->post('namelink1');
 		if($this->input->post('namelink') != ''){
 			$arrnamelink = array();
 			$b=0;
 			foreach ($namelink as $key => $value) {
 				$arrnamelink[$b]['namelink'] = @$namelink[$key];
 				$arrnamelink[$b]['namelink1'] = @$namelink1[$key];
 				$b=$b+1;
 			}
 		}
 		$arrnamelink = json_encode($arrnamelink);
 		
 		// adslink
 		$adslink = array();
 		$adslink[]['adslink'] = $this->input->post('adslink');
 		$adslink[]['adslink1'] = $this->input->post('adslink1');
 		$adslink = json_encode($adslink);
 		
 		//titlenameimglink
 		$titlenameimglink = $this->input->post('titlenameimglink');
 		$titlenameimglink1 = $this->input->post('titlenameimglink1');
 		$titlenameimglink2 = $this->input->post('titlenameimglink2');
 		$titlenameimglink3 = $this->input->post('titlenameimglink3');
 		if($this->input->post('titlenameimglink') != ''){
 			$arrtitlenameimglink = array();
 			$c = 0;
 			foreach ($titlenameimglink as $key => $value) {
 				$arrtitlenameimglink[$c]['titlenameimglink'] = @$titlenameimglink[$key];
 				$arrtitlenameimglink[$c]['titlenameimglink1'] = @$titlenameimglink1[$key];
 				$arrtitlenameimglink[$c]['titlenameimglink2'] = @$titlenameimglink2[$key];
 				$arrtitlenameimglink[$c]['titlenameimglink3'] = str_replace(base_url(), '', $titlenameimglink3[$key]);
 				$c = $c+1;
 			}
 		}
 		$arrtitlenameimglink = json_encode($arrtitlenameimglink);
 		
		$data = array(
			'name' => $name,
			'imgurl' => $imgurl,
			'imgurlbrand' => $arrimgurlbrand,
			'namelink' => $arrnamelink,
			'adslink' => $adslink,
			'titlenameimglink' => $arrtitlenameimglink,
			'status' => $this->input->post('status'),
			'created' => date('Y-m-d H:i:s'),
		);
	
		if($this->input->post('updated') != ""){
			$insert = $this->utility_model->updated('id' ,$this->input->post('updated'),$this->table, $data);
		}else{
			$insert = $this->utility_model->insert($this->table, $data);
		}
		
		
		if($insert){
			echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
						<script>
						alert('Bạn đã thêm mới thành công !');
						 location.assign('".base_url('admincp/athome.html')."');
					  </script>";
		}else {
			echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
						<script>
						alert('Thêm mới thất bại !');
						 location.assign('".base_url('admincp/athome.html')."');
					  </script>";
		}
	}
	
	
	public function edit()
	{
		$param = $this->uri->ruri_to_assoc();
		$athome = $this->utility_model->whereOneField($this->table, 'id', $param['cid']);
		if ($this->input->post () != "") {
			$this->updated ();
		}
		$getMenulv2 = $this->category_model->getMenulv2 ();
		$this->_data ['ad_main_content'] = $this->load->view ( 'admincp/athome/edit', array (
				'athome' => $athome,
		), true );
		$this->load->view ( 'admincp/ad_layout_view', $this->_data );
	}
	
	
	public function updated()
	{
		// tu khoa maketing
		$keymaketing = $this->input->post('keymaketing');
		$urlmaketing = $this->input->post('urlmaketing');
		if($this->input->post('keymaketing') != ''){
			$keymaket = array();
			$i=0;
			foreach ($keymaketing as $key => $value) {
				$keymaket[$i]['keymaketing'] = str_replace(base_url(), '', $keymaketing[$key]);
				$keymaket[$i]['urlmaketing'] = @$urlmaketing[$key];
				$i=$i+1;
			}
		}
		$keymaket = json_encode($keymaket);
		
		// san pham 
		$catNameProduct = $this->input->post('catNameProduct');
		$catUrlProduct = $this->input->post('catUrlProduct');
		$catProductImg = $this->input->post('catProductImg');
		$PriceProduct = $this->input->post('PriceProduct');
		if($this->input->post('catNameProduct') != ''){
			$productcate = array();
			$i=0;
			foreach ($catNameProduct as $key => $value) {
				$productcate[$i]['catUrlProduct'] = @$catUrlProduct[$key];
				$productcate[$i]['catNameProduct'] = @$catNameProduct[$key];
				$productcate[$i]['catProductImg'] = str_replace(base_url(), '', $catProductImg[$key]);
				$productcate[$i]['PriceProduct'] = @$PriceProduct[$key];
				$i=$i+1;
			}
		}
		$productcate = json_encode($productcate);
		
		// Quang cao
		$imgAd = $this->input->post('imgAds');
		$linkAds = $this->input->post('linkAds');
		
		
		if($this->input->post('imgAds') != ''){
			$imgAds = array();
			$i=0;
			foreach ($catNameProduct as $key => $value) {
				if($i == 0){
					$imgAds[$i]['imgAd'] = @str_replace(base_url(), '', $imgAd[$key]);
					$imgAds[$i]['linkAds'] = @$linkAds[$key];
				}
				$i=$i+1;
			}
		}
		$imgAds = json_encode($imgAds);
		
		
		$data = array(
				'parentID' => $this->input->post('parentID'),
				'catName' => $this->input->post('catName'),
				'catDes' => '',
				'status' => $this->input->post('status'),
                'athome' => $this->input->post('athome'),
				'stt' => $this->input->post('stt'),
				'metaTitle' => $this->input->post('metaTitle'),
				'metaDes' => $this->input->post('metaDes'),
				'metaKey'=> $this->input->post('metaKey'),
				'catImage' =>  str_replace(base_url(),'', $this->input->post('catImage')),
				'icon' =>  str_replace(base_url(),'', $this->input->post('icon')),
				'keymaket' =>  $keymaket,
				'productcate' => $productcate,
				'imgAds' => $imgAds,
				'posup' =>  str_replace(base_url(),'', $this->input->post('posup')),
				'anhngoai'=>  str_replace(base_url(),'', $this->input->post('anhngoai')),
				'keypage' => $this->input->post('keypage'),
				'modname' => 'product',
				'tbname' => 'categories',
				'imageBanner1'=>  str_replace(base_url(),'', $this->input->post('imageBanner1')),
				'urlBanner1'=> $this->input->post('urlBanner1'),
				'imageBanner2'=>  str_replace(base_url(),'', $this->input->post('imageBanner2')),
				'urlBanner2'=> $this->input->post('urlBanner2'),
				'content'=> $this->input->post('content'),
		);
		
		$updated = $this->utility_model->updated('catID' ,$this->input->post('catID'),$this->table, $data);
		
		//var_dump($updated);
		//die();
		
		if($updated){
			echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
						<script>
						alert('Bạn đã cập nhật thành công !');
						 location.assign('".base_url('admincp/category.html')."');
					  </script>";
		}else {
			echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
						<script>
						alert('Cập nhật; thất bại !');
						 location.assign('".base_url('admincp/category.html')."');
					  </script>";
		}
	}
	
	
	function delete() 
	{
		$id_list_str = $this->input->post('id_list');
		$id_list_arr = explode(',', $id_list_str);
		foreach ($id_list_arr as $cat_id) {
			if ($cat_id > 0) {
				$result = $this->utility_model->delete('catID' ,$cat_id ,$this->table);
			}
		}
		if($result){
			echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
						<script>
						alert('Bạn đã xóa thành công !');
						 location.assign('".base_url('admincp/category.html')."');
					  </script>";
		} else {
			echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
					<script>
					alert('Xóa không thành công !');
					 location.assign('".base_url('admincp/category.html')."');
				  </script>";
		}
	}
	
	
}
