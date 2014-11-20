<div id="content">
  <div class="content-main">
  <div class="wrap">

	   	<div class="left-content customer_menu">
	   		<div class="box-bdr box-bgcolor pam">
	        	<h4 class="ui-borderBottom accMenuPad">Tài khoản của bạn</h4>
		        	<ul class="cnv mtm" >
						<li ><a class="cnv-name sel-menu-myaccount" href="<?php echo base_url().'quan-ly-tai-khoan'.'.html'?>">Quản lý tài khoản của bạn</a></li>
						<li class="selected"><a class="cnv-name sel-menu-info" href="<?php echo base_url().'sua-thong-tin-ca-nhan'.'.html'?>">Thông tin tài khoản</a></li>
						<li><a class="cnv-name sel-menu-addresses" href="<?php echo base_url().'quan-ly-dia-chi'.'.html'?>">Sổ địa chỉ</a></li>
						<li><a class="cnv-name sel-menu-orders" href="<?php echo base_url().'don-hang'.'.html'?>">Đơn hàng của tôi</a></li>
						<li><a class="cnv-name" href="<?php echo base_url().'phuong-thuc-thanh-toan'.'.html'?>">Phương thức thanh toán</a></li>
						<li><a class="sel-menu-coupons" href="<?php echo base_url().'phieu-giam-gia'.'.html'?>">Phiếu giảm giá</a></li>
					</ul>    
			</div>
		</div>
<div class="right-content infonito">
    <div id="editAccount" class="line">
        <h2 class="pbs ui-borderBottom">Sửa mật khẩu</h2>
        <div class="box box-bdr box-bgcolor mtm">
            <div class="box-bd">
       <form  action="<?php echo base_url().'thay-doi-mat-khau'.'.html';?>" method="post">
			<div style="display:none"><input type="hidden" value="9b220a005259e6359d329599b85d42ad62fe9c6e" name="YII_CSRF_TOKEN"></div>            
			<p class="pbs strong">Thông tin xác nhận</p>
           		 <fieldset class="ui-fieldset mtl">
                <div class="unit size1of">
                    <div class="ui-formRow">
                    
                        <div class="col1 txtRight">
                            <label for="PasswordForm_password">Mật khẩu hiện tại<span class="required">*</span></label>                        </div>
                        <div class="col2">
                            <div class="collection">
                                <input name="pass-old" class="ui-inputPassword" type="password" maxlength="50">                                                            </div>
                        </div>
                    </div>
                    <div class="ui-formRow">
                        <div class="col1 txtRight">
                            <label for="PasswordForm_password">Mật khẩu mới<span class="required">*</span></label>                        
                            </div>
                        <div class="col2">
                            <div class="collection">
                                <input name="password"  class="ui-inputPassword" type="password" maxlength="50">                                                            
                                </div>
                        </div>
                    </div>
                    <div class="ui-formRow">
                        <div class="col1 txtRight">
                            <label for="PasswordForm_password2">Nhập lại mật khẩu mới<span class="required">*</span></label>                        
                            </div>
                        <div class="col2">
                            <div class="collection">
                                <input name="repassword" class="ui-inputPassword"  type="password" maxlength="50">                                                            
                                </div>
                        </div>
                       
                    </div>
                      <div class="ui-formRow">
                      	 <div class="col1 txtRight"> 
                      	 </div>
                      	 <div class="col2">
                       	<div class="collection">
                        	<?php echo form_error('pass-old'); ?>
							<?php echo form_error('password'); ?>
						</div></div>
                    </div>
                    
                </div>
            </fieldset>
      
        </div>
                    <button class="ui-button ui-buttonCta rfloat mtm" type="submit" id="add" title="Gửi"><span>Gửi</span></button>
  </form>
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
  