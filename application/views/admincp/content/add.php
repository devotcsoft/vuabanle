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
			<li><a href="">Quản trị</a> <span class="divider">&gt;</span></li>
			<li class="active">Thương hiệu sản phẩm</li>
		</ul>
	</div>
	<div class="workplace">
		<div class="row-fluid">
			<div class="span12">
				<div class="head">
					<div class="isw-documents"></div>
					<h1>Thêm mới bài viết</h1>
					<div class="clear"></div>
				</div>
				<form accept-charset="utf-8" method="post"  id="contact" action="<?php echo base_url('admincp/content/add');?>">
					<div class="block-fluid">
						<?php if(isset($error) && $error != ""){ ?>
						<div class="row-form">
							<div class="span3"></div>
							<div class="span9">
								<?= @$error; ?>
							</div>
							<div class="clear"></div>
						</div>
						<?php } ?>
						
						<div class="row-form">
							<div class="span3">Tên bài viết </div>
							<div class="span9">
								<input type="text" placeholder="Tên bài viết" class="required"  value=""
									name="catName" id="catName" />
							</div>
							<div class="clear"></div>
						</div>
					
						<div class="row-form">
							<div class="span3">URL SEO</div>
							<div class="span9">
								<input type="text" placeholder="URL SEO" class="required"  value=""
									name="keypage" id="keypage" />
							</div>
							<div class="clear"></div>
						</div>
						
						<div class="row-form">
							<div class="span3">Thuộc menu</div>
							<div class="span9">
								<select name="tieudiemID">
									<option value="0">Không thuộc menu Top</option>
									<option value="1">MenuTop</option>
								</select>
							</div>
							<div class="clear"></div>
						</div>
						
						<div class="row-form">
							<div class="span3">Icon</div>
							<div class="span9">
								<select name="icon">
									<option value="">Không có ICON</option>
									<option value="ship_on">Ship hàng</option>
									<option value="return_money">Trả lại tiền</option>
								</select>
							</div>
							<div class="clear"></div>
						</div>
						
						<div class="row-form">
							<div class="span3">Ảnh đại diện</div>
							<div class="span6">
								<input id="newsImage" name="newsImage" type="text" size="60" />
							</div>
							<div class="span2">
								<input type="button" class="btn btn-info" value="Browse Server" onclick="BrowseServer( 'Images:/', 'newsImage' );" />
							</div>
							<div class="clear"></div>
						</div>
						
						<div class="row-form">
							<div class="span3">Mô tả ngắn</div>
							<div class="span9">
								<textarea class="" name="newsDes"
									placeholder="Meta keywords..."></textarea>
							</div>
							<div class="clear"></div>
						</div>
						<div class="row-form">
							<div class="span1">Chi tiết bài viết</div>
							<div class="span11">
								<textarea class="ckeditor" name="newsContent"
									placeholder="Meta keywords..."></textarea>
							</div>
							<div class="clear"></div>
						</div>
						
						<div class="row-form">
							<div class="span3">Meta Title</div>
							<div class="span9">
								<input type="text" placeholder="Meta Title" class="required"  value=""
									name="metaTitle" id="metaTitle" />
							</div>
							<div class="clear"></div>
						</div>
						
						<div class="row-form">
							<div class="span3">Meta Description</div>
							<div class="span9">
								<textarea class="" name="metaDes"
									placeholder="Meta Description..."></textarea>
							</div>
							<div class="clear"></div>
						</div>

						<div class="row-form">
							<div class="span3">Trạng thái:</div>
							<div class="span9">
								<label><input type="radio" name="status" value="1" checked></input>Hiện</label>
								<label><input type="radio" name="status" value="2"></input>Ẩn</label>
							</div>
							<div class="clear"></div>
						</div>

						<div class="row-form">
							<div class="span9">
								<p>
									<button class="btn btn-success" type="submit" id="contact">Thêm mới</button>
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
