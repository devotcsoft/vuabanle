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
        <h2 class="pbs ui-borderBottom">Chỉnh sửa tài khoản</h2>
        <div class="box box-bdr box-bgcolor mtm">
            <div class="box-bd">
                <form id="form-account-edit"   action="<?php echo base_url().'sua-thong-tin-ca-nhan'.'.html';?>"  method="post">
				<input type="hidden" value="49b9e412b32a36bc8d3e5cbd97aeaa09bbf0d4c2" name="YII_CSRF_TOKEN">  
             		 <fieldset class="ui-fieldset">
                    	<div class="unit Xsize1of2" style="width:100%; padding-left:10px;">
                      	  <div class="ui-formRow mtm">
                            	<div class="col1 txtRight">
                               		<label>Email</label>
                           		</div>
                            <div class="col2">
                                <div class="collection">
                                    <p class="strong"><?php echo  $memberdetail['email'];?></p>
                                   
                                </div>
                            </div>
                    	</div>
                        <div class="ui-formRow titleRow">
                            <div class="col1 txtRight">
                                <label class="mts" for="EditForm_salutation" >Cách xưng hô:</label>                            
                             </div>
                            <div class="col2">
                                <div class="collection">
                                    <ul>
                                            <li>
                                                <input id="salutation_0" type="radio" name="salutation"  <?php if($memberdetail['salutation'] == 0){ echo 'checked';} ?> value="0">
                                                <label style="display: inline;" for="interest_0">Mr.</label>
                                            </li>
                                             <li>
                                                <input id="salutation_1" type="radio" name="salutation" <?php if($memberdetail['salutation'] == 1){ echo 'checked';} ?> value="1">
                                                <label style="display: inline;" for="interest_1">Ms.</label>
                                            </li>
                                            <li>
                                                <input id="salutation_2" type="radio" name="salutation" <?php if($memberdetail['salutation'] == 2){ echo 'checked';} ?> value="2">
                                                <label style="display: inline;" for="interest_2">Mrs.</label>
                                            </li>
                                   </ul>
                                </div>
                            </div>
                        </div>
                        <div class="ui-formRow">
                            <div class="col1 txtRight">
                                <label class="mts required" for="EditForm_first_name">Họ tên <span class="required">*</span></label>                            </div>
                            <div class="col2">
                                <div class="collection">
                                    <input autocorrect="off" class="ui-inputText" name="fullname" id="EditForm_first_name" type="text" maxlength="40" value="<?php echo  $memberdetail['fullname'];?>">                                                                    </div>
                            </div>
                        </div>
                        <div class="ui-formRow">
                            <div class="col1 txtRight">
                                <label class="mts required" for="EditForm_first_name">Số điện thoại <span class="required">*</span></label>                            </div>
                            <div class="col2">
                                <div class="collection">
                                    <input autocorrect="off" class="ui-inputText" name="phone" id="EditForm_first_name" type="text" maxlength="40" value="<?php echo  $memberdetail['phone'];?>">                                                                    </div>
                            </div>
                        </div>
                        <div class="ui-formRow">
                            <div class="col1 txtRight">
                                <label class="mts required" for="EditForm_gender">Giới tính <span class="required">*</span></label>                            </div>
                            <div class="col2">
                                <div class="collection">
                                    <select class="input-text" name="gender" id="EditForm_gender">
										<option value="0" <?php if($memberdetail['gender'] == 0){ echo 'selected';} ?>>Nam</option>
										<option value="1" <?php if($memberdetail['gender'] == 1){ echo 'selected';} ?>>Nữ</option>
									</select>                                                                    
								</div>
                            </div>
                        </div>
                        <div class="ui-formRow">
                            <div class="col1 txtRight">
                                <label class="mts" for="EditForm_birthday">Ngày tháng năm sinh</label>                            </div>
                            <div class="col2 1-row">
                                <div class="collection">
                                
                                     <?php 
                                    // echo $memberdetail['userDate'];
									if ( $memberdetail['userDate']=="")
									{
										?>
										<select class="input-text accountEditBirthDaySB" name="day" id="EditForm_day">
										<option selected value="" >Ngày</option>
										<?php
										for ($i=1;$i<=31;$i++)
										echo"<option value = ".$i. ">".$i."</option>";
										?>
									</select>                   

									<select class="input-text accountEditBirthMonthSB" name="month" id="EditForm_month">
										<option selected value="" >Tháng</option>
										<?php
										for ($i=1;$i<=12;$i++)
										echo"<option value = ".$i.">" .$i."</option>";
										?>
									</select>   
									
									<select class="input-text accountEditBirthYearSB" name="year" id="EditForm_year">
										<option selected value="">Năm</option>
										<?php
										for ($i=1960;$i<=2014;$i++)
										echo"<option value =".$i.">".$i."</option>";
										?>
									</select>  
									<?php 
									}
									else 
									{
                                        $date=$memberdetail['userDate'];
                                        $datEx = explode("-", $date);
									?>
                                	<select class="input-text accountEditBirthDaySB" name="day" id="EditForm_day">
										<option selected value="" >Ngày</option>
										<?php for ($i=1;$i<=31;$i++){ ?>
									    <option value="<?= $i ?>" <?php if($i == $datEx[0]){ echo "selected = selected "; } ?> ><?= $i ?></option>
										<?php } ?>
									</select>                   

									<select class="input-text accountEditBirthMonthSB" name="month" id="EditForm_month">
										<option selected value="" >Tháng</option>
										<?php for ($i=1;$i<=12;$i++){ ?>
										<option value="<?= $i ?>" <?php if($i == $datEx[1]){ echo "selected = selected "; } ?> ><?= $i ?></option>
										<?php } ?>
									</select>   
									
									<select class="input-text accountEditBirthYearSB" name="year" id="EditForm_year">
										<option selected value="">Năm</option>
										<?php echo  $datEx[2];?>
										<?php for ($i=1960;$i<=2014;$i++): ?>
										<option value="<?= $i ?>" <?php if($i == $datEx[2]){ echo "selected = selected "; } ?> ><?= $i ?></option>
									    <?php endfor;?>
									</select>                                  
									<?php } ?>
                              </div>
                              
                           </div>
                        </div>
                        <div class="ui-formRow">
                            <div class="col1 txtRight">
                                <label class="mts" for="EditForm_annual_income">Thu nhập hàng năm</label>                            
                            </div>
                            <div class="col2">
                                <div class="collection">
                                    <select class="input-text" name="annual_income" id="EditForm_annual_income">
										<option value="1" <?php if($memberdetail['annual_income'] == 1){ echo 'selected';} ?>>Thấp hơn $30,000</option>
										<option value="2" <?php if($memberdetail['annual_income'] == 2){ echo 'selected';} ?>>$30,000 to $39,999</option>
										<option value="3" <?php if($memberdetail['annual_income'] == 3){ echo 'selected';} ?>>$40,000 to $49,999</option>
										<option value="4" <?php if($memberdetail['annual_income'] == 4){ echo 'selected';} ?>>$50,000 to $74,999</option>
										<option value="5" <?php if($memberdetail['annual_income'] == 5){ echo 'selected';} ?>>$75,000 to $99,999</option>
										<option value="6" <?php if($memberdetail['annual_income'] == 6){ echo 'selected';} ?>>$100,000 to $124,999</option>
										<option value="7" <?php if($memberdetail['annual_income'] == 7){ echo 'selected';} ?>>$125,000 to $149,999</option>
										<option value="8" <?php if($memberdetail['annual_income'] == 8){ echo 'selected';} ?>>$150,000 or more</option>
									</select>                                                                    
								</div>
                            </div>
                        </div>
                        <div class="ui-formRow interestRow">
                            <div class="col1 txtRight">
                                <label class="mts" for="EditForm_interest">Quan tâm</label>                            
                            </div>
                            <div class="col2">
                                <div class="checker">
                                    <ul>
                                    		<?php
									foreach ($listCategorys as $listCategory){
										if($listCategory['parentID'] == 0){ ?>
                                            <li>
                                                <input id="interest_1" type="checkbox" name="checkbox[]" class="check_cat" value="<?= $listCategory['catID'] ?>">
                                                <label style="display: inline;" for="interest_1"><?=  $listCategory['catName'] ?></label>
                                            </li>
                                           
                                            <?php }
									}
									?>
                                        </ul>
                                </div>
                            </div>
                        </div>
                        
                       
                        <div class="col2">
                                <div class="collection">
                        <input type="hidden" value="" name="id_list" id="id_list">
                       </div></div>

                        <div class="ui-formRow">
                            <div class="col1">
                            </div>
                            <div class="col2" style="width:auto;margin:1em 0 0 17em;">
                                <p class="mbs"><?php echo form_error('fullname'); ?></p>
								<p class="mbs"><?php echo form_error('phone'); ?></p>
                        <div  class="ui-formRo"  >
                         <a href="javascript: void(0)" onclick="GetID(); return false;" class="ui-button ui-buttonCta sel-account-edit-button"  ><span>Lưu</span></a>
                      <!--   <a href="javascript: void(0)" onclick="GetID(); return false;"><span class="icon-remove"></span><span class="text">Chọn</span></a> -->
                      </div>
                            	
                            </div>
                        </div>
                    </div>
                </fieldset>
            </form></div>
        </div>
        <div class="mtm">
            <div class="rfloat">
                <div class="collection">
                </div>
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