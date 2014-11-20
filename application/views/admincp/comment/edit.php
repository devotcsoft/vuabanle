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
			<li class="active">Ý kiến khách hàng</li>
		</ul>
	</div>
	<div class="workplace">
		<div class="row-fluid">
			<div class="span12">
				<div class="head">
					<div class="isw-documents"></div>
					<h1>Sửa ý kiến khách hàng</h1>
					<div class="clear"></div>
				</div>
				<form accept-charset="utf-8" method="post"  id="contact" action="<?php echo base_url('admincp/comment/edit').'/'.$cateDetail->commentID;?>">
					<input name="commentID" type="hidden" value="<?= $cateDetail->commentID ?>" >
					<div class="block-fluid">
						<div class="row-form">
							<div class="span3">Ngày POST</div>
							<div class="span9">
								<?= $cateDetail->postdate; ?>
							</div>
							<div class="clear"></div>
						</div>
						<div class="row-form">
							<div class="span3">Sản phẩm</div>
							<div class="span9">
								<?= $cateDetail->productName; ?>
							</div>
							<div class="clear"></div>
						</div>
						<div class="row-form">
							<div class="span3">Họ và tên</div>
							<div class="span9">
								<input type="text" placeholder="Họ và tên" class="required"  value="<?= $cateDetail->fullname; ?>"
									name="fullname" id="fullname" />
							</div>
							<div class="clear"></div>
						</div>
						<div class="row-form">
							<div class="span3">Địa chỉ</div>
							<div class="span9">
								<input type="text" placeholder="Địa chỉ" class=""  value="<?= $cateDetail->address; ?>"
									name="address" id="address" />
							</div>
							<div class="clear"></div>
						</div>
						<div class="row-form">
							<div class="span3">Email</div>
							<div class="span9">
								<input type="text" placeholder="Email" class=""  value="<?= $cateDetail->email; ?>"
									name="email" id="email" />
							</div>
							<div class="clear"></div>
						</div>
						<div class="row-form">
							<div class="span3">Tiêu đề</div>
							<div class="span9">
								<input type="text" placeholder="Tiêu đề" class=""  value="<?= $cateDetail->subject; ?>"
									name="subject" id="subject" />
							</div>
							<div class="clear"></div>
						</div>
						<div class="row-form">
							<div class="span1">Nội dung</div>
							<div class="span11">
									<textarea class="ckeditor" name="content"
									placeholder="Nhập thông tin chi tiết..."><?= $cateDetail->content ?></textarea>
							</div>
							<div class="clear"></div>
						</div>
						<div class="row-form">
							<div class="span3">Trạng thái:</div>
							<div class="span9">
								<select name="status">
									<option value="1" <?php if($cateDetail->status == 1){ echo "selected = selected";}?>>Hiện</option>
									<option value="2" <?php if($cateDetail->status != 1){ echo "selected = selected";}?>>Ẩn</option>
								</select>
							</div>
							<div class="clear"></div>
						</div>

						<div class="row-form">
							<div class="span9">
								<p>
									<button class="btn btn-success" type="submit" id="contact">Cập nhật</button>
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
