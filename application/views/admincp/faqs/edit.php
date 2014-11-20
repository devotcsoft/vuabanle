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
			<li class="active">Quản lý hỏi đáp</li>
		</ul>
	</div>
	<div class="workplace">
		<div class="row-fluid">
			<div class="span12">
				<div class="head">
					<div class="isw-documents"></div>
					<h1>Sửa câu hỏi</h1>
					<div class="clear"></div>
				</div>
				<form accept-charset="utf-8" method="post"  id="contact" action="<?php echo base_url('admincp/faqs/edit').'/'.$cateDetail->newsID;?>">
					<input name="newsID" type="hidden" value="<?= $cateDetail->newsID ?>" >
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
							<div class="span3">Câu hỏi</div>
							<div class="span9">
								<input type="text" placeholder="Tiêu đề câu hỏi" class="required"  value="<?= $cateDetail->newsTitle ?>"
									name="catName" id="catName" />
							</div>
							<div class="clear"></div>
						</div>
					
						<div class="row-form">
							<div class="span3">URL SEO</div>
							<div class="span9">
								<input type="text" placeholder="URL SEO" class="required"  value="<?= $cateDetail->seo_name ?>"
									name="keypage" id="keypage" />
							</div>
							<div class="clear"></div>
						</div>
						<div class="row-form">
							<div class="span1">Chi tiết bài viết</div>
							<div class="span11">
								<textarea class="ckeditor" name="newsDes"
									placeholder="Meta keywords..."><?= $cateDetail->newsDes ?></textarea>
							</div>
							<div class="clear"></div>
						</div>
						
						<div class="row-form">
							<div class="span3">Hiển thị trả lời</div>
							<div class="span9">
								<select name="isview">
									<option value="1">Hiển thị</option>
									<option value="0">Tạm khóa</option>
								</select>
							</div>
							<div class="clear"></div>
						</div>
						
						<div class="row-form">
							<div class="span3">Trạng thái:</div>
							<div class="span9">
								<label><input type="radio" name="status" value="1" <?php if($cateDetail->status == 1){ echo "checked";}?>></input>Hiện</label>
								<label><input type="radio" name="status" value="2" <?php if($cateDetail->status == 2){ echo "checked";}?>></input>Ẩn</label>
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
