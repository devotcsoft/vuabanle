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
			<li class="active">Danh mục sản phẩm</li>
		</ul>
	</div>
	<div class="workplace">
		<div class="row-fluid">
			<div class="span12">
				<div class="head">
					<div class="isw-documents"></div>
					<h1>Thêm mới danh mục sản phẩm</h1>
					<div class="clear"></div>
				</div>
				<form accept-charset="utf-8" method="post"  id="contact" action="<?php echo base_url('admincp/category/add');?>">
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
							<div class="span3">Tên danh mục</div>
							<div class="span9">
								<input type="text" placeholder="Tên danh mục" class="required"  value=""
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
                            <div class="span3">Thuộc menu cha </div>
                            <div class="span9">
                            	
                                <select name="parentID" id="menu_type">
                                	<option value="0">Chọn menu cha</option>
                                	<?php
									foreach ($getMenulv2 as $key => $value){
										if($value['parent'] == 0){
											echo "<option value=".$value['id'].">". $value['name'] ."</option>";
											$id = $value['id'];
											foreach ($getMenulv2 as $key => $value1) {
												if($value1['parent'] == $id){
													echo "<option value=". $value1['id']. "> --- ". $value1['name'] ."</option>";
												}
											}
										}
										 
									}
									
									?>
                                </select>
                            </div>
                            <div class="clear"></div>
                        </div>
                        
                        
						<div class="row-form">
							<div class="span3">Ảnh POPUP</div>
							<div class="span6">
								<input id="img1" name="posup" type="text" size="60" />
									
							</div>
							<div class="span2">
								<input type="button" class="btn btn-info" value="Browse Server" onclick="BrowseServer( 'Images:/', 'img1' );" />
							</div>
							
							<div class="clear"></div>
						</div>
						
						<div class="row-form">
							<div class="span3">Ảnh Quảng cáo</div>
							<div class="span6">
								<input id="img2" name="anhngoai" type="text" size="60" />
									
							</div>
							<div class="span2">
								<input type="button" class="btn btn-info" value="Browse Server" onclick="BrowseServer( 'Images:/', 'img2' );" />
							</div>
							
							<div class="clear"></div>
						</div>
						
						<div class="row-form">
							<div class="span3">Ảnh</div>
							<div class="span6">
								<input id="img3" name="catImage" type="text" size="60" />
									
							</div>
							<div class="span2">
								<input type="button" class="btn btn-info" value="Browse Server" onclick="BrowseServer( 'Images:/', 'img3' );" />
							</div>
							
							<div class="clear"></div>
						</div>
						
						<div class="row-form">
							<div class="span3">Ảnh banner 1</div>
							<div class="span6">
								<input id="img4" name="imageBanner1" type="text" size="60" />
									
							</div>
							<div class="span2">
								<input type="button" class="btn btn-info" value="Browse Server" onclick="BrowseServer( 'Images:/', 'img4' );" />
							</div>
							
							<div class="clear"></div>
						</div>
						
						<div class="row-form">
							<div class="span3">Ảnh banner 2</div>
							<div class="span6">
								<input id="img5" name="imageBanner2" type="text" size="60" />
									
							</div>
							<div class="span2">
								<input type="button" class="btn btn-info" value="Browse Server" onclick="BrowseServer( 'Images:/', 'img5' );" />
							</div>
							
							<div class="clear"></div>
						</div>
						
						<div class="row-form">
							<div class="span3">URL ảnh banner 1</div>
							<div class="span9">
								<input type="text" placeholder="URL ảnh banner 1"   value=""
									name="urlBanner1"  />
							</div>
							<div class="clear"></div>
						</div>
						
						<div class="row-form">
							<div class="span3">URL ảnh banner 2</div>
							<div class="span9">
								<input type="text" placeholder="URL ảnh banner 2"   value=""
									name="urlBanner2"  />
							</div>
							<div class="clear"></div>
						</div>
						
						<div class="row-form">
							<div class="span3">Nội dung danh mục</div>
							<div class="span9">
								<textarea class="ckeditor" name="content"
									placeholder="Nội dung danh mục"></textarea>
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
							<div class="span3">Meta keywords</div>
							<div class="span9">
								<textarea class="" name="metaKey"
									placeholder="Meta keywords..."></textarea>
							</div>
							<div class="clear"></div>
						</div>
						<div class="row-form">
							<div class="span3">Trạng thái:</div>
							<div class="span3">
								<label><input type="radio" name="status" value="1" checked>Hiện</label>
								<label><input type="radio" name="status" value="2" />Ẩn</label>
							</div>
							
                            
                            <div class="span1">Hiển thị ở trnag chủ:</div>
							<div class="span3">
								<label><input type="radio" name="athome" value="1" />Có</label>
								<label><input type="radio" name="athome" value="2" checked />Không</label>
							</div>
							<div class="clear"></div>
						      </div>
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
