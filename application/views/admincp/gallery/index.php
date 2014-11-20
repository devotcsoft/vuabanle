<script type="text/javascript">
$(document).ready(function(){
    $("#contact").validate({
        errorElement: "span", // Định dạng cho thẻ HTML hiện thông báo lỗi
    });
}); 
</script>
<style type="text/css">
.row-fluid .span2 {
	width: 9%;
}
.span2.price1 {
  width: 184px !important;
}
.required.clickwitd {
  width: 243px !important;
}
.addimgtop {
  margin-left: 170px;
  position: relative;
  top: -60px;
  margin-bottom: -35px;
}
.span2.min {
  min-height: 60px !important;
}
#galleryImage1 {
  margin-left: 24px;
}
.addimgtop {
  margin-bottom: -15px;
  margin-left: 170px;
  position: relative;
  top: -5px;
}
.delbtn {
  float: left;
  position: relative;
  top: -28px;
  left: 80px;
}
</style>
<div class="content">
	<div class="breadLine">
		<ul class="breadcrumb">
			<li><a href="">Quản trị</a> <span class="divider">&gt;</span></li>
			<li class="active">Quản lý bộ sư tập</li>
		</ul>
	</div>
	<div class="workplace">
		<div class="row-fluid">
			<div class="span12">
				<div class="head">
					<div class="isw-documents"></div>
					<h1>Quản lý bộ sư tập</h1>
					<div class="clear"></div>
				</div>
				<form accept-charset="utf-8" method="post"  id="contact" action="<?php echo base_url('admincp/gallery'); ?>">
					<div class="block-fluid">
                        <?php
                        $file_id  = count(json_decode($productDetail->galleryImage));
                        ?>
                        <script type="text/javascript">
							$(document).ready(function(){
								var file_id = <?= $file_id + 1 ?>;
								$("#btnimg").click(function(){
									html1 = "<div id='wap'><div class='span3'>Ảnh sản phẩm " + file_id + "</div>";
									html2 =  "<div class='span5 delimgtop'>";
									html3 = "<input id='img" + file_id + "' class='required' name='image_url[]' type='text' size='60' />";
									html31 = "<input id='img" + file_id + "' class='required' name='imagelink[]' type='text' size='60' />";
									html4 = "</div>";
									html5 = "<div class='span2'>";
									html7 = "<input type='button' class='btn btn-info' value='Tìm ảnh' onclick=BrowseServer('Images:/','img"+file_id+"'";
									htmla = ") /><input type='button' id='xoaimg' class='btn btn-warning delbtn' value='xoa'>";
									html8 = "</div></div>";
									$('.addimg').append(html1+html2+html3+html31+html4+html5+html7+htmla+html8);
									file_id ++;
								});
								$('#xoaimg').die().live('click', function() {
									$("#wap").remove();
								});

								
							});
							$(function() {
                                $(".addimg").on('click', '#xoaimg', function() {
                                    $("#delete").remove();
                                });
                
                            });

						</script>
					 
						<div class="row-form ">
							<div class="span2 min">	<input type="button" id="btnimg" class="btn btn-info" value="Thêm ảnh" /></div>
								<div class="addimgtop">
									<div class="row-form1 addimg">
										<?php
										 $i = 1;
										 foreach ( json_decode($productDetail->galleryImage) AS $img) { ?>
										 	<?php if($i == 1){ ?>
										 	     <div id="delete">
										 		<div id="galleryImage1">
											 		<div class="span3">Ảnh sản phẩm <?= $i ?></div>
													<div class="span5">
														<input id="img<?= $i ?>" name="image_url[]" type="text" size="60" value="<?= $img->image_url ?>" />
														<input id='img" + file_id + "' class='required' name='imagelink[]' value="<?= $img->imagelink ?>" type='text' size='60' />
													</div>
													<div class="span2">
														<img alt="" src="<?= base_url().$img->image_url ?>">
													</div>
													<div class="span2">
														<input type="button" class="btn btn-info" value="Tìm ảnh" onclick="BrowseServer( 'Images:/', 'img<?= $i ?>');" />
														<input type='button' id='xoaimg' class='btn btn-warning delbtn' value='xoa'>
													</div>
												</div>
												</div>
										 	<?php }else { ?>
										 	        <div id="delete">
										 			<div class="span3">Ảnh sản phẩm <?= $i ?></div>
													<div class="span5">
														<input id="img<?= $i ?>" name="image_url[]" type="text" size="60" value="<?= $img->image_url ?>" />
														<input id='img" + file_id + "' class='required' name='imagelink[]' value="<?= $img->imagelink ?>" type='text' size='60' />
													</div>
													<div class="span2">
														<img alt="" src="<?= base_url().$img->image_url ?>">
													</div>
													<div class="span2">
														<input type="button" class="btn btn-info" value="Tìm ảnh" onclick="BrowseServer( 'Images:/', 'img<?= $i ?>');" />
														<input type='button' id='xoaimg' class='btn btn-warning delbtn' value='xoa'>
													</div>
													</div>
										 	<?php }?>
											<?php $i++ ?>
										<?php } ?>
										<div class='clear'></div>
									</div>
									<div class='clear'></div>
								</div>
						</div>
						
						
	
						
		
						<div class="row-form">
							<div class="span9">
								<p>
									<button class="btn btn-success" type="submit" id="contact">Cập Nhật</button>
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
