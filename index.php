
<?php get_header(); 
/**
 * The main template file
 * Theme template home page
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage xpent
 * @since xpent 1.0
 */
?>

<!-- CONTAIN START-->
<section class="ptb-60">
    <div class="container">
      <div class="row">
       <?php 
           if( have_posts()):
           while( have_posts()): 
            the_post();
       ?>
        <div class="col-xs-12">
          <?php the_content(); ?>
        </div>
        <?php
            endwhile;
            endif;
        ?>

      </div>
    </div>
  </section>
 
<?php get_footer(); ?>
