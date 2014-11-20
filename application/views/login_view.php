<div class="wrap">
	<div class="login_dk" style="padding-top:10px;">
		<div class="plans_table">
			<h2 class="h2-login">Đăng nhập</h2>
			<div id="login1">

				<h2><span class="fontawesome-lock"></span>Khách hàng đã đăng ký</h2>

				<form action="<?= base_url('dang-nhap/kiem-tra'); ?>" method="POST">

					<fieldset>
						<p>
							<label for="email">E-mail (*) </label>
						</p>
						<p>
							<input type="Text" id="email" name="email" value="<?php echo set_value('email'); ?>">
						</p>
						<!-- JS because of IE support; better: placeholder="mail@address.com" -->

						<p>
							<label for="password">Mật khẩu (*)</label>
						</p>
						<p>
							<input type="password" id="password" name="password">
						</p>
						<!-- JS because of IE support; better: placeholder="password" -->
						<div class="error_login">
						<?php echo validation_errors(); ?> 
						</div>
						<p>
							<input type="submit" value="Đăng nhập">
						</p>

					</fieldset>

				</form>

			</div>
			<!-- end login -->
			<div id="res">

				<h2><span class="fontawesome-lock"></span>Khách hàng chưa đăng ký</h2>

				<form action="<?= base_url('dang-ky'); ?>" method="POST">

					<fieldset>

						<p>
							<label>Bạn là khách hàng mới của vuabanle.vn? Vui lòng đăng ký và trải nghiệm mua hàng online tại vuabanle.vn.</label>
						</p>
						<p>
							<input type="submit" value="Đăng ký">
						</p>

					</fieldset>

				</form>

			</div>
			<!-- end login -->

		</div>
	</div>

</div>


<!-----end#content----->