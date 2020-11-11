<?php

// outputs opening divs for the content
    function xpent_theme_wrapper_start(){
    echo '<section class="ptb-60"><div class="container"><div class="row">' ;
     }

    // outputs closing divs for the content
    function xpent_theme_wrapper_end(){
        echo '</div></div></section>';
    }

    // Remove woocommerce shop page title 

    function xpent_theme_woocommerce_page_title(){
        return;
    }
    // xpent theme woocommerce products title

    function xpent_woocommerce_product_title(){
        
    }

    // xpent theeme woocommerce product thumnail  
    function xpent_woocommerce_product_thumnail(){  ?>
      
     <div class="product-image"> 
      <a href="<?php the_permalink(); ?>"> <?php woocommerce_template_loop_product_thumbnail(); ?> </a>
        <div class="product-detail-inner">
          <div class="item-overlay">
            <ul>
              <li><?php woocommerce_template_loop_add_to_cart(); ?></li>
              <li><a href="#" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
              <li><a href="#" title="Compare"><i class="fa fa-random"></i></a></li>
          </ul>
        </div>
      </div>
    </div>


   <?php }


  // xpent theme woocommerce product price and rating 
  function xpent_woocommerce_loop_rating_price(){
   // echo ' <div class="item-title"> <a href="'. get_the_permalink().'"> '. get_the_title().'</a> </div>';
      
      ?>
          
          
          <div class="product-item-details">
          <div class="item-title"> <a href="<?php the_permalink() ?> "> <?php the_title() ?> </a> </div>
                  <div class="price-box"> 
                    <?php 
                    woocommerce_template_loop_price(); 
                    woocommerce_template_loop_rating();
                     ?>
                  <!--<div class="item-rating">
                    <div title="70%" class="rating-result"> <span style="width:70%"></span> </div>
                    </div>-->  
                  </div>
                </div>


<?php
  }
?>