<style type="text/css">
</style>
<div id="content">
	<div class="content-top">
		<div class="wrap">
			<div id="bcr-topline" class="breadcrumb-topline">
				<ul class="clearfix">
					<li class="breadcrumb-topline-first">
					<?php
					if(isset($categorytrees[2][0]['catName']) && $categorytrees[2][0]['catName'] != ""){
						echo "<a href='#'>".$categorytrees[2][0]['catName']."</a>";
					}elseif (isset($categorytrees[1][0]['catName']) && $categorytrees[1][0]['catName'] != ""){
						echo "<a href='#'>".$categorytrees[1][0]['catName']."</a>&raquo;";
					}?>
					</li>
					<li class="breadcrumb-topline-divider"></li>
					<li class="breadcrumb-topline-container breadcrumb-topline-break">
						<ul>
							<li class="breadcrumb-topline-element firstChild">
							<a href="<?php echo base_url('search/hang-moi-ve.html') ?>">Hàng mới về</a></li>
							<li class="breadcrumb-topline-element "><a href="<?php echo base_url('search/ban-chay.html') ?>">Bán chạy nhất</a></li>
							<li class="breadcrumb-topline-element "><a href="<?php echo base_url('search/hang-hot.html') ?>">Hàng hót</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!------end.content-top--->

	<!-----end.product-hight--->
	<div class="bread">
		<div class="wrap">
			<div class="breadcrumb1" style="background:#F8F8F8;">
				<a href="<?= base_url() ?>">Trang chủ</a> &raquo;
				<?php /*
					if(isset($categorytrees[2][0]['catName']) && $categorytrees[2][0]['catName'] != ""){
						echo "<a href='#'>".$categorytrees[2][0]['catName']."</a>&raquo;";
					}
					if(isset($categorytrees[1][0]['catName']) && $categorytrees[1][0]['catName'] != ""){
						echo "<a href='#'>".$categorytrees[1][0]['catName']."</a>&raquo;";
					}
					if(isset($categorytrees[0][0]['catName']) && $categorytrees[0][0]['catName'] != ""){
						echo "<a href='#'>".$categorytrees[0][0]['catName']."</a>&raquo;";
					}
					*/
				?>
				<?php  if(isset($categorytrees[2][0]['catName']) && $categorytrees[2][0]['catName'] != ""){ ?>
					<a href="<?= $categorytrees[2][0]['keypage'].'.html' ?>"><?php echo $categorytrees[2][0]['catName'];?></a>&raquo;
                <?php }
			    if(isset($categorytrees[1][0]['catName']) && $categorytrees[1][0]['catName'] != ""){ ?>
				    <a href="<?= $categorytrees[1][0]['keypage'].'-pd.html' ?>"><?php echo $categorytrees[1][0]['catName']; ?></a>&raquo;
				<?php }
				if(isset($categorytrees[0][0]['catName']) && $categorytrees[0][0]['catName'] != ""){
					    if(isset($categorytrees[1][0]['keypage'])){ ?>
					         <a href="<?= base_url($categorytrees[1][0]['keypage'].'-pd-pr'.@$categorytrees[0][0]['catID'].'-th0-tt0-od0')?>"><?php echo @$categorytrees[0][0]['catName']; ?></a>&raquo;
					    <?php }else { ?>
					         <a href="<?= base_url($categorytrees[0][0]['keypage']).'.html'?>"><?php echo @$categorytrees[0][0]['catName']; ?></a>&raquo;
					    <?php }
					?>

					<?php } ?>
			</div>
		</div>
	</div>
	<!----Bread-->
	<div class="Product-info">
		<div class="wrap">
			<div class="product-details">
				<div class="img-details">

					<div class="simpleLens-gallery-container" id="detail-1">
						<div class="simpleLens-container">
							<div class="simpleLens-big-image-container">
								<a class="simpleLens-lens-image"
									data-lens-image="<?= base_url().''.$productdetail->productImage;?>">
									<img src="<?= base_url().''.$productdetail->productImage; ?>"
									class="simpleLens-big-image">
								</a>
							</div>
						</div>

						<div class="simpleLens-thumbnails-container">
							<a href="#" class="simpleLens-thumbnail-wrapper"
								data-lens-image="<?= base_url().''.$productdetail->productImage;?>"
								data-big-image="<?= base_url().''.$productdetail->productImage;?>">
								<img src="<?= base_url().''.$productdetail->productImage; ?>"
								width="50" height="43">
							</a>
							<?php if($productdetail->galleryImage !=  "N;"){ ?>
								<?php foreach(unserialize($productdetail->galleryImage) as $img): ?>
								<a href="#" class="simpleLens-thumbnail-wrapper"
								data-lens-image="<?= base_url().''.$img['image_url'] ?>"
								data-big-image="<?= base_url().''.$img['image_url'] ?>"> <img
								src="<?= base_url().''.$img['image_url'] ?>" width="50"
								height="43">
							</a>
								<?php endforeach;?>
							<?php }  ?>
						</div>
					</div>
					<script type="text/javascript"
						src="<?= base_url('public/font-end')?>/js/jquery.simpleGallery.js"></script>
					<script type="text/javascript"
						src="<?= base_url('public/font-end')?>/js/jquery.simpleLens.js"></script>
					<script>
					    $(document).ready(function(){
					        $('#detail-1 .simpleLens-thumbnails-container img').simpleGallery({
					            loading_image: 'images/loading.gif'
					        });

					        $('#detail-1 .simpleLens-big-image').simpleLens({
					            loading_image: 'images/loading.gif'
					        });
					    });
					</script>
				</div>

				<div class="info-details">
					<h1 class="title-h1"><?= $productdetail->productName ?></h1>
					<div class="as-ment">
						<p>
							<a href="#tab-review-ass" id="tab-review-ass" class="prd-reviews"
								> Hãy là người đánh giá đầu tiên </a>
						</p>
					</div>
					<div class="stocking"><?php if($productdetail->tinhtranghang == 1 ){ echo "Còn hàng";}elseif($productdetail->tinhtranghang == 2){ echo "Hết hàng";} ?></div>
					<?php if($productdetail->giagiam != 0){ ?>

					<div class="cost">
						Giá gốc: <span><?= Utility_model::price_format($productdetail->gia)?> VNĐ</span>
					</div>
					<div class="price">
						Giá bán:<span style="color: red; padding-left: 5px;">
							<?php
								if($productdetail->giagiam != 0){
									echo Utility_model::price_format($productdetail->giagiam) ;
								}else {
									echo Utility_model::price_format($productdetail->gia);
								} ?>
						VNĐ</span>
					</div>
					<?php }else { ?>
					    <div class="price">
                            Giá bán:<span style="color: red; padding-left: 5px;">
                                <?php
                                    if($productdetail->giagiam != 0){
                                        echo Utility_model::price_format($productdetail->giagiam) ;
                                    }else {
                                        echo Utility_model::price_format($productdetail->gia);
                                    } ?>
                            VNĐ</span>
                        </div>
					<?php } ?>
					<div class="info-">
						<div class="prod_details">
							<ul class=" ui-listBulleted">
								<?php if($productdetail->brandName != ""){ ?>
									<li><span>Thương hiệu : <?= @$productdetail->brandName ?></span></li>
								<?php }  ?>
								<?php if($productdetail->productCode != ""){ ?>
                                    <li><span>Mã sản phẩm : <?= @$productdetail->productCode ?></span></li>
                                <?php }  ?>
								<?php if($productdetail->chatlieu != ""){ ?>
									<li><span>Chất liệu : <?= @$productdetail->chatlieu ?></span></li>
								<?php }  ?>
								<?php if($productdetail->kichthuoc != ""){ ?>
									<li><span>Kích thước  : <?= @$productdetail->kichthuoc ?></span></li>
								<?php }  ?>
								<?php if($productdetail->xuatxu != ""){ ?>
									<li><span>Xuất xứ: <?= @$productdetail->xuatxu ?></span></li>
								<?php }  ?>
								<?php if($productdetail->baohanh != ""){ ?>
									<li><span>Bảo hành: <?= @$productdetail->baohanh ?></span></li>
								<?php }  ?>
							</ul>
						</div>

					</div>
                    <?php if(unserialize($productdetail->color) != ""){ ?>
					<div class="colors">
						<script>
							$('.attrs-item.option').find('label').live('click',function(){
    							 $(this).parent().find('label').removeClass('check');
    							 $(this).addClass('check');
    							 var colorpro = $(this).attr('colorpro');
    							 $(".shopping").attr('color', colorpro);

							 });

					    </script>
					    <div class="colorproduct" >

					    </div>
					    <?php
					    //var_dump($productdetail);
					    ?>
						<form id="" method="POST">
							<div class="attrs">
								<label class="label"> Màu sắc: </label>
								<div class="attrs-item option">
								    <?php foreach(unserialize($productdetail->color) as $color): ?>
									<label title="" class="" colorpro="<?= $color['prod_color'] ?>">
										<input type="radio" name=""
										value="">
										<input class="" type="hidden" id="hiddenField" name="hiddenField"  value="<?= $color['prod_color'] ?>"/>
										<span class="label"
										style="background-color: #<?= $color['prod_color'] ?>">&nbsp;</span> <span
										class="ic-check">Check</span>
								    </label>
								   <?php endforeach;?>

								</div>
							</div>
						</form>
					</div>
					 <?php } ?>
					<style>
.attrs select {
	width: 100px;
	line-height: 22px;
	height: 22px;
}

.quality input[type='text'] {
	width: 50px;
	height: 24px;
	text-align: center;
}

.attrs .attrs-item label {
	width: auto;
	border: 1px solid #ccc;
	background: #F2F2F2;
	text-align: center;
	display: block;
	float: left;
	cursor: pointer;
	position: relative;
	font-size: 13px;
	margin-right: 10px;
	margin-bottom: 5px;
	padding: 1px;
}

.attrs .attrs-item label:hover,.attrs .attrs-item label.check {
	border: 2px solid #c00;
	padding: 0
}

.attrs .attrs-item label.check:before {
	display: block
}

.attrs .attrs-item label>input {
	opacity: 0;
	position: absolute;
	top: 0;
	left: 0;
	cursor: pointer;
}

.attrs .attrs-item label .ic-check {
	width: 0;
	height: 0;
	display: none;
	z-index: -1;
}

.attrs .attrs-item label:before {
	content: '';
	background: url("http://static.sendo.vn/images/ecom/ic-sprite.gif")
		-462px -45px no-repeat;
	width: 13px;
	height: 13px;
	position: absolute;
	right: 0;
	bottom: 0;
	display: none;
}

.attrs .attrs-item label>span {
	display: block;
	height: 20px;
	min-width: 26px;
	line-height: 20px;
	padding: 0 5px;
}

.attrs .attrs-item.color label {

}

.attrs .attrs-item.color label span {
	line-height: 25px;
	height: 25px;
}

.buybtn {
	margin-top: 10px;
	position: relative;
}

.fav {
	padding-left: 20px;
	font-size: 11px;
	font-weight: bold;
	line-height: 20px;
	clear: both;
	position: absolute;
	right: 0;
	top: 10px;
}
</style>
					<div class="purchase">

						<div class="form-group">
                            <div class="purc">
                                <a class="popup-with-zoom-shop shopping btn btn-primary buy"  href="#shoppingcart" onclick="mua(<?= $productdetail->productID; ?>,<?= $productdetail->gia ; ?>, '<?= $productdetail->productName;?>' )" >mua ngay </a>
                            </div>

						</div>
						<div class="purc-text">
							<p>
								<a href="<?= base_url().'chinh-sach/huong-dan-mua-hang.html'?>">Hướng dẫn mua hàng</a>
							</p>
						</div>
						<div class="Nati">
							<div class="Nati-Delivery"><a href="<?= base_url().'chinh-sach//huong-dan-mua-hang.html'?>">Giao hàng toàn quốc</a></div>
						</div>
					</div>
					<div class="Purc-phone">
						<h4>Hỗ trợ mua hàng:</h4>
						<div class="phone-number">

							<img alt=""
								src="<?= base_url('public/font-end')?>/images/phone.png">
							<p>
								<span class="phone"> (04) 6269 1411</span>
							</p>
						</div>

						<div class="phone-number">

							<img alt=""
								src="<?= base_url('public/font-end')?>/images/phone.png">
							<p>
								<span class="phone"> 093 222 1285</span>
							</p>
						</div>

						<div class="support-online">
                            <p>
                                <a href='ymsgr:sendIM?huongngoclan_vp2010'>
                                <img border=”0″ src='http://opi.yahoo.com/online?u=huongngoclan_vp2010&m=g&t=2&l=us'></a>
                            </p>

						</div>

						<div class="support-online">

							<script type="text/javascript" src="http://www.skypeassets.com/i/scom/js/skype-uri.js"></script>
                            <div id="SkypeButton_Call_chinguyen.phpdev_1" style="width:95px;">
                              <script type="text/javascript">
                                Skype.ui({
                                  "name": "call",
                                  "element": "SkypeButton_Call_chinguyen.phpdev_1",
                                  "participants": ["chinguyen.phpdev"],
                                  "imageSize":24;
                                });
                              </script>
                            </div>
						</div>
					</div>
					<div class="direct" style="display: none;">
						<h4>Quý khách có thể trực tiếp đến cửa hàng tại Hà Nội:</h4>
						<p>Số 75 Trung kính, Cầu giấy, Hà nội</p>
					</div>

					<div class="likefacebook">
					    <!--
                            <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-52f1a42f2a10bd65"></script>
                            <div class="addthis_native_toolbox" style="padding-top:10px; height:34px;"></div>
                         -->
                           <div id="like" style="float:left; height:34PX;padding-top:10PX;">
                                <div id="fb-root"></div>
                                <script>(function(d, s, id) {
                                  var js, fjs = d.getElementsByTagName(s)[0];
                                  if (d.getElementById(id)) return;
                                  js = d.createElement(s); js.id = id;
                                  js.src = "//connect.facebook.net/vi_VN/all.js#xfbml=1";
                                  fjs.parentNode.insertBefore(js, fjs);
                                }(document, 'script', 'facebook-jssdk'));
                                </script>
                                <div class="fb-like" data-href="<?= base_url($uriproduct).'.html'; ?>" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
                            </div>
                         <div id="goolge" style="height:34PX; padding-top:10PX;" >
                             <link rel="canonical" href="<?= base_url($uriproduct).'.html'; ?>" />

                                 <g:plusone></g:plusone>

                                    <script type="text/javascript">
                                    window.___gcfg = {
                                        lang: 'en-US'
                                      };

                                      (function() {
                                    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
                                        po.src = 'https://apis.google.com/js/plusone.js';
                                        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
                                      })();
                                    </script>
                            </div>


					</div>
				</div>



			</div>


		</div>
	</div>

	<div class="product-catalog">
		<div class="wrap">
			<div class="box productTeaserBox prd-row">
				<script
					src="<?= base_url('public/font-end')?>/JS_stor/tabcontent.js"></script>

				<div class="header-title1">
					<ul class="tabs" data-persist="true">
						<li>
							<h3 class="lfloat ">
								<a href="#view1"> Chi tiết sản phẩm </a>
							</h3>

						</li>
						<?php if( $productdetail->metaAuthor == "<br />")
						{
						}else { ?>
							<?php if($productdetail->metaAuthor != "") { ?>
								<li>
							<h3 class="lfloat ">
								<a href="#view2">Thông số kĩ thuật</a>
							</h3>
						</li>
							<?php }?>
						<?php } ?>
						<li>
							<h3 class="lfloat ">
								<a href="#tab-review"> Nhận xét & bình luận </a>
							</h3>
						</li>
					</ul>
				</div>

				<div class="tabcontents">
					<?php if($productdetail->productDetail != ""){ ?>
					<div id="view1">
						<div class="content1 spen-plus">
							<div class="content-detail-info">
									<?=  html_entity_decode(stripslashes($productdetail->productDetail),ENT_COMPAT, 'UTF-8'); ?>
							</div>
						</div>
					</div>
					<?php }  ?>
					<?php if($productdetail->metaAuthor != "" || $productdetail->video != "" ){ ?>
					<div id="view2">
						<div class="content1 spen-plus">
								<?=  $productdetail->metaAuthor; ?>
								<?php if($productdetail->video != "" || $productdetail->video != "<br/>"){
									echo  stripslashes($productdetail->video);
								} ?>
						</div>
					</div>
					<?php }  ?>
					<div id="tab-review">
						<div class="content1 spen-plus">
							<div class="rating-example">

								<!-- **** Start reviews **** -->
								<div class="starReviews">
							<div class="show-reviews">
										<h2>Nhận xét</h2>
										 <?php
										    if($getCommentdetail){ ?>
											<?php foreach($getCommentdetail AS $getCommentdetails):?>
										<div class="current-review">
											<div class="form-group input select rating-new">

												<select id="rating-new">
													<option <?php if($getCommentdetails['star'] == 1){ echo 'selected';} ?> value="1"></option>
													<option <?php if($getCommentdetails['star'] == 2){ echo 'selected';} ?> value="2"></option>
													<option <?php if($getCommentdetails['star'] == 3){ echo 'selected';} ?> value="3"></option>
													<option <?php if($getCommentdetails['star'] == 4){ echo 'selected';} ?> value="4"></option>
													<option <?php if($getCommentdetails['star'] == 5){ echo 'selected';} ?> value="5"></option>
												</select>
											</div>
											<div class="current-review-author">
												<p>
													<?= $getCommentdetails['fullname'];?> - Ngày gửi :
														<?php $date = new DateTime($getCommentdetails['postdate']); echo $date->format('H:i:s Y-m-d');
													?>
												</p>
											</div>
											<div class="current-review-content">
												<p><?= $getCommentdetails['content'] ?></p>
											</div>
										</div>
											<?php endforeach;?>
											<?php }else {
											    echo "Chưa có nhận xét";
											} ?>

										<br>
									</div>
									<!-- Add new review -->
									<div class="add-review">
										<form class="form-add-review" role="form"  action="<?= base_url('gui-nhan-xet'); ?>" method="POST" >
											<h2><?= $productdetail->productName ?></h2>
											<div class="form-group input select rating-new">
												<label for="example-f">Bạn đánh giá sản phẩm này thế nào ?</label>

												<select id="rating-new" name="rating-new" style="display:none;">
													<option value="1">1 Star</option>
													<option value="2">2 Stars</option>
													<option value="3">3 Stars</option>
													<option value="4">4 Stars</option>
													<option value="5">5 Stars</option>
												</select>

											</div>
											<?php $seo_name = $this->uri->segment(1);?>

											<input type="hidden" name="seo_name" value="<?php echo $seo_name;?>">
											<input type="hidden" name="productID" value="<?php echo $productdetail->productID;?>">
											<div class="form-group">
												<label for="fullname"><span class="mandatory">*</span>Họ và
													Tên</label>
												<div>
													<input type="text" class="form-control" id="fullname" name="fullname" placeholder="Họ và tên" value="<?php set_value('fullname')?>" data-validation="required" data-validation-error-msg="<br> Vui lòng nhập tên đầy đủ.">
												</div>
											</div>
											<div class="form-group">
												<label for="emailaddress"><span class="mandatory">*</span>
													Email</label>
												<div>
													<input type="text" id="emailaddress" class="form-control" name="email" value="<?php set_value('email')?>"
														placeholder="your@email.com" data-validation="email"
														data-validation-error-msg="<br> Vui lòng nhập email hợp lệ.">
												</div>
											</div>
											<div class="form-group">
												<label for="review"><span class="mandatory">*</span>Nhận xét của bạn</label>
												<div class="comemt">
													<textarea id="comments" name="comment" class="form-control review-comments" value="<?php set_value('comment')?>" placeholder="Nhận xét của bạn" ></textarea>
												</div>
											</div>
										<?php echo validation_errors(); ?>

									<div class="form-group">
										<div>
											<button type="submit" id="add" class="btn btn-primary">Gửi nhận xét</button>
										</div>
									</div>
									</form>
									<br>
                                    </div>
									<div class="notice"></div>
									<br>

									<div id="review-productId" class="review-productId" style="">1</div>
									<!-- Show current reviews -->

								</div>
							</div>
							<!-- **** End reviews **** -->

						</div>

						<!-- jQuery Form Validator -->
						<script
							src="<?= base_url('public/font-end')?>/JS_stor/jquery.form-validator.min.js"></script>
						<!-- jQuery Barrating plugin -->
						<script
							src="<?= base_url('public/font-end')?>/JS_stor/jquery.barrating.js"></script>
						<!-- jQuery starReviews -->
						<script
							src="<?= base_url('public/font-end')?>/JS_stor/starReviews.js"></script>
						<script type="text/javascript">

      $(document).ready(function() {

        /* Activate our reviews */
        $().reviews('.starReviews');

      });

      $(document).ready(function(){
    	  $("#tab-review-ass").click(function(){
    		  $("#view1").css("display", 'none');
    		  $("#view2").css("display", 'none');
    		  $("#tab-review").css("display", 'block');
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


<div class="product-Lienqua">

	<div class="wrap">
		<div class="box productTeaserBox prd-row">
			<div class="header-title2">
				<h2 class="lfloat h3"> <span class="arrow-icon"></span>&nbsp;&nbsp;Sản phẩm cùng chủng loại </h2>
			</div>
			<ul class="itemlist">
				<?php
				if(isset($categorytrees[2][0]['catName']) && $categorytrees[2][0]['catName'] != ""){
					$getAllProductdifferent = Products_model::getAllProductdifferent($categorytrees[2][0]['catID']);
				}elseif (isset($categorytrees[1][0]['catName']) && $categorytrees[1][0]['catName'] != ""){
					$getAllProductdifferent = Products_model::getAllProductdifferent($categorytrees[1][0]['catID']);
				}else {
				    $getAllProductdifferent = Products_model::getAllProductdifferent($categorytrees[0][0]['catID']);
				}
				while ($rsproduct = mysql_fetch_array($getAllProductdifferent)){ ?>
					<li>
						<div class="item view-first1">
							<a href="<?= base_url($rsproduct['seo_name'].'.html')?>">
							    <span><img src="<?php if($rsproduct['anhthume'] != ''){ echo $rsproduct['anhthume']; }else { echo $rsproduct['productImage']; }   ?>" alt="" /></span>
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
							<div class="item-hover mask ">
								<a class="popup-with-zoom-shop shopping"  href="#shoppingcart" onclick="mua(<?= $rsproduct['productID']; ?>,<?= $rsproduct['gia']; ?>, '<?= $rsproduct['productName']; ?>' )" proid="<?= $rsproduct['productID']; ?>"  name="<?= $rsproduct['productName']; ?>" price="<?= $rsproduct['gia']; ?>">mua ngay </a>
							</div>
						</div>
					</li>
					<?php }
				?>

			</ul>
			<!------ListSanPham---->



		</div>
		<!--------end.productTeaserBox---->
	</div>

                                 <script src="<?= base_url('public/font-end')?>/js/jquery-scrolltofixed.js" type="text/javascript"></script>

<script>
    $(document).ready(function() {

        // Dock the header to the top of the window when scrolled past the banner.
        // This is the default behavior.

        $('.header').scrollToFixed();



    });
</script>
</div>
<!-----end#content----->