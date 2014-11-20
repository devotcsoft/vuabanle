<div id="footer">

	<div class="footer-top">
		<div class="wrap">
			<div class="fot-col">
				<div class="fotitle">THÔNG TIN</div>
				<ul class="linklist">
					<li><a href="<?= base_url('danh-cho-nhom-mua.html') ?>">Dành cho nhóm mua</a></li>
					<li><a href="<?= base_url('danh-cho-nha-cung-cap.html') ?>">Dành cho nhà cung cấp</a></li>
					<li><a href="<?= base_url('ve-vuabanle.html') ?>">Về vuabanle.vn</a></li>
					<li><a href="<?= base_url('tuyen-dung.html') ?>">Tuyển dụng</a></li>
					<li><a href="<?= base_url('tin-tuc.html') ?>">Tin tức</a></li>
					<li><a href="<?= base_url('khuyen-mai.html') ?>">Tin khuyến mại</a></li>
					<li><a href="<?= base_url('cam-ket-bao-mat-su-dung-thong-tin.html') ?>">Cam kết thông tin</a></li>
					<li><a href="#">Khiếu nại</a></li>
				</ul>
			</div>
			<div class="fot-col">
				<div class="fotitle">HỖ TRỢ KHÁCH HÀNG</div>
				<ul class="linklist">
					<li><a href="<?= base_url('lien-he.html') ?>">Liên hệ</a></li>
					<li><a href="<?= base_url('thanh-toan-mua-hang-tai-vuabanle.html') ?>">Phương thức thanh toán</a></li>
					<li><a href="<?= base_url('huong-dan-mua-hang.html') ?>">Hướng dẫn mua hàng</a></li>
					<li><a href="#">Chính sách đổi trả hàng</a></li>
					<li><a href="#">Trung tâm bảo hành</a></li>
					<li><a href="#">Báo phí vận chuyển</a></li>
					<li><a href="<?= base_url('chinh-sach-bao-hanh.html') ?>">Chính sách bảo hành</a></li>

				</ul>
			</div>
			<div class="fot-col2">
				<ul class="list-horiontal">
					<div class="fotitle">CÁCH THỨC THANH TOÁN</div>
					<ul class="list-horiontal payment-list">
						<li class="pay-icon ipayVisa" title=""></li>
						<li class="pay-icon ipayMaster" title=""></li>
						<li class="pay-icon ipayCOD" title=""></li>
					</ul>
					<div class="fotitle_title">
						CHỨNG NHẬN SÀN GIAO DỊCH TMDT
						<p>
							<a href="http://online.gov.vn/HomePage/CustomWebsiteDisplay.aspx?DocId=4058" class="spres-regester"> <img
								src="<?= base_url('public/font-end')?>/images/chungnhan.jpg"
								title="" alt="" /></a>
						</p>
					</div>
				</ul>

			</div>

			<div class="fot-col3">
				<div class="fotitle">THƯƠNG HIỆU NỔI TIẾNG</div>
				<div class="line">
					<div class="line1">
						<ul>
							<li>
								<?php foreach($get20Brands as $get20Brand): ?>
								<a href="#"> <?= $get20Brand['catName'] ?></a> -
								<?php endforeach ?> 
								<a href="#"> xem thêm</a></li>

						</ul>

					</div>
				</div>
				<div class="socal">
					<div class="share-icon">
						<a href="https://twitter.com/Vuabanlevn" ta class="twitter"></a><span> Twitter</span>
						<a href="https://www.facebook.com/Vuabanle.vn?ref=hl" class="facebook"></a><span>Facebook </span>
						<a	href="https://plus.google.com/107085357342806112435/posts" class="google"></a><span>Google</span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-------end.footer-top--->
	<div class="copy-footer">
		<div class="wrap">
		<?= $config->site_footer; ?>
		</div>
	</div>
	<!---------end.copy-footer--->
</div>
</div>
<!-------end#footer-top------->
</div>
<!-------end#page-all--->

</body>
</html>