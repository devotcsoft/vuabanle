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
        
    </head>
    <body  data-control="Index">
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
                num = num.substring(0,num.length-(4*i+3))+'.'+
                num.substring(num.length-(4*i+3));
                return (((sign)?'':'-') + num);
            }
            $( ".country" ).change(function() {
                var contry = parseInt($( ".country option:selected" ).attr("price"));
                console.log(contry);
                $('.contruy').html(contry +" VND");
                $('#phivanchuyen').val(contry);
                
                var total = parseInt($("#totalmount").val());
                var all = contry+total;
                $('.total_amount').html(formatCurrency(all)+" VND");
            });
        });
    </script>
        <!-------end#page-top--->
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
                                <a href="<?= base_url('checkout/step2') ?>" class="active">Thông tin khách hàng</a>
                               	<a href="<?= base_url('checkout/step3') ?>">Thanh toán</a>
                            </div>

                        </div>
                    </div>
                    <!-----end#shopping_header--->

                </div>
                <!-----end#header-top--->

            </div>
            <!-------end#header--->
            <div id="content">
                <div class="wrap">
                    <div class="Login-checkout">

                        <div id="custo-info">

                            <h2><span class="fontawesome-lock"></span>Thông tin khách hàng</h2>


                            
                            
                            <form action="<?php echo base_url().'checkout/step2';?>" method="POST" id="myForm">
	
                                <fieldset>
                                <?php  $session_data = $this->session->userdata('logged_in');
							        if(!$session_data) { ?>
                                    <p class="cten">
                                        <label>Nam:
                                            <input type="radio" name="gender" checked value="0">
                                        </label>
                                        <label>Nữ:
                                            <input type="radio"   name="gender" value="1">
                                        </label>
                                    </p>
                              
                                    <p>
                                        <label for="TDN">Họ và Tên(*) </label>
                                        <input type="text" id="TDN" name="fullname"  >
                                    </p>
                                     <div class="error1"><?php echo form_error('fullname'); ?></div>
                                    <p>
                                        <label for="TDN">Email(*) </label>
                                        <input type="text" id="TDN"  name="email"   >
                                    </p>
                                     <div class="error1"><?php echo form_error('email'); ?></div>
                                    <p>
                                        <label for="SDT"> Số Điện Thoại(*) </label>
                                        <input type="text" id="SDT"  name="phone" >
                                    </p>
                                     <div class="error1"><?php echo form_error('phone'); ?></div>
                                    <input type="hidden" id="phivanchuyen"  name="phivanchuyen" value="" >
                                    <div id="#all_cart">
                                        
                                    </div>
                                    
                                    <label for="country">Tỉnh/Thành Phố(*)</label>
                                    <select class="country" name="country" onblur="">
                                        <option selected="" price="0">(Vui lòng chọn tỉnh)</option>
                                        <?php foreach ($cod as $key => $value) { ?>
                                        <option price="<?= $value['value'] ?>"   value="<?= $value['id'] ?>"?><?= $value['name'] ?></option>
                                        <?php } ?>
                                    </select>
                                    
                                    
                                    <p>
                                        <label for="DC">Địa chỉ(*) </label>
                                        <input type="text" name="address" id="DC"  >
                                        
                                    </p>
                                     <div class="error1"><?php echo form_error('address'); ?></div>
                                    <?php }
                                    else{?>
                                     <p class="cten">
                                        <label>Nam:
                                            <input type="radio" name="gender" <?php if($memberdetail->gender == 0){ echo 'checked';} ?> value="0">
                                        </label>
                                        <label>Nữ:
                                            <input type="radio"  <?php if($memberdetail->gender == 1){ echo 'checked';} ?> name="gender" value="1">
                                        </label>
                                    </p>
                                   
                              
                                    <p>
                                        <label for="TDN">Họ và Tên(*) </label>
                                        <input type="text" id="TDN" name="fullname" value="<?php echo  $memberdetail->fullname;?>" >
                                    </p>
                                     <div class="error"><?php echo form_error('fullname'); ?></div>
                                    <p>
                                        <label for="TDN">Email(*) </label>
                                        <input type="text" id="TDN"  name="email"  value="<?php echo  $memberdetail->email;?>" >
                                    </p>
                                     <div class="error"><?php echo form_error('email'); ?></div>
                                    <p>
                                        <label for="SDT"> Số Điện Thoại(*) </label>
                                        <input type="text" id="SDT"  name="phone"  value="<?php echo  $memberdetail->phone;?>" >
                                    </p>
										 <div class="error"><?php echo form_error('userName'); ?></div>
                                    <label for="country">Tỉnh/Thành Phố(*)</label>
                                    <select class="country" name="country" onblur="">
                                        <option selected="" price="0">(Vui lòng chọn tỉnh)</option>
                                        <?php foreach ($cod as $key => $value) { ?>
                                        <option price="<?= $value['value'] ?>"   value="<?= $value['id'] ?>"?><?= $value['name'] ?></option>
                                        <?php } ?>
                                    </select>
                                    <p>
                                        <label for="DC">Địa chỉ(*) </label>
                                        <input type="text" name="address" id="DC" value="<?php echo  $memberdetail->address;?>" >
                                    </p>
                                     <div class="error"><?php echo form_error('address'); ?></div>
                                    <?php }?>

                                    
                                    
                                    <p>
                                    <!-- 
                                    <p>
                                        Phí vận chuyện với các hình thức thanh toán:
                                    </p>
								
                                    <div class="trans">
                                        <link href="<?= base_url('public/font-end')?>/css/tooltip.css" rel="stylesheet" type="text/css" />
                                        <script src="<?= base_url('public/font-end')?>/js/tooltip.js" type="text/javascript"></script>
                                        <label>
                                            <input type="radio" name="VC" value="COD" class="radio">
                                            <a class="tooltip" href="#demo2_tip" onmouseover="tooltip.pop(this, '#demo2_tip')">Thanh toán trực tiếp</a>
                                        </label>
                                        <label>
                                            <input type="radio" name="VC" value="Bank">
                                            <a class="tooltip" href="#demo3_tip" onmouseover="tooltip.pop(this, '#demo3_tip')">Thanh toán Smartlink</a>
                                        </label>
                                        <label>
                                            <input type="radio" name="VC" value="NL" class="radio">
                                            <a class="tooltip" href="#demo4_tip" onmouseover="tooltip.pop(this, '#demo4_tip')">Thanh toán qua ngân lượng</a>
                                        </label>
                                        <div style="display:none;">
                                            <div id="demo2_tip">
                                                <h4>Thanh thoán tiền mặt (COD)</h4>
                                                Áp dụng trong mọi trường hợp.
                                                <br>
                                                ► Với các địa điểm tại  Hà Nội: Nhân viên giao hàng của Vuabanle sẽ chuyển hàng và bạn vui lòng thanh toán trực tiếp với nhân viên giao hàng.
                                                <br>
                                                ► Với các tỉnh thành khác: Nhân viên bưu điện sẽ chuyển hàng đến tận nhà và bạn vui lòng thanh toán trực tiếp với nhân viên bưu điện.
                                            </div>
                                        </div>
                                        <div style="display:none;">
                                            <div id="demo3_tip">

                                                <h4>Thanh toán qua ngân hàng</h4>
                                                Áp dụng trong mọi trường hợp:
                                                <strong> (Giảm 20% phí giao hàng khi chọn hình thức thanh toán này)</strong>
                                                <br>
                                                Khi Vuabanle nhận được thông báo từ phía ngân hàng, chúng tôi sẽ nhanh chóng chuyển hàng cho quý khách.
                                                <br>
                                                Giá trị thanh toán bảng 100% giá trị đơn hàng + Phí giao hàng (theo bảng giá tại chính sách vận chuyển)</strong>.
                                            </div>
                                        </div>
                                        
                                        <div style="display:none;">
                                            <div id="demo4_tip">

                                                <h4>Thanh toán qua ngân lượng</h4>

                                                <p>
                                                    Áp dụng trong mọi trường hợp.
                                                </p>
                                                <p>
                                                    Khách hàng đợi chúng tôi xác nhận bên
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                     -->
                                    </p>
                                     
                                    <p>
                                        <input type="submit" value="Thanh toán" id="thanhtoan">
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
                                    <div class="plans-list3" id="total_item">
                                        <?= Utility_model::price_format($val['qty']*$val['price']).' VNĐ'; ?>
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
                                         0 VNĐ
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
