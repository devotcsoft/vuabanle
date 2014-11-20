<!doctype html>
<html>
<head>
    <!-- This infomations is optimized with SEO -->
    <link href="<?php echo base_url('assets/font-end');?>/home-breadcrumb.ico" rel="shortcut icon" type="image/vnd.microsoft.icon"><!-- Thay link ảnh biểu tượng website -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><!-- Mã nguồn Website (Giữ nguyên) -->
    <meta charset="utf-8">

	<?php if(!empty($meta)){ ?>
	<title><?php echo $meta['title']; ?></title>
	<meta name="description" content="<?php echo $meta['description']; ?>"/>
	<meta name="keywords" content="<?php echo $meta['keywords']; ?>" />
	<?php }else { ?>
	<title>Vua bán lẻ | Home</title>
	<meta name="description" content="Vua bán lẻ"/>
	<meta name="keywords" content="Chuyên bán buôn bán lẻ" />
	<?php }?>

    <meta name="robots" content="noodp,index,follow" /><!-- Quy định cho robot (Giữ nguyên)-->
    <meta name="author" content="Author Name, authoremail@domain.com" /><!-- Tác giả website -->
    <meta http-equiv="content-language" content="vi_VN" /><!-- Ngôn ngữ cho website -->

    <meta property="og:locale" content="vi_VN" /><!-- Địa phương -->
    <meta property="og:type" content="article" /><!-- Phân loại website (Thường là article) -->
    <meta property="og:url" content="http://ten-website.com/" /><!-- Địa chỉ chính của Website -->
    <meta property="og:site_name" content="Tên website" /><!-- Tên Website-->
    <meta property="og:image" content="http://ten-website.com/images/logo.jpg" /><!-- Đường dẫn ảnh logo công ty-->

    <!-- **CSS - stylesheets** -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/font-end');?>/css/category.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/font-end');?>/css/main-slider.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/font-end');?>//css/main-menu.css">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/font-end');?>/css/main-menu.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/font-end');?>/css/filter-price.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/font-end');?>/css/popup.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/font-end');?>/css/popbox.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/font-end');?>/css/checkout.css">
    
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/font-end');?>/popup/style.popup.home.css">

    <!-- **jQuery** -->
    <script type="text/javascript" src="<?php echo base_url('assets/font-end');?>/js/jquery-1.11.1.min.js"></script>
     <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/font-end');?>/js/main-slider.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/font-end');?>/js/brand-filter.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/font-end');?>/js/filter-price.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/font-end');?>/js/jquery.popup.min.js"></script>
    
    <script type="text/javascript" src="<?php echo base_url('assets/font-end');?>/popup/jquery.cookie.popup.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/font-end');?>/popup/maincookie.popup.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/font-end');?>/js/popbox.js"></script>

    <!-- // HOME -->
    <?php if($this->uri->segment(1) && $this->uri->segment(1) != null){ ?>
    	<!-- **CSS - stylesheets** -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/font-end');?>/css/style-page.css">
		<!-- **jQuery** -->
    	<script type="text/javascript" src="<?php echo base_url('assets/font-end');?>/js/fix-top-page.js"></script>
    <?php }else { ?>
    	<!-- **CSS - stylesheets** -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/font-end');?>/css/style-home.css">
		<!-- **jQuery** -->
		<script type="text/javascript" src="<?php echo base_url('assets/font-end');?>/js/fix-top.js"></script>
    <!-- // NO HOME -->
    <?php } ?>
    
   <script type="text/javascript">
   $(document).ready(function () {
	    getlist();
	});
	function formatCurrency(num) {
	    num = num.toString().replace(/\$|\,/g, '');
	    if (isNaN(num)) num = "0";
	    sign = (num == (num = Math.abs(num)));
	    num = Math.floor(num * 100 + 0.50000000001);
	    num = Math.floor(num / 100).toString();
	    for (var i = 0; i < Math.floor((num.length - (1 + i)) / 3); i++)
	    num = num.substring(0, num.length - (4 * i + 3)) + ',' + num.substring(num.length - (4 * i + 3));
	    return (((sign) ? '' : '-') + num);
	}
	function getlist() {
	    $.ajax({
	        cache: false,
	        async: false,
	        url: '<?= base_url(); ?>cart/add',
	        type: "GET",
	        dataType: "json",
	        success: function (response) {
	            var count = 0;
	            var htmlString = '';

	            htmlString +='<div class="popup-header">';
	            htmlString +='<a class="close_popup" href="javascript:void(0)"></a>';
		            htmlString +='<table class="title-list-product">';
		            htmlString +='<tr>';
		                htmlString +='<td class="img-product-list">Sản phẩm</td>';
		                    htmlString +='<td class="name-product-list"></td>';
		                    htmlString +='<td class="price-product-list">Giá</td>';
		                    htmlString +='<td class="number-product-list">Số lượng</td>';
		                    htmlString +='<td class="sum-product-list">Tổng cộng</td>';
		                    htmlString +='</tr>';
		                htmlString +='</table>';
		            htmlString +='</div>';
		        htmlString +='<div class="info_popup">';
		        htmlString +='<div class="list-product">';
		            htmlString +='<table>';
			            $.each(response.data, function (key, value) {
			                count = count + 1;
			                var idHdPrice = 'hdPrice' + value.id;
			                var idddlGia = 'ddlGia' + value.id;
			                var idBtnXoa = 'btnXoa' + value.id;
			                var idDllQuantity = "dllQuantity" + value.id;
			                var idlblThanhTien = "lblThanhTien" + value.id;

			                htmlString +='<tr>';
		                    htmlString +='<td class="img-product-list"><a href="<?php echo base_url();?>'+value.seo_name+'"><img src="' +value.Picture+ '" alt="'+ value.Name +'" title="'+ value.Name +'" width="100"></a></td>';
	                        htmlString +='<td class="name-product-list">';
	                        htmlString +='<a href="<?php echo base_url();?>'+value.seo_name+'">'+ value.Name +'</a>';
	                            htmlString +='<div class="function-status">';
	                            htmlString +='<span class="status2">'+value.hang+'</span> | <a href="#" id=' + idBtnXoa + '  class="delete-product-item"  onclick="DeleteCart('+value.id+')">Xóa</a>';
	                                htmlString +='</div>';
	                            htmlString +='</td>';
	                            //console.log(value.giagiam);
	                        if(value.giagiam != null && value.giagiam != 0){
	                        htmlString +='<td class="price-product-list"><span class="new">'+ formatCurrency(value.giagiam)+' VNĐ</span><br><span class="old">'+ formatCurrency(value.gia)+' VNĐ</span></td>';
		                    }else{
		                    	htmlString +='<td class="price-product-list"><span class="new">'+ formatCurrency(value.gia)+' VNĐ</span><br></td>';
			                }

	                        htmlString +='<td class="number-product-list"><input id="quanlity'+ value.id +'" onchange="Calulator(' + value.id + ')" type="text" value="' +value.qty+ '"><input type="hidden" id="' + idHdPrice + '"  value ="' + value.Price + '"/><input type="hidden" id="rowid'+ value.id +'" class="" value="'+value.rowid+'" ></td>';
	                        htmlString +='<td class="sum-product-list hdpriceqty'+value.id+'">' +formatCurrency(value.qty*value.Price )+ ' VNĐ</td>';
	                        htmlString +='</tr>';
			            });

		                    htmlString +='</table>';
		                htmlString +='</div>';
		            htmlString +='<div class="continue">';
		            htmlString +='<span class="count-product">Bạn có <span class="color">' +response.total_record+ '</span> sản phẩm trong giỏ hàng</span><br><br>';
		                htmlString +='<a href="#" class="continue-buy">Quay lại tiếp tục mua hàng</a>';
		                htmlString +='</div>';
		            htmlString +='<div class="calculator">';
		            htmlString +='<table>';
		                htmlString +='<tr>';
		                    htmlString +='<td class="total">Tổng cộng</td>';
		                        htmlString +='<td class="number-total">' +formatCurrency(response.total)+ ' VNĐ</td>';
		                        htmlString +='</tr>';
		                    htmlString +='<tr>';
		                    htmlString +='<td class="total-money">Thành tiền</td>';
		                        htmlString +='<td class="number-total-money">' +formatCurrency(response.total)+ ' VNĐ</td>';
		                        htmlString +='</tr>';
		                    htmlString +='<tr>';
		                    htmlString +='<td></td>';
		                        htmlString +='<td class="vat">Đã bao gồm VAT</td>';
		                        htmlString +='</tr>';
		                    htmlString +='</table>';
		                htmlString +='<a href="<?php echo base_url('checkout/step2.html'); ?>" class="pay">Tiến hành đặt hàng </a>';
		                htmlString +='</div>';
		            htmlString +='</div>';



	            //console.log(count);
	            $("#popup_content").html(htmlString);
	            $("#lblCountCart").text(count + " Sản phẩm");
	            $(".number-cart").text(response.total_record);
	        }

	    });
	}

	function Calulator(id) {
	    var cartqty = $("#quanlity" + id).val();
	    var cartid = $("#rowid" + id).val();
	    var hdPrice = $("#hdPrice" + id).val();
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
	        success: function (response) {
	        	$(".hdpriceqty"+id).text(formatCurrency(cartqty * hdPrice) + ' VNĐ');
	            $(".number-total").text(formatCurrency(response.total) + ' VNĐ');
	            $(".number-total-money").text(formatCurrency(response.total) + ' VNĐ');
	            $(".color").text(response.total_record);
	            $(".number-cart").text(response.total_record);
	        }
	    });
	}

	function DeleteCart(id) {
	    var cartid = $("#rowid" + id).val();
	    //console.log(cartid);
	    $.ajax({
	        cache: false,
	        async: false,
	        url: '<?= base_url(); ?>cart/delete',
	        type: "POST",
	        data: {
	            cartid: cartid
	        },
	        dataType: "json",
	        success: function (response) {
	            getlist();
	        }
	    });
	}


	function mua(id, price, name) {
	    var id = id;
	    var price = price;
	    var name = name;
	    //console.log(name);
	    //console.log(price);
	    var quanlity = 1;
	    var color = $(this).attr('color');
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
<script type='text/javascript'>window._sbzq||function(e){e._sbzq=[];var t=e._sbzq;t.push(["_setAccount",5030]);var n=e.location.protocol=="https:"?"https:":"http:";var r=document.createElement("script");r.type="text/javascript";r.async=true;r.src=n+"//static.subiz.com/public/js/loader.js";var i=document.getElementsByTagName("script")[0];i.parentNode.insertBefore(r,i)}(window);</script>  	    
</head>

<body>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-41788948-1', 'auto');
  ga('send', 'pageview');

</script>   
<!-- ORDER -->
<script type="text/javascript" language="JavaScript">
    $(function(){
        /* khởi tạo popup */
        $('input[rel*=miendatwebPopup]').showPopup({
            top : 60, //khoảng cách popup cách so với phía trên
            closeButton: ".close_popup" , //khai báo nút close cho popup
            closeButton: ".continue-buy" , //khai báo nút close cho popup
            scroll : false, //cho phép scroll khi mở popup, mặc định là không cho phép
            onClose:function(){

            }
        });
    });
</script>
<div style="height: 0px;">
    <!-- Google Code dành cho Thẻ tiếp thị lại -->
    <!--------------------------------------------------
    Không thể liên kết thẻ tiếp thị lại với thông tin nhận dạng cá nhân hay đặt thẻ tiếp thị lại trên các trang có liên quan đến danh mục nhạy cảm. Xem thêm thông tin và hướng dẫn về cách thiết lập thẻ trên: http://google.com/ads/remarketingsetup
    --------------------------------------------------->
    <script type="text/javascript">
    /* <![CDATA[ */
    var google_conversion_id = 988433195;
    var google_custom_params = window.google_tag_params;
    var google_remarketing_only = true;
    /* ]]> */
    </script>
    <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
    </script>
    <noscript>
    <div style="display:inline;">
    <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/988433195/?value=0&amp;guid=ON&amp;script=0"/>
    </div>
    </noscript>
    <script>(function() {
  var _fbq = window._fbq || (window._fbq = []);
  if (!_fbq.loaded) {
    var fbds = document.createElement('script');
    fbds.async = true;
    fbds.src = '//connect.facebook.net/en_US/fbds.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(fbds, s);
    _fbq.loaded = true;
  }
  _fbq.push(['addPixelId', '298819090299063']);
})();
window._fbq = window._fbq || [];
window._fbq.push(['track', 'PixelInitialized', {}]);
</script>
<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?id=298819090299063&amp;ev=PixelInitialized" /></noscript>
</div>
 <script>
$(function() {
var availableTags = [
	<?php foreach($selectAllNameProduct as $selectAllNameProduc){ 
		echo '"'.$selectAllNameProduc['productName'].'",';
	}?>
];
$( "#keysearch" ).autocomplete({
source: availableTags
});
});
</script>

<div id="popup_content" class="popup">

</div><!--End Popup Content-->

<header id="header">
    <div id="header-inner">
        <div id="logo">
            <a href="<?php echo base_url();?>"><img id="logo-images" src="<?php echo base_url('assets/font-end');?>/css/images/logo.png" alt="Vua bán lẻ" title="Vua bán lẻ"></a>
        </div><!--End Logo-->

        <div id="search-box">
            <form id="search-form" action="<?= base_url('search') ?>" method="POST">
                <div id="search-input">
                    <div id="icon-search"></div>
                    <input type="text" name="keysearch" id="keysearch" class="key-search" placeholder="Nhập từ khóa tìm kiếm..." value>
                    <div id="group-search">
                        <div class="title-group" id="title-group">Tất cả danh mục</div>
                        <ul id="list-group">
                            <li>Tất cả danh mục</li>
                            <?php foreach($getCateSearchs as $getCateSearch):?>
                            <li>
                            	<input type="hidden" value="<?php echo $getCateSearch['catId'];?>" name="cat">
                            	<?php echo word_limiter($getCateSearch['catName'], 5, '...'); ?>
                            </li>
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

        <div id="login" class="">
            <span class="title-login">
                <div class="register-button-top">
                    <a href="#">Đăng ký</a> | &nbsp;
                </div>

                <div class="popbox login-button-top">
                    <a class="open" href="#">Đăng nhập</a>

                    <div class="collapse">
                        <div class="box">
                            <div style="left: 165px;" class="arrow"></div>
                            <div style="left: 165px;" class="arrow-border"></div>

                            <form id="subForm">
                                <table>
                                    <tr>
                                        <td>Email <span class="red">*</span></td>
                                        <td><input type="text" class="text"></td>
                                    </tr>
                                    <tr>
                                        <td>Mật khẩu <span class="red">*</span></td>
                                        <td><input type="password" class="text"></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><span class="forgot-pass"><a href="#">Quên mật khẩu?</a></span></td>
                                    </tr>
                                    <tr>
                                        <td class="button-f"><input type="submit" class="login" value="Đăng nhập"></td>
                                        <td class="button-f"><a href="#" class="close">Hủy bỏ</a></td>
                                    </tr>

                                </table>
                            </form>

                        </div>
                    </div>
                </div>
            </span>
            <br>
            <span class="meta-login">Tài khoản & Đơn hàng</span>



            <script type="text/javascript" charset="utf-8">
                $(document).ready(function(){
                    $('.popbox').popbox();
                });
            </script>
        </div><!--End Login-->

        <div id="shopping-cart">
            <span class="title-login" href="#popup_content" rel="miendatwebPopup" name="open_popup" id="open_popup" class="buy-now">
            	<input type="button" value="Giỏ hàng" href="#popup_content" rel="miendatwebPopup" name="open_popup" id="open_popup" class="buy-now">
            	</span>&emsp;<span class="number-cart">9</span><br>
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
                    	<?php echo '<a href=',base_url($menu['keypage']),'>',word_limiter($menu['catName'], '6', '...'),'</a>';?>
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
                                <li><a href="<?php echo base_url($menu2['keypage']);?>.html"><?php echo $menu2['catName']; ?></a>
                                	<?php if($menu2['cate_child2']){ ?>
                                    <div class="level-2">
                                        <ul>
                                        	<?php foreach ($menu2['cate_child2'] as $menu3):?>
                                        	<li><a href="<?php echo base_url($menu3['keypage']);?>.html"><?php echo $menu3['catName']; ?></a></li>
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
									echo "<img src=$imgAd->linkAds alt=$imgAd->imgAd>";
                        		}
                        	}?>
                        </div>
                    </div>
                </li>
                <?php endforeach;?>
                <div id="sale">
                    <a href="<?php echo base_url('khuyen-mai-lon');?>"><img src="<?php echo base_url('assets/font-end');?>/css/images/sale.jpg"></a>
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
                     <a class="tooltip" href="<?php echo base_url('chinh-sach/van-chuyen-toan-quoc.html'); ?>">
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
            <span>HOTLINE : <span class="orange">0932 221 285</span></span>
        </div><!--End Hotline-->
    </div><!--End Top Inner-->
</section><!--End Top-->



<!-- CONTENT -->
<?= $main_content ?>
<!-- END CONTENT -->

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
