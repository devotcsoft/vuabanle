<div id="div1">
</div>
<section id="main-page">
    <aside id="filter">
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

        <div class="type-filter brand-product">
            <h6 class="title-filter">Thương hiệu</h6>
            <div class="content-filter">
                <input id="filter12" placeholder="Tìm theo thương hiệu..." />
                <input id="search-brand-button" type="button" value="">
                <br/>
                <ul id="root_tree">
                	<?php foreach ($getBrandUsingCates as $getBrandUsingCate):?>
                    <li><a href="<?php echo base_url($getCategoryDetail->keypage.".html?brand=".$getBrandUsingCate['ID']);?>"><?php echo word_limiter($getBrandUsingCate['Name'], 6, '...');?><span class="count">(<?php echo $getBrandUsingCate['countPro'];?>)</span></a></li>
                    <?php endforeach;?>
                </ul>

                <script type="text/javascript">
                    $(function() {
                        $('#filter12').treeListFilter('#root_tree', 200);
                    });
                </script>
            </div>
        </div><!--End Type Filter-->

        <!--  -->
        <div class="type-filter filter-price">
        	<!-- 
            <h6 class="title-filter">Giá sản phẩm</h6>
            <div class="content-filter">

                <div class="nstSlider" data-range_min="100000" data-range_max="50000000"
                     data-cur_min="10000000"  data-cur_max="40000000">
                    <div class="bar"></div>
                    <div class="leftGrip"></div>
                    <div class="rightGrip"></div>
                </div>

                <form class="price-index">
                    <div class="index">
                        <div class="leftLabel" /></div><span>VNĐ</span>
                    </div>
                    <div class="index">
                        <div class="rightLabel" /></div><span>VNĐ</span>
                    </div>
                    <input class="filter-price-button" type="submit" value="">
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
                            var $container = $(this).parent();
                            $container.find('.leftLabel').text(leftValue);
                            $container.find('.rightLabel').text(rightValue);
                        }
                    });
                </script>

            </div>
             -->
        </div><!--End Type Filter-->

        <!-- 
        <div class="type-filter rank-star all-product">
            <h6 class="title-filter">Đánh giá</h6>
            <div class="content-filter">
                <ul>
                    <li><a href="#">Trang điểm <span class="count">(73)</span></a></li>
                    <li><a href="#">Dưỡng da <span class="count">(32)</span></a></li>
                    <li><a href="#">Nước hoa <span class="count">(65)</span></a></li>
                    <li><a href="#">Chăm sóc tóc <span class="count">(11)</span></a></li>
                    <li><a href="#">Sữa tắm cao cấp <span class="count">(24)</span></a></li>
                    <li><a href="#">Kem dưỡng da tay, móng tay <span class="count">(43)</span></a></li>
                </ul>
            </div>
        </div><!--End Type Filter-->
		

        <div style="clear: both"></div>
        <!--<img src="filter.jpg" width="100%">-->
    </aside><!--End Filter-->

    <article id="content-page">
    	<?php echo $bradcrumbs;?>
    	<!-- 
        <div id="breadcrumb">
        </div>
         -->

        <div id="main-category">
            <?php $child = 1; foreach ($getCateUris as $getCateUriChild):?>
            <div class="child-category-item <?php if(($child % 4)==0){ echo "last";} ?>">
                <div class="img-child-category-item">
                    <a href="<?php echo $getCateUriChild['keypage'];?>"><img src="<?php if($getCateUriChild['catImage'] != ""){ echo base_url($getCateUriChild['catImage']); }else { echo base_url('public/font-end/images').'/imgdanhmuc.jpg'; } ?>" alt="<?php echo $getCateUriChild['catName'];?>" title="<?php echo $getCateUriChild['catName'];?>"></a>
                </div>
                <h3 class="name-child-catregory-item"><a href="<?php echo $getCateUriChild['keypage'];?>"><?php echo $getCateUriChild['catName'];?></a></h3>
            </div><!--End Child Category Item-->
            <?php  $child++ ; endforeach;?>

            <div style="clear: both"></div>

        </div><!--End Main Category-->

        <div id="price-range-list">
            <h4 id="title-price-range-list">Hãy chọn giá tốt</h4>
            <ul>
                <li><a href="<?= $getCategoryDetail->keypage.".html?lefprice=1000&rightLabel=300000" ?>">Dưới 300.000 VNĐ</a></li>
                <li><a href="<?= $getCategoryDetail->keypage.".html?lefprice=300000&rightLabel=500000" ?>">300.000 - 500.000 VNĐ</a></li>
                <li><a href="<?= $getCategoryDetail->keypage.".html?lefprice=500000&rightLabel=1000000" ?>">500.000 - 1.000.000 VNĐ</a></li>
                <li><a href="<?= $getCategoryDetail->keypage.".html?lefprice=1000000&rightLabel=2000000" ?>">1.000.000 - 2.000.000 VNĐ</a></li>
                <li><a href="<?= $getCategoryDetail->keypage.".html?lefprice=2000000&rightLabel=3000000" ?>">2.000.000 - 3.000.000 VNĐ</a></li>
                <li><a href="<?= $getCategoryDetail->keypage.".html?lefprice=3000000&rightLabel=99000000" ?>">Trên 3.000.000 VNĐ</a></li>
            </ul>
        </div><!--End Price Range List-->

        <div id="main-content">
            <div class="task-main-content">
                <h1 class="title-main-content">Đồ dùng gia đình</h1>
                <div class="filter-main-content">
                    <h5>Sắp xếp theo:</h5>
                    <div class="title-filter-main-content">
                        <div class="filter-name" id="filter-name2">Mới nhất</div>
                        <ul id="filter-type">
                            <li><a href="<?= $getCategoryDetail->keypage.".html??order=asc" ?>">Giá : Tăng dần</a></li>
                            <li><a href="<?= $getCategoryDetail->keypage.".html??order=desc" ?>">Giá : Giảm dần</a></li>
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
            </div>

            <div class="main-content-inner">
               	<?php foreach ($getProdUsingCates as $getProdUsingCate): ?>
                <div class="product-item">
                    <div class="img-product-item">
                        <a href="<?php echo base_url($getProdUsingCate['seo_name']); ?>.html"><img src="<?php echo base_url($getProdUsingCate['productImage']); ?>" alt="<?php echo $getProdUsingCate['productName'];?>" title="<?php echo $getProdUsingCate['productName'];?>"></a>
                    </div>
                    <h2 class="product-name"><a href="<?php echo base_url($getProdUsingCate['seo_name']); ?>.html"><?php echo  word_limiter($getProdUsingCate['productName'], 9,'...'); ?></a></h2>
                    <div class="product-price">
                    <?php if($getProdUsingCate['giamgia'] == "" || $getProdUsingCate['giamgia'] == null || $getProdUsingCate['giamgia'] == 0){ ?>
                        <div class="new-price"><?= Utility_model::price_format($getProdUsingCate['gia']); ?>  vnđ</div>
					<?php }else { ?>
                        <span class="new-price"><?= Utility_model::price_format($getProdUsingCate['giagiam']); ?> vnđ</span>
                        <br>
						<span class="old-price"><?= Utility_model::price_format($getProdUsingCate['gia']); ?> vnđ</span>
                        <br>
					<?php } ?>

                    <div class="status-product">
                        <?php if($getProdUsingCate['tinhtranghang'] == 1 ){ ?>
                            <img src="<?php echo base_url("assets/font-end/images/pro/StockStatus1.gif"); ?>">
                        <?php } ?>

                        <?php if($getProdUsingCate['tinhtranghang'] == 2 ){ ?>
                            <img src="<?php echo base_url("assets/font-end/images/pro/StockStatus2.gif"); ?>">
                        <?php } ?>

                        <?php if($getProdUsingCate['tinhtranghang'] == 3 ){ ?>
                            <img src="<?php echo base_url("assets/font-end/images/pro/StockStatus3.gif"); ?>">
                        <?php } ?>
                    </div>

                    </div>
                    <div class="button-buy">
                        <input type="button" class="buy-now" id="open_popup" name="open_popup" rel="miendatwebPopup" href="#popup_content" value="Mua ngay" onclick="mua(<?= $getProdUsingCate['productID']; ?>,<?php  if($getProdUsingCate['giamgia'] == "" || $getProdUsingCate['giamgia'] == null || $getProdUsingCate['giamgia'] == 0){ echo $getProdUsingCate['gia']; }else{ echo $getProdUsingCate['giagiam']; } ?>, '<?= $getProdUsingCate['productName']; ?>' )"/>
                    </div>
                    <?php if($getProdUsingCate['giamgia'] == "" || $getProdUsingCate['giamgia'] == null || $getProdUsingCate['giamgia'] == 0){ ?>
					<?php }else { ?>
					<div class="product-mask">
                        <span>-<?= round(($getProdUsingCate['gia']-$getProdUsingCate['giagiam']) / $getProdUsingCate['gia'] * 100, 1); ?>%</span>
                    </div>
					<?php } ?>
                </div><!--End Product Item-->
                <?php endforeach;?>

            </div>
        </div><!--End Main Content-->

        <div style="clear: both"></div>
    </article><!--End Content Page-->

    <div style="clear: both"></div>

</section>