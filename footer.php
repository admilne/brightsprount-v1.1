<!-- FOOTER.PHP -->

			<?php

				$testimonials = get_field('testimonials');

				$customLogoID = get_theme_mod('custom_logo');
				$logo = wp_get_attachment_image_src($customLogoID, 'large')[0];

			?>

			</div><!-- END content -->

			<?php if( $testimonials ): ?>
				<?php get_template_part('template-parts/blocks/testimonials', null, $testimonials); ?>
			<?php endif; ?>

			<div class="footer">

				<div class="page-container page-container--narrow">

					<div class="footer-columns">
						<div class="column">
							
							<?php if ( dynamic_sidebar('footer_text') ) : else : endif; ?>

							<div class="footer__social-media-icons">
								<a href="https://www.facebook.com/brightsproutmarketing" target="_blank"><img src="<?php echo THEME_IMAGES; ?>icon-facebook.svg" alt="Facebook"></a>
								<a href="https://www.instagram.com/brightsproutmarketing" target="_blank"><img src="<?php echo THEME_IMAGES; ?>icon-instagram.svg" alt="Instagram"></a>
								<a href="https://www.linkedin.com/company/bright-sprout" target="_blank"><img src="<?php echo THEME_IMAGES; ?>icon-linkedin.svg" alt="LinkedIn"></a>
							</div><!-- /.footer__social-media-icons -->
							<?php if ( dynamic_sidebar('copyright') ) : else : endif; ?>
						</div>

						<div class="column" id="footer-contact-form">
							<?php echo do_shortcode('[contact-form-7 id="5" title="Contact form 1"]'); ?>
						</div>
					</div>

					<a href="<?php echo home_url(); ?>" class="footer-logo"><img src="<?php echo $logo; ?>" alt=""></a>
				
				
				</div><!-- /.page-container -->

			</div><!-- END footer -->

			<?php wp_footer(); ?>

		</div><!-- END page-wrapper -->
		
	</body>
</html>
