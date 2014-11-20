<div id="content">
  <div class="content-main">
  <div class="wrap">

   	<div class="left-content customer_menu">
   		<div class="box-bdr box-bgcolor pam">
        	<h4 class="ui-borderBottom accMenuPad">Tài khoản của bạn</h4>
	        	<ul class="cnv mtm" >
					<li><a class="cnv-name sel-menu-myaccount" href="<?php echo base_url().'quan-ly-tai-khoan'.'.html'?>">Quản lý tài khoản của bạn</a></li>
					<li><a class="cnv-name sel-menu-info" href="<?php echo base_url().'sua-thong-tin-ca-nhan'.'.html'?>">Thông tin tài khoản</a></li>
					<li class="selected" ><a class="cnv-name sel-menu-addresses" href="<?php echo base_url().'quan-ly-dia-chi'.'.html'?>">Sổ địa chỉ</a></li>
					<li><a class="cnv-name sel-menu-orders" href="<?php echo base_url().'don-hang'.'.html'?>">Đơn hàng của tôi</a></li>
					<li><a class="cnv-name" href="<?php echo base_url().'phuong-thuc-thanh-toan'.'.html'?>">Phương thức thanh toán</a></li>
					<li><a class="sel-menu-coupons" href="<?php echo base_url().'phieu-giam-gia'.'.html'?>">Phiếu giảm giá</a></li>
				</ul>    
		</div>
	</div>
<div class="right-content  infonito">
        <div class="box pbs ui-borderBottom">
            <div class="unit size1of2">
                <h2>Sổ địa chỉ</h2>
            </div>
            <div class="unit size1of2 txtRight lastUnit">
                <a href="<?php echo base_url().'them-dia-chi'.'.html'?>" class="ui-button fss sel-my-addresses-button">Thêm địa chỉ mới                </a>
            </div>
        </div>
        <div class="line mbl">
            <div class="unit size1of2 mtm">
                <div class="box box-bdr pam mrs">
                    <h4 class="ui-borderBottom pbs fsml">Địa chỉ mặc định</h4>
                             <div class="ui-borderBottom">
                            <h4 class="mtm mbs">Địa chỉ thanh toán mặc định</h4>
                            <p class="mtm mbm"><?php echo $memberdetail->address; ?></p>
                        </div>
                                        <h4 class="mtm mbm">Địa chỉ giao hàng mặc định</h4>
                                            <p class="mtm mbm"><?php echo $memberdetail->address; ?><br> <a href="<?php echo base_url().'them-dia-chi'.'.html'?>" title="">Sửa địa chỉ</a></p>
                                    </div>
            </div>
            <div class="unit size1of2 mtm lastUnit">
                <div class="box box-bdr pam mls mbl">
                    <h4 class="ui-borderBottom fsml pbs mbm">Địa chỉ khác</h4>
                                            <p class="mtm"><?php echo $memberdetail->address; ?><a href="<?php echo base_url().'them-dia-chi'.'.html'?>" title="Đăng ký địa chỉ khác">Sửa địa chỉ</a></p>
              </div>
            </div>
        </div>
    </div>
 
 
 
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

</style>
 
 
 
 
  </div>

 </div>
 
 

 

 <!-----end#content----->