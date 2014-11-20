<!doctype html>
<html>
<head>
    <!-- This infomations is optimized with SEO -->
    <link href="<?php echo base_url('assets/font-end');?>/favo-icon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon"><!-- Thay link ảnh biểu tượng website -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><!-- Mã nguồn Website (Giữ nguyên) -->
    <meta charset="utf-8">

    <title>Vua bán lẻ | Home</title>

    <meta name="description" content="Mô tả nội dung website (70-160 ký tự)"/>
    <meta name="keywords" content="Từ khóa 1, từ khóa 2, từ khóa 3, khoảng 4 từ khóa không quá, độ dài khoảng 4 từ" />
    <meta name="robots" content="noodp,index,follow" /><!-- Quy định cho robot (Giữ nguyên)-->
    <meta name="author" content="Author Name, authoremail@domain.com" /><!-- Tác giả website -->
    <meta http-equiv="content-language" content="vi_VN" /><!-- Ngôn ngữ cho website -->

    <meta property="og:locale" content="vi_VN" /><!-- Địa phương -->
    <meta property="og:type" content="article" /><!-- Phân loại website (Thường là article) -->
    <meta property="og:url" content="http://ten-website.com/" /><!-- Địa chỉ chính của Website -->
    <meta property="og:site_name" content="Tên website" /><!-- Tên Website-->
    <meta property="og:image" content="http://ten-website.com/images/logo.jpg" /><!-- Đường dẫn ảnh logo công ty-->

    <!-- **CSS - stylesheets** -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/font-end');?>/css/style-home.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/font-end');?>/css/category.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/font-end');?>/css/main-slider.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/font-end');?>//css/main-menu.css">

    <!-- **jQuery** -->
    <script type="text/javascript" src="<?php echo base_url('assets/font-end');?>/js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/font-end');?>/js/main-slider.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/font-end');?>/js/fix-top.js"></script>
</head>

<body>

<header id="header">
    <div id="header-inner">
        <div id="logo">
            <a href="#"><img id="logo-images" src="<?php echo base_url('assets/font-end');?>/css/images/logo.png" alt="Vua bán lẻ" title="Vua bán lẻ"></a>
        </div><!--End Logo-->

        <div id="search-box">
            <form id="search-form">
                <div id="search-input">
                    <div id="icon-search"></div>
                    <input type="text" class="key-search" placeholder="Nhập từ khóa tìm kiếm..." value>
                    <div id="group-search">
                        <div class="title-group" id="title-group">Tất cả danh mục</div>
                        <ul id="list-group">
                            <li>Tất cả danh mục</li>
                            <?php foreach($getCateSearchs as $getCateSearch):?>
                            <li><input type="hidden" name="cat" value="<?php echo $getCateSearch['catId'], '">',word_limiter($getCateSearch['catName'], 5, '...'); ?>"/></li>
                            <?php endforeach;?>
                        </ul>
                        <script type="text/javascript">
                            $(document).ready(function(){
                                $("ul#list-group li").click(function(){
                                    //shower = $(this).parent().next();
                                    shower = $("#title-group");
                                    //change
                                    shower.empty().append($(this).html());
                                });
                            });
                        </script>
                    </div>
                    <button type="submit" class="search-button">Tìm kiếm</button>
                </div>
            </form>
        </div><!--End Search Box-->

        <div id="login">
            <span class="title-login"><a href="#">Đăng ký</a> | <a href="#">Đăng nhập</a></span><br>
            <span class="meta-login">Tài khoản & Đơn hàng</span>
        </div><!--End Login-->

        <div id="shopping-cart">
            <span class="title-login"><a href="#">Giỏ hàng</a></span>&emsp;<span class="number-cart">9</span><br>
            <span class="meta-login">Sản phẩm</span>
        </div><!--End Shopping Cart-->
    </div><!--End Header Inner-->
</header><!--End Header-->
<section id="top">
    <div id="top-inner">
        <nav id="main-menu">
            <div id="title-menu">
                Danh mục sản phẩm
            </div>
            <ul id="main-menu-content">
            	<?php foreach ($menus as $menu):?>
                <li class="menu-item menu-item-1">
                    <div class="menu-icon-category">
                        <?php echo '<a href=',$menu['keypage'],'>';?>
                        <img src="<?php echo base_url($menu['icon']);?>">
                        </a>
                    </div>
                    <strong>
                    	<?php echo '<a href=',$menu['keypage'],'>',word_limiter($menu['catName'], '6', '...'),'</a>';?>
                    </strong>
                    <div class="guide">
                    	<?php if(count(json_decode($menu['keymaket'])) > 0 ){
                    		foreach(json_decode($menu['keymaket']) as $keymakets){
								echo "<a href=",$keymakets->urlmaketing,">",$keymakets->keymaketing,"</a>,"; 
                    		}
                    	}
                    	?>
                    	
                    </div>
                    <div class="sub-cate">
                        <div class="level-1">
                            <ul>
                            	<?php if($menu['cate_child1']){ ?>
                            	<?php foreach ($menu['cate_child1'] as $menu2):?> 
                                <li><a href="<?php echo $menu2['keypage'];?>.html"><?php echo $menu2['catName']; ?></a>
                                	<?php if($menu2['cate_child2']){ ?>
                                    <div class="level-2">
                                        <ul>
                                        	<?php foreach ($menu2['cate_child2'] as $menu3):?>
                                        	<li><a href="<?php echo $menu3['keypage'];?>.html"><?php echo $menu3['catName']; ?></a></li>	
                                        	<?php endforeach;?>
                                        </ul>
                                    </div>
                                    <?php }?>
                                </li>
                                <?php endforeach;?>
                                <?php } ?>
                            </ul>
                        </div>
                        
                        <div class="hot-product">
                        	<?php if(count(json_decode($menu['productcate'])) > 0 ){ 
                        	foreach (json_decode($menu['productcate']) AS $productcates ){ ?>
                            <div class="hot-product-item">
                                <div class="image-product-item">
                                    <a href="<?php echo $productcates->catUrlProduct;?>"><img src="<?php echo base_url($productcates->catProductImg); ?>" alt="<?php echo $productcates->catNameProduct;?>"></a>
                                </div>
                                <a href="<?php echo $productcates->catUrlProduct;?>" class="name-product-item"><span><?php echo $productcates->catNameProduct;?></span></a><br>
                                <span class="price-product-item"><?php echo Utility_model::price_format($productcates->PriceProduct);?> VNĐ</span>
                            </div><!--End Hot Product Item-->
                            <?php }}?>
                        </div><!--End Hot Product-->
                        <div class="img-thumb-menu-item">
                            <?php if(count(json_decode($menu['imgAds'])) > 0){
                            	$ad = 1;
                        		foreach(json_decode($menu['imgAds']) as $imgAd ){
									echo "<img src=$imgAd->imgAd alt='Đại diện'>";
                        		}	
                        	}?>
                        </div>
                    </div>
                </li>
                <?php endforeach;?>
                <div id="sale">
                    <a href="#"><img src="<?php echo base_url('assets/font-end');?>/css/images/sale.jpg"></a>
                </div>
            </ul>
        </nav><!--End Main Menu-->

        <div id="policy">
            <div class="cskh">
                <div>
                    <a class="tooltip" href="<?php echo base_url('chinh-sach/doi-tra-hang-trong-10-ngay.html'); ?>">
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
            </div>

            <div class="cskh">
                <div>
                    <a class="tooltip" href="<?php echo base_url('chinh-sach/tra-tien-khi-nhan-hang.html'); ?>">
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
            </div>

            <div class="cskh">
                <div>
                    <a class="tooltip" href="#demo9_tip">
                        <div class="usp-sp-icon usp-sp-ship usp-sprite">
                            <div class="usp-sprite ship-animation"></div>
                        </div>
                        <div class="usp-sp-desc">
                            <div class="strong uspline">Vận chuyển miễn phí</div>
                            <div class="uspline-sub"></div>
                        </div>
                    </a>
                </div>
            </div>

        </div><!--End Policy-->

        <div id="hotline">
            <span>HOTLINE : <span class="orange">04.6329.7119</span></span>
        </div><!--End Hotline-->
    </div><!--End Top Inner-->
</section><!--End Top-->


<!-- main_content -->
<div id="main_content">
<section id="slider">
    <div id="slider-inner">
        <div id="main-slider">
            <ul id="demo1">            	
        		<?php foreach (json_decode($gallerys->galleryImage) as $gallery){
        			echo "<li><a href=$gallery->imagelink ><img src=$gallery->image_url alt='Tiêu đề bài viết'></a></li>";	
        		}?>
            </ul>

            <script>
                $(function() {
                    var demo1 = $("#demo1").slippry({
                        //Transition: fade,horizontal,kenburns,vertical
                        transition: 'vertical',
                        useCSS: true,
                        speed: 1000,
                        pause: 5000,
                        auto: true,
                        preload: 'visible'
                    });

                    $('.stop').click(function () {
                        demo1.stopAuto();
                    });

                    $('.start').click(function () {
                        demo1.startAuto();
                    });

                    $('.prev').click(function () {
                        demo1.goToPrevSlide();
                        return false;
                    });
                    $('.next').click(function () {
                        demo1.goToNextSlide();
                        return false;
                    });
                    $('.reset').click(function () {
                        demo1.destroySlider();
                        return false;
                    });
                    $('.reload').click(function () {
                        demo1.reloadSlider();
                        return false;
                    });
                    $('.init').click(function () {
                        demo1 = $("#demo1").slippry();
                        return false;
                    });
                });
            </script>
        </div><!--End Main Slider-->

        <div id="right-advertise-slider">
        	<?php foreach($paddings as $padding): if($padding['type'] == 1){ ?>
            <div class="advertise-item">
                <a href="<?php echo $padding['url']; ?>"><img src="<?php echo base_url($padding['image']);?>" alt="Quảng cáo"></a>
            </div><!--End Advertise Item-->
			<?php } endforeach;?>
        </div><!--End Right Advertise Slider-->

        <div style="clear: both"></div>
    </div><!--End Slider Inner-->
</section><!--End Slider-->

<section id="provider">
    <div id="advertise-left">
    	<?php foreach($paddings as $padding): if($padding['type'] == 2){ ?>
        <a href="<?php echo $padding['url'];?>"><img src="<?php echo base_url($padding['image']);?>" width="218" height="328" alt="Quảng cáo bên trái"></a>
        <?php } endforeach;?>
    </div>
    <!--End Advertise Left-->

    <div id="logo-provider">
    	<?php foreach ($getAllBrand as $getAllBrands){ ?>
    	<a href="<?php echo base_url('search/thuonghieu/'.$getAllBrands['catID'],'.html')?>"><img src="<?php echo base_url($getAllBrands['catImage']);?>" alt="<?php echo base_url($getAllBrands['catName']);?>"></a>
    	<?php }?>
       
    </div><!--End Logo Provider-->

    <div id="advertise-right">
    	<?php foreach($paddings as $padding): if($padding['type'] == 3){ ?>
        <a href="<?php echo $padding['url'];?>"><img src="<?php echo base_url($padding['image']);?>" width="218" height="328" alt="Quảng cáo bên trái"></a>
        <?php } endforeach;?>        
    </div><!--End Advertise Right-->

    <div style="clear: both"></div>
</section><!--End Provider-->

<?php $cate = 1; foreach($getAllatHomes as $getAllatHome): 
$json_decode_getAllatHomes = json_decode($getAllatHome['imgurl']);
$json_decode_imgurlbrands = json_decode($getAllatHome['imgurlbrand']);
$json_decode_namelinks = json_decode($getAllatHome['namelink']);
$json_decode_adslinks = json_decode($getAllatHome['adslink']);
$json_decode_titlenameimglinks = json_decode($getAllatHome['titlenameimglink']);
?>
<section class="category category-<?= $cate ?>">
    <div class="menu-category">
        <div class="name-category">
            <div class="name-category-show">
                <h2 class="title"><a href="<?php echo $json_decode_getAllatHomes['0']->imgurl; ?>"><?php echo $getAllatHome['name']; ?></a></h2>
                <div class="img-thumb-category">
                	<a href="<?php echo $json_decode_getAllatHomes['0']->imgurl; ?>"><img src="<?php echo $json_decode_getAllatHomes['1']->imgurl1; ?>" alt="<?php echo $getAllatHome['name']; ?>"></a>
                </div>
            </div>
            <div class="mask"></div>
        </div><!--End Name Category-->

        <div class="provider-logo">
        	<?php foreach ($json_decode_imgurlbrands as $key => $json_decode_imgurlbrand): ?>
        	<a href="<?php echo $json_decode_imgurlbrand->imgurlbrand; ?>"><img src="<?php echo base_url($json_decode_imgurlbrand->imgurlbrand1);?>" alt="Tên nhà cung cấp"></a> 
            <?php endforeach; ?>
        </div><!--End Provider Logo-->

        <div class="list">
            <ul>
            	<?php foreach ($json_decode_namelinks as $key => $json_decode_namelink): ?>
        		 <li><a href="<?php echo $json_decode_namelink->namelink1; ?>"><?php echo $json_decode_namelink->namelink; ?></a></li> 
            	<?php endforeach; ?>
            </ul>
        </div><!--End List-->
    </div><!--End Menu Category-->

    <div class="sell-images">
        <a href="<?php echo $json_decode_adslinks[0]->adslink; ?>"><img src="<?php echo $json_decode_adslinks[1]->adslink1;?>" alt="Tên sản phẩm"></a>
    </div><!--End Sell Images-->

    <div class="top-product">
    	<?php foreach ($json_decode_titlenameimglinks as $key => $json_decode_titlenameimglink): ?>
        <div class="top-product-item">
            <h3 class="top-product-name"><a href="<?php echo $json_decode_titlenameimglink->titlenameimglink2 ;?>"><?php echo $json_decode_titlenameimglink->titlenameimglink ;?></a></h3>
            <span class="top-product-description"><?php echo $json_decode_titlenameimglink->titlenameimglink1 ;?></span>
            <div class="top-product-image"><a href="<?php echo $json_decode_titlenameimglink->titlenameimglink2 ;?>"><img src="<?php echo base_url($json_decode_titlenameimglink->titlenameimglink3);?>" alt="Tên chuyên mục"></a></div>
        </div><!--End Top Product Item-->
        <?php endforeach; ?>
    </div><!--End Top Product-->

</section><!--End category-->
<?php $cate++; endforeach; ?>

</div>
<!-- END Main_content -->

<footer>
    <div id="footer-module">
        <div class="footer-mod-1">
            <h4>Thông tin</h4>
            <div class="footer-mod-1-content">
                <ul>
                    <li><a href="<?= base_url('danh-cho-nhom-mua.html') ?>">Dành cho nhóm mua</a></li>
					<li><a href="<?= base_url('danh-cho-nha-cung-cap.html') ?>">Dành cho nhà cung cấp</a></li>
					<li><a href="<?= base_url('ve-vuabanle.html') ?>">Về vuabanle.vn</a></li>
					<li><a href="<?= base_url('tuyen-dung.html') ?>">Tuyển dụng</a></li>
					<li><a href="<?= base_url('tin-tuc.html') ?>">Tin tức</a></li>
					<li><a href="<?= base_url('khuyen-mai.html') ?>">Tin khuyến mại</a></li>
					<li><a href="<?= base_url('cam-ket-bao-mat-su-dung-thong-tin.html') ?>">Cam kết thông tin</a></li>
					<li><a href="#">Khiếu nại</a></li>
                </ul>
            </div>
        </div><!--End Footer Mod 1-->

        <div class="footer-mod-1">
            <h4>Hỗ trợ khách hàng</h4>
            <div class="footer-mod-1-content">
                <ul>
                    <li><a href="<?= base_url('lien-he.html') ?>">Liên hệ</a></li>
					<li><a href="<?= base_url('thanh-toan-mua-hang-tai-vuabanle.html') ?>">Phương thức thanh toán</a></li>
					<li><a href="<?= base_url('huong-dan-mua-hang.html') ?>">Hướng dẫn mua hàng</a></li>
					<li><a href="#">Chính sách đổi trả hàng</a></li>
					<li><a href="#">Trung tâm bảo hành</a></li>
					<li><a href="#">Báo phí vận chuyển</a></li>
					<li><a href="<?= base_url('chinh-sach-bao-hanh.html') ?>">Chính sách bảo hành</a></li>
                </ul>
            </div>
        </div><!--End Footer Mod 1-->

        <div class="footer-mod-2">
            <h4>Chăm sóc khách hàng</h4>
            <div class="footer-mod-2-content">
                <div class="support-item">
                    <img src="<?php echo base_url('assets/font-end');?>/images/support/1.jpg" width="57" height="57" alt="Nhân viên hỗ trợ 1">
                    <span class="support-name">Nguyễn Thu</span><br>
                    <span class="support-phone">04 6269 1411</span>
                </div><!--Support Item-->

                <div class="support-item">
                    <img src="<?php echo base_url('assets/font-end');?>/images/support/2.jpg" width="57" height="57" alt="Nhân viên hỗ trợ 1">
                    <span class="support-name">Hoàng Lan</span><br>
                    <span class="support-phone">04 6269 1444</span>
                </div><!--Support Item-->

                <div class="support-item">
                    <img src="<?php echo base_url('assets/font-end');?>/images/support/3.jpg" width="57" height="57" alt="Nhân viên hỗ trợ 1">
                    <span class="support-name">Hoàng Tạo</span><br>
                    <span class="support-phone">0987 355 209</span>
                </div><!--Support Item-->

                <div class="support-item">
                    <img src="<?php echo base_url('assets/font-end');?>/images/support/4.jpg" width="57" height="57" alt="Nhân viên hỗ trợ 1">
                    <span class="support-name">Hà Kiên</span><br>
                    <span class="support-phone">0946 435 292</span>
                </div><!--Support Item-->

                <a href="http://online.gov.vn/HomePage/CustomWebsiteDisplay.aspx?DocId=4058" class="spres-regester" target="_blank"> <img src="http://vuabanle.vn/public/font-end/images/chungnhan.jpg" title="" alt=""></a>

            </div>
        </div><!--End Footer Mod 1-->

        <div class="footer-mod-2">
            <h4>Đăng ký nhận tin khuyến mãi</h4>
            <div class="footer-mod-2-content">
                <table>
                    <tr>
                        <td><input type="text" placeholder="Nhập Email của bạn để đăng ký" value class="email-text"></td>
                        <td><input type="button" value="Đăng ký" class="register-button"></td>
                    </tr>
                </table>
            </div>
        </div><!--End Footer Mod 2-->

        <div class="footer-mod-2">
            <h4>Hỗ trợ thanh toán</h4>
            <div class="footer-mod-2-content">
                <img src="<?php echo base_url('assets/font-end');?>/images/payment/card.jpg" alt="card">
                <img src="<?php echo base_url('assets/font-end');?>/images/payment/AGRIBANK.jpg" alt="AGRIBANK">
                <img src="<?php echo base_url('assets/font-end');?>/images/payment/BIDV.jpg" alt="BIDV">
                <img src="<?php echo base_url('assets/font-end');?>/images/payment/MARITIME.jpg" alt="MARITIME">
                <img src="<?php echo base_url('assets/font-end');?>/images/payment/TECHCOM.jpg" alt="TECHCOM">
                <img src="<?php echo base_url('assets/font-end');?>/images/payment/VIETCOMBANK.jpg" alt="VIETCOMBANK">
                <img src="<?php echo base_url('assets/font-end');?>/images/payment/Vietinbank.jpg" alt="Vietinbank">

            </div>
        </div><!--End Footer Mod 2-->

        <div class="footer-mod-2">
            <h4></h4>
            <div class="footer-mod-2-content">
                <div class="share-icon">
                    <a href="https://twitter.com/Vuabanlevn" ta="" class="twitter" target="_blank"></a><span> Twitter</span>
                    <a href="https://www.facebook.com/Vuabanle.vn?ref=hl" class="facebook" target="_blank"></a><span>Facebook </span>
                    <a href="https://plus.google.com/107085357342806112435/posts" class="google" target="_blank"></a><span>Google</span>
                </div>
            </div>
        </div><!--End Footer Mod 2-->

    </div><!--End Footer Module-->

    <div id="copy-right">
        <span>
            <b>ĐƯỢC VẬN HÀNH BỜI SMART VIỆT JSC</b><br>
            Địa chỉ: Số 75 Trung Kính, Trung Hòa, Cầu Giấy, Hà Nội, Thành lập ngày 07 tháng 09 năm 2011, Mã số doanh nghiệp: 0105486972<br>
            Điện thoại: (04) 6329 7119 | Fax: (04) 6329 7119 | Email: info@vuabanle.vn
        </span>
    </div><!--End Copy Right-->
</footer>

</body>
</html>
