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
        $listCategorys = $this->utility_model->getAllASC('tbl_categories', 'status', '1', 'catName');
        $listCategorysOrderstt = $this->utility_model->getAllASC('tbl_categories', 'status', '1', 'stt');
        $this->_data['main_content'] = $this->load->view('checkout_view', array(
            'listCategorysOrderstt' => $listCategorysOrderstt,
            'listCategorys' => $listCategorys,
            'data' => $dataCart,
            'total' => $total,
            'total_record' => $total_record,
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
	        $this->load->view('checkout/step1', array(
	            'data' => $dataCart,
	            'total' => $total,
	            'total_record' => $total_record,
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
        $this->form_validation->set_message('valid_email', 'Địa chỉ Email không hợp lệ');
        $this->form_validation->set_message('required', 'Mời bạn nhập trường %s.');
        $this->form_validation->set_rules("fullname","Họ và tên","required");
        $this->form_validation->set_rules("email","Email","required|valid_email");
        $this->form_validation->set_rules("phone","Số điện thoại","required");
        $this->form_validation->set_rules("address","Địa chỉ","required");
        if($this->form_validation->run()==FALSE)
        {
	        $this->load->view('checkout/step2', array(
	            'data' => $dataCart,
	            'total' => $total,
	            'total_record' => $total_record,
	        	'memberdetail'=>$data_,
       			 ));
        }
        else 
        {
        	echo "duong";
        }
    }


  

    
    
}

