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
			<li class="active">Cấu hình website</li>
		</ul>
	</div>
	<div class="workplace">
		<div class="row-fluid">
			<div class="span12">
				<div class="head">
					<div class="isw-documents"></div>
					<h1>Cấu hình website</h1>
					<div class="clear"></div>
				</div>
				<form accept-charset="utf-8" method="post"  id="contact" action="<?php echo base_url('admincp/config/edit').'/'.$config->config_id;?>">
					<input name="catID" type="hidden" value="<?= $config->config_id ?>" >
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
							<div class="span3">Tên đơn vị</div>
							<div class="span9">
								<input type="text" placeholder="Tên đơn vị " class="required"  value="<?= $config->owner_name; ?>"
									name="owner_name" id="owner_name" />
							</div>
							<div class="clear"></div>
						</div>
						<div class="row-form">
							<div class="span3">Logo</div>
							<div class="span9">
								<div class="span7">
								<input id="posup" name="site_logo" type="text" size="60" />
								</div>
								<div class="span2">
								<input type="button" placeholder="<?php echo base_url().$config->site_logo ?>" class="btn btn-info" value="Browse Server" onclick="BrowseServer( 'Images:/', 'site_logo' );" />
								</div>
								<div class="2">
									<img alt="" src="<?php echo base_url().$config->site_logo ?>">
								</div>
							</div>
							<div class="clear"></div>
						</div>
					
						<div class="row-form">
							<div class="span3">Số điện thoại</div>
							<div class="span9">
								<input type="text" placeholder="Tên danh mục" class="required"  value="<?= $config->owner_phone; ?>"
									name="owner_phone" id="owner_phone" />
							</div>
							<div class="clear"></div>
						</div>
						<div class="row-form">
							<div class="span3">Fax</div>
							<div class="span9">
								<input type="text" placeholder="Tên danh mục" class="required"  value="<?= $config->owner_name; ?>"
									name="catName" id="catName" />
							</div>
							<div class="clear"></div>
						</div>
						<div class="row-form">
							<div class="span3">Hotline</div>
							<div class="span9">
								<input type="text" placeholder="Hotline" class="required"  value="<?= $config->owner_fax; ?>"
									name="owner_fax" id="owner_fax" />
							</div>
							<div class="clear"></div>
						</div>
						<div class="row-form">
							<div class="span3">Email</div>
							<div class="span9">
								<input type="text" placeholder="Mail" class="required"  value="<?= $config->owner_email; ?>"
									name="owner_email" id="owner_email" />
							</div>
							<div class="clear"></div>
						</div>
						<div class="row-form">
							<div class="span3">Website</div>
							<div class="span9">
								<input type="text" placeholder="Tên danh mục" class="required"  value="<?= $config->owner_web; ?>"
									name="owner_web" id="owner_web" />
							</div>
							<div class="clear"></div>
						</div>
						<div class="row-form">
							<div class="span3">Chữ chạy</div>
							<div class="span9">
								<input type="text" placeholder="Tên danh mục" class="required"  value="<?= $config->site_link; ?>"
									name="site_link" id="site_link" />
							</div>
							<div class="clear"></div>
						</div>
						<div class="row-form">
							<div class="span3">Tiêu đề metatag</div>
							<div class="span9">
								<textarea class="" name="site_title"
									placeholder="Meta Description..."><?= $config->site_title; ?></textarea>
							</div>
							<div class="clear"></div>
						</div>
						<div class="row-form">
							<div class="span3">Meta description</div>
							<div class="span9">
								<textarea class="" name="site_describe"
									placeholder="Meta Description..."><?= $config->site_describe; ?></textarea>
							</div>
							<div class="clear"></div>
						</div>
						<div class="row-form">
							<div class="span3">Meta Keywords </div>
							<div class="span9">
								<textarea class="" name="site_keyword"
									placeholder="Meta Description..."><?= $config->site_keyword; ?></textarea>
							</div>
							<div class="clear"></div>
						</div>
						<div class="row-form">
							<div class="span3">Thông tin công ty</div>
							<div class="span9">
								<textarea class="ckeditor" name="site_contactcontent"
									placeholder="Meta Description..."><?= $config->site_contactcontent; ?></textarea>
							</div>
							<div class="clear"></div>
						</div>
						<div class="row-form">
							<div class="span3">Site FooterNhập thông tin chân trang</div>
							<div class="span9">
								<textarea class="ckeditor" name="site_footer"
									placeholder="Meta Description..."><?= $config->site_footer; ?></textarea>
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
