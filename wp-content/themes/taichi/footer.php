<div class="background-footer">
	<div class="container">
		<div class="row">
			<div class="col-md-7">
				<h1 class="text-footer"><?php echo get_theme_mod( 'footer_setting' ); ?></h1>

				<ul class="list-footer">
					<li>
						<p><?php echo get_theme_mod( 'footer_setting_2' ); ?></p>
					</li>

					<li>
						<a href="tel:(+84) 965 147 117"><?php echo get_theme_mod( 'footer_setting_3' ); ?></a>
					</li>

					<li>
						<a href="mailto:info@luxuo.vn"><?php echo get_theme_mod( 'footer_setting_4' ); ?></a>
					</li>
				</ul>
			</div>

			<div class="col-md-5">
				<h1 class="text-footer"><?php echo get_theme_mod( 'footer_setting_5' ); ?></h1>

				<ul class="list-footer">
					<li><p><?php echo get_theme_mod( 'footer_setting_6' ); ?></p></li>

					<li class="input-button">
						<?php echo do_shortcode( '[contact-form-7 id="79" title="Contact form 1"]' ); ?>
					</li>

					<li class="item-footer">
						<i class="fab fa-facebook-f"></i>
						<i class="fab fa-instagram"></i>
						<i class="fab fa-twitter"></i>
						<i class="fab fa-pinterest-p"></i>
					</li>
				</ul>
			</div>
		</div>
		<hr>

		<p class="text-center"><?php echo get_theme_mod( 'footer_setting_7' ); ?></p>
	</div>
</div>





<?php wp_footer() ?>

<!-- Thư Viện jquery -->
<script src="<?php bloginfo('template_directory') ?>/vendor/jquery/jquery-3.6.0.min.js"></script>

<!-- bootstrap -->
<script src="<?php bloginfo('template_directory') ?>/vendor/bootstrap5/js/bootstrap.min.js"></script>

<!-- Thư Viện carousel js -->
<script src="<?php bloginfo('template_directory') ?>/vendor/OwlCarousel/dist/owl.carousel.min.js"></script>

<!-- My Js -->
<script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/style.js"></script>


</body>
</html>