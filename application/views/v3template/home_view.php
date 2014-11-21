<!-- 
<div class="cookie-popup-wrap" style="display: none">
		<div class="cookie-popup">
            <a href="<?php echo base_url('khuyen-mai-lon');?>">
                <img src="<?php echo base_url('assets/img/khuyen-mai-20-11.png');?>" alt="Khuyến mại" title="Khuyến mại">
            </a>
			<h6 id="closepopup"><a href="#"></a></h6>
		</div>
        <div class="mask"></div>
</div>
-->
<!--End .cookie-popup-wrap-->

<!-- main_content -->
<div id="main_content">
<section id="slider">
    <div id="slider-inner">
        <div id="main-slider">
            <ul id="demo1">            	
        		<?php foreach (json_decode($gallerys->galleryImage) as $gallery){
        			echo "<li><a href=$gallery->imagelink ><img src=$gallery->image_url alt='Tiêu đề bài viết'></a></li>";	
        		}?>
            </ul>

            <script>
                $(function() {
                    var demo1 = $("#demo1").slippry({
                        //Transition: fade,horizontal,kenburns,vertical
                        transition: 'vertical',
                        useCSS: true,
                        speed: 1000,
                        pause: 5000,
                        auto: true,
                        preload: 'visible'
                    });

                    $('.stop').click(function () {
                        demo1.stopAuto();
                    });

                    $('.start').click(function () {
                        demo1.startAuto();
                    });

                    $('.prev').click(function () {
                        demo1.goToPrevSlide();
                        return false;
                    });
                    $('.next').click(function () {
                        demo1.goToNextSlide();
                        return false;
                    });
                    $('.reset').click(function () {
                        demo1.destroySlider();
                        return false;
                    });
                    $('.reload').click(function () {
                        demo1.reloadSlider();
                        return false;
                    });
                    $('.init').click(function () {
                        demo1 = $("#demo1").slippry();
                        return false;
                    });
                });
            </script>
        </div><!--End Main Slider-->

        <div id="right-advertise-slider">
        	<?php foreach($paddings as $padding): if($padding['type'] == 1){ ?>
            <div class="advertise-item">
                <a href="<?php echo $padding['url']; ?>"><img src="<?php echo base_url($padding['image']);?>" alt="Quảng cáo"></a>
            </div><!--End Advertise Item-->
			<?php } endforeach;?>
        </div><!--End Right Advertise Slider-->

        <div style="clear: both"></div>
    </div><!--End Slider Inner-->
</section><!--End Slider-->

<section id="provider">
    <div id="advertise-left">
    	<?php foreach($paddings as $padding): if($padding['type'] == 2){ ?>
        <a href="<?php echo $padding['url'];?>"><img src="<?php echo base_url($padding['image']);?>" width="218" height="328" alt="Quảng cáo bên trái"></a>
        <?php } endforeach;?>
    </div>
    <!--End Advertise Left-->

    <div id="logo-provider">
    	<?php foreach ($getAllBrand as $getAllBrands){ ?>
    	<a href="<?php echo base_url('search/thuonghieu/'.$getAllBrands['catID'],'.html')?>"><img src="<?php echo base_url($getAllBrands['catImage']);?>" alt="<?php echo base_url($getAllBrands['catName']);?>"></a>
    	<?php }?>
       
    </div><!--End Logo Provider-->

    <div id="advertise-right">
    	<?php foreach($paddings as $padding): if($padding['type'] == 3){ ?>
        <a href="<?php echo $padding['url'];?>"><img src="<?php echo base_url($padding['image']);?>" width="218" height="328" alt="Quảng cáo bên trái"></a>
        <?php } endforeach;?>        
    </div><!--End Advertise Right-->

    <div style="clear: both"></div>
</section><!--End Provider-->

<?php $cate = 1; foreach($getAllatHomes as $getAllatHome): 
$json_decode_getAllatHomes = json_decode($getAllatHome['imgurl']);
$json_decode_imgurlbrands = json_decode($getAllatHome['imgurlbrand']);
$json_decode_namelinks = json_decode($getAllatHome['namelink']);
$json_decode_adslinks = json_decode($getAllatHome['adslink']);
$json_decode_titlenameimglinks = json_decode($getAllatHome['titlenameimglink']);
?>
<section class="category category-<?= $cate ?>">
    <div class="menu-category">
        <div class="name-category">
            <div class="name-category-show">
                <h2 class="title"><a href="<?php echo $json_decode_getAllatHomes['0']->imgurl; ?>"><?php echo $getAllatHome['name']; ?></a></h2>
                <div class="img-thumb-category">
                	<a href="<?php echo $json_decode_getAllatHomes['0']->imgurl; ?>"><img src="<?php echo $json_decode_getAllatHomes['1']->imgurl1; ?>" alt="<?php echo $getAllatHome['name']; ?>"></a>
                </div>
            </div>
            <div class="mask"></div>
        </div><!--End Name Category-->

        <div class="provider-logo">
        	<?php foreach ($json_decode_imgurlbrands as $key => $json_decode_imgurlbrand): ?>
        	<a href="<?php echo $json_decode_imgurlbrand->imgurlbrand; ?>"><img src="<?php echo base_url($json_decode_imgurlbrand->imgurlbrand1);?>" alt="Tên nhà cung cấp"></a> 
            <?php endforeach; ?>
        </div><!--End Provider Logo-->

        <div class="list">
            <ul>
            	<?php foreach ($json_decode_namelinks as $key => $json_decode_namelink): ?>
        		 <li><a href="<?php echo $json_decode_namelink->namelink1; ?>"><?php echo $json_decode_namelink->namelink; ?></a></li> 
            	<?php endforeach; ?>
            </ul>
        </div><!--End List-->
    </div><!--End Menu Category-->

    <div class="sell-images">
        <a href="<?php echo $json_decode_adslinks[0]->adslink; ?>"><img src="<?php echo $json_decode_adslinks[1]->adslink1;?>" alt="Tên sản phẩm"></a>
    </div><!--End Sell Images-->

    <div class="top-product">
    	<?php foreach ($json_decode_titlenameimglinks as $key => $json_decode_titlenameimglink): ?>
        <div class="top-product-item">
            <h3 class="top-product-name"><a href="<?php echo $json_decode_titlenameimglink->titlenameimglink2 ;?>"><?php echo $json_decode_titlenameimglink->titlenameimglink ;?></a></h3>
            <span class="top-product-description"><?php echo $json_decode_titlenameimglink->titlenameimglink1 ;?></span>
            <div class="top-product-image"><a href="<?php echo $json_decode_titlenameimglink->titlenameimglink2 ;?>"><img src="<?php echo base_url($json_decode_titlenameimglink->titlenameimglink3);?>" alt="Tên chuyên mục"></a></div>
        </div><!--End Top Product Item-->
        <?php endforeach; ?>
    </div><!--End Top Product-->

</section><!--End category-->
<?php $cate++; endforeach; ?>

</div>
<!-- END Main_content -->