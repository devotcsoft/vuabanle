<!-- **CSS - stylesheets** -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/font-end');?>/css/checkout.css">
<!-- **jQuery** -->
<script type="text/javascript" src="<?php echo base_url('assets/font-end');?>/js/tab-jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/font-end');?>/js/jquery.popup.min.js"></script>

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
                $('.contruy').html(formatCurrency(contry) +" VND");
                
                $('#phivanchuyen').val(contry);
                
                var total = parseInt($("#totalmount").val());
                var all = contry+total;
                $('.total_amount').html(formatCurrency(all)+" VND");
            });
        });
</script>
<section id="main-page">

    <article class="order">

        <div class="login-register">
            <ul class="tabs">
                <!-- <li class="active" rel="tab1">Đăng nhập</li> -->
                <li rel="tab2" class="active">Mua hàng không cần đăng ký</li>
            </ul>

            <div class="tab_container_main">
				<!-- 
                <div id="tab1" class="tab_content">
                    <div class="login">
                    	<form action="" method="POST">
                        <table>
                            <tr>
                                <td class="title">E-mail <span class="red">*</span></td>
                                <td class="info"><input type="text"></td>
                            </tr>
                            <tr>
                                <td>Mật khẩu <span class="red">*</span></td>
                                <td><input type="password"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="regist-more"><a href="#">Quên mật khẩu?</a><a href="#">Đăng ký</a></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input class="submit-button" type="submit" value="Đăng nhập"></td>
                            </tr>
                        </table>
                        </form>
                    </div>
                </div>
                -->

                <div id="tab2" class="tab_content">
                    <div class="register">
                    	<form action="<?php echo base_url().'checkout/step2';?>" method="post">
                        <table>
                            <tr>
                                <td  class="title">Họ và tên <span class="red">*</span></td>
                                <td class="info"><input type="text" name="fullname"><input type="hidden" id="phivanchuyen"  name="phivanchuyen" value="" ></td>
                                <td><div class="error1"><?php echo form_error('fullname'); ?></div></td>
                            </tr>
                            <!--<tr>-->
                            <!--<td></td>-->
                            <!--<td><span class="red">Thông báo lỗi ở đây</span></td>-->
                            <!--</tr>-->
                            <tr>
                                <td>Email <span class="red">*</span></td>
                                <td><input type="text"  name="email" ></td>
                                <td><div class="error1"><?php echo form_error('email'); ?></div></td>
                            </tr>
                            <tr>
                                <td>Số điện thoại <span class="red">*</span></td>
                                <td><input type="text" name="phone"></td>
                                <td><div class="error1"><?php echo form_error('phone'); ?></div></td>
                            </tr>
                            <tr>
                                <td>Tỉnh/Thành Phố <span class="red">*</span></td>
                                <td>
                                    <select name="country" class="country">
                                        <?php foreach ($cod as $key => $value) { ?>
                                        <option price="<?php echo $value['value'];  ?>"   value="<?= $value['id'] ?>"s><?= $value['name'] ?></option>
                                        <?php } ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Địa chỉ <span class="red">*</span></td>
                                <td><input type="text" name="address"></td>
                                <td><div class="error1"><?php echo form_error('address'); ?></div></td>
                            </tr>

                            <tr>
                                <td>Yêu cầu khác</span></td>
                                <td><textarea placeholder="Điền thêm những yêu cầu về sản phẩm"></textarea></td>
                            </tr>

                            <tr>
                                <td></td>
                                <td><input  class="submit-button" type="submit" value="Xác nhận"></td>
                            </tr>
                        </table>
                        </form>
                    </div><!--End Register-->
                </div><!-- #tab2 -->

            </div> <!-- .tab_container -->

        </div><!--End Login Register-->

        <div class="order-list">
            <h5 class="title">Đơn hàng của bạn</h5>

            <div class="order-list-inner">
                <div class="number">
                    Bạn có <span class="red"><?= $total_record ?></span> sản phẩm trong đơn hàng
                </div>

                <table>
                    <tr>
                        <td class="name">Sản phẩm</td>
                        <td class="numb">Số lượng</td>
                        <td class="price">Thành tiền</td>
                    </tr>
                    <?php foreach($data as $idx => $val):?>
                    <tr>
                        <td><?= $val['name'] ?></td>
                        <td class="center"><?= $val['qty'] ?></td>
                        <td class="right"><?= Utility_model::price_format($val['qty']*$val['price']).' VNĐ'; ?></td>
                    </tr>
                    <?php endforeach;?>
                </table>

                <div class="total">
                    <table>
                        <tr>
                            <td class="title-1">Tổng cộng</td>
                            <td class="number-1"><?= Utility_model::price_format($total).' VNĐ'; ?></td>
                        </tr>
                        <tr>
                            <td class="title-1">Phí vận chuyển</td>
                            <td class="number-1">  <span class="contruy">0 VNĐ</span></td>
                        </tr>
                        <tr>
                            <td class="title-2">Tổng giá trị đơn hàng<br><span class="tip">( *Giá trên đã bao gồm VAT, chưa bao gồm phí đóng gói và vận chuyển)</span></td>
                            <td class="number-2"><input type="hidden" id="totalmount" value="<?= $total ?>" /><span class="total_amount"><?= Utility_model::price_format($total).' VNĐ'; ?></span></td>
                        </tr>
                    </table>
                </div>
            </div><!--End Order List Inner-->

        </div><!--End Order List-->

        <div style="clear: both"></div>
    </article><!--End Order-->

    <div style="clear: both"></div>
</section>