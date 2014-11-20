<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/font-end');?>/css/news.css">
<section id="main-page">
<aside id="module-news-right">
    <div class="news-category">
        <h4 class="title"><a href="<?php echo base_url('tuyen-dung')?>.html">Tuyển dụng</a></h4>
        <div class="content">
            <ul>
            	<?php foreach ($tuyenDung5 as $tuyenDung): ?>
                <li><a href="<?php echo base_url('tuyen-dung/'.$tuyenDung['seo_name']);?>.html"><?php echo word_limiter($tuyenDung['newsTitle'], 13, '...');?></a></li>
                <?php endforeach;?>
            </ul>
        </div>
    </div><!--End News Category-->

    <div class="news-category">
        <h4 class="title"><a href="<?php echo base_url('tin-tuc'); ?>.html">Tin tức</a></h4>
        <div class="content">
            <ul>
            	<?php foreach ($tintuc5 as $tintuc): ?>
                <li><a href="<?php echo base_url('tin-tuc/'.$tintuc['seo_name']); ?>.html"><?php echo word_limiter($tintuc['newsTitle'], 12, '...'); ?></a></li>
                <?php endforeach;?>
            </ul>
        </div>
    </div><!--End News Category-->
</aside><!--End Module News Right-->

<article id="content-page">
    <div id="breadcrumb">
        <a href="<?php echo base_url(); ?>">Trang chủ</a>
        <!--<a href="#">Tin tức</a>-->
        <span><?= $policyDetail->newsTitle; ?></span>
    </div><!--End BreadCrumb-->

    <div id="main-news">
        <h1 class="title-news"><?= $policyDetail->newsTitle; ?></h1>
        <div class="article-content">
			<?= stripslashes($policyDetail->newsContent); ?>
        </div>

        <div class="related-news">
            <h4 class="title">Bài viết liên quan:</h4>
            <ul>
            	<?php foreach ($getabout7 as $getabout): ?>
                <li><a href="<?php echo base_url('tin-tuc/'.$getabout['seo_name']); ?>.html"><?php echo word_limiter($getabout['newsTitle'], 12, '...'); ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div><!--End Related News-->
    </div><!--End Main Content-->

    <div style="clear: both"></div>
</article><!--End Content Page-->

<div style="clear: both"></div>

</section>