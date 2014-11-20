<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Vua bán lẻ</title>
		<link rel="stylesheet" type="text/css" href="<?= base_url('public/font-end')?>/css/style.css" media="all">
		<link rel="stylesheet" type="text/css" href="<?= base_url('public/font-end')?>/css/jquery.fancybox.css">
		<link rel="stylesheet" type="text/css" href="<?= base_url('public/font-end')?>/css/magnific-popup.css">
		<script src="<?= base_url('public/font-end')?>/js/jquery-1.8.1.min.js"></script>

		<script type="text/javascript">
			!window.jQuery && document.write(unescape('%3Cscript src="<?= base_url('public/font-end')?>
			/js/jquery - 1.8
			.1.min.js"%3E%3C/script%3E'))
		</script>

		<script src="<?= base_url('public/font-end')?>/js/menucatalog.js"></script>
		<script src="<?= base_url('public/font-end')?>/js/1399642332.js"></script>

		<script src="<?= base_url('public/font-end')?>/js/script.js"></script>
		<script src="<?= base_url('public/font-end')?>/js/jquery.magnific-popup.js"></script>
		<script src="<?= base_url('public/font-end')?>/js/jquery.fancybox.js"></script>
		<script src="<?= base_url('public/font-end')?>/js/jquery.fancybox-media.js"></script>
		<script src="<?= base_url('public/libs')?>/jquery.validate.min.js"></script>
		<script src="<?= base_url('public/libs')?>/localization/messages_vi.js"></script>

		<link rel="stylesheet" href="<?= base_url('public/font-end')?>/css/popupwindow.css">
		<script src="<?= base_url('public/font-end')?>/js/popupwindow.js"></script>
		<script src="<?= base_url('public/font-end') ?>/js/demo.js"></script>

	</head>


    <body   data-control="Index">
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        
          ga('create', 'UA-41788948-1', 'auto');
          ga('send', 'pageview');
        
        </script>
        <div id="page-top">
            <div class="pagecuston">
                <div class="wrap">
                    <ul class="menu-top">
                        <li >
                            <h4 class="scroll" > HOTLINE: (04) 6269 1444 - CSKH: (04) 6329 7119 </h4>
                        </li>
                        <li>
                            <a class="popup-with-zoom-anim" href="#small-dialog">Đăng nhập</a>
                        </li>
                    </ul>
                    <div id="small-dialog" class="mfp-hide">
                        <div class="plans_table">
                            <h2 class="h2-login">Đăng nhập</h2>
                            <div id="login">

                                <h2><span class="fontawesome-lock"></span>Khách hàng đã đăng ký</h2>

                                <form action="javascript:void(0);" method="POST">

                                    <fieldset>

                                        <p>
                                            <label for="email">E-mail (*) </label>
                                        </p>
                                        <p>
                                            <input type="email" id="email" value="mail@address.com" onBlur="if(this.value=='')this.value='mail@address.com'" onFocus="if(this.value=='mail@address.com')this.value=''">
                                        </p>
                                        <!-- JS because of IE support; better: placeholder="mail@address.com" -->

                                        <p>
                                            <label for="password">Password (*)</label>
                                        </p>
                                        <p>
                                            <input type="password" id="password" value="password" onBlur="if(this.value=='')this.value='password'" onFocus="if(this.value=='password')this.value=''">
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

                                <h2><span class="fontawesome-lock"></span>Khách hàng chưa đăng ký</h2>

                                <form action="javascript:void(0);" method="POST">

                                    <fieldset>

                                        <p>
                                            <label>Bạn là khách hàng mới của vuabanle.vn? Vui lòng đăng ký và trải nghiệm mua hàng online tại vuabanle.vn.</label>
                                        </p>
                                        <p>
                                            <input type="submit" value="Đăng ký">
                                        </p>

                                    </fieldset>

                                </form>

                            </div>
                            <!-- end login -->
                            <script>
                                $(document).ready(function() {
                                    $('.popup-with-zoom-anim').magnificPopup({
                                        type : 'inline',

                                        fixedContentPos : false,
                                        fixedBgPos : true,

                                        overflowY : 'auto',

                                        closeBtnInside : true,
                                        preloader : false,

                                        midClick : true,
                                        removalDelay : 300,
                                        mainClass : 'my-mfp-zoom-in'
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
                        <div class="logo">
                            <img src="images/logo.png" alt="" title="logo" />
                        </div>
                        <!-------end#logo--->
                        <div class="shopping-header">
                            <div class="cskh">
                                <div>
                                    <a href="#">
                                    <div class="usp-sp-icon usp-sprite usp-sp-warp">
                                        <div class="usp-sprite warp-animation"></div>
                                        <div class="usp-sprite warp-static"></div>
                                    </div>
                                    <div class="usp-sp-desc">
                                        <div class="strong uspline">
                                            Đổi trả hàng
                                            <br>
                                            trong 10 ngày
                                        </div>
                                        <div class="uspline-sub"></div>
                                    </div> </a>
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
                                    <div class="usp-sp-icon usp-sprite usp-sp-cash">
                                        <div class="usp-sprite cash-animation"></div>
                                        <div class="usp-sprite cash-static"></div>
                                    </div>
                                    <div class="usp-sp-desc">
                                        <div class="strong uspline">
                                            Thanh toán khi
                                            <br>
                                            nhận hàng
                                        </div>
                                        <div class="uspline-sub"></div>
                                    </div> </a>
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
                                    <div class="usp-sp-icon usp-sp-ship usp-sprite">
                                        <div class="usp-sprite ship-animation"></div>
                                    </div>
                                    <div class="usp-sp-desc">
                                        <div class="strong uspline">
                                            Vận chuyển
                                            <br>
                                            miễn phí
                                        </div>
                                        <div class="uspline-sub"></div>
                                    </div> </a>
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
                                        <div class="usp-sprite cart-animation"></div>
                                    </div>
                                    <div class="usp-sp-desc">
                                        <div class="strong uspline">
                                            <span style="color:red; line-height:26px;">(0) </span> Giỏ hàng
                                        </div>
                                        <div class="uspline-sub"></div>
                                    </div> </a>
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
                                <link rel="stylesheet" type="text/css" href="css/jsCarousel-2.0.0.css">
                                <script src="js/jsCarousel-2.0.0.js"></script>
                                <script type="text/javascript">
                                    $(document).ready(function() {

                                        $('#carouselv').jsCarousel({
                                            onthumbnailclick : function(src) {
                                                alert(src);
                                            },
                                            autoscroll : true,
                                            masked : false,
                                            itemstodisplay : 1,
                                            orientation : 'v'
                                        });
                                        $('#carouselh').jsCarousel({
                                            onthumbnailclick : function(src) {
                                                alert(src);
                                            },
                                            autoscroll : false,
                                            circular : true,
                                            masked : false,
                                            itemstodisplay : 3,
                                            orientation : 'h'
                                        });
                                        $('#carouselhAuto').jsCarousel({
                                            onthumbnailclick : function(src) {
                                                alert(src);
                                            },
                                            autoscroll : true,
                                            masked : true,
                                            itemstodisplay : 3,
                                            orientation : 'h'
                                        });

                                    });

                                </script>

                                <div class="flexslider">
                                    <div id="carouselv">
                                        <div>
                                            <a href="#">Sách giáo khoa điện tử Classbook</a>
                                        </div>
                                        <div>
                                            <a href="#">Ipad học sinh SmartPad T3</a>
                                        </div>
                                        <div>
                                            <a href="#">Đôi công gốm sứ nghệ thuật C25</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="search-home">
                                <form action="#" id="search-box" >
                                    <div class="search-wapper">
                                        <input type="text"  class="text-search" name="" placeholder="nhập từ khóa cần tìm"/>
                                        <button type="submit" class="search-btn">
                                            TÌM KIẾM
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <div class="like-face">
                                <img src="images/icon-like.png" alt="" />
                            </div>
                        </div>
                    </div>
                    <!--------end#nav-top---->
                </div>
            </div>
            <!-------end#header--->

            <div id="content">
                <div class="content-top">
                    <div class="wrap">

                        <script>
                            !window.jQuery && document.write(unescape('%3Cscript src="js/jquery-1.8.1.min.js"%3E%3C/script%3E'))
                        </script>
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
                                                <?php foreach($getParentID0s as $getParentID0): ?>
                                                <li class="multiMenu"  data-sub-menu="navLayer_<?= $getParentID0['catID'] ?>">
                                                    <a class="catArrow " href="danhmuc.html"> <span class="navSubTxt"><?= $getParentID0['catName'] ?></span> </a>
                                                </li>
                                                <?php endforeach ?>
                                            </ul>
                                            <div class="submenuWrapper">
                                                <?php foreach($getParentID0s as $getParentID0one): ?>
                                                <div id="navLayer_<?= $getParentID0one['catID'] ?>" class="navLayer" style="display: none;">
                                                    <div class="navLayerSub clearfix">
                                                        <?php
                                                        $lv2 = $this->category_model->getAllCateMenuParent($getParentID0one['catID']); 
                                                        var_dump($lv2);
                                                        while ($wlv2 = mysql_fetch_array($lv2)){ ?> 
                                                            <div class="navCol navCol1">
                                                                <div class="nav-title">
                                                                    <a href="danhmucon.html"><?= $wlv2['catName'] ?></a>
                                                                </div>
                                                                <?php
                                                                    $lv3 = $this->category_model->getAllCateMenuParent($wlv2['catID']);
                                                                    while ($wlv3 = mysql_fetch_array($lv3)){ 
                                                                ?>
                                                                <div class="nav-linklist">
                                                                    <a href="danhmucon.html" class="bsncLink"><?= $wlv3['catName'] ?></a>
                                                                </div>
                                                                <div class="brand-list"></div>
                                                                <?php } ?>
                                                               
                                                            </div>
                                                        <?php } ?>
                                                    </div>
                                                    <div class="catImg catImg-inside" style="max-height: 343px;">
                                                        <!-- Image in .png format -->
                                                        <a href="#"> <span class="" data-src="images/anh-thu-muc-do-dung-gia-dinh.jpg"><img src="images/anh-thu-muc-do-dung-gia-dinh.jpg"></span> </a>
                                                    </div>
                                                    <div style="clear:both"></div>
                                                </div>
                                                <?php endforeach ?>
                                                

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </nav>
                        </div>

                        <script>
                            $(document).ready(function() {
                                window.catalog_rotate = 0;

                                window.sb_submenu = 1;
                            });
                        </script>
                        <script src="js/menucatalog.js"></script>
                        <script src="js/1399642332.js"></script>

                        <div class="slider">

                            <link rel="stylesheet" type="text/css" href="css/sample-styles.css">
                            <script src="js/lean-slider.js"></script>
                            <script src="js/modernizr-2.6.1.min.js"></script>
                            <div class="slider-wrapper">
                                <div id="slider-all">
                                    <div class="slide1">
                                        <a href="#"> <img src="images/slider1.jpg" alt="" /></a>
                                    </div>
                                    <div class="slide2">
                                        <a href="#"> <img src="images/slider2.jpg" alt="" /> </a>
                                    </div>
                                    <div class="slide3">
                                        <a href="#"> <img src="images/slider3.jpg" alt="" /></a>
                                    </div>
                                    <div class="slide4">
                                        <a href="#"> <img src="images/slider4.jpg" alt="" /> </a>
                                    </div>
                                </div>
                                <div id="slider-direction-nav"></div>
                                <div id="slider-control-nav"></div>
                            </div>
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    var slider = $('#slider-all').leanSlider({
                                        directionNav : '#slider-direction-nav',
                                        controlNav : '#slider-control-nav'
                                    });
                                });
                            </script>
                        </div>
                        <!----end.slider---->
                        <div class="module-adv">
                            <div class="advert">
                                <div class="addv1">
                                    <a href="#"><img  src="images/imagessp1.jpg" alt="" width="186" height="170"/> </a>
                                </div>
                                <div class="addv1">
                                    <a href="#"><img  src="images/imagessp2.jpg" alt=""  width="186" height="170"/> </a>
                                </div>
                            </div>
                        </div>
                        <!---end.module-adv--->
                        <div class="clear-float"></div>
                    </div>
                </div>
                <!------end.content-top--->
                <div class="disco">
                    <div class="wrap">
                        <div class="module_discount view view-first ">
                            <a href="ChitietSP.html"><img src="images/images1.png" alt="" / >
                            <div class=" conet">
                                <div class="sb-gdv-deal">
                                    <div class="sb-gdv-deal__content"></div>
                                </div>
                                <h2>Con quay tozy</h2>
                                <p >
                                    120.000.000 VNĐ
                                </p>
                            </div> </a>
                            <div class="mask">
                                <a href="ChitietSP.html" class="info">Mua ngay</a>
                            </div>

                        </div>
                        <div class="module_discount view view-first">
                            <a href="ChitietSP.html"><img src="images/images1.png" alt="" / >
                            <div class="conet">
                                <div class="sb-gdv-deal">
                                    <div class="sb-gdv-deal__content"></div>
                                </div>
                                <h2>Con quay tozy</h2>
                                <p >
                                    120.000.000 VNĐ
                                </p>

                            </div> </a>
                            <div class="mask">
                                <a href="ChitietSP.html" class="info">Mua ngay</a>
                            </div>
                        </div>
                        <div class="module_discount view view-first">
                            <a href="ChitietSP.html"><img src="images/images1.png" alt="" / >
                            <div class="conet">
                                <div class="sb-gdv-deal">
                                    <div class="sb-gdv-deal__content"></div>
                                </div>
                                <h2>Con quay tozy</h2>
                                <p >
                                    120.000.000 VNĐ
                                </p>
                            </div> </a>
                            <div class="mask">
                                <a href="ChitietSP.html" class="info">Mua ngay</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-------end.disco------>
                <script type="text/javascript">
                $(document).ready(function(){
                  $(".clickprod").click(function(){
                    alert("clik");
                  });
                }); 
                </script>
                <div class="product-hight">
                    <div class="wrap">
                        <div class="box productTeaserBox prd-row">
                            <div class="header-title">
                                <h2 class="lfloat h3"> Sản phẩm nổi bật <img src="images/hot.gif" alt="" /></h2>
                            </div>

                            <script src="js/jquery.flexisel.js"></script>
                            <ul class="itemlist" id="flexiselDemo3">
                                <li>
                                    <div class="item view-first1">
                                        <a href="ChitietSP.html"> <span> <img src="images/im1.jpg" alt=""/></span>
                                        <div class="item-prodinfo">
                                            <div class="sb-gdv-disc">
                                                <div class="sb-gdv-disc__content">
                                                    -65%
                                                </div>
                                            </div>
                                            <div class="item-title">
                                                Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                            </div>
                                            <div class="item-stockhim">
                                                Còn hàng
                                            </div>
                                            <div class="item-core">
                                                12.000.000 VNĐ
                                            </div>
                                            <div class="item-price">
                                                10.290.000 VNĐ
                                            </div>
                                        </div> </a>
                                        <div class="item-hover mask ">
                                            <p class="clickprod" href="" >mua ngay </p>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="item view-first1">
                                        <a href="ChitietSP.html"> <span> <img src="images/im2.jpg" alt=""/> </span>
                                        <div class="item-prodinfo">
                                            <div class="sb-gdv-disc">
                                                <div class="sb-gdv-disc__content">
                                                    -65%
                                                </div>
                                            </div>
                                            <div class="item-title">
                                                Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                            </div>
                                            <div class="item-stockhim">
                                                Còn hàng
                                            </div>
                                            <div class="item-core">
                                                12.000.000 VNĐ
                                            </div>
                                            <div class="item-price">
                                                10.290.000 VNĐ
                                            </div>
                                        </div> </a>
                                        <div class="item-hover mask ">
                                            <p class="clickprod" href="" >mua ngay </p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="item view-first1">
                                        <a href="ChitietSP.html"> <span> <img src="images/im1.jpg" alt=""/> </span>
                                        <div class="item-prodinfo">
                                            <div class="sb-gdv-disc">
                                                <div class="sb-gdv-disc__content">
                                                    -65%
                                                </div>
                                            </div>
                                            <div class="item-title">
                                                Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                            </div>
                                            <div class="item-stockhim">
                                                Còn hàng
                                            </div>
                                            <div class="item-core">
                                                12.000.000 VNĐ
                                            </div>
                                            <div class="item-price">
                                                10.290.000 VNĐ
                                            </div>
                                        </div> </a>
                                        <div class="item-hover mask ">
                                            <p class="clickprod" href="" >mua ngay </p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="item view-first1">
                                        <a href="ChitietSP.html"> <span> <img src="images/im2.jpg" alt=""/> </span>
                                        <div class="item-prodinfo">
                                            <div class="sb-gdv-disc">
                                                <div class="sb-gdv-disc__content">
                                                    -65%
                                                </div>
                                            </div>
                                            <div class="item-title">
                                                Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                            </div>
                                            <div class="item-stockhim">
                                                Còn hàng
                                            </div>
                                            <div class="item-core">
                                                12.000.000 VNĐ
                                            </div>
                                            <div class="item-price">
                                                10.290.000 VNĐ
                                            </div>
                                        </div> </a>
                                        <div class="item-hover mask ">
                                            <p class="clickprod" href="" >mua ngay </p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="item view-first1">
                                        <a href="ChitietSP.html"> <span> <img src="images/im1.jpg" alt=""/> </span>
                                        <div class="item-prodinfo">
                                            <div class="sb-gdv-disc">
                                                <div class="sb-gdv-disc__content">
                                                    -65%
                                                </div>
                                            </div>
                                            <div class="item-title">
                                                Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                            </div>
                                            <div class="item-stockhim">
                                                Còn hàng
                                            </div>
                                            <div class="item-core">
                                                12.000.000 VNĐ
                                            </div>
                                            <div class="item-price">
                                                10.290.000 VNĐ
                                            </div>
                                        </div> </a>
                                        <div class="item-hover mask ">
                                            <p class="clickprod" href="" >mua ngay </p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="item view-first1">
                                        <a href="ChitietSP.html"> <span> <img src="images/im2.jpg" alt=""/> </span>
                                        <div class="item-prodinfo">
                                            <div class="sb-gdv-disc">
                                                <div class="sb-gdv-disc__content">
                                                    -65%
                                                </div>
                                            </div>
                                            <div class="item-title">
                                                Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                            </div>
                                            <div class="item-stockhim">
                                                Còn hàng
                                            </div>
                                            <div class="item-core">
                                                12.000.000 VNĐ
                                            </div>
                                            <div class="item-price">
                                                10.290.000 VNĐ
                                            </div>
                                        </div> </a>
                                        <div class="item-hover mask ">
                                            <p class="clickprod" href="" >mua ngay </p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="item view-first1">
                                        <a href="ChitietSP.html"> <span> <img src="images/im1.jpg" alt=""/> </span>
                                        <div class="item-prodinfo">
                                            <div class="sb-gdv-disc">
                                                <div class="sb-gdv-disc__content">
                                                    -65%
                                                </div>
                                            </div>
                                            <div class="item-title">
                                                Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                            </div>
                                            <div class="item-stockhim">
                                                Còn hàng
                                            </div>
                                            <div class="item-core">
                                                12.000.000 VNĐ
                                            </div>
                                            <div class="item-price">
                                                10.290.000 VNĐ
                                            </div>
                                        </div> </a>
                                        <div class="item-hover mask ">
                                            <p class="clickprod" href="" >mua ngay </p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="item view-first1">
                                        <a href="ChitietSP.html"> <span> <img src="images/im2.jpg" alt=""/> </span>
                                        <div class="item-prodinfo">
                                            <div class="sb-gdv-disc">
                                                <div class="sb-gdv-disc__content">
                                                    -65%
                                                </div>
                                            </div>
                                            <div class="item-title">
                                                Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                            </div>
                                            <div class="item-stockhim">
                                                Còn hàng
                                            </div>
                                            <div class="item-core">
                                                12.000.000 VNĐ
                                            </div>
                                            <div class="item-price">
                                                10.290.000 VNĐ
                                            </div>
                                        </div> </a>
                                        <div class="item-hover mask ">
                                            <p class="clickprod" href="" >mua ngay </p>
                                        </div>
                                    </div>
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

                                        <h2 class="lfloat h3"><a href="#view1"> Điều hòa Funiki </a></h2>

                                    </li>
                                    <li>
                                        <h2 class="lfloat h3"><a href="#view2"> Điều hòa Daikin </a></h2>
                                    </li>
                                    <li>
                                        <h2 class="lfloat h3"><a href="#view3"> Điều hòa Sumikuza </a></h2>
                                    </li>
                                    <li>
                                        <h2 class="lfloat h3"><a href="#view4"> Điều hòa Panasonic </a></h2>
                                    </li>
                                    <li>
                                        <h2 class="lfloat h3"><a href="#view5"> Điều hòa LG</a></h2>
                                    </li>
                                </ul>
                            </div>
                            <div class="tabcontents">
                                <div id="view1">
                                    <div class="content spen-plus">
                                        <ul class="itemlist" id="myList1">
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im1.jpg" alt=""/></span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <a class="clickprod" href="" > mua ngay </a>
                                                    </div>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im2.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im1.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im2.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im1.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im2.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im1.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im2.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <div class="control">
                                                <div id="loadMore1">
                                                    Xem thêm >>
                                                </div>
                                                <div id="showLess1">
                                                    <a href="danhmucon.html">Xem tất cả</a>
                                                </div>
                                            </div>
                                        </ul>

                                        <style>
                                            .content .control {
                                                float: right;
                                                height: 20px;
                                                width: 180px;
                                                padding-right: 20px;
                                            }
                                            #myList1 li {
                                                display: none;
                                            }
                                            .content .control #loadMore1 {
                                                color: #EF090D;
                                                font-size: 13px;
                                                cursor: pointer;
                                                float: left;
                                            }
                                            #loadMore1:hover {
                                                color: black;
                                            }
                                            .content .control #showLess1 a {
                                                font-size: 13px;
                                                color: #0C10CD;
                                                cursor: pointer;
                                                float: right;
                                            }
                                            #showLess1 a:hover {
                                                color: black;
                                            }
                                        </style>
                                        <script type="text/javascript">
                                            $(document).ready(function() {
                                                // Load the first 3 list items from another HTML file
                                                //$('#myList').load('externalList.html li:lt(3)');
                                                $('#myList1 li:lt(4)').show();
                                                $('#loadMore1').click(function() {
                                                    $('#myList1 li:lt(8)').show();
                                                });
                                                $('#showLess1').click(function() {
                                                    $('#myList1 li').not(':lt(8)').hide();
                                                });
                                            });
                                        </script>
                                    </div>

                                </div>
                                <div id="view2">
                                    <div class="content spen-plus">
                                        <ul class="itemlist" id="myList2">
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im1.jpg" alt=""/></span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im2.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im1.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im2.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im1.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im2.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="#"> <span> <img src="images/im1.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="#"> <span> <img src="images/im2.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <div class="control">
                                                <div id="loadMore2">
                                                    Xem thêm >>
                                                </div>
                                                <div id="showLess2">
                                                    <a href="danhmucon.html">Xem tất cả</a>
                                                </div>
                                            </div>
                                        </ul>
                                        <style>
                                            #myList2 li {
                                                display: none;
                                            }
                                            .content .control #loadMore2 {
                                                color: #EF090D;
                                                font-size: 13px;
                                                cursor: pointer;
                                                float: left;
                                            }
                                            #loadMore2:hover {
                                                color: black;
                                            }
                                            .content .control #showLess2 a {
                                                font-size: 13px;
                                                color: #0C10CD;
                                                cursor: pointer;
                                                float: right;
                                            }
                                            #showLess2 a:hover {
                                                color: black;
                                            }
                                        </style>
                                        <script type="text/javascript">
                                            $(document).ready(function() {
                                                // Load the first 3 list items from another HTML file
                                                //$('#myList').load('externalList.html li:lt(3)');
                                                $('#myList2 li:lt(4)').show();
                                                $('#loadMore2').click(function() {
                                                    $('#myList2 li:lt(8)').show();
                                                });
                                                $('#showLess2').click(function() {
                                                    $('#myList2 li').not(':lt(8)').hide();
                                                });
                                            });
                                        </script>

                                    </div>
                                </div>
                                <div id="view3">
                                    <div class="content spen-plus">
                                        <ul class="itemlist" id="myList3">
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im1.jpg" alt=""/></span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <a class="clickprod" href="" > mua ngay </a>
                                                    </div>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im2.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im1.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im2.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im1.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im2.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im1.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im2.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <div class="control">
                                                <div id="loadMore3">
                                                    Xem thêm >>
                                                </div>
                                                <div id="showLess3">
                                                    <a href="danhmucon.html">Xem tất cả</a>
                                                </div>
                                            </div>
                                        </ul>

                                        <style>
                                            .content .control {
                                                float: right;
                                                height: 20px;
                                                width: 180px;
                                                padding-right: 20px;
                                            }
                                            #myList3 li {
                                                display: none;
                                            }
                                            .content .control #loadMore3 {
                                                color: #EF090D;
                                                font-size: 13px;
                                                cursor: pointer;
                                                float: left;
                                            }
                                            #loadMore3:hover {
                                                color: black;
                                            }
                                            .content .control #showLess3 a {
                                                font-size: 13px;
                                                color: #0C10CD;
                                                cursor: pointer;
                                                float: right;
                                            }
                                            #showLess3 a:hover {
                                                color: black;
                                            }
                                        </style>
                                        <script type="text/javascript">
                                            $(document).ready(function() {
                                                // Load the first 3 list items from another HTML file
                                                //$('#myList').load('externalList.html li:lt(3)');
                                                $('#myList3 li:lt(4)').show();
                                                $('#loadMore3').click(function() {
                                                    $('#myList3 li:lt(8)').show();
                                                });
                                                $('#showLess3').click(function() {
                                                    $('#myList3 li').not(':lt(8)').hide();
                                                });
                                            });
                                        </script>
                                    </div>

                                </div>
                                <div id="view4">
                                    <div class="content spen-plus">
                                        <ul class="itemlist" id="myList4">
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im1.jpg" alt=""/></span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <a class="clickprod" href="" > mua ngay </a>
                                                    </div>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im2.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im1.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im2.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im1.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im2.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im1.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im2.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <div class="control">
                                                <div id="loadMore4">
                                                    Xem thêm >>
                                                </div>
                                                <div id="showLess4">
                                                    <a href="danhmucon.html">Xem tất cả</a>
                                                </div>
                                            </div>
                                        </ul>

                                        <style>
                                            .content .control {
                                                float: right;
                                                height: 20px;
                                                width: 180px;
                                                padding-right: 20px;
                                            }
                                            #myList4 li {
                                                display: none;
                                            }
                                            .content .control #loadMore4 {
                                                color: #EF090D;
                                                font-size: 13px;
                                                cursor: pointer;
                                                float: left;
                                            }
                                            #loadMore1:hover {
                                                color: black;
                                            }
                                            .content .control #showLess4 a {
                                                font-size: 13px;
                                                color: #0C10CD;
                                                cursor: pointer;
                                                float: right;
                                            }
                                            #showLess4 a:hover {
                                                color: black;
                                            }
                                        </style>
                                        <script type="text/javascript">
                                            $(document).ready(function() {
                                                // Load the first 3 list items from another HTML file
                                                //$('#myList').load('externalList.html li:lt(3)');
                                                $('#myList4 li:lt(4)').show();
                                                $('#loadMore4').click(function() {
                                                    $('#myList4 li:lt(8)').show();
                                                });
                                                $('#showLess4').click(function() {
                                                    $('#myList4 li').not(':lt(8)').hide();
                                                });
                                            });
                                        </script>
                                    </div>

                                </div>
                                <div id="view5">
                                    <div class="content spen-plus">
                                        <ul class="itemlist" id="myList5">
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="#"> <span> <img src="images/im1.jpg" alt=""/></span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im2.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im1.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im2.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="#"> <span> <img src="images/im1.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im2.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im1.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im2.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <div class="control">
                                                <div id="loadMore5">
                                                    Xem thêm >>
                                                </div>
                                                <div id="showLess5">
                                                    <a href="danhmucon.html">Xem tất cả</a>
                                                </div>
                                            </div>
                                        </ul>

                                        <!-----------StartGio hang--------->

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
                                                        <h3>Số lượng </h3>
                                                    </div>
                                                    <div class="plans-list3">
                                                        <h3>Tổng tiền</h3>
                                                    </div>
                                                    <div class="plans-list2">
                                                        <h3></h3>
                                                    </div>
                                                </div>

                                                <div class="tboo">

                                                    <div class="plan_list_title">
                                                        <img src="images/im2.jpg" alt="" width="160" height="160"/>
                                                        <h4> Robot nhảy Tosy Discorobo kèm loa</h4>
                                                    </div>
                                                    <div class="price_body1">
                                                        1.000.000 VNĐ
                                                    </div>
                                                    <div class="price_body2">
                                                        <input type="text" value="1" />
                                                    </div>
                                                    <div class="price_body1">
                                                        2.000.000 VNĐ
                                                    </div>
                                                    <div class="price_body2">
                                                        <button>
                                                            [Xóa]
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="tee">
                                                    <h4>Tổng cộng : 2.000.000 VNĐ</h4>

                                                </div>
                                                <div class="summomy">
                                                    <h4>Tổng tiền : <span>2.000.000 VNĐ</span></h4>
                                                    <p>
                                                        Đã bao gồm thuế
                                                    </p>

                                                </div>

                                                <div class="tfoo">

                                                    <div class="order_now">
                                                        <a href="index.html" >Quay lại mua hàng</a>
                                                    </div>
                                                    <div class="order_now">
                                                        <a href="Login-Thanhtoan.html" >Tiến hành thanh toán</a>
                                                    </div>

                                                </div>

                                            </div>
                                            <button title="Close (Esc)" type="button" class="mfp-close">
                                                ×
                                            </button>
                                        </div>
                                        <script>
                                            $(document).ready(function() {
                                                $('.clickprod').magnificPopup({
                                                    type : 'inline',

                                                    fixedContentPos : false,
                                                    fixedBgPos : true,

                                                    overflowY : 'auto',

                                                    closeBtnInside : true,
                                                    preloader : false,

                                                    midClick : true,
                                                    removalDelay : 300,
                                                    mainClass : 'my-mfp-zoom-on'
                                                });

                                            });
                                        </script>

                                        <!-----------EndGio hang--------->
                                        <style>
                                            #myList5 li {
                                                display: none;
                                            }
                                            .content .control #loadMore5 {
                                                color: #EF090D;
                                                font-size: 13px;
                                                cursor: pointer;
                                                float: left;
                                            }
                                            #loadMore5:hover {
                                                color: black;
                                            }
                                            .content .control #showLess5 a {
                                                font-size: 13px;
                                                color: #0C10CD;
                                                cursor: pointer;
                                                float: right;
                                            }
                                            #showLess5 a:hover {
                                                color: black;
                                            }
                                        </style>
                                        <script type="text/javascript">
                                            $(document).ready(function() {
                                                // Load the first 3 list items from another HTML file
                                                //$('#myList').load('externalList.html li:lt(3)');
                                                $('#myList5 li:lt(4)').show();
                                                $('#loadMore5').click(function() {
                                                    $('#myList5 li:lt(8)').show();
                                                });
                                                $('#showLess5').click(function() {
                                                    $('#myList5 li').not(':lt(8)').hide();
                                                });
                                            });
                                        </script>

                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <!----end.product-catalog--->
                <div class="product-catalog">
                    <div class="wrap">
                        <div class="box productTeaserBox prd-row">
                            <script src="JS_stor/tabcontent.js"></script>

                            <div class="header-title">
                                <ul class="tabs" data-persist="true">
                                    <li>

                                        <h2 class="lfloat h3"><a href="#view8"> Nghe nhìn </a></h2>

                                    </li>
                                    <li>
                                        <h2 class="lfloat h3"><a href="#view9"> Dụng cụ tập thể lực </a></h2>
                                    </li>
                                    <li>
                                        <h2 class="lfloat h3"><a href="#view10"> Đồ du lịch</a></h2>
                                    </li>
                                    <li>
                                        <h2 class="lfloat h3"><a href="#view11"> Máy mesaga toàn thân </a></h2>
                                    </li>
                                    <li>
                                        <h2 class="lfloat h3"><a href="#view12"> Máy chạy bộ</a></h2>
                                    </li>
                                    <li>
                                        <h2 class="lfloat h3"><a href="#view13"> Máy tập thể lực</a></h2>
                                    </li>

                                </ul>
                            </div>
                            <div class="tabcontents">
                                <div id="view8">
                                    <div class="content spen-plus">
                                        <ul class="itemlist" id="myList8">
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im1.jpg" alt=""/></span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <a class="clickprod" href="" > mua ngay </a>
                                                    </div>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im2.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im1.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im2.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im1.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im2.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im1.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im2.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <div class="control">
                                                <div id="loadMore">
                                                    Xem thêm >>
                                                </div>
                                                <div id="showLess">
                                                    <a href="danhmucon.html">Xem tất cả</a>
                                                </div>
                                            </div>
                                        </ul>

                                        <style>
                                            .content .control {
                                                float: right;
                                                height: 20px;
                                                width: 180px;
                                                padding-right: 20px;
                                            }
                                            #myList8 li {
                                                display: none;
                                            }
                                            .content .control #loadMore8 {
                                                color: #EF090D;
                                                font-size: 13px;
                                                cursor: pointer;
                                                float: left;
                                            }
                                            #loadMore8:hover {
                                                color: black;
                                            }
                                            .content .control #showLess8 a {
                                                font-size: 13px;
                                                color: #0C10CD;
                                                cursor: pointer;
                                                float: right;
                                            }
                                            #showLess8 a:hover {
                                                color: black;
                                            }
                                        </style>
                                        <script type="text/javascript">
                                            $(document).ready(function() {
                                                // Load the first 3 list items from another HTML file
                                                //$('#myList').load('externalList.html li:lt(3)');
                                                $('#myList8 li:lt(4)').show();
                                                $('#loadMore8').click(function() {
                                                    $('#myList8 li:lt(8)').show();
                                                });
                                                $('#showLess8').click(function() {
                                                    $('#myList8 li').not(':lt(8)').hide();
                                                });
                                            });
                                        </script>
                                    </div>

                                </div>
                                <div id="view9">
                                    <div class="content spen-plus">
                                        <ul class="itemlist" id="myList9">
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im1.jpg" alt=""/></span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im2.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im1.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im2.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im1.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im2.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="#"> <span> <img src="images/im1.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="#"> <span> <img src="images/im2.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <div class="control">
                                                <div id="loadMore9">
                                                    Xem thêm >>
                                                </div>
                                                <div id="showLess9">
                                                    <a href="danhmucon.html">Xem tất cả</a>
                                                </div>
                                            </div>
                                        </ul>
                                        <style>
                                            #myList9 li {
                                                display: none;
                                            }
                                            .content .control #loadMore9 {
                                                color: #EF090D;
                                                font-size: 13px;
                                                cursor: pointer;
                                                float: left;
                                            }
                                            #loadMore9:hover {
                                                color: black;
                                            }
                                            .content .control #showLess9 a {
                                                font-size: 13px;
                                                color: #0C10CD;
                                                cursor: pointer;
                                                float: right;
                                            }
                                            #showLess9 a:hover {
                                                color: black;
                                            }
                                        </style>
                                        <script type="text/javascript">
                                            $(document).ready(function() {
                                                // Load the first 3 list items from another HTML file
                                                //$('#myList').load('externalList.html li:lt(3)');
                                                $('#myList9 li:lt(4)').show();
                                                $('#loadMore9').click(function() {
                                                    $('#myList9 li:lt(8)').show();
                                                });
                                                $('#showLess9').click(function() {
                                                    $('#myList2 li').not(':lt(8)').hide();
                                                });
                                            });
                                        </script>

                                    </div>
                                </div>
                                <div id="view10">
                                    <div class="content spen-plus">
                                        <ul class="itemlist" id="myList10">
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im1.jpg" alt=""/></span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im2.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im1.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im2.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im1.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im2.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="#"> <span> <img src="images/im1.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="#"> <span> <img src="images/im2.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <div class="control">
                                                <div id="loadMore10">
                                                    Xem thêm >>
                                                </div>
                                                <div id="showLess10">
                                                    <a href="danhmucon.html">Xem tất cả</a>
                                                </div>
                                            </div>
                                        </ul>
                                        <style>
                                            #myList10 li {
                                                display: none;
                                            }
                                            .content .control #loadMore10 {
                                                color: #EF090D;
                                                font-size: 13px;
                                                cursor: pointer;
                                                float: left;
                                            }
                                            #loadMore10:hover {
                                                color: black;
                                            }
                                            .content .control #showLess10 a {
                                                font-size: 13px;
                                                color: #0C10CD;
                                                cursor: pointer;
                                                float: right;
                                            }
                                            #showLess10 a:hover {
                                                color: black;
                                            }
                                        </style>
                                        <script type="text/javascript">
                                            $(document).ready(function() {
                                                // Load the first 3 list items from another HTML file
                                                //$('#myList').load('externalList.html li:lt(3)');
                                                $('#myList10 li:lt(4)').show();
                                                $('#loadMore10').click(function() {
                                                    $('#myList10 li:lt(8)').show();
                                                });
                                                $('#showLess10').click(function() {
                                                    $('#myList10 li').not(':lt(8)').hide();
                                                });
                                            });
                                        </script>

                                    </div>
                                </div>
                                <div id="view11">
                                    <div class="content spen-plus">
                                        <ul class="itemlist" id="myList11">
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im1.jpg" alt=""/></span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im2.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im1.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im2.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im1.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im2.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="#"> <span> <img src="images/im1.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="#"> <span> <img src="images/im2.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <div class="control">
                                                <div id="loadMore11">
                                                    Xem thêm >>
                                                </div>
                                                <div id="showLess11">
                                                    <a href="danhmucon.html">Xem tất cả</a>
                                                </div>
                                            </div>
                                        </ul>
                                        <style>
                                            #myList11 li {
                                                display: none;
                                            }
                                            .content .control #loadMore11 {
                                                color: #EF090D;
                                                font-size: 13px;
                                                cursor: pointer;
                                                float: left;
                                            }
                                            #loadMore11:hover {
                                                color: black;
                                            }
                                            .content .control #showLess11 a {
                                                font-size: 13px;
                                                color: #0C10CD;
                                                cursor: pointer;
                                                float: right;
                                            }
                                            #showLess11 a:hover {
                                                color: black;
                                            }
                                        </style>
                                        <script type="text/javascript">
                                            $(document).ready(function() {
                                                // Load the first 3 list items from another HTML file
                                                //$('#myList').load('externalList.html li:lt(3)');
                                                $('#myList11 li:lt(4)').show();
                                                $('#loadMore11').click(function() {
                                                    $('#myList11 li:lt(8)').show();
                                                });
                                                $('#showLess11').click(function() {
                                                    $('#myList11 li').not(':lt(8)').hide();
                                                });
                                            });
                                        </script>

                                    </div>
                                </div>
                                <div id="view12">
                                    <div class="content spen-plus">
                                        <ul class="itemlist" id="myList12">
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im1.jpg" alt=""/></span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im2.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im1.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im2.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im1.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im2.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="#"> <span> <img src="images/im1.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="#"> <span> <img src="images/im2.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <div class="control">
                                                <div id="loadMore12">
                                                    Xem thêm >>
                                                </div>
                                                <div id="showLess12">
                                                    <a href="danhmucon.html">Xem tất cả</a>
                                                </div>
                                            </div>
                                        </ul>
                                        <style>
                                            #myList12 li {
                                                display: none;
                                            }
                                            .content .control #loadMore12 {
                                                color: #EF090D;
                                                font-size: 13px;
                                                cursor: pointer;
                                                float: left;
                                            }
                                            #loadMore12:hover {
                                                color: black;
                                            }
                                            .content .control #showLess12 a {
                                                font-size: 13px;
                                                color: #0C10CD;
                                                cursor: pointer;
                                                float: right;
                                            }
                                            #showLess12 a:hover {
                                                color: black;
                                            }
                                        </style>
                                        <script type="text/javascript">
                                            $(document).ready(function() {
                                                // Load the first 3 list items from another HTML file
                                                //$('#myList').load('externalList.html li:lt(3)');
                                                $('#myList12 li:lt(4)').show();
                                                $('#loadMore12').click(function() {
                                                    $('#myList12 li:lt(8)').show();
                                                });
                                                $('#showLess12').click(function() {
                                                    $('#myList12 li').not(':lt(8)').hide();
                                                });
                                            });
                                        </script>

                                    </div>
                                </div>
                                <div id="view13">
                                    <div class="content spen-plus">
                                        <ul class="itemlist" id="myList13">
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="#"> <span> <img src="images/im1.jpg" alt=""/></span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im2.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im1.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im2.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="#"> <span> <img src="images/im1.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im2.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im1.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im2.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <div class="control">
                                                <div id="loadMore13">
                                                    Xem thêm >>
                                                </div>
                                                <div id="showLess13">
                                                    <a href="danhmucon.html">Xem tất cả</a>
                                                </div>
                                            </div>
                                        </ul>

                                        <style>
                                            #myList13 li {
                                                display: none;
                                            }
                                            .content .control #loadMore13 {
                                                color: #EF090D;
                                                font-size: 13px;
                                                cursor: pointer;
                                                float: left;
                                            }
                                            #loadMore13:hover {
                                                color: black;
                                            }
                                            .content .control #showLess13 a {
                                                font-size: 13px;
                                                color: #0C10CD;
                                                cursor: pointer;
                                                float: right;
                                            }
                                            #showLess13 a:hover {
                                                color: black;
                                            }
                                        </style>
                                        <script type="text/javascript">
                                            $(document).ready(function() {
                                                // Load the first 3 list items from another HTML file
                                                //$('#myList').load('externalList.html li:lt(3)');
                                                $('#myList13 li:lt(4)').show();
                                                $('#loadMore13').click(function() {
                                                    $('#myList13 li:lt(8)').show();
                                                });
                                                $('#showLess13').click(function() {
                                                    $('#myList13 li').not(':lt(8)').hide();
                                                });
                                            });
                                        </script>

                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <!----end.product-catalog--->
                <div class="product-catalog">
                    <div class="wrap">
                        <div class="box productTeaserBox prd-row">

                            <div class="header-title">
                                <ul class="tabs" data-persist="true">
                                    <li>

                                        <h2 class="lfloat h3"><a href="#view14">TiVi,Video & Âm Thanh </a></h2>

                                    </li>
                                    <li>
                                        <h2 class="lfloat h3"><a href="#view15">Đồ dùng gia dụng </a></h2>
                                    </li>
                                    <li>
                                        <h2 class="lfloat h3"><a href="#view16"> Đồ dùng nhà bếp</a></h2>
                                    </li>
                                    <li>
                                        <h2 class="lfloat h3"><a href="#view17"> Đèn pin chiếu sáng</a></h2>
                                    </li>
                                    <li>
                                        <h2 class="lfloat h3"><a href="#view18">Nội thất</a></h2>
                                    </li>
                                    <li>
                                        <h2 class="lfloat h3"><a href="#view19">Bể bơi phao</a></h2>
                                    </li>
                                </ul>
                            </div>
                            <div class="tabcontents">
                                <div id="view14">
                                    <div class="content spen-plus">
                                        <ul class="itemlist" id="myList14">
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im1.jpg" alt=""/></span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <a class="clickprod" href="" > mua ngay </a>
                                                    </div>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im2.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im1.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im2.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im1.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im2.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im1.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im2.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <div class="control">
                                                <div id="loadMore14">
                                                    Xem thêm >>
                                                </div>
                                                <div id="showLess14">
                                                    <a href="danhmucon.html">Xem tất cả</a>
                                                </div>
                                            </div>
                                        </ul>

                                        <style>
                                            .content .control {
                                                float: right;
                                                height: 20px;
                                                width: 180px;
                                                padding-right: 20px;
                                            }
                                            #myList14 li {
                                                display: none;
                                            }
                                            .content .control #loadMore14 {
                                                color: #EF090D;
                                                font-size: 13px;
                                                cursor: pointer;
                                                float: left;
                                            }
                                            #loadMore14:hover {
                                                color: black;
                                            }
                                            .content .control #showLess14 a {
                                                font-size: 13px;
                                                color: #0C10CD;
                                                cursor: pointer;
                                                float: right;
                                            }
                                            #showLess14 a:hover {
                                                color: black;
                                            }
                                        </style>
                                        <script type="text/javascript">
                                            $(document).ready(function() {
                                                // Load the first 3 list items from another HTML file
                                                //$('#myList').load('externalList.html li:lt(3)');
                                                $('#myList14 li:lt(4)').show();
                                                $('#loadMore14').click(function() {
                                                    $('#myList14 li:lt(8)').show();
                                                });
                                                $('#showLess14').click(function() {
                                                    $('#myList14 li').not(':lt(8)').hide();
                                                });
                                            });
                                        </script>
                                    </div>

                                </div>
                                <div id="view15">
                                    <div class="content spen-plus">
                                        <ul class="itemlist" id="myList15">
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im1.jpg" alt=""/></span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <a class="clickprod" href="" > mua ngay </a>
                                                    </div>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im2.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im1.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im2.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im1.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im2.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im1.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im2.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <div class="control">
                                                <div id="loadMore15">
                                                    Xem thêm >>
                                                </div>
                                                <div id="showLess15">
                                                    <a href="danhmucon.html">Xem tất cả</a>
                                                </div>
                                            </div>
                                        </ul>

                                        <style>
                                            .content .control {
                                                float: right;
                                                height: 20px;
                                                width: 180px;
                                                padding-right: 20px;
                                            }
                                            #myList15 li {
                                                display: none;
                                            }
                                            .content .control #loadMore15 {
                                                color: #EF090D;
                                                font-size: 13px;
                                                cursor: pointer;
                                                float: left;
                                            }
                                            #loadMore15:hover {
                                                color: black;
                                            }
                                            .content .control #showLess15 a {
                                                font-size: 13px;
                                                color: #0C10CD;
                                                cursor: pointer;
                                                float: right;
                                            }
                                            #showLess15 a:hover {
                                                color: black;
                                            }
                                        </style>
                                        <script type="text/javascript">
                                            $(document).ready(function() {
                                                // Load the first 3 list items from another HTML file
                                                //$('#myList').load('externalList.html li:lt(3)');
                                                $('#myList15 li:lt(4)').show();
                                                $('#loadMore15').click(function() {
                                                    $('#myList15 li:lt(8)').show();
                                                });
                                                $('#showLess15').click(function() {
                                                    $('#myList15 li').not(':lt(8)').hide();
                                                });
                                            });
                                        </script>
                                    </div>

                                </div>
                                <div id="view16">
                                    <div class="content spen-plus">
                                        <ul class="itemlist" id="myList16">
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im1.jpg" alt=""/></span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <a class="clickprod" href="" > mua ngay </a>
                                                    </div>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im2.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im1.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im2.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im1.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im2.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im1.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im2.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <div class="control">
                                                <div id="loadMore16">
                                                    Xem thêm >>
                                                </div>
                                                <div id="showLess16">
                                                    <a href="danhmucon.html">Xem tất cả</a>
                                                </div>
                                            </div>
                                        </ul>

                                        <style>
                                            .content .control {
                                                float: right;
                                                height: 20px;
                                                width: 180px;
                                                padding-right: 20px;
                                            }
                                            #myList16 li {
                                                display: none;
                                            }
                                            .content .control #loadMore16 {
                                                color: #EF090D;
                                                font-size: 13px;
                                                cursor: pointer;
                                                float: left;
                                            }
                                            #loadMore16:hover {
                                                color: black;
                                            }
                                            .content .control #showLess16 a {
                                                font-size: 13px;
                                                color: #0C10CD;
                                                cursor: pointer;
                                                float: right;
                                            }
                                            #showLess16 a:hover {
                                                color: black;
                                            }
                                        </style>
                                        <script type="text/javascript">
                                            $(document).ready(function() {
                                                // Load the first 3 list items from another HTML file
                                                //$('#myList').load('externalList.html li:lt(3)');
                                                $('#myList16 li:lt(4)').show();
                                                $('#loadMore16').click(function() {
                                                    $('#myList16 li:lt(8)').show();
                                                });
                                                $('#showLess16').click(function() {
                                                    $('#myList16 li').not(':lt(8)').hide();
                                                });
                                            });
                                        </script>
                                    </div>

                                </div>
                                <div id="view17">
                                    <div class="content spen-plus">
                                        <ul class="itemlist" id="myList17">
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im1.jpg" alt=""/></span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im2.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Sam sung glasy
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im1.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Sam sung glasy
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im2.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im1.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im2.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im1.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im2.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <div class="control">
                                                <div id="loadMore17">
                                                    Xem thêm >>
                                                </div>
                                                <div id="showLess17">
                                                    <a href="danhmucon.html">Xem tất cả</a>
                                                </div>
                                            </div>
                                        </ul>

                                        <style>
                                            #myList17 li {
                                                display: none;
                                            }
                                            .content .control #loadMore17 {
                                                color: #EF090D;
                                                font-size: 13px;
                                                cursor: pointer;
                                                float: left;
                                            }
                                            #loadMore17:hover {
                                                color: black;
                                            }
                                            .content .control #showLess17 a {
                                                font-size: 13px;
                                                color: #0C10CD;
                                                cursor: pointer;
                                                float: right;
                                            }
                                            #showLess17 a:hover {
                                                color: black;
                                            }
                                        </style>
                                        <script type="text/javascript">
                                            $(document).ready(function() {
                                                // Load the first 3 list items from another HTML file
                                                //$('#myList').load('externalList.html li:lt(3)');
                                                $('#myList17 li:lt(4)').show();
                                                $('#loadMore17').click(function() {
                                                    $('#myList17 li:lt(8)').show();
                                                });
                                                $('#showLess17').click(function() {
                                                    $('#myList17 li').not(':lt(8)').hide();
                                                });
                                            });
                                        </script>
                                    </div>

                                </div>
                                <div id="view18">
                                    <div class="content spen-plus">
                                        <ul class="itemlist" id="myList18">
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="#"> <span> <img src="images/im1.jpg" alt=""/></span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im2.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im1.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im2.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im1.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im2.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im1.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im2.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <div class="control">
                                                <div id="loadMore18">
                                                    Xem thêm >>
                                                </div>
                                                <div id="showLess18">
                                                    <a href="danhmucon.html">Xem tất cả</a>
                                                </div>
                                            </div>
                                        </ul>
                                        <style>

#myList18 li{ display:none;
}
.content .control #loadMore18 {
color:#EF090D;
font-size:13px;
cursor:pointer;
float:left;
}
#loadMore18:hover {
color:black;
}
.content .control #showLess18 a{
font-size:13px;
color:#0C10CD;
cursor:pointer;
float:right;
}
#showLess18 a:hover {
color:black;
}
                                        </style>
                                        <script type="text/javascript">

$(document).ready(function () {
// Load the first 3 list items from another HTML file
//$('#myList').load('externalList.html li:lt(3)');
$('#myList18 li:lt(4)').show();
$('#loadMore18').click(function () {
$('#myList18 li:lt(8)').show();
});
$('#showLess18').click(function () {
$('#myList18 li').not(':lt(8)').hide();
});
});
                                        </script>

                                    </div>
                                </div>
                                <div id="view19">

                                    <div class="content spen-plus">
                                        <ul class="itemlist" id="myList19">
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="#"> <span> <img src="images/im1.jpg" alt=""/></span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im2.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im1.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im2.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im1.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im2.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im1.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item view-first1">
                                                    <a href="ChitietSP.html"> <span> <img src="images/im2.jpg" alt=""/> </span>
                                                    <div class="item-prodinfo">
                                                        <div class="sb-gdv-disc">
                                                            <div class="sb-gdv-disc__content">
                                                                -65%
                                                            </div>
                                                        </div>
                                                        <div class="item-title">
                                                            Mooncat MV0002 - Bộ váy áo (Hồng phối cam)
                                                        </div>
                                                        <div class="item-stockhim">
                                                            Còn hàng
                                                        </div>
                                                        <div class="item-core">
                                                            12.000.000 VNĐ
                                                        </div>
                                                        <div class="item-price">
                                                            10.290.000 VNĐ
                                                        </div>
                                                    </div> </a>
                                                    <div class="item-hover mask ">
                                                        <p class="clickprod" href="" >mua ngay </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <div class="control">
                                                <div id="loadMore19">
                                                    Xem thêm >>
                                                </div>
                                                <div id="showLess19">
                                                    <a href="danhmucon.html">Xem tất cả</a>
                                                </div>
                                            </div>
                                        </ul>
                                        <style>

#myList419 li{ display:none;
}
.content .control #loadMore19 {
color:#EF090D;
font-size:13px;
cursor:pointer;
float:left;
}
#loadMore19:hover {
color:black;
}
.content .control #showLess19 a{
font-size:13px;
color:#0C10CD;
cursor:pointer;
float:right;
}
#showLess19 a:hover {
color:black;
}
                                        </style>
                                        <script type="text/javascript">

$(document).ready(function () {
// Load the first 3 list items from another HTML file
//$('#myList').load('externalList.html li:lt(3)');
$('#myList19 li:lt(4)').show();
$('#loadMore19').click(function () {
$('#myList19 li:lt(8)').show();
});
$('#showLess19').click(function () {
$('#myList19 li').not(':lt(8)').hide();
});
});
                                        </script>

                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <!----end.product-catalog--->
            </div>
            <!-----end#content----->
            <div id="footer">

                <div class="footer-top">
                    <div class="wrap">
                        <div class="fot-col">
                            <div class="fotitle">
                                THÔNG TIN
                            </div>
                            <ul class="linklist">
                                <li>
                                    <a href="#">Dành cho nhóm mua</a>
                                </li>
                                <li>
                                    <a href="#">Dành cho nhà cung cấp</a>
                                </li>
                                <li>
                                    <a href="#">Về vuabanle.vn</a>
                                </li>
                                <li>
                                    <a href="#">Tuyển dụng</a>
                                </li>
                                <li>
                                    <a href="#">Tin tức</a>
                                </li>
                                <li>
                                    <a href="#">Tin khuyến mại</a>
                                </li>
                                <li>
                                    <a href="#">Cam kết thông tin</a>
                                </li>
                                <li>
                                    <a href="#">Khiếu nại</a>
                                </li>
                            </ul>
                        </div>
                        <div class="fot-col">
                            <div class="fotitle">
                                HỖ TRỢ KHÁCH HÀNG
                            </div>
                            <ul class="linklist">
                                <li>
                                    <a href="#">Liên hệ</a>
                                </li>
                                <li>
                                    <a href="#">Phương thức thanh toán</a>
                                </li>
                                <li>
                                    <a href="#">Hướng dẫn mua hàng</a>
                                </li>
                                <li>
                                    <a href="#">Chính sách đổi trả hàng</a>
                                </li>
                                <li>
                                    <a href="#">Trung tâm bảo hành</a>
                                </li>
                                <li>
                                    <a href="#">Báo phí vận chuyển</a>
                                </li>
                                <li>
                                    <a href="#">Chính sách bảo hành</a>
                                </li>

                            </ul>
                        </div>
                        <div class="fot-col2">
                            <ul class="list-horiontal">
                                <div class="fotitle">
                                    CÁCH THỨC THANH TOÁN
                                </div>
                                <ul class="list-horiontal payment-list">
                                    <li class="pay-icon ipayVisa" title=""></li>
                                    <li class="pay-icon ipayMaster" title=""></li>
                                    <li class="pay-icon ipayCOD" title=""></li>
                                </ul>
                                <div class="fotitle_title">
                                    CHỨNG NHẬN SÀN GIAO DỊCH TMDT
                                    <p>
                                        <a href="#" class="spres-regester"> <img src="images/chungnhan.jpg" title="" alt="" /></a>
                                    </p>
                                </div>
                            </ul>

                        </div>

                        <div class="fot-col3">
                            <div class="fotitle">
                                THƯƠNG HIỆU NỔI TIẾNG
                            </div>
                            <div class="line">
                                <div class="line1">
                                    <ul>
                                        <li>
                                            Thiết bị sưởi ấm: <a href="#"> Kotmam</a> - <a href="#"> Kotmam</a> - <a href="#"> Kotmam</a> - <a href="#"> Kotmam</a><a href="#"> xem thêm</a>
                                        </li>
                                        <li>
                                            Thiết bị sưởi ấm: <a href="#"> Kotmam</a> - <a href="#"> Kotmam</a> - <a href="#"> Kotmam</a> - <a href="#"> Kotmam</a><a href="#"> xem thêm</a>
                                        </li>
                                        <li>
                                            Thiết bị sưởi ấm: <a href="#"> Kotmam</a> - <a href="#"> Kotmam</a> - <a href="#"> Kotmam</a> - <a href="#"> Kotmam</a><a href="#"> xem thêm</a>
                                        </li>
                                        <li>
                                            Thiết bị sưởi ấm: <a href="#"> Kotmam</a> - <a href="#"> Kotmam</a> - <a href="#"> Kotmam</a>
                                        </li>

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
                        <p>
                            Địa chỉ: Số 75 Trung Kính, Trung Hòa, Cầu Giấy, Hà Nội, Thành lập ngày 07 tháng 09 năm 2011, Mã số doanh nghiệp: 0105486972
                        </p>
                        <p>
                            Điện thoại: (04) 6329 7119 | Fax: (04) 6329 7119 | Email: info@vuabanle.vn
                        </p>
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
