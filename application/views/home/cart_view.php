<div id="content">
  <div class="content-main"  >
  <div class="wrap">

   <div class="left-content customer_menu">
   		<div class="box-bdr box-bgcolor pam">
        	<h4 class="ui-borderBottom accMenuPad">Tài khoản của bạn</h4>
	        	<ul class="cnv mtm" >
					<li ><a class="cnv-name sel-menu-myaccount" href="<?php echo base_url().'quan-ly-tai-khoan'.'.html'?>">Quản lý tài khoản của bạn</a></li>
					<li ><a class="cnv-name sel-menu-info" href="<?php echo base_url().'sua-thong-tin-ca-nhan'.'.html'?>">Thông tin tài khoản</a></li>
					<li><a class="cnv-name sel-menu-addresses" href="<?php echo base_url().'quan-ly-dia-chi'.'.html'?>">Sổ địa chỉ</a></li>
					<li class="selected"><a class="cnv-name sel-menu-orders" href="<?php echo base_url().'don-hang'.'.html'?>">Đơn hàng của tôi</a></li>
					<li><a class="cnv-name" href="<?php echo base_url().'phuong-thuc-thanh-toan'.'.html'?>">Phương thức thanh toán</a></li>
					<li><a class="sel-menu-coupons" href="<?php echo base_url().'phieu-giam-gia'.'.html'?>">Phiếu giảm giá</a></li>
				</ul>    
		</div>
	</div>
<div class="right-content infonito">
        
        
    <h2 class="pbs ui-borderBottom">Đơn hàng của tôi    </h2>  
    <?php if($memberdetail->productID==0)
    {
    	echo "<div class='mtm mbm clearfix'>Bạn chưa có đơn hàng nào</div>";
    }
    else {
    	?>          
    <h2><a href="" class="print-order rfloat fsm">In tất cả đơn hàng</a></h2>
    <div class="mtm mbm clearfix">
        <?php echo $cateDetail->cartID; ?>
        <?= $cateDetail->cartName ?>
       <p class="strong size3of4 itemCount">Đơn hàng</p>
    </div>
    <div id="myorder">
    <div id="editAccount" class="line mtm">
            <div class="order-box current toggleBox">
            <div class="order-title">
                <div class="order-time"><?php echo $cateDetail->cartCreated; ?></div>
                <span class="arrow-icon closeCustomData"></span>
                <span class="order-no-container">Đặt hàng #: <span class="order-no"><?php echo $cateDetail->cartID; ?></span> </span>
                | 
                <a href="#" class="mts" style="margin-left:1em;">Xem đơn hàng</a>
                | 
                <a href="#" class="mts print-order">In đơn hàng</a>
                                |
                <a href="#">Kiểm tra đơn hàng</a>                
            </div>
            <!-- click on the order title to expand the table of order details -->
            <div class="order-details" style="display: block;">
                <div class="plans_table">
  			 	
								  			
                                             <div class="ther">
								        				<div class="plans-list1"><h3>Tên sản phẩm</h3></div>
								        				<div class="plans-list3"><h3>Giá</h3></div>
								        				<div class="plans-list2"><h3>Số lượng </h3></div>
                                                        <div class="plans-list3"><h3>Tổng tiền</h3></div>
								        				<div class="plans-list2"><h3></h3></div>
								    		</div>	
													
												<div class="tboo">	
								   			
								   					<?php $total = 0; $i = 1 ;?>	
                                					<?php foreach($productAll as $idx => $val){?>
													<tr class="<?= $idx % 2 == 0? 'odd': 'event'  ?>>">
									        			<div class="plan_list_title">
                                                        <img src="<?= $val['anhthume'] ?>" alt="" width="160" height="160">
                                                       <h5><a href="<?= base_url($val['seo_name'])?>"><?= $val['productName'] ?></a></h5></div>
												        <div class="price_body1"><?= $val['gia'] ?></div>
												        <div class="price_body2"><?= $val['detailNumber'] ?></div>
                                                         <div class="price_body1"><?= Utility_model::price_format($val['gia']*$val['detailNumber']) ?> VNĐ</div>
                                                        
									    			</div>
                                                    <div class="tee4">
                                                       <p>Giảm giá: <?= $val['giamgia'] ?>  VNĐ</p>
                                                    	<p>Chi phí giao hàng:  VNĐ</p>
                                                    </div>
                                                 
                                                    <div class="summomy">
                                                    
                                                       <h4>Thành tiền <span>(Đã bao gồm thuế)</span> :<?= Utility_model::price_format($val['gia']*$val['detailNumber']) ?> VNĐ VNĐ</h4>
                                                    
                                                          <?php 
                                                          $total = $total + $val['gia']*$val['detailNumber'];
                                                          $i++;
    													} ?>
                                                    </div>
								    			
								    			<div class="tfoo">
								    			</div>	 	
  											 </div>
            </div>            
        </div>            
                       
                      
        </div>
        </div>
       
</div> 
 <?php }?>
 
 
 
 <style>
.col1,.col2{float:left !important;}
.col1{width:16em !important}
.col2{margin-left:1em; width:25em !important;}

.interestRow ul {
    -moz-column-count: 2;
    -webkit-column-count: 2;
    column-count: 2;
}
.interestRow li {
    line-height: 18px;
    width: auto;
}
.titleRow li {
    line-height: 18px;
}
#editAccount fieldset input[type="text"], #editAccount  fieldset input[type="password"]
{ width:313px;}
#content .content-main .wrap .customer_menu
{padding-top:20px; border:none;}
.plans_table .tboo div.plan_list_title h5
{ float:right;
 width:55%;}
.plans_table .summomy h4 span
 { font-weight:normal;}
 .plans_table .tee4
 { border-bottom:1px solid #ccc;
 text-align: right;
overflow: hidden;
padding: 10px 0px;
font-size: 13px;}

</style>

  </div>

 </div>
 
 <!-----end#content----->