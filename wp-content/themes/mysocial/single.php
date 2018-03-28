<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package mysocial
 */

get_header(); 

if ( function_exists( 'mysocial_set_post_views' ) ) :
	mysocial_set_post_views(get_the_ID());
endif;
?>

	<div id="primary" class="content-area">
		<div class="breadcrumbs clear">
			<h1>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php _e( 'Home', 'mysocial' ); ?></a> &rarr; <?php mysocial_first_category(); ?>
			</h1>	
		</div><!-- .breadcrumbs -->		
		<main id="main" class="site-main" >

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'single' );

			// the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
