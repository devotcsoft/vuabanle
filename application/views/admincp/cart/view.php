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
			<li class="active">Hóa đơn mua hàng/li>
		</ul>
	</div>
	<div class="workplace">
		<div class="row-fluid">
			<div class="span6">
				<div class="head">
					<div class="isw-documents"></div>
					<h1>Hóa đơn mua hàng</h1>
					<div class="clear"></div>
				</div>
				<form accept-charset="utf-8" method="post"  id="contact" action="<?php echo base_url('admincp/cart/view').'/'.$cateDetail->cartID;?>">
					<input name="cartID" type="hidden" value="<?= $cateDetail->cartID ?>" >
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
							<div class="span3">Người đặt mua</div>
							<div class="span9">
								<?= $cateDetail->cartName ?>
							</div>
							<div class="clear"></div>
						</div>
					
						<div class="row-form">
							<div class="span3">Điện thoại liên lạc</div>
							<div class="span9">
									<?= $cateDetail->cartPhoneNumber ?>
							</div>
							<div class="clear"></div>
						</div>
						
							<div class="row-form">
							<div class="span3">Email </div>
							<div class="span9">
									<?= $cateDetail->cartEmail ?>
							</div>
							<div class="clear"></div>
						</div>
							<div class="row-form">
							<div class="span3">Địa chỉ nhận hàng</div>
							<div class="span9">
									<?= $cateDetail->cartAddress ?>
							</div>
							<div class="clear"></div>
						</div>
							<div class="row-form">
							<div class="span3">Điện thoại liên lạc</div>
							<div class="span9">
									<?= $cateDetail->cartPhoneNumber ?>
							</div>
							<div class="clear"></div>
						</div>
						<!-- 
						<div class="row-form">
							<div class="span3">Ghi chú</div>
							<div class="span9">
									<?= $cateDetail->cartShip ?>
							</div>
							<div class="clear"></div>
						</div> 
						-->
							<div class="row-form">
							<div class="span3">Hình thức giao nhận</div>
							<div class="span9">
									<?php
										if($cateDetail->gender == 1 ){
											echo "COD thanh toán tiền mặt khi nhận hàng.";
										}else if($cateDetail->gender == 2){
											echo " Chuyển khoản/nộp tiền vào tài khoản ngân hàng.";
										} 
									?>
							</div>
							<div class="clear"></div>
						</div>
						<div class="row-form">
							<div class="span3">Trạng thái:</div>
							<div class="span9">
								<select name="status">
									<option value="1" <?php if($cateDetail->status == 1){ echo "selected = selected";}?>>Đã xác nhận</option>
									<option value="2" <?php if($cateDetail->status != 1){ echo "selected = selected";}?>>Chưa xác nhân</option>
								</select>
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
			
			
			<div class="span6">
				<div class="head">
					<div class="isw-documents"></div>
					<h1>Thôn tin sản phẩm</h1>
					<div class="clear"></div>
				</div>
				<div class="block-fluid table-sorting">
                        <table cellpadding="0" cellspacing="0" width="100%" class="table" id="tSortable_2">
                            <thead>
                                <tr>
                                    <th width="5%">STT</th>
                                    <th width="20%">Tên sản phẩm</th>
                                    <th width="20%">Giá</th>
                                    <th width="15%">Số lượng</th>
                                    <th width="20%">Tổng tiền</th>                                    
                                </tr>
                            </thead>
                            <tbody>
                            	<?php $total = 0; $i = 1 ;?>	
                                <?php foreach($productAll as $idx => $val){?>
									<tr class="<?= $idx % 2 == 0? 'odd': 'event'  ?>>">
										<td><?=  $i ?></td>
										<td><a href="<?= base_url($val['seo_name']).'.html'  ?>" target="_bank"><?= $val['productName'] ?></a></td>
										<td><?= $val['gia'] ?></td>
										<td><?= $val['detailNumber'] ?></td>
										<td><?= Utility_model::price_format($val['gia']*$val['detailNumber']) ?> VNĐ</td>
										<?php
										$total = $total + $val['gia']*$val['detailNumber'] + $val['cod'];
										$i++;
										?>
									</tr>
								<?php } ?>
                                                
                            </tbody>
                        </table>
                        <div class="row-form">
                                <div class="span3">Phí vận chuyển là: </div>
                                <div class="span3">
                                    <?= $val['cod']?>                      
                                </div>
							<div class="span3">Tổng số tiền là : </div>
								<div class="span3">
									<?php echo Utility_model::price_format($total); ?>						
								</div>
							<div class="clear"></div>
						</div>
                        <div class="clear"></div>
                 </div>
				
				
			</div>
			
		</div>
	</div>
</div>
