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
			<li><a href="<?php echo base_url().'admincp/user/'?>">Quản lý user</a>
				<span class="divider">></span></li>
			<li class="active">Sửa thông tin tài khoản</li>
		</ul>
	</div>
	<div class="workplace">

		<div class="row-fluid">

			<div class="span12">
				<div class="head">
					<div class="isw-documents"></div>
					<h1>Sửa thông tin tài khoản</h1>
					<div class="clear"></div>
				</div>
                   
               <?php $id = $this->uri->segment(4);?>
               <form accept-charset="utf-8" method="post"
					action="<?php echo base_url().'admincp/user/edit/'.$id;?>" id="">
					<div class="block-fluid">

						<div class="span3"></div>
						<div class="span4">
							<p>
						<?php echo validation_errors(); ?> 
						</p>
						</div>
						<div class="clear"></div>

						<div class="row-form">

							<div class="span3">Tài khoản :</div>
							<div class="span4">

								<input type="text" name="user_name"
									value="<?php echo $info['userName'];?>" />
							</div>

							<div class="clear"></div>
						</div>

						<div class="row-form">
							<div class="span3">Mật khẩu :</div>
							<div class="span4">
								<input type="password" name="password"
									placeholder="Mời bạn nhập mật khẩu" />
							</div>
							<div class="clear"></div>
						</div>
						<div class="row-form">
							<div class="span3">Số điện thoại :</div>
							<div class="span4">
								<input type="text" name="phone"
									placeholder="Mời bạn nhập số điện thoại"
									value="<?php echo $info['userMobile'];?>" />
							</div>
							<div class="clear"></div>
						</div>

						<div class="row-form">
							<div class="span3">Email :</div>
							<div class="span4">
								<input type="text" name="email"
									value="<?php echo $info['userEmail'];?>"
									placeholder="Mời bạn nhập Email" />
							</div>
							<div class="clear"></div>
						</div>

						<div class="row-form">
							<div class="span3">Địa chỉ :</div>
							<div class="span4">
								<input type="text" placeholder="Mời bạn nhập địa chỉ"
									name="address" value="<?php echo $info['userAddress'];?>" />
							</div>
							<div class="clear"></div>
						</div>
						<div class="row-form">
							<div class="span3">Công việc :</div>
							<div class="span4">
								<input type="text" placeholder="Mời bạn nhập công việc"
									name="userJob" value="<?php echo $info['userJob'];?>" />
							</div>
							<div class="clear"></div>
						</div>


						<div class="row-form work-form">
							<div class="span2">Công việc :</div>
							<div class="span3 title-x">
							
							<?php
							$assetss = explode(',', $info['assets']);
							$fillterAssest = array_filter($assetss);
							
							?>
							<?php foreach ($getCate0s as $key=>$getCate0): ?>
							<?php
								foreach ($fillterAssest as $key => $fillterAsses){
									if($fillterAsses ==  $getCate0['catid']){?>
										<div class="checker1">
										<span><input checked type="checkbox" name="assets[]" class="check_cat" value="<?php echo $getCate0['catid']; ?>"></span>
										<span class="title"><?php echo $getCate0['catName'];?></span>
										<script type="text/javascript">
										 $( document ).ready(function() {
											 $("#hide<?php echo $getCate0['catid'];?>").css("display", "none");
										});
										
										</script>
									<?php  }
								} 
							?>
							<?php endforeach; ?>
								<?php foreach ($getCate0s as $key=>$getCate0): ?>
									<div class="checker1">
									<div  id="hide<?php echo $getCate0['catid'] ?>">
									<span><input type="checkbox" name="assets[]" class="check_cat" value="<?php echo $getCate0['catid']; ?>"></span>
									<span class="title"><?php echo $getCate0['catName'];?></span>
									</div>
								</div>
								<?php endforeach; ?>
								
							</div>
						
							<div class="clear"></div>
						</div>
						<div style="clear:both;"></div>
	

						<div class="row-form">
							<div class="span4">
								<p>
									<button class="btn" type="submit" id="add">Cập nhập</button>
								</p>
							</div>
							<div class="clear"></div>
							<div style="clear:both;"></div>
							
						</div>
						<div style="clear:both;"></div>
					</div>
					
					<style>
						.row-fluid .span4{
							width: 40% !important;
						}
						
						.work-form .row-form{
							border-top: none !important;
							border-bottom:none !important;
						}
						
						.work-form .span3{
							width: 74%;
						}
						
						.work-form .span2{
							width: 23%;
						}
					</style>
						
				</form>
				<div style="clear:both;"></div>
			</div>
			<div style="clear:both;"></div>

		</div>
		<div style="clear:both;"></div>
	</div>
	<div style="clear:both;"></div>
</div>