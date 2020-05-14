<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package under2
 */

get_header(); ?>

<?php if ( has_post_thumbnail() ): ?>
<?php 
    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full'); 
?>
<?php endif; ?>


<div id="holder" class="holder " style="">

  <div id="bymes" class="bymes">
    
     <?php get_sidebar(); ?> 


  </div>

  <div id="content" class="pagecontent" style="background-image:url('<?php echo $image[0]; ?>');background-repeat: no-repeat;background-size: 100%;">
    <?php
    while ( have_posts() ) : the_post();

      get_template_part( 'template-parts/content', 'page' );
      // If comments are open or we have at least one comment, load up the comment template.
      if ( comments_open() || get_comments_number() ) :
        comments_template();
      endif;

    endwhile; // End of the loop.
    ?>

  </div>

    

</div>

<div class="footer aligncenter">
        <hr>
    	<a href="http://ashshaosh.ru">:П:п</a>
      <br><br>
    </div>

<?php
get_footer();