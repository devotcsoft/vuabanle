<?php 
class Cart extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();

    }

    public function index()
    {
        $this->load->view('cart_view');
        //var_dump($this->cart->total_items());
    }

    public function add(){
        $carts = $this->input->post();
        //$carts['options'] = array('Color' => $this->input->post('color'));
        if($carts['id'] > 0 && $carts['qty']) {
            $check = true;
            $dataCart = $this->cart->contents();
            if(count($dataCart) > 0) {
                foreach($dataCart as $row) {
                    if($row['id'] == $carts['id']) {
                        $check = false;
                        $qty = $carts['qty'] + $row['qty'];
                        $carts=$this->cart->update(array('rowid'=>$row['rowid'], 'qty'=>$qty));
                        break;
                    }
                }
            }
            
            if($check) {
                $this->cart->insert($carts);
            } else {
                $this->cart->update($carts);
            }
            
        }
        //var_dump($this->input->post());
        //die();
        
		        
        $data['data'] = array();
        $i = 0;
        foreach ($this->cart->contents() as $items) {
        	$img = $this->getImg($items['id']);
        	$data['data'][$i]['id']= $items['id'];
			$data['data'][$i]['rowid']= $items['rowid'];
        	$data['data'][$i]['Picture']= base_url($img->productImage);
        	$data['data'][$i]['gia']= $img->gia;
        	$data['data'][$i]['seo_name']= $img->seo_name;
        	$data['data'][$i]['giagiam']= @$img->giagiam;
        	
        	if($img->tinhtranghang == 1 )
        	{
        		$data['data'][$i]['hang']= "Còn hàng";
        	}elseif($img->tinhtranghang == 2){ 
        		$data['data'][$i]['hang']= "Hết hàng";
        	}else { 
        		$data['data'][$i]['hang']= "Sắp có hàng";
        	}
        	
        	$data['data'][$i]['Price']= $items['price'];
        	$data['data'][$i]['Name']=  $items['name'];
        	$data['data'][$i]['qty']= $items['qty'];
        	$data['data'][$i]['subtotal']= $items['subtotal'];
        	$i++;
        }
		$data['total'] = $this->cart->total();
        $data['total_record'] = $this->cart->total_items();
		//echo json_encode(array('status'=>'OK', 'total'=>$this->cart->total(),'total_record'=>$this->cart->total_items()));
		
        /*
        echo "<pre>";
        var_dump($data);
        $stuff = array(
        		'data' => array(
	        				array(
	        						"Id" => 283,
	        						"Picture" => '/Content/upload/small/do-choi-nau-bep-kitchen-set-195.jpeg',
	        						"Name" => 'Dữ liệu mới',
	        						"Price"=> 340000,
	        						"Quantity"=> 10,
	        						"SoldQuantity"=> 0,
	        						"QuantityOrder"=> 1
	        				),
	        
	        				array(
	        						"Id" => 289,
	        						"Picture" => '/Content/upload/small/do-choi-nau-bep-kitchen-set-195.jpeg',
	        						"Name" => 'Dữ liệu mới 1',
	        						"Price"=> 340000,
	        						"Quantity"=> 10,
	        						"SoldQuantity"=> 0,
	        						"QuantityOrder"=> 1
	        				),
        		)
        );
        echo "<pre>";
        var_dump($stuff);
        echo "</pre>";
        //print_r($stuff);
        
        */
        //echo json_encode($data, JSON_UNESCAPED_UNICODE );
        echo json_encode($data);
        //echo json_encode(array('status'=>'OK', 'inAC'=> 'OK', 'total_record'=>$this->cart->total_items()));
     
        	//echo json_encode(array('status'=>'OK', 'total_record'=>$this->cart->total_items()));
        
        
       
    }
    
    function updated() {
        $carts = $this->input->post();
        $carts = $this->cart->update(array('rowid'=>$carts['cartid'], 'qty'=>(int)$carts['qty']));
        echo json_encode(array('status'=>'OK', 'total'=>$this->cart->total(),'total_record'=>$this->cart->total_items()));
    }
    
    
    function delete(){
        $cartid = $this->input->post('cartid');
        if($cartid != '') {
            $dataCart = $this->cart->contents();
            unset($dataCart[$cartid]);
            $this->cart->destroy();
            if(count($dataCart) > 0) {
                foreach($dataCart as $row) {
                    if($row['id'] > 0 && $row['qty'] > 0) {
                        $this->cart->insert($row);
                    }
                }
            }
            
            echo json_encode(array('status'=>'OK', 'total'=>$this->cart->total(), 'total_record'=>$this->cart->total_items()));
        } else {
            echo json_encode(array('status'=>'NG'));
        }
    }
    
   	
   	public function getImg($id)
   	{
   		$sql = "SELECT productImage, gia, giagiam, seo_name, tinhtranghang FROM tbl_product WHERE productID = $id";
   		$query = $this->db->query($sql);
   		if($query){
   			return $query->row();
   		}else{
   			return false;
   		}
   	}  
    
    
    
}
?>