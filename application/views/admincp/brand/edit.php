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
			<li class="active">Quản lý thương hiệu</li>
		</ul>
	</div>
	<div class="workplace">
		<div class="row-fluid">
			<div class="span12">
				<div class="head">
					<div class="isw-documents"></div>
					<h1>Sửa thông tin thương hiệu</h1>
					<div class="clear"></div>
				</div>
				<form accept-charset="utf-8" method="post"  id="contact" action="<?php echo base_url('admincp/brand/edit').'/'.$cateDetail->catID;?>">
					<input name="catID" type="hidden" value="<?= $cateDetail->catID ?>" >
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
							<div class="span3">Tên Thương hiệu</div>
							<div class="span9">
								<input type="text" placeholder="Tên Thương hiệu" class="required"  value="<?= $cateDetail->catName; ?>"
									name="catName" id="catName" />
							</div>
							<div class="clear"></div>
						</div>
						
						<div class="row-form">
                            <div class="span3">Thuộc danh mục </div>
                            <div class="span9">
                                <select name="danhmucID" id="menu_type">
                                    <option value="0">Thuộc danh mục</option>
                                    <?php
                                    $getAllCategory0 = Category_model::getAllCategory0();
                                    while($cate0 = mysql_fetch_array($getAllCategory0)){ ?> 
                                        <option value="<?= $cate0['catID']?>"<?php if($cateDetail->danhmucID == $cate0['catID']){ echo "selected=selected"; } ?> ><?= $cate0['catName'] ?></option>
                                        <?php $getAllCategory1 = Category_model::getAllCateMenuParent($cate0['catID']);
                                        while($cate1 = mysql_fetch_array($getAllCategory1)){ ?>
                                            <option value="<?= $cate1['catID']?>"<?php if($cateDetail->danhmucID == $cate1['catID']){ echo "selected=selected"; } ?> >--<?= $cate1['catName'] ?></option>
                                        <?php $getAllCategory2 = Category_model::getAllCateMenuParent($cate1['catID']);
                                            while($cate2 = mysql_fetch_array($getAllCategory2)){ ?> 
                                                <option value="<?= $cate2['catID']?>"<?php if($cateDetail->danhmucID == $cate2['catID']){ echo "selected=selected"; } ?> >----<?= $cate2['catName'] ?></option>
                                         <?php }         
                                        }
                                    } ?>
                                </select>
                            </div>
                            <div class="clear"></div>
                        </div>
					
						<div class="row-form">
							<div class="span3">URL SEO</div>
							<div class="span9">
								<input type="text" placeholder="URL SEO" class="required"  value="<?= $cateDetail->keypage; ?>"
									name="keypage" id="keypage" />
							</div>
							<div class="clear"></div>
						</div>
						
						
						
						<div class="row-form">
							<div class="span3">Ảnh thương hiệu</div>
							<div class="span6">
								<input id="catImage" name="catImage" type="text" size="60" value="<?= $cateDetail->catImage; ?>"/>
									
							</div>
							<div class="span2">
								<input type="button" class="btn btn-info" value="Browse Server" onclick="BrowseServer( 'Images:/', 'catImage' );" />
							</div>
							
							<div class="clear"></div>
						</div>
						
						
						<div class="row-form">
							<div class="span3">Meta Title</div>
							<div class="span9">
								<input type="text" placeholder="Meta Title" class="required"  value="<?= $cateDetail->metaTitle; ?>"
									name="metaTitle" id="metaTitle" />
							</div>
							<div class="clear"></div>
						</div>
						
						<div class="row-form">
							<div class="span3">Meta Description</div>
							<div class="span9">
								<textarea class="" name="metaDes"
									placeholder="Meta Description..."><?= $cateDetail->metaDes; ?></textarea>
							</div>
							<div class="clear"></div>
						</div>
						
						<div class="row-form">
							<div class="span3">Meta keywords</div>
							<div class="span9">
								<textarea class="" name="metaKey"
									placeholder="Meta keywords..."><?= $cateDetail->metaKey; ?></textarea>
							</div>
							<div class="clear"></div>
						</div>
						
												
						<div class="row-form">
							<div class="span3">Vị trí</div>
							<div class="span9">
								<input type="text" placeholder="Vị trí" value="<?= $cateDetail->stt; ?>"
									name="stt" id="order" />
							</div>
							<div class="clear"></div>
						</div>
						 
						 
						 
						<div class="row-form">
							<div class="span3">Trạng thái:</div>
							<div class="span3">
								<label><input type="radio" name="status" value="1" <?php if($cateDetail->status == "1"){ echo "checked";}?> ></input>Hiện</label>
								<label><input type="radio" name="status" value="2" <?php if($cateDetail->status == "2"){ echo "checked";}?> ></input>Ẩn</label>
							</div>
							<div class="span3">Trang chủ:</div>
							<div class="span3">
								<label><input type="radio" name="athome" value="1" <?php if($cateDetail->athome == "1" && $cateDetail->athome != null ){ echo "checked";}?> ></input>Hiện</label>
								<label><input type="radio" name="athome" value="2" <?php if($cateDetail->athome == "2" && $cateDetail->athome != null){ echo "checked";}?> ></input>Ẩn</label>
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
