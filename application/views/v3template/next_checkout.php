<!-- **CSS - stylesheets** -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/font-end');?>/css/checkout.css">
<!-- **jQuery** -->
<script type="text/javascript" src="<?php echo base_url('assets/font-end');?>/js/tab-jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/font-end');?>/js/jquery.popup.min.js"></script>

<section id="main-page">

    <article class="order">

        <div class="notification">
            <span style="font-family: arial, helvetica, sans serif; font-size: 16px;font-weight: bold; line-height: 30px; color: #4f4647;">Đơn hàng của bạn đã được đặt mua thành công!</span><br><br>
            <center><img src="<?php echo base_url('assets/font-end');?>/images/thank-you.jpg" alt="Cảm ơn"></center><br><br>
            <span style="font-family: arial, helvetica, sans serif; color: #252525; font-weight: bold; font-size: 13px; line-height: 20px;">Cảm ơn bạn đã đặt hàng. Sẽ có nhân viên của VuaBanLe liên hệ và giao sản phẩm tận nơi cho bạn trong vòng 24 đến 72 giờ.</span><br><br>
            <span style="font-family: arial, helvetica, sans serif; font-size: 13px; font-weight: normal; color: #252525; line-height: 20px;"><b>Lưu ý:</b> <i>Nếu bạn từng mua ít nhất 1 lần tại VuaBanLe.vn, bạn đã trở thành khách hàng quen thuộc, chúng tôi xin bỏ qua bước xác nhận đơn hàng và sẽ tiến hành giao hàng luôn cho bạn.</i></span><br><br><br>
            <a href="http://vuabanle.vn/" style="background-color: #75ae32; color: #fff; font-family: arial, helvetica, sans serif; font-weight: bold; text-decoration: none; padding: 10px 15px; float: right">Tiếp tục mua sắm</a>
        </div><!--End Notification-->

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