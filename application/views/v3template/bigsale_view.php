<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/font-end');?>/css/bigsale.css">
<script type="text/javascript" src="<?php echo base_url('assets/font-end');?>/js/jquery.countdown.plugin.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/font-end');?>/js/jquery.countdown.js"></script>
<section id="main-page-sale">

    <article class="main-sale">
        <div class="banner-main-sale">
            <img src="<?php echo base_url('assets/font-end/images/banner-main-sale.jpg');?>" alt="Khuyến mãi hàng ngày">
        </div>

        <div class="list-product-sale">
        	<?php $i = 1; foreach ($bigsales as $bigsale): ?>
        	<?php if($i % 3 == 0){ ?>
            <div class="product-sale-item last">
            <?php }else {?>
            <div class="product-sale-item">
            <?php }?>
                <div class="img-thumb">
                    <a href="<?php echo base_url($bigsale['seo_name']); ?>.html"><img src="<?php echo base_url($bigsale['productImage']);?>" alt="Tên sản phẩm" title="Tên sản phẩm"></a>
                </div>
                <?php if($bigsale['giamgia'] == "" || $bigsale['giamgia'] == null || $bigsale['giamgia'] == 0){ ?>
					<?php }else { ?>
					<div class="mask">
                        <span>-<?= round(($bigsale['gia']-$bigsale['giagiam']) / $bigsale['gia'] * 100, 1); ?>%</span>
                    </div>
					<?php } ?>
                <h2 class="title"><a href="<?php echo base_url($bigsale['seo_name']); ?>.html"><?php echo $bigsale['productName']?></a></h2>
                <?php if($bigsale['giamgia'] == "" || $bigsale['giamgia'] == null || $bigsale['giamgia'] == 0){ ?>
				<div class="new-price"><?= Utility_model::price_format($bigsale['gia']); ?>  vnđ</div>
				<?php }else { ?>
                <span class="new-price"><?= Utility_model::price_format($bigsale['giagiam']); ?> vnđ</span><br>
				<span class="old-price"><?= Utility_model::price_format($bigsale['gia']); ?> vnđ</span><br>
				<?php } ?>
				<input type="button" class="buy-now" id="open_popup" name="open_popup" rel="miendatwebPopup" href="#popup_content" value="Mua ngay" onclick="mua(<?= $bigsale['productID']; ?>,<?php  if($bigsale['giamgia'] == "" || $bigsale['giamgia'] == null || $bigsale['giamgia'] == 0){ echo $bigsale['gia']; }else{ echo $bigsale['giagiam']; } ?>, '<?= $bigsale['productName']; ?>' )"/>
				
				<?php
				$bigsaletime = explode("/", $bigsale['saletime']);
				//var_dump($bigsaletime);
				?>
                <script>
                    $(function () {
                        var austDay = new Date();
                        //austDay = new Date(austDay.getFullYear(Năm), Tháng - 1, Ngày);
                        austDay = new Date(austDay.getFullYear(2014), <?= $bigsaletime[0] ?> - 1, <?= $bigsaletime[1] ?>);
                        $('#over-time-1<?= $i ?>').countdown({until: austDay});
                        $('#year').text(austDay.getFullYear());
                    });
                </script>
                <div id="over-time-1<?= $i ?>" class="over-time"></div>
            </div><!--End Product sale Item-->
            <?php $i++; endforeach;?>
        </div><!--End List product sale-->
    </article><!--End Main sale-->

    <div style="clear: both"></div>
</section>