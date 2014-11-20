<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Đăng nhập thanh toán</title>
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
                            <img src="<?= base_url('public/font-end')?>/images/logo.png" alt="" title="logo" />
                        </div>
                        <!-------end#logo--->
                        <div class="shopping-check">
                            <div class="breadcrumb-top">
                                <a href="<?= base_url('checkout/step1') ?>" >Đăng nhập</a>
                                <a href="<?= base_url('checkout/step2') ?>" class="active">Thông tin khách hàng</a>
                                <a href="Thanhtoan.html">Thanh toán</a>
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


                            <script>
                            $(document).ready(function(){
                                $( ".country" ).change(function() {
                                    myFunction();
                                });
                                function myFunction()
                                {
                                    document.getElementById("myForm").submit();
                                }
                            });
                            </script>
                            
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
                                    <p>
                                        <label for="TDN">Email(*) </label>
                                        <input type="text" id="TDN"  name="email"   >
                                    </p>
                                    <p>
                                        <label for="SDT"> Số Điện Thoại(*) </label>
                                        <input type="text" id="SDT"  name="phone" >
                                    </p>
                                    
                                    <div id="#all_cart">
                                        
                                    </div>
                                    <?php if(@$id){ ?>
                                        <p>
                                        <label for="country">Tỉnh/Thành Phố(*)</label>
                                        <select class="country" name="country" onblur="">
                                            <option selected="">(Vui lòng chọn Quận/Huyện)</option>
                                            <?php foreach ($cod as $key => $value) { ?>
                                            <option price="<?= $value['value'] ?>" value="<?= $value['id'] ?>"<?php if($id == $value['id']){ echo "selected=selected";} ?>><?php echo $value['name'] ?></option>
                                            <?php } ?>
                                        </select>
                                    </p>
                                    <p>
                                        <label for="acountry">Quận/Huyện (*)</label>
                                        
                                        <select name="huyen" onblur="" class="huyen">
                                            <?php foreach($huyen as $huyens): ?>
                                            <option price="<?= $huyens['value'] ?>" value="HD"><?= $huyens['name'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </p>
                                    <?php }else { ?>
                                        <p>
                                        <label for="country">Tỉnh/Thành Phố(*)</label>
                                        <select class="country" name="country" onblur="">
                                            <option selected="">(Vui lòng chọn Quận/Huyện)</option>
                                            <?php foreach ($cod as $key => $value) { ?>
                                            <option  value="<?= $value['id'] ?>"?><?= $value['name'] ?></option>
                                            <?php } ?>
                                        </select>
                                    </p>
                                    
                                    <?php } 
                                    ?>
                                    
                                    <p>
                                        <label for="DC">Địa chỉ(*) </label>
                                        <input type="text" name="address" id="DC"  >
                                    </p>
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
                                    <p>
                                        <label for="TDN">Email(*) </label>
                                        <input type="text" id="TDN"  name="email"  value="<?php echo  $memberdetail->email;?>" >
                                    </p>
                                    <p>
                                        <label for="SDT"> Số Điện Thoại(*) </label>
                                        <input type="text" id="SDT"  name="phone"  value="<?php echo  $memberdetail->phone;?>" >
                                    </p>

                                    <p>
                                        <label for="country">Tỉnh/Thành Phố(*)</label>
                                        <select name="country" onblur="">
                                            <option selected="" value="Default">(Vui lòng chọn Tỉnh/Thành phố)</option>
                                            <option value="HN">Hà Nội</option>
                                            <option value="HCM">TP Hồ Chí Minh</option>
                                            <option value="AG">An Giang</option>
                                            <option value="BV">Bà Rịa - Vũng Tàu</option>
                                            <option value="BG">Bắc Giang</option>
                                            <option value="BN">Bắc Ninh</option>
                                            <option value="BT">Bến Tre</option>
                                            <option value="BD">Bình Dương</option>
                                            <option value="BĐ">Bình Định</option>
                                            <option value="BP">Bình Phước</option>
                                            <option value="BT">Bình Thuận</option>
                                            <option value="CM">Cà Mau</option>
                                            <option value="CB">Cao Bằng</option>
                                            <option value="DN">Đà Nẵng</option>
                                            <option value="DL">Đắk Lắk</option>
                                            <option value="Dk">Đắk Nông</option>
                                            <option value="DB">Điện Biên</option>
                                        </select>
                                    </p>

                                    <p>
                                        <label for="country">Quận/Huyện (*)</label>
                                        <select name="country" onblur="">
                                            <option selected="" value="Default">(Vui lòng chọn Quận/Huyện)</option>
                                            <option value="HD">Hà Đông</option>
                                            <option value="DD">Đống Đa</option>
                                            <option value="TL">Từ Liêm</option>
                                            <option value="TL">Thường tín</option>
                                            <option value="HT">Hà Tây</option>
                                            <option value="HK">Hoàn Kiếm</option>
                                            <option value="CM">Chương Mỹ</option>
                                            <option value="HT">Hà Tây</option>
                                            <option value="ST">Sơn Tây</option>
                                            <option value="TT">Thạch Thất</option>
                                            <option value="LG">Lạng Giang</option>
                                            <option value="YT">Yên Thế</option>
                                            <option value="TY">Tân Yên</option>
                                            <option value="YT">Việt Yên</option>
                                            <option value="TY">Lục Ngạn</option>
                                            <option value="YT">Yên Dũng</option>
                                            <option value="TY">Hiệp Hòa</option>
                                        </select>
                                    </p>
                                    <p>
                                        <label for="DC">Địa chỉ(*) </label>
                                        <input type="text" name="address" id="DC" value="<?php echo  $memberdetail->address;?>" >
                                    </p>
                                    <?php }?>

                                    
                                    
                                    <p>
                                    <p>
                                        Phí vận chuyện với các hình thức thanh toán:
                                    </p>

                                    <div class="trans">
                                        <link href="<?= base_url('public/font-end')?>/css/tooltip.css" rel="stylesheet" type="text/css" />
                                        <script src="<?= base_url('public/font-end')?>/js/tooltip.js" type="text/javascript"></script>
                                        <label>
                                            <input type="radio" name="VC" value="COD">
                                            <a class="tooltip" href="#demo2_tip" onmouseover="tooltip.pop(this, '#demo2_tip')">Thanh toán trực tiếp</a>
                                        </label>
                                        <label>
                                            <input type="radio" name="VC" value="Bank">
                                            <a class="tooltip" href="#demo3_tip" onmouseover="tooltip.pop(this, '#demo3_tip')">Thanh toán Smartlink</a>
                                        </label>
                                        <label>
                                            <input type="radio" name="VC" value="NL">
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
                                    </p>
                                    <?php echo validation_errors(); ?> 
                                    <p>
                                        <input type="submit" value="Thanh toán">
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
                                            num = num.substring(0,num.length-(4*i+3))+'.'+
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
                                        <?php if(@$huyen){ ?>
                                            var contry = parseInt($( ".huyen option:selected" ).attr("price"));
                                            console.log(contry);
                                            $('.contruy').html(contry +" VND");
                                            
                                            var total = parseInt($("#totalmount").val());
                                            var all = contry+total;
                                            $('.total_amount').html(formatCurrency(all)+" VND");
                                        <?php }  ?>
                                        
                                       
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
