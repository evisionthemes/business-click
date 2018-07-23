<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package business-click
 */

get_header();
?>

<div class="container">
	<div class="row">
		<section id="primary" class="content-area">
			<main id="main" class="site-main">


			<?php if ( have_posts() ) : ?>

				<header class="page-header">
					<h1 class="page-title">
						<?php
						/* translators: %s: search query. */
						printf( esc_html__( 'Search Results for: %s', 'business-click' ), '<span>' . get_search_query() . '</span>' );
						?>
					</h1>
				</header><!-- .page-header -->

				<?php
				/* Start the Loop */
				while ( have_posts() ) :
					the_post(); ?>

				<div class="entry-summary">
					<?php if ( has_post_thumbnail() ): ?>
			          <a href="<?php echo get_permalink();?>">
			          <?php the_post_thumbnail( 'medium', array( 'class' => 'aligncenter' ) ); ?>
			        </a>
			        <?php endif ?>

					<?php the_excerpt(); ?>
				</div><!-- .entry-summary --><?php

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

				endwhile;

				the_posts_navigation();

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif;
				?>

			</main><!-- #main -->
		</section><!-- #primary -->
		
		<?php get_sidebar();?>
	</div>
</div>

<?php
get_footer();
