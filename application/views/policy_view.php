<div id="content">
	 
	<div class="product-catalog">
		<div class="wrap">
			<div class="box productTeaserBox prd-row">

				<div class="content spen-plus">
					<h1><span class="arrow-icon"></span>&nbsp;&nbsp;<?= $policyDetail->newsTitle; ?></h1>

					<div class="content-detail-info">

						<?= stripslashes($policyDetail->newsContent); ?>
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