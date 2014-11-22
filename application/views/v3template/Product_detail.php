<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/font-end');?>/css/latest-view.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/font-end');?>/css/zoom-product.css">
<script type="text/javascript" src="<?php echo base_url('assets/font-end');?>/js/jquery-zoom-product.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/font-end');?>/js/owl.carousel.js"></script>

<section id="main-page">
	<article id="content-product-detail">
		<?php echo $bradcrumbs; ?>
		<div id="product-detail">

			 <div id="slider-images">

                <?php
                //var_dump($productdetail->productImage);
                ?>
                <div class="simpleLens-gallery-container" id="zoom-produtc-detail">
                    <div class="simpleLens-container">
                        <div class="simpleLens-big-image-container">
                            <a class="simpleLens-lens-image" data-lens-image="<?= $productdetail->productImage ;?>">
                                <img src="<?= $productdetail->productImage ;?>" class="simpleLens-big-image">
                            </a>
                        </div>
                    </div>

                    <div class="simpleLens-thumbnails-container">
                        <a href="#" class="simpleLens-thumbnail-wrapper"
                           data-lens-image="<?= $productdetail->productImage ;?>"
                           data-big-image="<?= $productdetail->productImage ;?>">
                            <img src="<?= $productdetail->productImage ;?>" width="50" alt="<?= $productdetail->productName ?>">
                        </a>
                        <?php if(@$productdetail->galleryImage !=  "N;" && $productdetail->galleryImage != ''){ ?>
						<?php foreach(unserialize($productdetail->galleryImage) as $img): ?>
						<a href="#" class="simpleLens-thumbnail-wrapper"
								data-lens-image="<?php echo str_replace('http://vuabanle.vn/', '', $img['image_url']) ; ?>"
								data-big-image="<?php echo str_replace('http://vuabanle.vn/', '', $img['image_url']) ; ?>"> <img
								src="<?php echo str_replace('http://vuabanle.vn/', '', $img['image_url']) ; ?>" width="50"
								height="43">
						</a>
                        <?php endforeach;?>
						<?php }  ?>
                    </div>
                </div>

                <script>
                    $(document).ready(function(){
                        $('#zoom-produtc-detail .simpleLens-thumbnails-container img').simpleGallery({
                            loading_image: '<?php echo base_url('assets/font-end'); ?>/css/images/loading.gif'
                        });

                        $('#zoom-produtc-detail .simpleLens-big-image').simpleLens({
                            loading_image: '<?php echo base_url('assets/font-end'); ?>/css/images/loading.gif'
                        });
                    });
                </script>

            </div><!--End Slider Images-->


			<div id="product-info">
				<h1 class="name"><?= $productdetail->productName ?></h1>
				<div class="code">
					<span>Mã sản phẩm: <span class="color"><?php if($productdetail->productCode != ""){ echo  @$productdetail->productCode; } ?></span><span class="liwa">|
					</span><span> Lượt xem: <span class="color"><?php if($productdetail->view != ""){ echo  @$productdetail->view; } ?></span>
					<span class="liwa">|</span> Cập nhật: <span class="color">19/09/2014</span></span>
				</div>

				<div class="short-description">
					<ul>
						<?php if($productdetail->thongso != ''){
								echo $productdetail->thongso;
							  }else { ?>
								<?php if($productdetail->brandName != ""){ ?>
									<li><span>Thương hiệu: <?= @$productdetail->brandName ?></span></li>
								<?php }  ?>
								<?php if($productdetail->productCode != ""){ ?>
                                    <li><span>Mã sản phẩm: <?= @$productdetail->productCode ?></span></li>
                                <?php }  ?>
								<?php if($productdetail->chatlieu != ""){ ?>
									<li><span>Chất liệu: <?= @$productdetail->chatlieu ?></span></li>
								<?php }  ?>
								<?php if($productdetail->kichthuoc != ""){ ?>
									<li><span>Kích thước: <?= @$productdetail->kichthuoc ?></span></li>
								<?php }  ?>
								<?php if($productdetail->xuatxu != ""){ ?>
									<li><span>Xuất xứ: <?= @$productdetail->xuatxu ?></span></li>
								<?php }  ?>
								<?php if($productdetail->baohanh != ""){ ?>
									<li><span>Bảo hành: <?= @$productdetail->baohanh ?></span></li>
								<?php }  ?>

						<?php } ?>
					</ul>
				</div>

				<div class="price-buy">
					<div class="price">
						<?php if($productdetail->giamgia == "" || $productdetail->giamgia == null || $productdetail->giamgia == 0){ ?>
							<span>Giá bán: <span class="new-price"><?= Utility_model::price_format($productdetail->gia); ?> vnđ</span></span><br>
						<?php }else { ?>
	                        <span>Giá bán: <span class="new-price"><?= Utility_model::price_format($productdetail->giagiam); ?> vnđ</span></span><br>
							<span>Giá thị trường: <span class="old-price"><?= Utility_model::price_format($productdetail->gia); ?>  vnđ</span></span><br>
<!--						    <span style="padding-bottom: 20px;">Giao hàng : Giao hàng nội thành Hà Nội</span>-->
                        <?php } ?>

						<?php
						if($productdetail->tinhtranghang == 1 ){
							echo "<span><img src='".base_url('assets/font-end/images/pro/StockStatus1.gif')."'></span>";
						}elseif($productdetail->tinhtranghang == 2){
							echo "<span><img src='".base_url('assets/font-end/images/pro/StockStatus2.gif')."'></span>";
						}else {
							echo "<span><img src='".base_url('assets/font-end/images/pro/StockStatus3.gif')."'></span>";
						} ?>

                        <br><br><br>

                        <?php if($productdetail->ghod != null){ ?>
							<span class="local">Giao hàng tại <?= $productdetail->ghod ?></span>
						<?php }else { ?>
							<span class="local">Giao hàng toàn quốc</span>
						<?php }?>
					</div>

					<div class="buy-button">
						<input type="button" class="buy-now" id="open_popup" name="open_popup" rel="miendatwebPopup" href="#popup_content" value="Mua ngay" onclick="mua(<?= $productdetail->productID; ?>,<?php  if( $productdetail->giamgia == "" ||  $productdetail->giamgia == null ||  $productdetail->giamgia == 0){ echo  $productdetail->gia; }else{ echo  $productdetail->giagiam; } ?>, '<?=  $productdetail->productName; ?>' )"/>
						<a href="<?php echo base_url('huong-dan-mua-hang');?>.html" class="buy-guide">Hướng dẫn mua hàng</a>
					</div>
				</div>
				<!--End Price And Buy-->

				<div class="support-buy">
					<h5 class="support-buy-title">
						Hỗ trợ<br>mua hàng
					</h5>
					<span class="phone-item">(04) 6269 1411</span><br>
					<span class="phone-item">(04) 6266 1969</span>

				</div>

				
                <div class="star-social">
                	<!-- 
                    <div class="star-rank">
						<span><img
                                src="http://vuabanle.vn/public/font-end/images/rating-star1.png"></span><a
                            href="#" class="first-rank">Hãy là người đánh giá đầu tiên</a>
                    </div>
                     -->

                    <div class="social">
                        <div id="like">
                            <div id="fb-root"></div>
                            <script>(function(d, s, id) {
                                    var js, fjs = d.getElementsByTagName(s)[0];
                                    if (d.getElementById(id)) return;
                                    js = d.createElement(s); js.id = id;
                                    js.src = "//connect.facebook.net/vi_VN/all.js#xfbml=1";
                                    fjs.parentNode.insertBefore(js, fjs);
                                }(document, 'script', 'facebook-jssdk'));</script>
                            <div class="fb-like" data-href="<?php echo base_url( $productdetail->seo_name).'.html';?>" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
                        </div>
                    </div>
                </div>
			</div>
			<!--End Prodcut Info-->

			<div style="clear: both"></div>
		</div>
		<!--End Product Detail-->

		<div id="more-product-info">
			<script type="text/javascript">
                $(document).ready(function() {

                    $(".tab_content").hide();
                    $(".tab_content:first").show();

                    $("ul.tabs li").click(function() {
                        $("ul.tabs li").removeClass("active");
                        $(this).addClass("active");
                        $(".tab_content").hide();
                        var activeTab = $(this).attr("rel");
                        $("#"+activeTab).fadeIn();
                    });
                });
            </script>

			<ul class="tabs">
				<li class="active" rel="tab1">Chi tiết sản phẩm</li>
				<?php if( $productdetail->metaAuthor == "<br />")
				{
				}else { if($productdetail->metaAuthor != "") { ?>
							<li rel="tab2">Thông tin sản phẩm</li>
				<?php } } ?>

				<li rel="tab3">Nhận xét của khách hàng</li>
			</ul>

			<div class="tab_container">

				<div id="tab1" class="tab_content">
					<h2 class="title-tab-content">Chi tiết sản phẩm <?= $productdetail->productName ?></h2>

					<?php if($productdetail->spbaogom != ''){ ?>
					<div class="list-small-product">
						<span class="title">Bộ sản phẩm bao gồm:</span>
						<ul>
							<?php echo $productdetail->spbaogom; ?>
						</ul>
					</div>
					<?php } ?>
					<!--End List Small Product-->

					<div class="tab-content-main">
						<p style="font-family: arial, helvetica, sans serif; font-size: 13px; text-align: justify; line-height: 24px;">
							<?=  html_entity_decode(stripslashes($productdetail->productDetail),ENT_COMPAT, 'UTF-8'); ?>
						</p>
					</div>
					<!--End Tab Content Main-->
				</div>
				<!-- #tab1 -->

				<?php if($productdetail->metaAuthor != "" || $productdetail->video != "" ){ ?>
				<div id="tab2" class="tab_content">
					<h2 class="title-tab-content">Thông tin sản phẩm : <?php echo $productdetail->productName ?></h2>
					<div class="tab-content-main">

						<?=  $productdetail->metaAuthor; ?>
						<?php if($productdetail->video != "" || $productdetail->video != "<br/>"){
							echo  stripslashes($productdetail->video);
						} ?>
					</div>
				</div>
				<!-- #tab2 -->
				<?php }  ?>

				<div id="tab3" class="tab_content">
					<h2 class="title-tab-content">Nhận xét của khách hàng về : <?php echo $productdetail->productName ?></h2>

					<div class="tab-content-main">
						<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&appId=310929572442256&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-comments" data-href="<?php echo base_url($this->uri->segment(1)) ;?>" data-width="900" data-numposts="5" data-colorscheme="light"></div>
					</div>
				</div>
				<!-- #tab3 -->

			</div>
			<!-- .tab_container -->
		</div>
		<!--End More Product Info-->

		<?php if($getAllorders){?>
		<div class="latest-view">
			<div class="task-latest-view">
				<h4 class="title">Sản phẩm vừa xem</h4>
			</div>
			<div id="owl-demo" class="owl-carousel">
				<?php foreach ($getAllorders as $getAllorder): ?>
                <div class="product-item item">
                    <div class="img-product-item">
                        <a href="<?php echo base_url($getAllorder['seo_name']); ?>.html">
                        <img src="<?php echo base_url($getAllorder['productImage']); ?>" alt="Tên sản phẩm" title="Tên sản phẩm"></a>
                    </div>
                    <h2 class="product-name"><a href="<?php echo base_url($getAllorder['seo_name']); ?>.html"><?php echo  word_limiter($getAllorder['productName'], 6,'...'); ?></a></h2>
                    <div class="product-price">
                    <?php if($getAllorder['giamgia'] == "" || $getAllorder['giamgia'] == null || $getAllorder['giamgia'] == 0){ ?>
						<div class="new-price"><?= Utility_model::price_format($getAllorder['gia']); ?>  vnđ</div>
					<?php }else { ?>
                        <span class="new-price"><?= Utility_model::price_format($getAllorder['giagiam']); ?> vnđ</span>
                        <br>
						<span class="old-price"><?= Utility_model::price_format($getAllorder['gia']); ?> vnđ</span>
					<?php } ?>
                    </div>
                    <div class="button-buy">
                        <input type="button" class="buy-now" id="open_popup" name="open_popup" rel="miendatwebPopup" href="#popup_content" value="Mua ngay" onclick="mua(<?= $getAllorder['productID']; ?>,<?php  if($getAllorder['giamgia'] == "" || $getAllorder['giamgia'] == null || $getAllorder['giamgia'] == 0){ echo $getAllorder['gia']; }else{ echo $getAllorder['giagiam']; } ?>, '<?= $getAllorder['productName']; ?>' )"/>
                    </div>
                    <?php if($getAllorder['giamgia'] == "" || $getAllorder['giamgia'] == null || $getAllorder['giamgia'] == 0){ ?>
					<?php }else { ?>
					<div class="product-mask">
                        <span>-<?= $getAllorder['giamgia'] ?>%</span>
                    </div>
					<?php } ?>
                </div><!--End Product Item-->
                <?php endforeach;?>
			</div>
		</div>
		<!--End Latest View-->
		<?php }?>

		<div style="clear: both"></div>
	</article>
	<!--End Content Page-->

	<aside id="suggestions">
		<h4 id="title-suggestions">Gợi ý sản phẩm</h4>
		<div id="suggestions-inner">
			<?php foreach ($getRandProducts as $getRandProduct): ?>
                <div class="product-item item">
                    <div class="img-product-item">
                        <a href="<?php echo base_url($getRandProduct['seo_name']); ?>.html"><img src="<?php echo base_url($getRandProduct['productImage']); ?>" alt="Tên sản phẩm" title="Tên sản phẩm"></a>
                    </div>
                    <h2 class="product-name"><a href="<?php echo base_url($getRandProduct['seo_name']); ?>.html"><?php echo  word_limiter($getRandProduct['productName'], 9,'...'); ?></a></h2>
                    <div class="product-price">
                    <?php if($getRandProduct['giamgia'] == "" || $getRandProduct['giamgia'] == null || $getRandProduct['giamgia'] == 0){ ?>
						<div class="new-price"><?= Utility_model::price_format($getRandProduct['gia']); ?>  vnđ</div>
					<?php }else { ?>
						<span class="old-price"><?= Utility_model::price_format($getRandProduct['gia']); ?> vnđ</span>
                        <br>
                        <span class="new-price"><?= Utility_model::price_format($getRandProduct['giagiam']); ?> vnđ</span>
					<?php } ?>

                        <div class="status-product">
                            <?php if($getRandProduct['tinhtranghang'] == 1 ){ ?>
                                <img src="<?php echo base_url();?>/assets/font-end/images/pro/StockStatus1.gif">
                            <?php } ?>

                            <?php if($getRandProduct['tinhtranghang'] == 2 ){ ?>
                                <img src="<?php echo base_url();?>assets/font-end/images/pro/StockStatus2.gif">
                            <?php } ?>

                            <?php if($getRandProduct['tinhtranghang'] == 3 ){ ?>
                                <img src="<?php echo base_url();?>/assets/font-end/images/pro/StockStatus3.gif">
                            <?php } ?>
                        </div>

                    </div>
                    <div class="button-buy">
                        <input type="button" class="buy-now" id="open_popup" name="open_popup" rel="miendatwebPopup" href="#popup_content" value="Mua ngay" onclick="mua(<?= $getRandProduct['productID']; ?>,<?php  if($getRandProduct['giamgia'] == "" || $getRandProduct['giamgia'] == null || $getRandProduct['giamgia'] == 0){ echo $getRandProduct['gia']; }else{ echo $getRandProduct['giagiam']; } ?>, '<?= $getRandProduct['productName']; ?>' )"/>
                    </div>
                    <?php if($getRandProduct['giamgia'] == "" || $getRandProduct['giamgia'] == null || $getRandProduct['giamgia'] == 0){ ?>
					<?php }else { ?>
					<div class="product-mask">
                        <span>-<?= $getRandProduct['giamgia'] ?>%</span>
                    </div>
					<?php } ?>
                </div><!--End Product Item-->
            <?php endforeach;?>
			<!--End Product Item-->
			<div style="clear: both"></div>
		</div>
	</aside>
	<!--End Suggestions-->

	<div style="clear: both"></div>

</section>