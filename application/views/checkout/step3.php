<!doctype html>
<html>
	 <head>
        <meta charset="utf-8">
        <title><?= $meta['title']?></title>
        <meta name="description" content="<?= $meta['description']?>">
        <meta name="keywords" content="<?= $meta['keywords']?>">
        <link rel="stylesheet" type="text/css" href="<?= base_url('public/font-end')?>/css/style.css" media="all">
        <link rel="stylesheet" type="text/css" href="<?= base_url('public/font-end')?>/css/jquery.fancybox.css">
        <link rel="stylesheet" type="text/css" href="<?= base_url('public/font-end')?>/css/magnific-popup.css">

        <script src="<?= base_url('public/font-end')?>/js/jquery-1.8.1.min.js"></script>
        <script src="<?= base_url('public/font-end')?>/js/script.js"></script>
        <script src="<?= base_url('public/font-end')?>/js/jquery.magnific-popup.js"></script>
        <script src="<?= base_url('public/font-end')?>/js/jquery.fancybox.js"></script>
        <script src="<?= base_url('public/font-end')?>/js/jquery.fancybox-media.js"></script>
    	<style type="text/css">
    	#payment-stores fieldset input[type="submit"] {
    		width: 150px;
		}
    	</style>
    	<script type="text/javascript">
    		$(document).ready(function(){
        		$(".dathang").click(function(){
            		alert("Bạn đã đặt hàng thành công ! Chúng tôi sẽ liên hệ với bạn sớm nhất");
            	});
        	});
    	</script>    
    </head>
    
	<body  data-control="Index">
		
		<div id="page-all">
			<div id="header">
			    <div id="page-top">
            <div class="pagecuston">
                <div class="wrap">
                     <ul class="menu-top">
								<li >
									<a href="<?= base_url('') ?>">Trang chủ</a>
								</li>
								<li >
									<a href="<?= base_url('huong-dan-mua-hang.html') ?>">Hướng dẫn mua hàng</a>
								</li>
								<li >
									<a href="#">Điều khoản sử dụng</a>
								</li>
							</ul>

                </div>
            </div>
        </div>
        <!-------end#page-top--->
				<div class="header_top">
					<div class="wrap">
						<div class="logo">
                            <a href="<?= base_url() ?>">
						<img src="<?= base_url('public/font-end')?>/images/logo.png"
							alt="" title="logo" /></a>
                        </div>
						<!-------end#logo--->
						<div class="shopping-check">
							 <div class="breadcrumb-top">
                                <a href="<?= base_url('checkout/step1') ?>" >Đăng nhập</a>
                                <a href="<?= base_url('checkout/step2') ?>" >Thông tin khách hàng</a>
                                <a href="<?= base_url('checkout/step3') ?>" class="active">Thanh toán</a>
                            </div>

						</div>
					</div>
					<!-----end#shopping_header--->

				</div>
				<!-----end#header-top--->
				<!--------end#nav-top---->
</div>
			</div>
			<!-------end#header--->
			<div id="content">
				<div class="wrap">

					<div class="Login-checkout">

						<div id="payment">

							<h2><span class="fontawesome-lock"></span>Chọn hình thức thanh toán</h2>

							<div class="box productTeaserBox prd-row">
								<script src="<?= base_url('public/font-end')?>/JS_stor/tabcontent.js"></script>

								<div class="header-title4">
									<ul class="tabs" data-persist="true">
										<li>

											<h4 class="lfloat "><a href="#payment-stores"> Hình thức thanh toán qua ngân hàng</a></h4>

										</li>
										<li>
											<h4 class="lfloat "><a href="#payment-at"> Hình thức thanh toán khi nhận hàng </a></h4>
										</li>
										<li>
											<h4 class="lfloat "><a href="#payment-bank"> Hình thức thanh toán  qua ngân lượng </a></h4>
										</li>
									</ul>
								</div>
								<div class="tabcontents">
									<div id="payment-at">
										<div class="content-payment spen-plus">

											<h3><a href="Detainews.html"> Bạn có thể thanh toán bằng tiền mặt cho chúng tôi khi bạn đã nhận được hàng ngay tại cửa hàng nhà bạn </a></h3>

											<form action="javascript:void(0);" method="POST">

												<fieldset>
													<p class="cten">
														<input type="checkbox" name="" value="">
														<span> Giao hàng đến cùng địa chỉ</span>
													</p>
													<p>
														<input type="checkbox" name="" value="" >
														<span>Thông tin xuất hóa đơn (nếu cần thiết)</span>
													</p>
													<p>
														<label for="TDN">Tên công ty: </label>
														<input type="TDN" id="TDN" value="" >
													</p>
													<p>
														<label for="TDN">Địa chỉ: </label>
														<input type="TDN" id="TDN" value="" >
													</p>
													<p>
														<label for="TDN">Mã số thuế: </label>
														<input type="TDN" id="TDN" value="" >
													</p>
													<p>
														<input type="submit" value="Đặt hàng " class="dathang"> 
													</p>

													<p class="text-pay">
														Bạn sẽ nhận được thông báo tình trạng đơn hàng của bạn qua mail hoặc điện thoại
													</p>
													<p>
														(*) Tôi đã đồng ý với điều khoản của vuabanle.vn
													</p>

												</fieldset>

											</form>
										</div>

									</div>
									<div id="payment-stores">
										<div class="content-payment spen-plus">

											<div class="direct">
												<h4><a href="Detainews.html">Vui lòng chuyển thanh toán tới một trong các tài khoản của chúng tôi dưới đây: </a></h4>

											</div>

											<div class="bankinh">
												<div class="row-bank">
													<div class="img-bank">
														<img src="<?= base_url('public/font-end')?>/images/vietinbank.jpg"  alt="" >
													</div>
													<div class="text-bank">

														<p>
															Ngân hàng       :Vietinbank - Chi nhánh Tây Hà Nội
														</p>
														<p>
															Tên TK             : Hoàng Văn Tạo
														</p>
														<p>
															Số TK               : 711A20921391
														</p>
													</div>

												</div>
												<div class="row-bank">
													<div class="img-bank">
														<img src="<?= base_url('public/font-end')?>/images/Logo-Vietcombank_1.jpg"  alt="" >
													</div>
													<div class="text-bank">

														<p>
															Ngân hàng       : Vietcombank Chi nhánh Thành Công
														</p>
														<p>
															Tên TK             : Nguyễn Thị Lan
														</p>
														<p>
															Số TK               : 0451001846738
														</p>
													</div>

												</div>
												<div class="row-bank">
													<div class="<?= base_url('public/font-end')?>/img-bank">
														<img src="images/Logo-Vietcombank_1.jpg"  alt="" >
													</div>
													<div class="text-bank">

														<p>
															Ngân hàng       :Vietcombank Tại sở giao dịch ngân hàng Ngoại Thương Việt Nam
														</p>
														<p>
															Tên TK             : Công ty cổ phần Smart Việt
														</p>
														<p>
															Số TK               : 0011004022432
														</p>
													</div>

												</div>
												<div class="row-bank">
													<strong> Lưu ý: </strong>
													<p>
														+ Người chuyển tiền cần cung cấp đầy đủ thông tin cá nhân cho Ngân hàng (như họ tên, địa chỉ) để tránh nhầm lẫn trong thanh toán.
													</p>
													<p>
														+ Cùng hệ thống ngân hàng: Sau 10 phút chúng tôi sẽ nhận được thông báo.
													</p>
													<p>
														+ Khác hệ thống ngân hàng: Sau 24h chúng tôi sẽ nhận được thông báo.
													</p>

												</div>

											</div>
											<form action="javascript:void(0);" method="POST">

												<fieldset>
													<p class="cten">
														<input type="checkbox" name="" value="">
														<span> Giao hàng đến cùng địa chỉ</span>
													</p>
													<p>
														<input type="checkbox" name="" value="" >
														<span>Thông tin xuất hóa đơn (nếu cần thiết)</span>
													</p>
													<p>
														<label for="TDN">Tên công ty: </label>
														<input type="TDN" id="TDN" value="" >
													</p>
													<p>
														<label for="TDN">Địa chỉ: </label>
														<input type="TDN" id="TDN" value="" >
													</p>
													<p>
														<label for="TDN">Mã số thuế: </label>
														<input type="TDN" id="TDN" value="" >
													</p>
													<p>
														<input type="submit" value="Đặt hàng" class="dathang">
													</p>

													<p class="text-res">
														Bạn sẽ nhận được thông báo tình trạng đơn hàng của bạn qua mail hoặc điện thoại
													</p>
													<p>
														(*) Tôi đã đồng ý với điều khoản của vuabanle.vn
													</p>

												</fieldset>

											</form>

										</div>
									</div>
									<div id="payment-bank">

										<div class="content-payment spen-plus">

											<h3><a href="#">Thanh toán qua ngân lượng </a></h3>
											<ul class="list-horiontal paym-list">
												<li class="pay-icon ipayVisa" title=""></li>
												<li class="pay-icon ipayMaster" title=""></li>
												<li class="pay-icon ipayCOD" title=""></li>
											</ul>
											<form action="javascript:void(0);" method="POST">

												<fieldset>
													<p class="cten">
														<input type="checkbox" name="" value="">
														<span> Giao hàng đến cùng địa chỉ</span>
													</p>
													<p>
														<input type="checkbox" name="" value="" >
														<span>Thông tin xuất hóa đơn (nếu cần thiết)</span>
													</p>
													<p>
														<label for="TDN">Tên công ty: </label>
														<input type="TDN" id="TDN" value="" >
													</p>
													<p>
														<label for="TDN">Địa chỉ: </label>
														<input type="TDN" id="TDN" value="" >
													</p>
													<p>
														<label for="TDN">Mã số thuế: </label>
														<input type="TDN" id="TDN" value="" >
													</p>
													<p>
														<input type="submit" value="Đặt hàng" class="dathang">
													</p>

													<p class="text-res">
														Bạn sẽ nhận được thông báo tình trạng đơn hàng của bạn qua mail hoặc điện thoại
													</p>
													<p>
														(*) Tôi đã đồng ý với điều khoản của vuabanle.vn
													</p>

												</fieldset>

											</form>

										</div>

									</div>
								</div>

							</div>

						</div>

						<div class="CartShop">
                            <h1>Thông tin đơn hàng</h1>
                            <div class="compare_plan">

                                <div class="plans-list">
                                    <p>
                                        Bạn đang có <span class="total"><?= $total_record ?></span> sản phẩm
                                    </p>
                                </div>

                                <div class="sho-row">
                                    <div class="plans-list1">
                                        <h3>Sản phẩm</h3>
                                    </div>
                                    <div class="plans-list2">
                                        <h3>Số lượng</h3>
                                    </div>
                                    <div class="plans-list3">
                                        <h3>Giá </h3>
                                    </div>
                                    <div class="clear-float"></div>
                                </div>
                                
                                <?php foreach($data as $idx => $val):?>
                                <div class="body-row">
                                    <input type="hidden" class="cart_row" value="<?= $val['rowid'] ?>" />
                                    <div class="plans-list1">
                                        <img src="<?= base_url($val['image']) ?>" alt="" title="" width="60px" height="60"/>
                                        <h4><?= $val['name'] ?></h4>
                                    </div>
                                    <div class="plans-list2">
                                        <label><?= $val['qty'] ?></label>
                                    </div>
                                    <input type="hidden" class="price_row" value="<?= $val['price'] ?>" />
                                    <div class="plans-list3">
                                        <?= Utility_model::price_format($val['price']).' VNĐ'; ?>
                                    </div>
                                    <div class="clear-float"></div>
                                </div>
                                <?php endforeach; ?>
                                
                                
                                <div class="control-shop">
                                    <div class="order_now1">
                                        Phí vận chuyển
                                    </div>
                                    <div class="order_now2">
                                         <span class="contruy">   
                                         <?php echo $this->input->post('phivanchuyen'); ?> VNĐ
                                         </span>
                                    </div>
                                    <div class="clear-float"></div>
                                </div>
                                <input type="hidden" id="totalmount" value="<?= $total ?>" />
                                <div class="control-suse">
                                    <div class="order_now1">
                                        Thành tiền
                                    </div>
                                    <div class="order_now2">
                                         <span class="total_amount">   
                                         <?= Utility_model::price_format($total+$this->input->post('phivanchuyen')).' VNĐ'; ?>
                                         </span>
                                    </div>
                                    <div class="clear-float"></div>
                                </div>
                            </div>
                            

                        </div>

						<div class="CartShop">
							<h1><span>Giao hàng đến </span></h1>
							<div class="compare_plan">

								<div class="plans-list">
									<p>
										<?= $this->input->post('address') ?>
									</p>
								</div>

							</div>

						</div>

					</div>

				</div>

			
			<!-----end#content----->
			<div id="footer">
				<div class="wrap">
					<!-------end.footer-top--->
					<div class="copy-footer">
						<b>ĐƯỢC VẬN HÀNH BỜI SMART VIỆT JSC</b>
						<p>
							Địa chỉ: Số 75 Trung Kính, Trung Hòa, Cầu Giấy, Hà Nội, Thành lập ngày 07 tháng 09 năm 2011, Mã số doanh nghiệp: 0105486972
						</p>
						<p>
							Điện thoại: (04) 6329 7119 | Fax: (04) 6329 7119 | Email: info@vuabanle.vn
						</p>
					</div>
					<!---------end.copy-footer--->
				</div>
			</div>
			<!-------end#footer-top------->
		</div>
		</div>
		<!-------end#page-all--->

	</body>
</html>
