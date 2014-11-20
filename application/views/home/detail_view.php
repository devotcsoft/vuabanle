
<div id="content">
  <div class="content-main">
  <div class="wrap">

   	<div class="left-content customer_menu">
   		<div class="box-bdr box-bgcolor pam">
        	<h4 class="ui-borderBottom accMenuPad">Tài khoản của bạn</h4>
	        	<ul class="cnv mtm" >
					<li class="selected"><a class="cnv-name sel-menu-myaccount" href="<?php echo base_url().'quan-ly-tai-khoan'.'.html'?>">Quản lý tài khoản của bạn</a></li>
					<li ><a class="cnv-name sel-menu-info" href="<?php echo base_url().'sua-thong-tin-ca-nhan'.'.html'?>">Thông tin tài khoản</a></li>
					<li><a class="cnv-name sel-menu-addresses" href="<?php echo base_url().'quan-ly-dia-chi'.'.html'?>">Sổ địa chỉ</a></li>
					<li><a class="cnv-name sel-menu-orders" href="<?php echo base_url().'don-hang'.'.html'?>">Đơn hàng của tôi</a></li>
					<li><a class="cnv-name" href="<?php echo base_url().'phuong-thuc-thanh-toan'.'.html'?>">Phương thức thanh toán</a></li>
					<li><a class="sel-menu-coupons" href="<?php echo base_url().'phieu-giam-gia'.'.html'?>">Phiếu giảm giá</a></li>
				</ul>    
		</div>
	</div>
<div class="right-content  infonito">
        <h2 class="pbs ui-borderBottom">Quản lý tài khoản của bạn</h2>
        <p class="mtm strong">Xin chào <?php echo $memberdetail->fullname; ?>  </p>
        <p class="mbm mts">Trong mục quản lý tài khoản, bạn có thể xem các hoạt động gần đây của bạn cũng như quản lý thông tin tài khoản. Chọn một link bên dưới để xem hay chỉnh sửa thông tin.</p>
        <div class="line">
            <div class="unit size1of1 mtm">
                <div class="box box-bdr pam mrs myaccountBox1">
                    <h4 class="ui-borderBottom pbs fsml">Địa chỉ liên hệ</h4>
                    <p class="ptm">
                        <?php echo $memberdetail->fullname; ?>  :
                        <?php echo $memberdetail->email; ?>  - <a href="<?php echo base_url().'thay-doi-email'.'.html'?>" class="sel-link-change-email">Thay đổi địa chỉ email</a>
                    </p>
                    <p class="mtm">
                        <a href="<?php echo base_url().'thay-doi-mat-khau'.'.html'?>" class="sel-link-change-pass">Thay đổi mật khẩu</a>
                    </p>
                    <a class="rfloat sel-link-edit-contact" href="<?php echo base_url().'sua-thong-tin-ca-nhan'.'.html'?>">Chỉnh sửa</a>
                </div>
            </div>
            
        </div>

        <div class="box mtl">
            <div class="l-row ui-borderBottom pbs">
                <h3 class="l-cell ptm">Sổ địa chỉ</h3>
                <a href="<?php echo base_url().'quan-ly-dia-chi'.'.html'?>" class="rfloat sel-link-my-addresses">Quản lý địa chỉ</a>
            </div>
        </div>

        <div class="line mbl">
            <div class="unit size1of2">
                <div class="box box-bdr mtm pam mrs myaccountBox2">
                        <h4 class="ui-borderBottom pbs fsml">Địa chỉ thanh toán mặc định</h4>
                                                    <p class="ptm">Địa chỉ thanh toán mặc định không tồn tại</p>
                                        </div>
            </div>
            <div class="unit size1of2 lastUnit">
                <div class="box box-bdr mtm mls pam myaccountBox2">
                    <h4 class="ui-borderBottom pbs fsml">Địa chỉ giao hàng mặc định</h4>
                                            <p class="ptm">Bạn chưa có địa chỉ người mua mặc định. <br> <a href="<?php echo base_url().'them-dia-chi'.'.html'?>" title="">Thêm địa chỉ mới</a></p>
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

  