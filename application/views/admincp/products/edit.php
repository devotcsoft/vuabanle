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
			<li class="active">Danh sách sản phẩm</li>
		</ul>
	</div>
	<div class="workplace">
		<div class="row-fluid">
			<div class="span12">
				<div class="head">
					<div class="isw-documents"></div>
					<h1>Sửa thông sin sản phẩm</h1>
					<div class="clear"></div>
				</div>
				<form accept-charset="utf-8" method="post"  id="contact" action="<?php echo base_url('admincp/products/edit')."/".$productDetail->productID;?>">
					<input type="hidden" name="productID" value="<?=  $productDetail->productID ?>">
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
							<div class="span2">Tên sản phẩm</div>
							<div class="span6">
								<input type="text" placeholder="Tên sản phẩm" class="required"  value="<?= $productDetail->productName ?>"
									name="productName" id="productName" />
							</div>
							<div class="span2">Thuộc menu cha </div>
                            <div class="span3">
                            	
                                <select name="catID" id="catID">
                                	<?php
									foreach ($getMenulv2 as $key => $value){
										if($value['parent'] == 0){ ?>
											<option value="<?= $value['id']?>" <?php if($productDetail->catID == $value['id'] ){ echo 'selected="selected"';} ?> ><?= $value['name']?></option>
											<?php 
											$id = $value['id'];
											foreach ($getMenulv2 as $key => $value1) {
												if($value1['parent'] == $id){ ?>
													<option value="<?= $value1['id'] ?>" <?php if($productDetail->catID == $value1['id'] ){ echo 'selected="selected"';} ?>   >--- <?= $value1['name'] ?></option>
													<?php 
													$id1 =  $value1['id'];
                                					foreach ($getMenulv2 as $key => $value2) {
                                						if($value2['parent'] == $id1){ ?>
                                							<option value="<?= $value2['id'] ?>" <?php if($productDetail->catID == $value2['id'] ){ echo 'selected="selected"';} ?> > ------ <?= $value2['name'] ?></option>
                                						<?php }
                                					}
	                                				?>
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
							<div class="span2">URL SEO</div>
							<div class="span4">
								<input type="text" placeholder="URL SEO" class="required"  value="<?= $productDetail->seo_name ?>"
									name="seo_name" id="seo_name" />
							</div>
							<div class="span1 price1l">(%)</div>
							<div class="span1 price1">
								<input type="text" placeholder="Giảm giá %"  value="<?= $productDetail->giamgia ?>"
									name="giamgia" id="giamgia" readonly="readonly" />
							</div>
							<div class="span2">Mã sản phẩm</div>
							<div class="span3">
								<input type="text" placeholder="Mã sản phẩm" "  value="<?= $productDetail->productCode ?>"
									name="productCode" id="productCode" />
							</div>
							<div class="clear"></div>
						</div>
						
						<div class="row-form price">
							<div class="span2 price1l">Giá sản phẩm</div>
							<div class="span2 price1">
								<input type="text" placeholder="Giá sản phẩm" class="required"  value="<?= $productDetail->gia ?>"
									name="gia" id="gia" />
							</div>
							<div class="span2 price1l" >Giá giảm </div>
							<div class="span2 price1">
								<input type="text" placeholder="Giá sau khi giảm"  value="<?php echo $productDetail->giagiam; ?>"
									name="giagiam" id="giagiam" />
							</div>
							<div class="span2 price1l">HT giao nhận</div>
							<div class="span3 price1">
								<input type="text" placeholder="Hình thức giao nhận"  value="<?= $productDetail->hinhthucgiaonhan ?>"
									name="hinhthucgiaonhan" id="hinhthucgiaonhan" />
							</div>
							<div class="clear"></div>
						</div>
						
						<div class="row-form price">
							<div class="span2 price1l">Bảo hành</div>
							<div class="span2 price1">
								<input type="text" placeholder="Bảo hành" value="<?= $productDetail->baohanh ?>"
									name="baohanh" id="baohanh" />
							</div>
							<div class="span2 price1l" >Chất liệu</div>
							<div class="span2 price1">
								<input type="text" placeholder="Chất liệu sản phẩm" value="<?= $productDetail->chatlieu ?>"
									name="chatlieu" id="chatlieu" />
							</div>
							<div class="span2 price1l" >Tình trạng hàng</div>
							<div class="span3 price1">
								<select name="tinhtranghang" id="tinhtranghang">
                                	<option value="1" <?php if($productDetail->tinhtranghang == 1){ echo 'selected="selected"';} ?>> Còn hàng</option>
									<option value="2" <?php if($productDetail->tinhtranghang == 2){ echo 'selected="selected"';} ?>>Hết hàng</option>
									<option value="3" <?php if($productDetail->tinhtranghang == 3){ echo 'selected="selected"';} ?>>Sắp có hàng</option>
                                </select>
							</div>
							<div class="clear"></div>
						</div>
						
						<div class="row-form price">
							<div class="span2 price1l">Kích thước</div>
							<div class="span2 price1">
								<input type="text" placeholder="Kích thước sản phẩm"  value="<?= $productDetail->kichthuoc ?>"
									name="kichthuoc" id="kichthuoc" />
							</div>
							<div class="span2 price1l" >Xuất xứ</div>
							<div class="span2 price1">
								<input type="text" placeholder="Xuất xứ sản phẩm" class=""  value="<?= $productDetail->xuatxu ?>"
									name="xuatxu" id="xuatxu" />
							</div>
							<div class="span2 price1l">Thương hiệu</div>
							<div class="span3">
                                <select name="thuonghieuID" id="thuonghieuID" class="">
                                	<?php foreach ($getAllbrand as $getAllbran): ?>
                                	<option value="<?= $getAllbran['catID'] ?>" <?php if($productDetail->thuonghieuID ==$getAllbran['catID']){ echo "selected=selected";}?>><?= $getAllbran['catName'] ?></option>
                                	<?php endforeach; ?>
                                </select>
							</div>
							<div class="clear"></div>
						</div>
						
						<div class="row-form">
							<div class="span2">SP bao gồm</div>
							<div class="span4">
								<textarea class="" name="spbaogom"
									placeholder="Phần sản phẩm bao gồm..."><?php echo $productDetail->spbaogom; ?></textarea>
							</div>
							<div class="span2">Ảnh đại diện</div>
							<div class="span3">
								<input id="productImage" name="productImage" type="text" size="60" value="<?= $productDetail->productImage ?>" />
							</div>
							<div class="span2">
								<input type="button" class="btn btn-info" value="Browse Server" onclick="BrowseServer( 'Images:/', 'productImage' );" />
							</div>
							<div class="clear"></div>
						</div>
                        <?php
                        $file_id  = count(unserialize($productDetail->galleryImage));
                        ?>
                        <script type="text/javascript">
							$(document).ready(function(){
								var file_id = <?= $file_id + 1 ?>;
								$("#btnimg").click(function(){
									html1 = "<div id='wap'><div class='span3'>Ảnh sản phẩm " + file_id + "</div>";
									html2 =  "<div class='span5 delimgtop'>";
									html3 = "<input id='img" + file_id + "' name='image_url[]' type='text' size='60' />";
									html4 = "</div>";
									html5 = "<div class='span2'>";
									html7 = "<input type='button' class='btn btn-info' value='Tìm ảnh' onclick=BrowseServer('Images:/','img"+file_id+"'";
									htmla = ") /><input type='button' id='xoaimg' class='btn btn-warning delbtn' value='xoa'>";
									html8 = "</div></div>";
									$('.addimg').append(html1+html2+html3+html4+html5+html7+htmla+html8);
									file_id ++;
								});								

								$('.addimg').on('click', '#xoaimg', function(){
                               		$(this).closest('#wap').remove();
                                });
							});
							

						</script>
					
						<div class="row-form ">
							<div class="span2 min">	<input type="button" id="btnimg" class="btn btn-info" value="Thêm ảnh" /></div>
								<div class="addimgtop">
									<div class="row-form1 addimg">
										<?php
										 if( unserialize($productDetail->galleryImage) != null ||   unserialize($productDetail->galleryImage) != '')
                                         {
										 $i = 1;
										 foreach ( unserialize($productDetail->galleryImage) AS $img) { ?>
										 	<?php if($i == 1){ ?>
										 	      <div id="wap">
										 		<div id="galleryImage1">
											 		<div class="span3">Ảnh sản phẩm <?= $i ?></div>
													<div class="span5">
														<input id="img<?= $i ?>" name="image_url[]" type="text" size="60" value="<?= $img['image_url'] ?>" />
													</div>
													<div class="span2">
														<input type="button" class="btn btn-info" value="Tìm ảnh" onclick="BrowseServer( 'Images:/', 'img<?= $i ?>');" />
														<input type='button' id='xoaimg' class='btn btn-warning delbtn' value='xoa'>
													</div>
												</div>
												</div>
										 	<?php }else { ?>
										 	      <div id="wap">
										 			<div class="span3">Ảnh sản phẩm <?= $i ?></div>
													<div class="span5">
														<input id="img<?= $i ?>" name="image_url[]" type="text" size="60" value="<?= $img['image_url'] ?>" />
													</div>
													<div class="span2">
														<input type="button" class="btn btn-info" value="Tìm ảnh" onclick="BrowseServer( 'Images:/', 'img<?= $i ?>');" />
														<input type='button' id='xoaimg' class='btn btn-warning delbtn' value='xoa'>
													</div>
													</div>
										 	<?php }?>
											<?php $i++ ?>
										<?php }}else {
										    echo "Bạn chưa có ảnh Gallery";
										} ?>
										<div class='clear'></div>
									</div>
									<div class='clear'></div>
								</div>
						</div>
						
						<div class="row-form">
							<div id="titletkithuat">Thông số kĩ thuật:</div>
							<div class="span12">
								<textarea class="ckeditor" name="productDetail"
									placeholder="Nhập thông tin chi tiết...">
									<?=  html_entity_decode(stripslashes($productDetail->productDetail),ENT_COMPAT, 'UTF-8'); ?>
							</textarea>
							</div>
							<div class="clear"></div>
						</div>
						<div class="row-form">
							<div class="span3">Thông số kĩ thuật:</div>
							<div class="span12">
								<textarea class="ckeditor" name="metaAuthor"
									placeholder="Nhập thông tin chi tiết..."><?= $productDetail->metaAuthor ?></textarea>
							</div>
							<div class="clear"></div>
						</div>
						
						<div class="row-form">
							<div class="span1">Meta Title</div>
							<div class="span5">
								<input type="text" placeholder="Meta Title" class="required"  value="<?= $productDetail->metaTitle ?>"
									name="metaTitle" id="metaTitle" />
							</div>
							<div class="span1 price1l">Ẩn hiện</div>
							<div class="span5">
                                <select name="status" id="status">
                                	<option value="1" <?php if($productDetail->status == 1){ echo 'selected="selected"';} ?>>Hiện</option>
									<option value="2" <?php if($productDetail->status == 2 || $productDetail->status != 1 ){ echo 'selected="selected"';} ?>>Ẩn</option>
                                </select>
							</div>
							<div class="clear"></div>
						</div>
						
						<div class="row-form">
							<div class="span1">Meta Description</div>
							<div class="span5">
								<textarea class="" name="metaDes"
									placeholder="Meta Description..."><?= $productDetail->metaDes ?></textarea>
							</div>
							<div class="span1">Meta keywords</div>
							<div class="span5">
								<textarea class="" name="metaKey"
									placeholder="Meta keywords..."><?= $productDetail->metaKey ?></textarea>
							</div>
							<div class="clear"></div>
						</div>
						
						<div class="row-form">
							<div class="span1">Giao hàng</div>
							<div class="span3">
								<input type="text" placeholder="Giao hàng tại đâu"  value="<?= $productDetail->ghod ?>" name="ghod" id="ghod" />
							</div>
							<script>
							$(function() {
								$( "#datepicker" ).datepicker();
							});
							</script>
							<div class="span2">Khuyến mãi</div>
							<div class="span1">
                            	<label> <input type="radio" name="sale" value="1" <?php if($productDetail->sale == 1){ echo "checked"; } ?>>Có</lable> 
                            	<label><input type="radio" name="sale" value="0"  <?php if($productDetail->sale == 0){ echo "checked"; } ?>>Không </label>
                            </div>
                            <div class="span2">Thời gian hết Khuyến mãi</div> 
                            <div class="span3"><input type="text" placeholder="Thời gian hết"  value="<?= $productDetail->saletime ?>" name="saletime" id="datepicker" /></div>
							<div class="clear"></div>
						</div>
						
						<?php if ($this->sessionAll['accUser'] == 3) { ?>
						<div class="row-form">
                            <div class="span5">Duyệt bài viết  :</div>
                            <div class="span7">
                            	<label> <input type="radio" name="adstatus" value="1" <?php if($productDetail->adstatus == 1){ echo "checked"; } ?>>Đã duyệt <br> </lable>
                            	<label> <input type="radio" name="adstatus" value="0"  <?php if($productDetail->adstatus == 0){ echo "checked"; } ?>>Chưa duyệt </label>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <?php }?>
                        
						<div class="row-form">
							<div class="span3">
								<p>
									<button class="btn btn-success" type="submit" id="contact">Cập Nhật</button>
								</p>
							</div>
							<div class="span9">
								<a href="<?php echo base_url().'admincp/products'?>" class="btn btn-info">Đóng</a>
							</div>
							
							<div class="clear"></div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
