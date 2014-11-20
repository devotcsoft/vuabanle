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
            <span>Tuyển dụng</span>
        </div><!--End BreadCrumb-->

        <div id="main-news">
        	<?php $i = 1; 
        	foreach($getAlltuyendungs as $getAlltuyendung): ?>
            <div class="news-item <?php if( ($i % 3) == 0) { echo "last"; }?>">
                <h2 class="title"><a href="<?= base_url('tin-tuc/'.$getAlltuyendung['seo_name'].'.html') ?>"><?= $getAlltuyendung['newsTitle'] ?></a></h2>
                <!-- 
                <div class="function">
                    <span class="time" title="Ngày xuất bản">19/0/2014</span>
                    <span class="view" title="Lượt xem">983</span>
                </div>
                 -->
                <span class="intro-text"><?php echo word_limiter($getAlltuyendung['newsTitle'], 20, '...')?></span>
                <div class="img-thumb">
                    <a href="news-detail.html"><img src="<?= base_url($getAlltuyendung['newsImage'])?>" title="Tên tin tức" alt="Tên tin tức"></a>
                </div>
            </div><!--End News Item-->
            <?php $i++; endforeach;?>
        </div><!--End Main Content-->
		<?php echo $pagination;?>
        <div style="clear: both"></div>
    </article><!--End Content Page-->

    <div style="clear: both"></div>

</section>