<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package under2
 */

get_header(); ?>

	<div class="columns is-mobile is-gapless"> 
  <div class="column  is-1 ">
	  <div class=s is-primary ">
	<?php get_sidebar(); ?>
		  </div>
  </div>
  <div id="primary" class="column is-10  content-area">

    <main id="main" class="site-main" role="main">
		
		<?php
		while ( have_posts() ) : the_post();

			
		
			get_template_part( 'template-parts/content', get_post_format() );
			
//			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
