<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Danh mục con</title>
		<link rel="stylesheet" type="text/css" href="<?= base_url('public/font-end')?>/css/style.css" media="all">
		<link rel="stylesheet" type="text/css" href="<?= base_url('public/font-end')?>/css/magnific-popup.css" >
		<script type="text/javascript" src="<?= base_url('public/font-end')?>/js/jquery-1.8.1.min.js"></script>
		<script src="<?= base_url('public/font-end')?>/js/menucatalog.js"></script>
		<script src="<?= base_url('public/font-end')?>/js/1399642332.js"></script>
		<link rel="stylesheet" href="<?= base_url('public/font-end')?>/css/popupwindow.css">
		<script src="<?= base_url('public/font-end')?>/js/popupwindow.js"></script>
		<script src="<?= base_url('public/font-end')?>/js/demo.js"></script>
        
	</head>
	<body data-control="Catalog">
		<div id="page-top">
			<div class="pagecuston">
				<div class="wrap">
					<ul class="menu-top">
						<li >
							<h4 class="scroll" > HOTLINE: <?= $config->owner_fax; ?></h4>
						</li>
						<li>
							<a id="open-pop-up-1" href="#pop-up-1">Basic</a>

						</li>
					</ul>

					<div id="pop-up-1" class="pop-up-display-content">

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

						</div>
					</div>

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
                        <span class="beeper_x"></span>
                     <div class="UIBeep_Title">
                        <span class="blueName">Bạn đã mua </span> 1 sản phẩm<span class="blueName"></span>.
                     </div>
                  </a>
               </div>
            </div>
         </div>
      </div> <!----------endgiohang----------->
				

				</div>
			</div>
		</div>
		<!-------end#page-top--->
		<div id="page-all">
		    <strong>{elapsed_time}</strong>
			<div id="header">
				<div class="header_top">
					<div class="wrap">
						<div class="logo">
							<img src="<?= base_url('public/font-end')?>/images/logo.png" alt="" title="logo" />
						</div>
						<!-------end#logo--->
						<div class="shopping-header">
							<?php foreach ($getContent as $getContents):?>
								<?php if($getContents['tieudiemID'] == 1): ?>
									<div class="cskh">
										<div>
											<a href="<?= base_url().'chinh-sach/'.$getContents['seo_name'] ?>">
												<?php if ($getContents['icon'] == "return_money"):  ?>
												<div class="usp-sp-icon usp-sprite usp-sp-cash">
													<div class="usp-sprite cash-animation"></div>
													<div class="usp-sprite cash-static"></div>
												</div>
												<?php endif;?>
												<?php if ($getContents['icon'] == "ship_on"):  ?>
												<div class="usp-sp-icon usp-sp-ship usp-sprite">
													<div class="usp-sprite ship-animation"></div>
												</div>
												<?php endif;?>
												<div class="usp-sp-desc">
													<div class="strong uspline">
														<?= $getContents['newsTitle'] ?>
													</div>
													<div class="uspline-sub"></div>
												</div>
											</a>
										</div>
									</div>
								<?php endif; ?>
							<?php endforeach;?>
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
												<a class="navAllCat showMenu" href="#"> Danh mục sản phẩm </a> <a
													class="navDropdown" href="#"></a>
												<div class="navSub-wrapper">
													<ul class="navSub">
														<?php
														foreach ($listCategorys as $listCategory){
															if($listCategory['parentID'] == 0){ ?>
															<li class="multiMenu"
															data-sub-menu="navLayer_<?= $listCategory['catID'] ?>"><a
															class="catArrow " href="<?= base_url($listCategory['keypage']).'.html'?>"> <span class="navSubTxt"><?=  $listCategory['catName'] ?></span></a>
														</li>
															<?php }
														}
														?>
													</ul>
													<div class="submenuWrapper">
														<?php
														foreach ($listCategorys as $key => $value)
														{
															if($value['parentID'] == 0){
					                                        $getallCountParentV1 = Utility_model::getallCountParent($value['catID']);
					                                        if($getallCountParentV1 > 0){
														?>
														<div id="navLayer_<?= $value['catID'] ?>" class="navLayer"
															style="display: none;">
															<div class="navLayerSub clearfix">
																	<?php foreach ($listCategorysOrderstt as $key => $value1){ ?>
					                                                    <?php
					                                                     $getallCountParentV2 = Utility_model::getallCountParent($value1['catID']);
					                                                         if($getallCountParentV2 > 0){
					                                                    ?>
					                                                    <?php
																		if($value1['parentID'] == $value['catID']){ ?>
					                                                    <div
																	class="navCol navCol2">
					                                                    <?php  //echo $i; if($i== 7){echo "bay";}   $i++; $ad = $i; ?>
																		<div class="nav-title">
																		<a href="<?= base_url($value1['keypage'].'-pd.html')?>"><?= $value1['catName'] ?></a>
																	</div>
																		<?php
																			foreach ($listCategorys as $key => $value2){
																				if($value2['parentID'] == $value1['catID']){ ?>
																				<div class="nav-linklist">
																		<a href="<?= base_url($value1['keypage'].'-pd-pr'.$value2['catID'].'-th0-tt0-od0')?>" class="bsncLink"><?= $value2['catName'] ?></a>
																	</div>
																			<?php
																			}}
																		?>
					                                                    <div
																		class="brand-list"></div>
																</div>
																		<?php } } } ?>
															</div>
															<div class="catImg catImg-inside" style="max-height: 343px;">
																<!-- Image in .png format -->
																<a href="#"> <span class=""
																	data-src="<?php echo base_url().$value['anhngoai']?>"><img
																		src="<?php echo base_url().$value['anhngoai']?>"></span>
																</a>
															</div>
															<div style="clear: both"></div>
														</div>
														<?php
														} }}
														?>
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
			<div id="content">
				<div class="content-top">
					<div class="wrap"></div>
				</div>
				<!------end.content-top--->
				<div class="product-advertising">
					<div class="wrap">
						<div class="advertising">
							<div class="module-advertis">
								<a href="#" title=""><img src="<?= base_url('public/font-end')?>/images/quangcao2.jpg" title="" alt=""/></a>
							</div>

						</div>
					</div>

				</div>
				<!-----end.product-advertisingt--->
				<div class="bread">
					<div class="wrap">
						<div class="breadcrumb">
							<a href="#">Trang chủ</a> &raquo; <a href="#"><?= $categorytrees[1][0]['catName'] ?></a> &raquo; <a href="#"><?= $categorytrees[0][0]['catName'] ?></a>
						</div>
					</div>
				</div>
				<!-----end.bread--->
				<div class="content-main">
					<div class="wrap">
						<div class="left-content">

							<ul class="fct-list">
								<li class="fct category-segment fct-box-category">
<<<<<<< .mine
								        <?php
                                            $getUrl = $_SERVER['REDIRECT_QUERY_STRING'];
                                            $strGetUrl = substr($getUrl, 1);
                                            
                                            $explodeUrl = explode("-pd-", $strGetUrl);
                                            if(isset($explodeUrl[1]))
                                            {
                                                $explodeUrlSearch = explode("-", $explodeUrl[1]);
                                                echo "<pre>";
                                                // var_dump($explodeUrlSearch);
                                                echo "</pre>";
                                                $CateParent = filter_var($explodeUrlSearch[0], FILTER_SANITIZE_NUMBER_INT);
                                                $Catebrand = filter_var($explodeUrlSearch[1], FILTER_SANITIZE_NUMBER_INT);
                                                $CateTt = filter_var($explodeUrlSearch[2], FILTER_SANITIZE_NUMBER_INT);
                                                $CateOrder = filter_var($explodeUrlSearch[3], FILTER_SANITIZE_NUMBER_INT);
                                            ?>
                                            
                                            
                                            // loan viet trong nay
                                            
                                            
                                            
                                            <?php } ?>
=======
                                
                                <div class="categoryMenu filter-cancel box-bdr box-bgcolor fsm">
<div class="h4 fct-hd">
Lọc bởi</div>
<div class="fct-list fct-list-browse_by">
<div>
<a class="fct-cancel" href="#">
<span class="fct-cancel__type">Thương hiệu:</span>AB TWISTER PRO<span class="fct-cancel-button">×</span>
</a></div>
<a class="rfloat fct__cancell-all-link" href="#">Xoá tất cả</a>
</div>
</div>
>>>>>>> .r36
									<div class="h4 fct-hd">
										Tất cả sản phẩm  (<?= $countAllProductUsingCate->countDroduct ?>)
									</div>
									<div style="" class="fct-bd">
										<ul class="cnv fct-category sel-catalog-category">

											<li class="cnv-level-1 childSelected cnv-levelChilds" >
												<ul class="cnv-subCat-1 cnv-subCat-1_no-segment">
													<!--
													<li class="cnv-level-2 childSelected selected  cnv-levelChilds" >
														<a href="#" class="cnvicon_i-arrowRightDark"><span class="cssicon i-arrowRightDark">Máy điều khiển</span><span class="cnv-items"> (850)</span></a>
													</li>
													<!--				
													<li class="cnv-level-2 childSelected selected  cnv-levelChilds" >
														<a href="#" class="cnvicon_i-arrowRightDark"><span class="cssicon i-arrowRightDark">Máy điều khiển</span><span class="cnv-items"> (850)</span></a>
														<ul class="cnv-childs cnv-subCat-2">
															<li class="cnv-level-3 cnv-levelChilds" >
																<a href="#" class="cnvicon_i-arrowRightDark"><span class="cssicon i-arrowRightDark">Máy điều khiển 4 kênh</span><span class="cnv-items"> (4)</span></a>
															</li>
															<li class="cnv-level-3 cnv-levelChilds" >
																<a href="#" class="cnvicon_i-arrowRightDark"><span class="cssicon i-arrowRightDark">Máy điều khiển 3 kênh</span><span class="cnv-items"> (4)</span></a>
															</li>
															<li class="cnv-level-3 cnv-levelChilds" >
																<a href="#" class="cnvicon_i-arrowRightDark"><span class="cssicon i-arrowRightDark">Máy điều khiển 3 kênh</span><span class="cnv-items"> (478)</span></a>
															</li>
															<li class="cnv-level-3 cnv-levelChilds" >
																<a href="#" class="cnvicon_i-arrowRightDark"><span class="cssicon i-arrowRightDark">Máy điều khiển 2 kênh</span><span class="cnv-items"> (362)</span></a>
															</li>
														</ul>
													</li>
													-->
												    
													<?php foreach($getCategoryUsingParent as $getCategoryUsingParent): ?>
													<li class="cnv-level-2 cnv-levelChilds" >
<a href="<?= base_url($uriproduct).'-pd-pr'.$getCategoryUsingParent['catID'] ?><?php if(isset($Catebrand) && $Catebrand != ""){ echo '-th'.$Catebrand; }else { echo '-th0';} ?>-tt<?php if(isset($CateTt) && $CateTt != ""){ echo $CateTt; }else { echo 0;} ?>-od<?php if(isset($CateOrder) && $CateOrder != ""){ echo $CateOrder; }else { echo 0;} ?>" class="cnvicon_i-arrowRightDark"><span class="cssicon i-arrowRightDark"><?= $getCategoryUsingParent['catName']?></span><span class="cnv-items"> (<?= Products_model::CountProductUsingCate($getCategoryUsingParent['catID']) ?>)</span></a>
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
													   <a href="<?= base_url($uriproduct) ?><?php if(isset($CateParent) && $CateParent != ""){ echo '-pd-pr'.$CateParent; }else { echo '-pd-pr0';} ?><?php echo '-th'.$getAllBrand['catID']; ?>-tt<?php if(isset($CateTt) && $CateTt != ""){ echo $CateTt; }else { echo 0;} ?>-od<?php if(isset($CateOrder) && $CateOrder != ""){ echo $CateOrder; }else { echo 0;} ?>"" class="cnv-level-1__item-link"><?php echo $getAllBrand['catName'] ?><span class="cnv-items">(<?= Products_model::CountProductUsingBrand($getAllBrand['catID']) ?>)</span></a>
													<?php }else { ?>
													    <a class="cnv-level-1__item-link"><?php echo $getAllBrand['catName'] ?><span class="cnv-items"></span></a>
													<?php }  ?>
													
												</div>
											</li>
											<?php endforeach; ?>
											<!--
											<li class="cnv-level-1" id="filter__brand--2">
												<div class="cnv-level-1__item ">
													<input value="" class="cnv-level-1__checkbox" type="checkbox">
													<a href="#" class="cnv-level-1__item-link">Lolita Lempicka <span class="cnv-items">(1)</span></a>
												</div>
											</li>
											-->
										</ul>
									</div>

								</li>

								<div class="h4 fct-hd">
									Giá
								</div>
								
								<div class="fct-bd" style="">
									<div class="priceRangeSliderBox" id="facet-facet_price">
										<!-- Range Slider -->
										<div class="slider-range noUi-target noUi-ltr noUi-horizontal noUi-background" data-rangestep="5"></div>
										<?php
										function getUrl() {
                                          $url  = @( $_SERVER["HTTPS"] != 'on' ) ? 'http://'.$_SERVER["SERVER_NAME"] :  'https://'.$_SERVER["SERVER_NAME"];
                                          $url .= ( $_SERVER["SERVER_PORT"] !== 80 ) ? ":".$_SERVER["SERVER_PORT"] : "";
                                          $url .= $_SERVER["REQUEST_URI"];
                                          return $url;
                                        }
                                        
										?>
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
												<input class="catalogPriceFilterSubmit1 icon icon-filter-submit" value="»" type="submit" />
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
										<a class="catalogPriceFilterSubmit"  href="1111"> </a>

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
									<!-- Price Range -->
									<div class="filter">
										<div class="filter-name">
											<a href="javascript:;" title="">Độ tuổi</a>
										</div>
										<div class="filter-list-wrapper ">
											<ul class="filter-list nolist ">
												<li class="checked">
													<a href="javascript:void(0)">Tất cả</a>
												</li>
												<li>
													<a href="#">Từ 3 - 5 tuổi</a>
												</li>
												<li>
													<a href="#">Từ 5 - 7 tuổi</a>
												</li>
												<li>
													<a href="#">từ 7 - 10 tuổi</a>
												</li>
												<li>
													<a href="#">Từ 10 - 15 tuổi</a>
												</li>
												<li>
													<a href="#">Tên 15 tuổi</a>
												</li>

											</ul>
										</div>
									</div>
									<!-- Manufacturer -->
									<div class="filter">
										<div class="filter-name">
											<a href="javascript:;" title="">Công suất</a>
										</div>
										<div class="filter-list-wrapper ">
											<div class="filter-list nolist maunufacturer">
												<ul>
													<li class="checked">
														<a href="javascript:void(0)">Tất cả</a>
													</li>
													<li class="">
														<a href="#">Nano</a>
													</li>
													<li class="">
														<a href="#">Nona</a>
													</li>
													<li class="">
														<a href="#">Rio</a>
													</li>
													<li class="">
														<a href="#">TT</a>
													</li>
													<li class="">
														<a href="#">gg</a>
													</li>
												</ul>
												<ul class="child"></ul>
											</div>
										</div>
									</div>
									<!-- Property -->
									<div class="filter">
										<div class="filter-name">
											<a href="javascript:;" title="">Hàng mới về</a>
										</div>
										<div class="filter-list-wrapper ">
											<ul class="filter-list nolist ">
												<li class="checked">
													<a href="javascript:void(0)">Tất cả</a>
												</li>
												<li>
												    <a href="<?= base_url($uriproduct) ?><?php if(isset($CateParent) && $CateParent != ""){ echo '-pd-pr'.$CateParent; }else { echo '-pd-pr0';} ?><?php if(isset($Catebrand) && $Catebrand != ""){ echo '-th'.$Catebrand; }else { echo '-th0';} ?>-tt1-od<?php if(isset($CateOrder) && $CateOrder != ""){ echo $CateOrder; }else { echo 0;} ?>">Sản phẩm hót</span></a>
												</li>
												<li>
													<a href="<?= base_url($uriproduct) ?><?php if(isset($CateParent) && $CateParent != ""){ echo '-pd-pr'.$CateParent; }else { echo '-pd-pr0';} ?><?php if(isset($Catebrand) && $Catebrand != ""){ echo '-th'.$Catebrand; }else { echo '-th0';} ?>-tt2-od<?php if(isset($CateOrder) && $CateOrder != ""){ echo $CateOrder; }else { echo 0;} ?>">Sản phẩm hót</span></a>
												</li>
											</ul>
										</div>
									</div>

									<!-- Order -->
									<div class="filter selected orderby">
										<div class="filter-name ">
											<a href="javascript:;" title="">Giá cao đến thấp</a>
										</div>
										<div class="filter-list-wrapper">
											<ul class="filter-list nolist ">
												<li class="checked">
													<a href="<?= base_url($uriproduct) ?><?php if(isset($CateParent) && $CateParent != ""){ echo '-pd-pr'.$CateParent; }else { echo '-pd-pr0';} ?><?php if(isset($Catebrand) && $Catebrand != ""){ echo '-th'.$Catebrand; }else { echo '-th0';} ?><?php if(isset($CateTt) && $CateTt != ""){ echo '-tt'.$CateTt; }else { echo '-tt0';} ?>-od1">Giá thấp đến cao</span></a>
												</li>
												<li>
													<a href="<?= base_url($uriproduct) ?><?php if(isset($CateParent) && $CateParent != ""){ echo '-pd-pr'.$CateParent; }else { echo '-pd-pr0';} ?><?php if(isset($Catebrand) && $Catebrand != ""){ echo '-th'.$Catebrand; }else { echo '-th0';} ?><?php if(isset($CateTt) && $CateTt != ""){ echo '-tt'.$CateTt; }else { echo '-tt0';} ?>-od2">Giá cao đến thâp</span></a>
												</li>
											</ul>
										</div>
									</div>
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
								<div class="header-title">
									<h1 class="lfloat h3"> Đồ chơi trẻ em </h1>
								</div>
								<ul class="itemlist" > 
								    <?php foreach($products as $product):?>								        
									<li>
										<div class="item view-first1">
											<a href="<?= base_url().$product['seo_name']?>"> <span> <img src="<?= base_url().$product['productImage']?>" alt=""/></span>
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
										
                                    
                                            <p>Click on this paragraph.</p>
											<div class="item-hover mask ">
										<a  class="shopping" id="shopping" proid="<?= $listProductRandoms['productID']; ?>"  name="<?= $listProductRandoms['productName']; ?>" price="<?= $listProductRandoms['gia']; ?>"> mua
											hàng </a>
									</div>
											
										</div>
									</li>
<<<<<<< .mine
									<?php endforeach; ?>									
=======
									<li>
										<div class="item view-first1">
											<a href="ChitietSP.html"> <span> <img src="<?= base_url('public/font-end')?>/images/im2.jpg" alt=""/> </span>
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
												  <a  class="shopping" id="shopping">mua hàng</a>
											</div>
										</div>
									</li>
									<li>
										<div class="item view-first1">
											<a href="ChitietSP.html"> <span> <img src="<?= base_url('public/font-end')?>/images/im1.jpg" alt=""/> </span>
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
												  <a  class="shopping" id="shopping">mua hàng</a>
											</div>
										</div>
									</li>
									<li>
										<div class="item view-first1">
											<a href="ChitietSP.html"> <span> <img src="<?= base_url('public/font-end')?>/images/im2.jpg" alt=""/> </span>
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
												  <a  class="shopping" id="shopping">mua hàng</a>
											</div>
										</div>
									</li>
									<li>
										<div class="item view-first1">
											<a href="ChitietSP.html"> <span> <img src="<?= base_url('public/font-end')?>/images/im1.jpg" alt=""/> </span>
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
											  <a  class="shopping" id="shopping">mua hàng</a>
											</div>
										</div>
									</li>
									<li>
										<div class="item view-first1">
											<a href="ChitietSP.html"> <span> <img src="<?= base_url('public/font-end')?>/images/im2.jpg" alt=""/> </span>
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
												  <a  class="shopping" id="shopping">mua hàng</a>
											</div>
										</div>
									</li>
									<li>
										<div class="item view-first1">
											<a href="ChitietSP.html"> <span> <img src="<?= base_url('public/font-end')?>/images/im1.jpg" alt=""/> </span>
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
												  <a  class="shopping" id="shopping">mua hàng</a>
											</div>
										</div>
									</li>
									<li>
										<div class="item view-first1">
											<a href="ChitietSP.html"> <span> <img src="<?= base_url('public/font-end')?>/images/im2.jpg" alt=""/> </span>
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
												  <a  class="shopping" id="shopping">mua hàng</a>
											</div>
										</div>
									</li>
>>>>>>> .r36

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
							<div class="content-seo">
								<h2>Từ trước khi con thành hình, mẹ đã yêu con</h2>
								<div class="content-page">

									<p>
										Một hành trình dài từ khi mang thai đến khi chào đón bé yêu, chắc hẳn các mẹ không thể nào quên được cảm giác vui mừng khôn xiết khi thấy con yêu chào đời trong bình an. Biết con nhỏ bé và mỏng manh, mẹ luôn cẩn thận và tỉ mỉ chọn lựa từng chiếc áo, cái tã tốt nhất, để vải áo không làm làn da mỏng manh của con bị xước, và tã giấy nhẹ nhàng giúp con luôn được khô thoáng vùng mông. Khi con lớn thêm chút nữa, các mẹ lại băn khoăn trong việc cho con ăn dặm, làm cách nào để con ăn nhanh chóng lớn? Quả không phải là một công việc dễ dàng chút nào phải không các mẹ! Nhưng các mẹ cũng không phải quá lo lắng vì hiện nay trên thị trường đang bày bán khá nhiều các dụng cụ hỗ trợ mẹ cho bé ăn dặm và bú sữa bình. Với các dụng cụ này, cả mẹ và bé sẽ không gặp quá nhiều khó khăn trong việc cho bé ăn.
									</p>
								</div>

							</div>

						</div>
						<!-----end.right---->

					</div>

				</div>
				<!----------endContent-main---->

				<div class="product-Lienqua">

					<div class="wrap">
						<div class="box productTeaserBox prd-row">
							<div class="header-title2">
								<h2 class="lfloat h3"><span class="arrow-icon"></span>&nbsp;&nbsp; Sản phẩm đã chọn </h2>
							</div>
							<ul class="itemlist">
<<<<<<< .mine
								<?php foreach ($listProductRandom as $listProductRandoms):?>
                                <li>
                                    <div class="item view-first1">
                                        <a href="<?= base_url().$listProductRandoms['seo_name']; ?>"> <span> <img width="200px " height="135px" src="<?= base_url().$listProductRandoms['productImage']?>" alt="<?= $listProductRandoms['productName'] ?>" alt="" />
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
                                            <a class="open-pop-up-2" href="#pop-up-2">Mua ngay</a>
                                        </div>
                                    </div>
                                </li>
                                <?php endforeach;?>
=======
								<li>
									<div class="item view-first1">
										<a href="ChitietSP.html"> <span> <img src="<?= base_url('public/font-end')?>/images/im1.jpg" alt=""/></span>
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
										  <a  class="shopping" id="shopping">mua hàng</a>
										</div>
									</div>
								</li>
								<li>
									<div class="item view-first1">
										<a href="ChitietSP.html"> <span> <img src="<?= base_url('public/font-end')?>/images/im2.jpg" alt=""/> </span>
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
>>>>>>> .r36

<<<<<<< .mine
=======
											  <a  class="shopping" id="shopping">mua hàng</a>
										</div>
									</div>
								</li>
								<li>
									<div class="item view-first1">
										<a href="ChitietSP.html"> <span> <img src="<?= base_url('public/font-end')?>/images/im1.jpg" alt=""/> </span>
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
											  <a  class="shopping" id="shopping">mua hàng</a>
										</div>
									</div>
								</li>
								<li>
									<div class="item view-first1">
										<a href="ChitietSP.html"> <span> <img src="<?= base_url('public/font-end')?>/images/im2.jpg" alt=""/> </span>
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
										  <a  class="shopping" id="shopping">mua hàng</a>
										</div>
									</div>
								</li>

>>>>>>> .r36
							</ul>
							<!------ListSanPham---->

						</div>
						<!--------end.productTeaserBox---->
					</div>

				</div>
				<!----endProductLienquan---->
			</div>
			<!-----end#content----->
			<?php echo $this->load->view('footer_view'); ?>
