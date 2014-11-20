<div id="content">

	<!------end.content-top--->

	<!-----end.product-hight--->
	<div class="bread">
		<div class="wrap">
			<div class="breadcrumb">
				<a href="<?= base_url()?>">Trang chủ</a> &raquo; <a href="<?= base_url('tuyen-dung.html') ?>" >Tuyển dụng</a>
			</div>
		</div>
	</div>
	<!----Bread-->
	<div class="product-catalog">
		<div class="wrap">
			<div class="box productTeaserBox prd-row">

				<div class="content spen-plus">
					<h1><span class="arrow-icon"></span>&nbsp;&nbsp;Tuyển dụng</h1>

					<div>

						<div class="denews">
							<ul id="denews">
								<?php foreach($getAlltuyendungs as $getAlltuyendung): ?>
								<li>
									<img alt=" tin tức" src="<?= base_url($getAlltuyendung['newsImage'])?>">

									<h3><a href="<?= base_url('tuyen-dung/'.$getAlltuyendung['seo_name'].'.html') ?>"><?= $getAlltuyendung['newsTitle'] ?></a></h3>
                                           <div class="denews_content">
									<!--<p>Không phải ai cũng cần phải uống đủ 8 cốc nước mỗi ngày. Nước nóng hay lạnh không gây khác biệt gì cho cơ thể. Ngoài ra, nước cũng có thể bị thiu. Sau đây là những gì…				</p>-->
									<p><?php if($getAlltuyendung['newsDes'] != ""){ echo $getAlltuyendung['newsDes']; }?></p> 
									<a href="<?= base_url('tuyen-dung/'.$getAlltuyendung['seo_name'].'.html') ?>"> Xem tiếp </a></div>
								</li>
								<?php endforeach; ?>
								  <div class="l-cell1 vMid txtRight pgn-pagingWrapper">
								<?php echo $pagination;?>
                              
                                </div>
							</ul>
						</div>

					</div>

				</div>

			</div>

		</div>
	</div>
	<!----end.product-catalog--->

	
		 <script src="<?= base_url('public/font-end')?>/js/jquery-scrolltofixed.js" type="text/javascript"></script>
<script>
    $(document).ready(function() {

        // Dock the header to the top of the window when scrolled past the banner.
        // This is the default behavior.

        $('.header').scrollToFixed();


        // Dock the footer to the bottom of the page, but scroll up to reveal more
        // content if the page is scrolled far enough.

        $('.footer').scrollToFixed( {
            bottom: 0,
            limit: $('.footer').offset().top
        });


        // Dock each summary as it arrives just below the docked header, pushing the
        // previous summary up the page.

        var summaries = $('.gg');
        summaries.each(function(i) {
            var summary = $(summaries[i]);
            var next = summaries[i + 1];

            summary.scrollToFixed({
                marginTop: $('.header').outerHeight(true) + 10,
                limit: function() {
                    var limit = 0;
                    if (next) {
                        limit = $(next).offset().top - $(this).outerHeight(true) - 10;
                    } else {
                        limit = $('.footer').offset().top - $(this).outerHeight(true) - 10;
                    }
                    return limit;
                },
                zIndex: 999
            });
        });
    });
</script>
<!-----end#content----->