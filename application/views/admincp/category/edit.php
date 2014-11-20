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
				<form accept-charset="utf-8" method="post"  id="contact" action="<?php echo base_url('admincp/category/edit').'/'.$cateDetail->catID;?>">
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
							<div class="span3">Tên danh mục</div>
							<div class="span9">
								<input type="text" placeholder="Tên danh mục" class="required"  value="<?= $cateDetail->catName; ?>"
									name="catName" id="catName" />
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
                            <div class="span3">Thuộc menu cha </div>
                            <div class="span9">
                            	
                                <select name="parentID" id="menu_type">
                                	<option value="0"  <?php if($cateDetail->parentID == 0){ echo 'selected="selected"';} ?>>Chọn menu cha</option>
                                	<?php
									foreach ($getMenulv2 as $key => $value){
										if($value['parent'] == 0){ ?>
											<option value="<?= $value['id']?>" <?php if($cateDetail->parentID == $value['id'] ){ echo 'selected="selected"';} ?> ><?= $value['name']?></option>
											<?php 
											$id = $value['id'];
											foreach ($getMenulv2 as $key => $value1) {
												if($value1['parent'] == $id){ ?>
													<option value="<?= $value1['id'] ?>"   <?php if($cateDetail->parentID == $value1['id'] ){ echo 'selected="selected"';} ?>   > --- <?= $value1['name'] ?></option>
												<?php 
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
							<div class="span3">ICON</div>
							<div class="span6">
								<input id="icon" name="icon" type="text" size="60" value="<?= $cateDetail->icon; ?>"/>
									
							</div>
							<div class="span2">
								<input type="button" class="btn btn-info" value="Browse Server" onclick="BrowseServer( 'Images:/', 'icon' );" />
							</div>
							
							<div class="clear"></div>
						</div>
						<?php
						$file_id = count(json_decode($cateDetail->keymaket));
						?>
						<script type="text/javascript">
							var file_id = <?= $file_id + 1 ?>;
                            $(document).ready(function(){
                                $("#addcolor").click(function(){
                                    html1 = "<div id='wap' style='float: left; width: 100%;' ><div class='span3'>Từ khóa " + file_id + "</div>";
                                    html2 =  "<div class='span5'>";
                                    html3 = "<input placeholder='từ khóa' id='mau" + file_id + "' name='keymaketing[]' type='text' size='60' /><input placeholder='link liên kết'  id='mau" + file_id + "' name='urlmaketing[]' type='text' size='60' />";
                                    html4 = "</div>";
                                    html5 = "<div class='span2'>";
                                    html6 = "</div>";       
                                    html7 = "<input type='button' id='xoaimg' class='btn btn-warning delbtn' value='xoa'>";
                                    html8 = "</div></div>";
                                    demo = $('.addcolortxt').append(html1+html2+html3+html4+html5+html7+html8);
                                    file_id ++;
                                });
                                $('#xoaimg').die().live('click', function() {
                                    $("#wap").remove();
                                });
                            });

                        </script>
                        <div class="row-form ">
                            <div class="span2 min"><input type="button" id="addcolor" class="btn btn-info" value="Thêm từ khóa maketing" /></div>
                                <div class="addimgtop">
                                    <div class="row-form1 addcolortxt">
                                    	<?php $i = 1; 
                                    	foreach (json_decode($cateDetail->keymaket) as  $keymakets) { ?>
                                    		<div id='wap' style='float: left; width: 100%;' >
                                    			<div class='span3'>Từ khóa <?php echo $i; ?></div>
                                    			<div class='span5'>
                                    				<input placeholder='từ khóa' id='mau" + file_id + "' name='keymaketing[]' type='text' size='60' value="<?php echo $keymakets->keymaketing; ?>" />
                                    				<input placeholder='link liên kết'  id='mau" + file_id + "' name='urlmaketing[]' type='text' size='60' value="<?php echo $keymakets->urlmaketing; ?>" />
                                    			</div>	
                                    			<div class='span2'>
                                    			<input type='button' id='xoaimg' class='btn btn-warning delbtn' value='xoa'>
                                    			</div>
                                    		</div>
                                    	<?php $i++; } ?>
                                    	
                                        <div class='clear'></div>
                                         
                                    </div>
                                    <div class='clear'></div>
                                </div>
                        </div>
                        
                        <!-- thêm ảnh sản phẩm -->
                        <?php
						$file_id = count(json_decode($cateDetail->productcate));
						?>
						<script type="text/javascript">
							var file_id = <?= $file_id + 1 ?>;
                            $(document).ready(function(){
                                $("#addProductCate").click(function(){
                                    html = "<div id='wapaddProductCate' style='float: left; width: 100%;' ><div class='span3'>Từ khóa " + file_id + "</div>";
                                    html +=  "<div class='span5'>";
                                    //html += "<input placeholder='từ khóa' id='sp" + file_id + "' name='keymaketing[]' type='text' size='60' /><input placeholder='link liên kết'  id='mau" + file_id + "' name='urlmaketing[]' type='text' size='60' />";
                                    html += "<input placeholder='Tên sản phẩm'  name='catUrlProduct[]' type='text' size='60'  />";
                                    html += "<input placeholder='Tên sản phẩm'  name='catNameProduct[]' type='text' size='60'  />";
                                    html += "<input placeholder='Ảnh sản phẩm'  id='sp"+file_id+"' name='catProductImg[]' type='text' size='60'  />";
                                    html += "<input placeholder='Giá sản phẩm'  id='mau" + file_id + "' name='PriceProduct[]' type='text' size='60'";
                                    html += "</div></div>";
                                    html += "<div class='span2'>";
                                    html += "<input type='button' class='btn btn-info' value='Tìm ảnh' onclick=BrowseServer('Images:/','sp"+file_id+"') />";
                                    html += "<input type='button' id='xoawapaddProductCate' class='btn btn-warning delbtn' value='xoa'>";
                                    html += "</div>";       
                                    html += "</div></div>";
                                    $('.addProductCate').append(html);
                                    file_id ++;
                                });
                                
                                $('.addProductCate').on('click', '#xoawapaddProductCate', function(){
                               		$(this).closest('#wapaddProductCate').remove();
                                });
                                
                            });

                        </script>
                        <div class="row-form ">
                            <div class="span2 min"><input type="button" id="addProductCate" class="btn btn-info" value="Thêm sản phẩm" /></div>
                                <div class="addimgtop">
                                    <div class="row-form1 addProductCate">
                                    	<?php $i = 1; 
                                    	foreach (json_decode($cateDetail->productcate) as  $productcates) { ?>
                                    		<div id='wapaddProductCate' style='float: left; width: 100%;' >
                                    			<div class='span3'>Sản phẩm <?php echo $i; ?></div>
                                    			<div class='span5'>
                                    				<input placeholder='url sản phẩm'  name='catUrlProduct[]' type='text' size='60' value="<?php echo @$productcates->catUrlProduct; ?>" />
                                    				<input placeholder='Tên sản phẩm'  name='catNameProduct[]' type='text' size='60' value="<?php echo @$productcates->catNameProduct; ?>" />
                                    				<input placeholder='Ảnh sản phẩm'  id='sp<?php echo $i?>' name='catProductImg[]' type='text' size='60' value="<?php echo @$productcates->catProductImg; ?>" />
                                    				<input placeholder='Giá sản phẩm'  id='mau" + file_id + "' name='PriceProduct[]' type='text' size='60' value="<?php echo @$productcates->PriceProduct; ?>" />
                                    			</div>	
                                    			<div class='span2'>
                                    			<input type="button" class="btn btn-info" value="Tìm ảnh" onclick="BrowseServer( 'Images:/', 'sp<?= $i ?>');" />
                                    			<input type='button' id='xoawapaddProductCate' class='btn btn-warning delbtn' value='xoa'>
                                    			<img alt="" src="<?php echo base_url($productcates->catProductImg); ?>" width="54px" height="50px">
                                    			</div>
                                    		</div>
                                    	<?php $i++; } ?>
                                    	
                                        <div class='clear'></div>
                                         
                                    </div>
                                    <div class='clear'></div>
                                </div>
                        </div>
                        
                        <!-- Thêm ảnh quảng cáo bên ngoài -->
                        <?php
						$file_id = count(json_decode($cateDetail->imgAds));
						?>
						<script type="text/javascript">
							var file_id = <?= $file_id + 1 ?>;
                            $(document).ready(function(){
                                $("#addImagesADS").click(function(){
                                    html = "<div id='ImagesADS' style='float: left; width: 100%;' ><div class='span3'>Ảnh " + file_id + "</div>";
                                    html +=  "<div class='span5'>";
                                    html += "<input placeholder='Ảnh sản phẩm'  id='imgAds"+file_id+"' name='imgAds[]' type='text' size='60'  />";
                                    html += "<input placeholder='Link ảnh'  id='linkAd" + file_id + "' name='linkAds[]' type='text' size='60'";
                                    html += "</div></div>";
                                    html += "<div class='span2'>";
                                    html += "<input type='button' class='btn btn-info' value='Tìm ảnh' onclick=BrowseServer('Images:/','linkAd"+file_id+"') />";
                                    html += "<input type='button' id='delimgAds' class='btn btn-warning delbtn' value='xoa'>";
                                    html += "</div>";       
                                    html += "</div></div>";
                                    $('.addImagesADS').append(html);
                                    file_id ++;
                                });
                                
                                $('.addImagesADS').on('click', '#delimgAds', function(){
                               		$(this).closest('#ImagesADS').remove();
                                });
                                
                            });

                        </script>
                        <div class="row-form ">
                            <div class="span2 min"><input type="button" id="addImagesADS" class="btn btn-info" value="Thêm ảnh ngoài (ảnh quảng cáo)" /></div>
                                <div class="addimgtop">
                                    <div class="row-form1 addImagesADS">
                                    	<?php $i = 1; 
                                    	foreach (json_decode($cateDetail->imgAds) as  $imgAd) { ?>
                                    		<div id='ImagesADS' style='float: left; width: 100%;' >
                                    			<div class='span3'>Ảnh <?php echo $i; ?></div>
                                    			<div class='span5'>
                                    				<input placeholder='Ảnh sản phẩm'  id='imgAds<?php echo $i?>' name='imgAds[]' type='text' size='60' value="<?php echo @$imgAd->imgAd; ?>" />
                                    				<input placeholder='Giá sản phẩm'  id='linkAd<?php echo $i?>' name='linkAds[]' type='text' size='60' value="<?php echo @$imgAd->linkAds; ?>" />
                                    			</div>	
                                    			<div class='span2'>
                                    			<input type="button" class="btn btn-info" value="Tìm ảnh" onclick="BrowseServer( 'Images:/', 'linkAd<?= $i ?>');" />
                                    			<input type='button' id='delimgAds' class='btn btn-warning delbtn' value='xoa'>
                                    			</div>
                                    		</div>
                                    	<?php $i++; } ?>
                                        <div class='clear'></div>
                                    </div>
                                    <div class='clear'></div>
                                </div>
                        </div>
						
						<div class="row-form">
							<div class="span3">Ảnh POPUP</div>
							<div class="span6">
								<input id="img1" name="posup" type="text" size="60" value="<?= $cateDetail->posup; ?>"/>
							</div>
							<div class="span2">
								<input type="button" class="btn btn-info" value="Browse Server" onclick="BrowseServer( 'Images:/', 'img1' );" />
							</div>
							
							<div class="clear"></div>
						</div>
						
						<div class="row-form">
							<div class="span3">Ảnh Quảng cáo</div>
							<div class="span6">
								<input id="img2" name="anhngoai" type="text" size="60" value="<?= $cateDetail->anhngoai; ?>"/>
									
							</div>
							<div class="span2">
								<input type="button" class="btn btn-info" value="Browse Server" onclick="BrowseServer( 'Images:/', 'img2' );" />
							</div>
							
							<div class="clear"></div>
						</div>
						
						<div class="row-form">
							<div class="span3">Ảnh</div>
							<div class="span6">
								<input id="img3" name="catImage" type="text" size="60" value="<?= $cateDetail->catImage; ?>" />
									
							</div>
							<div class="span2">
								<input type="button" class="btn btn-info" value="Browse Server" onclick="BrowseServer( 'Images:/', 'img3' );" />
							</div>
							
							<div class="clear"></div>
						</div>
						
						<div class="row-form">
							<div class="span3">Ảnh banner 1</div>
							<div class="span6">
								<input id="img4" name="imageBanner1" type="text" size="60"  value="<?= $cateDetail->imageBanner1; ?>"/>
									
							</div>
							<div class="span2">
								<input type="button" class="btn btn-info" value="Browse Server" onclick="BrowseServer( 'Images:/', 'img4' );" />
							</div>
							
							<div class="clear"></div>
						</div>
						<div class="row-form">
							<div class="span3">Ảnh banner 2</div>
							<div class="span6">
								<input id="img5" name="imageBanner2" type="text" size="60"  value="<?= $cateDetail->imageBanner2; ?>"/>
									
							</div>
							<div class="span2">
								<input type="button" class="btn btn-info" value="Browse Server" onclick="BrowseServer( 'Images:/', 'img5' );" />
							</div>
							
							<div class="clear"></div>
						</div>
						
						<div class="row-form">
							<div class="span3">URL ảnh banner 1</div>
							<div class="span9">
								<input type="text" placeholder="URL ảnh banner 1"   value="<?= $cateDetail->urlBanner1 ; ?>"
									name="urlBanner1"  />
							</div>
							<div class="clear"></div>
						</div>
						
						<div class="row-form">
							<div class="span3">URL ảnh banner 2</div>
							<div class="span9">
								<input type="text" placeholder="URL ảnh banner 2"   value="<?= $cateDetail->urlBanner2; ?>"
									name="urlBanner2"  />
							</div>
							<div class="clear"></div>
						</div>
						
						<div class="row-form">
							<div class="span3">Nội dung danh mục</div>
							<div class="span9">
								<textarea class="ckeditor" name="content" 
									placeholder="Nội dung danh mục"><?= $cateDetail->content; ?></textarea>
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
						    <div class="span1">Hiển thị ở trnag chủ:</div>
							<div class="span3">
								<label><input type="radio" name="athome" value="1" <?php if($cateDetail->athome == "1"){ echo "checked";}?>   />Có</label>
								<label><input type="radio" name="athome" value="2" <?php if($cateDetail->athome == "2"){ echo "checked";}?>  />Không</label>
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
