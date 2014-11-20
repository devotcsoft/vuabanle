<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title><?= $config->site_title; ?></title>
        <meta name="description" content="<?= $config->site_describe; ?>">
        <meta name="keywords" content="<?= $config->site_keyword; ?>">
		<link rel="stylesheet" type="text/css" href="<?= base_url('public/font-end')?>/css/style.css">
		<script src="<?= base_url('public/font-end')?>/js/jquery-1.8.1.min.js"></script>
		<style type="text/css">
		.lbmuahang {
		    height: 34px;
		    width: 212px !important;
		}
		#Login-check fieldset a.connext {
			width: 300px;
		}
		</style>
	</head>
	<body >
	
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
								<a href="<?= base_url('checkout/step1') ?>" class="active">Đăng nhập</a>
								<a href="<?= base_url('checkout/step2') ?>">Thông tin giao hàng</a>
								<a href="<?= base_url('checkout/step3') ?>">Thanh toán</a>
							</div>

						</div>
					</div>
					<!-----end#shopping_header--->

				</div>
				<!-----end#header-top--->
				<!--------end#nav-top---->

			</div>
			<!-------end#header--->
			<div id="content">
				<div class="wrap">
					<div class="Login-checkout">

						<div id="Login-check">

							<h2><span class="fontawesome-lock"></span>Vui lòng đăng nhập trước khi mua hàng</h2>

							<form action="<?= base_url('checkout/step1'); ?>" method="POST">

								<fieldset>
									<p>
									<?php echo validation_errors(); ?> 
									</p>
									<p>
										<label for="TDN">E-mail (*)  </label>
										<input type="TDN" id="TDN" name="email" value="<?php echo set_value('email'); ?>" >
									</p>
									<p>
										<label for="password">Mật Khẩu (*)</label>
										<input type="password" id="password" name="password">
									</p>

									<p class="text-res">
										<label> <a href="#">Quên mật khẩu?</a></label>
                                        <label><a href="<?= base_url('dang-ky.html'); ?>">Đăng ký</a></label>
									</p>
									<p class="bot">
										<label>
											<input type="submit" value="Đăng nhập">
										</label>
										<label class="lbmuahang">
										     <a  class="connext" href="<?= base_url('checkout/step2').'.html' ?>">Mua hàng không cần đăng ký</a>
										</label>
									</p>

								</fieldset>

							</form>

						</div>
						<!-- end login -->

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
                                <script type="text/javascript">
                                    $(document).ready(function(){
                                        function formatCurrency(num) 
                                         {
                                            num = num.toString().replace(/\$|\,/g,'');
                                            if(isNaN(num))
                                            num = "0";
                                            sign = (num == (num = Math.abs(num)));
                                            num = Math.floor(num*100+0.50000000001);
                                            num = Math.floor(num/100).toString();
                                            for (var i = 0; i < Math.floor((num.length-(1+i))/3); i++)
                                            num = num.substring(0,num.length-(4*i+3))+','+
                                            num.substring(num.length-(4*i+3));
                                            return (((sign)?'':'-') + num);
                                        }
                                        $('.cart_qty').change(function() {
                                            var that = this;
                                            var target = $(that).parents('.body-row');
                                            var cartid = target.find('.cart_row').val();
                                            var cartqty = parseInt(target.find('.cart_qty').val());
                                            var price =  target.find('.price_row').val();
                                            var total_amount = price * cartqty;
                                            if(cartid != '' && cartqty > 0) {
                                                $.post('<?= base_url(); ?>cart/update',{
                                                    cartid: cartid,
                                                    qty: cartqty
                                                }, function(response){
                                                    if(response.status == 'OK') {
                                                        $('.total_amount').html(formatCurrency(response.total)+" VND");
                                                        target.find('#total_item').html(formatCurrency(total_amount) +" VND");
                                                        $('.all_cart').html(response.total_record);
                                                        $('.total').html(response.total_record);
                                                    }
                                                },'json');
                                            }
                                        });
                                       
                                    });
                                </script>
                                <?php foreach($data as $idx => $val):?>
								<div class="body-row">
								    <input type="hidden" class="cart_row" value="<?= $val['rowid'] ?>" />
									<div class="plans-list1">
										<img src="<?= base_url($val['image']) ?>" alt="" title="" width="60px" height="60"/>
										<h4><?= $val['name'] ?></h4>
									</div>
									<div class="plans-list2">
										<input type="text" value="<?= $val['qty'] ?>" class="cart_qty"/>
									</div>
									<input type="hidden" class="price_row" value="<?= $val['price'] ?>" />
									<div class="plans-list3" id="total_item">
										<?= Utility_model::price_format($val['qty']*$val['price']).' VNĐ'; ?>
									</div>
									<div class="clear-float"></div>
								</div>
								<?php endforeach; ?>
								
								
								<div class="control-shop">
									<div class="order_now1">
										Tổng cộng
									</div>
									<div class="order_now2">
									     <span class="total_amount">   
										 <?= Utility_model::price_format($total).' VNĐ'; ?>
										 </span>
									</div>
									<div class="clear-float"></div>
								</div>
								<div class="control-suse">
									<div class="order_now1">
										Thành tiền
									</div>
									<div class="order_now2">
										 <span class="total_amount">   
                                         <?= Utility_model::price_format($total).' VNĐ'; ?>
                                         </span>
									</div>
									<div class="clear-float"></div>
								</div>
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
