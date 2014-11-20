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
			<li class="active">Quản lý tin tức</li>
		</ul>
	</div>
	<div class="workplace">
		<div class="row-fluid">
			<div class="span12">
				<div class="head">
					<div class="isw-documents"></div>
					<h1>Sửa thông tin tin tức</h1>
					<div class="clear"></div>
				</div>
				<form accept-charset="utf-8" method="post"  id="contact" action="<?php echo base_url('admincp/news/edit').'/'.$cateDetail->newsID;?>">
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
							<div class="span3">Tên tin tức </div>
							<div class="span9">
								<input type="text" placeholder="Tên tin tức" class="required"  value="<?= $cateDetail->newsTitle ?>"
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
							<div class="span3">Thuộc menu</div>
							<div class="span9">
								<select name="tieudiemID">
									<option value="0" <?php if($cateDetail->tieudiemID != "1"){ echo "selected = selected";}?>>Thuộc tiêu điểm</option>
									<option value="1" <?php if($cateDetail->tieudiemID == "1"){ echo "selected = selected";}?>>Không thuộc tiêu điểm</option>
								</select>
							</div>
							<div class="clear"></div>
						</div>
						
						
						<div class="row-form">
							<div class="span3">Ảnh đại diện</div>
							<div class="span6">
								<input id="newsImage" name="newsImage" type="text" size="60" value="<?= $cateDetail->newsImage ?>" />
							</div>
							<div class="span2">
								<input type="button" class="btn btn-info" value="BrowseServer" onclick="BrowseServer( 'Images:/', 'newsImage' );" />
							</div>
							<div class="clear"></div>
						</div>
						
						<div class="row-form">
							<div class="span3">Mô tả ngắn</div>
							<div class="span9">
								<textarea class="" name="newsDes"
									placeholder="Meta keywords..."><?= $cateDetail->newsDes ?></textarea>
							</div>
							<div class="clear"></div>
						</div>
						<div class="row-form">
							<div class="span1">Chi tiết bài viết</div>
							<div class="span11">
								<textarea class="ckeditor" name="newsContent"
									placeholder="Meta keywords..."><?= $cateDetail->newsContent ?></textarea>
							</div>
							<div class="clear"></div>
						</div>
						
						<div class="row-form">
							<div class="span3">Meta Title</div>
							<div class="span9">
								<input type="text" placeholder="Meta Title" class="required"  value="<?= $cateDetail->metaTitle ?>"
									name="metaTitle" id="metaTitle" />
							</div>
							<div class="clear"></div>
						</div>
						
						<div class="row-form">
							<div class="span3">Meta Description</div>
							<div class="span9">
								<textarea class="" name="metaDes"
									placeholder="Meta Description..."><?= $cateDetail->metaDes ?></textarea>
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
									<button class="btn btn-success" type="submit" id="contact">Updated</button>
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
