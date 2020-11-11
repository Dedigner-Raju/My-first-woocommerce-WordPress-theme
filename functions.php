<?php
 

 // define template directory file 
 define ('THEME_URI', get_template_directory_uri() );
 define('THEME_PATH', get_template_directory() );


 include( THEME_PATH . '/inc/theme-file.php');
 include( THEME_PATH . '/inc/woocommerce.php');
 /* add hooks */

  add_action('wp_enqueue_scripts', 'xpent_scripts' ); 


  
  
 // add custom function for post type
  
 function xpent_theme_setup() {

    // Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Custom background color.
	add_theme_support(
		'custom-background',
		array(
			'default-color' => 'f5efe0',
		)
	);

	// Set content-width.
	global $content_width;
	if ( ! isset( $content_width ) ) {
		$content_width = 580;
	}


    add_theme_support( 'post-formats', array( 'aside', 'gallery','audio','video' ) );
   add_theme_support( 'automatic-feed-links' );
   add_theme_support( 'title-tag' );
   add_theme_support( 'post-thumbnails' );

   add_theme_support(
       'custom-logo',
       array(
           'height'      => 250,
           'width'       => 250,
           'flex-width'  => true,
           'flex-height' => true,
       )
   );
}

add_action( 'after_setup_theme', 'xpent_theme_setup' );


// register custom menu

if ( ! function_exists( 'xpent_register_nav_menu' ) ) {
 
    function xpent_register_nav_menu(){
        register_nav_menus( array(
            'primary_menu' => __( 'Primary Menu', 'xpent' ),
            'footer_menu'  => __( 'Footer Menu', 'xpent' ),
        ) );
    }
    add_action( 'init', 'xpent_register_nav_menu', 0 );
}

// register custom logo

function xpent_theme_logo_setup() {
	$defaults = array(
	'height'      => 150,
	'width'       => 370,
	'flex-height' => true,
	'flex-width'  => true,
	'header-text' => array( 'site-title', 'site-description' ),
    'unlink-homepage-logo' => true, 
	);
	add_theme_support( 'custom-logo', $defaults );
   }
   add_action( 'after_setup_theme', 'xpent_theme_logo_setup' );


 
   // add woocommerce action hooks

    add_action('woocommerce_before_main_content', 'xpent_theme_wrapper_start', 10);
    add_action('woocommerce_after_main_content', 'xpent_theme_wrapper_end', 10);
   // add xpent theme woocommerce products title add hook
    add_action('woocommerce_shop_loop_item_title', 'xpent_woocommerce_product_title', 10);
   // add xpent theme woocommerce product thumnail hook 
    add_action('woocommerce_before_shop_loop_item_title','xpent_woocommerce_product_thumnail', 10);
   // xpent theme add price and rating hook
    add_action('woocommerce_after_shop_loop_item_title','xpent_woocommerce_loop_rating_price', 10);

   // remove woocommerce action hooks
    remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
    remove_action( 'woocommerce_after_main_content', 'woocommerce_after_main_content', 10);
    //remove woocommerce products image link 
    remove_action( 'woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10);
    // xpent theme woocommerce product tile remove hook 
    remove_action('woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10);
    // xpnet theme woocommerce product thumnail remove 
    remove_action('woocommerce_before_shop_loop_item_title','woocommerce_template_loop_product_thumbnail', 10);
    // xpent theme woocommerce add to card hook remove
    remove_action('woocommerce_after_shop_loop_item','woocommerce_template_loop_add_to_cart', 10);
    // remove xpent theme price and reting hooks
    remove_action('woocommerce_after_shop_loop_item_title','woocommerce_template_loop_rating', 5);
    remove_action('woocommerce_after_shop_loop_item_title','woocommerce_template_loop_price', 10);
    
    
    
    

    
       // woocommerce  support for the xpent theme
        function xpent_woocommerce_support(){
            add_theme_support('woocommerce');
        }

        // add woocommerce theme support hooks for spent theme
         add_action('after_setup_theme', 'xpent_woocommerce_support');

?>