<div id="content">
  <div class="registration">
  
  <div class="wrap">

     
     <div id="registrat" style="padding-top:10px;">

		<h2><span class="fontawesome-lock"></span>Đăng ký thành viên</h2>

		<form action="<?php echo base_url().'dang-ky/kiem-tra';?>" method="POST">

			<fieldset>
				<p> <i style="color:#210BD9;  float:right; text-align:left;"><?php echo form_error('userName'); ?></i><label for="TDN">Tên Đăng Nhập(*) </label>
				<input name="userName" type="TDN" id="TDN" value="<?php echo set_value('userName'); ?>" />
               </p> 
				<p><i style="color:#210BD9; float:right;text-align:left; padding-right:34px;"><?php echo form_error('password'); ?></i><label for="password">Mật Khẩu (*)</label>
				<input name="password" type="password" id="password"  />			
                </p> 
				 <p><label for="password-reset">Nhập Lại Mật Khẩu (*)</label>
			<input name="repassword" type="password"  /></p> 
				<p>  <i style="color:#210BD9;  float:right;text-align:left;padding-right:32px;"><?php echo form_error('fullname'); ?></i><label for="HoTen">Họ và Tên (*) </label>
				<input name="fullname" type="HoTen" id="HoTen" value="<?php echo set_value('fullname'); ?>" />	</p> 
					<p> <i style="color:#210BD9;  float:right;text-align:left;padding-right:10px;"><?php echo form_error('phone'); ?></i><label for="SDT">Số Điện Thoại (*) </label>
				<input name="phone" type="SDT" id="SDT" value="<?php echo set_value('phone'); ?>" />	</p> 
                	<p><i style="color:#210BD9;  float:right;text-align:left;padding-right:55px;"><?php echo form_error('email'); ?></i><label for="Email-l">Email (*) </label>
				<input name="email" type="Email-l" id="Email-l" value="<?php echo set_value('email'); ?>" />		  </p> 
               
				
			
			
		
	
				<p><input type="submit" id="add" value="Đăng ký"></p>

			</fieldset>

		</form>

	</div> <!-- end login -->

  </div>
  </div>
  </div>
 
<!-----end#content----->
  