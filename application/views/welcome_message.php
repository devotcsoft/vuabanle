<!Doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Vua bán lẻ</title>
<link rel="stylesheet" type="text/css" href="<?= base_url('public/font-end')?>/css/style.css" media="all">
<link rel="stylesheet" type="text/css" href="<?= base_url('public/font-end')?>/css/jquery.fancybox.css">
<link rel="stylesheet" type="text/css" href="<?= base_url('public/font-end')?>/css/magnific-popup.css">
<script>!window.jQuery && document.write(unescape('%3Cscript src="<?= base_url('public/font-end')?>/js/jquery-1.8.1.min.js"%3E%3C/script%3E'))</script>
<script> $(document).ready(function() { 
window.catalog_rotate = 0;

window.sb_submenu = 1;
 });</script>
 <script src="<?= base_url('public/font-end')?>/js/jquery-1.8.1.min.j"></script>
<script src="<?= base_url('public/font-end')?>/js/menucatalog.js"></script>
 <script src="<?= base_url('public/font-end')?>/js/1399642332.js"></script>
<script src="<?= base_url('public/font-end')?>/js/script.js"></script>
<script src="<?= base_url('public/font-end')?>/js/jquery.magnific-popup.js"></script>
<script src="<?= base_url('public/font-end')?>/js/jquery.fancybox.js"></script>
<script src="<?= base_url('public/font-end')?>/js/jquery.fancybox-media.js"></script>
<link rel="stylesheet" href="popupwindow.css">
<script src="<?= base_url('public/font-end')?>/popupwindow.js"></script>
<script src="<?= base_url('public/font-end')?>/demo.js"></script>

</head>

<body   data-control="Index">
<div id="page-top">
  <div class="pagecuston">
    <div class="wrap">
      <ul class="menu-top">
        <li >
          <h4 class="scroll" > HOTLINE: (04) 6269 1444 - CSKH: (04) 6329 7119 </h4>
        </li>
        <li><a class="popup-with-zoom-anim" href="#small-dialog">Đăng nhập</a></li>
      </ul>
      <div id="small-dialog" class="mfp-hide">
       <div class="plans_table">
        	<h2 class="h2-login">Đăng nhập</h2>
          <div id="login">

		<h2><span class="fontawesome-lock"></span>Khách hàng đã đăng ký</h2>

		<form action="javascript:void(0);" method="POST">

			<fieldset>

				<p><label for="email">E-mail (*) </label></p>
				<p><input type="email" id="email" value="mail@address.com" onBlur="if(this.value=='')this.value='mail@address.com'" onFocus="if(this.value=='mail@address.com')this.value=''"></p> <!-- JS because of IE support; better: placeholder="mail@address.com" -->

				<p><label for="password">Password (*)</label></p>
				<p><input type="password" id="password" value="password" onBlur="if(this.value=='')this.value='password'" onFocus="if(this.value=='password')this.value=''"></p> <!-- JS because of IE support; better: placeholder="password" -->
	<p><label>Quên mật khẩu?</label></p>
				<p><input type="submit" value="Đăng nhập"></p>

			</fieldset>

		</form>

	</div> <!-- end login -->
      <div id="res">

		<h2><span class="fontawesome-lock"></span>Khách hàng chưa đăng ký</h2>

		<form action="javascript:void(0);" method="POST">

			<fieldset>

			
	<p><label>Bạn là khách hàng mới của vuabanle.vn? Vui lòng đăng ký và trải nghiệm mua hàng online tại vuabanle.vn.</label></p>
				<p><input type="submit" value="Đăng ký"></p>

			</fieldset>

		</form>

	</div> <!-- end login -->
    <script>
						$(document).ready(function() {
														$('.popup-with-zoom-anim').magnificPopup({
															type: 'inline',
													
															fixedContentPos: false,
															fixedBgPos: true,
													
															overflowY: 'auto',
													
															closeBtnInside: true,
															preloader: false,
															
															midClick: true,
															removalDelay: 300,
															mainClass: 'my-mfp-zoom-in'
														});
																					
													});
													</script> 
                                                    
        </div>
      </div>
    
    </div>
  </div>
</div>
<!-------end#page-top--->
<div id="page-all">
  <div id="header">
    <div class="header_top">
      <div class="wrap">
        <div class="logo"> <img src="<?= base_url('public/font-end')?>/images/logo.png" alt="" title="logo" /> </div>
        <!-------end#logo--->
        <div class="shopping-header">
          <div class="cskh">
            <div><a href="#">
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
            <!-- <div>
          <div id="freeship-tooltip" class="tip middle">
            <div class="tt-title"> <b>Quý khách có thể đổi trả hàng miễn phí trong vòng 10 ngày kể nhận hàng.</b> </div>
            <div class="tt-desc"> <span>khách đều được đổi trả hàng miễn phí trong vòng 10 ngày theo mọi hình thức </span> </div>
          </div>
        </div> ---> 
          </div>
          <div class="cskh">
            <div><a href="#">
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
            <!-- <div>
          <div id="freeship-tooltip" class="tip middle">
            <div class="tt-title"> <b>Quý khách có thể đổi trả hàng miễn phí trong vòng 10 ngày kể nhận hàng.</b> </div>
            <div class="tt-desc"> <span>khách đều được đổi trả hàng miễn phí trong vòng 10 ngày theo mọi hình thức </span> </div>
          </div>
        </div> ---> 
          </div>
          <div class="cskh">
            <div><a href="#">
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
            <!-- <div>
          <div id="freeship-tooltip" class="tip middle">
            <div class="tt-title"> <b>Quý khách có thể đổi trả hàng miễn phí trong vòng 10 ngày kể nhận hàng.</b> </div>
            <div class="tt-desc"> <span>khách đều được đổi trả hàng miễn phí trong vòng 10 ngày theo mọi hình thức </span> </div>
          </div>
        </div> ---> 
     
          </div>
          <div class="cskh">
            <div>
          <a href="#">
              <div class="usp-sp-icon usp-sprite usp-sp-cart ">
                <div class="usp-sprite cart-animation">
                </div>
              </div>
              <div class="usp-sp-desc">
            <div class="strong uspline"> <span style="color:red; line-height:26px;">(0) </span> Giỏ hàng </div>
              <div class="uspline-sub"></div>
            </div>
    </a>
          </div>
          <!-- <div>
          <div id="freeship-tooltip" class="tip middle">
            <div class="tt-title"> <b>Quý khách có thể đổi trả hàng miễn phí trong vòng 10 ngày kể nhận hàng.</b> </div>
            <div class="tt-desc"> <span>khách đều được đổi trả hàng miễn phí trong vòng 10 ngày theo mọi hình thức </span> </div>
          </div>
        </div> ---> 
        </div>
      </div>
      <!-----end#shopping_header---> 
      
    </div>
    <!-----end#header-top--->
    <div id="nav-top">
      <div class="wrap">
        <div class="typical">
          <h3>Sản phẩm mới</h3>   
        <link rel="stylesheet" type="text/css" href="<?= base_url('public/font-end')?>/css/jsCarousel-2.0.0.css">
        <script src="<?= base_url('public/font-end')?>/js/jsCarousel-2.0.0.js"></script>
     <script type="text/javascript">
        $(document).ready(function() {

            $('#carouselv').jsCarousel({ onthumbnailclick: function(src) { alert(src); }, autoscroll: true, masked: false, itemstodisplay: 1, orientation: 'v' });
            $('#carouselh').jsCarousel({ onthumbnailclick: function(src) { alert(src); }, autoscroll: false, circular: true, masked: false, itemstodisplay: 3, orientation: 'h' });
            $('#carouselhAuto').jsCarousel({ onthumbnailclick: function(src) { alert(src); }, autoscroll: true, masked: true, itemstodisplay: 3, orientation: 'h' });

        });       
        
    </script>
   
   
          <div class="flexslider">
       <div id="carouselv">
     <div>
                             <a href="#">Sách giáo khoa điện tử Classbook</a></div>
                             <div>
                             <a href="#">Ipad học sinh SmartPad T3</a></div>
                             <div>
                             <a href="#">Đôi công gốm sứ nghệ thuật C25</a></div>
                           
     </div>
          </div>
        </div>
        <div class="search-home">
          <form action="#" id="search-box" >
            <div class="search-wapper">
              <input type="text"  class="text-search" name="" placeholder="nhập từ khóa cần tìm"/>
              <button type="submit" class="search-btn"> TÌM KIẾM </button>
            </div>
          </form>
        </div>
        <div class="like-face"> <img src="images/icon-like.png" alt="" /> </div>
      </div>
    </div>
    <!--------end#nav-top----> 
  </div>
</div>
<!-------end#header--->

<div id="content">
<div class="content-top">
<div class="wrap">

   

  <div class="MainBar">
  <nav id="menu" class="hdMenu">
    <div class="navWrapper navWrapper-index" id="spinbasketmenu">
      <div class="nav-sub-visible">
        <div class="navWrapperBackground">
          <div class="navWrapperBackground_arrow"></div>
        </div>
        <a class="navAllCat showMenu" href="#"> Danh mục sản phẩm </a> 
        <a class="navDropdown" href="#"></a>
        <div class="navSub-wrapper">
          <ul class="navSub showMenu">                    
            <li class="multiMenu"  data-sub-menu="navLayer_1"> 
            <a class="catArrow " href="danhmuc.html"> <span class="navSubTxt">Đồ dùng gia đình</span> </a>
             </li>
          </ul>
          <div class="submenuWrapper">
            <div id="navLayer_1" class="navLayer" style="display: none;">
              <div class="navLayerSub clearfix">
                <div class="navCol navCol1">
                  <div class="nav-title"><a href="danhmucon.html">TiVi,Video &amp; Âm Thanh</a> </div>
                  <div class="nav-linklist"> 
                  <a href="danhmucon.html" class="bsncLink">Đầu thu kĩ thuật số</a> 
                   </div>
                  <div class="brand-list"> </div>
                  <div class="nav-title"><a href="danhmucon.html">Bể bơi phao</a> </div>
                  <div class="nav-linklist"> 
                  <a href="danhmucon.html" class="bsncLink">Intex</a>
                   <a href="#" class="bsncLink">Swimming pool</a>
                    <a href="#" class="bsncLink">Phụ kiện bể bơi</a>  </div>
                  <div class="brand-list"> </div>
                        <div class="nav-title"><a href="#">Nội thất</a> </div>
                  <div class="nav-linklist">
                  <a href="#" class="bsncLink">Nội thất phong thủy</a>
                   <a href="#" class="bsncLink">Bàn trà</a>   </div>
                  <div class="brand-list"> </div>
                       <div class="nav-title"><a href="#">Đèn pin chiếu sáng</a> </div>
                  <div class="nav-linklist"> 
                  <a href="#" class="bsncLink">Đèn pin LED</a>
                   <a href="#" class="bsncLink">Phụ kiện đèn pin</a>
                     <a href="#" class="bsncLink">Đèn pin xe đạp</a> 
                     <a href="#" class="bsncLink">Đèn pin chiếu sáng khủng</a>  </div>
                  <div class="brand-list"> </div>
                </div>
                 <div class="navCol navCol2 ">
                  <div class="nav-title"><a href="#">Đồ dùng gia dụng</a> </div>
                  <div class="nav-linklist"> 
                  <a href="#" class="bsncLink">Bình,Cây nóng lạnh</a>
                   <a href="#" class="bsncLink">Máy lọc nước gia đình</a>
                    <a href="#" class="bsncLink">Đèn sưởi ấm nhà tắm</a>
                     <a href="#" class="bsncLink">Bếp từ, bếp hồng ngoại</a>
                      <a href="#" class="bsncLink">Máy sưởi, quạt sưởi</a> 
                    <a href="#" class="bsncLink">Bình đun siêu tốc</a>
                     <a href="#" class="bsncLink">Bình dữ nhiệt</a>
                      <a href="#" class="bsncLink">Lò vi sóng, vỉ nướng, lò nướng</a>
                       <a href="#" class="bsncLink">Nồi áp suất, nồi lẩu</a> 
                       <a href="#" class="bsncLink">Máy sấy quần áo</a>
                       <a href="#" class="bsncLink">Chổi lau nhà</a>
                        <a href="#" class="bsncLink">Máy hút bụi</a>
                        <a href="#" class="bsncLink">Quạt điện</a> 
                         </div>
                  <div class="brand-list"> </div>
                </div>
                  <div class="navCol navCol3">
                  <div class="nav-title"><a href="#">Đồ dùng nhà bếp</a> </div>
                  <div class="nav-linklist"> 
                  <a href="#" class="bsncLink">Máy trồng rau</a>
                   <a href="#" class="bsncLink">Nồi cơm điện</a>
                    <a href="#" class="bsncLink">Nồi xoong - chảo</a> 
                    <a href="#" class="bsncLink">Máy đánh trứng</a> 
                    <a href="#" class="bsncLink">Nồi hấp đa năng</a>
                     </div>
                </div>
              </div>
              <div class="catImg catImg-inside" style="max-height: 343px;"> 
                <!-- Image in .png format --> 
                <a href="#"> <span class="" data-src="<?= base_url('public/font-end')?>/images/anh-thu-muc-do-dung-gia-dinh.jpg"><img src="images/anh-thu-muc-do-dung-gia-dinh.jpg"></span> </a> </div>
              <div style="clear:both"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>
</div>


  

    <div class="slider">
 
<link rel="stylesheet" type="text/css" href="<?= base_url('public/font-end')?>/css/sample-styles.css">
<script src="<?= base_url('public/font-end')?>/js/lean-slider.js"></script>
<script src="<?= base_url('public/font-end')?>/js/modernizr-2.6.1.min.js"></script>
         <div class="slider-wrapper">
         <div id="slider-all">
            <div class="slide1">
                 <a href="#">  <img src="<?= base_url('public/font-end')?>/images/slider1.jpg" alt="" /></a>
            </div>
            <div class="slide2">
                 <a href="#">  <img src="<?= base_url('public/font-end')?>/images/slider2.jpg" alt="" /> </a>
            </div>
            <div class="slide3">
               <a href="#"> <img src="<?= base_url('public/font-end')?>/images/slider3.jpg" alt="" /></a>
            </div>
            <div class="slide4">
                 <a href="#">  <img src="<?= base_url('public/font-end')?>/images/slider4.jpg" alt="" /> </a>
            </div>
        </div>
        <div id="slider-direction-nav"></div>
        <div id="slider-control-nav"></div>
      </div>
       <script type="text/javascript">
    $(document).ready(function() {
        var slider = $('#slider-all').leanSlider({
            directionNav: '#slider-direction-nav',
            controlNav: '#slider-control-nav'
        });
    });
    </script>
    </div>
    <!----end.slider---->
    <div class="module-adv">
      <div class="advert">
        <div class="addv1"> <a href="#"><img  src="<?= base_url('public/font-end')?>/images/imagessp1.jpg" alt="" width="186" height="170"/> </a> </div>
        <div class="addv1"> <a href="#"><img  src="<?= base_url('public/font-end')?>/images/imagessp2.jpg" alt=""  width="186" height="170"/> </a> </div>
      </div>
    </div>
    <!---end.module-adv---> 
      <div class="clear-float"></div>
      </div>
      </div>
  <!------end.content-top--->
  <div class="disco">
  <div class="wrap">
  
    <link href="<?= base_url('public/font-end')?>/css/mb-comingsoon-iceberg.css" rel="stylesheet" />
     <script src="<?= base_url('public/font-end')?>/js/jquery.mb-comingsoon.min.js"></script>
    <script type="text/javascript">
        $(function () {
            var $section = $('section');
            $(window).on("resize", function () {
                var dif = Math.max($(window).height() - $section.height(), 0);
                var padding = Math.floor(dif / 2) + 'px';
                $section.css({ 'padding-top': padding, 'padding-bottom': padding });
            }).trigger("resize");
            $('#myCounter').mbComingsoon({ expiryDate: new Date(2014, 7, 1, 9, 50), speed:100 });
            setTimeout(function () {
                $(window).resize();
            }, 200);
        });

    </script>
     <script type="text/javascript">
        $(function () {
            var $section = $('section');
            $(window).on("resize", function () {
                var dif = Math.max($(window).height() - $section.height(), 0);
                var padding = Math.floor(dif / 2) + 'px';
                $section.css({ 'padding-top': padding, 'padding-bottom': padding });
            }).trigger("resize");
            $('#myCounter1').mbComingsoon({ expiryDate: new Date(2014, 6, 1, 3, 50), speed:100 });
            setTimeout(function () {
                $(window).resize();
            }, 200);
        });

    </script>
     <script type="text/javascript">
        $(function () {
            var $section = $('section');
            $(window).on("resize", function () {
                var dif = Math.max($(window).height() - $section.height(), 0);
                var padding = Math.floor(dif / 2) + 'px';
                $section.css({ 'padding-top': padding, 'padding-bottom': padding });
            }).trigger("resize");
            $('#myCounter2').mbComingsoon({ expiryDate: new Date(2014, 8, 1, 5, 50), speed:100 });
            setTimeout(function () {
                $(window).resize();
            }, 200);
        });

    </script>
   
    <div class="module_discount view view-first ">
     <a href="ChitietSP.html"><img src="<?= base_url('public/font-end')?>/images/images1.png" alt="" / >
       
    <div class="conet">
        <div class="clock_count" id="myCounter"></div>

                   <div class="sb-gdv-deal">
                                    <div class="sb-gdv-deal__content"></div>
                               


                                </div>
                    <h2>Con quay tozy</h2>
                    <p > 120.000.000 VNĐ</p>
                    </div>
                    </a>
                      <div class="mask">
                        <a  class="info popup-with-zoom-shop"  href="#shoppingcart">Mua ngay</a>
                        
                        </div>
                    
     </div>

    <div class="module_discount view view-first"> <a href="ChitietSP.html"><img src="<?= base_url('public/font-end')?>/images/images1.png" alt="" / >
    
   <div class="conet">
   <div class="clock_count" id="myCounter1"></div>
               <div class="sb-gdv-deal">
                                    <div class="sb-gdv-deal__content"></div>
                                </div>
                    <h2>Con quay tozy</h2>
                    <p >120.000.000 VNĐ</p>
                       
                    </div>
                    </a>
                     <div class="mask">
                        <a  class="info popup-with-zoom-shop"  href="#shoppingcart">Mua ngay</a>
                        </div>
                    </div>
    <div class="module_discount view view-first"> <a href="ChitietSP.html"><img src="<?= base_url('public/font-end')?>/images/images1.png" alt="" / >
       <div class="conet">
       <div class="clock_count" id="myCounter2"></div>
                    <div class="sb-gdv-deal">
                                    <div class="sb-gdv-deal__content"></div>
                                </div>
                    <h2>Con quay tozy</h2>
                    <p > 120.000.000 VNĐ</p>
                    </div>
                    </a>
                    <div class="mask">
                       <a  class="info popup-with-zoom-shop"  href="#shoppingcart">Mua ngay</a>
                        </div>
                    </div>
                   
  </div>
  </div>
  <!-------end.disco------>
  <div class="product-hight"> 
  <div class="wrap">
  <div class="box productTeaserBox prd-row">
  <div class="header-title"> 
      <h2 class="lfloat h3"> Sản phẩm nổi bật <img src="<?= base_url('public/font-end')?>/images/hot.gif" alt="" /> </h2>
        </div>
 
  <script src="<?= base_url('public/font-end')?>/js/jquery.flexisel.js"></script>
  <ul class="itemlist" id="flexiselDemo3">
            <li>
              <div class="item view-first1">
              <a href="ChitietSP.html">
               <span> <img src="<?= base_url('public/font-end')?>/images/im1.jpg" alt=""/></span>
               <div class="item-prodinfo">
               <div class="sb-gdv-disc">
                                    <div class="sb-gdv-disc__content">-65%</div>
                                </div>
                <div class="item-title"> Mooncat MV0002 - Bộ váy áo (Hồng phối cam) </div>
                <div class="item-stockhim">Còn hàng</div>
                 <div class="item-core">12.000.000 VNĐ</div>
                <div class="item-price"> 10.290.000 VNĐ</div>
                </div> </a>
                <div class="item-hover mask "> 
                <a class="popup-with-zoom-shop"  href="#shoppingcart" >mua ngay </a>
                </div>
                 </div>
            </li>
           
            <li>
              <div class="item view-first1"> <a href="ChitietSP.html"> <span> <img src="<?= base_url('public/font-end')?>/images/im2.jpg" alt=""/> 
              </span> 
              <div class="item-prodinfo">
        <div class="sb-gdv-disc">
                                    <div class="sb-gdv-disc__content">-65%</div>
                                </div>
                 <div class="item-title"> Mooncat MV0002 - Bộ váy áo (Hồng phối cam) </div>
                <div class="item-stockhim">Còn hàng</div>
                 <div class="item-core">12.000.000 VNĐ</div>
                <div class="item-price"> 10.290.000 VNĐ</div>
                </div> </a>
                  <div class="item-hover mask "> 
        <a class="popup-with-zoom-shop"  href="#shoppingcart" >mua ngay </a>
                </div>
                 </div>
            </li>
            <li>
              <div class="item view-first1"> <a href="ChitietSP.html"> <span> <img src="<?= base_url('public/font-end')?>/images/im1.jpg" alt=""/> </span>
               <div class="item-prodinfo">
             <div class="sb-gdv-disc">
                                    <div class="sb-gdv-disc__content">-65%</div>
                                </div>
                <div class="item-title"> Mooncat MV0002 - Bộ váy áo (Hồng phối cam) </div>
                <div class="item-stockhim">Còn hàng</div>
                 <div class="item-core">12.000.000 VNĐ</div>
                <div class="item-price"> 10.290.000 VNĐ</div>
                </div> </a> 
                  <div class="item-hover mask "> 
         <a class="popup-with-zoom-shop"  href="#shoppingcart" >mua ngay </a>
                </div></div>
            </li>
            <li>
              <div class="item view-first1"> <a href="ChitietSP.html"> <span> <img src="<?= base_url('public/font-end')?>/images/im2.jpg" alt=""/> 
              </span> <div class="item-prodinfo">
           <div class="sb-gdv-disc">
                                    <div class="sb-gdv-disc__content">-65%</div>
                                </div>
                <div class="item-title"> Mooncat MV0002 - Bộ váy áo (Hồng phối cam) </div>
                <div class="item-stockhim">Còn hàng</div>
                 <div class="item-core">12.000.000 VNĐ</div>
                <div class="item-price"> 10.290.000 VNĐ</div>
                </div> </a> 
                  <div class="item-hover mask "> 
                <a class="popup-with-zoom-shop"  href="#shoppingcart" >mua ngay </a>
                </div></div>
            </li>
               <li>
              <div class="item view-first1"> <a href="ChitietSP.html"> <span> <img src="<?= base_url('public/font-end')?>/images/im1.jpg" alt=""/> 
              </span> <div class="item-prodinfo">
             <div class="sb-gdv-disc">
                                    <div class="sb-gdv-disc__content">-65%</div>
                                </div>
                  <div class="item-title"> Mooncat MV0002 - Bộ váy áo (Hồng phối cam) </div>
                <div class="item-stockhim">Còn hàng</div>
                 <div class="item-core">12.000.000 VNĐ</div>
                <div class="item-price"> 10.290.000 VNĐ</div>
                </div> </a>   <div class="item-hover mask "> 
              <a class="popup-with-zoom-shop"  href="#shoppingcart" >mua ngay </a>
                </div></div>
            </li>
               <li>
              <div class="item view-first1"> <a href="ChitietSP.html"> <span> <img src="<?= base_url('public/font-end')?>/images/im2.jpg" alt=""/> </span>
               <div class="item-prodinfo">
           <div class="sb-gdv-disc">
                                    <div class="sb-gdv-disc__content">-65%</div>
                                </div>
            <div class="item-title"> Mooncat MV0002 - Bộ váy áo (Hồng phối cam) </div>
                <div class="item-stockhim">Còn hàng</div>
                 <div class="item-core">12.000.000 VNĐ</div>
                <div class="item-price"> 10.290.000 VNĐ</div>
                </div> </a>   <div class="item-hover mask "> 
                <a class="popup-with-zoom-shop"  href="#shoppingcart" >mua ngay </a>
                </div></div>
            </li>
              <li>
              <div class="item view-first1"> <a href="ChitietSP.html"> <span> <img src="<?= base_url('public/font-end')?>/images/im1.jpg" alt=""/> </span> 
              <div class="item-prodinfo">
      <div class="sb-gdv-disc">
                                    <div class="sb-gdv-disc__content">-65%</div>
                                </div>
                <div class="item-title"> Mooncat MV0002 - Bộ váy áo (Hồng phối cam) </div>
                <div class="item-stockhim">Còn hàng</div>
                 <div class="item-core">12.000.000 VNĐ</div>
                <div class="item-price"> 10.290.000 VNĐ</div>
                </div> </a>  <div class="item-hover mask "> 
             <a class="popup-with-zoom-shop"  href="#shoppingcart" >mua ngay </a>
                </div> </div>
            </li>
              <li>
              <div class="item view-first1"> <a href="ChitietSP.html"> <span> <img src="<?= base_url('public/font-end')?>/images/im2.jpg" alt=""/> </span> 
              <div class="item-prodinfo">
       <div class="sb-gdv-disc">
                                    <div class="sb-gdv-disc__content">-65%</div>
                                </div>
              <div class="item-title"> Mooncat MV0002 - Bộ váy áo (Hồng phối cam) </div>
                <div class="item-stockhim">Còn hàng</div>
                 <div class="item-core">12.000.000 VNĐ</div>
                <div class="item-price"> 10.290.000 VNĐ</div>
                </div> </a>  
                <div class="item-hover mask "> 
               <a class="popup-with-zoom-shop"  href="#shoppingcart" >mua ngay </a>
                </div> </div>
            </li>

          </ul>
  <script src="js/sliderhot.js"></script>

  </div>
  </div>
  </div>
  <!-----end.product-hight--->
  <div class="product-catalog">
  <div class="wrap">
      <div class="box productTeaserBox prd-row">
<script src="JS_stor/tabcontent.js"></script>
   
    <div class="header-title">
      <ul class="tabs" data-persist="true">
            <li>
            
    <h2 class="lfloat h3">     <a href="#view1"> Điều hòa Funiki </a> </h2>
      
            </li>
            
        </ul>
        </div>
        <div class="tabcontents">
            <div id="view1">
                  <div class="content spen-plus">
          <ul class="itemlist" id="myList1">
            <li>
              <div class="item view-first1">
              <a href="ChitietSP.html">
               <span> <img src="images/im1.jpg" alt=""/></span>
               <div class="item-prodinfo">
               <div class="sb-gdv-disc">
                                    <div class="sb-gdv-disc__content">-65%</div>
                                </div>
                <div class="item-title"> Mooncat MV0002 - Bộ váy áo (Hồng phối cam) </div>
                <div class="item-stockhim">Còn hàng</div>
                 <div class="item-core">12.000.000 VNĐ</div>
                <div class="item-price"> 10.290.000 VNĐ</div>
                </div> </a>
                <div class="item-hover mask "> 
               <a class="popup-with-zoom-shop"  href="#shoppingcart" > mua ngay  </a>
                </div>
                 </div>
            </li>
           
            <li>
              <div class="item view-first1"> <a href="ChitietSP.html"> <span> <img src="<?= base_url('public/font-end')?>/images/im2.jpg" alt=""/> 
              </span> 
              <div class="item-prodinfo">
        <div class="sb-gdv-disc">
                                    <div class="sb-gdv-disc__content">-65%</div>
                                </div>
                 <div class="item-title"> Mooncat MV0002 - Bộ váy áo (Hồng phối cam) </div>
                <div class="item-stockhim">Còn hàng</div>
                 <div class="item-core">12.000.000 VNĐ</div>
                <div class="item-price"> 10.290.000 VNĐ</div>
                </div> </a>
                  <div class="item-hover mask "> 
               <a class="popup-with-zoom-shop"  href="#shoppingcart" >mua ngay </a>
                </div>
                 </div>
            </li>
            <li>
              <div class="item view-first1"> <a href="ChitietSP.html"> <span> <img src="images/im1.jpg" alt=""/> </span>
               <div class="item-prodinfo">
             <div class="sb-gdv-disc">
                                    <div class="sb-gdv-disc__content">-65%</div>
                                </div>
                <div class="item-title"> Mooncat MV0002 - Bộ váy áo (Hồng phối cam) </div>
                <div class="item-stockhim">Còn hàng</div>
                 <div class="item-core">12.000.000 VNĐ</div>
                <div class="item-price"> 10.290.000 VNĐ</div>
                </div> </a> 
                  <div class="item-hover mask "> 
               <a class="popup-with-zoom-shop"  href="#shoppingcart" >mua ngay </a>
                </div></div>
            </li>
            <li>
              <div class="item view-first1"> <a href="ChitietSP.html"> <span> <img src="images/im2.jpg" alt=""/> 
              </span> <div class="item-prodinfo">
           <div class="sb-gdv-disc">
                                    <div class="sb-gdv-disc__content">-65%</div>
                                </div>
                <div class="item-title"> Mooncat MV0002 - Bộ váy áo (Hồng phối cam) </div>
                <div class="item-stockhim">Còn hàng</div>
                 <div class="item-core">12.000.000 VNĐ</div>
                <div class="item-price"> 10.290.000 VNĐ</div>
                </div> </a> 
                  <div class="item-hover mask "> 
                 <a class="popup-with-zoom-shop"  href="#shoppingcart" >mua ngay </a>
                </div></div>
            </li>
               <li>
              <div class="item view-first1"> <a href="ChitietSP.html"> <span> <img src="<?= base_url('public/font-end')?>/images/im1.jpg" alt=""/> 
              </span> <div class="item-prodinfo">
             <div class="sb-gdv-disc">
                                    <div class="sb-gdv-disc__content">-65%</div>
                                </div>
                  <div class="item-title"> Mooncat MV0002 - Bộ váy áo (Hồng phối cam) </div>
                <div class="item-stockhim">Còn hàng</div>
                 <div class="item-core">12.000.000 VNĐ</div>
                <div class="item-price"> 10.290.000 VNĐ</div>
                </div> </a>   <div class="item-hover mask "> 
                 <a class="popup-with-zoom-shop"  href="#shoppingcart" >mua ngay </a>
                </div></div>
            </li>
               <li>
              <div class="item view-first1"> <a href="ChitietSP.html"> <span> <img src="<?= base_url('public/font-end')?>/images/im2.jpg" alt=""/> </span>
               <div class="item-prodinfo">
           <div class="sb-gdv-disc">
                                    <div class="sb-gdv-disc__content">-65%</div>
                                </div>
            <div class="item-title"> Mooncat MV0002 - Bộ váy áo (Hồng phối cam) </div>
                <div class="item-stockhim">Còn hàng</div>
                 <div class="item-core">12.000.000 VNĐ</div>
                <div class="item-price"> 10.290.000 VNĐ</div>
                </div> </a>   <div class="item-hover mask "> 
                 <a class="popup-with-zoom-shop"  href="#shoppingcart" >mua ngay </a>
                </div></div>
            </li>
              <li>
              <div class="item view-first1"> <a href="ChitietSP.html"> <span> <img src="<?= base_url('public/font-end')?>/images/im1.jpg" alt=""/> </span> 
              <div class="item-prodinfo">
      <div class="sb-gdv-disc">
                                    <div class="sb-gdv-disc__content">-65%</div>
                                </div>
                <div class="item-title"> Mooncat MV0002 - Bộ váy áo (Hồng phối cam) </div>
                <div class="item-stockhim">Còn hàng</div>
                 <div class="item-core">12.000.000 VNĐ</div>
                <div class="item-price"> 10.290.000 VNĐ</div>
                </div> </a>  <div class="item-hover mask "> 
                 <a class="popup-with-zoom-shop"  href="#shoppingcart" >mua ngay </a>
                </div> </div>
            </li>
              <li>
              <div class="item view-first1"> <a href="ChitietSP.html"> <span> <img src="<?= base_url('public/font-end')?>/images/im2.jpg" alt=""/> </span> 
              <div class="item-prodinfo">
       <div class="sb-gdv-disc">
                                    <div class="sb-gdv-disc__content">-65%</div>
                                </div>
              <div class="item-title"> Mooncat MV0002 - Bộ váy áo (Hồng phối cam) </div>
                <div class="item-stockhim">Còn hàng</div>
                 <div class="item-core">12.000.000 VNĐ</div>
                <div class="item-price"> 10.290.000 VNĐ</div>
                </div> </a>  
                <div class="item-hover mask "> 
             <a class="popup-with-zoom-shop"  href="#shoppingcart" >mua ngay </a>
                </div> </div>
            </li>
                     <div class="control">
<div id="showLess1"><a href="danhmucon.html">Xem tất cả</a></div>
</div>
          </ul>


        </div>
                
            </div>
            
            
            
 </div>
 
 </div>

  </div>
 </div> <!----end.product-catalog---> 
  
 </div> <!-----end#content----->
  <div id="footer">

    <div class="footer-top">
      <div class="wrap">
    <div class="fot-col">
    <div class="fotitle">THÔNG TIN</div>
    <ul class="linklist">
    <li><a href="#">Dành cho nhóm mua</a></li>
     <li><a href="#">Dành cho nhà cung cấp</a></li>
      <li><a href="#">Về vuabanle.vn</a></li>
       <li><a href="#">Tuyển dụng</a></li>
     <li><a href="#">Tin tức</a></li>
      <li><a href="#">Tin khuyến mại</a></li>
       <li><a href="#">Cam kết thông tin</a></li>
          <li><a href="#">Khiếu nại</a></li>
    </ul>
    </div>
     <div class="fot-col">
    <div class="fotitle">HỖ TRỢ KHÁCH HÀNG</div>
    <ul class="linklist">
    <li><a href="#">Liên hệ</a></li>
     <li><a href="#">Phương thức thanh toán</a></li>
      <li><a href="#">Hướng dẫn mua hàng</a></li>
      <li><a href="#">Chính sách đổi trả hàng</a></li>
      <li><a href="#">Trung tâm bảo hành</a></li>
      <li><a href="#">Báo phí vận chuyển</a></li>
      <li><a href="#">Chính sách bảo hành</a></li>
   
    </ul>
    </div>
    <div class="fot-col2">
    <ul class="list-horiontal">
    <div class="fotitle">CÁCH THỨC THANH TOÁN</div>
    <ul class="list-horiontal payment-list">
    <li class="pay-icon ipayVisa" title=""></li>
    <li class="pay-icon ipayMaster" title=""></li>
    <li class="pay-icon ipayCOD" title=""></li>
    </ul>
    <div class="fotitle_title"> CHỨNG NHẬN SÀN GIAO DỊCH TMDT
    <p>
    <a href="#" class="spres-regester"> <img src="<?= base_url('public/font-end')?>/images/chungnhan.jpg" title="" alt="" /></a>
    </p>
    </div>
    </ul>
    
    </div>
    
    <div class="fot-col3">
    <div class="fotitle">THƯƠNG HIỆU NỔI TIẾNG</div>
    <div class="line">
    <div class="line1">
    <ul>
    <li>Thiết bị sưởi ấm: <a href="#"> Kotmam</a> - <a href="#"> Kotmam</a> - <a href="#"> Kotmam</a> - <a href="#"> Kotmam</a> <a href="#"> xem thêm</a></li>
        <li>Thiết bị sưởi ấm: <a href="#"> Kotmam</a> - <a href="#"> Kotmam</a> - <a href="#"> Kotmam</a> - <a href="#"> Kotmam</a> <a href="#"> xem thêm</a></li>
            <li>Thiết bị sưởi ấm: <a href="#"> Kotmam</a> - <a href="#"> Kotmam</a> - <a href="#"> Kotmam</a> - <a href="#"> Kotmam</a> <a href="#"> xem thêm</a></li>
                <li>Thiết bị sưởi ấm: <a href="#"> Kotmam</a> - <a href="#"> Kotmam</a> - <a href="#"> Kotmam</a> </li>
              
    </ul>
    
    </div>
     </div>
    <div class="socal">
<div class="share-icon">
<a href="link_facebook" class="facebook"></a><span>Facebook </span>
<a href="link_twitter" class="twitter"></a><span> Twitter</span>
<a href="link_googleplus" class="google"></a><span>Google</span>
</div>
    </div>
    </div>
    </div>
    </div>
    <!-------end.footer-top--->
    <div class="copy-footer">
    <div class="wrap">
    <b>ĐƯỢC VẬN HÀNH BỜI SMART VIỆT JSC</b>
    <p>Địa chỉ: Số 75 Trung Kính, Trung Hòa, Cầu Giấy, Hà Nội, Thành lập ngày 07 tháng 09 năm 2011, Mã số doanh nghiệp: 0105486972</p>
    <p>Điện thoại: (04) 6329 7119 | Fax: (04) 6329 7119 | Email: info@vuabanle.vn</p>
</div>
    </div>
    <!---------end.copy-footer---> 
  </div>
  </div>
  <!-------end#footer-top-------> 
</div>
<!-------end#page-all--->

</body>
</html>
