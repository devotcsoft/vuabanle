<div id="content"> 
	<div class="product-catalog">
		<div class="wrap">
			<div class="box productTeaserBox prd-row">

				<div class="content spen-plus">
					<h1><?= $policyDetail->newsTitle; ?></h1>

					<div class="content-detail-info">

						<?= stripslashes($policyDetail->newsContent); ?>
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
                                                   <a class="open-pop-up-2"  href="#pop-up-2" onclick="mua(<?= $listProductRandoms['productID']; ?>,<?= $listProductRandoms['gia']; ?>, '<?= $listProductRandoms['productName']; ?>' )">mua ngay </a>
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

<!-----end#content----->