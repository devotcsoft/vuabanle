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
<div class="right-content infonito">
        <div id="newAddress" class="line">
            <h2 class="pbs ui-borderBottom">Địa chỉ</h2>
            <div class="box box-bdr box-bgcolor mtm">
                <div class="box-bd">
                    <p class="pbs ui-borderBottom strong">Địa chỉ liên hệ</p>
                    <div class="mts txtRight mrm">
                        <p class="fss">* Thông tin bắt buộc</p>
                    </div>
                    <form id="address-form" action="<?php echo base_url().'them-dia-chi'.'.html';?>" method="post">
                             <input type="hidden" value="85000064a9aed1104e505c33673ed7796268b75a" name="YII_CSRF_TOKEN" id="YII_CSRF_TOKEN">

                    <fieldset class="ui-fieldset">
                        <div class="unit size1of2">

                            <div class="ui-formRow">
                                <label for="AddressForm_first_name" class="required">Họ và tên <span class="required">*</span></label>                                
                                <div class="collection" id="first-name">
                                    <input autocorrect="off" class="ui-inputText" name="fullname" id="AddressForm_first_name" type="text" maxlength="50" value="<?php echo  $memberdetail['fullname'];?>">                                                                    
                                </div>
                           	</div>
                             <div class="ui-formRow">
                                <label class="mts required" for="AddressForm_phone">Số điện thoại <span class="required">*</span></label>                                
                                <div class="collection" id="phone2">
                                <input  class="ui-inputText" name="phone" id="EditForm_first_name" type="text" maxlength="40" value="<?php echo  $memberdetail['phone'];?>">                                                                    
                                </div>
                            </div>
                            
                            <div class="ui-formRow">
                                <label class="mts required" for="AddressForm_address1">Địa chỉ  <span class="required">*</span></label>                                
                                <div class="collection" id="address1">
                                    <input autocorrect="off" class="ui-inputText" name="address" id="AddressForm_address1" type="text" maxlength="255" value="<?php echo  $memberdetail['address'];?>">                                                                    
                                    </div>
                            </div>
                            <div class="ui-formRow">
                                <label for="AddressForm_location_0" class="required">Tỉnh/Thành phố <span class="required">*</span></label>                                
                                <div class="collection" id="fk_customer_address_region">
                                     <select class="location" rel="location_0" name="AddressForm[location][0]" id="AddressForm_location_0">
										<option value="">Lựa chọn</option>
										<option value="271">Hồ Chí Minh</option>
										<option value="232">Hà Nội</option>
										<option value="260">Đà Nẵng</option>
										<option value="265">Khánh Hòa</option>
										<option value="431">Bà Rịa Vũng Tàu</option>
										<option value="272">An Giang</option>
										<option value="234">Bắc Giang</option>
										<option value="233">Bắc Kạn</option>
										<option value="276">Bạc Liêu</option>
										<option value="273">Bình Dương</option>
										<option value="274">Bình Phước</option>
										<option value="278">Bình Thuận</option>
										<option value="261">Bình Định</option>
										<option value="235">Bắc Ninh</option>
										<option value="279">Cà Mau</option>
										<option value="280">Cần Thơ</option>
										<option value="236">Cao Bằng</option>
										<option value="277">Bến Tre</option>
										<option value="558">Đăk Lăk</option>
										<option value="577">Đăk Nông</option>
										<option value="237">Điện Biên</option>
										<option value="281">Đồng Nai</option>
										<option value="282">Đồng Tháp</option>
										<option value="262">Gia Lai</option>
										<option value="238">Hà Giang</option>
										<option value="239">Hà Nam</option>
										<option value="240">Hà Tĩnh</option>
										<option value="241">Hải Dương</option>
										<option value="242">Hải Phòng</option>
										<option value="283">Hậu Giang</option>
										<option value="244">Hòa Bình</option>
										<option value="243">Hưng Yên</option>
										<option value="284">Kiên Giang</option>
										<option value="264">Kon Tum</option>
										<option value="246">Lai Châu</option>
										<option value="286">Lâm Đồng</option>
										<option value="247">Lạng Sơn</option>
										<option value="245">Lào Cai</option>
										<option value="285">Long An</option>
										<option value="248">Nam Định</option>
										<option value="249">Nghệ An</option>
										<option value="250">Ninh Bình</option>
										<option value="287">Ninh Thuận</option>
										<option value="251">Phú Thọ</option>
										<option value="266">Phú Yên</option>
										<option value="267">Quảng Bình</option>
										<option value="269">Quảng Nam</option>
										<option value="270">Quảng Ngãi</option>
										<option value="252">Quảng Ninh</option>
										<option value="268">Quảng Trị</option>
										<option value="288">Sóc Trăng</option>
										<option value="253">Sơn La</option>
										<option value="289">Tây Ninh</option>
										<option value="254">Thái Bình</option>
										<option value="255">Thái Nguyên</option>
										<option value="256">Thanh Hóa</option>
										<option value="263">Thừa Thiên Huế</option>
										<option value="290">Tiền Giang</option>
										<option value="291">Trà Vinh</option>
										<option value="257">Tuyên Quang</option>
										<option value="292">Vĩnh Long</option>
										<option value="258">Vĩnh Phúc</option>
										<option value="259">Yên Bái</option>
								</select>                                                                    
							</div>
                            </div>
                            <div class="ui-formRow">
                                <label for="AddressForm_location_1" class="required">Thành phố <span class="required">*</span></label>                                
                                <div class="collection" id="city">
                                 <select class="location" rel="location_1" name="AddressForm[location][1]" id="AddressForm_location_1">
										<option value="">Lựa chọn</option>
								</select>                                                                    
								</div>
                            </div>
                            <?php echo form_error('fullname'); ?>
							<?php echo form_error('phone'); ?>
                        </div>
                    </fieldset>
            		 <input name="AddressForm[fk_country]" id="AddressForm_fk_country" type="hidden" value="239">            
           			 <input name="AddressForm[id_customer_address]" id="AddressForm_id_customer_address" type="hidden">            <div class="unit size1of2 mtl">
                <p><a class="ui-button" href="<?php echo base_url().'quan-ly-dia-chi'.'.html'?>">« Trở về</a></p>
            </div>
            <div class="unit size1of2 rfloat mtl txtRight mbl">
                <input class="ui-button ui-buttonCta lightsel-addresses-button" type="submit" id="send" value="Lưu lại địa chỉ">
            </div>
                </form></div>
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