<style>
#main-menu-content{
    display: none;
}
.filter-price-button{
	color: transparent;
	line-height: 30px;
    padding: 5px 11px;
}
</style>
<section id="main-page">
    <aside id="filter">
     	<div class="type-filter all-product">
     		<?php if ((isset($_GET['brand']) && $_GET['brand'] != 0) || (isset($_GET['lefprice']) && $_GET['lefprice'] != '') || (isset($_GET['order']) && $_GET['order'] != '')  ){ ?> 
            <h6 class="title-filter">Mua theo</h6>
            <?php }?>
            <div class="content-filter">
                <?php if (isset($_GET['brand']) && $_GET['brand'] != 0){ ?>
                	 <ul id="root_tree" class="filter-group">
	                    <?php foreach ($getBrandUsingCates as $getBrandUsingCate):?>
		                <?php if($_GET['brand'] == $getBrandUsingCate['ID']){
		                	echo $getBrandUsingCate['Name'];
							$delbrand = str_replace('brand='.$_GET['brand'], 'brand=0', $_SERVER['REQUEST_URI']);
							echo '<a href='.$delbrand.'>Xóa</a>';
		                }?>
	                    <?php $brand = ''; endforeach;?>
	                </ul>
                <?php }?>
                
                <?php if (isset($_GET['lefprice']) && $_GET['lefprice'] != 0){ ?>
                	 <ul id="root_tree"  class="filter-group">
	                    <?php echo  Utility_model::price_format($_GET['lefprice']).' <span style="color:#ff0000;">đến</span> '. Utility_model::price_format($_GET['rightLabel']).' vnđ'; ?>
	                    <?php $delprice = str_replace('lefprice='.$_GET['lefprice'], 'lefprice=0', $_SERVER['REQUEST_URI']);
							echo '<a href='.$delprice.'>Xóa</a>'; ?>
	                </ul>
                <?php $price = ''; }?>
                
                
                <?php
                if (isset($_GET['order'])){
                	if($_GET['order'] == 'asc'){ ?>
                        <ul id="root_tree"  class="filter-group">
                            <?php
                            echo "Tăng dần";
                            $delorder = str_replace('order='.$_GET['order'], 'order=0', $_SERVER['REQUEST_URI']);
                            echo '<a href='.$delorder.'>Xóa</a>';$order = '';
                            ?>
                        </ul>
                        <?php
                    }

                    elseif ($_GET['order'] == 'desc'){
                    ?>
                        <ul id="root_tree"  class="filter-group">
                        <?php
                            echo "Giảm dần";
                            $delorder = str_replace('order='.$_GET['order'], 'order=0', $_SERVER['REQUEST_URI']);
                            echo '<a href='.$delorder.'>Xóa</a>';$order = '';
                            ?>
                        </ul>
                    <?php
                    }
                } 
                ?>
            </div>
        </div><!--End Type Filter-->
        <div class="type-filter all-product">
            <h6 class="title-filter">Tất cả sản phẩm</h6>
            <div class="content-filter">
                <ul>
                   <?php foreach ($getCateUris as $getCateUri):?>
                    <li><a href="<?php echo base_url($getCateUri['keypage']); ?>"><?php echo word_limiter($getCateUri['catName'], 6, '...');?><span class="count">(<?php echo $getCateUri['count'];?>)</span></a></li>
                    <?php endforeach;?>
                </ul>
            </div>
        </div><!--End Type Filter-->
        <?php if (isset($brand)){
        }else{ ?>
        <div class="type-filter brand-product">
            <h6 class="title-filter">Thương hiệu</h6>
            <div class="content-filter">
                <input id="filter12" placeholder="Tìm theo thương hiệu..." />
	                <input id="search-brand-button" type="button" value="">
	                <br/>
	                <ul id="root_tree">
	                    <?php foreach ($getBrandUsingCates as $getBrandUsingCate):?>
	                    <li>
		                    <a href="<?php echo $urlBrand."brand=".$getBrandUsingCate['ID']; ?>">
		                    <?php echo word_limiter($getBrandUsingCate['Name'], 6, '...');?>
		                    <span class="count">(<?php echo $getBrandUsingCate['countPro'];?>)</span>
		                    </a>
	                    </li>
	                    <?php endforeach;?>
	                </ul>
                <script type="text/javascript">
                    $(function() {
                        $('#filter12').treeListFilter('#root_tree', 200);
                    });
                </script>
            </div>
        </div><!--End Type Filter-->
        <?php }?>
        <?php if (isset($price)){
        	
        }else { ?>
        <div class="type-filter filter-price">
            <h6 class="title-filter">Giá sản phẩm</h6>
            <div class="content-filter">

                <div class="nstSlider" data-range_min="100000" data-range_max="50000000"
                     data-cur_min="100000"  data-cur_max="40000000">
                    <div class="bar"></div>
                    <div class="leftGrip"></div>
                    <div class="rightGrip"></div>
                </div>

                <form class="price-index" method="get" action="">
                    <div class="index">
                        <div class="leftLabel" /></div><span>VNĐ</span>
                    </div>
                    <div class="index">
                        <div class="rightLabel" /></div><span>VNĐ</span>
                    </div>
                     <!-- 
                    <input type="hidden" name="lefprice" id="lefprice">
                    <input type="hidden" name="rightprice" id="rightprice">
                      -->
                     
<!--                     <input class="filter-price-button" type="submit" value=""> -->
                    <a class="filter-price-button" href="" id="lefprice">a</a>
                </div>

                <script>
                    $('.nstSlider').nstSlider({
                    	
                        "rounding": {
                            "100": "1000",
                            "1000": "10000",
                            "10000": "100000"
                        },
                        "left_grip_selector": ".leftGrip",
                        "right_grip_selector": ".rightGrip",
                        "value_bar_selector": ".bar",
                        "value_changed_callback": function(cause, leftValue, rightValue) {
                        	var _href = '<?php echo $urlPrice; ?>';
                            var $container = $(this).parent();
                            $container.find('.leftLabel').text(leftValue);
                            $container.find('.rightLabel').text(rightValue);
                            $container.find('#lefprice').attr("href", _href +'lefprice='+ leftValue +'&rightLabel='+rightValue);
                        }
                    });
                </script>

            </div>
        </div><!--End Type Filter-->
        <?php }?>


        <div style="clear: both"></div>
        <!--<img src="filter.jpg" width="100%">-->
    </aside><!--End Filter-->
    <article id="content-page">
    	<?php echo  $bradcrumbs; ?>
        <div id="main-content">
            <div class="task-main-content">
                <h1 class="title-main-content">
                 <?php if ($level == 2){ ?>
	            	<span><?= $breadcrumb['cap2']->catName;?></span>
	            <?php }elseif ($level == 3){?>
	            	<span><?= $breadcrumb['cap3']->catName;?></span>
	            <?php }?>
                </h1>
                <?php if (isset($order)){
                	
                }else { ?>
                <div class="filter-main-content">
                    <h5>Sắp xếp theo:</h5>
                    <div class="title-filter-main-content">
                        <div class="filter-name" id="filter-name2"><?php if(isset($_GET['order'])){
                        	if($_GET['order'] == 'asc'){
                        		echo "Tăng dần";
                        	}else {
                        		echo "Giảm dần";
                        	}
                        }else{
                        	echo "Mới nhất";
                        }?></div>
                        <ul id="filter-type">
                            <li><a href="<?php echo $urlorder.'order=asc'; ?>">Giá : Tăng dần</a></li>
                            <li><a href="<?php echo $urlorder.'order=desc'; ?>">Giá : giảm dần</a></li>
                        </ul>

                        <script type="text/javascript">
                            $(document).ready(function(){
                                $("ul#filter-type li").click(function(){
                                    //shower = $(this).parent().next();
                                    shower = $("#filter-name2");
                                    //change
                                    shower.empty().append($(this).text());
                                });
                            });
                        </script>
                    </div>
                </div>
                <?php }?>
            </div>

            <div class="main-content-inner">
                <?php foreach ($getAllProducts as $getAllProduct): ?>
                <div class="product-item">
                    <div class="img-product-item">
                    	<!-- <a href="<?php echo base_url($getAllProduct['seo_name']); ?>.html"><img src="<?php echo str_replace('http://vuabanle.vn/', '', $getAllProduct['productImage']) ; ?>" alt="<?php echo $getAllProduct['productName'];?>" title="<?php echo $getAllProduct['productName'];?>"></a> -->
                    	
                        <a href="<?php echo base_url($getAllProduct['seo_name']); ?>.html">
                        	<img src="<?php echo base_url($getAllProduct['productImage']);?>" alt="<?php echo $getAllProduct['productName'];?>" title="<?php echo $getAllProduct['productName'];?>">
                        </a>
                    </div>
                    <h2 class="product-name"><a href="<?php echo base_url($getAllProduct['seo_name']); ?>.html"><?php echo  word_limiter($getAllProduct['productName'], 9,'...'); ?></a></h2>
                    <div class="product-price">
                    <?php if($getAllProduct['giamgia'] == "" || $getAllProduct['giamgia'] == null || $getAllProduct['giamgia'] == 0){ ?>
						<div class="new-price"><?= Utility_model::price_format($getAllProduct['gia']); ?>  vnđ</div>
					<?php }else { ?>
                        <span class="new-price"><?= Utility_model::price_format($getAllProduct['giagiam']); ?> vnđ</span>
                        <br>
						<span class="old-price"><?= Utility_model::price_format($getAllProduct['gia']); ?> vnđ</span>
                        <br>
					<?php } ?>

                    <div class="status-product">
                        <?php if($getAllProduct['tinhtranghang'] == 1 ){ ?>
                            <img src="<?php echo base_url();?>/assets/font-end/images/pro/StockStatus1.gif">
                        <?php } ?>

                        <?php if($getAllProduct['tinhtranghang'] == 2 ){ ?>
                            <img src="<?php echo base_url();?>/assets/font-end/images/pro/StockStatus2.gif">
                        <?php } ?>

                        <?php if($getAllProduct['tinhtranghang'] == 3 ){ ?>
                            <img src="<?php echo base_url();?>/assets/font-end/images/pro/StockStatus3.gif">
                        <?php } ?>
                    </div>

                    </div>
                    <div class="button-buy">
                        <!--<input type="button" class="buy-now" id="open_popup" name="open_popup" rel="miendatwebPopup" href="#popup_content" value="Mua ngay" onclick="mua(<?= $getAllProduct['productID']; ?>,<?= $getAllProduct['gia']; ?>, '<?= $getAllProduct['productName']; ?>' )"/>-->
                        <input type="button" class="buy-now" id="open_popup" name="open_popup" rel="miendatwebPopup" href="#popup_content" value="Mua ngay" onclick="mua(<?= $getAllProduct['productID']; ?>,<?php  if($getAllProduct['giamgia'] == "" || $getAllProduct['giamgia'] == null || $getAllProduct['giamgia'] == 0){ echo $getAllProduct['gia']; }else{ echo $getAllProduct['giagiam']; } ?>, '<?= $getAllProduct['productName']; ?>' )"/>
                    </div>
                    <?php if($getAllProduct['giamgia'] == "" || $getAllProduct['giamgia'] == null || $getAllProduct['giamgia'] == 0){ ?>
					<?php }else { ?>
					<div class="product-mask">
                        <span>-<?= round(($getAllProduct['gia']-$getAllProduct['giagiam']) / $getAllProduct['gia'] * 100, 1); ?>%</span>
                    </div>
					<?php } ?>
                </div><!--End Product Item-->
                <?php endforeach;?>
                
            </div>

            <div class="page-number">
                <?php echo $paging; ?>
            </div>
        </div><!--End Main Content-->

        <div style="clear: both"></div>
    </article><!--End Content Page-->

    <div style="clear: both"></div>

</section>