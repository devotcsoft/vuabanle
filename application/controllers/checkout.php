<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once 'application/controllers/layout.php';

/**
 * @author chinguyen.phpdev@gmail.com
 * @author Otcsoft.com - 2014
 */
class Checkout extends Layout {
    
    public function __construct()
    {
        parent::__construct();
        //$this->output->cache(5) ;
    }
    
    public function index()
    {
        $total = $this->cart->total();
        $total_record = $this->cart->total_items();
        $dataCart= $this->cart->contents();
        foreach($dataCart as $key=>$val){
            $image=$this->products_model->getImages($val['id']);
            if($image){
                $dataCart[$key]['image']=$image[0]['anhthume'];
            }
            else{
                $dataCart[$key]['image']='';
            }
        }
        
        $configall = $this->config_model->getConfig();
        $meta = array(
            'title' => 'Giỏ hàng',
            'description' => $configall->site_describe,
            'keywords' => $configall->site_keyword,
        );
        $this->_data['main_content'] = $this->load->view('checkout_view', array(
            'data' => $dataCart,
            'total' => $total,
            'total_record' => $total_record,
            'meta' => $meta,
        ), TRUE);
        $this->load->view('layout_view', $this->_data);   
    }


    public function step1()
    {
        $total = $this->cart->total();
        $total_record = $this->cart->total_items();
        $dataCart= $this->cart->contents();
        foreach($dataCart as $key=>$val){
            $image=$this->products_model->getImages($val['id']);
            if($image){
                $dataCart[$key]['image']=$image[0]['anhthume'];
            }
            else{
                $dataCart[$key]['image']='';
            }
        }
        $session_data = $this->session->userdata('logged_in');
        if(!$session_data)
        {
	        $this->form_validation->set_message('required', '%s không được để trống !');
	        $this->form_validation->set_message('valid_email', 'định dạng Email không đúng');
	        $this->form_validation->set_rules('email','E-mail','trim|required|valid_email');
	        $this->form_validation->set_rules('password','Mật khẩu','trim|required|xss_clean|callback_check_database');
	        if($this->form_validation->run()==FALSE)
	        {
	            $configall = $this->config_model->getConfig();
                $meta = array(
                    'title' => 'Bước 1 thanh toán',
                    'description' => $configall->site_describe,
                    'keywords' => $configall->site_keyword,
                );
    	        $this->load->view('checkout/step1', array(
    	            'data' => $dataCart,
    	            'total' => $total,
    	            'total_record' => $total_record,
    	            'meta' => $meta
    	        ));
	        }
	        else
	        {
	        	redirect('checkout/step2');
	        }
	        
        }
        else 
    	{
    		redirect('checkout/step2');
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
    
    
    
    public function step2()
    {
       		$total = $this->cart->total();
            $total_record = $this->cart->total_items();
            $dataCart= $this->cart->contents();
            foreach($dataCart as $key=>$val){
                $image=$this->products_model->getImages($val['id']);
                if($image){
                    $dataCart[$key]['image']=$image[0]['anhthume'];
                }
                else{
                    $dataCart[$key]['image']='';
                }
            }
            $data_member=$this->session->userdata('logged_in');
            $memberID=$data_member['memberID'];
            $data_ = $this->member_model->getUser($memberID);
           
            $cod = $this->price_model->getAllCOD0();
            $this->form_validation->set_message('valid_email', 'Địa chỉ Email không hợp lệ');
            $this->form_validation->set_message('required', 'Mời bạn nhập %s.');
            $this->form_validation->set_rules("fullname","Họ và tên","required");
            $this->form_validation->set_rules("email","Email","required|valid_email");
            $this->form_validation->set_rules("phone","Số điện thoại","required");
            $this->form_validation->set_rules("address","Địa chỉ","required");
            if($this->form_validation->run()==FALSE)
            {
                 $configall = $this->config_model->getConfig();
                 $meta = array(
                    'title' => 'Giỏ hàng bước 2',
                    'description' => $configall->site_describe,
                    'keywords' => $configall->site_keyword,
                 );  
                 /*
                 $this->load->view('v3template/checkout_view', array(
                    'data' => $dataCart,
                    'total' => $total,
                    'total_record' => $total_record,
                    'memberdetail'=>$data_,
                    'cod' => $cod,
                    //'huyen' => $huyen,
                    'id' => $this->input->post('country'),
                    'meta' => $meta
                ));
                */ 
                 
                 $getCateSearchs = $this->home_model->getCateSearch();
                 $getAllCategoryTree = $this->home_model->getAllCategoryTree();
                 $tuyenDung5 = $this->home_model->tuyenDung5();
                 $tintuc5 = $this->home_model->tintuc5();
                 $getabout7 = $this->home_model->getabout7();
                 $this->_data['main_content'] = $this->load->view('v3template/checkout_view', array(
                 		'data' => $dataCart,
                 		'total' => $total,
                 		'total_record' => $total_record,
                 		'memberdetail'=>$data_,
                 		'cod' => $cod,
                 		//'huyen' => $huyen,
                 		'id' => $this->input->post('country'),
                 		'meta' => $meta,
                 		'getCateSearchs' => $getCateSearchs,
                 		'menus' => $getAllCategoryTree,
                 		'tuyenDung5' => $tuyenDung5,
                 		'tintuc5' => $tintuc5,
                 		'getabout7' => $getabout7,
                 ), true);
                 $this->load->view('v3template/layout_view', $this->_data);
             }
            else 
            {
                $dataCart= $this->cart->contents();
                $dataInsert = array(
                    'cartCreated' => date('Y-m-d H:i:s'),
                    'cartName' => $this->input->post('fullname'),
                    'cartEmail' => $this->input->post('email'),
                    'cartPhoneNumber' => $this->input->post('phone'),
                    'cartAddress' => $this->input->post('address'),
                    'gender' => $this->input->post('gender'),
                    'status' => 0,
                );
                $CartID = $this->utility_model->insert('tbl_carts', $dataInsert);
                if($CartID){
                   foreach($dataCart as $idx => $val){
                       $InsertCart = array(
                            'cartID' => $CartID,
                            'productID' => $val['id'],
                            'detailNumber' => $val['qty'],
                            'cod' => $this->input->post('phivanchuyen'),
                        );
                        $detailid = $this->utility_model->insert('tbl_cartdetails', $InsertCart);
                   }
                }
	            {
	        		$this->step3();
	        	} 
            }  
    }


    public function step3()
    {
            
            $total = $this->cart->total();
            $total_record = $this->cart->total_items();
            $dataCart= $this->cart->contents();
            foreach($dataCart as $key=>$val){
                $image=$this->products_model->getImages($val['id']);
                if($image){
                    $dataCart[$key]['image']=$image[0]['anhthume'];
                }
                else{
                    $dataCart[$key]['image']='';
                }
            }
            $data_member=$this->session->userdata('logged_in');
            $memberID=$data_member['memberID'];
            $data_ = $this->member_model->getUser($memberID);
            $cod = $this->price_model->getAllCOD0();
            $configall = $this->config_model->getConfig();
             $meta = array(
                'title' => 'Giỏ hàng bước 2',
                'description' => $configall->site_describe,
                'keywords' => $configall->site_keyword,
             );  
             $getCateSearchs = $this->home_model->getCateSearch();
             $getAllCategoryTree = $this->home_model->getAllCategoryTree();
              
            $this->_data['main_content'] =  $this->load->view('v3template/next_checkout', array(
                'data' => $dataCart,
                'total' => $total,
                'total_record' => $total_record,
                'memberdetail'=>$data_,
                'cod' => $cod,
                'meta' => $meta,
            	'getCateSearchs' => $getCateSearchs,
            	'menus' => $getAllCategoryTree,
            ), true);
            $this->load->view('v3template/layout_view', $this->_data);
            
    }




    

    


  

    
    
}

