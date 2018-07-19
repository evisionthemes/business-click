<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package business-click
 */

get_header();
?>

<section id="evt-page-banner" class="">

	<div class="evt-banner-image evt-overlay position-relative" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/img/404.jpg');">
		<div class="evt-banner-caption">
			<h2 class="evt-title text-white mb-4">Oops! That page can&rsquo;t be found.</h2>
			<p>It looks like nothing was found at this location.</p>
			<?php
			get_search_form();
			?>			
		</div>
	</div>

</section>

<div class="container d-none">
	<div class="row">
		<div id="primary" class="content-area text-center">
			<main id="main" class="site-main">

				<section class="error-404 not-found">
					<header class="page-header">
						<h1 class="page-title text-center"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'business-click' ); ?></h1>
					</header><!-- .page-header -->

					<div class="page-content">
						<p><?php esc_html_e( 'It looks like nothing was found at this location.', 'business-click' ); ?></p>

						<?php
						get_search_form();
						?>

					</div><!-- .page-content -->
				</section><!-- .error-404 -->

			</main><!-- #main -->
		</div><!-- #primary -->
	</div>
</div>
<?php
get_footer();
