
<?php if(is_home() || is_front_page()): ?>
</div><!-- #content.site-homepage -->
<?php else: ?>
		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- #content.site-content -->
<?php endif; ?>

<!-- footer-widget -->
<footer id="colophon" class="site-footer">
	<div class="evt-footer-widget">
		<div class="container">
			<div class="evt-main-footer">
				<div class="row">
					<div class="col evt-footer-widget-col evision-animate fadeIn">
						<?php //dynamic_sidebar( 'footer-1' ); ?>
						<?php get_template_part('template-parts/markup/widget-footer-1');?>
					</div>
					<div class="col evt-footer-widget-col evision-animate fadeIn">
						<?php //dynamic_sidebar( 'footer-2' ); ?>
						<?php get_template_part('template-parts/markup/widget-footer-2');?>
					</div>
					<div class="col evt-footer-widget-col evision-animate fadeIn">
						<?php //dynamic_sidebar( 'footer-3' ); ?>
						<?php get_template_part('template-parts/markup/widget-footer-3');?>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="site-info">
		<?php
		/* translators: %s: CMS name, i.e. WordPress. */
		// printf( esc_html__( 'Proudly powered by %s', 'business-click' ), 'WordPress' );
		?>
		Copyright &copy; All right reserved
		<span class="sep"> | </span>
			<?php
			/* translators: 1: Theme name, 2: Theme author. */
			printf( esc_html__( 'Theme: %1$s by %2$s.', 'business-click' ), 'Business Click Pro', '<a href="http://evisionthemes.com/">eVisionThemes</a>' );
			?>
	</div><!-- .site-info -->
</footer><!-- #colophon -->