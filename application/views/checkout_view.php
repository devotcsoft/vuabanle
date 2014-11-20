<div id="content">
	<div class="content-top">
		<div class="wrap">

			<div class="breadcrumb1">
				<a href="<?= base_url() ?>">Trang chủ</a>&raquo;<a href="<?= base_url('checkout'.'.html') ?>">Giỏ hàng</a>
			</div>

			<div  class="shoppcart">
				<h1><span class="arrow-icon"></span>&nbsp;&nbsp;Giỏ hàng của bạn</h1>
				<div class="plans_table">

					<div class="ther">
						<div class="plans-list1">
							<h3>Tên sản phẩm</h3>
						</div>
						<div class="plans-list3">
							<h3>Giá</h3>
						</div>
						<div class="plans-list2">
							<h3>Số lượng </h3>
						</div>
						<div class="plans-list3">
							<h3>Tổng tiền</h3>
						</div>
						<div class="plans-list2">
							<h3></h3>
						</div>
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
                            
                            $('.delete_cart').click(function(e) {
                                var that = this;
                                if (confirm("Bạn chắc chắn muốn xóa các danh mục này")) {
                                    var cartid = $(that).parent().parent().find('.cart_row').val();
                                    if(cartid != '') {
                                        $.post('<?= base_url(); ?>cart/delete',{
                                            cartid: cartid
                                        }, function(response){
                                            if(response.status == 'OK') {
                                                $(that).parent().parent().remove();
                                                $('.total_amount').html(formatCurrency(response.total)+"VND");
                                                $('.all_cart').html(response.total_record);
                                                $('.total').html(response.total_record);
                                            }
                                        },'json');
                                    }
                                }
                                
                                e.preventDefault();
                            });
                    
                            $('.cart_qty').change(function() {
                                var that = this;
                                var target = $(that).parents('.product_row');
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
                                            $('.total_amount').html(formatCurrency(response.total));
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
					<div class="tboo product_row">
					    <input type="hidden" class="cart_row" value="<?= $val['rowid'] ?>" />
						<div class="plan_list_title">  
							<img src="<?= base_url($val['image']) ?>" alt="" width="160" height="160">
							<h4><?= $val['name'] ?></h4>
						</div>
						<input type="hidden" class="price_row" value="<?= $val['price'] ?>" />
						<div class="price_body1 " id="price">
							<?= Utility_model::price_format($val['price']).' VNĐ'; ?>
						</div>
						<div class="price_body2">
							<input type="text" value="<?= $val['qty'] ?>" class="cart_qty">
						</div>
						<div class="price_body2">
							<button class="delete_cart">
								[Xóa]
							</button>
						</div>
					</div>
					<?php endforeach; ?>
					
					<div class="tee">
						<h4>Tổng cộng : <span class="total"><?= $total_record ?></span> Sản phẩm</h4>
					</div>
					<div class="summomy">
						<h4>Tổng tiền : <span class="total_amount">    <?= Utility_model::price_format($total).' VNĐ'; ?></span></h4>
						<p>
							Đã bao gồm thuế
						</p>
					</div>

					<div class="tfoo">

						<div class="order_now1">
							<a href="<?= base_url() ?>">Quay lại mua hàng</a>
						</div>
						<div class="order_now2">
							<a href="<?= base_url('checkout/step1').'.html' ?>">Tiến hành thanh toán</a>
						</div>

					</div>

				</div>
				<button title="Close (Esc)" type="button" class="mfp-close">
					×
				</button>
			</div>
		</div>
	</div>
	<!------end.content-top--->
<script>
    $(document).ready(function() {

        // Dock the header to the top of the window when scrolled past the banner.
        // This is the default behavior.

        $('.header').scrollToFixed();


        // Dock the footer to the bottom of the page, but scroll up to reveal more
        // content if the page is scrolled far enough.

        $('.footer').scrollToFixed( {
            bottom: 0,
            limit: $('.footer').offset().top
        });


        // Dock each summary as it arrives just below the docked header, pushing the
        // previous summary up the page.

        var summaries = $('.gg');
        summaries.each(function(i) {
            var summary = $(summaries[i]);
            var next = summaries[i + 1];

            summary.scrollToFixed({
                marginTop: $('.header').outerHeight(true) + 10,
                limit: function() {
                    var limit = 0;
                    if (next) {
                        limit = $(next).offset().top - $(this).outerHeight(true) - 10;
                    } else {
                        limit = $('.footer').offset().top - $(this).outerHeight(true) - 10;
                    }
                    return limit;
                },
                zIndex: 999
            });
        });
    });
</script>

<!-----end#content----->