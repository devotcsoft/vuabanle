</div><!-----end#header-top--->
<div id="nav-top" class="header">
    <div class="wrap">
        <div class="typical">
            <h3>Sản phẩm mới</h3>
            <link rel="stylesheet" type="text/css"
                href="<?= base_url('public/font-end')?>/css/jsCarousel-2.0.0.css">
            <script
                src="<?= base_url('public/font-end')?>/js/jsCarousel-2.0.0.js"></script>
            <script type="text/javascript">
                $(document).ready(function() {
                    $('#carouselv').jsCarousel({ onthumbnailclick: function(src) { alert(src); }, autoscroll: true, masked: false, itemstodisplay: 1, orientation: 'v' });
                    $('#carouselh').jsCarousel({ onthumbnailclick: function(src) { alert(src); }, autoscroll: false, circular: true, masked: false, itemstodisplay: 1, orientation: 'h' });
                    $('#carouselhAuto').jsCarousel({ onthumbnailclick: function(src) { alert(src); }, autoscroll: true, masked: true, itemstodisplay: 1, orientation: 'h' });
        
                });       
            </script>
            <div class="flexslider">
                <div id="carouselv">
                    <?php foreach ($productnews as $productnew): ?>
                    <div>
                        <a href="<?= base_url($productnew['seo_name'].'.html')?>"><?= $productnew['productName'] ?></a>
                    </div>
                    <?php endforeach; ?>
                </div>
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
<!--------end#nav-top---->

</div>
<!-------end#header--->
<script>
$(document).ready(function(){
setInterval(function(){
    var $sample = $("#vclnavLayer_56");
    var $remove = $("#navLayer_56");
    if($sample.is(":hover")) {
       $remove.css("display", "block");
    }
    else {
        //$remove.css("display", "block");
    }
}, 200);
});
</script>
<div id="content">
    <div class="content-top">
        <div class="wrap">
            <!-- <script>!window.jQuery && document.write(unescape('%3Cscript src="js/jquery-1.8.1.min.js"%3E%3C/script%3E'))</script> -->
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
                                    <li class="multiMenu" id="vclnavLayer_<?= $getParentID0['catID'] ?>"  data-sub-menu="navLayer_<?= $getParentID0['catID'] ?>">
                                        <a class="catArrow " href="<?= base_url($getParentID0['keypage'])?>"> <span class="navSubTxt"><?= $getParentID0['catName'] ?></span> </a>
                                    </li>
                                    <script>
                                    $(document).ready(function(){
                                    setInterval(function(){
                                        var $sample = $("#vclnavLayer_<?= $getParentID0['catID'] ?>");
                                        var $remove = $("#navLayer_<?= $getParentID0['catID'] ?>");
                                        if($sample.is(":hover")) {
                                           $remove.css("display", "block");
                                        }
                                        else if ($remove.is(":hover")) {
                                            $remove.css("display", "block");
                                        }else {
                                            $remove.css("display", "none");
                                        }
                                    }, 200);
                                    });
                                    </script>
                                    <?php endforeach ?>
                                </ul>
                                <div class="submenuWrapper">
                                    <?php foreach($getParentID0s as $key0=>$getParentID0one): ?>
                                    <div id="navLayer_<?= $getParentID0one['catID'] ?>" class="navLayer" style="display: none;">
                                        <div class="navLayerSub clearfix">
                                            <?php
                                            	$getCateWhereParents = $this->category_model->getCateWhereParentHome($getParentID0one['catID']);
                                            	foreach($getCateWhereParents as $key=>$getCateWhereParent){ ?>
                                            		<div class="navCol navCol1">
														<div class="nav-title">
														        <a href="<?= base_url($getCateWhereParent['keypage'].'.html')?>"><?= $getCateWhereParent['catName'] ?></a>
														</div>
												        <?php
												        unset($getCateWhereParents[$key]);
												        $getCateWhereParentsvl3 = $this->category_model->getCateWhereParentHome($getCateWhereParent['catID']);
												        	foreach($getCateWhereParentsvl3 as $key=>$getCateWhereParentvl3){
												        ?>
												        <div class="nav-linklist">
												            <a href="<?= base_url($getCateWhereParentvl3['keypage'])?>" class="bsncLink"><?= $getCateWhereParentvl3['catName'] ?></a>
												          <!-- <a href="<?= base_url($getCateWhereParentvl3['keypage'].'.html')?>" class="bsncLink"><?= $getCateWhereParentvl3['catName'] ?></a> -->
												        </div>
												        <div class="brand-list"></div>
												        <?php } ?>
												       
												    </div>
											<?php  } ?>
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
            <script> $(document).ready(function() { 
                    window.catalog_rotate = 0;
                    window.sb_submenu = 1;
                     });</script>
            <script src="<?= base_url('public/font-end')?>/js/menucatalog.js"></script>
            <script src="<?= base_url('public/font-end')?>/js/1399642332.js"></script>
            <div class="slider">
                <link rel="stylesheet" type="text/css"
                    href="<?= base_url('public/font-end')?>/css/sample-styles.css">
                <script src="<?= base_url('public/font-end')?>/js/lean-slider.js"></script>
                <script
                    src="<?= base_url('public/font-end')?>/js/modernizr-2.6.1.min.js"></script>
                <div class="slider-wrapper">
                    <div id="slider-all">
                        <?php foreach (unserialize($gallery->galleryImage) AS $img) : ?>
                        <div class="slide1">
                            <a href="<?= base_url().$img['imagelink']?>"> <img src="<?= base_url().$img['image_url'] ?>"
                                alt="" width="531px" height="350px" /></a>
                        </div>
                        <?php endforeach;?>
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
     <script src="<?= base_url('public/font-end')?>/js/jquery-scrolltofixed.js" type="text/javascript"></script>

            </div>
            <!----end.slider---->
            <div class="module-adv">
                <div class="advert">
                    <div class="addv1">
                 	<?php $i=0;
                 	foreach($type0 as $type0)
                 	{?>      	
                 	<a href="<?= $type0['url'].'-qc.html' ?>"><img src="<?= base_url().$type0['image'] ?>" alt="" width="186" height="170" /> </a>
                 		<?php $i++;}?>
                   </div>
                   
                </div>
            </div>
            <!---end.module-adv--->
            <div class="clear-float"></div>
        </div>
    </div>
    <!------end.content-top--->
  <!------end.content-top--->
  <div class="disco">
				<div class="wrap">
						<?php
						function getTimeByGmtTwo($gmtOffset = 0, $time = 0)
						{
						if (0 == $time) {
						$time = time();
						}
						$gmtTime = mktime(gmdate('H', $time), gmdate('i', $time), gmdate('s', $time), gmdate('m', $time), gmdate('d', $time), gmdate('Y', $time));
						
						return $gmtTime + ($gmtOffset * 60 * 60);
						}
						$dateS= date('Y/m/d H:i:s', getTimeByGmtTwo(7));
						
						?>
						<?php $i=1;$a=1;
						 foreach($type1 as $type1){
						?> 
                    <script type="text/javascript" src="<?= base_url('public/font-end')?>/js/jquery.countdownTimer.js"></script>
                    <link rel="stylesheet" type="text/css" href="<?= base_url('public/font-end')?>/css/jquery.countdownTimer.css" />
   
				    <div class="module_discount view view-first ">
				     <a href="<?= $type1['url'] ?>"><img src="<?= base_url().$type1['image'] ?>" width="403" height="149" alt="" / >
       
    			<div class="conet">
  
                            <script>
                                $(function(){
                                    $('#given_date<?php echo $a; $a++; ?>').countdowntimer({
                                        startDate : "<?php echo $dateS;?>",
                                        dateAndTime : "<?php echo $type1['productTime'] ?>",
                                        size : "lg"
                                    });
                                });
                                
                            </script>

					<style>
					.count {
					right: 0;
					position: absolute;
					top: -20px;
					z-index: 99;
					}</style>   
      				<div class="count">
                           <span  id="given_date<?php echo $i; $i++; ?>"></span>
                             
					</div>
                   <div class="sb-gdv-deal">
                                    <div class="sb-gdv-deal__content"></div>
                                </div>
                               
                    <h2><?= $type1['productName'] ?></h2>
                    <p ><?= Utility_model::price_format($type1['productPrice']); ?> VNĐ</p>
                </div>
                    </a>
                      <div class="mask">
                          <a  href="<?= $type1['url'] ?>" class="info">Chi tiết</a>
                        </div>
                    
		     	</div>
		   <?php   } ?>
 

                   
  </div>
  
  </div>
    <!-------end.disco------>
    
    
    <div class="product-hight">
        <div class="wrap">
            <div class="box productTeaserBox1 prd-row">
                <div class="header-title">
                    <h2 class="lfloat h3">
                        Sản phẩm nổi bật 
                        <img src="<?= base_url('public/font-end')?>/images/hot.gif" alt="" />
                    </h2>
                </div>
                <script src="<?= base_url('public/font-end')?>/js/jquery.flexisel.js"></script>
                <ul class="itemlist" id="flexiselDemo3">
                     <?php foreach($producthots AS $producthot):?>
                        <li>
                            <div class="item view-first1">
                                <a href="<?php echo base_url($producthot['seo_name']).'.html'?>">
                                    <span>
                                    	<img src="<?php if($producthot['anhthume'] != ''){ echo $producthot['anhthume']; }else { echo "duong";}   ?>" alt="" />
                                    </span>
                                    <div class="item-prodinfo">
                                        <?php if(isset($producthot['giamgia']) && $producthot['giamgia'] > 0) { ?>
                                            <div class="sb-gdv-disc">
                                                <div class="sb-gdv-disc__content">-<?= $producthot['giamgia'] ?>%</div>
                                            </div>      
                                        <?php } ?>
                                        <div class="item-title"> <?= $producthot['productName']; ?> </div>
                                        <div class="item-stockhim"><?php if($producthot['tinhtranghang'] == 1 ){ echo "Còn hàng";}elseif($producthot['tinhtranghang'] == 2){ echo "Hết hàng";}else { echo "sắp có hàng"; } ?></div>
                                        <?php if(isset($producthot['giamgia']) && $producthot['giamgia'] > 0) { ?>
                                            <div class="item-core" "><?= Utility_model::price_format($producthot['gia']); ?> VNĐ</div>
                                            <div class="item-price" ><?= Utility_model::price_format($producthot['giagiam']); ?>  VNĐ</div>      
                                        <?php }else { ?>
                                            <div class="item-price"><?= Utility_model::price_format($producthot['gia']); ?> VNĐ</div>                                           
                                        <?php } ?>
                                    </div>
                                </a>
                                <div class="item-hover mask ">
                                       <!-- <a  class="shopping" id="shopping" proid="<?= $producthot['productID']; ?>"  name="<?= $producthot['productName']; ?>" price="<?= $producthot['gia']; ?>">mua hàng</a> -->
                                       <a  href="<?= $producthot['seo_name'] ?>.html" class="info">Chi tiết</a>
                                </div>
                            </div>
                        </li>
                     <?php endforeach; ?>
                </ul>
                <script src="<?= base_url('public/font-end')?>/js/sliderhot.js"></script>

            </div>
        </div>
    </div>
    <!-----end.product-hight--->
    <?php foreach ($getListCategoryatHomes AS $getListCategoryatHome):?>
    <div class="product-catalog">
        <div class="wrap">
            <div class="box productTeaserBox prd-row">
                <script
                    src="<?= base_url('public/font-end')?>/JS_stor/tabcontent.js"></script>
                <div class="header-title">
                    <ul class="tabs" data-persist="true">
                        <li>
                            <h2 class="lfloat h3">
                                <a href="#view<?= $getListCategoryatHome['catID'] ?>"> <?= $getListCategoryatHome['catName'] ?></a>
                            </h2>
                        </li>
                        
                    </ul>
                </div>
                <div class="tabcontents">
                    <div id="view<?= $getListCategoryatHome['catID'] ?>">
                        <div class="content spen-plus">
                            <ul class="itemlist" id="myList<?= $getListCategoryatHome['catID'] ?>">
                                <?php
                                $getAllProductCate = Products_model::getAllProductCate($getListCategoryatHome['catID']);
                                while ($rsproduct = mysql_fetch_array($getAllProductCate)){ ?>
                                <li>
                                    <div class="item view-first1">
                               
                                        <a href="<?php echo base_url($rsproduct['seo_name']).'.html'?>"> <span> <img
                                                src="<?= base_url().$rsproduct['anhthume']?>" alt="<?= $rsproduct['productName'] ?>" /></span>
                                            <div class="item-prodinfo">
                                                <?php if(isset($rsproduct['giamgia']) && $rsproduct['giamgia'] > 0) { ?>
                                                    <div class="sb-gdv-disc">
                                                        <div class="sb-gdv-disc__content">-<?= $rsproduct['giamgia'] ?>%</div>
                                                    </div>      
                                                <?php } ?>
                                                <div class="item-title"><?= $rsproduct['productName'] ?></div>
                                                <div class="item-stockhim"><?php if($rsproduct['tinhtranghang'] == 1 ){ echo "Còn hàng";}elseif($rsproduct['tinhtranghang'] == 2){ echo "Hết hàng";}else { echo "sắp có hàng"; } ?></div>
                                                <?php if(isset($rsproduct['giamgia']) && $rsproduct['giamgia'] > 0) { ?>
                                                    <div class="item-core"><?= Utility_model::price_format($rsproduct['gia']); ?> VNĐ</div>
                                                    <div class="item-price"><?= Utility_model::price_format($rsproduct['giagiam']); ?>  VNĐ</div>       
                                                <?php }else { ?>
                                                    <div class="item-price"><?= Utility_model::price_format($rsproduct['gia']); ?> VNĐ</div>                                            
                                                <?php } ?>
                                            </div>
                                        </a>
                                        <input type="hidden" name="id" id="id" value="<?= $rsproduct['productID']; ?>">
                                        <input type="hidden" name="name" id="name" value="<?= $rsproduct['productName']; ?>">
                                        <input type="hidden" name="price" id="price" value="<?= $rsproduct['gia']; ?>">
                                        
                                        <div class="item-hover mask ">
                                          <!-- <a  class="shopping" id="shopping" proid="<?= $rsproduct['productID']; ?>"  name="<?= $rsproduct['productName']; ?>" price="<?= $rsproduct['gia']; ?>">mua hàng</a>-->
                                          <a class="popup-with-zoom-shop shopping"  href="#shoppingcart" onclick="mua(<?= $rsproduct['productID']; ?>,<?= $rsproduct['gia']; ?>, '<?= $rsproduct['productName']; ?>' )" proid="<?= $rsproduct['productID']; ?>"  name="<?= $rsproduct['productName']; ?>" price="<?= $rsproduct['gia']; ?>">mua ngay </a>
                                        </div>
                                    </div>
                                </li>
                                <?php }  
                                ?>
                                <div class="control">
                                    <!--<div id="loadMore<?= $getListCategoryatHome['catID'] ?>">Xem thêm >></div>-->
                                    <div id="HideMore<?= $getListCategoryatHome['catID'] ?>"><< Ẩn đi >></div>
                                    <div id="showLess<?= $getListCategoryatHome['catID'] ?>">
                                        <a href="<?= base_url($getListCategoryatHome['keypage']).'.html' ?>">Xem tất cả</a>
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
                            
                            #myList<?= $getListCategoryatHome['catID'] ?> li {
                                display: none;
                            }
                            
                            .content .control #loadMore<?= $getListCategoryatHome['catID'] ?> {
                                color: #EF090D;
                                font-size: 13px;
                                cursor: pointer;
                                float: left;
                            }
                            .content .control #HideMore<?= $getListCategoryatHome['catID'] ?> {
                                color: #EF090D;
                                font-size: 13px;
                                cursor: pointer;
                                float: left;
                                display: none;
                            }
                            
                            #loadMore<?= $getListCategoryatHome['catID'] ?>:hover {
                                color: black;
                            }
                            
                            .content .control #showLess<?= $getListCategoryatHome['catID'] ?> a {
                                font-size: 13px;
                                color: #0C10CD;
                                cursor: pointer;
                                float: right;
                            }
                            
                            #showLess<?= $getListCategoryatHome['catID'] ?> a:hover {
                                color: black;
                            }
                            </style>
                            <script type="text/javascript">
                            
                            $(document).ready(function () {
                                // Load the first 3 list items from another HTML file
                                //$('#myList').load('externalList.html li:lt(3)');
                                $('#myList<?= $getListCategoryatHome['catID'] ?> li:lt(4)').show();
                                $('#loadMore<?= $getListCategoryatHome['catID'] ?>').click(function () {
                                    $('#myList<?= $getListCategoryatHome['catID'] ?> li:lt(8)').show();
                                    $("#loadMore<?= $getListCategoryatHome['catID'] ?>").css("display", "none");
                                    $("#HideMore<?= $getListCategoryatHome['catID'] ?>").css("display", "block"); 
                                });
                                $('#HideMore<?= $getListCategoryatHome['catID'] ?>').click(function () {
                                    $('#myList<?= $getListCategoryatHome['catID'] ?> li:lt(4)').hide();
                                    $("#loadMore<?= $getListCategoryatHome['catID'] ?>").css("display", "block");
                                    $("#HideMore<?= $getListCategoryatHome['catID'] ?>").css("display", "none");
                                });   
                                $('#showLess<?= $getListCategoryatHome['catID'] ?>').click(function () {
                                    $('#myList<?= $getListCategoryatHome['catID'] ?> li').not(':lt(8)').hide();
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
    <?php endforeach;?>
    <!----end.product-catalog--->
</div>
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


