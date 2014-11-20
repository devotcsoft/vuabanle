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
					<h1>Thêm mới </h1>
					<div class="clear"></div>
				</div>
				<form accept-charset="utf-8" method="post"  action="<?php echo base_url('admincp/padding/add');?>">
					<div class="block-fluid">
						<div class="row-form">
							<div class="span3">Tên danh mục</div>
							<div class="span9">
								<input type="text" placeholder="" 
									name="name" id="catName" />
							</div>
							<div class="clear"></div>
						</div>
						<div class="row-form">
							<div class="span3">Kiểu</div>
							<div class="span9">
								<label><input type="radio" name="type" value="0" checked></input>Kiểu hình ảnh</label>
								<label><input type="radio" name="type" value="1" ></input>Kiểu sản phẩm</label>
								<label><input type="radio" name="type" value="2" ></input>Quảng cáo bên trái</label>
								<label><input type="radio" name="type" value="3" ></input>Quảng cáo bên phải</label>
							</div>
							<div class="clear"></div>
						</div>
						<div class="row-form">
							<div class="span3">Tên sản phẩm</div>
							<div class="span9">
								<input type="text" placeholder="Tên sản phẩm" 
									name="productName" id="catName" />
							</div>
							<div class="clear"></div>
						</div>
						<div class="row-form">
							<div class="span3">URL</div>
							<div class="span9">
								<input type="text" 	id="keypage" name="url" />
							</div>
							<div class="clear"></div>
						</div>
						
						
						<div class="row-form">
							<div class="span3">Ảnh </div>
							<div class="span6">
								<input id="img1" name="image" type="text" size="60" />
									
							</div>
							<div class="span2">
								<input type="button" class="btn btn-info" value="Browse Server" onclick="BrowseServer( 'Images:/', 'img1' );" />
							</div>
							
							<div class="clear"></div>
						</div>
						
						
						<div class="row-form">
							<div class="span3">Giá sản phẩm</div>
							<div class="span9">
								<input type="text" placeholder="Giá sản phẩm" 
									name="productPrice" id="catName" />
							</div>
							<div class="clear"></div>
						</div>
						
						<div class="row-form">
							<div class="span3">Thời gian (Năm /Tháng/ Ngày giờ:phút:giây)</div>
							<div class="span9">
								<input type="text" placeholder="Năm /Tháng/ Ngày giờ:phút:giây" name="productTime" id="catName" />
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
									<button class="btn" type="submit" id="add">Thêm mới</button>
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