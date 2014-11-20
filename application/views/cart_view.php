<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta charset="utf-8">
    <link rel="icon" type="image/ico" href="<?php echo base_url().'public/libs/';?>favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="http://localhost/CodeIgniter/CI_Cart/public/bootstrap.css">   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>  
</head>

<script type="text/javascript">
    var total_product = 0;
    var mouse_is_inside = false;
    $(document).ready( function(){  
        $('#admin').click(function() {
            var id = parseInt($(this).attr('rowid'));
            var price = $(this).attr('price');
            var name = $(this).attr('name');
            console.log($('#quantity_product').val());
            var quantity = $('#quantity_product').val();
            if(quantity % 1 != 0){
                alert('Số lượng mua hàng phải là số tự nhiên!');
                $('#quantity_product').focus();
                return false;
            }
            quanlity = parseFloat($('#quantity_product').val());
            console.log(quanlity);
            console.log(id);
            if(id > 0 && quanlity > 0 ) {
                $.post('<?= base_url(); ?>cart/add',{
                    id: id,
                    price: price,
                    name: name,
                    qty: quanlity
                }, function(response){
                    total_product = total_product + quanlity;
                    console.log(id);
                    $('.notice').show().html('Đã thêm <span class="bold red">' + total_product + '</span> sản phẩm này vào Giỏ hàng');
                    if(response.status == 'OK') {
                        $('.all_cart').html('(' + response.total_product + ')');
                    }
                },'json');
            }else{
                alert("bạn hãy nhập số lượng sản phẩm");
            }
        });
    });
</script>
<body>
<script type='text/javascript'>window._sbzq||function(e){e._sbzq=[];var t=e._sbzq;t.push(["_setAccount",10378]);var n=e.location.protocol=="https:"?"https:":"http:";var r=document.createElement("script");r.type="text/javascript";r.async=true;r.src=n+"//static.subiz.com/public/js/loader.js";var i=document.getElementsByTagName("script")[0];i.parentNode.insertBefore(r,i)}(window);</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-41788948-1', 'auto');
  ga('send', 'pageview');

</script>    
<?php 
$cart  = $this->cart->contents();
//print_r($cart);
?>
<div class="all_cart"></div>
    <div id="container">
        
            
        <div id="main-content">
                <div class= "addcarts clear">
                </div>
<div class="content-pro">
    <div class="col3">
        <div class="detail-1">
            <div class="ct">
                
                <div class="ct-3">
                    <!--  <input id="quantity_product" type="number" step="any" min="0" value="1"/>-->
                    <input id="quantity_product" type="number" step="any" min="1" value="1"/>
                    <button id="15" name="Đàn ghita BBT GLOBAL đỏ cho bé - BB778" price="599000" class="buy1 prodct_order" >
                        <span class="buy2">| <span class="bd"  >Đặt mua</span></span>
                    </button>
                </div>
                <div class="notice">
                </div>
            </div>
        </div>
        <div class="clear"></div>
        
    </div>


    <div class="container">  
<h2>Example of creating Modals with Twitter Bootstrap</h2>  
<div id="example" class="modal hide fade in" style="display: none; ">  
    <div class="modal-header">  
        <a class="close" data-dismiss="modal">�</a>  
        <h3>This is a Modal Heading</h3>  
        </div>  
        <div class="modal-body">  
         <div class="all_cart"></div>    
        </div>  
        <div class="modal-footer">  
        <a href="#" class="btn btn-success">Call to action</a>  
        <a href="#" class="btn" data-dismiss="modal">Close</a>  
    </div>  
</div>  
<script>
</script>
<p><a data-toggle="modal" href="#example" class="btn btn-primary btn-large" id="admin" rowid="15" name="Đàn ghita BBT GLOBAL đỏ cho bé - BB778" price="599000">Launch demo modal</a></p>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>  

</div>  
    <script src="http://localhost/CodeIgniter/CI_Cart/public/bootstrap-modal.js"></script>  