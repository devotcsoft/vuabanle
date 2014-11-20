
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?= $config->site_title; ?></title>
<meta name="description" content="<?= $config->site_describe; ?>">
<meta name="keywords" content="<?= $config->site_keyword; ?>">
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" /><!--Bật Responsive-->
<link rel="icon" type="image/ico" href="<?php echo base_url().'public/libs';?>/favicon.ico"/>
<link rel="stylesheet" type="text/css" href="<?= base_url('public/font-end')?>/css/normalize.min.css">
<link rel="stylesheet" type="text/css" href="<?= base_url('public/font-end')?>/css/style.css" media="screen,handheld">
<link rel="stylesheet" type="text/css" href="<?= base_url('public/font-end')?>/css/mobile.css" media="screen and (min-width: 18.750em)" />
<link rel="stylesheet" type="text/css" href="<?= base_url('public/font-end')?>/css/tablet.css" media="screen and (min-width: 34.375em)" />
<link rel="stylesheet" type="text/css" href="<?= base_url('public/font-end')?>/css/desktop.css" media="screen and (min-width: 48em)" />

<link rel="stylesheet" type="text/css" href="<?= base_url('public/font-end')?>/css/magnific-popup.css">
<script type="text/javascript">
!window.jQuery && document.write(unescape('%3Cscript src="<?= base_url('public/font-end')?>/js/jquery-1.8.1.min.js"%3E%3C/script%3E'))
</script>
<script src="<?= base_url('public/font-end')?>/js/html5-3.6-respond-1.1.0.min.js"></script>
<script src="<?= base_url('public/font-end')?>/js/menucatalog.js"></script>
<script src="<?= base_url('public/font-end')?>/js/1399642332.js"></script>
<script src="<?= base_url('public/font-end')?>/js/script.js"></script>
<script src="<?= base_url('public/font-end')?>/js/jquery.magnific-popup.js"></script>
<script src="<?= base_url('public/libs')?>/jquery.validate.min.js"></script>
<script src="<?= base_url('public/libs')?>/localization/messages_vi.js"></script>
<link rel="stylesheet" href="<?= base_url('public/font-end')?>/css/popupwindow.css">
<script src="<?= base_url('public/font-end')?>/js/popupwindow.js"></script>
<script src="<?= base_url('public/font-end')?>/js/demo.js"></script>

</head>

<body data-control="Catalog">
<script type='text/javascript'>window._sbzq||function(e){e._sbzq=[];var t=e._sbzq;t.push(["_setAccount",10378]);var n=e.location.protocol=="https:"?"https:":"http:";var r=document.createElement("script");r.type="text/javascript";r.async=true;r.src=n+"//static.subiz.com/public/js/loader.js";var i=document.getElementsByTagName("script")[0];i.parentNode.insertBefore(r,i)}(window);</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-41788948-1', 'auto');
  ga('send', 'pageview');

</script>  
<script type="text/javascript">
    <?php
    if($cart != "" or $cart != 0)
    { ?>
        var total_product = <?= $cart?>;    
    <?php }else { ?>
        var total_product = 0;
    <?php } 
    ?>
    
    var mouse_is_inside = false;
    $(document).ready( function(){  
        $('.shopping').click(function() {
            var id = parseInt($(this).attr('proid'));
            var price = $(this).attr('price');
            var name = $(this).attr('name');
            var quanlity = 1;
            var color =  $(this).attr('color');
            if(id > 0 && quanlity > 0 ) {
                $.post('<?= base_url(); ?>cart/add',{
                    id: id,
                    price: price,
                    name: name,
                    qty: quanlity,
                    color: color
                }, function(response){
                    //alert(total_product);
                    total_product = total_product + quanlity;
                    $('.UIBeep_Title').html('<span class="blueName">Bạn đã mua </span> '+ total_product +' sản phẩm<span class="blueName"></span>');
                    if(response.status == 'OK') {
                        //alert(total_product);
                        $('.all_cart').html(total_product);
                    }
                },'json');
            }
        });
    });
</script>                                                      
<!-----------EndGio hang---------> 
<!-------Giorhang---------->
    <link rel="stylesheet" type="text/css" href="<?= base_url('public/font-end')?>/css/Cart.css">
    <script src="<?= base_url('public/font-end')?>/js/jquery.shopping.js"></script>
    <div id="BeeperBox" class="UIBeeper">
     <div class="UIBeeper_Full">
        <div class="Beeps">
           <div class="UIBeep UIBeep_Top UIBeep_Bottom UIBeep_Selected" style="opacity: 1; ">
              <a class="UIBeep_NonIntentional" href="giohang.html">
                 <div class="UIBeep_Icon">
                    <span class="beeper_icon image2"></span>
                 </div>
                  
                 <div class="UIBeep_Title">
                   <span class="blueName">Bạn đã mua <?php if(isset($cart)){ echo $cart + 1; }else { echo "0"; } ?> sản phẩm<span class="blueName"></span>
                 </div>
              </a>
              
           <span class="beeper_x"></span>
           </div>
        </div>
     </div>
  </div> <!----------endgiohang----------->

	<div id="page-all">
		<div id="header">
        	<div id="page-top">
		<div class="pagecuston">
			<div class="wrap">
				<ul class="menu-top">
					<li>
						<h4 class="scroll">HOTLINE: <?= $config->owner_fax; ?></h4>
					</li>
					<?php $session_data = $this->session->userdata('logged_in');
							if(!$session_data){
							
							?>
					<li> <a id="open-pop-up-1" href="#pop-up-1" >Đăng nhập</a></li>
				
						<div id="pop-up-1" class="pop-up-display-content" >
		
		        			<div class="plans_table">
								<h2 class="h2-login">Đăng nhập</h2>
								<div id="login">
		
									<h2>
										<span class="fontawesome-lock"></span>Khách hàng đã đăng ký
									</h2>
									<form id="contact" action="<?= base_url('dang-nhap/kiem-tra'.'.html'); ?>" method="POST">
										<fieldset>
											<p>
												<label for="email">E-mail (*) </label>
											</p>
											<p>
												<input  type="text" id="email" name="email" >
											</p>
											<!-- JS because of IE support; better: placeholder="mail@address.com" -->
		
											<p>
												<label for="password">Password (*)</label>
											</p>
											<p>
												<input type="password" id="password"name="password">
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
		
									<form action="<?= base_url('dang-ky'.'.html'); ?>" method="POST">
										<fieldset>
											<p>
												<label>Bạn là khách hàng mới của vuabanle.vn? Vui lòng đăng ký
													và trải nghiệm mua hàng online tại vuabanle.vn.</label>
											</p>
											<p>
												<input type="submit" value="Đăng ký">
											</p>
		
										</fieldset>
		
									</form>
		
								</div>
								<!-- end login -->
		
						</div> <!-- end plans_table -->
					</div> <!-- end pop-up-1 -->
							<?php 
							}
							else{
							$memberdata=$this->session->userdata('logged_in');?>
							<li>
							<a href="<?php echo base_url().'quan-ly-tai-khoan'.'.html'?>">
							<?php echo $memberdata['userName'];
							echo "</li>";
							?>
							<li><a href="<?php echo base_url().'dang-xuat'?> ">Đăng xuất</a></li>	
							
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
						<a href="<?= base_url() ?>">
						<img src="<?= base_url('public/font-end')?>/images/logo.png"
							alt="" title="logo" /></a>
					</div>
					<!-------end#logo--->
					<div class="shopping-header">
                      <link href="<?= base_url('public/font-end')?>/css/tooltip.css" rel="stylesheet" type="text/css" />
                                        <script src="<?= base_url('public/font-end')?>/js/tooltip.js" type="text/javascript"></script>
					    <div class="cskh">
                            <div><a class="tooltip" href="#demo7_tip " onmouseover="tooltip.pop(this, '#demo7_tip')">
                              <div class="usp-sp-icon usp-sprite usp-sp-warp">
                                <div class="usp-sprite warp-animation"></div>
                                <div class="usp-sprite warp-static"></div>
                              </div>
                              <div class="usp-sp-desc">
                                <div class="strong uspline"> Đổi trả hàng 
                                  trong 10 ngày</div>
                                <div class="uspline-sub"></div>
                              </div>
                              </a>
                            </div>
                              <div  style="display:none;">
                                <div id="demo7_tip" >
                                  <div class="tt-title"> <b>Quý khách có thể đổi trả hàng miễn phí trong vòng 10 ngày                                                             kể nhận hàng.</b> 
                                  </div>
                                  <div class="tt-desc"> <span>khách đều được đổi trả hàng miễn phí trong vòng 10 ngày                                                              theo mọi hình thức , chi tiết xem tại <a href="<?= base_url().'chinh-sach/doi-tra-hang-trong-10-ngay.html'; ?>"> đây</a>
                                                        </span>  
                                  </div>
          </div>
        </div>
                        </div>
						<div class="cskh">
                            <div><a class="tooltip" href="#demo8_tip " onmouseover="tooltip.pop(this, '#demo8_tip')">
                              <div class="usp-sp-icon usp-sprite usp-sp-cash">
                                <div class="usp-sprite cash-animation"></div>
                                <div class="usp-sprite cash-static"></div>
                              </div>
                              <div class="usp-sp-desc">
                                <div class="strong uspline"> Thanh toán khi 
                                  nhận hàng</div>
                                <div class="uspline-sub"></div>
                              </div>
                              </a>
                            </div>
                                <div  style="display:none;">
                                  <div id="demo8_tip" >
                                       <div class="tt-title"> <b>Bạn e ngại về việc thanh toán qua thẻ?</b></div>
                                       <div class="tt-desc">Hãy chọn giải pháp trả tiền mặt cho nhân
									viên giao hàng của chúng tôi khi nhận được hàng. <br>
                                    chi tiết xem tại <a href="<?= base_url().'chinh-sach/tra-tien-khi-nhan-hang.html'; ?>">đây</a></div>
                                  </div>
                               </div>
                        </div>
                        <div class="cskh">
                        <div><a class="tooltip" href="#demo9_tip " onmouseover="tooltip.pop(this, '#demo9_tip')">
                          <div class="usp-sp-icon usp-sp-ship usp-sprite">
                            <div class="usp-sprite ship-animation"></div>
                          </div>
                          <div class="usp-sp-desc">
                            <div class="strong uspline">Vận chuyển
                              miễn phí</div>
                            <div class="uspline-sub"></div>
                          </div>
                          </a>
                        </div>
                              <div  style="display:none;">
                                 <div id="demo9_tip" >
                                   <div class="tt-title">
									<b>Miễn phí vận chuyển </b>
								   </div>
                                   <div class="tt-desc">
									SmartViet giao hàng miễn phí toàn quốc cho đơn hàng <b>trên
										100.000 VND </b> Xem thêm chi tiết tại <a href="<?= base_url().'chinh-sach/van-chuyen-toan-quoc.html'; ?>">shipping</a>
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
											<span style="color: red; line-height: 26px;">(<span class="all_cart"><?php if(isset($cart)){ echo $cart; }else { echo "0"; } ?></span>) </span> Giỏ
											hàng
										</div>
										<div class="uspline-sub"></div>
									</div>
								</a>
							</div>
						</div>
					</div>
					<!-----end#shopping_header--->
          
				</div>