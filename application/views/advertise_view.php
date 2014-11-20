
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?= $meta['title']?></title>
        <meta name="description" content="<?= $meta['description']?>">
        <meta name="keywords" content="<?= $meta['keywords']?>">
        <link rel="icon" type="image/ico" href="<?php echo base_url().'public/libs/';?>favicon.ico"/>
        <link rel="stylesheet" type="text/css" href="<?= base_url('public/font-end')?>/css/style.css" media="all">
        <link rel="stylesheet" type="text/css" href="<?= base_url('public/font-end')?>/css/magnific-popup.css" >
        <script type="text/javascript" src="<?= base_url('public/font-end')?>/js/jquery-1.8.1.min.js"></script>
        <script src="<?= base_url('public/font-end')?>/js/menucatalog.js"></script>
        <script src="<?= base_url('public/font-end')?>/js/1399642332.js"></script>
        <link rel="stylesheet" href="<?= base_url('public/font-end')?>/css/popupwindow.css">
        <script src="<?= base_url('public/font-end')?>/js/popupwindow.js"></script>
        <script src="<?= base_url('public/font-end')?>/js/demo.js"></script>
        <link rel="stylesheet" type="text/css" href="<?= base_url('public/font-end')?>/css/Cart.css">
        <script src="<?= base_url('public/font-end')?>/js/jquery.shopping.js"></script>

    </head>
    <body data-control="Catalog">
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

        <!-------end#page-top--->
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
                                    <form id="contact" action="<?= base_url('dang-nhap/kiem-tra'); ?>" method="POST">
                                        <fieldset>
                                            <p>
                                                <label for="email">E-mail (*) </label>
                                            </p>
                                            <p>
                                                <input type="text" id="email" name="email" >
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
        
                                    <form action="<?= base_url('dang-ky'); ?>" method="POST">
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
                            <li><a href="<?php echo base_url().'dang-xuat'?>">Đăng xuất</a></li>    
                            
                            <?php
                            }
                            
                            ?>
                </ul>
            
            </div>
        </div>
    </div>
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
                    </div>
                    <!-----end#header-top--->
                    <div id="nav-top" class="header">
                        <div class="wrap">
                            <div class="menu-top">
                                <div class="MainBar">
                                    <nav id="menu" class="hdMenu">
                                        <div class="navWrapper navWrapper-index navWrapper-mu"
                                            id="spinbasketmenu">
                                            <div class="nav-sub-visible">
                                            <div class="navWrapperBackground">
                                                <div class="navWrapperBackground_arrow"></div>
                                            </div>
                                            <a class="navAllCat showMenu" href="#"> Danh mục sản phẩm </a>
                                            <a class="navDropdown" href="#"></a>
                                            <div class="navSub-wrapper">
                                                <ul class="navSub">
                                                    <?php foreach($getParentID0s as $getParentID0): ?>
                                                    <li class="multiMenu"  data-sub-menu="navLayer_<?= $getParentID0['catID'] ?>">
                                                        <a class="catArrow " href="<?= base_url($getParentID0['keypage'].'.html')?>"> <span class="navSubTxt"><?= $getParentID0['catName'] ?></span> </a>
                                                    </li>
                                                    <?php endforeach ?>
                                                </ul>
                                                <div class="submenuWrapper" style="margin-top:5px;">
                                                    <?php foreach($getParentID0s as $getParentID0one): ?>
                                                    <div id="navLayer_<?= $getParentID0one['catID'] ?>" class="navLayer" style="display: none;">
                                                        <div class="navLayerSub clearfix">
                                                            <?php
                                                            $lv2 = $this->category_model->getAllCateMenuParent($getParentID0one['catID']); 
                                                            while ($wlv2 = mysql_fetch_array($lv2)){ ?> 
                                                                <div class="navCol navCol1">
                                                                    <div class="nav-title">
                                                                        <a href="<?= base_url($wlv2['keypage'].'-pd.html')?>"><?= $wlv2['catName'] ?></a>
                                                                    </div>
                                                                    <?php
                                                                        $lv3 = $this->category_model->getAllCateMenuParent($wlv2['catID']);
                                                                        while ($wlv3 = mysql_fetch_array($lv3)){ 
                                                                    ?>
                                                                    <div class="nav-linklist">
                                                                        <a href="<?= base_url($wlv2['keypage'].'-pd-pr'.$wlv3['catID'].'-th0-tt0-od0').'.html'?>" class="bsncLink"><?= $wlv3['catName'] ?></a>
                                                                    </div>
                                                                    <div class="brand-list"></div>
                                                                    <?php } ?>
                                                                   
                                                                </div>
                                                            <?php } ?>
                                                        </div>
                                                        <div class="catImg catImg-inside" style="max-height: 343px;">
                                                            <!-- Image in .png format -->
                                                            <a href="#"> <span class="" data-src="<?php echo base_url().$getParentID0one['anhngoai']?>">
                                                            <img src="<?php echo base_url().$getParentID0one['anhngoai']?>"></span> </a>
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
                            </div>
                            <div class="search-home">
                                <form action="<?= base_url('search') ?>" id="search-box" method="POST">
                                    <div class="search-wapper">
                                        <input type="text" class="text-search" name="keysearch"
                                            placeholder="nhập từ khóa cần tìm" />
                                        <button type="submit" class="search-btn">TÌM KIẾM</button>
                                    </div>
                                </form>
                            </div>
                             <div class="like-face">
                            <div id="fb-root"></div>
                            <script>(function(d, s, id) {
                              var js, fjs = d.getElementsByTagName(s)[0];
                              if (d.getElementById(id)) return;
                              js = d.createElement(s); js.id = id;
                              js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&appId=523120354477414&version=v2.0";
                              fjs.parentNode.insertBefore(js, fjs);
                            }(document, 'script', 'facebook-jssdk'));</script>
                            <div class="fb-like" data-href="https://www.facebook.com/Vuabanle.vn" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
                        </div>
                    
                        </div>
                    
                    </div>
                    <div class="clear-float"></div>
                    <!--------end#nav-top---->
            
            </div>
            <!-------end#header--->
                       
                                        <script src="<?= base_url('public/font-end')?>/js/jquery-scrolltofixed.js" type="text/javascript"></script>
                                             
<script>
    $(document).ready(function() {

        // Dock the header to the top of the window when scrolled past the banner.
        // This is the default behavior.

        $('.header').scrollToFixed();


 
    });
</script>
            <div id="content">
                <div class="content-top">
                    <div class="wrap"></div>
                </div>
                <!------end.content-top--->
                <div class="product-advertising">
                   

                </div>
                <!-----end.product-advertisingt--->
                <div class="content-main">
                    <div class="wrap">
                        <div class="left-content">

                            <ul class="fct-list">
                                <li class="fct category-segment fct-box-category">
                                    <?php
                                    $getUrl = $_SERVER['REDIRECT_QUERY_STRING'];
                                    $strGetUrl = substr($getUrl, 1);
                                    $explodeUrl1 = explode("-qc", $strGetUrl);
                                    $namepd=$explodeUrl1[0];
                                    $explodeUrl = explode("-pd-", $strGetUrl);
                                    
                                    if(isset($explodeUrl[1]) || isset($_GET['price_from']))
                                    {
                                        @$explodeUrlSearch = explode("-", $explodeUrl[1]);
                                        echo "<pre>";
                                        //var_dump($explodeUrlSearch);
                                        echo "</pre>";
                                        @$CateParent = filter_var($explodeUrlSearch[0], FILTER_SANITIZE_NUMBER_INT);
                                        @$Catebrand = filter_var($explodeUrlSearch[1], FILTER_SANITIZE_NUMBER_INT);
                                        @$CateTt = filter_var($explodeUrlSearch[2], FILTER_SANITIZE_NUMBER_INT);
                                        @$CateOrder = filter_var($explodeUrlSearch[3], FILTER_SANITIZE_NUMBER_INT);
                                    ?>
                                    
                                       
                                    <div class="categoryMenu filter-cancel box-bdr box-bgcolor fsm">
                                        <div class="h4 fct-hd">
                                            Lọc bởi
                                        </div>
                                        <div class="fct-list fct-list-browse_by">
                                            <div>
                                            	  
                                                <?php if(isset($_GET['price_from']) && isset($_GET['price_to']) ){ ?>
                                                <a class="fct-cancel" href="<?= base_url($uriproduct).'-pd-pr0'.'.html'?><?php if(isset($Catebrand) && $Catebrand != ""){ echo '-th'.$Catebrand; }else { echo '-th0';} ?>-tt<?php if(isset($CateTt) && $CateTt != ""){ echo $CateTt; }else { echo 0;} ?>-od<?php if(isset($CateOrder) && $CateOrder != ""){ echo $CateOrder; }else { echo 0;} ?>"> <span class="fct-cancel__type">Giá sp:</span>
                                                     <?php echo Utility_model::price_format($_GET['price_from']).'VNĐ<br/>'.Utility_model::price_format($_GET['price_to']).'VNĐ' ?>
                                                <span class="fct-cancel-button">×</span> </a>
                                                <?php }?>
                                               
                                                <?php if(isset($CateParent) && $CateParent != 0 ){ ?>
                                                <a class="fct-cancel" href="<?= base_url().$namepd.'-qc-pd-pr0'?><?php if(isset($Catebrand) && $Catebrand != ""){ echo '-th'.$Catebrand; }else { echo '-th0';} ?>-tt<?php if(isset($CateTt) && $CateTt != ""){ echo $CateTt; }else { echo 0;} ?>-od<?php if(isset($CateOrder) && $CateOrder != ""){ echo $CateOrder; }else { echo 0;} ?>"> <span class="fct-cancel__type">Loại sp:</span>
                                                     <?php foreach($getCategoryUsingParent as $getCategoryUsingParentnotice){
                                                        if($CateParent == $getCategoryUsingParentnotice['catID'] )
                                                        {
                                                            echo $getCategoryUsingParentnotice['catName'];
                                                        } 
                                                     }?>
                                                <span class="fct-cancel-button">×</span> </a>
                                                <?php }?>
                                                <?php if(isset($Catebrand) && $Catebrand != 0 ){ ?>
                                                <a class="fct-cancel" href="<?= base_url().$namepd.'-qc';  ?><?php if(isset($CateParent) && $CateParent != ""){ echo '-pd-pr'.$CateParent; }else { echo '-pd-pr0';} ?><?php echo '-th0'; ?>-tt<?php if(isset($CateTt) && $CateTt != ""){ echo $CateTt; }else { echo 0;} ?>-od<?php if(isset($CateOrder) && $CateOrder == ""){ echo $CateOrder; }else { echo 0;} ?>"> <span class="fct-cancel__type">Thương hiệu sp:</span>
                                                     <?php foreach($getAllBrands as $getAllBrand){
                                                        if($Catebrand == $getAllBrand['catID'] )
                                                        {
                                                            echo $getAllBrand['catName'];
                                                        } 
                                                     }?>
                                                     
                                                <span class="fct-cancel-button">×</span> </a>
                                                <?php }?>
                                                <?php if(isset($CateTt) && $CateTt != 0 ){ ?>
                                                <a class="fct-cancel" href="<?= base_url().$namepd.'-qc';  ?><?php if(isset($CateParent) && $CateParent != ""){ echo '-pd-pr'.$CateParent; }else { echo '-pd-pr0';} ?><?php if(isset($Catebrand) && $Catebrand != ""){ echo '-th'.$Catebrand; }else { echo '-th0';} ?>-tt0-od<?php if(isset($CateOrder) && $CateOrder != ""){ echo $CateOrder; }else { echo 0;} ?>"> <span class="fct-cancel__type">Hàng:</span>
                                                     <?php 
                                                        if($CateTt == 1)
                                                        {
                                                            echo "Sản phẩm mới";
                                                        }else {
                                                            echo "Sản phẩm HOT";
                                                        } 
                                                     ?>
                                                <span class="fct-cancel-button">×</span> </a>
                                                <?php }?>
                                                <?php if(isset($CateOrder) && $CateOrder != 0 ){ ?>
                                                <a class="fct-cancel" href="<?= base_url().$namepd.'-qc'; ?><?php if(isset($CateParent) && $CateParent != ""){ echo '-pd-pr'.$CateParent; }else { echo '-pd-pr0';} ?><?php if(isset($Catebrand) && $Catebrand != ""){ echo '-th'.$Catebrand; }else { echo '-th0';} ?>-tt0-od0"> <span class="fct-cancel__type">Hàng:</span>
                                                     <?php 
                                                        if($CateOrder == 1)
                                                        {
                                                            echo "Giá cao đến thấp";
                                                        }else {
                                                            echo "Giá thấp đến cao";
                                                        } 
                                                     ?>
                                                <span class="fct-cancel-button">×</span> </a>
                                                <?php }?>
                                            </div>
                                            <a class="rfloat fct__cancell-all-link" href="<?php echo base_url().$namepd.'-qc' ?>">Xoá tất cả</a>
                                        </div>
                                    </div>
                                    <?php } ?>
                                  
                                
                                    <div class="h4 fct-hd">
                                        Tất cả sản phẩm 
                                    </div>
                                    <div style="" class="fct-bd">
                                        <ul class="cnv fct-category sel-catalog-category">
                                            <li class="cnv-level-1 childSelected cnv-levelChilds" >
                                                <ul class="cnv-subCat-1 cnv-subCat-1_no-segment">
                                                    <?php foreach($getCategoryUsingParent as $getCategoryUsingParent): ?>
                                                    <li class="cnv-level-2 cnv-levelChilds" >
<a href="<?= base_url().$namepd.'-qc-pd-pr'.$getCategoryUsingParent['catID'] ?><?php if(isset($Catebrand) && $Catebrand != ""){ echo '-th'.$Catebrand; }else { echo '-th0';} ?>-tt<?php if(isset($CateTt) && $CateTt != ""){ echo $CateTt; }else { echo 0;} ?>-od<?php if(isset($CateOrder) && $CateOrder != ""){ echo $CateOrder; }else { echo 0;}?><?php if(isset($_GET['price_from']) && isset($_GET['price_to'])){ echo '?price_from='.$_GET['price_from'].'&price_to='.$_GET['price_to']; } ?>" class="cnvicon_i-arrowRightDark"><span class="cssicon i-arrowRightDark"><?= $getCategoryUsingParent['catName']?></span><span class="cnv-items"> (<?= Products_model::countAllProductUsingCateStatic($getCategoryUsingParent['catID']) ?>)</span></a>
                                                    </li>
                                                    <?php endforeach; ?>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>

                                </li>
                                <li class="fct brands fct-box-brand">
                                    <div class="h4 fct-hd">
                                        Thương hiệu
                                    </div>
                                    <div style="" class="fct-bd">

                                        <div id="fct-brand-search" class="box fct-search-box">
                                            <input class="ui-inputText fss" placeholder="Tìm theo thương hiệu ..." type="text">
                                            <span class="icon i-search icon-filter-search"></span>
                                        </div>

                                        <ul style="height: 84px;" id="facet_brand" class="cnv fct-scroll brands">
                                            <?php foreach($getAllBrands as $getAllBrand): ?>
                                            <li class="cnv-level-1" id="filter__brand--1">
                                                <div class="cnv-level-1__item">
                                                    <!--<input value="" class="cnv-level-1__checkbox " type="checkbox">-->
                                                    <?php $countBrand = Products_model::CountProductUsingBrand($getAllBrand['catID']); ?>
                                                    <?php if($countBrand || $countBrand > 0){ ?>
                                                       <a href="<?= base_url().$namepd.'-qc' ?><?php if(isset($CateParent) && $CateParent != ""){ echo '-qc-pd-pr'.$CateParent; }else { echo '-pd-pr0';} ?><?php echo '-th'.$getAllBrand['catID']; ?>-tt<?php if(isset($CateTt) && $CateTt != ""){ echo $CateTt; }else { echo 0;} ?>-od<?php if(isset($CateOrder) && $CateOrder != ""){ echo $CateOrder; }else { echo 0;} ?><?php if(isset($_GET['price_from']) && isset($_GET['price_to'])){ echo '?price_from='.$_GET['price_from'].'&price_to='.$_GET['price_to']; } ?>" class="cnv-level-1__item-link"><?php echo $getAllBrand['catName'] ?><span class="cnv-items">(<?= Products_model::CountProductUsingBrand($getAllBrand['catID']) ?>)</span></a>    
                                                    <?php }else { ?>
                                                        <a class="cnv-level-1__item-link"><?php echo $getAllBrand['catName'] ?><span class="cnv-items"></span></a>
                                                    <?php }  ?>
                                                    
                                                </div>
                                            </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>

                                </li>
                                <?php
                                function getUrl() {
                                  $url  = @( $_SERVER["HTTPS"] != 'on' ) ? 'http://'.$_SERVER["SERVER_NAME"] :  'https://'.$_SERVER["SERVER_NAME"];
                                  $url .= ( $_SERVER["SERVER_PORT"] !== 80 ) ? ":".$_SERVER["SERVER_PORT"] : "";
                                  $url .= $_SERVER["REQUEST_URI"];
                                  return $url;
                                }
                                
                                ?>
                                <div class="h4 fct-hd">
                                    Giá
                                </div>
                                <div class="fct-bd" style="">
                                    <div class="priceRangeSliderBox" id="facet-facet_price">
                                        <!-- Range Slider -->
                                        <div class="slider-range noUi-target noUi-ltr noUi-horizontal noUi-background" data-rangestep="5"></div>
                                        <form class="priceRangeForm">
                                            <div class="sliderInput clearfix">
                                                <div class="priceRangeFrom ">
                                                    <input class="ui-inputText fss" data-minpricerange="<?= $getMinMaxPrice->giathap ?>" data-minprice="<?= $getMinMaxPrice->giathap ?>" value="<?= $getMinMaxPrice->giathap ?>" name="price_from" maxlength="8" type="text">
                                                    <span>VND</span>
                                                </div>
                                                <div class="priceSeperate">
                                                    -
                                                </div>
                                                <div class="priceRangeTo">
                                                    <input class="ui-inputText fss" data-maxpricerange="<?= $getMinMaxPrice->giacao ?>" data-maxprice="<?= $getMinMaxPrice->giacao ?>" value="<?= $getMinMaxPrice->giacao ?>" name="price_to" maxlength="8" type="text">
                                                    <span>VND</span>
                                                </div>
                                                <input data-pricerangelink="" class="catalogPriceFilterSubmit1 icon icon-filter-submit" value="»" type="submit" />

                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <li class="fct rating fct-box-rating">
                                    <div class="h4 fct-hd">

                                        Đánh giá (Tất cả)
                                    </div>
                                    <div style="" class="fct-bd">
                                        <div class="rating-slider">
                                            <div class="rating-slider-vertical noUi-target noUi-rtl noUi-vertical " id="rating-vertical"></div>
                                        </div>

                                        <div class="rating-detail">
                                            <ul class="cnv fct-scroll brands" id="facet_rating">
                                                <li class="cnv-level-1">
                                                    <span class="rating-star rating-1"></span>
                                                </li>
                                                <li class="cnv-level-1">
                                                    <span class="rating-star rating-2 "></span>
                                                </li>
                                                <li class="cnv-level-1">
                                                    <span class="rating-star rating-3 "></span>
                                                </li>
                                                <li class="cnv-level-1">
                                                    <span class="rating-star rating-4 "></span>
                                                </li>
                                                <li class="cnv-level-1">
                                                    <span class="rating-star rating-5"></span>
                                                </li>
                                            </ul>
                                        </div>
                                        <a class="catalogPriceFilterSubmit"  href="danhmuccon.html"> </a>

                                    </div>

                                </li>
                            </ul>

                        </div>
                        <!-----endleft-content--->

                        <div class="right-content" >
                            <div class="box  productTeaserBox">
                                <!-- Sitemap -->

                                <script src="<?= base_url('public/font-end')?>/js/category.js"></script>
                                <!-- Filter box -->
                                <div class="product-filter-wrapper" style="margin-bottom: 0px;">
                                    <div class="title">
                                        <span>Tìm theo</span>
                                    </div>
                                    <div class="filter">
                                        <div class="filter-name">
                                            <a href="javascript:;" title="">
                                            <?php
                                                if($this->input->post()){
                                                    echo $this->input->post('keysearch');
                                                }else{
                                                    echo $this->input->get('keysearch');
                                                }
                                            ?>
                                            </a>
                                        </div>
                                    </div>
                                    
                                    <?php $strGetUrl = substr($getUrl, 1);
                                    $explodeUrl2 = explode("-qc-", $strGetUrl);
                                    @$explodeUrlSearch1 = explode("-", $explodeUrl2[1]);
                                   
                                    if ($explodeUrlSearch1[0]!="pd")
                                    {?>
                                    	<div class="filter selected orderby">
                                        <div class="filter-name ">
                                        
                                        	<?php 	
                                        		@$CateOrder1 = filter_var($explodeUrl2[1], FILTER_SANITIZE_NUMBER_INT);?>
                                            <?php if(isset($CateOrder1) && $CateOrder1 == 1){ ?>
                                                <a href="<?= base_url().$namepd.'-qc-od1' ?>">Giá cao đến thấp</span></a>
                                            <?php }else { ?>
                                                <a href="<?= base_url().$namepd.'-qc-od2' ?>">Giá thấp đến cao</span></a>
                                            <?php }
                                            ?>
                                        </div>
                                        <div class="filter-list-wrapper">
                                            <ul class="filter-list nolist ">
                                                <li <?php if(isset($CateOrder1) && $CateOrder1 == 1){ echo 'class="checked"';} ?> >
                                                    <a href="<?= base_url().$namepd.'-qc-od1' ?><?php if(isset($_GET['price_from']) && isset($_GET['price_to'])){ echo '?price_from='.$_GET['price_from'].'&price_to='.$_GET['price_to']; } ?>">Giá cao đến thấp</span></a>
                                                </li>
                                                <li <?php if(isset($CateOrder1) && $CateOrder1 == 2){ echo 'class="checked"';} ?> >
                                                    <a href="<?= base_url().$namepd.'-qc-od2' ?><?php if(isset($_GET['price_from']) && isset($_GET['price_to'])){ echo '?price_from='.$_GET['price_from'].'&price_to='.$_GET['price_to']; }?>">Giá thấp đến cao</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <?php 
                                    }
                                    else {
                                    ?>

                                    <!-- Order -->
                                    <div class="filter selected orderby">
                                        <div class="filter-name ">
                                            <?php if(isset($CateOrder) && $CateOrder == 1){ ?>
                                                <a href="<?= base_url().$namepd.'-qc' ?><?php if(isset($CateParent) && $CateParent != ""){ echo '-pd-pr'.$CateParent; }else { echo '-pd-pr0';} ?><?php if(isset($Catebrand) && $Catebrand != ""){ echo '-th'.$Catebrand; }else { echo '-th0';} ?><?php if(isset($CateTt) && $CateTt != ""){ echo '-tt'.$CateTt; }else { echo '-tt0';} ?>-od1">Giá cao đến thấp</span></a>
                                            <?php }else { ?>
                                                <a href="<?= base_url().$namepd.'-qc' ?><?php if(isset($CateParent) && $CateParent != ""){ echo '-pd-pr'.$CateParent; }else { echo '-pd-pr0';} ?><?php if(isset($Catebrand) && $Catebrand != ""){ echo '-th'.$Catebrand; }else { echo '-th0';} ?><?php if(isset($CateTt) && $CateTt != ""){ echo '-tt'.$CateTt; }else { echo '-tt0';} ?>-od2">Giá thấp đến cao</span></a>
                                            <?php }
                                            ?>
                                        </div>
                                        <div class="filter-list-wrapper">
                                            <ul class="filter-list nolist ">
                                                <li <?php if(isset($CateOrder) && $CateOrder == 1){ echo 'class="checked"';} ?> >
                                                    <a href="<?= base_url().$namepd.'-qc' ?><?php if(isset($CateParent) && $CateParent != ""){ echo '-pd-pr'.$CateParent; }else { echo '-pd-pr0';} ?><?php if(isset($Catebrand) && $Catebrand != ""){ echo '-th'.$Catebrand; }else { echo '-th0';} ?><?php if(isset($CateTt) && $CateTt != ""){ echo '-tt'.$CateTt; }else { echo '-tt0';} ?>-od1<?php if(isset($_GET['price_from']) && isset($_GET['price_to'])){ echo '?price_from='.$_GET['price_from'].'&price_to='.$_GET['price_to']; } ?>">Giá cao đến thấp</span></a>
                                                </li>
                                                <li <?php if(isset($CateOrder) && $CateOrder == 2){ echo 'class="checked"';} ?> >
                                                    <a href="<?= base_url().$namepd.'-qc' ?><?php if(isset($CateParent) && $CateParent != ""){ echo '-pd-pr'.$CateParent; }else { echo '-pd-pr0';} ?><?php if(isset($Catebrand) && $Catebrand != ""){ echo '-th'.$Catebrand; }else { echo '-th0';} ?><?php if(isset($CateTt) && $CateTt != ""){ echo '-tt'.$CateTt; }else { echo '-tt0';} ?>-od2<?php if(isset($_GET['price_from']) && isset($_GET['price_to'])){ echo '?price_from='.$_GET['price_from'].'&price_to='.$_GET['price_to']; }?>">Giá thấp đến cao</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <?php }?>
                                    <script type="text/javascript">
                                        $('#ulcatmenu > li > a').each(function() {
                                            var tmp = $(this).attr('href').replace('/', '');
                                            if (tmp.indexOf(caturl) >= 0) {
                                                $(this).addClass('active');
                                                return;
                                            }
                                        });
                                    </script>
                                </div>

                            </div>

                            <div class="box productTeaserBox prd-row" id="catalog-products-list" >
                                <ul class="itemlist" >
                                    <?php foreach($products as $product):?>                                        
                                    <li>
                                        <div class="item view-first1">
                                            <a href="<?= base_url().$product['seo_name'].'.html'?>"> <span> <img src="<?= base_url().$product['productImage']?>" alt=""/></span>
                                            <div class="item-prodinfo">
                                                <?php if($product['giamgia'] != NULL || $product['giamgia'] != ""): ?>
                                                <div class="sb-gdv-disc">
                                                    <div class="sb-gdv-disc__content">
                                                        <?= $product['giamgia'] ?>%
                                                    </div>
                                                </div>
                                                <?php endif ?>
                                                <div class="item-title">
                                                    <?=  $product['productName'] ?>
                                                </div>
                                                <div class="item-stockhim">
                                                    <?php if($product['tinhtranghang'] == 1 ){ echo "Còn hàng";}elseif($product['tinhtranghang'] == 2){ echo "Hết hàng";}else { echo "Sắp có hàng"; } ?>
                                                </div>
                                                <?php if($product['giamgia'] != NULL || $product['giamgia'] != ""){ ?>
                                                    <div class="item-core">
                                                        <?= Utility_model::price_format($product['gia']); ?> VNĐ
                                                    </div>
                                                    <div class="item-price">
                                                        <?= Utility_model::price_format($product['giagiam']); ?> VNĐ
                                                    </div>
                                                <?php }else{ ?>
                                                    <div class="item-price">
                                                        <?= Utility_model::price_format($product['gia']); ?> VNĐ
                                                    </div>
                                                <?php }?>
                                            </div> </a>
                                             <div class="item-hover mask ">
                                                   <a  class="shopping" id="shopping" proid="<?= $product['productID']; ?>"  name="<?= $product['productName']; ?>" price="<?= $product['gia']; ?>">mua hàng</a>
                                            </div>
                                            
                                        </div>
                                    </li>
                                    <?php endforeach; ?>    

                                </ul>
                                <!------ListSanPham---->

                                <div class="l-cell vMid txtRight pgn-pagingWrapper">
                                    <ul data-pagination-controls="true" class="ui-listHorizontal pgn">
                                        <li class="ui-listItem">
                                            <?= $paging  ?>
                                        </li>
                                    </ul>
                                </div>
                                <!----end.Phantrang---->
                            </div>
                            <!--------end.productTeaserBox---->
                        </div>
                        <!-----end.right---->

                    </div>

                </div>
                <!----------endContent-main---->

                <div class="product-Lienqua">

                    <div class="wrap">
                        <div class="box productTeaserBox prd-row" style="padding-top:10px;">
                            <div class="header-title2">
                                <h2 class="lfloat h3"><span class="arrow-icon"></span>&nbsp;&nbsp;Sản phẩm ngẫu nhiên</h2>
                            </div>
                            <ul class="itemlist">
                                <?php foreach ($listProductRandom as $listProductRandoms):?>
                                <li>
                                    <div class="item view-first1">
                                        <a href="<?= base_url().$listProductRandoms['seo_name'].'.html'; ?>"> <span> <img width="200px " height="135px" src="<?= base_url().$listProductRandoms['productImage']?>" alt="<?= $listProductRandoms['productName'] ?>" alt="" />
                                        </span>
                                            <div class="item-prodinfo">
                                                <?php
                                                if($listProductRandoms['giamgia'] == "" || $listProductRandoms['giamgia'] == null){
                                                    
                                                }else { ?>
                                                    <div class="sb-gdv-disc">
                                                        <div class="sb-gdv-disc__content">-<?= $listProductRandoms['giamgia'] ?>%</div>
                                                    </div>
                                                <?php } ?>
                                                
                                                <div class="item-title"><?= $listProductRandoms['productName'] ?></div>
                                                <div class="item-stockhim"><?php if($listProductRandoms['tinhtranghang'] == 1 ){ echo "Còn hàng";}elseif($listProductRandoms['tinhtranghang'] == 2){ echo "Hết hàng";}else { echo "Sắp có hàng"; } ?></div>
                                                <?php
                                                if($listProductRandoms['giamgia'] == "" || $listProductRandoms['giamgia'] == null || $listProductRandoms['giamgia'] == 0){ ?>
                                                    <div class="item-core"> </div>
                                                    <div class="item-price"><?= Utility_model::price_format($listProductRandoms['gia']); ?>  VNĐ</div>
                                                <?php }else { ?>
                                                    <div class="item-core"><?= Utility_model::price_format($listProductRandoms['gia']); ?> VNĐ</div>
                                                    <div class="item-price"><?= Utility_model::price_format($listProductRandoms['giagiam']); ?>  VNĐ</div>
                                                <?php } ?>
                                                
                                            </div>
                                        </a>
                                         <div class="item-hover mask ">
                                        <a  class="shopping" id="shopping" proid="<?= $listProductRandoms['productID']; ?>"  name="<?= $listProductRandoms['productName']; ?>" price="<?= $listProductRandoms['gia']; ?>"> mua
                                            hàng </a>
                                    </div>
                                    </div>
                                </li>
                                <?php endforeach;?>
                            </ul>
                            <!------ListSanPham---->

                        </div>
                        <!--------end.productTeaserBox---->
                    </div>

                </div>
                <!----endProductLienquan---->
      
            <!-----end#content----->
            <?php echo $this->load->view('footer_view'); ?>
         