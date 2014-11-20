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
				<form accept-charset="utf-8" method="post"  id="contact" action="<?php echo base_url('admincp/contact/edit').'/'.$contact->id;?>">
					<input name="newsID" type="hidden" value="<?= $contact->id ?>" >
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
							<div class="span3">Họ và tên</div>
							<div class="span9">
								<?= $contact->fullname ?>
							</div>
							<div class="clear"></div>
						</div>
						
						<div class="row-form">
							<div class="span3">Email</div>
							<div class="span9">
								<?= $contact->email ?>
							</div>
							<div class="clear"></div>
						</div>
						
						<div class="row-form">
							<div class="span3">Số điện thoại</div>
							<div class="span9">
								<?= $contact->phone ?>
							</div>
							<div class="clear"></div>
						</div>
					
						<div class="row-form">
							<div class="span3">Địa chỉ</div>
							<div class="span9">
								<?= $contact->address ?>
							</div>
							<div class="clear"></div>
						</div>
						
						<div class="row-form">
							<div class="span3">Tiêu đề</div>
							<div class="span9">
								<?= $contact->subject ?>
							</div>
							<div class="clear"></div>
						</div>
						
						<div class="row-form">
							<div class="span3">Chi tiết bài viết</div>
							<div class="span11">
								<?= $contact->message ?>
							</div>
							<div class="clear"></div>
						</div>
						
						<div class="row-form">
							<div class="span3">Trạng thái:</div>
							<div class="span9">
								<label><input type="radio" name="status" value="0" <?php if($contact->status == 0){ echo "checked";}?>></input>Đã đọc</label>
								<label><input type="radio" name="status" value="1" <?php if($contact->status == 1){ echo "checked";}?>></input>Chưa đọc</label>
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
