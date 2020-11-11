<?php get_header(); ?>


     <div class="container">
      <div class="row">
      <?php get_template_part('/lib/sidebar/right-sidebar'); ?>

        <div class="col-md-9 col-sm-8">

             <?php woocommerce_content(); ?>

         </div>
       </div>
    </div>

<?php get_footer(); ?>