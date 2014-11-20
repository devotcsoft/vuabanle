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
			<li class="active">Trang chủ</li>
		</ul>
	</div>
	<div class="workplace">
		<div class="row-fluid">
			<div class="span12">
				<div class="head">
					<div class="isw-documents"></div>
					<h1>Thêm mới cây thư mục</h1>
					<div class="clear"></div>
				</div>
				<form accept-charset="utf-8" method="post"  id="contact" action="<?php echo base_url('admincp/athome/add');?>">
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
									name="name" id="name" />
							</div>
							<div class="clear"></div>
						</div>
						
						
						<!-- thme moi imgurl -->
						<div class="row-form">
							<div class="span3">Tên cây thư mục</div>
							<div class="span6">
								<input type="text" placeholder="nhập URL" class="required"  value=""
									name="imgurl" id="imgurl" />
								<input id="imgurl1" name="imgurl1" type="text" size="60" placeholder="nhập ảnh" />
							</div>
							<div class="span2">
								<input type="button" class="btn btn-info" value="Browse Server" onclick="BrowseServer( 'Images:/', 'imgurl1' );" />
							</div>
							<div class="clear"></div>
						</div>
						
						<!-- titlenameimglink -->
						<script type="text/javascript">
                            var file_id = 1;
                            $(document).ready(function(){
                                $("#delimgurlbrand").click(function(){
                                    html = "<div id='wadelimgurlbrand' style='float: left; width: 100%;'><div class='span3'>Logo thương hiệu " + file_id + "</div>";
                                    html +=  "<div class='span5'>";
                                    html += "<input id='imgurlbrand" + file_id + "' name='imgurlbrand[]' type='text' size='60' placeholder='URl thương hiệu ' />";
                                    html += "<input id='imgurlbrand1" + file_id + "' name='imgurlbrand1[]' type='text' size='60' placeholder='Nhập ảnh logo' />";
                                    html += "</div>";
                                    html += "<div class='span1'>";
                                    html += "</div>";       
                                    html += "<input type='button' id='delimgurlbrand' class='btn btn-warning delbtn' value='xoa'>";
                                    html += "<input type='button' class='btn btn-info' value='Browse Server' onclick=BrowseServer('Images:/','imgurlbrand1"+file_id+"') />";
                                    html += "</div></div>";
                                    $('.delimgurlbrand').append(html);
                                    file_id ++;
                                });
                                $('.delimgurlbrand').on('click', '#delimgurlbrand', function(){
                               		$(this).closest('#wadelimgurlbrand').remove();
                                });
                            });
                        </script>
                        <div class="row-form ">
                            <div class="span2 min"><input type="button" id="delimgurlbrand" class="btn btn-info" value="Logo thương hiệu" /></div>
                                <div class="namelink">
                                    <div class="row-form1 delimgurlbrand">
                                        <div class='clear'></div>
                                    </div>
                                    <div class='clear'></div>
                                </div>
                        </div>
						
						
						
						<!-- namelink -->
						<script type="text/javascript">
                            var file_id = 1;
                            $(document).ready(function(){
                                $("#namelink").click(function(){
                                    html = "<div id='wapnamelink' style='float: left; width: 100%;'><div class='span3'>Từ khóa maketing " + file_id + "</div>";
                                    html +=  "<div class='span5'>";
                                    html += "<input id='namelink" + file_id + "' name='namelink[]' type='text' size='60' placeholder='Từ khóa' />";
                                    html += "<input id='namelink1" + file_id + "' name='namelink1[]' type='text' size='60' placeholder='URL' />";
                                    html += "</div>";
                                    html += "<div class='span1'>";
                                    html += "</div>";       
                                    html += "<input type='button' id='delnamelink' class='btn btn-warning delbtn' value='xoa'>";
                                    html += "</div></div>";
                                    $('.addnamlinks').append(html);
                                    file_id ++;
                                });
                                $('.addnamlinks').on('click', '#delnamelink', function(){
                               		$(this).closest('#wapnamelink').remove();
                                });
                            });
                        </script>
                        <div class="row-form ">
                            <div class="span2 min"><input type="button" id="namelink" class="btn btn-info" value="Thêm link danh mục" /></div>
                                <div class="namelink">
                                    <div class="row-form1 addnamlinks">
                                        <div class='clear'></div>
                                    </div>
                                    <div class='clear'></div>
                                </div>
                        </div>
                        
						<!-- adslink -->
                        <div class="row-form">
							<div class="span3">Quảng cáo: </div>
							<div class="span6">
								<input type="text" placeholder="nhập URL" class="required"  value=""
									name="adslink" id="adslink" />
								<input id="adslink1" name="adslink1" type="text" size="60" placeholder="Chọn ảnh quản cáo" />
							</div>
							<div class="span2">
								<input type="button" class="btn btn-info" value="Ảnh quảng cáo" onclick="BrowseServer( 'Images:/', 'adslink1' );" />
							</div>
							<div class="clear"></div>
						</div>
						
						
						<!-- titlenameimglink -->
						<script type="text/javascript">
                            var file_id = 1;
                            $(document).ready(function(){
                                $("#titlenameimglink").click(function(){
                                    html = "<div id='waptitlenameimglink' style='float: left; width: 100%;'><div class='span3'>Sản phẩm " + file_id + "</div>";
                                    html +=  "<div class='span5'>";
                                    html += "<input id='titlenameimglink" + file_id + "' name='titlenameimglink[]' type='text' size='60' placeholder='Nhập tiêu đề ' />";
                                    html += "<input id='titlenameimglink1" + file_id + "' name='titlenameimglink1[]' type='text' size='60' placeholder='Nhập từ khóa' />";
                                    html += "<input id='titlenameimglink2" + file_id + "' name='titlenameimglink2[]' type='text' size='60' placeholder='Nhập link' />";
                                    html += "<input id='titlenameimglink3" + file_id + "' name='titlenameimglink3[]' type='text' size='60' placeholder='Nhập ảnh' />";
                                    html += "</div>";
                                    html += "<div class='span1'>";
                                    html += "</div>";       
                                    html += "<input type='button' id='deltitlenameimglink' class='btn btn-warning delbtn' value='xoa'>";
                                    html += "<input type='button' class='btn btn-info' value='Browse Server' onclick=BrowseServer('Images:/','titlenameimglink3"+file_id+"') />";
                                    html += "</div></div>";
                                    $('.titlenameimglink').append(html);
                                    file_id ++;
                                });
                                $('.titlenameimglink').on('click', '#deltitlenameimglink', function(){
                               		$(this).closest('#waptitlenameimglink').remove();
                                });
                            });
                        </script>
                        <div class="row-form ">
                            <div class="span2 min"><input type="button" id="titlenameimglink" class="btn btn-info" value="Thêm Sản phẩm" /></div>
                                <div class="namelink">
                                    <div class="row-form1 titlenameimglink">
                                        <div class='clear'></div>
                                    </div>
                                    <div class='clear'></div>
                                </div>
                        </div>
						
						<div class="row-form">
							<div class="span3">Trạng thái:</div>
							<div class="span3">
								<label><input type="radio" name="status" value="1" checked>Hiện</label>
								<label><input type="radio" name="status" value="2" />Ẩn</label>
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
