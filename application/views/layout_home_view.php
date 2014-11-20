<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?= $meta['title']?></title>
<meta name="description" content="<?= $meta['description']?>">
<meta name="keywords" content="<?= $meta['keywords']?>">
<link rel="icon" type="image/ico"
	href="<?php echo base_url().'public/libs/';?>favicon.ico" />
<link rel="stylesheet" type="text/css"
	href="<?= base_url('public/font-end')?>/css/style.css" media="all">
<link rel="stylesheet" type="text/css"
	href="<?= base_url('public/font-end')?>/css/magnific-popup.css">
<script type="text/javascript">
!window.jQuery && document.write(unescape('%3Cscript src="<?= base_url('public/font-end')?>/js/jquery-1.8.1.min.js"%3E%3C/script%3E'))
</script>
<script src="<?= base_url('public/font-end')?>/js/menucatalog.js"></script>
<script src="<?= base_url('public/font-end')?>/js/1399642332.js"></script>
<script src="<?= base_url('public/font-end')?>/js/script.js"></script>
<script
	src="<?= base_url('public/font-end')?>/js/jquery.magnific-popup.js"></script>
<script src="<?= base_url('public/libs')?>/jquery.validate.min.js"></script>
<script src="<?= base_url('public/libs')?>/localization/messages_vi.js"></script>
<link rel="stylesheet"
	href="<?= base_url('public/font-end')?>/css/popupwindow.css">
<script src="<?= base_url('public/font-end')?>/js/popupwindow.js"></script>
<script src="<?= base_url('public/font-end')?>/js/demo.js"></script>
</head>
<body data-control="Index">
<script type='text/javascript'>window._sbzq||function(e){e._sbzq=[];var t=e._sbzq;t.push(["_setAccount",10378]);var n=e.location.protocol=="https:"?"https:":"http:";var r=document.createElement("script");r.type="text/javascript";r.async=true;r.src=n+"//static.subiz.com/public/js/loader.js";var i=document.getElementsByTagName("script")[0];i.parentNode.insertBefore(r,i)}(window);</script>
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-41788948-1', 'auto');
  ga('send', 'pageview');

</script>

	<!-----------StartGio hang-->
<div id="loading"></div>
	<div id="shoppingcart" class="mfp-hide">

										<div class="plans_table">
											<div class="ther">
												<div class="plans-list1">
													<h3>Tên sản phẩm</h3>
												</div>
												<div class="plans-list3">
													<h3>Giá</h3>
												</div>
												<div class="plans-list2">
													<h3>Số lượng</h3>
												</div>
												<div class="plans-list3">
													<h3>Thành tiền</h3>
												</div>
												<div class="plans-list2">
													<h3></h3>
												</div>
											</div>
											<div class="summomy">
												<h4>
													<label id="lblTotalPrice">0</label>
												</h4>
												<p>Đã bao gồm thuế</p>
											</div>
											<div class="tfoo">
												<div class="order_now">
													<a href="<?php echo base_url();?>" onclick="Back()">Quay
														lại mua hàng</a>
												</div>
												<div class="order_now">
													<a href="<?php echo base_url('checkout/step1.html');?>">Tiến
														hành thanh toán</a>
												</div>
											</div>
										</div>
										<button title="Close (Esc)" type="button" class="mfp-close">×</button>
									</div>
	
<script type="text/javascript">
$(document).ready(function() {
	getlist();
});
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
function getlist()
{
	 $.ajax({
         cache: false,
         async: false,
         url: '<?= base_url(); ?>cart/add',
         type: "GET",
         dataType: "json",
         success: function (response) {
        	 var count = 0;
             var htmlString = '';
             htmlString += '<div class="ther"><div class="plans-list1"><h3>Tên sản phẩm</h3></div><div class="plans-list3"><h3>Giá</h3></div><div class="plans-list2"><h3>Số lượng </h3></div><div class="plans-list3"><h3>Thành tiền</h3></div><div class="plans-list2"><h3></h3></div></div>';
             htmlString += '<div class="plans_table">';
             
             $.each(response.data, function (key, value) {
                 count = count + 1;
                 var idHdPrice = 'hdPrice' + value.id;
                 var idddlGia = 'ddlGia' + value.id;
                 var idBtnXoa = 'btnXoa' + value.id;
                 var idDllQuantity = "dllQuantity" + value.id;
                 var idlblThanhTien = "lblThanhTien" + value.id;
                 

                 htmlString += '<div class="tboo">';
                 htmlString += '<div class="plan_list_title">';
                 htmlString += ' <img src="' + value.Picture + '" alt="" width="160" height="160"/>';
                 htmlString += '<h4>' + value.Name + '</h4>';
                 htmlString += '</div>';
                 //htmlString += '<div class="price_body1">' + acong + 'string.Format(System.Globalization.CultureInfo.GetCultureInfo("vi-VN"), "{0:0,0}",' + value.Price + ') VNĐ</div>';
                 htmlString += '<div class="price_body1">' + formatCurrency(value.Price )+"VND"+' VNĐ</div>';
                 htmlString += '<input type="hidden" id="' + idHdPrice + '"  value ="' + value.Price + '"/>';
                 htmlString += '<div class="price_body2">';
                 //htmlString += acong+'Html.DropDownListFor(model => item.Quantity, "", new { id = "' + idddlGia + '" })';
                 //htmlString += '<select id="' + idDllQuantity + '"  onchange="Calulator(' + value.id + ')"><option value="">1</option></select>';
                 //htmlString += '<input type="text" onchange="Calulator(' + value.qty + ')" class="cart_qty" value="'+value.qty+'" >';
                 htmlString += '<input type="text" id="quanlity'+ value.id +'" onchange="Calulator(' + value.id + ')" class="" value="'+value.qty+'" >';
                 htmlString += '<input type="hidden" id="rowid'+ value.id +'" class="" value="'+value.rowid+'" >';
                 htmlString += '</div>';
//                 htmlString += '<div class="price_body1" id="thanhtien"><label id="' + idlblThanhTien + '"></label></div>';
                 htmlString += '<div class="price_body2"><button id="' + idBtnXoa + '" onclick="DeleteCart(' + value.id + ')">[Xóa]</button></div>';
                 htmlString += '</div>';
             });
             // htmlString += '<div class="summomy"><h4>Tổng tiền : <span>2.000.000 VNĐ</span></h4><p>Đã bao gồm thuế</p></div><div class="tfoo"><div class="order_now"><a href='@Url.Action("Index", "Product")' >Quay lại mua hàng</a></div><div class="order_now"><a href="Login-Thanhtoan.html">Tiến hành thanh toán</a></div></div>';
             //htmlString += '<div class="summomy"><h4><label id="lblTotalPrice">'+  response.total +'</label></h4><p>Đã bao gồm thuế</p></div><div class="tfoo"><div class="order_now"><a href="/" onclick="Back()">Quay lại mua hàng</a></div><div class="order_now"><a href="/login-thanhtoan">Tiến hành thanh toán</a></div></div>';
             htmlString += '</div></div>';
             htmlString += '<div class="summomy"><h4 class="tonghang"> '+  response.total_record +' Sản phẩm </h4><h4><label id="lblTotalPrice">'+  formatCurrency(response.total) +' VND </label></h4><p>Đã bao gồm thuế</p></div><div class="tfoo"><div class="order_now"><a href="<?php echo base_url(); ?>">Quay lại mua hàng</a></div><div class="order_now"><a href="<?php echo base_url('checkout/step1.html'); ?>">Tiến hành thanh toán</a></div></div><div style="clear:both;"></div>';

             htmlString += '<button title="Close (Esc)" type="button" class="mfp-close"></button>';
             //console.log(count);
             $("#shoppingcart").html(htmlString);
             $("#lblCountCart").text(count + " Sản phẩm");
             $(".all_cart").text(response.total_record );
         }
     	
	 });
}

function Calulator(id) {
	var cartqty = $("#quanlity"+id).val();
	var cartid = $("#rowid"+id).val();
	$.ajax({
        cache: false,
        async: false,
        url: '<?= base_url(); ?>cart/update',
        type: "POST",
	    data: {
           cartid: cartid,
		   qty: cartqty
	    },
        dataType: "json",
        success : function (response) {
            $("#lblTotalPrice").text('Tổng tiền: ' + formatCurrency(response.total) + ' VNĐ' );
            $(".tonghang").text(response.total_record );
            $(".all_cart").text(response.total_record );
        }
    });
}
function DeleteCart(id) {
	var cartid = $("#rowid"+id).val();
	console.log(cartid);
        $.ajax({
            cache: false,
            async: false,
            url: '<?= base_url(); ?>cart/delete',
            type: "POST",
		    data: {
	           cartid: cartid
		    },
            dataType: "json",
            success : function (response) {
                getlist();
            }
        });
    }


function mua(id, price, name)
{
	//var id = parseInt($(this).attr('proid'));
    //var price = $(this).attr('price');
    //var name = $(this).attr('name');
    var id = id;
    var price = price;
    var name = name;
    console.log(name);
    console.log(price);
    
    var quanlity = 1;
    var color =  $(this).attr('color');
	    $.ajax({
	        type: "POST",
	        dataType: "json",
	        async: false,
	        cache: false,
	        url: '<?= base_url(); ?>cart/add',
	        data: {
	            id: id,
	            price: price,
	            name: name,
	            qty: quanlity,
	            color: color,
	        },        
	        success: function (response) {
	        	getlist();
	        }
    	});

}
</script>	
<script>
	$(document).ready(function() {
	$('.popup-with-zoom-shop').magnificPopup({
		type: 'inline',

		fixedContentPos: false,
		fixedBgPos: true,

		overflowY: 'auto',

		closeBtnInside: true,
		preloader: false,
		
		midClick: true,
		removalDelay: 300,
		mainClass: 'my-mfp-zoom-on'
	});
								
});
</script>

<!-----------EndGio hang-->



	

	<div id="page-all">
		<div id="header">
			<div id="page-top">
				<div class="pagecuston">
					<div class="wrap">
						<ul class="menu-top">
							<li>
								<h4 class="scroll">HOTLINE: <?= $config->owner_fax; ?></h4>
							</li>
                    <?php
																				
$session_data = $this->session->userdata ( 'logged_in' );
                            if(!$session_data){
                            
                            ?>
                    <li><a id="open-pop-up-1" href="#pop-up-1">Đăng nhập</a></li>

							<div id="pop-up-1" class="pop-up-display-content">

								<div class="plans_table">
									<h2 class="h2-login">Đăng nhập</h2>
									<div id="login">

										<h2>
											<span class="fontawesome-lock"></span>Khách hàng đã đăng ký
										</h2>
										<form id="contact"
											action="<?= base_url('dang-nhap/kiem-tra'); ?>" method="POST">
											<fieldset>
												<p>
													<label for="email">E-mail (*) </label>
												</p>
												<p>
													<input type="text" id="email" name="email">
												</p>
												<!-- JS because of IE support; better: placeholder="mail@address.com" -->

												<p>
													<label for="password">Password (*)</label>
												</p>
												<p>
													<input type="password" id="password" name="password">
												</p>
												<!-- JS because of IE support; better: placeholder="password" -->
												<p>
													<label>Quên mật khẩu?</label>
												</p>
												<p>
													<input type="submit" value="Đăng nhập">
												</p>

											</fieldset>

										</form>

									</div>
									<!-- end login -->
									<div id="res">

										<h2>
											<span class="fontawesome-lock"></span>Khách hàng chưa đăng ký
										</h2>

										<form action="<?= base_url('dang-ky'); ?>" method="POST">
											<fieldset>
												<p>
													<label>Bạn là khách hàng mới của vuabanle.vn? Vui lòng đăng
														ký và trải nghiệm mua hàng online tại vuabanle.vn.</label>
												</p>
												<p>
													<input type="submit" value="Đăng ký">
												</p>

											</fieldset>

										</form>

									</div>
									<!-- end login -->

								</div>
								<!-- end plans_table -->
							</div>
							<!-- end pop-up-1 -->
                            <?php 
                            }
                            else{
                            $memberdata=$this->session->userdata('logged_in');?>
                            <li><a
								href="<?php echo base_url().'quan-ly-tai-khoan'.'.html'?>">
                            <?php echo $memberdata['userName'];
                            echo "</li>";
                            ?>
                            <li><a
										href="<?php echo base_url().'dang-xuat'?> ">Đăng xuất</a></li>   
                            
                            <?php
                            }
                            
                            ?>
                
						
						</ul>




					</div>
				</div>
			</div>


			<!-------end#page-top--->
			<div class="header_top">
				<div class="wrap">
					<div class="logo">
						<a href="<?= base_url() ?>"> <img
							src="<?= base_url('public/font-end')?>/images/logo.png" alt=""
							title="logo" /></a>
					</div>
					<!-------end#logo--->
					<div class="shopping-header">
						<link href="<?= base_url('public/font-end')?>/css/tooltip.css"
							rel="stylesheet" type="text/css" />
						<script src="<?= base_url('public/font-end')?>/js/tooltip.js"
							type="text/javascript"></script>
						<div class="cskh">
							<div>
								<a class="tooltip" href="#demo7_tip "
									onmouseover="tooltip.pop(this, '#demo7_tip')">
									<div class="usp-sp-icon usp-sprite usp-sp-warp">
										<div class="usp-sprite warp-animation"></div>
										<div class="usp-sprite warp-static"></div>
									</div>
									<div class="usp-sp-desc">
										<div class="strong uspline">Đổi trả hàng trong 10 ngày</div>
										<div class="uspline-sub"></div>
									</div>
								</a>
							</div>
							<div style="display: none;">
								<div id="demo7_tip">
									<div class="tt-title">
										<b>Quý khách có thể đổi trả hàng miễn phí trong vòng 10 ngày
											kể nhận hàng.</b>
									</div>
									<div class="tt-desc">
										<span>khách đều được đổi trả hàng miễn phí trong vòng 10 ngày
											theo mọi hình thức , chi tiết xem tại <a
											href="<?= base_url().'chinh-sach/doi-tra-hang-trong-10-ngay.html'; ?>">
												đây</a>
										</span>
									</div>
								</div>
							</div>
						</div>
						<div class="cskh">
							<div>
								<a class="tooltip" href="#demo8_tip "
									onmouseover="tooltip.pop(this, '#demo8_tip')">
									<div class="usp-sp-icon usp-sprite usp-sp-cash">
										<div class="usp-sprite cash-animation"></div>
										<div class="usp-sprite cash-static"></div>
									</div>
									<div class="usp-sp-desc">
										<div class="strong uspline">Thanh toán khi nhận hàng</div>
										<div class="uspline-sub"></div>
									</div>
								</a>
							</div>
							<div style="display: none;">
								<div id="demo8_tip">
									<div class="tt-title">
										<b>Bạn e ngại về việc thanh toán qua thẻ?</b>
									</div>
									<div class="tt-desc">
										Hãy chọn giải pháp trả tiền mặt cho nhân viên giao hàng của
										chúng tôi khi nhận được hàng. <br> chi tiết xem tại <a
											href="<?= base_url().'chinh-sach/tra-tien-khi-nhan-hang.html'; ?>">đây</a>
									</div>
								</div>
							</div>
						</div>
						<div class="cskh">
							<div>
								<a class="tooltip" href="#demo9_tip "
									onmouseover="tooltip.pop(this, '#demo9_tip')">
									<div class="usp-sp-icon usp-sp-ship usp-sprite">
										<div class="usp-sprite ship-animation"></div>
									</div>
									<div class="usp-sp-desc">
										<div class="strong uspline">Vận chuyển miễn phí</div>
										<div class="uspline-sub"></div>
									</div>
								</a>
							</div>
							<div style="display: none;">
								<div id="demo9_tip">
									<div class="tt-title">
										<b>Miễn phí vận chuyển </b>
									</div>
									<div class="tt-desc">
										SmartViet giao hàng miễn phí toàn quốc cho đơn hàng <b>trên
											100.000 VND </b> Xem thêm chi tiết tại <a
											href="<?= base_url().'chinh-sach/van-chuyen-toan-quoc.html'; ?>">shipping</a>
									</div>
								</div>
							</div>
						</div>

						<div class="cskh">
							<div>
								<a href="<?= base_url('checkout'.'.html') ?>">
									<div class="usp-sp-icon usp-sprite usp-sp-cart ">
										<div class="usp-sprite cart-animation"></div>
									</div>
									<div class="usp-sp-desc">
										<div class="strong uspline">
											<span style="color: red; line-height: 26px;">(<span
												class="all_cart"><?php if(isset($cart)){ echo $cart; }else { echo "0"; } ?></span>)
											</span> Giỏ hàng
										</div>
										<div class="uspline-sub"></div>
									</div>
								</a>
							</div>
						</div>
					</div>
					<!-----end#shopping_header--->

				</div>
<?= $main_content ?>
<?= $footer ?>
{elapsed_time}