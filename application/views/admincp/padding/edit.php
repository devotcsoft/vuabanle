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
			<li><a href="<?php echo base_url().'admincp/padding/'?>">Quản trị quảng cáo</a> <span class="divider">&gt;</span></li>
			<li class="active">Danh mục quảng cáo</li>
		</ul>
	</div>
	<div class="workplace">
		<div class="row-fluid">
			<div class="span12">
				<div class="head">
					<div class="isw-documents"></div>
					<h1>Sửa chuyên mục quảng cáo </h1>
					<div class="clear"></div>
				</div>
				<?php $id = $this->uri->segment(4);
				?>
				<form accept-charset="utf-8" method="post"  action="<?php echo base_url().'admincp/padding/edit/'.$id;?>" >
					<div class="block-fluid">
						<div class="row-form">
							<div class="span3">Tên danh mục</div>
							<div class="span9">
								<input type="text" value="<?php echo $info['name'];?>" name="name" id="catName" />
							</div>
							<div class="clear"></div>
						</div>
						
						<div class="row-form">
							<div class="span3">Kiểu</div>
							<div class="span9">
								<label><input type="radio" name="type" <?php if($info['type'] == 0){ echo "checked";}?>  value="0" ></input>Kiểu hình ảnh</label>
								<label><input type="radio" name="type"  <?php if($info['type'] == 1){ echo "checked";}?> value="1" ></input>Kiểu sản phẩm</label>
								<label><input type="radio" name="type"  <?php if($info['type'] == 2){ echo "checked";}?> value="2" ></input>Quảng cáo bên trái</label>
								<label><input type="radio" name="type"  <?php if($info['type'] == 3){ echo "checked";}?> value="3" ></input>Quảng cáo bên phải</label>
							</div>
							<div class="clear"></div>
						</div>
					
						<div class="row-form">
							<div class="span3">URL</div>
							<div class="span9">
								<input type="text"	name="url" id="keypage" value="<?php echo $info['url'];?>"/>
							</div>
							<div class="clear"></div>
						</div>
						
						
						<div class="row-form">
							<div class="span3">Ảnh </div>
							<div class="span6">
								<input id="img1" name="image" type="text" size="60" value="<?php echo $info['image'];?>"/>
									
							</div>
							<div class="span2">
								<input type="button" class="btn btn-info" value="Browse Server" onclick="BrowseServer( 'Images:/', 'img1' );" />
							</div>
							
							<div class="clear"></div>
						</div>
						
						<div class="row-form">
							<div class="span3">Tên sản phẩm</div>
							<div class="span9">
								<input type="text" placeholder="Tên sản phẩm" 
									name="productName" value="<?php echo $info['productName'];?>" id="catName" />
							</div>
							<div class="clear"></div>
						</div>
						<div class="row-form">
							<div class="span3">Giá sản phẩm</div>
							<div class="span9">
								<input type="text" placeholder="Giá sản phẩm" 
									name="productPrice" value="<?php echo $info['productPrice'];?>" id="catName" />
							</div>
							<div class="clear"></div>
						</div>
						<div class="row-form">
							<div class="span3">Thời gian(Năm /Tháng/ Ngày giờ:phút:giây)</div>
							<div class="span9">
								<input type="text" placeholder="Năm /Tháng/ Ngày giờ:phút:giây" 
									name="productTime" id="catName" value="<?php echo $info['productTime'];?>" />
							</div>
							<div class="clear"></div>
						</div>
						<div class="row-form">
							<div class="span3">STT</div>
							<div class="span9">
								<input type="text" placeholder="" 
									name="stt" id="catName" />
							</div>
							<div class="clear"></div>
						</div>	
					
						<div class="row-form">
							<p>
									<button class="btn" type="submit" id="add">Cập nhập</button>
								</p>
								</form>
							<div class="clear"></div>
						</div>
				
				</div>
					</div>
			</div>
		</div>
	</div>
</div>
