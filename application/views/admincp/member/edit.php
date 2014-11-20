<script type="text/javascript">
$(document).ready(function(){
    $("#contact").validate({
        errorElement: "span", // Định dạng cho thẻ HTML hiện thông báo lỗi
    });
}); 
</script>
<div class="content">
 <div class="breadLine">
	 <ul class="breadcrumb">
	                <li><a href="<?php echo base_url().'admincp/member/'?>">Quản lý thành viên</a> <span class="divider">></span></li>                
	                <li class="active">Cập nhập</li>
	 </ul>
 </div>
  <div class="workplace">
            
            <div class="row-fluid">
                
                <div class="span12">
                    <div class="head">
                        <div class="isw-documents"></div>
                        <h1>Cập nhập tài khoản</h1>
                        <div class="clear"></div>
                    </div>
                    <?php $id = $this->uri->segment(4);?>
               <form accept-charset="utf-8" method="post" action="<?php echo base_url().'admincp/member/edit/'.$id;?>" id="">     
                    <div class="block-fluid">    
                        
					
                            <div class="span3"></div>
                            <div class="span4">
                            <p>
						<?php echo validation_errors(); ?> 
						</p>
                            </div>
                            <div class="clear"></div>
                    
                        <div class="row-form">
                       
                            <div class="span3">Tên đăng nhập :</div>
                            <div class="span4">
                            <input type="text" name ="userName" value="<?php echo $info['userName'];?>" /></div>
                            <div class="clear"></div>
                        </div> 

                        <div class="row-form">
                            <div class="span3">Mật khẩu :</div>
                            <div class="span4">
                            <input type="password" name="password"  placeholder="Mời bạn nhập mật khẩu" /></div>
                            <div class="clear"></div>
                        </div>                         

                        <div class="row-form">
                            <div class="span3">Họ và tên :</div>
                            <div class="span4">
                            <input type="text" name="fullname" placeholder="Mời bạn nhập tên" value="<?php echo $info['fullname'];?>"/></div>
                            <div class="clear"></div>
                        </div> 
                        
						<div class="row-form">
                            <div class="span3">Số điện thoại :</div>
                            <div class="span4">
                            <input type="text" name="phone" placeholder="Mời bạn nhập số điện thoại" value="<?php echo $info['phone'];?>"/></div>
                            <div class="clear"></div>
                        </div> 
                        
                        <div class="row-form">
                            <div class="span3">Email :</div>
                            <div class="span4">
                            <input type="text" name="email" value="<?php echo $info['email'];?>" placeholder="Mời bạn nhập Email"/></div>
                          	<div class="clear"></div>
                        </div>                                       
                        
                        <div class="row-form">
                            <div class="span3">Địa chỉ :</div>
                            <div class="span4">
                            <input type="text" placeholder="Mời bạn nhập địa chỉ" name="address" value="<?php echo $info['address'];?>" /></div>
                            <div class="clear"></div>
                        </div>  
                                   
                                   
                        <div class="row-form">
							<div class="span3">Trạng thái:</div>
							<div class="span9">
								<label><input type="radio" name="status" value="2" <?php if($info['status'] == 2){ echo "checked";}?>></input>Hiện</label>
								<label><input type="radio" name="status" value="1" <?php if($info['status'] == 1){ echo "checked";}?>></input>Ẩn</label>
							</div>
							<div class="clear"></div>
						</div>                                                           
						<div class="row-form">
							<div class="span4">
								<p>
									<button class="btn" type="submit" id="add">Cập nhập</button>
								</p>
							</div>
							<div class="clear"></div>
						</div>
                          
                    </div>
                </form>
                </div>
                
            </div>
</div>
</div>