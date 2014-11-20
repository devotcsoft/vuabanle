<div id="content">
	<div class="content-top">
		<div class="wrap"></div>
	</div>
	<!------end.content-top--->
	<div class="product-advertising">
		<div class="wrap">
			<div class="advertising">
			<?php if ($getCategoryDetail->imageBanner1=="" or $getCategoryDetail->imageBanner2==""){}else{?>
				<div class="module-advertising">
					<a href="<?= $getCategoryDetail->urlBanner1; ?>" title=""><img src="<?= $getCategoryDetail->imageBanner1; ?>" width="460px " height="130px" title="" alt="" /></a>
				</div>
				<div class="module-advertising">
					<a href="<?= $getCategoryDetail->urlBanner2; ?>" title=""><img src="<?= $getCategoryDetail->imageBanner2; ?>" width="460px " height="130px" title="" alt="" /></a>
				</div>
				<?php }?>
			</div>
		</div>

	</div>
	<!-----end.product-hight--->
	<div class="bread">
		<div class="wrap">
			<div class="breadcrumb1">
				<a href="<?= base_url() ?>">Trang chủ</a> &raquo; <a href=""><?= $getCategoryDetail->catName; ?></a>
			</div>
		</div>
	</div>
	<div class="disco">
		<div class="wrap">
			<div class="box productTeaserBox1 prd-row">
				<div class="header-title">
					<h1 class="lfloat h3"><span class="arrow-icon"></span>&nbsp;&nbsp;<?= $getCategoryDetail->catName; ?></h1>
				</div>
			</div>
			<?php if($getCategoryUris): ?>
			<?php foreach ($getCategoryUris as $getCategoryUri):?>
			<div class="catalog-product ">
				<a href="<?= base_url($getCategoryUri['keypage'].'-pd.html')?>">
				    <?php if($getCategoryUri['catImage'] !=""){ ?> 
				    <img src="<?= base_url().$getCategoryUri['catImage']; ?>" alt=""/ >
				    <?php }else { ?>
				    <img src="<?= base_url('public/font-end/images').'/imgdanhmuc.jpg'?>" alt=""/ >    
				    <?php }  ?>
					<div>
						<h2>
							<?= $getCategoryUri['catName']?> <span class="aroww"></span>
						</h2>
					</div>
				</a>
			</div>
			<?php endforeach; ?>
			<?php endif;?>
			
			
			
		</div>




	</div>
	
	<!-------end.disco------>
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
                      
                     <div class="UIBeep_Title">
                        <span class="blueName">Bạn đã mua </span> 1 sản phẩm<span class="blueName"></span>.
                     </div>
                  </a>
                    <span class="beeper_x"></span>
               </div>
            </div>
         </div>
      </div> <!----------endgiohang----------->
      
    <!--  
	<div class="product-Lienqua">

		<div class="wrap">
			<div class="box productTeaserBox prd-row">
				<div class="header-title2">
					<h2 class="lfloat h3"><span class="arrow-icon"></span>&nbsp;&nbsp;Sản phẩm ngẫu nhiên</h2>
				</div>
				<ul class="itemlist">
					<?php foreach($getProductUsingCates as $getProductUsingCate): ?>
					<li>
						<div class="item view-first1">
							<a href="<?= base_url().$getProductUsingCate['seo_name'].'.html'; ?>"> <span> <img width="200px " height="135px" src="<?= base_url().$getProductUsingCate['productImage']?>" alt="<?= $getProductUsingCate['productName'] ?>" alt="" /></span>
								<div class="item-prodinfo">
									<?php
									if($getProductUsingCate['giamgia'] == "" || $getProductUsingCate['giamgia'] == null){
										
									}else { ?>
										<div class="sb-gdv-disc">
											<div class="sb-gdv-disc__content">-<?= $getProductUsingCate['giamgia'] ?>%</div>
										</div>
									<?php } ?>
									
									<div class="item-title"><?= $getProductUsingCate['productName'] ?></div>
									<div class="item-stockhim"><?php if($getProductUsingCate['tinhtranghang'] == 1 ){ echo "Còn hàng";}elseif($getProductUsingCate['tinhtranghang'] == 2){ echo "Hết hàng";}else { echo "Sắp có hàng"; } ?></div>
									<?php
									if($getProductUsingCate['giamgia'] == "" || $getProductUsingCate['giamgia'] == null || $getProductUsingCate['giamgia'] == 0){ ?>
										<div class="item-core"> </div>
										<div class="item-price"><?= Utility_model::price_format($getProductUsingCate['gia']); ?>  VNĐ</div>
									<?php }else { ?>
										<div class="item-core"><?= Utility_model::price_format($getProductUsingCate['gia']); ?> VNĐ</div>
										<div class="item-price"><?= Utility_model::price_format($getProductUsingCate['giagiam']); ?>  VNĐ</div>
									<?php } ?>
									
								</div>
							</a>
							<div class="item-hover mask ">
								<a  class="shopping" id="shopping" proid="<?= $getProductUsingCate['productID']; ?>"  name="<?= $getProductUsingCate['productName']; ?>" price="<?= $getProductUsingCate['gia']; ?>"> mua
									hàng </a>
							</div>
						</div>
					</li>
					<?php endforeach; ?>
				</ul>
			</div>
		</div>

	</div>
	-->


</div>
<!-----end#content----->